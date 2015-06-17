<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 公众号下面的文章
 */
class Article extends CUserBase {

    protected $controllerId = "article";
    
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
