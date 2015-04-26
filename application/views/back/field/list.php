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

<div class="func_desc">
    <b>标签：</b>
    <?php foreach($fieldTags as $k => $v){?>
    &nbsp;<a <?php echo $a = $thisc->getData('tag') == $v['field_tag'] ? 'class="btn_min"' : "" ;?> href="/back/<?php echo $this->controllerId; ?>?&tag=<?php echo $v['field_tag'];?>"><?php echo $v['field_tag'];?></a>&nbsp;
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
                <td width="100">操作</td>
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
                <td><input type="text" value="<?php echo $v['form_value'];?>" class="comm_ipt" style="width:150px"/></td>
                <td><?php echo $v['field_remark'];?></td>
                <td><?php echo $v['field_tag'];?></td>
                <td><?php echo $v['is_system'];?></td>
                <td>
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$this->controllerId}/edit?id={$v['field_id']}","编辑","btn btn_disabled");?>
                    <?php $thisc->echoButton("{$thisc->level}02","javascript:void(0);","删除","btn btn_disabled");?>
                    
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
    var urls = {"save":"/back/<?php echo $this->controllerId;?>/save","del":"/back/<?php echo $this->controllerId;?>/del"};
</script>

<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton("{$thisc->level}01","/back/{$thisc->controllerId}/add","添加字段",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}01","/back/{$thisc->controllerId}/flash","快速创建",'btn3');?>
    </div>
</div>
