<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>      
        <em>></em>快速添加模型字段
    </span>
</div>
<p class="line-t-15"></p>

<div class="func_desc">
    <b>说明：</b>
    1）数据格式 {性别}{gender}{varchar(10) not null}{radio}{0}{{"":"","":""}}{用户性别}{0}{用户}<br>
    分别对应{标题}{字段(sql)}{字段类型}{表单类型}{默认值}{备选值}{说明}{排序}{标签}<br>
</div>
<p class="line-t-10"></p>

<div id="flashdata">
    <textarea class="box4" name="data" placeholder="{性别}{gender}{varchar(10) not null}{radio}{0}{{"":"","":""}}{用户性别}{0}{用户}" style="height: 200px;font-size: 14px;">{爱好}{interest}{varchar(20) not null }{checkbox}{1}{"0":"篮球","1":"网球"}{球类爱好}{0}{测试}</textarea>
    <p class="line-t-20"></p>
        <div class="pagebar">
            <?php echo $page;?>
        </div>
    <p class="line-t-20"></p>
</div>
<script>
    var urls = {"save":"/back/<?php echo $this->controllerId;?>/save","flash":"/back/<?php echo $this->controllerId;?>/doFlash"};
</script>

<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton("{$thisc->level}01","javascript:flash();","添加字段",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}01","/back/{$thisc->controllerId}/flash","快速创建",'btn3');?>
    </div>
</div>
