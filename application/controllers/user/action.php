<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户操作
 */
class Action extends CUserBase {

    protected $controllerId = "info";
    
    public function __construct() {

       parent::__construct();
       
    }

    /**
     * 保存评论
     * data 必须包含 array('model_id','info_id','content');
     * data 还可以有 parent_id,son,good,bad,
     */
    public function doComment(){
        $this->loadModel("comment");
        
        $data = $this->getData('data');
        
        $data['ip'] = $this->input->ip_address();
        $data['uname'] = $this->u->getUserInfo("unick");
        $data['avator'] = $this->u->getUserInfo("uavator");
        $data['uid'] = $this->u->getUserInfo("user_id");
        
        $this->comment->setAttrs($data)->save();
        
        $this->setModel($data['model_id']);
        
        $this->info->numField = "comments";
        $this->info->updateNum($data['info_id']);
        
        $this->echoAjax(0, '',$data);
        
    }

    /**
     * 保存喜欢数据
     */
    public function doLike(){
        $this->loadModel("like");
        
        $modelId = $this->getData('modelId');
        $infoId = $this->getData('id');
        
        $this->like->addLike($this->userId,$infoId,$modelId);
        
        $this->setModel($modelId);
        
        $this->info->numField = "like";
        $this->info->updateNum($infoId);
        
        $this->echoAjax(0, '');
        
    }
}
