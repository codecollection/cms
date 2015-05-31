
//保存菜单
function save() {
    var postdata=C.form.get_form('#menuform');
    $.post("weixin.menu.php?m=save&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.code=='0'){
               json.code == 0 ? (C.alert.alert({"content":""+json.msg+""}), setTimeout(function() {
                window.location.reload();
            }, 1000)) : C.alert.alert({"content":""+json.msg+""});
            }
            if(json.code=='1') C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
//删除单个菜单
function del_check(menu_id){
    $.post("weixin.menu.php?m=del&ajax=1",{'params':menu_id},function(data){
        try{
            var json=$.evalJSON(data);
            if(json.code==0){
            C.alert.alert({"content":json.msg,funcOk:function(){
                window.location.reload(); 
            }});
            }else{
                C.alert.alert({content:json.msg});
            }
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}


//删除多个菜单
function del(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"以下1种情况无法删除菜单：<br>1）有子菜单；确定要删除吗？",funcOk:function(){
            C.alert.opacty_close();
            C.form.batch_modify('weixin.menu.php?m=del&ajax=1','.chk_list');
    }});
}
//同步菜单到微信
function menu_sync(){
    $.post("weixin.menu.php?m=menu_sync&ajax=1",{},function(data){
        try{
            var json=$.evalJSON(data);
            C.alert.alert({"content":json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
//快速提取分类链接地址
function set_url(obj){
    var cate_id=$(obj).val();
    $.post("weixin.menu.php?m=cate_url&ajax=1",{id:cate_id},function(data){
        try{
            if($(obj).parent().parent().find('td > #wx_menu_type').val()=='view'){
                $(obj).parent().parent().find('td > #menu_key_url').val(data);
            }else{
                C.alert.alert({"content":"事件类型不能是超级链接"});
            }
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}