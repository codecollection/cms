<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $c->getItem("seo_title"); ?>﹣<?php echo $cate["cname"]?></title>
        <meta name="keywords" content="<?php echo $c->getItem("seo_keywords"); ?>">
        <meta name="description" content="<?php echo $c->getItem("seo_desc"); ?>">
        <?php $c->loadView("front/" . TEMPLATE . "/inc.nav.php"); ?>
    </head>
    <body>
        <?php $c->loadView("front/" . TEMPLATE . "/inc.header.php"); ?>
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

        <div class="main">
            <div class="line_10"></div>
            <div class="wrap snav">
                当前位置<em>:</em><a href="/">首页</a>
                <em>&gt;</em><a href="<?php //echo $cate["surl"]; ?>"><?php echo $cate["cname"]; ?></a>        </div>
            <div class="line_10"></div>
            <div class="wrap clearfix">
                <div class="l mleft">
                    <div class="box confbg">
                        <div class="box_content">
                            <ul>
                                <?php $cates = $c->getCate($cid);
                                ?>
                                <?php if (isset($cates["son"]) && !empty($cates["son"])) {
                                    foreach ($cates["son"] as $k => $ct) {
                                        ?>
                                        <li><a href="<?php echo $ct["surl"]; ?>" class="tit"><?php echo $ct["cname"]; ?></a></li>                                  <?php } ?>
                                <?php
                                } else {
                                    $cates = $c->getCate();
                                    foreach ($cates as $k => $ct) {

                                        if ($ct["nav_show"] != 1) {
                                            continue;
                                        }
                                        ?>
                                        <li><a href="<?php echo $ct["surl"]; ?>" class="tit"><?php echo $ct["cname"]; ?></a></li> 
    <?php } ?>
<?php } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box_tit">公司动态</div>
                        <div class="box_con">
                            <ul>
                                <?php $l3 = $c->getList3(1, 5); ?>
                                <?php foreach ($l3 as $k => $v) { ?>
                                <li><a href="<?php echo $v["surl"]; ?>"><?php echo $v["title"]; ?></a></li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="line_5"></div>
                    </div>
                    <div class="line_20"></div>
                    <?php $c->loadView("front/" . TEMPLATE . "/inc.contact.php"); ?>
                </div>
                <div class="r mright">
                    <div class="box confbg">
                        <div class="box_content">
                            <?php
                            $list = $c->getList3($cid, 1);
                            $d = $list[0];
                            ?>
                            <h1><?php echo $d['title'] ?></h1>
                            <div class="info_body">
<?php echo $d['body'] ?>


                                <div class="bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1440919010557"><span class="l">一键分享：</span><a data-cmd="weixin" class="bds_weixin" href="#" title="分享到微信"></a><a data-cmd="tsina" class="bds_tsina" href="#" title="分享到新浪微博"></a><a data-cmd="qzone" class="bds_qzone" href="#" title="分享到QQ空间"></a><a data-cmd="tqq" class="bds_tqq" href="#" title="分享到腾讯微博"></a><a data-cmd="tieba" class="bds_tieba" href="#" title="分享到百度贴吧"></a><a data-cmd="more" class="bds_more" href="#"></a>
                                </div>

                                <script>window._bd_share_config = {"common": {"bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "0", "bdSize": "24"}, "share": {}, "image": {"viewList": ["weixin", "tsina", "qzone", "tqq", "tieba"], "viewText": "分享到：", "viewSize": "32"}, "selectShare": {"bdContainerClass": null, "bdSelectMiniList": ["weixin", "tsina", "qzone", "tqq", "tieba"]}};
                                with (document)
                                    0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>                            
                                <div class="line_20"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line_20"></div>
        </div>
<?php $c->loadView("front/" . TEMPLATE . "/inc.footer.php"); ?>

    </body>
</html>