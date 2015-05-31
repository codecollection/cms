$(function(){
    //购物数 手动输入重新计算总数
	$('#goods_num').keyup(function(){
		//判断输入不为数字
		this.value=this.value.replace(/[^\d]/g,'');
        if(this.value == 0){
            this.value = 1;
        }
	});
});

	/*搜索*/
function do_search(){
    var searchvalue = $("#seach-txt").val();
    if(searchvalue==''){ C.alert.alert({content:'请输入搜索关键词'}); return false;}
    window.location.href="/app/cms/index.php?tpl=search&q="+encodeURIComponent(searchvalue);
}

/**
 *
 * 更改头像
 */
function update_avatar(avatar) {
	$.post('mycenter.php?m=update_avatar', {"avatar":avatar}, function(data) {
		try {
			var ret = $.evalJSON(data);
			 C.alert.alert({'content':ret.msg});
			if(ret.code == 0) {
				window.location.reload();
			}
		}catch(e){C.alert.alert({'content':e.message+data});}
	});
}

//切换模型表单
function change_model(o) {
    $('#model_name').val($(o).attr('value'));
    $.get("info.php?m=change_model&ajax=1",{info_id:$('#info_id').val(),model_name:$('#model_name').val()},function(data){
        try {
            $('#model').html(data);
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}




//保存
function save_info() {
    var postdata=C.form.get_form('#infoform');
    for ( instance in CKEDITOR.instances ) {
        postdata[instance]=CKEDITOR.instances[instance].getData();
    }

    $.post("info.php?m=save&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.code=='0'){
                C.alert.alert({content:json.msg,funcOk:function(){
                    window.location.reload();
                }});
            } else {
                if(json.code=='1') C.alert.alert({content:json.msg});
            }
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}


function show_recive(){
    try{
        $.post("/app/cart/reserve.php?m=check&ajax=1",{},function(data){
            var json = $.evalJSON(data);
            if(json.code==0) {
                C.alert.opacty({"title":"请填写收货信息","width":"600","height":"450","div_tag":"#order_div"});
            } else {
                C.alert.alert({content:json.msg});
            }
        });
    }catch(e){alert(e.message);}
}
function add_num(obj){
   var num = $(".num_ipt").val();
   if($(obj).hasClass("num_decrease")) {
        num--;
   }
   if($(obj).hasClass("num_increase")) {
        num++;
   }
   if(num<1) num = 1;
    $(".num_ipt").val(num);
}
function buy_order() {
    var postdata = C.form.get_form("#order_div");
    postdata['goods_num'] = $('#goods_num').val()
    $.post("/app/cart/reserve.php?m=order",postdata,function(data){
        try{
            var json = $.evalJSON(data);
            if(json.code==0) {
               C.alert.opacty_close('#order_div');
               C.alert.alert({content:json.msg});
            } else {
                C.alert.alert({content:json.msg});
            }
        }catch(e) { C.alert.alert({content:data})}
    });
}