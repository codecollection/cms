<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  字段管理
 */
class Field extends CAdminBase {

    public $controllerId = "field";
    
    public $level = "D02";
    
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
