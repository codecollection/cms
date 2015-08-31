<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $c->getItem("seo_title"); ?>﹣<?php echo $cate["cname"]?></title>
        <meta name="keywords" content="<?php echo $c->getItem("seo_keywords"); ?>">
        <meta name="description" content="<?php echo $c->getItem("seo_desc"); ?>">
        <?php $c->loadView("front/" . TEMPLATE . "/inc.nav.php"); ?>
    </head>
    <body>
        <?php $c->loadView("front/" . TEMPLATE . "/inc.header.php"); ?>
       
        <div class="main">
            <div class="line_10"></div>
            <div class="wrap snav">
                当前位置<em>:</em><a href="/">首页</a>
                <em>&gt;</em><a href="<?php //echo $cate["surl"];   ?>"><?php echo $cate["cname"]; ?></a>        </div>
            <div class="line_10"></div>
            <div class="wrap clearfix">
                <div class="l mleft">
                    <div class="box confbg">
                        <div class="box_content">
                            <ul>
                                <?php $cates = $c->getCate($cid);
                                ?>
                                <?php
                                if (isset($cates["son"]) && !empty($cates["son"])) {
                                    foreach ($cates["son"] as $k => $ct) {
                                        ?>
                                        <li><a href="<?php echo $ct["surl"]; ?>" class="tit"><?php echo $ct["cname"]; ?></a></li>                                  <?php } ?>
                                    <?php
                                } else {
                                    $cates = $c->getCate();
                                    foreach ($cates as $k => $ct) {

                                        if ($ct["nav_show"] != 1) {
                                            continue;
                                        }
                                        ?>
                                        <li><a href="<?php echo $ct["surl"]; ?>" class="tit"><?php echo $ct["cname"]; ?></a></li> 
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box_tit">公司动态</div>
                        <div class="box_con">
                            <ul>
                                <?php $l3 = $c->getList3(1, 5); ?>
                                <?php foreach ($l3 as $k => $v) { ?>
                                <li><a href="<?php echo $v["surl"]; ?>"><?php echo $v["title"]; ?></a></li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="line_5"></div>
                    </div>
                    <div class="line_20"></div>
                    <?php $c->loadView("front/" . TEMPLATE . "/inc.contact.php"); ?>
                </div>
                <div class="r mright">
                    <div class="box confbg">
                        <div class="box_content">

                            <h1>给我留言</h1>

                            <div class="info_body">
                                <table class="table_lists" id="msg_form">
                                    <tbody>
                                        <tr>
                                            <td style="text-align:right;"><span class="fim">*</span>姓名：</td>
                                            <td><div style="float:left;margin-left:10px;"><input placeholder="" class="comm_ipt" id="" name="extern___true_name" value="" type="text"></div><div style="float:left;margin-left:10px;">不为空</div></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:right;"><span class="fim">*</span>电话：</td><td><div style="float:left;margin-left:10px;"><input placeholder="" class="comm_ipt" id="" name="extern___phone" value="" type="text"></div><div style="float:left;margin-left:10px;">不为空</div></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:right;"><span class="fim">*</span>内容：</td><td><div style="float:left;margin-left:10px;">
                                                    <textarea placeholder="" class="comm_ipt" style="height:80px;" id="" name="extern___content"></textarea></div>
                                                <div style="float:left;margin-left:10px;">不为空</div></td>
                                        </tr>                                
                                        <tr>
                                            <td></td>
                                            <td>&nbsp;&nbsp;<a class="btn" href="javascript:void(0);" onclick="save_message();">我要留言</a></td>
                                        </tr>
                                    </tbody></table>

                            </div>
                            <div class="line_20"></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="line_20"></div>
        </div>
        <?php $c->loadView("front/" . TEMPLATE . "/inc.footer.php"); ?>

    </body>
</html>