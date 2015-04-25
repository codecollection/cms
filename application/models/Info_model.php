<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 文档管理
 *
 */
class Info_model extends MBase{
    
    public $tableName = '';
    
    protected $pk = "model_id";
    
    public function  __construct(){
        parent::__construct();
    }
    
    /**
     * 获取表已经存在的字段
     * @param type $tableName
     * @return type
     */
    public function getTableFields($tableName){
        
        $sql = "show columns from ". DB_PREFIX.$tableName. " ";
        
        $query =  $this->db->query($sql);
        
        return $query->result_array();
    }
}