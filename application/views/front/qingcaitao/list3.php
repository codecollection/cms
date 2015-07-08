<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $cate["cname"];?>－<?php echo $c->getItem("site_name");?></title>
<meta name="keywords" content="<?php echo $cate["ckey"]?>">
<meta name="description" content="<?php echo $cate["cdesc"]?>">
        
<?php $c->loadView("front/qingcaitao/inc.header.php"); ?>
<style>
    .flexslider{width:100%;margin:0 auto;display:block;z-index:-1;} 
    .flex-active-slide{display:block;z-index:100;}
    .flexslider {position: relative;height: 100%;overflow: hidden;background:#FFF;}
    .slides {position: relative;z-index: 99;height: 100%;width: 100%; background:url(<?php echo CSSHOST; ?>/style/front/<?php echo TEMPLATE; ?>/imgs/banner_bg1.png) repeat;}
    .slides li {height: 100%; background-size:100%;background-position:0 50%;position:relative;/*  background:#FFF; position: absolute;z-index: 2; */}
    .slides li img{position: relative; bottom:45%;overflow:auto;width:100%; display:inherit; background:#FFF; }
</style>
</head>

<body>
<?php $c->loadView("front/qingcaitao/inc.nav.php");?>
<div class="banner bannerFull">
        <div class="flexslider">
            <ul class="slides">
<?php $ad = $c->getAd(100); ?>
<?php foreach ($ad as $k => $v) { ?>
                    <li style='background-image:url(<?php echo FILEHOST . $v["ad_img"] ?>);'>
                        <div class="bg-black"></div>
                        <div class="slides-text"> 	
                            <h1><?php echo $v["ad_title"]; ?></h1>
                            <h4><?php echo $v["ad_words"]; ?></h4>
                        </div>
                    </li>
<?php } ?>
            </ul>
        </div>  
    </div> 
<div class="custom">
<div class="lehuo lehuo-1">
<div class="lh-navBar">
	<ul class="lh-nav clearfix">
		<li class="m"><a href="<?php base_url()."/info/l?cid=2"?>" ><i></i></a></li>
                <?php $cate = $c->getCate(2);?>
                <?php foreach($cate['son'] as $k => $v){ ?>
		<li class="m <?php echo $v["cate_id"] == $cid ? "dq":"";?>"><a href="<?php echo $v["surl"];?>"><?php echo $v['cname'];?></a></li>
                <?php }?>
	</ul>
</div>
        <?php $list = $c->getList();?>
        <?php foreach($list["list"] as $k => $v){?>
	<div class="textlist">
		<a href="<?php echo $v["surl"]?>"><img src="<?php echo $v["img_url"]?>" alt="" class="list-l" style="width:568px;height:350px;">
		</a>
		<div class="list-r">
			<h1><a href="<?php echo $v["surl"]?>"><?php echo $v["title"]?></a></h1>
			<h4><?php echo $c->echoTime($v["cdate"]);?></h4>
			<p><?php echo $v["desc"];?>...
			</p>
			<a href="<?php echo $v["surl"]?>" class="read">阅读全文&gt;</a>
			<div class="like liking"><i></i>阅读(<?php echo $v["visitors"]?>)</div>
		</div>
	</div>
        <?php }?>
<!--分页  -->
<style>
    
    .pagenation1 a {width: 60px;}
</style>
<div class="pagenation1" style="margin: 43px auto; width: 430px;"> 
    
        <?php echo $list["pagecode"];?>
    
<!-- 	<ul class="pagination" > -->
<!--		<span style="width:60px;margin-right:10px;">上一页</span>
<span class="pageOn">1</span>
	<a href="#@" onclick="nextPage(2)">2</a>
	<a href="#@" onclick="nextPage(3)">3</a>
	<a href="#@" onclick="nextPage(4)">4</a>
	<a href="#@" onclick="nextPage(5)">5</a>
	<a href="#@" onclick="nextPage(6)">6</a>
	<a href="#@" onclick="nextPage(7)">7</a>
 <span>...</span> <a href="#@" onclick="nextPage(2)" style="width:60px;" id="nextPage" >下一页</a>-->

<!-- 	</ul> -->
</div>

<!-- <div class="pagenation1" style="margin: 43px auto; width: 430px;">
	<a href="" style="width:60px;margin-right:10px;">上一页</a>
		<a href="">1</a>
		<a href="">2</a>
		<span class="pageOn">3</span>
		<a href="">4</a>
		<a href="">5</a>
		<a href="">6</a>
		<span>...</span>
		<a href="" style="width:60px;">下一页</a>
</div> -->


</div>

<div class="clear"></div>
<?php $c->loadView("front/qingcaitao/inc.footer.php"); ?>   
</body>

</html>

