
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

<!-- 查询隐藏表单-->
<div id="query_box_category" style="display:none;">
    
    <p class="line-t-20"></p>
</div>

<div class="box2 box4" style="width:100%;">
    <table class="table_lists table_click" id="form_add">
        <thead>
            <tr>
                <td style="text-align:left;width:200px;">&nbsp;&nbsp;事件类型</td>
                <td style="text-align: center;">菜单名称</td>
                <td>KEY/URL</td>
                <td width="100"><a class="btn" href="javascript:add_button();">添加顶级菜单</a> </td>
            </tr>
        </thead>
        <tbody class="tbody">
            <?php if(isset($list["menu"]["button"])){ ?>
            <?php foreach($list["menu"]["button"] as $k => $val){?>
            
            <tr id="<?php echo "form_add".$k?>">
                <td style="text-align: center">
                    <?php if(isset($val["type"])){?>
                    <select name="data[<?php echo $k;?>][type]">
                        <?php 
                        
                        foreach($this->menuType as $ky => $v){ 
                            $selected = $v["value"] == $val["type"] ? 'selected="selected"' : "";
                            echo("<option value='{$v["value"]}' {$selected} >{$v["txt"]}</option>");
                        }?>
                    </select>
                    <?php }?>
                </td>
                <td><input type="text" id="name" name="data[<?php echo $k;?>][name]" class="comm_ipt " style="width:80px;" placeholder="菜单名称" value="<?php echo $val["name"];?>"></td>
                <td>
                    <?php if(isset($val["key"]) || isset($val["url"]) || isset($val["media_id"])){?>
                    <input type="text" id="name" name="data[<?php echo $k;?>][key]" class="comm_ipt " style="width:80px;" placeholder="key/url/media_id" value="<?php echo isset($val["key"]) ? $val["key"] : ""; echo isset($val["url"]) ? $val["url"] : ""; echo isset($val["media_id"]) ? $val["media_id"] : "";?>">
                    <?php }else{echo("&nbsp;");}?>
                    </td>
                <td width="100">
                     <a class="btn" href='javascript:add_sub_button("<?php echo "#form_add".$k?>",<?php echo $k;?>);'>添加子菜单</a> 
                </td>
            </tr>
            <?php if(isset($val["sub_button"]) && !empty($val["sub_button"])){?>
            <?php foreach($val["sub_button"] as $key => $but){?>
                <tr>
                <td style="text-align: center">
                    <?php if(isset($but["type"])){?>
                    <select name="data[<?php echo $k;?>][sub_button][<?php echo $key?>][type]">
                        <?php 
                        
                        foreach($this->menuType as $ky => $v){ 
                            $selected = $v["value"] == $but["type"] ? 'selected="selected"' : "";
                            echo("<option value='{$v["value"]}' {$selected} >{$v["txt"]}</option>");
                        }?>
                    </select>
                    <?php }?>
                </td>
                <td><input type="text" id="name" name="data[<?php echo $k;?>][sub_button][<?php echo $key?>][name]" class="comm_ipt " style="width:80px;" placeholder="菜单名称" value="<?php echo $but["name"];?>"></td>
                <td><input type="text" id="name" name="data[<?php echo $k;?>][sub_button][<?php echo $key?>][key]" class="comm_ipt " style="width:80px;" placeholder="key/url/media_id" value="<?php echo isset($but["key"]) ? $but["key"] : ""; echo isset($but["url"]) ? $but["url"] : ""; echo isset($but["media_id"]) ? $but["media_id"] : "";?>"></td>
                <td width="100">
                    &nbsp;
                </td>
            </tr>
                      
            <?php }?>
            <?php }?>
            <?php }?>
            <?php  }?>
            
        </tbody>
    </table>
    <table class="table_lists table_click">
        <thead>
            <tr>
                <td width="40"><input type="checkbox"  onclick="C.form.check_all('.chk_list');"></td>
                <td>自定义菜单内容</td>
                <td width="100">操作</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="40"><input type="checkbox" class="chk_list" value="1"></td>
                <td ><textarea style="height:100px;"><?php echo RKit::json_encode_ch($list);?></textarea></td>
                <td width="100">&nbsp;</td>
            </tr>
        </tbody>
    </table>
</div>
<p class="line-t-20"></p>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <?php //$thisc->echoButton("{$thisc->level}02","/back/{$this->controllerId}/add","添加一级菜单",'btn3');?>
        <a href="javascript:save_data();" class="btn3">提交</a>
        <?php $thisc->echoButton("{$thisc->level}02","javascript:save_data();","保存菜单",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}02","javascript:del_data();","批量删除",'btn3');?>
    </div>
</div>
<script>
    var urls = {"save": "/back/<?php echo $this->controllerId?>/save", "del": "/back/<?php echo $this->controllerId?>/delete","status":"/back/<?php echo $this->controllerId?>/status"};
</script>
<script>
    var optionHtml = "<?php foreach($this->menuType as $k => $v){ echo("<option value='{$v["value"]}'>{$v["txt"]}</option>"); }?>";
    
    function add_sub_button(id,index){
        
        var length_tr = $(".tbody tr").length +1;;
        
        var html = '<tr id="form_add'+length_tr+'" index-value="'+index+'">';
        html += '<td><select name=data['+index+'][sub_button]['+length_tr+'][type]>'+ optionHtml+'</select></td>';
        html += '<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="name" name="data['+index+'][sub_button]['+length_tr+'][name]" class="comm_ipt " style="width:80px;" placeholder="菜单名称" value=""></td>';
        html += '<td><input type="text" id="name" name="data['+index+'][sub_button]['+length_tr+'][key]" class="comm_ipt " style="width:80px;" placeholder="key/url/media_id" value=""></td>';
        html += '<td>&nbsp;</td>';
        $(id).after(html);
        
        if($(id + " td").length >2){
            $(id + " td:eq(0)").find("select").remove();
            $(id + " td:eq(2)").find("input").remove();
        }
    }
    
    function add_button(){
        
        var length_tr = $(".tbody tr").length +1;
        
        var html = '<tr id="form_add'+length_tr+'">';
        html += '<td class="sel_box"><select name=data['+length_tr+'][type]>'+ optionHtml+'</select></td>';
        html += '<td><input type="text" id="name" name="data['+length_tr+'][name]" class="comm_ipt " style="width:80px;" placeholder="菜单名称" value=""></td>';
        html += '<td><input type="text" id="name" name="data['+length_tr+'][key]" class="comm_ipt " style="width:80px;" placeholder="key/url/media_id" value=""></td>';
        html += '<td><a class="btn" href=\'javascript:add_sub_button("#form_add'+length_tr+'",'+length_tr+');\'>添加子菜单</a>    </td>';
        $(".tbody").append(html);
    }
    
</script>