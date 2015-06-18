var isPhone = false;
$(function () {
    txt = new RegExp("[ ,\\`,\\~,\\!,\\@,\#,\\$,\\%,\\^,\\+,\\*,\\&,\\\\,\\/,\\?,\\|,\\:,\\.,\\<,\\>,\\{,\\},\\(,\\),\\',\\;,\\-,\\=,\"]");
    onlyTxt = new RegExp("^[ ,\\`,\\~,\\!,\\@,\#,\\$,\\%,\\^,\\+,\\*,\\&,\\\\,\\/,\\?,\\|,\\:,\\.,\\<,\\>,\\{,\\},\\(,\\),\\',\\;,\\-,\\=,\"]$");
    english = /[a-z]+/i;
    onlyEnglish = /^[a-z]+$/i;
    onlyNum = /^[0-9]+$/;
    num = /[0-9]+/;
    phone = /^1\d{10}$/;
    email = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    r = /^\d+$/;
    judge1 = false;
    judge2 = true;
    judge3 = false;
    judge4 = false;
    judge5 = true;
    judge6 = true;
    judge7 = false;
    type = 0;
    isAgreement = 1;
    $(".leftside-input").blur();
    $(".a").val("创建帐号 用户名/手机号/邮箱");
    $(".b").val("输入验证码");
    $(".mc").val("输入手机验证码");
    $(".weird-1").val("设置密码");
    $(".strange-1").val("确认密码");
    $(".c8").hide();
    numc = RndNum(8);
    showImg();

    $(".leftside-input").not(".a").bind("focus", function () {
        if ($(this).val() == "输入验证码") {
            $(this).val("");
            $(this).css("color", "#000");
        }
        if ($(this).val() == "输入手机验证码") {
            $(this).val("");
            $(this).css("color", "#000");
        }
        if ($(this).val() == "设置密码") {
            $(".weird-1").hide();
            $(".weird-2").show();
            $(".weird-2").focus().css("color", "#000");
        }
        if ($(this).val() == "确认密码") {
            $(".strange-1").hide();
            $(".strange-2").show();
            $(".strange-2").focus().css("color", "#000");
        }
    });

    $(".a").bind("focus", function () {
        if ($(this).val() == "创建帐号 用户名/手机号/邮箱") {
            $(this).val("");
            $(this).css("color", "#000");
        }
        else if ($(this).val() != "") {
            $(".a1").show();
            $(".a2").hide();
            $(".a3").hide();
            $(this).css("background-position", "center top");
        }
    });

    $(".a").bind("blur", function () {
        $(".b").attr("maxlength", "4");

        isPhone = false;
        if ($(this).val().replace(/[ ]/g, "") == "") {
            $(this).val("创建帐号 用户名/手机号/邮箱").css("color", "#9A9A9A");
            $(".a1").show();
            $(".a2").hide();
            $(".a3").hide();
            $(this).css("background-position", "center top");
        } else if (num.test($(this).val().substring(0, 1)) && $(this).val().indexOf("@") == -1 && r.test($(this).val())) {
            if (phone.test($(this).val())) {
                //$(".b").attr("disabled","disabled");
                //$(".c8").show();
                type = 4;
                checkUsername($(this).val(), showUsernameInfo);
                isPhone = true;
            } else {
                $(".a1").hide();
                $(".a2").hide();
                $(".c8").hide();
                $(".a3").html("用户名需以字母开头，可使用字母，数字和下划线；或输入正确的手机号").show();
                $(".jcode-pic").show();
                $(".jcode-pic-phone").hide();
                // $(".b").removeAttr("disabled");
                $(this).css("background-position", "center -101px");
                judge1 = false;
            }
        } else if ($(this).val().indexOf("@") != -1) {
            $(".c8").hide();
            // $(".jcode-pic").show();$(".jcode-pic-phone").hide();$(".b").removeAttr("disabled");
            if (email.test($(this).val())) {
                type = 3;
                
                checkUsername($(this).val(), showUsernameInfo);
            } else {
                $(".a1").hide();
                $(".a2").hide();
                $(".a3").html("邮箱格式不正确，请重新输入").show();
                $(this).css("background-position", "center -101px");
                judge1 = false;
            }
        } else {
            $(".c8").hide();
            $(".jcode-pic").show();
            $(".jcode-pic-phone").hide();
            //$(".b").removeAttr("disabled");
            if ($(this).val().length < 2 || $(this).val().length > 10) {
                $(".a1").hide();
                $(".a2").hide();
                if ($(this).val().length > 10) {
                    $(".a3").html("用户名为2~10个字符，需以字母开头，可使用字母、数字、下划线").show();
                } else {
                    $(".a3").html("用户名长度应为2~10个字符").show();
                }
                $(this).css("background-position", "center -101px");
                judge1 = false;
            } else if (!english.test($(this).val().substring(0, 1))) {
                $(".a1").hide();
                $(".a2").hide();
                $(".a3").html("用户名需以字母开头，可使用字母，数字和下划线").show();
                $(this).css("background-position", "center -101px");
                judge1 = false;
            }
            else if (txt.test($(this).val())) {
                $(".a1").hide();
                $(".a2").hide();
                $(".a3").html("用户名需以字母开头，可使用字母，数字和下划线").show();
                $(this).css("background-position", "center -101px");
                judge1 = false;
            }
            else {
                type = 2;
                
                checkUsername($(this).val(), showUsernameInfo);
            }
        }
        if (!isPhone) {

        }
        if (judge1 && judge2 && judge3 && judge4 && judge5) {
            $(".leftside-a").css("background-position", "left top");
        }
        else {
            $(".leftside-a").css("background-position", "left bottom");
        }
    });


    $(".weird-2").bind("blur", function () {
        if ($(this).val() == "") {
            $(this).hide();
            $(".weird-1").show().css("color", "#9A9A9A");
            $(".c1").show();
            $(".c2").hide();
            $(".c3").hide();
            $(this).css("background-position", "center top");
        }

    });

    $(".strange-2").bind("blur", function () {
        if ($(this).val() == "") {
            $(this).hide();
            $(".strange-1").show().css("color", "#9A9A9A");
            $(".d1").show();
            $(".d2").hide();
            $(".d3").hide();
            $(this).css("background-position", "center top");
        }
    });

    $(".b").bind("keyup", function () {
        //如果不是用电话号码注册，检查验证码是否正确
        //checkImgCode($(this).val(), showImgCodeInfo);
        /* if(!phone.test($(".a").val())){


         }else{ // 用手机号注册
         //checkPhoneVcode($(".mc").val(),$(this).val(), showPhoneVcodeInfo);
         }*/
        if (judge1 && judge2 && judge3 && judge4 && judge5) {
            $(".leftside-a").css("background-position", "left top");
        }
        else {
            $(".leftside-a").css("background-position", "left bottom");
        }
    });

    $(".mc").bind("keyup", function () {
        //如果不是用电话号码注册，检查验证码是否正确

        //checkPhoneVcode($("#resName").val(), $(this).val(), showPhoneVcodeInfo);
        if (judge1 && judge2 && judge3 && judge4 && judge5) {
            $(".leftside-a").css("background-position", "left top");
        }
        else {
            $(".leftside-a").css("background-position", "left bottom");
        }
    });

    $(".b").bind("blur", function () {
        if ($(this).val() == "") {
            $(this).val("输入验证码").css("color", "#9A9A9A");
            $(".b1").show();
            $(".b2").html("").hide();
            $(".b3").html("").hide();
            $(".b").css("background-position", "center top");
            return;
        } else if ($(this).val().length == 4) {

            $(".b1").show();
            $(".b2").html("").hide();
            $(".b3").html("").hide();
            $(".b").css("background-position", "center top");
            $("#registerBtn").html("注册");
            judge6 = true;

        }
    });

    $(".mc").bind("blur", function () {
        if ($(this).val() == "") {
            $(this).val("输入手机验证码").css("color", "#9A9A9A");
            $(".b1").show();
            $(".b2").html("").hide();
            $(".b3").html("").hide();
            $(".b").css("background-position", "center top");
            return;
        }
    });

    $(".mc").bind("keydown", function () {

        $(".b1").hide();
        $(".b2").hide();
        if ($(this).val() == "输入手机验证码") {
            $(this).val("");
            $(".b").css("background-position", "center top");
        }
        if (judge1 && judge2 && judge3 && judge4 && judge5) {
            $(".leftside-a").css("background-position", "left top");
        }
        else {
            $(".leftside-a").css("background-position", "left bottom");
        }
    });

    $(".b").bind("keydown", function () {
        $(".b1").hide();
        $(".b2").hide();
        if ($(this).val() == "输入验证码") {
            $(this).val("");
            $(".b").css("background-position", "center top");
        }
        if (judge1 && judge2 && judge3 && judge4 && judge5) {
            $(".leftside-a").css("background-position", "left top");
        }
        else {
            $(".leftside-a").css("background-position", "left bottom");
        }
    });

    $(".a").bind("keyup", function () {
        if ($(this).val() == '') {
            $(".a1").show();
            $(".a2").hide();
            $(".a3").hide();
            $(this).css("background-position", "center top");
            return;
        }
        if (num.test($(this).val().substring(0, 1)) && $(this).val().indexOf("@") == -1 && r.test($(this).val())) {
            if (phone.test($(this).val())) {
                type = 4;
                //checkPhone($(this).val(), showOk);
            }
            else {
                $(".b").val("输入验证码").css("color", "#9A9A9A");
                $(".jcode-pic").show();
                $(".jcode-pic-phone").hide();
                // $(".b1").html("请填写图片中的字符，不区分大小写").show();
                $(".b2").hide();
                $(".b3").hide();
                judge1 = false;//judge2=false;
            }
        }
        else if ($(this).val().indexOf("@") != -1) {
            //$(".jcode-pic").show();$(".jcode-pic-phone").hide();$(".b").removeAttr("disabled");
            if (email.test($(this).val())) {
                type = 3;
                //checkEmail($(this).val(), showOk);
            } else {
                judge1 = false;
            }
        }
        else {
            // $(".jcode-pic").show();$(".jcode-pic-phone").hide();$(".b").removeAttr("disabled");
            if ($(this).val().length < 2 || $(this).val().length > 10) {
                judge1 = false;
            } else if (!english.test($(this).val().substring(0, 1))) {
                judge1 = false;
            } else if (txt.test($(this).val())) {
                judge1 = false;
            } else {
                type = 2;
                //checkUsername($(this).val(), showOk);
            }
        }
        if (judge1 && judge2 && judge3 && judge4 && judge5) {
            $(".leftside-a").css("background-position", "left top");
        }
        else {
            $(".leftside-a").css("background-position", "left bottom");
        }
    });

    $(".weird-2").bind("keydown", function (event) {
        if (event.keyCode == 32) {
            return false;
        }
    });

    $(".weird-2").bind("keyup", function (event) {
        if ($(".strange-2").val().replace(/[ ]/g, "") != "") {
            if ($(".weird-2").val() == $(".strange-2").val()) {
                $(".d1").hide();
                $(".d2").html("&nbsp;").show();
                $(".d3").html("").hide();
                $(".strange-2").css("background-position", "center -49px");
                judge4 = true;
            } else {
                $(".d1").hide();
                $(".d2").hide();
                $(".d3").html("两次填写的密码不一致").show();
                $(".strange-2").css("background-position", "center -101px");
                judge4 = false;
            }
        }
        if ($(this).val().length < 6 || $(this).val().length > 16) {
            $(".c1").hide();
            $(".c2").hide();
            $(".c3").html("密码长度应为6~16个字符").show();
            $(this).css("background-position", "center -101px");
            judge3 = false;
        } else {
            //checkPwd($(this).val(), showPwd);
            
            showPwd($(this).val());
        }
        if (judge1 && judge2 && judge3 && judge4 && judge5) {
            $(".leftside-a").css("background-position", "left top");
        }
        else {
            $(".leftside-a").css("background-position", "left bottom");
        }
    });

    $(".strange-2").bind("keydown", function (event) {
        if (event.keyCode == 32) {
            return false;
        }
    });
    $(".strange-2").bind("keyup", function (event) {
        var tk = $(".weird-2").val();
        if ($(this).val() != tk) {
            $(".d1").hide();
            $(".d2").hide();
            $(".d3").html("两次填写的密码不一致").show();
            $(this).css("background-position", "center -101px");
            judge4 = false;
        }
        else {
            $(".d1").hide();
            $(".d3").hide();
            $(".d2").html("&nbsp;").show();
            $(this).css("background-position", "center -49px");
            judge4 = true;
        }

        if (judge1 && judge2 && judge3 && judge4 && judge5) {
            $(".leftside-a").css("background-position", "left top");
        }
        else {
            $(".leftside-a").css("background-position", "left bottom");
        }
    });

    $(".jcode-pic-phone-a1").bind("click", function () {
        if (judge7) {
            //judge7=false;
            var phoneNum = $(".a").val();
            var code = $("#writeCode").val()
            //sendVcToPhone(phoneNum, code, showSendVcToPhone);

        }
    });

    $(".agreement").bind("click", function () {
        if ($(this).html() == "") {
            $(this).html("√");
            judge5 = true;
            isAgreement = 1;
        } else {
            isAgreement = 0;
            $(this).html("");
            judge5 = false;
        }
        if (judge1 && judge2 && judge3 && judge4 && judge5) {
            $(".leftside-a").css("background-position", "left top");
        }
        else {
            $(".leftside-a").css("background-position", "left bottom");
        }
    });

    $(".cover,.close,.sure").bind("click", function () {
        $(".update").css("display", "none");
        $(".cover").css("display", "none");
    });


    $("#registerBtn").click(function () {
        if (judge1 && judge2 && judge3 && judge4 && judge5 && judge6) {
            var account = $(".a").val();
//            var firstPwd = hex_sha256($(".weird-2").val()).toUpperCase();
//            var secondPwd = hex_sha256($(".strange-2").val()).toUpperCase();
            var firstPwd = $(".weird-2").val();
            var secondPwd = $(".strange-2").val();
            var vcode = $(".b").val();
            var businessCode = $('#businessCode').val();
            var to = $("input[name=to]").val();
            $("#registerBtn").html("注册中. . .");
            judge6 = false;
            qsData = {'isAgreement': isAgreement, 'vk': numc, 'type': type, 'account': account, 'firstPwd': firstPwd, 'secondPwd': secondPwd, 'vcode': vcode, 'businessCode': businessCode, 'to': to, 'view': 'ajax', 'display': 'json'};
            if (type == 3) { // 邮箱走下一步 verifycode
                qsData = {'isAgreement': isAgreement, 'vk': numc, 'type': type, 'account': account, 'firstPwd': firstPwd, 'secondPwd': secondPwd, 'verifycode': vcode, 'businessCode': businessCode, 'to': to, 'view': 'ajax', 'display': 'json'};

                ajaxJsonp("registerValidate.html", qsData, validateRegisterResult);
            } else {
                if (type == 4) {
                    vcode = $(".mc").val();
                }
                qsData = {'isAgreement': isAgreement, 'vk': numc, 'type': type, 'account': account, 'pwd': firstPwd, 'repwd': secondPwd, 'vcode': vcode, 'businessCode': businessCode, 'to': to, 'view': 'ajax', 'display': 'json'};
                ajaxJson("/user/reg/doReg", qsData, registerResult);
            }
        }
    });

    $(document).keydown(function (event) {
        if (event.keyCode == 13) {
            $("#registerBtn").click();
        }
    });

});


