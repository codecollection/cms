//移除优惠券
function del(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"删除优惠券不可恢复，确定要删除吗？",funcOk:function(){
            C.alert.opacty_close();
            C.form.batch_modify('gov.shop.ticket.php?m=del&ajax=1','.chk_list');
    }});
}



//保存
function save(ticket_id) {
    if(!arguments[0]) ticket_id=0;
    if(ticket_id > 0){
        var postdata=C.form.get_form('#formli'+ticket_id);
    } else {
        var postdata=C.form.get_form('#ticketform');
    }
    $.post("gov.shop.ticket.php?m=save&ajax=1",postdata,function(data){
        try {
             var json=$.evalJSON(data);
            if(json.code==0){
            C.alert.alert({"content":json.msg,funcOk:function(){
                window.location.reload(); 
            }});
            }else{
                C.alert.alert({content:json.msg});
            }
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

//生成优惠码
function create_ticket_code(ticket_id) {
	$.post("gov.shop.ticket.php?m=create_ticket_code&ajax=1",{"ticket_id":ticket_id,"create_ticket_code_num":$("#html_create_code #create_ticket_code_num").val()},function(data){
        try {
             var json=$.evalJSON(data);
            if(json.code==0){
				C.alert.opacty_close("#html_create_code");
				var sdiv='<div style="margin:10px 0;">';
				sdiv+='<a href="javascript:void(0);" class="but_ok" onclick="window.location.reload();" >确定</a>';
				var ticket_title = $("#formli"+ticket_id+" #ticket_title").val();
                sdiv+='<a href="gov.shop.ticket.user.php?search_type=ticket_title&yesno=-1&val='+ticket_title+'" class="but_ok">查看生成的优惠码</a>';
                sdiv+='</div>';
                C.alert.opacty({content:sdiv,height:'150',title:json.msg});
            }else{
				$("#html_create_code .v_result").html(json.msg);
            }
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

//弹出生成优惠码
function html_create_code(ticket_id) {
	$("#html_create_code #but_add").attr('onclick','create_ticket_code('+ticket_id+')');
	var last_ticket_num = parseInt($("#formli"+ticket_id+" #create_num").text()) + parseInt($("#formli"+ticket_id+" #receive_num").text());
	last_ticket_num = parseInt($("#formli"+ticket_id+" #ticket_total").val()) - last_ticket_num;
	$("#last_ticket_num").text(last_ticket_num);
	$("#html_create_code .v_result").html('');
	C.alert.opacty({'title':'生成优惠码','width':'300','height':'200','div_tag':'#html_create_code'});
}