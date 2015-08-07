
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

    <input type="hidden" id="user_id" name="id" value="<?php echo($data["user_id"]);?>" />
    <table class="table_lists editbox">
        <thead>
            <tr><td colspan="2">基本信息</td></tr>
        </thead>
        <tr>
            <td width="150" class="fr"><span class="fred">* </span>登录用户名：</td>
            <td><input id="uname" type="text" name="data[uname]" class="comm_ipt" value="<?php echo $data["uname"]?>"></td>
        </tr>
        <tr>
            <td class="fr"><span class="fred"> </span>昵称 ：</td>
            <td><input id="unick" type="text" name="data[unick]" class="comm_ipt" value="<?php echo $data["unick"]?>"></td>
        </tr>
        <tr>
            <td class="fr">手机号：</td>
            <td><input id="uphone" type="text" name="data[uphone]" class="comm_ipt" value="<?php echo $data["uphone"]?>"> </td>
        </tr>
        <tr>
            <td class="fr">邮  箱：</td>
            <td><input id="uemail" type="text" class="comm_ipt" name="data[uemail]" value="<?php echo $data['uemail']; ?>"></td>
        </tr>
        <tr>
            <td class="fr">Q  Q：</td>
            <td><input id="uqq" type="text" class="comm_ipt" name="data[uqq]" value="<?php echo $data['uqq']; ?>"></td>
        </tr>
        <tr>
            <td class="fr">微信号：</td>
            <td><input id="uweixin" type="text" class="comm_ipt" name="data[uweixin]" value="<?php echo $data['uweixin']; ?>"></td>
        </tr>
        <tr>
            <td class="fr">个性说明：</td>
            <td><input id="motto" type="text" class="comm_ipt" name="data[motto]" value="<?php echo $data['motto']; ?>"></td>
        </tr>
        <tr>
            <td class="fr">所属组：</td>
            <td>
                <?php echo $this->vars->input_str(array('node'=>'group_id','name'=>'group_id','type'=>'select_single','default'=>$data["group_id"] = $data["group_id"] == "" ? 0 : $data["group_id"]));
                ?>
            </td>
        </tr>
        <tr>
            <td class="fr">登录密码：</td>
            <td><input id="upass" type="text" class="comm_ipt" name="data[upass]" value="">  不为空时会修改密码</td>
        </tr>
        <?php if($data['user_id'] > 0){ ?>
        <tr>
            <td class="fr">最近登录IP：</td>
            <td><?php echo $data["last_login_ip"]?>
            </td>
        </tr>
        <tr>
            <td class="fr">最近登录时间：</td>
            <td><?php echo $thisc->echoTime($data["last_login_date"] = $data['last_login_date'] == '' ? time() : $data['last_login_date'])?>
            </td>
        </tr>
        <tr>
            <td class="fr">注册时间：</td>
            <td><?php echo $thisc->echoTime($data["reg_date"] = $data['reg_date'] == '' ? time() : $data['reg_date']);?>
            </td>
        </tr>
        <tr>
            <td class="fr">注册IP：</td>
            <td><?php echo $data["reg_ip"];?>
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
        <?php $thisc->echoButton("{$thisc->level}01","javascript:save_data();","保存用户",'btn3');?>
        <?php $thisc->echoButton("{$thisc->level}","/back/{$thisc->controllerId}","返回列表",'btn3');?>
    </div>
</div>