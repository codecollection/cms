
<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>  
        <em>></em>文档信息
    </span>
</div>
<p class="line-t-15"></p>

<div id="form_add">

    <input type="hidden" id="<?php echo $thisc->modelName."_id";?>" name="id" value="<?php echo($data[$thisc->modelName."_id"]);?>" />
    <input type="hidden" id="modelId" name="modelId" value="<?php echo($modelId);?>" />
    <table class="table_lists editbox">
        <thead>
                <tr><td colspan="2">基本信息</td></tr>
            </thead>
        <tr>
            <td width="150" class="fr">文档分类：</td>
            <td>
                <span class="l">
                   <?php 
                    $cates = $thisc->cate->show_select();
                    $this->vars->set_fields("last_cate_id",$cates);
                    echo $this->vars->input_str(array('node'=>'last_cate_id','name'=>'last_cate_id','type'=>'select_single','default'=>$last_cate_id = $data['last_cate_id'] > 0 ? $data['last_cate_id'] : $cateId,'style'=>'style="width:248px;"','callback'=>true));
                    ?>                
                </span>
            </td>
        </tr>
        
        <tr>
            <td class="fr"><span class="fred">* </span>标题 ：</td>
            <td><input id="title" type="text" name="data[title]" class="comm_ipt" value="<?php echo $data["title"]?>"></td>
        </tr>
        <tr>
            <td class="fr">描述：</td>
            <td><input id="desc" type="text" name="data[desc]" class="comm_ipt" value="<?php echo $data["desc"]?>"> </td>
        </tr>
        
        <tr>
            <td class="fr" style="vertical-align:top;">缩略图：</td>
            <td><input id="img_url" type="text" class="comm_ipt" value="<?php echo $data["img_url"]?>" name="data[img_url]"> 
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
                 <textarea name="data[body]" id="data[body]" style="display:block" class="ckeditor"><?php echo $data["body"]?></textarea>
                <script type="text/javascript">
                    var editor = CKEDITOR.replace( "data[body]",{height:140,width:790,skin:"kama",menu_subMenuDelay:0,
                        toolbar : ckeditor_toolbar
                    });
                    
//                    var editor ;  
//                        if(!CKEDITOR.instances["data[body]"]){  //判定content2是否存在  
//                             editor= CKEDITOR.replace("data[body]");  
//                        }else{  
//                               addCkeditor("data[body]");  
//                        }  
//                    function addCkeditor(id){  
//                        var editor2 = CKEDITOR.instances[id];  
//                        if(editor2) editor2.destroy(true);//销毁编辑器 content2,然后新增一个  
//                            editor = CKEDITOR.replace(id);  
//                    }  
                </script>
                <p class="line-t-15"></p>
               
            </td>
        </tr>
        <tr>
            <td class="fr" style="vertical-align:top;">标签：</td>
            <td><input id="tag" type="text" class="comm_ipt" value="<?php echo $data["tag"]?>" name="data[tag]"> 
            </td>
        </tr>
        <tr>
            <td class="fr">详情模版：</td>
            <td>
                <div class="l">
                    <?php echo $this->vars->input_str(array('node'=>'tpl_content','name'=>'tpl_content','type'=>'select_single','default'=>$data["tpl_content"] ,'style'=>'style="width:200px;"'));?>              
                </div>
                <div class="l">
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="desc">内容正文模板</span>，文件名格式为 <font color=red>名称.content.php</font> 开头
                </div>
            </td>
        </tr>
        <tr>
            <td class="fr">排序：</td>
            <td><input id="forder" name="data[forder]" type="text" class="comm_ipt" value="<?php echo $data["forder"]?>"> 排序有小到大</td>
        </tr>
        <?php foreach($thisc->modelFields as $v){?>
        <tr>
            <td class="fr"><?php echo $v['title'];?>：</td>
            <td><?php echo $thisc->vars->formHtml($v,$data[$v['field']]);?></td>
        </tr>
        <?php }?>
        <thead>
                <tr><td colspan="2">相册附件</td></tr>
            </thead>
            <tr>
                <td class="fr"></td>
                <td>
                    <p class="line-t-10"></p>
                    <?php $thisc->loadUploadFile();?>
                    <p class="line-t-10"></p>

                    <ul id="attachs_select_list">
                    <?php
                    if($data[$thisc->modelName."_id"] > 0 ){
                    $resouce = $thisc->getResourceFiles($data[$thisc->modelName."_id"],$modelId);
                    
                    $html='';
                    if(is_array($resouce) && !empty($resouce)){
                        foreach($resouce as $k=>$v){
                            $html.='<li>';
                            $html.='<img src="'.$v["resource_url"].'" style="width:30px;height:30px;">';
                            $html .='<input type="hidden" id="'.$v["resource_id"].'" name="file['.$v['resource_id'].'][resourceId]" value="'.$v["resource_id"].'">';
                            $html .='<input type="hidden" id="action___'.$v["resource_id"].'" name="file['.$v['resource_id'].'][action]" value="edit">';
                            $html.='<span><input id="oname___'.$v['oname'].'" type="text" class="comm_ipt" value="'.$v['oname'].'" /></span>';
                            $html.='<em><a href="'.$v['resource_url'].'" target="_blank">查看</a>&nbsp;&nbsp;&nbsp;&nbsp;</em>';
                            $html.='<em data-resInfoId="'.$v['res_info_id'].'" onclick="deleteResource(this)" style="cursor:pointer;">删除</em></li>';
                        }
                    }
                    echo($html);
                    }
                    
                    ?></ul>
                    <p class="line-t-20"></p>

                </td>
            </tr>
    </table>
</div>
<script>
    var urls = {"save": "/back/<?php echo $thisc->controllerId; ?>/save", "del": "/back/<?php echo $thisc->controllerId; ?>/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton("{$thisc->level}02","javascript:save_data();","保存信息",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}","/back/{$thisc->controllerId}?modelId={$modelId}&cateId={$cateId}","返回列表",'btn3');?>
    </div>
</div>