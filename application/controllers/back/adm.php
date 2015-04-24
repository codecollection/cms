<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 用户管理
 * 
 */
class Adm extends CAdminBase {

    public $controllerId = "adm";
    
    public $topLevel = "B";
    public $level = "B02";
    
    function __construct() {

       parent::__construct();
       
       //加载用户组
       $this->loadModel("ag");
       
    }

    /**
     *  列表
     */
    public function index(){
        
        $this->lists();
    }
    
    public function add() {
        
        $this->setGroupField();
        parent::add();
    }


    public function edit() {
        
        //设置管理组下拉框数据
        $this->setGroupField();
        
        parent::edit();
    }

    
    private function setGroupField(){
        
        $groups = $this->ag->getAll();
        
        $gf = $this->ag->changeField($groups);
        
        array_unshift($gf, array('value'=>0,"txt"=>"选择管理组","txt_color"=>""));
        
        $this->vars->set_fields("group_id",$gf);
        
    }
    
}
