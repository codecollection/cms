/*var basketVal={//a 篮子，b商品ID，c 数量，d 价格，e 商品名
	"a1":{"b10":{"c":"0","d":"20.00","e":"商品名"},"b11":{"c":"0","d":"20.00","e":"商品名"},"b12":{"c":"0","d":"20.00","e":"商品名"},"b13":{"c":"0","d":"20.00","e":"商品名"}},
	"a2":{"b14":{"c":"0","d":"20.00","e":"商品名"},"b15":{"c":"0","d":"20.00","e":"商品名"},"b16":{"c":"0","d":"20.00","e":"商品名"},"b17":{"c":"0","d":"20.00","e":"商品名"}},
	"a3":{"b18":{"c":"0","d":"20.00","e":"商品名"},"b19":{"c":"0","d":"20.00","e":"商品名"},"b20":{"c":"0","d":"20.00","e":"商品名"},"b21":{"c":"0","d":"20.00","e":"商品名"}}
	};
	basketVal.a2={};
*/
var goods_basket=C.cookie.get("goods_basket");//alert(goods_basket);
var basketVal={"a1":{},"a2":{},"a3":{},"a4":{},"a5":{},"a6":{}};
if(goods_basket!=''){
    var basketVal=$.evalJSON(C.cookie.get("goods_basket"));
}

var basket = 1; //篮子，默认为 1号篮子
var flagMove = true;// 是否执行运动的标志量
var cur_num=0; //商品数量

//手动输入，释放按键
function ipt_keyUp(obj){
	//判断输入不为数字
	cur_num = $(obj).val();
	cur_num =cur_num.replace(/[^\d]/g,'');
	if(cur_num=='') cur_num = 1;
	$(obj).val(cur_num);
	var bId = $(obj).siblings('input[type=hidden]').val();
    basket = $(obj).hasClass("basket_child") ? $(obj).attr("basket_vals") : basket;
	basketVal['a'+basket]['b'+bId]['c'] = cur_num;
	$(obj).siblings('input.set_num').val(cur_num);
	total_all();//统计购物总数及总金额
	total_bk();
}

//手动输入，失去焦点
function ipt_blur(obj,id){
	cur_num = $(obj).val();
	if(cur_num == '' || cur_num == 0){
		cur_num = 1;
	}
	$(obj).val(cur_num);
	
}

//商品数量及总金额统计
function total_all(){
	var total_num = 0; //统计商品总数
	var total_price =0;//统计金额
	for(var item in basketVal){
		var bkStr = JSON.stringify(basketVal[item]);
		if(bkStr !="{}"){
			for(var c_items in basketVal[item])
			{
				total_num += parseInt(basketVal[item][c_items].c);
				total_price += parseInt(basketVal[item][c_items].c) * parseFloat(basketVal[item][c_items].d);
			}
		}
	}
	$('#total_num em').text(total_num);
	$('#total_price em').text(total_price.toFixed(2));
    C.cookie.set("goods_basket",$.toJSON(basketVal));
    join_cart(0,'');
}

//选择篮子
function basket_click(obj,basket_id){
	basket = $(obj).attr('bk_data_id');//篮子编号
	var bkObjc = $("#basket_view_"+basket+"");
	bkObjc.animate({top:(- (bkObjc.height())) + 'px'},300).siblings().animate({top:0 + 'px'},50);
	$(obj).addClass('cur_basket').siblings().removeClass('cur_basket');
	bkObjc.addClass('lan_bdr'+ basket +'').animate({top:(- (bkObjc.height())) + 'px'},300).siblings().animate({top:0 + 'px'},50);
}

//商品加减
function cart_num(obj,id){
	cur_num = $(obj).siblings('input.set_num').val();
	if($(obj).hasClass('minusShop')){//减
		cur_num --;
		var c = 'minus';
	}
	if($(obj).hasClass('addShop')){//加
		cur_num ++;
		var c = 'add';
	}
	if(cur_num == 0){
		cur_num = 1;
	}
	var bId = $(obj).siblings('input[type=hidden]').val();
	basketVal['a'+basket]['b'+bId]['c'] = cur_num;
	$(obj).siblings('input.set_num').val(cur_num);
	
	total_all();//统计购物总数及总金额
	total_bk();
}

