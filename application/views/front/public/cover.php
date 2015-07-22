<!DOCTYPE html>
<html lang="en">
<head>
<link type="application/rss+xml" href="" rel="alternate" title="Android手机游戏免费下载 Android手机软件下载 Android智能门户_当乐网"/>
<meta name="keywords" content="<?php echo $c->getItem('seo_keywords');?>"/>
<meta name="description" content="<?php echo $c->getItem('seo_desc');?>"/>
<title><?php echo $c->getItem('seo_title');?>-<?php echo $c->getItem('site_name');?></title>
<?php $c->loadView("front/public/header.php");?>
</head>

<body>
<!-- top-->
<?php $c->loadView("front/public/navtop.php");?>
<?php $c->loadView("front/public/nav.php");?>
<!-- top end-->
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
        <?php $area = $c->getArea(1);?>
        <div class="mod-head">
            <h2 class="cap-first"><?php echo $area["title"];?></h2>
        </div>
        <div class="mod-cont mod-first">
            <?php foreach($area['list'] as $k => $v){?>
                <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="mod-first-icon">
                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="" alt="<?php echo $v['num'];?>">
                </a>
                <div class="mod-first-des clearfix">
                    <a class="mod-first-tit" href="<?php echo $v['surl'];?>" title="极品飞车最高通缉2015" target="_blank"><?php echo $v['num'];?></a>
                    <p class="mod-first-txt">
                        <?php echo $v['desc'];?> 
                    </p>
                </div>
                <div class="mod-first-coll">
                    <div class="mod-coll">
                        <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-love"></a>
                    </div>
                </div>
            <?php }?>
        </div>
        <div class="dl-good">
            <h3><i></i>当乐<em>APP</em><span>公众号玩家必知</span></h3>
            <ul class="dl-good-list clearfix">
                <li class="good-first">    <a href="" title="当乐游戏中心" class="good-link" target="_blank"><img src="/style/front/public/image/anzhuologo.png" o-src="//new/smtpfbackend/new/pageadv/201406/1402293766893Q0nL.png" alt="当乐游戏中心" /><span>当乐游戏中心</span>    </a>
                </li>
                <li>    <a href="" title="游戏中心PC版" class="good-link" target="_blank"><img src="/style/front/public/image/pclogo.png" o-src="//new/smtpfbackend/new/pageadv/201406/1403753152724Dx0t.png" alt="游戏中心PC版" /><span>游戏中心PC版</span>    </a>
                </li>
                <li class="good-last">    <a href="" title="当乐网游中心" class="good-link" target="_blank"><img src="/style/front/public/image/dangle.png" o-src="//new/smtpfbackend/new/pageadv/201406/1403753153667wNG5.png" alt="当乐网游中心" /><span>当乐网游中心</span>    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--第一层 end-->
<!--第二层 begin-->
<div class="layout">
    <div class="mod-box layout-l">
        <?php $area = $c->getArea(2);?>
        <div class="mod-head">
            <h2 class="cap-recom"><?php echo $area["title"];?></h2>
