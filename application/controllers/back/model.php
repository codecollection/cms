<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 模型管理
 */
class Model extends CAdminBase {

    protected $controllerId = "model";
    
    public $level = "D";
    
    function __construct() {

       parent::__construct();
       
    }

    /**
     *  列表
     */
    public function index(){
        
        $this->checkPermission("{$this->level}01");
        $this->lists();
    }
    
}
