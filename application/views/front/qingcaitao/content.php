<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <title><?php echo $d["title"]; ?>| <?php echo $c->getItem("site_name"); ?></title>
        <meta name="keywords" content="<?php echo $d["tag"]; ?>" />
        <meta name="description" content="<?php echo $d["desc"]; ?>" />	

        <link rel="stylesheet" href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE ?>/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE ?>/css/common.css" >
        <link rel="stylesheet" href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE ?>/css/styles.css" >
        <style>
            .datetimepicker td, .datetimepicker th {font-size: 12px!important;}
            #marquee ul li{width:300px;}
            .img-slide a{display:none;}
            .green{display:none!important}
            .ldj-2-1 {overflow:initial;	}
            .appointment li {margin-bottom: 5px;line-height: 20px;}
        </style>
    </head>

    <body>
        <?php $c->loadView("front/qingcaitao/inc.nav.php"); ?>

        <div class="banner imgsSlider2">
            <div class="img-slide" style="height: 100%;">
                <a style="display:block;height:100%;background:url(http://image.mogoroom.com//imagefile/room/1/1/691/691_1400064258906.jpg);background-size:100%;background-position:0 50%;" class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com/imagefile/room/1/1/691/691_1400064258906.jpg" title="卧室">
                    <img style='margin-top:-1300px;opacity: 0;visibility: hidden;' src="http://image.mogoroom.com//imagefile/room/1/1/691/691_1400064258906.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block; position: absolute;top: -50%;">
                    <div class="bigicon">查看房间所有大图</div>
                </a>
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com/imagefile/room/1/1/691/691_1400064258522.jpg" title="卧室">
                    <img src="http://image.mogoroom.com//imagefile/room/1/1/691/691_1400064258522.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block; position: absolute;top: -50%;">
                </a>
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com/imagefile/room/1/1/691/691_1400064258842.jpg" title="卧室">
                    <img src="http://image.mogoroom.com//imagefile/room/1/1/691/691_1400064258842.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block; position: absolute;top: -50%;">
                </a>
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com/imagefile/room/1/1/691/691_1400064259243.jpg" title="卧室">
                    <img src="http://image.mogoroom.com//imagefile/room/1/1/691/691_1400064259243.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block; position: absolute;top: -50%;">
                </a>
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com/imagefile/room/1/1/691/691_1400064258833.jpg" title="卧室">
                    <img src="http://image.mogoroom.com//imagefile/room/1/1/691/691_1400064258833.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block; position: absolute;top: -50%;">
                </a>
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com/imagefile/room/9/2/689/689_1400064278720.jpg" title="公共阳台">
                    <img src="http://image.mogoroom.com//imagefile/room/9/2/689/689_1400064278720.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block;"/>
                </a>
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com/imagefile/room/8/1/688/688_1400064298562.jpg" title="公共卫生间">
                    <img src="http://image.mogoroom.com//imagefile/room/8/1/688/688_1400064298562.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block;"/>
                </a>
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com/imagefile/room/6/2/686/686_1400064272494.jpg" title="公共客厅">
                    <img src="http://image.mogoroom.com//imagefile/room/6/2/686/686_1400064272494.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block;"/>
                </a>
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com/imagefile/room/7/0/687/687_1400064287455.jpg" title="公共厨房">
                    <img src="http://image.mogoroom.com//imagefile/room/7/0/687/687_1400064287455.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block;"/>
                </a>
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com//imagefile/community/4/2/224/224_1399603483261.jpg" title="小区图片">
                    <img src="http://image.mogoroom.com/imagefile/community/4/2/224/224_1399603483261.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block;"/>
                </a>

                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com//imagefile/community/4/2/224/224_1399603484648.jpg" title="小区图片">
                    <img src="http://image.mogoroom.com/imagefile/community/4/2/224/224_1399603484648.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block;"/>
                </a>

                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com//imagefile/community/4/2/224/224_1399603485877.jpg" title="小区图片">
                    <img src="http://image.mogoroom.com/imagefile/community/4/2/224/224_1399603485877.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block;"/>
                </a>

                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com//imagefile/community/4/2/224/224_1399603486458.jpg" title="小区图片">
                    <img src="http://image.mogoroom.com/imagefile/community/4/2/224/224_1399603486458.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block;"/>
                </a>
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="http://image.mogoroom.com//imagefile/designereff/4/1/94/94_1432698256697.jpg" title="公寓设计图">
                    <img src="http://image.mogoroom.com/imagefile/designereff/4/1/94/94_1432698256697.jpg" alt="长宁区天山华庭RoomB北卧" style="margin:0 auto; display:block;"/>

                </a>
            </div>

        </div>
        <div class="center">
            <div class="part1">
                <div class="asideLeft">
                    <div class="picDetail p_l_none">
                        <!-- <div class="qr"><img id="qr" src="">手机分享此房</div>11.0㎡-->
                        <h1><?php echo $d["Title"] . "-" . $d["title"]."-".$d["room_direction"]."-".$d["room_area"]."㎡";?> 
                        </h1>
                        <div style='font-size:16px;color:#adbadd;margin:13px 0;display: inline-block;'><?php echo $d["style_desc"];?></div>
                        <div class="juzhu">
                            <?php echo $d["house_style"];?>
                        </div>
                        <h2>