<!--            <p class="mod-class">        
                <a href="/vendor/836e0443c6127ce8aa1a34cca6ef62e3.html" title="EA游戏" target="_blank">EA</a>        
                <span class="mod-class-sep"></span>        
                <a href="/vendor/49f9ae607380fffcac427ad0c1d3b8a0.html" title="Glu游戏" target="_blank">Glu</a>        
                <span class="mod-class-sep"></span>        
                <a href="/vendor/c4e1f93d20b3e019c02787343425bc31.html" title="GAMEVIL游戏" target="_blank" style="width: 69px;">GAMEVIL</a>        
                <span class="mod-class-sep"></span>        
                <a href="/vendor/4a7c540bd35468880e76690314cd1d55.html" title="Gameloft游戏" target="_blank" style="width: 69px;">Gameloft</a>        
                <span class="mod-class-sep"></span>        
                <a href="/paihangbang" title="游戏排行榜" target="_blank">游戏排行榜</a>    
            </p>  -->
        </div>
        <div class="mod-cont">
            <?php foreach($area['list'] as $k => $v){?>
                <?php if($k == 0){?>
                <div class="mod-thumb-b">
                    <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-b-img"><!--style="top:-140px;"-->
                        <img src="/style/front/public/1436944714893B6dq.jpg" o-src="//new/smtpfbackend/new/pageadv/201507/1435829845793OVl0.jpg" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>
                    <div class="mod-cover"></div>
                    <div class="thumb-des-b">
                        <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                            <i></i>
                            <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img8.android.d.cn/android/new/game_image/60/59560/icon.png" alt="<?php echo $v['num'];?>"/>
                        </a>
                        <div class="thumb-tips">
                            <p class="tips">
                                <span>
                                <?php echo $v['owner'];?>
                                </span>
                                <?php echo $c->type[$v['type']];?>
                            </p>
                            <span class="star star-grey">
                                <span class="star star-light stars-<?php echo $v['hot'] = $v['hot'] > 3 ? $v['hot'] : 3;?>" style="width:80%;"></span>
                            </span>
                            
                              <a class="thumb-down" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>">点击查看</a>
                            
                        </div>
                        <div class="thumb-b-func">
                            
                            <a class="b-coll-love "
                               href="javascript:;" onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this)"></a>
                        </div>
                        <i class="thumb-tri"></i>
                    </div>
                </div>
            <ul class="mod-recom mod-list clearfix" style="_float:left; _width: 425px;">
                <?php }else if($k < 5 && $k > 0 ){?>
                <li class="">
                    <div class="mode-app-wrap">
                        <a class="mode-app-name" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>
                        <div class="mode-app">
                            <a class="mode-app-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img7.android.d.cn/android/new/game_image/0/59100/icon.png" alt="<?php echo $v['num'];?>"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="num">
                                 <?php echo $v['owner'];?>
                                </p>
                                <?php echo $c->type[$v['type']];?>
                                <p class="star-wrap">
                                    <span class="star star-grey">
                                        <span class="star star-light stars-<?php echo $v['hot'] = $v['hot'] > 3 ? $v['hot'] : 3;?>"></span>
                                    </span>
                                </p>
                                <div class="mode-app-func">
                                    <div class="mod-coll">   
                                        <!--<a href="javascript:;" title="勇者之塔下载" class="coll-btn coll-down" onclick=""></a>-->
                                        <a href="javascript:;" title="<?php echo $v['num'];?>喜欢" class="coll-btn coll-love "
                                           onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php }else{?>
                <?php if($k == 5){?>
                </ul>
                <ul class="mod-recom mod-list clearfix">
                <?php }?>
                <li class="">
                    <div class="mode-app-wrap">
                        <a class="mode-app-name" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>
                        <div class="mode-app">
                            <a class="mode-app-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="" alt="<?php echo $v['num'];?>"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="num">
                                 <?php echo $v['owner'];?>
                                </p>
                                <?php echo $c->type[$v['type']];?>
                                <p class="star-wrap">
                                    <span class="star star-grey">
                                        <span class="star star-light stars-<?php echo $v['hot'] = $v['hot'] > 3 ? $v['hot'] : 3;?>"></span>
                                    </span>
                                </p>
                                <div class="mode-app-func">
                                    <div class="mod-coll">   
                                        <!--<a href="javascript:;" title="勇者之塔下载" class="coll-btn coll-down" onclick=""></a>-->  
                                        <a href="javascript:;" title="<?php echo $v['num'];?>喜欢" class="coll-btn coll-love " onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php }?>
          <?php }?>
            </ul>
        </div>
    </div>
    <div class="mod-box layout-r">
        <?php $area = $c->getArea(3);?>
        <div class="mod-head">
            <h3 class="cap-new"><a href="<?php echo $area["url"];?>" title="<?php echo $area["title"];?>" target="_blank"><?php echo $area["title"];?></a></h3>
            <a class="mod-more" href="<?php echo $area["url"];?>" title="<?php echo $area["title"];?>" target="_blank">更多</a>
        </div>
        <ul class="mod-cont mod-coming clearfix">
            <?php foreach($area['list'] as $k => $v){?>
            <li class="<?php echo $k == 0 ? "curr" : "";?>">                
                <div class="coming">        
                    <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" class="coming-icon" target="_blank">            
                        <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="//new/smtpfbackend/new/pageadv/201507/1435806849169xb0u.jpg" alt="<?php echo $v['num'];?>" />        
                    </a>        
                    <div class="coming-des">            
                        <a class="coming-tit" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>            
                        <p class="company">品牌商：<?php echo $v['owner'];?>  </p>            
                        <div class="time">发布时间：<?php echo date("Y年m月",$v['cdate']);?></div>        
                    </div>    
                </div>    
                <div class="coming-normal">        
                    <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" class="coming-name" target="_blank"><?php echo $v['num'];?></a>        
                    <span class="coming-class"><?php echo $c->type[$v['type']];?></span><span><?php echo date("Y年m月",$v['cdate']);?></span>    
                </div>
            </li>
            <?php }?>
        </ul>
    </div>
</div>
<!--第二层 end-->
<!--最新安卓游戏 begin-->
<div class="layout">
<div class="mod-box">
<div class="mod-head">
    <h2 class="cap-game"><a href="http://android.d.cn/game/1/" title="安卓最新游戏" target="_blank">最新公众号</a></h2>
    <ul class="mod-nav">
        <li class="curr"><a href="javascript:;" title="安卓最新游戏">最新</a></li>
        <li><a href="javascript:;" title="安卓最热游戏">最热</a></li>
        <li><a href="javascript:;" title="安卓五星游戏">五星</a></li>
    </ul>
    <a class="mod-more" href="" title="安卓游戏" target="_blank">更多</a>
<!--    <p class="mod-class">
        <a href="" title="安卓角色扮演" target="_blank">角色扮演</a>
        <span class="mod-class-sep"></span>
        <a href="" title="安卓动作游戏" target="_blank">动作游戏</a>
        <span class="mod-class-sep"></span>
        <a href="" title="安卓冒险解谜" target="_blank">冒险解谜</a>
        <span class="mod-class-sep"></span>
        <a href="" title="安卓体育运动" target="_blank">体育运动</a>
        <span class="mod-class-sep"></span>
        <a href="" title="安卓益智休闲" target="_blank">益智休闲</a>
    </p>-->
</div>
    
<?php $list = $c->getList(1,7);?>    
<div class="mod-cont">
    <?php foreach($list['list'] as $k => $v){?>
    <?php if($k == 0){ ?>
    <div class="mod-thumb-b">
        <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-b-img">
            <img src="/style/front/public/anzuo1.jpg" o-src="//new/smtpfbackend/new/news/201506/14356300447063Uxk.png" alt="<?php echo $v['num'];?>"/>
        </a>
        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                <i></i>
                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img8.android.d.cn/android/new/game_image/98/59398/icon.png" alt="<?php echo $v['num'];?>"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span><em><?php echo $v['owner'];?></em></span>
                    <span class="time"><?php echo date("m-d",$v['cdate']);?></span>
                    <span class="sep">|</span><?php echo $c->type[$v['type']];?>
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-4"></span>
                </span>
                
                    <a class="thumb-down" href="javascript:;" title="<?php echo $v['num'];?>" onclick="Adapt.adaptDown(this,1,59398)">立即查看</a>
                  
            </div>
            <div class="thumb-b-func">
                
                    <div class="b-score">
                        <span class="score">7<span>.5</span></span>
                    </div>
                
                <a class="b-coll-love " href="javascript:;" onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
    <?php }else{?>
        <li>
            <div class="mode-app-wrap">
                <a class="mode-app-name" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>
                <div class="mode-app">
                    <a class="mode-app-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                        <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img5.android.d.cn/android/new/game_image/64/57964/icon.png" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="num">
                            <em><?php echo $v['owner'];?></em>
                        </p>
                        <p class="time">
                            <?php echo date("m-d",$v['cdate']);?>
                            <span class="sep">|</span>
                                <?php echo $c->type[$v['type']];?>
                        </p>
                        <p class="star-wrap">
                            <span class="star star-grey">
                                <span class="star star-light stars-4"></span>
                            </span>
                        </p>
                        <div class="mode-app-func">
                            <div class="mod-coll">
                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,57964)"></a>
                                <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-love "
                                   onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php }?>
    <?php }?>          
    </ul> 
