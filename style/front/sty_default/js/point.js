//删除积分记录
function del(point_id){
    var params=[];
    if(!arguments[0]) point_id=0;
    if(point_id > 0){
        C.alert.confirm({height:200,content:"删除不可恢复，确定要删除吗？",funcOk:function(){
            $.post('points.php?m=del&ajax=1',{params:point_id},function(data){
                var json = $.evalJSON(data);
                if(json.code==0){
                    C.alert.alert({'content':json.msg,funcOk:function(){window.location.reload();}});
                } else {
                    C.alert.alert({'content':json.msg});
                }
            });
        }});
    } else {
        $('.chk_list').each(function () {
            if ($(this).attr('checked') == 'checked') params.push($(this).val());
        });
        if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
        C.alert.confirm({height:200,content:"删除不可恢复，确定要删除吗？",funcOk:function(){
            C.alert.opacty_close();
            C.form.batch_modify('points.php?m=del&ajax=1','.chk_list');
        }});
    }
    
}

//弹出添加 对话框
function edit_show() {
	C.form.init(['.ipt']);
	C.alert.opacty({'title':'会员积分充值','width':'380','height':'250','div_tag':'#html_point'});
}

function save(){
    $('.v_result').html('');
	var marea='#html_point';
    var mdiv=$(marea);
	var postdata=C.form.get_form(marea);
	$.post('points.php?m=save&ajax=1', postdata, function(data) {
        try {
            var ret = $.evalJSON(data);
			if(ret.code == '0') {
				window.location.reload();
			}else{
                if(ret.code==1){
                    C.alert.alert({'content':ret.msg});
                } else {
                    mdiv.find("#"+ret.id).focus();
                    mdiv.find("#"+ret.id).parent().parent().find('.v_result').html(ret.msg);
                }
			}
        }catch(e){C.alert.alert({'content':e.message+data});}
    });
}
