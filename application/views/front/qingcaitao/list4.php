<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<title><?php echo empty($cate["ctitle"]) ?  $cate["ctitle"] : $cate["cname"];?>－<?php echo $c->getItem("site_name");?></title>
<meta name="keywords" content="<?php echo $cate["ckey"]?>">
<meta name="description" content="<?php echo $cate["cdesc"]?>">
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
