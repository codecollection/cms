<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  配置
 */
class Set extends CAdminBase {

    public $controllerId = "set";
    
    public $topLevel = "A";
    
    public $level = "A02";
    
    public $inserNav = array(
        'is_system' => array(
            array('value'=>0,'txt'=>'系统','color'=>'red'),
            array('value'=>1,'txt'=>'自定义','color'=>'green')
        ),
    );
            
    function __construct() {

       parent::__construct();
       
    }
    
    public function index(){
        
        $this->lists();
    }

}
