
<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>      
        <em>></em>友链组信息
    </span>
</div>
<p class="line-t-15"></p>

<div id="form_add">

    <input type="hidden" id="area_id" name="id" value="<?php echo($data["area_id"]);?>" />
    <table class="table_lists editbox">
        
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>广告位名称：</td>
            <td><input id="area_name" type="text" name="data[area_name]" class="comm_ipt" placeholder="" value="<?php echo $data["area_name"]?>"></td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>广告位类型：</td>
            <td><div><?php echo $thisc->vars->input_str(array('node'=>'area_type','name'=>'area_type','type'=>'select_single','default'=>$data['area_type']));?></div></td>
        </tr>
        <tr>
            <td class="fr">广告位标识：</td>
            <td><input id="identification" type="text" name="data[identification]" class="comm_ipt" placeholder="" value="<?php echo $data["identification"]?>"> 如：A-A-1 ,表示首页主广告等</td>
        </tr>
        <tr>
            <td class="fr">广告位说明：</td>
            <td><input id="remark" type="text" class="comm_ipt" name="data[remark]" placeholder="" value="<?php echo $data['remark']; ?>"></td>
        </tr>
        
    </table>
</div>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId;?>/save", "del": "/back/<?php echo $this->controllerId;?>/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton("{$thisc->level}01","javascript:save_data();","保存信息",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}","/back/{$thisc->controllerId}","返回列表",'btn3');?>
        
    </div>
</div>