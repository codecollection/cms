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
        <h1 class="info_tit tit1"><?php echo $d["title"];?></h1>
        <div class="info_body">
            <?php echo $d["body"];?>
        </div>
    </section>
    <div style="height:60px;clear:both;"></div>
    <?php $c->loadView("wap/" . TEMPLATE . "/inc.footer.php"); ?> 
</body>
</html>