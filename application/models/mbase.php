<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 基本数据操作模型
 */
class MBase extends CI_Model{
    
    /**
     * 表名
     * @var string
     */
    protected $tableName = '';
    
    /**
     * 主键
     * @var array/string
     */
    protected $pk = NULL;
    
    /**
     * 主键值
     * @var mixed
     */
    private $pkValue = NULL;

    /*
     * 排序字段
     */
    protected $order = "corder";
    
    
    /**
     * 状态字段
     * @var type 
     */
    protected $status = "";

    /**
     *array(
     *       array('fieldName', 'required'),//必须输入，不能为空
     *       array('fieldName', 'email'),//必须为邮箱
     *       array('fieldName', 'numeric'),//必须为数字
     *       array('fieldName', 'int'),//必须为整数值
     *       array('fieldName', 'minlen', 5),//必须大于5个字符
     *       array('fieldName', 'maxlen', 5),//不能超过5个字符
     *       array('fieldName', 'ip'),//ip
     *       array('fieldName', 'url'),//url
     *       array('fieldName', 'regex'),//正则表达式匹配
     *       array('fieldName', 'callback'),//自定义函数检测
     *   );
     * @var type 
     */
    protected $rules = array();
    
    /**
     *校验的错误信息， 格式
     * array(
     *    array('fieldName', 'msg'), ...
     * );
     * @var array
     */
    private $errors = array();
    
    public $errorMessage = "";
    
    protected $unique = array();
    /**
     * 字段的标题说明
     * array(
     *    'fieldName' => 'title',...
     * )
     * 
     * @var array
     */
    protected $fieldTitles = array();
    
    /**
     * 查询part
     * @var array
     */
    private $select = array();
    
    /**
     * 属性值
     * @var array
     */
    protected $attr = array();
    
    /**
     *
     * @var 
     */
    protected $db;

    /**
     * 构造函数
     */
    public function __construct(){
        
        parent::__construct();
        
        $ci =& get_instance();
        $this->db = $ci->db;
    }
    
    /**
     * 取得属性值
     * @param string $key
     * @return mixed
     */
    public function __get($key) {
        
        if (isset($this->attr[$key])) {
            return $this->attr[$key];
        } else {
            return parent::__get($key);
        }
    }
    
    /**
     * 设置属性值
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value) {
        
        $this->attr[$name] = $value;
    }
    
    /**
     * 判断属性是否存在
     * @param string $name
     * @return boolean
     */
    public function __isset($name) {
        
        return isset($this->attr[$name]);
    }
    
    /**
     * 删除属性
     * @param type $name
     */
    public function __unset($name) {
        
        unset($this->attr[$name]);
    }

    /**
     * 设置属性值
     * @param array $attrs
     * @return \Basic
     */
    public function setAttrs($attrs) {
        
        $this->attr = array_merge($this->attr, $attrs);
        return $this;
    }

    /**
     * 检测数据是否有效
     * @param array $data
     * @return boolean
     */
    protected function checkRules($data) {
        
        
        $this->errors = array();
        foreach ($this->rules as $rule) {
            
            $fieldName = array_shift($rule);
            $ruleName = array_shift($rule);
            
            $method = '_rule' . $ruleName;
            
            if (isset($data[$fieldName])) {
                
                if ($ruleName != 'required' && $data[$fieldName] == '') {//不必须且为空
                    continue;
                }
                
                array_unshift($rule, $data[$fieldName]);
                
                $return = call_user_func_array(array($this, $method), $rule);
                if (!$return && $ruleName != 'callback') {  //回调自己处理错误
                    //$this->errors[] = array($fieldName, sprintf(lang('model_error_' . $ruleName), isset($this->fieldTitles[$fieldName]) ? $this->fieldTitles[$fieldName] : $fieldName));
                    $msg = sprintf(lang('model_error_' . $ruleName), isset($this->fieldTitles[$fieldName]) ? $this->fieldTitles[$fieldName] : $fieldName);
                    RKit::printJson(array("status"=>100,"msg"=>$msg));
                }
            }
        }
        
        return count($this->errors) == 0;
    }
    
    /**
     * 取得默认数据
     * @return array
     */
    public function getDefaultValue() {
        
        $data = $this->db->list_fields($this->tableName);
        
        return array_fill_keys($data, '');
    }

    /**
     * 添加错误信息
     * @param string $fieldName
     * @param string $msg
     */
    public function addError($fieldName, $msg) {
        
        $this->errors[] = array($fieldName, $msg);
    }
    
    /**
     * 检测是否有错误
     * @return boolean
     */
    public function hasError() {
        
        return count($this->errors) > 0;
    }

    /**
     * 取得全部错误
     * @return array
     */
    public function getErrors() {
        
        return $this->errors;
    }


