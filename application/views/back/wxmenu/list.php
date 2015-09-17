
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
<!--    <table class="table_lists table_click">
        <thead>
            <tr>
                <td style="text-align:left;width:200px;">&nbsp;&nbsp;事件类型</td>
                <td>菜单名称</td>
                <td>KEY/URL</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list as $k => $v){ ?>
            <?php foreach($v as $key => $val){?>
            <?php $key = "";
                    if(isset($val["key"])){
                        $key = $val["key"];
                    }else if(isset ($val["url"])){
                        $key = $val["url"];
                    }else if(isset($val["media_id"])){
                        $key = $val["media_id"];
                    }
            ?>
            <tr>
                <td style="text-align: center">
                    <?php 
                    $this->vars->set_fields("wxmenuType",$this->menuType);
                    //echo $this->vars->input_str(array('node'=>'wxmenuType','name'=>'type','type'=>'select_single','default'=>$val["type"],'style'=>'style="width:200px;"'));
                    ?>
                </td>
                <td><?php echo $val["name"];?></td>
                <td><?php echo $key;?></td>
                <td width="100">
                    <a class="btn">添加子菜单</a>
                </td>
            </tr>
            <?php } }?>
            
        </tbody>
    </table>-->
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td width="40"><input type="checkbox"  onclick="C.form.check_all('.chk_list');"></td>
                <td>自定义菜单内容</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="40"><input type="checkbox" class="chk_list" value="1"></td>
                <td ><textarea style="height:100px;"><?php echo RKit::json_encode_ch($list);?></textarea></td>
                <td width="100">操作</td>
            </tr>
        </tbody>
    </table>
</div>
<p class="line-t-20"></p>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton("{$thisc->level}02","/back/{$this->controllerId}/add","添加一级菜单",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}02","javascript:save_data();","保存菜单",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}02","javascript:del_data();","批量删除",'btn3');?>
    </div>
</div>
<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete","status":"/back/<?php echo $this->controllerId?>/status"};
</script>