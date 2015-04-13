<?php
/**
 * 认证类
 */
class RAuth {
    
    
    const PWD_PREFIX = 'Md(009Mkdaaq';//密码混淆前缀
    const USR_CACHE_KEY = 'auth';//用户缓存key，适用于redis
    const USR_COOKIE_KEY = '*&Mdd28H0M<=//-+@sdsGGk';
    

    private $ci = NULL;
    private $redis = NULL;
    
    
    private $token = NULL;
    //系统平台类型
    private $techType = null;
    /**
        array(
            'loginTime' => time(),//本次登录的时间
            'lastLoginTime' => 0,//上次登录的时间
            'loginName' => '',//登录的名称
            'loginIp' => '',//登录的ip
            'lastLoginIp' => '',//上次登录的ip
            'userMail'   => '',//用户邮箱
            'userMobile'   => '',//电话
            'userIdentity'    => '',//用户标识
            'employmentId' => '',//用户id
            'userRoleId' => '',//用户角色id
            'userRoleName' => '',//用户角色名称
            'userRoleIdentity' => '',//用户角色标识
            'userRoleAccess' => array(),//用户能访问的模块列表
            'userRoleWelcome' => '',//用户登录后的跳转url地址
            'userNav'      => '',//用户左侧面板导航方法
            'schoolName'  => '',//分校名称
            'schoolId'    => '',//分校id
            'techType' => '',//教学平台，TF或者SAT等
            'isTeacher' => '',//是否为老师
        );
     * @var array
     */
    private $info = array();//用户信息

    
    public function __construct() {
        
        $this->ci = & get_instance();
        $this->ci->load->library('RRedis');
        $this->redis = new RRedis();
        $this->redis->setNameSpace('usr:');
        
        if (isset($_COOKIE['token'])) {
            $this->token = $_COOKIE['token'];
            
            $key = self::USR_CACHE_KEY . $this->token;
            $this->info = $this->redis->get($key);
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
        
        $where = '';
        if (preg_match("/^N[0-9]{5}$/", $name)) {
            $where = "em_identity='{$name}'";
        } else {
            $where = "real_name='{$name}'";
        }
        
        $query = $this->ci->db->query('SELECT employment_id, em_password, em_identity, real_name, em_status, '
                . ' (SELECT role_status FROM sys_role WHERE role_id = a.role_id) AS role_status FROM sys_employment a WHERE ' . $where);
        if ($query->num_rows() == 0) {
            return -1;//无此用户
        }
        
        if ($query->row()->em_password != self::makePwd($query->row()->real_name, $password)) {
            return -2;//密码错误
        }
        
        if ($query->row()->role_status != 0) {
            return -3;//该角色已禁用
        }
        
        if ($query->row()->em_status == 1) {
            return -4;//用户被禁用
        }
        
        return $query->row()->employment_id;
    }
    
    /**
     * 更新认证
     * @param int $employment_id
     * @param int $time 认证有效期，单位：秒
     * @return mixed 成功返回token，失败返回false
     * 
     */
    public function update($employment_id, $time) {

        if ($time <= 0) {
            $time = 3600;//30分钟内不用登录
        }
        
        if (headers_sent()) {
            throw new Exception('your page has output, do not set cookie for auth.');
        }
        $teacherRoleId = RConfig::get("TEACHERROLEID");
        $query = $this->ci->db->query('SELECT a.employment_id as employmentId, a.role_id AS userRoleId, a.real_name AS loginName, a.em_tel AS userMobile, a.em_email AS userMail, a.subject AS techType, 
            a.em_identity AS userIdentity, a.employment_id AS userId, a.last_logintime AS lastLoginTime, a.last_loginip AS lastLoginIp, a.is_teacher as isTeacher,
            b.module_list AS userRoleAccess, b.role_identity AS userRoleIdentity, b.role_name AS userRoleName, b.nav_type AS userNav, 
            (SELECT murl FROM sys_module WHERE module_identity=b.default_module) AS userRoleWelcome, (SELECT module_list FROM sys_role WHERE role_id = '.$teacherRoleId.') AS userTeacherRole,  sch_id AS schoolId, (SELECT sch_name FROM `mgr_school` WHERE sch_id=a.sch_id) AS schoolName
            FROM `sys_employment` a LEFT JOIN sys_role b ON a.role_id=b.role_id WHERE a.employment_id=' . $employment_id);

        if ($query->num_rows() == 0) {
            return false;
        }
        
        $data = $query->row_array();
        $data['loginTime'] = time();
        $data['loginIp'] = $this->ci->input->ip_address();
        $data['userRoleAccess'] = array_unique(explode(',', $data['userRoleAccess'].",".$data['userTeacherRole']));
        //$data['techType'] = $this->techType; //系统平台类型
        
        $this->info = $data;
       
        $token = self::makeToken($data['userIdentity']);
        $this->redis->set(self::USR_CACHE_KEY . $token, $data, $time);
        
        $this->ci->db->query("UPDATE sys_employment SET last_loginip='" . $data['loginIp'] . "', last_logintime=" . time() . ' WHERE employment_id=' . $employment_id);
        setcookie('token', $token, time() + $time, '/');
        
        $this->token = $token;

        return true;
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
            return -2;//不存在token
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
        
        return $this->token;
    }
    
    /**
     * 取得用户信息
     * @return array
     */
    public function getUserInfo($key = NULL) {
        
        if ($key == NULL) {
            return $this->info;
        } else {
            return $this->info[$key];
        }
    }
    /**
     * 判断是否登入
     */
    public function  isLogin(){
        
        $infoId = $this->getUserInfo('employmentId');
        if ($this->getToken() && !empty($infoId)) {
            return true;
        }
        
        return false;
    }
    /**
     * 登出
     */
    public function logout() {
        
        $this->redis->del(self::USR_CACHE_KEY . $this->token);
        set_cookie('token', '', time() - 1);
        return true;
    }
    
    /*
     * 保存登陆时的平台系统类型，AST或者托福之类的值 
     */
    public function setTechType($techType){
        $this->techType = $techType;
    }
    
}