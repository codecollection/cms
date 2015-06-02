<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="/style/front/css/style.css" type="text/css" rel="stylesheet"/>
    <link href="/style/front/css/jscrollPane.css" type="text/css" rel="stylesheet"/>
    <title>用户登录</title>
</head>
<body>
<div class="banner"></div>
<div class="cover" id="cover"></div>


<div id="loginFailMsgInfo" class="update" style="display:none">
     <h2>登陆失败<a href="javascript:void(0)" class="close"></a></h2>
     <div class="information" id="loginError" style="width:450px;height:300px;">
               
     </div>
     <a href="javascript:void(0)" id="failClose" title="关闭" class="sure tc">关&nbsp;&nbsp;&nbsp;闭</a>
</div>
<div class="model-outer of">
    
    <a href="http://www.d.cn/" title="手机游戏第一站"><img src="http://img.d.cn/images/auth/20150126/web/images/logo.png" alt="手机游戏第一站" title="手机游戏第一站" class="web-logo fl"></a>

    <div class="user-log fr">
        <form action="javascript:void(0);" onsubmit="return false;" method="post">
            <input type="hidden" name="account" value=""/>

            <p class="tit">
                <span class="tit-span">还没有帐号？
                    <a href="goRegister.html?to=http%3A%2F%2Fwww.d.cn%2F" title="马上注册当乐用户" class="tit-span-a">马上注册</a>
                </span>用户登录
            </p>
            <span id="tips" class="wrong fl"></span>
            <input type="text" id="username" value="乐号/用户名/手机号/邮箱" class="web-input web-input-1 ID" maxlength="50"/>
            <input type="text" value="密码" class="web-input PWD" maxlength="16"/>
            <input type="password" id="password" class="web-input PWD-1" maxlength="16" style="display:none;"/>
            <a href="javascript:void(0)" class="pwd-rembmber fl"></a>
            <span class="pwd-rembmber-text fl">自动登录</span>
            <a href="goFindPwdWay.html?to=http%3A%2F%2Fwww.d.cn%2F" class="forget fr" title="找回密码">忘记密码？</a>
            <input id="isRememberPsw" type="hidden" value="0" name="isRememberPsw"/>
            <input id="toUrl" type="hidden" name="to" value="http%3A%2F%2Fwww.d.cn%2F"/>
            <a href="javascript:void(0)" class="log-in fl tc" title="点击登录" id="loginBtn">登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录</a>
            <input type="submit" style="display:none;" id="formLogin"/>
        </form>
        <p class="coper-log-text fl">使用合作帐号登录：</p>

        <div class="coper-log fl">
            <a href="http://oauth.d.cn/auth/tencent/login.html?act=1&to=http%3A%2F%2Fwww.d.cn%2F" target="_blank" title="使用QQ登录">
                <img src="http://img.d.cn/images/auth/20150126/web/images/qq.png" class="qq" alt="使用QQ登录" title="使用QQ登录"/>
                <span class="qq-span">QQ帐号</span>
            </a>
            <a href="http://oauth.d.cn/auth/weibo/login.html?act=1&to=http%3A%2F%2Fwww.d.cn%2F" target="_blank" title="使用新浪微博登录">
                <img src="http://img.d.cn/images/auth/20150126/web/images/weibo.png" class="qq" alt="使用新浪微博登录" title="使用新浪微博登录"/>
                <span class="qq-span">新浪微博</span>
            </a>
        </div>
    </div>
</div>
<div id="overlay" class="overlay"></div>
<!--footer begin -->
<div class="clearfix tc" id="footer" style="margin-top:125px;">
    <?php $c->loadView("copyright.php"); ?>
</div>

<script type="text/javascript" src="http://img.d.cn/images/auth/20150126/web/js/jquery-1.8.0.min.js"></script>
<!--[if IE 6]>
<script src="http://img.d.cn/images/auth/20150126/web/js/DD_belatedPNG_0.0.8a.js" mce_src="http://img.d.cn/images/auth/20150126/web/js/DD_belatedPNG_0.0.8a.js"></script>
<script type="text/javascript">
    /* EXAMPLE */
    DD_belatedPNG.fix('.web-logo,.coper-log img,.cover');
    /* string argument can be any CSS selector */
    /* .png_bg example is unnecessary */
    /* change it to what suits you! */
</script>
<![endif]-->
<script type="text/livescript" src="http://img.d.cn/images/auth/20150126/web/js/login.js"></script>
<script type="text/livescript" src="http://img.d.cn/images/auth/20150126/web/js/validate.js"></script>
<script type="text/javascript" src="http://img.d.cn/images/auth/20150126/web/js/jscrollPane.js"></script>
<script type="text/javascript" src="http://img.d.cn/images/auth/20150126/web/js/mousewheel.js"></script>
</body>
</html>

