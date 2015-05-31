//添加模型
function save_model() {
	var postdata = C.form.get_form('#html_model');
    $.post("model.php?m=save_model&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.code=='0'){
                window.location.reload();
            }else{
				C.alert.alert({content:json.msg});
			}
        }catch(e){C.alert.alert({content:e.message+data});}
    });

}

//添加字段
function save_model_attr() {
	var postdata = C.form.get_form('#html_model');
    $.post("model.php?m=save_model_attr&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.code=='0'){
                window.location.reload();
            }else{
				C.alert.alert({content:json.msg});
			}
        }catch(e){C.alert.alert({content:e.message+data});}
    });

}
//删除字段
function del_attr(field_id) {
    C.alert.confirm({content:'不会删除已创建表中的列数据，确定要删除吗？',funcOk:function(){
        $.post("model.php?m=del_attr&ajax=1",{field_id:field_id},function(data){
            try {
                var json = $.evalJSON(data);
                if(json.code=='0'){
                    window.location.reload();
                }else{
                    C.alert.alert({content:json.msg});
                }
            }catch(e){C.alert.alert({content:e.message+data});}
        });
    }});
}
//更新表结构
function update_table(model_name) {
    C.alert.confirm({content:'请先添加或批量修改好模型再更新表结构',funcOk:function(){
        $.post("model.php?m=update_table&ajax=1",{model_name:model_name},function(data){
            try {
                C.alert.opacty_close();
                var json = $.evalJSON(data);
                C.alert.alert({content:json.msg,funcOk:function(){
                        window.location.reload();
                }});
            }catch(e){C.alert.alert({content:e.message+data});}
        });
    }});
}
//删除模型选中数据
function del_data(model_name){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"删除后不可恢复，确定要删除吗？",funcOk:function(){
        C.alert.opacty_close();
        C.form.batch_modify('model.php?m=del_data&model_name='+model_name+'&ajax=1','.chk_list');
    }});
}
//清空模型全部数据
function clear_data(model_name){
    C.alert.confirm({height:200,content:"即将清空全表数据，确定要清空吗？",funcOk:function(){
        $.post("model.php?m=clear_data&ajax=1",{model_name:model_name},function(data){
            try {
                C.alert.opacty_close();
                var json = $.evalJSON(data);
                C.alert.alert({content:json.msg,funcOk:function(){
                    window.location.reload();
                }});
            }catch(e){C.alert.alert({content:e.message+data});}
        });
    }});
}
function save_data(){
    var postdata=C.form.get_form('#info_model');
    for ( instance in CKEDITOR.instances ) {
        postdata[instance]=CKEDITOR.instances[instance].getData();
    }
    $.post("?m=save_data",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            if(json.code=='0'){
                C.alert.alert({content:json.msg,funcOk:function(){
                    window.location.reload();
                }});
            }
            if(json.code=='1') C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}