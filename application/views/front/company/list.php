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
                                <?php $cates = $c->getCate(); ?>
                                <?php
                                foreach ($cates as $k => $ct) {

                                    if ($ct["nav_show"] != 1) {
                                        continue;
                                    }
                                    ?>
                                    <li><a href="<?php echo $ct["surl"]; ?>" class="tit"><?php echo $ct["cname"]; ?></a></li>                                  <?php } ?>
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
                            <ul>
                                <?php $list = $c->getList($cid, 7); ?>
<?php foreach ($list['list'] as $k => $v) { ?>
                                    <li><a href="<?php echo $v["surl"]; ?>" class="tit tit2" title="<?php echo $v["title"]; ?>"><?php echo $v["title"]; ?></a><div class="desc clearfix"><?php if (!empty($v["img_url"])) { ?><div class="thumb"><img src="<?php echo $v["img_url"]; ?>"></div><?php } ?><?php echo $v["desc"]; ?></div></li>
                                <?php } ?>                       
                            </ul>
                            <div class="line_20"></div>
                            <div class="pagebar">
<?php echo $list['pagecode']; ?>
                            </div>
                            <div class="line_20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line_20"></div>
        </div>
<?php $c->loadView("front/" . TEMPLATE . "/inc.footer.php"); ?>

    </body>
</html>