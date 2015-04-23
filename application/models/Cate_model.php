<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 分类模型
 *
 */
class Cate_model extends MBase{
    
    protected $tableName = 'cms_category';
    
    protected $pk = "cate_id";
    
    public $cateList = array();
    
    public $cateTree = array();
    
    public $categories = array();
    public function  __construct(){
        parent::__construct();
        
        $this->cateList = $this->getAll();
        $this->cateTree = $this->cate_tree();
        $this->categories = $this->getCategories();
    }
    
    /**
     * 判断分类下面是否子分类
     * 
     * @param type $cateId
     * @return type
     */
    public function haveSonCate($cateId){
        
        $sql = " select cate_id from " . $this->tableName . " where parent_id = " . $cateId . " limit 1";
        $this->db->query($sql);
        
        return $this->db->affected_rows() > 0;
    }

    /**
     * 判断分类下面是否有文章
     * 
     * @param type $cateId
     * @return type
     */
    public function haveInfo($cateId){
        
        $sql = "select info_id from " . $this->infoTabel . " where last_cate_id = " . $cateId . "limit 1";
        
        $this->db->query($sql);
        
        return $this->db->affected_rows() > 0;
    }
    
    
    /**
     * 获取所有目录数组，可以用分类ID作为下标读取分类信息
     */
    private function getCategories()
    {
//        $sql = "select * from {$this->tableName} order by corder asc";
//        $a = $this->db->query($sql)->result_array();
        $tmp_trees = array();
        
        $a = $this->cateList;
        //遍历全部分类
        foreach ($a as $k => $v) {
            //判断是否绑定域名到站点根目录
            //$host = $v['cdomain'] == '' ? DOMAIN_SITE : $v['cdomain'];
            //print_r($host);die();
//            if (REWRITE_CATE_ALIAS == 1) {
//                $v['surl'] = $this->url->encode('list_cpy_index', array('host' => $host, 'cpy' => $v['cname_py'], 'p' => 1));
//            } else {
//                $v['surl'] = $this->url->encode('list_cid_index', array('host' => $host, 'cid' => $v['cate_id'], 'p' => 1));
//            }
            //如果有伪静态识别前缀
//            if ($v['url_dir'] != '') {//var_dump($v['url_dir']);
//                $v['surl'] = preg_replace('~(http://.*?)/(.*?)/(.*?)~', '${1}/' . $v['url_dir'] . '/${3}', $v['surl']);
//            }
            //绑定了主域名的分类优先
//            if ($v['cdomain'] != '') {
//                $v['surl'] = $v['cdomain'];
//            }else{
//                $v['surl'] = preg_replace('~^(http://.*?)/(.*?)$~',$this->cate_parent_cdomain($v['cate_id']).'/${2}',$v['surl']);
//            }
            //跳转链接优先
            //if ($v['go_url'] != '') $v['surl'] = $v['go_url'];

            //print_r($v);die();
            //遍历查询子类
//            $sql = "select * from {$this->tableName} where parent_id='{$v['cate_id']}' order by corder asc";
//            $rs = $this->db->query($sql)->result_array();
            $rs = $this->cate_son($v['cate_id']);
            $v['son'] = $rs;
            //遍历子类修改URL
            foreach ($v['son'] as $ks => $vs) {
                //判断是否绑定域名到站点根目录
                //$host = $vs['cdomain'] == '' ? DOMAIN_SITE : $vs['cdomain'];
                //print_r($host);die();
//                if (REWRITE_CATE_ALIAS == 1) {
//                    $v['son'][$ks]['surl'] = $this->url->encode('list_cpy_index', array('host' => $host, 'cpy' => $vs['cname_py'], 'p' => 1));
//                } else {
//                    $v['son'][$ks]['surl'] = $this->url->encode('list_cid_index', array('host' => $host, 'cid' => $vs['cate_id'], 'p' => 1));
//                }
                //如果有伪静态识别前缀
//                if ($vs['url_dir'] != '') {//var_dump($v['url_dir']);
//                    $v['son'][$ks]['surl'] = preg_replace('~(http://.*?)/(.*?)/(.*?)~', '${1}/' . $vs['url_dir'] . '/${3}', $v['son'][$ks]['surl']);
//                }
                //绑定了主域名的分类优先
//                if ($vs['cdomain'] != '') {
//                    $v['son'][$ks]['surl'] = $vs['cdomain'];
//                }else{
//                    $v['son'][$ks]['surl'] = preg_replace('~^(http://.*?)/(.*?)$~',$this->cate_parent_cdomain($vs['cate_id']).'/${2}',$v['son'][$ks]['surl']);
//                }
                //跳转链接优先
                //if ($vs['go_url'] != '') $v['son'][$ks]['surl'] = $vs['go_url'];
            }
            $tmp_trees[$v['cate_id']] = $v;
        }
        return $tmp_trees;
    }

