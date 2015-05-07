<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CBase {

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
    public function cate(){
        
        $this->loadModel("cate");
        
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
     * 获取分类
     * @return type
     */
    public function getCate(){
       
        $this->loadModel("cate");
        
        return $this->cate->categories;
    }
    
    /**
     * 获取列表
     * @return type
     */
    public function getList(){
        $cateId = $this->getData('cid');
        $p = $this->getData('p');
        
        return array();
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
