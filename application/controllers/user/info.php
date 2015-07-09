<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户信息
 */
class Info extends CUserBase {

    protected $controllerId = "info";
    
    public $topLevel = "B";
    
    public $level = "B01";
    
    public function __construct() {

       parent::__construct();
       
    }

    public function index(){
        
        $user = $this->u->find($this->userId);
        
        $this->setData("user", $user);
        
        $this->renderUserView("info");
    }
}
