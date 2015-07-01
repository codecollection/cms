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
        
        $this->setData("cid", $cid);
        $this->setData("cate", $cateData);
        
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
        $cate = $this->cate->find($d["last_cate_id"]);
        $tpl = "content";
        if(!empty($cate["tpl_content"])){$tpl = $cate["tpl_content"];}
        if(!empty($d["tpl_content"])){$tpl = $d["tpl_content"];}
        
        $this->setData("d", $d);
        
        $this->renderHTMLView($tpl);
    }

    public function d2(){
        $id = $this->getData('id');
        
        $d = $this->info->getD2($id);
        $tpl = empty($d['tpl_content']) ? "content" : $d['tpl_content'];
        
        $this->setData("d", $d);
        
        $this->renderHTMLView($tpl);
    }

    /**
     * 获取分类
     * @return type
     */
    public function getCate($cid = null){
       
        $cate = $this->cate->categories;
        if ($cid === null){
            return $cate;
        }else{
            return $cate[$cid];
        }
    }
    
    /**
     * 获取列表
     * @return type
     */
    public function getList($cid = null,$pagesize = 5){
        
        if ($cid === null){
            $cateId = $this->getData('cid');
        }else{
            $cateId = $cid;
        }
        $p = $this->getData('p') > 0 ? $this->getData('p') : "1";
        
        $modelId = $this->cate->getField($cateId,'model_id');
        //获取模型对应的表名称
        $this->setModel($modelId);
        
        $this->info->where("last_cate_id=".$cateId);
        
        $this->info->page($p, $pagesize);
        
        $lists = $this->info->search();
        
        $lists['list'] = $this->info->insertUrl($lists['list'],$modelId);
        $lists['pagecode'] = $this->getPageHtml("/info/l?" . http_build_query(array()), $lists['count'],$pagesize);
        
        return $lists;
    }

    /**
     * 根据子模型获取到数据列表数据
     */
    public function getList2($cid = null,$join = "right"){
        $this->loadModel("model");
        if ($cid === null){
            $cateId = $this->getData('cid');
        }else{
            $cateId = $cid;
        }
        $p = $this->getData('p');
        
        $modelId = $this->cate->getField($cateId,'model_id');
        
        //获取模型对应的表名称
        $model = $this->model->find($modelId);
        
        $sonModel = $this->model->find($model["cmodel_id"]);
        
        $sonModelTableName = $sonModel["model_name"];
        
        $this->setModel($modelId);
        $this->info->fields("A.*,B.*,B.img_url as Img,A.title as Title");
        $this->info->join($join,$sonModelTableName . " as B","B.last_cate_id = A.last_cate_id");
        
        $this->info->where("A.last_cate_id=".$cateId);
        
        $this->info->page($p, $pagesize = 10);
        
        $lists = $this->info->search();
        $lists['list'] = $this->info->insertUrl($lists['list'],$modelId);
        $lists["pagecode"] = $this->getPageHtml("/info/l?" . http_build_query(array()), $lists['count'],$pagesize);
        //print_r($lists['list']);
        return $lists;
    }
    
    
    public function getList3($cid = null,$limit = 5){
        
        if ($cid === null){
            $cateId = $this->getData('cid');
        }else{
            $cateId = $cid;
        }
        
        $modelId = $this->cate->getField($cateId,'model_id');
        //获取模型对应的表名称
        $this->setModel($modelId);
        
        $this->info->where("last_cate_id=".$cateId);
        $this->info->limit($limit);
        $this->info->orderBy("forder DESC");
        $l = $this->info->search(false);
        
        $lists = $this->info->insertUrl($l['list'],$modelId);
       
        return $lists;
        
    }

    /**
     * 
     * 获取到模型下面的所有last_cate_id 为$lastCateId的列表
     * 
     * @param type $lastCateId
     * @param type $modelId
     * @return type
     */
    public function getSonList($lastCateId,$modelId){
        
        $this->setModel($modelId);
        
        $this->info->where("last_cate_id=".$lastCateId);
        $this->info->orderBy("forder DESC");
        $l = $this->info->search(false);
        
        $lists = $this->info->insertUrl($l['list'],$modelId);
       
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
    
    public function getAdArea($id){
        $this->loadModel("adarea");
        
        $area = $this->adarea->find($id);
        
        return $area;
    }

    /**
     * 获取推荐位内容
     * 
     * @param type $areaId
     * @return string
     */
    public function getArea($areaId){
        
        $this->loadModel("recommend");
        
        $area = $this->recommend->find($areaId);
        
        if(!empty($area["id_list"])){
            $this->setModel($area["model_id"]);
            $l = $this->info->where($this->info->tableName."_id"." in ({$area["id_list"]})")->search(false);

            $lists = $this->info->insertUrl($l,$area["model_id"]);
            $area =  array_merge($area,array("list" => $lists));
        }
        
        return $area;
    }
    
    /**
     * 获取标签列表
     * @param type $gId
     * @return type
     */
    public function getTag($gId){
        
        $this->loadModel("tag");
        
        $this->tag->where("group_id = " . $gId);
        
        $tags = $this->tag->search(false);
        
        return $tags;
        
    }

    /**
     * 获取友链
     * @return type
     */
    public function getFlink(){
        $this->loadModel("flink");
        
        $flinks = $this->flink->search(false);
        
        return $flinks;
    }

   
    private function getPageHtml($baseUrl, $total,$pagesize = 10) {
        
        $config = array(
            'base_url' => $baseUrl, 
            'per_page' => $pagesize,
            'total_rows' => $total,
            'num_links' => 6,
            'query_string_segment' => 'p',
            'page_query_string' => true,
            'first_link' => "首页",
            'last_link' => "尾页",
            'prev_link' => '上一页',
            'next_link' => '下一页',
            'cur_tag_open' => '<span class="pageOn">',
            'cur_tag_close' => '</span>',
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


