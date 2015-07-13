<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 * 安装
 */
class Step extends CBase {

    protected $controllerId = "step";
    
    public function __construct() {

       parent::__construct();
       
    }
    
    /**
     * 
     */
    public function index(){
     
        $this->loadView("install/step1");
    }
}
