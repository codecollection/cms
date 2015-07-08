<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 验证码
 * 
 */
class Captcha extends CBase {

    function __construct() {

       parent::__construct();
    }

    
    /**
     *  生成验证码
     */
    public function index(){
        
        $this->load->helper('RCaptcha');

        $type = $this->getData("type");
        
        $codeKey = "vcode";
        $width = 120;
        $height = 40;
        
        switch ($type){
        	case 1:
        		$width = 100;
        		$height = 30;
        		$codeKey = "pcode";
        		break;
        	case 2:
        		$width = 100;
        		$height = 30;
        		$codeKey = "ecode";
        		break;
        	default:
        		break;
        }
        $captcha = RCaptcha::getInstance();
        $captcha->setSize(120,40);
        $word = $captcha->make();
        $_SESSION[$codeKey] = $word;
        //$this->session->set_userdata(array("vcode"=>$word));
        exit;
    }
    
}
