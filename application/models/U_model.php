<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 *  前台用户模型
 */
class U_model extends MBase{
    
    const PWD_PREFIX = 'Md(ljsglfdjg';//密码混淆前缀
    
    protected $tableName = "cms_user_list";
    public function  __construct(){
        parent::__construct();
    }
    
    
    public function login(){
        
    }
    
    public function getUserInfo(){
        return array();
    }

        public function doReg($account,$pwd,$type){
        
        $field = $this->getFieldByType($type);
        
        $data[$field] = $account;
        $data["upass"] = $this->makePwd($account, $pwd);
        $data["reg_date"] = time();
        
        return $this->setAttrs($data)->save();
        
    }

    /**
     * 生成密码
     * @param string $realName  真实姓名，可作为登录的凭证
     * @param string $password
     * @return string
     */
    public function makePwd($realName, $password) {
        
        return md5($realName . self::PWD_PREFIX . $password);
    }
    
    
    /**
     * 检测用户名是否存在
     * @param type $name
     * @return boolean 存在返回true， 不存在返回false
     * 
     */
    public function checkName($name,$type){
        
        $field = $this->getFieldByType($type);
        $sql = "select $field from $this->tableName where uname = " . $this->db->escape($name) . " limit 1";
        
        $this->db->query($sql);
        
        if($this->db->affected_rows() > 0){
            return true;
        }
        
        return false;
    }
    
    private function getFieldByType($type){
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
        
        return $field;
    }
    
}