<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 前台用户登录控制器
 * 
 */
class Login extends CUserBase {

    protected $controllerId = "login";
    
    function __construct() {

       parent::__construct();
    }

    
    /**
     *  如果没有登录就到登录页面，如果登录了就到管理首页
     */
    public function index(){
        
        $data = $this->user->getUserInfo();
        
        if($data){
            
            redirect("/user/login");
            exit;
        }
        $this->renderUserView("login"); 
    }
    
    /**
     * 执行登录
     */
    public function doLogin(){
        
        $name = $this->getData("aname");
        $pwd = $this->getData("apass");
        
        $rs = $this->user->login($name,$pwd);
        
         if ($rs > 0) {
            
            $this->user->update($rs);
            //redirect("/back/home");
            $this->successAjax();
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
        
        $this->user->logout();
        
        redirect("/user/login");
    }
}
