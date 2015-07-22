<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 喜欢模型
 */
class Like_model extends MBase{
    
    protected $tableName = 'cms_user_like';
    
    protected $pk = "ul_id";
    
    protected $rules = array(
        
    );
    
    protected $fieldTitles = array(
        
    );
        
    protected $order = "ad_order";
    
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
     * 添加喜欢
     * 
     * @param type $userId
     * @param type $infoId
     * @param type $modelId
     */
    public function addLike($userId,$infoId,$modelId){
        
        $data = array(
            'uid'=>$userId,
            'model_id' => $modelId,
            'info_id' => $infoId,
        );
        
        $this->setAttrs($data)->save();
    }
}