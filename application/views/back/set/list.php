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

<div class="box4">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td>配置ID</td>
                <td>key</td>
                <td>value</td>
                <td>标签</td>
                <td>作用说明</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><?php echo $v['config_id'];?></td>
                <td><?php echo $v['key'];?></td>
                <td><?php echo $v['value'];?></td>
                <td><?php echo $v['tag'];?></td>
                <td><?php echo $v['comment'];?></td>
                <td>
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$this->controllerId}/edit?id={$v['config_id']}","编辑","btn btn_disabled");?>
                    <?php $thisc->echoButton("{$thisc->level}02","javascript:void(0);","删除","btn btn_disabled");?>
                    
                </td>
            </tr>
            <?php }?>
            <tr>
                <input type="hidden" value="0" name="id" id="id" >
                <td>&nbsp;</td>
                <td><input type="text" value="" placeholder="友链组排序" style="width:80px;" class="comm_ipt " name="data[key]" id="key"></td>
                <td><input type="text" value="" style="width:80px;" class="comm_ipt" placeholder="友链组名称" id="value" name="data[value]"></td>
                <td><input type="text" value="0" style="width:80px;" class="comm_ipt " placeholder="友链组地址" id="tag" name="data[tag]"></td>
                <td><input type="text" value="" style="width:180px;" class="comm_ipt " placeholder="友链组logo图" id="comment" name="data[comment]"></td>
                <td>
                <?php $thisc->echoButton($this->controllerId . "01", "javascript:save_data();", "添加"); ?>
        
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