    /**
     * 取得第一个错误
     * @param boolean $isOnlyMsg  是否只取得错误消息，如果是将只返回错误信息字符串
     * @return mixed
     */
    public function getFirstError($isOnlyMsg = false) {
        
        if (count($this->errors) == 0) {
            return array('', '');
        }

        return $isOnlyMsg ? $this->errors[0][1] : $this->errors[0];
    }

    /**
     * 检测是否为空
     * @param string $value
     * @return boolean
     */
    private function _ruleRequired($value) {
        
        return $value != '';
    }
    
    /**
     * 检测是否为有效的邮箱
     * @param string $value
     * @return boolean
     */
    private function _ruleEmail($value) {
        
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    
    /**
     * 检测是否手机号
     * @param type $value
     * @return type
     */
    private function _rulePhone($value){
        
        return preg_match('/^[1][3-8]{1}\\d{9}$/', $value);
    }
    
    /**
     * 检测是否为数字
     * @param string $value
     * @return boolean
     */
    private function _ruleNumeric($value) {
        
        return is_numeric($value);
    }
    
    /**
     * 检测是否为整数
     * @param string $value
     * @return boolean
     */
    private function _ruleInt($value) {
        return $value > 0;
        //return preg_match('/^[0-9]+$/', $value);
    }
    
    /**
     * 最少多少的字符
     * @param string $value
     * @param int $len
     * @return boolean
     */
    private function _ruleMinLen($value, $len) {
        
        return mb_strlen($value) >= $len;
    }
    
    /**
     * 最多不超过字符数
     * @param string $value
     * @param int $len
     * @return boolean
     */
    private function _ruleMaxLen($value, $len) {
        
        return mb_strlen($value) <= $len;
    }
    
    /**
     * 判断是否为ip
     * @param string $value
     * @return boolean
     */
    private function _ruleIp($value) {
        
        return filter_var($value, FILTER_VALIDATE_IP);
    }
    
    /**
     * 判断是否为url
     * @param string $value
     * @return boolean
     */
    private function _ruleUrl($value) {
        
        return filter_var($value, FILTER_VALIDATE_URL);
    }
    
    /**
     * 正则验证
     * @param string $value
     * @param string $regex
     * @return boolean
     */
    private function _ruleRegex($value, $regex) {
        
        return preg_match($regex, $value);
    }
    
    /**
     * 自定义检测函数
     * @param string $value
     * @param string $callback
     * @return boolean
     */
    private function _ruleCallback($value, $callback) {
        
        return $this->$callback($value);
    }

    /**
     * 匹配qq
     * @param type $value
     * @return type
     */
    private function _ruleQq($value){
        
        return preg_match('/[1-9][0-9]{4,}/', $value);
    }
    
    /**
     * 取得查询列表
     * @param string $sql
     * @param array $where
     * @param int $offset
     * @param int $rows
     * @return boolean
     */
    public function lists($sql, $where = array(), $offset = 0, $rows = 30) {
        
        $offset = abs((int)$offset);
        $rows = (int)$rows;

        if ($rows <= 0) {
            $rows = 1;
        }

        if (count($where) > 0) {
            $where = " WHERE " . implode(' AND ', $where);
        } else {
            $where = '';
        }

        $sql = substr(trim($sql), 6);
        $sql = "SELECT SQL_CALC_FOUND_ROWS " . $sql . " {$where} LIMIT {$offset}, {$rows}";

        $query = $this->db->query($sql);
        $queryRows = $this->db->query("SELECT FOUND_ROWS() AS totalCount");
        if ($query->num_rows() < 1) {
            return array('count' => 0,  'list'  => array());

        }
        
        $return = array('count' => $queryRows->row()->totalCount,
                        'list'	=> $query->result_array()
        );

        return $return;
    }
    
    ///////////////////////////////////////select////////////////////////////////////////
    /**
     * 字段
     * @param string/array $fieldNames
     * @return \Basic
     */
    public function fields($fieldNames) {
        
        if (is_array($fieldNames)) {
            $this->select['fields'] = implode(', ', $fieldNames);
        } else {
            $this->select['fields'] = $fieldNames;
        }
        return $this;
    }
    
    /**
     * limit
     * @param int $rows
     * @param int $offset
     * @return \Basic
     */
    public function limit($rows, $offset = -1) {
        
        if ($offset == -1) {
            $this->select['limit'] = array(0, $rows);
        } else {
            $this->select['limit'] = array($offset, $rows);
        }
        
        return $this;
    }
    
    /**
     * order by
     * @param array/string $order
     * @return \Basic
     */
    public function orderBy($order) {
        
        if (is_array($order)) {
            $this->select['orderby'] = ' ORDER BY ' . implode(', ', $order);
        } else {
            $this->select['orderby'] = ' ORDER BY ' . $order;
        }
        
        return $this;
    }
    
    /**
     * group by
     * @param type $group
     * @return \Basic
     */
    public function groupBy($group) {
        
        if (is_array($group)) {
            $this->select['groupby'] = ' GROUP BY ' . implode(', ', $group);
        } else {
            $this->select['groupby'] = ' GROUP BY ' . $group;
        }
        
        return $this;
    }
    
    /**
     * 分页
     * @param int $page
     * @param int $pageSize
     * @return \Basic
     */
    public function page($page, $pageSize) {
        
        if ($page < 1) {
            $offset = 0;
        } else {
            $offset = $pageSize * (intval($page) - 1);
        }
        
        return $this->limit($pageSize, $offset);
    }
    
    /**
     * where
     * @param array/string $where
     * @return \Basic
     */
    public function where($where, $type = 'AND') {
        
        if (is_array($where)) {
            $where = implode(' AND ', $where);
        }
        
        if (isset($this->select['where'])) {
            $this->select['where'] .= ' ' . $type . ' ' . $where;
        } else {
            $this->select['where'] = ' WHERE ' . $where;
        }

        return $this;
    }
    
    /**
     * join
     * @param string $type  LEFT/RIGHT/INNER
     * @param string $tableName
     * @param string $on
     * @return \Basic
     */
    public function join($type, $tableName, $on) {
        
        if (!isset($this->select['join'])) {
            $this->select['join'] = array();
        } 
        
        $this->select['join'][] = $type . ' JOIN ' . $tableName . ' ON ' . $on;
        return $this;
    }
    
    /**
     * like or not like
     * @param string $field
     * @param string $str
     * @return \Basic
     */
    public function like($field, $str, $isNot = false) {
        
        return $this->where($field . ($isNot ?  ' NOT ' : '') . ' LIKE "%' . $this->db->escape_like_str($str) . '%"');
    }
    

    /**
     * 执行查询
     * @param boolean $isCount
     * @return array
     */
    public function search($isCount = true) {
        
        $sql = 'SELECT ';

        if (!isset($this->select['fields'])) {//字段
            $this->select['fields'] = '*';
        }
        if (isset($this->select['join'])) {//join
            $this->select['join'] = implode(' ', $this->select['join']);
        }
        
        
        $sql .= $this->select['fields'] . ' FROM '. $this->tableName . ' A ';
        
        foreach (array('join', 'where', 'groupby', 'orderby') as $value) {
            if (isset($this->select[$value])) {
                $sql .= ' ' . $this->select[$value];
            }
            
            unset($this->select[$value]);//使用过后清除
        }
        
        if (isset($this->select['limit']) && $isCount) {
            $lists = $this->lists($sql, array(), $this->select['limit'][0], $this->select['limit'][1]);
        } else {
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $lists = array('list' => $query->result_array());
                $lists['count'] = count($lists['list']);
            } else {
                $lists = array('list' => array(), 'count' => 0);
            }
        }
        
        unset($this->select['fields'], $this->select['limit']);
        
        return $isCount ? $lists : $lists['list'];
    }

