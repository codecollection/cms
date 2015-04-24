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
                <td width="40">用户ID</td>
                <td>用户名</td>
                <td>真是姓名</td>
                <td>手机</td>
                <td>邮箱</td>
                <td>QQ</td>
                <td width="60">状态</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){ ?>
            <tr id="<?php echo "formli1".$k?>">
                <td><input type="checkbox" class="chk_list" value="<?php echo $v["admin_id"];?>"></td>
                <td><?php echo $v["admin_id"];?></td>
                
                <td><?php echo $v["aname"];?></td>
                 <td><?php echo $v["aname_true"];?>
                </td>
                <td><?php echo $v["aphone"];?></td>
                <td><?php echo $v["aemail"];?></td>
                <td><?php echo $v["aqq"];?></td>
                <td><?php echo $this->vars->get_field_str("user_status",$v['astate'],'');?></td>
                <td>
                    <a class="btn" href="/back/<?php echo $this->controllerId;?>/edit?id=<?php echo $v["admin_id"];?>">编辑</a>
                    <a href="javascript:status(<?php echo $v['admin_id'];?>,<?php echo $s = $v['astate'] == 0 ? 1 : 0; ?>)" class="btn"><?php echo $this->vars->get_field_str("user_status_action",$v['astate'],'');?></a>
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
        <a href="/back/<?php echo $this->controllerId;?>/add" class="btn3">添加员工</a>
        <a href="javascript:void(0);" class="btn3" onclick="del_data();">批量删除</a>
        <a href="/back/<?php echo $this->controllerId;?>" class="btn3">员工列表</a>
    </div>
</div>
<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete","status":"/back/<?php echo $this->controllerId?>/status"};
    
</script>