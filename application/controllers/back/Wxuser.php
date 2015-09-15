<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 微信用户管理
 * 
 */
class Wxuser extends WXAdminBase {

    public $controllerId = "wxuser";
    
    public $topLevel = "W";
    
    public $level = "W01";
    
    public function __construct() {

       parent::__construct();
       
    }

    public function index(){
        
        $this->setActionUrl($this->weixinApiUrl."/cgi-bin/user/get?access_token={$this->accessToken}");
        
        $data = $this->getRequestData();
        
        //print_r($data);
        
        $this->setData("list", $data);
        $this->renderAdminView($this->viewDir());
    }
    
    public function getInfo(){
        
        $openid = $this->getData("openid");
        
        $this->setActionUrl($this->weixinApiUrl."/cgi-bin/user/info?access_token={$this->accessToken}&openid={$openid}&lang=zh_CN");
        
        $info = $this->getRequestData();
        
        //print_r($info);
        $this->setData("info", $info);
        $this->renderAdminView("back/{$this->controllerId}/info");
    }
    
}
