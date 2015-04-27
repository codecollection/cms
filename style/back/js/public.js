$(function(){
    
    var isShow=false;
    $(".son_div").hide();
    $(".son_menu").mouseover(function(){
        $(".son_div").show();
    });
    $(".son_div").mouseover(function(){
        isShow=true;   
        $(this).show(); 
    });
    $(".son_div").mouseout(function(){
        if(isShow)
        {
            $(this).hide(); 
            isShow=false;
        }   
    });
    
    //table列表选择行自动勾选
    $('.table_click').find('tr').click(function(e){
        var chkbox=$(this).find('.chk_list');
        if(chkbox.length==1){
            if(!chkbox.attr('disabled')){
                if(chkbox.attr('checked')){
                    chkbox.attr('checked',false);
                }else{
                    chkbox.attr('checked',true);
                }
            }
        }
        $('.chk_list').each(function(){
            if($(this).attr('checked')){
                $(this).parent().parent().css({'background':'#f7f7f7'});
            }else{
                $(this).parent().parent().css({'background':'none'});
            }
        });
    });
    $('.chk_list').click(function(e){
       e.stopPropagation();
       $('.chk_list').each(function(){
            if($(this).attr('checked')){
                $(this).parent().parent().css({'background':'#f7f7f7'});
            }else{
                $(this).parent().parent().css({'background':'none'});
            }
        });
    });
    
    $('.table_click').find('input[type=text]').click(function(e){
        e.stopPropagation();
    });
    
    //返回顶部效果
    $(window).scroll(function(){
            var scrolltop=$(this).scrollTop();
            scrolltop > 0 ? $('.to-top').show(): $('.to-top').hide();
            var top = $(window).height();
            $('.to-top').css({'top':scrolltop + top - 130});
            
			
			if($.browser.version == "6.0" &&  $('.footer_fixed').length){
				$('.footer_fixed').css({'top':scrolltop + top - 61 + 'px'});
			}
        });
    $('.to-top').on('click',function(){
        if(!$('html,body').is(":animated"))
            $('html,body').animate({scrollTop: 0}, 300);
    });
});
//设置分页大小的cookie
function set_pagesize_cookie() {
	var obj = document.getElementById('pagesize');
	var val = obj.options[obj.selectedIndex].value;
	var key=window.location.href;
	key = key.split('.php');
	key = key[0];
	key = key.split('/');
	key = 'page_'+key[key.length-2]+'_'+key[key.length-1];
	key = key.replace('.','_');
	C.cookie.set(key,val,24*30,'/');
}

//分页
function set_pagesize() {
	set_pagesize_cookie();
	var url = window.location.href;
	url = url.replace(/p=[0-9]*/,'p=1');
	window.location.href = url;
}
//设置隐藏显示层
function show_more(o){
    var obj=$('#'+o);
    if(obj.css('display')=='none'){
        obj.css('display','');
        C.cookie.set(o,1);
    }else{
        obj.css('display','none');
        C.cookie.set(o,0);
    }
}

function cache_clear(type) {
    C.alert.opacty({height:'110',content:'缓存清理中，请稍候......'})
    $.get("cache.clear.php?m=cache_clear",{type:type},function(data){
        try {
            C.alert.opacty_close();
            var json = $.evalJSON(data);
            if(json.code=='1') C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}


/**
 *
 * 重启账号
 */
function restart() {
	$.post('login.php?m=restart', {}, function(data) {
        try {
            var ret = $.evalJSON(data);
			if(ret.code == 0) {
				window.location.reload();
			}else{
                C.alert.alert({content:ret.msg});
			}
        }catch(e){C.alert.alert({'content':e.message+data});}
    });
} // end func

//保存表单数据
function save_data(){
    var postdata = C.form.get_form('#form_add');
    
    $.post(urls.save,postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.status == 0){
                C.alert.alert({content:json.msg});
                //show_close(json.msg);
            }else{
                C.alert.alert({content:json.msg});
            }
            
            
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

//删除
function del_data(tag){
    if(!arguments[0]){tag = ".chk_list";}
    var params=[];
    $(tag).each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"确认要删除数据"+params.length + "条数据吗？",funcOk:function(){
        C.alert.opacty_close();
        C.form.batch_modify(urls.del,tag);
    }});
}

//修改排序
function update_order(tag){
    if(!arguments[0]){tag = ".corder";}
    C.form.update_field(urls.order,tag);
}

//更改状态

function status(id,status){
    
    $.post(urls.status,{"id":id,"status":status},function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.status == 0){
                show_close(json.msg);
            }else{
                C.alert.alert({content:json.msg});
            }
            
            
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
//弹出层提示后自动重载页面
function show_close(msg,t){
    if(!arguments[0]){msg = "操作成功";}
    if(!arguments[1]){t = 2000;}
    C.alert.alert({content:msg});
    setInterval(function(){

        window.location.reload();
    },t);
}
//上传图片回调
function callback_upload_thumb(ret){
    try{
        var json=$.evalJSON(ret);
        
        if(json.files.length<=0) {
            alert('上传失败');
            return false;
        }
        
        $("#thumb_"+json.params.vid).attr("src",json.files);//.html('<img src="'+json.files+'" width="30" height="30" >');
        $("#"+json.params.vid).val(json.files);
    }catch(e){
        alert('err:'+e.message);
    }
}
