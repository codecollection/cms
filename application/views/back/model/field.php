<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>  
        <em>></em>模型字段
    </span>
</div>
<p class="line-t-15"></p>
<div class="func_desc">
    <b>标签：</b>
    <?php foreach($fieldTags as $k => $v){?>
    &nbsp;<a href="/back/model/field?id=<?php echo $model_id?>&fieldTag=<?php echo $v['field_tag'];?>"><?php echo $v['field_tag'];?></a>&nbsp;
    <?php }?>
</div>
<p class="line-t-10"></p>
<div class="box4">
    <table class="table_lists table_click">
        <input type="hidden" value="<?php echo $model_id;?>" id="model_id" class="model">
        <thead>
            <tr>
                <td width="60"><input type="checkbox" onclick="C.form.check_all('.chk_list');">&nbsp;&nbsp;全选</td>
                <td>ID</td>
                <td>字段文字</td>
                <td>字段名称(sql)</td>
                <td>标签</td>
                <td width="80">操作</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach($fields['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                
                <td><input type="checkbox" value="<?php echo $v['field_id'];?>" <?php if($v['is_system'] != 0) {echo('class="chk_list"');} ?>  
                    <?php if($thisc->modelfield->isExitRel($model_id,$v["field_id"]) || $v['is_system'] == 0){echo('checked=checked');} ?>>
                </td>
                <td><?php echo $v['field_id'];?></td>
                <td><?php echo $v['title'];?></td>
                <td><?php echo $v['field'];?></td>
                <td><?php echo $v['field_tag'];?></td>
                <td>
                    <a href="javascript:void(0);" onclick="model_field(<?php echo $v['field_id'];?>);" class="btn">删除</a>
                </td>
            </tr>
            <?php }?>
        </tbody>

    </table>
</div>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton($this->controllerId . "04", "javascript:doField();", "保存模型","btn3"); ?>
        <?php $thisc->echoButton($this->controllerId . "04", "/back/{$this->controllerId}", "返回模型","btn3"); ?>
    </div>
</div>