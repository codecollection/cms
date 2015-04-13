var goods_basket=C.cookie.get("goods_basket");
var basketVal={"a1":{},"a2":{},"a3":{},"a4":{},"a5":{},"a6":{}};
if(goods_basket!=''){
    var basketVal=$.evalJSON(C.cookie.get("goods_basket"));
}

var basket = 1; //篮子，默认为 1号篮子
var flagMove = true;// 是否执行运动的标志量
var cur_num=0; //商品数量

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
function basket_click(obj){
	basket = $(obj).attr('bk_data_id');//篮子编号
	var bkObjc = $("#basket_view_"+basket+"");
	bkObjc.animate({top:(- (bkObjc.height() + 40)) + 'px'},300).siblings().animate({top:0 + 'px'},50);
	$(obj).addClass('cur_basket').siblings().removeClass('cur_basket');
	$('#footer_pd').css({"padding-bottom":($("#basket_view_"+basket+"").height()  + 95) + 'px'})
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

//单个删除
function singleDel(obj){
	var bId = $(obj).siblings('input[type=hidden]').val();
	delete basketVal['a'+basket]['b'+bId];
	var shp_nums = $(obj).closest('.basket_item_ul').find('li').length;
	if(shp_nums <=1){
		$(obj).closest('.basket_view_data').hide().siblings('.lz_null').show();
		$('#basket_data a[bk_data_id='+ basket +']').attr('class','');
	}
	$(obj).closest('li').remove();
	$('#basket_data a').eq(basket-1).click();
	total_all();//统计购物总数及总金额
	total_bk();
	
}

//清空篮子
function cart_clear(obj){
	$('#basket_view_'+ basket +'').find('.lz_null').show().next('.basket_view_data').hide();
	$('#basket_view_'+ basket +'').css({top:(- ($("#basket_view_"+basket+"").height() + 40 )) + 'px'});
	$("#basket_data a[bk_data_id="+ basket +"]").removeClass('has_fruits');
	basketVal['a'+ basket] = {};//删除值
	$("#basket_view_"+ basket +" .basket_item_ul").html('');
	total_all();
	total_bk();
}

//初始化显示篮子
function show_cart(){
    var json = basketVal;//alert($.toJSON(json));
    var cart_html = '';
    var cart_nav = '';
	var hasBool = false;//判断是否存在数据，false 为空，true 则有数据
    for(i in json) {
        var sts = i.substring(1);
        cart_html+='<div id="basket_view_'+sts+'" class="basket_item ui_c1">';
		if($.toJSON(json[i])=='{}'){
			cart_html+='<p class="lz_null" style="display:block;">篮子是空的</p>';
			cart_html+='<div class="basket_view_data" style="display:none;">';
		}else{
			cart_html+='<p class="lz_null" style="display:none;">篮子是空的</p>';
			cart_html+='<div class="basket_view_data" style="display:block;">';
		}
        cart_html+='	<h4 class="cart_title"><em>'+sts+'</em>号篮子<a href="javascript:void(0);" onclick="cart_clear(this)" class="cart_clear">[清空]</a>&nbsp;&nbsp;<span>总价：<i id="bk_totle">￥0</i></span></h4>';
        cart_html+='	<ul class="basket_item_ul">';
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
}
function fun_addShop(obj){//商品飞入购物车
	var cart_ico = $('#cart_ico'),//购物车ico
	sId = $(obj).closest('li').find('#p_id').val(),//商品id
	sShop = $(obj).closest('li').find('.shop_name').text(),//商品名
	sPrice =parseFloat($(obj).closest('li').find('#shop_price').val()).toFixed(2),//产品价格
	sNum = $('#basket_view_'+basket+' .basket_item_ul .basketfood_view_'+ sId +'').find('.set_num').val() == undefined ? 0 : $('#basket_view_'+basket+' .basket_item_ul .basketfood_view_'+ sId +'').find('.set_num').val();
	$("#basket_view_"+basket+" .basket_item_ul li").each(function(){//购物篮数量叠加
		var hidVal = $(this).children("input[type=hidden]").val();
		var curIpt = $(this).find('.set_num');
		var curIptVal = curIpt.val() == "" ? "1" : curIpt.val();
		if(hidVal == sId)
		{
			curIpt.val(parseInt(curIptVal) + 1);
		}
	});
	
	if($("#basket_view_"+basket+" .basket_item_ul li[class $= food_view_"+ sId +"]").length <= 0){
		$("#basket_view_"+basket+" .basket_item_ul").append('<li class="basketfood_view_'+ sId +'"><input type="hidden" value="'+ sId +'" /><span class="shop_name">'+ sShop +'</span><b class="shop_price">'+ sPrice +'</b> <a class="cart_sty i_btn minusShop" onclick="cart_num(this,'+sId+');">-</a><input onkeyup="ipt_keyUp(this)" onblur="ipt_blur(this,'+sId+');" type="text" class="cart_sty set_num" value="1"><a class="cart_sty i_btn addShop" onclick="cart_num(this,'+sId+');">+</a><a class="rem_cur_shop" onclick="singleDel(this)">×</a></li>');
	}

	$("#basket_view_"+basket+"").css({top:(- ($("#basket_view_"+basket+"").height()  + 40)) + 'px'});
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
	//显示篮子容器
	if($('#basket_view_'+ basket +' .basket_item_ul li').length > 0){
		$("#basket_data a[bk_data_id="+ basket +"]").addClass('has_fruits');
		$('#basket_view_'+ basket +' .lz_null').css({display:'none'});
		$('#basket_view_'+ basket +' .basket_view_data').css({display:'block'});
	}
	$('#footer_pd').css({"padding-bottom":($("#basket_view_"+basket+"").height()  + 95) + 'px'})
	total_all();//统计购物总数及总金额
	total_bk();
}
$(function(){
    $('#basket_num a,#cart_ico').css({width:($(window).width() / 6) - 1 +'px'});
	//篮子隐藏显示
	$('#cart_ico').on('click',function(){
		var bkObj = $('#basket_view_'+basket);
		if(Math.abs(parseInt(bkObj.css('top'))) < 70){
			$('#basket_view_'+basket).animate({top:(- (bkObj.height() + 40)) + 'px'},100);
		}else{
			$('#basket_view_'+basket).animate({top: '0px'},100);
		}
	});
    show_cart();
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