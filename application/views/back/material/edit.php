<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>      
        <em>></em>添加永久素材
    </span>
</div>
<p class="line-t-20"></p>

<div id="form_add">
    <form method="post" action="/back/material/testUpload" enctype="multipart/form-data">
    <input type="hidden" id="group_id" name="id" value="" />
    <table class="table_lists editbox">
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>选着图片：</td>
            <td><input id="g_name" type="text" name="data[g_name]" class="comm_ipt" value=""></td>
        </tr>
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>选着图片：</td>
            <td><input type="file" name="file" value=""/></td>
        </tr>
        <tr>
            <input type="submit" value="提交">
        </tr>
    </table>
    </form>
</div>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId;?>/save", "del": "/back/<?php echo $this->controllerId;?>/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="javascript:save_data();" class="btn3">保存用户</a>
        <a href="javascript:save_data();" class="btn3">启用/禁用</a>
        <a href="/back/<?php echo $this->controllerId;?>" class="btn3">返回列表</a>
    </div>
</div>