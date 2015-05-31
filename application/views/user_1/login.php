<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php //echo $c->getItem("seo_title");?></title>
    <meta name="keywords" content="<?php // echo $c->getItem("seo_keywords");?>">
    <meta name="description" content="<?php //echo $c->getItem("seo_desc");?>">
<?php $c->loadUserView("inc.header.php");?>
    <?php $c->loadUserView("inc.nav.php");?>
<div class="wrap clearfix">
<div class="box r mright">
    <div class="box_content" style="width:500px;">
        <h1>会员登陆</h1>

        <div class="info_body">
            <table id="login_form" class="table_lists editbox">
                <tbody>
                    <tr>
                        <td class="fr td_algin">用户名：</td>
                        <td>
                            <input type="text" onkeydown="if (event.keyCode == 13)
                                        login();" id="login_name" style="width:220px;height:28px;" class="comm_ipt" value="">
                            <span class="v_result"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="fr td_algin">密&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
                        <td>
                            <input type="password" onkeydown="if (event.keyCode == 13)
                                        login();" id="login_pass" style="width:220px;height:28px;" class="comm_ipt" value="">
                            <span class="v_result"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="fr td_algin">验证码：</td>
                        <td>
                            <input type="text" onkeydown="if (event.keyCode == 13)
                                        login();" id="check_code" style="width:120px;height:28px;" class="comm_ipt" value="">
                            <a style="top:8px;left: 225px;margin-left:5px;" href="javascript:void(0);"><img onclick="document.getElementById('checkCode').src = '/app/vcode/index.php?m=vcode&amp;c=login&amp;random=' + Math.random();" id="checkCode" class="checkCode" style="border: 0;" src="/app/vcode/index.php?m=vcode&amp;c=login"></a>
                            <a onclick="document.getElementById('checkCode').src = '/app/vcode/index.php?m=vcode&amp;c=login&amp;random=' + Math.random();" style="top: 15px;" href="javascript:void(0);">看不清楚?换一个</a>
                            <span class="v_result"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="fr td_algin"></td>
                        <td><a onclick="login();" onkeydown="if (event.keyCode == 13)
                                    login();" class="btn3" href="javascript:void(0);">登&nbsp;&nbsp;&nbsp;&nbsp;录</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="line_20"></div>
    </div>
</div>
</div>
<?php $c->loadUserView("inc.footer.php");?>