<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content=""/>
<meta name="description" content="" />
<link href="/style/front/<?php echo TEMPLATE?>/css/style.css" type="text/css" rel="stylesheet" />
<title>注册成功_用户注册</title>
</head>
<body>
<div class="model-outer of">
     <a href="http://www.d.cn" title="手机游戏第一站" class="web-logo">手机游戏第一站</a>
     <span class="headerTit">用户注册</span>
     <div class="line fl of"></div>
     <div class="leftside fl">
          <p class="successful">注册成功！</p>
          <p class="success-normal">恭喜您，<span class="orange"><?php echo $account;?></span> 成为当乐网用户！</p>
          <p class="success-link">帐号安全级别较低，建议您立即设置帐号保护。<a href="/user/safe"  title="进入安全中心" class="success-enter">进入安全中心>></a></p>
          <a href="<?php echo $fromUrl;?>" title="返回上次访问页面" class="success-return tc">返回上次访问</a>
          <div class="success-dot"></div>
          <a href="http://bbs.d.cn/"  title="游戏社区"><p class="success-broadcast cast-1"><span class="success-broadcast-title">游戏社区</span><span class="success-broadcast-detail">最新游戏攻略随时看，参加活动，赢取丰厚奖励。</span></p></a>
          <a href="http://mall.d.cn/"  title="领取礼包"><p class="success-broadcast cast-2"><span class="success-broadcast-title">领取礼包</span><span class="success-broadcast-detail">免费领取海量当乐用户尊享游戏礼包。</span></p></a>
          <a href="http://guild.d.cn/"  title="玩家公会"><p class="success-broadcast cast-3"><span class="success-broadcast-title">玩家公会</span><span class="success-broadcast-detail">加入玩家公会抱大腿，打团战，再也不怕游戏难。</span></p></a>
          
     </div>
     
     <div class="line fl of"></div>
</div>




<div id="overlay" class="overlay"></div>
<!--footer begin -->
<div class="new-footer clearfix tc" id="footer">
    <?php $c->loadView("copyright.php"); ?>
</div>

<script type="text/javascript" src="http://img.d.cn/images/auth/web/js/jquery-1.8.0.min.js"></script>
</body>
</html>
