<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="login_bg">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户登录-NCMS-后台管理中心</title>
<meta content="" name="keywords">
<meta content="" name="description">
<!--插件JS和样式-->
<script src="/static/libs/jquery-1.7.1.min.js"></script>
<script src="/static/libs/common.js"></script>
<script src="/static/libs/zy.select/jquery.select.js"></script>
<script src="/static/libs/zy.tree/jquery.tree.js"></script>
<script src="/static/libs/datepicker.js"></script>
<script src="/static/sty_default/js/public.js"></script>
<link rel="stylesheet" type="text/css" href="/style/back/zy.select/select.css"/>
<link rel="stylesheet" type="text/css" href="/style/back/zy.tree/tree.css"/>
<link href="/static/logo/logo_ico.ico" type="image/x-icon" rel="shortcut icon"/>
<!--[if lte IE 6]>
<script language="javascript" type="text/javascript" src="/static/libs/png.js" ></script>
<script type="text/javascript">
    DD_belatedPNG.fix('div, ul, li, input , h2, b,span,a,a:hover');
</script>
<![endif]--><!--本页JS和样式-->
<script src="/style/back/js/login.js"></script>
<link rel="stylesheet" type="text/css" href="/style/back/css/admin.css">
</head>
<body class="login_bg">
    <div class="login_wrap">
        <div class="login_box">
            <div class="login_logo"><img src="/style/back/image/logo.png" /></div>
            <div class="login_form" id="login_form">
                <table class="lg_table">
                    <tr>
                        <td><input id="aname" type="text" class="user_name" value=""/></td>
                    </tr>
                    <tr>
                        <td><input id="apass"  type="password" class="user_pwd" onkeydown="if(event.keyCode==13) login('login_form','login');" value=""/></td>
                    </tr>
                </table>
                <p class="line-t-6"></p>
                <a href="javascript:void(0);" class="login_btn" onclick="login('login_form','login')">登&nbsp;&nbsp;录</a>
                <p class="line-t-6"></p>
            </div>
        </div>
        <p class="ft_crt">Copyright(c) &nbsp;&nbsp;2013-2015 &nbsp;&nbsp;小肉粽</p>
    </div>
</body>
</html>