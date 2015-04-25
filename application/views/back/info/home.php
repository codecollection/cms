<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>  
    </span>
</div>
<p class="line-t-15"></p>
<div>
    <!--按模块查看-->
    <div class="totals clearfix">
        <ul>
            <li class="hdli">选择模块</li>
            <?php foreach ($models as $k => $v){?>
            <li><a href="/back/<?php echo $this->controllerId?>?modelId=<?php echo $v['model_id'];?>"><?php echo $v['model_title'];?></a></li>
            <?php }?>
        </ul>
    </div>
    <p class="line-t-10" style="clear:both;"></p>
    <!--按分类查看 -->
    <div class="columns-mod l">
        <div class="hd">
            <h5>选择分类</h5>
        </div>
        <div class="bd">
            <div class="sys-info">
                <?php echo $cateHtml;?>
                
            </div>
        </div>
    </div>
    
</div>