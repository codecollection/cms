<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 广告位
 *
 */
class Adarea_model extends MBase{
    
    protected $tableName = 'cms_ad_area';
    
    protected $pk = "area_id";
    
    protected $rules = array(
        array('area_name', 'required'),
    );
    
    protected $fieldTitles = array(
        'area_name' => '广告位名称',
    );
    
    public function  __construct(){
        parent::__construct();
    }
    
    public function saveBefore($isInsert) {
        
        $this->checkoutUnique($isInsert);
        
    }
    
    public function changeField($areas){
        $fields = array();
        foreach($areas as $v){
            
            $a = array('txt'=>$v['area_name'],'value'=>$v['area_id']);
            
            array_push($fields, $a);
        }
        
        return $fields;
    }
}