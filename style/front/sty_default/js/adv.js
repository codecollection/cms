//添加广告位
function add() {
	var postdata = C.form.get_form('#html_adv');
    $.post("adv.php?m=add&ajax=1",postdata,function(data){
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

//编辑广告位
function edit_show(area_id,area_type,title) {
	if(area_type == 'img') {
		window.location.href='?tpl=edit&area_id='+area_id;
	}else{
		$.post("adv.php?m=get_adv&ajax=1",{"area_id":area_id},function(data){
			try {
				var json = $.evalJSON(data);
				if(json.code == 0) {
					$("#html_edit #area_id").val(area_id);
					$("#html_edit #area_html").html(json.area_html);
				}else{
					C.alert.alert({'content':json.msg});
				}

			}catch(e){C.alert.alert({'content':e.message+data});}
		});
		
		C.alert.opacty({'title':'编辑“'+title+'”','width':'830','height':'500','div_tag':'#html_edit'});
	}
}

//批量删除
function del() {
    var postdata={};
	var i = 0 ;
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') {
			i++;
			postdata[$(this).val()] = $(this).parent().attr('area_type');
		}
    });
	
    if (i == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }

    C.alert.confirm({height:200,content:"删除后不可恢复，确定要删除吗？",funcOk:function(){
		C.alert.opacty_close();
		$.post("adv.php?m=del&ajax=1",postdata,function(data){
			try {
				var json = $.evalJSON(data);
				
				if(json.code == 0) {
					window.location.reload();
				}else{
					C.alert.alert({'content':json.msg});
				}

			}catch(e){C.alert.alert({'content':e.message+data});}
		});
    }});
}

//保存
function save() {
	var postdata = C.form.get_form('#html_edit');
    $.post("adv.php?m=save&ajax=1",postdata,function(data){
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

//更换图片
function update_img(img_id) {
	var title = $("#formli"+img_id+" #img_title").val();
	$("#img_id_val").val(img_id);
	$("#html_adv_img #img_url_3").attr("src",$("#formli"+img_id+" #img_url").val());

	if($("#formli"+img_id+" #img_url").val()) {
		$("#html_adv_img #img_url_3").css("display",'');
	}else{
		$("#html_adv_img #img_url_3").css("display",'none');
	}

	C.alert.opacty({'title':'更换“'+title+'”的图片','width':'400','height':'320','div_tag':'#html_adv_img'});
}

//更换图片时直接插入数据库
function insert_img_url(img_id,img_url) {

	$.post('adv.php?m=insert_img_url&ajax=1', {'img_id':img_id,'img_url':img_url}, function(data) {
        try {
            var ret = $.evalJSON(data);
			if(ret.code != 0) {
				C.alert.alert({content:ret.msg});
			}
        }catch(e){C.alert.alert({'content':e.message+data});}
    });
}

//上传广告回调
function callback_upload_ad(data) {
	var json = $.evalJSON(data);

	if(json.code != 0) {
		C.alert.alert({'content':json.msg});
		return false;
	}

	var img_arr = [];
	img_arr[0] = 'jpeg';
	img_arr[1] = 'jpg';
	img_arr[2] = 'gif';
	img_arr[3] = 'png';
	var video = []; 
	video[0] = 'mp4'; 
	video[2] = 'flv';
	video[3] = 'swf';
	var ext = json.ext;
	ext = ext.toLowerCase();
	if(in_array(ext,img_arr)) {
		create_img(json);
	}else{
		create_flash(json);
	}
}

//生成图片代码
function create_img(json){
    try{
        $("#area_html").html('<img src="'+json.url+'" alt="'+json.title+'" />');
    }catch(e){C.alert.alert({'content':e.message+json});}
}
//生成flash代码
function create_flash(json){
    try{
        var flash_html = '';
		flash_html +='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%">';
		flash_html +='    <param name="movie" value="'+json.url+'" />';
		flash_html +='    <param name="quality" value="best" />';
		flash_html +='    <param name="allowScriptAccess" value="always" />';
		flash_html +='    <embed src="'+json.url+'" width="100%" height="100%" type="application/x-shockwave-flash" allowScriptAccess="always" quality="best"></embed>';
		flash_html +='</object>';
        $("#area_html").html(flash_html);
    }catch(e){C.alert.alert({'content':e.message+json});}
}

//js版本 in_array
function in_array(search,array) {
    for(var i in array) {
        if(array[i]==search) {
            return true;
        }
    }
    return false;
}
