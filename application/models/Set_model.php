<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 配置
 *
 */
class Set_model extends MBase{
    
    protected $tableName = 'cms_configs';
    
    protected $pk = "ckey";
    
    protected $rules = array(
        array('title', 'required'),
        array('ckey', 'required'),
        array('cvalue', 'required'),
    );
    
    protected $fieldTitles = array(
        'title' => '配置标题',
        'ckey' => '配置key',
        'cvalue' => '配置值',
    );
    
    protected $unique = array("ckey");
        
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
        if($isInsert){
           
            $this->checkoutUnique($isInsert);
        }else{
            $this->pk = "config_id";
            $this->checkoutUnique($isInsert);
        }
    }
}