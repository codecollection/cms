<?php
/**
 * 导航面板类
 */
class NavPanel {
    
    private static $_instance = NULL;
    
    private $ci = NULL;

    private $adminDirName = "back";
    private $menu = array(
        array(
            'title' => "系 统", //功能导航分类
            'url' => '/back/home',
            'level' => 'A',
            'bgimg' => '/style/back/img/menu1/system.png', //导航的样式图片
            'menu'  => array(
                array(
                    'title'=>'管理首页',
                    'url' => '/admin/welcome',
                    'level' => 'A01', //页面权限，也就是列表权限
                    'menu' => array(
                        //array('title' => '', 'level' => ''), //按钮功能配置
                    ),
                ),
                array(
                    'title'=>'网站配置',
                    'url' => '/admin/set',
                    'level' => 'A02', //页面权限
                    'menu' => array(
                        array('title' => '保存设置', 'level' => 'A0201'), //按钮功能配置
                    ),
                ),
                array(
                    'title'=>'缓存管理',
                    'url' => '/admin/cache',
                    'level' => 'A03', //页面权限
                    'menu' => array(
                        array('title' => '清理缓存', 'level' => 'A0301'), //按钮功能配置
                    ),
                ),
                
            ),
        ),
        
        array(
            'title' => '用 户',
            'url' => '/admin/userg',
            'level'=>'B',
            'bgimg' => '/style/back/img/menu1/union.png',
            'menu'  => array(
                array(
                    'title'=>'管理员组',
                    'url' => '/admin/userg',
                    'level' => 'B01', //页面权限
                    'menu' => array(
                        array('title' => '添加编辑', 'level' => 'B0101'), //按钮功能配置
                        //array('title' => '删除用户组', 'level' => 'B0102'), 
                        array('title' => '启用禁用', 'level' => 'B0103'), 
                    ),
                ),
                array(
                    'title'=>'管 理 员',
                    'url' => '/admin/account',
                    'level' => 'B02', //页面权限
                    'menu' => array(
                        array('title' => '增改用户', 'level' => 'B0201'),
                        array('title' => '启用停用', 'level' => 'B0202'),
                    ),
                ),
                array(
                    'title'=>'权限管理',
                    'url' => '/admin/userg/rank',
                    'level' => 'B03', //页面权限
                    'menu' => array(
                        array('title' => '分配权限', 'level' => 'B0301'),
                    ),
                ),
                array(
                    'title'=>'用户分组',
                    'url' => '/admin/userg',
                    'level' => 'B04', //页面权限
                    'menu' => array(
                        array('title' => '添加编辑', 'level' => 'B0101'), 
                        //array('title' => '删除用户组', 'level' => 'B0102'), 
                        array('title' => '启用禁用', 'level' => 'B0103'), 
                    ),
                ),
                array(
                    'title'=>'用户列表',
                    'url' => '/admin/account',
                    'level' => 'B05', 
                    'menu' => array(
                        array('title' => '增改用户', 'level' => 'B0201'),
                        array('title' => '启用停用', 'level' => 'B0202'),
                    ),
                ),
            ),
        ),
        
        array(
            'title' => '文 档',
            'url' => '/back/cate',
            'level'=>'C',
            'bgimg' => '/style/back/img/menu1/info.png',
            'menu'  => array(
                array(
                    'title'=>'文档列表',
                    'url' => '/back/info',
                    'level' => 'C01', //页面权限
                    'menu' => array(
                        array('title' => '添加编辑', 'level' => 'C0101'), //按钮功能配置
                        array('title' => '删除文档', 'level' => 'C0102'),
                        array('title' => '审核文档', 'level' => 'C0103'),
                    ),
                ),
                array(
                    'title'=>'文档分类',
                    'url' => '/back/cate',
                    'level' => 'C02', //页面权限
                    'menu' => array(
                        array('title' => '添加编辑', 'level' => 'C0201'), //按钮功能配置
                        array('title' => '删除分类', 'level' => 'C0202'),
                        array('title' => '移动分类', 'level' => 'C0203'),
                    ),
                ),
            ),
        ),
        array(
            'title' => '模 型',
            'url' => '/back/model',
            'level'=>'D',
            'bgimg' => '',
            'menu'  => array(
                array(
                    'title'=>'模型管理',
                    'url' => '/back/model',
                    'level' => 'D01', //页面权限
                    'menu' => array(
                        array('title' => '添加编辑', 'level' => 'D0101'), //按钮功能配置
                        array('title' => '删除字段', 'level' => 'D0102'),
                        array('title' => '字段管理', 'level' => 'D0103'),
                        array('title' => '更 新 表', 'level' => 'D0104'),
                    ),
                ),
                array(
                    'title' => '模型字段', 
                    'url' => '/back/field',
                    'level'=>'D02',
                    'menu'=>array(
                        array('title'=>'添加编辑数据','level'=>'D0201'),
                        array('title'=>'删除数据','level'=>'D0202'),
                    ),
                ),
            ),
        ),
        
        array(
            'title' => '友 链',
            'url' => '',
            'level'=>'E',
            'bgimg' => '/style/back/img/menu1/extern.png',
            'menu'  => array(
                array(
                    'title'=>'友链组',
                    'url' => '/admin/flinkg',
                    'level' => 'E01', //页面权限
                    'menu' => array(
                        array('title' => '添加编辑', 'level' => 'E0101'), //按钮功能配置
                        array('title' => '删除', 'level' => 'E0102'),
                    ),
                ),
                
                array(
                    'title' => '友链管理', 
                    'url' => '/admin/flink',
                    'level'=>'E02',
                    'menu'=>array(
                        array('title'=>'添加编辑','level'=>'E0201'),
                        array('title'=>'删除友链','level'=>'E0202'),
                        array('title'=>'屏蔽友链','level'=>'E0203'),
                    ),
                ),
            ),
        ),
        
        array(
            'title' => '广 告',
            'url' => '',
            'level'=>'F',
            'bgimg' => '/style/back/img/menu1/extern.png',
            'menu'  => array(
                array(
                    'title'=>'广告位',
                    'url' => '/admin/adArea',
                    'level' => 'F01', //页面权限
                    'menu' => array(
                        array('title' => '添加编辑', 'level' => 'F0101'), //按钮功能配置
                        array('title' => '删除位置', 'level' => 'F0102'),
                    ),
                ),
                
                array(
                    'title' => '广告管理', 
                    'url' => '/admin/ad',
                    'level'=>'F02',
                    'menu'=>array(
                        array('title'=>'添加编辑','level'=>'F0201'),
                        array('title'=>'删除广告','level'=>'F0202'),
                        array('title'=>'下架广告','level'=>'F0203'),
                    ),
                ),
            ),
        ),
        
        array(
            'title' => '标 签',
            'url' => '',
            'level'=>'G',
            'bgimg' => '/style/back/img/menu1/extern.png',
            'menu'  => array(
                array(
                    'title'=>'标签组',
                    'url' => '/admin/tagg',
                    'level' => 'G01', //页面权限
                    'menu' => array(
                        array('title' => '添加编辑', 'level' => 'G0101'), //按钮功能配置
                        array('title' => '删除组', 'level' => 'G0102'),
                    ),
                ),
                
                array(
                    'title' => '标签管理', 
                    'url' => '/admin/tag',
                    'level'=>'G02',
                    'menu'=>array(
                        array('title'=>'添加编辑','level'=>'G0201'),
                        array('title'=>'删除标签','level'=>'G0202'),
                    ),
                ),
            ),
        ),
        
        array(
            'title' => '扩 展',
            'url' => '',
            'level'=>'H',
            'bgimg' => '/style/back/img/menu1/extern.png',
            'menu'  => array(
                array(
                    'title'=>'正文内链',
                    'url' => '/admin/nlink',
                    'level' => 'H01', //页面权限
                    'menu' => array(
                        array('title' => '添加编辑', 'level' => 'H0101'), //按钮功能配置
                        array('title' => '删除', 'level' => 'H0102'),
                    ),
                ),
                
                array(
                    'title' => '推荐位', 
                    'url' => '/admin/recommend',
                    'level'=>'H02',
                    'menu'=>array(
                        array('title'=>'添加编辑','level'=>'H0201'),
                        array('title'=>'删除','level'=>'H0202'),
                    ),
                ),
                
                array(
                    'title' => '评论管理', 
                    'url' => '/admin/comment',
                    'level'=>'H03',
                    'menu'=>array(
                        //array('title'=>'添加编辑','level'=>'H0301'),
                        //array('title'=>'删除','level'=>'H0302'),
                        array('title'=>'屏蔽评论','level'=>'H0303'),
                    ),
                ),
                
                array(
                    'title' => '资源管理', 
                    'url' => '/admin/resource',
                    'level'=>'H04',
                    'menu'=>array(
                        //array('title'=>'添加编辑','level'=>'H0401'),
                        array('title'=>'删除资源','level'=>'H0402'),
                    ),
                ),
            ),
        ),
    );
    
