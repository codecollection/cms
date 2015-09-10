<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $c->getItem("seo_title"); ?></title>
        <meta name="keywords" content="<?php echo $c->getItem("seo_keywords"); ?>">
        <meta name="description" content="<?php echo $c->getItem("seo_desc"); ?>">
        <?php $c->loadView("wap/".TEMPLATE."/inc.nav.php");?>  
    </head>
    <body>
        <?php $c->loadView("wap/".TEMPLATE."/inc.header.php");?>  
        <section>
<!--            <div class="addWrap" style="margin:0px;">
                <div class="swipe" id="mySwipe">
                    <div class="swipe-wrap">
                        php each代码块 图片循环 div start 
                        <div>
                            <img src="/static/logo/wap2.jpg" onclick="window.location.href = '/static/logo/wap2.jpg'" onerror="original_img(this);" alt=""/>
                        </div>
                        <div><img src="/static/logo/wap1.jpg" onclick="window.location.href = '/static/logo/wap1.jpg'" onerror="original_img(this);" alt=""/></div>                     图片循环 div end 
                    </div>
                </div>
                <ul id="position">
                     翻页循环 li start 
                    <li class="cur" ></li><li></li>                 翻页循环 li start 
                </ul>
            </div>-->
            <!--图片轮播 开始, 注：libs文件夹内存在该插件，防止文件重复 删除本文件夹 js/swipe.min.js 调用libs内 libs/swipe.min.js-->
            <script type="text/javascript" src="/style/libs/swipe.min/swipe.min.js"></script>
            <script>
                            var bullets = document.getElementById('position').getElementsByTagName('li');
                            var banner = Swipe(document.getElementById('mySwipe'), {
                                auto: 2000,
                                continuous: true,
                                disableScroll: false,
                                callback: function(pos) {
                                    var i = bullets.length;
                                    while (i--) {
                                        bullets[i].className = ' ';
                                    }
                                    bullets[pos].className = 'cur';
                                }
                            });
            </script>
        </section>
        <nav>
            <?php $cates = $c->getCate();?>
            <?php foreach($cates as $k => $ct){

                if($ct["nav_show_wap"] != 1){continue;}
            ?>
            <a href="<?php echo $ct["surl"]; ?>"><span><img src="<?php echo $ct["clogo"]; ?>"></span><?php echo $ct["cname"]; ?></a>
            <?php }?>   
        </nav>
<!--        <div style="margin:10px;text-align:center;">
            <a href="/?mcms_dev=pc">电脑版</a>&nbsp;&nbsp;&nbsp;
            <a href="/?mcms_dev=wap">手机版</a>&nbsp;&nbsp;&nbsp;
            <a href="/?mcms_dev=wx">微信版</a>
        </div>-->
        <div style="height:60px;clear:both;"></div>
        <?php $c->loadView("wap/" . TEMPLATE . "/inc.footer.php"); ?>  
    </body>
</html><!--Powerd by MCMS Ver3.1.3-->