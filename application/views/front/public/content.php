<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="mobile-agent" content="format=xhtml; url=http://a.d.cn/game/59398/" />

        <link type="application/rss+xml" href="http://android.d.cn/rss/game.xml" rel="alternate"  title="Android手机游戏免费下载 Android手机软件下载 Android智能门户_当乐网"/>
        <link type="image/x-icon" rel="shortcut icon" href="http://www.d.cn/favicon.ico"/>
        <meta name="keywords" content="密室怨魂,密室怨魂安卓版下载,House of Grudge" />

        <meta name="description" content="当乐密室怨魂专区，为您提供密室怨魂安卓版下载,攻略、评测、视频、礼包等内容。《密室怨魂 House of Grudge》是2015年即将面世的这款恐怖游戏将让你欲罢不能！解开机关和谜团，揭露神秘房间内隐藏的秘密。每个房间暗藏的秘密，将把你引向唯一的真相！ 你准备好接受挑战、直" />
        <title><?php echo $d["num"]; ?>_公众号推广平台_小肉粽</title>
        <link rel="canonical" href=""/>
        <?php $c->loadView("front/public/header.php"); ?>
        <link href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE ?>/css/detail.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="/style/libs/comment.js"></script>
    </head>
    <body>

        <!--topNav:begin-->
        <?php $c->loadView("front/public/navtop.php"); ?>
         <?php $c->loadView("front/public/content.nav.php"); ?>
        <div class="content">

            <p class="bread">
                <i></i>
                您的位置：<a href="http://android.d.cn/" title="安卓首页">首页</a><span>&gt;</span>
                <a href="http://android.d.cn/game/" title="安卓游戏">Android安卓游戏</a><span>&gt;</span>
                <a href="http://android.d.cn/game/59398.html" title="密室怨魂(含数据包)">密室怨魂(含数据包)</a>
            </p>

            <div class="de-head clearfix no-tag">
                <div class="de-head-l">

                    <h1><?php echo $d["num"]; ?></h1>

                    <h2 class="de-app-en"><?php echo $d["owner"]; ?>&nbsp;</h2>
                    <img src="<?php echo FILEHOST . $d['logo']; ?>" alt="<?php echo $d["num"]; ?>" class="de-app-icon"/>
                    <div class="de-app-des">
                        <p class="de-edit"><?php echo $d['comment']; ?><i></i></p>

                        <ul class="de-app-tip clearfix">

                            <!--                            <li>
                                                            <i class="no-ad"></i>无广告
                                                        </li>
                                                        <li>
                                                            <i class="no-Net"></i>不需要网络
                                                        <li>
                            
                                                            <i class="no-google"></i>不需要<a href="http://android.d.cn/game/33896.html" title="谷歌市场" target="_blank">谷歌市场</a>
                            
                                                        <li>
                                                            <i class="detail-dpk"></i>DPK
                                                        <li>
                                                            <i class="safe"></i>通过安全扫描</li>-->
                        </ul>

                        <div class="de-adapt-wrap" data-officialUrl=0 data-gather="top">

                            <div class="de-adapt" id="deAdapt">
                                <a href="javascript:;" title="" class="de-head-btn adapt-btn" onclick="Adapt.adapt(true, {rt: '1', ri: '59398', gather: 'top'});">立即下载</a>
                            </div>
                        </div>
                        <div class="de-collect">
                            <a href="javascript:;" title="" onclick="Action.doLike(<?php echo $d['cms_public_id'] ?>,<?php echo $d['model_id'] ?>,this);" class="de-co-item de-like  clearfix">
                                <div class="de-co-outer clearfix">
                                    <span class="de-co-icon de-icon-focus"></span>
                                    <span class="de-co-text">喜欢</span>
                                </div>
                                <span class="de-co-num" id="coNum">
                                    <?php echo $d["like"]; ?>
                                </span>
                            </a>
