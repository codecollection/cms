<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="copyright" content="<?php echo HOST;?>"/>
<link type="application/rss+xml" href="" rel="alternate" title="Android手机游戏免费下载 Android手机软件下载 Android智能门户_当乐网"/>
<link type="image/x-icon" rel="shortcut icon" href="/favicon.ico"/>

    <meta http-equiv="mobile-agent" content="format=xhtml; url=<?php echo HOST;?>"/>
    <meta name="viewport" content="width=1200"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <title></title>
    <link rel="canonical" href="http://android.d.cn/"/>
    <link href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE?>/css/common.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE?>/css/index.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="<?php echo CSSHOST;?>/style/libs/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="<?php echo CSSHOST;?>/style/libs/common.js"></script>
    <script type="text/javascript" src="<?php echo CSSHOST;?>/style/libs/more.js"></script>
    <script type="text/javascript" src="<?php echo CSSHOST;?>/style/libs/jquery.lazyload.js"></script>
    <link href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE?>/css/navtop.css" rel="stylesheet" type="text/css"/>
    <script>
        $(function() {
            $("img").lazyload({effect : "fadeIn","threshold":200});
            
        });
    </script>
</head>

<body>

<!--topNav:begin-->
<div id="siteNav" class="navFixed">
    <div class="layout">
        <ul class="siteNavMenu">
            <li class="rb"><a href="<?php echo HOST;?>" target="_blank">小肉粽&nbsp;&nbsp;微信公众平台第一站</a>&nbsp;</li>
            <li>
                <div class="menuShow">
                    <a href="http://weibo.com/downjoygame" title="关注新浪微博" target="_blank">
                        <img src="http://raw.android.d.cn/cdroid_res/web/common/transparent.gif" alt="" width="24" class="followSina"/>
                    </a>
                    <span class="arrDropNo"></span>
                </div>
                
            </li>
            
            <li>
                <div class="menuShow">
                    <img src="http://raw.android.d.cn/cdroid_res/web/common/transparent.gif" alt="" width="24" class="followWx" /><span class="arrDrop"></span>
                </div>
                <div class="menuHide">
                    <img src="http://raw.android.d.cn/cdroid_res/web/common/2dcode.gif" alt="微信二维码" class="code" />
                </div>
            </li>
<!--            <li class="lb"><a href="" target="_blank">当乐游戏中心</a> </li>-->
        </ul>
        <ul class="siteNavMenu fr">
            <li class="rb" id="logined_li">
                <div class="menuShow">
                    <a href="javascript:void(0)" class="login"><?php echo !empty($user) ? $user["name"] : "用户登录";?></a><span class="arrDrop"></span>
                </div>
                <div class="menuHide" id="topDMainBox" style="width:<?php echo !empty($user) ? "100px" : "260px";?>">
                    <?php if(!empty($user)){?>
                    <div class="userPanel" style="width:100px;">
<!--                        <img class="userFace" src="http://tools.service.d.cn/userhead/get?mid=177044757&amp;size=middle" id="avatar_url_top_id">-->
                        <div class="userInfo">
      <!--                        <p><?php echo $user["name"];?></p>
                          <p>乐号：177044757</p>
                            <p><a target="_blank" href="http://my.d.cn/message/index.html">有<em id="newMessageCnt_em_id">0</em>未读消息</a></p>-->
                            <p><a class="r b" target="_blank" href="<?php echo AUTHHOST ?>/user/info">个人中心</a></p>
                            <p><a onclick="loginout()" href="javascript:void(0);">退出</a></p>
                        </div>
                    </div>
                    <?php }else{?>
                    <form onsubmit="doLogin();return false;" id="login_form">
                        <p class="tipsText" id="topLoginMsg"></p>
                        <input type="text" value="" name="account" placeholder="用户名/邮箱/手机号" style="color:#b9b9b9" onmouseout="this.className='inputText'" onmousemove="this.className='inputTextOut'"
                               onblur="this.className='inputText';this.onmouseout=function(){this.className='inputText'};if(this.value==''||this.value=='用户名/邮箱/手机号'){this.value='用户名/邮箱/手机号';this.style.color='#b9b9b9';}"
                               onfocus="this.className='inputTextOut';this.onmouseout='';if(this.value=='用户名/邮箱/手机号'){this.value=''};this.style.color='#4f4f4f'" class="inputText"/> <input type="password" id="topLoginBoxPassword" class="inputText" value="请输入密码" style="color:#b9b9b9" placeholder="请输入密码" onmouseout="this.className='inputText'"
                                                                                                                                                                                               onmousemove="this.className='inputTextOut'"
                                                                                                                                                                                               onblur="this.className='inputText';this.onmouseout=function(){this.className='inputText'};if(this.value==''||this.value=='请输入密码'){this.value='请输入密码';this.style.color='#b9b9b9';}"
                                                                                                                                                                                               onfocus="this.className='inputTextOut';this.onmouseout='';if(this.value=='请输入密码'){this.value=''};this.style.color='#4f4f4f'" name="password"/> <input type="submit" value="登录" class="submit"/>
                        <div class="remember">
                            <label><input type="checkbox" class="check" checked="checked" id="topAutoLogin" /><span>自动登录</span></label><a href="<?php echo AUTHHOST ?>/user/login?dispay=web" target="_blank">忘记密码？</a>&nbsp;|&nbsp;<a href="<?php echo AUTHHOST ?>/user/reg?display=web" target="_blank">注册帐号</a>
                        </div>
                    </form>
<!--                    <div class="thirdP">
                        <p>使用合作网站帐号登录：</p>
                        <a class="sina" href="javascript:void(0)">新浪微博</a>
                        <a class="qq" href="javascript:void(0)">QQ账号</a>
                    </div>-->
                    <?php }?>
                </div>
            </li>
            <li>
                <div class="menuShow">
                    <span class="navIcon"></span>
                    <span>帮助中心</span>
                </div>
            </li>
        </ul>
    </div>
</div>
<div id="fullbgTop"></div>
<div id="loginBoxTop" class="dialog"></div>
<!--sitenave e-->

<h1 style="position:absolute;left:-9999px">
      <a href="http://android.d.cn" title="安卓游戏" target="_blank">安卓游戏</a>
</h1>

<div class="header-wrap">
    <div class="header clearfix">
        <div class="logo">
            <a title="当乐安卓频道" href="http://android.d.cn">
                <img src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/logo.png" alt="当乐安卓频道"/>
            </a>
        </div>
        <div class="form clearfix">
            <form id="sForm" method="get" action="http://android.d.cn/search/app/">
                <div class="search-wrap">
                    <i></i>
                    <div class="search-txt">
                        <input id="key" class="txt" type="text" maxlength="30" name="keyword" autocomplete="off"  />     
                    </div>
                </div>
                <div class="search-btn">
                    <button type="submit" class="submit">搜索</button>
                </div>
                <div id="searchResult" class="s-result">
                    
                </div>
            </form>
        </div>
    </div>
</div>
<div class="nav-wrap">
    <ul class="nav clearfix">
        
                <li class="curr"><a href="<?php echo HOST?>" title="小肉粽微信公众号平台">首页<span class="nav-bar"></span></a></li>
            
                <li><a href="/info/l?cid=1" title="微信公众号">公众号</a></li>
            
                <li><a href="/info/l?cid=2" title="微信公众号资讯">资讯</a></li>
            
            
                <li><a href="/info/special" title="微信公众号专题">专题</a></li>
            
                <li><a href="/info/activity" title="微信公众号最新活动">活动<i></i></a></li>
            
    </ul>
</div>
<!--content begin-->
<div class="content">
<!--第一层 begin-->
<div class="layout">
    <!--大图轮播 begin-->
    <div class="ban-wrap" id="banner">
        <div class="ban-main">
            <ul class="ban clearfix">
                <li>    <a target="_blank" href="http://news.d.cn/news/view-23255.html" title="一周评论大事件第十五期">                       <img src="/style/front/public/yg2d6ic8fhofk.jpg"  alt="一周评论大事件第十五期" />   <span class="ban-cover"></span>    <span class="ban-cover-txt">一周评论大事件第十五期</span>   </a> 
                </li>
                <li>    <a target="_blank" href="http://news.d.cn/news/view-23255.html" title="一周评论大事件第十五期">                       <img src="/style/front/public/yg2d6ic8fhofk.jpg"  alt="一周评论大事件第十五期" />   <span class="ban-cover"></span>    <span class="ban-cover-txt">一周评论大事件第十六期</span>   </a> 
                </li>
                <li>    <a target="_blank" href="http://news.d.cn/news/view-23255.html" title="一周评论大事件第十五期">                       <img src="/style/front/public/yg2d6ic8fhofk.jpg"  alt="一周评论大事件第十五期" />   <span class="ban-cover"></span>    <span class="ban-cover-txt">一周评论大事件第十七期</span>   </a> 
                </li>
            </ul>
            <a href="javascript:;" title="" class="ban-next ban-btn" id="next"><i></i></a>
            <a href="javascript:;" title="" class="ban-prev ban-btn" id="prev"><i></i></a>
        </div>
    </div>
    <!--大图轮播 end-->
    <!--第一层 begin-->
    <div class="mod-box layout-r">
        <div class="mod-head">
            <h2 class="cap-first">安卓游戏首发</h2>
        </div>
        <div class="mod-cont mod-first">
            
                <a href="http://android.d.cn/game/55065.html" title="极品飞车最高通缉2015" target="_blank" class="mod-first-icon">
                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://cms/style/front/public/huaqiangu.png" alt="极品飞车最高通缉2015">
                </a>
                <div class="mod-first-des clearfix">
                    <a class="mod-first-tit" href="http://android.d.cn/game/55065.html" title="极品飞车最高通缉2015" target="_blank">极品飞车最高通缉2015</a>
                    <p class="mod-first-txt">
                        “极品飞车”系列最新手游作品，超跑警车追缉模式开启。 
                    </p>
                </div>
                <div class="mod-first-coll">
                    <div class="mod-coll">
                        
                          <a href="javascript:;" title="极品飞车最高通缉2015下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,55065)"></a>
                        
                        <a href="javascript:;" title="极品飞车最高通缉2015喜欢" class="coll-btn coll-love "
                                onclick="Coll.coll(this,1, 55065);"></a>
                    </div>
                </div>
            
        </div>
        <div class="dl-good">
            <h3><i></i>当乐<em>APP</em><span>安卓用户必备</span></h3>
            <ul class="dl-good-list clearfix">
                <li class="good-first">    <a href="" title="当乐游戏中心" class="good-link" target="_blank"><img src="/style/front/public/image/anzhuologo.png" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201406/1402293766893Q0nL.png" alt="当乐游戏中心" /><span>当乐游戏中心</span>    </a></li>
                <li>    <a href="" title="游戏中心PC版" class="good-link" target="_blank"><img src="/style/front/public/image/pclogo.png" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201406/1403753152724Dx0t.png" alt="游戏中心PC版" /><span>游戏中心PC版</span>    </a></li>
                <li class="good-last">    <a href="" title="当乐网游中心" class="good-link" target="_blank"><img src="/style/front/public/image/dangle.png" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201406/1403753153667wNG5.png" alt="当乐网游中心" /><span>当乐网游中心</span>    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--第一层 end-->
<!--第二层 begin-->
<div class="layout">
    <div class="mod-box layout-l">
        <div class="mod-head">
            <h2 class="cap-recom">推荐安卓游戏</h2>
           <p class="mod-class">        <a href="/vendor/836e0443c6127ce8aa1a34cca6ef62e3.html" title="EA游戏" target="_blank">EA</a>        <span class="mod-class-sep"></span>        <a href="/vendor/49f9ae607380fffcac427ad0c1d3b8a0.html" title="Glu游戏" target="_blank">Glu</a>        <span class="mod-class-sep"></span>        <a href="/vendor/c4e1f93d20b3e019c02787343425bc31.html" title="GAMEVIL游戏" target="_blank" style="width: 69px;">GAMEVIL</a>        <span class="mod-class-sep"></span>        <a href="/vendor/4a7c540bd35468880e76690314cd1d55.html" title="Gameloft游戏" target="_blank" style="width: 69px;">Gameloft</a>        <span class="mod-class-sep"></span>        <a href="/paihangbang" title="游戏排行榜" target="_blank">游戏排行榜</a>    </p>  
        </div>
        <div class="mod-cont">
            
                <div class="mod-thumb-b">
                    <a href="http://android.d.cn/game/59560.html" title="触感战争(含数据包)" target="_blank" class="thumb-b-img">
                        <img src="/style/front/public/1436944714893B6dq.jpg" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201507/1435829845793OVl0.jpg" alt="触感战争(含数据包)"/>
                    </a>
                    <a class="thumb-app" href="http://android.d.cn/game/59560.html" title="触感战争(含数据包)" target="_blank">触感战争(含数据包)</a>
                    <div class="mod-cover"></div>
                    <div class="thumb-des-b">
                        <a href="http://android.d.cn/game/59560.html" title="触感战争(含数据包)" target="_blank" class="thumb-app-icon">
                            <i></i>
                            <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img8.android.d.cn/android/new/game_image/60/59560/icon.png" alt="触感战争(含数据包)"/>
                        </a>
                        <div class="thumb-tips">
                            <p class="tips">
                                <span>
                                策略塔防
                                </span>
                                97.97MB
                            </p>
                            <span class="star star-grey">
                                <span class="star star-light stars-4" style="width:80%;"></span>
                            </span>
                            
                              <a class="thumb-down" href="javascript:;" title="触感战争(含数据包)" onclick="Adapt.adaptDown(this,1,59560)">立即下载</a>
                            
                        </div>
                        <div class="thumb-b-func">
                            
                            <a class="b-coll-love "
                               href="javascript:;" onclick="Coll.coll(this,1,59560)"></a>
                        </div>
                        <i class="thumb-tri"></i>
                    </div>
                </div>
            
