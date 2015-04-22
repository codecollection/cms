<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 模型管理模型
 *
 */
class Model_model extends MBase{
    
    protected $tableName = 'cms_model';
    
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