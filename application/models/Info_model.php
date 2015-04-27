<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 文档管理
 *
 */
class Info_model extends MBase{
    
    public $tableName = '';
    
    protected $pk = "model_id";
    
    protected $rules = array(
        array('title', 'required'),
        array('last_cate_id', 'required'),
        array('last_cate_id','int')
    );
    
    protected $fieldTitles = array(
        'last_cate_id' => '分类ID',
        'title' => '标题',
    );
    
    protected $order = 'forder';
    
    public function  __construct(){
        parent::__construct();
    }
    
    /**
     * 获取表已经存在的字段
     * @param type $tableName
     * @return type
     */
    public function getTableFields($tableName){
        
        $sql = "show columns from ". DB_PREFIX.$tableName. " ";
        
        $query =  $this->db->query($sql);
        
        return $query->result_array();
    }
    
    public function saveBefore($isInsert) {
        
        if($isInsert){
            $this->uid = $this->admin->getUserInfo('admin_id');
            $this->uname = $this->admin->getUserInfo('aname');
            $this->cdate = time();
            $this->state = INFO_STATE;
        }else{
            
        }
    }
}