<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cate extends CBase {

    /**
     * 首页
     */
    public function index(){
       
        $this->renderHTMLView("index");
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
