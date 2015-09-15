<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 微信用户管理组
 * 
 */
class Wxuserg extends WXAdminBase {

    public $controllerId = "wxuserg";
    
    public $topLevel = "W";
    
    public $level = "W02";
    
    public function __construct() {

       parent::__construct();
       
    }

    public function index(){
        
        $this->setActionUrl($this->weixinApiUrl."/cgi-bin/groups/get?access_token={$this->accessToken}");
        
        $list = $this->getRequestData();
        
        //print_r($list);
        
        $this->setData("list", $list);
        $this->renderAdminView($this->viewDir());
    }
    
    public function save() {
        
        $id = (int)$this->getData("id");
        $data = $this->getData("data");
        
        if(!empty($id) && $id>0){
            $data["id"] = $id;
        }
        $postData = RKit::json_encode_ch(array("group"=>$data));
        
        if(!empty($id) && $id>0){
            $this->setActionUrl($this->weixinApiUrl."/cgi-bin/groups/update?access_token={$this->accessToken}");
        }else{
            $this->setActionUrl($this->weixinApiUrl."/cgi-bin/groups/create?access_token={$this->accessToken}");
        }
        
        //echo($this->getActionUrl());
        $res = $this->postData($postData);
        //print_r($res);
        if(!isset($res["errcode"]) || (isset($res["errcode"]) && $res["errcode"] <= 0)){
            $this->echoAjax(0, "操作用户组成功");
        }
        
        $this->echoAjax(100, $res["errmsg"]);
    }
    
    public function edit(){
        
        $id = $this->getData("id");
        $name = $this->getData("name");
        
        $this->setData("data", array("id"=>$id,"name"=>$name));
        $this->renderAdminView($this->viewDir(2));
    }

    public function delete() {
        
        $ids = $this->getData("params");
        
        $this->setActionUrl($this->weixinApiUrl."/cgi-bin/groups/delete?access_token={$this->accessToken}");
        $postData = array("group"=>array("id"=>$ids));
        
        $res = $this->postData(RKit::json_encode_ch($postData));
        
        if(!isset($res["errcode"])){
            $this->echoAjax(0, "删除用户组成功");
        }
        
        $this->echoAjax(100, $res["errmsg"]);
    }
}
