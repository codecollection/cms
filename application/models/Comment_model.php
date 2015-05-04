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
    );
    
    protected $fieldTitles = array(
        'comment' => '评论内容',
    );
    
    public function  __construct(){
        parent::__construct();
    }
    
}