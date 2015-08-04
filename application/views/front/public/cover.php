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
        <div class="ban-main" id="silder">
            <script type="text/javascript" src="/style/libs/nbspslider/jquery.nbspslider.1.1.js"></script>
            <link href="/style/libs/nbspslider/css/css.css" rel="stylesheet" type="text/css"/>
            <script>
                $(function(){
                    
                    $("#silder").nbspSlider({widths:'860px',heights:'360px',altAlign:"left",numBtnShow:0,speeds:500,delays:4000,preNexBtnShow:1,altShow:1,altOpa:0.25,altBgColor:"#000",altHeight:"45px"});
                   
                });
            </script>
            <ul class="ban_clearfix" id="silder_ad"><!-- <span class="ban-cover"></span>    <span class="ban-cover-txt">一周评论大事件第十五期</span>  -->
                <?php $ads = $c->getAd(102);?>
                <?php foreach($ads as $ad){?>
                <li>    <a target="_blank" href="<?php echo $ad["ad_url"]?>" title="<?php echo $ad["ad_title"]?>">                       <img src="<?php echo $ad["ad_img"]?>"  alt="<?php echo $ad["ad_title"]?>" />   </a> 
                </li>
                <?php }?>
            </ul>
<!--            <span  title="" class="ban-next ban-btn" id="next"><i></i></span>
            <span  title="" class="ban-prev ban-btn" id="prev"><i></i></span>-->
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
                    <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>"  alt="<?php echo $v['num'];?>">
                </a>
                <div class="mod-first-des clearfix">
                    <a class="mod-first-tit" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>
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
                        <img src="<?php echo $v['img_url'];?>" o-src="" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank"><?php echo $v['num'];?></a>
                    <div class="mod-cover"></div>
                    <div class="thumb-des-b">
                        <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                            <i></i>
                            <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
                        </a>
                        <div class="thumb-tips">
                            <p class="tips">
                                <span class="number">
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
                                <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="number">
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
                                <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
                            </a>
                            <div class="mode-app-des">
                                <p class="number">
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
                        <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>" />        
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
    <h2 class="cap-game"><a href="" title="安卓最新游戏" target="_blank">最新公众号</a></h2>
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
            <img src="<?php echo $v['img_url'];?>" o-src="" alt="<?php echo $v['num'];?>"/>
        </a>
        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                <i></i>
                <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
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
                        <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="number">
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
            <img src="<?php echo $v['img_url']?>" class="lazy-img" alt="<?php echo $v['num'];?>"/>
        </a>
        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                <i></i>
                <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>"  alt="<?php echo $v['num'];?>"/>
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
                        <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="number">
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
                <img  class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>"alt="<?php echo $v['num'];?>"/>
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
                        <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="number">
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
                            <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>">
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
                                    <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>">
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
            <script type="text/javascript" src="/style/libs/jquery.scroll.js"></script>
            <script>
                $(function(){
                    
                   $('#tag_slider').kxbdSuperMarquee({distance:160,time:6,direction:'left',btnGo:{left:'#scrollNext',right:'#scrollPrev'}});
                });
            </script>
            <div class="scroll-cont" id="tag_slider">
                <ul class="scroll-list" id="">
                        <?php $tags = $c->getTag(null,20);?>
                        <?php foreach($tags as $k => $tv){?>
                        <li class="scroll-item">
                            <a href="/info/l?tag=<?php echo $tv["tag"];?>" title="<?php echo $tv["tag"];?>" target="_blank"
                               class="scroll-icon">
                                <img src="<?php echo $tv["tag_img"];?>" o-src="" alt="<?php echo $tv["tag"];?>"/>
                                <span class="scroll-name"><?php echo $tv["tag"];?></span>
                                <span class="scroll-cover"></span>
                            </a>
                        </li>
                        <?php }?>
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
            <img src="<?php echo $v['img_url'];?>" o-src="" alt="<?php echo $v['num'];?>"/>
        </a>
        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                <i></i>
                <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
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
                        <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="number">
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
            <img src="<?php echo $v['img_url'];?>" o-src="" alt="<?php echo $v['num'];?>"/>
        </a>
        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                <i></i>
                <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
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
                        <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="number">
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
            <img src="<?php echo $v['img_url'];?>" o-src="" alt="<?php echo $v['num'];?>"/>
        </a>
        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>"><?php echo $v['num'];?></a>
        <div class="mod-cover"></div>
        <div class="thumb-des-b">
            <a href="<?php echo $v['surl'];?>" title="<?php echo $v['num'];?>" target="_blank" class="thumb-app-icon">
                <i></i>
                <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
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
                        <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
                    </a>
                    <div class="mode-app-des">
                        <p class="number">
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
        <?php $areaIds = array("8","9","10","11");?>
        
        <?php foreach($areaIds as $areaId){?>
        <div class="mod-cont <?php echo $areaId == 8 ? "" : "hide";?>">
            <ul class="mod-info clearfix">
                    <?php $area = $c->getArea($areaId);?>
                    <?php foreach($area['list'] as $k => $v){?>
                     <?php if ($k == 0){?>
                    <li class="mod-thumb-b">
                        <a href="<?php echo $v['surl'];?>" title="<?php echo $v['title'];?>" target="_blank" class="thumb-b-img">
                            <img src="<?php echo FILEHOST.$v['img_url']; ?>"  alt="<?php echo $v['title'];?>"/>
                        </a>
                        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="《<?php echo $v['title'];?>" target="_blank"><?php echo $v['title'];?></a>
                        <div class="mod-cover"></div>
                        <div class="thumb-des-wrap">
                            <div class="thumb-des">
                                <em></em>
                                <a href="<?php echo $v['surl'];?>" title="<?php echo $v['title'];?>" target="_blank" class="thumb-des-txt"><?php echo $v['desc'];?>...</a>
                                
                            </div>
                        </div>
                    </li>
                    <?php }else{?>
                    <li class="mod-thumb">
                        <a href="<?php echo $v['surl'];?>" title="<?php echo $v['title'];?>" target="_blank" class="thumb-img">
                            <img src="<?php echo FILEHOST.$v['img_url']; ?>" alt="<?php echo $v['title'];?>"/>
                        </a>
                        <a class="thumb-app" href="<?php echo $v['surl'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo $v['title'];?></a>
                        <div class="mod-cover"></div>
                        <div class="thumb-des-wrap">
                            <div class="thumb-des">
                                <em></em>
                                <a href="<?php echo $v['surl'];?>" title="<?php echo $v['title'];?>" target="_blank" class="thumb-des-txt">﻿<?php echo $v['desc'];?>，...</a>

                            </div>
                        </div>
                    </li>
                   <?php }?>
                   <?php }?>
                     
            </ul>
        </div>
        <?php }?>
    </div>