<!--                            <a href="#pinglun" title="" class="de-co-item de-comm">
                                <div class="de-co-outer">
                                    <span class="de-co-icon de-icon-com"></span>
                                    <span class="de-co-text">评论</span>
                                </div>
                                <span class="de-co-num" id="comNum"><?php echo $d["comments"]; ?></span>
                            </a>-->

                        </div>
                    </div>
                </div>
                <div class="de-head-r">
                    <div class="de-dimen" id="deDimen">
                        <img src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/dimenno.jpg" alt=""/>
                    </div>
                    <div class="de-dimen" id="deDimNo">
                        <img src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/dimenno.jpg" alt=""/>
                    </div>
                    <div class="de-dimen" id="deDimDpk">
                        <img  src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/dimendpk.jpg" alt=""/>
                        <p class="ptextcolor">请使用当乐游戏中心扫描下载</p>
                    </div>

                    <div class="de-score">
                        <?php $r = explode(".", $d['recommend']);?>
                        <span class="de-score-int"><?php echo isset($r[0])? $r[0]: 0;?></span>
                        <span class="de-score-dec">.<?php echo isset($r[1])? $r[1]: 1;?></span>
                    </div>

                </div>
            </div>

            <div class="de-col clearfix">
                <div class="col-l">
                    <div class="module de-shot">
                        <div class="module-head">
                            <h2 class="module-tit"><i></i><?php echo $d["num"]; ?>最近文章</h2>

                            </if>
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
                            <h2 class="module-tit"><i></i><?php echo $d["num"]; ?>简介</h2>

                        </div>
                        <div class="module-cont">
                            <div class="de-intro-wrap">

                                <div class="de-intro hide-cont" id="deIntro">
                                    <div class="de-intro-inner">
                                        <?php echo $d['body']; ?>
                                    </div>
                                </div>
                                <p class="intro-more"><a href="javascript:;" title="">展开+</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="module com-wrap" id="comCont" name="pinglun">
                        <div class="module-head">
                            <h2 class="module-tit"><i></i><?php echo $d["num"]; ?>评论<a name="pinglun" onclick="return false;"></a></h2>
                            <span class="module-help">已有<em id="comNum2"><?php echo $d["comments"]; ?></em>人发表评论</span>
                        </div>


                        <!--评论 b-->
                        
                        <div class="module-cont">
                            <!-- 多说评论框 start -->
                            <div class="ds-thread" data-thread-key="<?php echo $d['model_id']."-".$d['cms_public_id']?>" data-title="<?php echo $d['title']?>" data-url="<?php echo $c->selfUrl;?>"></div>
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
                </div>


                <div class="col-r">
                    <!--游戏信息 b-->
                    <div class="module">
                        <div class="module-head">
                            <h3 class="module-tit"><i></i>游戏信息</h3>
                        </div>
                        <div class="module-cont">
                            <ul class="de-game-info clearfix">
                                <li class="de-game-firm"><span>类型</span>
                                    <a href="" target="_blank" title="<?php echo $c->type[$d['type']]; ?>"><?php echo $c->type[$d['type']]; ?></a>
                                </li>

                                <li><span>行业</span><span class="ov"><?php echo $d['cate']; ?></span></li>

                                <li><span>时间</span><?php echo date('Y-m-d', $d['cdate']); ?></li>

                                <li class="de-star">
                                    <span>星级</span>
                                    <span class="star star-grey">
                                        <span class="star star-light stars-<?php echo $d['hot'] = $d['hot'] > 3 ? $v['hot'] : 3; ?>"></span>
                                    </span>
                                </li>


                                <li class="" style="float:right"><span>语言</span><?php echo $d['language']; ?></li>

                                <li class="">
                                    <span>热度</span>
                                    <?php echo $d['hot']; ?>
                                </li>

                                <li class="clear de-game-firm">
                                    <span>商家</span>

                                    <a title="Gameday Inc.安卓游戏大全" target="_blank" href="http://android.d.cn/vendor/gameday_inc.html"><?php echo $d['owner']; ?> </a>

                                </li>

                            </ul>

                            <a href="javascript:void(0)" id='jubao' jubaoId="59398" jubaoType="1">一键举报</a>

                        </div>
                    </div>

                    <div class="module">
                        <div class="module-head">
                            <h2 class="module-tit"><i></i>标签</h2>
                        </div>
                        <div class="de-tag-wrap clear module-tit-r">

                            <a href="http://android.d.cn/search/tag?keyword=%E8%A7%A3%E8%B0%9C" title="解谜" class="de-tag" target="_blank">
                                <span>解谜</span>
                            </a>

                        </div>
                    </div>

                    <!--游戏信息 e-->
                    <!--下载版本 ios b-->

                    <div class="module channel channel-ios">
                        <p class="ch-tit">此游戏同时为你提供了苹果版本</p>
                        <div class="ch-game">
                            <p class="ch-name">凶宅怨魂</p>
                            <a href="http://ios.d.cn/apps/-522693.html" target="_blank" title="凶宅怨魂iPhone版下载" class="ch-btn">下载苹果版</a>
                        </div>
                    </div>

                    <!--下载版本 ios e-->
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

            <?php $c->loadView("front/public/footer.php");?>>
        </div>
    </body>
</html>