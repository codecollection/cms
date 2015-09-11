<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 微信用户
 *
 */
class Wxuser_model extends MBase{
    
    protected $tableName = 'weixin_user';
    
    protected $pk = "open_id";
    
    protected $rules = array(
        array('open_id', 'required'),
        //array('flink_group_url', 'url'),
    );
    
    protected $fieldTitles = array(
        'open_id' => '用户公开id',
        //'flink_group_url' => '友链组地址',
    );
    
    //protected $unique = array("flink_group_url");
        
    //protected $order = "forder";
    
    public function  __construct(){
        parent::__construct();
    }
    
    
}