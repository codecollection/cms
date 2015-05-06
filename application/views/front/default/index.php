<?php $c->loadView("inc.header");?>
</head>
<body>
<div class="header">
    <div class="wrap">
        <a href="/" alt="掌易科技" class="l logo" style="background:url(/style/front/sty_default/logo/logo_site.png) no-repeat;width:300px;height:70px;"></a>
        <div class="r">
            <div class="l nav">
                <ul>
                    <li><a href="http://crane">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
                    <?php $cate = $c->getCate();?>
                    <?php foreach($cate as $k => $v){?>
                    <li><a  href="<?php echo $v['surl'];?>"><?php echo $v['cname'];?></a></li>
                    <?php }?>
                    <li><a  href="/index.php?tpl=list&cid=4&p=1">关于我们</a></li><li><a  href="/app/message/">给我留言</a></li>                
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="sbg">
    <div class="wrap">
        <div class="l">
               <div class="search_box">
                <input type="text" id="seach-txt" class="search_txt" placeholder="请输入关键字" onkeydown="if(event.keyCode==13) do_search();" value="">
                <a onclick="do_search();" class="search_btn" href="javascript:void(0);"></a>
                </div>
        </div>
        <div class="r">
            <a href="/app/user/login.php">登录</a>&nbsp;&nbsp;&nbsp;<a href="/app/user/register.php">注册</a>        </div>
    </div>
</div>

    <div class="silder" id="silder">
        <script type="text/javascript" src="/style/libs/img.silder/jquery.img.silder.js"></script>
        <script>
            $(function(){
                $('#silder').imgSilder({s_width:'100%', s_height:528, on:'mouseover', is_showTit:false, s_times:3000,css_link:'/style/libs/img.silder/style.css'});
            });
        </script>
        <ul class="silder_list" id="silder_list">
            <li style="background:url(/style/front/sty_default/logo/index1.jpg) center no-repeat;"><a href=""  target="_blank"></a></li>
            <li style="background:url(/style/front/sty_default/logo/index2.jpg) center no-repeat;"><a href="" target="_blank"></a></li>       
        </ul>
    </div>

    <div class="imglist1">
        <div class="line_10"></div>

        <ul class="wrap clearfix">
            <li><a href="http://crane/index.php?tpl=content&id=14" style="background:url(/style/front/sty_default/logo/preview/tedian1.jpg) no-repeat;">服务端响应式设计</a></li>
            <li><a href="http://crane/index.php?tpl=content&id=15" style="background:url(/style/front/sty_default/logo/preview/tedian2.jpg) no-repeat;">集成微网站接口</a></li>
            <li><a href="http://crane/index.php?tpl=content&id=16" style="background:url(/style/front/sty_default/logo/preview/tedian3.jpg) no-repeat;">安全可靠的系统结构</a></li>        
        </ul>
    </div>
    <div class="footer">
    <div class="wrap service clearfix">
        <div class="clearfix" style="height:30px;"></div>
        <div class="l" style="width:220px;">
             <img src="/style/front/sty_default/qrcode/qrcode_5.png"> 
        </div>
        <ul class="l">
            <li class="top">商业服务</li><li><a href="http://crane/index.php?tpl=content&id=1">定制开发</a></li><li><a href="http://crane/index.php?tpl=content&id=2">技术支持</a></li><li><a href="http://crane/index.php?tpl=content&id=3">短信通知</a></li>        </ul>
        <ul class="l">
            <li class="top">服务支持</li><li><a href="http://crane/index.php?tpl=content&id=5">常见问题</a></li><li><a href="http://crane/index.php?tpl=content&id=4">售后服务</a></li>        </ul>
        <ul class="l">
            <li class="top">关于我们</li><li><a href="http://crane/index.php?tpl=content&id=7">关于掌易</a></li><li><a href="http://crane/index.php?tpl=content&id=6">公司资质</a></li><li><a href="http://crane/index.php?tpl=content&id=8">联系我们</a></li>        </ul>
        <div class="r">
            <a class="zixun" href="tencent://message/?uin=48254462"></a>
            <a class="phone" href="javascript:void(0);">0791-88152603</a>
            <p class="desc">周一至周五(不含节假日)  9:00-16:00</p>
        </div>
    </div>
    <div class="clearfix" style="height:30px;"></div>
</div>
<?php $c->loadView("inc.footer");?>