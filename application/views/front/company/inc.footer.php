        <div class="footer">
            <div class="wrap service clearfix">
                <div class="clearfix" style="height:30px;"></div>
                <div class="l" style="width:220px;">
                    <img src="/style/front/company/xrzurl.png">
                </div>
                <ul class="l">
                    <?php $cate = $c->getCate(14);?>
                    <li class="top"><?php echo $cate["cname"];?></li>
                    <?php foreach ($cate["son"] as $key => $son){?>
                    <li><a href="<?php echo $son["surl"];?>"><?php echo $son["cname"];?></a></li>
                    <?php }?>       
                </ul>
                <ul class="l">
                    <?php $cate = $c->getCate(20);?>
                    <li class="top"><?php echo $cate["cname"];?></li>
                    <?php foreach ($cate["son"] as $key => $son){?>
                    <li><a href="<?php echo $son["surl"];?>"><?php echo $son["cname"];?></a></li>
                    <?php }?>       
                </ul>
                <ul class="l">
                    <?php $cate = $c->getCate(9);?>
                    <li class="top"><?php echo $cate["cname"];?></li>
                    <?php foreach ($cate["son"] as $key => $son){?>
                    <li><a href="<?php echo $son["surl"];?>"><?php echo $son["cname"];?></a></li>
                    <?php }?>       
                </ul>
                <div class="r">
                    <a class="zixun" href="tencent://message/?uin=1664482824"></a>
                    <a class="phone" href="javascript:void(0);">QQ:1664482824</a>
                    <p class="desc">周一至周五(不含节假日)  9:00-16:00</p>
                </div>
            </div>
            <div class="clearfix" style="height:30px;"></div>
        </div>
        <div class="bot wrap">
            <div style="margin-top:10px;">友情链接：
                <?php foreach ($c->getFlink() as $k => $v){?>
                <a href="<?php echo $v['flink_url'];?>" target="_blank"><?php echo $v['flink_name'];?></a>&nbsp;&nbsp;&nbsp;&nbsp; 
                <?php }?>   
            </div>
            Copyright © <?php echo date("Y");?>-<?php echo date("Y") + 1;?>, <?php echo $c->getItem("site_name");?> All Rights Reserved. <?php echo $c->getItem("company_name");?>    &nbsp;&nbsp;
            <a href="/app/map/company.php">百度地图</a>&nbsp;&nbsp;&nbsp;
            <a href="/?mcms_dev=pc">电脑版</a>&nbsp;&nbsp;&nbsp;
            <a href="/?mcms_dev=wap">手机版</a>&nbsp;&nbsp;&nbsp;
            <a href="/?mcms_dev=wx">微信版</a>&nbsp;&nbsp;&nbsp;
            技术支持：<a href="<?php echo $c->getItem("site_url");?>" target="_blank"><?php echo $c->getItem("site_name");?></a>&nbsp;&nbsp;&nbsp;
        </div>
        <div style="display:none;">百度统计</div>
        <script src="/style/libs/qqservice/jquery.qqservice.js"></script>
        <script>
            $(function() {
                $.QqService(
                        {q_top: '180', //距离顶部
                            q_right: '0', //距离右侧
                            q_left: 'auto', //距离左侧
                            q_cssLink: '/style/libs/qqservice/style_1.css', // 样式文件切换
                            q_phone: '0791-88152600000', //联系电话
                            q_data: '<li style="color:#fc7e31;font-weight:bold;">售前咨询</li><li><a href="tencent://message/?uin=296093123"><img border="0" src="http://wpa.qq.com/pa?p=2:296093123:41"></a></li><li><a href="tencent://message/?uin=48254462"><img border="0" src="http://wpa.qq.com/pa?p=2:48254462:41"></a></li><li style="color:#fc7e31;font-weight:bold;">技术支持</li><li><a href="tencent://message/?uin=1005025290"><img border="0" src="http://wpa.qq.com/pa?p=2:1005025290:41"></a></li><li><a href="tencent://message/?uin=582873225"><img border="0" src="http://wpa.qq.com/pa?p=2:582873225:41"></a></li><li><a href="tencent://message/?uin=627266138"><img border="0" src="http://wpa.qq.com/pa?p=2:627266138:41"></a></li><li style="height:2px;"></li>' //html 内容
                        }
                );
            });
        </script>