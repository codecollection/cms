<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 用户管理组
 * 
 */
class Userg extends CAdminBase {

    public $controllerId = "userg";
    
    public $topLevel = "B";
    
    public $level = "B04";
    
    function __construct() {

       parent::__construct();
       
    }

    /**
     *  列表
     */
    public function index(){
        
        $this->lists();
    }
    
}
