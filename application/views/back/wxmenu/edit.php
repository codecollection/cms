<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>编辑用户组 
    </span>
</div>
<p class="line-t-20"></p>

<div id="form_add-bck">

    <input type="hidden" id="id" name="id" value="<?php //echo($data["id"]);?>" />
    <table class="table_lists editbox">
    
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>事件类型：</td>
            <td>
                <?php 
                    $this->vars->set_fields("wxmenuType",$this->menuType);
                    echo $this->vars->input_str(array('node'=>'wxmenuType','name'=>'type','type'=>'select_single','default'=>"click",'style'=>'style="width:200px;"'));
                    ?></td>
        </tr>
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>菜单名称：</td>
            <td><input id="name" type="text" name="data[name]" class="comm_ipt" value="<?php //echo $data["name"]?>"></td>
        </tr>
        <tr>
            <td width="150" class="fr">KEY：</td>
            <td><input id="name" type="text" name="data[key]" class="comm_ipt" value="<?php //echo $data["name"]?>"> click等点击类型必须</td>
        </tr>
        <tr>
            <td width="150" class="fr">URL：</td>
            <td><input id="name" type="text" name="data[url]" class="comm_ipt" value="<?php //echo $data["name"]?>"> view类型必须</td>
        </tr>
        <tr>
            <td width="150" class="fr">media_id ：</td>
            <td><input id="name" type="text" name="data[media_id ]" class="comm_ipt" value="<?php //echo $data["name"]?>"> media_id类型和view_limited类型必须 </td>
        </tr>
    </table>
</div>

<div class="box2 box4" style="width:100%;">
    <table class="table_lists table_click" id="form_add">
        <thead>
            <tr>
                <td width="40"><input type="checkbox"  onclick="C.form.check_all('.chk_list');"></td>
                <td>菜单事件</td>
                <td>菜单名称</td>
                <td>key/url</td>
                <td width="100"><a class="btn" href="javascript:add_button();">添加顶级菜单</a> </td>
            </tr>
        </thead>
        <tbody class="tbody">
           
            <tr id="form_add1">
                
                <td>&nbsp;</td>
                <td>
                    <select name="data[1][type]">
                        <?php foreach($this->menuType as $k => $v){ echo("<option value='{$v["value"]}'>{$v["txt"]}</option>"); }?>
                    </select>
                </td>
                <td><input type="text" id="name" name="data[1][name]" class="comm_ipt " style="width:80px;" placeholder="菜单名称" value=""></td>
                <td><input type="text" id="name" name="data[1][key]" class="comm_ipt " style="width:80px;" placeholder="key/url/media_id" value=""></td>
                <td>
                    <a class="btn" href='javascript:add_sub_button("#form_add1",1);'>添加子菜单</a>        
                </td>
        </tr>
        </tbody>
    </table>
</div>
<script>
    var urls = {"save": "/back/<?php echo $this->controllerId;?>/save", "del": "/back/<?php echo $this->controllerId;?>/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="javascript:save_data();" class="btn3">提交</a>
        <a href="/back/<?php echo $this->controllerId;?>" class="btn3">返回列表</a>
    </div>
</div>
<script>
    var optionHtml = "<?php foreach($this->menuType as $k => $v){ echo("<option value='{$v["value"]}'>{$v["txt"]}</option>"); }?>";
    
    function add_sub_button(id,index){
        
        var length_tr = $(".tbody tr").length +1;;
        
        var html = '<tr id="form_add'+length_tr+'" index-value="'+index+'">';
        html += '<td>&nbsp;</td>';
        html += '<td><select name=data['+index+'][sub_button]['+length_tr+'][type]>'+ optionHtml+'</select></td>';
        html += '<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="name" name="data['+index+'][sub_button]['+length_tr+'][name]" class="comm_ipt " style="width:80px;" placeholder="菜单名称" value=""></td>';
        html += '<td><input type="text" id="name" name="data['+index+'][sub_button]['+length_tr+'][key]" class="comm_ipt " style="width:80px;" placeholder="key/url/media_id" value=""></td>';
        html += '<td>&nbsp;</td>';
        $(id).after(html);
        
        if($(id + " td").length >2){
            $(id + " td:eq(1)").find("select").remove();
            $(id + " td:eq(3)").find("input").remove();
        }
    }
    
    function add_button(){
        
        var length_tr = $(".tbody tr").length +1;
        
        var html = '<tr id="form_add'+length_tr+'">';
        html += '<td>&nbsp;</td>';
        html += '<td class="sel_box"><select name=data['+length_tr+'][type]>'+ optionHtml+'</select></td>';
        html += '<td><input type="text" id="name" name="data['+length_tr+'][name]" class="comm_ipt " style="width:80px;" placeholder="菜单名称" value=""></td>';
        html += '<td><input type="text" id="name" name="data['+length_tr+'][key]" class="comm_ipt " style="width:80px;" placeholder="key/url/media_id" value=""></td>';
        html += '<td><a class="btn" href=\'javascript:add_sub_button("#form_add'+length_tr+'",'+length_tr+');\'>添加子菜单</a>    </td>';
        $(".tbody").append(html);
    }
</script>