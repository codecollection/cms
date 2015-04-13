<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CAdminBase {

    protected $controllerId = "login";
    
    /**
     *  如果没有登录就到登录页面，如果登录了就到管理首页
     */
    public function index(){
        
        
        $this->load->view($this->viewDir()); 
    }
}
