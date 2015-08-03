<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="keywords" content="<?php echo $keyword;?>"/>
        <meta name="description" content="<?php echo $keyword;?>"/>
        <title><?php echo $keyword?>-<?php echo $c->getItem('site_name');?></title>
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
                    <h2 class="con" title="搜索公众号">
                        <span class="title-bg iconSprite"></span>搜索公众号
                    </h2>
                    
                </div>
                
                <?php foreach($list['list'] as $k => $v){?>
                <?php echo $k%2 == 0? '<ul class="app-list clearfix">' : ""; ?>
                    <?php if($k%2 == 0){?>
                    <li class="first list-li">
                        <div class="border-out-2"></div>
                        <div class="list-in">
                            <div class="list-left">
                                <a href="<?php echo $v['surl'];?>" target="_blank" class="app-img-out" title="<?php echo $v['num'];?>">
                                    <i class="iconSprite-2 sign sign-2"></i>
                                    <img class="app-img" src="<?php echo FILEHOST.$v['logo']; ?>"  o-src="" alt="<?php echo $v['num'];?>"/>
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
                                        <?php $r = explode(".", $v['recommend']);?>
                                        <span class="big"><?php echo isset($r[0])? $r[0]: 0;?></span>.
                                        <span class="small"><?php echo isset($r[1])? $r[1]: 1;?></span>
                                    </span>

                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="iconSprite " onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                                </div>

<!--                                <div class="tem-d">

                                    <i class="tem iconSprite"></i><span class="red">47℃</span>

                                </div>-->
                                <p class="g-name">
                                    <a href="<?php echo $v['surl'];?>" target="_blank" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
                                </p>
                                <p class="g-desc">

                                    <a href="<?php echo $v['surl'];?>"
                                       title="<?php echo $v['cate'];?>" target="_blank"><?php echo $v['cate']?></a>

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
                                        <?php $r = explode(".", $v['recommend']);?>
                                        <span class="big"><?php echo isset($r[0])? $r[0]: 0;?></span>.
                                        <span class="small"><?php echo isset($r[1])? $r[1]: 1;?></span>
                                    </span>

                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="iconSprite " onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
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
<!--                        <p class="game-cate">公众号类型</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">
                                <?php foreach($c->type as $pt){ ?>
                                <li class='first <?php $c->getData('type') == $pt ? "cur" : "";?>'>

                                    <a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="<?php echo $pt;?>"><?php echo $pt;?></a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>-->

                        <p class="game-cate">标签</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">
                                <li class='first cur'><a href="" title="公众号标签">全部</a></li>
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
        <?php $c->loadView("front/public/login.nav.php");?>

        <div class="ft">

            <?php $c->loadView("front/public/footer.php");?>
        </div>
    </body>
</html>