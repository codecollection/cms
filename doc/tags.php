/**
 * 模板常用标签及说明
 */

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
<?php echo $v['surl'];?>
<?php foreach($list['list'] as $k => $v){}?>
<?php echo('') ;?>

//分类
<?php $cate = $c->getCate(2);?>
<?php echo $v['cname'];?>