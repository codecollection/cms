<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  友链
 */
class Flink extends CAdminBase {

    public $controllerId = "flink";
    
    public $topLevel = "E";
    
    public $level = "E02";
    
    function __construct() {

       parent::__construct();
       
    }

    public function index(){
        $this->lists();
    }
}
