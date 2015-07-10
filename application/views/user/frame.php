<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CMS</title>
<meta content="" name="keywords" />
<meta content="" name="description"/>
<!--插件JS和样式-->
<script src="/style/libs/jquery-1.7.1.min.js"></script>
<script src="/style/libs/common.js"></script>
<script src="/style/libs/zy.select/jquery.select.js"></script>
<script src="/style/libs/zy.tree/jquery.tree.js"></script>
<script src="/style/libs/datepicker.js"></script>
<script src="/style/back/js/public.js"></script>
<script type="text/javascript" src="/style/libs/ckeditor/ckeditor.js?t=<?php echo(time());?>"></script>
<link rel="stylesheet" type="text/css" href="/style/libs/zy.select/select.css"/>
<link rel="stylesheet" type="text/css" href="/style/libs/zy.tree/tree.css"/>
<link rel="shortcut icon" href="/style/back/image/logo_ico.ico" type="image/x-icon" />
<!--[if lte IE 6]>
<script language="javascript" type="text/javascript" src="/style/libs/png.js" ></script>
<script type="text/javascript">
    DD_belatedPNG.fix('div, ul, li, input , h2, b,span,a,a:hover');
</script>
<![endif]--><!--本页JS和样式-->
<?php echo $js;?>
<link rel="stylesheet" type="text/css" href="/style/user/css/admin.css">
<?php echo $css;?>
</head>
<body>
<!-- 加载头部 -->
<div class="header_wrap"><!-- 头部 -->
    <div class="header">
        <div class="hd_logo l"><a href="index.php"><img src="/style/back/image/logo.png" /></a></div>
        <ul class="user_hd r">
            <li><a href="/" target="_blank">我的公众号</a></li>
            <li><a href="cache.clear.php">我的资料</a></li>
            <li><span>欢迎你:<?php //echo $admin["group"];?>&nbsp;<a href="javascript:void(0);" title="刷新帐号权限" onclick="restart();"><?php  echo $u["name"];?></a></span></li>
            <li><a href="/user/login/loginOut">退出</a></li>
        </ul>
        <ul class="hd_tabs" id="hd_tabs">
            <?php foreach($navItem as $k => $v){?>
            <li><a href="<?php echo $v['url'];?>" <?php if ($v['level'] == $thisc->topLevel) echo 'class="current"';?>><?php echo $v['title'];?></a></li>
            <?php }?>
        </ul>
    </div>
</div>
<!-- 主体内容 -->
<div class="content">
    <ul class="manage_btn">
        <?php foreach($nav as $k => $v){?>
        <li><a href="<?php echo $v["url"];?>" <?php if($this->level == $v['level']){echo('class=current');}?>><?php echo $v["title"];?></a></li>
        <?php }?>   
    </ul>
    <p class="line-t-6"></p>
    <?php echo $mainContent;?>
    <div id="alert"></div>
    <p class="line-t-20"></p>
    <!-- 加载底部 -->
    <p class="footer_cpy">
    Copyright(c) &nbsp;&nbsp;2012-2015 &nbsp;&nbsp;小肉粽 &nbsp;&nbsp;<?php echo $microtime;?>秒
    </p>
    <p class="line-t-20"></p>
</div>

<div class="to-top" style="display:none;">
    <a class="to-top-a" title="返回顶部"></a>
</div>
</body>
</html>