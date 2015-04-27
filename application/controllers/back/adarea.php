<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  广告位
 */
class Adarea extends CAdminBase {

    public $controllerId = "adarea";
    
    public $topLevel = "E";
    
    public $level = "E01";
    
    function __construct() {

       parent::__construct();
       
    }

}
