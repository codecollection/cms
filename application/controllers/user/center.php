<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户信息
 */
class Center extends CUserBase {

    protected $controllerId = "info";
    
    public $topLevel = "A";
    
    public $level = "A01";
    
    public function __construct() {

       parent::__construct();
       
    }

    /**
     * 个人信息设置
     */
    public function info(){
        
    }

    public function safe(){
        
    }
}
