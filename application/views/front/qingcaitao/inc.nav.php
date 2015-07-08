<nav>
    <div class="nav">
        <div class="nav_l">
            <div class="logo"><a href="<?php echo base_url();?>"><img src="http://www.mogoroom.com:80/pages/imgs/logo1.png"/></a>
            </div>
<?php $cate = $c->getCate(); ?>  
<?php
$i = 0;
foreach ($cate as $k => $v) {
    $i++;
    $style = "";
    $color = "";
    $selected = "";
    if ($i == 2) {
        $style = "<i></i>";
    }
    if ($i == 4) {
        $color = "style='color:#fffd38;'";
    }
    if ($v['nav_show'] != 1) {
        continue;
    }
    
    if ($cid == $v["cate_id"]){
        $selected = "on";
    }
    ?>
        <a   href="<?php echo $v['surl']; ?>" <?php echo $color; ?> class="<?php echo $selected?>"><?php echo $v['cname']; ?><?php echo $style ?></a>
<?php } ?>

        </div>
        <div class="nav_r">
              <!-- <a href="#"><span>注册</span></a>
              <a href="#"><span>登录</span></a> -->
            <a href="javascript:;"  class="show"id="xinshou">新手上路</a>

            <a  id="nav1" href="http://www.mogoroom.com:80/toAffiliate.html" ><span>业主加盟</span></a>

        </div>   
    </div>
</nav>
