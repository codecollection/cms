<!DOCTYPE html>
<html lang="en">
    <head>
        <link type="application/rss+xml" href="http://android.d.cn/rss/game.xml" rel="alternate"
              title="Android手机游戏免费下载 Android手机软件下载 Android智能门户_当乐网"/>

        <meta charset="utf-8"/>

        <meta name="keywords" content="最新安卓游戏,安卓最新游戏"/>
        <meta name="description" content="最新安卓游戏免费下载_安卓最新游戏_第1页_当乐网"/>
        <title>最新安卓游戏免费下载_安卓最新游戏_第1页_当乐网</title>
        <?php $c->loadView("front/public/header.php"); ?>
        <link rel="stylesheet" href="/style/front/public/css/list.css"/>
    </head>

    <body>
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
                                <a href="http://android.d.cn/game/59398.html" target="_blank" class="app-img-out" title="密室怨魂(含数据包)">
                                    <i class="iconSprite-2 sign sign-2"></i>
                                    <img class="app-img" src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/transparent.gif"  o-src="http://img8.android.d.cn/android/new/game_image/98/59398/icon.png" alt="密室怨魂(含数据包)"/>
                                </a>
                                <div class="app-v">
                                    <div class="star-bg iconSprite">
                                        <div class="stars iconSprite stars-4"></div>
                                    </div>

                                    <p class="update-time">刚刚<i class="up-icon-1 iconSprite"></i></p>

                                </div>
                                <div class="app-h">

                                    <a href="javascript:void(0);" title="密室怨魂(含数据包)下载" class="down-btn" onclick="Adapt.adaptDown(this, 1, 59398)">立即下载</a>

                                </div>
                            </div>
                            <div class="list-right">

                                <div class="mark mark-s1" style="display:block">

                                    <span class="red">
                                        <span class="big">7</span>.
                                        <span class="small">5</span>
                                    </span>

                                    <a href="javascript:;" title="密室怨魂(含数据包)喜欢" class="iconSprite " onclick="Coll.coll(this, 1, 59398);"></a>
                                </div>

                                <div class="tem-d">

                                    <i class="tem iconSprite"></i><span class="red">47℃</span>

                                </div>
                                <p class="g-name">
                                    <a href="http://android.d.cn/game/59398.html" target="_blank" title="密室怨魂(含数据包)">密室怨魂(含数据包)</a>
                                </p>
                                <p class="g-desc">

                                    <a href="http://android.d.cn/game/list_1_0_6_0_0_0_0_0_0_0_0_0_0.html"
                                       title="安卓冒险解谜" target="_blank">冒险解谜</a>

                                </p>
                                <p class="g-detail">

                                    <span>07-04</span> | 94.29MB
                                </p>
                                <p class="down-ac">

                                    版本：1.0.4
                                </p>
                                <p class="g-intro">

                                    <span class="g-cp">小编简评：
                                        谜题逻辑性较好，难度尚可，恐怖要素十足，吓到手抖。
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
                                <a href="http://android.d.cn/game/14009.html" target="_blank" class="app-img-out" title="Cytus音乐节奏破解版(含数据包)">
                                    <i class="iconSprite-2 sign sign-1"></i>
                                    <img class="app-img" src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/transparent.gif"  o-src="http://img6.android.d.cn/android/new/game_image/9/14009/icon.png" alt="Cytus音乐节奏破解版(含数据包)"/>
                                </a>
                                <div class="app-v">
                                    <div class="star-bg iconSprite">
                                        <div class="stars iconSprite stars-5"></div>
                                    </div>

                                    <p class="update-time">刚刚<i class="up-icon-1 iconSprite"></i></p>

                                </div>
                                <div class="app-h">

                                    <a href="javascript:void(0);" title="Cytus音乐节奏破解版(含数据包)下载" class="down-btn" onclick="Adapt.adaptDown(this, 1, 14009)">立即下载</a>

                                </div>
                            </div>
                            <div class="list-right">

                                <div class="mark mark-s1" style="display:block">

                                    <span class="red">
                                        <span class="big">8</span>.
                                        <span class="small">1</span>
                                    </span>

                                    <a href="javascript:;" title="Cytus音乐节奏破解版(含数据包)喜欢" class="iconSprite " onclick="Coll.coll(this, 1, 14009);"></a>
                                </div>

                                <div class="tem-d">

                                    <i class="tem iconSprite"></i><span class="red">69℃</span>

                                </div>
                                <p class="g-name">
                                    <a href="http://android.d.cn/game/14009.html" target="_blank" title="Cytus音乐节奏破解版(含数据包)">Cytus音乐节奏破解版(含数据包)</a>
                                </p>
                                <p class="g-desc">

                                    <a href="http://android.d.cn/game/list_1_0_48_0_0_0_0_0_0_0_0_0_0.html"
                                       title="安卓音乐游戏" target="_blank">音乐游戏</a>

                                </p>
                                <p class="g-detail">

                                    <span>07-04</span> | 820.60MB
                                </p>
                                <p class="down-ac">

                                    版本：8.0.0
                                </p>
                                <p class="g-intro">

                                    <span class="g-cp">小编简评：
                                        对音乐的节奏感很有帮助，喜爱音乐的人千万不要错过
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
                    <span class="curr">1</span><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_2_0.html">2</a><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_3_0.html">3</a><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_4_0.html">4</a><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_5_0.html">5</a><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_6_0.html">6</a><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_7_0.html">7</a><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_2_0.html">下一页</a><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1047_0.html">末页</a>
                </div>
            </div>


            <div class="right">
                <div class="right-div">
                    <div class="list-title clearfix">
                        <h2 class="con" title="游戏筛选"><span class="title-bg iconSprite"></span>游戏筛选</h2>
                    </div>
                    <div class="div-out">
                        <p class="game-cate">游戏类型</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">
                                <li class='first cur'>

                                    <a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓游戏类型">全部</a>


                                </li>
                                <li >
                                    <a href="http://android.d.cn/game/list_1_1_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓单机游戏">单机</a>
                                </li>
                                <li>


                                    <a href="http://android.d.cn/netgame" title="安卓网游游戏">网游</a>




                                </li>
                            </ul>
                        </div>

                        <p class="game-cate">游戏分类</p>
                        <ul class="game-spe-lx clearfix right-ul-bd">
                            <li class="first cur">
                                <a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓游戏分类">全部</a>
                            </li>

                            <li >

                                <p>冒险解谜</p>
                                <p>AVG</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_6_0_0_0_0_0_0_0_0_1_0.html" title="安卓冒险解谜">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_6_1_0_0_0_0_0_0_0_1_0.html" title="安卓恐怖游戏">恐怖</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_6_2_0_0_0_0_0_0_0_1_0.html" title="安卓僵尸游戏">僵尸</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_6_3_0_0_0_0_0_0_0_1_0.html" title="安卓逃脱游戏">逃脱</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_6_4_0_0_0_0_0_0_0_1_0.html" title="安卓迷宫游戏">迷宫</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_6_5_0_0_0_0_0_0_0_1_0.html" title="安卓创意游戏">创意</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_6_6_0_0_0_0_0_0_0_1_0.html" title="安卓100系列游戏">100系列</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li >

                                <p>体育运动</p>
                                <p>SPG</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_7_0_0_0_0_0_0_0_0_1_0.html" title="安卓体育运动">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_7_1_0_0_0_0_0_0_0_1_0.html" title="安卓足球游戏">足球</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_7_2_0_0_0_0_0_0_0_1_0.html" title="安卓篮球游戏">篮球</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_7_3_0_0_0_0_0_0_0_1_0.html" title="安卓台球游戏">台球</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_7_4_0_0_0_0_0_0_0_1_0.html" title="安卓滑雪游戏">滑雪</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_7_5_0_0_0_0_0_0_0_1_0.html" title="安卓钓鱼游戏">钓鱼</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_7_6_0_0_0_0_0_0_0_1_0.html" title="安卓网球游戏">网球</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li class="first">

                                <p>益智休闲</p>
                                <p>PUZ</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_8_0_0_0_0_0_0_0_0_1_0.html" title="安卓益智休闲">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_8_1_0_0_0_0_0_0_0_1_0.html" title="安卓消除游戏">消除</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_8_2_0_0_0_0_0_0_0_1_0.html" title="安卓祖玛游戏">祖玛</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_8_3_0_0_0_0_0_0_0_1_0.html" title="安卓连连看游戏">连连看</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_8_4_0_0_0_0_0_0_0_1_0.html" title="安卓矿工游戏">矿工</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_8_5_0_0_0_0_0_0_0_1_0.html" title="安卓切水果游戏">切水果</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_8_6_0_0_0_0_0_0_0_1_0.html" title="安卓物理游戏">物理</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li >

                                <p>角色扮演</p>
                                <p>RPG</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_4_0_0_0_0_0_0_0_0_1_0.html" title="安卓角色扮演">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_4_1_0_0_0_0_0_0_0_1_0.html" title="安卓回合游戏">回合</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_4_2_0_0_0_0_0_0_0_1_0.html" title="安卓即时游戏">即时</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_4_3_0_0_0_0_0_0_0_1_0.html" title="安卓地牢游戏">地牢</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_4_4_0_0_0_0_0_0_0_1_0.html" title="安卓ARPG游戏">ARPG</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_4_5_0_0_0_0_0_0_0_1_0.html" title="安卓日、韩系游戏">日、韩系</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_4_6_0_0_0_0_0_0_0_1_0.html" title="安卓魔幻游戏">魔幻</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_4_7_0_0_0_0_0_0_0_1_0.html" title="安卓仙侠游戏">仙侠</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_4_8_0_0_0_0_0_0_0_1_0.html" title="安卓武侠游戏">武侠</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_4_9_0_0_0_0_0_0_0_1_0.html" title="安卓科幻游戏">科幻</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li >

                                <p>动作游戏</p>
                                <p>ACT</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_5_0_0_0_0_0_0_0_0_1_0.html" title="安卓动作游戏">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_5_1_0_0_0_0_0_0_0_1_0.html" title="安卓横版过关游戏">横版过关</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_5_2_0_0_0_0_0_0_0_1_0.html" title="安卓功夫游戏">功夫</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_5_3_0_0_0_0_0_0_0_1_0.html" title="安卓杀戮游戏">杀戮</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_5_4_0_0_0_0_0_0_0_1_0.html" title="安卓跑酷游戏">跑酷</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_5_5_0_0_0_0_0_0_0_1_0.html" title="安卓忍者游戏">忍者</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li class="first">

                                <p>格斗游戏</p>
                                <p>FTG</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_14_0_0_0_0_0_0_0_0_1_0.html" title="安卓格斗游戏">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_14_1_0_0_0_0_0_0_0_1_0.html" title="安卓机器人游戏">机器人</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_14_2_0_0_0_0_0_0_0_1_0.html" title="安卓超级英雄游戏">超级英雄</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_14_3_0_0_0_0_0_0_0_1_0.html" title="安卓街机游戏">街机</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_14_4_0_0_0_0_0_0_0_1_0.html" title="安卓火柴人游戏">火柴人</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_14_5_0_0_0_0_0_0_0_1_0.html" title="安卓拳击游戏">拳击</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li >

                                <p>棋牌游戏</p>
                                <p>TAB</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_9_0_0_0_0_0_0_0_0_1_0.html" title="安卓棋牌游戏">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_9_1_0_0_0_0_0_0_0_1_0.html" title="安卓斗地主游戏">斗地主</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_9_2_0_0_0_0_0_0_0_1_0.html" title="安卓麻将游戏">麻将</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_9_3_0_0_0_0_0_0_0_1_0.html" title="安卓桌游游戏">桌游</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_9_4_0_0_0_0_0_0_0_1_0.html" title="安卓纸牌游戏">纸牌</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_9_5_0_0_0_0_0_0_0_1_0.html" title="安卓象棋游戏">象棋</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_9_6_0_0_0_0_0_0_0_1_0.html" title="安卓德州扑克游戏">德州扑克</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_9_7_0_0_0_0_0_0_0_1_0.html" title="安卓飞行棋游戏">飞行棋</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li >

                                <p>模拟经营</p>
                                <p>SIM</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_10_0_0_0_0_0_0_0_0_1_0.html" title="安卓模拟经营">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_10_1_0_0_0_0_0_0_0_1_0.html" title="安卓建造游戏">建造</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_10_2_0_0_0_0_0_0_0_1_0.html" title="安卓美食游戏">美食</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_10_3_0_0_0_0_0_0_0_1_0.html" title="安卓开罗游戏">开罗</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_10_4_0_0_0_0_0_0_0_1_0.html" title="安卓模拟人生游戏">模拟人生</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_10_5_0_0_0_0_0_0_0_1_0.html" title="安卓经理游戏">经理</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li class="first">

                                <p>策略塔防</p>
                                <p>SLG</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_11_0_0_0_0_0_0_0_0_1_0.html" title="安卓策略塔防">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_11_1_0_0_0_0_0_0_0_1_0.html" title="安卓三国游戏">三国</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_11_2_0_0_0_0_0_0_0_1_0.html" title="安卓科幻游戏">科幻</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_11_3_0_0_0_0_0_0_0_1_0.html" title="安卓联网攻城游戏">联网攻城</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_11_4_0_0_0_0_0_0_0_1_0.html" title="安卓战棋游戏">战棋</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_11_5_0_0_0_0_0_0_0_1_0.html" title="安卓魔幻游戏">魔幻</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_11_6_0_0_0_0_0_0_0_1_0.html" title="安卓历史游戏">历史</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li >

                                <p>养成游戏</p>
                                <p>EDU</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_12_0_0_0_0_0_0_0_0_1_0.html" title="安卓养成游戏">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_12_1_0_0_0_0_0_0_0_1_0.html" title="安卓我的世界游戏">我的世界</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_12_2_0_0_0_0_0_0_0_1_0.html" title="安卓会说话系列游戏">会说话系列</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_12_3_0_0_0_0_0_0_0_1_0.html" title="安卓萌宠游戏">萌宠</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_12_4_0_0_0_0_0_0_0_1_0.html" title="安卓放置游戏">放置</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_12_5_0_0_0_0_0_0_0_1_0.html" title="安卓恋爱养成游戏">恋爱养成</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_12_6_0_0_0_0_0_0_0_1_0.html" title="安卓口袋系列游戏">口袋系列</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li >

                                <p>射击游戏</p>
                                <p>STG</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_13_0_0_0_0_0_0_0_0_1_0.html" title="安卓射击游戏">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_13_1_0_0_0_0_0_0_0_1_0.html" title="安卓打僵尸游戏">打僵尸</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_13_2_0_0_0_0_0_0_0_1_0.html" title="安卓坦克游戏">坦克</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_13_3_0_0_0_0_0_0_0_1_0.html" title="安卓狙击游戏">狙击</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_13_4_0_0_0_0_0_0_0_1_0.html" title="安卓打猎游戏">打猎</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li class="first">

                                <p>飞行游戏</p>
                                <p>FLY</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_15_0_0_0_0_0_0_0_0_1_0.html" title="安卓飞行游戏">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_15_1_0_0_0_0_0_0_0_1_0.html" title="安卓直升机游戏">直升机</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_15_2_0_0_0_0_0_0_0_1_0.html" title="安卓战斗机游戏">战斗机</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_15_3_0_0_0_0_0_0_0_1_0.html" title="安卓轰炸机游戏">轰炸机</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li >

                                <p>竞速游戏</p>
                                <p>RAC</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_16_0_0_0_0_0_0_0_0_1_0.html" title="安卓竞速游戏">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_16_1_0_0_0_0_0_0_0_1_0.html" title="安卓越野游戏">越野</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_16_2_0_0_0_0_0_0_0_1_0.html" title="安卓卡丁车游戏">卡丁车</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_16_3_0_0_0_0_0_0_0_1_0.html" title="安卓漂移游戏">漂移</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_16_4_0_0_0_0_0_0_0_1_0.html" title="安卓拉力赛游戏">拉力赛</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_16_5_0_0_0_0_0_0_0_1_0.html" title="安卓直线竞速游戏">直线竞速</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_16_6_0_0_0_0_0_0_0_1_0.html" title="安卓卡车游戏">卡车</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_16_7_0_0_0_0_0_0_0_1_0.html" title="安卓水上竞速游戏">水上竞速</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_16_8_0_0_0_0_0_0_0_1_0.html" title="安卓摩托车游戏">摩托车</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_16_9_0_0_0_0_0_0_0_1_0.html" title="安卓自行车游戏">自行车</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                            <li >

                                <p>音乐游戏</p>
                                <p>MUG</p>
                                <span></span>
                                <div class="role-cate">
                                    <dl class="clearfix">
                                        <dd ><a href="http://android.d.cn/game/list_1_0_48_0_0_0_0_0_0_0_0_1_0.html" title="安卓音乐游戏">全部</a></dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_48_1_0_0_0_0_0_0_0_1_0.html" title="安卓动感节奏游戏">动感节奏</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_48_2_0_0_0_0_0_0_0_1_0.html" title="安卓猜歌游戏">猜歌</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_48_3_0_0_0_0_0_0_0_1_0.html" title="安卓乐器游戏">乐器</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_48_4_0_0_0_0_0_0_0_1_0.html" title="安卓初音游戏">初音</a>
                                        </dd>

                                        <dd >
                                            <a href="http://android.d.cn/game/list_1_0_48_5_0_0_0_0_0_0_0_1_0.html" title="安卓钢琴游戏">钢琴</a>
                                        </dd>

                                    </dl>
                                </div>
                            </li>

                        </ul>

                        <p class="game-cate">标签</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">
                                <li class='first cur'><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓游戏标签">全部</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_34_0_0_0_0_0_0_1_0.html" title="安卓解谜游戏大全">解谜</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_6_0_0_0_0_0_0_1_0.html" title="安卓男生最爱游戏大全">男生最爱</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_12_0_0_0_0_0_0_1_0.html" title="安卓女生最爱游戏大全">女生最爱</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_28_0_0_0_0_0_0_1_0.html" title="安卓小清新游戏大全">小清新</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_10_0_0_0_0_0_0_1_0.html" title="安卓消磨时间游戏大全">消磨时间</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_8_0_0_0_0_0_0_1_0.html" title="安卓塔防游戏大全">塔防</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_17_0_0_0_0_0_0_1_0.html" title="安卓儿童游戏大全">儿童</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_40_0_0_0_0_0_0_1_0.html" title="安卓必备游戏游戏大全">必备游戏</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_16_0_0_0_0_0_0_1_0.html" title="安卓3D游戏大全">3D</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_14_0_0_0_0_0_0_1_0.html" title="安卓HD高清游戏大全">HD高清</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_24_0_0_0_0_0_0_1_0.html" title="安卓重口味游戏大全">重口味</a></li>

                            </ul>
                        </div>
                        <p class="game-cate">游戏大小</p>
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
                        </div>
                        <p class="game-cate">上线时间</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">

                                <li class='first cur'><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓游戏上线时间">全部</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_1_0_0_0_0_1_0.html" title="2015年安卓游戏">2015年</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_2_0_0_0_0_1_0.html" title="2014年安卓游戏">2014年</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_3_0_0_0_0_1_0.html" title="2013年安卓游戏">2013年</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_4_0_0_0_0_1_0.html" title="2012年安卓游戏">2012年</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_-1_0_0_0_0_1_0.html" title="更早安卓游戏">更早</a></li>

                            </ul>
                        </div>
                        <p class="game-cate">谷歌市场</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">
                                <li class='first cur'><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓游戏谷歌市场">全部</a></li>
                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_1_0_0_0_1_0.html" title="不需要谷歌市场安卓游戏">不需要</a></li>
                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_64_0_0_0_1_0.html" title="需要谷歌市场安卓游戏">需要</a></li>
                            </ul>
                        </div>
                        <p class="game-cate">厂商</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">
                                <li class='first cur'><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓游戏厂商">全部</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_9_0_0_1_0.html" title="Gameloft安卓游戏">Gameloft</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_49_0_0_1_0.html" title="EA安卓游戏">EA</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_11_0_0_1_0.html" title="Glu安卓游戏">Glu</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_211_0_0_1_0.html" title="2K Games安卓游戏">2K Games</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_4841_0_0_1_0.html" title="Ubisoft安卓游戏">Ubisoft</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_29_0_0_1_0.html" title="Rovio安卓游戏">Rovio</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_8400_0_0_1_0.html" title="Chillingo安卓游戏">Chillingo</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_1622_0_0_1_0.html" title="SQEX安卓游戏">SQEX</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_30_0_0_1_0.html" title="GAMEVIL安卓游戏">GAMEVIL</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_43_0_0_1_0.html" title="Com2uS安卓游戏">Com2uS</a></li>

                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_8109_0_0_1_0.html" title="腾讯安卓游戏">腾讯</a></li>

                            </ul>
                        </div>
                        <p class="game-cate">需要网络</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">
                                <li class='first cur'><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓游戏网络">全部</a></li>
                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_1_0_1_0.html" title="不需要网络安卓游戏">不需要</a></li>
                                <li ><a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_4_0_1_0.html" title="需要网络安卓游戏">需要</a></li>
                            </ul>
                        </div>
                        <p class="game-cate">游戏语言</p>
                        <div class="right-ul-bd">
                            <ul class="game-lx">
                                <li class='first cur'>
                                    <a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓游戏语言">全部</a>
                                </li>
                                <li >
                                    <a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_2_1_0.html" title="中文安卓游戏">中文</a>
                                </li>
                                <li >
                                    <a href="http://android.d.cn/game/list_1_0_0_0_0_0_0_0_0_0_1_1_0.html" title="英文安卓游戏">英文</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="right-div">
                    <div class="list-title clearfix">
                        <h2 class="con" title="热门安卓游戏精品推荐"><span class="title-bg iconSprite"></span>安卓游戏推荐</h2>
                    </div>
                    <ul class="recom-list"> 
                        <li class="right-ul-bd">                        
                            <div class="recom-detail">                            
                                <a class="recom-name" target="_blank" title="不死之身(含数据包)" href="/game/54340.html">不死之身(含数据包)</a>                      
                                <div class="star-bg iconSprite">                                
                                    <div class="stars iconSprite stars-4"></div>                            
                                </div>                            
                                <p class="recom-lx">射击游戏</p>                     
                            </div>                   
                            <a class="recom-img" target="_blank" title="不死之身(含数据包)" href="/game/54340.html">                           
                                <span class="li-img-out" style="font-style: italic;"></span>                          
                                <img class="game-img-2"  src="http://img8.android.d.cn/android/new/game_image/40/54340/icon.png?clear" alt="不死之身(含数据包)" title="不死之身(含数据包)" /> 
                            </a>                    
                        </li>
                        <li class="right-ul-bd">                        
                            <div class="recom-detail">                            
                                <a class="recom-name" target="_blank" title="火柴人联盟" href="/game/57701.html">火柴人联盟</a>                      
                                <div class="star-bg iconSprite">                                
                                    <div class="stars iconSprite stars-4"></div>                            
                                </div>                            
                                <p class="recom-lx">格斗游戏</p>                     
                            </div>                   
                            <a class="recom-img" target="_blank" title="火柴人联盟" href="/game/57701.html">                           
                                <span class="li-img-out" style="font-style: italic;"></span>                          
                                <img class="game-img-2"  src="http://img3.android.d.cn/android/new/game_image/1/57701/icon.jpg?clear" alt="火柴人联盟" title="火柴人联盟" /> 
                            </a>                    
                        </li>
                        <li class="right-ul-bd">                        
                            <div class="recom-detail">                            
                                <a class="recom-name" target="_blank" title="几何战争3:维度(含数据包)" href="/game/57964.html">几何战争3:维度(含数据包)</a>                      
                                <div class="star-bg iconSprite">                                
                                    <div class="stars iconSprite stars-4"></div>                            
                                </div>                            
                                <p class="recom-lx">射击游戏</p>                     
                            </div>                   
                            <a class="recom-img" target="_blank" title="几何战争3:维度(含数据包)" href="/game/57964.html">                           
                                <span class="li-img-out" style="font-style: italic;"></span>                          
                                <img class="game-img-2"  src="http://img5.android.d.cn/android/new/game_image/64/57964/icon.png" alt="几何战争3:维度(含数据包)" title="几何战争3:维度(含数据包)" /> 
                            </a>                    
                        </li>
                        <li class="right-ul-bd">                        
                            <div class="recom-detail">                            
                                <a class="recom-name" target="_blank" title="极品狂飙3D" href="/game/43194.html">极品狂飙3D</a>                      
                                <div class="star-bg iconSprite">                                
                                    <div class="stars iconSprite stars-3"></div>                            
                                </div>                            
                                <p class="recom-lx">竞速游戏</p>                     
                            </div>                   
                            <a class="recom-img" target="_blank" title="极品狂飙3D" href="/game/43194.html">                           
                                <span class="li-img-out" style="font-style: italic;"></span>                          
                                <img class="game-img-2"  src="http://img4.android.d.cn/android/new/game_image/94/43194/icon.jpg" alt="极品狂飙3D" title="极品狂飙3D" /> 
                            </a>                    
                        </li>
                        <li class="right-ul-bd">                        
                            <div class="recom-detail">                            
                                <a class="recom-name" target="_blank" title="世界超级摩托车锦标赛15(含数据包)" href="/game/59223.html">世界超级摩托车锦标赛15(含数据包)</a>                      
                                <div class="star-bg iconSprite">                                
                                    <div class="stars iconSprite stars-4"></div>                            
                                </div>                            
                                <p class="recom-lx">竞速游戏</p>                     
                            </div>                   
                            <a class="recom-img" target="_blank" title="世界超级摩托车锦标赛15(含数据包)" href="/game/59223.html">                           
                                <span class="li-img-out" style="font-style: italic;"></span>                          
                                <img class="game-img-2"  src="http://img4.android.d.cn/android/new/game_image/23/59223/icon.png" alt="世界超级摩托车锦标赛15(含数据包)" title="世界超级摩托车锦标赛15(含数据包)" /> 
                            </a>                    
                        </li>
                        <li class="right-ul-bd">                        
                            <div class="recom-detail">                            
                                <a class="recom-name" target="_blank" title="捕鱼达人3" href="/game/47849.html">捕鱼达人3</a>                      
                                <div class="star-bg iconSprite">                                
                                    <div class="stars iconSprite stars-4"></div>                            
                                </div>                            
                                <p class="recom-lx">益智休闲</p>                     
                            </div>                   
                            <a class="recom-img" target="_blank" title="捕鱼达人3" href="/game/47849.html">                           
                                <span class="li-img-out" style="font-style: italic;"></span>                          
                                <img class="game-img-2"  src="http://img6.android.d.cn/android/new/game_image/49/47849/icon.jpg?clear?clear?clear?clear?clear" alt="捕鱼达人3" title="捕鱼达人3" /> 
                            </a>                    
                        </li>
                        <li class="right-ul-bd">                        
                            <div class="recom-detail">                            
                                <a class="recom-name" target="_blank" title="乐高忍者:元素之战(含数据包)" href="/game/57766.html">乐高忍者:元素之战(含数据包)</a>                      
                                <div class="star-bg iconSprite">                                
                                    <div class="stars iconSprite stars-4"></div>                            
                                </div>                            
                                <p class="recom-lx">角色扮演</p>                     
                            </div>                   
                            <a class="recom-img" target="_blank" title="乐高忍者:元素之战(含数据包)" href="/game/57766.html">                           
                                <span class="li-img-out" style="font-style: italic;"></span>                          
                                <img class="game-img-2"  src="http://img5.android.d.cn/android/new/game_image/66/57766/icon.png" alt="乐高忍者:元素之战(含数据包)" title="乐高忍者:元素之战(含数据包)" /> 
                            </a>                    
                        </li>
                        <li class="right-ul-bd">                        
                            <div class="recom-detail">                            
                                <a class="recom-name" target="_blank" title="世界征服者3" href="/game/58836.html">世界征服者3</a>                      
                                <div class="star-bg iconSprite">                                
                                    <div class="stars iconSprite stars-4"></div>                            
                                </div>                            
                                <p class="recom-lx">策略塔防</p>                     
                            </div>                   
                            <a class="recom-img" target="_blank" title="世界征服者3" href="/game/58836.html">                           
                                <span class="li-img-out" style="font-style: italic;"></span>                          
                                <img class="game-img-2"  src="http://img4.android.d.cn/android/new/game_image/36/58836/icon.jpg" alt="世界征服者3" title="世界征服者3" /> 
                            </a>                    
                        </li>
                        <li class="right-ul-bd">                        
                            <div class="recom-detail">                            
                                <a class="recom-name" target="_blank" title="勇者之塔" href="/game/59100.html">勇者之塔</a>                      
                                <div class="star-bg iconSprite">                                
                                    <div class="stars iconSprite stars-4"></div>                            
                                </div>                            
                                <p class="recom-lx">益智休闲</p>                     
                            </div>                   
                            <a class="recom-img" target="_blank" title="勇者之塔" href="/game/59100.html">                           
                                <span class="li-img-out" style="font-style: italic;"></span>                          
                                <img class="game-img-2"  src="http://img7.android.d.cn/android/new/game_image/0/59100/icon.png" alt="勇者之塔" title="勇者之塔" /> 
                            </a>                    
                        </li>
                        <li class="right-ul-bd">                        
                            <div class="recom-detail">                            
                                <a class="recom-name" target="_blank" title="植物大战僵尸2中文高清版" href="/game/36854.html">植物大战僵尸2中文高清版</a>                      
                                <div class="star-bg iconSprite">                                
                                    <div class="stars iconSprite stars-4"></div>                            
                                </div>                            
                                <p class="recom-lx">策略塔防</p>                     
                            </div>                   
                            <a class="recom-img" target="_blank" title="植物大战僵尸2中文高清版" href="/game/36854.html">                           
                                <span class="li-img-out" style="font-style: italic;"></span>                          
                                <img class="game-img-2"  src="http://img9.android.d.cn/android/new/game_image/54/36854/icon.jpg" alt="植物大战僵尸2中文高清版" title="植物大战僵尸2中文高清版" /> 
                            </a>                    
                        </li>
                    </ul>
                </div>


                <div class="right-div list-img">
                    <a href="http://ng.d.cn/shendiaoxialv/" title="神雕侠侣" target="_blank"><img src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201506/14352225588501cUm.jpg" alt="神雕侠侣" /></a>
                </div>


            </div>

        </div>

        <!-- dpk直接下载提示框  -->
        <div id="Hint" class="hint-cont">
            <div class="hint-head">
                <a id="hintClose" title="关闭" href="javascript:void(0)">
                    <span></span>
                </a>
                <i></i>
                提示
            </div>
            <div class="hint-content">
                <p class="hint-tit">本游戏安装包为DPK数据包，推荐您使用当乐游戏中心安装。</p>
                <div class="hint-outer">
                    <a href="http://ios.d.cn/Subject/ProductShow/Download.ashx?c=pcandroid0&t=pcCDN&v=android000" title="下载电脑版" class="hint-downpc"><span>下载电脑版<i></i></span></a>
                    <a href="http://res9.d.cn/m/yxzx.apk?f=a_web_3" title="下载手机版" class="hint-downph"><span>下载手机版<i></i></span></a>
                </div>
                <div class="hint-link-wrap">
                    <span class="hint-not"><a href="javascript:void(0);"></a>不再提示</span>
                    <a class="hint-course" href="http://android.d.cn/news/89868.html" target="_blank;">不会安装，看这里?</a>
                    <a class="hint-submit" href="javascript:void(0);">知道了</a>
                </div>
            </div>
        </div>
        <!--下载相关 begin-->
        <div class="adapt-cont" id="adaptMore">
            <h2>
                <a href="javascript:void(0)" title="关闭" id="adaptMoreC">
                    <span></span>
                </a>
                <i></i>
                机型匹配
            </h2>
            <p class="adapt-detail">您的手机型号未能匹配成功，请选择以下安装包进行下载。</p>
            <ul class="adapt-ul">
            </ul>
        </div>
        <div class="adapt-cont" id="adaptNoResult">
            <h2>
                <a href="javascript:void(0)" title="关闭" id="adaptNoC">
                    <span></span>
                </a>
                <i></i>
                机型匹配
            </h2>
            <p class="adapt-detail">您的手机型号未能匹配成功，请选择以下安装包进行下载。</p>
            <ul class="adapt-ul">
            </ul>
        </div>
        <div class="adapt-cont" id="adaptDown">
            <h2>
                <a href="javascript:void(0)" title="关闭"  class="adaptDownC">
                    <span></span>
                </a>
                <i></i>
                机型匹配/下载
            </h2>
            <p class="adapt-success"><span></span>下载已成功</p>
            <a href="javascript:void(0)" class="iknow" id="ikonw">知道了</a>
        </div>
        <div class="adapt-cont" id="adaptSet">
            <h2>
                <a href="javascript:void(0);" title="关闭" id="adaptSetC">
                    <span></span>
                </a>
                <i></i>
                设置机型
            </h2>
            <p class="setting-title">您的手机机型是：<span class="at-name"></span></p>
            <div class="label label-1" id="brand">
                <a href="javascript:void(0)" class="label-arrow" id="brandTri"><span></span></a>
                <span class="label-choosen" id="brandValue">请选择手机品牌</span>
                <div class="label-list" id="brandLi">
                    <ul class="list-ul" id="brandUl">
                    </ul>
                </div>
            </div>
            <div class="label label-2" id="type">
                <a href="javascript:void(0)" class="label-arrow" id="typeTri"><span></span></a>
                <span class="label-choosen" id="modelValue">请选择手机型号</span>
                <div class="model-list" id="typeLi">
                    <ul class="list-ul" id="typeUl">

                    </ul>
                </div>
            </div>
            <a href="javascript:void(0)" class="iknow iknow-special" id="atSubmit">完成</a>
            <a href="javascript:void(0)" class="notfound" id="atNot">没找到匹配的机型?</a>
        </div>
        <!--下载相关 end-->
        <!-- 腾讯联合登录标签 begin-->
        <span id="qqLoginBtn" style="display:none;"></span>
        <!-- 腾讯联合登录标签 end-->
        <!--下载调客户端 b-->
        <div class="client-box" id="clientBox">
            <i id="clientClose" class="client-close"></i>
            <p class="client-des">将使用当乐游戏中心电脑版为您免费安装</p>
            <div class="client-main">
                <p class="client-process">安装流程：</p>
                <div class="client-oper clearfix">
                    <div class="client-step client-step1">
                        <span></span>
                        <p>1.下载安装当乐游戏中心PC版</p>
                    </div>
                    <div class="step-sep"><i></i></div>
                    <div class="client-step client-step2">
                        <span></span>
                        <p>2.选择应用，点击安装到手机</p>
                    </div>
                    <div class="step-sep"><i></i></div>
                    <div class="client-step client-step3">
                        <span></span>
                        <p>3.连接手机到电脑，自动安装</p>
                    </div>
                </div>
                <a id="clientDown" title="立即下载当乐游戏中心" class="client-down" href="http://ios.d.cn/Subject/ProductShow/Download.ashx?c=pcandroid0&amp;t=pcCDN&amp;v=android000">立即下载当乐游戏中心</a>
            </div>
        </div>
        <div id="ieBox" class="ie-box">
            <i id="ieClose" class="client-close"></i>
            <p class="client-des">将使用<em>当乐游戏中心</em>电脑版为您免费安装</p>
            <div class="ie-down">
                <a href="http://ios.d.cn/Subject/ProductShow/Download.ashx?c=pcandroid0&t=pcCDN&v=android000" title="立即下载当乐游戏中心" class="ie-down-l" id="downClient">
                    <span>还未安装<br />下载客户端</span>
                </a>
                <a href="javascript:;" title="启动客户端安装"  class="ie-down-r" id="ieDown">
                    <span>我已安装<br />启动客户端安装</span>
                </a>
            </div>
        </div>
        <!--下载调客户端 e-->
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

            <div class="copy-right">
                <p>
                    <input type="hidden" id="serviceIp" name="serviceIp" value="118.144.66.138" />
                    <a href="http://www.d.cn/about_us.html" target="_blank">
                        关于当乐
                    </a>
                    |
                    <a href="http://www.d.cn/en-us/" target="_blank">
                        About Downjoy
                    </a>
                    |
                    <a href="http://www.d.cn/contact_us.html" target="_blank">
                        联系我们
                    </a>
                    |
                    <a href="http://www.d.cn/hr/" target="_blank" title="诚聘英才">
                        诚聘英才
                    </a>
                    |
                    <a href="http://open.d.cn/" target="_blank">
                        开放平台
                    </a>
                    |
                    <a href="http://www.d.cn/privacy.html" target="_blank">
                        隐私保护
                    </a>
                    |
                    <a href="http://www.d.cn/sitemap.html" target="_blank">
                        网站地图
                    </a>
                </p>
                <p>Copyright © 2004-<script type="text/javascript">var y = new Date().getFullYear();
                    document.write(y);</script> Downjoy. All Rights Reserved. 北京当乐信息技术有限公司 版权所有</p>
            </div>
        </div>
    </body>
</html>