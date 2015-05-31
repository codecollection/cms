//删除日志
function del(){
    C.alert.confirm({height:200,content:"清空全部日志，您确定要清空吗？",funcOk:function(){
    C.alert.opacty_close();
    $.post("log.php?m=del&ajax=1",{},function(data){
    try {
        var json = $.evalJSON(data);
        C.alert.alert({content:json.msg,funcOk:function(){
                   window.location.reload();
        }});
    }catch(e){C.alert.alert({content:e.message+data});}
  });
}});
}