</div>
<?php $list = $c->getList(1,7);?>    
<div class="mod-cont hide">
    <?php foreach($list['list'] as $k => $v){?>
    <?php if($k == 0){ ?>
    <div class="mod-thumb-b">
        <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-b-img">
            <img src="/style/front/public/anzuo1.jpg" o-src="//new/smtpfbackend/new/news/201506/14356300447063Uxk.png" alt="<?php echo $v['num'];?>"/>
        </a>
        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                <i></i>
                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img8.android.d.cn/android/new/game_image/98/59398/icon.png" alt="<?php echo $v['num'];?>"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span><em><?php echo $v['owner'];?></em></span>
                    <span class="time"><?php echo date("m-d",$v['cdate']);?></span>
                    <span class="sep">|</span><?php echo $c->type[$v['type']];?>
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-4"></span>
                </span>
                
                    <a class="thumb-down" href="javascript:;" title="<?php echo $v['num'];?>" onclick="Adapt.adaptDown(this,1,59398)">立即查看</a>
                  
            </div>
            <div class="thumb-b-func">
                
                    <div class="b-score">
                        <span class="score">7<span>.5</span></span>
                    </div>
                
                <a class="b-coll-love " href="javascript:;" onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
    <?php }else{?>
        <li>
            <div class="mode-app-wrap">
                <a class="mode-app-name" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>
                <div class="mode-app">
                    <a class="mode-app-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                        <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img5.android.d.cn/android/new/game_image/64/57964/icon.png" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="num">
                            <em><?php echo $v['owner'];?></em>
                        </p>
                        <p class="time">
                            <?php echo date("m-d",$v['cdate']);?>
                            <span class="sep">|</span>
                                <?php echo $c->type[$v['type']];?>
                        </p>
                        <p class="star-wrap">
                            <span class="star star-grey">
                                <span class="star star-light stars-4"></span>
                            </span>
                        </p>
                        <div class="mode-app-func">
                            <div class="mod-coll">
                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,57964)"></a>
                                <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-love "
                                   onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php }?>
    <?php }?>          
    </ul> 
</div>
<?php $list = $c->getList(1,7);?>    
<div class="mod-cont hide">
    <?php foreach($list['list'] as $k => $v){?>
    <?php if($k == 0){ ?>
    <div class="mod-thumb-b">
        <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-b-img">
            <img src="/style/front/public/anzuo1.jpg" o-src="//new/smtpfbackend/new/news/201506/14356300447063Uxk.png" alt="<?php echo $v['num'];?>"/>
        </a>
        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                <i></i>
                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img8.android.d.cn/android/new/game_image/98/59398/icon.png" alt="<?php echo $v['num'];?>"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span><em><?php echo $v['owner'];?></em></span>
                    <span class="time"><?php echo date("m-d",$v['cdate']);?></span>
                    <span class="sep">|</span><?php echo $c->type[$v['type']];?>
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-4"></span>
                </span>
                
                    <a class="thumb-down" href="javascript:;" title="<?php echo $v['num'];?>" onclick="Adapt.adaptDown(this,1,59398)">立即查看</a>
                  
            </div>
            <div class="thumb-b-func">
                
                    <div class="b-score">
                        <span class="score">7<span>.5</span></span>
                    </div>
                
                <a class="b-coll-love "
                   href="javascript:;" onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
    <?php }else{?>
        <li>
            <div class="mode-app-wrap">
                <a class="mode-app-name" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>
                <div class="mode-app">
                    <a class="mode-app-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                        <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img5.android.d.cn/android/new/game_image/64/57964/icon.png" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="num">
                            <em><?php echo $v['owner'];?></em>
                        </p>
                        <p class="time">
                            <?php echo date("m-d",$v['cdate']);?>
                            <span class="sep">|</span>
                                <?php echo $c->type[$v['type']];?>
                        </p>
                        <p class="star-wrap">
                            <span class="star star-grey">
                                <span class="star star-light stars-4"></span>
                            </span>
                        </p>
                        <div class="mode-app-func">
                            <div class="mod-coll">
                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,57964)"></a>
                                <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-love "
                                   onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php }?>
    <?php }?>          
    </ul> 
</div>
</div>
</div>
<!--最新安卓游戏 end-->
<!--bt游戏 begin-->
<?php $area = $c->getArea(4);?>
<div class="layout">
    <div class="mod-box">
        <div class="mod-head">
            <h2 class="cap-bt"><a href="<?php echo $area["url"];?>" title="<?php echo $area["title"];?>" target="_blank"><?php echo $area["title"];?></a></h2>
            <a class="mod-more" href="<?php echo $area["url"];?>" title="<?php echo $area["title"];?>" target="_blank">更多</a>
        </div>
        <div class="mod-cont">
            <ul class="mod-bt mod-list clearfix">
            <?php foreach($area['list'] as $k => $v){?>
                <li>
                    <div class="mode-app-wrap">
                        <a class="mode-app-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                            <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img6.android.d.cn/android/new/game_image/9/14009/icon.png" alt="<?php echo $v['num'];?>">
                        </a>
                        <div class="mode-app-des">
                            <a class="mode-app-name" href="<?php echo $v['surl'];?>" target="_blank" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
                            <p class="mode-app-txt time">
                                <?php echo date("m-d",$v['cdate']);?>
                                <span class="sep">|</span><?php echo $c->type[$v['type']];?>
                            </p>
                            <div class="mode-app-func">
                                <span class="star star-grey">
                                    <span class="star star-light stars-5"></span>
                                </span>
                                <div class="mod-coll">

                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,14009)"></a>

                                    <a href="javascript:;" title="<?php echo $v['num'];?>"
                                       class="coll-btn coll-love "
                                       onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php }?>
            </ul>
        </div>
    </div>
