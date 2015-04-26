<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  字段管理
 */
class Field extends CAdminBase {

    public $controllerId = "field";
    
    public $topLevel = "D";
    
    public $level = "D02";
    
    private $regFlash = "/\{(.*?)\}/";
            
    function __construct() {

       parent::__construct();
       
       $this->addJs($this->controllerId.".js");
    }

    /**
     *  列表
     */
    public function index(){
        
        //获取字段标签
        $fieldTags = $this->bindModel->getTags();
        
        $this->setData("fieldTags", $fieldTags);
        
        $this->lists();
    }
    
    public function flash(){
        
        $this->setData('page', '');
        $this->renderAdminView($this->viewDir(3,"flash"));
    }

    /**
     * {标题}{title}{varchar(100) not null}{input}{}{这个是标题}{100}{测试}
     */
    public function doFlash(){
        
        //检测权限
        
        $data = $this->getData('data');
        
        $flashes = explode(PHP_EOL, $data);
        
        $flashData = array();
        foreach($flashes as $f){
            
            if(preg_match_all($this->regFlash, $f, $flashData) && count($flashData[1]) == 8){
                $fd = $flashData[1];
                $field = array(
                    'title'=>$fd[0],
                    'field'=>$fd[1],
                    'field_type'=>$fd[2],
                    'form_type'=>$fd[3],
                    'form_value'=>$fd[4],
                    'field_remark'=>$fd[5],
                    'forder'=>$fd[6],
                    'field_tag'=>$fd[7],
                );
                
                $res = $this->bindModel->setAttrs($field)->setPkValue(0)->save(true);
            }
        }
        if($res){
            $this->successAjax();
        }else{
            $this->echoAjax(100, $this->bindModel->errorMessage);
        }
        
    }

    protected function setSearch() {
        
        $s = RKit::getData('tag');
        
        if(!empty($s['tag'])){
            $this->bindModel->where("field_tag=".$this->db->escape($s['tag']));
        }
        
        parent::setSearch();
    }
    

}
