<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $d["title"]; ?>| <?php echo $c->getItem("site_name"); ?></title>
        <meta name="keywords" content="<?php echo $d["tag"]; ?>" />
        <meta name="description" content="<?php echo $d["desc"]; ?>" />	
        <link rel="stylesheet" href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE ?>/css/styles.css">
        <link rel="stylesheet" href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE ?>/css/common.css" >
    </head>

    <body>
        <?php $c->loadView("front/qingcaitao/inc.nav.php"); ?>

        <div class="lehuo-2">
            <div class="lehuo-nav">
                <a href="http://www.mogoroom.com:80/queryArticleAll.html">乐活蘑都</a> >

                <a href="http://www.mogoroom.com:80/queryColumnArticle_1.html">蘑菇圈</a> >

                <?php echo $d["title"];?>
            </div>
            <div id="leftbody">
                <div class="body_title">
                    <h1><?php echo $d["title"];?></h1>
                    <h4><span><?php $c->echoTime();?></span>    

                        <span>作者：<?php echo $d["uname"];?></span><span><i></i>阅读：<?php echo $d["visitors"];?></span></h4>
                </div>
                <div class="mainbody">
                    <?php echo $d["body"]?>

                    <div class="bodybottom">
<!--                        <div class="like" onclick="javascript:likeCount(88);"><i></i>喜欢(8)</div>-->
                        <div class="lh-share">
                            <span class="fl">分享给好友：</span>
                            <div class="bdsharebuttonbox">
                                <?php echo htmlspecialchars_decode($c->getItem("share_baidu"));?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="asideRight1">
                <div class="floor1 WZ">
                    <h1><span>热门文章</span></h1>
                    <ul>
                        <?php $r = $c->getArea(1);?>
                        <?php foreach($r["list"] as $k => $v){?>
                        <li><i></i><a href="<?php echo $v["surl"];?>"><?php echo $v["title"];?></a></li>
                        <?php }?>
                    </ul>
                </div>
<!--                <div class="floor1 WZ">
                    <a href=""><img src="http://www.mogoroom.com:80/pages/imgs/lehuo/lehuo6.jpg" alt=""/></a>
                </div>-->
                <div class="floor1">
                    <h1><span>特惠房源</span></h1>
                    <ul>
                        <?php $r = $c->getArea(2);?>
                        <?php foreach($r["list"] as $k => $v){?>
                        <li>
                            <a href="<?php echo $v["surl"];?>" target="_blank">
                                <img class="flatImg" src="<?php echo $v["img_url"];?>" alt="">
                                <?php echo $v["title"];?>
                            </a><span class="roomId"></span>
                            <div><span><b><?php echo $v["discount_price"];?></b> 元/月 </span> <?php echo $v["room_area"];?>㎡ 
                                | <?php echo $v["room_direction"];?>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>

            </div>
        </div>    
        <?php $c->loadView("front/qingcaitao/inc.footer.php"); ?>

    </body>

    <style>
        nav {background:#ff6500; position:relative;}
        .bdshare-button-style0-16 a{margin-top:3px;}
    </style>
</html>