<!--                            <span class="detailRoomId">NO.0400030B</span>-->
                            <div class="address"><?php echo $d["address"];?><a class="showMap" href="#map"></a></div>
                            <div id="ditiexian">
                                <div class="dtx_all"><?php echo $d["address_desc"];?></div>
                            </div>			
                        </h2>
                        <a class="green" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp"><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
                    </div>
                    <div class="picDetail bor_none pad_none">
                        <table class="saleTable">
                            <thead>
                                <tr>
                                    <th>付款方式</th>
                                    <th>
                                        原价
                                    </th>
                                    <th>折扣价</th>
                                    <th id="s3"><a style='color:#1589c9;text-decoration:underline;' href='h'>服务费 </a><i style='background-position-x:-82px;'></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $d["payway"]?></td>
                                    <td class="yj"><?php echo $d["original_price"]?>元/月</td>
                                    <td><span class="price"><?php echo $d["discount_price"]?></span> 元/月<span class="zhekou"><?php echo number_format($d["discount_price"]/$d["original_price"]*100,1)?>折</span></td>

                                    <td class="fwf"><?php echo $d["service_charge"]?>元/月 </td>
                               </tr>
                                <!-- <tr>
                                    <td>蘑菇宝 <i id="s2"></i><br><span class="mian">（免2个月服务费）</span></td>
                                    <td class="yj">


                                        2860

                                        元/月
                                    </td>

                                    <td><span class="price">2720</span> 元/月<span class="zhekou">9.5折</span></td>

                                    <td class="fwf">


                                        136

                                        元/月
                                    </td>
                                </tr>-->
                            </tbody>

                        </table>
                        <div class="s4" style='top:-10px;left:55px;'>【蘑菇宝】，蘑菇公寓与各大银行及金融公司联合推出的租房产品。从此，“房租月付”、“先住后付”变为现实， 0利息0手续费毫无负担，更有2个月服务费全免优惠！使用蘑菇宝，绝佳体验这里开始！</div>
                        <div class="s1" style='color:#ff6500;border-color:#ff6500;background:url(http://www.mogoroom.com:80/pages/imgs/pic121.png) no-repeat;'>
                            服务费的金额为月租金的5%，具体包括：高速wifi、网络电视、公共区域深度保洁（每月两次）、设施设备上门维修、安全质检、平安家庭财产保险、400及在线客服热线支持、小区物业管理费等各项贴心的售后服务，让您居住无忧！</div>
                    </div> 

                    <div class="picDetail d1">
                        <span class="pztitle">房间配置：</span>
                        <ul class="peizhi">
                            <?php if(!empty($d["room_num"])){?>
                            <li class="pz1"><i></i><?php echo $d["room_area"];?>㎡</li>
                            <?php }?>
                            <?php if(!empty($d["room_num"])){?>
                            <li class="pz2"><i></i><?php echo $d["room_num"];?></li>
                            <?php }?>
                            <?php if(!empty($d["floor"])){?>
                            <li class="pz3"><i></i><?php echo $d["floor"];?>层</li>
                            <?php }?>
                            <?php if($d["isElevator"] == "1"){?>
                            <li class="pz4"><i></i>电梯房</li>
                            <?php }?>
                            <?php if($d["isSubway"] == "1"){?>
                            <li class="pz5"><i></i>地铁沿线</li>
                            <?php }?>
