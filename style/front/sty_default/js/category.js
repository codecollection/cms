
//保存
function save() {
    var postdata=C.form.get_form('#cateform');
    try{
        postdata['cintro']=cintro.getData();
    }catch(e){}
    $.post("category.php?m=save&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.code=='0'){
                var sdiv='<div style="margin:10px 0;">';
                sdiv+='<a href="javascript:void(0);" class="but_ok" onclick="window.location.reload();">继续编辑当前分类</a>';
                sdiv+='<a href="javascript:void(0);" class="but_ok" onclick="history.back();">返回分类管理</a>';
                sdiv+='</div>';
                C.alert.opacty({content:sdiv,height:'120',title:json.msg});
            }
            if(json.code=='1') C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
//保存
function save_quick() {
    var postdata=C.form.get_form('#cateform');
    try{
        postdata['cintro']=cintro.getData();
    }catch(e){}
    $.post("category.php?m=save&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.code=='0'){
                window.location.reload();
            }
            if(json.code=='1') C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
//获取汉字拼音
function get_pinyin(obj){
    if(!arguments[0]) obj=null;
    var cname=$("#cname").val();
    if(obj!=null) cname=$(obj).closest('tr').find('#cname').val();
    if(cname=='') {
        C.alert.alert({content:"没有填写分类名称"});return;
    }
    $.get("category.php?m=get_pinyin&cname="+encodeURIComponent(cname),function(data){
        if(obj==null) {
            $('#cname_py').val(data);
        }else{
            $(obj).closest('tr').find('#cname_py').val(data);
        }
    });
}
//删除
function del(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"以下2种情况无法删除分类：<br>1）有子分类；2）分类下有数据<br>删除后不可恢复，确定要删除吗？",funcOk:function(){
            C.alert.opacty_close();
            C.form.batch_modify('category.php?m=del&ajax=1','.chk_list');
    }});
}