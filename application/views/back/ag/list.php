<div class="crumbs">
    <span class="cbs_left">
        <?php 
        //$countNav = count($navItem);
        //foreach($navItem as $k => $v){?>
        <a href="用户">用户</a>
        <?php //if($k < $countNav - 1) echo('<em>></em>');?>
        <?php //}?>

    </span>
</div>
<p class="line-t-15"></p>

<!-- 查询隐藏表单-->
<div id="query_box_category" style="display:none;">
    
    <p class="line-t-20"></p>
</div>

<div class="box2 box4" style="width:100%;">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td width="40"><input type="checkbox"  onclick="C.form.check_all('.chk_list');"></td>
                <td>管理组ID</td>
                <td>组名称</td>
                <td>创建时间</td>
                <td width="60">状态</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){ ?>
            <tr id="<?php echo "formli1".$k?>">
                <td><input type="checkbox" class="chk_list" value="<?php echo $v["group_id"];?>"></td>
                <td><?php echo $v["group_id"];?></td>
                <td><?php echo $v["g_name"];?></td>
                <td><?php echo $thisc->echoTime($v["cdate"] = $v['cdate'] == '' ? time() : $v['cdate']);?></td>
                <td><?php echo $this->vars->get_field_str("user_status",$v['g_state'],'');?></td>
                <td>
                    <a class="btn" href="/back/<?php echo $this->controllerId;?>/edit?id=<?php echo $v["group_id"];?>">编辑</a>
                    <a href="javascript:status(<?php echo $v['group_id'];?>,<?php echo $s = $v['g_state'] == 0 ? 1 : 0; ?>)" class="btn"><?php echo $this->vars->get_field_str("user_status_action",$v['g_state'],'');?></a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
<p class="line-t-20"></p>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="/back/<?php echo $this->controllerId;?>/add" class="btn3">添加管理组</a>
        <a href="javascript:void(0);" class="btn3" onclick="del_data();">批量删除</a>
        <a href="/back/<?php echo $this->controllerId;?>" class="btn3">组列表</a>
    </div>
</div>
<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete","status":"/back/<?php echo $this->controllerId?>/status"};
    
</script>