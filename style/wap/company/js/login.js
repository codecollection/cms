
/**
 * 用户登录
 */
function login() {
    var postdata = C.form.get_form('#login_form');
    postdata['remember_uname']=$('input[name=remember_uname]').attr('checked');
    $.post("login.php?m=login",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            if(json.code == 0) {
               window.location.href='index.php';
            }else{
                if(json.code == 10) {$("#user_pass").val('');}
                C.alert.alert({'content':json.msg});
            }
        }catch(e){C.alert.alert({'content':e.message+data});}
    });
}
