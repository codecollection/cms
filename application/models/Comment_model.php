<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 评论管理模型
 *
 */
class Comment_model extends MBase{
    
    protected $tableName = 'cms_comment';
    
    protected $pk = "comment_id";
    
    protected $rules = array(
        array('comment', 'required'),
        array('info_id', 'required'),
        array('model_id', 'required'),
        array('info_id', 'int'),
        array('model_id', 'int'),
    );
    
    protected $fieldTitles = array(
        'comment' => '评论内容',
        'info_id' => '文章id',
        'model_id' => '模型id',
    );
    
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
        
        if($isInsert){
            $this->cdate = time;
        }
        return true;
    }
}