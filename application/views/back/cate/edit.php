
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

    <input type="hidden" id="cate_id" name="id" value="<?php echo($data["cate_id"]);?>" />
    <table class="table_lists editbox">
        <thead>
            <tr><td colspan="2">基本信息</td></tr>
        </thead>
        <tr>
            <td width="150" class="fr">上级分类：</td>
            <td>
                <span class="l">
                    <?php 
                    $fields = $thisc->cate->show_select();
                    array_unshift($fields, array('value'=>0,"txt"=>"顶级分类","txt_color"=>""));
                    $this->vars->set_fields("parent_id",$fields);
                    echo $this->vars->input_str(array('node'=>'parent_id','name'=>'parent_id','type'=>'select_single','default'=>$data["parent_id"] = $data["parent_id"] == "" ? 0 : $data["parent_id"],'style'=>'style="width:200px;"'));
                    ?>                
                </span>
            </td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>分类名称 ：</td>
            <td><input id="cname" type="text" name="data[cname]" class="comm_ipt" value="<?php echo $data["cname"]?>"></td>
        </tr>
        <tr>
            <td class="fr">分类别名：</td>
            <td><input id="cnick" type="text" name="data[cnick]" class="comm_ipt" value="<?php echo $data["cnick"]?>"> 用于手机等小设备显示简短分类名称</td>
        </tr>
        <tr>
            <td class="fr">排序：</td>
            <td><input id="corder" type="text" class="comm_ipt" name="data[corder]" value="<?php echo $data['corder'] = $data["corder"] == '' ? '0' : $data['corder'] ; ?>"> 数字小排前面</td>
        </tr>
        <tr>
            <td class="fr">导航显示：</td>
            <td>
                <span class="l" style="line-height:200%;">PC站导航&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                <span class="l">
                    <?php echo $thisc->vars->input_str(array("node"=>"nav_show","default"=>$data["nav_show"]= $data["nav_show"] == "" ? 0 : $data["nav_show"],"type"=>"select_single","name"=>"nav_show"));?>

                </span>
                <span class="l" style="line-height:200%;">&nbsp;&nbsp;&nbsp;&nbsp;WAP站导航&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class="l">
                    <?php echo $thisc->vars->input_str(array("node"=>"nav_show","default"=>$data["nav_show_wap"]= $data["nav_show_wap"] == "" ? 0 : $data["nav_show_wap"],"type"=>"select_single","name"=>"nav_show_wap"));?>
                </span>
            </td>
        </tr>
        <tr>
            <td class="fr" style="vertical-align:top;">分类图片：</td>
            <td><input id="clogo" type="text" class="comm_ipt" value="<?php echo $data["clogo"]?>" name="data[clogo]"> 可用于图片导航条，或者分类LOGO图/广告图等
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=clogo" width="100%" scrolling="no" height="100%" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>

                <div class="slt_small" style="right:228px;">
                    <img id="thumb_clogo" src="<?php echo $data["clogo"] = $data['clogo'] == '' ? "/style/back/image/upload-pic.png" : $data["clogo"]; ?>" />                    
                </div>
            </td>
        </tr>
        <tr>
            <td class="fr" style="vertical-align:top;">分类替换图片：</td>
            <td><input id="clogo_hover" type="text" name="data[clogo_hover]" class="comm_ipt" value="<?php echo $data["clogo_hover"]?>"> 分类图片鼠标移动替换效果图，保持跟分类图片一致
                <p class="line-t-10"></p>
                <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                    <iframe src="/back/upload?vid=clogo_hover" width="100%" scrolling="no" height="100%" frameborder="no" allowtransparency="yes" marginheight="0"  border="0" marginwidth="0"></iframe>
                </div>

                <div class="slt_small" style="right:228px;">
                    <img id="thumb_clogo_hover" src="<?php echo $data["clogo_hover"] = $data['clogo_hover'] == '' ? "/style/back/image/upload-pic.png" : $data["clogo_hover"]; ?>" />                    
                </div>
            </td>
        </tr>
        <tr>
            <td class="fr">绑定域名：</td>
            <td><input id="cdomain" name="data[cdomain]" type="text" class="comm_ipt" value="<?php echo $data["cdomain"]?>"> 当前分类作为一个独立域名频道，该域名指向目录跟主站一致</td>
        </tr>
        <tr>
            <td class="fr">跳转地址：</td>
            <td><input id="go_url" type="text" class="comm_ipt" value="<?php echo $data["cdomain"]?>" name="data[go_url]"> 当前分类链接跳转到其他页面，优先级高于绑定域名</td>
        </tr>
        <tr>
            <td class="fr">绑定广告位：</td>
            <td>
                <div class="sel_box" onclick="select_single(event, this);   return false;" style="width:258px;">    
                    <a href="javascript:void(0);" class="txt_box" id="txt_box">        
                        <div class="sel_inp" id="sel_inp">-</div>        
                        <input type="hidden" name="data[ad_id]" id="area_id" value="" class="sel_subject_val">    
                    </a>    
                    <div class="sel_list" id="sel_list" style="display:none;">        
                        <a href="javascript:void(0);" value="0" class="" >请选择广告位</a>        
                        <a href="javascript:void(0);" value="3" class="" >手机版幻灯</a>        
                        <a href="javascript:void(0);" value="2" class="" >全站左侧图片列表</a>        
                        <a href="javascript:void(0);" value="1" class="" >首页全屏幻灯</a>    
                    </div>
                </div>                
            </td>
        </tr>
        <thead>
            <tr><td colspan="2">模板信息</td></tr>
        </thead>
        <tr>
            <td class="fr">封面模版：</td>
            <td>
                <div class="l">
                    <div class="sel_box" onclick="select_single(event, this); return false;" style="width:258px;">    
                        <a href="javascript:void(0);" class="txt_box" id="txt_box">        
                            <div class="sel_inp" id="sel_inp">默认</div>        
                            <input type="hidden" name="data[tpl_index]" id="tpl_index" value="" class="sel_subject_val">    
                        </a>    
                            <div class="sel_list" id="sel_list" style="display:none;">        <a href="javascript:void(0);" value="" class="" >默认</a>        <a href="javascript:void(0);" value="tpl.cover.php" class="" >tpl.cover.php</a>    
                            </div>
                        </div>                
                </div>
                <div class="l">
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="desc">频道栏目封面模板，一般没有分页</span>，文件名以 <font color=red>tpl.cover</font> 开头
                </div>
            </td>
        </tr>
        <tr>
            <td class="fr">列表模板：</td>
            <td>
                <div class="l">
                    <div class="sel_box" onclick="select_single(event, this); return false;" style="width:258px;">    
                        <a href="javascript:void(0);" class="txt_box" id="txt_box">        
                            <div class="sel_inp" id="sel_inp">默认</div>        
                            <input type="hidden" name="data[tpl_list]" id="tpl_list" value="" class="sel_subject_val">    
                        </a>    
                        <div class="sel_list" id="sel_list" style="display:none;">        
                            <a href="javascript:void(0);" value="" class="" >默认</a>        
                            <a href="javascript:void(0);" value="tpl.list.anli.php" class="" >tpl.list.anli.php</a>        
                            <a href="javascript:void(0);" value="tpl.list.img.php" class="" >tpl.list.img.php</a>        
                            <a href="javascript:void(0);" value="tpl.list.php" class="" >tpl.list.php</a>        
                            <a href="javascript:void(0);" value="tpl.list.single.php" class="" >tpl.list.single.php</a>    
                        </div>
                    </div>                
                </div>
                <div class="l">
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="desc">分类列表模板，一般有分页</span>，文件名以 <font color=red>tpl.list</font> 开头
                </div>
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
        <thead>
            <tr><td colspan="2">其他信息</td></tr>
        </thead>

        <tr>
            <td class="fr">SEO标题(title)：</td>
            <td><textarea name="data[ctitle]" id="ctitle"><?php echo $data["ctitle"]?></textarea></td>
        </tr>
        <tr>
            <td class="fr">SEO关键词(keywords)：</td>
            <td><textarea name="data[ckey]" id="ckey"><?php echo $data["ckey"]?></textarea></td>
        </tr>
        <tr>
            <td class="fr">SEO描述(description)：</td>
            <td><textarea name="data[cdesc]" id="cdesc"><?php echo $data["cdesc"]?></textarea></td>
        </tr>
        <tr>
            <td class="fr" style="vertical-align: top;">分类简介：</td>
            <td>可用于把当前分类作为一个单页面，或者分类下文字图片介绍等
                <p class="line-t-10"></p>
                <textarea name="data[cintro]" id="cintro" style="display:block"><?php echo $data["cintro"]?></textarea>
                <p class="line-t-15"></p>
            </td>
        </tr>
         <tr>
            <td class="fr" style="vertical-align: top;">扩展信息：</td>
            <td>可以存放一些额外的信息，如果是否最热分类等，json格式数据，根据具体业务流程确定信息
                <p class="line-t-10"></p>
                <textarea name="data[extern]" id="extern" style="display:block"><?php echo $data["extern"]?></textarea>
                <p class="line-t-15"></p>
            </td>
        </tr>
    </table>
</div>

<script>
    var urls = {"save": "/back/cate/save", "del": "/back/cate/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="javascript:save_data();" class="btn3">保存分类</a>
        <a href="/back/cate" class="btn3">返回分类</a>
    </div>
</div>