

<div class="box4">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td>友链ID</td>
                <td>排序</td>
                <td>友链名称</td>
                <td>友链地址</td>
                <td>友链logo</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><?php echo $v['flink_id'];?></td>
                <td><input id="corder" type="text" pid="<?php echo $v["flink_id"];?>" class="comm_ipt corder" style="width:30px;" value="<?php echo $v["flink_order"];?>"></td>
                <td><?php echo $v['flink_name'];?></td>
                <td><?php echo $v['flink_url'];?></td>
                <td><?php echo $v['flink_img'];?></td>
                <td>
                    
                    <a class="btn" href="javascript:save_data();">添加</a>
                </td>
            </tr>
            <?php }?>
            <tr id="form_add">
                <input type="hidden" value="0" name="id" id="id" >
                <td>&nbsp;</td>
                <td><input type="text" value="0" placeholder="友链排序" style="width:80px;" class="comm_ipt " name="data[flink_order]" id="flink_order"></td>
                <td><input type="text" value="" style="width:80px;" class="comm_ipt" placeholder="友链名称" id="flink_group_name" name="data[flink_name]"></td>
                <td><input type="text" value="http://" style="width:80px;" class="comm_ipt " placeholder="友链地址" id="flink_group_url" name="data[flink_url]"></td>
                <td><input type="text" value="" style="width:180px;" class="comm_ipt " placeholder="友链logo图" id="attr_content" name="data[flink_img]"></td>
                <td>
                <a class="btn" href="javascript:save_data();">添加</a>
        
        </tbody>

    </table>
    <p class="line-t-20"></p>
        <div class="pagebar">
            <?php echo $page;?>
        </div>
    <p class="line-t-20"></p>
</div>
<script>
    
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        
        <a class="btn3" href="/back/info/add?modelId=3&amp;cateId=">添加文档</a>        <a class="btn3" href="javascript:update_order();">修改排序</a>        <a class="btn3" href="javascript:del_data();">批量删除</a>        <a class="btn3" href="/back/info/home">返回文档</a>    </div>
</div>