function showPhoneVcodeInfo(json) {
    var error = json.msg;
    if (error.length != 0) {
        $(".cm1").hide();
        $(".cm2").hide();
        $(".cm3").html("手机验证码错误").show();
        $(".mc").css("background-position", "center -98px");
        judge2 = false;
    } else {
        $(".cm1").hide();
        $(".cm3").hide();
        $(".cm2").html("&nbsp;").show();
        $(".mc").css("background-position", "center -48px");
        judge2 = true;
    }
    if (judge1 && judge2 && judge3 && judge4 && judge5) {
        $(".leftside-a").css("background-position", "left top");
    }
    else {
        $(".leftside-a").css("background-position", "left bottom");
    }
}

function showOk(json) {
    var error = json.msg;
    if (error.length != 0) {
        judge1 = false;
    } else {
        judge1 = true;
    }
    if (judge1 && judge2 && judge3 && judge4 && judge5) {
        $(".leftside-a").css("background-position", "left top");
    }
    else {
        $(".leftside-a").css("background-position", "left bottom");
    }
}

function validateRegisterResult(json) {

    var error = json.msg;
    if (error.length != 0) {
        if (error == 'ajax') {
            var url = json.url;
            window.location.href = url;
            return;
        }
        if (error == "验证码不正确，请重新输入" || error == "图形验证码输入错误") {
            $(".k1").hide();
            $(".k2").hide();
            $(".k3").html(error).show();
            $(".b").css("background-position", "center -98px");
            //$(".a").css("background-position","center -101px");//judge1=false;
            checkType()
            $("#registerBtn").html("立即注册");
            judge6 = true;

        } else {
            $(".a1").hide();
            $(".a2").hide();
            $(".a3").html(json.msg).show();
            //	 $(".b").attr("disabled","disabled");
            $(".a").css("background-position", "center -101px");
            judge1 = false;
            $("#registerBtn").html("立即注册");
            judge6 = true;
        }

    } else {
        window.location.href = json.toUrl; // 去邮件的下一步
    }
}