</div>
<!--安卓资讯 end-->
<!--安卓大作专区 begin-->
<!--<div class="layout">
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
</div>-->
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
                                <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
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
                                <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" alt="<?php echo $v['num'];?>"/>
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
                                <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" o-src="http://img6.android.d.cn/android/new/game_image/74/374/icon.png" alt="当乐游戏中心"/>
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
                                <img class="lazy-img" src="<?php echo FILEHOST.$v['logo']; ?>" o-src="" alt="<?php echo $v['num'];?>"/>
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
<?php $c->loadView("front/public/login.nav.php");?>

<div class="ft">
    <div class="qq-t">
        <p class="ft-title">小肉粽微信公众号推广平台交流群：<i class="ft- t- icon"></i></p>
        <ul class="clearfix">
            <?php $ads = $c->getAd(100);?>
            <?php foreach($ads as $ak => $av){?>
            <li><?php echo $av['ad_title'];?></li>
            <?php }?>
        </ul>
    </div>
    <div class="f-lnks">
        <ul class="friend-link">
            <?php $flinks = $c->getFlink();?>
            <?php foreach($flinks as $fk => $fv){?>
            <li><a href="<?php echo $fv["flink_url"]?>" target="_blank"><?php echo $fv["flink_name"]?></a></li>
            <?php }?>
        </ul>
    </div>
    <?php $c->loadView("front/public/footer.php");?>
</div>


</body>
</html>
