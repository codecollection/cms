<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  标签
 */
class Tag extends CAdminBase {

    public $controllerTitle = "标签";
    
    public $controllerId = "tag";
    
    public $topLevel = "E";
    
    public $level = "E06";
    
    protected $order = "tag_order";
    
    function __construct() {

       parent::__construct();
       
       $this->loadModel("tagg");
       
    }

    public function index(){
        parent::lists();
    }
    
     public function edit() {
        $this->settaggField();
        parent::edit();
    }

    public function add() {
        
        $this->settaggField();
        parent::add();
    }
    /**
     * 设置组数据
     */
    private function settaggField(){
        
        $groups = $this->tagg->fields("group_id,group_name")->getAll();
        
        $gf = $this->tagg->changeField($groups);
        
        array_unshift($gf, array('value'=>0,"txt"=>"选择标签组","txt_color"=>""));
        
        $this->vars->set_fields("tag_group",$gf);
        
    }
}
