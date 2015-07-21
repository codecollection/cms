

<h1 style="position:absolute;left:-9999px">
      <a href="<?php echo HOST;?>" title="<?php echo $c->getItem('site_name');?>" target="_blank"><?php echo $c->getItem('site_name');?></a>
</h1>

<div class="header-wrap">
    <div class="header clearfix">
        <div class="logo">
            <a title="微信公众推广平台" href="<?php echo HOST;?>">
                <img src="/style/front/public/logo.png" alt="小肉粽微信公众推广平台"/>
            </a>
        </div>
        <div class="form clearfix">
            <form id="sForm" method="get" action="">
                <div class="search-wrap">
                    <i></i>
                    <div class="search-txt">
                        <input id="key" class="txt" type="text" maxlength="30" name="keyword" autocomplete="off"  />     
                    </div>
                </div>
                <div class="search-btn">
                    <button type="submit" class="submit">搜索</button>
                </div>
                <div id="searchResult" class="s-result">
                    
                </div>
            </form>
        </div>
    </div>
</div>
<div class="nav-wrap">
    <ul class="nav clearfix">
        
                <li class="<?php echo $cid <= 0 ? "curr" : "";?>"><a href="<?php echo HOST?>" title="小肉粽微信公众号平台">首页<?php echo $cid <= 0 ? '<span class="nav-bar"></span>' : "";?></a></li>
            
                <li class="<?php echo $cid == 1 ? "curr" : "";?>"><a href="/info/l?cid=1" title="微信公众号">公众号<?php echo $cid == 1 ? '<span class="nav-bar"></span>' : "";?></a></li>
            
                <li class="<?php echo $cid == 2 || in_array($cid, array(3,4,5,6)) ? "curr" : "";?>"><a href="/info/l?cid=2" title="微信公众号资讯">资讯<?php echo $cid == 2 || in_array($cid, array(3,4,5,6)) ? '<span class="nav-bar"></span>' : "";?></a></li>
            
            
                <li><a href="/info/special" title="微信公众号专题">专题</a></li>
            
                <li><a href="/info/activity" title="微信公众号最新活动">活动<i></i></a></li>
            
    </ul>
</div>