
/**
 * 用户登录
 */
function login() {
    var postdata = C.form.get_form('#login_form');
    
    $.post("/back/login/doLogin",postdata,function(data){
        try {
            
            var json = $.evalJSON(data);
            
            if(json.status == 0) {
               window.location.href='/back/pub';
            }else{
                if(json.status == 10) {$("#user_pass").val('');}
                C.alert.alert({'content':json.msg});
            }
        }catch(e){C.alert.alert({'content':e.message+data});}
    });
}
