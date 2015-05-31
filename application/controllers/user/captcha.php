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

        $captcha = RCaptcha::getInstance();
        $captcha->setSize(120,40);
        $word = $captcha->make();
        
        $this->session->set_userdata(array("vcode"=>$word));
        exit;
    }
    
}
