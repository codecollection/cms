<?php $cate = $c->getCate($cid); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="<?php echo $cate['ckey']?>"/>
        <meta name="description" content="<?php echo $cate['cdesc']?>"/>
        <title>
            <?php echo $cate['cname']?>_第<?php echo $p;?>页_<?php echo $c->getItem('site_name');?>
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
                        <?php $area = $c->getArea(24);?>
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
