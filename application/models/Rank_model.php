<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 权限管理
 *
 */
class Rank_model extends MBase{
    
    protected $tableName = "cms_admin_list";
    
    protected $pk = "";
    
    public function  __construct(){
        parent::__construct();
    }
    
}