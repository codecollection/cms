<div class="box4">
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
            <tr id="formli1">
                <td>1</td>
                <td>文档</td>
                <td>cms_info_list</td>
                <td>0</td>
                <td style="padding-left:10px;">&nbsp;</td>
                <td>
                    <a href="javascript:void(0);" onclick="del_attr(1);" class="btn">删除</a>
                </td>
            </tr>
            <tr id="html_model" class="foot_add">
                <td>&nbsp;</td>
                <td><input type="text" value="" placeholder="产品" style="width:80px;" class="comm_ipt " name="model_title" id="model_title"></td>
                <td><input type="text" value="" style="width:80px;" class="comm_ipt" placeholder="cms_product" id="model_name" name="model_name"></td>
                <td><input type="text" value="0" style="width:80px;" class="comm_ipt " placeholder="0" id="cmodel_id" name="cmodel_id"></td>
                <td><input type="text" value="" style="width:180px;" class="comm_ipt " placeholder="扩展属性，json格式" id="attr_content" name="attr_content"></td>
                
                <td>
                    <a href="javascript:void(0);" onclick="save_model_attr();" class="btn">添加</a>
                </td>
            </tr>
        </tbody>

    </table>
</div>

<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="javascript:void(0);" class="btn3" onclick="C.form.update_field('model.php?m=save_model_attr_all&ajax=1', '.corder');">批量修改</a>
        <a href="javascript:void(0);" class="btn3" onclick="update_table('product');">更新表结构</a>
        <a href="javascript:void(0);" class="btn3" onclick="cache_clear('model');">更新模型缓存</a>
        <a href="model.php" class="btn3">取消</a>
    </div>
</div>