</div>
<!--bt游戏 end-->
<!--大型游戏 begin-->
<?php $area = $c->getArea(5);?>
        <div class="layout">
            <div class="mod-box">
                <div class="mod-head">
                    <h2 class="cap-big"><a href="<?php echo $area["url"];?>" title="<?php echo $area["title"];?>" target="_blank"><?php echo $area["title"];?></a></h2>
            <a class="mod-more" href="<?php echo $area["url"];?>" title="<?php echo $area["title"];?>" target="_blank">更多</a>
                </div>
                <div class="mod-cont">
                    <ul class="mod-bt mod-list clearfix">
                        <?php foreach($area['list'] as $k => $v){?>
                        <li>
                            <div class="mode-app-wrap">
                                <a class="mode-app-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img6.android.d.cn/android/new/game_image/9/14009/icon.png" alt="<?php echo $v['num'];?>">
                                </a>
                                <div class="mode-app-des">
                                    <a class="mode-app-name" href="<?php echo $v['surl'];?>" target="_blank" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
                                    <p class="mode-app-txt time">
                                        <?php echo date("m-d",$v['cdate']);?>
                                        <span class="sep">|</span><?php echo $c->type[$v['type']];?>
                                    </p>
                                    <div class="mode-app-func">
                                        <span class="star star-grey">
                                            <span class="star star-light stars-5"></span>
                                        </span>
                                        <div class="mod-coll">

                                            <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,14009)"></a>

                                            <a href="javascript:;" title="<?php echo $v['num'];?>"
                                               class="coll-btn coll-love "
                                               onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php }?>
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
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/40/40/icon.jpg" alt="必备游戏"/>
                                <span class="scroll-name">必备游戏</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%BF%85%E5%A4%87%E8%BD%AF%E4%BB%B6" title="必备软件" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/39/39/icon.jpg" alt="必备软件"/>
                                <span class="scroll-name">必备软件</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E4%B8%8A%E5%8E%95%E6%89%80" title="上厕所" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/38/38/icon.jpg" alt="上厕所"/>
                                <span class="scroll-name">上厕所</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E8%A7%A3%E8%B0%9C" title="解谜" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/34/34/icon.jpg" alt="解谜"/>
                                <span class="scroll-name">解谜</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%AF%B9%E6%88%98" title="对战" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/30/30/icon.jpg" alt="对战"/>
                                <span class="scroll-name">对战</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%B0%8F%E6%B8%85%E6%96%B0" title="小清新" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/28/28/icon.jpg" alt="小清新"/>
                                <span class="scroll-name">小清新</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E7%94%B5%E5%BD%B1%E6%94%B9%E7%BC%96" title="电影改编" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/27/27/icon.jpg" alt="电影改编"/>
                                <span class="scroll-name">电影改编</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E9%87%8D%E5%8F%A3%E5%91%B3" title="重口味" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/24/24/icon.jpg" alt="重口味"/>
                                <span class="scroll-name">重口味</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E9%87%8D%E5%8A%9B%E6%84%9F%E5%BA%94" title="重力感应" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/18/18/icon.jpg" alt="重力感应"/>
                                <span class="scroll-name">重力感应</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%84%BF%E7%AB%A5" title="儿童" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/17/17/icon.jpg" alt="儿童"/>
                                <span class="scroll-name">儿童</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=3D" title="3D" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/16/16/icon.jpg" alt="3D"/>
                                <span class="scroll-name">3D</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=HD%E9%AB%98%E6%B8%85" title="HD高清" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/14/14/icon.jpg" alt="HD高清"/>
                                <span class="scroll-name">HD高清</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%A4%A7%E5%9E%8B%E6%B8%B8%E6%88%8F" title="大型游戏" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/13/13/icon.jpg" alt="大型游戏"/>
                                <span class="scroll-name">大型游戏</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%A5%B3%E7%94%9F%E6%9C%80%E7%88%B1" title="女生最爱" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/12/12/icon.jpg" alt="女生最爱"/>
                                <span class="scroll-name">女生最爱</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E6%B6%88%E7%A3%A8%E6%97%B6%E9%97%B4" title="消磨时间" target="_blank"
                               class="scroll-icon">
                                <img src="/style/front/public/ertong.jpg" o-src="//android/cdroid_stable/clienttag/10/10/icon.jpg" alt="消磨时间"/>
                                <span class="scroll-name">消磨时间</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E5%A1%94%E9%98%B2" title="塔防" target="_blank"
                               class="scroll-icon">
                                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="//android/cdroid_stable/clienttag/8/8/icon.jpg" alt="塔防"/>
                                <span class="scroll-name">塔防</span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                    
                        <li class="scroll-item">
                            <a href="http://android.d.cn/search/tag?keyword=%E7%94%B7%E7%94%9F%E6%9C%80%E7%88%B1" title="男生最爱" target="_blank"
                               class="scroll-icon">
                                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="//android/cdroid_stable/clienttag/6/6/icon.jpg" alt="男生最爱"/>
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
    <h2 class="cap-soft"><a href="http://android.d.cn/software/1/" title="安卓最新软件" target="_blank">技能get公众号专区</a></h2>
    <ul class="mod-nav">
        <li class="curr"><a href="javascript:;" title="安卓最新软件">最新</a></li>
        <li><a href="javascript:;" title="安卓最热软件">最热</a></li>
        <li><a href="javascript:;" title="安卓五星软件">五星</a></li>
    </ul>
    <a class="mod-more" href="" title="安卓最新软件" target="_blank">更多</a>
