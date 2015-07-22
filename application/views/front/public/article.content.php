
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
        <div class="detail-head-wrap">
            <div class="detail-head">
                <div class="detail-logo">
                    <a href="<?php echo HOST;?>" title="微信公众推广平台">
                        <img src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/deLogo.jpg" alt="微信公众推广平台"/>
                    </a>
                </div>
                <div class="detail-form clearfix" id="detailForm">
                    <form id="sForm" method="get" action="http://android.d.cn/search/app/">
                        <div class="search-txt">
                            <input id="key" class="txt" type="text" maxlength="30" name="keyword" autocomplete="off" />
                        </div>
                        <div class="search-btn">
                            <button type="submit" class="submit"></button>
                        </div>
                        <div id="searchResult" class="s-result"></div>
                    </form>
                </div>
                <ul class="nav clearfix">

                    <li class="<?php echo $d['last_cate_id'] <= 0 ? "curr" : "";?>"><a href="<?php echo HOST?>" title="小肉粽微信公众号平台">首页<?php echo $d['last_cate_id'] <= 0 ? '<span class="nav-bar"></span>' : "";?></a></li>
            
                    <li class="<?php echo $d['last_cate_id'] == 1 ? "curr" : "";?>"><a href="/info/l?cid=1" title="微信公众号">公众号<?php echo $d['last_cate_id'] == 1 ? '<span class="nav-bar"></span>' : "";?></a></li>

                    <li class="<?php echo $d['last_cate_id'] == 2 || in_array($d['last_cate_id'], array(3,4,5,6)) ? "curr" : "";?>"><a href="/info/l?cid=2" title="微信公众号资讯">资讯<?php echo $d['last_cate_id'] == 2 || in_array($d['last_cate_id'], array(3,4,5,6)) ? '<span class="nav-bar"></span>' : "";?></a></li>


                    <li><a href="/info/special" title="微信公众号专题">专题</a></li>

                    <li class="last"><a href="/info/activity" title="微信公众号最新活动">活动<i></i></a></li>

                    <li><a href="http://android.d.cn/" title="当乐安卓频道">首页</a></li>

                </ul>
            </div>
        </div>
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
                        <div class="module-head">
                            <h2 class="module-tit"><i></i>小肉粽评论<a name="pinglun" onclick="return false;"></a></h2>
                            <span class="module-help">已有<em id="comNum2">0</em>人发表评论</span>
                        </div>


                        <!--评论 b-->
                        <input id="appId" name="appId" type="hidden" value="59398"/>
                        <input id="appType" name="appType" type="hidden" value="1"/>
                        <input id="ifDetail" name="ifDetail" type="hidden" value="true"/>

                        <div class="module-cont">

                            <div class="com-head" id="comHeadHasLogin">
                                <form action="" onsubmit="return COMMENT.validateCallback(this);">
                                    <div class="com-head-box">
                                        <div class="com-login">
                                            <textarea name="comment" id="comment" cols="30" rows="10" style="resize: none;"></textarea>
                                        </div>
                                    </div>
                                    <div class="com-btn-wrap clearfix">
                                        <div class="expressions">
                                            <span></span>
                                            <div class="expFrame">
                                                <em></em>
                                                <p>选择表情<i></i></p>
                                                <div class="expTab fl">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" title="傲慢" emot="[/am]">
                                                                <img alt="傲慢" src="http://img.android.d.cn/android/cdroid_stable/face/web/am.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="爱心" emot="[/ax]">
                                                                <img alt="爱心" src="http://img.android.d.cn/android/cdroid_stable/face/web/ax.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="不开心" emot="[/bkx]">
                                                                <img alt="不开心" src="http://img.android.d.cn/android/cdroid_stable/face/web/bkx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="鄙视" emot="[/bs]">
                                                                <img alt="鄙视" src="http://img.android.d.cn/android/cdroid_stable/face/web/bs.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="NO" emot="[/bx]">
                                                                <img alt="NO" src="http://img.android.d.cn/android/cdroid_stable/face/web/bx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="闭嘴" emot="[/bz]">
                                                                <img alt="闭嘴" src="http://img.android.d.cn/android/cdroid_stable/face/web/bz.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="擦汗" emot="[/ch]">
                                                                <img alt="擦汗" src="http://img.android.d.cn/android/cdroid_stable/face/web/ch.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="呆" emot="[/d]">
                                                                <img alt="呆" src="http://img.android.d.cn/android/cdroid_stable/face/web/d.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="凋谢" emot="[/dx]">
                                                                <img alt="凋谢" src="http://img.android.d.cn/android/cdroid_stable/face/web/dx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="发火" emot="[/fh]">
                                                                <img alt="发火" src="http://img.android.d.cn/android/cdroid_stable/face/web/fh.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="勾引" emot="[/gy]">
                                                                <img alt="勾引" src="http://img.android.d.cn/android/cdroid_stable/face/web/gy.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="OK" emot="[/hd]">
                                                                <img alt="OK" src="http://img.android.d.cn/android/cdroid_stable/face/web/hd.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="哼" emot="[/heng]">
                                                                <img alt="哼" src="http://img.android.d.cn/android/cdroid_stable/face/web/heng.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="互粉" emot="[/hf]">
                                                                <img alt="互粉" src="http://img.android.d.cn/android/cdroid_stable/face/web/hf.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="坏笑" emot="[/huaix]">
                                                                <img alt="坏笑" src="http://img.android.d.cn/android/cdroid_stable/face/web/huaix.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="害羞" emot="[/hx]">
                                                                <img alt="害羞" src="http://img.android.d.cn/android/cdroid_stable/face/web/hx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="火星人" emot="[/hxr]">
                                                                <img alt="火星人" src="http://img.android.d.cn/android/cdroid_stable/face/web/hxr.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="囧" emot="[/jiong]">
                                                                <img alt="囧" src="http://img.android.d.cn/android/cdroid_stable/face/web/jiong.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="哭" emot="[/k]">
                                                                <img alt="哭" src="http://img.android.d.cn/android/cdroid_stable/face/web/k.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="可爱" emot="[/ka]">
                                                                <img alt="可爱" src="http://img.android.d.cn/android/cdroid_stable/face/web/ka.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="看不见" emot="[/kbj]">
                                                                <img alt="看不见" src="http://img.android.d.cn/android/cdroid_stable/face/web/kbj.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="可怜" emot="[/kl]">
                                                                <img alt="可怜" src="http://img.android.d.cn/android/cdroid_stable/face/web/kl.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="酷" emot="[/ku]">
                                                                <img alt="酷" src="http://img.android.d.cn/android/cdroid_stable/face/web/ku.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="流汗" emot="[/lh]">
                                                                <img alt="流汗" src="http://img.android.d.cn/android/cdroid_stable/face/web/lh.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="玫瑰" emot="[/mg]">
                                                                <img alt="玫瑰" src="http://img.android.d.cn/android/cdroid_stable/face/web/mg.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="怕" emot="[/pa]">
                                                                <img alt="怕" src="http://img.android.d.cn/android/cdroid_stable/face/web/pa.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="强" emot="[/q]">
                                                                <img alt="强" src="http://img.android.d.cn/android/cdroid_stable/face/web/q.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="糗大了" emot="[/qdl]">
                                                                <img alt="糗大了" src="http://img.android.d.cn/android/cdroid_stable/face/web/qdl.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="钱" emot="[/qian]">
                                                                <img alt="钱" src="http://img.android.d.cn/android/cdroid_stable/face/web/qian.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="枪--" emot="[/qiang]">
                                                                <img alt="枪--" src="http://img.android.d.cn/android/cdroid_stable/face/web/qiang.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="亲亲" emot="[/qing]">
                                                                <img alt="亲亲" src="http://img.android.d.cn/android/cdroid_stable/face/web/qing.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="弱" emot="[/r]">
                                                                <img alt="弱" src="http://img.android.d.cn/android/cdroid_stable/face/web/r.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="胜利" emot="[/sl]">
                                                                <img alt="胜利" src="http://img.android.d.cn/android/cdroid_stable/face/web/sl.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="色迷迷" emot="[/smm]">
                                                                <img alt="色迷迷" src="http://img.android.d.cn/android/cdroid_stable/face/web/smm.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="生日蛋糕" emot="[/srdg]">
                                                                <img alt="生日蛋糕" src="http://img.android.d.cn/android/cdroid_stable/face/web/srdg.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="调皮" emot="[/tp]">
                                                                <img alt="调皮" src="http://img.android.d.cn/android/cdroid_stable/face/web/tp.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="偷笑" emot="[/tx]">
                                                                <img alt="偷笑" src="http://img.android.d.cn/android/cdroid_stable/face/web/tx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="挖鼻子" emot="[/wbz]">
                                                                <img alt="挖鼻子" src="http://img.android.d.cn/android/cdroid_stable/face/web/wbz.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="委屈" emot="[/wq]">
                                                                <img alt="委屈" src="http://img.android.d.cn/android/cdroid_stable/face/web/wq.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="微笑" emot="[/wx]">
                                                                <img alt="微笑" src="http://img.android.d.cn/android/cdroid_stable/face/web/wx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="吓" emot="[/x]">
                                                                <img alt="吓" src="http://img.android.d.cn/android/cdroid_stable/face/web/x.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="心碎" emot="[/xs]">
                                                                <img alt="心碎" src="http://img.android.d.cn/android/cdroid_stable/face/web/xs.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="阴险" emot="[/yx]">
                                                                <img alt="阴险" src="http://img.android.d.cn/android/cdroid_stable/face/web/yx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="抓狂" emot="[/zk]">
                                                                <img alt="抓狂" src="http://img.android.d.cn/android/cdroid_stable/face/web/zk.gif">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="com-limit">您还能留下<em id="comLimit">2000</em>个脚印</span>
                                        <button class="com-sub" type="submit" onclick="ComFn.setParentID(0, this)">发布</button>

                                    </div>
                                </form>
                            </div>

                            <div class="com-head" id="comHeadNoLogin">

                                <div class="com-head-box">
                                    <div class="no-login">
                                        <a href="javascript:;" title="" onclick="USER.showLoginForm(window.location.href);">登录</a>后才能发表评论哦~
                                    </div>
                                </div>

                            </div>


                            <div class="com-cont">
                                <div class="com-hot" id="comHot">
                                    <h3 class="com-tit-wrap">
                                        <span class="com-tit">
                                            <strong>热门</strong>评论
                                        </span>
                                    </h3>
                                    <div class="com-area">
                                        <div class="com-load"></div>
                                    </div>
                                </div>
                                <div class="com-new" id="comNew">
                                    <h3 class="com-tit-wrap">
                                        <span class="com-tit">
                                            <strong>最新</strong>评论
                                        </span>
                                    </h3>
                                    <div class="com-area">
                                        <div class="com-load"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page"></div>
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
                                                                <a title="精彩公众号推荐" target="_blank" href=""> <i></i>
                                    精彩公众号推荐                                </a>
                            </h3>
                        </div>
                        <div class="module-cont">
                            <ul class="sim-app">
                                                                <li>
                                    <a href="/info/d?id=6&mid=3" title="小肉粽" target="_blank" class="de-set-icon">
                                        <img src="/style/front/public/huaqiangu.png" o-src="" alt="小肉粽" />
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">小肉粽</p>
                                        <a href="/info/d?id=6&mid=3" title="小肉粽" class="de-set-tit">小肉粽</a>

                                    </div>
                                </li>
                                                                <li>
                                    <a href="/info/d?id=7&mid=3" title="小肉粽" target="_blank" class="de-set-icon">
                                        <img src="/style/front/public/huaqiangu.png" o-src="" alt="小肉粽" />
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">不倒翁科技</p>
                                        <a href="/info/d?id=7&mid=3" title="小肉粽" class="de-set-tit">小肉粽</a>

                                    </div>
                                </li>
                                                                <li>
                                    <a href="/info/d?id=8&mid=3" title="百度" target="_blank" class="de-set-icon">
                                        <img src="/style/front/public/huaqiangu.png" o-src="" alt="百度" />
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">小肉粽</p>
                                        <a href="/info/d?id=8&mid=3" title="百度" class="de-set-tit">百度</a>

                                    </div>
                                </li>
                                                                <li>
                                    <a href="/info/d?id=9&mid=3" title="小肉粽" target="_blank" class="de-set-icon">
                                        <img src="/style/front/public/huaqiangu.png" o-src="" alt="小肉粽" />
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">小肉粽</p>
                                        <a href="/info/d?id=9&mid=3" title="小肉粽" class="de-set-tit">小肉粽</a>

                                    </div>
                                </li>
                                                                <li>
                                    <a href="/info/d?id=10&mid=3" title="小肉粽" target="_blank" class="de-set-icon">
                                        <img src="/style/front/public/huaqiangu.png" o-src="" alt="小肉粽" />
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">不倒翁科技</p>
                                        <a href="/info/d?id=10&mid=3" title="小肉粽" class="de-set-tit">小肉粽</a>

                                    </div>
                                </li>
                                                                <li>
                                    <a href="/info/d?id=11&mid=3" title="百度" target="_blank" class="de-set-icon">
                                        <img src="/style/front/public/huaqiangu.png" o-src="" alt="百度" />
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">小肉粽</p>
                                        <a href="/info/d?id=11&mid=3" title="百度" class="de-set-tit">百度</a>

                                    </div>
                                </li>
                                                                <li>
                                    <a href="/info/d?id=12&mid=3" title="小肉粽" target="_blank" class="de-set-icon">
                                        <img src="/style/front/public/huaqiangu.png" o-src="" alt="小肉粽" />
                                    </a>
                                    <div class="sim-des">
                                        <p class="sim-class">小肉粽</p>
                                        <a href="/info/d?id=12&mid=3" title="小肉粽" class="de-set-tit">小肉粽</a>

                                    </div>
                                </li>
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

                    <div class="module">
                        <div class="module-head">
                            <h3 class="module-tit"><i></i>TA们也在玩</h3>
                        </div>
                        <ul class="module-cont other-user clearfix">

                            <li>
                                <a href="http://android.d.cn/u/31/14516018.html" title="ltsun" target="_blank" class="other-user-link">

                                    <img src="http://tools.service.d.cn/userhead/get?mid=14516018&size=large" alt="ltsun"/>

                                </a>
                                <a href="http://android.d.cn/u/31/14516018.html" title="ltsun" target="_blank" class="other-user-name">ltsun</a>
                            </li>

                            <li>
                                <a href="http://android.d.cn/u/31/89375122.html" title="黑翼" target="_blank" class="other-user-link">

                                    <img src="http://tools.service.d.cn/userhead/get?mid=89375122&size=large" alt="黑翼"/>

                                </a>
                                <a href="http://android.d.cn/u/31/89375122.html" title="黑翼" target="_blank" class="other-user-name">黑翼</a>
                            </li>

                            <li>
                                <a href="http://android.d.cn/u/31/127363389.html" title="katoopm" target="_blank" class="other-user-link">

                                    <img src="http://tools.service.d.cn/userhead/get?mid=127363389&size=large" alt="katoopm"/>

                                </a>
                                <a href="http://android.d.cn/u/31/127363389.html" title="katoopm" target="_blank" class="other-user-name">katoopm</a>
                            </li>

                            <li>
                                <a href="http://android.d.cn/u/31/132216081.html" title="ZM4M" target="_blank" class="other-user-link">

                                    <img src="http://tools.service.d.cn/userhead/get?mid=132216081&size=large" alt="ZM4M"/>

                                </a>
                                <a href="http://android.d.cn/u/31/132216081.html" title="ZM4M" target="_blank" class="other-user-name">ZM4M</a>
                            </li>

                            <li>
                                <a href="http://android.d.cn/u/31/132412609.html" title="wwyydd" target="_blank" class="other-user-link">

                                    <img src="http://tools.service.d.cn/userhead/get?mid=132412609&size=large" alt="wwyydd"/>

                                </a>
                                <a href="http://android.d.cn/u/31/132412609.html" title="wwyydd" target="_blank" class="other-user-name">wwyydd</a>
                            </li>

                            <li>
                                <a href="http://android.d.cn/u/31/133124109.html" title="cjy90339" target="_blank" class="other-user-link">

                                    <img src="http://tools.service.d.cn/userhead/get?mid=133124109&size=large" alt="cjy90339"/>

                                </a>
                                <a href="http://android.d.cn/u/31/133124109.html" title="cjy90339" target="_blank" class="other-user-name">cjy90339</a>
                            </li>

                            <li>
                                <a href="http://android.d.cn/u/31/158425761.html" title="trq1999309" target="_blank" class="other-user-link">

                                    <img src="http://tools.service.d.cn/userhead/get?mid=158425761&size=large" alt="trq1999309"/>

                                </a>
                                <a href="http://android.d.cn/u/31/158425761.html" title="trq1999309" target="_blank" class="other-user-name">trq1999309</a>
                            </li>

                            <li>
                                <a href="http://android.d.cn/u/31/177127326.html" title="zr15918768" target="_blank" class="other-user-link">

                                    <img src="http://tools.service.d.cn/userhead/get?mid=177127326&size=large" alt="zr15918768"/>

                                </a>
                                <a href="http://android.d.cn/u/31/177127326.html" title="zr15918768" target="_blank" class="other-user-name">zr15918768</a>
                            </li>

                            <li>
                                <a href="http://android.d.cn/u/31/182076556.html" title="xw2333" target="_blank" class="other-user-link">

                                    <img src="http://tools.service.d.cn/userhead/get?mid=182076556&size=large" alt="xw2333"/>

                                </a>
                                <a href="http://android.d.cn/u/31/182076556.html" title="xw2333" target="_blank" class="other-user-name">xw2333</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>


        <div id="msg">
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

            <div class="copy-right">
                <p>
                    <input type="hidden" id="serviceIp" name="serviceIp" value="118.144.66.139" />
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