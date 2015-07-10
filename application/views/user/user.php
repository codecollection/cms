<div id="info_form">
    <table class="table_lists editbox">
        <thead>
            <tr><td colspan="2">基本设置</td></tr>
        </thead>
        <tbody>
            <tr>
                <td width="150" class="fr">昵称：</td>
                <td>
                    <?php echo $user["unick"];?>
                </td>
            </tr>

            <tr>
                <td width="150" class="fr">用户名：</td>
                <td>
                    <span><?php echo $user["uname"]; ?></span>
                </td>
            </tr>
            <tr>
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
            </tr>
            <tr>
                <td width="150" class="fr">Q Q：</td>
                <td>
                    <?php echo $user["uqq"];?>
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">微信：</td>
                <td>
                    <?php echo $user["uweixin"];?>
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">性别：</td>
                <td>
                    男: <input type="radio" name="gender" value="0" <?php echo $user["gender"] != 1 ? 'checked="checked"' : "";?>/> &nbsp;&nbsp;&nbsp;&nbsp;
                    女: <input type="radio" name="gender"  value="1" <?php echo $user["gender"] == 1 ? 'checked="checked"' : "";?>/>
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">生日：</td>
                <td>
                    <?php echo $thisc->echoTime($user["birth_day"]);?>
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">城市：</td>
                <td>
                    <?php echo $user["city"];?>
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">个性签名：</td>
                <td>
                    <p><?php echo $user["motto"] ?></p>
                </td>
            </tr>
        </tbody>

    </table>
</div>