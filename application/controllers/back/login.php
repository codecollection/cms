<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 登录控制器
 * 
 * 账号：wenghe 密码：wenghe 加密后的密码：bae208138ce50065beb13be8dd8f3c30
 * 
 * 账号：admin 密码：admin 加密后的密码：f21e84bcb1eea0277ced3794e8676d23
 */
class Login extends CAdminBase {

    protected $controllerId = "login";
    
    function __construct() {

       parent::__construct();
       
       $this->lang->load('manager', 'zh_cn');
    }

    
    /**
     *  如果没有登录就到登录页面，如果登录了就到管理首页
     */
    public function index(){
        
        $data = $this->admin->getUserInfo();
        
        if($data){
            redirect("/back/home");
            exit;
        }
        $this->load->view($this->viewDir()); 
    }
    
    /**
     * 执行登录
     */
    public function doLogin(){
        
        $name = $this->getData("aname");
        $pwd = $this->getData("apass");
        
        $rs = $this->admin->login($name,$pwd);
        
         if ($rs > 0) {
            
            $this->admin->update($rs);
            redirect("/back/home");
            exit;
        }

        $info = array(
            -1 => 'login_user_notfound',
            -2 => 'login_pwd_error',
            -3 => 'login_role_deny',
            -4 => 'login_user_deny',
            0  => 'login_error',
        );

        $this->echoAjax(100, lang($info[$rs]));
    }
    
    /**
     * 退出登录
     */
    public function loginOut(){
        
        $this->admin->logout();
        
        redirect("/back/login");
    }
}
