<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 留言信息管理
 */
class Mess_model extends MBase{
    
    protected $tableName = 'cms_message';
    
    
    protected $pk = "message_id";
    
    protected $rules = array(
        array('nick_name', 'required'),
        array('phone', 'required'),
        array('content', 'required'),
        array('phone', 'phone'),
    );
    
    protected $fieldTitles = array(
        'nick_name' => '姓名',
        'phone' => '电话',
        'content' => '内容个',
    );
    
    public function  __construct(){
        parent::__construct();
    }
    
}