function registerResult(res) {
    
    var json = $.evalJSON(res);
    var error = json.status;
    if (error != 0) {
        if (error == 'ajax') {
            var url = json.url;
            window.location.href = url;
            return;
        }
        type = json.status;
        if (type == 101 || type == 102 || type == 103) {
            if (error == 101) {
                $(".k1").hide();
                $(".k2").hide();
                $(".k3").html(json.msg).show();
                $(".b").css("background-position", "center -98px");

            } else {
                $(".a1").hide();
                $(".a2").hide();
                $(".a3").html(json.msg).show();
                // $(".b").attr("disabled","disabled");
                $(".a").css("background-position", "center -101px");
                judge1 = false;

            }

        } else {
            alert(error);
        }
        
        $("#registerBtn").html("立即注册");
        judge6 = true;
    } else {
        setCookieAndRedirect(json);
    }
}

function popout() {
    $(".cover").show().css({"height": document.body.clientHeight, "width": document.body.clientWidth});
    $(".update").css({"width": "488px", "height": "406px"}).show();
    $(".information").jScrollPane({
        showArrows: true, horizontalGutter: 10
    });
}

/**
 * 显示手机号码是否已经被注册
 * @param json
 * @return
 */
function showUsernameInfo(json) {
    
    var res = $.evalJSON(json);
    var error = res.msg;
   
    if (res.status != 0) {
        $(".a1").hide();
        $(".a2").hide();
        $(".a3").html(res.msg).show();
        //  $(".b").attr("disabled","disabled");
        $(".a").css("background-position", "center -101px");
        judge1 = false;

        judge7 = false;
    } else {
        judge7 = true;
        $(".a1").hide();
        $(".a3").hide();
        $(".a2").html(error).show();
        //$(".b").attr("disabled","disabled");
        $(".a").css("background-position", "center -49px");
        //$(".b").val("输入验证码").css("color","#9A9A9A");
        $(".b").attr("maxlength", "6");
        $(".b1").hide();
        $(".b2").hide();
        $(".b3").hide();
        // $(".jcode-pic").hide();
        $(".jcode-pic-phone").show();
        $(".jcode-pic-phone-a1").css("background-position", "left top").html("免费获取验证码");
        judge1 = true;
    }
    if (judge1 && judge2 && judge3 && judge4 && judge5) {
        $(".leftside-a").css("background-position", "left top");
    }
    else {
        $(".leftside-a").css("background-position", "left bottom");
    }
}


