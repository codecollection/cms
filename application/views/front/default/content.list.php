<?php $d = $c->getContent();?>
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
        <em>></em><a href="<?php  echo($c->cate->categories[$d['last_cate_id']]['surl']);?>"><?php  echo($c->cate->categories[$d['last_cate_id']]['cname']);?></a>        </div>
    <div class="line_10"></div>
    <div class="wrap clearfix">
        <div class="l mleft">
            <div class="box confbg">
                <div class="box_content">
                    <ul>
                        <?php $list = $c->getList($d['last_cate_id']); ?> 
                        <?php foreach($list['list'] as $k => $v){ ?>
                        <li><a class="tit" href="<?php echo $v['surl'];?>"><?php echo $v['title'];?></a></li>
                        <?php }?>                       
                    </ul>
                </div>
            </div>            
            <div class="box">
                <div class="box_tit">公司动态</div>
                <div class="box_con">
                    <ul>
                        <?php $list = $c->getList(21,5); ?> 
                        <?php foreach($list['list'] as $k => $v){ ?>
                        <li><a class="tit" href="<?php echo $v['surl'];?>"><?php echo $v['title'];?></a></li>
                        <?php }?> 
                    </ul>
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