<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 素材管理中心
 * 
 */
class Media extends WeixinBase {
    
    private $listUrl = "cgi-bin/material/batchget_material?access_token=";
    
    
    public function __construct() {

        parent::__construct();
    }
    
    /**
     * 获取永久素材
     */
    public function index(){
        
        $this->setActionUrl($this->weixinApiUrl.$this->listUrl.$this->accessToken);
        
        $params = array(
            "type" => "image",
            "offset" => 0,
            "count" => 20,
        );
        $data = $this->getRequestData($params);
        
        print_r($data);
        
    }
    
    public function addMaterial(){
        
    }
}