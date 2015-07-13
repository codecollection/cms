<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 消息
 */
class Msg_model extends MBase{
    
    protected $tableName = 'cms_ad_list';
    
    protected $areaTable = 'cms_ad_area';


    protected $pk = "ad_id";
    
    protected $rules = array(
        array('ad_name', 'required'),
        array('area_id', 'required'),
        array('area_id', 'int'),
        array('ad_url', 'url'),
    );
    
    protected $fieldTitles = array(
        'ad_name' => '广告标题',
        'area_id' => '广告位',
        'ad_url' => '广告连接',
    );
        
    protected $order = "ad_order";
    
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
        
        $this->start_date = strtotime($this->start_date);
        $this->expire_date = strtotime($this->expire_date);
    }
    
    public function getAd($areaId){
        
        $this->where("area_id = ". $areaId);
        
        return $this->search(FALSE);
    }
}