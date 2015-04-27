<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 配置
 *
 */
class Set_model extends MBase{
    
    protected $tableName = 'cms_configs';
    
    protected $pk = "key";
    
    protected $rules = array(
        array('title', 'required'),
        array('key', 'required'),
        array('value', 'required'),
    );
    
    protected $fieldTitles = array(
        'title' => '配置标题',
        'key' => '配置key',
        'value' => '配置值',
    );
    
    protected $unique = array("key");
        
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
        
        $this->checkoutUnique($isInsert);
        
    }
}