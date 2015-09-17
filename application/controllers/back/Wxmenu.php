<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 微信自定义菜单
 * 
 */
class Wxmenu extends WXAdminBase {

    public $controllerId = "wxmenu";
    
    public $topLevel = "W";
    
    public $level = "W05";
    
    public $menuType = array(
        array("value"=>"click","txt"=>"点击推事件"),
        array("value"=>"view","txt"=>"跳转URL"),
        array("value"=>"scancode_push","txt"=>"扫码推事件"),
        array("value"=>"scancode_waitmsg","txt"=>"扫码推事件且弹出“消息接收中”提示框"),
        array("value"=>"pic_sysphoto","txt"=>"弹出系统拍照发图"),
        array("value"=>"pic_photo_or_album","txt"=>"弹出拍照或者相册发图"),
        array("value"=>"pic_weixin","txt"=>"弹出微信相册发图器"),
        array("value"=>"location_select","txt"=>"弹出地理位置选择器"),
        array("value"=>"media_id","txt"=>"下发消息"),
        array("value"=>"view_limited","txt"=>"跳转图文消息URL"),
    );
    
    public $menuLevel = array(
        array("value"=>"button","txt"=>"一级菜单"),
        array("value"=>"sub_button","txt"=>"二级级菜单"),
    );
    public function __construct() {

       parent::__construct();
       
    }

    public function index(){
        
        $this->setActionUrl($this->weixinApiUrl."/cgi-bin/menu/get?access_token={$this->accessToken}");
        
        $data = $this->getRequestData();
        
        //print_r($data);
        
        $this->setData("list", array("button" => $data));
        $this->renderAdminView($this->viewDir());
    }
    
    public function save() {
        
        $data = $this->getData("data");
        
        $postArray = array();
        foreach($data as $k => $button){
            $subButton = array();
            $buttonArray = array();
            if(isset($button["sub_button"])){
                
                foreach($button["sub_button"] as $subkey => $but){
                    
                    if($but["type"] == "click" ){
                        //$but["key"] = $but["key"];
                    }else if($but["type"] == "view"){
                        $but["url"] = $but["key"];
                        unset($but["key"]);
                    }else if($but["type"] == "media_id" && $but["type"] == "view_limited"){
                        $but["media_id "] = $but["key"];
                        unset($but["key"]);
                    }else{
                        //unset($but["key"]);
                    }
                    $subButton[] = $but;
                }
                $buttonArray["name"] = $button["name"];
                $buttonArray["sub_button"] = $subButton;
            }else{
                
                if($button["type"] == "click" ){
                        //$but["key"] = $but["key"];
                    }else if($button["type"] == "view"){
                        $button["url"] = $button["key"];
                        unset($button["key"]);
                    }else if($button["type"] == "media_id" && $button["type"] == "view_limited"){
                        $button["media_id "] = $button["key"];
                        unset($button["key"]);
                    }else{
                        //unset($button["key"]);
                    }
                $buttonArray = $button;
            }
            $postArray[] = $buttonArray;
            
        }
        $postData = RKit::json_encode_ch(array("button"=>$postArray));
        
        print_r($postData);
        
//        $postData = '{"button":[
//     {	
//          "type":"click",
//          "name":"今日歌曲",
//          "key":"V1001_TODAY_MUSIC"
//      },
//      {
//           "name":"菜单",
//           "sub_button":[
//           {	
//               "type":"view",
//               "name":"搜索",
//               "url":"http://www.soso.com/"
//            },
//            {
//               "type":"view",
//               "name":"视频",
//               "url":"http://v.qq.com/"
//            },
//            {
//               "type":"click",
//               "name":"赞一下我们",
//               "key":"V1001_GOOD"
//            }]
//       }]
// }';
        $this->setActionUrl($this->weixinApiUrl."/cgi-bin/menu/create?access_token={$this->accessToken}");
        //print_r($postData);
        
        //echo($this->getActionUrl());
        $res = $this->postData($postData);
        print_r($res);
        if(!isset($res["errcode"]) || (isset($res["errcode"]) && $res["errcode"] <= 0)){
            $this->echoAjax(0, "操作成功");
        }
        
        $this->echoAjax(100, $res["errmsg"]);
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