<ul class="mod-recom mod-list clearfix" style="_float:left; _width: 425px;">

                <li>
                    <div class="mode-app-wrap">
                        <a class="mode-app-name" href="http://android.d.cn/game/59100.html" title="勇者之塔" target="_blank">勇者之塔</a>
                        <div class="mode-app">
                            <a class="mode-app-icon" href="http://android.d.cn/game/59100.html" title="勇者之塔" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img7.android.d.cn/android/new/game_image/0/59100/icon.png" alt="勇者之塔"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="num">
                                 益智休闲
                                </p>
                                21.70MB
                                <p class="star-wrap">
                                    <span class="star star-grey">
                                        <span class="star star-light stars-4"></span>
                                    </span>
                                </p>
                                <div class="mode-app-func">
                                    <div class="mod-coll">
                                        
                                          <a href="javascript:;" title="勇者之塔下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,59100)"></a>
                                        
                                        <a href="javascript:;" title="勇者之塔喜欢" class="coll-btn coll-love "
                                           onclick="Coll.coll(this,1, 59100);"></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            
                <li>
                    <div class="mode-app-wrap">
                        <a class="mode-app-name" href="http://android.d.cn/game/51768.html" title="深空传说亚马逊直装版" target="_blank">深空传说亚马逊直装版</a>
                        <div class="mode-app">
                            <a class="mode-app-icon" href="http://android.d.cn/game/51768.html" title="深空传说亚马逊直装版" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img1.android.d.cn/android/new/game_image/68/51768/icon.png" alt="深空传说亚马逊直装版"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="num">
                                 冒险解谜
                                </p>
                                356.83MB
                                <p class="star-wrap">
                                    <span class="star star-grey">
                                        <span class="star star-light stars-4"></span>
                                    </span>
                                </p>
                                <div class="mode-app-func">
                                    <div class="mod-coll">
                                        
                                          <a href="javascript:;" title="深空传说亚马逊直装版下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,51768)"></a>
                                        
                                        <a href="javascript:;" title="深空传说亚马逊直装版喜欢" class="coll-btn coll-love "
                                           onclick="Coll.coll(this,1, 51768);"></a>
                                    </div>
                                    
                                        <span class="score">8<span>.5</span></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            
                <li>
                    <div class="mode-app-wrap">
                        <a class="mode-app-name" href="http://android.d.cn/game/59166.html" title="死亡飞车高级版(含数据包)" target="_blank">死亡飞车高级版(含数据包)</a>
                        <div class="mode-app">
                            <a class="mode-app-icon" href="http://android.d.cn/game/59166.html" title="死亡飞车高级版(含数据包)" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img1.android.d.cn/android/new/game_image/66/59166/icon.png" alt="死亡飞车高级版(含数据包)"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="num">
                                 竞速游戏
                                </p>
                                317.63MB
                                <p class="star-wrap">
                                    <span class="star star-grey">
                                        <span class="star star-light stars-4"></span>
                                    </span>
                                </p>
                                <div class="mode-app-func">
                                    <div class="mod-coll">
                                        
                                          <a href="javascript:;" title="死亡飞车高级版(含数据包)下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,59166)"></a>
                                        
                                        <a href="javascript:;" title="死亡飞车高级版(含数据包)喜欢" class="coll-btn coll-love "
                                           onclick="Coll.coll(this,1, 59166);"></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            
                <li>
                    <div class="mode-app-wrap">
                        <a class="mode-app-name" href="http://android.d.cn/game/59352.html" title="战锤任务汉化修改版(含数据包)" target="_blank">战锤任务汉化修改版(含数据包)</a>
                        <div class="mode-app">
                            <a class="mode-app-icon" href="http://android.d.cn/game/59352.html" title="战锤任务汉化修改版(含数据包)" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img7.android.d.cn/android/new/game_image/52/59352/icon.png" alt="战锤任务汉化修改版(含数据包)"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="num">
                                 策略塔防
                                </p>
                                510.04MB
                                <p class="star-wrap">
                                    <span class="star star-grey">
                                        <span class="star star-light stars-4"></span>
                                    </span>
                                </p>
                                <div class="mode-app-func">
                                    <div class="mod-coll">
                                        
                                          <a href="javascript:;" title="战锤任务汉化修改版(含数据包)下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,59352)"></a>
                                        
                                        <a href="javascript:;" title="战锤任务汉化修改版(含数据包)喜欢" class="coll-btn coll-love "
                                           onclick="Coll.coll(this,1, 59352);"></a>
                                    </div>
                                    
                                        <span class="score">8<span>.4</span></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            
            </ul><ul class="mod-recom mod-list clearfix">
        
                <li>
                    <div class="mode-app-wrap">
                        <a class="mode-app-name" href="http://android.d.cn/game/43151.html" title="开心消消乐" target="_blank">开心消消乐</a>
                        <div class="mode-app">
                            <a class="mode-app-icon" href="http://android.d.cn/game/43151.html" title="开心消消乐" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img6.android.d.cn/android/new/game_image/51/43151/icon.jpg?clear" alt="开心消消乐"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="num">
                                 益智休闲
                                </p>
                                24.65MB
                                <p class="star-wrap">
                                    <span class="star star-grey">
                                        <span class="star star-light stars-4"></span>
                                    </span>
                                </p>
                                <div class="mode-app-func">
                                    <div class="mod-coll">
                                        
                                          <a href="javascript:;" title="开心消消乐下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,43151)"></a>
                                        
                                        <a href="javascript:;" title="开心消消乐喜欢" class="coll-btn coll-love "
                                           onclick="Coll.coll(this,1, 43151);"></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            
                <li>
                    <div class="mode-app-wrap">
                        <a class="mode-app-name" href="http://android.d.cn/game/54771.html" title="新恶魔猎人" target="_blank">新恶魔猎人</a>
                        <div class="mode-app">
                            <a class="mode-app-icon" href="http://android.d.cn/game/54771.html" title="新恶魔猎人" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img7.android.d.cn/android/new/game_image/71/54771/icon.jpg" alt="新恶魔猎人"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="num">
                                 动作游戏
                                </p>
                                21.04MB
                                <p class="star-wrap">
                                    <span class="star star-grey">
                                        <span class="star star-light stars-4"></span>
                                    </span>
                                </p>
                                <div class="mode-app-func">
                                    <div class="mod-coll">
                                        
                                          <a href="javascript:;" title="新恶魔猎人下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,54771)"></a>
                                        
                                        <a href="javascript:;" title="新恶魔猎人喜欢" class="coll-btn coll-love "
                                           onclick="Coll.coll(this,1, 54771);"></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            
                <li>
                    <div class="mode-app-wrap">
                        <a class="mode-app-name" href="http://ng.d.cn/hqgzb" title="花千骨正版" target="_blank">花千骨正版</a>
                        <div class="mode-app">
                            <a class="mode-app-icon" href="http://ng.d.cn/hqgzb" title="花千骨正版" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.d.cn/netgame/hdlogo/3652_1434620818742_6TPaAkk7.png" alt="花千骨正版"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="num">
                                  <em>角色,仙侠</em>
                                
                                </p>
                                186.70MB
                                <p class="star-wrap">
                                    <span class="star star-grey">
                                        <span class="star star-light stars-4"></span>
                                    </span>
                                </p>
                                <div class="mode-app-func">
                                    <div class="mod-coll">
                                        
                                          <a href="javascript:;" title="花千骨正版下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,5,3652)"></a>
                                        
                                        <a href="javascript:;" title="花千骨正版喜欢" class="coll-btn coll-love "
                                           onclick="Coll.coll(this,5, 3652);"></a>
                                    </div>
                                    
                                        <span class="score">8<span>.2</span></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            
                <li>
                    <div class="mode-app-wrap">
                        <a class="mode-app-name" href="http://android.d.cn/game/57701.html" title="火柴人联盟" target="_blank">火柴人联盟</a>
                        <div class="mode-app">
                            <a class="mode-app-icon" href="http://android.d.cn/game/57701.html" title="火柴人联盟" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img3.android.d.cn/android/new/game_image/1/57701/icon.jpg?clear" alt="火柴人联盟"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="num">
                                 格斗游戏
                                </p>
                                34.01MB
                                <p class="star-wrap">
                                    <span class="star star-grey">
                                        <span class="star star-light stars-4"></span>
                                    </span>
                                </p>
                                <div class="mode-app-func">
                                    <div class="mod-coll">
                                        
                                          <a href="javascript:;" title="火柴人联盟下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,57701)"></a>
                                        
                                        <a href="javascript:;" title="火柴人联盟喜欢" class="coll-btn coll-love "
                                           onclick="Coll.coll(this,1, 57701);"></a>
                                    </div>
                                    
                                        <span class="score">8<span>.0</span></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            
</ul>
        </div>
    </div>
    <div class="mod-box layout-r">
        <div class="mod-head">
            <h3 class="cap-new"><a href="http://android.d.cn/game/yugao/" title="最新安卓游戏预告" target="_blank">新游预告</a></h3>
            <a class="mod-more" href="http://android.d.cn/game/yugao/" title="安卓游戏预告" target="_blank">更多</a>
        </div>
        <ul class="mod-cont mod-coming clearfix">
            <li>                
                <div class="coming">        <a href="http://android.d.cn/game/55993.html" title="狂暴乐园战士 Rampage Land Rankers" class="coming-icon" target="_blank">            <img src="http://raw.android.d.cn/cdroid_res/web/common/transparent.gif" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201507/1435806849169xb0u.jpg" alt="狂暴乐园战士 Rampage Land Rankers" />        </a>        <div class="coming-des">            <a class="coming-tit" href="http://android.d.cn/game/55993.html" title="狂暴乐园战士 Rampage Land Rankers" target="_blank">狂暴乐园战士</a>            <p class="company">游戏厂商：SQEX  </p>            <div class="time">发布时间：2015年7月</div>        </div>    
                </div>    
                <div class="coming-normal">        <a href="http://android.d.cn/game/54875.html" title="狂暴乐园战士 Rampage Land Rankers" class="coming-name" target="_blank">狂暴乐园战士</a>        <span class="coming-class">角色扮演</span><span>2015年7月</span>    
                </div>
            </li>
            <li>    
                <div class="coming">        <a href="http://android.d.cn/game/51672.html" title="我的战争 This War Of Mine" class="coming-icon" target="_blank">            <img src="http://raw.android.d.cn/cdroid_res/web/common/transparent.gif" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201506/1435307071900IdoV.png" alt="我的战争 This War Of Mine" />        </a>        <div class="coming-des">            <a class="coming-tit" href="http://android.d.cn/game/51672.html" title="我的战争 This War Of Mine" target="_blank">我的战争</a>            <p class="company">游戏厂商：11 bit studios</p>            <div class="time">发布时间：2015年7月</div>        </div>    
                </div>    
                <div class="coming-normal">        <a href="http://android.d.cn/game/51672.html" title="我的战争 This War Of Mine" class="coming-name" target="_blank">我的战争</a>        <span class="coming-class">射击游戏</span><span>2015年7月</span>    </div>
            </li>
            <li> <div class="coming">        <a href="http://android.d.cn/game/54660.html" title="死亡效应2 Dead Effect 2" class="coming-icon" target="_blank">            <img src="http://raw.android.d.cn/cdroid_res/web/common/transparent.gif" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201506/1435307539816hS6L.jpg" alt="死亡效应2 Dead Effect 2" />        </a>        <div class="coming-des">            <a class="coming-tit" href="http://android.d.cn/game/54660.html" title="死亡效应2 Dead Effect 2" target="_blank">死亡效应2</a>            <p class="company">游戏厂商：BadFly Interactive</p>            <div class="time">发布时间：2015年9月</div>        </div>    </div>    <div class="coming-normal">        <a href="http://android.d.cn/game/54660.html" title="死亡效应2 Dead Effect 2" class="coming-name" target="_blank">死亡效应2</a>        <span class="coming-class">射击游戏</span><span>2015年9月</span>    </div></li>
            <li>    <div class="coming">        <a href="http://android.d.cn/game/56264.html" title="玩具熊的五夜后宫4" class="coming-icon" target="_blank">            <img src="http://raw.android.d.cn/cdroid_res/web/common/transparent.gif" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201506/14353077604147gQe.png" alt="玩具熊的五夜后宫4" />        </a>        <div class="coming-des">            <a class="coming-tit" href="http://android.d.cn/game/56264.html" title="玩具熊的五夜后宫4" target="_blank">玩具熊的五夜后宫4</a>            <p class="company">游戏厂商：Scottgames</p>            <div class="time">发布时间：2015年10月</div>        </div>    </div>    <div class="coming-normal">        <a href="http://android.d.cn/game/56264.html" title="玩具熊的五夜后宫4" class="coming-name" target="_blank">玩具熊的五夜后宫4</a>        <span class="coming-class">冒险解谜</span><span>2015年10月</span>    </div></li>
            <li>    <div class="coming">        <a href="http://android.d.cn/game/55841.html" title="行尸走肉：无人地带" class="coming-icon" target="_blank">            <img src="http://raw.android.d.cn/cdroid_res/web/common/transparent.gif" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201505/1430616585862okYO.png" alt="行尸走肉：无人地带" />        </a>        <div class="coming-des">            <a class="coming-tit" href="http://android.d.cn/game/55841.html" title="行尸走肉：无人地带" target="_blank">行尸走肉：无人地带</a>            <p class="company">游戏厂商：Next Games</p>            <div class="time">发布时间：2015年3季度</div>        </div>    </div>    <div class="coming-normal">        <a href="http://android.d.cn/game/55841.html" title="行尸走肉：无人地带" class="coming-name" target="_blank">行尸走肉：无人地带</a>        <span class="coming-class">射击游戏</span><span>2015年3季度</span>    </div></li>
            <li>    <div class="coming">        <a href="http://android.d.cn/game/51098.html" title="遗落的水世界 Submerged" class="coming-icon" target="_blank">            <img src="http://raw.android.d.cn/cdroid_res/web/common/transparent.gif" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201505/14315881373154GzU.png" alt="遗落的水世界 Submerged" />        </a>        <div class="coming-des">            <a class="coming-tit" href="http://android.d.cn/game/51098.html" title="遗落的水世界 Submerged" target="_blank">遗落的水世界</a>            <p class="company">游戏厂商：Uppercut Games</p>            <div class="time">发布时间：2015年</div>        </div>    </div>    <div class="coming-normal">        <a href="http://android.d.cn/game/55841.html" title="遗落的水世界 Submerged" class="coming-name" target="_blank">遗落的水世界</a>        <span class="coming-class">冒险解谜</span><span>2015年</span>    </div></li>
            <li>  <div class="coming">        <a href="http://android.d.cn/game/49421.html" title="GTA侠盗猎车手5 Grand Theft Auto Ⅴ" class="coming-icon" target="_blank">            <img src="http://raw.android.d.cn/cdroid_res/web/common/transparent.gif" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201504/1429580698522Ltke.jpg" alt="GTA侠盗猎车手5 Grand Theft Auto Ⅴ" />        </a>        <div class="coming-des">            <a class="coming-tit" href="http://android.d.cn/game/49421.html" title="GTA侠盗猎车手5 Grand Theft Auto Ⅴ" target="_blank">GTA侠盗猎车手5</a>            <p class="company">游戏厂商：Rockstar Games</p>            <div class="time">发布时间：敬请期待</div>        </div>    </div>    <div class="coming-normal">        <a href="http://android.d.cn/game/49421.html" title="GTA侠盗猎车手5" class="coming-name" target="_blank">GTA侠盗猎车手5</a>        <span class="coming-class">动作游戏</span><span>敬请期待</span>    </div>
            </li>
            <li class="curr">    
                <div class="coming">        <a href="http://android.d.cn/game/50546.html" title="纸境 Tengami" class="coming-icon" target="_blank">            <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201411/1416970877924jdr9.jpg" alt="纸境 Tengami" />        </a>        <div class="coming-des">            <a class="coming-tit" href="http://android.d.cn/game/50546.html" title="纸境 Tengami" target="_blank">纸境</a>            <p class="company">游戏厂商：Nyamyam</p>            <div class="time">发布时间：敬请期待</div>        </div>    </div>    
                <div class="coming-normal"><a href="http://android.d.cn/game/50546.html" title="纸境" class="coming-name" target="_blank">纸境</a>        <span class="coming-class">冒险解谜</span><span>敬请期待</span>     
                </div>
            </li>
        </ul>
    </div>
</div>
<!--第二层 end-->
<!--最新安卓游戏 begin-->
<div class="layout">
<div class="mod-box">
<div class="mod-head">
    <h2 class="cap-game"><a href="http://android.d.cn/game/1/" title="安卓最新游戏" target="_blank">最新安卓游戏</a></h2>
    <ul class="mod-nav">
        <li class="curr"><a href="javascript:;" title="安卓最新游戏">最新</a></li>
        <li><a href="javascript:;" title="安卓最热游戏">最热</a></li>
        <li><a href="javascript:;" title="安卓五星游戏">五星</a></li>
    </ul>
    <a class="mod-more" href="http://android.d.cn/game/" title="安卓游戏" target="_blank">更多</a>
    <p class="mod-class">
        <a href="http://android.d.cn/game/list_1_0_4_0_0_0_0_0_0_0_0_1_0.html" title="安卓角色扮演" target="_blank">角色扮演</a>
        <span class="mod-class-sep"></span>
        <a href="http://android.d.cn/game/list_1_0_5_0_0_0_0_0_0_0_0_1_0.html" title="安卓动作游戏" target="_blank">动作游戏</a>
        <span class="mod-class-sep"></span>
        <a href="http://android.d.cn/game/list_1_0_6_0_0_0_0_0_0_0_0_1_0.html" title="安卓冒险解谜" target="_blank">冒险解谜</a>
        <span class="mod-class-sep"></span>
        <a href="http://android.d.cn/game/list_1_0_7_0_0_0_0_0_0_0_0_1_0.html" title="安卓体育运动" target="_blank">体育运动</a>
        <span class="mod-class-sep"></span>
        <a href="http://android.d.cn/game/list_1_0_8_0_0_0_0_0_0_0_0_1_0.html" title="安卓益智休闲" target="_blank">益智休闲</a>
    </p>
