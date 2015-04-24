<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * 用户管理组
 * 
 */
class Ag extends CAdminBase {

    public $controllerId = "ag";
    
    public $topLevel = "B";
    
    public $level = "B01";
    
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
