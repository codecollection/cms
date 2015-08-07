<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 前台用户管理
 *
 */
class User_model extends MBase{
    
    protected $tableName = "cms_user_list";
    
    protected $pk = "user_id";
    
    protected $rules = array(
        array('uname', 'required'),
    );
    
    protected $fieldTitles = array(
        'uname' => '登录名称',
    );
    
    protected $unique = array("uname");
            
    protected $status = "ustate";
    
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
    
        //处理密码
        $this->checkPass();
        
        if(!$this->checkoutUnique($isInsert)){return FALSE;}
        
        return true;
    }
    
    /**
     * 处理密码
     */
    private function checkPass(){
        $this->apass = trim($this->upass);
            
        if(!empty($this->upass)){
            $this->upass = $this->u->makePwd($this->uname,$this->upass);
        }else{
            unset($this->apass);
        }
    }
}