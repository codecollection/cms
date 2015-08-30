<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $c->getItem("seo_title"); ?></title>
        <meta name="keywords" content="<?php echo $c->getItem("seo_keywords"); ?>">
        <meta name="description" content="<?php echo $c->getItem("seo_desc"); ?>">
        <?php $c->loadView("front/".TEMPLATE."/inc.nav.php");?>
    </head>
    <body>
        <?php $c->loadView("front/".TEMPLATE."/inc.header.php");?>
        <div class="sbg">
            <div class="wrap">
                <div class="l">
                    <div class="search_box">
                        <input type="text" id="seach-txt" class="search_txt" placeholder="请输入关键字" onkeydown="if (event.keyCode == 13)
                                    do_search();" value="">
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
                $(function() {
                    $('#silder').imgSilder({s_width: '100%', s_height: 528, on: 'mouseover', is_showTit: false, s_times: 3000, css_link: '/style/libs/img.silder/style.css'});
                });
            </script>
            <ul class="silder_list" id="silder_list">
                <?php $ads = $c->getAd(1);?>
                <?php foreach($ads as $key => $ad){?>
                <li style="background:url(<?php echo $ad["ad_img"];?>) center center no-repeat;"><a href="<?php echo $ad["ad_url"];?>" style="display:block;text-indent:-2000px;width:500px;height:100px;margin:200px auto 0 auto;" target="_blank"></a></li>
                <?php }?>
            </ul>
        </div>

        <div class="imglist1">
            <div class="line_10"></div>

            <ul class="wrap clearfix">
                <li><a href="http://www.mcms.cc/show/14.html" style="background:url(http://www.mcms.cc/static/logo/preview/tedian1.jpg) no-repeat;">服务端响应式设计</a></li>
                <li><a href="http://www.mcms.cc/show/15.html" style="background:url(http://www.mcms.cc/static/logo/preview/tedian2.jpg) no-repeat;">集成微网站接口</a></li>
                <li><a href="http://www.mcms.cc/show/16.html" style="background:url(http://www.mcms.cc/static/logo/preview/tedian3.jpg) no-repeat;">安全可靠的系统结构</a></li> 
                <li><a href="http://www.mcms.cc/show/14.html" style="background:url(http://www.mcms.cc/static/logo/preview/tedian1.jpg) no-repeat;">服务端响应式设计</a></li>
                <li><a href="http://www.mcms.cc/show/15.html" style="background:url(http://www.mcms.cc/static/logo/preview/tedian2.jpg) no-repeat;">集成微网站接口</a></li>
                <li><a href="http://www.mcms.cc/show/16.html" style="background:url(http://www.mcms.cc/static/logo/preview/tedian3.jpg) no-repeat;">安全可靠的系统结构</a></li> 
            </ul>
        </div>
        <?php $c->loadView("front/".TEMPLATE."/inc.footer.php");?>
        
    </body>
</html>