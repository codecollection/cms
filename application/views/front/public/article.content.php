
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="mobile-agent" content="format=xhtml; url=http://a.d.cn/game/59398/" />

        <link type="application/rss+xml" href="http://android.d.cn/rss/game.xml" rel="alternate"  title="Android手机游戏免费下载 Android手机软件下载 Android智能门户_当乐网"/>
        <link type="image/x-icon" rel="shortcut icon" href="http://www.d.cn/favicon.ico"/>
        <meta name="keywords" content="密室怨魂,密室怨魂安卓版下载,House of Grudge" />

        <meta name="description" content="当乐密室怨魂专区，为您提供密室怨魂安卓版下载,攻略、评测、视频、礼包等内容。《密室怨魂 House of Grudge》是2015年即将面世的这款恐怖游戏将让你欲罢不能！解开机关和谜团，揭露神秘房间内隐藏的秘密。每个房间暗藏的秘密，将把你引向唯一的真相！ 你准备好接受挑战、直" />
        <title>小肉粽_公众号推广平台_小肉粽</title>
        <link rel="canonical" href=""/>
        <?php $c->loadView("front/public/header.php"); ?>
        <link href="<?php echo CSSHOST;?>/style/front/public/css/detail.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        
        <!--topNav:begin-->
    <?php $c->loadView("front/public/navtop.php"); ?>
    <!--sitenave e-->        
        <?php $c->loadView("front/public/content.nav.php"); ?>
        <div class="content">

            <p class="bread">
                <i></i>
                您的位置：<a href="http://android.d.cn/" title="安卓首页">首页</a><span>&gt;</span>
                <a href="http://android.d.cn/game/" title="安卓游戏">Android安卓游戏</a><span>&gt;</span>
                <a href="http://android.d.cn/game/59398.html" title="密室怨魂(含数据包)">密室怨魂(含数据包)</a>
            </p>

            

            <div class="de-col clearfix">
                <div class="col-l">

                    <div class="de-head clearfix no-tag">
                <div class="de-head-l">

                    <h1><?php echo $d['title'];?></h1>

                    <h2 class="de-app-en"><?php //echo $c->getCate($d['last_cate_id'])['cname'];?>&nbsp;</h2>
                    <img src="<?php echo $d['img_url']?>" alt="<?php echo $d['title'];?>" class="de-app-icon" style="height:175px;width: 250px;overflow: hidden;"/>
                    <div class="de-app-des">
                        <p class="de-edit" style="max-width:500px;line-height:30px;"><?php echo empty($d["desc"]) ? RKit::utf8_substr(strip_tags($d["body"]),0, 120) : $d["desc"];?><i></i></p>

                        <div class="clearfix"></div>

                        <div class="de-collect">
                            <a href="javascript:;" title="" onclick="Coll.coll(this, 1, 59398, true);" class="de-co-item de-like  clearfix">
                                <div class="de-co-outer clearfix">
                                    <span class="de-co-icon de-icon-focus"></span>
                                    <span class="de-co-text">喜欢</span>
                                </div>
                                <span class="de-co-num" id="coNum">
                                    0                                </span>
                            </a>
                            <a href="#pinglun" title="" class="de-co-item de-comm">
                                <div class="de-co-outer">
                                    <span class="de-co-icon de-icon-com"></span>
                                    <span class="de-co-text">评论</span>
                                </div>
                                <span class="de-co-num" id="comNum">0</span>
                            </a>

                        </div>
                    </div>
                </div>
                
            </div>
                    <div class="module de-shot">
                        <div class="module-head">
                            <h2 class="module-tit"><i></i><?php echo $d['title']?>图集</h2>

                        </div>
                        <div class="module-cont">

                            <div id="snapShotWrap" class="snapShotWrap">
                                <a id="shotNext" class="snap-shot-btn next" title="下一张" href="javascript:void(0);">
                                    <i></i>
                                </a>
                                <a id="shotPrev" class="snap-shot-btn prev" title="上一张" href="javascript:void(0);">
                                    <i></i>
                                </a>
                                <div class="snapShotCont">

                                    <div class="snopshot" id="snopshot1">
                                        <img src="http://img8.android.d.cn/android/new/game_image/98/59398/w1.jpg" alt="密室怨魂(含数据包)_截图" />
                                        <span class="elementOverlay"></span>
                                    </div>

                                    <div class="snopshot" id="snopshot2">
                                        <img src="http://img8.android.d.cn/android/new/game_image/98/59398/w2.jpg" alt="密室怨魂(含数据包)_截图" />
                                        <span class="elementOverlay"></span>
                                    </div>

                                    <div class="snopshot" id="snopshot3">
                                        <img src="http://img8.android.d.cn/android/new/game_image/98/59398/w3.jpg" alt="密室怨魂(含数据包)_截图" />
                                        <span class="elementOverlay"></span>
                                    </div>

                                    <div class="snopshot" id="snopshot4">
                                        <img src="http://img8.android.d.cn/android/new/game_image/98/59398/w4.jpg" alt="密室怨魂(含数据包)_截图" />
                                        <span class="elementOverlay"></span>
                                    </div>

                                    <div class="snopshot" id="snopshot5">
                                        <img src="http://img8.android.d.cn/android/new/game_image/98/59398/w5.jpg" alt="密室怨魂(含数据包)_截图" />
                                        <span class="elementOverlay"></span>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="module">
                        <div class="module-head">
                            <h2 class="module-tit"><i></i><?php echo $d['title']?>内容</h2>

                        </div>
                        <div class="module-cont">
                            <div class="de-intro-wrap">
                                <?php echo $d['body'];?> 
                            </div>
                        </div>
                    </div>
                    <div class="module com-wrap" id="comCont" name="pinglun">
                        <!-- 多说评论框 start -->
                            <div class="ds-thread" data-thread-key="<?php echo $d['model_id']."-".$d['cms_info_list_id']?>" data-title="<?php echo $d['title']?>" data-url="<?php echo $c->selfUrl;?>"></div>
                    <!-- 多说评论框 end -->
                    <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
                    <script type="text/javascript">
                    var duoshuoQuery = {short_name:"xiaorouzong"};
                            (function() {
                                    var ds = document.createElement('script');
                                    ds.type = 'text/javascript';ds.async = true;
                                    ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                                    ds.charset = 'UTF-8';
                                    (document.getElementsByTagName('head')[0] 
                                     || document.getElementsByTagName('body')[0]).appendChild(ds);
                            })();
                            </script>
                    <!-- 多说公共JS代码 end -->
                    </div>

                </div>


                <div class="col-r">
                    <!--游戏信息 b-->
