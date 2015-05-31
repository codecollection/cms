<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 推荐位
 */
class Recommend_model extends MBase{
    
    protected $tableName = 'cms_recommend_area';
    
    protected $pk = "area_id";
    
    protected $rules = array(
        array('title', 'required'),
    );
    
    protected $fieldTitles = array(
        'title' => '推荐标题',
    );
    
    public function  __construct(){
        parent::__construct();
    }
    
}