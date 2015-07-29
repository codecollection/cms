<div class="copy-right">
    <p>
        <input type="hidden" id="serviceIp" name="serviceIp" value="118.144.66.138">
        <?php $cates = $c->getCate(7);?>
        <?php foreach($cates['son'] as $k => $t){?>
        <?php echo $k == 0 ? "" : "|";?>
        <a href="<?php echo $t['surl'];?>" target="_blank" title="<?php echo $t['cname'];?>">
            <?php echo $t['cname'];?>
        </a>
        <?php }?>
    </p>
    <?php $c->loadView("front/public/copyright");?>
</div>