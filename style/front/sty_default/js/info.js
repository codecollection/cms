
function change_info_status(o){
    $('#info_status').val($(o).attr('value'));
    $('#search_form').submit();
}
//切换模型表单
function change_model(o) {
    $('#model_name').val($(o).attr('value'));
    $.get("info.list.php?m=change_model&ajax=1",{info_id:$('#info_id').val(),model_name:$('#model_name').val()},function(data){
        try {
            $('#model').html(data);
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
//保存
function save() {
    var postdata=C.form.get_form('#infoform');
    var cid_path=C.form.get_form('#cid_path');
    postdata['level']=cid_path['level'];
    for ( instance in CKEDITOR.instances ) {
        postdata[instance]=CKEDITOR.instances[instance].getData();
    }

    $.post("info.list.php?m=save&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.code=='0'){
                var sdiv='<div style="margin:10px 0;">';
                sdiv+='<a href="javascript:void(0);" class="but_ok" onclick="C.alert.opacty_close();">继续'+(postdata['info_id']==0?'添加':'编辑当前')+'文档</a>';
                sdiv+='<a href="javascript:void(0);" class="but_ok" onclick="history.back();">返回文档列表</a>';
                sdiv+='</div>';
                C.alert.opacty({content:sdiv,height:'120',title:json.msg});
            }
            if(json.code=='1') C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

//逻辑删除
function set_status(info_status){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.form.batch_modify('info.list.php?m=set_status&ajax=1&info_status='+info_status,'.chk_list');
}

//物理删除
function del(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"只能清空已删除状态的数据<br>清空后不可恢复，确定要清空吗？",funcOk:function(){
            C.alert.opacty_close();
            C.form.batch_modify('info.list.php?m=del&ajax=1','.chk_list');
    }});
}
//移动复制显示分类
function move_copy_show(type){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    if(type=='move'){
        $('#move_copy').val('move');
        C.alert.opacty({title:'移动到新分类',width:'600',height:'440',div_tag:'#cate_tree_move_copy'});
    }
    if(type=='copy'){
        $('#move_copy').val('copy');
        C.alert.opacty({title:'复制到新分类',width:'600',height:'440',div_tag:'#cate_tree_move_copy'});
    }
}
//移动复制
function move_copy(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    var postdata=C.form.get_form('#cate_tree_move_copy');
    postdata['ids']=params;
    $.post("info.list.php?m=move_copy&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            if(json.code=='0') window.location.reload();
            if(json.code=='1') C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

//设置服务器时间
function set_time(obj){
    $.get("info.list.php?m=set_time&ajax=1",{},function(data){
        $(obj).closest('td').find('#publish_time').val(data);
    });
}


//获取标签
function get_tags() {
    var info_title=$('#info_title').val();
    if(info_title==''){
        C.alert.alert({content:''});
        return;
    }
    C.alert.alert({content:'正在联网获取标签，请稍候......'});
    $.post("info.list.php?m=get_tags&ajax=1",{info_title:info_title},function(data){
        try {
            C.alert.opacty_close();
            var tags=$.evalJSON(data);
            var info_tags=[];
            for(var i=0;i<tags.length;i++){
                if(tags[i].k!='') info_tags.push(tags[i].k);
            }
            if(info_tags.length==0) C.alert.alert({content:'没有获取到标签'});
            if($('#info_tags').val()==''){
               $('#info_tags').val(info_tags.join(','));
            }else{
                C.alert.confirm({content:'确定要替换为新获取的标签吗？<br>新标签：'+info_tags.join(','),funcOk:function(){
                        $('#info_tags').val(info_tags.join(','));
                        C.alert.opacty_close();
                }});
            }
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
