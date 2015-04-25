<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  字段管理
 */
class Field extends CAdminBase {

    public $controllerId = "field";
    
    public $topLevel = "D";
    
    public $level = "D02";
    
    function __construct() {

       parent::__construct();
       
    }

    /**
     *  列表
     */
    public function index(){
        
        //获取字段标签
        $fieldTags = $this->bindModel->getTags();
        
        $this->setData("fieldTags", $fieldTags);
        
        $this->lists();
    }
    
    protected function setSearch() {
        
        $s = RKit::getData('tag');
        
        if(!empty($s['tag'])){
            $this->bindModel->where("field_tag=".$this->db->escape($s['tag']));
        }
        
        parent::setSearch();
    }
    
}
