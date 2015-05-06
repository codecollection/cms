//弹出添加 对话框
function edit_show() {
	//C.form.init(['.ipt']);
	C.alert.opacty({'title':'添加友情链接','width':'600','height':'380','div_tag':'#html_flink'});
}

//保存
function save() {
	$('.v_result').html('');
	var marea='#html_flink';
    var mdiv=$(marea);
	var postdata=C.form.get_form(marea);
	$.post('flink.php?m=save&ajax=1', postdata, function(data) {
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


//批量删除
function del() {
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:230,content:"删除后不可恢复，确定要删除吗？",funcOk:function(){
            C.alert.opacty_close();
            C.form.batch_modify('flink.php?m=del&ajax=1','.chk_list');
    }});
}

//更换logo
function update_logo(fid) {
	var title = $("#formli"+fid+" #ftitle_2").val();
	$("#fid_val").val(fid);
	$("#html_flink_logo #fimg_3").attr("src",$("#formli"+fid+" #fimg_2").val());
	if($("#formli"+fid+" #fimg_2").val()) {
		$("#html_flink_logo #fimg_3").css("display",'');
	}else{
		$("#html_flink_logo #fimg_3").css("display",'none');
	}
	C.alert.opacty({'title':'更换“'+title+'”的logo','width':'400','height':'320','div_tag':'#html_flink_logo'});
}

//更换logo时直接插入数据库
function insert_logo(fid,fimg) {

	$.post('flink.php?m=insert_logo&ajax=1', {'fid':fid,'fimg':fimg}, function(data) {
        try {
            var ret = $.evalJSON(data);
			if(ret.code != 0) {
				C.alert.alert({content:ret.msg});
			}
        }catch(e){C.alert.alert({'content':e.message+data});}
    });

}

