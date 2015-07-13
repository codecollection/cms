<?php

/**
 * 前端基础类
 */
class CBase extends MY_Controller{
    
    /**
     * 分类ID
     * @var type 
     */
    public $cid = 0;
    /**
     * 信息ID
     * @var type 
     */
    public $id = 0 ;
    /**
     * 信息的模型ID
     * @var type 
     */
    public $modelId = 0;
    
    public $tpl = "";
    public function __construct() {
        parent::__construct();
        $this->loadModel("cate");
        $this->loadModel("info");
        
        $this->tpl = TEMPLATE;
    }
    
    /**
     * 显示导出文件的模板页面
     * @param string $viewName
     * @param array $data
     */
    protected function renderHTMLView($viewName, $data = array()) {

        
        $dir = "front/{$this->tpl}/{$viewName}";
        
        $this->renderView($dir, $data);
        
    }
    
    /**
     * 显示管理系统的视图
     * @param string $viewName
     * @param array $data
     */
    protected function renderUserView($viewName, $data = array()) {

        $data['thisc'] = $this;
        
        $menu = NavPanel::getInstance()->getUserMenus($this->activeModule,$this->level);
        
        $viewHtml = $this->load->view("user/".$viewName, array_merge($data, $this->renderData,array('nav' => $menu['nav'])), true);
        $frameData = array(
            'mainContent' => $viewHtml,
            'thisc' => $this,
            'navItem' => $menu['item'],
            'microtime' => $this->microtime_float() - $this->startMicrotime,
        );
        $this->load->view("user/frame", array_merge($frameData, $this->renderData, $data));
    }
    
    /**
     * 加载视图
     * @param type $dir 视图文件
     * @param type $data
     */
    protected function renderView($dir,$data = array()){
        
        $frameData = array(
            
            'c' => $this,
            "user" => isset($_SESSION["user"]) ? $_SESSION["user"] : array(),
        );
        
        $this->load->view($dir, array_merge($frameData, $data,  $this->renderData));
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
     * 
     * @param type $modelId
     */
    protected function setModel($modelId){
        
        $this->loadModel("model");
        
        $modelName = $this->model->getField($modelId,"model_name"); 
        
        $this->info->tableName = $modelName;
        $this->info->setPk($modelName."_id");
    }
    
    
    /**
     * 添加
     */
    public function add() {

        $data = $this->bindModel->getDefaultValue();
        
        $renderData = array('data' => $data);

        $this->renderUserView($this->controllerId."/edit", array_merge($renderData, array()));
    }

    /**
     * 编辑
     */
    public function edit() {

        $id = $this->getData('id');

        $data = $this->bindModel->find($id);
        
        $this->renderUserView($this->controllerId."/edit", array('data' => $data, 'pageId' => 'p_add_' . $this->controllerId));
    }

    /**
     * 保存
     */
    public function save() {
        
        $id = $this->getData('id');
        $data = $this->getData('data');
        
        $status = $this->bindModel->setAttrs($data)->setPkValue($id)->save($id == 0);
        $msg = '';

        if ($id == 0) {
            $msg = sprintf(lang($status ? 'insert_success' : 'insert_fail'), $this->controllerTitle);
        } else {
            $msg = sprintf(lang($status ? 'update_success' : 'update_fail'), $this->controllerTitle);
        }
        
        if ($status) {
            
            $this->echoAjax(0, $msg);
        } else {
             
            $this->echoAjax(100, $this->bindModel->errorMessage);
        }
    }

    /**
     * 删除
     */
    public function delete() {
//
//        $this->activeModule = $this->level."01";
//        //检测权限 
//        $this->checkPermission($this->level . '02');
//        
//        $params = $this->getData("params");
//        
//        $status = $this->bindModel->deletes($params);
//        $msg = sprintf(lang($status ? 'delete_success' : 'delete_fail'), $this->controllerTitle);
//
//        $this->echoAjax(0, $msg);
    }

    /**
     * 修改排序
     */
    public function order(){
//        
//        $params = $this->getData("params");
//        
//        if(empty($params) || !is_array($params)){
//            
//        }
//        foreach($params as $k => $v){
//            
//            $this->bindModel->order($v['id'],$v['val']);
//        }
//        
//        $this->echoAjax(0, lang('update_order'));
    }
    
    /**
     * 更改状态
     */
    public function status(){
//        
//        $id = $this->getData('id');
//        $status = $this->getData("status");
//        
//        $this->bindModel->status($id,$status);
//        
//        $this->successAjax();
    }
   
}
