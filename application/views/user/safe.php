<div id="bind_form">
    <table class="table_lists editbox">
        <thead>
            <tr><td colspan="2"><?php echo $actionName;?></td></tr>
        </thead>
        <tbody>
            
            <?php if($phone){?>
            <th>绑定手机号</th>
            <tr>
                <td width="150" class="fr">手机号码：</td>
                <td>
                    <input type="text" id="uphone" name="uphone" class="comm_ipt" value="<?php echo $user["uphone"];?>"> 
                </td>
            </tr>
            <tr>
                <td width="150" class="fr">数字验证：</td>
                <td>
                    <input type="text" id="phonecode" name="phonecode" class="comm_ipt" value="" style="width:150px;float:left"> 
                    <div class="fl" style="float:left"><img id="pcode" src="/user/captcha?type=1&t=<?php echo time();?>" alt="点击换一张"></div>
                </td>
            </tr>
            <?php }?>
            <?php if($email){?>
            <th>绑定邮箱</th>
            <tr>
                <td width="150" class="fr">邮箱地址：</td>
                <td>
                    <input type="text" id="uemail" name="uemail" class="comm_ipt" value="<?php echo $user["uemail"];?>"> 
                </td>
            </tr>

            <tr>
                <td width="150" class="fr">数字验证：</td>
                <td>
                    <input type="text" id="emailcode" name="emailcode" class="comm_ipt fl" value="" style="width:150px;float:left"> 
                    <div class="fl" style="float:left"><img id="ecode" src="/user/captcha?type=2&t=<?php echo time();?>" alt="点击换一张"></div>
                </td>
            </tr>
            <?php }?>
            <tr>
                <td width="150" class="fr">&nbsp;</td>
                <td>
                    <span></span> <a href="javascript:doBind();" class="btn3" style="color:#FFFFFF">确定</a>
                </td>
            </tr>
        </tbody>

    </table>
</div>

<p class="line-t-20"></p>
<!--<div class="footer_fixed">
    <div class="box_1000">
        <span>操作：</span>
         <a href="/back/cate/add" class="btn3">绑定</a> 
    </div>
</div>-->