</div>
<div class="mod-cont">
    <div class="mod-thumb-b">
        <a href="http://android.d.cn/game/59398.html" title="密室怨魂(含数据包)" target="_blank" class="thumb-b-img">
            <img src="/style/front/public/anzuo1.jpg" o-src="http://img.android.d.cn/new/smtpfbackend/new/news/201506/14356300447063Uxk.png" alt="密室怨魂(含数据包)"/>
        </a>
        <a class="thumb-app" href="http://android.d.cn/game/59398.html" title="密室怨魂(含数据包)">密室怨魂(含数据包)</a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="http://android.d.cn/game/59398.html" title="密室怨魂(含数据包)" target="_blank" class="thumb-app-icon">
                <i></i>
                <img src="/style/front/public/anzuo1.png" o-src="http://img8.android.d.cn/android/new/game_image/98/59398/icon.png" alt="密室怨魂(含数据包)"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span>
                      
                          <em>冒险解谜</em>
                      
                    </span>
                    <span class="time">07-04</span>
                    <span class="sep">|</span>94.29MB
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-4"></span>
                </span>
                
                    <a class="thumb-down" href="javascript:;" title="密室怨魂(含数据包)" onclick="Adapt.adaptDown(this,1,59398)">立即下载</a>
                  
            </div>
            <div class="thumb-b-func">
                
                    <div class="b-score">
                        <span class="score">7<span>.5</span></span>
                    </div>
                
                <a class="b-coll-love "
                   href="javascript:;" onclick="Coll.coll(this,1,59398)"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
        
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/57964.html" title="几何战争3:维度(含数据包)" target="_blank">几何战争3:维度(含数据包)</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/57964.html" title="几何战争3:维度(含数据包)" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img5.android.d.cn/android/new/game_image/64/57964/icon.png" alt="几何战争3:维度(含数据包)"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>射击游戏</em>
                                      
                                       
                                    </p>
                                    <p class="time">
                                        07-04
                                        <span class="sep">|</span>
                                            70.99MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-4"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="几何战争3:维度(含数据包)下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,57964)"></a>
                                              
                                            <a href="javascript:;" title="几何战争3:维度(含数据包)喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 57964);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/32163.html" title="孤胆车神:维加斯离线版(含数据包)" target="_blank">孤胆车神:维加斯离线版(含数据包)</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/32163.html" title="孤胆车神:维加斯离线版(含数据包)" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img7.android.d.cn/android/new/game_image/63/32163/icon.png" alt="孤胆车神:维加斯离线版(含数据包)"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>动作游戏</em>
                                      
                                       
                                    </p>
                                    <p class="time">
                                        07-04
                                        <span class="sep">|</span>
                                            1.32GB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="孤胆车神:维加斯离线版(含数据包)下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,32163)"></a>
                                              
                                            <a href="javascript:;" title="孤胆车神:维加斯离线版(含数据包)喜欢" class="coll-btn coll-love curr"
                                               onclick="Coll.coll(this,1, 32163);"></a>
                                        </div>
                                        
                                            <span class="score">8<span>.2</span></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/59696.html" title="飞吧火箭" target="_blank">飞吧火箭</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/59696.html" title="飞吧火箭" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img9.android.d.cn/android/new/game_image/96/59696/icon.png" alt="飞吧火箭"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>益智休闲</em>
                                      
                                       
                                    </p>
                                    <p class="time">
                                        07-04
                                        <span class="sep">|</span>
                                            37.89MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-3"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="飞吧火箭下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,59696)"></a>
                                              
                                            <a href="javascript:;" title="飞吧火箭喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 59696);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/59176.html" title="迷你乐高Online(含数据包)" target="_blank">迷你乐高Online(含数据包)</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/59176.html" title="迷你乐高Online(含数据包)" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img2.android.d.cn/android/new/game_image/76/59176/icon.png" alt="迷你乐高Online(含数据包)"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>冒险解谜</em>
                                      
                                       
                                    </p>
                                    <p class="time">
                                        07-04
                                        <span class="sep">|</span>
                                            1.06GB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-3"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="迷你乐高Online(含数据包)下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,59176)"></a>
                                              
                                            <a href="javascript:;" title="迷你乐高Online(含数据包)喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 59176);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/59694.html" title="恋爱学校" target="_blank">恋爱学校</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/59694.html" title="恋爱学校" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img7.android.d.cn/android/new/game_image/94/59694/icon.png" alt="恋爱学校"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>益智休闲</em>
                                      
                                       
                                    </p>
                                    <p class="time">
                                        07-04
                                        <span class="sep">|</span>
                                            32.58MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-3"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="恋爱学校下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,59694)"></a>
                                              
                                            <a href="javascript:;" title="恋爱学校喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 59694);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/59693.html" title="末日逃离" target="_blank">末日逃离</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/59693.html" title="末日逃离" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img6.android.d.cn/android/new/game_image/93/59693/icon.png" alt="末日逃离"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>益智休闲</em>
                                      
                                       
                                    </p>
                                    <p class="time">
                                        07-04
                                        <span class="sep">|</span>
                                            43.08MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-3"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="末日逃离下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,59693)"></a>
                                              
                                            <a href="javascript:;" title="末日逃离喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 59693);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
    </ul>
</div>
<div class="mod-cont hide">
    <div class="mod-thumb-b">
        <a href="http://android.d.cn/game/9149.html" title="神庙逃亡中文版" target="_blank" class="thumb-b-img">
            <img o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201407/1405237430719xvd6.jpg" src="http://cms/style/front/public/huaqiangu.png" alt="神庙逃亡中文版"/>
        </a>
        <a class="thumb-app" href="http://android.d.cn/game/9149.html" title="神庙逃亡中文版" target="_blank">神庙逃亡中文版</a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="http://android.d.cn/game/9149.html" title="神庙逃亡中文版" target="_blank" class="thumb-app-icon">
                <i></i>
                <img o-src="http://img6.android.d.cn/android/new/game_image/49/9149/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="神庙逃亡中文版"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span>
                      
                          <em>益智休闲</em>
                      
                    </span>
                    <span class="time">08-25</span>
                    <span class="sep">|</span>27.26MB
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-5"></span>
                </span>
                
                    <a class="thumb-down" href="javascript:;" title="神庙逃亡中文版" onclick="Adapt.adaptDown(this,1,9149)">立即下载</a>
                  
            </div>
            <div class="thumb-b-func">
                
                    <div class="b-score">
                        <span class="score">9<span>.0</span></span>
                    </div>
                
                <a class="b-coll-love "
                   href="javascript:;" onclick="Coll.coll(this,1,9149)"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
        
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/36780.html" title="NBA2K14" target="_blank">NBA2K14</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/36780.html" title="NBA2K14" target="_blank">
                                    <img o-src="http://img7.android.d.cn/android/new/game_image/80/36780/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="NBA2K14"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>体育运动</em>
                                      
                                    </p>
                                    <p class="time">
                                        05-27
                                        <span class="sep">|</span>
                                            784.72MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="NBA2K14下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,36780)"></a>
                                              
                                            <a href="javascript:;" title="NBA2K14喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 36780);"></a>
                                        </div>
                                        
                                            <span class="score">7<span>.9</span></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/4214.html" title="捕鱼达人官方授权正版" target="_blank">捕鱼达人官方授权正版</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/4214.html" title="捕鱼达人官方授权正版" target="_blank">
                                    <img o-src="http://img3.android.d.cn/android/new/game_image/14/4214/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="捕鱼达人官方授权正版"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>益智休闲</em>
                                      
                                    </p>
                                    <p class="time">
                                        11-08
                                        <span class="sep">|</span>
                                            37.73MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="捕鱼达人官方授权正版下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,4214)"></a>
                                              
                                            <a href="javascript:;" title="捕鱼达人官方授权正版喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 4214);"></a>
                                        </div>
                                        
                                            <span class="score">7<span>.6</span></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/798.html" title="愤怒的小鸟之守蛋计划" target="_blank">愤怒的小鸟之守蛋计划</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/798.html" title="愤怒的小鸟之守蛋计划" target="_blank">
                                    <img o-src="http://img7.android.d.cn/android/new/game_image/98/798/icon.jpg?clear" src="http://cms/style/front/public/huaqiangu.png" alt="愤怒的小鸟之守蛋计划"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>益智休闲</em>
                                      
                                    </p>
                                    <p class="time">
                                        07-02
                                        <span class="sep">|</span>
                                            58.36MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="愤怒的小鸟之守蛋计划下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,798)"></a>
                                              
                                            <a href="javascript:;" title="愤怒的小鸟之守蛋计划喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 798);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/16610.html" title="地铁跑酷（洛杉矶版）" target="_blank">地铁跑酷（洛杉矶版）</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/16610.html" title="地铁跑酷（洛杉矶版）" target="_blank">
                                    <img o-src="http://img6.android.d.cn/android/new/game_image/10/16610/icon.jpg?clear" src="http://cms/style/front/public/huaqiangu.png" alt="地铁跑酷（洛杉矶版）"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>益智休闲</em>
                                      
                                    </p>
                                    <p class="time">
                                        06-10
                                        <span class="sep">|</span>
                                            39.74MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="地铁跑酷（洛杉矶版）下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,16610)"></a>
                                              
                                            <a href="javascript:;" title="地铁跑酷（洛杉矶版）喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 16610);"></a>
                                        </div>
                                        
                                            <span class="score">8<span>.9</span></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/14219.html" title="火箭飞人(含数据包)" target="_blank">火箭飞人(含数据包)</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/14219.html" title="火箭飞人(含数据包)" target="_blank">
                                    <img o-src="http://img9.android.d.cn/android/new/game_image/19/14219/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="火箭飞人(含数据包)"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>动作游戏</em>
                                      
                                    </p>
                                    <p class="time">
                                        10-10
                                        <span class="sep">|</span>
                                            51.57MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="火箭飞人(含数据包)下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,14219)"></a>
                                              
                                            <a href="javascript:;" title="火箭飞人(含数据包)喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 14219);"></a>
                                        </div>
                                        
                                            <span class="score">8<span>.3</span></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/11097.html" title="三国志无双战" target="_blank">三国志无双战</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/11097.html" title="三国志无双战" target="_blank">
                                    <img o-src="http://img1.android.d.cn/android/new/game_image/97/11097/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="三国志无双战"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                        <em>动作游戏</em>
                                      
                                    </p>
                                    <p class="time">
                                        07-31
                                        <span class="sep">|</span>
                                            158.05MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="三国志无双战下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,11097)"></a>
                                              
                                            <a href="javascript:;" title="三国志无双战喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 11097);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
    </ul>
</div>
<div class="mod-cont hide">
    <div class="mod-thumb-b">
        <a href="http://android.d.cn/game/50494.html" title="王国保卫战:起源(含数据包)" target="_blank" class="thumb-b-img">
            <img o-src="http://img.android.d.cn/new/smtpfbackend/new/news/201411/14164960998987Ryh.jpg" src="http://cms/style/front/public/huaqiangu.png" alt="王国保卫战:起源(含数据包)"/>
        </a>
        <a class="thumb-app" href="http://android.d.cn/game/50494.html" title="王国保卫战:起源(含数据包)" target="_blank">王国保卫战:起源(含数据包)</a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="http://android.d.cn/game/50494.html" title="王国保卫战:起源(含数据包)" target="_blank" class="thumb-app-icon">
                <i></i>
                <img o-src="http://img5.android.d.cn/android/new/game_image/94/50494/icon.png?clear" src="http://cms/style/front/public/huaqiangu.png" alt="王国保卫战:起源(含数据包)"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span>
                      
                          <em>策略塔防</em>
                      
                    </span>
                    <span class="time">07-03</span>
                    <span class="sep">|</span>219.66MB
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-5"></span>
                </span>
                
                    <a class="thumb-down" href="javascript:;" title="王国保卫战:起源(含数据包)" onclick="Adapt.adaptDown(this,1,50494)">立即下载</a>
                  
            </div>
            <div class="thumb-b-func">
                
                    <div class="b-score">
                        <span class="score">9<span>.5</span></span>
                    </div>
                
                <a class="b-coll-love "
                   href="javascript:;" onclick="Coll.coll(this,1,50494)"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
        
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/14009.html" title="Cytus音乐节奏破解版(含数据包)" target="_blank">Cytus音乐节奏破解版(含数据包)</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/14009.html" title="Cytus音乐节奏破解版(含数据包)" target="_blank">
                                    <img o-src="http://img6.android.d.cn/android/new/game_image/9/14009/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="Cytus音乐节奏破解版(含数据包)"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                         <em>音乐游戏</em>
                                      
                                    </p>
                                    <p class="time">
                                        07-04
                                        <span class="sep">|</span>
                                            820.60MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="Cytus音乐节奏破解版(含数据包)下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,14009)"></a>
                                              
                                            <a href="javascript:;" title="Cytus音乐节奏破解版(含数据包)喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 14009);"></a>
                                        </div>
                                        
                                            <span class="score">8<span>.1</span></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/32163.html" title="孤胆车神:维加斯离线版(含数据包)" target="_blank">孤胆车神:维加斯离线版(含数据包)</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/32163.html" title="孤胆车神:维加斯离线版(含数据包)" target="_blank">
                                    <img o-src="http://img7.android.d.cn/android/new/game_image/63/32163/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="孤胆车神:维加斯离线版(含数据包)"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                         <em>动作游戏</em>
                                      
                                    </p>
                                    <p class="time">
                                        07-04
                                        <span class="sep">|</span>
                                            1.32GB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="孤胆车神:维加斯离线版(含数据包)下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,32163)"></a>
                                              
                                            <a href="javascript:;" title="孤胆车神:维加斯离线版(含数据包)喜欢" class="coll-btn coll-love curr"
                                               onclick="Coll.coll(this,1, 32163);"></a>
                                        </div>
                                        
                                            <span class="score">8<span>.2</span></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/12759.html" title="愤怒的小鸟太空版高清版" target="_blank">愤怒的小鸟太空版高清版</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/12759.html" title="愤怒的小鸟太空版高清版" target="_blank">
                                    <img o-src="http://img7.android.d.cn/android/new/game_image/59/12759/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="愤怒的小鸟太空版高清版"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                         <em>益智休闲</em>
                                      
                                    </p>
                                    <p class="time">
                                        07-03
                                        <span class="sep">|</span>
                                            47.98MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="愤怒的小鸟太空版高清版下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,12759)"></a>
                                              
                                            <a href="javascript:;" title="愤怒的小鸟太空版高清版喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 12759);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/9049.html" title="愤怒的小鸟太空版无广告版" target="_blank">愤怒的小鸟太空版无广告版</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/9049.html" title="愤怒的小鸟太空版无广告版" target="_blank">
                                    <img o-src="http://img5.android.d.cn/android/new/game_image/49/9049/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="愤怒的小鸟太空版无广告版"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                         <em>益智休闲</em>
                                      
                                    </p>
                                    <p class="time">
                                        07-03
                                        <span class="sep">|</span>
                                            47.95MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="愤怒的小鸟太空版无广告版下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,9049)"></a>
                                              
                                            <a href="javascript:;" title="愤怒的小鸟太空版无广告版喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 9049);"></a>
                                        </div>
                                        
                                            <span class="score">9<span>.6</span></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/9045.html" title="愤怒的小鸟太空版" target="_blank">愤怒的小鸟太空版</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/9045.html" title="愤怒的小鸟太空版" target="_blank">
                                    <img o-src="http://img1.android.d.cn/android/new/game_image/45/9045/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="愤怒的小鸟太空版"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                         <em>益智休闲</em>
                                      
                                    </p>
                                    <p class="time">
                                        07-03
                                        <span class="sep">|</span>
                                            47.95MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="愤怒的小鸟太空版下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,9045)"></a>
                                              
                                            <a href="javascript:;" title="愤怒的小鸟太空版喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 9045);"></a>
                                        </div>
                                        
                                            <span class="score">9<span>.6</span></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/game/798.html" title="愤怒的小鸟之守蛋计划" target="_blank">愤怒的小鸟之守蛋计划</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/game/798.html" title="愤怒的小鸟之守蛋计划" target="_blank">
                                    <img o-src="http://img7.android.d.cn/android/new/game_image/98/798/icon.jpg?clear" src="http://cms/style/front/public/huaqiangu.png" alt="愤怒的小鸟之守蛋计划"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                      
                                         <em>益智休闲</em>
                                      
                                    </p>
                                    <p class="time">
                                        07-02
                                        <span class="sep">|</span>
                                            58.36MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                                <a href="javascript:;" title="愤怒的小鸟之守蛋计划下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,798)"></a>
                                              
                                            <a href="javascript:;" title="愤怒的小鸟之守蛋计划喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,1, 798);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
    </ul>
