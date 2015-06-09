$(function(){
	judge1=true;
	
    $(".ID").val("乐号/用户名/手机号/邮箱");
	$(".PWD").val("密码");
	$(".web-input").blur();
     
	$(".web-input").bind("focus",function(){
		if($(this).val()=="乐号/用户名/手机号/邮箱"){
			$(this).val("");
			$(this).css("color","#333");
		}else if($(this).val()=="密码"){
			$(this).hide();
			$(".PWD-1").show().css("color","#333");
			$(".PWD-1").focus();
		}
	});
	
	//自动填充乐号
	var showMid = $("input[name=account]").val();
	if(showMid != ''){
		$("#username").val(showMid);
		$("#username").css("color","#333");
		$(".PWD").focus();
	}
	
    $(".ID").bind("blur",function(){
		if($(this).val().replace(/[ ]/g,"")==""){
			$(this).val("乐号/用户名/手机号/邮箱").css("color","#dedede");
		}
	});
    
	 $(".PWD-1").bind("blur",function(){
		if($(this).val()==""){
			$(this).hide();
			$(".PWD").show();
			}
	});
	  
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
	
	$(".pwd-rembmber-text").bind("click", function(){
		$(".pwd-rembmber").click();
	});
	
	$(".cover,.close").bind("click",function(){
		$(".update").css("display","none");
		$(".cover").css("display","none");
	});
	
	$(".choose").bind("click",function(){
			$(this).css("background","url(http://img.d.cn/images/auth/web/images/update/chosen.jpg) center top no-repeat");
			$(this).parent().siblings().find(".choose").css("background","url(http://img.d.cn/images/auth/web/images/update/choose.jpg) center top no-repeat");
	});
	
	$("#failClose").bind("click", function(){
		$(".update").css("display","none");
		$(".cover").css("display","none");
	});

    $(".pwd-rembmber").click();
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
		
		$("#formLogin").click();
		if(judge1){
			judge1=false;
			$(this).html("登&nbsp;录&nbsp中......");
			var isRememberPsw = $("#isRememberPsw").val();
			var toUrl = $("#toUrl").val();
			var qsData = {'username':encodeURI(username),'password':password, 'isRememberPsw':isRememberPsw, 'to':toUrl,'view':'ajax', 'display':'json'};
			var ajaxUrl = "/user/login/doLogin";
			ajaxJson(ajaxUrl, qsData, loginResult);
		}
	});
	
	//bind enter
	$(document).keydown(function(e){
		if(e.keyCode == 13){
			$("#loginBtn").click();
		}
	});
		
	 //选择一个登陆
    $("#authBtn").click(function(){
    	var info = $("#info").val();
    	if(info == '0'){
    		alert("请你选择一个帐号登陆!");
    	    return;
    	}
    	var info = $("#info").val();
    	var to = $("#jsonToUrl").val();
    	var age = $("#age").val();
        var qsData = {'info':info, 'to':to, 'age':age, 'display':'json'};
    	ajaxJsonp("update.html", qsData, updateResult);
    });
    
    $("#otherPwdLogin").click(function(){
    	$(".update").css("display","none");
		$(".cover").css("display","none");
		$("#password").val("");
		$(".PWD").focus();
    });
	
});

function updateResult(json){
	var error = json.msg;
	if(error.length != 0){
		alert(error);
	}else{
		setCookieAndRedirect(json);
	}
}

function chooseUser(info, id){
	$("#"+id).css("background","url(http://img.d.cn/images/auth/web/images/update/chosen.jpg) center top no-repeat");
	$("#"+id).parent().siblings().find(".choose").css("background","url(http://img.d.cn/images/auth/web/images/update/choose.jpg) center top no-repeat");
	$("#info").val(info);
}

//ajax的login的回调函数
function loginResult(json){  
    var msg=json.msg || '';
    judge1=true;
    $("#loginBtn").html("登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录");
    if(msg.length !=0 ) { //错误提示信息
        if(msg=='ajax'){
            var url =json.url;
            window.location.href=url;
            return;
        }

        if(typeof json.type != 'undefined' && json.type == 17){
           $("#loginError").html(msg);
           $("#loginFailMsgInfo").show();
        }else{
            $("#tips").html(msg);
        }
        return;
    }
    if(!json.AMBI) { // 多个乐号, 用,分割的
        if(json.mids && json.infos && json.sigs && json.num && json.toUrl && json.age) {
            //js生成系统身份验证页面内容
            update(json);
            popout();
        } else {
            alert("访问出错，请稍后再试。");
        }
        return;
    }
    setCookieAndRedirect(json);
}

function popout(){
	$(".cover").show().css({"height":document.body.clientHeight,"width":document.body.clientWidth});
	$(".update").css({"width":"488px","height":"406px"}).show();
	$(".information").jScrollPane({
			showArrows:true,horizontalGutter:10
			});
	$(".include").show();
}



//生成身份验证内容
function update(json){
	var mids = json.mids;
    var infos = json.infos;
    var sigs = json.sigs;
    var num = json.num;
    var toUrl = json.toUrl;
    var age = json.age;
    var otherCnt = json.otherCnt;
	var midArray = mids.split(",");
    var infoArray = infos.split(",");
    var sigArray = sigs.split(",");
    $("#showNum").html(num);
    $("#otherCnt").html(otherCnt);
    var showMids = $("#showMids");
    $("#jsonToUrl").val(toUrl);
    $("#age").val(age);
    showMids.html("");
    for(var i=0; i<midArray.length; i++){
       showMids.append('<li class="information-ul-li of"><a href="javascript:void(0)"  onclick="chooseUser('+"'"+String(midArray[i])+"|"+String(sigArray[i])+"'"+', '+i+')" id="'+i+'" class="choose fr"></a><span class="fl">'
       +infoArray[i]+'</span></li>');
   }
}
	
	