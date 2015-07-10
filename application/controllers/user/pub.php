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
     *  
     */
    public function index(){
        
        $page = $this->getData('p');
        
        $this->pub->page($page, PAGESIZE);
        
        $lists = $this->pub->search();

        $data = array('page' => RKit::getPageLink("/user/" . strtolower(get_class($this)) . "?" . http_build_query(array()), $lists['count']),
            'list' => $lists,
        );

        $this->renderUserView("pub", $data);
       
    }
    
}
