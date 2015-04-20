<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 模型字段关系模型
 *
 */
class Modelfield_model extends MBase{
    
    protected $tableName = 'cms_model_fields';
    
    protected $pk = "m_f_id";
    
    public function  __construct(){
        parent::__construct();
    }
    
    /**
     * 判断关系是否存在
     * 
     * @param type $modelId
     * @param type $fieldId
     * @return boolean
     */
    public function isExitRel($modelId,$fieldId){
        
        $sql = "select m_f_id from ($this->tableName) where model_id = {$modelId} and field_id = {$fieldId} limit 1";
        
        $this->db->query($sql);
        
        if($this->db->affected_rows() > 0){
            return true;
        }
        return false;
    }
    
}