//批量删除自定义变量
function del_vars(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"删除后不可恢复，确定要删除吗？",funcOk:function(){
        C.alert.opacty_close();
        C.form.batch_modify('gov.plugin.vars.php?m=del&ajax=1','.chk_list');
    }});
}
//添加自定义变量
function add_var(){
    var postdata= C.form.get_form('#varform');
    $.post("gov.plugin.vars.php?m=add_var&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            C.alert.alert({content:json.msg,funcOk:function(){
                if(json.code==0) window.location.reload();
            }});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}


