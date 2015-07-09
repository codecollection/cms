<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 安全中心
 */
class Safe extends CUserBase {

    protected $controllerId = "info";
    
    public $topLevel = "C";
    
    public $level = "C01";
    
    public function __construct() {

       parent::__construct();
       $this->addJs("safe.js");
    }

    public function index(){
        
        $this->level = "C02";
        $type = $this->getData("type");
        $actionName = "绑定账号";
        
        $phone = FALSE;
        $email = FALSE;
            
        if(empty($type)){
            $phone = true;
            $email = true;
        }
        
        if($type == "phone"){
            $phone = true;
            $actionName = "绑定手机号";
        }
        
        if($type == "email"){
            $email = true;
            $actionName = "绑定邮箱";
        }
        
        $user = $this->u->find($this->userId);
        
        $this->setData("user", $user);
        $this->setData("email", $email);
        $this->setData("phone", $phone);
        
        $this->setData("actionName", $actionName);
        $this->setData("type", $type);
        
        $this->renderUserView("safe");
    }
    
    public function doBind(){
        
        $uphone = $this->getData("uphone");
        $phonecode = $this->getData("phonecode");
        $uemail = $this->getData("uemail");
        $emailcode = $this->getData("emailcode");
        $data = array();
        $msg = array();
        if(!empty($uphone)){
            
            //判断验证码是否正确
            if(strtolower($phonecode) != strtolower($_SESSION["pcode"])){
                $msg["uphone"] = "绑定手机号验证码不正确";
            }else{
                $data["uphone"] = $uphone;
            }
        }
        
        if(!empty($uemail)){
            //判断验证码是否正确
            if(strtolower($emailcode) != strtolower($_SESSION["ecode"])){
                $msg["uemail"] = "绑定邮箱验证码不正确";
            }else{
                $data["uemail"] = $uemail;
            }
        }
        
        if(!empty($data)){
        $this->u->setAttrs($data)->setPkValue($this->userId)->save($this->userId == 0);
        }
        
        $msgr = empty($msg) ? "帮定成功" : implode(",", $msg);
        
        $this->echoAjax(0, $msgr);
        
    }
}
