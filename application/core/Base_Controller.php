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
        
        $this->tpl = "public";
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
        );
        
        $this->load->view($dir, array_merge($frameData, $data,  $this->renderData));
    }
    
    /**
     * 
     * @param type $dirName
     */
    public function loadView($dirName,$data = array()){
        
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
}
