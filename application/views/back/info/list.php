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
<div id="query_box_category" <?php if(empty($thisc->getData("sv"))){echo('style="display:none;"');}?>>
    <div class="box_970" id="screen">
        <ul class="screening se_manage res_scre">
            <li>
                <form action="?" method="get" name="search">
                    <input type="hidden" name="st" value="cname">
                    <span class="l">分类名称</span>
                    <input type="text" class="comm_ipt l" name="sv" value="<?php echo $thisc->getData("sv");?>">
                    &nbsp;&nbsp;<input type="submit" class="btn" value="查询" />
                </form>
            </li>
        </ul>
    </div>
    <p class="line-t-20"></p>
</div>
<!-- 树 -->
<div class="box2 box4" style="width:100%;">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td width="40"><input type="checkbox"  onclick="C.form.check_all('.chk_list');"></td>
                <td>ID</td>
                <td width="60">排序</td>
                <td>标题</td>
                <td>阅读量</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){ ?>
            <tr id="<?php echo "formli1".$k?>">
                <td><input type="checkbox" class="chk_list" value="<?php echo $v[$thisc->modelName."_id"];?>"></td>
                <td><a href="/" target="_blank"><?php echo $v[$thisc->modelName."_id"];?></a></td>
                <td><input id="corder" type="text" pid="<?php echo $v[$thisc->modelName."_id"];?>" class="comm_ipt corder" style="width:30px;" value="<?php echo $v["forder"];?>"></td>
                <td><input type="text"  class="comm_ipt cname"  value="<?php echo $v["title"];?>">
                    
                </td>
                <td>
                    <?php echo $v["visitors"];?>                                                                                                     </td>
                <td>
                    <a class="btn" href="/back/<?php echo $this->controllerId?>/edit?id=<?php echo $v[$thisc->modelName."_id"];?>&cateId=<?php echo $v['last_cate_id']?>">编辑</a>
                    <a class="btn" href="/back/<?php echo $this->controllerId?>/sonModel?id=<?php echo $v[$thisc->modelName."_id"];?>&modelId=<?php echo $modelId;?>">子模型</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <p class="line-t-20"></p>
    <div class="pagebar">
        <?php echo $page;?>
    </div>
    <p class="line-t-20"></p>
</div>
<p class="line-t-20"></p>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        
        <?php $thisc->echoButton("{$thisc->level}01","/back/{$thisc->controllerId}/add?modelId={$modelId}&cateId={$cateId}","添加文档",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}03","javascript:update_order();","修改排序",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}02","javascript:del_data();","批量删除",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}","/back/{$thisc->controllerId}/home","返回文档",'btn3');?>
    </div>
</div>
<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete?modelId=<?php echo $modelId;?>","order":"/back/<?php echo $this->controllerId?>/order"};
    
</script>