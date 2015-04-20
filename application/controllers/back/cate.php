<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  分类
 */
class Cate extends CAdminBase {

    public $controllerId = "cate";
    
    public $level = "C01";
    
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
