<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 专题
 */
class Special_model extends MBase{
    
    protected $tableName = 'cms_special';
    
    protected $pk = "special_id";
    
    protected $rules = array(
        array('title', 'required'),
    );
    
    protected $fieldTitles = array(
        'title' => '专题标题',
    );
    
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
        
        if($isInsert){
            $this->cdate = time();
        }
        return true;
    }
    
    /**
     * 给列表加入请求地址
     * 
     * @param string $list
     * @param type $type
     * @return string
     */
    public function insertUrl($list,$type){
        
        $fixUrl = $type == 1 ? "sd" : "ad";
        foreach($list as $key => $val){
            if(isset($val['url']) && !empty($val['url'])){
                $list[$key]['surl'] = $val['url'];
            }else{
                $list[$key]['surl'] = "/info/{$fixUrl}?id=".$val["special_id"]."&mid=".$val["model_id"];
            }
        }
        return $list;
    }
    
}