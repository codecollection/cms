<?php $cate = $c->getCate($cid); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="安卓新闻,安卓游戏攻略,安卓游戏评测"/>
        <meta name="description" content="安卓手机游戏资讯频道提供最新安卓业内新闻、原创安卓游戏攻略、安卓游戏评测、安卓软件教程、安卓新手指南等全方位安卓手机单机游戏新闻资讯"/>

        <meta charset="utf-8"/>
        <meta name="copyright" content="www.d.cn"/>


        <link type="application/rss+xml" href="http://android.d.cn/rss/news.xml" rel="alternate"
              title="Android手机游戏免费下载 Android手机软件下载 Android智能门户_当乐网"/>


        <link type="image/x-icon" rel="shortcut icon" href="http://www.d.cn/favicon.ico"/>
        <title>
            全部最新资讯_安卓游戏/软件资讯频道_第1页_当乐网
        </title>
        <?php $c->loadView("front/public/header.php"); ?>
        <link rel="stylesheet" href="/style/front/public/css/list.css"/>
        <script>
            $(function() {
                $('.info-list li').hover(function() {
                    $(this).addClass('curr');
                    $(this).find('.border-out').show();
                }, function() {
                    $(this).removeClass('curr');
                    $(this).find('.border-out').hide();
                });
            });
        </script>
    </head>
    <body>
        <?php $c->loadView("front/public/navtop.php");?>
        <?php $c->loadView("front/public/nav.php"); ?>
        <div class="content">
            <div class="left">

                <ul class="info-list clearfix">
                    
                    <?php foreach ($list['list'] as $k => $v) { ?>
                        <li class="first">
                            <div class="border-in">
                                <?php //$cate = $c->getCate($v['last_cate_id']); ?>
                                <div class="info-title">
                                  
                                    <span class="mk-date"><?php echo RKit::formatTime($v['cdate']);?>发表</span>
                                </div>
                                <a href="<?php echo $v['surl']; ?>" title="<?php echo $v['title']; ?>" target="_blank" class="info-thumb">
                                    <img class="game-img" src="<?php echo $v['logo']; ?>" alt="<?php echo $v['title']; ?>"/>
                                </a>
                                <p class="desc">
                                    <i></i>
                                    <a href="<?php echo $v['surl']; ?>" title="<?php echo $v['title']; ?>" target="_blank"><?php echo $v['title']; ?></a>
                                </p>
                                
                            </div>
                            <div class="border-out"></div>
                        </li>
                    <?php } ?>
                </ul>
                <div class="page">
                    <p>
                        <?php echo $list['pagecode']; ?>
                    </p>
                </div>
            </div>
            <div class="right">
                <div class="right-div list-img"><a href="http://news.d.cn/news/view-21766.html" title="《极品飞车2015》7月2日安卓首发 百辆首发豪车等你来战" target="_blank"><img src="http://img.android.d.cn/new/smtpfbackend/new/pageadv/201506/1435221861067Gj6w.jpg" alt="《极品飞车2015》7月2日安卓首发 百辆首发豪车等你来战" /></a></div>
                <div class="right-div">
                    <?php $area = $c->getArea(6);?>
                    <div class="list-title clearfix">
                        <h2 class="con" title="<?php echo $area["title"];?>"><span class="title-bg iconSprite"></span><?php echo $area["title"];?></h2>
                    </div>
                    <ul class="eva-list">
                        <?php foreach($area['list'] as $k => $v){
                            $style = "";
                            if($k == 0 ){$style = "first";}
                            if($k == 1 ){$style = "second";}
                            if($k == 2 ){$style = "third";}
                        ?>
                        <li>
                            <span class="num <?php echo $style?>"><?php echo $k + 1;?></span>
                            <a href="<?php echo($v['surl']);?>" title="<?php echo($v['title']);?>" class="eva-con" target="_blank"><?php echo($v['title']);?></a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="right-div">
                    <div class="list-title clearfix">
                        <h2 class="con" title="作家专栏"><span class="title-bg iconSprite"></span>作家专栏</h2>
                        <a href="javascript:void(0)" class="change">
                            <span class="ch-icon iconSprite"></span>
                            换一组
                        </a>
                    </div>
                    <ul class="authors">
                        <li><div class="au-info"><a class="a-h-out" target="_blank" href="http://news.d.cn/editor/dview-90279529.html"><img alt="" src="http://raw.android.d.cn/cdroid_res/web/news2015072009/img/icon-1.png"> </a> <img alt="" src="http://img.news.d.cn//Upload//Editor/20140701141432.jpg" class="a-h-img"><div class="detail"><p class="au-name"><a target="_blank" href="http://news.d.cn/editor/dview-90279529.html">杀手凉粉</a></p><p class="au-desc">心有猛虎，细嗅蔷薇</p></div></div>
                        </li>
                        <li><div class="au-info"><a class="a-h-out" target="_blank" href="http://news.d.cn/editor/dview-128386932.html"><img alt="" src="http://raw.android.d.cn/cdroid_res/web/news2015072009/img/icon-1.png"> </a> <img alt="" src="http://img.news.d.cn//Upload//Editor/20150526161748.jpg" class="a-h-img"><div class="detail"><p class="au-name"><a target="_blank" href="http://news.d.cn/editor/dview-128386932.html">狐狸</a></p><p class="au-desc">你好！我是小狐腻！</p></div></div>
                        </li>
                        <li><div class="au-info"><a class="a-h-out" target="_blank" href="http://news.d.cn/editor/dview-22582643.html"><img alt="" src="http://raw.android.d.cn/cdroid_res/web/news2015072009/img/icon-1.png"> </a> <img alt="" src="http://img.news.d.cn//Upload//Editor/20140630093933.jpg" class="a-h-img"><div class="detail"><p class="au-name"><a target="_blank" href="http://news.d.cn/editor/dview-22582643.html">伊恩</a></p><p class="au-desc">你永远不会独行。</p></div></div>
                        </li>
                        <li><div class="au-info"><a class="a-h-out" target="_blank" href="http://news.d.cn/editor/dview-28523958.html"><img alt="" src="http://raw.android.d.cn/cdroid_res/web/news2015072009/img/icon-1.png"> </a> <img alt="" src="http://img.news.d.cn//Upload//Editor/20150605095705.jpg" class="a-h-img"><div class="detail"><p class="au-name"><a target="_blank" href="http://news.d.cn/editor/dview-28523958.html">奶霸</a></p><p class="au-desc">孤独，寂寞，空虚如影随形。</p></div></div>
                        </li>
                    </ul>
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
