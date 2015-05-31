<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 后台用户管理
 *
 */
class Adm_model extends MBase{
    
    protected $tableName = "cms_admin_list";
    
    protected $pk = "admin_id";
    
    protected $rules = array(
        array('aname', 'required'),
        array('aname_true', 'required'),
        array('aqq', 'qq'),
        array('aemail', 'email'),
        array('aphone', 'phone'),
        array('group_id','int')
    );
    
    protected $fieldTitles = array(
        'aqq' => 'QQ号',
        'aemail' => '邮箱',
        'aphone' => '手机号',
        'group_id' => '管理组ID',
        'aname' => '用户名',
    );
    
    protected $unique = array("aname");
            
    protected $status = "astate";
    
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