    /**
     * 查找记录
     * @param mixed $pkValue
     * @return boolean/array
     */
    public function find($pkValue) {
        
        $this->setPkValue($pkValue);

        $where = $this->getPkWhere(true);
        $fields = '*';
        if (isset($this->select['fields'])) {//字段
            $fields = $this->select['fields'];
        }
        
        $sql = 'SELECT ' . $fields . ' FROM ' . $this->tableName . ' WHERE ' . $where . ' LIMIT 1';
        
        $query = $this->db->query($sql);
        if ($query->num_rows() != 1) {
            return false;
        }
        
        return $query->row_array();
    }
    
    /**
     * 设置主键值
     * @param mixed $value
     * @return \Base 
     */
    public function setPkValue($value) {
        
        $this->pkValue = $value;
        return $this;
    }
    
    public function setPk($pk){
        $this->pk = $pk;
        return $this;
    }

    /**
     * 取得主键值
     * @return mixed
     */
    public function getPkValue(){
        
        return $this->pkValue;
    }
    /**
     * 取得主键的查询条件
     * @param boolean $isGetString 
     * @return array/string
     */
    public function getPkWhere($isGetString = false) {
        
        $primaryKey = array();
        $primaryValue = array();
        if (!is_array($this->pk)) {
            $primaryKey = array($this->pk);
            $primaryValue = array($this->pk => $this->pkValue);
        }

        $where = array();
        foreach ($primaryKey as $key) {
            if (!$isGetString) {
                $where[$key] = $primaryValue[$key];
            } else {
                $where[] = $key . ' = ' . $this->db->escape($primaryValue[$key]);
            }
        }

        return $isGetString ? implode(' AND ', $where) : $where;
    }

