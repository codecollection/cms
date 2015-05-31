
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

<div id="form_add">

    <input type="hidden" id="tag_id" name="id" value="<?php echo($data["tag_id"]);?>" />
    <table class="table_lists editbox">
        
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>标签：</td>
            <td><input id="tag" type="text" name="data[tag]" class="comm_ipt" placeholder="标签" value="<?php echo $data["tag"]?>"></td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>标签组：</td>
            <td><?php echo $thisc->vars->input_str(array('node'=>'tag_group','name'=>'group_id','type'=>'select_single','default'=>$data['group_id'] = $data['group_id'] != '' ? $data['group_id'] : 0)); ?></td>
        </tr>
        <tr>
            <td class="fr">logo图片：</td>
            <td><input id="tag_img" type="text" class="comm_ipt" value="<?php echo $data["tag_img"]?>" name="data[tag_img]"> 
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=tag_img" width="100%" scrolling="no" height="100%" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>

                <div class="slt_small" style="right:228px;">
                    <img id="thumb_tag_img" src="<?php echo $data["tag_img"] = $data['tag_img'] == '' ? DEFAULT_INFO_IMG : $data["tag_img"]; ?>" />                    
                </div>
               </td>
        </tr>
            <td class="fr">标签排序：</td>
            <td><input id="tag_order" type="text" class="comm_ipt" name="data[tag_order]" placeholder="0" value="<?php echo $data['tag_order']; ?>"></td>
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