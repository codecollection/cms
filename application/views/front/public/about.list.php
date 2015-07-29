<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $c->getItem('site_name');?>-<?php echo $cate["cname"]?></title>
    <link href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE?>/css/global.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE?>/css/detail2.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!--header:begin-->
<div class="header">
    <div class="layout">
        <h1><a href="<?php echo HOST;?>" title="<?php echo $c->getItem('site_name');?>"><img src="http://img.d.cn/2013/web_index/company/images/logo.png" alt="<?php echo $c->getItem('site_name');?>" /></a></h1>
        <span class="fr">
            <a href="http://weibo.com/u/5663240823/home" target="_blank" title="新浪微博" class="sina"></a>
<!--            <a href="http://t.qq.com/downjoy_dcn" target="_blank" title="腾讯微博" class="tt"></a>-->
        </span>
    </div>
</div>
<!--header:end-->

<!--main:begin-->
<div class="wrap bg bgW clearfix">
<div id="leftNav">
    <ul class="fl">
            <?php $cates = $c->getCate(7);?>
            <?php foreach($cates['son'] as $k => $t){?>
            <?php if($cid == $t["cate_id"]){?>
            <li class="curr"><span><?php echo $t['cname']?></span></li>
            <?php }else{?>
            <li><a href="<?php echo $t['surl']?>" title="<?php echo $t['cname']?>"><span><?php echo $t['cname']?></span></a></li>
            <?php }?>
            <?php }?>
    </ul>
</div>
    <div class="content">
        
        <?php 
        $list  = $c->getList3($cid,1);
        $d = $list[0];
        ?>
        <h1><?php echo $d['title']?></h1><br />
        <div class="clearfix"></div>
        <div><?php echo $d['body']?></div>
    </div>
</div>
<!--main:end-->
<!--footer:begin-->
<div class="footer">
    <?php $c->loadView("front/public/copyright.php");?>
    <a href="http://www.miibeian.gov.cn/">京ICP证041520号</a></div>
<!--footer:end-->
</body>
</html>