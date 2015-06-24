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
                        <a href="#" id="a1" class="select_id">浦东新区</a>
                        <a href="#" id="a2" class="select_id">长宁区</a>
                        <a href="#" id="a3" class="select_id">普陀区</a>
                        <a href="#" id="a4" class="select_id">虹口区</a>
                        <a href="#" id="a5" class="select_id">杨浦区</a>
                        <a href="#" id="a6" class="select_id">黄浦区</a>
                        <a href="#" id="a7" class="select_id">静安区</a>
                        <a href="#" id="a8" class="select_id">闸北区</a>
                        <a href="#" id="a9" class="select_id">徐汇区</a>
                        <a href="#" id="a10" class="select_id">闵行区</a>
                        <a href="#" id="a11" class="select_id">宝山区</a>
                        <a href="#" id="a12" class="select_id">嘉定区</a>
                        <i class="a_down"></i>
                    </div>
                </li>
                <li><b>地&nbsp;铁：</b>
                    <div class="f f_down" id="b">
                        <a class="" href="#">不限</a>
                        <a href="#" id="b0">1号线</a>
                        <a href="#" id="b1">2号线</a>
                        <a href="#" id="b2">3号线</a>
                        <a href="#" id="b3">4号线</a>
                        <a href="#" id="b4">5号线</a>
                        <a href="#" id="b5">6号线</a>
                        <a href="#" id="b6">7号线</a>
                        <a href="#" id="b7">8号线</a>
                        <a href="#" id="b8">9号线</a>
                        <a href="#" id="b9">10号线</a>
                        <a href="#" id="b10">11号线</a>
                        <a href="#" id="b11">12号线</a>
                        <a href="#" id="b12">13号线</a>
                        <a href="#" id="b13">16号线</a>
                        <i class="a_down b-show"></i>
                    </div>
                </li>
                <li><b>租&nbsp;金：</b> <div class="f f_down" id="c">
                        <a href="#">不限</a>
                        <a class="" href="#">1500-2000元</a>
                        <a href="#">2000-2500元</a>
                        <a href="#">2500-3000元</a>
                        <a href="#">3000-3500元</a>
                        <a href="#">3500-4000元</a>
                        <a href="#">4000元以上</a>
                        <i class="a_down c-show"></i>
                        <!-- <input class="price-tag" value="￥" readonly="readonly" type="text"><input class="search-byprice input-floor" autocomplete="off" type="text">-
                        <input class="price-tag" value="￥" readonly="readonly" type="text"><input class="search-byprice" autocomplete="off" type="text">
                        <input class="search-price" value="确定"  type="button"> -->
                    </div>
                </li>
                <li><b>方&nbsp;式：</b> <div class="f f_down" id="j">
                        <a href="#">不限</a>
                        <a class="" href="#">单身公寓</a>
                        <a href="#">整租</a>
                        <a href="#">合租</a>
                    </div>
                </li>
                <li class="tese1" id="e"><b>特&nbsp;色：</b>
                    <a style="float:left;cursor:pointer;margin-top:2px;" >不限</a>
                    <span ><label><input value="阳台" type="checkbox">&nbsp;阳台</label></span>
                    <span><label><input value="飘窗" type="checkbox">&nbsp;飘窗</label></span>
                    <span><label><input value="独卫" type="checkbox">&nbsp;独卫</label></span>
                    &nbsp;
                    <!-- <select id="ts"  style="font-size:12px;">
                        <option selected="selected" value="0">厅室</option>
                        <option value="1">一室</option>
                        <option value="2">二室</option>
                        <option value="3">三室</option>
                        <option value="4">四室</option>
                        <option value="5">五室及以上</option>
                    </select>
                    <select id="pz"  style="font-size:12px;">
                        <option selected="selected" value="0">配置</option>
                        <option value="1">独卫</option>
                        <option value="2">飘窗</option>
                        <option value="3">阳台</option>
                    </select> -->
                    <select id="f"  style="font-size:12px;">
                        <option selected="selected" value="0">朝向</option>
                        <option value="1">东</option>
                        <option value="2">南</option>
                        <option value="3">西</option>
                        <option value="4">北</option>
                        <option value="5">东南</option>
                        <option value="6">东北</option>
                        <option value="7">西南</option>
                        <option value="8">西北</option>
                    </select>
                    <select id="d" style="font-size:12px;">
                        <option selected="selected" value="0">风格</option>
                        <option value="1">蓝色波普</option>
                        <option value="2">绿色乡村</option>
                        <option value="3">棕色爵士</option>
                        <option value="4">金色维也纳</option>
                    </select>
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
                            <a target="_blank" id="<?php //echo $v['surl'];?>">

                                <img class="flatImg" src="http://image.mogoroom.com/imagefile/room/4/0/864/864_1402457181268.jpg!small" alt="长宁区天山华庭RoomB北卧">
                            </a>
                        </div>
                        <div class="listElse">
                            <span class="price">2720</span>元/月
                        </div>
                        <div class="listDescribe">
                            <h1>
                                <a target="_blank">长宁区-天山华庭

                                    RoomB-朝北-11.0㎡ 


                                </a><br>
                                <span>都市森林的优雅转身</span>
                            </h1>

                            <div class="room-spec">1/18层&nbsp; | 11.0㎡ | 北卧 | 
                                绿色乡村

                            </div>
                            <div>

                                距2号线威宁路站314米，步行约4分钟

                            </div>
                            <div class="feature">
                                <span>单身公寓</span>



                                <span>地铁沿线</span>

                                <span>飘窗</span>

                            </div>

                        </div>

                        <a class="green-1" target="_blank" href=""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>

                    </li>
                    <?php }?>
                </ul>

                <div class="pagenation1">
                    <span style="width:60px;margin-right:10px;">上一页</span>
                    <span class="pageOn">1</span>
                    <a href="2">2</a>
                    <a href="3">3</a>
                    <a href="4">4</a>
                    <a href="5">5</a>
                    <a href="6">6</a>
                    <a href="7">7</a>
                    <a href="8">8</a>
                    <span>...</span> <a href=2 style="width:60px;" id="nextPage" >下一页</a>
                </div>

            </div>
        </div>
        <div class="warpB"></div>
    </div>
<?php $c->loadView("front/qingcaitao/inc.footer.php"); ?>
</body>
</html>
