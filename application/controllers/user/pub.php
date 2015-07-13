<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 公众号
 */
class Pub extends CUserBase {

    protected $controllerId = "pub";
    
    public $topLevel = "A";
    
    public $level = "A01";
    
    protected $modelTable = "cms_public";
    
    public $type = array(
        "1"=>"服务号",
        "2"=>"订阅号",
        "3"=>"企业号",
    );
    public function __construct() {

       parent::__construct();
       
       $this->loadModel("model");
       $this->addJs("pub.js");
    }

    /**
     *  
     */
    public function index(){
        
        $page = $this->getData('p');
        
        $this->pub->page($page, PAGESIZE);
        
        $lists = $this->pub->search();

        $data = array('page' => RKit::getPageLink("/user/" . strtolower(get_class($this)) . "?" . http_build_query(array()), $lists['count']),
            'list' => $lists,
        );

        $this->renderUserView("pub", $data);
       
    }
    
    
    public function add() {
        
        $this->level = "A02";
        $this->setModelName(3);
        
        parent::add();
        //$this->renderAdminView($this->viewDir(2));
    }

    public function edit(){
        
        $this->level = "A02";
        $this->setModelName(3);
        
        parent::edit();
    }

    public function save(){
        $this->setModelName(3);
        parent::save();
    }
    
    public function delete() {
        
        $this->setModelName();
        parent::delete();
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
    
}