<!--                            <li class="pz6"><i></i>2位房客</li>-->
                        </ul>
                        <div class="des">
                           <?php echo $d["body"];?>
                        </div>
                    </div>
                    <!-- <div class="picDetail bor_none">
                    <ul class="onsale">
                            <li data="1">付一押一</li>
                            <li data="2">付三押一</li>
                            <li data="3">付六押一</li>
                            <li data="4">付十二押一</li>
                            <li data="5" id="s2">申办蘑菇宝支付 <i></i></li>
                       </ul>
                    <div class="s1" >【蘑菇宝】是蘑菇公寓与各大银行及金融公司联合推出的租房产品，由蘑菇公寓来承担利息与分期等相关手续费，房租按月支付。</div>
                    </div> -->
                </div>

                <input type="hidden" id="roomPrice8" value="2860">
                <input type="hidden" id="plat" value="0">
                <input type="hidden" id="empEmail" value="cxf@mogoroom.com"/>
                <input type="hidden" id="phone" value=""/>
                <input type="hidden" id="empName" value="曹旭峰"/>
                <input type="hidden" id="empId" value="766"/>
                <input type="hidden" id="roomNo" value="No.0400030B">
                <input type="hidden" id="district" value="长宁区">
                <input type="hidden" id="communityName" value="天山华庭">
                <input type="hidden" id="nong" value="458">
                <input type="hidden" id="roomnum" value="101">
                <input type="hidden" id="buildNum" value="15">
                <input type="hidden" id="roomName" value="B">
                <input type="hidden" id="face" value="北">
                <input type="hidden" id="area" value="11.0">
                <input type="hidden" id="roomprice" value="2720">
                <input type="hidden" id="styleName" value="绿色乡村">
                <input type="hidden" id="street" value="威宁路">
                <input type="hidden" id="id" value="691">
                <input type="hidden" id="roomSpecialty" value="地铁沿线,飘窗">
                <input type="hidden" id="arearoom" value="长宁分中心">
                <input type="hidden" id="flatsId" value="242">

