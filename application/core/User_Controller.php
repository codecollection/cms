<?php


/**
 * 前台需要登录才能访问的控制器父类
 */
 class CUserBase extends CBase{
        
    protected $controllerId = "";
     
    public function __construct() {
        parent::__construct();
        if(!empty($this->controllerId)){
            $this->load->model("user/" . $this->controllerId . '_model', $this->controllerId);
            $this->bindModel = $this->{$this->controllerId};
        }
    }
    
    public function lists($params = array()){
        //设置活动的模块
        $this->activeModule = $this->level;
        
        $page = $this->getData('p');
        
        $this->bindModel->page($page, PAGESIZE);
        
        $this->setSearch();
        $lists = $this->bindModel->search();

        $data = array('page' => RKit::getPageLink("/user/" . strtolower(get_class($this)) . "?" . http_build_query($params), $lists['count']),
            'list' => $lists,
        );

        $this->setMinNav(array('title'=>  $this->controllerTitle . "列表",'url'=>"/back/".$this->controllerId));
        $this->renderUserView($this->controllerId."/list", $data);
    }
    
    /**
     * 显示导出文件的模板页面
     * @param string $viewName
     * @param array $data
     */
    protected function renderUserView($viewName, $data = array()) {
        
        $userInfo = array();
        $mainContent = $this->load->view("user/{$viewName}", array_merge(array("thisc"=>$this), $this->renderData, $data),true);
        $menu = NavPanel::getInstance()->getUserMenus($this->activeModule,$this->level);
        $frameData = array(
            "thisc" => $this,
            "mainContent" => $mainContent,
            "nav" => $menu['nav'],
            'microtime' => $this->microtime_float() - $this->startMicrotime,
            "navItem" => $menu['item'],
        );
        $this->load->view("user/frame", array_merge($frameData, $userInfo, $this->renderData, $data));
    }
    
    /**
     * 加载用户中心视图
     * @param type $dirName
     */
    public function loadUserView($dirName){
        
         $this->echoView("user/{$dirName}");
    }
 }
 

