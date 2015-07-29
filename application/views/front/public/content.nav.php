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


                    <li><a href="/info/special?cid=12" title="微信公众号专题">专题</a></li>

                    <li class="last"><a href="/info/activity?cid=12" title="微信公众号最新活动">活动<i></i></a></li>

                    <li><a href="/" title="小肉粽首页">首页</a></li>

                </ul>
            </div>
        </div>