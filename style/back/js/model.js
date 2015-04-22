/**
 * 模型js
 */
$(function(){
    
});

//包括模型和字段关系
function doField(){
    
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    var model_id = $("#model_id").val();
    //提交数据处理
    $.post('/back/model/doField', { "params": params,"model_id":model_id }, function (result) {
        try {
            var ret = $.evalJSON(result);
            if (ret.code == 0) {
                C.alert.alert({ "content": "" + ret.msg + "" ,"funcOk":function(){
                    window.location.reload(); 
                }});
            } else {
                C.alert.alert({ "content":ret.msg});
            }
        } catch (e) {
            C.alert.alert({"content":result + e});
        }
    });

   // C.form.batch_modify(,'.chk_list');
//    
//    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
//    C.alert.confirm({height:200,content:"以下2种情况无法删除分类：<br>1）有子分类；2）分类下有数据<br>删除后不可恢复，确定要删除吗？",funcOk:function(){
//            C.alert.opacty_close();
//            
//    }});


   // C.form.update_field('/back/model/doField', '.model','field_id');
}