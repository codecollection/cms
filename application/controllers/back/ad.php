<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  广告
 */
class Ad extends CAdminBase {

    public $controllerTitle = "广告";
    
    public $controllerId = "ad";
    
    public $topLevel = "E";
    
    public $level = "E04";
    
    protected $order = "ad_order";
    
    function __construct() {

       parent::__construct();
       
       $this->loadModel("adarea");
       
       $this->addJs("../../libs/datepicker.js");
    }

    public function index(){
        parent::lists();
    }
    
    public function edit() {
        $this->setAdareaField();
        parent::edit();
    }

    public function add() {
        
        $this->setAdareaField();
        parent::add();
    }

    /**
     * 设置广告位表单数据
     */
    private function setAdareaField(){
        
        $groups = $this->adarea->fields("area_name,area_id")->getAll();
        
        $gf = $this->adarea->changeField($groups);
        
        array_unshift($gf, array('value'=>0,"txt"=>"选择广告位","txt_color"=>""));
        
        $this->vars->set_fields("ad_area",$gf);
        
    }
}
