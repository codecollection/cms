<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>  
        <em>></em>模型字段
    </span>
</div>
<p class="line-t-15"></p>
<div class="func_desc">
    
</div>
<p class="line-t-10"></p>
<div class="box4" id="form_add">
    
    <table class="table_lists editbox">
        <input type="hidden" id="model_id" name="id" value="<?php echo($data["model_id"]);?>" />
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>模型名称：</td>
            <td><input id="model_title" type="text" name="data[model_title]" class="comm_ipt" placeholder="模型名称" value="<?php echo $data["model_title"]?>"></td>
        </tr>
         <tr>
            <td class="fr">模型表名：</td>
            <td><input id="model_name" type="text" name="data[model_name]" class="comm_ipt" placeholder="模型表名" value="<?php echo $data["model_name"]?>"> </td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>模型类型：</td>
            <td><?php $thisc->vars->set_fields("model_type",$thisc->modelType); echo $thisc->vars->input_str(array('node'=>'model_type','name'=>'model_type','type'=>'select_single','default'=>$data['model_type'] = $data['model_type'] != '' ? $data['model_type'] : 0)); ?></td>
        </tr>
       
        <tr>
            <td class="fr">扩展属性：</td>
            <td> json数据格式
                <textarea name="data[attr_content]" id="attr_content" style="display:block;" ><?php echo $data["attr_content"]?></textarea><span class="l"> </span>
            </td>
        </tr>
    </table>
</div>
<script>
    var urls = {"save": "/back/<?php echo $this->controllerId;?>/save", "del": "/back/<?php echo $this->controllerId;?>/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton($this->controllerId . "01", "javascript:save_data();", "保存","btn3"); ?>
        <?php $thisc->echoButton($this->controllerId . "01", "/back/{$this->controllerId}", "返回模型","btn3"); ?>
    </div>
</div>