function change_group(o){
    $('#login_group').val($(o).attr('value'));
    $('#search_form').submit();
}
//显示用户添加层
function edit_show() {
    C.form.init(['.ipt']);
    C.alert.opacty({'title':'添加用户','width':'500','height':'400','div_tag':'#user_div'});
    $("#login_name").focus();
}

//添加用户
function save() {
    $('.v_result').html('');
    var marea='#user_div';
    var mdiv=$(marea);
    var postdata=C.form.get_form(marea);
   $.post("user.php?m=save&ajax=1",postdata,function(data){
        try {
            var ret = $.evalJSON(data);
			if(ret.code == 3) {C.alert.alert({content:ret.msg});return false;}
            if(ret.code=='1'){
                mdiv.find("#"+ret.id).focus();
                mdiv.find("#"+ret.id).parent().parent().find('.v_result').html(ret.msg);
            }else if(ret.code=='2'){
				mdiv.find("#"+ret.id).focus();
                mdiv.find("#"+ret.id).parent().parent().parent().find('.v_result').html(ret.msg);
			}else{
                C.alert.opacty_close('#user_div');
                window.location.reload();
            }
        }catch(e){C.alert.alert({'content':e.message+data});}
    });
}



//弹出禁止解禁层
function ban_edit_show() {
	if(!is_check()) return;
	C.alert.opacty({'title':'禁止/解禁用户','width':'430','height':'200','div_tag':'#html_ban'});
}

//检查check是否选中
function is_check() {
    if($(".table_lists").find("input:checked").length==0){
        C.alert.alert({content:"请勾选用户"});
        return false;
    }
	return true;
}

//禁止解禁用户
function ban() {
    var postdata = C.form.get_form('#html_ban');
	postdata['params'] = C.form.get_checkbox_val('.chk_list');
    if(typeof postdata['login_status'] == 'undefined'){ C.alert.alert({'content':'请勾选操作类型'});return false;}
    $.post("user.php?m=ban&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            if(json.code == 0) {
				window.location.reload();
            }else{
                C.alert.alert({'content':json.msg});
            }
        }catch(e){C.alert.alert({'content':e.message+data});}
    });
}

//编辑用户禁止/允许权限
function edit_level(act,uid) {
	/* 批量操作的代码
	var postdata = {};
	postdata['params'] = C.form.get_checkbox_val('.chk_list');
	var a = $.toJSON(postdata['params']);
	a = a.replace(/[\"]/g,'');
	if(!a) { C.alert.alert({'content':'请勾选用户'});return false;}
	*/
	window.location.href="user.group.php?tpl=level&group_id=0&act="+act+"&uid="+uid;
} 


//重置密码
function resetpwd() {
	if(!is_check()) return;
	var postdata = {};
	postdata['params'] = C.form.get_checkbox_val('.chk_list');
	postdata['login_pass'] = RndNum(6);
	C.alert.confirm({content:'确定要重置为“<span style="color:red;">'+postdata['login_pass']+'</span>”吗？',funcOk:function(){
        $.post("user.php?m=resetpwd&ajax=1",postdata,function(data){
            try{
                C.alert.opacty_close();
                var ret=$.evalJSON(data);
                if(ret.code>0) C.alert.alert({content:ret.msg});
            }catch(e){C.alert.show('error:'+e.message+'\r\n'+data);}
        });
    }});
}

function RndNum(n){
	var rnd="";
	for(var i=0;i<n;i++)
	rnd+=Math.floor(Math.random()*10);
	return rnd;
}

//弹出充值积分对话框
function show_point() {
    if(!is_check()) return;
	C.form.init(['.ipt']);
	C.alert.opacty({'title':'充值积分','width':'380','height':'160','div_tag':'#html_point'});
}

//充值提交
function recharge_point(){
    $('.v_result').html('');
	var marea='#html_point';
    var mdiv=$(marea);
	var postdata=C.form.get_form(marea);
    postdata['params'] = C.form.get_checkbox_val('.chk_list');
	$.post('user.php?m=recharge&ajax=1', postdata, function(data) {
        try {
            var ret = $.evalJSON(data);
			if(ret.code == '0') {
				window.location.reload();
			}else{
                if(ret.code==1){
                    C.alert.alert({'content':ret.msg});
                } else {
                    mdiv.find("#"+ret.id).focus();
                    mdiv.find("#"+ret.id).parent().parent().find('.v_result').html(ret.msg);
                }
			}
        }catch(e){C.alert.alert({'content':e.message+data});}
    });
}

//保存后台编辑的用户
function save__ht_edit() {
    $('.v_result').html('');
    var marea='#user_div';
    var mdiv=$(marea);
    var postdata=C.form.get_form(marea);
    $.post("user.php?m=save_edit&ajax=1",postdata,function(data){
        try {
            var ret = $.evalJSON(data);
            
            if(ret.code=='0'){
                var sdiv='<div style="margin:10px 0;">';
                sdiv+='<a href="javascript:void(0);" class="but_ok" onclick="C.alert.opacty_close();">继续编辑当前用户</a>';
                sdiv+='<a href="javascript:void(0);" class="but_ok" onclick="history.back();">返回用户列表</a>';
                sdiv+='</div>';
                C.alert.opacty({content:sdiv,height:'140',title:ret.msg});
            }else{
				if(ret.code=='1'){
					mdiv.find("#"+ret.id).focus();
					mdiv.find("#"+ret.id).parent().parent().find('.v_result').html(ret.msg);
				}else if(ret.code=='2'){
					mdiv.find("#"+ret.id).focus();
					mdiv.find("#"+ret.id).parent().parent().parent().parent().find('.v_result').html(ret.msg);
				}
			}
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

function export_user() {
    var params = [];
    var tag_class = ".chk_list";
    //遍历所有checkbox值
    $(tag_class).each(function () {
      if ($(this).attr('checked') == 'checked') {
        params.push($(this).val());
      }
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    var params_str = params.join(',');
    window.location.href="user.php?m=export_user&params="+params;
}