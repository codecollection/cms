//移除订单
function del(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    C.alert.confirm({height:200,content:"删除订单不可恢复，确定要删除吗？",funcOk:function(){
            C.alert.opacty_close();
            C.form.batch_modify('gov.shop.order.php?m=del&ajax=1','.chk_list');
    }});
}


//设置状态：确认订单、确认付款、确认发货
function set_status(act,status_html){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    
    C.alert.confirm({height:200,content:"<div id='select_status' style='width:320px;padding-left: 30px;'><div style='width:80px;float:left;'>选择状态：</div><div style='float:left;'>"+status_html+"</div></div>",funcOk:function(){
      
        var status = $("#select_status #"+act+"_status").val();
        C.alert.opacty_close();
        C.form.batch_modify('gov.shop.order.php?m='+act+'&ajax=1&'+act+'_status='+status,'.chk_list');
    }});
}

function show_month_order(){
    C.alert.opacty({'title':'包月订单日期','width':'300','height':'450','div_tag':'#html_month'});

}

function print_all(){
    var params=[];
    $('.chk_list').each(function () {
        if ($(this).attr('checked') == 'checked') params.push($(this).val());
    });
    if (params.length == 0) { C.alert.alert({ "content": "没有选中项，无法操作" }); return; }
    var order_id = params.join(',');
    //window.location.href="?tpl=print&m=view&order_id="+order_id;
    window.open("?tpl=print&m=view&order_id="+order_id);

}

function show_order_map(){
    var send_status = $("#send_status").val();
    var order_status = $("#order_status").val();
    var pay_status = $("#pay_status").val();
    var pay_type = $("#pay_type").val();
    window.open('gov.shop.order.php?tpl=map&send_status'+send_status+'&order_status='+order_status+'&pay_status='+pay_status+'&pay_type='+pay_type);
}
/*
*检查新订单语音提醒
*/
function check_order(){
    setInterval(function(){
        $.post("gov.shop.order.php?m=check_order",{},function(data){
            var json = $.evalJSON(data);
            if(json.code==0) {
                var player_order_html  = '<audio controls="controls" height="100" width="100" autoplay>';
                    player_order_html += '<source src="message.mp3" type="audio/mp3" />';
                    player_order_html +='<embed height="100" width="100" src="message.mp3" autostart="true" />';
                    player_order_html +='</audio>';
                    $("#player_order").html(player_order_html);
                C.alert.confirm({butok:'查看',butcancel:'取消',content:json.msg,funcOk:function(){
                    $("#player_order").html('');
                    C.alert.opacty_close();
                    var order_url = 'gov.shop.order.php?tpl=view&m=view&order_id='+json.order_id;
                    window.open(order_url);
                    window.location.reload();
                }});
                $("a.but_cancel,.tit_right").attr('onclick','window.location.reload();');
            } else {
                //$("#player_order").html('');
                return;
            }
        });
    },8000);
}
check_order();


function reply_admin(order_comment_id){
    $('#order_comment_id').val(order_comment_id);
    C.alert.opacty({'title':'回复评价','width':'620','height':'300','div_tag':'#reply_html'});
}

function save_reply_comment(){
    var order_comment_id = $('#order_comment_id').val();
    var reply = $('#reply').val();
    $.post("gov.shop.order.php?m=save_reply",{order_comment_id:order_comment_id,reply:reply},function(data){
        var json = $.evalJSON(data);
        if(json.code=='1'){
             C.alert.alert({"content":json.msg});
        }else{
            if(json.code=='0'){
               C.alert.alert({content:json.msg,funcOk:function(){
                    window.location.reload();
                }});
            } 
        }
    });
}

/*
 * 导出订单数据
 * 选择要导出的订单数据
 */
function export_order(){
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
    window.location.href="gov.shop.order.php?m=export_order&params="+params;
}