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
            <td><input id="ckey" type="text" name="data[ckey]" class="comm_ipt" placeholder="配置key" value="<?php echo $data["ckey"]?>"></td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>配置值：</td>
            <td><textarea id="cvalue" name="data[cvalue]" style="width:238px;"><?php echo $data["cvalue"]?></textarea>
            </td>
        </tr>
        <tr>
            <td class="fr">标签：</td>
            <td><input id="tag" type="text" name="data[tag]" class="comm_ipt" placeholder="配置标签" value="<?php echo $data["tag"]?>"></td>
        </tr>
        
        <tr>
            <td class="fr">是否系统：</td>
            <td>
                <span class="cbx_wrap"><input type="radio" id="is_system" <?php if($data['is_system'] == 0) {echo('checked="checked"');}?> name="data[is_system]" value="0" />&nbsp;&nbsp;<label for="is_system">系统</label>&nbsp;&nbsp;
                <span class="cbx_wrap"><input type="radio" id="is_system_not" <?php if($data['is_system'] == 1) {echo('checked="checked"');}?> name="data[is_system]" value="1" />&nbsp;&nbsp;<label for="is_system_not">自定义</label>&nbsp;&nbsp;
            </td>
        </tr>
        <tr>
            <td class="fr">说明：</td>
            <td><textarea id="comment" name="data[comment]" style="width: 238px;height: 50px;" placeholder="配置说明"><?php echo $data['comment'];?></textarea></td>
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