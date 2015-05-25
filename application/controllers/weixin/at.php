<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 基础接口
 * 
 */
class At extends WeixinBase {

    protected $tokenUrl = "/cgi-bin/token";
    public function __construct() {

       parent::__construct();
    }

    /**
     * 
     */
    public function getToken(){
        
        $url = $this->weixinApiUrl . $this->tokenUrl . "?grant_type=client_credential&appid={$this->appId}&secret={$this->appSecret}";

        $res = RKit::getUrlData($url);
        
        print_r($res);
    }
    
    /**
     * 
     */
    public function getIP(){
        
    }
  
}
