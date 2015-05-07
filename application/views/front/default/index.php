<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MCMS手机建站之星-南昌免费建站,企业建站,自助建站,手机建站,免费建站系统-南昌掌易业泰科技有限公司（掌易科技）</title>
    <meta name="keywords" content="MCMS,免费建站,企业建站,自助建站,手机建站,建站程序,免费建站系统">
    <meta name="description" content="掌易科技是一家专业WEB建站服务公司，提供手机建站移动互联网建站解决方案，并且拥有定制大型门户和其他行业WEB解决方案的能力">
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
            <li style="background:url(/style/front/sty_default/logo/index1.jpg) center no-repeat;"><a href=""  target="_blank"></a></li>
            <li style="background:url(/style/front/sty_default/logo/index2.jpg) center no-repeat;"><a href="" target="_blank"></a></li>       
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