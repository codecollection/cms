<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 模型管理
 */
class Model extends CAdminBase {

    public $controllerId = "model";
    
    public $topLevel = "D";
    public $level = "D01";
    
    public $modelType = array(
        array("value"=>0,"txt"=>"扩展模型"),
        array("value"=>1,"txt"=>"独立模型"),
        );
    public function __construct() {

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
        
        $modelName = $this->bindModel->getField($id,"model_name");
        
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
        
        $this->setMinNav(array('url'=>"/back/model/field?id=".$id,"title"=>$modelName));
        $this->renderAdminView($this->viewDir(0, "field"));
        
    }
    
    /**
     * 保存模型
     */
    public function doField(){
        
        $this->loadModel("modelfield");
        
        $params = $this->getData("params");
       
        $modelId = $this->getData("model_id");
        
        if(!is_array($params) || !is_numeric($modelId)){
            $this->echoAjax(0, '');
        }
        $data = array();
        $this->db->trans_start();
        foreach($params as $k => $v){
            $data["model_id"] = $modelId;
            $data["field_id"] = $v;
            
            if($this->modelfield->isExitRel($modelId,$data["field_id"])){
                continue;
            }
            $this->modelfield->setAttrs($data)->save(true);
        }
       
        //如果不存在表就要创建表
        $this->createTableByModelId($modelId);
        $this->db->trans_complete();
        $this->successAjax();
    }
    
    /**
     * 更新表结构
     */
    public function updateModel(){
        
        $id = $this->getData('id');
        $modelName = $this->bindModel->getField($id,"model_name");
        
        //已经有的字段
        $colums = $this->bindModel->getTableFields($modelName);
            
        //系统字段
        $this->loadModel("field");
        
        $systemFields = $this->field->where("is_system=0")->search(FALSE);
        
        //关系字段
        $relFields = $this->bindModel->getRelationField($id);
        
        $tableFields = array_merge($systemFields,$relFields);
        
        foreach($tableFields as $k => $v){
            if(!in_array($v['field'],$colums)){
                
                $this->bindModel->addColumn($modelName,$v);
            }
        }
            
        $this->successAjax();
    }

    private function createTableByModelId($modelId){
        //系统字段
        $this->loadModel("field");
        
        $systemFields = $this->field->where("is_system=0")->search(FALSE);
        
        //关系字段
        $relFields = $this->bindModel->getRelationField($modelId);
        
        $tableFields = array_merge($systemFields,$relFields);
        
        $this->bindModel->createTable($tableFields,$modelId);
    }
}
