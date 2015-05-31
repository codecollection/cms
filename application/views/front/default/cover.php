<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $c->getItem("seo_title");?></title>
    <meta name="keywords" content="<?php echo $c->getItem("seo_keywords");?>">
    <meta name="description" content="<?php echo $c->getItem("seo_desc");?>">
<?php $c->loadView("inc.header.php");?>

<?php $c->loadView("inc.nav.php");?>
    <div class="silder" id="silder">
        <script type="text/javascript" src="/style/libs/img.silder/jquery.img.silder.js"></script>
        <script>
            $(function(){
                $('#silder').imgSilder({s_width:'100%', s_height:528, on:'mouseover', is_showTit:false, s_times:3000,css_link:'/style/libs/img.silder/style.css'});
            });
        </script>
        <ul class="silder_list" id="silder_list">
            <?php $ad = $c->getAd(100);?>
            <?php foreach($ad as $k => $v){?>
            <li style="background:url(<?php echo $v['ad_img']?>) center no-repeat;"><a href=""  target="_blank"></a></li>
            <?php }?>    
        </ul>
    </div>

    <div class="imglist1">
        <div class="line_10"></div>

        <ul class="wrap clearfix">
            <li><a href="http://crane/index.php?tpl=content&id=14" style="background:url(/style/front/sty_default/logo/preview/tedian1.jpg) no-repeat;">服务端响应式设计</a></li>
            <li><a href="http://crane/index.php?tpl=content&id=15" style="background:url(/style/front/sty_default/logo/preview/tedian2.jpg) no-repeat;">集成微网站接口</a></li>
            <li><a href="http://crane/index.php?tpl=content&id=16" style="background:url(/style/front/sty_default/logo/preview/tedian3.jpg) no-repeat;">安全可靠的系统结构</a></li>        
        </ul>
    </div>
    
<?php $c->loadView("inc.footer.php");?>