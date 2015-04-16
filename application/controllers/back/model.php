<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 模型管理
 */
class Model extends CAdminBase {

    public $controllerId = "model";
    
    public $level = "D";
    
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
