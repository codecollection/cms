<div id="info_form">
    <table class="table_lists editbox">
        <input type="hidden" id="id" name="id" value="<?php echo $user['user_id']?>" />
        <thead>
            <tr><td colspan="2">基本设置</td></tr>
        </thead>
        <tbody>
            <!--<tr>

                <td style="vertical-align:top;" class="fr"><p class="line-t-10"></p>头像：</td>
                <td>
                    <p class="line-t-10"></p><input type="text" value="" style="width:400px;" class="comm_ipt" id="info_img"> 用于列表显示的缩略图，你也可以 <a onclick="$('#info_img').val('');
                            $('.slt_small').html('&lt;img src=/static/sty_default/images/upload-pic.png /&gt;');" href="javascript:void(0);">取消缩略图</a>
                    <p class="line-t-10"></p>
                    <div style="float:left;width:119px;height:30px;overflow:hidden;margin-right:10px;">
                        <iframe width="100%" height="100%" frameborder="no" marginwidth="0" border="0" marginheight="0" allowtransparency="yes" scrolling="no" src="/app/cms/upload.form.php?type=single_upload&amp;id=info_img"></iframe>
                    </div>
                    <div class="slt_small">
                        <img src="/static/sty_default/images/upload-pic.png" id="thumb_info_img">                        </div>
                </td>
            </tr -->
            <tr>
                <td width="150" class="fr">昵称：</td>
                <td>
                    <input type="text" id="unick" name="data[unick]" class="comm_ipt" value="<?php echo $user["unick"];?>"> 给自己取一个响亮的名字吧！
                </td>
            </tr>

            <tr>
                <td width="150" class="fr">用户名：</td>
                <td>
                    <span><?php echo $user["uname"]; ?></span>
                </td>
            </tr>
<!--            <tr>
                <td width="150" class="fr">手机账号：</td>
                <td>
                    <span><?php echo empty($user["uphone"]) ? "未绑定" : $user["uphone"] ; ?></span> <a href="/user/safe?type=phone"><?php  echo empty($user["uphone"]) ? "去绑定" : "更改"; ?></a>
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">密保邮箱：</td>
                <td>
                    <span><?php echo empty($user["uemail"]) ? "未绑定" : $user["uemail"] ; ?></span> <a href="/user/safe?type=email"><?php  echo empty($user["uemail"]) ? "去绑定" : "更改"; ?></a>
                </td>
            </tr>-->
            <tr>
                <td width="150" class="fr">Q Q：</td>
                <td>
                    <input type="text" id="uqq" name="data[uqq]" class="comm_ipt" value="<?php echo $user["uqq"];?>">
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">微信：</td>
                <td>
                    <input type="text" name="data[uweixin]" id="uweixin" class="comm_ipt" value="<?php echo $user["uweixin"];?>">
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">性别：</td>
                <td>
                    男: <input type="radio" name="data[gender]" value="0" <?php echo $user["gender"] != 1 ? 'checked="checked"' : "";?>/> &nbsp;&nbsp;&nbsp;&nbsp;
                    女: <input type="radio" name="data[gender]"  value="1" <?php echo $user["gender"] == 1 ? 'checked="checked"' : "";?>/>
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">生日：</td>
                <td>
                    <input type="text" class="comm_ipt" name="data[birth_day]" onclick="new Calendar().show(this);" value="<?php echo $thisc->echoTime($user["birth_day"]);?>">
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">城市：</td>
                <td>
                    <input type="text" id="city" class="comm_ipt"  name="data[city]" value="<?php echo $user["city"];?>">
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">个性签名：</td>
                <td>
                    <textarea name="data[motto]"><?php echo $user["motto"] ?></textarea>
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">&nbsp;</td>
                <td>
                    <span></span> <a href="javascript:save();" class="btn3" style="color:#FFFFFF">确定</a>
                </td>
            </tr>
        </tbody>

    </table>
</div>