<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>      
        <em>></em>添加永久素材
    </span>
</div>
<p class="line-t-20"></p>

<div id="form_add">
    <form method="post" action="/back/material/testUpload" enctype="multipart/form-data">
    <input type="hidden" id="group_id" name="id" value="" />
    <table class="table_lists editbox">
        <tr>
            <td class="fr">上传文件：</td>
            <td><input type="text" name="image" value="" class="comm_ipt" id="image"> 
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe width="100%" height="100%" frameborder="no" marginwidth="0" border="0" marginheight="0" allowtransparency="yes" scrolling="no" src="/back/upload?vid=image"></iframe>
                </div>

                <div style="right:228px;" class="slt_small">
                    <img src="/style/back/image/upload-pic.png" id="thumb_image">                    
                </div>
               </td>
        </tr>
    </table>
    </form>
</div>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId;?>/save", "del": "/back/<?php echo $this->controllerId;?>/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="javascript:save_data();" class="btn3">提交保存</a>
        <a href="/back/<?php echo $this->controllerId;?>" class="btn3">返回素材列表</a>
    </div>
</div>