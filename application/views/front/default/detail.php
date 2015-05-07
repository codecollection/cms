<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $d['title'];?></title>
    <meta name="keywords" content="MCMS,免费建站,企业建站,自助建站,手机建站,建站程序,免费建站系统">
    <meta name="description" content="<?php echo $d['desc'];?>">
<?php $c->loadView("inc.header.php"); ?>
<?php $c->loadView("inc.nav.php"); ?>

<div class="main">
    <div class="line_10"></div>
    <div class="wrap snav">
        当前位置<em>:</em><a href="/">首页</a>
        <em>></em><a href="/index.php?tpl=list&cid=1&p=1">公司动态</a>        </div>
    <div class="line_10"></div>
    <div class="wrap clearfix">
        <div class="l mleft">
            <div class="box confbg">
                <div class="box_content">
                    <ul>
                        <li><a class="tit" href="/index.php?tpl=list&cid=1&p=1">公司动态</a></li>
                        <li><a class="tit" href="/index.php?tpl=list&cid=2&p=1">产品中心</a></li>
                        <li><a class="tit" href="/index.php?tpl=list&cid=3&p=1">成功案例</a></li>
                        <li><a class="tit" href="/index.php?tpl=list&cid=4&p=1">关于我们</a></li>
                        <li><a class="tit" href="/index.php?tpl=list&cid=11&p=1">商业服务</a></li>
                        <li style="border:0px;"><a class="tit" href="/app/message/">给我留言</a></li>                        </ul>
                </div>
            </div>            
            <div class="box">
                <div class="box_tit">公司动态</div>
                <div class="box_con">
                    <ul>
                        <li><a href="http://crane/index.php?tpl=content&id=24">掌易科技发布手机建站之星3.0.0</a></li>
                        <li><a href="http://crane/index.php?tpl=content&id=9">掌易科技签约首钢集团共青团</a></li>
                        <li><a href="http://crane/index.php?tpl=content&id=13">掌易科技签约江西省地质矿产勘查开发局</a></li>
                        <li><a href="http://crane/index.php?tpl=content&id=12">掌易科技签约江西师大国家单糖中心</a></li><li><a href="http://crane/index.php?tpl=content&id=11">掌易科技签约QQ.CC游戏网</a></li>        </ul>
                </div>
                <div class="line_5"></div>
            </div>
            <div class="line_20"></div>
            <div class="box">
                <div class="line_10"></div>
                <div class="box_img">
                    <ul>
                        <img src="/static/logo/lxwm.jpg" onerror="/original_img(this)"/>        </ul>
                </div>
                <div class="line_10"></div>
            </div>
        </div>
        <div class="r mright">
            <div class="box confbg">
                <div class="box_content">
                    <h1><?php echo $d['title'];?></h1>
                    <div class="info_body">
                        <?php echo $d['body'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="line_20"></div>
</div>

<?php $c->loadView("inc.footer.php"); ?>