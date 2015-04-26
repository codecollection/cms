<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>      
        <em>></em>模型字段信息
    </span>
</div>
<p class="line-t-15"></p>

<div class="func_desc">
    <b>说明：</b>请根据下面格式输入你要添加的字段，每行一个 。如果为空用{}占位<br>
    
    {title}{field}{field_type}{form_type}{form_value}{field_remark}{forder}{field_tag}<br>
        如：{标题}{title}{varchar(100) not null}{input}{}{这个是标题}{100}{文章}<br>
        其他说明：1) field必须是字符串，form_type的值有input,radio,checkbox,edit,upload,select可选<br>
       
</div>
<p class="line-t-10"></p>

<div id="flashdata">
    <textarea class="box4" style="height: 400px;font-size: 16px;" name="data" placeholder="{标题}{title}{varchar(100) not null}{input}{}{这个是标题}{100}{文章}"></textarea>
    <p class="line-t-20"></p>
        <div class="pagebar">
            <?php echo $page;?>
        </div>
    <p class="line-t-20"></p>
</div>
<script>
    var urls = {"flash":"/back/<?php echo $this->controllerId;?>/doFlash"};
</script>

<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton("{$thisc->level}01","javascript:flash();","确认创建",'btn3');?>
    </div>
</div>
