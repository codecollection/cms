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
                                <?php $cates = $c->getCate($cid); ?>
                                <?php foreach ($cates["son"] as $k => $ct) { ?>
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
                            <ul class="imglist clearfix">
                                <?php $list = $c->getList($cid, 12); ?>
                                <?php foreach ($list['list'] as $k => $v) { ?>
                                <li class="pr" style="border:0px;"><a href="<?php echo $v['surl']; ?>" class="tit"><img src="<?php echo $v['img_url']; ?>"><span class="ver">V&nbsp;<?php echo $v["version"];?></span><br><?php echo $v['title']; ?></a></li>
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