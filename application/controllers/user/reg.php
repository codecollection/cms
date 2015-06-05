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
        
        //$data = $this->user->getUserInfo();
        $data = false;
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
        
        $isAgreement = $this->getData("isAgreement"); //同意协议
        $name = $this->getData("account");
        $pwd = $this->getData("pwd");
        $repwd = $this->getData("repwd");
        $vcode = $this->getData("vcode");
     
        //验证码
        if(strtolower($_SESSION["vcode"]) != strtolower($vcode) ){
            $this->echoAjax(101, '验证码错误',array('tagId'=>"vode"));
        }
        //密码
        if($pwd != $repwd){
            $this->echoAjax(102, '两次填写的密码不一致',array('tagId'=>"pwd"));
        }
        //用户名唯一
        $type = RKit::getUserBindType($name);
        $msg = $this->getMsgByType($type);
        
        if($this->u->checkName($name,$type)){
           
            $this->echoAjax(103, $msg.'已经存在');
        }
        
        //注册
        $rs = $this->u->doReg($name,$pwd,$type);
        
         if ($rs > 0) {
            
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
    
  
    public function success(){
            
        $this->renderUserView("success");
    }

    /**
     * 坚持用户名是否可用
     */
    public function checkName(){
        
        $name = $this->getData("name");
        
        $type = RKit::getUserBindType($name);
        $msg = $this->getMsgByType($type);
        
        if($this->u->checkName($name,$type)){
           
            $this->echoAjax(100, $msg.'已经存在');
        }
        $this->echoAjax(0, "恭喜，该{$msg}可注册");
    }
    
    private function getMsgByType($type){
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
        return $msg;
    }

    public function checkPwd(){
        die('{"msg":""}');
    }
}
