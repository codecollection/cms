<!DOCTYPE html>
<html class="login_bg">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户登录-NCMS-后台管理中心</title>
<meta content="" name="keywords">
<meta content="" name="description">
<!--插件JS和样式-->
<script src="/style/libs/jquery-1.7.1.min.js"></script>
<script src="/style/libs/common.js"></script>
<script type="text/javascript" src="/style/libs/ckeditor/ckeditor.js?t=<?php echo(time());?>"></script>
<!-- 
<script src="/style/libs/zy.select/jquery.select.js"></script>
<script src="/style/libs/zy.tree/jquery.tree.js"></script> -->
<script src="/style/back/js/public.js"></script>
<link href="/static/logo/logo_ico.ico" type="image/x-icon" rel="shortcut icon"/>
<!-- 
<link rel="stylesheet" type="text/css" href="/style/libs/zy.select/select.css"/>
<link rel="stylesheet" type="text/css" href="/style/libs/zy.tree/tree.css"/> -->
<!--[if lte IE 6]>
<script language="javascript" type="text/javascript" src="/style/libs/png.js" ></script>
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
                        <td><input id="aname" name="aname" type="text" class="user_name" value=""/></td>
                    </tr>
                    <tr>
                        <td><input id="apass" name="apass"  type="password" class="user_pwd" onkeydown="if(event.keyCode==13) login('login_form','login');" value=""/></td>
                    </tr>
                </table>
                <p class="line-t-6"></p>
                <a href="javascript:void(0);" class="login_btn" onclick="login()">登&nbsp;&nbsp;录</a>
                <p class="line-t-6"></p>
            </div>
        </div>
        <p class="ft_crt">Copyright(c) &nbsp;&nbsp;2013-2015 &nbsp;&nbsp;小肉粽</p>
    </div>
</body>
</html>