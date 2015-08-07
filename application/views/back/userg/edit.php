
<div class="crumbs">
    <span class="cbs_left">
        <b>用户</b><em>></em><a href="category.php">管理员</a><em>></em><a href="category.php">添加/编辑</a>
        <em>></em>管理员名称        
    </span>
</div>
<p class="line-t-20"></p>

<div id="form_add">

    <input type="hidden" id="group_id" name="id" value="<?php echo($data["group_id"]);?>" />
    <table class="table_lists editbox">
    
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>管理组名称：</td>
            <td><input id="g_name" type="text" name="data[g_name]" class="comm_ipt" value="<?php echo $data["g_name"]?>"></td>
        </tr>
    </table>
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