    /**
     * 根据分类ID返回完整树形
     *
     * @param  $type 为空输出全部分类，为其他数字则返回各自类型的树
     * @param  $cate_id 分类ID，为0则返回全部树
     */
    public function cate_tree($type = '', $cate_id = 0) {
        $tree = array();
        if ($cate_id == 0) {
            foreach($this -> cateList as $c) {
                if ($type == '') {
                    if ($c['parent_id'] == 0) {
                        array_push($tree, $c);
                        $tree[count($tree)-1]['son'] = $this -> cate_son($c['cate_id']);
                    }
                } else {
                    if ($c['parent_id'] == 0 ) {
                        array_push($tree, $c);
                        $tree[count($tree)-1]['son'] = $this -> cate_son($c['cate_id']);
                    }
                }
            }
        } else {
            $tree = $this -> cate_son($cate_id);
        }
        
        return $tree;
    }
    
    /**
     * 判断分类是否为终极分类
     *
     * @param  $cate_id 分类ID
     * @param  $categories 树形目录
     */
    public function cate_last($cate_id, $categories = '') {
        $a = $categories == ''?$this -> cateList:$categories;
        foreach($a as $b) {
            if ($b['parent_id'] == $cate_id) return 1;
        }
        return 0;
    }
    
    /**
     * 取分类的子分类，返回数组，树形结构
     *
     * @param  $cate_id 分类ID
     * 返回值为树形，因为子分类有可能是多分支的
     */
    public function cate_son($cate_id) {
        $ret = array();
        foreach($this -> cateList as $c) {
            if ($c['parent_id'] == $cate_id) {
                $c['son'] = $this -> cate_son($c['cate_id']);
                array_push($ret, $c);
            }
        }
        //$ret = helper :: array_sort($ret, 'corder');
        return $ret;
    }
    
    
    public function show_select($cid=0,$i=0){
        
        $i++;//层级标记
        $font='';//设置层级缩进
        for($j=1;$j<$i;$j++){
            $font.='　';
        }
        $tmp=array();
        if($cid==0){//输出顶级类
            foreach($this->categories as $v){
                if($v['parent_id']==0){
                    //if(!check_level('T'.$v['cate_id'],0,1)) continue;
                    array_push($tmp,array('value'=>$v['cate_id'],'txt'=>$font.$v['cname'],'txt_color'=>''));
                    $a=$this->show_select($v['cate_id'],$i);
                    foreach($a as $v1){
                        array_push($tmp,$v1);
                    }
                }
            }
        }else{//输出子类
            foreach($this->categories[$cid]['son'] as $v){
                //if(!check_level('T'.$v['cate_id'],0,1)) continue;
                array_push($tmp,array('value'=>$v['cate_id'],'txt'=>$font.$v['cname'],'txt_color'=>''));
                $a=$this->show_select($v['cate_id'],$i);
                foreach($a as $v1){
                    array_push($tmp,$v1);
                }
            }
        }

        return $tmp;
    }
    
    /**
     * 根据分类ID输出select下拉框
     *
     * @param  $cate_id
     * @param  $disabled = ' disabled="disabled" '
     * @param  $styles =' style="background:pink;margin-top:1px;"'
     */
    public function html_cate_select($tree = array(), $cateId = 0 ,$i = 0, $disabled = ' disabled="disabled" ', $styles = ' style="background:pink;margin-top:1px;"') {
       
        $i++;
        foreach($tree as $t) {
            
            $flag = '';
            for($j = 1;$j < $i;$j++) {
                $flag .= '　';
            }
            if (count($t['son']) > 0) {
                $flag .= '┗';
            } else {
                $flag .= '┗';
            }
            $readonly = '';
            $style = '';
            $selected = '';
            if($t['cate_id'] == $cateId) $selected = ' selected="selected" ';
            if (count($t['son']) > 0) $readonly = $disabled;
            if (count($t['son']) == 0) $style = $styles;
            echo('<option value="' . $t['cate_id'] . '"' . $readonly . $style . $selected .'>' . $flag . $t['cname'] . '(aa)</option>');
            $this -> html_cate_select($t['son'], $cateId ,$i, $disabled, $styles);
        }
    }
    
}