    /**
     * 取得实例
     *
     * @return NavPanel
     */
    public static function getInstance() {

        if (!(self::$_instance instanceof self)) {
            $className = __CLASS__;
            self::$_instance = new $className();
        }

        return self::$_instance;
    }
    
    /**
     * 构造函数
     */
    public function __construct() {
        
        $this->ci = & get_instance();
    }
    
    /**
     * 取得列表菜单
     * @param type $navType
     * @param type $activeModule
     * @return type
     */
    public function getMenus($activeModule,$level = 'A01') {
        
        $item = array();
        $nav = array();
        foreach ($this->menu as $row => $cate){
            $isSelect = FALSE;
            //检测权限
            if(!$this->checkPrem($cate['level']))  { continue; }
            $return[$row] = $cate;
           
            foreach ($cate['menu'] as $key => $val){
                if(!$this->checkPrem($val['level']))  { continue; }
            
                if($activeModule == $val['level']){ 
                    $item = array(array('title'=>$cate['title'],'url'=>$cate['url']),array('title' => $val['title'], 'url' => $val['url']));
                }
                $return[$row]['menu'][$key] = $val;
                foreach ($val['menu'] as $k => $v){
                    if(!$this->checkPrem($v['level']))  { continue; }
                    
                    if($activeModule == $v['level']){ 
                        $item = array(array('title'=>$cate['title'],'url'=>$cate['url']),array('title' => $val['title'], 'url' => $val['url']),array('title' => $v['title'], 'url' => ''));
                        
                    }
                    $return[$row]['menu'][$key][$k] = $v;
                }
            }
            $return[$row]['select'] = $isSelect;
            if($cate['level'] == substr($level, 0, 1)){
            
                $nav = $cate['menu'];
            }
        }
        
        $data['item'] = $item;
        $data['userModules'] = $return;
        $data["nav"] = $nav;
        //print_r($data);
        return $data;
    }
    
