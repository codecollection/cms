
/**
 * 用户注册
 */
function reg_user(){
    var postdata=C.form.get_form("#reg_form");
      $.post('register.php?m=register', postdata, function(data) {
        try {
            var ret = $.evalJSON(data);
            if(ret.code=='1'){
				C.alert.alert({"content":ret.msg});
            }else{
                if(ret.code=='0'){
                    C.alert.alert({"content":ret.msg});
                    window.location.href='/app/user/login.php';
                } else {
                    C.alert.alert({"content":ret.msg});
                }
                
            }
        } catch (e) {
             C.alert.show('error:'+data);
        }
    });
}

/**
 * 用户登录
 */
function login() {
   var postdata = C.form.get_form('#login_form');
   $.post("/app/user/login.php?m=login",postdata,function(data){
	try {
	    var json = $.evalJSON(data);
		if(json.code == 0) {

           
           var skip_url = '/app/user/mycenter.php';
            if(C.cookie.get("skip_url")!='') var skip_url=C.cookie.get("skip_url");
            window.location.href=skip_url;
		}else{
			//if(json.code == 1) {$("#login_pass").val('');}
			//$("#login_form").find("#"+json.id).focus();
            C.alert.alert({'content':json.msg});
        }
	} catch (e) {
	    alert(e.message+data);
	}
    });
}

//省级
function get_district(obj) {
	if(typeof obj != 'undefined'){
		var province =$(obj).attr('value')
	} else {
		var province=$('#province').val();
	}
	var style = "style=\"width:"+$('#province').parent().parent().css('width')+";\"";
    var district_data=get_cate_son(province);//省级数据
    if(district_data==false) {
        //return;
    }
	var district_obj= $('#district');
    $('#district_div').html(vars_select({'data':district_data,'style':style,'node':'district','func':'onclick=get_street(this)'}));
    get_street('#district');
}
//市级
function get_street(obj) {
	if(typeof obj != 'undefined'){
		var district =$(obj).attr('value');
	} else {
		var district=$('#district').val();
	}
	//alert(district);
	var style = "style=\"width:"+$('#province').parent().parent().css('width')+";\"";
    var street_data=get_cate_son(district);//市级数据
    //$('#update_time').val($.toJSON(street_data));return;
    if(street_data==false) {
        //return;
    }
    $('#street_div').html(vars_select({'data':street_data,'style':style,'node':'street'}));
}

//取下拉菜单值
function get_cate_son(cid){
    for(var i in cates){
        if(cid==cates[i].value){
            return cates[i].son;
        }
        for(var j in cates[i].son){
            if(cid==cates[i].son[j].value){
                return cates[i].son[j].son;
            }
        }
    }
    return false;
}

//JS变量转换下拉菜单
function vars_select(params){
    var style='';node='',data={};func='';
    if(params.style) style=params.style;
    if(params.node) node=params.node;
    if(params.data) data=params.data;
    if(params.func) func=params.func;
	
    var select_first=$('#'+node).parent().next().children().eq(0).html();
    var txt=select_first==null?'请选择所属乡镇街道':select_first;value='';
    
    var html='';
	html = '<div class="sel_box" onclick="select_single(event,this'+(func==''? ','+undefined:',\''+func+'\'')+');return false;" '+style+'>';
    html += '    <a href="javascript:void(0);" class="txt_box" id="txt_box">';
    html += '        <div class="sel_inp" id="sel_inp">'+txt+'</div>';
    html += '        <input type="hidden" name="'+node+'" id="'+node+'" value="'+value+'" class="sel_subject_val">';
    html += '    </a>';
    html += '    <div class="sel_list" id="sel_list" style="display:none;">';
    for(var m in data){
        html += '<a href="javascript:void(0);" value="'+data[m].value+'" class="" '+func+'>'+data[m].txt+'</a>';
    }
    html += '    </div>';
    html += '</div>';
    return html;
}
//修改资源
function save(){
    var postdata=C.form.get_form("#user_info");
    $.post('user.php?m=save', postdata, function(data) {
        try {
            var ret = $.evalJSON(data);
            if(ret.code=='1'){
				 C.alert.alert({"content":ret.msg});
            }else{
                if(ret.code=='0'){
                   C.alert.alert({content:ret.msg,funcOk:function(){
                        window.location.reload();
                    }});
                } 
                
            }
        } catch (e) {
            C.alert.alert({"error":data});
        }
    });
}

//修改密码
function repass(){
	var postdata=C.form.get_form("#repass_form");
    $.post('repass.php?m=save', postdata, function(data) {
        try {
            var ret = $.evalJSON(data);
            if(ret.code=='1'){
				 C.alert.alert({"content":ret.msg});
            }else{
                if(ret.code=='0'){
                   C.alert.alert({content:ret.msg,funcOk:function(){
                        window.location.href='login.php?m=logout';
                    }});
                } 
            }
        } catch (e) {
            C.alert.alert({"error":data});
        }
    });
}