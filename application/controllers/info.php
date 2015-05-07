<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CBase {

    public $page;
    /**
     * 首页
     */
    public function index(){
       
        $this->renderHTMLView("index");
    }
    
    /**
     * 分类列表
     * cid 分类ID
     * p 当前分页
     */
    public function l(){
        
        $cid = $this->getData('cid');
        $p = $this->getData('p');
        
        $this->cid = $cid;
        
        $cateData = $this->cate->find($cid);
        
        //如果p小于等于0.则表示是分类下面的首页
        if(empty($p) || $p <=0 ){
            $tplIndex = $cateData["tpl_index"];
        }
         
        $tpl = empty($tplIndex) ? $cateData['tpl_list'] : $tplIndex;
        $tplList = empty($tpl) ? "list" : $tpl;
        
        $this->renderHTMLView($tplList);
    }

    /**
     * 详情页
     */
    public function d(){
        
        $id = $this->getData('id');
        
        $modelId = $this->getData('mid');
        $this->setModel($modelId);
        
        $d = $this->info->find($id);
        
        print_r($d);
    }

    /**
     * 获取分类
     * @return type
     */
    public function getCate(){
       
        return $this->cate->categories;
    }
    
    /**
     * 获取列表
     * @return type
     */
    public function getList(){
        
        $cateId = $this->getData('cid');
        $p = $this->getData('p');
        
        $modelId = $this->cate->getField($cateId,'model_id');
        //获取模型对应的表名称
        $this->setModel($modelId);
        
        $this->info->page($p, PAGESIZE);
        
        $lists = $this->info->search();
        
        $lists['list'] = $this->info->insertUrl($lists['list'],$modelId);
        $this->page =  RKit::getPageLink("/info/cate?" . http_build_query(array()), $lists['count']);
        
        return $lists;
    }

    /**
     * 获取配置
     * 
     * @param type $key
     * @return type
     */
    public function getConfig($key){
        
        return RConfig::get($key);
    }
    
    /**
     * 获取广告位下面的广告
     * 
     * @param type $areaId 广告位ID
     * @return type
     */
    public function getAd($areaId){
        
        return array();
    }
}
