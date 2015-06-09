<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台首页
 */
class Home extends CBase {

    protected $controllerId = "home";
    
    public $topLevel = "A";
    
    public $level = "A01";
    
    function __construct() {

       parent::__construct();
       
    }

    /**
     *  如果没有登录就到登录页面，如果登录了就到管理首页
     */
    public function index(){
        $this->renderUserView("home");
    }
    
}
