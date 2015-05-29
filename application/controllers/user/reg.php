<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 前台用户注册控制器
 * 
 */
class Reg extends CUserBase {

    protected $controllerId = "u";
    
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
        $this->renderUserView("reg"); 
    }
    
    /**
     * 执行登录
     */
    public function doReg(){
        
        $name = $this->getData("aname");
        $pwd = $this->getData("apass");
        
        //$rs = $this->user->login($name,$pwd);
        die('{"msg":""}');
        $this->echoAjax(0, "");
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
     * 坚持用户名是否可用
     */
    public function checkName(){
        
        $name = $this->getData("name");
        
        $type = RKit::getUserBindType($name);
        $msg = "用户名";
        switch ($type){
            case 1: 
                $msg = "用户名";
                break;
            case 2: 
                $msg = "手机号";
                break;
            case 3:
                $msg = "邮箱";
                break;
        }
        
        if($this->u->checkName($name,$type)){
           
            $this->echoAjax(100, $msg.'已经存在');
        }
        $this->echoAjax(0, "恭喜，该{$msg}可注册");
    }
    
    public function checkPwd(){
        die('{"msg":""}');
    }
}
