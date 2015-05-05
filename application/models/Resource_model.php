<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 资源管理
 */
class Resource_model extends MBase{
    
    protected $tableName = 'cms_resource_list';
    
    protected $pk = "resource_id";
    
    protected $rules = array(
        array('url', 'required'),
    );
    
    protected $fieldTitles = array(
        'url' => '资源地址',
    );
    
    public function  __construct(){
        parent::__construct();
    }
    
}