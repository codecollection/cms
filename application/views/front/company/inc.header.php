        <div class="header">
            <div class="wrap">
                <a href="/" alt="<?php echo $c->getItem("site_name");?>" class="l logo" style="background:url(<?php echo $c->getItem("site_logo");?>) no-repeat;width:300px;height:70px;"></a>
                <div class="r">
                    <div class="l nav">
                        <ul>
                            <li><a href=<?php echo HOST;?> <?php if($cid == 0){echo('class="current"');}?>>首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
                            <?php $cates = $c->getCate();?>
                            <?php foreach($cates as $k => $ct){
                                
                                if($ct["nav_show"] != 1){continue;}
                                $style = "";
                                if($cid == $ct["cate_id"] || $cid == $ct["parent_id"]){$style = "current";}
                                ?>
                            <li><a class="<?php echo $style;?>" href="<?php echo $ct["surl"];?>"><?php echo $ct["cname"];?></a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 