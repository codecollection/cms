<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MCMS手机建站之星-南昌免费建站,企业建站,自助建站,手机建站,免费建站系统-南昌掌易业泰科技有限公司（掌易科技）</title>
    <meta name="keywords" content="MCMS,免费建站,企业建站,自助建站,手机建站,建站程序,免费建站系统">
    <meta name="description" content="掌易科技是一家专业WEB建站服务公司，提供手机建站移动互联网建站解决方案，并且拥有定制大型门户和其他行业WEB解决方案的能力">
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
                        <?php  foreach($c->getCate() as $k => $v){ if($v['parent_id'] != 0 ){continue;} ?>
                        <li><a class="tit" href="<?php echo $v['surl'];?>"><?php echo $v['cname'];?></a></li>
                        <?php }?> 
                    </ul>
                </div>
            </div>            
            <div class="box">
                <div class="box_tit">公司动态</div>
                <div class="box_con">
                    <ul>
                        <?php $list = $c->getList(21); ?> 
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
                    <ul>
                        <?php $list = $c->getList(); ?> 
                        <?php foreach($list['list'] as $k => $v){ ?>
                        <li><a class="tit tit2" href="<?php echo $v['surl']?>"><?php echo $v['title']?></a><div class="desc clearfix"><?php if(!empty($v['img_url'])){?><div class="thumb"><img src="<?php echo $v['img_url']?>"></div><?php }?><?php echo $v['desc'];?></div></li>
                        <?php }?>                    
                    </ul>
                    <div class="line_20"></div>
                    <div class="pagebar"><?php echo $c->page;?></div>
                    <div class="line_20"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="line_20"></div>
</div>

<?php $c->loadView("inc.footer.php"); ?>