/**
 * 显示验证码是否正确
 * @param json
 * @return
 */
function showImgCodeInfo(json) {
    var error = json.msg;
    if (error.length != 0) {
        $(".b1").hide();
        $(".b2").hide();
        $(".b3").html(error).show();
        $(".b").css("background-position", "center -98px");
        // judge2 = false;
    } else {
        $(".b1").hide();
        $(".b3").hide();
        $(".b2").html("&nbsp;").show();
        $(".b").css("background-position", "center -48px");
//    judge2=true;
    }
    if (judge1 && judge2 && judge3 && judge4 && judge5) {
        $(".leftside-a").css("background-position", "left top");
    } else {
        $(".leftside-a").css("background-position", "left bottom");
    }
}


function showSendVcToPhone(json) {
    var error = json.msg;
    if (error.length != 0) {
        if (error == "验证码不正确，请重新输入" || error == "图形验证码输入错误") {
            $(".k1").hide();
            $(".k2").hide();
            $(".k3").html(error).show();
            $(".b").css("background-position", "center -98px");

        } else {
            $(".a1").hide();
            $(".a2").hide();
            $(".a3").html(error).show();
            //  $(".b").attr("disabled","disabled");
            $(".a").css("background-position", "center -101px");
        }
    } else {
        $(".jcode-pic-phone-a1").css("background-position", "right top");
        $(".jcode-pic-phone-a1").html("重新获取(<span id='showTime'>120</span>秒)<input type='hidden' value='120' id='timmer'>");
        // $(".b").removeAttr("disabled");
        $(".b1").html("请输入发送到您手机的验证码").show();
        $(".b2").hide();
        $(".b3").hide();
        countedDown();
    }
}