    public function getAllMenu(){
        return $this->menu;
    }

    /**
    * 检查用户是否有合法的操作权限
    如果没有权限 直接die('{"":""}');成功则返回true
    * 如果在组权限中有判断到权限就直接返回。如果组权限没有判断到就再判断用户权限。这样就可以给管理员设置超出组的部分权限
    *
    * @param  $level 需要判断的权限值
    * @return boolean 成功返回true 没有权限直接die成json数据
    */
    public function checkPrem($reak) {
        
        // 先判断组权限
        if (!$this->checkGroupPrem($reak)) {
            // 判断用户权限
            if (!$this->checkAccountPrem($reak)){
                return false;
                //RKit::printJson(array('code'=>401,'msg'=>'没有权限操作'));
            }
               
        }
        return true;
    }
    /**
     * 检查用户的操作权限
     *
     * @param  $level 要验证的用户权限
     * @return boolean 成功返回true 失败返回false
     */
    public function checkAccountPrem($level) {
        
        // 在session里面的当前用户拥有的权限
        $ulevel = $_SESSION['admin']['info']['userRoleAccess'];
        // 超级管理员权限直接用特殊常量SUPERADMIN标记，拥有所有权限，如果匹配到直接返回true
        if (in_array(SUPER_ADMIN, $ulevel)) {
            return true;
        }
        // 判断权限
        if (in_array($level, $ulevel)) return true;
        return false;
    }

