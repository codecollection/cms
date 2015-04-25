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
                <td>分类名称</td>
                <td>分类别名</td>
                <td width="120">导航显示</td>
                <td width="120"></td>
                <td width="60">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){ ?>
            <tr id="<?php echo "formli1".$k?>">
                <td><input type="checkbox" class="chk_list" value="<?php echo $v["cate_id"];?>"></td>
                <td><a href="/" target="_blank"><?php echo $v["cate_id"];?></a></td>
                <td><input id="corder" type="text" pid="<?php echo $v["cate_id"];?>" class="comm_ipt corder" style="width:30px;" value="<?php echo $v["corder"];?>"></td>
                <td><input id="corder" type="text"  class="comm_ipt cname" style="width:160px;"  value="<?php echo $v["cname"];?>">
                    <a  href="/back/cate?pid=<?php echo $v['cate_id']?>">查看下级(<?php echo count($thisc->cate->categories[$v["cate_id"]]["son"]);?>)</a>
                </td>
                 <td><?php echo $v["cnick"];?>
                </td>
                <td>PC:<?php echo $this->vars->get_field_str("nav_show",$v["nav_show"]); ?> &nbsp;&nbsp;WAP:<?php echo $this->vars->get_field_str("nav_show",$v["nav_show_wap"]); ?></td>
                <td style="color:#888;text-align:left;line-height:160%;">
                    &nbsp;&nbsp;                                                                                                        </td>
                <td>
                    <a class="btn" href="/back/<?php echo $this->controllerId?>/edit?id=<?php echo $v["cate_id"];?>">编辑</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
<p class="line-t-20"></p>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="/back/cate/add" class="btn3">添加分类</a>
        <a href="javascript:void(0);" class="btn3" onclick="update_order();">修改排序</a>
        <a href="javascript:void(0);" class="btn3" onclick="del_data();">批量删除</a>
        <a href="/back/cate" class="btn3">分类列表</a>
    </div>
</div>
<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete","order":"/back/<?php echo $this->controllerId?>/order"};
    
</script>