</div>
</div>
</div>
<!--最新安卓游戏 end-->
<!--bt游戏 begin-->

        <div class="layout">
            <div class="mod-box">
                <div class="mod-head">
                    <h2 class="cap-bt"><a href="http://android.d.cn/game/list_5_1_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓破解游戏_安卓修改游戏" target="_blank">安卓破解游戏</a></h2>
                    <a class="mod-more" href="http://android.d.cn/game/list_5_1_0_0_0_0_0_0_0_0_0_1_0.html" title="安卓破解游戏" target="_blank">更多</a>
                </div>
                <div class="mod-cont">
                    <ul class="mod-bt mod-list clearfix">
                        
                            <li>
                                <div class="mode-app-wrap">
                                    <a class="mode-app-icon" href="http://android.d.cn/game/14009.html" title="Cytus音乐节奏破解版(含数据包)" target="_blank">
                                        <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img6.android.d.cn/android/new/game_image/9/14009/icon.png" alt="Cytus音乐节奏破解版(含数据包)">
                                    </a>
                                    <div class="mode-app-des">
                                        <a class="mode-app-name" href="http://android.d.cn/game/14009.html" target="_blank" title="Cytus音乐节奏破解版(含数据包)">Cytus音乐节奏破解版(含数据包)</a>
                                        <p class="mode-app-txt time">
                                            07-04
                                            <span class="sep">|</span>820.60MB
                                        </p>
                                        <div class="mode-app-func">
                                            <span class="star star-grey">
                                                <span class="star star-light stars-5"></span>
                                            </span>
                                            <div class="mod-coll">
                                                
                                                  <a href="javascript:;" title="Cytus音乐节奏破解版(含数据包)" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,14009)"></a>
                                                
                                                <a href="javascript:;" title="Cytus音乐节奏破解版(含数据包)"
                                                   class="coll-btn coll-love "
                                                   onclick="Coll.coll(this,1, 14009);"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        
                            <li>
                                <div class="mode-app-wrap">
                                    <a class="mode-app-icon" href="http://android.d.cn/game/51852.html" title="玩具堡修改版(含数据包)" target="_blank">
                                        <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img4.android.d.cn/android/new/game_image/52/51852/icon.png?clear" alt="玩具堡修改版(含数据包)">
                                    </a>
                                    <div class="mode-app-des">
                                        <a class="mode-app-name" href="http://android.d.cn/game/51852.html" target="_blank" title="玩具堡修改版(含数据包)">玩具堡修改版(含数据包)</a>
                                        <p class="mode-app-txt time">
                                            07-01
                                            <span class="sep">|</span>249.94MB
                                        </p>
                                        <div class="mode-app-func">
                                            <span class="star star-grey">
                                                <span class="star star-light stars-4"></span>
                                            </span>
                                            <div class="mod-coll">
                                                
                                                  <a href="javascript:;" title="玩具堡修改版(含数据包)" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,51852)"></a>
                                                
                                                <a href="javascript:;" title="玩具堡修改版(含数据包)"
                                                   class="coll-btn coll-love "
                                                   onclick="Coll.coll(this,1, 51852);"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        
                            <li>
                                <div class="mode-app-wrap">
                                    <a class="mode-app-icon" href="http://android.d.cn/game/59517.html" title="线上赛车修改版(含数据包)" target="_blank">
                                        <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img1.android.d.cn/android/new/game_image/17/59517/icon.png" alt="线上赛车修改版(含数据包)">
                                    </a>
                                    <div class="mode-app-des">
                                        <a class="mode-app-name" href="http://android.d.cn/game/59517.html" target="_blank" title="线上赛车修改版(含数据包)">线上赛车修改版(含数据包)</a>
                                        <p class="mode-app-txt time">
                                            07-01
                                            <span class="sep">|</span>241.96MB
                                        </p>
                                        <div class="mode-app-func">
                                            <span class="star star-grey">
                                                <span class="star star-light stars-3"></span>
                                            </span>
                                            <div class="mod-coll">
                                                
                                                  <a href="javascript:;" title="线上赛车修改版(含数据包)" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,59517)"></a>
                                                
                                                <a href="javascript:;" title="线上赛车修改版(含数据包)"
                                                   class="coll-btn coll-love "
                                                   onclick="Coll.coll(this,1, 59517);"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        
                            <li>
                                <div class="mode-app-wrap">
                                    <a class="mode-app-icon" href="http://android.d.cn/game/59481.html" title="海难求生修改版(含数据包)" target="_blank">
                                        <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img1.android.d.cn/android/new/game_image/81/59481/icon.png" alt="海难求生修改版(含数据包)">
                                    </a>
                                    <div class="mode-app-des">
                                        <a class="mode-app-name" href="http://android.d.cn/game/59481.html" target="_blank" title="海难求生修改版(含数据包)">海难求生修改版(含数据包)</a>
                                        <p class="mode-app-txt time">
                                            07-01
                                            <span class="sep">|</span>70.60MB
                                        </p>
                                        <div class="mode-app-func">
                                            <span class="star star-grey">
                                                <span class="star star-light stars-3"></span>
                                            </span>
                                            <div class="mod-coll">
                                                
                                                  <a href="javascript:;" title="海难求生修改版(含数据包)" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,59481)"></a>
                                                
                                                <a href="javascript:;" title="海难求生修改版(含数据包)"
                                                   class="coll-btn coll-love "
                                                   onclick="Coll.coll(this,1, 59481);"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    
<!--bt游戏 end-->
<!--大型游戏 begin-->

        <div class="layout">
            <div class="mod-box">
                <div class="mod-head">
                    <h2 class="cap-big"><a href="http://android.d.cn/game/list_3_1_0_0_0_0_0_0_0_0_0_1_0.html" title="大型安卓游戏" target="_blank">大型安卓游戏</a></h2>
                    <a class="mod-more" href="http://android.d.cn/game/list_3_1_0_0_0_0_0_0_0_0_0_1_0.html" title="大型安卓游戏" target="_blank">更多</a>
                </div>
                <div class="mod-cont">
                    <ul class="mod-bt mod-list clearfix">
                        
                            <li>
                                <div class="mode-app-wrap">
                                    <a class="mode-app-icon" href="http://android.d.cn/game/32163.html" title="孤胆车神:维加斯离线版(含数据包)" target="_blank">
                                        <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img7.android.d.cn/android/new/game_image/63/32163/icon.png" alt="孤胆车神:维加斯离线版(含数据包)">
                                    </a>

                                    <div class="mode-app-des">
                                        <a class="mode-app-name" href="http://android.d.cn/game/32163.html" target="_blank" title="孤胆车神:维加斯离线版(含数据包)">孤胆车神:维加斯离线版(含数据包)</a>

                                        <p class="mode-app-txt time">
                                            07-04
                                            <span class="sep">|</span>1.32GB
                                        </p>

                                        <div class="mode-app-func">
                                            <span class="star star-grey">
                                                <span class="star star-light stars-5"></span>
                                            </span>

                                            <div class="mod-coll">
                                                
                                                  <a href="javascript:;" title="孤胆车神:维加斯离线版(含数据包)" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,32163)"></a>
                                                
                                                <a href="javascript:;" title="孤胆车神:维加斯离线版(含数据包)"
                                                   class="coll-btn coll-love curr"
                                                   onclick="Coll.coll(this,1, 32163);"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        
                            <li>
                                <div class="mode-app-wrap">
                                    <a class="mode-app-icon" href="http://android.d.cn/game/54786.html" title="虚荣(含数据包)" target="_blank">
                                        <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img4.android.d.cn/android/new/game_image/86/54786/icon.png" alt="虚荣(含数据包)">
                                    </a>

                                    <div class="mode-app-des">
                                        <a class="mode-app-name" href="http://android.d.cn/game/54786.html" target="_blank" title="虚荣(含数据包)">虚荣(含数据包)</a>

                                        <p class="mode-app-txt time">
                                            07-01
                                            <span class="sep">|</span>544.72MB
                                        </p>

                                        <div class="mode-app-func">
                                            <span class="star star-grey">
                                                <span class="star star-light stars-4"></span>
                                            </span>

                                            <div class="mod-coll">
                                                
                                                  <a href="javascript:;" title="虚荣(含数据包)" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,54786)"></a>
                                                
                                                <a href="javascript:;" title="虚荣(含数据包)"
                                                   class="coll-btn coll-love "
                                                   onclick="Coll.coll(this,1, 54786);"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        
                            <li>
                                <div class="mode-app-wrap">
                                    <a class="mode-app-icon" href="http://android.d.cn/game/10279.html" title="机械迷城中文版(含数据包)" target="_blank">
                                        <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img2.android.d.cn/android/new/game_image/79/10279/icon.png" alt="机械迷城中文版(含数据包)">
                                    </a>

                                    <div class="mode-app-des">
                                        <a class="mode-app-name" href="http://android.d.cn/game/10279.html" target="_blank" title="机械迷城中文版(含数据包)">机械迷城中文版(含数据包)</a>

                                        <p class="mode-app-txt time">
                                            06-30
                                            <span class="sep">|</span>231.60MB
                                        </p>

                                        <div class="mode-app-func">
                                            <span class="star star-grey">
                                                <span class="star star-light stars-5"></span>
                                            </span>

                                            <div class="mod-coll">
                                                
                                                  <a href="javascript:;" title="机械迷城中文版(含数据包)" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,10279)"></a>
                                                
                                                <a href="javascript:;" title="机械迷城中文版(含数据包)"
                                                   class="coll-btn coll-love "
                                                   onclick="Coll.coll(this,1, 10279);"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        
                            <li>
                                <div class="mode-app-wrap">
                                    <a class="mode-app-icon" href="http://android.d.cn/game/30130.html" title="闪电突击队(含数据包)" target="_blank">
                                        <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img8.android.d.cn/android/new/game_image/30/30130/icon.png" alt="闪电突击队(含数据包)">
                                    </a>

                                    <div class="mode-app-des">
                                        <a class="mode-app-name" href="http://android.d.cn/game/30130.html" target="_blank" title="闪电突击队(含数据包)">闪电突击队(含数据包)</a>

                                        <p class="mode-app-txt time">
                                            06-24
                                            <span class="sep">|</span>724.50MB
                                        </p>

                                        <div class="mode-app-func">
                                            <span class="star star-grey">
                                                <span class="star star-light stars-5"></span>
                                            </span>

                                            <div class="mod-coll">
                                                
                                                  <a href="javascript:;" title="闪电突击队(含数据包)" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,30130)"></a>
                                                
                                                <a href="javascript:;" title="闪电突击队(含数据包)"
                                                   class="coll-btn coll-love "
                                                   onclick="Coll.coll(this,1, 30130);"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    
<!--大型游戏 end-->
<!--蛋疼的轮播 begin-->
<div class="layout">
    <div class="mode-box">
        <div class="scroll-wrap" id="slideWrap">
            <div class="scroll-cont">
                <ul class="scroll-list">
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%BF%85%E5%A4%87%E6%B8%B8%E6%88%8F" title="必备游戏" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/40/40/icon.jpg" alt="必备游戏"/>
                                <span class="scroll-name">必备游戏</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%BF%85%E5%A4%87%E8%BD%AF%E4%BB%B6" title="必备软件" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/39/39/icon.jpg" alt="必备软件"/>
                                <span class="scroll-name">必备软件</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E4%B8%8A%E5%8E%95%E6%89%80" title="上厕所" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/38/38/icon.jpg" alt="上厕所"/>
                                <span class="scroll-name">上厕所</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E8%A7%A3%E8%B0%9C" title="解谜" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/34/34/icon.jpg" alt="解谜"/>
                                <span class="scroll-name">解谜</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%AF%B9%E6%88%98" title="对战" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/30/30/icon.jpg" alt="对战"/>
                                <span class="scroll-name">对战</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%B0%8F%E6%B8%85%E6%96%B0" title="小清新" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/28/28/icon.jpg" alt="小清新"/>
                                <span class="scroll-name">小清新</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E7%94%B5%E5%BD%B1%E6%94%B9%E7%BC%96" title="电影改编" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/27/27/icon.jpg" alt="电影改编"/>
                                <span class="scroll-name">电影改编</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E9%87%8D%E5%8F%A3%E5%91%B3" title="重口味" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/24/24/icon.jpg" alt="重口味"/>
                                <span class="scroll-name">重口味</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E9%87%8D%E5%8A%9B%E6%84%9F%E5%BA%94" title="重力感应" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/18/18/icon.jpg" alt="重力感应"/>
                                <span class="scroll-name">重力感应</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%84%BF%E7%AB%A5" title="儿童" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/17/17/icon.jpg" alt="儿童"/>
                                <span class="scroll-name">儿童</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=3D" title="3D" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/16/16/icon.jpg" alt="3D"/>
                                <span class="scroll-name">3D</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=HD%E9%AB%98%E6%B8%85" title="HD高清" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/14/14/icon.jpg" alt="HD高清"/>
                                <span class="scroll-name">HD高清</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%A4%A7%E5%9E%8B%E6%B8%B8%E6%88%8F" title="大型游戏" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/13/13/icon.jpg" alt="大型游戏"/>
                                <span class="scroll-name">大型游戏</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%A5%B3%E7%94%9F%E6%9C%80%E7%88%B1" title="女生最爱" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/12/12/icon.jpg" alt="女生最爱"/>
                                <span class="scroll-name">女生最爱</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E6%B6%88%E7%A3%A8%E6%97%B6%E9%97%B4" title="消磨时间" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/10/10/icon.jpg" alt="消磨时间"/>
                                <span class="scroll-name">消磨时间</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%A1%94%E9%98%B2" title="塔防" target="_blank"
                               class="scroll-icon">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/8/8/icon.jpg" alt="塔防"/>
                                <span class="scroll-name">塔防</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E7%94%B7%E7%94%9F%E6%9C%80%E7%88%B1" title="男生最爱" target="_blank"
                               class="scroll-icon">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.android.d.cn/android/cdroid_stable/clienttag/6/6/icon.jpg" alt="男生最爱"/>
                                <span class="scroll-name">男生最爱</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                </ul>
            </div>
            <a class="scroll-btn scroll-prev" id="scrollPrev" href="javascript:;" title="上一组"></a>
            <a class="scroll-btn scroll-next" id="scrollNext" href="javascript:;" title="下一组"></a>
        </div>
    </div>
</div>
<!--蛋疼的轮播 end-->
<!--最新安卓软件 begin-->
<div class="layout">
<div class="mod-box">
<div class="mod-head">
    <h2 class="cap-soft"><a href="http://android.d.cn/software/1/" title="安卓最新软件" target="_blank">最新安卓软件</a></h2>
    <ul class="mod-nav">
        <li class="curr"><a href="javascript:;" title="安卓最新软件">最新</a></li>
        <li><a href="javascript:;" title="安卓最热软件">最热</a></li>
        <li><a href="javascript:;" title="安卓五星软件">五星</a></li>
    </ul>
    <a class="mod-more" href="http://android.d.cn/software/" title="安卓最新软件" target="_blank">更多</a>
    <p class="mod-class">
        <a href="http://android.d.cn/software/list_1_18_0_1.html" title="安卓通讯增强" target="_blank">通讯增强</a>
        <span class="mod-class-sep"></span>
        <a href="http://android.d.cn/software/list_1_19_0_1.html" title="安卓信息增强" target="_blank">信息增强</a>
        <span class="mod-class-sep"></span>
        <a href="http://android.d.cn/software/list_1_20_0_1.html" title="安卓系统工具" target="_blank">系统工具</a>
        <span class="mod-class-sep"></span>
        <a href="http://android.d.cn/software/list_1_21_0_1.html" title="安卓文件管理" target="_blank">文件管理</a>
        <span class="mod-class-sep"></span>
        <a href="http://android.d.cn/software/list_1_22_0_1.html" title="安卓音乐播放" target="_blank">音乐播放</a>
    </p>
