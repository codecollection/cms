<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  友链组
 */
class Flinkg extends CAdminBase {

    public $controllerId = "flinkg";
    
    public $topLevel = "E";
    
    public $level = "E01";
    
    function __construct() {

       parent::__construct();
       
    }
    
    public function index(){
        $this->lists();
    }

}