<!--                <div class="asideRight">
                    <h1><i></i>400-800-4949<font class="zhuan">转</font>9017
                    </h1>
                    <div class="Right_b" style="z-index:3;">
                     	<img src="http://www.mogoroom.com:80/pages/imgs/boy.jpg" alt=""> 

                        <img src="http://image.mogoroom.com/imagefile/selfImage/0/0/0/0_1433413055695.jpg" alt="蘑菇公寓-曹旭峰">


                        <div class="xinxi">
                            <span>贴心管家</span>
                            <h2>曹旭峰</h2>
                            <div class="stars"></div>
                            <p>房源数量：7
                                套
                                <br>
                                 						   服务客户：100位 
                            </p>
                                                 <a href="#">其他房源</a> 
                        </div>
                        <div class="clear"></div>
                        <a class="yuyue" id="showApps"><i></i>立即在线预约</a>
                    </div>
                </div>-->
            </div>
        </div>

        <div style="width:1200px;"></div>

        <div class="center">
            <div class="part2">
                <h1><i></i>房间情况</h1>
                <table class="roomTable" >
                    <thead>
                        <tr>
                            <th>房间</th>
                            <th>面积</th>
                            <th>朝向</th>
                            <th>风格</th>
                            <th>状态</th>
                            <th width="110px"></th>
                        </tr>
                    </thead>
                    <?php $list = $c->getSonList($d["last_cate_id"]);?>
                    <?php foreach($list["list"] as $k => $v){?>
                    <tr>
                        <td><?php echo $v["title"];?><br /> <?php echo $d["cms_house_id"] == $v["cms_house_id"] ? '<span class="haiqiang">(当前房源)</span' : "";?> </td>
                        <td><?php echo $v["area"];?>㎡</td>
                        <td><?php echo $v["area"];?></td>
                        <td><?php echo $v["area"];?></td>
                        <td><div class="Rented">
                                已租
                            </div>
                        </td>
                        <td>
                            <?php if($d["cms_house_id"] == $v["cms_house_id"] ){?> 
                            <a href="<?php echo $v["surl"];?>" class="go"></a>
                            <?php }?>&nbsp;
                        </td>
                    </tr>
                    <?php }?>
                    <!--
                    <tr>
                        <td>

                            RoomB<br /> <span class="haiqiang">(当前房源)</span></td>
                        <td>11.0㎡</td>
                        <td>北</td>
                        <td>绿色乡村</td>
                        <td>

                            <div class="Renting">
                                2720元/月
                            </div>


                        </td>
                        <td>
                            <span   

                                >
                            </span>



                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                            <a href="http://www.mogoroom.com:80/room/691.shtml" class="go"></a>

                        </td>
                    </tr>-->
                </table>
            </div>
        </div>