    /**
     * 检查用户所在组的权限
     *
     * @param  $level 需要判断的权限值
     * @param  $_SESSION ['admin']['group_id'] 所在组ID 在登陆时保存在session中
     * @return boolean 有权限返回true 没有权限返回 false
     */
    function checkGroupPrem($level) {
        
        $group_level = $_SESSION['admin']['info']['userRoleAccess'];
        if (in_array(SUPER_ADMIN, $group_level)) {
            return true;
        }
        
        // 判断权限
        if (in_array($level, $group_level)) return true;
        return false;
    }
//
//    /**
//     * 普通导航树
//     */
//    public function navGroupTree($activeModule) {
//
//        if (!isset($this->ci->module)) {
//            $this->ci->load->model('module_model', 'module');
//        }
//        
//        $userRoleAccess = $this->ci->rauth->getUserInfo('userRoleAccess');
//        $lists = $this->ci->module->getModulesByIdentity($userRoleAccess);//根据模块标识id取得模块详细信息
//      
//        $return = array();
//        $title = '';
//        foreach ($lists as $item) {//重构结果数组
//            
//            if ($item['is_show'] == 1) continue;
//            
//            if (!isset($return[$item['mgroup']])) {
//                $return[$item['mgroup']] = array();
//            }
//            
//            if ($activeModule == $item['module_identity']) {//检测当前哪一个模块处于使用状态
//                $item['isActived'] = true;
//                $title = $item['mgroup'] . ' >> ' . $item['module_name'];
//            } else {
//                $item['isActived'] = false;
//            }
//            
//            $return[$item['mgroup']][] = array(
//                'isActived' => $item['isActived'],
//                'link'      => $item['murl'],
//                'title'     => $item['module_name'],
//                'moduleId' => $item['module_identity'],
//            );
//        }
//        
//        return array(
//            'title' => $title,
//            'lists' => $return,
//        );
//    }
//    
//    /**
//     * 课程顾问导航树
//     */
//    public function navRoleCouCon() {
//        
//        $title1 = lang('menu_CouCon_title1');
//        $title2 = lang('menu_CouCon_title2');
//        $return = array($title1 => array(), $title2 => array());
//        
//        $id = (int)$this->ci->input->get_post('id');
//        $vx = $this->ci->input->get_post('vx');
//        
//        $query = $this->ci->db->query('SELECT cate_name AS title, cate_class_id AS id FROM mgr_cate_class WHERE subject=\'TF\' AND is_special=0');
//        foreach ($query->result_array() as $row) {
//            $return[$title1][] = array(
//                'title' => $row['title'],
//                'isActived' => $row['id'] == $id,
//                'link' => '/admin/cla/timeQuery?id=' . $row['id'],
//                'moduleId' => 'timequery' . $row['id'],
//            );
//        }
//        
//        foreach (RConfig::get('TF_SP_TYPE') as $key => $value) {
//            $return[$title2][] = array(
//                'title' => $value . '设班',
//                'isActived' => $key == $vx,
//                'link' => '/admin/cla/spApply?vx=' . $key,
//                'moduleId' => 'timequery' . $key,
//            );
//        }
//        
//        return array(
//            'title' => '',
//            'lists' => $return,
//        );
//    }
//    
//    
    
}