    /**
     * 保存数据
     * @param array $isInsert
     * @return boolean/int
     */
    public function save($isInsert = true) {
        
        $status = $this->checkRules($this->attr);
        
        if (!$status) {
            return false;
        }
        
        if ($this->saveBefore($isInsert) === false) {//保存之前回调
            return false;
        }

        $data = $this->attr;
        
        if ($isInsert) {//插入
            $this->db->insert($this->tableName, $data);
            $insertId = $this->db->insert_id();
            $this->setPkValue($insertId);
        } else {//修改
            
            $where = $this->getPkWhere();
            if (empty($where)) {
                throw new Exception('need update where.');
            }
            
            $this->db->update($this->tableName, $data, $this->getPkWhere());
            if (!is_array($this->pk)) {
                $insertId = $this->pkValue;
            }
        }

        $this->saveAfter($isInsert);
        return $this->db->affected_rows() > 0 ? $insertId : false;
    }
    
    /**
     * 删除记录
     * @return boolean
     */
    public function delete($pkValue = NULL) {
        
        if ($pkValue !== NULL) {
            $this->setPkValue($pkValue);
        }
        
        if (empty($this->pkValue)) {
            return false;
        }
        
        $this->db->delete($this->tableName, $this->getPkWhere());
        return $this->db->affected_rows() == 1;
    }
    
    /**
     * 更多的条件删除记录
     * @param type $where
     */
    public function deletes($where) {
        
        $where = "{$this->pk } in ({$where})";
        $this->db->delete($this->tableName, $where);
        return $this->db->affected_rows() > 0;
    }
    
    /**
     * 修改排序
     * @param type $id
     * @param type $order
     * @return type
     */
    public function order($id,$order){
        
        return $this->update(array($this->order=>$order),  "{$this->pk} = {$id}");
    }

    /**
     * 修改状态
     * @param type $id
     * @param type $status
     * @return type
     */
    public function status($id,$status){
        return $this->update(array($this->status=>$status),  "{$this->pk} = {$id}");
    }
    /**
     * 根据条件更新数据信息
     * 
     * @param type $data
     * @param type $where
     * @return type
     */
    public function update($data,$where){
        
        $this->db->update($this->tableName,$data,$where);
        
        return $this->db->affected_rows() >= 0;
    }

    protected function saveAfter() {}
    
    protected function saveBefore($isInsert) { }
    
    /**
     * 获取某个数据的某个字段的值
     * @param int 要查询的key id
     * @param string $field 字段标识
     * 
     * @return string 
     */
    public function getField($id ,$field){
        $Info = $this->find($id);
        if($Info){
            return $Info[$field];
        }
        return '';
    }
    
    /**
     * 根据唯一限制条件返回字段
     * @param type $field
     * @param type $where 不包含where 关键字
     */
    public function getFieldByWhere($field,$where){
        
       $sql = " select {$field} from {$this->tableName} where {$where} limit 1";
       
       $query = $this->db->query($sql);
       return isset($query->row()->$field) ? $query->row()->$field : '';
    }
    
    /**
     * 
     * @param array $where 多条件显示查询的数组， 如 array("field_id=>1,model_id => 1);
     *
     * @param string $field string 要查询的字段，默认为整条数据
     * @return 
     */
    public function getUnique($where,$field = null){
        
        $f = $field === null ? "*" : $field;
        
        $whe = implode(" and ", $where);
        
        return $this->getFieldByWhere($f, $whe);
        
    }
    
    /**
     * 获取所有列表
     * @return type
     */
    public function getAll(){
        $this->orderBy($this->pk . " ASC");
        return $this->search(FALSE);
    }
    
    public function unique($where,$field = null){
        
        $f = $field !== null ? $field : $this->pk;
        $whe = implode(" and ", $where);
        
        $sql = " select {$f} from {$this->tableName} where {$whe} limit 1";
       
        $this->db->query($sql);
       
        return $this->db->affected_rows() > 0;
    }
    
    public function checkoutUnique($isInsert){
            
        foreach($this->unique as $unique){
       
            if($isInsert){

                if($this->unique(array($unique.' = "' . $this->$unique . '"'), $unique)){
                    
                    $this->errorMessage = sprintf(lang('model_error_unique'),  $this->fieldTitles[$unique]);
                    return false;
                }

            }else{

                if($this->unique(array($unique.' = "' . $this->$unique . '"', $this->pk." != " . $this->getPkValue()),$unique)){
                    $this->errorMessage = sprintf(lang('model_error_unique'),  $this->fieldTitles[$unique]);
                    return false;

                }
            }
        }
        return true;
    }
}