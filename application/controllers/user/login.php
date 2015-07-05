<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 前台用户登录控制器
 * 
 */
class Login extends CUserBase {

    protected $controllerId = "u";
    
    function __construct() {

       parent::__construct();
    }

    
    /**
     *  如果没有登录就到登录页面，如果登录了就到管理首页
     */
    public function index(){
        
        $data = $this->u->getUserInfo();
        
        if($data){
            
            redirect("/user/home");
            exit;
        }
        $this->load->view("user/login",array("c"=>$this)); 
    }
    
    /**
     * 执行登录
     */
    public function doLogin(){
        
        $name = $this->getData("account");
        $pwd = $this->getData("password");
        $from = $this->getData("from");
        
        $type = RKit::getUserBindType($name);
        $rs = $this->u->login($name,$pwd,$type);
        
         if ($rs > 0) {
            
            $this->u->updateInfo($rs);
            //redirect("/back/home");
            $this->echoAjax(0,'',array("from"=>$from));
        }

        $info = array(
            -1 => 'login_user_notfound',
            -2 => 'login_pwd_error',
            -3 => 'login_role_deny',
            -4 => 'login_user_deny',
            0  => 'login_error',
        );

        $this->echoAjax(100, lang($info[$rs]),array("from"=>$from));
    }
    
    /**
     * 退出登录
     */
    public function loginOut(){
        
        $this->u->logout();
        
        redirect("/user/login");
    }
}
