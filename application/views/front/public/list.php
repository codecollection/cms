<!DOCTYPE html>
<html lang="en">
    <head>
        <link type="application/rss+xml" href="http://android.d.cn/rss/game.xml" rel="alternate"
              title="Android手机游戏免费下载 Android手机软件下载 Android智能门户_当乐网"/>
        <meta name="keywords" content="最新安卓游戏,安卓最新游戏"/>
        <meta name="description" content="最新安卓游戏免费下载_安卓最新游戏_第1页_当乐网"/>
        <title>最新安卓游戏免费下载_安卓最新游戏_第1页_当乐网</title>
        <?php $c->loadView("front/public/header.php"); ?>
        <link rel="stylesheet" href="/style/front/public/css/list.css"/>
        <script>
             $(function () {
                $('.app-list li').hover(function () {
                    $(this).addClass('curr');
                }, function () {
                    $(this).removeClass('curr');
                });
            });
        </script>
    </head>

    <body>
        <?php $c->loadView("front/public/navtop.php");?>
        <?php $c->loadView("front/public/nav.php");?>
        <div class="content clearfix">
            <div class="left">
                <div class="list-title clearfix" style="padding-left:0">
                    <h2 class="con" title="安卓游戏">
                        <span class="title-bg iconSprite"></span>安卓游戏
                    </h2>
                    <ul class="list-title-tabs clearfix">
                        <li class="now">
                            <a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓最近更新游戏">最近更新</a>
                        </li>
                        <li >
                            <a href="http://android.d.cn/game/list_15_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓新品游戏">新品</a>
                        </li>
                        <li >
                            <a href="http://android.d.cn/game/list_2_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓最热游戏">最热</a>
                        </li>
                        <li >
                            <a href="http://android.d.cn/game/list_3_1_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓大型游戏">大型</a>
                        </li>
                        <li >
                            <a href="http://android.d.cn/game/list_4_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓五星游戏">五星</a>
                        </li>
                        <li >
                            <a href="http://android.d.cn/game/list_5_1_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓破解修改游戏">破解</a>
                        </li>
                        <li >
                            <a href="http://android.d.cn/game/list_16_1_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓汉化游戏">汉化</a>
                        </li>
                        <li >
                            <a href="http://android.d.cn/game/yugao/" title="安卓游戏预告_安卓游戏发布时间表">新游预告</a>
                        </li>
                    </ul>
                </div>
                <?php $list = $c->getList(1,30);?>
                <?php foreach($list['list'] as $k => $v){?>
                <?php echo $k%2 == 0? '<ul class="app-list clearfix">' : ""; ?>
                    <?php if($k%2 == 0){?>
                    <li class="first list-li">
                        <div class="border-out-2"></div>
                        <div class="list-in">
                            <div class="list-left">
                                <a href="<?php echo $v['surl'];?>" target="_blank" class="app-img-out" title="<?php echo $v['num'];?>">
                                    <i class="iconSprite-2 sign sign-2"></i>
                                    <img class="app-img" src="<?php echo FILEHOST.$v['logo']; ?>"  o-src="http://img8.android.d.cn/android/new/game_image/98/59398/icon.png" alt="<?php echo $v['num'];?>"/>
                                </a>
<!--                                <div class="app-v">
                                    <div class="star-bg iconSprite">
                                        <div class="stars iconSprite stars-4"></div>
                                    </div>

                                    <p class="update-time">刚刚<i class="up-icon-1 iconSprite"></i></p>

                                </div>-->
                                <div class="app-h">

                                    <a href="javascript:void(0);" title="<?php echo $v['num'];?>" class="down-btn" onclick="Adapt.adaptDown(this, 1, 59398)">立即关注</a>

                                </div>
                            </div>
                            <div class="list-right">

                                <div class="mark mark-s1" style="display:block">

                                    <span class="red">
                                        <span class="big">7</span>.
                                        <span class="small">5</span>
                                    </span>

                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="iconSprite " onclick="Coll.coll(this, 1, 59398);"></a>
                                </div>

<!--                                <div class="tem-d">

                                    <i class="tem iconSprite"></i><span class="red">47℃</span>

                                </div>-->
                                <p class="g-name">
                                    <a href="<?php echo $v['surl'];?>" target="_blank" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
                                </p>
                                <p class="g-desc">

                                    <a href="<?php echo $v['surl'];?>"
                                       title="安卓冒险解谜" target="_blank"><?php echo $v['cate']?></a>

                                </p>
                                <p class="g-detail">

                                    <span><?php echo date("m-d",$v['cdate']);?></span> | <?php echo $v['owner'];?>
                                </p>
                                <p class="down-ac"><?php echo $c->type[$v['type']];?></p>
                                <p class="g-intro">

                                    <span class="g-cp"><?php echo $v['comment'];?>
                                    </span>

                                </p>
                            </div>
                        </div>

                    </li>
                    <?php }else{?>
                    <li class="list-li">

                        <div class="border-out-2"></div>
                        <div class="list-in">
                            <div class="list-left">
                                <a href="<?php echo $v['surl'];?>" target="_blank" class="app-img-out" title="<?php echo $v['num'];?>">
                                    <i class="iconSprite-2 sign sign-1"></i>
                                    <img class="app-img" src="<?php echo FILEHOST.$v['logo']; ?>"  o-src="http://img6.android.d.cn/android/new/game_image/9/14009/icon.png" alt="<?php echo $v['num'];?>"/>
                                </a>
<!--                                <div class="app-v">
                                    <div class="star-bg iconSprite">
                                        <div class="stars iconSprite stars-5"></div>
                                    </div>

                                    <p class="update-time">刚刚<i class="up-icon-1 iconSprite"></i></p>

                                </div>-->
                                <div class="app-h">

                                    <a href="javascript:void(0);" title="<?php echo $v['num'];?>" class="down-btn" onclick="Adapt.adaptDown(this, 1, 14009)">立即关注</a>

                                </div>
                            </div>
                            <div class="list-right">

                                <div class="mark mark-s1" style="display:block">

                                    <span class="red">
                                        <span class="big">8</span>.
                                        <span class="small">1</span>
                                    </span>

                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="iconSprite " onclick="Coll.coll(this, 1, 14009);"></a>
                                </div>

<!--                                <div class="tem-d">

                                    <i class="tem iconSprite"></i><span class="red">69℃</span>

                                </div>-->
                                <p class="g-name">
                                    <a href="<?php echo $v['surl'];?>" target="_blank" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
                                </p>
                                <p class="g-desc">

                                    <a href="<?php echo $v['surl'];?>"
                                       title="<?php echo $v['cate']?>" target="_blank"><?php echo $v['cate']?></a>

                                </p>
                                <p class="g-detail">

                                    <span><?php echo date("m-d",$v['cdate']);?></span> | <?php echo $v['owner'];?>
                                </p>
                                <p class="down-ac"><?php echo $c->type[$v['type']];?></p>
                                <p class="g-intro">

                                    <span class="g-cp"><?php echo $v['comment'];?>
                                    </span>

                                </p>
                            </div>
                        </div>

                    </li>
                    <?php }?>
                <?php echo $k%2 == 1? '</ul>' : ""; ?>
                <?php }?>
                </ul>

                <div class="clearfix"></div>
                <div class="page">
                    <?php echo $list['pagecode'];?>
                </div>

