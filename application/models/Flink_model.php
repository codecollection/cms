<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 友链
 *
 */
class Flink_model extends MBase{
    
    protected $tableName = 'cms_flink';
    
    protected $pk = "flink_id";
    
    protected $rules = array(
        array('flink_name', 'required'),
        array('flink_url', 'required'),
        array('flink_url', 'url'),
    );
    
    protected $fieldTitles = array(
        'flink_name' => '友链名称',
        'flink_url' => '友链连接',
    );
    
    protected $unique = array("flink_url");
        
    protected $order = "flink_order";
    
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
        
        $this->checkoutUnique($isInsert);
        
    }
}