
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

    <input type="hidden" id="ad_id" name="id" value="<?php echo($data["ad_id"]);?>" />
    <table class="table_lists editbox">
        
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>广告标题：</td>
            <td><input id="ad_title" type="text" name="data[ad_title]" class="comm_ipt" placeholder="广告标题" value="<?php echo $data["ad_title"]?>"></td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>广告位：</td>
            <td><?php echo $thisc->vars->input_str(array('node'=>'ad_area','name'=>'area_id','type'=>'select_single','default'=>$data['area_id'] = $data['area_id'] != '' ? $data['area_id'] : 0)); ?></td>
        </tr>
        <tr>
            <td class="fr">广告词：</td>
            <td><input id="ad_words" type="text" name="data[ad_words]" class="comm_ipt" placeholder="广告词" value="<?php echo $data["ad_words"]?>"> </td>
        </tr>
        <tr>
            <td class="fr">广告图片：</td>
            <td><input id="ad_img" type="text" class="comm_ipt" value="<?php echo $data["ad_img"]?>" name="data[ad_img]"> 
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=ad_img" width="100%" scrolling="no" height="100%" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>

                <div class="slt_small" style="right:228px;">
                    <img id="thumb_ad_img" src="<?php echo $data["ad_img"] = $data['ad_img'] == '' ? DEFAULT_INFO_IMG : $data["ad_img"]; ?>" />                    
                </div>
               </td>
        </tr>
        <tr>
            <td class="fr">连接地址：</td>
            <td><input id="ad_url" type="text" class="comm_ipt" name="data[ad_url]" placeholder="http://" value="<?php echo $data['ad_url']; ?>"></td>
        <tr>
            <td class="fr">广告排序：</td>
            <td><input id="ad_order" type="text" class="comm_ipt" name="data[ad_order]" placeholder="0" value="<?php echo $data['ad_order']; ?>"></td>
        </tr>
        <tr>
            <td class="fr">广告代码：</td>
            <td> 如果是代码广告，直接填写这里的内容，根据广告位的广告类型来处理是图片广告还是代码广告
                <textarea name="data[ad_code]" id="ad_code" style="display:block;" ><?php echo $data["ad_code"]?></textarea><span class="l"> </span>
            </td>
        </tr>
        <tr>
            <td class="fr">起始时间：</td>
            <td><input id="start_date" type="text" class="comm_ipt" name="data[start_date]" placeholder="0" value="<?php echo $thisc->echoTime($data['start_date']); ?>" onclick="new Calendar().show(this);"></td>
        </tr>
        <tr>
            <td class="fr">结束时间：</td>
            <td><input id="expire_date" type="text" class="comm_ipt" name="data[expire_date]" placeholder="0" value="<?php echo $thisc->echoTime($data['expire_date']); ?>" onclick="new Calendar().show(this);"> 一般针对付费广告</td>
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