

<div class="box4">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td width="40"><input type="checkbox"  onclick="C.form.check_all('.chk_list');"></td>
                <td>排序</td>
                <td>标题</td>
                <td>阅读量</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><?php echo $v['cms_article_id'];?></td>
                <td><input id="corder" type="text" pid="<?php echo $v["cms_article_id"];?>" class="comm_ipt corder" style="width:30px;" value="<?php echo $v["forder"];?>"></td>
                <td><?php echo $v['title'];?></td>
                <td><?php echo $v['visitors'];?></td>
                <td>
                    
                    <a class="btn" href="/user/pub/addArticle?id=<?php echo $v['cms_article_id'];?>">编辑</a>
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
<script>
    
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        
        <a class="btn3" href="/user/pub/addArticle?modelId=<?php echo $modelId; ?>&amp;cateId=<?php echo $cateId;?>">添加文档</a>        <a class="btn3" href="javascript:update_order();">修改排序</a>        <a class="btn3" href="javascript:del_data();">批量删除</a>        <a class="btn3" href="/back/info/home">返回文档</a>    </div>
</div>
