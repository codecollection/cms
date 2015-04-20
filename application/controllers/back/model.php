<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 模型管理
 */
class Model extends CAdminBase {

    public $controllerId = "model";
    
    public $level = "D01";
    
    function __construct() {

       parent::__construct();
       $this->addJs($this->controllerId . ".js");
    }

    /**
     *  列表
     */
    public function index(){
        
        $this->lists();
    }
    
    /**
     * 
     * 字段管理页面
     */
    public function field(){
        
        $this->checkPermission($this->level . "03");
        
        $this->loadModel("field");
        $this->loadModel("modelfield");
        
        $id = $this->getData('id');
        
        $fieldTag = $this->getData("fieldTag");
//        $modelName = $this->bindModel->getField($id,"model_name");
//        //获取模型存在的表字段
//        $tableFields = $this->bindModel->getTableFields($modelName);
        
        if(!empty($fieldTag)){
            $this->field->like("field_tag",$fieldTag);
        }
        //获取模型配置字段
        $fields = $this->field->search();
        
        $this->setData("fields", $fields);
        
        //获取字段标签
        $fieldTags = $this->field->getTags();
        
        $this->setData("fieldTags", $fieldTags);
        
        $this->setData("model_id", $id);
        $this->renderAdminView($this->viewDir(0, "field"));
        
    }
    
    
    public function doField(){
        
        $this->loadModel("modelfield");
        
        $params = $this->getData("params");
       
        $modelId = $this->getData("model_id");
        
        if(!is_array($params) || !is_numeric($modelId)){
            $this->echoAjax(0, '');
        }
        $data = array();
        foreach($params as $k => $v){
            $data["model_id"] = $modelId;
            $data["field_id"] = $v;
            
            if($this->modelfield->isExitRel($modelId,$data["field_id"])){
                continue;
            }
            $this->modelfield->setAttrs($data)->save(true);
        }
       
        $this->successAjax();
    }
    
    
}
