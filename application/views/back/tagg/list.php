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
<div class="box4">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td>标签组ID</td>
                <td>组名称</td>
                <td>组连接</td>
                <td>说明</td>
                
                <td width="100">操作</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><?php echo $v['group_id'];?></td>
                <td><?php echo $v['group_name'];?></td>
                <td><?php echo $v['group_url'];?></td>
                <td><?php echo $v['remark'];?></td>
                <td>
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$this->controllerId}/edit?id={$v['group_id']}","编辑","btn btn_disabled");?>
                    <?php $thisc->echoButton("{$thisc->level}02","javascript:del_one({$v['group_id']});","删除","btn btn_disabled");?>
                    
                </td>
            </tr>
            <?php }?>
            <tr id="form_add">
                <input type="hidden" value="0" name="id" id="id" >
                <td>&nbsp;</td>
                <td><input type="text" value="" placeholder="标签组名称" style="width:120px;" class="comm_ipt " name="data[group_name]" id="group_name"></td>
                <td><input type="text" value="" style="width:80px;" class="comm_ipt " placeholder="标签组连接" id="identification" name="data[group_url]"></td>
                <td><input type="text" value="" style="width:180px;" class="comm_ipt " placeholder="组说明" id="remark" name="data[remark]"></td>
                <td>
                <?php $thisc->echoButton($this->controllerId . "01", "javascript:save_data();", "添加"); ?>
                </td>
    </tr>
        </tbody>

    </table>
    <p class="line-t-20"></p>
        <div class="pagebar">
            <?php echo $page;?>
        </div>
    <p class="line-t-20"></p>
</div>
<script>
    var urls = {"save":"/back/<?php echo $this->controllerId;?>/save","del":"/back/<?php echo $this->controllerId;?>/delete"};
</script>
