<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 评论管理
 */
class Comment extends CAdminBase {

    public $controllerTitle = "评论";
    public $controllerId = "comment";
    
    public $topLevel = "E";
    public $level = "E08";
    
    function __construct() {

       parent::__construct();
    }

    /**
     *  列表
     */
    public function index(){
        
        $this->lists();
    }
    
}
