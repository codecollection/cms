<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>乐活蘑都 |  沪上首家单身白领合租公寓</title>
<meta name="keywords" content="单身公寓,白领公寓,合租公寓,上海单身公寓,上海合租单间,上海白领公寓,上海合租公寓,上海爱情公寓,上海租房" />
<meta name="description" content="选择蘑菇公寓，与美好相遇，免中介费，高档社区，名牌家具家电，免费保洁维修，租客认证保证安全，入住租客免费获得商业保险，免费wifi，拎包入住，热线:400-800-4949" />	
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
		<a href="http://www.mogoroom.com:80/queryColumnArticle_1.html"><h2 class="h2"><i class="i"></i>蘑菇圈</h2><i class="ii"></i></a>
	</div>
	
		<ul class="party ">
				<li class="pic p-1-1">
					<a href="http://www.mogoroom.com:80/queryArticle_87.html" class="tit">
						<img src="http://image.mogoroom.com/imagefile/lehuo/5/2/5/5_1433818065266.jpg" alt="" style="width: 380px;height: 267px;">
						<div class="mask"></div>
					</a>
		       	</li>
		        <li  class="txt"><a href="http://www.mogoroom.com:80/queryArticle_87.html"><h2>不HIGH非蘑 | 浪漫华尔兹交谊舞学习</h2></a>
		            优美的华尔兹不仅使人的身体得到极大的放松，优雅的音乐曲调也使人的精神得到极大的满足，更...&nbsp;<a href="http://www.mogoroom.com:80/queryArticle_87.html"><span class="text-more">[全文]</span></a>
		        </li>
		</ul>
	
		<ul class="party  p-m">
				<li class="pic p-1-1">
					<a href="http://www.mogoroom.com:80/queryArticle_88.html" class="tit">
						<img src="http://image.mogoroom.com/imagefile/lehuo/5/2/5/5_1433818613872.jpg" alt="" style="width: 380px;height: 267px;">
						<div class="mask"></div>
					</a>
		       	</li>
		        <li  class="txt"><a href="http://www.mogoroom.com:80/queryArticle_88.html"><h2>6月13日 | 霸气烧烤邀你免费撸串</h2></a>
		            一个人撸串，撸的是心情两个人撸串，撸的是默契N个人撸串，撸的是江湖&nbsp;炎炎夏日...&nbsp;<a href="http://www.mogoroom.com:80/queryArticle_88.html"><span class="text-more">[全文]</span></a>
		        </li>
		</ul>
	
		<ul class="party ">
				<li class="pic p-1-1">
					<a href="http://www.mogoroom.com:80/queryArticle_85.html" class="tit">
						<img src="http://image.mogoroom.com/imagefile/lehuo/5/2/5/5_1433298806472.jpg" alt="" style="width: 380px;height: 267px;">
						<div class="mask"></div>
					</a>
		       	</li>
		        <li  class="txt"><a href="http://www.mogoroom.com:80/queryArticle_85.html"><h2>活动招募∣ 请你跳爱的华尔兹</h2></a>
		            踮起脚尖，提起裙边，让我的手轻轻搭在你的肩，舞步翩翩，呼吸浅浅，这华尔兹多甜，一步一步...&nbsp;<a href="http://www.mogoroom.com:80/queryArticle_85.html"><span class="text-more">[全文]</span></a>
		        </li>
		</ul>
	
</div>

<div class="leftbar">
<div class="lh-title">
	<a href="http://www.mogoroom.com:80/queryColumnArticle_2.html"><h2 class="h2"><i class="i"></i>人物志</h2><i class="ii"></i></a>
</div>
<div class="renwu">
	<div id="marquee" style="width: 779px; height:267px; padding-top: 0px;">
		<ul>
			
				<li>
					<a href="http://www.mogoroom.com:80//queryArticle_86.html"><img src="http://image.mogoroom.com/imagefile/lehuo/5/2/5/5_1433817326921.jpg" alt="" style="width:779px;height:267px;"></a>
			    </li>
		    
				<li>
					<a href="http://www.mogoroom.com:80//queryArticle_77.html"><img src="http://image.mogoroom.com/imagefile/lehuo/3/0/3/3_1429842041251.jpg" alt="" style="width:779px;height:267px;"></a>
			    </li>
		    
		</ul>
	</div>
	<div class="control con-2"><a href="javascript:void(0);" id="goL"></a> <a href="javascript:void(0);" id="goR"></a></div>