<!--    <p class="mod-class">
        <a href="" title="安卓通讯增强" target="_blank">通讯增强</a>
        <span class="mod-class-sep"></span>
        <a href="" title="安卓信息增强" target="_blank">信息增强</a>
        <span class="mod-class-sep"></span>
        <a href="" title="安卓系统工具" target="_blank">系统工具</a>
        <span class="mod-class-sep"></span>
        <a href="" title="安卓文件管理" target="_blank">文件管理</a>
        <span class="mod-class-sep"></span>
        <a href="" title="安卓音乐播放" target="_blank">音乐播放</a>
    </p>-->
</div>
<?php $list = $c->getList(1,7);?>    
<div class="mod-cont">
    <?php foreach($list['list'] as $k => $v){?>
    <?php if($k == 0){ ?>
    <div class="mod-thumb-b">
        <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-b-img">
            <img src="/style/front/public/anzuo1.jpg" o-src="//new/smtpfbackend/new/news/201506/14356300447063Uxk.png" alt="<?php echo $v['num'];?>"/>
        </a>
        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                <i></i>
                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img8.android.d.cn/android/new/game_image/98/59398/icon.png" alt="<?php echo $v['num'];?>"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span><em><?php echo $v['owner'];?></em></span>
                    <span class="time"><?php echo date("m-d",$v['cdate']);?></span>
                    <span class="sep">|</span><?php echo $c->type[$v['type']];?>
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-4"></span>
                </span>
                
                    <a class="thumb-down" href="javascript:;" title="<?php echo $v['num'];?>" onclick="Adapt.adaptDown(this,1,59398)">立即查看</a>
                  
            </div>
            <div class="thumb-b-func">
                
                    <div class="b-score">
                        <span class="score">7<span>.5</span></span>
                    </div>
                
                <a class="b-coll-love "
                   href="javascript:;" onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
    <?php }else{?>
        <li>
            <div class="mode-app-wrap">
                <a class="mode-app-name" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>
                <div class="mode-app">
                    <a class="mode-app-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                        <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img5.android.d.cn/android/new/game_image/64/57964/icon.png" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="num">
                            <em><?php echo $v['owner'];?></em>
                        </p>
                        <p class="time">
                            <?php echo date("m-d",$v['cdate']);?>
                            <span class="sep">|</span>
                                <?php echo $c->type[$v['type']];?>
                        </p>
                        <p class="star-wrap">
                            <span class="star star-grey">
                                <span class="star star-light stars-4"></span>
                            </span>
                        </p>
                        <div class="mode-app-func">
                            <div class="mod-coll">
                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,57964)"></a>
                                <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-love "
                                   onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php }?>
    <?php }?>          
    </ul> 
</div>
<?php $list = $c->getList(1,7);?>    
<div class="mod-cont hide">
    <?php foreach($list['list'] as $k => $v){?>
    <?php if($k == 0){ ?>
    <div class="mod-thumb-b">
        <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-b-img">
            <img src="/style/front/public/anzuo1.jpg" o-src="//new/smtpfbackend/new/news/201506/14356300447063Uxk.png" alt="<?php echo $v['num'];?>"/>
        </a>
        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                <i></i>
                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img8.android.d.cn/android/new/game_image/98/59398/icon.png" alt="<?php echo $v['num'];?>"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span><em><?php echo $v['owner'];?></em></span>
                    <span class="time"><?php echo date("m-d",$v['cdate']);?></span>
                    <span class="sep">|</span><?php echo $c->type[$v['type']];?>
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-4"></span>
                </span>
                
                    <a class="thumb-down" href="javascript:;" title="<?php echo $v['num'];?>" onclick="Adapt.adaptDown(this,1,59398)">立即查看</a>
                  
            </div>
            <div class="thumb-b-func">
                
                    <div class="b-score">
                        <span class="score">7<span>.5</span></span>
                    </div>
                
                <a class="b-coll-love "
                   href="javascript:;" onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
    <?php }else{?>
        <li>
            <div class="mode-app-wrap">
                <a class="mode-app-name" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>
                <div class="mode-app">
                    <a class="mode-app-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                        <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img5.android.d.cn/android/new/game_image/64/57964/icon.png" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="num">
                            <em><?php echo $v['owner'];?></em>
                        </p>
                        <p class="time">
                            <?php echo date("m-d",$v['cdate']);?>
                            <span class="sep">|</span>
                                <?php echo $c->type[$v['type']];?>
                        </p>
                        <p class="star-wrap">
                            <span class="star star-grey">
                                <span class="star star-light stars-4"></span>
                            </span>
                        </p>
                        <div class="mode-app-func">
                            <div class="mod-coll">
                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,57964)"></a>
                                <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-love "
                                   onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php }?>
    <?php }?>          
    </ul> 
