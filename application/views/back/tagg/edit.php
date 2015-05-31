
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

<div id="form_add">

    <input type="hidden" id="group_id" name="id" value="<?php echo($data["group_id"]);?>" />
    <table class="table_lists editbox">
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>标签组名称：</td>
            <td><input id="group_name" type="text" name="data[group_name]" class="comm_ipt" placeholder="" value="<?php echo $data["group_name"]?>"></td>
        </tr>
        <tr>
            <td class="fr">标签组连接：</td>
            <td><input id="group_url" type="text" name="data[group_url]" class="comm_ipt" placeholder="" value="<?php echo $data["group_url"]?>"> </td>
        </tr>
        <tr>
            <td class="fr">说明：</td>
            <td><input id="remark" type="text" class="comm_ipt" name="data[remark]" placeholder="" value="<?php echo $data['remark']; ?>"></td>
        </tr>
        
    </table>
</div>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId;?>/save", "del": "/back/<?php echo $this->controllerId;?>/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton("{$thisc->level}01","javascript:save_data();","保存信息",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}","/back/{$thisc->controllerId}","返回列表",'btn3');?>
        
    </div>
</div>