<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 微信开发中验证
 * 
 */
class wx extends WeixinBase {

    function __construct() {

       parent::__construct();
    }

    /**
     * 验证微信服务器
     */
    public function index(){
        
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        		
	$token = $this->token;
	$tmpArr = array($token, $timestamp, $nonce);
	sort($tmpArr, SORT_STRING);
	$tmpStr = implode( $tmpArr );
	$tmpStr = sha1( $tmpStr );
	
	if( $tmpStr == $signature ){
		return true;
	}else{
		return false;
	}
    }
    
}
