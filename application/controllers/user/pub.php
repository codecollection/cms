<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 公众号
 */
class Pub extends CUserBase {

    protected $controllerId = "pub";
    
    public $topLevel = "A";
    
    public $level = "A01";
    
    protected $modelTable = "cms_public";
    
    public function __construct() {

       parent::__construct();
       
    }

    /**
     *  
     */
    public function index(){
        
        $this->lists();
       
    }
    
}
