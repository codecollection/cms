//删除
function del(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"以下2种情况无法删除分类：<br>1）有子分类；2）没有即时清除代码值缓存<br>删除后不可恢复，确定要删除吗？",funcOk:function(){
            C.alert.opacty_close();
            C.form.batch_modify('code.php?m=del&ajax=1','.chk_list');
    }});
}


/*
function expand_func(obj){//alert(1);
    //收缩状态：显示数据
    if($(obj).hasClass('tree-expand-close')){//alert($(obj).attr('class'));
        var vid=$(obj).parent().attr('id');
        var postdata={};
        postdata['id']=vid.substr(2);
        $.post('code.php?m=tree', postdata, function(data) {//alert(data);
            try {
                $(obj).siblings('ul').remove();
                $(obj).parent().append(data);
            }catch(e){C.alert.show('error:'+e.message+'\r\n'+data);}
        });
    }
}*/


//保存
function save(code_id) {
    if(!arguments[0]) code_id=0;
    if(code_id>0) {
        var postdata=C.form.get_form("#formli"+code_id);
    } else {
        var postdata=C.form.get_form('#codeform');
    }
    postdata['code_id'] = code_id;
    $.post("code.php?m=save&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.code=='0'){
                /*var sdiv='<div style="margin:10px 0;">';
                sdiv+='<a href="javascript:void(0);" class="but_ok" onclick="window.location.reload();">继续</a>';
                sdiv+='<a href="javascript:void(0);" class="but_ok" onclick="history.back();">返回</a>';
                sdiv+='</div>';
                C.alert.opacty({content:sdiv,height:'120',title:json.msg});*/
                C.alert.alert({ "content": "" + json.msg + "" ,"funcOk":function(){
                    window.location.reload(); 
                }});
            } else { C.alert.alert({content:json.msg}); }
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}