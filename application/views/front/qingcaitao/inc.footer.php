
<div class="footWrap">
    <div class="footHeader">
        <div class="jiathis_style fl">
            <a class="jiathis_button_tsina"></a>
            <a class="jiathis_button_tqq"></a>
            <a class="jiathis_button_weixin"></a>
            <a class="jiathis_button_xiaoyou"></a>
        </div>
<!--        <div class="contact-f">
            <a href="" target="_blank">在线客服</a>
        </div> -->
        <!-- <div id="us" style="padding-top:10px;"></div> -->
        <div class="contact_l">
            <?php $cate = $c->getCate(11);?>
            <?php foreach($cate["son"] as $k => $v){
                $str = " | ";
                if($k == 0 ){$str = "";}
            ?>
            <?php echo $str;?><a href="<?php echo $v["surl"];?>"><?php echo $v["cname"];?></a>
            <?php }?>
        </div>
        <p>
            <?php $f = $c->getFlink();?>
            
            <div class="contact_l">友情链接： 
                <?php foreach($f as $k => $v){
                    $str = " | ";
                    if($k == 0 ){$str = "";}
                ?>
                <?php echo $str;?> <a href="<?php echo $v["flink_url"]?>"><?php echo $v["flink_name"]?></a>  
                <?php }?>
            </div>
        </p>
        <p> 全国热线：<?php echo $c->getItem("company_tel");?>（周一至周日9：00-21：00）| 客服邮箱：<?php echo $c->getItem("company_email");?> </p>
        <p> Copyright © 2013-2015<?php echo $c->getItem("company_name");?>版权所有 <?php echo $c->getItem("record"); ?> </p>
    </div>
</div>
