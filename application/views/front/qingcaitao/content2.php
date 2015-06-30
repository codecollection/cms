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

                            <div class="bdsharebuttonbox"><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到腾讯朋友" href="#" class="bds_tqf" data-cmd="tqf"></a></div>
                            <script>window._bd_share_config = {"common": {"bdSnsKey": {}, "bdText": "", "bdMini": "1", "bdMiniList": false, "bdPic": "", "bdStyle": "0", "bdSize": "16"}, "share": {}};
                                with (document)
                                    0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>


                        </div>
                    </div>
                </div>
            </div>
            <div class="asideRight1">
                <div class="floor1 WZ">
                    <h1><span>热门文章</span></h1>
                    <ul>

                        <li><i></i><a href="http://www.mogoroom.com:80/queryArticle_6.html">栗子何：女神的过去、现在和未来</a></li>

                        <li><i></i><a href="http://www.mogoroom.com:80/queryArticle_66.html">百味尽煮，你是哪一道风味？</a></li>

                        <li><i></i><a href="http://www.mogoroom.com:80/queryArticle_55.html">拉拉斯基：不上班的理想生活</a></li>

                        <li><i></i><a href="http://www.mogoroom.com:80/queryArticle_43.html">何况：律政俏佳人</a></li>

                        <li><i></i><a href="http://www.mogoroom.com:80/queryArticle_7.html">陈志豪：爱的空中飞人</a></li>

                    </ul>
                </div>
                <div class="floor1 WZ">
                    <a href="http://www.mogoroom.com:80//queryArticle_62.html"><img src="http://www.mogoroom.com:80/pages/imgs/lehuo/lehuo6.jpg" alt=""/></a>
                </div>
                <div class="floor1">
                    <h1><span>特惠房源</span></h1>
                    <ul>


                        <li><a href="http://www.mogoroom.com:80/room/1222.shtml" target="_blank">

                                <img class="flatImg" src="http://image.mogoroom.com//common/cameraman.jpg!small" alt="闵行区古北恒盛苑RoomD南卧">


                                闵行区-古北恒盛苑</a><span class="roomId"></span>
                            <div><span><b>3290</b> 元/月 </span> 16.0㎡ 
                                | 独立阳台
                            </div>
                        </li>


                        <li><a href="http://www.mogoroom.com:80/room/1342.shtml" target="_blank">












                                <img class="flatImg" src="http://image.mogoroom.com/imagefile/room/2/1/1342/1342_1407404148981.jpg!small" alt="长宁区上海花城RoomD南卧">



                                长宁区-上海花城</a><span class="roomId"></span>
                            <div><span><b>3330</b> 元/月 </span> 20.0㎡ 
                                | 独立阳台
                            </div>
                        </li>


                        <li><a href="http://www.mogoroom.com:80/room/1710.shtml" target="_blank">










                                <img class="flatImg" src="http://image.mogoroom.com/imagefile/room/0/0/1710/1710_1408001674447.jpg!small" alt="徐汇区亚都国际名园RoomD南卧">





                                徐汇区-亚都国际名园</a><span class="roomId"></span>
                            <div><span><b>3720</b> 元/月 </span> 14.0㎡ 
                                | 独立阳台
                            </div>
                        </li>

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

