<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  标签组
 */
class Tagg extends CAdminBase {

    protected $controllerTitle = "标签组";
    public $controllerId = "tagg";
    
    public $topLevel = "E";
    
    public $level = "E05";
    
    function __construct() {

       parent::__construct();
       
    }

    public function index(){
        parent::lists();
    }
}
