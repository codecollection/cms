<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $cate["cname"];?></title>
        <?php $c->loadView("wap/" . TEMPLATE . "/inc.nav.php"); ?> 
    </head>
    <body>
        <?php $c->loadView("wap/" . TEMPLATE . "/inc.header.php"); ?> 
        <section>
            <ul class="list">
                <?php $list = $c->getList($cid, PAGESIZE); ?>
                <?php foreach ($list['list'] as $k => $v) { ?>
                <li>
                    <a href="<?php echo $v["surl"]; ?>" class="list_img"><img src="<?php echo $v["img_url"]; ?>" /></a>

                    <div class="list_desc">
                        <h1><a href="<?php echo $v["surl"]; ?>"><?php echo $v["title"]; ?></a></h1>
                        <span><?php echo $v["desc"]; ?></span>
                    </div>

                </li>
                <?php }?>
            </ul>
        </section>
        <section>
            <div class="pagebar clearfix">
                <?php echo $list['pagecode']; ?>
            </div>
            <div style="height:20px;clear:both;"></div>
        </section>
        <div style="height:60px;clear:both;"></div>
        <?php $c->loadView("wap/" . TEMPLATE . "/inc.footer.php"); ?> 
    </body>
</html>