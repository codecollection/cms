<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 后台首页
 */
class Home extends CAdminBase {

    protected $controllerId = "home";
    
    public $level = "A";
    
    function __construct() {

       parent::__construct();
       
    }

    /**
     *  如果没有登录就到登录页面，如果登录了就到管理首页
     */
    public function index(){
        $this->checkPermission("{$this->level}01");
        $this->renderAdminView($this->viewDir());
    }
    
}
