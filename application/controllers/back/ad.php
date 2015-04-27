<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  广告
 */
class Ad extends CAdminBase {

    public $controllerId = "ad";
    
    public $topLevel = "E";
    
    public $level = "E01";
    
    function __construct() {

       parent::__construct();
       
    }

}
