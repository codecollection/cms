<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 推荐位管理
 */
class Recommend extends CAdminBase {

    public $controllerTitle = "推荐位";
    public $controllerId = "recommend";
    
    public $topLevel = "C";
    public $level = "C03";
    
    function __construct() {

       parent::__construct();
    }

    /**
     *  列表
     */
    public function index(){
        
        $this->lists();
    }
    
    public function add() {
        
        parent::add();
    }
    
    public function edit() {
        
        parent::edit();
    }
    
    public function getModelSelect($default = 1){
        $this->loadModel('model');
        return $this->model->modelSelect($default);
    }
}
