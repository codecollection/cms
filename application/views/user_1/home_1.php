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
<script type="text/javascript" src="/style/libs/ckeditor/ckeditor.js?t=1433839819"></script>
<link rel="stylesheet" type="text/css" href="/style/libs/zy.select/select.css"/>
<link rel="stylesheet" type="text/css" href="/style/libs/zy.tree/tree.css"/>
<link rel="shortcut icon" href="/style/back/image/logo_ico.ico" type="image/x-icon" />
<!--[if lte IE 6]>
<script language="javascript" type="text/javascript" src="/style/libs/png.js" ></script>
<script type="text/javascript">
    DD_belatedPNG.fix('div, ul, li, input , h2, b,span,a,a:hover');
</script>
<![endif]--><!--本页JS和样式-->
<link rel="stylesheet" type="text/css" href="/style/back/css/admin.css">
</head>
<body>
<!-- 加载头部 -->
<div class="header_wrap"><!-- 头部 -->
    <div class="header">
        <div class="hd_logo l"><a href="index.php"><img src="/style/back/image/logo.png" /></a></div>
        <ul class="user_hd r">
            <li><a href="info.list.php?tpl=edit">添加文档</a></li>
            <li><a href="category.php">分类管理</a></li>
			<li><a href="/" target="_blank">前台首页</a></li>
            <li><a href="cache.clear.php">清理缓存</a></li>
            <li><a href="javascript:void(0);" onclick="restart();">重启账号</a></li>
            <li><span>超级管理员组&nbsp;(&nbsp;<a href="javascript:void(0);" title="刷新帐号权限" onclick="restart();">wenghe</a>)</span></li>
            <li><a href="/back/login/loginOut">退出</a></li>
        </ul>
        <ul class="hd_tabs" id="hd_tabs">
                        <li><a href="/back/home" class="current">我的公众号</a></li>
                        <li><a href="/back/adm" >个人资料</a></li>
                        <li><a href="/back/info/home" >账号安全</a></li>
                        <li><a href="/back/model" >我的消息</a></li>
                    </ul>
    </div>
</div>
<!-- 主体内容 -->
<div class="content">
    <ul class="manage_btn">
                <li><a href="/back/set" class="current">个人资料</a></li>
                <li><a href="/admin/cache" >隐私设置</a></li>
    </ul>
    
<p class="line-t-15"></p>
<div>
    <!--统计概览-->
    <div class="totals clearfix">
        <ul>
            <li class="hdli">文档</li>
            <li><a href="info.list.php?info_status=-1">草稿（0）</a></li>
            <li><a href="info.list.php?info_status=3">未通过（0）</a></li>
            <li><a href="info.list.php?info_status=2">审核中（0）</a></li>
            <li><a href="info.list.php?info_status=0">已通过（22）</a></li>
            <li><a href="info.list.php?info_status=1">回收站（0）</a></li>
            
            <li><a href="info.list.php?info_status=-1">草稿（0）</a></li>
            <li><a href="info.list.php?info_status=3">未通过（0）</a></li>
            <li><a href="info.list.php?info_status=2">审核中（0）</a></li>
            <li><a href="info.list.php?info_status=0">已通过（22）</a></li>
            <li><a href="info.list.php?info_status=1">回收站（0）</a></li>
        </ul>
        <ul>
            <li class="hdli">用户</li>
            <li><a href="user.php?login_status=0">正常（1）</a></li>
            <li><a href="user.php?login_status=1">禁用（0）</a></li>
            <li><a href="user.php?login_status=2">未激活（0）</a></li>
        </ul>
    </div>
    <p class="line-t-10" style="clear:both;"></p>
    <!--系统信息 -->
    <div class="columns-mod l">
        <div class="hd">
            <h5>系统信息</h5>
        </div>
        <div class="bd">
            <div class="sys-info">
                <table>
                    <tr>
                        <th>Mcms版本</th>
                        <td>3.1.3</td>
                    </tr>
                    <tr>
                        <th>服务器操作系统</th>
                        <td>Darwin</td>
                    </tr>
                    <tr>
                        <th>运行环境 </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>MYSQL版本</th>
                        <td>5.5.38</td>
                    </tr>
                    <tr>
                        <th>上传限制</th>
                        <td>1MB</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!--产品团队 -->
    <div class="columns-mod r">
        <div class="hd">
            <h5>产品团队</h5>
        </div>
        <div class="bd">
            <div class="sys-info">
                <table>
                    <tr>
                        <th>版权所有</th>
                        <td id="copyright"><a target="_blank" href="" title="">xxxxxxxxxxxx</a></td>
                    </tr>
                    <tr>
                        <th>总策划</th>
                        <td id="producer">xxx</td>
                    </tr>
                    <tr>
                        <th>产品设计及研发团队</th>
                        <td id="team">xxx  xxxx xxxx</td>
                    </tr>
                    <tr>
                        <th>官方网址</th>
                        <td id="official_website"><a target="_blank" href="" title="">xxxxxxx</a></td>
                    </tr>
                    <tr>
                        <th>官方QQ群</th>
                        <td id="official_qq">
                            <a target="_blank" href="">		<img border="0" title="MCMS交流群1" alt="" src="http://pub.idqqimg.com/wpa/images/group.png">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>    <div id="alert"></div>
    <p class="line-t-20"></p>
    <!-- 加载底部 -->
    <p class="footer_cpy">
    Copyright(c) &nbsp;&nbsp;2012-2015 &nbsp;&nbsp;小肉粽 &nbsp;&nbsp;0.0003509521484375秒
    </p>
    <p class="line-t-20"></p>
</div>

<div class="to-top" style="display:none;">
    <a class="to-top-a" title="返回顶部"></a>
</div>
</body>
</html>