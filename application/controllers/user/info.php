<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户信息
 */
class Info extends CUserBase {

    protected $controllerId = "info";
    
    public $topLevel = "B";
    
    public $level = "B01";
    
    public function __construct() {

       parent::__construct();
       $this->addJs("info.js");
       
    }

    public function index(){
        
        $user = $this->u->find($this->userId);
        
        $this->setData("user", $user);
        
        $this->renderUserView("user");
    }
    
    public function edit(){
        
        $this->level = "B02";
        
        $user = $this->u->find($this->userId);
        
        $this->setData("user", $user);
        
        $this->renderUserView("info");
    }
    
    public function save(){
        
        $id = $this->getData('id');
        $data = $this->getData('data');
        
        $data['birth_day'] = strtotime($data['birth_day']);
        
        $status = $this->u->setAttrs($data)->setPkValue($id)->save($id == 0);
        
        if ($status) {
            
            $this->echoAjax(0, '编辑信息成功');
        } else {
             
            $this->echoAjax(100, '编辑信息失败');
        }
    }
}
