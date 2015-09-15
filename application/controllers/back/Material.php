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
        
        $this->renderAdminView($this->viewDir());
    }
    
    public function add(){
        
        $this->renderAdminView($this->viewDir(2));
    }
    
    public function testUpload(){
        
        $fileInfo = $_FILES["file"];
        print_r($fileInfo);
        $this->setActionUrl($this->weixinApiUrl."/cgi-bin/material/add_material?access_token={$this->accessToken}&type=image");
        $resData = $this->postFile($fileInfo);
        
        var_dump($resData);
    }
    
    /**
     * 上传图片
     * 
     * @param type $filename
     * @param type $path
     * @param type $type
     * @return type
     */
    public function postFile($fileInfo){
        
        $real_path = realpath($fileInfo["name"]);
        $data = array(
            //'form-data'=> array("type" => $fileInfo["type"],"filename"=>$fileInfo["name"],"filelength"=>$fileInfo["size"]),
            'media' => "@{$real_path}",
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getActionUrl());
        curl_setopt($ch, CURLOPT_POST, true );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_getinfo($ch);
        $output = curl_exec($ch);
        curl_close($ch);
        
        if(curl_errno()==0){
            return json_decode($output,true);  
        }else{
            return false;
        }
          
   
    }
}
