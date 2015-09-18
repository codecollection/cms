<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 微信永久素材管理
 * 
 */
class Material extends WXAdminBase {

    public $controllerId = "material";
    
    public $topLevel = "W";
    
    public $level = "W03";
    
    function __construct() {

       parent::__construct();
       
    }

    public function index(){
        $type = "image";
        $this->setActionUrl($this->weixinApiUrl."/cgi-bin/material/batchget_material?access_token={$this->accessToken}");
        
        $postData = RKit::json_encode_ch(array("type"=>$type,"offset"=>0,"count"=>10));
        
        $list = $this->getRequestData($postData);
        
        print_r($list);
        $this->renderAdminView($this->viewDir());
    }
    
    public function add(){
        
        $this->renderAdminView($this->viewDir(2));
    }
    
    public function save(){
        
        $type = "image";
        $image = $this->getData("image");
        
//        $imagePath = realpath(".".$image);
        $imagePath = dirname(__FILE__).$image;
        
        $postData = array('media' => new CURLFile($imagePath));
        
        $this->setActionUrl($this->weixinApiUrl."/cgi-bin/media/upload?access_token={$this->accessToken}&type={$type}
");
        //$this->setActionUrl("http://file.api.weixin.qq.com/cgi-bin/media/upload?type={$type}&access_token={$this->accessToken}");
        //print_r($postData);
        
        $res = $this->postFile($postData);
        var_dump($res);
        
        if(!isset($res["errcode"]) || (isset($res["errcode"]) && $res["errcode"] <= 0)){
            $this->echoAjax(0, "操作成功");
        }
        
        $this->echoAjax(100, $res["errmsg"]);
    }
}
