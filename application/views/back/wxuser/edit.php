<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>编辑用户组 
    </span>
</div>
<p class="line-t-20"></p>

<div id="form_add">

    <input type="hidden" id="id" name="id" value="<?php echo($data["id"]);?>" />
    <table class="table_lists editbox">
    
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>用户组名称：</td>
            <td><input id="name" type="text" name="data[name]" class="comm_ipt" value="<?php echo $data["name"]?>"></td>
        </tr>
    </table>
</div>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId;?>/save", "del": "/back/<?php echo $this->controllerId;?>/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="javascript:save_data();" class="btn3">提交</a>
        <a href="/back/<?php echo $this->controllerId;?>" class="btn3">返回列表</a>
    </div>
</div>