<!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="<?php echo $cate['ckey']?>"/>
        <meta name="description" content="<?php echo $cate['cname']?>"/>
        <title><?php echo $cate['cname']?>_第<?php echo $p;?>页_<?php echo $c->getItem('site_name');?></title>
        
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
                <div class="list-title clearfix" style="padding-left:0">
                    <h2 class="con" title="<?php echo $cate['cname'] ?>"><span class="title-bg iconSprite"></span><?php echo $cate['cname'] ?></h2>

                </div>
                <div class="tab-1 clearfix">
                    <ul>
                        <li class="<?php echo $cid == 2 ? "current" : ""; ?>"><span></span><h2><a href="/info/l?cid=2" title="全部资讯">全部资讯</a></h2></li>
                        <?php $cate = $c->getCate(2); ?>
                        <?php foreach ($cate['son'] as $k => $t) {
                            ?>
                            <li class="<?php echo $t["cate_id"] == $cid ? "current" : ""; ?>"><span></span><h2><a href="<?php echo $t['surl'] ?>" title="<?php echo $t['cname'] ?>"><?php echo $t['cname'] ?></a></h2></li>
                        <?php } ?>
                    </ul>
                </div>
                <ul class="info-list clearfix">
                    <?php $list = $c->getList($cid, 18); ?>
                    <?php foreach ($list['list'] as $k => $v) { ?>
                        <li class="first">
                            <div class="border-in">
                                <?php $cate = $c->getCate($v['last_cate_id']); ?>
                                <div class="info-title">
                                    <a title="<?php echo $cate['cname']; ?>" href="<?php echo $cate['surl']; ?>" class="type"><?php echo $cate['cname']; ?></a>
                                    <span class="mk-date"><?php echo RKit::formatTime($v['cdate']);?>发表</span>
                                </div>
                                <a href="<?php echo $v['surl']; ?>" title="<?php echo $v['title']; ?>" target="_blank" class="info-thumb">
                                    <img class="game-img" src="<?php echo $v['img_url']; ?>" alt="<?php echo $v['title']; ?>"/>
                                </a>
                                <p class="desc">
                                    <i></i>
                                    <a href="<?php echo $v['surl']; ?>" title="<?php echo $v['title']; ?>" target="_blank"><?php echo $v['title']; ?></a>
                                </p>
                                <div class="author clearfix">
                                    <a href="<?php echo $v['surl']; ?>" target="_blank" title="当乐小编奶霸" class="h-img-out">
                                        <img src="http://raw.android.d.cn/cdroid_res/web/news2015061516/img/icon-2.png" alt="<?php echo $v['title']; ?>" />
                                    </a>
                                    <img class="head-img" src="http://img.news.d.cn//Upload//Editor/20150605095705.jpg" alt=""/>
                                    <a class="name" target="_blank" href="http://news.d.cn/editor/dview-28523958.html"><?php echo $v['uname']?></a>
                                    <div class="au-r">
                                        <span class="au-icon iconSprite"></span>
                                        <span><span class="green"><?php echo $v['comments']?></span>人评论</span>
                                    </div>
                                </div>
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
                        <h2 class="con" title="值得一扫推荐"><span class="title-bg iconSprite"></span>值得一扫推荐</h2>
                        
                    </div>
                    <ul class="authors">
                        <?php $area = $c->getArea(12);?>
                        <?php foreach($area['list'] as $k => $v){?>
                        <li>
                            <div class="au-info"><a class="a-h-out" target="_blank" href="<?php echo $v['surl'];?>"></a> <img alt="" src="<?php echo FILEHOST.$v['logo']; ?>" class="a-h-img"><div class="detail"><p class="au-name"><a target="_blank" href="<?php echo $v['surl'];?>"><?php echo $v['num'];?></a></p><p class="au-desc"><?php echo $v['desc'];?></p></div>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
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
