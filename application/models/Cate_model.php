<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 分类模型
 *
 */
class Cate_model extends MBase{
    
    protected $tableName = 'cms_category';
    
    protected $pk = "cate_id";
    
    public function  __construct(){
        parent::__construct();
    }
}