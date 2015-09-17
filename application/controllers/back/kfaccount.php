<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 微信客服
 * 
 */
class Kfaccount extends WXAdminBase {

    public $controllerId = "kfaccount";
    
    public $topLevel = "W";
    
    public $level = "W06";
    
    public function __construct() {

       parent::__construct();
       
    }

    public function index(){
        
//        $this->setActionUrl($this->weixinApiUrl."/cgi-bin/menu/get?access_token={$this->accessToken}");
//        
//        $data = $this->getRequestData();
//        
//        //print_r($data);
//        
//        $this->setData("list",$data);
        $this->renderAdminView($this->viewDir());
    }
    
    public function save() {
        
        $data = $this->getData("data");
        
        $data["nickname"] = $data["kf_nick"];
        $data["password"] = md5($data["password"]);
        
        $account = array(
            "kf_account"=>$data["kf_account"],
            "nickname" => $data["nickname"],
            "password" => $data["password"],
            );
        $postData = RKit::json_encode_ch($account);
        
        $this->setActionUrl($this->weixinApiUrl."/customservice/kfaccount/add?access_token={$this->accessToken}");
        //print_r($postData);
        
        //echo($this->getActionUrl());
        $res = $this->postData($postData);
        print_r($res);
        if(!isset($res["errcode"]) || (isset($res["errcode"]) && $res["errcode"] <= 0)){
            $this->echoAjax(0, "操作成功");
        }
        
        $this->echoAjax(100, $res["errmsg"]);
    }
    
    public function edit() {
        
    }

    public function delete() {
        
        $this->setActionUrl($this->weixinApiUrl."/cgi-bin/menu/delete?access_token={$this->accessToken}");
        
        $res = $this->postData();
        
        if(!isset($res["errcode"]) || (isset($res["errcode"]) && $res["errcode"] <= 0)){
            $this->echoAjax(0, "操作成功");
        }
        
        $this->echoAjax(100, $res["errmsg"]);
    }
}
