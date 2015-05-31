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
                <td>广告位ID</td>
                <td>名称</td>
                <td>广告类型</td>
                <td>标记</td>
                <td>说明</td>
                
                <td width="100">操作</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><?php echo $v['area_id'];?></td>
                <td><?php echo $v['area_name'];?></td>
                <td><?php echo $this->vars->get_field_str("area_type",$v['area_type'],'');?></td>
                <td><?php echo $v['identification'];?></td>
                <td><?php echo $v['remark'];?></td>
                <td>
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$this->controllerId}/edit?id={$v['area_id']}","编辑","btn btn_disabled");?>
                    <?php $thisc->echoButton("{$thisc->level}02","javascript:del_one({$v['area_id']});","删除","btn btn_disabled");?>
                    
                </td>
            </tr>
            <?php }?>
            <tr id="form_add">
                <input type="hidden" value="0" name="id" id="id" >
                <td>&nbsp;</td>
                <td><input type="text" value="" placeholder="广告位名称" style="width:120px;" class="comm_ipt " name="data[area_name]" id="area_name"></td>
                <td><?php echo $thisc->vars->input_str(array('node'=>'area_type','name'=>'area_type','type'=>'select_single','default'=>0));?></td>
                <td><input type="text" value="" style="width:80px;" class="comm_ipt " placeholder="广告位标识" id="identification" name="data[identification]"></td>
                <td><input type="text" value="" style="width:180px;" class="comm_ipt " placeholder="广告位说明" id="remark" name="data[remark]"></td>
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
