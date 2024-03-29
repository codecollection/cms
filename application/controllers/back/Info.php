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
    
    public $modelTitle = "" ;
    public $modelFields = array();
    
    function __construct() {

       parent::__construct();
       //$this->addJs($this->controllerId . ".js");
       $this->loadModel("model");
       $this->loadModel("field");
       $this->loadModel("cate");
       
       
    }

    public function index(){
        
        $this->setModelName();
        
        $this->setMinNav(array('url'=>"",'title'=>  $this->modelName));
        
        $this->lists();
        
    }
    
    public function add() {
        $this->setModelName();
        
        $this->getTpl();
        parent::add();
        //$this->renderAdminView($this->viewDir(2));
    }

    public function edit(){
        $this->setModelName();
        $this->getTpl();
        parent::edit();
    }

    public function save(){
        $this->setModelName();
        parent::save();
    }
    
    public function delete() {
        
        $this->setModelName();
        parent::delete();
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
    public function setModelName($modelId = null){
        //根据分类取
        $cateId = $this->getData('cateId');
        if($modelId === null){
        if(is_numeric($cateId) && $cateId > 0 ){
            
            $modelId = $this->cate->getField($cateId,'model_id');
            
            
            $this->bindModel->where("last_cate_id=". $cateId);
        }else{
            
            //根据模型ID取
            $modelId = $this->getData('modelId');
        }
        }
        
        if(!is_numeric($modelId) && $modelId <= 0 ){ 
            
            $this->echoAjax(100, lang('param_error'));
        }
        
        
        //获取模型对应的表名称
        $modelName = $this->model->getField($modelId,"model_name"); 
        $this->modelName = $modelName;
        $this->bindModel->tableName = $modelName;
        $this->bindModel->setPk($modelName."_id");
        //获取模型下面的字段
        $this->modelFields = $this->model->getRelationField($modelId);
        $this->setData('cateId', $cateId);
        $this->setData('modelId', $modelId);
    }
    
    
    public function sonModel(){
        
        $infoId = $this->getData("id");
        
        $modelId = $this->getData("modelId");
        
        $sonModelId = $this->model->getSonModelId($modelId);
        $this->setModelName($sonModelId);
        
        $page = $this->getData('p');
        
        $this->bindModel->where("last_cate_id = " . $infoId);
        
        $this->bindModel->page($page, PAGESIZE);
        
        $this->setSearch();
        $lists = $this->bindModel->search();
        $params = array();
        
        
        $data = array('page' => RKit::getPageLink("/back/" . strtolower(get_class($this)) . "?" . http_build_query($params), $lists['count']),
            'list' => $lists,
        );
        
        $this->setMinNav(array('title'=> "子模型" . $this->controllerTitle ,'url'=>"/back/".$this->controllerId . "/list"));
        $this->setData("modelId", $sonModelId);
        $this->setData("cateId", $infoId);
        $this->renderAdminView($this->viewDir(3,"list_son"),$data);
    }
    
    public function addSon(){
        
        $this->activeModule = $this->level."04";
        $this->checkPermission($this->level . '04'); //检测权限

        $modelId = $this->getData("modelId");
        
        $this->setModelName($modelId);
        
        $data = $this->bindModel->getDefaultValue();
        
        $renderData = array('data' => $data);

        
        $this->setMinNav(array('title'=> "添加子模型" . $this->controllerTitle ,'url'=>"/back/".$this->controllerId . "/edit"));
        
        $this->renderAdminView($this->viewDir(3,"edit_son"), array_merge($renderData, array()));
    }
    
    public function editSon(){
        $this->activeModule = $this->level."02";
        //检测权限
        $this->checkPermission($this->level . '02');
        $id = $this->getData('id');

        $modelId = $this->getData("modelId");
        
        $this->setModelName($modelId);
        
        $data = $this->bindModel->find($id);
        $this->setMinNav(array('title'=>"编辑子模型" . $this->controllerTitle,'url'=>"/back/".$this->controllerId . "/edit?id=" . $id));
        
        $this->renderAdminView($this->viewDir(3,"edit_son"), array('data' => $data, 'pageId' => 'p_add_' . $this->controllerId));
        
    }
}
