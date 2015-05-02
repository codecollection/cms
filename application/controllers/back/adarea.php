<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  广告位
 */
class Adarea extends CAdminBase {

    protected $controllerTitle = "广告位";
    public $controllerId = "adarea";
    
    public $topLevel = "E";
    
    public $level = "E03";
    
    public $insertNav = array(
        'area_type' => array(
            array('value'=>0,'txt'=>'图片广告'),
            array('value'=>1,'txt'=>'代码广告')
        )
    );
    
    function __construct() {

       parent::__construct();
       
    }

    public function index(){
        parent::lists();
    }
}