</div>
<div class="mod-cont">
    <div class="mod-thumb-b">
        <a href="http://android.d.cn/software/407.html" title="淘宝" target="_blank" class="thumb-b-img">
            <img src="/style/front/public/anzuo1.jpg" o-src="http://img.android.d.cn/new/smtpfbackend/new/news/201408/1407131325997jDq0.jpg" alt="淘宝"/>
        </a>
        <a class="thumb-app" href="http://android.d.cn/software/407.html" title="淘宝" target="_blank">淘宝</a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="http://android.d.cn/software/407.html" title="淘宝" target="_blank" class="thumb-app-icon">
                <i></i>
                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img3.android.d.cn/android/new/game_image/7/407/icon.png" alt="淘宝"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span>
                       
                         <em>网络浏览</em>
                    </span>
                    <span class="time">05-29</span>
                    <span class="sep">|</span>32.34MB
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-5"></span>
                </span>
                
                  <a class="thumb-down" href="javascript:;" title="淘宝" onclick="Adapt.adaptDown(this,2,407)">立即下载</a>
                
            </div>
            <div class="thumb-b-func">
                
                <a class="b-coll-love "
                   href="javascript:;" onclick="Coll.coll(this,2,407)"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
        
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/18416.html" title="开心熊宝" target="_blank">开心熊宝</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/18416.html" title="开心熊宝" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img3.android.d.cn/android/new/game_image/16/18416/icon.png" alt="开心熊宝"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                        
                                       <em>游戏娱乐</em>
                                        
                                    </p>
                                    <p class="time">
                                        07-03
                                        <span class="sep">|</span>
                                            19.82MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-4"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="开心熊宝下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,18416)"></a>
                                            
                                            <a href="javascript:;" title="开心熊宝喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 18416);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/4601.html" title="百度视频" target="_blank">百度视频</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/4601.html" title="百度视频" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img3.android.d.cn/android/new/game_image/1/4601/icon.jpg" alt="百度视频"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                        
                                       <em>视频播放</em>
                                        
                                    </p>
                                    <p class="time">
                                        07-02
                                        <span class="sep">|</span>
                                            23.22MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-4"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="百度视频下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,4601)"></a>
                                            
                                            <a href="javascript:;" title="百度视频喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 4601);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/9896.html" title="搜狗号码通" target="_blank">搜狗号码通</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/9896.html" title="搜狗号码通" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img6.android.d.cn/android/new/game_image/96/9896/icon.png" alt="搜狗号码通"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                        
                                       <em>通讯增强</em>
                                        
                                    </p>
                                    <p class="time">
                                        05-28
                                        <span class="sep">|</span>
                                            4.35MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-4"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="搜狗号码通下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,9896)"></a>
                                            
                                            <a href="javascript:;" title="搜狗号码通喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 9896);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/55836.html" title="古诗词典" target="_blank">古诗词典</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/55836.html" title="古诗词典" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img1.android.d.cn/android/new/game_image/36/55836/icon.png" alt="古诗词典"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                        
                                       <em>学习帮助</em>
                                        
                                    </p>
                                    <p class="time">
                                        07-03
                                        <span class="sep">|</span>
                                            23.95MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-3"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="古诗词典下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,55836)"></a>
                                            
                                            <a href="javascript:;" title="古诗词典喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 55836);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/51039.html" title="花熊" target="_blank">花熊</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/51039.html" title="花熊" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img1.android.d.cn/android/new/game_image/39/51039/icon.png" alt="花熊"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                        
                                       <em>社区交友</em>
                                        
                                    </p>
                                    <p class="time">
                                        07-03
                                        <span class="sep">|</span>
                                            8.75MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-3"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="花熊下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,51039)"></a>
                                            
                                            <a href="javascript:;" title="花熊喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 51039);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/1175.html" title="爱奇艺视频" target="_blank">爱奇艺视频</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/1175.html" title="爱奇艺视频" target="_blank">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img6.android.d.cn/android/new/game_image/75/1175/icon.jpg" alt="爱奇艺视频"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                        
                                       <em>视频播放</em>
                                        
                                    </p>
                                    <p class="time">
                                        06-03
                                        <span class="sep">|</span>
                                            10.73MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="爱奇艺视频下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,1175)"></a>
                                            
                                            <a href="javascript:;" title="爱奇艺视频喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 1175);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
    </ul>
</div>
<div class="mod-cont hide">
    <div class="mod-thumb-b">
        <a href="http://android.d.cn/software/2168.html" title="谷歌电子市场GooglePlay商店" target="_blank" class="thumb-b-img">
            <img o-src="http://img.android.d.cn/new/smtpfbackend/new/news/201407/1406181642240hKhE.jpg" src="http://cms/style/front/public/huaqiangu.png" alt="谷歌电子市场GooglePlay商店"/>
        </a>
        <a class="thumb-app" href="http://android.d.cn/software/2168.html" title="谷歌电子市场GooglePlay商店" target="_blank">谷歌电子市场GooglePlay商店</a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="http://android.d.cn/software/2168.html" title="谷歌电子市场GooglePlay商店" target="_blank" class="thumb-app-icon">
                <i></i>
                <img o-src="http://img9.android.d.cn/android/new/game_image/68/2168/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="谷歌电子市场GooglePlay商店"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span>
                    
                          <em>综合软件</em>
                    </span>
                    <span class="time">06-04</span>
                    <span class="sep">|</span>11.00MB
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-5"></span>
                </span>
                
                  <a class="thumb-down" href="javascript:;" title="谷歌电子市场GooglePlay商店" onclick="Adapt.adaptDown(this,2,2168)">立即下载</a>
                
            </div>
            <div class="thumb-b-func">
                
                <a class="b-coll-love "
                   href="javascript:;" onclick="Coll.coll(this,2,2168)"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
        
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/4070.html" title="QQ" target="_blank">QQ</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/4070.html" title="QQ" target="_blank">
                                    <img o-src="http://img3.android.d.cn/android/new/game_image/70/4070/icon.png?clear" src="http://cms/style/front/public/huaqiangu.png" alt="QQ"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                        <em>聊天工具</em>
                                        
                                    </p>
                                    <p class="time">
                                        06-18
                                        <span class="sep">|</span>
                                            22.95MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="QQ下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,4070)"></a>
                                            
                                            <a href="javascript:;" title="QQ喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 4070);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/2626.html" title="微信" target="_blank">微信</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/2626.html" title="微信" target="_blank">
                                    <img o-src="http://img8.android.d.cn/android/new/game_image/26/2626/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="微信"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                        <em>聊天工具</em>
                                        
                                    </p>
                                    <p class="time">
                                        07-03
                                        <span class="sep">|</span>
                                            30.95MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="微信下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,2626)"></a>
                                            
                                            <a href="javascript:;" title="微信喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 2626);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/49997.html" title="Google话语提示" target="_blank">Google话语提示</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/49997.html" title="Google话语提示" target="_blank">
                                    <img o-src="http://img3.android.d.cn/android/new/game_image/97/49997/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="Google话语提示"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                        <em>系统工具</em>
                                        
                                    </p>
                                    <p class="time">
                                        05-20
                                        <span class="sep">|</span>
                                            4.69MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-3"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="Google话语提示下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,49997)"></a>
                                            
                                            <a href="javascript:;" title="Google话语提示喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 49997);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/2633.html" title="平板QQ" target="_blank">平板QQ</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/2633.html" title="平板QQ" target="_blank">
                                    <img o-src="http://img6.android.d.cn/android/new/game_image/33/2633/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="平板QQ"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                        <em>聊天工具</em>
                                        
                                    </p>
                                    <p class="time">
                                        11-02
                                        <span class="sep">|</span>
                                            8.82MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="平板QQ下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,2633)"></a>
                                            
                                            <a href="javascript:;" title="平板QQ喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 2633);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/17223.html" title="GooglePlay服务" target="_blank">GooglePlay服务</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/17223.html" title="GooglePlay服务" target="_blank">
                                    <img o-src="http://img7.android.d.cn/android/new/game_image/23/17223/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="GooglePlay服务"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                        <em>系统工具</em>
                                        
                                    </p>
                                    <p class="time">
                                        06-14
                                        <span class="sep">|</span>
                                            32.79MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-4"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="GooglePlay服务下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,17223)"></a>
                                            
                                            <a href="javascript:;" title="GooglePlay服务喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 17223);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/238.html" title="360手机卫士" target="_blank">360手机卫士</a>
                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/238.html" title="360手机卫士" target="_blank">
                                    <img o-src="http://img5.android.d.cn/android/new/game_image/38/238/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="360手机卫士"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                        <em>安全保密</em>
                                        
                                    </p>
                                    <p class="time">
                                        07-01
                                        <span class="sep">|</span>
                                            8.09MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="360手机卫士下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,238)"></a>
                                            
                                            <a href="javascript:;" title="360手机卫士喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 238);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
    </ul>
</div>
<div class="mod-cont hide">
    <div class="mod-thumb-b">
        <a href="http://android.d.cn/software/1634.html" title="老虎宝典地图生活" target="_blank" class="thumb-b-img">
            <img o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201407/1405231130609JS9v.jpg" src="http://cms/style/front/public/huaqiangu.png" alt="老虎宝典地图生活"/>
        </a>
        <a class="thumb-app" href="http://android.d.cn/software/1634.html" title="老虎宝典地图生活" target="_blank">老虎宝典地图生活</a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="http://android.d.cn/software/1634.html" title="老虎宝典地图生活" target="_blank" class="thumb-app-icon">
                <i></i>
                <img o-src="http://img6.android.d.cn/android/new/game_image/34/1634/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="老虎宝典地图生活"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span>
                       
                        <em>生活应用</em>
                    </span>
                    <span class="time">07-03</span>
                    <span class="sep">|</span>4.38MB
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-5"></span>
                </span>
                
                  <a class="thumb-down" href="javascript:;" title="老虎宝典地图生活" onclick="Adapt.adaptDown(this,2,1634)">立即下载</a>
                
            </div>
            <div class="thumb-b-func">
                
                <a class="b-coll-love "
                   href="javascript:;" onclick="Coll.coll(this,2,1634)"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
        
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/20770.html" title="一个" target="_blank">一个</a>

                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/20770.html" title="一个" target="_blank">
                                    <img o-src="http://img8.android.d.cn/android/new/game_image/70/20770/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="一个"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                         <em>网络浏览</em>
                                    </p>
                                    <p class="time">
                                        07-03
                                        <span class="sep">|</span>
                                            10.95MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="一个下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,20770)"></a>
                                            
                                            <a href="javascript:;" title="一个喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 20770);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/2626.html" title="微信" target="_blank">微信</a>

                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/2626.html" title="微信" target="_blank">
                                    <img o-src="http://img8.android.d.cn/android/new/game_image/26/2626/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="微信"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                         <em>聊天工具</em>
                                    </p>
                                    <p class="time">
                                        07-03
                                        <span class="sep">|</span>
                                            30.95MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="微信下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,2626)"></a>
                                            
                                            <a href="javascript:;" title="微信喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 2626);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/7296.html" title="陌陌" target="_blank">陌陌</a>

                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/7296.html" title="陌陌" target="_blank">
                                    <img o-src="http://img7.android.d.cn/android/new/game_image/96/7296/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="陌陌"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                         <em>社区交友</em>
                                    </p>
                                    <p class="time">
                                        07-02
                                        <span class="sep">|</span>
                                            27.76MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="陌陌下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,7296)"></a>
                                            
                                            <a href="javascript:;" title="陌陌喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 7296);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/29275.html" title="网易云音乐" target="_blank">网易云音乐</a>

                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/29275.html" title="网易云音乐" target="_blank">
                                    <img o-src="http://img8.android.d.cn/android/new/game_image/75/29275/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="网易云音乐"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                         <em>音乐播放</em>
                                    </p>
                                    <p class="time">
                                        07-02
                                        <span class="sep">|</span>
                                            15.47MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="网易云音乐下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,29275)"></a>
                                            
                                            <a href="javascript:;" title="网易云音乐喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 29275);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/42973.html" title="秒拍" target="_blank">秒拍</a>

                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/42973.html" title="秒拍" target="_blank">
                                    <img o-src="http://img8.android.d.cn/android/new/game_image/73/42973/icon.jpg" src="http://cms/style/front/public/huaqiangu.png" alt="秒拍"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                         <em>视频播放</em>
                                    </p>
                                    <p class="time">
                                        07-02
                                        <span class="sep">|</span>
                                            35.01MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="秒拍下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,42973)"></a>
                                            
                                            <a href="javascript:;" title="秒拍喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 42973);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li>
                        <div class="mode-app-wrap">
                            <a class="mode-app-name" href="http://android.d.cn/software/12674.html" title="AdobeReaderPDF阅读器" target="_blank">AdobeReaderPDF阅读器</a>

                            <div class="mode-app">
                                <a class="mode-app-icon" href="http://android.d.cn/software/12674.html" title="AdobeReaderPDF阅读器" target="_blank">
                                    <img o-src="http://img3.android.d.cn/android/new/game_image/74/12674/icon.png" src="http://cms/style/front/public/huaqiangu.png" alt="AdobeReaderPDF阅读器"/>
                                </a>
                                <div class="mode-app-des">
                                    <p class="num">
                                       
                                         <em>阅读工具</em>
                                    </p>
                                    <p class="time">
                                        07-02
                                        <span class="sep">|</span>
                                            9.62MB
                                    </p>
                                    <p class="star-wrap">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                    </p>
                                    <div class="mode-app-func">
                                        <div class="mod-coll">
                                            
                                              <a href="javascript:;" title="AdobeReaderPDF阅读器下载" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,2,12674)"></a>
                                            
                                            <a href="javascript:;" title="AdobeReaderPDF阅读器喜欢" class="coll-btn coll-love "
                                               onclick="Coll.coll(this,2, 12674);"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
    </ul>
