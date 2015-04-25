<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 字段管理模型
 *
 */
class Field_model extends MBase{
    
    protected $tableName = 'cms_fields';
    
    protected $pk = "field_id";
    
    protected $rules = array(
        array('title', 'required'),
        array('field', 'required'),
        array('field_type', 'required'),
        array('form_type', 'required')
    );
    
    protected $fieldTitles = array(
        'title' => '标题',
        'field' => '模型字段',
        'field_type' => '字段类型',
        'form_type' => '表单类型',
    );
    
    public function  __construct(){
        parent::__construct();
    }
    
    /*
     * 获取字段标签，方便查看
     */
    public function getTags(){
        
        $sql = "select field_tag from ".$this->tableName. " group by field_tag";
        
        $query =  $this->db->query($sql);
        
        return $query->result_array();
    }
}