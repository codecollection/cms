<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<title>租前问题 | 蘑菇公寓</title>
<meta name="keywords" content="单身公寓,白领公寓,合租公寓,上海单身公寓,上海合租单间,上海白领公寓,上海合租公寓,上海爱情公寓,上海租房" />
<meta name="description" content="选择蘑菇公寓，与美好相遇，免中介费，高档社区，名牌家具家电，免费保洁维修，租客认证保证安全，入住租客免费获得商业保险，免费wifi，拎包入住，热线:400-800-4949" />
<title>租前问题 | 蘑菇公寓</title>
<?php $c->loadView("front/qingcaitao/inc.header.php"); ?>
<style>
nav {background:#ff6500; position:relative;}
</style>
</head>
<body>
<?php $c->loadView("front/qingcaitao/inc.nav.php");?>
    

  	<div class="beforeRent" >
  	<div class="e2">
            
        <?php $list = $c->getList();?>
        <?php foreach($list["list"] as $k => $v){?>
  	<div>
            <h2 class="<?php echo $k == 0 ? "fiest-h2" : "";?>"><?php echo $k + 1;?>、<?php echo $v['title']?></h2>
   	</div>	
        <?php }?>
   	</div>
    
    </div>
    <!--分页  -->
<style>
    
    .pagenation1 a {width: 60px;}
</style>
<div class="pagenation1" style="margin: 43px auto; width: 430px;"> 
    
        <?php echo $list["pagecode"];?>
    
</div>
    <?php $c->loadView("front/qingcaitao/inc.footer.php"); ?>  
</body>
</html>
