<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 模型管理模型
 *
 */
class Model_model extends MBase{
    
    protected $tableName = 'cms_model';
    
    protected $relTableName = "cms_model_fields";
    
    protected $fieldTableName = "cms_fields";
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
        
        $sql = "show columns from ".$tableName. " ";
        
        $query =  $this->db->query($sql);
        
        $colums = array();
        
        foreach ($query->result_array() as $row){
            array_push($colums, $row['Field']);
        } 
        return $colums;
    }
  
    /**
     * 
     * @param type $modelId
     * @return type
     */
    public function getRelationField($modelId){
        
        $sql = "select * from {$this->fieldTableName} as a left join {$this->relTableName} as b on b.field_id = a.field_id ";
        $sql .= " where b.model_id = {$modelId}";
        
        $query = $this->db->query($sql);
        
       
        return $query->result_array();
    }
    
    public function createTable($fields,$modelId){
        
        //系统字段
        $modelName = $this->getField($modelId, "model_name");
        
        if(!$this->isExistTable($modelName)){
            
            $this->db->query($this->createTableSql($fields, $modelName));
        }else{
            $colums = $this->getTableFields($modelName);
            
            foreach($fields as $k => $v){
                if(!in_array($v['field'],$colums)){
                    $sql = "alter table `{$modelName}` add column `{$v['field']}` {$v['field_type']} default '{$v['form_value']}' comment '{$v['title']}' ";
                    
                    $this->db->query($sql);
                }
            }
        }
        return $this->db->affected_rows() > 0;
    }
    
    private function createTableSql($fields,$modelName){
        $sql = "create table if not exists `{$modelName}` (";
        $sql .= " `{$modelName}_id` int(11) unsigned not null auto_increment,";
        
        foreach($fields as $k => $v){
            $sql .= " `{$v['field']}` {$v['field_type']} default '{$v['form_value']}' comment '{$v['title']}',";
        }
        
        $sql .= " primary key (`{$modelName}_id`)) engine=myisam default charset=utf8;";
        
        return $sql;
    }
    
    private function isExistTable($tableName){
        $sql = " SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '".DB_BASE ."' AND TABLE_NAME = '{$tableName}' ";
        
        $this->db->query($sql);
        
        return $this->db->affected_rows() > 0;
    }
}