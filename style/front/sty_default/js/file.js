//物理删除
function del(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"删除后不可恢复，确定要删除吗？",funcOk:function(){
        C.alert.opacty_close();
        C.form.batch_modify('file.php?m=del&ajax=1','.chk_list');
    }});
}