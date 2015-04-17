<?php
/**
 * 后台管理员认证类
 */

class Admin {
    
    const PWD_PREFIX = 'Md(009Mkdaaq';//密码混淆前缀
    
    const USR_COOKIE_KEY = '*&Mdd28H0M<=//-+@sdsGGk';
    
    const USR_CACHE_KEY = "A";

    private $ci = NULL;
   
    private $token = NULL;
    
    private $adminTabel = "cms_admin_list";
    
    private $adminGroupTabel = "cms_admin_group";
    
    /**
     * 用户信息
     * 
     * @var type 
     */
    private $info = array();//用户信息

    
    public function __construct() {
        
        $this->ci = & get_instance();
        
        if (isset($_COOKIE['token'])) {
            $this->token = $_COOKIE['token'];
            
            $key = self::USR_CACHE_KEY . $this->token;
            $this->info = $this->getUserInfo();
            if ($this->info === false) {
                $this->info = array();
            } else {
                $this->info = (array)$this->info;
            }
        }
        
    }

    /**
     * 生成密码
     * @param string $realName  真实姓名，可作为登录的凭证
     * @param string $password
     * @return string
     */
    public static function makePwd($realName, $password) {
        
        return md5($realName . self::PWD_PREFIX . $password);
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
     * 登录检测
     * @param string $name  真实姓名或员工号
     * @param string $password
     * @return int  小于0表示有异常，
     */
    public function login($name, $password) {
        
        $where = "aname='{$name}'";
        
        $sql = "SELECT a.*,b.* from {$this->adminTabel} as a left join {$this->adminGroupTabel} as b on b.group_id = a.group_id where {$where} ";
        
        $query = $this->ci->db->query($sql);
        
        if ($query->num_rows() == 0) {
            return -1;//无此用户
        }
        
        if ($query->row()->apass != self::makePwd($query->row()->aname, $password)) {
            return -2;//密码错误
        }
        
        if ($query->row()->g_state == 1) {
            return -3;//所在组被禁用
        }
        
        if ($query->row()->astate == 1) {
            return -4;//用户被禁用
        }
        
        return $query->row()->admin_id;
    }
    
    /**
     * 更新认证
     * @param int $adminId
     * @param int $time 认证有效期，单位：秒
     * @return mixed 成功返回token，失败返回false
     * 
     */
    public function update($adminId, $time = 0) {

        if ($time <= 0) {
            $time = 3600;//30分钟内不用登录
        }
        
        if (headers_sent()) {
            throw new Exception('your page has output, do not set cookie for auth.');
        }
        
         $sql = "SELECT a.*,b.* from {$this->adminTabel} as a left join {$this->adminGroupTabel} as b on b.group_id = a.group_id where admin_id = {$adminId} ";
         
        $query = $this->ci->db->query($sql);

        if ($query->num_rows() == 0) {
            return false;
        }
        
        $data = $query->row_array();
        $data['loginTime'] = time();
        $data['loginIp'] = $this->ci->input->ip_address();
        $data['userRoleAccess'] = array_unique(explode(',', $data['alevel'].",".$data['g_urank']));
        
        $this->info = $data;
       
        $token = self::makeToken($data['aname']);
        
        $this->setSession();
        
        $this->ci->db->query("UPDATE {$this->adminTabel} SET last_loginip='" . $data['loginIp'] . "', last_logintime=" . time() . ' WHERE admin_id =' . $adminId);
        
        setcookie('token', $token, time() + $time, '/');
        
        $this->token = $token;

        return true;
    }
    
    /**
     * 保存信息到session中
     * 
     * @param type $token
     * @param type $data
     * @param type $time
     */
    private function setSession(){
        
        $_SESSION['admin'] = array("token"=>  $this->token,"info"=>  $this->info);
    }

    /**
     * 检测是否有效访问指定的模块
     * @param string $moduleIdentity
     * @return mixed 成功返回true，失败返回负数
     */
    public function isValid($moduleIdentity = '') {
        
        if ($this->token == NULL) {
            return -1; //没有指定token
        }
        
        if (!$this->info) {
            return -2;//不存在用户
        }
        
        //超级管理员权限
        if ($this->info["userRoleAccess"] == 100){
            return true;
        }
        
        if (in_array($moduleIdentity, $this->info['userRoleAccess'])) {
            return true;
        }
        
        return -3;//无效的访问
    }

    /**
     * 取得当前的token
     * @return string
     */
    public function getToken() {
        
        return isset($_SESSION['admin']['token']) ? $_SESSION['admin']['token'] : '';
        //return $this->token;
    }
    
    /**
     * 取得用户信息
     * @return array
     */
    public function getUserInfo($key = NULL) {
        
        if ($key == NULL) {
            return isset($_SESSION['admin']['info']) ? $_SESSION['admin']['info']  :  array();
        } else {
            return isset($_SESSION['admin']['info'][$key]) ? $_SESSION['admin']['info'][$key] : '';
        }
    }
    /**
     * 判断是否登入
     */
    public function  isLogin(){
        
        $infoId = $this->getUserInfo('admin_id');
        
        if (!empty($infoId)) {
            return true;
        }
        
        return false;
    }
    
    /**
     * 登出
     */
    public function logout() {
        
        session_destroy();
        set_cookie('token', '', time() - 1);
        return true;
    }
}