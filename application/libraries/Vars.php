<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 处理系统中数字和信息的相互匹配，如 0=男，1=女之类的信息
 */
class Vars {
    /*
     * 预定义变量列表
     */
    public static $fields = array(
        // 用户性别
        'gender' => array(
            array('value' => '0', 'txt' => '男', 'txt_color' => ''),
            array('value' => '1', 'txt' => '女', 'txt_color' => ''),
        ),
        'level' => array(
            array('value' => '1', 'txt' => '初级', 'txt_color' => ''),
            array('value' => '2', 'txt' => '中级', 'txt_color' => ''),
            array('value' => '3', 'txt' => '高级', 'txt_color' => ''),
        ),
        'role_status' => array(
            array('value' => '0', 'txt' => '正常', 'txt_color' => ''),
            array('value' => '1', 'txt' => '禁用', 'txt_color' => ''),
        ),
        //状态显示操作的文字，比如正常状态，显示禁用按钮
        'act_status' =>  array(
            array('value' => '0', 'txt' => '禁用', 'txt_color' => ''),
            array('value' => '1', 'txt' => '启用', 'txt_color' => ''),
        ),
        
        //班型
        'class_type' => array(
            array('value' => '1', 'txt' => '1VIP', 'txt_color' => ''),
            array('value' => '3', 'txt' => '3VIP', 'txt_color' => ''),
            array('value' => '6', 'txt' => '6人班', 'txt_color' => ''),
            array('value' => '12', 'txt' => '12人班', 'txt_color' => ''),
        ), 
       //级别
       'cate_level' =>array(
            array('value' => '1', 'txt' => '初级', 'txt_color' => ''),
            array('value' => '2', 'txt' => '中级', 'txt_color' => ''),
            array('value' => '3', 'txt' => '高级', 'txt_color' => ''),
        ), 
        //模块功能是否在左边的导航栏显示
       'is_show' => array(
            array('value' => '0', 'txt' => '显示', 'txt_color' => ''),
            array('value' => '1', 'txt' => '不显示', 'txt_color' => ''),
       ),
        'homework_status'=>array(
            array('value' => '0', 'txt' => '正常', 'txt_color' => ''),
            array('value' => '1', 'txt' => '禁用', 'txt_color' => ''),
        ),
        //请假状态
        'sign_status'=>array(
            array('value' => '0', 'txt' => '正常', 'txt_color' => ''),
            array('value' => '1', 'txt' => '请假', 'txt_color' => ''),
            array('value' => '2', 'txt' => '迟到', 'txt_color' => ''),
            array('value' => '3', 'txt' => '未签到', 'txt_color' => ''),
        ),
    );

    /*
     * 根据下标和只返回节点信息
     * 
     * @param string 节点的下标，唯一，如：gender，
     * @param int 节点的数值  ，如：1
     * 
     * @return string 节点下面值对应的信息
     */
    private static function get_field_str($node, $value) {
        // 遍历某个节点
        foreach(vars :: $fields[$node] as $f) {
            if ($f['value'] == $value) {
                return $f; //print_r($field);
            }
        }
        return array('value' => '', 'txt' => '-', 'txt_color' => '');
    }

    /*
     * 根据节点的下标和节点值返回带有预定义样式的节点信息html
     * 
     * @param string 节点下标
     * @param int 节点下标对应的值
     * @param string 可以为空,是否返回html，默认返回，如果要返回字符信息，可以传入值如：txt
     *     
     * @return string 返回的节点对应的html标识 如：<span color="red">禁用</span>
     */
    public static function get_field($node, $value, $type = '') {
        $field = vars :: get_field_str($node, $value); //print_r($field);
        if ($type == 'txt') {
            return $field['txt'];
        } else {
            return '<span color="' . $field['txt_color'] . '">' . $field['txt'] . '</span>';
        }
    }
    /*
     * 输出几点的html表单，可以是下拉框，单选框框等信息
     * 
     * @param array node => 定义的节点下标，如：gender
     *                 type => html表单样式的类型，如：select ，checkbox,radio
     *                 default => 默认选中的值，
     *                 name => 表单名称的后缀名，它和node一起组合成 表单的name属性，用户同一个页面多次出现时使用
     *     
     * @return string 带有html 的表单信息 
     */
    public static function get_input($params) {
        // 初始化
        $node = isset($params['node'])?$params['node']:'';
        $type = isset($params['type'])?$params['type']:'select';
        $default = isset($params['default'])?$params['default']:'';
        $name = isset($params['name'])?$params['name']:'';
        // 下拉框
        if ($type == 'select') {
            $html = '<select name="' . $node . $name . '" id="' . $node . $name . '">';
            foreach(vars :: $fields[$node] as $f) {
                $select = '';
                if (strlen($default) > 0 && $f['value'] == $default) $select = ' selected';
                $html .= '<option value="' . $f['value'] . '"' . $select . '>' . $f['txt'] . '</option>';
            }
            $html .= '</select>';
            return $html;
        }
        // 单选框
        if ($type == 'radio') {
            $html = '';
            foreach(vars :: $fields[$node] as $f) {
                $select = '';
                if (strlen($default) > 0 && $f['value'] == $default) $select = ' checked';
                $html .= '<input type="radio" name="' . $node . $name . '" value="' . $f['value'] . '"' . $select . '>&nbsp;' . $f['txt'] . '&nbsp;&nbsp;';
            }
            return $html;
        }
        // 复选框
        if ($type == 'checkbox') {
            $html = '';
            foreach(vars :: $fields[$node] as $f) {
                $select = '';
                if (strlen($default) > 0 && $f['value'] == $default) $select = ' checked';
                $html .= '<input type="checkbox" name="' . $node . $name . '" value="' . $f['value'] . '"' . $select . '>&nbsp;' . $f['txt'] . '&nbsp;&nbsp;';
            }
            return $html;
        }
        return '-';
    }
}
