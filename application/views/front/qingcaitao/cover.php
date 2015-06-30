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
            <div class="homepic pic1"> 
                <a href="http://www.mogoroom.com:80/goMap.html#2"><img src="http://image.mogoroom.com//imagefile/website/index/homepic1.jpg" alt="">
                    <div class="mask">
                        <div class="ma">
                            <h3>绿色乡村</h3>
                            <i></i>
                            你有你的闪耀，我有我的小清新，体验清<br>新雅致生活，缓解一天疲劳
                        </div>

                    </div>
                </a> 
            </div>
            <div class="homepic pic2"> 
                <a href="http://www.mogoroom.com:80/goMap.html#1"><img src="http://image.mogoroom.com//imagefile/website/index/homepic2.jpg" alt="">
                    <div class="mask">
                        <div class="ma">
                            <h3>蓝色波普</h3>
                            <i></i>
                            面向大海，拥抱生活给你的好与坏，享受<br>如水般平静生活，波澜不惊
                        </div>
                    </div>
                </a> 
            </div>
            <div class="homepic pic3"> 
                <a href="http://www.mogoroom.com:80/goMap.html#3"><img src="http://image.mogoroom.com//imagefile/website/index/homepic3.jpg" alt="">
                    <div class="mask">
                        <div class="ma m1">
                            <h3>棕色爵士</h3>
                            <i></i>
                            低调的小资，午后，一杯咖啡的浓情，就<br>是你定义的温情和可靠
                        </div>
                    </div>
                </a> 
            </div>
            <div class="homepic pic4"> 
                <a href="http://www.mogoroom.com:80/goMap.html#4"><img src="http://image.mogoroom.com//imagefile/website/index/homepic4.jpg" alt="">
                    <div class="mask">
                        <div class="ma m1">
                            <h3>金色维也纳</h3>
                            <i></i>
                            明亮的暖调，浪漫的气息，是个性闪耀的<br>你，定义空间里的美妙光线
                        </div>
                    </div>
                </a> 
            </div>
            <div class="homepic pic5"> 
                <a href="http://www.mogoroom.com:80/goMap.html#2"><img src="http://image.mogoroom.com//imagefile/website/index/homepic5.jpg" alt="">
                    <div class="mask">
                        <div class="ma m1">
                            <h3>绿色乡村</h3>
                            <i></i>
                            你有你的闪耀，我有我的小清新，体验清<br>新雅致生活，缓解一天疲劳
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
                    <li>
                        <div class="cu5">
                            <img src="http://www.mogoroom.com:80/pages/imgs/lc.png" alt="">
                            <i></i>
                            <h3>蘑菇客-老仇</h3>
                            <p>周末的午后，阳光暖暖地透过阳台，洒在餐桌上，美女室友正吃着老仇做的牛油果奶油意大利面，而老仇则在一旁插花...</p>
                            <a href="http://www.mogoroom.com/queryArticle_86.html" class="more cu2">阅读全文</a>
                        </div>
                    </li>
                    <li>
                        <div class="cu5">
                            <img src="http://image.mogoroom.com//imagefile/website/index/czh.png" alt="">
                            <i></i>
                            <h3>蘑菇客-陈志豪</h3>
                            <p>90年出生，摩羯座，飞行员职业的陈志豪今年五月入住了蘑菇公寓，简单温馨的公寓生活让他这个空中飞人多了一份安定...</p>
                            <a href="http://www.mogoroom.com/queryArticle_7.html" class="more cu2">阅读全文</a>
                        </div>
                    </li>
                    <li>
                        <div class="cu5">
                            <img src="http://image.mogoroom.com//imagefile/website/index/hk.png" alt="">
                            <i></i>
                            <h3>蘑菇客-何况</h3>
                            <p>那天，日本的帅哥率性地从房间拿出小提琴，顺手拉了一曲生日快乐，让我和在场的寿星感动不已。那天我们打破了各自工作...</p>
                            <a href="http://www.mogoroom.com/queryArticle_43.html" class="more cu2">阅读全文</a>
                        </div>
                    </li>
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
            <div class="cu4">
                <a target="_blank" href="http://www.mogoroom.com/queryArticle_65.html"><img src="http://image.mogoroom.com//imagefile/website/index/img7.jpg" alt=""></a>
            </div>
            <div class="cu4">
                <a target="_blank" href="http://www.mogoroom.com/queryArticle_66.html"><img src="http://image.mogoroom.com//imagefile/website/index/img8.jpg" alt=""></a>
            </div>
            <div class="cu4 c-r">
                <a target="_blank" href="http://www.mogoroom.com/queryArticle_62.html"><img src="http://image.mogoroom.com//imagefile/website/index/img9.jpg" alt=""></a>
            </div>        
        </div>    
    </div>
<?php $c->loadView("front/qingcaitao/inc.footer.php"); ?>
</body>

</html>