function countedDown() {
    var s = $("#timmer").val();
    var sec = parseInt(s);
    if (sec <= 0) {
        judge7 = true;
        $(".jcode-pic-phone-a1").css("background-position", "left top");
        $(".jcode-pic-phone-a1").html("重新获取<input type='hidden' value='120' id='timmer'>");
        return;
    } else {
        sec = sec - 1;
        $("#timmer").val(sec);
        $("#showTime").html(sec);
        setTimeout("countedDown()", 1000);
    }
}

function showPwd() {
    
    $(".weird-2").css("background-position", "center -49px");
    $(".leftside-a").css("background-position", "left top");
    $(".c1").hide();
    $(".c2").html("&nbsp;").show();
    $(".c3").hide();
    judge3 = true;
//                
//    
//    var json = $.evalJSON(res);
//    //return function (json) {
//        var error = json.msg;
//        if (false) {
//            $(".c1").hide();
//            $(".c2").hide();
//            $(".c3").html(error).show();
//            //obj.css("background-position", "center -101px");
//            judge3 = false;
//        } else {
//            if (true) {
//                $(".c1").hide();
//                $(".c3").hide();
//                //$(".c2").html("密码强度 :&nbsp;&nbsp;<img src='http://img.d.cn/images/auth/web/images/firstlog/high.jpg' class='rank' />").show();
//                $(".weird-2").css("background-position", "center -49px");
//            } else if (false) {
//                $(".c1").hide();
//                $(".c3").hide();
//                //$(".c2").html("密码强度 :&nbsp;&nbsp;<img src='http://img.d.cn/images/auth/web/images/firstlog/low.jpg' class='rank' />").show();
//                $(".weird-2").css("background-position", "center -49px");
//            } else {
//                $(".c1").hide();
//                $(".c3").hide();
//                //$(".c2").html("密码强度 :&nbsp;&nbsp;<img src='http://img.d.cn/images/auth/web/images/firstlog/middle.jpg' class='rank' />").show();
//                $(".weird-2").css("background-position", "center -49px");
//            }
//            judge3 = true;
//        }
//        if (judge1 && judge2 && judge3 && judge4 && judge5) {
//            $(".leftside-a").css("background-position", "left top");
//        } else {
//            $(".leftside-a").css("background-position", "left bottom");
//        }
    //};
}
