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
    
    protected $rules = array(
        array('model_title', 'required'),
        array('model_name', 'required'),
    );
    
    protected $fieldTitles = array(
        'model_title' => '模型标题',
        'model_name' => '模型表名',
    );
    
    public function  __construct(){
        parent::__construct();
    }
    
    
    public function modelSelect($default = 1){
        $models = $this->fields("model_id,model_title")->search(FALSE);
        
        $fields = array();
        foreach($models as $model){
            $f['txt'] = $model['model_title'];
            $f['value'] = $model['model_id'];
            array_push($fields, $f);
        }
        
        $this->vars->set_fields('model',$fields);
        return $this->vars->input_str(array("node"=>"model","default"=>$default,"type"=>"select_single","name"=>"model_id"));
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
        $sql .= " where b.model_id = {$modelId} order by forder asc,a.field_id asc";
        
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
                    $sql = "alter table `{$modelName}` add column `{$v['field']}` {$v['field_type']} default '{$v['dvalue']}' comment '{$v['title']}' ";
                    
                    $this->db->query($sql);
                }
            }
        }
        return $this->db->affected_rows() > 0;
    }
    
    private function createTableSql($fields,$modelName){
        $sql = "create table if not exists `{$modelName}` (";
        $sql .= " `{$modelName}_id` int(11) unsigned not null auto_increment,";
        $sql .= " `model_id` int(11) not null default 0 comment '模型ID',";
        foreach($fields as $k => $v){
            $sql .= " `{$v['field']}` {$v['field_type']} default '{$v['dvalue']}' comment '{$v['title']}',";
        }
        
        $sql .= " primary key (`{$modelName}_id`)) engine=myisam default charset=utf8;";
        
        return $sql;
    }
    
    private function isExistTable($tableName){
        $sql = " SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '".DB_BASE ."' AND TABLE_NAME = '{$tableName}' ";
        
        $this->db->query($sql);
        
        return $this->db->affected_rows() > 0;
    }
    
    /**
     * 给表添加字段
     * @param type $modelName
     * @param type $v
     */
    public function addColumn($modelName,$v){
        $sql = "alter table `{$modelName}` add column `{$v['field']}` {$v['field_type']} default '{$v['dvalue']}' comment '{$v['title']}' ";
                    
        $this->db->query($sql);
    }
    
    /**
     * 获取子模型ID
     * @param type $modelId
     * @return type
     */
    public function getSonModelId($modelId){
        
        $model = $this->find($modelId);
        
        return $model["cmodel_id"];
    }
    
    
    public function getSonModelName($modelId){
        $sql = "select model_name from {$this->tableName} where cmodel_id = {$modelId}";
        
        $query = $this->db->query($sql);
        
        return $query->row()->model_name;
    }
}