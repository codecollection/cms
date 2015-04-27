<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>      
        <em>></em>配置信息
    </span>
</div>
<p class="line-t-15"></p>

<div id="form_add">
    <input type="hidden" id="config_id" name="id" value="<?php echo($data["config_id"]);?>" />
    <table class="table_lists editbox">
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>配置key：</td>
            <td><input id="key" type="text" name="data[key]" class="comm_ipt" placeholder="配置key" value="<?php echo $data["key"]?>"></td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>配置值：</td>
            <td><input id="value" type="text" name="data[value]" class="comm_ipt" placeholder="配置值" value="<?php echo $data["value"]?>"></td>
        </tr>
        <tr>
            <td class="fr">标签：</td>
            <td><input id="tag" type="text" name="data[tag]" class="comm_ipt" placeholder="配置标签" value="<?php echo $data["tag"]?>"></td>
        </tr>
        <tr>
            <td class="fr">说明：</td>
            <td><teatarea id="comment" name="data[comment]" class="comm_ipt" placeholder="配置说明"><?php echo $data['comment'];?></teatarea></td>
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