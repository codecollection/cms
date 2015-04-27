
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
    <table class="table_lists editbox">
        
        <?php ?>
        <tr>
            <td width="150" class="fr">文档分类：</td>
            <td>
                <span class="l">
                   <?php 
                    //$fields = $thisc->cate->show_select();
                    //array_unshift($fields, array('value'=>0,"txt"=>"顶级分类","txt_color"=>""));
                    //$this->vars->set_fields("parent_id",$fields);
                    //echo $this->vars->input_str(array('node'=>'parent_id','name'=>'parent_id','type'=>'select_single','default'=>$data["parent_id"] = $data["parent_id"] == "" ? 0 : $data["parent_id"],'style'=>'style="width:200px;"'));
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
            <td><input id="desc" type="text" name="data[desc]" class="comm_ipt" value="<?php echo $data["desc"]?>"> 用于手机等小设备显示简短分类名称</td>
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
                <textarea name="data[body]" id="body" style="display:block"><?php echo $data["body"]?></textarea>
                <script type="text/javascript" src="/libs/ckeditor/ckeditor.js?t=<?php echo(time());?>"></script>
                <script type="text/javascript">
                    var body = CKEDITOR.replace( "body",{height:140,width:790,skin:"kama",menu_subMenuDelay:0,
                        toolbar : ckeditor_toolbar
                    });
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
                    <div class="sel_box" onclick="select_single(event, this); return false;" style="width:258px;">    
                        <a href="javascript:void(0);" class="txt_box" id="txt_box">        
                            <div class="sel_inp" id="sel_inp">默认</div>        
                            <input type="hidden" name="data[tpl_content]" id="tpl_content" value="" class="sel_subject_val">    
                        </a>    
                        <div class="sel_list" id="sel_list" style="display:none;">        
                            <a href="javascript:void(0);" value="" class="" >默认</a>        
                            <a href="javascript:void(0);" value="tpl.content.php" class="" >tpl.content.php</a>        
                            <a href="javascript:void(0);" value="tpl.content.single.php" class="" >tpl.content.single.php</a>    
                        </div>
                    </div>                
                </div>
                <div class="l">
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="desc">内容正文模板</span>，文件名以 <font color=red>tpl.content</font> 开头
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
            <td><?php echo $thisc->vars->formHtml($v);?></td>
        </tr>
        <?php }?>
    </table>
</div>

<script>
    var urls = {"save": "/back/<?php echo $thisc->controllerId; ?>/save", "del": "/back/<?php echo $thisc->controllerId; ?>/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php $thisc->echoButton("{$thisc->level}02","javascript:save_data();","保存信息",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}","/back/{$thisc->controllerId}","返回列表",'btn3');?>
    </div>
</div>