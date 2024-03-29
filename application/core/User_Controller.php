<?php


/**
 * 前台需要登录才能访问的控制器父类
 */
 class CUserBase extends CBase{
        
    //protected $controllerId = "";
     
    /**
     * 用户中心文件夹名称
     * @var type 
     */
    public $user = "user";
    
    public function __construct() {
        parent::__construct();
        
        $className = get_class($this);
        if($className != "Login" || $className != "Reg"){
            if(!isset($_SESSION["user"])){

                if(get_class($this) == 'Action'){
                    $this->echoAjax(100, '没有登录');
                }else{
                    redirect(AUTHHOST."/user/".  strtolower($className));
                }
                
            }
        }
        
        $this->userId = isset($_SESSION["user"]["userId"]) ? $_SESSION["user"]["userId"] : 0;
        $this->load->model('u_model', "u");
        
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
            "u" => $_SESSION["user"],
            'js' => implode("\r\n", $this->frontFile['js']),
            'css' => implode("\r\n", $this->frontFile['css']),
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
    
    public function addJs($file) {
        
        if (!is_array($file)) {
            $file = array($file);
        }

        foreach ($file as $value) {
            $value = strstr($value, 'http') ? $value : "/style/{$this->user}/js/" . $value;
            
            $this->frontFile['js'][] = '<script type="text/javascript" src="' . $value . '" ></script>';
        }

        return $this;
    }
 }
 

