//备份
function ready_backup() {
	var postdata={};
	var i = 0 ;
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') {
			i++;
			postdata[i] = $(this).val();
		}
    });

	if (i == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return false;}

	$.post("data.backup.php?m=ready_backup&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            if(json.code==0) {
				setTimeout(function() {
					$("#ready_backup").css('cursor','default');
					$("#iframe_1").attr('src','data.backup.php?m=backup_ing');
				},500);
            }else{
				C.alert.alert({content:json.msg});
			}
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

//还原
function ready_recover() {
	var postdata={};
	var i = 0 ;
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') {
			i++;
			postdata[i] = $(this).val();
		}
    });

	if (i == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return false;}
	postdata['file'] = $("#file").val();
	$.post("data.backup.php?m=ready_recover&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            if(json.code==0) {
				setTimeout(function() {
					$("#recover_data").parent().find('a').css('cursor','default');
					$("#iframe_1").attr('src','data.backup.php?m=recover_ing');
				},500);
            }else{
				C.alert.alert({content:json.msg});
			}
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

//删除备份
function del(file) {
	C.alert.confirm({content:'确定要删除备份“<span style="color:red;">'+file+'</span>”吗？',funcOk:function(){
        $.post("data.backup.php?m=del&ajax=1",{"file":file},function(data){
            try{
                C.alert.opacty_close();
                var ret=$.evalJSON(data);
                if(ret.code>0) {
					C.alert.alert({content:ret.msg});
				}else{
					$("#"+ret.id).remove();
				}
            }catch(e){C.alert.show('error:'+e.message+'\r\n'+data);}
        });
    }});
}

//备份还原切换卡
$(function(){
	C.tabs({"params":
		[
			{"nav":"#tab1","con":"#con1","sclass":"current2","nclass":""},
			{"nav":"#tab2","con":"#con2","sclass":"current2","nclass":""}
		]
	});
});

//显示备份还原信息函数
function show_status(titles,contents){
	$("#status_con").html(contents);
	C.alert.opacty({'title':titles,'width':'500','height':'230','div_tag':'#status'});
}

//显示备份还原错误信息
function show_error_msg(msg){
	C.alert.opacty_close("#status");
	C.alert.alert({ "content": msg });
}


//加载后给页面添加两个元素 用于备份还原跳转
$(function(){
	$("body").append('<div id="status" ><div id="status_con" style="padding:25px;font-size:12px;"></div></div>');
	$("body").append('<iframe id="iframe_1" frameborder="0" height="0" width="0" src="" style="display:none;"></iframe>');
});