</div>
<?php $list = $c->getList(1,7);?>    
<div class="mod-cont hide">
    <?php foreach($list['list'] as $k => $v){?>
    <?php if($k == 0){ ?>
    <div class="mod-thumb-b">
        <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-b-img">
            <img src="/style/front/public/anzuo1.jpg" o-src="//new/smtpfbackend/new/news/201506/14356300447063Uxk.png" alt="<?php echo $v['num'];?>"/>
        </a>
        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                <i></i>
                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img8.android.d.cn/android/new/game_image/98/59398/icon.png" alt="<?php echo $v['num'];?>"/>
            </a>
            <div class="thumb-tips">
                <p class="tips">
                    <span><em><?php echo $v['owner'];?></em></span>
                    <span class="time"><?php echo date("m-d",$v['cdate']);?></span>
                    <span class="sep">|</span><?php echo $c->type[$v['type']];?>
                </p>
                <span class="star star-grey">
                    <span class="star star-light stars-4"></span>
                </span>
                
                    <a class="thumb-down" href="javascript:;" title="<?php echo $v['num'];?>" onclick="Adapt.adaptDown(this,1,59398)">立即查看</a>
                  
            </div>
            <div class="thumb-b-func">
                
                    <div class="b-score">
                        <span class="score">7<span>.5</span></span>
                    </div>
                
                <a class="b-coll-love "
                   href="javascript:;" onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
            </div>
            <i class="thumb-tri"></i>
        </div>
    </div>
    <ul class="mod-game mod-list clearfix">
    <?php }else{?>
        <li>
            <div class="mode-app-wrap">
                <a class="mode-app-name" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>
                <div class="mode-app">
                    <a class="mode-app-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                        <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img5.android.d.cn/android/new/game_image/64/57964/icon.png" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="num">
                            <em><?php echo $v['owner'];?></em>
                        </p>
                        <p class="time">
                            <?php echo date("m-d",$v['cdate']);?>
                            <span class="sep">|</span>
                                <?php echo $c->type[$v['type']];?>
                        </p>
                        <p class="star-wrap">
                            <span class="star star-grey">
                                <span class="star star-light stars-4"></span>
                            </span>
                        </p>
                        <div class="mode-app-func">
                            <div class="mod-coll">
                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-down" onclick="Adapt.adaptDown(this,1,57964)"></a>
                                <a href="javascript:;" title="<?php echo $v['num'];?>" class="coll-btn coll-love "
                                   onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php }?>
    <?php }?>          
    </ul> 
