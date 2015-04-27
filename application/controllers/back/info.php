<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 文档管理
 */
class Info extends CAdminBase {

    public $controllerId = "info";
    
    public $topLevel = "C";
    
    public $level = "C01";
    
    function __construct() {

       parent::__construct();
       //$this->addJs($this->controllerId . ".js");
       $this->loadModel("model");
       $this->loadModel("field");
       $this->loadModel("cate");
    }

    public function index(){
        
        $modelId = $this->getData('modelId');
        
        //获取模型对应的表名称
        $modelName = $this->model->getField($modelId,"model_name"); 
        
        $this->bindModel->tableName = $modelName;
        
        //获取模型下面的字段
        $fields = $this->model->getRelationField($modelId);
        
        $this->setData('fields', $fields);
        $this->setData('modelId', $modelId);
        $this->lists();
        
    }
    
    public function add() {
        
        $modelId = $this->getData('modelId');
        //关系字段
        $externFields = $this->model->getRelationField($modelId);
        
        $this->setData('fields', $externFields);
        $this->renderAdminView($this->viewDir(2));
    }

    /**
     *  文档引导页
     */
    public function home(){
        
        //获取模块
        $models = $this->model->fields("model_id,model_title,model_name")->search(false);
        $this->setData("models", $models);
        
        //获取分类
        $cate = $this->cate->show_tree(array('tree'=>$this->cate->cate_brother(),"url"=>"/back/" . $this->controllerId,"url_force"=>1));
        $this->setData("cateHtml", $cate);
        
        $this->renderAdminView($this->viewDir(3,"home"));
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
