
/**
 *
 * @param
 */
function test_database() {
	var postdata=C.form.get_form('#install');
	$.post("index.php?m=test_database",postdata,function(data){
        try {
            var json = $.evalJSON(data);
            
            if(json.code=='0') {
				window.location.href = json.msg;   
            } else {
				C.alert.alert({content:json.msg});
				$("#tips_20130528").css({'width':'420px'});
			}
        }catch(e){C.alert.alert({content:e.message+data});}
    });

} // end func



/**
 *
 * @param
 */
function show_info() {
	//for (var i in info) {

	//}
	var len = info.length;
	var i = 0;
	var t = setInterval(function () {
		$("#loginner").append('<li><span class="'+info[i][2]+'">√</span>'+info[i][1]+'&nbsp;&nbsp;'+info[i][0]+' </li>');
		i++;
		if(i >= len) {
			clearInterval(t);
			$("#btn_old").text('安装完毕');
			$("#btn_old").css('color','#000');
            $("#btn_old").attr('href','index.php?action=5');
		}
		$("#log").scrollTop($("#loginner").height());
	},100);
} // end func
