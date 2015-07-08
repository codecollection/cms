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
});
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