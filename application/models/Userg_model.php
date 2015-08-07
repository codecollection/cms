<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 前端用户管理组
 *
 */
class Userg_model extends MBase{
    
    protected $tableName = "cms_user_group";
    
    protected $pk = "group_id";


    public function  __construct(){
        parent::__construct();
    }
    
    /**
     * 
     * 处理成表单类可以处理的数据格式
     * 
     * @param type $list
     * @return array
     */
    public function changeField($list){
        $fields = array();
        foreach($list as $v){
            
            $a = array('txt'=>$v['g_name'],'value'=>$v['group_id'],'color'=>'');
            
            array_push($fields, $a);
        }
        
        return $fields;
    }
    
    public function saveBefore($isInsert) {
        
        if($isInsert){
            $this->cdate = time();
        }
    }
    
}