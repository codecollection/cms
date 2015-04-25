
<div class="crumbs">
    <span class="cbs_left">
        <?php foreach ($minNav as $k =>$v){
            
           if($k == 0){ 
        ?>
        <b><?php echo $v['title'];?></b>
        <?php }else{ ?>
        <em>></em><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
        <?php } } ?>      
        <em>></em>管理员信息
    </span>
</div>
<p class="line-t-15"></p>
<div id="form_add">

    <input type="hidden" id="admin_id" name="id" value="<?php echo($data["admin_id"]);?>" />
    <table class="table_lists editbox">
        <thead>
            <tr><td colspan="2">基本信息</td></tr>
        </thead>
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>登录用户名：</td>
            <td><input id="aname" type="text" name="data[aname]" class="comm_ipt" value="<?php echo $data["aname"]?>"></td>
        </tr>
        <tr>
            <td class="fr"><span class="fred">* </span>真实姓名 ：</td>
            <td><input id="aname_true" type="text" name="data[aname_true]" class="comm_ipt" value="<?php echo $data["aname_true"]?>"></td>
        </tr>
        <tr>
            <td class="fr">手机号：</td>
            <td><input id="aphone" type="text" name="data[aphone]" class="comm_ipt" value="<?php echo $data["aphone"]?>"> </td>
        </tr>
        <tr>
            <td class="fr">邮  箱：</td>
            <td><input id="aemail" type="text" class="comm_ipt" name="data[aemail]" value="<?php echo $data['aemail']; ?>"></td>
        </tr>
        <tr>
            <td class="fr">Q  Q：</td>
            <td><input id="aqq" type="text" class="comm_ipt" name="data[aqq]" value="<?php echo $data['aqq']; ?>"></td>
        </tr>
        <tr>
            <td class="fr">所属组：</td>
            <td>
                <?php echo $this->vars->input_str(array('node'=>'group_id','name'=>'group_id','type'=>'select_single','default'=>$data["group_id"] = $data["group_id"] == "" ? 0 : $data["group_id"]));
                ?>
<!--                <div class="sel_box" onclick="select_single(event, this);   return false;" style="width:258px;">    
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
                </div> -->
            </td>
        </tr>
        <tr>
            <td class="fr">登录密码：</td>
            <td><input id="apass" type="text" class="comm_ipt" name="data[apass]" value="">  不为空时会修改密码</td>
        </tr>
        <?php if($data['admin_id'] > 0){ ?>
        <tr>
            <td class="fr">最近登录IP：</td>
            <td><?php echo $data["last_loginip"]?>
            </td>
        </tr>
        <tr>
            <td class="fr">最近登录时间：</td>
            <td><?php echo $thisc->echoTime($data["last_logintime"] = $data['last_logintime'] == '' ? time() : $data['last_logintime'])?>
            </td>
        </tr>
        <tr>
            <td class="fr">注册时间：</td>
            <td><?php echo $thisc->echoTime($data["reg_date"] = $data['reg_date'] == '' ? time() : $data['reg_date']);?>
            </td>
        </tr>
        <?php }?>
    </table>
</div>

<script>
    var urls = {"save": "/back/<?php echo $this->controllerId;?>/save", "del": "/back/<?php echo $this->controllerId;?>/del"};
</script>
<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
        <a href="javascript:save_data();" class="btn3">保存用户</a>
        <a href="javascript:save_data();" class="btn3">启用/禁用</a>
        <a href="/back/<?php echo $this->controllerId;?>" class="btn3">返回列表</a>
    </div>
</div>