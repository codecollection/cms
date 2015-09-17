
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
                <td width="80">账号</td>
                <td>昵称</td>
                <td>工号</td>
                <td width="60">密码</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($list['kf_list'])){ foreach($list['kf_list'] as $k => $v){ ?>
            <tr id="<?php echo "formli1".$k?>">
                <td><input type="checkbox" class="chk_list" value="<?php echo $v["kf_account"];?>"></td>
                <td><?php echo $v["kf_account"];?></td>
                <td><?php echo $v["kf_nick"];?></td>
                <td><?php echo $v["kf_id"];?></td>
                <td><?php //echo $v["f_headimgurl"];?></td>
                <td>
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$thisc->controllerId}/edit?id={$v["group_id"]}","编辑");?>
                    <?php 
                    $s = $v['g_state'] == 0 ? 1 : 0;
                    $thisc->echoButton("{$thisc->level}03","javascript:status({$v['group_id']},{$s});",$this->vars->get_field_str("user_status_action",$v['g_state'],''));?>
                </td>
            </tr>
            <?php } }?>
            <tr id="form_add">
                <td>&nbsp;</td>
                <td><input id="kf_account" type="text"  class="comm_ipt w_120" style="width:120px;" placeholder="客服账号" name="data[kf_account]" value=""></td>
                <td><input id="kf_nick" type="text"  class="comm_ipt w_120" style="width:120px;" placeholder="客服昵称" name="data[kf_nick]" value=""></td>
                <td><input id="kf_id" type="text"  class="comm_ipt" placeholder="客服工号" name="data[kf_id]" value=""></td>
                <td><input id="password" type="password"  class="comm_ipt" placeholder="" name="data[password]" value=""></td>
                <td><?php $thisc->echoButton("{$thisc->level}01","javascript:save_data();","添加");?></td>
            </tr>
        </tbody>
    </table>
</div>
<p class="line-t-20"></p>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete","status":"/back/<?php echo $this->controllerId?>/status"};
</script>