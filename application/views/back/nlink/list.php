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
                <td>内链ID</td>
                <td>内链词</td>
                <td>链接地址</td>
                <td width="100">操作</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><?php echo $v['nlink_id'];?></td>
                <td><?php echo $v['nlink_txt'];?></td>
                <td><?php echo $v['nlink_url'];?></td>
                <td>
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$this->controllerId}/edit?id={$v['nlink_id']}","编辑","btn btn_disabled");?>
                    <?php $thisc->echoButton("{$thisc->level}02","javascript:del_one({$v['nlink_id']});","删除","btn btn_disabled");?>
                    
                </td>
            </tr>
            <?php }?>
            <tr id="form_add">
                <input type="hidden" value="<?php echo time();?>" name="data[cdate]" id="cdate">
                <input type="hidden" value="0" name="id" id="id" >
                <td>&nbsp;</td>
                <td><input type="text" value="" placeholder="内链词" style="width:120px;" class="comm_ipt " name="data[nlink_txt]" id="nlink_txt"></td>
                <td><input type="text" value="" style="width:80px;" class="comm_ipt " placeholder="内链链接地址" id="nlink_url" name="data[nlink_url]"></td>
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
