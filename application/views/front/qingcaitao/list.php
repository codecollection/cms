<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="renderer" content="webkit">
        <meta name="HandheldFriendly" content="true">
        <title>地图找房－蘑菇公寓</title>
        <meta name="keywords" content="上海1500-2000元白领单身公寓，蘑菇公寓">
        <meta name="description" content="上海蘑菇公寓，为你提供1500-2000元白领单身合租公寓出租信息。">
        <link rel="stylesheet" href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE ?>/css/styles.css">
        <link rel="stylesheet" href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE ?>/css/common.css" >
        <link rel="stylesheet" href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE ?>/css/list.css" >
    </head>
    <body class="">
        <?php $c->loadView("front/qingcaitao/inc.nav.php");?>
        <div class="filter " style="width:1200px;margin: 0 auto">
            <ul class="filterFx">
                <li>
                    <b>区&nbsp;域：</b>
                    <div class="f f_down" id="a">
                        <a href="#">不限</a>
                        <?php $tag = $c->getTag(1);?>
                        <?php foreach($tag as $k => $v){?>
                        <a href="#" id="<?php echo $v["tag_id"]?>" class="select_id"><?php echo $v["tag"];?></a>
                        <?php }?>
                       <!-- <i class="a_down"></i>-->
                    </div>
                </li>
                <li><b>地&nbsp;铁：</b>
                    <div class="f f_down" id="b">
                        <a href="#">不限</a>
                        <?php $tag = $c->getTag(2);?>
                        <?php foreach($tag as $k => $v){?>
                        <a href="#" id="<?php echo $v["tag_id"]?>" class="select_id"><?php echo $v["tag"];?></a>
                        <?php }?>
                       <!-- <i class="a_down b-show"></i>-->
                    </div>
                </li>
                <li><b>租&nbsp;金：</b> <div class="f f_down" id="c">
                        <a href="#">不限</a><?php $tag = $c->getTag(3);?>
                        <?php foreach($tag as $k => $v){?>
                        <a href="#" id="<?php echo $v["tag_id"]?>" class="select_id"><?php echo $v["tag"];?></a>
                        <?php }?>
                    </div>
                </li>
                <li><b>方&nbsp;式：</b> <div class="f f_down" id="j">
                        <a href="#">不限</a>
                        <?php $tag = $c->getTag(4);?>
                        <?php foreach($tag as $k => $v){?>
                        <a href="#" id="<?php echo $v["tag_id"]?>" class="select_id"><?php echo $v["tag"];?></a>
                        <?php }?>
                    </div>
                </li>
                <li class="tese1" id="e"><b>特&nbsp;色：</b>
                    <a href="#">不限</a>
                    <?php $tag = $c->getTag(5);?>
                        <?php foreach($tag as $k => $v){?>
                        <a href="#" id="<?php echo $v["tag_id"]?>" class="select_id"><?php echo $v["tag"];?></a>
                        <?php }?>
<!--                    <select id="d" style="font-size:12px;">
                        <option selected="selected" value="0">风格</option>
                        <option value="1">蓝色波普</option>
                        <option value="2">绿色乡村</option>
                        <option value="3">棕色爵士</option>
                        <option value="4">金色维也纳</option>
                    </select>-->
                </li>
            </ul>
            <div id="param">筛选条件：<i>全部清除</i>
            </div>
        </div>
        <div class="content1" style="width:1200px;margin:0 auto">
            <div class="sort2"><div class="condition"><a class="sort2on" href="#">按价格<b>↓</b><span>↑</span></a><a href="#">按面积<b>↓</b><span>↑</span></a>
                    <!-- <div class="sort_r">视野内符合条件<font color="#ff6500">25</font>套</div> -->
                </div></div>
            <div id="viewList" style="width:1200px;margin:0 auto">

                <ul id="listItem" class="listItem">
                    <?php $list = $c->getList2($cid);?>
                    <?php foreach($list["list"] as $k => $v){?>
                    <li class="">
                        <div class="listPic">
                            <a target="_blank" href="/info/d2?id=<?php echo $v['cms_house_id'];?>">

                                <img class="flatImg" src="<?php echo $v['Img'];?>" alt="<?php echo $v["Title"]?>">
                            </a>
                        </div>
                        <div class="listElse">
                            <span class="price"><?php echo $v["discount_price"];?></span>元/月
                        </div>
                        <div class="listDescribe">
                            <h1>
                                <a target="_blank" href="/info/d2?id=<?php echo $v['cms_house_id'];?>"><?php echo $v["Title"] . "-". $v["title"] . "-".$v["room_direction"]."-".$v["room_area"]."㎡";?>
                                </a><br>
                                <span><?php echo $v["desc"];?></span>
                            </h1>

                            <div class="room-spec"><?php echo $v["floor"] ?>层&nbsp; | <?php echo $v["room_area"]?>㎡ | <?php echo $v["room_direction"]?>
                            </div>
                            <div>
                                <?php echo $v["desc"]?>
                            </div>
                            <div class="feature">
                                <?php $tags = explode(",", $v["tag"]);?>
                                <?php foreach ($tags as $k=> $v){?>
                                <?php echo !empty($v) ? '<span>'.$v.'</span>' : "";?>
                                <?php } ?>
                            </div>
                        </div>
                        <a class="green-1" target="_blank" href="">aaa<img src="<?php //echo $v["url"]?>"></a>
                    </li>
                    <?php }?>
                </ul>
                <style> .pagenation1 a {width: 60px;}</style>
                <div class="pagenation1">
                    <?php echo $list["pagecode"];?>
                </div>

            </div>
        </div>
        <div class="warpB"></div>
    </div>
<?php $c->loadView("front/qingcaitao/inc.footer.php"); ?>
</body>
</html>
