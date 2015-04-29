<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 把数组数据输出成html代码 如：array("value"=>1,"txt"=>"启用","txt_color"=>"green") ==> <span color="green">启用</span>
 */
class Vars {
    
    private $fields = array(
       
        "user_status" => array( //用户状态操作，刚好和状态相反，正常下显示禁用，禁用下显示启用
            array("value"=>1,"txt"=>"禁用","color"=>"red"),
            array("value"=>0,"txt"=>"正常","color"=>"green"),
        ),
        
        "user_status_action" => array( //用户状态操作，刚好和状态相反，正常下显示禁用，禁用下显示启用
            array("value"=>1,"txt"=>"启用","color"=>"green"),
            array("value"=>0,"txt"=>"禁用","color"=>"red"),
        ),
        
        "form_type" => array( //表单类型
            array('value'=>"input",'txt'=>'文本框'), //文本框
            array('value'=>"textarea",'txt'=>'多行文本框'), //多行文本框
            array('value'=>"radio",'txt'=>'单选框'), //单选框
            array('value'=>"checkbox",'txt'=>'多选框'), //多选框
            array('value'=>"upload",'txt'=>'上传按钮'), //上传按钮
            array('value'=>"edit",'txt'=>'编辑框'), //编辑框
            array('value'=>"select",'txt'=>'下拉框'), //下拉框
            array('value'=>"link",'txt'=>'联动表单'), //联动表单
        )
    ); 

    private $formConfig = array('field'=>'','title'=>'','field_type'=>'','form_type'=>'','form_value'=>'','field_remark'=>'',''=>'','value'=>'');

    /**
     * 增加或者重设一个节点
     * @param $node 节点名称 如 yesno
     * @param $field 节点内容 如 array(array('value'=>'','txt'=>'','txt_color'=>''),...)
     */
    public function set_fields($node,$field){
        $this->fields[$node]=$field;
    }
    public function get_fields($node=''){
        return $node=='' ? $this->fields : $this->fields[$node];
    }
    //某个借点插入一项
    public function set_field($node,$field,$pos=0){
        $tmp=$this->get_fields($node);
        array_splice($tmp,$pos,0,array($field));
        $this->set_fields($node,$tmp);
    }
    /**
     * 返回某个节点的某个值对应的数组数组
     * @param $node 节点名称
     * @param $value 节点值
     */
    public function get_field($node, $value) {
        foreach($this->fields[$node] as $v) {
            if ($v['value'] == $value) {
                return $v;
            }
        }
        return array('value' => '', 'txt' => '-', 'color' => '');
    }
    
    /**
     * 根据值，返回某个节点某个值对应的文本或者HTML
     * @param $node 节点名称
     * @param $value 节点值
     * @param $type 返回字符串类型，txt或者html
     */
    public function get_field_str($node, $value, $type = true) {
        $field = $this->get_field($node, $value); //print_r($field);
        if ($type) {
            return $field['txt'];
        } else {
            $color = isset($field['color']) ? 'color="'.$field['color'].'"' : "";
            
            return '<font '.$color.'>' . $field['txt'] . '</font>';
        }
    }
    
