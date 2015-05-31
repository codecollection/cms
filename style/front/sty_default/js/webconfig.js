//保存
function save_basic() {
    var postdata=C.form.get_form('#webconfig_form');
    
    $.post("config.basic.php?m=save&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
//保存
function save_senior() {
    var postdata=C.form.get_form('#webconfig_form');
    
    $.post("config.senior.php?m=save&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}

//保存
function save_shop() {
    var postdata=C.form.get_form('#webconfig_form');
    
    $.post("config.shop.php?m=save&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
//邮件发送测试
function test_email() {
    var postdata=C.form.get_form('#webconfig_form');
    $.post("config.senior.php?m=test_email&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
//短信发送测试
function test_sms() {
    var postdata=C.form.get_form('#webconfig_form');
    $.post("config.senior.php?m=test_sms&ajax=1",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            C.alert.alert({content:json.msg});
        }catch(e){C.alert.alert({content:e.message+data});}
    });
}
