<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $cate["cname"];?></title>
    <?php $c->loadView("wap/" . TEMPLATE . "/inc.nav.php"); ?>  
</head>
<body>
    <?php $c->loadView("wap/" . TEMPLATE . "/inc.header.php"); ?> 
    <section>
        <h1 class="info_tit tit1">给我留言</h1>
        <div class="info_body">
            <table class="table_lists" id="msg_form">
                <tr>
                    <td style="text-align:right;"><span class="fim">*</span>姓名：</td><td><div style="float:left;margin-left:10px;"><input placeholder="" type="text" class="comm_ipt" id="nick_name" name="data[nick_name]" value=""></div><div style="float:left;margin-left:10px;">不为空</div></td>
                </tr>
                <tr>
                    <td style="text-align:right;"><span class="fim">*</span>电话：</td><td><div style="float:left;margin-left:10px;"><input placeholder="" type="text" class="comm_ipt" id="phone" name="data[phone]" value=""></div><div style="float:left;margin-left:10px;">不为空</div></td>
                </tr>
                <tr>
                    <td style="text-align:right;"><span class="fim">*</span>内容：</td><td><div style="float:left;margin-left:10px;"><textarea placeholder="" class="comm_ipt" style="height:50px;" id="content" name="data[content]"></textarea></div><div style="float:left;margin-left:10px;">不为空</div></td>
                </tr>                
                <tr>
                    <td></td><td>&nbsp;&nbsp;<a class="btn" href="javascript:void(0);" onclick="save_message();">我要留言</a></td>
                </tr>
            </table>

        </div>
        <div class="line_20"></div>
    </section>
    <div style="height:60px;clear:both;"></div>
    <?php $c->loadView("wap/" . TEMPLATE . "/inc.footer.php"); ?> 
    <script>
            function save_message(){
                var postdata=C.form.get_form('#msg_form');

                $.post("/mess/save",postdata,function(data){
                    try {
                        var json = $.evalJSON(data);
                        if(json.code=='0'){
                            C.alert.alert({content:"留言成功",funcOk:function(){
                                window.location.reload();
                            }});
                        }else{
                            C.alert.alert({content:json.msg});
                        } 
                    }catch(e){C.alert.alert({content:e.message+data});}
                });
            }
        </script>
</body>
</html>