//单个删除
function singleDel(obj){
	var bId = $(obj).siblings('input[type=hidden]').val();
	delete basketVal['a'+basket]['b'+bId];
	var shp_nums = $(obj).closest('.basket_item_ul').find('li').length;
	if(shp_nums <=1){
		$(obj).closest('.basket_view_data').hide().siblings('.lz_null').show();
		$("#basket_data a[bk_data_id="+ basket +"]").removeClass('has_fruits');
		$(obj).closest('#basket_view_'+ basket +'').find('.lz_null').show().next('.basket_view_data').hide();
	}
	$(obj).closest('li').remove();
	$('#basket_data a').eq(basket-1).click();
	total_all();//统计购物总数及总金额
	total_bk();
}

//清空篮子
function cart_clear(obj){
	var hasOne = $(obj).closest('#basket_list').find('.basket_item').length;
	var c_cart_nav="",c_cart_html="";
	//var cart_nav_size = $('#basket_data a').length;
	if(hasOne > 1){//判断是否为最后一个篮子
		$(obj).closest('.basket_item').remove();//移除当前篮子
		$('#basket_data a[bk_data_id = '+ basket +']').remove();//移除篮子选项
	}

	$('#basket_list').find('.basket_item').each(function(i){//重新排序篮子
		var bk_l_ids = i+1;
		//alert($(this).attr('id'));
		$(this).attr('id','basket_view_'+ bk_l_ids +'');
		$(this).attr('class','').addClass('basket_item lan_bdr'+ bk_l_ids +' ui_c'+ bk_l_ids +'');
		$(this).find('em').text(bk_l_ids);
	});
	$('#basket_data a').each(function(i){//重新排序篮子编号
		var bk_ids= i+1;
		$(this).attr('bk_data_id',bk_ids).attr('class','').addClass('lan_'+ bk_ids +'').text(bk_ids);
		if($("#basket_view_"+ bk_ids +" .basket_item_ul li").length > 0){
			$('#basket_data a[bk_data_id = '+ bk_ids +']').addClass('has_fruits');
		}
		if($('#close_num').hasClass('open_num')){
			$('#close_num').parent().css({'left': - ($('#close_num').siblings('#basket_data').find('a').length * ($('#close_num').siblings('#basket_data').find('a').width() + 1) + $('#close_num').width()) + 'px'});
		}
	});
	$('#basket_view_'+ basket +'').css({top:(- $("#basket_view_"+basket+"").height()) + 'px'});
	if($('#basket_data a').length <= 1){
		$("#basket_data a[bk_data_id="+ basket +"]").removeClass('has_fruits');
	}
	delete basketVal['a'+ basket];//删除值
	var newbk = {};
	if(basket==1){
		newbk['a1']=basketVal['a2'];newbk['a2']=basketVal['a3'];newbk['a3']=basketVal['a4'];newbk['a4']=basketVal['a5'];newbk['a5']=basketVal['a6'];newbk['a6']={};
	}
	if(basket==2){
		newbk['a1']=basketVal['a1'];newbk['a2']=basketVal['a3'];newbk['a3']=basketVal['a4'];newbk['a4']=basketVal['a5'];newbk['a5']=basketVal['a6'];newbk['a6']={};
	}
	if(basket==3){
		newbk['a1']=basketVal['a1'];newbk['a2']=basketVal['a2'];newbk['a3']=basketVal['a4'];newbk['a4']=basketVal['a5'];newbk['a5']=basketVal['a6'];newbk['a6']={};
	}
	if(basket==4){
		newbk['a1']=basketVal['a1'];newbk['a2']=basketVal['a2'];newbk['a3']=basketVal['a3'];newbk['a4']=basketVal['a5'];newbk['a5']=basketVal['a6'];newbk['a6']={};
	}
	if(basket==5){
		newbk['a1']=basketVal['a1'];newbk['a2']=basketVal['a2'];newbk['a3']=basketVal['a3'];newbk['a4']=basketVal['a4'];newbk['a5']=basketVal['a6'];newbk['a6']={};
	}
	if(basket==6){
		newbk['a1']=basketVal['a1'];newbk['a2']=basketVal['a2'];newbk['a3']=basketVal['a3'];newbk['a4']=basketVal['a4'];newbk['a5']=basketVal['a5'];newbk['a6']={};
	}
	
	basketVal=newbk;
	
	--basket;//主要作用于 触发下一个篮子的点击
	if(parseInt(hasOne) == 1){//判断是否只剩一个篮子
		$(obj).closest('#basket_view_1').find('.basket_item_ul').html('');
		$(obj).closest('#basket_view_1').find('.lz_null').show().next('.basket_view_data').hide();
	}
	
	//alert(basket+','+$('#basket_data a').length);
	if(basket == $('#basket_data a').length){//触发篮子点击事件，主要作用 切换 basket值
		$('#basket_data a').eq(basket-1).click();
	}else{
		$('#basket_data a').eq(basket).click();        
	}
	total_all();
	total_bk();
}

