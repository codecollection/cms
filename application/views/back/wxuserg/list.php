
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
                <td>组ID</td>
                <td>组名称</td>
                <td>人数</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list["groups"] as $k => $v){?>
            <tr>
                <td width="40"><input type="checkbox"  onclick="C.form.check_all('.chk_list');" value="<?php echo $v["id"];?>"></td>
                <td><?php echo $v["id"];?></td>
                <td><?php echo $v["name"];?></td>
                <td><?php echo $v["count"];?></td>
                <td width="100">
                    <?php if($k > 3){?>
                    <?php $thisc->echoButton("{$thisc->level}","/back/{$this->controllerId}/edit?id={$v['id']}&name={$v["name"]}","编辑","btn");?>
                    <?php $thisc->echoButton("{$thisc->level}02","javascript:del_one({$v['id']});","删除","btn");?>
                    <?php }else{echo('<span class="btn">不可操作</span>');}?>
                </td>
            </tr>
            <?php }?>
            <tr id="form_add">
                <input type="hidden" id="id" name="id" value="0">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="text" id="name" name="data[name]" class="comm_ipt " style="width:80px;" placeholder="分组名称" value=""></td>
                <td>&nbsp;</td>
                <td>
                <a class="btn" href="javascript:save_data();">添加</a>        
        </td></tr>
        </tbody>
    </table>
</div>
<p class="line-t-20"></p>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete","status":"/back/<?php echo $this->controllerId?>/status"};
</script>