<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 内链
 *
 */
class Nlink_model extends MBase{
    
    protected $tableName = 'cms_nlink';
    
    protected $pk = "nlink_id";
    
    protected $rules = array(
        array('nlink_txt', 'required'),
        array('nlink_url', 'required'),
        array('nlink_url', 'url'),
    );
    
    protected $fieldTitles = array(
        'nlink_txt' => '内链词',
        'nlink_url' => '内链地址',
    );
    
    protected $unique = array("nlink_txt");
    
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
        
        $this->checkoutUnique($isInsert);
        
    }
}