//初始化显示篮子
function show_cart(rise_price){
	var bk_size = 0;
    var json = basketVal;//alert($.toJSON(json));
    var cart_html = '';
    var cart_nav = '';
    for(i in json) {
        if($.toJSON(json[i])=='{}') continue;
        var sts = i.substring(1);
		bk_size ++; //获取存在值篮子个数
        cart_html+='<div id="basket_view_'+sts+'" class="basket_item lan_bdr1 ui_c1">';
		cart_html+='<p class="lz_null" style="display:none;">篮子是空的</p>';
        cart_html+='<div class="basket_view_data" style="display:block;">';
        cart_html+='	<h4 class="cart_title"><em>'+sts+'</em>号篮子<a href="javascript:void(0);" onclick="cart_clear(this)" class="cart_clear">[清空]</a>&nbsp;<span>起订价：'+ rise_price +'元</span>&nbsp;<span>总价：<i id="bk_totle">￥0</i></span></h4>';
        cart_html+='	<ul class="basket_item_ul">';
        cart_nav += '<a href="javascript:void(0);" bk_data_id = "'+sts+'" onclick="basket_click(this,'+sts+')" class="lan_'+sts+'">'+sts+'</a>';
        for (j in json[i]){
            var c = json[i][j].c;//数量
            var d = json[i][j].d;//价格
            var e = json[i][j].e;//名称
            var goods_id = j.substring(1);
            cart_html+='<li class="basketfood_view_'+ goods_id +'"><input type="hidden" value="'+ goods_id +'" /><span class="shop_name">'+ e +'</span><b class="shop_price">'+ d +'</b> <a class="cart_sty i_btn minusShop" onclick="cart_num(this,'+goods_id+');">-</a><input onkeyup="ipt_keyUp(this)" onblur="ipt_blur(this,'+goods_id+');" type="text" class="cart_sty set_num" value="'+c+'"><a class="cart_sty i_btn addShop" onclick="cart_num(this,'+goods_id+');">+</a><a class="rem_cur_shop" onclick="singleDel(this)">×</a></li>';
        }
        cart_html+='	</ul>';
        cart_html+='</div>';
        cart_html+='</div>';
    }
	if(bk_size > 0 && bk_size < 6){
		var bk_num_s = bk_size + 1;
		cart_nav += '<a href="javascript:void(0);" bk_data_id = "'+ bk_num_s +'" onclick="basket_click(this,'+ bk_num_s +')" class="lan_'+ bk_num_s +'">'+ bk_num_s +'</a>';

		cart_html+='<div id="basket_view_'+ bk_num_s +'" class="basket_item lan_bdr1 ui_c1">';
		cart_html+='<p class="lz_null">篮子是空的</p>';
        cart_html+='<div class="basket_view_data" style="display:none;">';
        cart_html+='	<h4 class="cart_title"><em>'+ bk_num_s +'</em>号篮子<a href="javascript:void(0);" onclick="cart_clear(this)" class="cart_clear">[清空]</a>&nbsp;<span>起订价：'+ rise_price +'元</span>&nbsp;<span>总价：<i id="bk_totle">￥0</i></span></h4>';
        cart_html+='	<ul class="basket_item_ul">';
        cart_html+='	</ul">';
		cart_html+='</div>';
        cart_html+='</div>';
	}
    //alert($("#basket_list").html());
    if(cart_html!='') $("#basket_list").html(cart_html);
    if(cart_nav!='')  $("#basket_data").html(cart_nav);
	for(var i = 1;i<=6; i++){
		if($('#basket_view_'+ i +' .basket_item_ul li').length > 0){
			$("#basket_data a[bk_data_id="+ i +"]").addClass('has_fruits');
		}
	}
    total_all();
	total_bk();
	if($(".basket_item_ul li").length <=0)
	{
		$("#basket").css("display","none");
	}
}

