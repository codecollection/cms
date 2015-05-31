<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 友链组
 *
 */
class Flinkg_model extends MBase{
    
    protected $tableName = 'cms_flink_group';
    
    protected $pk = "fink_group_id";
    
    protected $rules = array(
        array('flink_group_name', 'required'),
        array('flink_group_url', 'url'),
    );
    
    protected $fieldTitles = array(
        'flink_group_name' => '友链组名称',
        'flink_group_url' => '友链组地址',
    );
    
    protected $unique = array("flink_group_url");
        
    protected $order = "forder";
    
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
        
        $this->checkoutUnique($isInsert);
        
    }
    
}