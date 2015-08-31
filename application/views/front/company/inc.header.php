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
<div class="sbg">
            <div class="wrap">
                <div class="l">
                    <div class="search_box">
                        <input type="text" id="seach-txt" class="search_txt" placeholder="请输入关键字" onkeydown="if (event.keyCode == 13) do_search();" value="">
                        <a onclick="do_search();" class="search_btn" href="javascript:void(0);"></a>
                    </div>
                </div>
                <div class="r">
                    <a href="javacript:;">登录</a>&nbsp;&nbsp;&nbsp;<a href="javacript:;">注册</a>        </div>
            </div>
        </div>