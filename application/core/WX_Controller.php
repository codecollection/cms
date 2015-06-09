<?php

 class WeixinBase extends CBase{
     
     public  $token = ""; //token 
     
     public $aesKey = ""; //EncodingAESKey
     
     protected $appId = "wx510e7cbdc4a86951";
     
     protected $appSecret = "c7376584865ec799bb31f9edbc87af5f";
     
     public $weixinApiUrl = "https://api.weixin.qq.com";
     
     public function __construct() {
         
        parent::__construct();
    }
    
    
 }
