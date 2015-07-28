<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 自定义控制器
 */
class MY_Controller extends CI_Controller {

    protected $verify = "abc";
    
    protected $fileType = 'ico,jpg,jpeg,gif,png,bmp,psd,swf,flv,fla,pdf,doc,docx,rtf,txt,wps,xls,xlsx,csv,ppt,pptx,mp4,mpg,wmv,mp3,wav,zip,rar';
    
    /**
     * 前端显示的css/js文件
     * @var array
     */
    protected $frontFile = array('css' => array(), 'js' => array(), 'header' => array());

    /**
     * 控制器名称
     * @var string
     */
    protected $controllerTitle = '';
    
    /**
     * 自动配置需要处理显示的数据 ,如 状态和对应的值
     * @var type array('txt'=>'','value'=>'',color=>'')
     */
    protected $insertNav = array();
   
    
    /**
     * 当前位置导航 
     * @var array("url"=>"","title"=>"")
     */
    protected $minNav = array();
    
     /**
     * 当前正在访问的模块标识
     * @var string
     */
    public $activeModule = '';
    public $level = "";
    
    
    protected $startMicrotime = 0;
    /**
     * 渲染的数据
     * @var array
     */
    protected $renderData = array();
    public function __construct() {
        parent::__construct();
        $this->lang->load('manager', 'zh_cn');
        $this->startMicrotime = $this->microtime_float();
    }

    /**
     *
     * 获取请求数据
     *
     * @param type $field
     * @return type
     */
    public function getData($field) {
        
        return $this->input->get_post($field);
        
    }
    
    /**
     * 获取配置
     * 
     * @param type $key
     * @return type
     */
    public function getItem($key){
        
        return RConfig::get($key);
    }