    /**
     * 输出HTML表单
     * @param $params 参数数组 array('node'=>'','type'=>'','default'=>'')
     * @param =>type 表单类型 select,checkbox,radio
     * @param =>node    节点
     * @param =>default 默认选中
     * @param =>name    表单名称后缀，用于一个页面多次出现时候区分
     * @param =>alias 别名，用于同值但是文字相同的表单
     * @param =>stype 模拟下拉框的样式
     * @param =>on 表单函数 click,change等
     */
    public function input_str($params) {
        
        // 初始化
        $node = isset($params['node'])?$params['node']:'';
        $type = isset($params['type'])?$params['type']:'select';
        $default = isset($params['default'])?$params['default']:'';
        $name = isset($params['name'])?$params['name']:'';
        $on = isset($params['on'])?$params['on']:'';
        $alias = isset($params['alias'])?$params['alias']:'';
        $style = isset($params['style'])?$params['style']:'style="width:120px"';
        $isData = isset($params['isData']) ? $params['isData'] : true;
        $isCallBack = isset($params['callback']) ? $params['callback'] : "false";
        // 下拉框
        if ($type == 'select') {
            $html = '<select name="'. $this->getDataName($isData, $name).'" '.$on.' id="' . $node . $name . '">';
            foreach($this->fields[$node] as $f) {
                $select = '';
                if (strlen($default) > 0 && $f['value'] == $default) $select = ' selected';
                $html .= '<option value="' . $f['value'] . '"' . $select . '>' . $f['txt'] . '</option>';
            }
            $html .= '</select>';
            return $html;
        }
        // 单选框
        if ($type == 'radio') {
            $html = '';
            foreach($this->fields[$node] as $f) {
                $select = '';
                if (strlen($default) > 0 && $f['value'] == $default) $select = ' checked';
                $html .= '&nbsp;&nbsp;<input type="radio" '.$on.' name="' . $this->getDataName($isData, $name) . '" value="' . $f['value'] . '"' . $select . '>&nbsp;' . $f['txt'] . '';
            }
            return $html;
        }
        // 复选框
        if ($type == 'checkbox') {
            $html = '';
            foreach($this->fields[$node] as $f) {
                $select = '';
                $df_val=explode(',',$default);
                if (strlen($default) > 0 && in_array($f['value'],$df_val)) $select = ' checked';
                $html .= '<span class="cbx_wrap"><input '.$on.' type="checkbox"  class="' . ($alias==''?$node.$name:$alias.$name) . '" name="' . $this->getDataName($isData, $name) . '" value="' . $f['value'] . '"' . $select . '><label for="' . $node . $name . '">&nbsp;&nbsp;' . $f['txt'] . '&nbsp;&nbsp;</label></span>';
            }
            return $html;
        }
        // 模拟下拉单选框
        if($type=='select_single'){
            $html = '<div class="sel_box" onclick="select_single(event,this'.(empty($on)?'':',\''.$on.'\'').','.$isCallBack.');return false;" '.$style.'>';
            $html .= '    <a href="javascript:void(0);" class="txt_box" id="txt_box">';
            $html .= '        <div class="sel_inp" id="sel_inp">'.$this->get_field_str($node,$default,true).'</div>';
            $html .= '        <input type="hidden" name="'.$this->getDataName($isData, $name).'" id="'.($alias==''?$node.$name:$alias.$name).'" value="'.$default.'" class="sel_subject_val">';
            $html .= '    </a>';
            $html .= '    <div class="sel_list" id="sel_list" style="display:none;">';
            foreach($this->fields[$node] as $f) {
                $select = '';
                if (strlen($default) > 0 && $f['value'] == $default) $select = 'current';
                $html .= '        <a href="javascript:void(0);" value="' . $f['value'] . '" class="'.$select.'" '.$on.'>' . $f['txt'] . '</a>';
            }
            $html .= '    </div>';
            $html .= '</div>';
            return $html;
        }
        // 模拟下拉多选框
        if($type=='select_multi'){
            $html = '<div class="sel_box duo_sel_box"  '.$style.'>';
            $html .= '        <input type="hidden" name="'.$this->getDataName($isData, $name).'" id="'.($alias==''?$node.$name:$alias.$name).'" value="'.$default.'" class="sel_subject_val">';
            $html .= '<div class="sel_list" id="sel_list">';
            foreach($this->fields[$node] as $f) {
                $select = '';
                if (strlen($default) > 0 && in_array($f['value'], explode(',',$default))) $select = 'current';
                $html .= '        <a href="javascript:void(0);"  value="' . $f['value'] . '" class="'.$select.'" '.$on.'>' . $f['txt'] . '</a>';
            }
            $html .= '</div>';
            $html .= '</div>';
            return $html;
            }
        return '-';
    }

    private function getDataName($isData,$name){
       
        $name = $isData ? "data[{$name}]" : $name;
        
        return $name;
    }

