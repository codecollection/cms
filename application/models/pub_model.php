<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 公众号管理
 *
 */
class Pub_model extends MBase{
    
    public $tableName = 'cms_public';
    
    protected $pk = "";
    
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
    
    /**
     * 给列表加入请求地址
     * 
     * @param string $list
     * @param type $modelId
     * @return string
     */
    public function insertUrl($list,$modelId){
        
        foreach($list as $key => $val){
            
            $list[$key]['surl'] = "/info/d?id=".$val[$this->tableName."_id"]."&mid=".$modelId;
            $list[$key]["desc"] = empty($val["desc"]) ? RKit::utf8_substr(strip_tags($val["body"]),0, 220) : $val["desc"];
        }
        
        return $list;
    }
    
    /**
     * 根据子模型获取到文档的详细信息
     * 
     * @param type $id
     */
    public function getD2($id){
        $sonModel = "cms_house";
        $model = "cms_apartment";
        
        $sql = "select A.*,B.{$model}_id as apartmentId,B.model_id as ModelId,B.last_cate_id as CateId,B.title as Title, B.img_url as imgUrl, B.desc as description,B.body as Body, B.tag as Tag, B.payway ,B.original_price ,B.discount_price, B.service_charge,B.area, B.room_num,B.floor,B.configure,B.interest,B.house_style,B.style_desc,B.address,B.address_desc,B.isElevator,isSubway from {$sonModel} as A left join {$model} as B on B.{$model}_id = A.{$sonModel}_id where A.{$sonModel}_id = {$id}";
        
        $query = $this->db->query($sql);
        
        return $query->row_array();
    }
}