</div>
</div>
</div>
<!--最新安卓软件 end-->
<!--安卓资讯 begin-->
<div class="layout">
    <div class="mod-box">
        <div class="mod-head">
            <h2 class="cap-info"><a href="http://android.d.cn/news/" title="安卓资讯" target="_blank">安卓资讯</a></h2>
            <ul class="mod-nav">
                <li class="curr"><a href="javascript:;" title="安卓评测">评测</a></li>
                <li><a href="javascript:;" title="安卓攻略">攻略</a></li>
                <li><a href="javascript:;" title="安卓专题">专题</a></li>
                <li><a href="javascript:;" title="安卓资讯">资讯</a></li>
            </ul>
            <a class="mod-more" href="http://android.d.cn/news/" title="安卓游戏资讯" target="_blank">更多</a>
        </div>
        <div class="mod-cont">
            <ul class="mod-info clearfix">
                
                    <li class="mod-thumb-b">
                        <a href="http://news.d.cn/pc/view-22579.html" title="《深空传说》评测：动作与解谜的完美结合" target="_blank" class="thumb-b-img">
                            <img src="/style/front/public/zixun1.jpg" o-src="http://img.android.d.cn/new/smtpfbackend/new/news/201507/1435731486808MCs7.jpg" alt="《深空传说》评测：动作与解谜的完美结合"/>
                        </a>
                        <a class="thumb-app" href="http://news.d.cn/pc/view-22579.html" title="《深空传说》评测：动作与解谜的完美结合" target="_blank">《深空传说》评测：动作与解谜的完美结合</a>
                        <div class="mod-cover"></div>
                        <div class="thumb-des-wrap">
                            <div class="thumb-des">
                                <em></em>
                                <a href="http://news.d.cn/pc/view-22579.html" title="《深空传说》评测：动作与解谜的完美结合" target="_blank" class="thumb-des-txt">相对于亚马逊游戏工作室之前推出的《直到晨曦来临》和《迷失自我》，它们的新作《深空传说》在制作和定位上就显得有些并不大众化...</a>
                                
                            </div>
                        </div>
                    </li>
                
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/pc/view-23316.html" title="当乐试玩视频：《漫威：未来之战》超级英雄的集结！" target="_blank" class="thumb-img">
                                    <img src="/style/front/public/zixun2.jpg" o-src="http://img.news.d.cn//Upload/Image/2015070310491423842379.jpg" alt="当乐试玩视频：《漫威：未来之战》超级英雄的集结！"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/pc/view-23316.html" title="当乐试玩视频：《漫威：未来之战》超级英雄的集结！" target="_blank">当乐试玩视频：《漫威：未来之战》超级英雄的集结！</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/pc/view-23316.html" title="当乐试玩视频：《漫威：未来之战》超级英雄的集结！" target="_blank" class="thumb-des-txt">　　游戏故事背景以未来时空为舞台，因此无论从UI界面、敌方兵种的设计和战斗场景都带有浓重的科技气息。在这个基础上，《漫威...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/pc/view-22776.html" title="当乐试玩视频：《火柴人联盟》LOL英雄的真实格斗体验！" target="_blank" class="thumb-img">
                                    <img src="/style/front/public/zixun2.jpg" o-src="http://img.news.d.cn//Upload/Image/2015070111291700874213.jpg" alt="当乐试玩视频：《火柴人联盟》LOL英雄的真实格斗体验！"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/pc/view-22776.html" title="当乐试玩视频：《火柴人联盟》LOL英雄的真实格斗体验！" target="_blank">当乐试玩视频：《火柴人联盟》LOL英雄的真实格斗体验！</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/pc/view-22776.html" title="当乐试玩视频：《火柴人联盟》LOL英雄的真实格斗体验！" target="_blank" class="thumb-des-txt">《火柴人联盟》作为一款由动画片改编的手游，其昏暗的背景模糊的人物，给初次游戏的玩家留下的印象并不好。但是流畅的动作，逼真...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/pc/view-22542.html" title="当乐试玩视频：《深空传说》让冒险来的更猛烈些！" target="_blank" class="thumb-img">
                                    <img src="/style/front/public/zixun2.jpg" o-src="http://img.news.d.cn//Upload/Image/2015063011042483923653.jpg" alt="当乐试玩视频：《深空传说》让冒险来的更猛烈些！"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/pc/view-22542.html" title="当乐试玩视频：《深空传说》让冒险来的更猛烈些！" target="_blank">当乐试玩视频：《深空传说》让冒险来的更猛烈些！</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/pc/view-22542.html" title="当乐试玩视频：《深空传说》让冒险来的更猛烈些！" target="_blank" class="thumb-des-txt">《深空传说》游戏故事是发生在 Big Moon，是游戏世界中一个古怪的空间站。玩家的任务是帮助一个名为 E 的旅行售货员...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/pc/view-21828.html" title="当乐试玩视频：《九阳神功》畅爽的指尖动作快感！" target="_blank" class="thumb-img">
                                    <img src="/style/front/public/zixun2.jpg" o-src="http://img.news.d.cn//Upload/Image/2015062609510200666271.jpg" alt="当乐试玩视频：《九阳神功》畅爽的指尖动作快感！"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/pc/view-21828.html" title="当乐试玩视频：《九阳神功》畅爽的指尖动作快感！" target="_blank">当乐试玩视频：《九阳神功》畅爽的指尖动作快感！</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/pc/view-21828.html" title="当乐试玩视频：《九阳神功》畅爽的指尖动作快感！" target="_blank" class="thumb-des-txt">《九阳神功》手游是一款纯正的全球对战功夫竞技MOBA手游。游戏为玩家搭建全球统一竞技平台，突破网络限制，实时轻松竞技，补...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/pc/view-21720.html" title="当乐试玩视频：《渡劫》S级ARPG手游大作！" target="_blank" class="thumb-img">
                                    <img src="/style/front/public/zixun2.jpg" o-src="http://img.news.d.cn//Upload/Image/2015062515105997506948.jpg" alt="当乐试玩视频：《渡劫》S级ARPG手游大作！"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/pc/view-21720.html" title="当乐试玩视频：《渡劫》S级ARPG手游大作！" target="_blank">当乐试玩视频：《渡劫》S级ARPG手游大作！</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/pc/view-21720.html" title="当乐试玩视频：《渡劫》S级ARPG手游大作！" target="_blank" class="thumb-des-txt">国内知名手游发行商黑桃互动举办了新品发布会，并正式对外发布S级ARPG的手游大作《渡劫》。游戏基于3D引擎，首创互动感知...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/pc/view-21568.html" title="《不死之身》评测：为杀戮而生，为华丽而活" target="_blank" class="thumb-img">
                                    <img src="/style/front/public/zixun2.jpg" o-src="http://img.news.d.cn//Upload/Image/2015062417281953650063.jpg" alt="《不死之身》评测：为杀戮而生，为华丽而活"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/pc/view-21568.html" title="《不死之身》评测：为杀戮而生，为华丽而活" target="_blank">《不死之身》评测：为杀戮而生，为华丽而活</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/pc/view-21568.html" title="《不死之身》评测：为杀戮而生，为华丽而活" target="_blank" class="thumb-des-txt">是的，我并不想把 Madfinger 工作室最新作《不死之身》和它的经典之作《死亡扳机》拿来做一个比较，虽然都是以杀僵尸...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
            </ul>
        </div>
        <div class="mod-cont hide">
            <ul class="mod-info clearfix">
                
                    <li class="mod-thumb-b">
                        <a href="http://news.d.cn/gl/view-21410.html" title="《泰拉瑞亚》炼金站介绍，炼金站建造攻略技巧" target="_blank" class="thumb-b-img">
                            <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201506/1435221449891w10A.jpg" alt="《泰拉瑞亚》炼金站介绍，炼金站建造攻略技巧"/>
                        </a>
                        <a class="thumb-app" href="http://news.d.cn/gl/view-21410.html" title="《泰拉瑞亚》炼金站介绍，炼金站建造攻略技巧" target="_blank">《泰拉瑞亚》炼金站介绍，炼金站建造攻略技巧</a>
                        <div class="mod-cover"></div>
                        <div class="thumb-des-wrap">
                            <div class="thumb-des">
                                <em></em>
                                <a href="http://news.d.cn/gl/view-21410.html" title="《泰拉瑞亚》炼金站介绍，炼金站建造攻略技巧" target="_blank" class="thumb-des-txt">在泰拉瑞亚的游戏中，想要炼制药水就必须要有合成的工具，这就是炼金站。那么大家知道泰拉瑞亚炼金站怎么建造么？今天小编就来给...</a>
                                
                            </div>
                        </div>
                    </li>
                
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/gl/view-23702.html" title="《我的世界手机版》怎么耕地种菜 新手简易农场制作攻略" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070415505444457276.jpg" alt="《我的世界手机版》怎么耕地种菜 新手简易农场制作攻略"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/gl/view-23702.html" title="《我的世界手机版》怎么耕地种菜 新手简易农场制作攻略" target="_blank">《我的世界手机版》怎么耕地种菜 新手简易农场制作攻略</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/gl/view-23702.html" title="《我的世界手机版》怎么耕地种菜 新手简易农场制作攻略" target="_blank" class="thumb-des-txt">﻿在我的世界中，拾荒和打猎来填饱肚子实在不是一个好办法，这个时候我们就要学会自给自足，自己耕种各种农作物来提供食物来源，...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/gl/view-23701.html" title="《我的世界手机版》机关岩浆床制作攻略方法" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070415412934867772.jpg" alt="《我的世界手机版》机关岩浆床制作攻略方法"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/gl/view-23701.html" title="《我的世界手机版》机关岩浆床制作攻略方法" target="_blank">《我的世界手机版》机关岩浆床制作攻略方法</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/gl/view-23701.html" title="《我的世界手机版》机关岩浆床制作攻略方法" target="_blank" class="thumb-des-txt">﻿我的世界中有一种能让人睡一觉就死亡的机关床，想知道是怎么制作的吗？今天当乐网小编给大家带来这种机关床的制作方法，一起来...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/gl/view-23700.html" title="《我的世界手机版》基础操作教程介绍" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/201507041528146127420.jpg" alt="《我的世界手机版》基础操作教程介绍"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/gl/view-23700.html" title="《我的世界手机版》基础操作教程介绍" target="_blank">《我的世界手机版》基础操作教程介绍</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/gl/view-23700.html" title="《我的世界手机版》基础操作教程介绍" target="_blank" class="thumb-des-txt">﻿我的世界手机版和电脑版再操作上有非常大的区别，当乐网小编今天给大家介绍一下我的世界手机版的基础操作，一起来看看吧：如图...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/gl/view-23699.html" title="《我的世界手机版》火药怎么获得 火药介绍" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070415202070518365.jpg" alt="《我的世界手机版》火药怎么获得 火药介绍"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/gl/view-23699.html" title="《我的世界手机版》火药怎么获得 火药介绍" target="_blank">《我的世界手机版》火药怎么获得 火药介绍</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/gl/view-23699.html" title="《我的世界手机版》火药怎么获得 火药介绍" target="_blank" class="thumb-des-txt">﻿我的世界手机版中火药是不能直接通过合成获得的，也不能在环境中收集，火药是打死爬行者苦力怕或者恶魂之后才能获得的东西，今...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/gl/view-23698.html" title="《我的世界手机版》双重陷阱门制作教程攻略" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070415100895204321.jpg" alt="《我的世界手机版》双重陷阱门制作教程攻略"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/gl/view-23698.html" title="《我的世界手机版》双重陷阱门制作教程攻略" target="_blank">《我的世界手机版》双重陷阱门制作教程攻略</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/gl/view-23698.html" title="《我的世界手机版》双重陷阱门制作教程攻略" target="_blank" class="thumb-des-txt">﻿在我的世界手机版中制作各种各样的陷阱是各位熊孩子的最爱了，那么今天当乐网小编给大家带来的这个陷阱门是一个巧妙利用仙人掌...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/gl/view-23697.html" title="《我的世界手机版》困怪陷阱制作教程" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070415005951524098.jpg" alt="《我的世界手机版》困怪陷阱制作教程"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/gl/view-23697.html" title="《我的世界手机版》困怪陷阱制作教程" target="_blank">《我的世界手机版》困怪陷阱制作教程</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/gl/view-23697.html" title="《我的世界手机版》困怪陷阱制作教程" target="_blank" class="thumb-des-txt">﻿我的世界手机版中，熊孩子们总是爱突发奇想制作出各种各样的陷阱，今天当乐网小编给大家带来一个能困住各种怪的陷阱，一起来看...</a>
                                        
                                    </div>
                                </div>
                            </li>
                        
            </ul>
        </div>
        <div class="mod-cont hide">
            <ul class="mod-info clearfix">
                
                    <li class="mod-thumb-b">
                        
                            <a href="http://news.d.cn/zt/view-21725.html" title="Less is more 十款极简主义手游佳作推荐" target="_blank" class="thumb-b-img">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.android.d.cn/new/smtpfbackend/new/news/201506/1435222356466jeyj.jpg" alt="Less is more 十款极简主义手游佳作推荐"/>
                            </a>
                            <a class="thumb-app" href="http://news.d.cn/zt/view-21725.html" title="Less is more 十款极简主义手游佳作推荐" target="_blank">Less is more 十款极简主义手游佳作推荐</a>
                        
                        <div class="mod-cover"></div>
                        <div class="thumb-des-wrap">
                            <div class="thumb-des">
                                <em></em>
                                <a href="http://news.d.cn/zt/view-21725.html" title="Less is more 十款极简主义手游佳作推荐" target="_blank" class="thumb-des-txt">上世纪30年代著名的现代主义建筑大师路德维希·密斯·凡德罗曾留下“Less is more”这句经典名言，建筑学意义上的...</a>
                            </div>
                        </div>
                    </li>
                
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/bear/view-23243.html" title="谁说西方团队不能碰？且看法国厂商如何玩转日式RPG?" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070315525347795644.jpg" alt="谁说西方团队不能碰？且看法国厂商如何玩转日式RPG?"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/bear/view-23243.html" title="谁说西方团队不能碰？且看法国厂商如何玩转日式RPG?" target="_blank">谁说西方团队不能碰？且看法国厂商如何玩转日式RPG?</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/bear/view-23243.html" title="谁说西方团队不能碰？且看法国厂商如何玩转日式RPG?" class="thumb-des-txt" target="_blank">（当乐网原创文章，转载请注明：当乐网）在很多人看来，日本几乎就是游戏的代名词。“如果没有日本的贡献，今天游戏业也许根本就...</a>
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/video/view-23596.html" title="乐游播报第63期《深空传说》《火柴人联盟》等" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070318034842506678.jpg" alt="乐游播报第63期《深空传说》《火柴人联盟》等"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/video/view-23596.html" title="乐游播报第63期《深空传说》《火柴人联盟》等" target="_blank">乐游播报第63期《深空传说》《火柴人联盟》等</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/video/view-23596.html" title="乐游播报第63期《深空传说》《火柴人联盟》等" class="thumb-des-txt" target="_blank">本期播报为大家带来的是动作与解谜结合新作《深空传说》，接着是拥有华丽动作与爽快逼真打击效果的《火柴人联盟》，而喜欢蝙蝠侠...</a>
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/zt/view-23546.html" title="冷热参半 十款游戏带你感受冰火两重天" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/201507031529305844667.jpg" alt="冷热参半 十款游戏带你感受冰火两重天"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/zt/view-23546.html" title="冷热参半 十款游戏带你感受冰火两重天" target="_blank">冷热参半 十款游戏带你感受冰火两重天</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/zt/view-23546.html" title="冷热参半 十款游戏带你感受冰火两重天" class="thumb-des-txt" target="_blank">凛冽刺骨冰霜下，炽烈灼热火焰前，两系极端元素在此浪漫相遇，碰撞交融，热血与激情随之喷发，竟浇灌出了一冷一热间璀璨绽放的极...</a>
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/bear/view-23226.html" title="从批量下架南北战争游戏说起 谈谈颇受争议的苹果审核" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070216542240347911.jpg" alt="从批量下架南北战争游戏说起 谈谈颇受争议的苹果审核"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/bear/view-23226.html" title="从批量下架南北战争游戏说起 谈谈颇受争议的苹果审核" target="_blank">从批量下架南北战争游戏说起 谈谈颇受争议的苹果审核</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/bear/view-23226.html" title="从批量下架南北战争游戏说起 谈谈颇受争议的苹果审核" class="thumb-des-txt" target="_blank">‍‍﻿上周苹果商店发生了这么一件事儿，一夜之间，所有以美国南北战争为题并包含代表南方联盟的十字旗的游戏统统被下架，包括大...</a>
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/zt/view-22678.html" title="寻觅谋杀案背后的蛛丝马迹 凶案主题手游大盘点" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015063015543479921231.jpg" alt="寻觅谋杀案背后的蛛丝马迹 凶案主题手游大盘点"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/zt/view-22678.html" title="寻觅谋杀案背后的蛛丝马迹 凶案主题手游大盘点" target="_blank">寻觅谋杀案背后的蛛丝马迹 凶案主题手游大盘点</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/zt/view-22678.html" title="寻觅谋杀案背后的蛛丝马迹 凶案主题手游大盘点" class="thumb-des-txt" target="_blank">一桩谋杀案的背后将隐藏多少说不清道不明的故事？实证派通过一丝不苟地现场搜证，让实打实的证据告诉我们答案；推理派则浪漫主义...</a>
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/bear/view-22538.html" title="那些年游戏们走过的“红毯”！戏说国内外游戏盛典" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015063017492734889192.jpg" alt="那些年游戏们走过的“红毯”！戏说国内外游戏盛典"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/bear/view-22538.html" title="那些年游戏们走过的“红毯”！戏说国内外游戏盛典" target="_blank">那些年游戏们走过的“红毯”！戏说国内外游戏盛典</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/bear/view-22538.html" title="那些年游戏们走过的“红毯”！戏说国内外游戏盛典" class="thumb-des-txt" target="_blank">（当乐网原创文章，转载请注明：当乐网）今年戛纳电影节，张馨予一袭东北民俗大花被面子裙装 “艳压群芳”，被国内各大媒体争相...</a>
                                    </div>
                                </div>
                            </li>
                        
            </ul>
        </div>
        <div class="mod-cont hide">
            <ul class="mod-info clearfix">
                
                    <li class="mod-thumb-b">
                        <a href="http://news.d.cn/news/view-21766.html" title="《极品飞车2015》7月2日安卓首发 百辆首发豪车等你来战" target="_blank" class="thumb-b-img">
                            <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201506/1435221709923K4NG.jpg" alt="《极品飞车2015》7月2日安卓首发 百辆首发豪车等你来战"/>
                        </a>
                        <a class="thumb-app" href="http://news.d.cn/news/view-21766.html" title="《极品飞车2015》7月2日安卓首发 百辆首发豪车等你来战" target="_blank">《极品飞车2015》7月2日安卓首发 百辆首发豪车等你来战</a>
                        <div class="mod-cover"></div>
                        <div class="thumb-des-wrap">
                            <div class="thumb-des">
                                <em></em>
                                <a href="http://news.d.cn/news/view-21766.html" title="《极品飞车2015》7月2日安卓首发 百辆首发豪车等你来战" class="thumb-des-txt" target="_blank">﻿真实竞速，暴力追缉。由昆仑游戏发行，EA 出品全新续作《极品飞车2015》7月2日即将安卓首发！《极品飞车》作为全球第...</a>
                            </div>
                        </div>
                    </li>
                
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/news/view-23690.html" title="《辐射4》国内由杉果游戏代理 中文版敬请持续关注" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070414060528756560.jpg" alt="《辐射4》国内由杉果游戏代理 中文版敬请持续关注"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/news/view-23690.html" title="《辐射4》国内由杉果游戏代理 中文版敬请持续关注" target="_blank">《辐射4》国内由杉果游戏代理 中文版敬请持续关注</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/news/view-23690.html" title="《辐射4》国内由杉果游戏代理 中文版敬请持续关注" target="_blank" class="thumb-des-txt">﻿《辐射4》从正式公布到发售只有短短半年的时间，对于一款超级大作、一款让玩家等待多年的经典系列新作，B 社的金字招牌为游...</a>
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/news/view-23685.html" title="AR技术塔防手游 《隐秘：异常》 即将上架" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070413384567525958.jpg" alt="AR技术塔防手游 《隐秘：异常》 即将上架"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/news/view-23685.html" title="AR技术塔防手游 《隐秘：异常》 即将上架" target="_blank">AR技术塔防手游 《隐秘：异常》 即将上架</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/news/view-23685.html" title="AR技术塔防手游 《隐秘：异常》 即将上架" target="_blank" class="thumb-des-txt">﻿随着科学技术的不断发展，如今各大游戏软件厂商们已经开始逐渐将把目光转移到虚拟现实领域了，一些有实力的厂商已经开始推出了...</a>
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/news/view-23679.html" title="与F4大谈恋爱 《花样男子》双平台上架" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070413253098131616.jpg" alt="与F4大谈恋爱 《花样男子》双平台上架"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/news/view-23679.html" title="与F4大谈恋爱 《花样男子》双平台上架" target="_blank">与F4大谈恋爱 《花样男子》双平台上架</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/news/view-23679.html" title="与F4大谈恋爱 《花样男子》双平台上架" target="_blank" class="thumb-des-txt">Voltage 公司在7月3号发行了手游新作《花样男子~与F4 first kiss》（原名：花より男子～F4とファース...</a>
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/news/view-23662.html" title="优质推理破案游戏《蛛丝马迹 The Trace》半价促销中" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/201507041114288959750.jpg" alt="优质推理破案游戏《蛛丝马迹 The Trace》半价促销中"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/news/view-23662.html" title="优质推理破案游戏《蛛丝马迹 The Trace》半价促销中" target="_blank">优质推理破案游戏《蛛丝马迹 The Trace》半价促销中</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/news/view-23662.html" title="优质推理破案游戏《蛛丝马迹 The Trace》半价促销中" target="_blank" class="thumb-des-txt">﻿﻿开发商 Relentless Software 旗下最新冒险解谜游戏《蛛丝马迹 The Trace》是以揭开隐藏在谋...</a>
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/news/view-23648.html" title="暑期档热播剧《旋风少女》官方手游即将来袭" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070410205339657525.jpg" alt="暑期档热播剧《旋风少女》官方手游即将来袭"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/news/view-23648.html" title="暑期档热播剧《旋风少女》官方手游即将来袭" target="_blank">暑期档热播剧《旋风少女》官方手游即将来袭</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/news/view-23648.html" title="暑期档热播剧《旋风少女》官方手游即将来袭" target="_blank" class="thumb-des-txt">﻿7月2日，湖南卫视《旋风少女》电视剧在长沙举行开播发布会，主演胡冰卿、杨洋、陈翔、吴磊等悉数登台亮相，与大家分享了一个...</a>
                                    </div>
                                </div>
                            </li>
                        
                            <li class="mod-thumb">
                                <a href="http://news.d.cn/news/view-23651.html" title="王牌声优倾情演绎 《永恒战记》7月5日不删档测试" target="_blank" class="thumb-img">
                                    <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.news.d.cn//Upload/Image/2015070410384364965014.jpg" alt="王牌声优倾情演绎 《永恒战记》7月5日不删档测试"/>
                                </a>
                                <a class="thumb-app" href="http://news.d.cn/news/view-23651.html" title="王牌声优倾情演绎 《永恒战记》7月5日不删档测试" target="_blank">王牌声优倾情演绎 《永恒战记》7月5日不删档测试</a>
                                <div class="mod-cover"></div>
                                <div class="thumb-des-wrap">
                                    <div class="thumb-des">
                                        <em></em>
                                        <a href="http://news.d.cn/news/view-23651.html" title="王牌声优倾情演绎 《永恒战记》7月5日不删档测试" target="_blank" class="thumb-des-txt">﻿港卡牌动作类手游大作《永恒战记》不删档测试于7月5日上午11点正式开启。其原汁原味、高品质的游戏定位在之前测试中给玩家...</a>
                                    </div>
                                </div>
                            </li>
                        
            </ul>
        </div>
    </div>
