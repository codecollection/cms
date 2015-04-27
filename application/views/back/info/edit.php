
<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>  
        <em>></em>分类信息
    </span>
</div>
<p class="line-t-15"></p>

<div id="form_add">

    <input type="hidden" id="cate_id" name="id" value="<?php //echo($data["cate_id"]);?>" />
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
            <td><input id="cname" type="text" name="data[cname]" class="comm_ipt" value="<?php //echo $data["cname"]?>"></td>
        </tr>
        <tr>
            <td class="fr">描述：</td>
            <td><input id="cnick" type="text" name="data[cnick]" class="comm_ipt" value="<?php //echo $data["cnick"]?>"> 用于手机等小设备显示简短分类名称</td>
        </tr>
        
        <tr>
            <td class="fr" style="vertical-align:top;">缩略图：</td>
            <td><input id="clogo" type="text" class="comm_ipt" value="<?php // echo $data["clogo"]?>" name="data[clogo]"> 
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=clogo" width="100%" scrolling="no" height="100%" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>

                <div class="slt_small" style="right:228px;">
                    <img id="thumb_clogo" src="/style/back/image/upload-pic.png<?php //echo $data["clogo"] = $data['clogo'] == '' ? "/style/back/image/upload-pic.png" : $data["clogo"]; ?>" />                    
                </div>
            </td>
        </tr>
        <tr>
            <td class="fr">详情：</td>
            <td>&nbsp;<input id="cnick" type="text" name="data[cnick]" class="comm_ipt" value="<?php //echo $data["cnick"]?>"> 
            </td>
        </tr>
        <tr>
            <td class="fr" style="vertical-align:top;">标签：</td>
            <td><input id="clogo" type="text" class="comm_ipt" value="<?php // echo $data["clogo"]?>" name="data[clogo]"> 
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
            <td><input id="cdomain" name="data[cdomain]" type="text" class="comm_ipt" value="<?php //echo $data["cdomain"]?>"> 排序有小到大</td>
        </tr>
        <?php foreach($fields as $v){?>
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