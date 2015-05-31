</head>
<body>
<div class="header">
    <div class="wrap">
        <a href="/" alt="掌易科技" class="l logo" style="background:url(/style/front/sty_default/logo/logo_site.png) no-repeat;width:300px;height:70px;"></a>
        <div class="r">
            <div class="l nav">
                <ul>
                    <li><a href="http://crane">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
                    <?php $cate = $c->getCate();?>
                    <?php foreach($cate as $k => $v){ if($v['parent_id'] != 0){continue;};?>
                    <li><a  href="<?php echo $v['surl'];?>"><?php echo $v['cname'];?></a></li>
                    <?php }?>
                    
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="sbg">
    <div class="wrap">
        <div class="l">
               <div class="search_box">
                <input type="text" id="seach-txt" class="search_txt" placeholder="请输入关键字" onkeydown="if(event.keyCode==13) do_search();" value="">
                <a onclick="do_search();" class="search_btn" href="javascript:void(0);"></a>
                </div>
        </div>
        <div class="r">
            <a href="/user/login">登录</a>&nbsp;&nbsp;&nbsp;<a href="/app/user/register.php">注册</a>        </div>
    </div>
</div>