$(function(){
	//篮子隐藏显示
	$('#cart_ico').on('click',function(){
		var bkObj = $('#basket_view_'+basket);
		if(Math.abs(parseInt(bkObj.css('top'))) < 70){
			$('#basket_view_'+basket).animate({top:(- (bkObj.height())) + 'px'},300);
		}else{
			$('#basket_view_'+basket).animate({top: '0px'},300);
		}
		
	});
	$('#shop_list .shop_btn,#shop_list .p_link').on('click',function(e){//商品飞入购物车
		e.stopPropagation();
		//alert($(this).offset().top);
		if($("#basket").css("display") == "none"){
			$("#basket").css("display","block");
		}
		if($('#parabola').length <=0)
		{
			$('body').append('<span class="parabola" id="parabola"></span>');   
		}
		var pObj = $("#parabola");//抛物线运动物体
		pObj.css({'margin-left':$(this).offset().left + $(this).width() /2 - 10 +'px','margin-top':$(this).offset().top +  ($(this).height() /2)  - $(document).scrollTop() +'px'});//初始化定义样式

		//计算公式：方程的具体表达式为y=a*x*x+b*x+c   b= (y-a*x*x -c)/x
		var cart_ico = $('#cart_ico'),//购物车ico
			sId = $(this).closest('li').find('#p_id').val(),//商品id
			sShop = $(this).closest('li').find('.shop_name').text(),//商品名
			sPrice =parseFloat($(this).closest('li').find('#shop_price').val()).toFixed(2),//产品价格
			sNum = $('#basket_view_'+basket+' .basket_item_ul .basketfood_view_'+ sId +'').find('.set_num').val() == undefined ? 0 : $('#basket_view_'+basket+' .basket_item_ul .basketfood_view_'+ sId +'').find('.set_num').val(),
			//tX = $(this).offset().left + $(this).width() /2  ,//当前按钮X坐标
			speed = 666.68, // 166.67 每帧移动的像素大小，每帧（对于大部分显示屏）
			curvature = 0.0016,  // 实际指焦点到准线的距离，你可以抽象成曲率，这里模拟扔物体的抛物线，因此是开口向下的
			// 四边缘的坐标
			rectElement = $(this)[0].getBoundingClientRect(),
			rectTarget = cart_ico[0].getBoundingClientRect(),			
			cntMove = {x:rectElement.left + (rectElement.right - rectElement.left) / 2,y:rectElement.top + (rectElement.bottom - rectElement.top) / 2},//移动元素中心点坐标
			cntTarget = {x:rectTarget.left + (rectTarget.right - rectTarget.left) / 2,y:rectTarget.top + (rectTarget.bottom - rectTarget.top) / 2},//目标元素的中心点坐标
			coordTarget = {x:-1 * (cntMove.x - cntTarget.x),y:-1 * (cntMove.y - cntTarget.y)},//居中坐标
			b = (coordTarget.y - curvature * coordTarget.x * coordTarget.x) / coordTarget.x;
			
			if (flagMove == false) return false;
			pObj.text(sPrice);
			$("#basket_view_"+basket+" .basket_item_ul li").each(function(){//购物篮数量叠加
				var hidVal = $(this).children("input[type=hidden]").val();
				var curIpt = $(this).find('.set_num');
				var curIptVal = curIpt.val() == "" ? "1" : curIpt.val();
				if(hidVal == sId)
				{
					curIpt.val(parseInt(curIptVal) + 1);
				}
			});
			var startx = 0, rate = coordTarget.x > 0 ? 1: -1;

			var step = function() {
				// 切线 y'=2ax+b
				var tangent = 2 * curvature * startx + b; // = y / x
				// y*y + x*x = speed
				// (tangent * x)^2 + x*x = speed
				// x = Math.sqr(speed / (tangent * tangent + 1));
				startx = startx + rate * Math.sqrt(speed / (tangent * tangent + 1));
				// 防止过界
				if ((rate == 1 && startx > coordTarget.x) || (rate == -1 && startx < coordTarget.x)) {
					startx = coordTarget.x;
				}
				var zX = startx, zY = curvature * zX * zX + b * zX;
				// x, y目前是坐标，需要转换成定位的像素值
				pObj.css({left:zX + 'px',top:zY + 'px'});
				if (startx !== coordTarget.x) {
					window.setTimeout(step,18);	
				}else{
					flagMove = true;
					pObj.remove();
				}
				
			}
			window.setTimeout(step,18);
			flagMove = false;

			if($("#basket_view_"+basket+" .basket_item_ul li[class $= food_view_"+ sId +"]").length <= 0){
				$("#basket_view_"+basket+" .basket_item_ul").append('<li class="basketfood_view_'+ sId +'"><input type="hidden" value="'+ sId +'" /><span class="shop_name">'+ sShop +'</span><b class="shop_price">'+ sPrice +'</b> <a class="cart_sty i_btn minusShop" onclick="cart_num(this,'+sId+');">-</a><input onkeyup="ipt_keyUp(this)" onblur="ipt_blur(this,'+sId+');" type="text" class="cart_sty set_num" value="1"><a class="cart_sty i_btn addShop" onclick="cart_num(this,'+sId+');">+</a><a class="rem_cur_shop" onclick="singleDel(this)">×</a></li>');
			}

			$("#basket_view_"+basket+"").css({top:(- $("#basket_view_"+basket+"").height()) + 'px'});
			//写入串start
			var akv={},bkv={};
			if(basketVal['a'+basket]==undefined){
				akv['c']=parseInt(sNum) + 1;akv['d']=sPrice;akv['e']=sShop;
				bkv['b'+sId]=akv;
				basketVal['a'+basket]=bkv;
			}else
			{
				akv['c']=parseInt(sNum) + 1;akv['d']=sPrice;akv['e']=sShop;
				basketVal['a'+basket]['b'+sId] = akv;
			}
			//写入串end
			var lz_num = parseInt(parseInt(basket) + 1);//新增篮子编号
			if($('#basket_data a').length - 1  < 5 && basket == $('#basket_data a').length){//增加新篮子
				$('#basket_data').append('<a href="javascript:void(0);" onclick="basket_click(this,'+lz_num+')" bk_data_id = "'+ lz_num +'" class="lan_'+ lz_num +'">'+ lz_num +'</a>');
				if($('#close_num').hasClass('open_num')){
					$('#close_num').parent().animate({'left': - ($('#close_num').siblings('#basket_data').find('a').length * ($('#close_num').siblings('#basket_data').find('a').width() + 1) + $('#close_num').width() ) + 'px'},500);
				}

				//增加篮子容器
				var lz_html = '';
				lz_html += '<div id="basket_view_'+ lz_num +'" class="basket_item lan_bdr'+ lz_num +' ui_c'+ lz_num +'">';
				lz_html += '    <p class="lz_null">篮子是空的</p>';
				lz_html += '    <div class="basket_view_data" style="display:none;">';
				lz_html += '        <h4 class="cart_title"><em>'+ lz_num +'</em>号篮子 <a href="javascript:void(0);" onclick="cart_clear(this)" class="cart_clear">[清空]</a>&nbsp;<span>起订价：'+ rise_price +'元</span>&nbsp;<span>总价：<i id="bk_totle">￥0</i></span></h4>';
				lz_html += '        <ul class="basket_item_ul">';
				lz_html += '        </ul>';
				lz_html += '    </div>';
				lz_html += '</div>';
				$('#basket_list').append(lz_html);
			}
			//显示篮子容器
			if($('#basket_view_'+ basket +' .basket_item_ul li').length > 0){
				$("#basket_data a[bk_data_id="+ basket +"]").addClass('has_fruits');
				$('#basket_view_'+ basket +' .lz_null').css({display:'none'});
				$('#basket_view_'+ basket +' .basket_view_data').css({display:'block'});
			}

			total_all();//统计购物总数及总金额
			total_bk();//统计单个篮子总金额
	});
	
	//显示隐藏篮子编号
	$('#close_num').on('click',function(e){
		if($(this).hasClass('open_num')){
			$(this).parent().animate({'left':- $(this).width() + 'px'},500);
			$(this).removeClass('open_num').text('<');
		}else{
			$(this).parent().animate({'left': - ($(this).siblings('#basket_data').find('a').length * ($(this).siblings('#basket_data').find('a').width() + 1) + $(this).width() ) + 'px'},500);
			$(this).addClass('open_num').text('>');
		}
	});
    
    show_cart(rise_price);
});

//计算单个篮子总价
function total_bk(){
	for(var item in basketVal){
		var bk_price =0;//统计金额
		var bkStr = JSON.stringify(basketVal[item]);
		if(bkStr !="{}"){
			for(var c_items in basketVal[item])
			{
				bk_price += parseInt(basketVal[item][c_items].c) * parseFloat(basketVal[item][c_items].d);
			}
			var bk_id = parseInt($.toJSON(item).replace('a','').replace('"',''));
			$("#basket_view_"+ bk_id +" #bk_totle").text("￥"+ bk_price.toFixed(2));
		}
	}
}