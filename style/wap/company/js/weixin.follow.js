
/*保存编辑*/
function save_weixin(){
	var postdata = C.form.get_form("#wxform");
    $.post("weixin.follow.php?m=save&ajax=1",postdata , function(data) {
        try {
            var json = $.evalJSON(data);
            C.alert.alert({content:json.msg,funcOk:function(){
                   window.location.reload();
            }});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

