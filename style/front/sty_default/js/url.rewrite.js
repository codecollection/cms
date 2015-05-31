
//保存
function save() {
    var postdata=C.form.get_form('#urlform');
    $.post("url.rewrite.php?m=save&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            C.alert.alert({content:json.msg,funcOk:function(){
                    window.location.reload();
            }});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
//删除
function del(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"删除后不可恢复，确定要删除吗？",funcOk:function(){
            C.alert.opacty_close();
            C.form.batch_modify('url.rewrite.php?m=del&ajax=1','.chk_list');
    }});
}
//更新规则文件
function update_rule_file(file){
    $.post("url.rewrite.php?m=update_rule_file&ajax=1",{file:file},function(data){
        try {
            var json = $.evalJSON(data);
            C.alert.alert({content:json.msg,width:'700'});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}