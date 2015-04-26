
<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>      
        <em>></em>模型字段信息
    </span>
</div>
<p class="line-t-15"></p>

<div id="form_add">

    <input type="hidden" id="field_id" name="id" value="<?php echo($data["field_id"]);?>" />
    <table class="table_lists editbox">
        
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>模型标题：</td>
            <td><input id="title" type="text" name="data[title]" class="comm_ipt" placeholder="标题" value="<?php echo $data["title"]?>"> 如：标题</td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>模型字段(sql) ：</td>
            <td><input id="field" type="text" name="data[field]" class="comm_ipt" placeholder="title" value="<?php echo $data["field"]?>"> 如：title，必须是英文字符</td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>字段类型：</td>
            <td><input id="field_type" type="text" name="data[field_type]" class="comm_ipt" placeholder="varchar(10) not null " value="<?php echo $data["field_type"]?>"> 如：varchar(100) not null</td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>表单类型：</td>
            <td>
                <div class="l">
                <?php echo $thisc->vars->input_str(array("node"=>"form_type","default"=>$data["form_type"]= $data["form_type"] == "" ? "text" : $data["form_type"],"type"=>"select_single","name"=>"form_type"))?>
                </div>
                <span class="l">&nbsp;&nbsp;&nbsp;&nbsp;如：输入框，下拉框等</span>
            </td>
        </tr>
        <tr>
            <td class="fr">表单默认值：</td>
            <td><input id="form_value" type="text" class="comm_ipt" name="data[form_value]" placeholder="0" value="<?php echo $data['form_value']; ?>"> </td>
        </tr>
        <tr>
            <td class="fr">表单备注：</td>
            <td>
                <textarea name="data[field_remark]" id="field_remark" style="width: 238px;" placeholder="这个是文章标题"><?php echo $data["field_remark"]?></textarea>
            </td>
        </tr>
        <tr>
            <td class="fr">字段排序：</td>
            <td><input id="forder" type="text" class="comm_ipt" name="data[forder]" placeholder="0" value=""></td>
        </tr>
        
        <tr>
            <td class="fr">联动表单ID：</td>
            <td><input id="linkage_type_id" type="text" class="comm_ipt" name="data[linkage_type_id]" value=""> 表单联动菜单使用，有限处理这个，如：地址的联动
            </td>
        </tr>
        <tr>
            <td class="fr">标签：</td>
            <td><input id="field_tag" type="text" class="comm_ipt" name="data[field_tag]" placeholder="文章" value="">给字段简单分组，可以根据标签查看
            </td>
        </tr>
    </table>
</div>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId;?>/save", "del": "/back/<?php echo $this->controllerId;?>/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton("{$thisc->level}01","javascript:save_data();","保存字段",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}03","/back/{$thisc->controllerId}","快速创建",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}","/back/{$thisc->controllerId}","返回列表",'btn3');?>
        
    </div>
</div>