    /**
     * 输出ajax信息
     * @param int $statusCode
     * @param string $msg
     * @param array $data
     */
    protected function echoAjax($statusCode, $msg, $data = array()) {

        $_SERVER['HTTP_REFERER'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "";
        $response = array(
            'status' => (int) $statusCode,
            'msg' => $msg,
            'url' => $_SERVER['HTTP_REFERER'],
        );

        RKit::printJson(array_merge($response, $data));
    }
    
    protected function successAjax(){
        $this->echoAjax(0, "操作成功");
    }
    /**
     * 载入模型
     * @param type $models
     */
    protected function loadModel($models){
        $models = (array)$models;
        foreach ($models as $m) {
            $pos = strrpos($m, '/');

            if ($pos !== FALSE) {
                $this->load->model($m . '_model', substr($m, $pos + 1));
            } else {
                $this->load->model($m . '_model', $m);
            }
        }
    }
    
    protected function microtime_float(){
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
    
    public function echoTime($t = 0,$f = NULL){
        
        $t = $t == 0 ? time() : $t;
        if($f === NULL){
            $f = "Y-m-d";
        }
        
        return date($f,$t);
    }

    /**
     * 设置渲染的数据
     * @param type $name
     * @param type $value
     */
    public function setData($name, $value) {

        $this->renderData[$name] = $value;
    }
    
    /**
     * 设置迷你导航
     * @param type $nav
     */
    protected function setMinNav($nav){
        
        $this->minNav = array_merge($this->minNav,array($nav));
    }
    
    /**
     * 设置搜索
     */
    protected function setSearch(){
        
        $s = RKit::getData("sv","st");
        
        if(!empty($s['sv']) && !empty($s['st'])){
            $this->bindModel->like($s['st'],$s['sv']);
        }
        
    }
    
    /**
     * 增加js文件
     * @param type $file
     */
    public function addJs($file) {


        if (!is_array($file)) {
            $file = array($file);
        }

        foreach ($file as $value) {
            $value = strstr($value, 'http') ? $value : STATIC_RES_PATH . $value;
            
            $this->frontFile['js'][] = '<script type="text/javascript" src="' . $value . '" ></script>';
        }

        return $this;
    }

    /**
     * 增加css
     * @param type $file
     */
    public function addCss($file) {

        if (!is_array($file)) {
            $file = array($file);
        }

        foreach ($file as $value) {
            $this->frontFile['css'][] = '<link rel="stylesheet" type="text/css" href="' . STATIC_RES_PATH . '/css/' . $value . '" />';
        }

        return $this;
    }
    
    /**
     * 
     * @param type $dirName
     */
    public function loadView($dirName,$data = array()){
        
        $data['c'] = $this;
        $this->echoView("{$dirName}",$data);
    }
    
    /**
     * 输出视图内容
     * @param type $dirName
     * @param type $data
     */
    private function echoView($dirName,$data = array()){
        
        echo $this->load->view($dirName,$data,true);
    }
    
    /**
     * 加载上传相册按钮的html
     */
    public function loadUploadFile(){
        $t = $this->getData("type");
        $vid = $this->getData('vid');
        $type = empty($t) ? "single_upload" : $t;
        
        $timestamp = time();
        $token = md5($this->verify . $timestamp);
        
        $data = array(
            'type'=>$type,
            "vid"=>$vid,
            "timestamp" => $timestamp,
            "token" => $token,
            "callfun" => $type,
            "limitSize" => 1024*1024*10,
        );
        $this->loadView("uploadfiles",$data);
    }
    
    public function getResourceFiles($infoId,$modelId){
        
        $this->loadModel("resource");
        
        $resource = $this->resource->getFiles($infoId,$modelId);
        return $resource;
        
    }
}

/**
 * 父控制器
 */
class CAdminBase extends MY_Controller {

   
    /**
     * 当前控制器id
     * @var string
     */
    protected $controllerId = '';

    public $topLevel = "";
    
   
    
    protected $resourceInfoTabel = "cms_resource_info";
    /**
     * 与当前控制器绑定的模型对象
     * @var OBJECT
     */
    protected $bindModel = NULL;

    
    /**
     * 启用权限检测
     * @var boolean
     */
    private $isPermission = true;

    
    /**
     * 构造函数
     */
    public function __construct() {

        parent::__construct();

        //$this->load->library(array('RAuth'));

        if (get_class($this) == 'Login' || get_class($this) == "Upload") {//非登录控制器需要验证是否已登录
            
        } else {
            $status = $this->admin->isLogin();
            if (!$status) {
                redirect('/back/login');
            }
        }

        $this->load->model($this->controllerId . '_model', $this->controllerId);
        $this->bindModel = $this->{$this->controllerId};
        
        if (!empty($this->insertNav)){
            foreach($this->insertNav as $k => $v){
               
                $this->vars->set_fields($k,$v);
            }
        }
        
        //$this->load->model('message_model', 'msg');

    }

    /**
     * 禁用权限检测
     */
    protected function disablePermission() {

        $this->isPermission = false;
    }

    /**
     * 启用权限检测
     */
    protected function enablePermission() {

        $this->isPermission = true;
    }

    /**
     * 列表
     * @param array $params
     */
    public function lists($params = array()) {

        //设置活动的模块
        $this->activeModule = $this->level;
        //检测权限
        $this->checkPermission($this->level);
        
        $page = $this->getData('p');
        
        $this->bindModel->page($page, PAGESIZE);
        
        $this->setSearch();
        $lists = $this->bindModel->search();

        $data = array('page' => RKit::getPageLink("/back/" . strtolower(get_class($this)) . "?" . http_build_query($params), $lists['count']),
            'list' => $lists,
        );

        $this->setMinNav(array('title'=>  $this->controllerTitle . "列表",'url'=>"/back/".$this->controllerId));
        $this->renderAdminView($this->viewDir(), $data);
    }

    /**
     * 添加
     */
    public function add() {

        $this->activeModule = $this->level."02";
        $this->checkPermission($this->level . '02'); //检测权限

        $data = $this->bindModel->getDefaultValue();
        
        $renderData = array('data' => $data);

        $this->setMinNav(array('title'=> "添加" . $this->controllerTitle ,'url'=>"/back/".$this->controllerId . "/edit"));
        
        $this->renderAdminView($this->viewDir(2), array_merge($renderData, array()));
    }

    /**
     * 编辑
     */
    public function edit() {

        $this->activeModule = $this->level."02";
        //检测权限
        $this->checkPermission($this->level . '02');
        $id = $this->getData('id');

        $data = $this->bindModel->find($id);
        
        
        $this->setMinNav(array('title'=>"编辑" . $this->controllerTitle,'url'=>"/back/".$this->controllerId . "/edit?id=" . $id));
        
        $this->renderAdminView($this->viewDir(2), array('data' => $data, 'pageId' => 'p_add_' . $this->controllerId));
    }

    /**
     * 保存
     */
    public function save() {
        
        $this->activeModule = $this->level."02";
        //检测权限
        $this->checkPermission($this->level . '02');
        
        $id = $this->getData('id');
        $data = $this->getData('data');
        $files = $this->getData("file");
        $modelId = $this->getData("modelId");
        $status = $this->bindModel->setAttrs($data)->setPkValue($id)->save($id == 0);
        $msg = '';

        if ($id > 0) {
            $msg = sprintf(lang($status ? 'update_success' : 'update_fail'), $this->controllerTitle);
        } else {
            $msg = sprintf(lang($status ? 'insert_success' : 'insert_fail'), $this->controllerTitle);
        }
        
        if(!empty($files)){
            $files = !is_array($files) ? (array)$files : $files;
            
            foreach ($files as $file){
                
                if($file["action"] == "edit"){ continue;}
                $fileData = array(
                    'info_id' => $id > 0 ? $id : $status,
                    'model_id' => isset($data["model_id"]) ? $data['model_id'] : $modelId,
                    'resource_id' => $file['resourceId'],
                    'cdate' => time(),
                );
                
                $this->db->insert($this->resourceInfoTabel,$fileData);
            }
        }
        $this->echoAjax(0, $msg);
    }

    /**
     * 删除
     */
    public function delete() {

        $this->activeModule = $this->level."01";
        //检测权限 
        $this->checkPermission($this->level . '02');
        
        $params = $this->getData("params");
        
        $status = $this->bindModel->deletes($params);
        $msg = sprintf(lang($status ? 'delete_success' : 'delete_fail'), $this->controllerTitle);

        $this->echoAjax(0, $msg);
    }

    /**
     * 修改排序
     */
    public function order(){
        
        $params = $this->getData("params");
        
        if(empty($params) || !is_array($params)){
            
        }
        foreach($params as $k => $v){
            
            $this->bindModel->order($v['id'],$v['val']);
        }
        
        $this->echoAjax(0, lang('update_order'));
    }
    
    /**
     * 更改状态
     */
    public function status(){
        
        $id = $this->getData('id');
        $status = $this->getData("status");
        
        $this->bindModel->status($id,$status);
        
        $this->successAjax();
    }
   
    /**
     * 检测权限
     * @param string $moduleIdentity
     * @param boolean $isReturn
     */
    public function checkPermission($moduleIdentity, $isReturn = false) {
        
        $msg = '';

        if (empty($moduleIdentity)) {
            $msg = '未知的页面';
        } else {
            $msg = $this->admin->isValid($moduleIdentity);
        }

        if ($msg !== true) {
            if ($isReturn)
                return false;
            $this->showRefusalPage($msg);
        }

        if ($isReturn) {
            return true;
        }

        //$this->log(sprintf(lang('page_access'), $this->controllerTitle));
    }

    /**
     * 显示管理系统的视图
     * @param string $viewName
     * @param array $data
     */
    protected function renderAdminView($viewName, $data = array()) {

        $userInfo = $this->admin->getUserInfo();
        $data['thisc'] = $this;

        $menu = NavPanel::getInstance()->getMenus($this->activeModule,$this->level);
        
        //迷你导航
        $minNav = array_merge($menu["minNav"],  $this->minNav);
        
        $viewHtml = $this->load->view($viewName, array_merge($data, $this->renderData,
            array('nav' => $menu['nav'],'minNav'=>$minNav)), true);
        $frameData = array(
            'mainContent' => $viewHtml,
            'activedModule' => $this->activeModule,
            'navItem' => $menu['item'],
            'thisc' => $this,
            'microtime' => $this->microtime_float() - $this->startMicrotime,
            'js' => implode("\r\n", $this->frontFile['js']),
            'css' => implode("\r\n", $this->frontFile['css']),
            'header' => implode("\r\n", $this->frontFile['header']),
            'admin' => array("group"=>$this->admin->getUserInfo("g_name"),"name"=>$this->admin->getUserInfo("aname")),
        );
        $this->load->view("back/frame", array_merge($frameData, $userInfo, $this->renderData, $data));
    }
    

    /**
     * 增加header
     * @param type $tag
     * @return \CAdminBase
     */
    public function addHeader($tag) {

        $this->frontFile['header'][] = $tag;
        return $this;
    }

    /**
     * 显示访问拒绝页面
     * @param string/int $msg
     */
    private function showRefusalPage($msg) {

        if (IS_DEBUG)
            return false;

        if (is_numeric($msg)) {
            switch ((int) $msg) {
                case -1:
                    $msg = '登录超时，请重新登录';
                    break;
                case -2:
                    $msg = '用户不存在';
                    break;
                case -3:
                    $msg = '访问拒绝';
                    break;
            }
        }

        if (!empty($msg)) {
            $this->log($msg);
            //redirect('/admin/login');
            $this->load->view('admin/refusal', array('message' => $msg));
        }

        exit;
    }

    /**
     * 记录日志
     * @param string $msg
     */
    protected function log($msg) {

        RKit::appendFileLog($this->rauth->getUserInfo('employmentId'), $this->rauth->getUserInfo('loginName'), $this->activeModule, $msg);
    }


    /**
     * 根据权限等信息显示按钮，没有权限不显示按钮
     * 
     * @param type $level
     * @param type $url
     * @param type $title
     * @param type $css
     */
    public function echoButton($level,$url, $title, $css = 'btn') {
        
        if($this->admin->isValid($level)){
            echo '<a href="'.$url.'" class="'.$css.'">'.$title.'</a>';
        }
        
    }

    /**
     * 检查权限
     */
    public function checkPerStr($moduleIdentity) {
        return $this->checkPermission($moduleIdentity, true) ? "true" : "false";
    }

    /**
     * 返回列表views的目录
     * 
     * @param type $type 1= list 2 =add和edit
     * @return type
     */
    public function viewDir($type = 1,$file = "list"){
        $viewDir = "";
        switch ($type){
            case 1: $viewDir =  "back/{$this->controllerId}/list";
                break;
            case 2 : $viewDir = "back/{$this->controllerId}/edit";
                break;
            default : $viewDir =  "back/{$this->controllerId}/{$file}";
        }
        return  $viewDir;
    }
    /**
     * 获取模板
     */
    protected function getTpl(){
        
        $this->load->helper("directory");
        $files = directory_map("./application/views/front/".TEMPLATE);
        $coverTpl = $listTpl = $detialTpl = array(array("txt"=>"默认模板","value"=>""));
        
        foreach ($files as $file) {
            $f = array("txt"=>$file,"value"=>$file);
            if(preg_match("~cover~", $file)){
                array_push($coverTpl, $f);
            }
            if(preg_match("~list~", $file)){
                array_push($listTpl, $f);
            }
            if(preg_match("~content~", $file)){
                array_push($detialTpl, $f);
            }
        }
        
        $this->vars->set_fields("tpl_index",$coverTpl);
        $this->vars->set_fields("tpl_list",$listTpl);
        $this->vars->set_fields("tpl_content",$detialTpl);
    }
}

require_once(dirname(__file__).'/Base_Controller.php');
require_once(dirname(__file__).'/APP_Controller.php');
require_once(dirname(__file__).'/User_Controller.php');
require_once(dirname(__file__).'/WX_Controller.php');