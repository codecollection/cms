function select_single(e,selObj,fun){//单选
    
    e = e || window.event;
    e.cancelBubble = true;//取消冒泡
    var sel_num=5;//下拉显示个数
    var sty = $('#sel_list',selObj);
    var lists = $('#sel_list a',selObj);
    var list_height = (lists.height() + 1) * lists.size() > (lists.height() + 1) * sel_num ? (lists.height() + 1) * sel_num : (lists.height() + 1) * lists.size();
    sty.css({"height": list_height});
    sty.children('a').on('click',function(){
        //$(this).parent().siblings('#txt_box').children('input').val($(this).attr('value'));
        $('.sel_subject_val',selObj).val($(this).attr('value'));
        $('#sel_inp',selObj).text($(this).text());
        $(this).addClass('current').siblings().removeClass('current');
        sty.find('a').unbind('click');
        if(fun){
            callback($(this).attr('value'));
        }
		
    });
    if(sty.length){
        if(sty[0].style.display == 'none')
        {
            $(selObj).css({'z-index':'99999'});
            sty.show();
        }else{
            sty.hide();
            $(selObj).css({'z-index':'1'});
        }
    }
    $(selObj).hover(function(){},function(){$("#sel_list",this).hide();$(selObj).css({'z-index':'1'});});
    
}
var rs_id=[]; //id个数
var rs_val=[]; //值
function select_multi(e,selObj,fun){//多选
    e = e || window.event;
    e.cancelBubble = true;//取消冒泡
    var get_hidd = $(selObj).parent().siblings('.sel_subject_val');
    var lists = $('#sel_list a',selObj);
    var getIDs = $(selObj).attr('value');
    var getVals = $(selObj).text();
    var val_str = $('#sel_inp',selObj).text();
    var id_str = get_hidd.val();
    var rs_hidd_id = (id_str != undefined && id_str != '') ? id_str.split(',') : []; //获取已选择id 转数组类型
    var has_arrIDs = $.inArray(getIDs,rs_hidd_id); //判断当前选项在数组中索引
    
    if($(selObj).hasClass('current'))
    {
        $(selObj).removeClass('current');
    }else{
        $(selObj).addClass('current');
    }
    if(has_arrIDs == -1) //判断当前ID是否存在 -1：未找到, 未找到累加ID
    {
        rs_hidd_id.push(getIDs);
    }else{
        rs_hidd_id.splice(has_arrIDs,1);
       
    }
    rs_id = rs_hidd_id;
    get_hidd.val(rs_id.toString());
	/*
	fun && fun();
	*/
    lists.unbind('click');
}

function callback(cateId){
    
    //createTableByModelId
   // $.post('/back/info/add', {"cateId":cateId}, function(data) {
     //   try {
            window.location.href="/back/info/add?cateId="+cateId;
       // }catch(e){}
   // });
}