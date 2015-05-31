
//弹出添加 对话框
function edit_show() {
	C.form.init(['.ipt']);
	C.alert.opacty({'title':'添加用户组','width':'430','height':'280','div_tag':'#html_group'});
}

//保存组信息
function save() {
	$('.v_result').html('');
	var marea='#html_group';
    var mdiv=$(marea);
	var postdata=C.form.get_form(marea);
	$.post('user.group.php?m=save&ajax=1', postdata, function(data) {
        try {
            var ret = $.evalJSON(data);
			if(ret.code == '0') {
				window.location.reload();
			}else{
				mdiv.find("#"+ret.id).focus();
                mdiv.find("#"+ret.id).parent().parent().find('.v_result').html(ret.msg);
			}
        }catch(e){C.alert.alert({'content':e.message+data});}
    });
}

//删除用户组
function del(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:230,content:"以下2种情况无法删除用户组：<br/>1）有当前用户组下有用户；2）内置用户组不可删除<br/>删除后不可恢复，确定要删除吗？",funcOk:function(){
            C.alert.opacty_close();
            C.form.batch_modify('user.group.php?m=del&ajax=1','.chk_list');
    }});
}

//保存编辑的权限
function save_level() {
    var postdata = C.form.get_form("#postdata");
	postdata['level'] = [];
    $('input[name=level]:checked').each(function(){
        if($(this).val()) postdata['level'].push($(this).val());
    });

    //alert($.toJSON(group_level));
    $.post('user.group.php?m=save_level', postdata, function(data) {
        try{
            C.alert.opacty_close();
            var ret=$.evalJSON(data);
			if(ret.code == '0') {
				var sdiv='<div style="margin:10px 0;">';
				if(!$("#uid").val()) {
					//判断是否勾选了分类
					var cate_num = $("#con_A li").find('input').size();
					var cate_lev = $("#con_A ul").find('input[name=level]:checked').val();
					var con_A_num = $("#con_A").find('input[name=level]:checked').size();
					if(cate_num && con_A_num) {
						if(typeof cate_lev == 'undefined') {
							sdiv+='<p style="font-size:12px;margin-bottom: 10px;">提醒：勾选了内容权限但没有勾选分类权限</p>';
						}
					}
					//判断是否勾选了内容权限
					var con_A_num = $("#con_A .table_lists").find('input[name=level]:checked').size();
					if(cate_lev && !con_A_num) {
						sdiv+='<p style="font-size:12px;margin-bottom: 10px;">提醒：勾选了分类权限但没有勾选内容权限</p>';
					}
				}
                sdiv+='<a href="javascript:void(0);" class="but_ok" onclick="C.alert.opacty_close();" >继续编辑权限</a>';
                sdiv+='<a href="javascript:void(0);" class="but_ok" onclick="history.back();">返回列表</a>';
                sdiv+='</div>';
                C.alert.opacty({content:sdiv,height:'150',title:ret.msg});
			}else{
				C.alert.alert({content:ret.msg});
			}
        }catch(e){C.alert.show('error:'+e.message+'\r\n'+data);}
    });
}

$(function(){
	$('.cbx_all').change(function(){
        var cbx_child = $(this).parents('table:eq(0)').find('.cbx_child');
        if(!$(this).prop('checked'))
        {	
            cbx_child.prop('checked',false);
			cbx_child.parent().next().next('td').find('input[type=checkbox]').prop('checked',false);
        }else{
			cbx_child.parent().next().next('td').find('input[type=checkbox]').prop('checked',true);
            cbx_child.prop('checked',true);
        }
    });

    $('input.cbx_child').change(function(){
        var cbx_child_and = $(this).parent().siblings().find('input');
        if($(this).prop('checked'))
        {
			if($("#act").val() == 2) return;
            if(cbx_child_and.length > 0){
                cbx_child_and.prop('checked',true).parents('table:eq(0)').find('.cbx_all').prop('checked',true);
            }else{
				
                $(this).parents('table:eq(0)').find('.cbx_all').prop('checked',true);
            }
            
        }else{
            cbx_child_and.prop('checked',false);
            if($(this).parents('tr').siblings().find('input.cbx_child:checked').length <= 0){
                $(this).parents('table:eq(0)').find('.cbx_all').prop('checked',false)
            }
        }
    });

    $('input.cbx_child_and').change(function(){
        if($(this).prop('checked')){
			if($("#act").val() == 2) return;
            $(this).prop('checked',true).parents('td').siblings().children('.cbx_child').prop('checked',true).parents('table:eq(0)').find('.cbx_all').prop('checked',true);
        }
    });
});