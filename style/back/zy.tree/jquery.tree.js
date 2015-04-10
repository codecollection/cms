//树形1：纯JS实现

$(function(){
    //结构生成
    $('#tree').each(function(){
        $(this).addClass('tree');
        //最顶部节点
        $(this).children('li:first').addClass('tree-root').parent().find('li:last-child').addClass('tree-last').parent().find('li:first-child:not(".tree-root")').addClass('tree-first');
        //判断是否展开回调
        var func='';
        try{
            typeof(eval(expand_func) == "function");
            func=' onclick="expand_func(this);"';
        }catch(e){}
        
        $(this).find('li').prepend('<span class="tree-box tree-icon tree-expand-open"'+func+'></span>');
        //最底层线条样式
        var span_par = $(this).children().find('ul:last');
        var remClass = span_par.children('span').attr('class','');
        var comm_class="tree-switch tree-icon";
        if(span_par.parent().is(':last')){
            remClass.addClass(''+ comm_class +' tree-note');
        }else{
            remClass.addClass(''+ comm_class +' tree-last-note');
            $(this).find('li').each(function(){
                if($(this).find('ul').length <= 0)
                {
                    $(this).children('span').attr('class','').addClass(''+ comm_class +' tree-note');
                    if($(this).hasClass('tree-last')){
                        $(this).children('span').attr('class','').addClass(''+ comm_class +' tree-last-note');
                    }
                }
            });
        }

        //左侧线条
        $(this).find('li').each(function(){
            if(!$(this).hasClass('tree-last') || !$(this).children().find('ul:last').parents('ul:eq(0)')){
                $(this).find('ul').addClass('tree-children tree-line');
            }else{
                $(this).children('.tree-box').addClass('tree-last-expand').find('ul').addClass('tree-children');
            }
            if($(this).hasClass('tree-last')){
                $(this).find('ul').removeClass('tree-children tree-line');
            }
            //增加链接
            /*if(!$(this).children('ul').length){
                $(this).children('span:not(".tree-box")').wrap('<a href="javascript:void(0);"></a>');
            }
            $(this).children('a').attr('href',$(this).attr('url'));
            
            //判断默认是否打开
            var cookie_id = [] ;//当前关闭层级id 数组
            //获取cookie
            if(C.cookie.get('user_isexpand')){
                cookie_id = C.cookie.get('user_isexpand').split(",");
            }
            var cur_ids = $(this).attr('id');
            //alert(cur_ids+","+$.inArray(cur_ids,cookie_id)+','+ ($.inArray($(this).attr('id'),cookie_id)  != -1));
            if($.inArray($(this).attr('id'),cookie_id) == -1){
                var isexpand = $(this).attr('isexpand'); //false 关闭
                if(isexpand == 'false' || parseInt(isexpand) == 0)
                {
                    $(this).children('.tree-box').addClass('tree-expand-close').siblings('ul').hide();
                }else{
                    $(this).children('.tree-box').addClass('tree-expand-open').siblings('ul').show();
                }
            }*/
        });
    });
    //菜单伸缩
    
    var expand_id = [] ;//当前关闭层级id 数组
    var cookieTime = 168; //小时 cookie保存时间
    //获取cookie
    if(C.cookie.get('user_isexpand')){
        expand_id = C.cookie.get('user_isexpand').split(",");
    }
    $('.tree-box','#tree').on('click',function(){
        if($.inArray($(this).parent('li').attr('id'),expand_id) == -1) //判断当前ID是否存在 -1：未找到, 未找到累加ID
        {
            expand_id.push($(this).parent('li').attr('id'));
        }else{
            //重写cookie 移除ID
            expand_id.splice($.inArray($(this).parent('li').attr('id'),expand_id),1);
        }
        C.cookie.set('user_isexpand',expand_id.join(","),cookieTime);
        if( !$(this).hasClass('tree-expand-close'))//关闭子级
        {
            $(this).addClass('tree-expand-close').siblings('ul').hide().parent('li').attr('isexpand','false');
        }else{ //打开子级
            
            $(this).removeClass('tree-expand-close').siblings('ul').show().parent('li').attr('isexpand','true');
        }
    });
    
    //checkbox 选中
    $('input[type=checkbox]','.tree').change(function(event){
        var par_li = $(this).parents('li').length; //获取顶级li个数
        var cbx_find = $(this).parent('li').find('input[type=checkbox]');
        //子级勾选 父级自动勾选
        for(var i=0; i<= par_li; i++){
            var cbx = $(this).parents('li').eq(i);
            var cbx_child = cbx.children('input[type=checkbox]');
            var cbx_sib = cbx.siblings('li');
            if($(this).prop('checked')){
                cbx_child.prop('checked',true);
            }
        }
        //父级勾选 全选或取消
        if(!$(this).prop('checked')){
            cbx_find.prop('checked',false);
        }else{
            cbx_find.prop('checked',true);
        }
    });
    //获取cookie
    if(C.cookie.get('user_isexpand')){
        var treeCookie = C.cookie.get('user_isexpand').split(',');
        for(var i=0; i< treeCookie.length; i++){
            $("#" + treeCookie[i] + "").children('.tree-box').addClass('tree-expand-close').siblings('ul').hide();
        }
    }
});

//树形2：由PHP输出HTML，附加词点击展开显示函数，并在点击时候可以回调一个JS函数用于获取数据
function tree_icon_click(obj,func){
    var o=$(obj);
    
    if(o.hasClass('tree-expand-open')){//节点打开状态
        o.removeClass('tree-expand-open').addClass('tree-expand-close');
        o.siblings('ul').hide();
    }else{//节点关闭状态
        o.removeClass('tree-expand-close').addClass('tree-expand-open');
        o.siblings('ul').show();
    }

    var call_func=true;
    if(!arguments[1]) call_func=false;
    if(call_func) func();
}