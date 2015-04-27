<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 文档管理
 */
class Info extends CAdminBase {

    public $controllerId = "info";
    
    public $topLevel = "C";
    
    public $level = "C01";
    
    public $modelName = ""; //模型对应的表明
    
    public $modelFields = array();
    
    function __construct() {

       parent::__construct();
       //$this->addJs($this->controllerId . ".js");
       $this->loadModel("model");
       $this->loadModel("field");
       $this->loadModel("cate");
       
       $this->setModelName();
       
    }

    public function index(){
        
        $this->lists();
        
    }
    
    public function add() {
        
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
     * 设置模型的表名称
     */
    private function setModelName(){
        //根据分类取
        $cateId = $this->getData('cateId');
        if(is_numeric($cateId) && $cateId > 0 ){
            
            $modelId = $this->cate->getField($cateId,'model_id');
        }else{
            
            //根据模型ID取
            $modelId = $this->getData('modelId');
        }
        if(!is_numeric($modelId) && $modelId <= 0 ){ 
            
            $this->echoAjax(100, lang('param_error'));
        }
        
        //获取模型对应的表名称
        $modelName = $this->model->getField($modelId,"model_name"); 
        $this->modelName = $modelId;
        $this->bindModel->tableName = $modelName;
        
        //获取模型下面的字段
        $this->modelFields = $this->model->getRelationField($modelId);
        
    }
    
}
