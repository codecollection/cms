<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 模型管理模型
 *
 */
class Model_model extends MBase{
    
    protected $tableName = 'cms_model';
    
    public function  __construct(){
        parent::__construct();
    }
    
}