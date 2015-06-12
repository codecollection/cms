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
     *  如果没有登录就到登录页面，如果登录了就到管理首页
     */
    public function index(){
        
        $this->lists();
        //$this->renderUserView($this->controllerId."/list");
    }
    
}
