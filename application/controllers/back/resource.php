<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 资源管理
 */
class Resource extends CAdminBase {

    public $controllerTitle = "资源";
    public $controllerId = "resource";
    
    public $topLevel = "E";
    public $level = "E09";
    
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
