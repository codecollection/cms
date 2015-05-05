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

<div class="box4">
    <form id="form_add">
        <table class="table_lists table_click">
            <thead>
                <tr>
                    <td>评论ID</td>
                    <td>文章ID</td>
                    <td>评论内容</td>
                    <td>赞</td>
                    <td>踩</td>
                    <td width="80">操作</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($list['list'] as $k => $v) { ?>
                    <tr id="<?php echo "formli" . $k + 1; ?>">
                        <td><?php echo $v['comment_id']; ?></td>
                        <td><a href="/back/info?modelId=<?php echo $v['model_id'];?>&id=<?php echo $v['info_id'];?>"><?php echo $v['info_id']; ?></a></td>
                        <td><?php echo $v['content']; ?></td>
                        <td><?php echo $v['good']; ?></td>
                        <td><?php echo $v['bad']; ?></td>
                        <td>
                        <?php $thisc->echoButton($this->controllerId . "02", "/back/{$this->controllerId}/edit?id={$v['comment_id']}", "编辑"); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </form>
    <p class="line-t-20"></p>
    <div class="pagebar">
    <?php echo $page; ?>
    </div>
    <p class="line-t-20"></p>
</div>
<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete"};
</script>