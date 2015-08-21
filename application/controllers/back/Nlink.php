<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  内链
 */
class Nlink extends CAdminBase {

    public $controllerId = "nlink";
    
    public $topLevel = "E";
    
    public $level = "E07";
    
    public function __construct() {

       parent::__construct();
       
    }
    

    public function index(){
        $this->lists();
    }
}
