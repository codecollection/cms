<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 资源管理
 */
class Resource_model extends MBase{
    
    protected $tableName = 'cms_resource_list';
    
    protected $resourceInfoTable = "cms_resource_info";
    protected $pk = "resource_id";
    
    protected $rules = array(
        array('resource_url', 'required'),
    );
    
    protected $fieldTitles = array(
        'resource_url' => '资源地址',
    );
    
    public function  __construct(){
        parent::__construct();
    }
    
    /**
     * 获取到关联的文件
     * @param type $infoId
     * @param type $modelId
     * @return type
     */
    public function getFiles($infoId,$modelId){
        
        $sql = "select a.*,b.res_info_id from $this->tableName as a ";
        $sql .= " left join $this->resourceInfoTable as b on b.resource_id = a.resource_id";
        $sql .= " where b.info_id = $infoId AND b.model_id = $modelId";
        
        $query = $this->db->query($sql);
        
        return  $query->result_array();
    }
}