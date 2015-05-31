
//删除评论
function del(comment_id){
    var params=[];
    if(!arguments[0]) comment_id=0;
    if(comment_id > 0) {
        C.alert.confirm({height:200,content:"删除不可恢复，确定要删除吗？",funcOk:function(){
            C.alert.opacty_close();
            $.post('comment.php?m=del&ajax=1', {"params":comment_id}, function (result) {
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
        C.alert.confirm({height:200,content:"删除不可恢复，确定要删除吗？",funcOk:function(){
                C.alert.opacty_close();
                C.form.batch_modify('comment.php?m=del&ajax=1','.chk_list');
        }});
    }
}

//设置状态：审核状态
function set_status(status){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.form.batch_modify('comment.php?m=set_status&ajax=1&is_check='+status,'.chk_list');
}