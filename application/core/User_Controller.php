<?php


/**
 * 前台需要登录才能访问的控制器父类
 */
 class CUserBase extends CBase{
        
    protected $controllerId = "";
     
    public function __construct() {
        parent::__construct();
        if(!empty($this->controllerId)){
            $this->load->model($this->controllerId . '_model', $this->controllerId);
            $this->bindModel = $this->{$this->controllerId};
        }
    }
    
    /**
     * 显示导出文件的模板页面
     * @param string $viewName
     * @param array $data
     */
    protected function renderUserView($viewName, $data = array()) {
        
        $this->renderView("user/{$viewName}", $data);
    }
    
    /**
     * 加载用户中心视图
     * @param type $dirName
     */
    public function loadUserView($dirName){
        
         $this->echoView("user/{$dirName}");
    }
 }
 

