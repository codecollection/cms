<!DOCTYPE html>
<html>
    <head>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <title><?php echo $c->getItem("site_name");?><?php echo " | " . $c->getItem("seo_title");?>   </title>
        <meta name="keywords" content="<?php echo $c->getItem("seo_keywords");?>" />
        <meta name="description" content="<?php echo $c->getItem("seo_desc");?>" />
        <?php $c->loadView("front/qingcaitao/inc.header.php"); ?>
        <style>
            .flex-direction-nav{display:none;}
            .flexslider{width:100%;margin:0 auto;display:block;z-index:-1;} 
            .flex-active-slide{display:block;z-index:100;}
            .flexslider {position: relative;height: 100%;overflow: hidden;background:#FFF;}
            .slides {position: relative;z-index: 99;height: 100%;width: 100%; background:url(<?php echo CSSHOST; ?>/style/front/<?php echo TEMPLATE; ?>/imgs/banner_bg1.png) repeat;}
            .slides li {height: 100%; background-size:100%;background-position:0 50%;position:relative;/*  background:#FFF; position: absolute;z-index: 2; */}
            .slides li img{position: relative; bottom:45%;overflow:auto;width:100%; display:inherit; background:#FFF; }
            #mgb{height:500px;margin-bottom:1px;cursor:pointer;background:url(<?php echo CSSHOST; ?>/style/front/<?php echo TEMPLATE; ?>/imgs/img-12+1/12+1.jpg) center 45px no-repeat;display:none;}
            .activitytk{width:264px;height:315px;position: fixed;bottom: -5px;right: 0px;z-index: 4;display:none;  margin-right: 65px;}
            .activitytk span {position: absolute; color:#FFF;top:15px;right: 10px;cursor: pointer;display: block;width: 30px;height:30px;font-size: 40px;*padding-bottom: 5px;}
            .activitytk img{width:100%} 
            @media screen and (max-width:1400px){
                .activitytk span {bottom:10px;}
            }
            .help1 { padding-top:150px; }
            .banner_search {height: 60px !important;}
            .search {padding-top: 8px !important; }
            .search2 {top:8px  !important;}

            #reasultbox li:hover {  color:#ff6900 ; }
            /* .search2 ul li:hover { background-color:red !important; } */
            .blockenter { 
                width: 140px;
                height: 38px;
                margin: 0 auto;
                /* background-color: rgba(0,0,0,0.5); */
                border: solid #dfdfdf 1px;
                color: #666;
                text-align: center;
                line-height: 38px;
                font-size: 14px;
                cursor:pointer;
            }

            .blockenter:hover { 
                color: white;
                background-color: #FFA500;
                border:solid white 1px;
            }
            #mgb { height:280px;
                   background-color:#EC5D00;

            }

            .search b {
                top:23px;
            }


            .mgbClose { 
                top: 65px;
                right: 20px;
                color:white;

            }

            .bg-black {
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.2);
            }

        </style>
        <script>
            /* 活动 */
            /*
             $(document).ready(function(){
             
             var $mgb=$("#mgb");
             $(".mgbClose").click(function(){
             $mgb.slideUp(500);
             
             return false;	
             })
             
             setTimeout(function(){
             $mgb.slideDown(500);
             },1000);
             setTimeout(function(){
             $mgb.slideUp(500);
             /* $(".activitytk").slideDown(500); */
            /*}, 10000);
                    setTimeout(function(){
                    $(".activitytk").slideDown(500);
                    }, 5000);
                    $mgb.click(function(){
                    window.show("");
                    });
                    $('.f-close').click(function(){
            $('.activitytk').hide();
            });
            });
                 */   
        / * 活动 * /

        </script>
    </head>
    <body>

        <?php $c->loadView("front/qingcaitao/inc.nav.php");?>
        <!-- 蘑菇宝 -->
    </div>
    <div class="activitytk">
        <a href="http://www.mogoroom.com:80/pages/activity/zhaopinjie.jsp" target="_blank">
            <img src="http://www.mogoroom.com:80/pages/activity/imgs/5-21/zhaopinbanner.jpg"></a>
        <span class="f-close">×</span>
    </div> 

    <div id="topImg1">
        <span>×</span>
        <div class="help1">
            <img src="http://image.mogoroom.com//imagefile/website/index/img20.jpg">
            <a href="javascript:;" class="help-r"></a>
            <a href="http://www.mogoroom.com:80/goMap.html" class="start-s">开始选房</a>
        </div>	
        <!-- <div class="h-btn"><a href="javascript:;" class="btn-1 on"></a><a href="javascript:;" class="btn-2"></a></div> -->
    </div>
    <div class="banner bannerFull">
        <div class="flexslider">
            <ul class="slides">
<?php $ad = $c->getAd(100); ?>
<?php foreach ($ad as $k => $v) { ?>
                    <li style='background-image:url(<?php echo FILEHOST . $v["ad_img"] ?>);'>
                        <div class="bg-black" ></div>
                        <div class="slides-text"> 	
                            <h1><?php echo $v["ad_title"]; ?></h1>
                            <h4><?php echo $v["ad_words"]; ?></h4>
                            <div class="banner_text">
                                <a href="http://www.mogoroom.com:80/goMap.html" class="more">立即找房 </a>
                            </div>
                        </div>
                    </li>
<?php } ?>
            </ul>
        </div>  
        <div class="col-center">
            <div class="banner_search">
                <div class="search">
                    <form action="http://www.mogoroom.com:80/goMap.html" method="post" id="customRoomList">
                        <input type="submit" class="subm" value="搜 索">
                        <div class="search1">
                            <i class="searchBtn1"></i>
                            <input class="search-input"  name="custom" id="custom" autocomplete="off" type="text" placeholder="区、小区、路名、地铁、商圈、地段" value="区、小区、路名、地铁、商圈、地段" >

                        </div>
                        <div class="search2">
                            <span>在</span><input class="search-input ser-in1" name="custom1"  id="custom1" autocomplete="off" type="text" placeholder="上海体育馆" value="上海体育馆"><span>附近</span><div id="search-s"><span>2公里</span><i></i></div>
                            <ul id="reasultbox">
                                <li>0.5公里</li>
                                <li>1公里</li>
                                <li>1.5公里</li>
                                <li>2公里</li>
                                <li>3公里</li>
                                <li>5公里</li>
                            </ul>
                        </div>
                        <input name="curent" id="curent" value="2" type="hidden">
                        <input name="range" id="range" value="2" type="hidden">
                    </form>
                    <b id="serBtn"></b>
                </div>

            </div>
        </div>
    </div> 
    <div class="activity-zm">
        <div class="activity">
            <i></i>
            <div id="scrollDiv">
                <ul>
                    <li><a href="http://www.mogoroom.com:80/queryArticle_87.html" target="_blank">不HIGH非蘑 | 浪漫华尔兹交谊舞学习</a></li>

                    <li><a href="http://www.mogoroom.com:80/queryArticle_88.html" target="_blank">6月13日 | 霸气烧烤邀你免费撸串</a></li>

                    <li><a href="http://www.mogoroom.com:80/queryArticle_85.html" target="_blank">活动招募∣ 请你跳爱的华尔兹</a></li>

                </ul>
            </div>
            <div class="scrollBtn">
                <span id="btn1"></span>
                <span id="btn2"></span>
            </div>
        </div>
    </div>
    <div class="hot">
        <ul>
            <?php $ad = $c->getAd(106); ?>
            <?php
            $i = 0;
            foreach ($ad as $k => $v) {
                ?>
                <?php if ($i == 0) { ?>
                    <li><span><i></i></span><h2><?php echo $v['ad_title']; ?></h2><?php echo $v['ad_words'] ?></li>
                <?php } else { ?>
                    <li class="<?php echo("ho" . $i); ?>"><span><i></i></span><h2><?php echo $v['ad_title']; ?></h2><?php echo $v['ad_words'] ?></li>
                <?php
                }
                $i++;
                ?>
            <?php } ?>
        </ul>
    </div>
    <div class="home" style="height: 873px;overflow: visible;position: relative;">
        <div class="title">
<?php $area = $c->getAdArea(107); ?>
            <h2><?php echo $area['area_name']; ?></h2>
            <p><?php echo $area['remark']; ?></p>
        </div>
        <div class="homein">
            <?php $r = $c->getArea(4);?>
            <div class="homepic pic1" style="overflow:hidden"> 
                <a href="<?php echo $r["url"];?>"><img src="<?php echo $r["area_logo"];?>" alt="">
                    <div class="mask">
                        <div class="ma">
                            <h3><?php echo $r["title"]?></h3>
                            <i></i>
                            <?php echo $r["area_html"];?>
                        </div>

                    </div>
                </a> 
            </div>
            <?php $r = $c->getArea(5);?>
            <div class="homepic pic2" style="overflow:hidden"> 
                <a href="<?php echo $r["url"];?>"><img src="<?php echo $r["area_logo"];?>" alt="">
                    <div class="mask">
                        <div class="ma">
                            <h3><?php echo $r["title"]?></h3>
                            <i></i>
                            <?php echo $r["area_html"];?>
                        </div>
                    </div>
                </a> 
            </div>
            <?php $r = $c->getArea(6);?>
            <div class="homepic pic3" style="overflow:hidden"> 
                <a href="<?php echo $r["url"];?>"><img src="<?php echo $r["area_logo"];?>" alt="">
                    <div class="mask">
                        <div class="ma m1">
                            <h3><?php echo $r["title"]?></h3>
                            <i></i>
                            <?php echo $r["area_html"];?>
                        </div>
                    </div>
                </a> 
            </div>
            <?php $r = $c->getArea(7);?>
            <div class="homepic pic4" style="overflow:hidden"> 
                <a href="<?php echo $r["url"];?>"><img src="<?php echo $r["area_logo"];?>" alt="">
                    <div class="mask">
                        <div class="ma m1">
                            <h3><?php echo $r["title"]?></h3>
                            <i></i>
                            <?php echo $r["area_html"];?>
                        </div>
                    </div>
                </a> 
            </div>
            <?php $r = $c->getArea(8);?>
            <div class="homepic pic5" style="overflow:hidden"> 
                <a href="<?php echo $r["url"];?>"><img src="<?php echo $r["area_logo"];?>" alt="">
                    <div class="mask">
                        <div class="ma m1">
                            <h3><?php echo $r["title"]?></h3>
                            <i></i>
                            <?php echo $r["area_html"];?>
                        </div>
                    </div>
                </a> 
            </div>
        </div>
    </div>
    <div class="home custom">
        <div class="title">
        <?php $area = $c->getAdArea(108); ?>
            <h2><?php echo $area['area_name']; ?></h2>
            <p><?php echo $area['remark']; ?></p>
        </div>
        <div class="customin cu-show" style="position: relative; padding:0px;">
            <div id="marquee" style="margin: 0px auto; width:1098px; height:440px; ">
                
                <ul  style="padding:100px 0; ">
                    <?php $l = $c->getList(6,3);?>
                    <?php foreach ($l["list"] as $k => $v){?>
                    <li>
                        <div class="cu5">
                            <img src="<?php echo $v["img_url"];?>" alt="">
                            <i></i>
                            <h3><?php echo $v["title"];?></h3>
                            <p><?php echo $v["desc"];?>....</p>
                            <a href="<?php echo $v["surl"];?>" class="more cu2">阅读全文</a>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="control"><a href="javascript:void(0);" id="goL"></a> <a href="javascript:void(0);" id="goR"></a></div>
        </div>    	             
    </div>
    <div class="home">
        <div class="title">
        <?php $area = $c->getAdArea(109); ?>
            <h2><?php echo $area['area_name']; ?></h2>
            <p><?php echo $area['remark']; ?></p>
        </div>
        <div class="customin cu3">
            <?php $l = $c->getList(9,3);?>
            <?php foreach ($l["list"] as $k => $v){?>
            <div class="cu4 <?php echo $k == 2 ? "c-r" : "";?>">
                <a target="_blank" href="<?php echo $v["surl"];?>"><img src="<?php echo $v["img_url"];?>" alt="<?php echo $v["title"];?>"></a>
            </div>
            <?php }?>
            </div>        
        </div>    
    </div>
<?php $c->loadView("front/qingcaitao/inc.footer.php"); ?>
</body>

</html>