</div>
</div>
</div>
<!--最新安卓软件 end-->
<!--安卓资讯 begin-->
<div class="layout">
    <div class="mod-box">
        <div class="mod-head">
            <h2 class="cap-info"><a href="/info/l?cid=2" title="公众号资讯" target="_blank">公众号资讯</a></h2>
            <ul class="mod-nav">
                <?php $cate = $c->getCate(2);?>
                <?php foreach($cate['son'] as $k => $t){?>
                <li class="<?php echo $k==0 ? 'curr' : "";?>"><a href="javascript:;" title="<?php echo $t['cname'];?>"><?php echo $t['cname'];?></a></li>
                <?php }?>
                
            </ul>
            <a class="mod-more" href="/info/l?cid=2" title="公众号资讯" target="_blank">更多</a>
        </div>
        
        <div class="mod-cont">
            <ul class="mod-info clearfix">
                
                    <li class="mod-thumb-b">
                        <a href="http://news.d.cn/pc/view-22579.html" title="《深空传说》评测：动作与解谜的完美结合" target="_blank" class="thumb-b-img">
                            <img src="/style/front/public/zixun1.jpg" o-src="//new/smtpfbackend/new/news/201507/1435731486808MCs7.jpg" alt="《深空传说》评测：动作与解谜的完美结合"/>
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
                            <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="//new/smtpfbackend/new/pageadv/201506/1435221449891w10A.jpg" alt="《泰拉瑞亚》炼金站介绍，炼金站建造攻略技巧"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070415505444457276.jpg" alt="《我的世界手机版》怎么耕地种菜 新手简易农场制作攻略"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070415412934867772.jpg" alt="《我的世界手机版》机关岩浆床制作攻略方法"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/201507041528146127420.jpg" alt="《我的世界手机版》基础操作教程介绍"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070415202070518365.jpg" alt="《我的世界手机版》火药怎么获得 火药介绍"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070415100895204321.jpg" alt="《我的世界手机版》双重陷阱门制作教程攻略"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070415005951524098.jpg" alt="《我的世界手机版》困怪陷阱制作教程"/>
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
                                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="//new/smtpfbackend/new/news/201506/1435222356466jeyj.jpg" alt="Less is more 十款极简主义手游佳作推荐"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070315525347795644.jpg" alt="谁说西方团队不能碰？且看法国厂商如何玩转日式RPG?"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070318034842506678.jpg" alt="乐游播报第63期《深空传说》《火柴人联盟》等"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/201507031529305844667.jpg" alt="冷热参半 十款游戏带你感受冰火两重天"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070216542240347911.jpg" alt="从批量下架南北战争游戏说起 谈谈颇受争议的苹果审核"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015063015543479921231.jpg" alt="寻觅谋杀案背后的蛛丝马迹 凶案主题手游大盘点"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015063017492734889192.jpg" alt="那些年游戏们走过的“红毯”！戏说国内外游戏盛典"/>
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
                            <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="//new/smtpfbackend/new/pageadv/201506/1435221709923K4NG.jpg" alt="《极品飞车2015》7月2日安卓首发 百辆首发豪车等你来战"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070414060528756560.jpg" alt="《辐射4》国内由杉果游戏代理 中文版敬请持续关注"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070413384567525958.jpg" alt="AR技术塔防手游 《隐秘：异常》 即将上架"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070413253098131616.jpg" alt="与F4大谈恋爱 《花样男子》双平台上架"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/201507041114288959750.jpg" alt="优质推理破案游戏《蛛丝马迹 The Trace》半价促销中"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070410205339657525.jpg" alt="暑期档热播剧《旋风少女》官方手游即将来袭"/>
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
                                    <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.news.d.cn//Upload/Image/2015070410384364965014.jpg" alt="王牌声优倾情演绎 《永恒战记》7月5日不删档测试"/>
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
            <h3 class="cap-ori"><a href="http://app.d.cn/subject-1.html" target="_blank" title="安卓大作专区">公众号大作专区</a></h3>
            <a class="mod-more" href="http://app.d.cn/subject-1.html" target="_blank" title="安卓大作专区">更多</a>
        </div>
        <div class="mod-cont">
            <ul class="mod-ori clearfix">    
                <li class="mod-thumb-b"><a target="blank" href="http://app.d.cn/minecraft" title="我的世界专区" class="thumb-b-img"><img src="/style/front/public/zixun2.jpg" alt="我的世界手机版" /></a><a class="thumb-app" href="http://app.d.cn/minecraft">我的世界专区</a><div class="mod-cover"></div><div class="thumb-des-wrap">    <div class="thumb-des"><em></em><a target="blank" href="http://app.d.cn/minecraft" title="我的世界专区" class="thumb-des-txt">毫无规则的游戏，但是却充满乐趣，这款像素风格的游戏绝对是世界上最火爆的的游戏之一。</a>   </div></div>    </li>
                <li class="mod-thumb-h"><a target="blank" href="http://app.d.cn/lushichuanshuo" title="炉石传说手机版专区" class="thumb-img"><img src="/style/front/public/war.jpg" alt="炉石传说手机版" /></a><a class="thumb-app" href="http://app.d.cn/lushichuanshuo">炉石传说手机版专区</a><div class="mod-cover"></div><div class="thumb-des-wrap"><div class="thumb-des"><em></em><a target="blank" href="http://app.d.cn/lushichuanshuo" title="炉石传说手机版专区" class="thumb-des-txt">暴雪推出的一款策略类卡牌游戏，可以选择魔兽中的九大经典英雄人物之一，围绕英雄的职业为主题组建自己独特的套牌。</a></div></div>    </li>
                <li class="mod-thumb-h"><a target="blank" href="http://app.d.cn/buyudaren3" title="捕鱼达人3专区" class="thumb-img"><img src="/style/front/public/war.jpg" alt="捕鱼达人3" /></a><a class="thumb-app" href="http://app.d.cn/buyudaren3">捕鱼达人3专区</a><div class="mod-cover"></div><div class="thumb-des-wrap"><div class="thumb-des"><em></em><a target="blank" href="http://app.d.cn/buyudaren3" title="捕鱼达人3专区" class="thumb-des-txt">由触控出品的《捕鱼达人3》这款超高人气大作，承载着4亿用户的捕鱼梦想，给各位捕鱼用户带来3D深海捕鱼体验。</a></div></div>    </li>
                <li class="mod-thumb-h"><a target="blank" href="http://app.d.cn/mc5" title="现代战争5专区" class="thumb-img"><img src="/style/front/public/war.jpg" alt="现代战争5" /></a><a class="thumb-app" href="http://app.d.cn/mc5">现代战争5专区</a><div class="mod-cover"></div><div class="thumb-des-wrap"><div class="thumb-des"><em></em><a target="blank" href="http://app.d.cn/mc5" title="现代战争5专区" class="thumb-des-txt">年度最火爆的战争大作，剧情模式引人入胜，多人联网模式其乐无穷，FPS游戏最佳体验。</a></div></div>    </li>
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
                <h3><a href="http://android.d.cn/paihangbang" title="单机排行榜" target="_blank" ><em>喜欢</em>排行榜</a></h3>
                
                    <ul class="rank-cont">
                        <?php $list = $c->getList(1,10);?>  
                        <?php foreach($list['list'] as $k => $v){?>
                        <?php if($k < 3){?>
                        <li class="rank-item rank-front">
                            <em class="rank-num">
                                <?php echo $k + 1;?>
                            </em>
                            <a class="rank-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img6.android.d.cn/android/new/game_image/68/4568/icon.png" alt="<?php echo $v['num'];?>"/>
                            </a>
                            <div class="rank-info">
                                <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="rank-tit"><?php echo $v['num'];?></a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-5"></span>
                                </span>
                                </p>
                                <p class="rank-class"><?php echo $v['owner'];?></p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="<?php echo $v['num'];?>" class="rank-down" onclick="Adapt.adaptDown(this,1,4568)"></a>
                                
                                <a href="javascript:;" title="<?php echo $v['num'];?>" class="rank-coll "
                                   onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                            </div>
                        </li>
                        <?php }else{?>
                        <li class="rank-item">
                            <em class="rank-num"><?php echo $k + 1;?></em>
                            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="rank-name"><?php echo $v['num'];?></a>
                        </li>
                        <?php }?>
                        <?php }?>
                    </ul>
            </div>
            <div class="rank-wrap rank-net">
                <h3><a href="http://android.d.cn/paihangbang" title="网游排行榜" target="_blank" ><em>热度</em>排行榜</a></h3>
                
                    <ul class="rank-cont">
                    <?php $list = $c->getList(1,10);?>  
                        <?php foreach($list['list'] as $k => $v){?>
                        <?php if($k < 3){?>
                        <li class="rank-item rank-front">
                            <em class="rank-num"><?php echo $k + 1;?></em>
                            <a class="rank-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img.d.cn/netgame/hdlogo/1724_1434678455918_qP8lXkXt.png" alt="<?php echo $v['num'];?>"/>
                            </a>
                            <div class="rank-info">
                                <a href="<?php echo $v['surl'];?>" title="天龙八部3D" target="_blank" class="rank-tit"><?php echo $v['num'];?></a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-"></span>
                                </span>
                                </p>
                                <p class="rank-class"><?php echo $v['owner'];?></p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="<?php echo $v['num'];?>" class="rank-down" onclick="Adapt.adaptDown(this,5,1724)"></a>
                                
                                <a href="javascript:;" title="<?php echo $v['num'];?>" class="rank-coll "
                                   onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                            </div>
                        </li>
                        <?php }else{?>
                        <li class="rank-item">
                            <em class="rank-num"><?php echo $k + 1;?></em>
                            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="rank-name"><?php echo $v['num'];?></a>
                        </li>
                        <?php }?>
                        <?php } ?>
                    </ul>
            </div>
            <div class="rank-wrap rank-soft">
                <h3><a href="http://android.d.cn/paihangbang" title="软件排行榜" target="_blank"><em>高分</em>排行榜</a></h3>
                
                    <ul class="rank-cont">
                        <?php $list = $c->getList(1,10);?>  
                        <?php foreach($list['list'] as $k => $v){?>
                        <?php if($k < 3){?>
                        <li class="rank-item rank-front">
                            <em class="rank-num"><?php echo $k + 1;?></em>
                            <a class="rank-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img6.android.d.cn/android/new/game_image/74/374/icon.png" alt="当乐游戏中心"/>
                            </a>
                            <div class="rank-info">
                                <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="rank-tit"><?php echo $v['num'];?></a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-5"></span>
                                </span>
                                </p>
                                <p class="rank-class"><?php echo $v['owner'];?></p>
                            </div>
                            <div class="rank-func">
                                
                                  <a href="javascript:;" title="<?php echo $v['num'];?>" class="rank-down" onclick="Adapt.adaptDown(this,2,374)"></a>
                                
                                <a href="javascript:;" title="<?php echo $v['num'];?>" class="rank-coll "
                                   onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                            </div>
                        </li>
                        <?php }else{?>
                        <li class="rank-item">
                            <em class="rank-num"><?php echo $k + 1;?></em>
                            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="rank-name"><?php echo $v['num'];?></a>
                        </li>
                        <?php }?>
                        <?php }?>   
                    </ul>
            </div>
            <div class="rank-wrap rank-coll">
                <h3><a href="http://android.d.cn/paihangbang" title="喜欢排行榜" target="_blank"><em>浏览</em>排行榜</a></h3>
                
                    <ul class="rank-cont">
                        <?php $list = $c->getList(1,10);?>  
                        <?php foreach($list['list'] as $k => $v){?>
                        <?php if($k < 3){?>
                        <li class="rank-item rank-front">
                            <em class="rank-num"><?php echo $k + 1;?></em>
                            <a class="rank-icon" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank">
                                <img src="<?php echo FILEHOST.$v['logo']; ?>" o-src="" alt="<?php echo $v['num'];?>"/>
                            </a>
                            <div class="rank-info">
                                <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="rank-tit"><?php echo $v['num'];?></a>
                                <p class="rank-star clearfix">
                                <span class="star star-grey">
                                    <span class="star star-light stars-5"></span>
                                </span>
                                </p>
                                <p class="rank-class"><?php echo $v['owner'];?></p>
                            </div>
                            <div class="rank-func">
                                
                                    <a href="javascript:;" title="<?php echo $v['num'];?>" class="rank-down" onclick="Adapt.adaptDown(this,1,52070)"></a>
                                  
                                <a href="javascript:;" title="<?php echo $v['num'];?>" class="rank-coll "
                                   onclick="Action.doLike(<?php echo $v['cms_public_id'] ?>,<?php echo $v['model_id'] ?>,this);"></a>
                            </div>
                        </li>
                        <?php }else{?>
                        <li class="rank-item">
                            <em class="rank-num"><?php echo $k + 1;?></em>
                            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="rank-name"><?php echo $v['num'];?></a>
                        </li>
                        <?php }?>
                        <?php }?>
                    </ul>
    
            </div>
        </div>
    </div>
