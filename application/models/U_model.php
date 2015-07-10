<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 *  前台用户模型
 */
class U_model extends MBase{
    
    const PWD_PREFIX = 'Md(ljsglfdjg';//密码混淆前缀
    
    const USR_COOKIE_KEY = '*&Mdd28H0lkxc-+@sdsGGk';
    
    protected $tableName = "cms_user_list";
    
    protected $pk = "user_id";
    
    public function  __construct(){
        parent::__construct();
    }
    
    
    /**
     * 登录检测
     * @param string $name  真实姓名或员工号
     * @param string $password
     * @return int  小于0表示有异常，
     */
    public function login($name, $password, $type) {
        
        $field = $this->getFieldByType($type);
        $where = "{$field}='{$name}'";
        
        $sql = "SELECT * from {$this->tableName} where {$where} ";
        
        $query = $this->db->query($sql);
        
        if ($query->num_rows() == 0) {
            return -1;//无此用户
        }
        
        if ($query->row()->upass != $this->makePwd($query->row()->uname, $password)) {
            return -2;//密码错误
        }
        
        if ($query->row()->ustate == 1) {
            return -4;//用户被禁用
        }
        
        return $query->row()->user_id;
    }
    
    public function getUserInfo(){
        return isset($_SESSION["user"]) ? $_SESSION['user'] : array();
    }

    /**
     * 注册
     * @param type $account
     * @param type $pwd
     * @param type $type
     * @return type
     */
    public function doReg($account,$pwd,$type){

        $field = $this->getFieldByType($type);

        $data[$field] = $account;
        $data["upass"] = $this->makePwd($account, $pwd);
        $data["reg_date"] = time();

        return $this->setAttrs($data)->save();
        
    }

    public function updateInfo($userId,$time = 0){
     
        if($time <= 0 ){
            $time = 3600;
        }
        
        
        if (headers_sent()) {
            throw new Exception('your page has output, do not set cookie for auth.');
        }
        
         $sql = "SELECT * from {$this->tableName} where user_id = {$userId} ";
         
        $query = $this->db->query($sql);

        if ($query->num_rows() == 0) {
            return false;
        }
        
        $data = $query->row_array();
        $data['last_login_date'] = time();
        $data['last_login_ip'] = $this->input->ip_address();
        
        $this->info = $data;
       
        $token = self::makeToken($data['uname']);
        
        $this->token = $token;
        
        $this->setSession();
        
        $this->db->query("UPDATE {$this->tableName} SET last_login_ip='" . $data['last_login_ip'] . "', last_login_date=" . time() . ' WHERE user_id =' . $userId);
        
        setcookie('token', $token, time() + $time, '/');

        return true;
        
    }

    private function setSession(){
        $_SESSION["user"] = array("token"=>  $this->token,"info"=>  $this->info, "name"=>  $this->info["uname"],"userId"=>  $this->info["user_id"]);
    }

    /**
     * 生成会话
     * @param mixed $uid
     * @return string
     */
    public static function makeToken($uid) {
        
        return strtoupper(md5(self::USR_COOKIE_KEY . $uid) . md5(time())) . '==/';
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
     * 退出登录
     * @return boolean
     */
    public function logout(){
        session_destroy();
        //set_cookie('token', '', time() - 1);
        return true;
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