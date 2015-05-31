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
    <form id="form_add">
        <table class="table_lists table_click">
            <thead>
                <tr>
                    <td>资源ID</td>
                    <td>资源地址</td>
                    <td>大小</td>
                    <td>原名称</td>
                    <td>预览图</td>
                    <td width="80">操作</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($list['list'] as $k => $v) { ?>
                    <tr id="<?php echo "formli" . $k + 1; ?>">
                        <td><?php echo $v['resource_id']; ?></td>
                        <td><input class="comm_ipt" value="<?php echo $v['resource_url'] ?>" /></td>
                        <td><?php echo $v['size']; ?></td>
                        <td><?php echo $v['oname']; ?></td>
                        <td><img src="<?php echo $v['resource_url'];?>" style="height:30px;width:40px;" /></td>
                        <td>
                        <?php $thisc->echoButton($this->controllerId . "02", "/back/{$this->controllerId}/edit?id={$v['resource_id']}", "编辑"); ?>
                        <?php $thisc->echoButton("{$thisc->level}02","javascript:del_one({$v['resource_id']});","删除","btn");?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </form>
    <p class="line-t-20"></p>
    <div class="pagebar">
    <?php echo $page; ?>
    </div>
    <p class="line-t-20"></p>
</div>
<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete"};
</script>