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
        
        $this->setData("email", $email);
        $this->setData("phone", $phone);
        
        $this->setData("actionName", $actionName);
        $this->setData("type", $type);
        
        $this->renderUserView("safe");
    }
    
}
