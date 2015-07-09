$(function(){
    $("#pcode").bind("click", function () {
        
        var timenow = new Date().getTime();
        
        var url = "/user/captcha?type=1&t="+timenow;
        $("#pcode").attr("src",url);
        //$("#pcode").src = "/user/captcha?type=1&t="+timenow;
    });
    $("#ecode").bind("click", function () {
        
        var timenow = new Date().getTime();
         var url = "/user/captcha?type=2&t="+timenow;
        $("#ecode").attr("src",url);
        //$("#ecode").src = "/user/captcha?type=2&t="+timenow;
    });
    
});

function doBind(){
    var postdata = C.form.get_form('#bind_form');
    
    $.post("/user/safe/doBind",postdata,function(data){
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
