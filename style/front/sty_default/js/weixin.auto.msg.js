//显示编辑和添加层
function edit_show(msg_id){
    if(!arguments[0]) msg_id=0;
    $('.v_result').html('');
    $("#msg_id").val(msg_id);
    if(msg_id==0){
       
        C.form.init(['.ipt']);
        $('#but_add').html('确定');
        $('#msg_body_con').val('');
        $('#msg_key_con').val('');
        C.alert.opacty({'title':'添加自动回复','width':'820','height':'500','div_tag':'#html_weixin'});
    }else{
        $.post('weixin.auto.msg.php?m=get&ajax=1', {msg_id:msg_id}, function(data) {
            try{
                var ret=$.evalJSON(data);
                var init_arr=[];
                for(var m in ret){
                    init_arr.push(['#'+m+"_con",ret[m]]);
                }
                C.form.init(init_arr);
                if(ret.code==1){
                    C.alert.alert({content:ret.msg});
                }

            }catch(e){C.alert.show('error:'+e.message+'\r\n'+data);}
        });
        $('#but_add').html('确定');
        C.alert.opacty({'title':'编辑自动回复','width':'820','height':'500','div_tag':'#html_weixin'});
    }
}



/*保存编辑*/
function save_weixin(){
	var postdata = C.form.get_form("#weixin_msg");
    $.post("weixin.auto.msg.php?m=save&ajax=1",postdata , function(result) {
        try {
            var ret = $.evalJSON(result), msg = ret.msg;
            ret.code == 0 ? (C.alert.alert({"content":""+msg+""}), setTimeout(function() {
                window.location.reload();
            }, 1000)) : C.alert.alert({"content":""+msg+""});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

//保存
function save() {
    var postdata=C.form.get_form('#weixinform');
    $.post("weixin.auto.msg.php?m=save&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            json.code == 0 ? (C.alert.alert({"content":""+json.msg+""}), setTimeout(function() {
                window.location.reload();
            }, 1000)) : C.alert.alert({"content":""+json.msg+""});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

//删除分类
function del(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"确定要删除吗？",funcOk:function(){
            C.alert.opacty_close();
            C.form.batch_modify('weixin.auto.msg.php?m=del&ajax=1','.chk_list');
    }});
}
