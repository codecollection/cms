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
                    <td>模型ID</td>
                    <td>模型名称</td>
                    <td>模型表名</td>
                    <td>子模型ID</td>
                    <td>扩展属性</td>
                    <td width="80">操作</td>
                </tr>
            </thead>

            <tbody>
<?php foreach ($list['list'] as $k => $v) { ?>
                    <tr id="<?php echo "formli" . $k + 1; ?>">
                        <td><?php echo $v['model_id']; ?></td>
                        <td><?php echo $v['model_title']; ?></td>
                        <td><?php echo $v['model_name']; ?></td>
                        <td><?php echo $v['cmodel_id']; ?></td>
                        <td style="padding-left:10px;"><?php echo empty($v['attr_content']) ? '&nbsp;' : $v['attr_content']; ?></td>
                        <td>
    <?php $thisc->echoButton($this->controllerId . "02", "/back/model/field?id={$v['model_id']}", "字段管理"); ?>
                        </td>
                    </tr>
<?php } ?>
                <tr>
            <input type="hidden" value="0" name="id" id="id" >
            <td>&nbsp;</td>
            <td><input type="text" value="" placeholder="产品" style="width:80px;" class="comm_ipt " name="data[model_title]" id="model_title"></td>
            <td><input type="text" value="" style="width:80px;" class="comm_ipt" placeholder="cms_product" id="model_name" name="data[model_name]"></td>
            <td><input type="text" value="0" style="width:80px;" class="comm_ipt " placeholder="0" id="cmodel_id" name="data[cmodel_id]"></td>
            <td><input type="text" value="" style="width:180px;" class="comm_ipt " placeholder="扩展属性，json格式" id="attr_content" name="data[attr_content]"></td>
            <td>
                <!-- <a href="javascript:void(0);" onclick="save_data();" class="btn">添加</a> -->
<?php $thisc->echoButton($this->controllerId . "01", "javascript:save_data();", "添加"); ?>
            </td>
            </tr>

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
    var urls = {"save": "/back/model/save", "del": "/back/model/del"};
</script>
<!--
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="javascript:void(0);" class="btn3" onclick="C.form.update_field('model.php?m=save_model_attr_all&ajax=1', '.corder');">批量修改</a>
        <a href="javascript:void(0);" class="btn3" onclick="update_table('product');">更新表结构</a>
        <a href="javascript:void(0);" class="btn3" onclick="cache_clear('model');">更新模型缓存</a>
        <a href="model.php" class="btn3">取消</a>
    </div>
</div>
-->