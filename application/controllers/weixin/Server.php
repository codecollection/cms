<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 客服接口
 * 
 */
class Wx extends WeixinBase {

    public $addUrl = "/customservice/kfaccount/add?access_token=";
    
    public $listUrl = "/cgi-bin/customservice/getkflist?access_token=";
    
    public $deleteUrl = "/customservice/kfaccount/del?access_token=";
    
    public $updateUrl = "/customservice/kfaccount/update?access_token=";
    //更新头像
    public $updateImagUrl = "/customservice/kfaccount/uploadheadimg?access_token=&kf_account=KFACCOUNT";
    
    public function __construct() {

        parent::__construct();
        
        
    }

    public function index(){
        
        $this->setActionUrl($this->listUrl);
        
        parent::lists();
    }


    public function add(){
        
    }

    public function edit(){
        
    }
    
    public function update(){
        $this->setActionUrl($this->updateUrl);
        
    }

    public function save(){
        
        $id = $this->getData("id");
        $data = $this->getData("data");
        
        $this->setActionUrl($this->addServerUrl);
        $res = $this->postData($data);
        
        if((int)$res["errcode"] === 0){
            $this->saveLocation($id, $data);
        }
    }
    
    public function delete() {
        
        $this->setActionUrl($this->deleteUrl);
    }

}
