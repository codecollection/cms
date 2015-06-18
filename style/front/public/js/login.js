$(function(){
    
    $(".ID").val("用户名/手机号/邮箱");
	$(".PWD").val("密码");
	$(".web-input").blur();
     
	$(".web-input").bind("focus",function(){
		if($(this).val()=="用户名/手机号/邮箱"){
			$(this).val("");
			$(this).css("color","#333");
		}else if($(this).val()=="密码"){
			$(this).hide();
			$(".PWD-1").show().css("color","#333");
			$(".PWD-1").focus();
		}
	});
    $(".pwd-rembmber").html("√");
    $(".pwd-rembmber").bind("click",function(){
        if($(this).html()==""){
                   $(this).html("√");
                   $("#isRememberPsw").val(1);
                }
        else{
                $(this).html("");
            $("#isRememberPsw").val(0);
        }
    });
});

//登陆
$("#loginBtn").click(function(){
    $("#tips").html("");
    var username = $.trim($("#username").val());
    if(username=='' || username=='用户名/手机号/邮箱') {
        $("#username").focus();
        $("#tips").html("请输入帐号");
        return;
    }
    var password = $.trim($("#password").val());
    if(password=='' || password=='密码') {
        $(".PWD").focus();
        $("#tips").html("请输入密码");
        return;
    }
    var isremember = $("#isRememberPsw").val();
    $(this).html("登&nbsp;录&nbsp中......");
    //var postdata = C.form.get_form('#login_form');
    var from = $("#from").val();
    var postdata = {"account":username,"password":password,"isremember":isremember,"from":from};
    $.post("/user/login/doLogin",postdata,function(data){
        try {
            
            var json = $.evalJSON(data);
            
            if(json.status == 0) {
               window.location.href='/';
            }else{
                if(json.status == 10) {$("#user_pass").val('');}
                C.alert.alert({'content':json.msg});
            }
        }catch(e){C.alert.alert({'content':e.message+data});}
    });
});
