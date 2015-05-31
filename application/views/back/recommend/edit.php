
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

    <input type="hidden" id="area_id" name="id" value="<?php echo($data["area_id"]);?>" />
    <table class="table_lists editbox">
        
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>推荐位标题：</td>
            <td><input id="title" type="text" name="data[title]" class="comm_ipt" placeholder="标题" value="<?php echo $data["title"]?>"></td>
        </tr>
        <tr>
            <td class="fr">推荐位跳转地址：</td>
            <td><input id="url" type="text" name="data[url]" class="comm_ipt" placeholder="http://" value="<?php echo $data["url"]?>"></td>
        </tr>
        <tr>
            <td class="fr">文章列表：</td>
            <td><input id="id_list" type="text" name="data[id_list]" class="comm_ipt" placeholder="1,2,3,5" value="<?php echo $data["id_list"]?>"> 文章的id列表，用（,）分隔 如：2,5,6,70</td>
        </tr>
        <tr>
            <td class="fr">文章模型：</td>
            <td><?php echo $thisc->getModelSelect($data['model_id']);?></td>
        </tr>
        <tr>
            <td class="fr">位置logo：</td>
            <td><input id="area_logo" type="text" class="comm_ipt" value="<?php echo $data["area_logo"]?>" name="data[area_logo]"> 
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=area_logo" width="100%" scrolling="no" height="100%" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>

                <div class="slt_small" style="right:228px;">
                    <img id="thumb_area_logo" src="<?php echo $data["area_logo"] = $data['area_logo'] == '' ? DEFAULT_INFO_IMG : $data["area_logo"]; ?>" />                    
                </div>
               </td>
        </tr>
        <tr>
            <td class="fr">代码HTML：</td>
            <td>
                <textarea name="data[area_html]" id="area_html" style="display:block;" ><?php echo $data["area_html"]?></textarea><span class="l"> </span>
            </td>
        </tr>
         <tr>
            <td class="fr">位置说明：</td>
            <td>
                <textarea name="data[area_remarks]" id="area_remarks" style="display:block;" ><?php echo $data["area_remarks"]?></textarea><span class="l"> </span>
            </td>
        </tr>
    </table>
</div>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId;?>/save", "del": "/back/<?php echo $this->controllerId;?>/delete"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton("{$thisc->level}01","javascript:save_data();","保存信息",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}","/back/{$thisc->controllerId}","返回列表",'btn3');?>
        
    </div>
</div>