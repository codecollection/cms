<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $cate["cname"];?>－<?php echo $c->getItem("site_name");?></title>
<meta name="keywords" content="<?php echo $cate["ckey"]?>">
<meta name="description" content="<?php echo $cate["cdesc"]?>">
<?php $c->loadView("front/qingcaitao/inc.header.php"); ?>
<style>
#marquee ul li{width: 779px;}

.lh-title .ii {
   width: 17px;
  height: 17px;
  background: url(pages/imgs/lhhome.png) no-repeat;
  background-position: -90px 0;
  margin: 3px 10px;
  float: left;
  position: absolute;
}

.lh-title a { 
	background:none;
	width:115px;
	height:22px;
	margin:0;
	}

.lh-title a:hover .h2 {
	color:#ffa64a;
}

.lh-title a:hover .i {
	color:#ffa64a;
	  background-position: -128px 0;
}

.lh-title a:hover .ii {
background-position: -109px 0;
}
/* 
  .b_pic {
  
  left: 0; 
  margin-left:0;
  width: 100%;
  }
   */
/*  .banner .slides img { 
  
  	opacity:0.7;
  	background-color:black;
  }
 */
 
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
<div class="lehuo">
<div class="lh-navBar">
	<ul class="lh-nav clearfix">
            <li class="m dq"><a href="<?php base_url()."/info/l?cid=2"?>" ><i></i></a></li>
                <?php $cate = $c->getCate($cid);?>
                <?php foreach($cate['son'] as $k => $v){ ?>
		<li class="m"><a href="<?php echo $v["surl"];?>"><?php echo $v['cname'];?></a></li>
                <?php }?>
	</ul>
</div>
<div class="mogupai">
	<div class="lh-title">
            <?php $cate1 = $c->getCate(5);?>
		<a href="<?php echo $cate1["surl"]; ?>"><h2 class="h2"><i class="i"></i><?php echo $cate1["cname"]; ?></h2><i class="ii"></i></a>
	</div>
            <?php $list = $c->getList(5,3);?>
            <?php foreach($list["list"] as $k => $v){?>
		<ul class="party <?php echo $k == 1 ? "p-m" : ""?>">
			<li class="pic p-1-1">
                            <a href="<?php echo $v["surl"]?>" class="tit">
				<img src="<?php echo $v["img_url"]?>" alt="<?php echo $v["title"]?>" style="width: 380px;height: 267px;">
                            <div class="mask"></div>
                            </a>
		       	</li>
		        <li  class="txt"><a href="<?php echo $v["surl"]?>"><h2><?php echo $v["title"]?></h2></a><?php echo $v["desc"]?>&nbsp;<a href="<?php echo $v["surl"]?>"><span class="text-more">[全文]</span></a>
		        </li>
		</ul>
            <?php }?>
</div>

<div class="leftbar">
<div class="lh-title">
     <?php $cate2 = $c->getCate(6);?>
	<a href="<?php echo $cate2["surl"]; ?>"><h2 class="h2"><i class="i"></i><?php echo $cate2["cname"]; ?></h2><i class="ii"></i></a>
</div>
<div class="renwu">
	<div id="marquee" style="width: 779px; height:267px; padding-top: 0px;">
		<ul>
            <?php $list = $c->getList(6,2);?>
            <?php foreach($list["list"] as $k => $v){?>
                    <li>
			<a href="<?php echo $v["surl"]?>"><img src="<?php echo $v["img_url"]?>" alt="" style="width:779px;height:267px;"></a>
                    </li>
            <?php }?>
		</ul>
	</div>
	<div class="control con-2"><a href="javascript:void(0);" id="goL"></a> <a href="javascript:void(0);" id="goR"></a></div>
</div>

</div>
<div class="rightbar">
<div class="lh-title">
    <?php $cate2 = $c->getCate(7);?>
	<a href="<?php echo $cate2["surl"]; ?>"><h2 class="h2"><i class="i"></i><?php echo $cate2["cname"]; ?></h2><i class="ii"></i></a>
</div>
	<?php $list = $c->getList(7,1);?>
            <?php foreach($list["list"] as $k => $v){?>
		<ul class="text" style="margin-right:20px">
			<li class="pic p-1-2">
				<a href="<?php echo $v["surl"]?>" class="tit">
					<img src="<?php echo $v["img_url"]?>" alt="" style="width:181px;height:124px;">
						<div class="mask"></div>
				</a>
			</li>
			<li  class="txt sh-1">
				<a href="<?php echo $v["surl"]?>" class="tit"><h2><?php echo $v["title"]?></h2></a>
				<?php echo $v["desc"]?>
			</li>
		</ul>
	<?php }?>
</div>
<div class="clear"></div>
<div class="leftbar">
<div class="lh-title">
    <?php $cate2 = $c->getCate(8);?>
	<a href="<?php echo $cate2["surl"]; ?>"><h2 class="h2"><i class="i"></i><?php echo $cate2["cname"]; ?></h2><i class="ii"></i></a>
</div>

<ul class="party ldj-1">
	<?php $list = $c->getList(8,2);?>
            <?php foreach($list["list"] as $k => $v){?>
		<li <?php echo $k == 1 ? 'style="margin-left: 19px;"' : "";?>>
			<a href="<?php echo $v["surl"]?>"><img src="<?php echo $v["img_url"]?>" alt="" style="width:380px;height:267px;">
				<div class="ldj-1-1"><?php echo $v["title"]?></div>
			</a>
		</li>
	<?php }?>
</ul>

</div>

<div class="rightbar">
<div class="lh-title">
    <?php $cate2 = $c->getCate(9);?>
	<a href="<?php echo $cate2["surl"]; ?>"><h2 class="h2"><i class="i"></i><?php echo $cate2["cname"]; ?></h2><i class="ii"></i></a>
</div>
<ul class="party1">
	<?php $list = $c->getList(9,4);?>
            <?php $i = 0; foreach($list["list"] as $k => $v){
                    $i++;
                    $imgr = $i % 2 == 1 ? "imgR" : "";
                            
                ?>
		<li class="<?php echo $imgr;?>">
			<a href="<?php echo $v["surl"]?>">
				<img class="cover" src="<?php echo $v["img_url"]?>" alt="" style="width:186px;height:129px;">
				<div class="description1"><?php echo $v["title"]?></div>
			</a>
		</li>
	<?php }?>
</ul>
</div>
</div>

<div class="clear"></div>
<?php $c->loadView("front/qingcaitao/inc.footer.php"); ?>  
</body>

</html>

