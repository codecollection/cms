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
    
    protected $unique = array("uanme");
            
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
        $this->apass = trim($this->apass);
            
        if(!empty($this->apass)){
            $this->apass = $this->admin->makePwd($this->aname,$this->apass);
        }else{
            unset($this->apass);
        }
    }
}