</div>
<!--安卓资讯 end-->
<!--安卓大作专区 begin-->
<div class="layout">
    <div class="mod-box">
        <div class="mod-head">
            <h3 class="cap-ori"><a href="http://app.d.cn/subject-1.html" target="_blank" title="安卓大作专区">安卓大作专区</a></h3>
            <a class="mod-more" href="http://app.d.cn/subject-1.html" target="_blank" title="安卓大作专区">更多</a>
        </div>
        <div class="mod-cont">
            <ul class="mod-ori clearfix">    
                <li class="mod-thumb-b"><a target="blank" href="http://app.d.cn/minecraft" title="我的世界专区" class="thumb-b-img"><img src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201502/1423388462056LUIQ.jpg" alt="我的世界手机版" /></a><a class="thumb-app" href="http://app.d.cn/minecraft">我的世界专区</a><div class="mod-cover"></div><div class="thumb-des-wrap">    <div class="thumb-des"><em></em><a target="blank" href="http://app.d.cn/minecraft" title="我的世界专区" class="thumb-des-txt">毫无规则的游戏，但是却充满乐趣，这款像素风格的游戏绝对是世界上最火爆的的游戏之一。</a>   </div></div>    </li>
                <li class="mod-thumb-h"><a target="blank" href="http://app.d.cn/lushichuanshuo" title="炉石传说手机版专区" class="thumb-img"><img src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201503/1425606141864Q3sy.jpg" alt="炉石传说手机版" /></a><a class="thumb-app" href="http://app.d.cn/lushichuanshuo">炉石传说手机版专区</a><div class="mod-cover"></div><div class="thumb-des-wrap"><div class="thumb-des"><em></em><a target="blank" href="http://app.d.cn/lushichuanshuo" title="炉石传说手机版专区" class="thumb-des-txt">暴雪推出的一款策略类卡牌游戏，可以选择魔兽中的九大经典英雄人物之一，围绕英雄的职业为主题组建自己独特的套牌。</a></div></div>    </li>
                <li class="mod-thumb-h"><a target="blank" href="http://app.d.cn/buyudaren3" title="捕鱼达人3专区" class="thumb-img"><img src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201407/1405308374133Wl7l.jpg" alt="捕鱼达人3" /></a><a class="thumb-app" href="http://app.d.cn/buyudaren3">捕鱼达人3专区</a><div class="mod-cover"></div><div class="thumb-des-wrap"><div class="thumb-des"><em></em><a target="blank" href="http://app.d.cn/buyudaren3" title="捕鱼达人3专区" class="thumb-des-txt">由触控出品的《捕鱼达人3》这款超高人气大作，承载着4亿用户的捕鱼梦想，给各位捕鱼用户带来3D深海捕鱼体验。</a></div></div>    </li>
                <li class="mod-thumb-h"><a target="blank" href="http://app.d.cn/mc5" title="现代战争5专区" class="thumb-img"><img src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201502/1423389129434mHA6.jpg" alt="现代战争5" /></a><a class="thumb-app" href="http://app.d.cn/mc5">现代战争5专区</a><div class="mod-cover"></div><div class="thumb-des-wrap"><div class="thumb-des"><em></em><a target="blank" href="http://app.d.cn/mc5" title="现代战争5专区" class="thumb-des-txt">年度最火爆的战争大作，剧情模式引人入胜，多人联网模式其乐无穷，FPS游戏最佳体验。</a></div></div>    </li>
            </ul>
        </div>
    </div>
