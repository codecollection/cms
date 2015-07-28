/**
 * 模板常用标签及说明
 */
<?php $c->loadView("front/public/nav.php");?>
 
//获取推荐位
<?php $area = $c->getArea(4);?> //4=推荐位ID
//循环推荐位
<?php foreach($area['list'] as $k => $v){?>
<?php }?>
//推荐位跳转地址
<?php echo $area["url"];?>
//推荐位标题
<?php echo $area["title"];?>

//信息地址
<?php $list = $c->getList(1,30);?>
<?php echo $v['surl'];?>
<?php foreach($list['list'] as $k => $v){}?>
<?php echo('') ;?>
<?php echo $v['title'];?>
<?php echo $v['img_url'];?>

//分类
<?php $cate = $c->getCate(2);?>
<?php echo $v['cname'];?>
<?php echo $cid == 1 ? "curr" : "";?>

//详情
<?php echo $d['title'];?>

//友链
<?php $flinks = $c-getFlink();?>
<?php foreach($flinks as $fk => $fv){}?>
<?php echo $fv["flink_url"]?>
<?php echo $fv["flink_name"]?>

//广告
<?php $ads = $c->getAd(1);?>
<?php foreach($ads['list'] as $ak => $av){?>
<li><?php echo $av['ad_title'];?></li>
<?php echo $av['ad_img'];?>
<?php echo $av['ad_url'];?>
<?php echo $av['ad_code'];?>
<?php }?>
//insert into cms_info_list (last_cate_id,model_id,title,img_url,body,uid,uname,cdate) select last_cate_id,model_id,title,img_url,body,uid,uname,cdate from cms_info_list