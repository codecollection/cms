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
                <?php $list = $c->getList3(24,6);?>
                <?php foreach($list as $k => $v){?>
                <li><a href="<?php echo $v["surl"];?>" style="background:url(<?php echo $v['img_url'];?>) no-repeat;"><?php echo $v["title"];?></a></li>
                <?php }?> 
            </ul>
        </div>
        <?php $c->loadView("front/".TEMPLATE."/inc.footer.php");?>
        
    </body>
</html>