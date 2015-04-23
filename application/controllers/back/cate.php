<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  分类
 */
class Cate extends CAdminBase {

    public $controllerId = "cate";
    
    public $topLevel = "C";
    
    public $level = "C01";
    
    //分类是否在导航上面显示
    protected $insertNav = array( "nav_show" => array( 
            array("value"=>1,"txt"=>"显示","color"=>"green"),
            array("value"=>0,"txt"=>"隐藏","color"=>"red"),
        )
    );
            
    function __construct() {

       parent::__construct();
       
    }

    /**
     *  列表
     */
    public function index(){
        
        $this->lists();
    }
    
    public function add(){
        
        
        parent::add();
    }
    
    
}