</div>
<!--排行榜 end-->
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
    <p class="adapt-success adapt-success-special"><img src="/style/front/public/bear.jpg" o-src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/bear.jpg" alt="" />登录后才能喜欢哦！</p>
    <a href="" title="立即登录" class="log-now">立即登录</a>
</div>
<!--登录弹出框 e-->
<div class="overlay" id="overlay"></div>
<a id="toTop" title="返回顶部" target="_self" href="javascript:void(0)"><i></i></a>

<div class="ft">
    <div class="qq-t">
        <p class="ft-title">小肉粽微信公众号推广平台交流群：<i class="ft- t- icon"></i></p>
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
        <ul class="friend-link">
            <li><a href="http://www.bufan.com/" target="_blank">手机游戏</a></li>
            <li><a href="http://www.benshouji.com/" target="_blank">笨手机游戏网</a></li>
            <li><a href="http://news.d.cn/" target="_blank">手机游戏攻略</a></li>
            <li><a href="http://xiazai.zol.com.cn/" target="_blank">中关村下载</a></li>
            <li><a href="http://news.4399.com/" target="_blank">4399游戏资讯</a></li>
            <li><a href="http://wy.pipaw.com/" target="_blank">琵琶网安卓游戏</a></li>
            <li><a href="http://pc.duowan.com/" target="_blank">单机游戏下载</a></li>
            <li><a href="http://www.duote.com/" target="_blank">多特软件</a></li>
            <li><a href="http://android.tgbus.com/" target="_blank">android中文网</a></li>
            <li><a href="http://www.bufan.com/" target="_blank">手机游戏</a></li>
            <li><a href="http://www.benshouji.com/" target="_blank">笨手机游戏网</a></li>
            <li><a href="http://news.d.cn/" target="_blank">手机游戏攻略</a></li>
            <li><a href="http://xiazai.zol.com.cn/" target="_blank">中关村下载</a></li>
            <li><a href="http://news.4399.com/" target="_blank">4399游戏资讯</a></li>
            <li><a href="http://wy.pipaw.com/" target="_blank">琵琶网安卓游戏</a></li>
            <li><a href="http://pc.duowan.com/" target="_blank">单机游戏下载</a></li>
            <li><a href="http://www.duote.com/" target="_blank">多特软件</a></li>
            <li><a href="http://android.tgbus.com/" target="_blank">android中文网</a></li>
        </ul>
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
        <?php $c->loadView("front/public/copyright");?>
    </div>
</div>


</body>
</html>
