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
                <td>专题ID</td>
                <td>标题</td>
                <td>文章ID列表</td>
                <td>logo</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><input type="checkbox" class="chk_list" value="<?php echo $v['special_id'];?>"></td>
                <td><?php echo $v['special_id'];?></td>
                <td><?php echo $v['title'];?></td>
                <td><?php echo $v['id_list'];?></td>
                <td> <?php if(!empty($v["logo"])){?> <img src="<?php echo $v['logo'];?>" style="width:40px;height: 30px;"/><?php }else{echo "--";}?></td>
                <td>
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$this->controllerId}/edit?id={$v['special_id']}","编辑","btn");?>
                    <?php $thisc->echoButton("{$thisc->level}02","javascript:del_one({$v['special_id']});","删除","btn");?>
                    
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
        <?php $thisc->echoButton("{$thisc->level}01","/back/{$thisc->controllerId}/add","添加专题",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}02","javascript:del_data();","批量删除",'btn3');?>
    </div>
</div>