<!--                <div class="page">
                    <span class="curr">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a><a href="">6</a><a href="">7</a><a href="">下一页</a><a href="">末页</a>
                </div>-->
            </div>


            <div class="right">
                <div class="right-div">
                    <div class="list-title clearfix">
                        <h2 class="con" title="公众号筛选"><span class="title-bg iconSprite"></span>公众号筛选</h2>
                    </div>
                    <div class="div-out">
                        <p class="game-cate">公众号类型</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">
                                <?php foreach($c->type as $pt){ ?>
                                <li class='first <?php $c->getData('type') == $pt ? "cur" : "";?>'>

                                    <a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="<?php echo $pt;?>"><?php echo $pt;?></a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>

                        <p class="game-cate">标签</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">
                                <li class='first cur'><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="公众号标签">全部</a></li>
                                <?php $tags = $c->getTag(); ?>
                                <?php foreach($tags as $tag){?>
                                <li ><a href="/info/l?tag=<?php echo $tag["tag"];?>" title="公众号<?php echo $tag["tag"];?>"><?php echo $tag["tag"];?></a></li>
                                <?php }?>
                            </ul>
                        </div>
<!--                        <p class="game-cate">游戏大小</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">

                                <li class='first cur'><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓游戏大小">全部</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_1_0_0_0_0_0_1_0.html" title="0-50M安卓游戏">0-50M</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_2_0_0_0_0_0_1_0.html" title="50M-100M安卓游戏">50M-100M</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_3_0_0_0_0_0_1_0.html" title="100M-300M安卓游戏">100M-300M</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_4_0_0_0_0_0_1_0.html" title="300M-500M安卓游戏">300M-500M</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_5_0_0_0_0_0_1_0.html" title="500M-1G安卓游戏">500M-1G</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_6_0_0_0_0_0_1_0.html" title="1G以上安卓游戏">1G以上</a></li>

                            </ul>
                        </div>-->
<!--                        <p class="game-cate">上线时间</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">

                                <li class='first cur'><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓游戏上线时间">全部</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_1_0_0_0_0_1_0.html" title="2015年安卓游戏">2015年</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_2_0_0_0_0_1_0.html" title="2014年安卓游戏">2014年</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_3_0_0_0_0_1_0.html" title="2013年安卓游戏">2013年</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_4_0_0_0_0_1_0.html" title="2012年安卓游戏">2012年</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_-1_0_0_0_0_1_0.html" title="更早安卓游戏">更早</a></li>

                            </ul>
                        </div>-->
<!--                        <p class="game-cate">谷歌市场</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">
                                <li class='first cur'><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓游戏谷歌市场">全部</a></li>
                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_1_0_0_0_1_0.html" title="不需要谷歌市场安卓游戏">不需要</a></li>
                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_64_0_0_0_1_0.html" title="需要谷歌市场安卓游戏">需要</a></li>
                            </ul>
                        </div>-->
                        
                    </div>
                </div>

                <div class="right-div">
                    <?php $area = $c->getArea(12);?>
                    <div class="list-title clearfix">
                        <h2 class="con" title="<?php echo $area["title"];?>"><span class="title-bg iconSprite"></span><?php echo $area["title"];?></h2>
                    </div>
                    <ul class="recom-list"> 
                        <?php foreach($area['list'] as $k => $v){?>
                        <li class="right-ul-bd">                        
                            <div class="recom-detail">                            
                                <a class="recom-name" target="_blank" title="<?php echo $v['num'];?>" href="<?php echo $v['surl'];?>"><?php echo $v['num'];?></a>                      
                                <div class="star-bg iconSprite">                                
                                    <div class="stars iconSprite stars-4"></div>                            
                                </div>                            
                                <p class="recom-lx"><?php echo $v['owner'];?></p>                     
                            </div>                   
                            <a class="recom-img" target="_blank" title="<?php echo $v['num'];?>" href="<?php echo $v['surl'];?>">                           
                                <span class="li-img-out" style="font-style: italic;"></span>                          
                                <img class="game-img-2"  src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>" title="<?php echo $v['num'];?>" /> 
                            </a>                    
                        </li>
                        <?php }?>
                    </ul>
                </div>


                <div class="right-div list-img">
                    <?php $ads = $c->getAd(101);?>
                    <?php foreach($ads as $ad){?>
                    <a href="<?php echo $ad['ad_url'];?>" title="<?php echo $ad['ad_title'];?>" target="_blank"><img src="<?php echo $ad['ad_img'];?>" alt="<?php echo $ad['ad_title'];?>" /></a>
                    <?php }?>
                </div>


            </div>

        </div>

        <!--登录弹出框 b-->
        <div class="adapt-cont" id="baseLog">
            <h2>
                <a href="javascript:void(0)" id="baseLogC" title="关闭">
                    <span></span>
                </a>
                <i></i>
                登录
            </h2>
            <p class="adapt-success adapt-success-special"><img src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/transparent.gif" o-src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/bear.jpg" alt="" />登录后才能喜欢哦！</p>
            <a href="" title="立即登录" class="log-now">立即登录</a>
        </div>
        <!--登录弹出框 e-->
        <div class="overlay" id="overlay"></div>
        <a id="toTop" title="返回顶部" target="_self" href="javascript:void(0)"><i></i></a>

        <div class="ft">

            <?php $c->loadView("front/public/footer.php");?>
        </div>
    </body>
</html>