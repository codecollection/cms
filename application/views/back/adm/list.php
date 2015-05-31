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
    <span class="cbs_right"><a href="javascript:void(0);" onclick="show_more('query_box_category');">高级查询</a></span>
</div>
<p class="line-t-15"></p>

<!-- 查询隐藏表单-->
<div id="query_box_category" <?php if(empty($thisc->getData("sv"))){echo('style="display:none;"');}?> >
    <div class="box_970" id="screen">
        <ul class="screening se_manage res_scre">
            <li class="bndata_li">
                <form action="?" method="get" name="search">
                    <span class="l">查询项</span>
                    <div class="l">
                        <?php echo $this->vars->input_str(array('node'=>'search','name'=>'st','type'=>'select_single','default'=>$thisc->getData("st"),'isData'=>FALSE));?>
                    </div>
                    <span class="l">搜索词</span>
                    <input type="text" class="comm_ipt l" name="sv" value="<?php echo $thisc->getData("sv");?>">
                    
                    &nbsp;<input type="submit" class="btn" value="查询" />
                </form>
            </li>
        </ul>
    </div>
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
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$thisc->controllerId}/edit?id={$v["admin_id"]}","编辑");?>
                    <?php 
                    $s = $v['astate'] == 0 ? 1 : 0;
                    $thisc->echoButton("{$thisc->level}03","javascript:status({$v['admin_id']},{$s});",$this->vars->get_field_str("user_status_action",$v['astate'],''));?>
                    
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
        <?php $thisc->echoButton("{$thisc->level}01","/back/{$thisc->controllerId}/add","添加员工",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}02","javascript:del_data();","批量删除",'btn3');?>
        <?php $thisc->echoButton($thisc->level,"/back/{$thisc->controllerId}","员工列表",'btn3');?>
        
    </div>
</div>
<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete","status":"/back/<?php echo $this->controllerId?>/status"};
    
</script>