<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 标签组
 *
 */
class Tagg_model extends MBase{
    
    protected $tableName = 'cms_tag_group';
    
    protected $pk = "group_id";
    
    protected $rules = array(
        array('group_name', 'required'),
    );
    
    protected $fieldTitles = array(
        'group_name' => '标签组名称',
    );
    
    protected $unique = array("group_name");
    
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
        
        $this->checkoutUnique($isInsert);
        
    }
    
    public function changeField($group){
        $fields = array();
        foreach($group as $v){
            
            $a = array('txt'=>$v['group_name'],'value'=>$v['group_id']);
            
            array_push($fields, $a);
        }
        
        return $fields;
    }
}