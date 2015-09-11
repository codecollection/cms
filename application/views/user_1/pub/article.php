

<div class="box4">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td>标题</td>
                <td>阅读量</td>
                 <td>缩略图</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><?php echo $v['title'];?></td>
                <td><?php echo $v['visitors'];?></td>
                <td>
                    <?php if(!empty($v["img_url"])){?>
                    <img src="<?php echo $v["img_url"]?>" style="overflow: hidden;height:30px;"/>
                    <?php }else{?>
                    --
                    <?php }?>
                </td>
                <td>
                    <a class="btn" href="/user/pub/addArticle?id=<?php echo $v['cms_article_id'];?>&cateId=<?php echo $cateId;?>">编辑</a>
                    <a class="btn" href="javascript:del_data(<?php echo $v['cms_article_id'];?>,<?php echo $modelId;?>)">删除</a>
                    
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
        
        <a class="btn3" href="/user/pub/addArticle?modelId=<?php echo $modelId; ?>&amp;cateId=<?php echo $cateId;?>">添加文档</a> 
        <a class="btn3" href="/user/pub">返回公众号</a>    </div>
</div>
