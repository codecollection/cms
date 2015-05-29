<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 *  前台用户模型
 */
class U_model extends MBase{
    

    protected $tableName = "cms_user_list";
    public function  __construct(){
        parent::__construct();
    }
    
    
    public function login(){
        
    }
    
    /**
     * 检测用户名是否存在
     * @param type $name
     * @return boolean 存在返回true， 不存在返回false
     * 
     */
    public function checkName($name,$type){
        
        $field = "";
        switch ($type){
            case 1: 
                $field = "uname";
                break;
            case 2: 
                $field = "uphone";
                break;
            case 3:
                $field = "uemail";
                break;
        }
        $sql = "select $field from $this->tableName where uname = " . $this->db->escape($name) . " limit 1";
        
        $this->db->query($sql);
        
        if($this->db->affected_rows() > 0){
            return true;
        }
        
        return false;
    }
    
}