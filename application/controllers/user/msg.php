<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 消息中心
 */
class Msg extends CUserBase {

    protected $controllerId = "msg";
    
    public $topLevel = "D";
    
    public $level = "D01";
    
    public function __construct() {

       parent::__construct();
       $this->addJs("safe.js");
    }

    public function index(){
        
        
        $this->renderUserView("msg");
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
