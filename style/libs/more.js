$(document).ready(function(){ 
    
    $(".login").click(function(){
        var self = $("#topDMainBox");
        if(self.css("display") == "none"){
            self.show();
            $("#logined_li").addClass("hover");
        }else{
            self.hide();
            $("#logined_li").removeClass("hover");
        }
    });
//    var filterFx = $('.filterFx');
//    listenSelect(filterFx);

    $('.filterFx').on('click.sel','a',function(){
        var key = $(this).parents('.f_down')[0].id;
        var value = $(this).html();
        
        window.location.href = location.href+"&" + key + "=" + value;
    });
    
     $("#baseLogC").click(function(){
         $("#baseLog").css({"left":"","visibility":""});
     });
});

function doLogin(){
    var postdata = C.form.get_form('#login_form');
    
    $.post("/user/login/doLogin",postdata,function(data){
        try {
            
            var json = $.evalJSON(data);
            
            if(json.status == 0) {
               window.location.href='/user/pub';
            }else{
                if(json.status == 10) {$("#user_pass").val('');}
                C.alert.alert({'content':json.msg});
            }
        }catch(e){C.alert.alert({'content':e.message+data});}
    });
    
}
////选择
//function checkEle(context){
//    $(context).addClass('selected').siblings('.selected').removeClass('selected');
//    return $(context).text();
//}
////监听选择
//function listenSelect(context){
//    var selected = [];
//    context.on('click.sel','a',function(){
//        var self = $(this);
//        var key = self.parents('.f_down')[0].id;
//        var newText = checkEle(self,selected);
//        updateSelected(key,newText,selected);
//        window.location.href= location.href+"&" + selected;
//        //sendDataToServer('',selected);
//    });
//    
//}
////更新值
//function updateSelected(key,value,selected){
//    selected = selected || {};
//    selected[key] = value;
//}
//
//function sendDataToServer(url,data,opt){
//    url = url || '';
//    window.location.href= url+"&" + data;
//}
   
function loginout(){

    $.cookie("account","", -1);
    $.cookie("fromUrl","", -1);
    window.location.href = "/user/login/loginOut";
}

var Action = {
    
    doLike:function(id,modelId,obj){

        $.post("/user/action/doLike",{"id":id,"modelId":modelId},function(data){
            try {

                var json = $.evalJSON(data);

                if(json.status == 0) {
                    var html = '<span class="coll-msg"></span>';
                    
                    $(obj).append(html);
                    $(obj).addClass("curr").find("span").html("喜欢成功").css("display", "block").animate({ top: '-50px' }, 1000, function () {
                        $(this).css({ display: 'none', top: '-15px',color: '#ff8b3e' });
                    });
                    
                }else{
                    //style="left: 50%; visibility: visible;display: none"
                   $("#baseLog").css({"left":"50%","visibility":"visible"});
                   //obj.addClass("curr");
                   
                }
            }catch(e){C.alert.alert({'content':e.message+data});}
        });
    },
}