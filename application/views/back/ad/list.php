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

<div class="box4">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td width="40"><input type="checkbox" id="_checkbox"  onclick="C.form.check_all('.chk_list');"></td>
                <td>广告ID</td>
                <td>广告排序</td>
                <td>广告标题</td>
                <td>广告词</td>
                <td>广告图片</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><input type="checkbox" class="chk_list" value="<?php echo $v['ad_id'];?>"></td>
                <td><?php echo $v['ad_id'];?></td>
                <td><input id="ad_order" type="text" pid="<?php echo $v["ad_id"];?>" class="comm_ipt corder" style="width:30px;" value="<?php echo $v["ad_order"];?>"></td>
                <td><?php echo $v['ad_title'];?></td>
                <td><?php echo $v['ad_words'];?></td>
                <td><img src="<?php echo $v['ad_img'];?>" style="width:40px;height: 30px;"/></td>
                <td>
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$this->controllerId}/edit?id={$v['ad_id']}","编辑","btn");?>
                    <?php $thisc->echoButton("{$thisc->level}02","javascript:del_one({$v['ad_id']});","删除","btn");?>
                    
                </td>
            </tr>
            <?php }?>
        </tbody>

    </table>
    <p class="line-t-20"></p>
        <div class="pagebar">
            <?php echo $page;?>
        </div>
    <p class="line-t-20"></p>
</div>
<script>
    var urls = {"save":"/back/<?php echo $this->controllerId;?>/save","del":"/back/<?php echo $this->controllerId;?>/delete","order":"/back/<?php echo $this->controllerId?>/order"};
</script>
<p class="line-t-20"></p>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton("{$thisc->level}01","/back/{$thisc->controllerId}/add","添加广告",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}02","javascript:del_data();","批量删除",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}03","javascript:update_order();","修改排序",'btn3');?>
    </div>
</div>
