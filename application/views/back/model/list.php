<div class="box4">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td>排序</td>
                <td>字段名称</td>
                <td>字段定义</td>
                <td>字段类型</td>
                <td>表单类型</td>
                <td>默认值/代码ID</td>
                <td>表单检查</td>
                <td>显示</td>
                <td width="80">操作</td>
            </tr>
        </thead>

        <tbody>
            <tr id="formli1">
                <td><input type="text" value="100" style="width:30px;" class="comm_ipt corder" id="forder" pid="1"></td>
                <td><input type="text" value="价格" style="width:80px;" class="comm_ipt " id="field_title"></td>
                <td>price</td>
                <td><input type="text" value="float(11,2) not null default 0" title="float(11,2) not null default 0" style="width:180px;" class="comm_ipt " id="field_type"></td>
                <td style="padding-left:10px;">
                    <div class="sel_box" onclick="select_single(event, this);
                            return false;" style="width:100px;">    <a href="javascript:void(0);" class="txt_box" id="txt_box">        <div class="sel_inp" id="sel_inp">文本框</div>        <input type="hidden" name="form_type" id="form_type" value="text" class="sel_subject_val">    </a>    <div class="sel_list" id="sel_list" style="display:none;">        <a href="javascript:void(0);" value="text" class="current" >文本框</a>        <a href="javascript:void(0);" value="textarea" class="" >多行文本框</a>        <a href="javascript:void(0);" value="editor" class="" >编辑器</a>        <a href="javascript:void(0);" value="select_single" class="" >下拉框</a>        <a href="javascript:void(0);" value="checkbox" class="" >复选框</a>        <a href="javascript:void(0);" value="image" class="" >上传控件</a>        <a href="javascript:void(0);" value="date" class="" >日期控件</a>    </div></div>					</td>
                <td><input type="text" value="" style="width:80px;" class="comm_ipt " id="form_value"></td>
                <td style="padding-left:10px;">
                    <div class="sel_box" onclick="select_single(event, this);
                            return false;" style="width:90px;">    <a href="javascript:void(0);" class="txt_box" id="txt_box">        <div class="sel_inp" id="sel_inp">数字</div>        <input type="hidden" name="form_check" id="form_check" value="verify_number" class="sel_subject_val">    </a>    <div class="sel_list" id="sel_list" style="display:none;">        <a href="javascript:void(0);" value="" class="" >不验证</a>        <a href="javascript:void(0);" value="verify_length" class="" >不为空</a>        <a href="javascript:void(0);" value="verify_number" class="current" >数字</a>        <a href="javascript:void(0);" value="verify_email" class="" >邮箱</a>        <a href="javascript:void(0);" value="verify_mobile" class="" >手机号码</a>        <a href="javascript:void(0);" value="verify_phone" class="" >固定电话</a>    </div></div>					</td>
                <td style="padding-left:10px;">
                    <div class="sel_box" onclick="select_single(event, this);
                            return false;" style="width:90px;">    <a href="javascript:void(0);" class="txt_box" id="txt_box">        <div class="sel_inp" id="sel_inp">是</div>        <input type="hidden" name="yesno" id="yesno" value="1" class="sel_subject_val">    </a>    <div class="sel_list" id="sel_list" style="display:none;">        <a href="javascript:void(0);" value="0" class="" >否</a>        <a href="javascript:void(0);" value="1" class="current" >是</a>    </div></div>					</td>
                <td>
                    <a href="javascript:void(0);" onclick="del_attr(1);" class="btn">删除</a>
                </td>
            </tr>
            <tr id="html_model" class="foot_add">
        <input type='hidden' id='model_name' value='product'>
        <td><input type="text" value="100" style="width:30px;" class="comm_ipt " id="forder"></td>
        <td><input type="text" value="" style="width:80px;" class="comm_ipt " id="field_title"></td>
        <td><input type="text" value="" style="width:80px;" class="comm_ipt " id="field_name"></td>
        <td><input type="text" title="varchar(100) not null default ''" value="varchar(100) not null default ''" style="width:180px;" class="comm_ipt " id="field_type"></td>
        <td style="padding-left:10px;">
            <div class="sel_box" onclick="select_single(event, this);
                    return false;" style="width:100px;">    <a href="javascript:void(0);" class="txt_box" id="txt_box">        <div class="sel_inp" id="sel_inp">文本框</div>        <input type="hidden" name="form_type" id="form_type" value="text" class="sel_subject_val">    </a>    <div class="sel_list" id="sel_list" style="display:none;">        <a href="javascript:void(0);" value="text" class="current" >文本框</a>        <a href="javascript:void(0);" value="textarea" class="" >多行文本框</a>        <a href="javascript:void(0);" value="editor" class="" >编辑器</a>        <a href="javascript:void(0);" value="select_single" class="" >下拉框</a>        <a href="javascript:void(0);" value="checkbox" class="" >复选框</a>        <a href="javascript:void(0);" value="image" class="" >上传控件</a>        <a href="javascript:void(0);" value="date" class="" >日期控件</a>    </div></div>					</td>
        <td><input type="text" value="" style="width:80px;" class="comm_ipt " id="form_value"></td>
        <td style="padding-left:10px;">
            <div class="sel_box" onclick="select_single(event, this);
                    return false;" style="width:90px;">    <a href="javascript:void(0);" class="txt_box" id="txt_box">        <div class="sel_inp" id="sel_inp">不验证</div>        <input type="hidden" name="form_check" id="form_check" value="" class="sel_subject_val">    </a>    <div class="sel_list" id="sel_list" style="display:none;">        <a href="javascript:void(0);" value="" class="" >不验证</a>        <a href="javascript:void(0);" value="verify_length" class="" >不为空</a>        <a href="javascript:void(0);" value="verify_number" class="" >数字</a>        <a href="javascript:void(0);" value="verify_email" class="" >邮箱</a>        <a href="javascript:void(0);" value="verify_mobile" class="" >手机号码</a>        <a href="javascript:void(0);" value="verify_phone" class="" >固定电话</a>    </div></div>					</td>
        <td style="padding-left:10px;">
            <div class="sel_box" onclick="select_single(event, this);
                    return false;" style="width:90px;">    <a href="javascript:void(0);" class="txt_box" id="txt_box">        <div class="sel_inp" id="sel_inp">是</div>        <input type="hidden" name="yesno" id="yesno" value="1" class="sel_subject_val">    </a>    <div class="sel_list" id="sel_list" style="display:none;">        <a href="javascript:void(0);" value="0" class="" >否</a>        <a href="javascript:void(0);" value="1" class="current" >是</a>    </div></div>					</td>
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
        <a href="javascript:void(0);" class="btn3" onclick="C.form.update_field('model.php?m=save_model_attr_all&ajax=1','.corder');">批量修改</a>
        <a href="javascript:void(0);" class="btn3" onclick="update_table('product');">更新表结构</a>
        <a href="javascript:void(0);" class="btn3" onclick="cache_clear('model');">更新模型缓存</a>
        <a href="model.php" class="btn3">取消</a>
    </div>
</div>