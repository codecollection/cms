<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $c->getItem("seo_title"); ?>﹣<?php echo $cate["cname"]?></title>
        <meta name="keywords" content="<?php echo $c->getItem("seo_keywords"); ?>">
        <meta name="description" content="<?php echo $c->getItem("seo_desc"); ?>">
        <?php $c->loadView("front/".TEMPLATE."/inc.nav.php");?>
    </head>
    <body>
        <?php $c->loadView("front/".TEMPLATE."/inc.header.php");?>
        
        <div class="main">
        <div class="line_10"></div>
        <div class="wrap snav">
            当前位置<em>:</em><a href="/">首页</a>
            <em>&gt;</em><a href="<?php //echo $cate["surl"];?>"><?php echo $cate["cname"];?></a>        
        </div>
        <script type="text/javascript" src="/style/libs/jquery.scroll.js"></script>
        <script>
            $(function(){
                $('#photos').kxbdSuperMarquee({isEqual:false,distance:510,time:3,btnGo:{ left:'.arrow_left',right:'.arrow_right'},direction:'left'});
            });
        </script>
        <div class="bgwhite">
        <div style="position: relative;" class="wrap imgal1">
            <a class="arrow_left"></a>
            <div id="photos" class="anli_con">
                <ul id="photos_inner" class="clearfix" style="width: 27540px;">
                    <?php $list = $c->getList($cid, 50); ?>
                        <?php foreach ($list["list"] as $k => $v) { ?>
                    <li><img src="<?php echo $v['img_url']; ?>" alt="<?php echo $v['title']; ?>" title="<?php echo $v['title']; ?>"></li>
                    <?php }?> 
                </ul>
            </div>
            <a class="arrow_right"></a>
        </div>
    </div>
        <div class="line_20"></div>
    </div>
        <?php $c->loadView("front/".TEMPLATE."/inc.footer.php");?>
        
    </body>
</html>