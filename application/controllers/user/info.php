<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户信息
 */
class Info extends CUserBase {

    protected $controllerId = "info";
    
    public $topLevel = "A";
    
    public $level = "A01";
    
    public function __construct() {

       parent::__construct();
       
    }

}
