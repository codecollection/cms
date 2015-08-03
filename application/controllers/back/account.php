<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 用户管理
 * 
 */
class Account extends CAdminBase {

    public $controllerId = "u";
    
    public $topLevel = "B";
    public $level = "B05";
    
    //查询的下拉选项
    public $insertNav = array(
        'search'=>array(
            array("txt"=>"姓名","value"=>"aname","color"=>""),
            array("txt"=>"邮箱","value"=>"aemail","color"=>""),
            array("txt"=>"电话","value"=>"aphone","color"=>""),
            array("txt"=>"QQ号","value"=>"aqq","color"=>""),
        ),
    );
    
    function __construct() {

       parent::__construct();
       
       //加载用户组
       $this->loadModel("ag");
       
    }

    /**
     *  列表
     */
    public function index(){
        
        $query = RKit::getData('schval', 'schgroup', 'schtype');
        
        //处理查询
        if(!empty($query['schval']) && !empty($query['schtype'])){
            $this->module->like($query['schtype'], $query['schval']);
        }
        
        if(!empty($query['schgroup']) && !is_numeric($query['schgroup'])){
            $this->module->like('mgroup', $query['schgroup']);
        }
        
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
