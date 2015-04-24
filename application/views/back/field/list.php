<div class="crumbs">
    <span class="cbs_left">
        <?php 
        //$countNav = count($navItem);
        //foreach($navItem as $k => $v){?>
        <a href="系统">系统</a>
        <?php //if($k < $countNav - 1) echo('<em>></em>');?>
        <?php //}?>

    </span>
</div>
<p class="line-t-15"></p>

<div class="func_desc">
    <b>标签：</b>
    <?php foreach($fieldTags as $k => $v){?>
    &nbsp;<a href="/back/model/field?&fieldTag=<?php echo $v['field_tag'];?>"><?php echo $v['field_tag'];?></a>&nbsp;
    <?php }?>
</div>
<p class="line-t-10"></p>

<div class="box4">

    <table class="table_lists table_click">
        <thead>
            <tr>
                <td>字段ID</td>
                <td>字段文字</td>
                <td>字段名称(sql)</td>
                <td>字段类型(sql)</td>
                <td>表单类型</td>
                <td>默认值</td>
                <td>表单备注</td>
                <td>标签</td>
                <td>是否系统</td>
                <td width="80">操作</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><?php echo $v['field_id'];?></td>
                <td><?php echo $v['title'];?></td>
                <td><?php echo $v['field'];?></td>
                <td><?php echo $v['field_type'];?></td>
                <td><?php echo $v['form_type'];?></td>
                <td><?php echo $v['form_value'];?></td>
                <td><?php echo $v['field_remark'];?></td>
                <td><?php echo $v['field_tag'];?></td>
                <td><?php echo $v['is_system'];?></td>
                <td>
                    <a href="javascript:void(0);" onclick="model_field(<?php echo $v['field_id'];?>);" class="btn">删除</a>
                </td>
            </tr>
            <?php }?>
            
        
        </tbody>

    </table>
    <p class="line-t-20"></p>
        <div class="pagebar">
            <?php echo $page;?>
        </div>
    <p class="line-t-20"></p>
</div>
<script>
    var urls = {"save":"/back/model/save","del":"/back/model/del"};
</script>

<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="javascript:void(0);" class="btn3" onclick="C.form.update_field('model.php?m=save_model_attr_all&ajax=1', '.corder');">添加字段</a>
    </div>
</div>
