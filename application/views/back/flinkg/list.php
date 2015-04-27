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

<div class="box4">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td>友链组ID</td>
                <td>排序</td>
                <td>友链组名称</td>
                <td>友链组地址</td>
                <td>友链组logo</td>
                <td width="100">操作</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><?php echo $v['flink_group_id'];?></td>
                <td><input id="corder" type="text" pid="<?php echo $v["flink_group_id"];?>" class="comm_ipt corder" style="width:30px;" value="<?php echo $v["forder"];?>"></td>
                <td><?php echo $v['flink_group_name'];?></td>
                <td><?php echo $v['flink_group_url'];?></td>
                <td><?php echo $v['flink_group_img'];?></td>
                <td>
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$this->controllerId}/edit?id={$v['field_id']}","编辑","btn btn_disabled");?>
                    <?php $thisc->echoButton("{$thisc->level}02","javascript:void(0);","删除","btn btn_disabled");?>
                    
                </td>
            </tr>
            <?php }?>
            <tr>
                <input type="hidden" value="0" name="id" id="id" >
                <td>&nbsp;</td>
                <td><input type="text" value="" placeholder="友链组排序" style="width:80px;" class="comm_ipt " name="data[forder]" id="model_title"></td>
                <td><input type="text" value="" style="width:80px;" class="comm_ipt" placeholder="友链组名称" id="flink_group_name" name="data[flink_group_name]"></td>
                <td><input type="text" value="0" style="width:80px;" class="comm_ipt " placeholder="友链组地址" id="flink_group_url" name="data[flink_group_url]"></td>
                <td><input type="text" value="" style="width:180px;" class="comm_ipt " placeholder="友链组logo图" id="attr_content" name="data[flink_group_img]"></td>
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
