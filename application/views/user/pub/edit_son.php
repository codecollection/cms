
<div id="form_add">

    <input type="hidden" id="<?php echo "cms_article_id"; ?>" name="id" value="<?php echo($data["cms_article_id"]); ?>" />
    <input type="hidden" id="modelId" name="modelId" value="<?php echo($modelId); ?>" />
    <input type="hidden" id="modelId" name="data[model_id]" value="<?php echo($modelId); ?>" />
    <input type="hidden" id="last_cate_id" name="data[last_cate_id]" value="<?php echo $cateId; ?>" />
    <table class="table_lists editbox">

        <?php ?>
        <tr>
            <td class="fr"><span class="fred">* </span>标题 ：</td>
            <td><input id="title" type="text" name="data[title]" class="comm_ipt" value="<?php echo $data["title"] ?>"></td>
        </tr>
        <tr>
            <td class="fr">描述：</td>
            <td><textarea name="data[desc]"  id="desc" class="comm_ipt"><?php echo $data["desc"] ?></textarea></td>
        </tr>

        <tr>
            <td class="fr" style="vertical-align:top;">缩略图：</td>
            <td><input id="img_url" type="text" class="comm_ipt" value="<?php echo $data["img_url"] ?>" name="data[img_url]"> 
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=img_url" width="100%" scrolling="no" height="100%" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>

                <div class="slt_small" style="right:228px;">
                    <img id="thumb_img_url" src="<?php echo $data["img_url"] = $data['img_url'] == '' ? DEFAULT_INFO_IMG : $data["img_url"]; ?>" />                    
                </div>
            </td>
        </tr>
        <tr>
            <td class="fr">详情：</td>
            <td>
                <p class="line-t-10"></p>
                <textarea name="data[body]" id="data[body]" style="display:block" class="ckeditor"><?php echo $data["body"] ?></textarea>
                <script type="text/javascript">
  
                    var editor;
                    if (!CKEDITOR.instances["data[body]"]){  //判定是否存在 
                        
                        editor = CKEDITOR.replace("data[body]", {height:140, width:790, skin:"kama"});
                    } else{
                        
                        addCkeditor("data[body]");
                    }
                    
                    function addCkeditor(id){
                        var editor2 = CKEDITOR.instances[id];
                        if (editor2) editor2.destroy(true); //销毁编辑器,然后新增一个  
                        editor = CKEDITOR.replace(id, {height:140, width:790, skin:"kama"});
                    }
                </script>
                <p class="line-t-15"></p>
            </td>
        </tr>
        <tr>
            <td class="fr" style="vertical-align:top;">标签：</td>
            <td><input id="tag" type="text" class="comm_ipt" value="<?php echo $data["tag"] ?>" name="data[tag]"> 
            </td>
        </tr>
        <tr>
            <td class="fr">排序：</td>
            <td><input id="forder" name="data[forder]" type="text" class="comm_ipt" value="<?php echo $data["forder"] ?>"> 排序有小到大</td>
        </tr>
        <tr>
            <td class="fr">跳转地址：</td>
            <td><input id="info_url" name="data[info_url]" type="text" class="comm_ipt" value="<?php echo $data["info_url"];?>"> 如果填写了跳转地址，那么将直接跳转到该地址</td>
        </tr>
    </table>
</div>

<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
<a class="btn3" href="javascript:save_data();">保存信息</a>
<a class="btn3" href="/user/pub/article?id=<?php echo $cateId;?>">返回文档</a>
<a class="btn3" href="/user/pub">返回公众号</a>
    </div>
</div>