<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 标签
 */
class Tag_model extends MBase{
    
    protected $tableName = 'cms_tag';
    
    protected $pk = "tag_id";
    
    protected $rules = array(
        array('tag', 'required'),
    );
    
    protected $fieldTitles = array(
        'tag' => '标签',
    );
        
    protected $order = "tag_order";
    
    protected $unique = array("tag");
    
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
        
    }
}