
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

    <input type="hidden" id="special_id" name="id" value="<?php echo($data["special_id"]);?>" />
    <table class="table_lists editbox">
        
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>专题标题：</td>
            <td><input id="title" type="text" name="data[title]" class="comm_ipt" placeholder="标题" value="<?php echo $data["title"]?>"></td>
        </tr>
        <tr>
            <td width="150" class="fr"><span class="fred"></span>专题期号：</td>
            <td><input id="numb" type="text" name="data[numb]" class="comm_ipt" placeholder="标题" value="<?php echo $data["numb"]?>"></td>
        </tr>
        <tr>
            <td class="fr">跳转地址：</td>
            <td><input id="url" type="text" name="data[url]" class="comm_ipt" placeholder="http://" value="<?php echo $data["url"]?>"></td>
        </tr>
        <tr>
            <td class="fr"><span class="fred"> </span>专题类型：</td>
            <td><div><?php echo $thisc->vars->input_str(array('node'=>'s_type','name'=>'type','type'=>'select_single','default'=>$data['type']));?></div></td>
        </tr>
        <tr>
            <td class="fr">文章列表：</td>
            <td><input id="id_list" type="text" name="data[id_list]" class="comm_ipt" placeholder="1,2,3,5" value="<?php echo $data["id_list"]?>"> 文章的id列表，用（,）分隔 如：2,5,6,70</td>
        </tr>
        <tr>
            <td class="fr">专题模型：</td>
            <td><?php echo $thisc->getModelSelect($data['model_id']);?></td>
        </tr>
        <tr>
            <td class="fr">logo图：</td>
            <td><input id="logo" type="text" class="comm_ipt" value="<?php echo $data["logo"]?>" name="data[logo]"> 
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=logo" width="100%" scrolling="no" height="100%" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>

                <div class="slt_small" style="right:228px;">
                    <img id="thumb_logo" src="<?php echo $data["logo"] = $data['logo'] == '' ? DEFAULT_INFO_IMG : $data["logo"]; ?>" />                   
                </div>
               </td>
        </tr>
        <tr>
            <td class="fr">背景图：</td>
            <td><input id="bg_img" type="text" class="comm_ipt" value="<?php echo $data["bg_img"]?>" name="data[bg_img]"> 
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=bg_img" width="100%" scrolling="no" height="100%" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>

                <div class="slt_small" style="right:228px;">
                    <img id="thumb_bg_img" src="<?php echo $data["bg_img"] = $data['bg_img'] == '' ? DEFAULT_INFO_IMG : $data["bg_img"]; ?>" />                   
                </div>
               </td>
        </tr>
        <tr>
            <td class="fr">背景色：</td>
            <td><input id="bg_color" type="text" name="data[bg_color]" class="comm_ipt" placeholder="#000" value="<?php echo $data["bg_color"]?>"> 背景色</td>
        </tr>
        <tr>
            <td class="fr">代码HTML：</td>
            <td>
                <textarea name="data[special_html]" id="area_html" style="display:block;" ><?php echo $data["special_html"]?></textarea><span class="l"> </span>
            </td>
        </tr>
         <tr>
            <td class="fr">专题说明：</td>
            <td>
                <textarea name="data[remarks]" id="remarks" style="display:block;" ><?php echo $data["remarks"]?></textarea><span class="l"> </span>
            </td>
        </tr>
        <tr>
            <td class="fr">排序：</td>
            <td><input id="forder" type="text" name="data[forder]" class="comm_ipt" placeholder="0" value="<?php echo $data["forder"]?>"> 专题间的排序</td>
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