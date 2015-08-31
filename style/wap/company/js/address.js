//修改收货地址
function save(){
    var postdata=C.form.get_form("#user_address");
    $.post('address.php?m=save', postdata, function(data) {
        try {
            var ret = $.evalJSON(data);
            if(ret.code=='1'){
				 C.alert.alert({"content":ret.msg});
            }else{
                if(ret.code=='0'){
                   C.alert.alert({content:ret.msg,funcOk:function(){
                        history.go(-1);
                    }});
                } 
            }
        } catch (e) {
            C.alert.alert({"error":data});
        }
    });
}

function del(aid){
    $.post('address.php?m=del', {"addr_id":aid}, function(data) {
        try {
            var ret = $.evalJSON(data);
            if(ret.code=='1'){
				 C.alert.alert({"content":ret.msg});
            }else{
                if(ret.code=='0'){
                   C.alert.alert({content:ret.msg,funcOk:function(){
                        window.location.reload();
                    }});
                } 
                
            }
        } catch (e) {
            C.alert.alert({"error":data});
        }
    });
}


/**
 *
 * @param
 */
function set_def(addr_id) {
	$.post('address.php?m=set_def', {"addr_id":addr_id}, function(data) {
        try {
            var ret = $.evalJSON(data);
            if(ret.code=='1'){
				 C.alert.alert({"content":ret.msg});
            }else{
                if(ret.code=='0'){
                   C.alert.alert({content:ret.msg,funcOk:function(){
                        window.location.reload();
                    }});
                } 
            }
        } catch (e) {
            C.alert.alert({"error":data});
        }
    });

} // end func