<!--        <div class="center p-b-4">
            <div class="part2">
                <h1 id="map" style="position:relative;"><i></i>小区地图</h1>
                <div class="picDetail map-l">
                    <ul class="jiejingbutton">
                        <li class="mapOn">地图</li>
                        <li>街景</li>
                        <li id="openFullScreen">全屏</li>
                    </ul>
                    地图 S
                    <div id="ditu0">
                        <div class="fullSc"><i></i><span></span>退出全屏</div>
                        <div class="map-detail pr ovh"></div>
                        <div class="map_boxConC" id="mapSearch">
                            <span class="tool-btn v">线路查询</span>
                        </div>
                        <div class="map ditu1" id="mapDiv" style="width:550px;"></div>
                        <div id="panorama" class="ditu1"></div>
                    </div>
                </div>

                楼盘交通信息开始
                <div class="asideRight bor_none">
                    <ul class="jiejingbutton">
                        <li>周边设施</li>
                    </ul>
                    <ul class="toolsIcon">
                        <li class="dt"><a id="subway"  href="javascript:void(0)" ><span></span>地铁站</a></li>
                        <li class="cy"><a id="eat" href="javascript:void(0)" ><span></span>餐饮</a></li>
                        <li class="cs"><a id="supermarket" href="javascript:void(0)" ><span></span>超市</a></li>
                        <li class="yy"><a id="movie" href="javascript:void(0)" ><span></span>银行</a></li>
                        <li class="yh"><a id="bank" href="javascript:void(0)" ><span></span>影院</a></li>
                    </ul>
                    <ul class="toolsIcon">        
                        <li class="jd"><a id="hotel" href="javascript:void(0)" ><span></span>酒店</a></li>
                        <li class="xx"><a id="school" href="javascript:void(0)" ><span></span>学校</a></li>
                        <li class="yiy"><a id="hospital" href="javascript:void(0)" ><span></span>医院</a></li>
                        <li class="jind"><a id="scenic" href="javascript:void(0)" ><span></span>景点</a></li>
                        <li class="jyz"><a id="fillsta" href="javascript:void(0)" ><span></span>加油站</a></li>
                    </ul>


                    <li class="roadsearch">线路查询</li>



                    <input id="gongjiaoline_text" type="text" class="searchInput"  placeholder="到这里去">
                    <a id="busline_querybutton" class="searchBtn fl">线路查询</a>      
                    <div id="dvPolicy" class="bus-way-style" >

                        <label style="font-size: 12px;margin-left:3px;"><input type="radio" checked value="0" name="lineType"> 较快捷</label>　
                        <label style="font-size: 12px;"><input type="radio"  value="1" name="lineType"> 少换乘</label>
                        <font style="color:#999; vertical-align: middle;">　打车费用:（按最短路程计费）</font>

                        <div id="reasultbox" class="reasultbox" style="display:none;"></div>

                        <div class="traffic" style="margin:1px 0 30px;">
                            <div class="traffic-des pl30 pr30 pt10 pb20">
                                <div class="bus-way gongjiaoline clearfix" style="margin-left:130px;">
                                    <span id="this_houseposition" class="fl pt5" style="font-weight:boild;">从这里到</span>
                                    <input id="gongjiaoline_text" type="text" class="fl searchInput">
                                    <a id="busline_querybutton" class="searchBtn fl">查询路线</a>
                                    <div class="taxi clearfix fl ml20" style="margin-top:2px;">
                                        <span class="f12 fb" style="color:#999;">打车费用：</span>
                                        <span id="bytaxi_price" class="orange fb"></span>
                                        <span class="text" style="color:#999;">(按最短路程计费)</span>
                                    </div>
                                </div>
                                <div id="gjTips" class="BusTips pt10" style="display:none;color:#f00;">
                                    <div>请您输入有效的精确地址描述</div>
                                    <a href="javascript:;" class="btClose close"></a>
                                </div>
                                    
                               
                                <div id="dvPolicy" class="bus-way-style clearfix mt10" style="display:none;">
                                            
                                    <span id="policy0" class="selected">较快捷</span>
                                           
                                    <span id="policy1">不坐地铁</span>
                                       
                                    <span id="policy2">少换乘</span>
                                   
                                    <span id="policy3">少步行</span>
                                        
                                </div>
                                <div id="results" class="subway-result">
                                </div>
                                
                                   
                                <input name="ctl00$main$hidlng" type="hidden" id="ctl00_main_hidlng" value="116.413414" />
                                <input name="ctl00$main$hidlat" type="hidden" id="ctl00_main_hidlat" value="39.909466" />
                            </div>
                        </div>   
                    </div>
                    楼盘交通信息结束


                    地图  E
                </div>
            </div>
        </div>-->
        <div class="part2 full">
            <h1 style="padding-left:70px;"><i></i>猜你喜欢</h1>
            <div id="marquee" style="margin: 0px auto; width:1200px;">
                <ul>
                    <?php $r = $c->getArea(3);?>
                    <?php foreach($r["list"] as $k => $v){?>
                    <li>
                        <div class="tuijian">
                            <a target="_blank" href="http://www.mogoroom.com:80/room/1342.shtml"> 
                                <img src="http://image.mogoroom.com/imagefile/room/2/1/1342/1342_1407404148981.jpg!middle" alt="长宁区上海花城RoomD南卧">
                                <div>长宁区上海花城RoomD<br>
                                    <span>20.0㎡ | 8/11层 | 南卧<br>
                                        <b>3330</b> 元/月</span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="control con-1"><a href="javascript:void(0);" id="goL"></a> <a href="javascript:void(0);" id="goR"></a></div>
        </div>

        <div class="center">
            <div class="part2">
                <h1><i></i><?php $cate = $c->categore(3);echo $cate["cname"];?></h1>
                <ul class="party ldj-2">
                    <?php $l = $c->list(3,3);?>
                    <?php foreach($l["list"] as $k => $v){ ?>
                    <li  class="<?php echo $k == 1 ? "ldj-2-m" : "";?>">

                        <a href="<?php echo $v["surl"];?>"><img src="<?php echo $v["img_url"];?>" alt="" style="width:278px;height:185px;">
                            <div class="ldj-2-1"><?php echo $v["title"];?>
                                   <!-- <div class="ribbon"><span>进行中</span></div> -->
                            </div>
                        </a>
                    </li>
                    <?php }?>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    <?php $c->loadView("front/qingcaitao/inc.footer.php"); ?>
    </body>
</html>