<!--                    <div class="module">
                        <div class="module-head">
                            <h3 class="module-tit"><i></i>游戏信息</h3>
                        </div>
                        <div class="module-cont">
                            <ul class="de-game-info clearfix">
                                <li class="de-game-firm"><span>类型</span>
                                    <a href="" target="_blank" title="服务号">服务号</a>
                                </li>

                                <li><span>行业</span><span class="ov">互联网</span></li>

                                <li><span>时间</span>2015-07-11</li>

                                <li class="de-star">
                                    <span>星级</span>
                                    <span class="star star-grey">
                                        <span class="star star-light stars-3"></span>
                                    </span>
                                </li>


                                <li class="" style="float:right"><span>语言</span>汉语</li>

                                <li class="">
                                    <span>热度</span>
                                    3                                </li>

                                <li class="clear de-game-firm">
                                    <span>商家</span>

                                    <a title="Gameday Inc.安卓游戏大全" target="_blank" href="http://android.d.cn/vendor/gameday_inc.html">小肉粽 </a>

                                </li>

                            </ul>

                            <a href="javascript:void(0)" id='jubao' jubaoId="59398" jubaoType="1">一键举报</a>

                        </div>
                    </div>-->

                    <div class="module">
                        <div class="module-head">
                            <h2 class="module-tit"><i></i>标签</h2>
                        </div>
                        <div class="de-tag-wrap clear module-tit-r">
                            <?php if(!empty($d['tag'])){?>
                            <?php $tags = explode(",", $d['tag']);?>
                            <?php foreach($tags as $tag){?>
                            <?php if(!empty($tag)){?>
                            <a href="/info/l?tag=<?php echo $tag?>" title="<?php echo $tag?>" class="de-tag" target="_blank">
                                <span><?php echo $tag;?></span>
                            </a>
                            <?php }?>
                            <?php }?>
                            <?php }?>
                        </div>
                    </div>

                    <!--游戏信息 e-->
                    
                    <div class="module">
                        <div class="module-head">
                            <h3 class="module-tit">
                                <?php $area = $c->getArea(7); ?>
                                <a title="<?php echo $area["title"]; ?>" target="_blank" href=""> <i></i>
                                    <?php echo $area["title"]; ?>
                                </a>
                            </h3>
                        </div>
                        <div class="module-cont">
                            <ul class="sim-app">
                                <?php foreach ($area['list'] as $k => $v) { ?>
                                    <li>
                                        <a href="<?php echo $v['surl']; ?>" title="<?php echo $v['num']; ?>" target="_blank" class="de-set-icon">
                                            <img src="<?php echo $v['logo']; ?>" o-src="" alt="<?php echo $v['num']; ?>" />
                                        </a>
                                        <div class="sim-des">
                                            <p class="sim-class"><?php echo $v['owner']; ?></p>
                                            <a href="<?php echo $v['surl']; ?>" title="<?php echo $v['num']; ?>" class="de-set-tit"><?php echo $v['num']; ?></a>

                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="module">
                        <div class="module-head">
                            <h3 class="module-tit"><i></i>猜你喜欢</h3>
                        </div>
                        <div class="module-cont">
                            <ul class="sim-app">

                                <li>
                                    <a href="http://android.d.cn/game/59097.html" target="_blank" title="逃脱游戏: 咒巢" class="de-set-icon">
                                        <img src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/transparent.gif" o-src="http://img4.android.d.cn/android/new/game_image/97/59097/icon.png" alt="逃脱游戏: 咒巢"/>
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">冒险解谜</p>
                                        <a href="http://android.d.cn/game/59097.html" target="_blank" title="逃脱游戏: 咒巢"  class="de-set-tit">逃脱游戏: 咒巢</a>

                                    </div>
                                </li>

                                <li>
                                    <a href="http://android.d.cn/game/54638.html" target="_blank" title="即插即用" class="de-set-icon">
                                        <img src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/transparent.gif" o-src="http://img9.android.d.cn/android/new/game_image/38/54638/icon.png" alt="即插即用"/>
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">冒险解谜</p>
                                        <a href="http://android.d.cn/game/54638.html" target="_blank" title="即插即用"  class="de-set-tit">即插即用</a>

                                    </div>
                                </li>

                                <li>
                                    <a href="http://android.d.cn/game/19226.html" target="_blank" title="逃脱本色:门和房间(含数据包)" class="de-set-icon">
                                        <img src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/transparent.gif" o-src="http://img3.android.d.cn/android/new/game_image/26/19226/icon.png" alt="逃脱本色:门和房间(含数据包)"/>
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">冒险解谜</p>
                                        <a href="http://android.d.cn/game/19226.html" target="_blank" title="逃脱本色:门和房间(含数据包)"  class="de-set-tit">逃脱本色:门和房间(含数据包)</a>

                                    </div>
                                </li>

                                <li>
                                    <a href="http://android.d.cn/game/22853.html" target="_blank" title="灵魂穿越者:柏树女巫的诅咒完整版(含数据包)" class="de-set-icon">
                                        <img src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/transparent.gif" o-src="http://img3.android.d.cn/android/new/game_image/53/22853/icon.png" alt="灵魂穿越者:柏树女巫的诅咒完整版(含数据包)"/>
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">冒险解谜</p>
                                        <a href="http://android.d.cn/game/22853.html" target="_blank" title="灵魂穿越者:柏树女巫的诅咒完整版(含数据包)"  class="de-set-tit">灵魂穿越者:柏树女巫的诅咒完整版(含数据包)</a>

                                    </div>
                                </li>

                                <li>
                                    <a href="http://android.d.cn/game/49014.html" target="_blank" title="正常的大冒险" class="de-set-icon">
                                        <img src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/transparent.gif" o-src="http://img1.android.d.cn/android/new/game_image/14/49014/icon.png" alt="正常的大冒险"/>
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">冒险解谜</p>
                                        <a href="http://android.d.cn/game/49014.html" target="_blank" title="正常的大冒险"  class="de-set-tit">正常的大冒险</a>

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="msg">
        </div>
        
        <!--登录弹出框 b-->
        <?php $c->loadView("front/public/login.nav.php");?>
        <div class="ft">
            <?php $c->loadView("front/public/footer.php");?>
        </div>
    </body>
</html>