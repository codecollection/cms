<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  配置
 */
class Set extends CAdminBase {

    public $controllerId = "set";
    
    public $topLevel = "A";
    
    public $level = "A02";
    
    function __construct() {

       parent::__construct();
       
    }

}
