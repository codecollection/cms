/**
 * Created by Administrator on 14-11-28.
 */
function DJPASS(){
    var _LOAD_SCRIPT = function (a) {
        if (!a) {
            return;
        }
        var b = document.createElement("script");
        b.type = "text/javascript";
        b.src = a;
        b.charset = "utf-8";
        if(c && c != 'undefined'){
            for(attr in c){
                b.setAttribute(attr,c[attr]);
            }
        }
        setTimeout(function () {
            document.getElementsByTagName("head")[0].appendChild(b)
        }, 0);
    };
    var _getCookie = function (name) {
        var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
        if (arr != null) {
            return decodeURI(unescape(arr[2], 'utf-8'));
        }
        return null;
    };
    var _redirectURL = function(url) {
        url && (window.location.href = url.split("#")[0]);
    };
    function isLogin(){
    	var djtk = _getCookie("djtk");
        var info = _getCookie("DJ_MEMBER_INFO");
        return !!(djtk && info);	
    }
    function isAutoLogin(callback){
        if (isLogin()){
        	if(typeof callback == "function"){
        		callback();
        	}
        } else {
            var a = _getCookie("AMBI");
            var s = _getCookie("_AES");
            if(!!(a && s)) {
                $.ajax({
                    url: 'http://d.cn/connect/dj/checkLogin',
                    data: {
                        "a": a,
                        "s": s
                    },
                    dataType: "jsonp",
                    success: function (data) {
                        if (data.result == "ok") {
                            callback();
                        }
                    },
                    error: function () {
                        console.log("请检查网络！");
                    }
                });
            }
        }
    }
    function aysnLogin(username, password, isRemember, to, loginFailCallback) {
        var url = "http://oauth.d.cn/auth/login.html";
        if (!to || to.length == 0) {
            to = window.location.href;
        }
        var data = {
            'username': encodeURI(username),
            'password': password,
            'isRememberPsw': isRemember,
            'to': encodeURI(to),
            'display': 'json'
        };
        var error = function () {
            loginFailCallback("请求出错(请检查相关网络状况.)");
        };
        _ajaxForLogin(url, data, _ok(username, to, loginFailCallback), error);
    }
    function _ok(username, to, loginFailCallback) {
        return function (json) {
            var msg = json.msg;
            if (msg.length != 0) {
                loginFailCallback(msg);
            } else {
                if (json.mids && json.infos && json.sigs && json.num && json.age) {
                    _redirectURL("http://oauth.d.cn/auth/goLogin.html?account=" + username + "&to=" + to);
                    return;
                }
                _setCookieAndRedirectForLogin(json);
            }
        };
    }
    function _setCookieAndRedirectForLogin(json) {
        var djtk = json.djtk;
        var ambi = json.AMBI;
        var _aes = json._AES;
        var info = json.info;
        var age = json.age;
        var toUrl = json.toUrl;
        var data = {'djtk': djtk, 'AMBI': ambi, '_AES':_aes, 'info': info, 'age': age, 'type': 'add'};
        _setAsynLoginCookie({data:data,toUrl:toUrl});
    }
    function _setAsynLoginCookie(options) {
        $.ajax({
            async: true,
            url: "http://d.cn/connect/dj/setcookieforlogin",
            type: "GET",
            dataType: 'jsonp',
            jsonp: 'jsoncallback',
            data: options.data,
            timeout: 15000,
            success: function (json) {
                if(typeof options.callback == "function"){
                    options.callback();
                }
                options.toUrl && _redirectURL(options.toUrl);
            },
            error: function (xhr) {
                toUrl && _redirectURL(toUrl); 
            }
        });
    }
    function _ajaxForLogin(url, data, okCallback, errorCallback) {
        $.ajax({
            async: true,
            url: url,
            type: "GET",
            dataType: 'jsonp',
            jsonp: 'jsonCallback',
            data: data,
            timeout: 15000,
            success: function(json){
                okCallback(json);
            },
            error: function (xhr) {
                errorCallback(xhr);
            }
        });
    }
    function logout(to) {
        if (!to || to.length == 0) {
            to = window.location.href;
        }
        $.ajax({
            async: true,
            url: "http://oauth.d.cn/auth/logout.html",
            type: "GET",
            dataType: 'jsonp',
            jsonp: 'jsonCallback',
            data: {
                'to': encodeURI(to),
                'display': 'json'
            },
            timeout: 15000,
            success: function (json) {
                _qqAndWeiboLogout();
                var data = {'type': 'remove'};
                _setAsynLoginCookie({data:data, toUrl:to});
            },
            error: function (xhr) {
            }
        });
    }
    function _qqAndWeiboLogout() {
        try {
            if (typeof QC != "undefined") {
                QC.Login.signOut();
            }
            if (typeof WB2 != "undefined") {
                if (WB2.checkLogin()) {
                    WB2.logout(function () {
                    });
                }
            }
        } catch (e) {
        }
    }
    function qqLogin(qqLoginBtn, btnSize) {
        if (btnSize == '' || btnSize == undefined || btnSize == null) {
            btnSize = 'B_S';
        }
        if (!QC.Login.check()) {
            QC.Login({
                    btnId: qqLoginBtn,
                    scope: "all",
                    size: btnSize
                }, function (dt, opts) {// 登录成功
                    if (QC.Login.check()) {
                        QC.Login.getMe(function (openId, accesToken, backData) {
                            var url = "http://oauth.d.cn/auth/tecent/trylogin.html";
                            var data = {uid: openId, accessToken: accesToken, display: 'json'};
                            _ajaxForThirdPart(url, data, _thirdpartLoginSuccess);
                        });
                    }
                }
            );
        }
    }
    function weiboLogin() {
        WB2.login(function () {
            WB2.anyWhere(function (W) {
                W.parseCMD("/account/get_uid.json", function (sResult, bStatus) {
                    if (bStatus == true) {
                        var accessToken = $.cookie('weibojs_1936015137').split('&')[0].split('=')[1];
                        var url = "http://oauth.d.cn/auth/weibo/trylogin.html";
                        var data = {uid: sResult.uid, accessToken: accessToken, display: 'json'};
                        _ajaxForThirdPart(url, data, _thirdpartLoginSuccess);
                    }
                }, {}, {method: 'get'});
            });
        });
    }
    function _thirdpartLoginSuccess(json) {
        var msg = json.msg;
        if (msg.length != 0) {
            alert(msg);
            return;
        }
        if (json.needBind == '1') {
            _redirectURL(json.toUrl);
        }
        _setCookieAndRedirectForLogin(json);
    }

    function _ajaxForThirdPart(url, data, okCallback) {
        $.ajax({
            async: true,
            url: url,
            type: "GET",
            dataType: 'jsonp',
            jsonp: 'jsonCallback',
            data: data,
            timeout: 15000,
            success: okCallback,
            error: function (xhr) {
            }
        });
    }
    function getMemberInfo(callback){
        var user = null;
        var djtk = _getCookie("djtk");
        if(null == djtk || "" == djtk){
            return user;
        }
        $.ajax({
            url: 'http://oauth.d.cn/auth/api/getUserBydjtk.html',
            data: {
                "djtk": djtk
            },
            dataType: "jsonp",
            success: function (data) {
                if (data.result == "ok") {
                    user = data;
                } else {
                    console.log(data.msg);
                }
                if (typeof callback == "function") { 
                        callback(user);
                }     
            },
            error: function () {
                console.log("请检查网络！");
            }
        });
    }
    return {
        isLogin : isLogin,
        isAutoLogin : isAutoLogin,
        aysnLogin : aysnLogin,
        weiboLogin : weiboLogin,
        qqLogin : qqLogin,
        logout : logout,
        getMemberInfo : getMemberInfo
    }
}