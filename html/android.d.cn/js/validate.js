$(function () {
    $(".jcode-a").bind("click", function () {
        //showImg();
    });
    //showImg();
});
//ajax验证用户名
function checkUsername(username, callbackFun) {
    
    $.ajax({
        async: true,
        url: "util/checkUsername.html",
        type: "POST",
        data: {username: username, display: 'json'},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

function checkIdentify(account, callbackFun) {
    $.ajax({
        async: true,
        url: "util/checkIdentify.html",
        type: "POST",
        data: {account: account, display: 'json'},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

function checkPwd(pwd, callbackFun) {
    $.ajax({
        async: true,
        url: "util/checkPwd.html",
        type: "POST",
        data: {pwd: pwd, display: 'json'},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

//ajax验证昵称
function checkNickname(nickname, callbackFun) {
    $.ajax({
        async: true,
        url: "util/checkNickname.html",
        type: "POST",
        data: {nickname: nickname, display: 'json'},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

//ajax验证邮箱
function checkEmail(email, callbackFun) {
    $.ajax({
        async: true,
        url: "util/checkEmail.html",
        type: "POST",
        data: {email: email, display: 'json'},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

//验证手机号
function checkPhone(phone, callbackFun) {
    $.ajax({
        async: true,
        url: "util/checkPhoneNum.html",
        type: "POST",
        data: {phoneNum: phone, display: 'json'},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

//验证乐号
function checkMid(mid, callbackFun) {
    $.ajax({
        async: true,
        url: "util/checkMid.html",
        type: "POST",
        data: {mid: mid, display: 'json'},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

/**
 * 发送验证码到手机上
 * @param phone
 * @param callbackFun
 */
function sendVcToPhone(phone, code, callbackFun) {
    $.ajax({
        async: true,
        url: "util/addVcodeTOPhoneCookie.html",
        type: "POST",
        data: {phoneNum: phone, display: 'json'},
        timeout: 15000,
        success: function (json) {
            doSendVcToPhone(phone, code, callbackFun);
        },
        error: function (xhr) {
            console.log("访问出错（请检查您的网络环境）。");
        }
    });
}

function doSendVcToPhone(phone, code, callbackFun) {
    $.ajax({
        async: true,
        url: "util/sendVcToPhone.html",
        type: "POST",
        data: {phoneNum: phone, display: 'json', 'verifycode': code, 'vk': numc,'businessCode':$('#businessCode').val()},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            console.log("访问出错（请检查您的网络环境）。");
        }
    });
}

/**
 * 检查密保问题答案
 * @param mid
 * @param answer
 * @param callbackFun
 */
function checkPwdAnswer(mid, answer, index, callbackFun) {
    $.ajax({
        async: true,
        url: "util/checkPwdAnswer.html",
        type: "POST",
        data: {mid: mid, answer: answer, display: 'json', index: index},
        timeout: 15000,
        success: function (json) {
            callbackFun(json, index);
        },
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

/**
 * 验证密保手机
 * @param mid
 * @param phone
 * @param callbackFun
 */
function checkProtectPhone(mid, phone, type, callbackFun) {
    $.ajax({
        async: true,
        url: "util/checkProtectPhone.html",
        type: "POST",
        data: {mid: mid, phoneNum: phone, type: type, display: 'json'},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

/**
 * 检查手机验证吗
 * @param phoneNum
 * @param vc
 * @param callbackFun
 */
function checkPhoneVcode(phoneNum, vc, callbackFun) {
    $.ajax({
        async: true,
        url: "util/checkPhoneVcode.html",
        type: "POST",
        data: {phoneNum: phoneNum, vc: vc, display: 'json'},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

/**
 * 检查邮箱是否匹配
 * @param mid
 * @param email
 * @param callbackFun
 */
function checkMidEmail(mid, email, callbackFun) {
    $.ajax({
        async: true,
        url: "util/checkMidEmail.html",
        type: "POST",
        data: {mid: mid, email: email, display: 'json'},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

function sendFindPwdEmail(email, mid, account, token, callbackFun) {
    $.ajax({
        async: true,
        url: "util/sendFindPwdEmail.html",
        type: "POST",
        data: {email: email, mid: mid, account: account, token: token, display: 'json'},
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

function setCookieAndRedirect(json) {
    var djtk = json.djtk;
    var ambi = json.AMBI;
    var _aes = json._AES;
    var info = json.info;
    var age = json.age;
    var toUrl = json.toUrl;
    var data = {'djtk': djtk, 'AMBI': ambi, '_AES':_aes, 'info': info, 'age': age, 'type': 'add'};
    setCookie(data, toUrl);
}

function setCookie(data, toUrl) {
    $.ajax({
        async: true,
        url: "http://d.cn/connect/dj/setcookieforlogin",
        type: "GET",
        dataType: 'jsonp',
        jsonp: 'jsoncallback',
        data: data,
        timeout: 15000,
        success: function (json) {
            window.location.href = toUrl;
        },
        error: function (xhr) {
            window.location.href = toUrl;
        }
    });
}

/**
 * 通用走jsonp的ajax
 * @param ajaxUrl
 * @param qsData
 * @param registerResult
 */
function ajaxJsonp(ajaxUrl, qsData, callbackFun) {
    $.ajax({
        async: true,
        url: ajaxUrl,
        type: "POST",
        dataType: 'jsonp',
        jsonp: 'jsonCallback',
        data: qsData,
        timeout: 15000,
        success: callbackFun,
        error: function (xhr) {
            alert("访问出错（请检查您的网络环境）。");
        }
    });
}

function showImg() {
    var timenow = new Date().getTime();
    $(".loading").show();
    var url = "http://oauth.d.cn/auth/verifyCode.html";

    $.ajax({
        type : "get",
        async : false,
        url : url,
        data : {time : timenow},
        cache : false,
        dataType : "jsonp",
        success : function(data){
	    	$("#imgCode").attr("src",data.url);
	    	$("#businessCode").val(data.bussinessId);
	    	showImgCode();
        },
        error:function(e){
            console.info(e);
        }
    });
}

function showImgCode() {
    $(".loading").hide();
    $("#imgCode").show();
}

var numc;
function RndNum(n) {
    var rnd = "";
    for (var i = 0; i < n; i++)
        rnd += Math.floor(Math.random() * 10);
    return rnd;
}

