<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="/style/front/css/style.css" type="text/css" rel="stylesheet"/>
    <link href="/style/front/css/jscrollPane.css" type="text/css" rel="stylesheet"/>
    <title>用户注册</title>
</head>
<body>
<div class="cover" id="cover"></div>
<div class="model-outer of">
    
    <a href="" title="" class="web-logo">微信公众号推广平台</a>
    <span class="headerTit">用户注册</span>

    <div class="line fl of"></div>
    <div class="leftside fl">
        <input type="hidden" name="to" value=""/>

        <p class="web-register">欢迎注册</p>
        <input type="text" class="leftside-input a leftside-input-register" id="resName" value="创建帐号 用户名/手机号/邮箱" maxlength="50"/>

        <p class="leftside-detail a1">建议使用手机号码或邮箱注册；用户名为2~10个字符，可使用字母、数字、下划线，需以字母开头</p>

        <p class="right a2"></p>

        <p class="false a3"></p>
        <input type="text" class="leftside-input c leftside-input-register weird-1" value="设置密码"/>
        <input type="password" class="leftside-input c leftside-input-register weird-2" value="" style="display:none;"/>

        <p class="leftside-detail c1">6~16个字符，区分大小写，推荐使用数字+字母组合</p>

        <p class="right c2"></p>

        <p class="false c3"></p>
        <input type="text" class="leftside-input d leftside-input-register strange-1" value="确认密码"/>
        <input type="password" class="leftside-input d leftside-input-register strange-2" value="" style="display:none;"/>

        <p class="leftside-detail d1">请再次填写密码</p>

        <p class="right d2"></p>

        <p class="false d3"></p>

        <div class="m8 jcode-outer">
            <input type="text" class="leftside-input b leftside-input-register jcode fl" id="writeCode" value="输入验证码" maxlength="4"/>
            <input type="hidden" name="vk" id="vk" value=""/>
            <input type="hidden" name="businessCode" id="businessCode" />

            <div class="jcode-pic fr tc pr">
                <img id="imgCode" src="" title="验证码" alt="验证码"/>

                <div class="loading"><img src="http://img.d.cn/images/auth/20150126/web/images/loading.gif" alt="载入中"></div>
                <a href="javascript:void(0)" class="jcode-a">看不清？换一张</a>
            </div>

            <p class="leftside-detail b1 fl k1">请填写图片中字符</p>

            <p class="right b2 fl of k2"></p>

            <p class="false b3 fl of k3"></p>

        </div>
        <div class="jcode-oute c8">
            <input type="text" class="leftside-input mc leftside-input-register jcode" value="输入手机验证码"/>

            <div class="jcode-pic-phone fr tc">
                <a href="javascript:void(0)" title="免费获取验证码" class="jcode-pic-phone-a1 tc">免费获取验证码</a>
            </div>
            <p class="leftside-detail cm1">请填写手机短信收到的验证码</p>

            <p class="right  cm2"></p>

            <p class="false  cm3"></p>
        </div>
        <p class="service"><a href="javascript:void(0)" class="agreement fl">√</a>同意<a href="javascript:void(0)" title="点击阅读《当乐用户协议》" class="blue other-way" onclick="popout()">《当乐用户协议》</a>
        </p>
        <a href="javascript:void(0);" title="立即注册" id="registerBtn" class="leftside-a tc">立即注册</a>

        <div class="ifhas of">
            <p class="ifhas-detail fl tc">如已有<span>当乐网</span>帐号</p>
            <a href="goLogin.html?to=http%3A%2F%2Fwww.d.cn%2F" title="绑定帐号" class="ifhas-bind fl tc">立即登录</a>
        </div>
    </div>

    <div class="line fl of"></div>
</div>



<div id="overlay" class="overlay"></div>
<!--footer begin -->
<div class="new-footer clearfix tc" id="footer">
    <p>Copyright © 2015-2018 Downjoy. All Rights Reserved. 上海不倒翁信息技术有限公司 版权所有</p>
</div>
<script type="text/javascript" src="/style/libs/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="/style/libs/common.js"></script>
<script type="text/javascript" src="/style/front/js/validate.js"></script>
<script type="text/javascript" src="/style/front/js/register.js"></script>

</body>
</html>