</div>

</div>
<div class="rightbar">
<div class="lh-title">
	<a href="http://www.mogoroom.com:80/queryColumnArticle_3.html"><h2 class="h2"><i class="i"></i>生活家</h2><i class="ii"></i></a>
</div>
	
		<ul class="text" style="margin-right:20px">
			<li class="pic p-1-2">
				<a href="http://www.mogoroom.com:80/queryArticle_44.html" class="tit">
					<img src="http://image.mogoroom.com/imagefile/lehuo/1/2/11/11_1419329999306.jpg" alt="" style="width:181px;height:124px;">
						<div class="mask"></div>
				</a>
			</li>
			<li  class="txt sh-1">
				<a href="http://www.mogoroom.com:80/queryArticle_44.html" class="tit"><h2>最受欢迎的收纳神器</h2></a>
				好像收纳这个概念是近几年才流行起来的，收纳之后还有断舍离，都是讲住...
<!-- 			    Cupcake充满着美国式的气氛，简单，自由，充满快乐。 -->
			</li>
		</ul>
	
</div>
<div class="clear"></div>
<div class="leftbar">
<div class="lh-title">
	<a href="http://www.mogoroom.com:80/queryColumnArticle_4.html"><h2 class="h2"><i class="i"></i>六点见</h2><i class="ii"></i></a>
</div>

<ul class="party ldj-1">
	
		<li >
			<a href="http://www.mogoroom.com:80/queryArticle_65.html"><img src="http://image.mogoroom.com/imagefile/lehuo/2/2/2/2_1427694933322.jpg" alt="" style="width:380px;height:267px;">
				<div class="ldj-1-1">月色，夜空中凝视最美的世界</div>
			</a>
		</li>
	
		<li style="margin-left: 19px;">
			<a href="http://www.mogoroom.com:80/queryArticle_56.html"><img src="http://image.mogoroom.com/imagefile/lehuo/2/2/2/2_1427694951741.jpg" alt="" style="width:380px;height:267px;">
				<div class="ldj-1-1">分开旅行</div>
			</a>
		</li>
	
</ul>

</div>

<div class="rightbar">
<div class="lh-title">
	<a href="http://www.mogoroom.com:80/queryColumnArticle_5.html"><h2 class="h2"><i class="i"></i>蘑菇云</h2><i class="ii"></i></a>
</div>
<ul class="party1">
	
		<li >
			<a href="http://www.mogoroom.com:80/queryArticle_80.html">
				<img class="cover" src="http://image.mogoroom.com/imagefile/lehuo/3/0/3/3_1430122537506.jpg" alt="" style="width:186px;height:129px;">
				<div class="description1">你若放下，就是强大</div>
			</a>
		</li>
	
		<li class="imgR">
			<a href="http://www.mogoroom.com:80/queryArticle_78.html">
				<img class="cover" src="http://image.mogoroom.com/imagefile/lehuo/3/0/3/3_1429858834074.jpg" alt="" style="width:186px;height:129px;">
				<div class="description1">蘑菇音乐台</div>
			</a>
		</li>
	
		<li >
			<a href="http://www.mogoroom.com:80/queryArticle_73.html">
				<img class="cover" src="http://image.mogoroom.com/imagefile/lehuo/3/0/3/3_1428572515810.jpg" alt="" style="width:186px;height:129px;">
				<div class="description1">野心蘑菇“凶猛”：房产O2O+海尔U-home 玩出万亿级居住生态圈的可能性有多大？</div>
			</a>
		</li>
	
		<li class="imgR">
			<a href="http://www.mogoroom.com:80/queryArticle_71.html">
				<img class="cover" src="http://image.mogoroom.com/imagefile/lehuo/2/2/2/2_1427775101375.jpg" alt="" style="width:186px;height:129px;">
				<div class="description1">蘑菇公寓和海尔联姻了，结果是？！</div>
			</a>
		</li>
	
</ul>
</div>
</div>

<div class="clear"></div>
<?php $c->loadView("front/qingcaitao/inc.footer.php"); ?>  
</body>

</html>

