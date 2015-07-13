
<div class="box4">
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td>公众号</td>
                <td>LOGO</td>
                <td>类型</td>
                <td>商家</td>
                <td>行业</td>
                <td width="140">操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list['list'] as $k => $v){?>
            <tr id="<?php echo "formli" . $k + 1;?>">
                <td><?php echo $v['num'];?></td>
                <td><?php if(!empty($v["logo"])){?>
                    <img src="<?php echo $v["logo"]?>" style="height:30px;" />
            <?php }else{?>
                    --
            <?php }?>
                </td>
                <td><?php echo isset($thisc->type[$v['type']]) ?$thisc->type[$v['type']] : "";?></td>
                <td><?php echo $v['owner'];?></td>
                <td><?php echo $v['cate'];?></td>
                <td>
                    <a class="btn" href="/user/pub/edit?id=<?php echo $v["cms_public_id"];?>&cateId=<?php echo $v["last_cate_id"];?>">编辑</a>
                   <a class="btn" href="/user/pub/article?id=<?php echo $v["cms_public_id"];?>&cateId=<?php echo $v["last_cate_id"];?>">文档管理</a> 
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
