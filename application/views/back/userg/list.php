
<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>      
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
                <td>组ID</td>
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
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$thisc->controllerId}/edit?id={$v["group_id"]}","编辑");?>
                    <?php 
                    $s = $v['g_state'] == 0 ? 1 : 0;
                    $thisc->echoButton("{$thisc->level}03","javascript:status({$v['group_id']},{$s});",$this->vars->get_field_str("user_status_action",$v['g_state'],''));?>
                </td>
            </tr>
            <?php }?>
            <tr id="form_add">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input id="g_name" type="text"  class="comm_ipt cname" name="data[g_name]" value=""></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><?php $thisc->echoButton("{$thisc->level}01","javascript:save_data();","添加");?></td>
            </tr>
        </tbody>
    </table>
</div>
<p class="line-t-20"></p>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete","status":"/back/<?php echo $this->controllerId?>/status"};
</script>