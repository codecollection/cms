function topDoLogin() {
    if (arguments.length) {
        sideURL = arguments[0];
        var e, o = $("#UserName").val(), n = $("#Password").val();
        if (o && "乐号/用户名/邮箱/手机号" != o || (e = "请输入用户名!", $("#UserName").addClass("v-error"), $("#Password").removeClass("v-error")), n && "请输入密码" != n || (e = "请输入密码!", $("#Password").addClass("v-error"), $("#UserName").removeClass("v-error")), o && "乐号/用户名/邮箱/手机号" != o || n && "请输入密码" != n || (e = "请输入用户名和密码!", $("#Password").addClass("v-error"), $("#UserName").addClass("v-error")), e)
            return void $("#topLoginMsg1").html(e);
        $("#topLoginMsg1").html(""), $("#Password").removeClass("v-error"), $("#UserName").removeClass("v-error");
        var s = "";
        return DJPASS().aysnLogin(o, n, 0, location.href, loginFailCacllback1, "side", sideURL), !1
    }
    var e, o = $("#topLoginBoxUserName").val(), n = $("#topLoginBoxPassword").val();
    if (o && "乐号/用户名/邮箱/手机号" != o || (e = "请输入用户名!", $("#topLoginBoxUserName").focus()), n && "请输入密码" != n || (e = "请输入密码!", $("#topLoginBoxPassword").focus()), o && "乐号/用户名/邮箱/手机号" != o || n && "请输入密码" != n || (e = "请输入用户名和密码!", $("#topLoginBoxUserName").focus(), $("#topLoginBoxPassword").addClass("inputTextOut")), e)
        return $("#topLoginMsg").html(e), void shakeDiv();
    var s = $("#topAutoLogin").attr("checked");
    DJPASS().aysnLogin(o, n, s ? 1 : 0, window.location.href, loginFailCacllback)
}
function loginFailCacllback(e) {
    e && ($("#topLoginMsg").html(e), shakeDiv())
}
function loginFailCacllback1(e) {
    e ? ($("#topLoginMsg1").html(e), "您的密码有误，请重新输入" == e && $("#Password").addClass("v-error"), "该帐号不存在" == e && $("#UserName").addClass("v-error")) : ($("#UserName").removeClass("v-error"), $("#Password").removeClass("v-error")), shakeDiv()
}
function shakeDiv() {
    shakeModel({num: 0, el: document.getElementById("topDMainBox")}, function(e, o) {
        e.style.left = o + "px"
    })
}
var shakeModel = function(e, o) {
    var n, s = -191, a = 2, r = s, i = i || -173;
    n = setInterval(function() {
        e.num < 4 ? (s += a, o.call(null, e.el, s), s >= i ? a = -2 : s === r && (a = 2, e.num += 1)) : clearInterval(n)
    }, 1)
}, SetLogin = {ifLogin: function(e) {
        return DJPASS().isAutoLogin(e)
    }, init: function() {
        var e = SetLogin;
        e.ifLogin(e.setLoginInfo)
    }, setLoginInfo: function() {
        var e, o = SetLogin, n = String(getCookie("avatar")), s = '""' == n ? "http://img.d.cn/2013/web_index/wwwdcn/images/default.jpg" : n;
        if (o.memberInfo = getCookie("DJ_MEMBER_INFO"), e = decodeURI(decodeURI(o.memberInfo))) {
            var a = e.substring(0, e.indexOf("(")), r = e.substring(e.indexOf("(") + 1, e.indexOf(")")), i = 0, t = '<div class="menuShow" id="logined_menuShow_top"><a href="javascript:void(0)" class="login">' + a + '</a><span class="arrDrop"></span>';
            t += '</div><div class="menuHide r10"><div class="userPanel"><img id="avatar_url_top_id" src=' + s + ' class="userFace"/>', t += '<div class="userInfo"><p>' + a + "</p><p>乐号：" + r + '</p><p><a href="http://my.d.cn/message/index.html" target="_blank">有<em id="newMessageCnt_em_id">' + i + "</em>未读消息</a></p>", t += '<p><a href="http://my.d.cn/" target="_blank" class="rb">My当乐</a><a href="javascript:void(0);" onclick="SetLogin.speLogout();">退出</a></p></div></div></div>', $("#logined_li").html(t), o.commentContro(), DJPASS().getMemberInfo(o.setUserInfo)
        }
    }, setUserInfo: function(e) {
        var o = e;
        return null == o ? !1 : void(o.msgCnt && 0 != o.msgCnt && $("#newMessageCnt_em_id").html(o.msgCnt))
    }, speLogout: function() {
        delCookie("avatar"), DJPASS().logout(window.location.href)
    }, commentContro: function() {
        var e = $("#comHeadHasLogin"), o = $("#comHeadNoLogin");
        return e.length > 0 ? (e.show(), void o.hide()) : !1
    }};
!function(e) {
    SetLogin.init(), e(".siteNavMenu li").hover(function() {
        e(this).addClass("hover"), e(this).children(".menuHide").show()
    }, function() {
        e(this).removeClass("hover"), e(this).children(".menuHide").hide()
    })
}(jQuery);