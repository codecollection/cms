<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 字段管理模型
 *
 */
class Field_model extends MBase{
    
    protected $tableName = 'cms_fields';
    
    protected $pk = "field_id";
    
    public function  __construct(){
        parent::__construct();
    }
    
}