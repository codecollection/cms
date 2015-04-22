<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 上次
 * 
 * @author        crane
 */
class Upload_model extends MBase{

    protected $tableName = "";
    

    protected $pk = "flink_group_id";
    
    /**
     * 字段验证
     * @var type 
     */
    protected $rules = array(
        array('flink_group_name', 'required'),
    );
    
    /**
     *
     * @var type 字段对应模块名称
     */
    protected $fieldTitles = array(
        'flink_group_name' => '友链组名称',
    );
    
    public function __construct() {
        
        parent::__construct();
        
    }
    
    
}