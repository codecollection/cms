<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 自定义控制器
 */
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->lang->load('manager', 'zh_cn');
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
        $this->echoAjax(0, '');
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

}

/**
 * 父控制器
 */
class CAdminBase extends MY_Controller {

    /**
     * 当前正在访问的模块标识
     * @var string
     */
    public $activeModule = '';

    
    /**
     * 当前控制器id
     * @var string
     */
    protected $controllerId = '';

    public $level = "";
    /**
     * 控制器名称
     * @var string
     */
    protected $controllerTitle = '';

    /**
     * 与当前控制器绑定的模型对象
     * @var OBJECT
     */
    protected $bindModel = NULL;

    /**
     * 前端显示的css/js文件
     * @var array
     */
    protected $frontFile = array('css' => array(), 'js' => array(), 'header' => array());

    /**
     * 渲染的数据
     * @var array
     */
    protected $renderData = array();

    /**
     * 启用权限检测
     * @var boolean
     */
    private $isPermission = true;

    public $subject = '';
    
    public $shcId = 2;
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
        //$this->load->model('message_model', 'msg');

        $this->bindModel = $this->{$this->controllerId};

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
     * 设置渲染的数据
     * @param type $name
     * @param type $value
     */
    public function setData($name, $value) {

        $this->renderData[$name] = $value;
    }

    /**
     * 列表
     * @param array $params
     */
    public function lists($params = array()) {

        $this->activeModule = $this->level."01";
        //检测权限
        $this->checkPermission($this->level."01");
        $page = $this->input->get_post('p');

        $this->bindModel->page($page, PAGESIZE);
        $lists = $this->bindModel->search();

        $data = array('page' => RKit::getPageLink("/back/" . strtolower(get_class($this)) . "?" . http_build_query($params), $lists['count']),
            
            'list' => $lists,
        );

        $this->renderAdminView($this->viewDir(), $data);
    }

    /**
     * 添加
     */
    public function add() {

        $this->checkPermission($this->controllerId . '_ADD'); //检测权限

        $data = $this->bindModel->getDefaultValue();
        $renderData = array('data' => $data, 'pageId' => 'p_add_' . $this->controllerId);

        $this->renderAdminView($this->controllerId . '/edit', array_merge($renderData, array()));
    }

    /**
     * 编辑
     */
    public function edit() {

        //检测权限

        $id = $this->input->get_post('id');

        $data = $this->bindModel->find($id);
        $this->renderAdminView($this->controllerId . '/edit', array('data' => $data, 'pageId' => 'p_add_' . $this->controllerId));
    }

    /**
     * 保存
     */
    public function save() {

        //检测权限

        $id = $this->input->get_post('id');
        $data = $this->input->get_post('data');

        $status = $this->bindModel->setAttrs($data)->setPkValue($id)->save($id == 0);
        $msg = '';

        if ($id == 0) {
            $msg = sprintf(lang($status ? 'model_insert_success' : 'model_insert_fail'), $this->controllerTitle);
        } else {
            $msg = sprintf(lang($status ? 'model_update_success' : 'model_update_fail'), $this->controllerTitle);
        }

        $err = $this->bindModel->getFirstError();
        $this->log($msg);
        if ($status || empty($err[0])) {
            $this->echoAjax(0, $msg, array('url' => '/admin/' . $this->controllerId));
        } else {
            $this->echoAjax(100, $err[1], array('tag' => $err[0]));
        }
    }

    /**
     * 删除
     */
    public function delete() {

        //检测权限
        $ids = $this->input->get_post('id'); //'2,3,4,5,6,7,8';

        $status = $this->bindModel->deletes($ids);
        $msg = sprintf(lang($status ? 'model_delete_success' : 'model_delete_fail'), $this->controllerTitle);
        $this->log($msg);

        $this->echoAjax(0, $msg);
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
        
        $viewHtml = $this->load->view($viewName, array_merge($data, $this->renderData), true);
        $frameData = array(
            'mainContent' => $viewHtml,
            'activedModule' => $this->activeModule,
            'navItem' => $menu['item'],
            'userNav' => $menu['userModules'],
            'nav' => $menu['nav'],
            'thisc' => $this,
            'js' => implode("\r\n", $this->frontFile['js']),
            'css' => implode("\r\n", $this->frontFile['css']),
            'header' => implode("\r\n", $this->frontFile['header']),
        );

        $this->load->view("back/frame", array_merge($frameData, $userInfo, $this->renderData, $data));
    }

    /**
     * 显示导出文件的模板页面
     * @param string $viewName
     * @param array $data
     */
    protected function renderHTMLView($viewName, $data = array()) {

        $data['thisc'] = $this;
        $viewHtml = $this->load->view('admin/' . $viewName, array_merge($data, $this->renderData), true);
        $frameData = array(
            'mainContent' => $viewHtml,
            'activedModule' => $this->activeModule,
            'thisc' => $this,
            'js' => implode("\r\n", $this->frontFile['js']),
            'css' => implode("\r\n", $this->frontFile['css']),
            'header' => implode("\r\n", $this->frontFile['header']),
        );

        $this->load->view("admin/frameHTML", array_merge($frameData, $this->renderData, $data));
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
            $value = strstr($value, 'http') ? $value : STATIC_RES_PATH . '/js/' . $value;
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
     * 
     * 根据权限显示按钮
     * @param type $modId
     * @param type $class
     * @param type $title
     * @param type $css_name
     * @param string $url
     * @return type
     */
    public function showButton($modId, $class, $title, $css_name, $url = "javascript:;") {
        $mods = $this->rauth->getUserInfo('userRoleAccess');

        $cssCheck = '';
        if (in_array($modId, $mods)) {

            $cssCheck = $url == "javascript:;" ? ' J_act-list ' . ' ' . $css_name . " " : ' ' . $css_name . "";
            //return ($isEvent ? ' J_act-list ' : '') . ' z-' . $css_name . ' ';
        } else {
            $url = "javascript:;";
            $cssCheck = " s-tip z-disable";
        }

        return "<a href='" . $url . "' class='" . $class . $cssCheck . "' >$title</a>";
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
    public function viewDir($type = 1){
        $viewDir = "";
        switch ($type){
            case 1: $viewDir =  "back/{$this->controllerId}/list";
                break;
            case 2 : $viewDir = "back/{$this->controllerId}/edit";
                break;
            default : $viewDir =  "back/{$this->controllerId}/list";
        }
        return  $viewDir;
    }
    
}

/**
 * app的调用接口的父控制器
 */
class App_Controller extends CAdminBase {

    protected $bindModel = "";

    public $subject = "TF";

    public $schId = 2;
    public function __construct() {
        parent::__construct();

        if (!empty($this->controllerId)) {

            $this->load->model("app/" . $this->controllerId . '_model', $this->controllerId);
            $this->bindModel = $this->{$this->controllerId};
        }

        if($this->input->get_post('subject')){
            $this->subject = $this->input->get_post('subject');
        }
    }

}
