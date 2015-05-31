//移除
function del(tu_id){
    var params=[];
    if(!arguments[0]) tu_id=0;
    if(tu_id > 0) {
        C.alert.confirm({height:200,content:"删除不可恢复，确定要移除吗？",funcOk:function(){
            C.alert.opacty_close();
            $.post('gov.shop.ticket.user.php?m=del&ajax=1', {"params":tu_id}, function (result) {
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
    }});
       
    } else {
        $('.chk_list').each(function () {
            if ($(this).attr('checked') == 'checked') params.push($(this).val());
        });
    
        if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
        C.alert.confirm({height:200,content:"删除不可恢复，确定要移除吗？",funcOk:function(){
                C.alert.opacty_close();
                C.form.batch_modify('gov.shop.ticket.user.php?m=del&ajax=1','.chk_list');
        }});
    }
}
