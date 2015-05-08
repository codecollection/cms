<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  分类
 */
class Cate extends CAdminBase {

    public $controllerId = "cate";
    
    public $topLevel = "C";
    
    public $level = "C02";
    
    //分类是否在导航上面显示
    protected $insertNav = array( 
        "nav_show" => array( 
            array("value"=>1,"txt"=>"显示","color"=>"green"),
            array("value"=>0,"txt"=>"隐藏","color"=>"red"),
        )
    );
            
    function __construct() {

       parent::__construct();
       
    }

    /**
     *  列表
     */
    public function index(){
        
        $pid = $this->getData("pid");
        
        if(is_numeric($pid) && $pid > 0){
            
            $this->bindModel->where("parent_id = " . $pid);
        }
        
        //获取目录树
        
        if(1==1){
            $params['tree']=$this->bindModel->cate_brother();
        }else{
            $params['tree']=$this->bindModel->cate_brother($cate_id);
            $params['loop_limit']=2;
        }
        $params['checkbox']=0;
        $params['is_expand_all']=1;
        $params['url']='category.php';
        $params['url_force']=1;
        $treeHtml = $this->bindModel->show_tree($params);
        //print_r($treeHtml);
        $this->setData("treeHtml",$treeHtml);
        $this->lists();
    }
    
    public function add(){
        
        $this->getTpl();
        parent::add();
    }
    
    public function edit() {
        $this->getTpl();
        parent::edit();
    }

    /**
     * 获取模板
     */
    private function getTpl(){
        
        $this->load->helper("directory");
        $files = directory_map("./application/views/front/default");
        $coverTpl = $listTpl = $detialTpl = array(array("txt"=>"默认模板","value"=>""));
        
        foreach ($files as $file) {
            $f = array("txt"=>$file,"value"=>$file);
            if(preg_match("~cover~", $file)){
                array_push($coverTpl, $f);
            }
            if(preg_match("~list~", $file)){
                array_push($listTpl, $f);
            }
            if(preg_match("~content~", $file)){
                array_push($detialTpl, $f);
            }
        }
        
        $this->vars->set_fields("tpl_index",$coverTpl);
        $this->vars->set_fields("tpl_list",$listTpl);
        $this->vars->set_fields("tpl_content",$detialTpl);
    }

    public function getModelSelect($default = 1){
        $this->loadModel('model');
        $models = $this->model->fields("model_id,model_title")->search(FALSE);
        
        $fields = array();
        foreach($models as $model){
            $f['txt'] = $model['model_title'];
            $f['value'] = $model['model_id'];
            array_push($fields, $f);
        }
        
        $this->vars->set_fields('model',$fields);
        return $this->vars->input_str(array("node"=>"model","default"=>$default,"type"=>"select_single","name"=>"model_id"));
    }
    
}
