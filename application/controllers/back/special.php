<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 专题位管理
 */
class Special extends CAdminBase {

    public $controllerTitle = "专题";
    public $controllerId = "special";
    
    public $topLevel = "C";
    public $level = "C04";
    
    public $insertNav = array(
        's_type' => array(
            array('value'=>1,'txt'=>'专题'),
            array('value'=>2,'txt'=>'活动')
        )
    );
    
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
