
<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>      
        <em>></em>友链组信息
    </span>
</div>
<p class="line-t-15"></p>

<div id="form_add">

    <input type="hidden" id="flink_id" name="id" value="<?php echo($data["flink_id"]);?>" />
    <table class="table_lists editbox">
        
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>友链标题：</td>
            <td><input id="flink__name" type="text" name="data[flink_name]" class="comm_ipt" placeholder="标题" value="<?php echo $data["flink_name"]?>"></td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>友链地址</td>
            <td><input id="field" type="text" name="data[flink_url]" class="comm_ipt" placeholder="title" value="<?php echo $data["flink_url"]?>"> 如：http://localhost/</td>
        </tr>
        <tr>
            <td class="fr">友链图片：</td>
            <td><input id="flink_img" type="text" name="data[flink_img]" class="comm_ipt" placeholder="" value="<?php echo $data["flink_img"]?>"></td>
        </tr>
        <tr>
            <td class="fr">友链排序：</td>
            <td><input id="flink_order" type="text" class="comm_ipt" name="data[flink_order]" placeholder="0" value="<?php echo $data['flink_order']; ?>"></td>
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