</div>
<!--安卓大作专区 end-->
<!--排行榜 begin-->
<div class="layout">
    <div class="mod-box">
        <div class="mod-cont clearfix">
            <div class="rank-wrap rank-single">
                <h3><a href="http://android.d.cn/paihangbang" title="单机排行榜" target="_blank" ><em>单机</em>排行榜</a></h3>
                
        <ul class="rank-cont">
            
                        <li class="rank-item rank-front">
                            <em class="rank-num">
                                01
                            </em>
                            <a class="rank-icon" href="http://android.d.cn/game/4568.html" title="我的世界移动版" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img6.android.d.cn/android/new/game_image/68/4568/icon.png" alt="我的世界移动版"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://android.d.cn/game/4568.html" title="我的世界移动版" target="_blank" class="rank-tit">我的世界移动版</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-5"></span>
                                </span>
                                </p>
                                <p class="rank-class">养成游戏</p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="我的世界移动版下载" class="rank-down" onclick="Adapt.adaptDown(this,1,4568)"></a>
                                
                                <a href="javascript:;" title="我的世界移动版喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 1, 4568);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item rank-front">
                            <em class="rank-num">
                                02
                            </em>
                            <a class="rank-icon" href="http://android.d.cn/game/36780.html" title="NBA2K14" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img7.android.d.cn/android/new/game_image/80/36780/icon.png" alt="NBA2K14"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://android.d.cn/game/36780.html" title="NBA2K14" target="_blank" class="rank-tit">NBA2K14</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-5"></span>
                                </span>
                                </p>
                                <p class="rank-class">体育运动</p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="NBA2K14下载" class="rank-down" onclick="Adapt.adaptDown(this,1,36780)"></a>
                                
                                <a href="javascript:;" title="NBA2K14喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 1, 36780);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item rank-front">
                            <em class="rank-num">
                                03
                            </em>
                            <a class="rank-icon" href="http://android.d.cn/game/58980.html" title="踪迹:谋杀之谜游戏汉化版" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img4.android.d.cn/android/new/game_image/80/58980/icon.png" alt="踪迹:谋杀之谜游戏汉化版"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://android.d.cn/game/58980.html" title="踪迹:谋杀之谜游戏汉化版" target="_blank" class="rank-tit">踪迹:谋杀之谜游戏汉化版</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-4"></span>
                                </span>
                                </p>
                                <p class="rank-class">冒险解谜</p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="踪迹:谋杀之谜游戏汉化版下载" class="rank-down" onclick="Adapt.adaptDown(this,1,58980)"></a>
                                
                                <a href="javascript:;" title="踪迹:谋杀之谜游戏汉化版喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 1, 58980);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        04
                            </em>
                            <a href="http://android.d.cn/game/3273.html" title="极限摩托完整版" target="_blank" class="rank-name">极限摩托完整版</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        05
                            </em>
                            <a href="http://android.d.cn/game/43151.html" title="开心消消乐" target="_blank" class="rank-name">开心消消乐</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        06
                            </em>
                            <a href="http://android.d.cn/game/43375.html" title="别踩白块儿" target="_blank" class="rank-name">别踩白块儿</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        07
                            </em>
                            <a href="http://android.d.cn/game/59050.html" title="史上最倒霉的游戏" target="_blank" class="rank-name">史上最倒霉的游戏</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        08
                            </em>
                            <a href="http://android.d.cn/game/55647.html" title="我的世界游戏软件" target="_blank" class="rank-name">我的世界游戏软件</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        09
                            </em>
                            <a href="http://android.d.cn/game/33896.html" title="谷歌安装器" target="_blank" class="rank-name">谷歌安装器</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                10
                            </em>
                            <a href="http://android.d.cn/game/58728.html" title="又是这关2" target="_blank" class="rank-name">又是这关2</a>
                        </li>
                    
        </ul>
    
            </div>
            <div class="rank-wrap rank-net">
                <h3><a href="http://android.d.cn/paihangbang" title="网游排行榜" target="_blank" ><em>网游</em>排行榜</a></h3>
                
        <ul class="rank-cont">
            
                        <li class="rank-item rank-front">
                            <em class="rank-num">01</em>
                            <a class="rank-icon" href="http://ng.d.cn/tianlongbabu3D" title="天龙八部3D" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.d.cn/netgame/hdlogo/1724_1434678455918_qP8lXkXt.png" alt="天龙八部3D"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://ng.d.cn/tianlongbabu3D" title="天龙八部3D" target="_blank" class="rank-tit">天龙八部3D</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-"></span>
                                </span>
                                </p>
                                <p class="rank-class">角色,武侠,动作</p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="天龙八部3D下载" class="rank-down" onclick="Adapt.adaptDown(this,5,1724)"></a>
                                
                                <a href="javascript:;" title="天龙八部3D喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 5, 1724);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item rank-front">
                            <em class="rank-num">02</em>
                            <a class="rank-icon" href="http://ng.d.cn/wohucanglong" title="卧虎藏龙" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.d.cn/netgame/hdlogo/1117_1415004099991_LTQSk8bW.png" alt="卧虎藏龙"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://ng.d.cn/wohucanglong" title="卧虎藏龙" target="_blank" class="rank-tit">卧虎藏龙</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-"></span>
                                </span>
                                </p>
                                <p class="rank-class">角色,3D,武侠</p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="卧虎藏龙下载" class="rank-down" onclick="Adapt.adaptDown(this,5,1117)"></a>
                                
                                <a href="javascript:;" title="卧虎藏龙喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 5, 1117);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item rank-front">
                            <em class="rank-num">03</em>
                            <a class="rank-icon" href="http://ng.d.cn/wojiaomt" title="我叫MT" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img.d.cn/netgame/hdlogo/642_1403170878275_r41r9k3y.jpg" alt="我叫MT"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://ng.d.cn/wojiaomt" title="我叫MT" target="_blank" class="rank-tit">我叫MT</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-"></span>
                                </span>
                                </p>
                                <p class="rank-class">策略,卡牌,动漫</p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="我叫MT下载" class="rank-down" onclick="Adapt.adaptDown(this,5,642)"></a>
                                
                                <a href="javascript:;" title="我叫MT喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 5, 642);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        04
                            </em>
                            <a href="http://ng.d.cn/xiaoaojianghu" title="笑傲江湖" target="_blank" class="rank-name">笑傲江湖</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        05
                            </em>
                            <a href="http://ng.d.cn/taijixiongmao" title="太极熊猫" target="_blank" class="rank-name">太极熊猫</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        06
                            </em>
                            <a href="http://ng.d.cn/quanminqiangzhan" title="全民枪战" target="_blank" class="rank-name">全民枪战</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        07
                            </em>
                            <a href="http://ng.d.cn/daotachuanqi" title="刀塔传奇" target="_blank" class="rank-name">刀塔传奇</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        08
                            </em>
                            <a href="http://ng.d.cn/lianwu" title="恋舞OL" target="_blank" class="rank-name">恋舞OL</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        09
                            </em>
                            <a href="http://ng.d.cn/jianhunzhiren" title="剑魂之刃" target="_blank" class="rank-name">剑魂之刃</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                10
                            </em>
                            <a href="http://ng.d.cn/fangkainasanguo" title="放开那三国" target="_blank" class="rank-name">放开那三国</a>
                        </li>
                    
        </ul>
    
            </div>
            <div class="rank-wrap rank-soft">
                <h3><a href="http://android.d.cn/paihangbang" title="软件排行榜" target="_blank"><em>软件</em>排行榜</a></h3>
                
        <ul class="rank-cont">
            
                        <li class="rank-item rank-front">
                            <em class="rank-num">01</em>
                            <a class="rank-icon" href="http://android.d.cn/software/374.html" title="当乐游戏中心" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img6.android.d.cn/android/new/game_image/74/374/icon.png" alt="当乐游戏中心"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://android.d.cn/software/374.html" title="当乐游戏中心" target="_blank" class="rank-tit">当乐游戏中心</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-5"></span>
                                </span>
                                </p>
                                <p class="rank-class">综合软件</p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="当乐游戏中心下载" class="rank-down" onclick="Adapt.adaptDown(this,2,374)"></a>
                                
                                <a href="javascript:;" title="当乐游戏中心喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 2, 374);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item rank-front">
                            <em class="rank-num">02</em>
                            <a class="rank-icon" href="http://android.d.cn/software/2626.html" title="微信" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img8.android.d.cn/android/new/game_image/26/2626/icon.png" alt="微信"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://android.d.cn/software/2626.html" title="微信" target="_blank" class="rank-tit">微信</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-5"></span>
                                </span>
                                </p>
                                <p class="rank-class">聊天工具</p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="微信下载" class="rank-down" onclick="Adapt.adaptDown(this,2,2626)"></a>
                                
                                <a href="javascript:;" title="微信喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 2, 2626);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item rank-front">
                            <em class="rank-num">03</em>
                            <a class="rank-icon" href="http://android.d.cn/software/1100.html" title="腾讯手机管家" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img3.android.d.cn/android/new/game_image/0/1100/icon.png" alt="腾讯手机管家"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://android.d.cn/software/1100.html" title="腾讯手机管家" target="_blank" class="rank-tit">腾讯手机管家</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-5"></span>
                                </span>
                                </p>
                                <p class="rank-class">安全保密</p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="腾讯手机管家下载" class="rank-down" onclick="Adapt.adaptDown(this,2,1100)"></a>
                                
                                <a href="javascript:;" title="腾讯手机管家喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 2, 1100);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        04
                            </em>
                            <a href="http://android.d.cn/software/283.html" title="手机QQ浏览器" target="_blank" class="rank-name">手机QQ浏览器</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        05
                            </em>
                            <a href="http://android.d.cn/software/2771.html" title="PPTV聚力" target="_blank" class="rank-name">PPTV聚力</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        06
                            </em>
                            <a href="http://android.d.cn/software/231.html" title="天天动听音乐播放器" target="_blank" class="rank-name">天天动听音乐播放器</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        07
                            </em>
                            <a href="http://android.d.cn/software/407.html" title="淘宝" target="_blank" class="rank-name">淘宝</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        08
                            </em>
                            <a href="http://android.d.cn/software/764.html" title="美团团购" target="_blank" class="rank-name">美团团购</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        09
                            </em>
                            <a href="http://android.d.cn/software/3142.html" title="百度地图" target="_blank" class="rank-name">百度地图</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                10
                            </em>
                            <a href="http://android.d.cn/software/2914.html" title="京东商城" target="_blank" class="rank-name">京东商城</a>
                        </li>
                    
        </ul>
    
            </div>
            <div class="rank-wrap rank-coll">
                <h3><a href="http://android.d.cn/paihangbang" title="喜欢排行榜" target="_blank"><em>喜欢</em>排行榜</a></h3>
                
        <ul class="rank-cont">
            
                        <li class="rank-item rank-front">
                            <em class="rank-num">01</em>
                            <a class="rank-icon" href="http://android.d.cn/game/52070.html" title="聚爆" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img6.android.d.cn/android/new/game_image/70/52070/icon.png?clear" alt="聚爆"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://android.d.cn/game/52070.html" title="聚爆" target="_blank" class="rank-tit">聚爆</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-5"></span>
                                </span>
                                </p>
                                <p class="rank-class">角色扮演</p>
                            </div>
                            <div class="rank-func">
                                
                                    <a href="javascript:;" title="聚爆下载" class="rank-down" onclick="Adapt.adaptDown(this,1,52070)"></a>
                                  
                                <a href="javascript:;" title="聚爆喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 1, 52070);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item rank-front">
                            <em class="rank-num">02</em>
                            <a class="rank-icon" href="http://android.d.cn/game/51672.html" title="我的战争" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img4.android.d.cn/android/new/game_image/72/51672/icon.png" alt="我的战争"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://android.d.cn/game/51672.html" title="我的战争" target="_blank" class="rank-tit">我的战争</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-4"></span>
                                </span>
                                </p>
                                <p class="rank-class">射击游戏</p>
                            </div>
                            <div class="rank-func">
                                
                                <a href="javascript:;" title="我的战争喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 1, 51672);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item rank-front">
                            <em class="rank-num">03</em>
                            <a class="rank-icon" href="http://android.d.cn/game/54786.html" title="虚荣(含数据包)" target="_blank">
                                <img src="http://cms/style/front/public/huaqiangu.png" o-src="http://img4.android.d.cn/android/new/game_image/86/54786/icon.png" alt="虚荣(含数据包)"/>
                            </a>
                            <div class="rank-info">
                                <a href="http://android.d.cn/game/54786.html" title="虚荣(含数据包)" target="_blank" class="rank-tit">虚荣(含数据包)</a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-4"></span>
                                </span>
                                </p>
                                <p class="rank-class">策略塔防</p>
                            </div>
                            <div class="rank-func">
                                
                                    <a href="javascript:;" title="虚荣(含数据包)下载" class="rank-down" onclick="Adapt.adaptDown(this,1,54786)"></a>
                                  
                                <a href="javascript:;" title="虚荣(含数据包)喜欢" class="rank-coll "
                                   onclick="Coll.coll(this, 1, 54786);"></a>
                            </div>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        04
                            </em>
                            <a href="http://android.d.cn/game/51938.html" title="勇敢的心:世界大战汉化版(含数据包)" target="_blank" class="rank-name">勇敢的心:世界大战汉化版(含数据包)</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        05
                            </em>
                            <a href="http://android.d.cn/game/40051.html" title="GTA侠盗猎车手:圣安地列斯(含数据包)" target="_blank" class="rank-name">GTA侠盗猎车手:圣安地列斯(含数据包)</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        06
                            </em>
                            <a href="http://android.d.cn/game/14009.html" title="Cytus音乐节奏破解版(含数据包)" target="_blank" class="rank-name">Cytus音乐节奏破解版(含数据包)</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        07
                            </em>
                            <a href="http://android.d.cn/game/32163.html" title="孤胆车神:维加斯离线版(含数据包)" target="_blank" class="rank-name">孤胆车神:维加斯离线版(含数据包)</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        08
                            </em>
                            <a href="http://android.d.cn/game/54813.html" title="迷失自我直装版" target="_blank" class="rank-name">迷失自我直装版</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                
                                        09
                            </em>
                            <a href="http://ng.d.cn/ziyouzhizhan" title="自由之战" target="_blank" class="rank-name">自由之战</a>
                        </li>
                    
                        <li class="rank-item">
                            <em class="rank-num">
                                10
                            </em>
                            <a href="http://android.d.cn/game/57964.html" title="几何战争3:维度(含数据包)" target="_blank" class="rank-name">几何战争3:维度(含数据包)</a>
                        </li>
                    
        </ul>
    
            </div>
        </div>
    </div>
</div>
<!--排行榜 end-->
</div>
<style>
.rank-single h3 a:hover {
    font-weight: normal;
    color: #31c588;
}
.rank-net h3 a:hover {
    font-weight: normal;
    color: #43b4ee;
}
.rank-soft h3 a:hover {
    font-weight: normal;
    color: #7771b8;
}
.rank-coll h3 a:hover {
    font-weight: normal;
    color: #ffa200;
}
h2 a:hover {
    font-weight: normal;
}
h3[class="cap-ori"] a:hover {
    font-weight: normal;
}
h3[class="cap-new"] a:hover {
    font-weight: normal;
}
</style>

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
    <p class="adapt-success adapt-success-special"><img src="http://cms/style/front/public/huaqiangu.png" o-src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/bear.jpg" alt="" />登录后才能喜欢哦！</p>
    <a href="" title="立即登录" class="log-now">立即登录</a>
</div>
<!--登录弹出框 e-->
<div class="overlay" id="overlay"></div>
<a id="toTop" title="返回顶部" target="_self" href="javascript:void(0)"><i></i></a>

<div class="ft">
    <div class="qq-t">
        <p class="ft-title">安卓玩家QQ群<i class="ft-t-icon"></i></p>
        <ul class="clearfix">
            <li>1群：122418282</li>
            <li>2群：122418387</li>
            <li>3群：63408465</li>
            <li>4群：122418525</li>
            <li>5群：63099917</li>
            <li>6群：171728567</li>
            <li>7群：93470008</li>
            <li>8群(新)：190750151</li>
        </ul>
    </div>
    <div class="f-lnks">
        <ul class="friend-link"><li><a href="http://www.bufan.com/" target="_blank">手机游戏</a></li><li><a href="http://www.benshouji.com/" target="_blank">笨手机游戏网</a></li><li><a href="http://news.d.cn/" target="_blank">手机游戏攻略</a></li><li><a href="http://xiazai.zol.com.cn/" target="_blank">中关村下载</a></li><li><a href="http://news.4399.com/" target="_blank">4399游戏资讯</a></li><li><a href="http://wy.pipaw.com/" target="_blank">琵琶网安卓游戏</a></li><li><a href="http://pc.duowan.com/" target="_blank">单机游戏下载</a></li><li><a href="http://www.duote.com/" target="_blank">多特软件</a></li><li><a href="http://android.tgbus.com/" target="_blank">android中文网</a></li><li><a href="http://bbs.hiapk.com/" target="_blank">安卓论坛</a></li><li><a href="http://www.xxzhushou.cn/" target="_blank">叉叉助手</a></li><li><a href="http://mydown.yesky.com/" target="_blank">天极下载</a></li><li><a href="http://android.d.cn/" target="_blank">安卓软件</a></li><li><a href="http://www.5068.com/ " target="_blank">5068儿童网</a></li><li><a href="http://android.d.cn/" target="_blank">安卓</a></li><li><a href="http://www.cr173.com/" target="_blank">西西软件园</a></li><li><a href="http://www.962.net/" target="_blank">单机游戏下载</a></li><li><a href="http://www.fxxz.com/" target="_blank">单机游戏</a></li><li><a href="http://www.appchina.com/" target="_blank">安卓软件</a></li><li><a href="http://iphone.tgbus.com/" target="_blank">iphone5</a></li><li><a href="http://d.958shop.com" target="_blank">百信手机下载</a></li><li><a href="http://product.pconline.com.cn/" target="_blank">IT产品报价库</a></li><li><a href="http://www.99danji.com/" target="_blank">单机游戏下载</a></li><li><a href="http://www.liqucn.com/" target="_blank">历趣手机软件</a></li><li><a href="http://www.uzzf.com/" target="_blank">东坡下载</a></li><li><a href="http://www.3366.com/" target="_blank">小游戏</a></li><li><a href="http://bbs.houdao.com/" target="_blank">猴岛游戏论坛</a></li><li><a href="http://www.xdowns.com/" target="_blank">绿盟软件下载</a></li><li><a href="http://bbs.gfan.com/" target="_blank">机锋安卓论坛</a></li><li><a href="http://www.gfan.com/" target="_blank">机锋网</a></li><li><a href="http://www.ptbus.com/" target="_blank">安卓游戏</a></li><li><a href="http://android.d.cn/" target="_blank">安卓游戏下载</a></li><li><a href="http://dl.pconline.com.cn/android/" target="_blank">太平洋安卓软件</a></li><li><a href="http://bbs.ptbus.com" target="_blank">口袋巴士论坛</a></li><li><a href="http://bbs.weiphone.com/" target="_blank">Apple威锋论坛</a></li><li><a href="http://dota2.178.com/ " target="_blank">DOTA2</a></li><li><a href="http://game.3533.com/" target="_blank">手机应用</a></li><li><a href="http://www.33lc.com/" target="_blank">绿茶软件下载</a></li><li><a href="http://www.3987.com/" target="_blank">统一下载站</a></li><li><a href="http://www.piaodown.com/" target="_blank">飘荡软件</a></li><li><a href="http://www.cncrk.com/" target="_blank">起点下载</a></li><li><a href="http://android.d.cn/" target="_blank">安卓游戏大全</a></li><li><a href="http://down.52pk.com/" target="_blank">52pk游戏下载</a></li><li><a href="http://www.qqtn.com/" target="_blank">QQ下载</a></li><li><a href="http://www.52z.com/" target="_blank">飞翔软件下载</a></li><li><a href="http://www.onegreen.net/" target="_blank">绿色第一站</a></li><li><a href="http://www.5253.com/" target="_blank">5253手游网</a></li><li><a href="http://product.cnmo.com" target="_blank">手机大全</a></li><li><a href="http://ng.d.cn/" target="_blank">手机网游</a></li><li><a href="http://android.gamedog.cn/" target="_blank">安卓游戏</a></li></ul>
    </div>
    <div class="copy-right">
        <p>
            <input type="hidden" id="serviceIp" name="serviceIp" value="118.144.66.138">
            <a href="http://www.d.cn/about_us.html" target="_blank" title="关于当乐">
                关于当乐
            </a>
            |
            <a href="http://www.d.cn/en-us/" target="_blank" title="About Downjoy">
                About Downjoy
            </a>
            |
            <a href="http://www.d.cn/contact_us.html" target="_blank" title="联系我们">
                联系我们
            </a>
            |
            <a href="http://www.d.cn/hr/" target="_blank" title="诚聘英才">
              诚聘英才
            </a>
            |
            <a href="http://open.d.cn/" target="_blank" title="开放平台">
                开放平台
            </a>
            |
            <a href="http://www.d.cn/privacy.html" target="_blank" title="隐私保护">
                隐私保护
            </a>
            |
            <a href="http://www.d.cn/sitemap.html" target="_blank" title="网站地图">
                网站地图
            </a>
        </p>
        <p>Copyright © 2004-<script type="text/javascript">var y = new Date().getFullYear();document.write(y);</script> Downjoy. All Rights Reserved. 北京当乐信息技术有限公司 版权所有</p>
    </div>
</div>


</body>
</html>