    /**
     * 根据表单模型数据返回对应的html代码,对应fields的值
     *
     * @param type $filed array('field'=>'','title'=>'','field_type'=>'','form_type'=>'','form_value'=>'','field_remark'=>'',''=>'');
     * @return string
     */
    public function formHtml($filed,$value = FALSE){
        
        $filed['value']  = $value === FALSE ? $filed['dvalue']: $value;
        $this->formConfig = $filed; 
        $html = "";
        
        switch ($filed['form_type']){
            case 'input':
                $html = $this->getInput();break;
            case 'radio':
                $html = $this->getRadio();break;
            case 'checkbox':
                $html = $this->getCheckbox();break;
            case 'textarea':
                $html = $this->getTextarea();break;
            case 'select':
                $html = $this->getSelect();break;
            case 'upload':
                $html = $this->getUpload();break;
            default :
                $html = "<span>{$filed['form_value']}</span>";
        }
        
        return $html;
    }

    /**
     * 输入框html代码
     * @return string
     */
    private function getInput(){
        
        $input = '<input id="%s" name="data[%s]" type="text" class="comm_ipt" value="%s"> %s';
        
        return sprintf($input,  $this->formConfig['field'],$this->formConfig['field'],$this->formConfig['value'],$this->formConfig['field_remark']);
    }
    
    /**
     * 单选
     * @return string
     */
    private function getRadio(){
        $check = 'checked="checked"';
        
        $radio = '<span class="cbx_wrap"><input type="radio" id="%s" name="%s" value="%s" %s class="" />&nbsp;&nbsp;%s&nbsp;&nbsp;&nbsp;&nbsp;';
        
        $radioData = RKit::strToArray($this->formConfig['form_value']);
        $html = '<div class="l">';
       
        foreach($radioData as $key => $value){
            
            $name = "data[{$this->formConfig['field']}]";

            $select = $this->formConfig['value'] == $value['value'] ? $check : '';

            $html .= sprintf($radio, $this->formConfig['field'],  $name,$value['value'], $select, $value['txt']);

        }
        
        $html .='</div>' . $this->formConfig['field_remark'];
        
        return $html;
    }

    /**
     * 下拉框
     * @return string
     */
    private function getSelect(){
        
        $selectData = RKit::strToArray($this->formConfig['form_value']);
        
        $html = "";
        
        $this->set_fields('_select', $selectData);
        //foreach($value as $k => $v){

            $html .=$this->input_str(array('node'=>'_select','name'=>  $this->formConfig['field'],'type'=>'select_single','default'=>$default = $this->formConfig['value'] == $selectData[0]['value'] ? $selectData[0]['value'] : ''));
        //}
        return $html;
    }
    
    /**
     * 多选
     * @return string
     */
    private function getCheckbox(){
        
        $check = 'checked="checked"';
        
        $checkbox = '<input type="checkbox" id="%s_%s" name="%s" value="%s" %s  /><label for="%s_%s">&nbsp;&nbsp;%s&nbsp;&nbsp;</label></span>';
        
        $d = RKit::strToArray($this->formConfig['form_value']);
        $html = '<div class="l">';
        
        foreach($d as $key => $value){
            
            $name = "data[{$this->formConfig['field']}]";
            $select = $this->formConfig['value'] == $value['value'] ? $check : '';
            $html .= sprintf($checkbox, $this->formConfig['field'], $value['value'], $name,$value['value'], $select,  $this->formConfig['field'],$value['value'], $value['txt']);

        }
        
        $html .='</div>' . $this->formConfig['field_remark'];
        
        return $html;
    }
    
    /**
     * 文本框
     * @return string
     */
    private function getTextarea(){
        
        $textarea = '<textarea name="data[%s]" id="%s">%s</textarea>';
        return sprintf($textarea,  $this->formConfig['field'],$this->formConfig['field'],$this->formConfig['value']);
    }
    
    /**
     * 上传框
     * @return string
     */
    private function getUpload(){
        
        $upload = '<input id="%s" type="text" name="data[%s]" class="comm_ipt" value="%s"> %s
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=%s" scrolling="no" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>
                <div class="slt_small" style="right:228px;">
                    <img id="thumb_%s" src="%s" />                    
                </div>';
        if(empty($this->formConfig['value'])){$this->formConfig['value'] = DEFAULT_INFO_IMG ;}
        return sprintf($upload, $this->formConfig['field'],$this->formConfig['field'],$this->formConfig['value'],  $this->formConfig['field_remark'],$this->formConfig['field'],$this->formConfig['field'],$this->formConfig['value']);
    }
    
    /**
     * 编辑框
     * @return string
     */
    private function getEdit(){
        
        return "";
    }
    
    

}