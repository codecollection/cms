<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CBase {

    public $page;
    /**
     * 首页
     */
    public function index(){
       
        $this->renderHTMLView("cover");
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
        
        $tpl = empty($d['tpl_content']) ? "content" : $d['tpl_content'];
        
        $this->setData("d", $d);
        
        $this->renderHTMLView($tpl);
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
    public function getList($cid = null,$pagesize = 10){
        
        if ($cid === null){
            $cateId = $this->getData('cid');
        }else{
            $cateId = $cid;
        }
        $p = $this->getData('p');
        
        $modelId = $this->cate->getField($cateId,'model_id');
        //获取模型对应的表名称
        $this->setModel($modelId);
        
        $this->info->where("last_cate_id=".$cateId);
        
        $this->info->page($p, $pagesize);
        
        $lists = $this->info->search();
        
        $lists['list'] = $this->info->insertUrl($lists['list'],$modelId);
        $this->page = $this->getPageHtml("/info/l?" . http_build_query(array()), $lists['count'],$pagesize);
        
        return $lists;
    }

    public function getContent(){
        //如果有cid，就去分类下面的第一条数据
        $cateId = $this->getData('cid');
        
        $d = array();
        if(is_numeric($cateId) && $cateId>0){
            $modelId = $this->cate->getField($cateId,'model_id');
            $this->setModel($modelId);
            $this->info->where("last_cate_id=".$cateId);
            $this->info->limit(1);
            $dl = $this->info->search(false);
           
            $d =  isset($dl[0]) ? $dl[0] : array();
        }  else {
            //根据id和模型id获取数据
            $id = $this->getData('id');

            $modelId = $this->getData('mid');

            $this->setModel($modelId);

            $d = $this->info->find($id);
        }
        
        return $d;
        
    }

    /**
     * 获取配置
     * 
     * @param type $key
     * @return type
     */
    public function getItem($key){
        
        return RConfig::get($key);
    }
    
    /**
     * 获取广告位下面的广告
     * 
     * @param type $areaId 广告位ID
     * @return type
     */
    public function getAd($areaId){
        
        $this->loadModel("ad");
        $ad = $this->ad->getAd($areaId);
        return $ad;
    }
    
    public function getArea($areaId){
        
        $this->loadModel("recommend");
        
        $area = $this->recommend->fields("area_id,id_list,model_id")->find($areaId);
        
        return "";
    }
    
    public function getFlink(){
        $this->loadModel("flink");
        
        $flinks = $this->flink->search(false);
        
        return $flinks;
    }

    /**
     * 获取分类代码
     * Enter description here ...
     * @param $baseUrl
     * @param $total
     * @param $pagesize
     */
    private function getPageHtml($baseUrl, $total,$pagesize = 10) {
        
        $config = array(
            'base_url' => $baseUrl, 
            'per_page' => $pagesize,
            'total_rows' => $total,
            'num_links' => 4,
            'query_string_segment' => 'p',
            'page_query_string' => true,
            'first_link' => "首页",
            'last_link' => "尾页",
            'prev_link' => '上一页',
            'next_link' => '下一页',
            'cur_tag_open' => '<a class="z-crt">',
            'cur_tag_close' => '</a>',
            'use_page_numbers' => TRUE,
        );
        $this->pagination->initialize($config);
        
        return $this->pagination->create_links();
    }
    
    /**
     * 测试预览模板
     */
    public function tl(){
        
        $tpl =  $this->getData("tpl");
        
        $this->renderHTMLView($tpl);
    }
}


