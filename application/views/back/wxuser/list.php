
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

<!-- 查询隐藏表单-->
<div id="query_box_category" style="display:none;">
    
    <p class="line-t-20"></p>
</div>

<div class="box2 box4" style="width:100%;">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td width="40"><input type="checkbox"  onclick="C.form.check_all('.chk_list');"></td>
                <td>OPEN_ID</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list["data"]["openid"] as $k => $v){?>
            <tr>
                <td width="40"><input type="checkbox"  onclick="C.form.check_all('.chk_list');" value=""></td>
                <td><a href="/back/wxuser/getInfo?openid=<?php echo $v;?>" target="_blank"><?php echo $v;?></a></td>
                <td width="100">
                    <span class="btn">不可操作</span>
                </td>
            </tr>
            <?php }?>
            
        </tbody>
    </table>
</div>
<p class="line-t-20"></p>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete","status":"/back/<?php echo $this->controllerId?>/status"};
</script>