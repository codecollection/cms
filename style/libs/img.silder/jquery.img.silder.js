/**

 * 图片切换插件
 * Powered By Mr Zhou
 * QQ 627266138
 * E-mail 627266138qq.com
 * Date 2013-12-24
 * Dependence jquery-1.7.2.min.js
 **/

(function ($) {
  //调用方式 $('#silder').imgSilder({s_width:564, s_height:293, is_showTit:true, s_times:3000,css_link:'css/style.css'});  容器必须加入 id silder_list or class silder_list
  /*参考结构
	<div class="silder" id="silder">
		<ul class="silder_list" id="silder_list">
			<li style="background:url(img/xx.png);" href="http://www.baidu.com"></li>                  
		</ul>
	</div>
  */
  $.fn.silderDefaults = { //默认参数
    s_width:500, //容器宽度
	s_height:500, //容器高度
	is_showTit:true, // 是否显示图片标题 false :不显示，true :显示
	s_times:3000, //设置滚动时间
	on:'click',
	css_link:'css/style.css', //留空则不传
	pageClick:['pagePrev','pageNext'],//#pagePrev 上一页，#pagePrev 下一页 传ID
	lfPage:true, //判断是否显示左右翻页 false 不显示，true显示
	isMode:"isOpacity" //isOpacity：闪现，isMarginLeft:左右切换,isMarginTop:往上滚动
  };
  $.extendSilder = function (obj,opt) { //obj 元素对象，opt 参数对象
    var g = {  //公共方法， 外部可调用
      //初始化
		init: function () {	
			if(opt.css_link != ''){  // 判断传值不为空则添加样式
				g.LoadCSS(opt.css_link); //样式文件导入
			}
			var currHtml = ""; //加入播放页码 及文字描述
			if(opt.is_showTit){ //判断是否显示标题
				currHtml += "<div class='silder_desc' id='silder_desc'></div>";
			}
			
			currHtml += "<ul class='silder_page' id='silder_page'>";//分页码代码注入
			for(var i=0; i < gl.img_sizeb; i++){
				currHtml += "<li>"+ parseInt((1 + i),10) +"</li>";
			}
			currHtml +="</ul>";

			g.css_resize();
			$(window).resize(function(){g.css_resize();});

			g.obj.append(currHtml);//注入分页码
			gl.silderList_li.css({float:"left",width:gl.s_widths,height:opt.s_height}); //初始化隐藏其他图片
			var silderPage = $('#silder_page',g.obj);
			var silderPage_li =$('#silder_page li',g.obj);
			silderPage_li.eq(silderPage_li.length - 1).css("margin-right","0");
			silderPage.css({left:($(g.obj).width() - silderPage.width()) /2 +"px"});
			silderPage_li.eq(0).addClass('current');
			if(opt.is_showTit){ //初始化图片描述
				$('#silder_desc',g.obj).text(gl.silderList_li.eq(0).find('img').attr('alt'));
			}
			silderPage_li.on(opt.on,function(){
				gl.pagesize = $(this).index();
				g.mode();
				$(this).addClass('current').siblings().removeClass('current');
				if(opt.is_showTit){
					$('#silder_desc',g.obj).text(gl.silderList_li.eq(gl.pagesize).find('img').attr('alt'));
				}
			});
			var t;
			gl.silderList.hover(function(){window.clearInterval(t); return;},function(){ t = window.setInterval(function(){
				if(gl.pagesize < gl.img_sizeb && gl.pagesize >= 0)
				{
					g.mode();
					silderPage_li.eq(gl.pagesize).addClass('current').siblings().removeClass('current');
					if(opt.is_showTit){
						$('#silder_desc',g.obj).text(gl.silderList_li.eq(gl.pagesize).find('img').attr('alt'));
					}
					gl.pagesize++;
					if(gl.pagesize >= gl.img_sizeb){
						gl.pagesize = 0;
					}
				}
			},opt.s_times);}).trigger("mouseout"); //悬浮时 停止自动动画,trigger 起默认触发作用
			if(opt.lfPage){//判断是否显示左右分页
				g.obj.append("<a href='javascript:void(0);' class='pagePrev' id="+ opt.pageClick[0] +"></a><a href='javascript:void(0);' class='pageNext' id="+ opt.pageClick[1] +"></a>")
				$("#" +opt.pageClick[0]+",#"+ opt.pageClick[1] +"").css("top",(g.obj.height() - $('#' +opt.pageClick[0]).height())/2);
				$("#" +opt.pageClick[0]+",#"+ opt.pageClick[1] +"").on('click',function(){
					if(gl.pagesize < gl.img_sizeb && gl.pagesize >=0){
						if($(this).attr('id') == opt.pageClick[0]){//上一页
							gl.pagesize--;
						}
						if($(this).attr('id') == opt.pageClick[1]){//下一页
							gl.pagesize++;
						}
						if(gl.pagesize >= gl.img_sizeb){
							gl.pagesize = 0;
						}else if(gl.pagesize < 0){
							gl.pagesize = gl.img_sizeb - 1;
						}
						g.mode();
						silderPage_li.eq(gl.pagesize).addClass('current').siblings().removeClass('current');
						if(opt.is_showTit){
							$('#silder_desc',g.obj).text(gl.silderList_li.eq(gl.pagesize).find('img').attr('alt'));
						}
					}
					window.clearInterval(t); return;
				});
				
			}
		},
		  LoadCSS:function(url){ //新建css
			var s = document.createElement("LINK");
				s.rel = "stylesheet";
				s.type = "text/css";
				s.href = url;
				document.getElementsByTagName("HEAD")[0].appendChild(s);
		  },
		  css_resize:function(){
			if(navigator.userAgent.indexOf("iPad") > 0 && $(window).width() < 1200){
				gl.s_widths = 1200;
			}else{
				gl.s_widths = opt.s_width == "100%" ? $(window).width() : opt.s_width;
			}
			gl.wh ={width:gl.s_widths,height:opt.s_height};
			g.obj.css(gl.wh);
		},
		mode:function(){
			if(opt.isMode == "isMarginLeft"){
				gl.silderList.css({width:gl.s_widths * gl.img_sizeb,height:opt.s_height}); //设置宽高属性
				gl.silderList.stop(true,true).animate({marginLeft:- gl.silderList_li.width() * gl.pagesize},300);
			}else if(opt.isMode == "isMarginTop"){
				gl.silderList.css({width:gl.s_widths,height:opt.s_height * gl.img_sizeb}); //设置宽高属性
				gl.silderList_li.css({"float":"none"});
				gl.silderList.stop(true,true).animate({marginTop:- gl.silderList_li.height() * gl.pagesize},300);
			}else if(opt.isMode == "isOpacity"){
				gl.silderList_li.eq(gl.pagesize).stop(true,true).fadeIn(1000).siblings().stop(true,true).fadeOut(100);
			}
		}
    };
    g.obj = $(obj);
	var gl = {//全局变量
		s_widths : 0,
		wh : {},
		pagesize:0,
		silderList : $('#silder_list',g.obj),
		silderList_li : $('#silder_list li',g.obj),
		img_sizeb : $('#silder_list li',g.obj).size() //图片个数
	};
    g.init();
    return this;
  }
  $.fn.imgSilder = function (options) {
    if (this.length == 0) return; //判断对象是否存在
    this.each(function () {
      if (this.usedSilder) return;
      var opt = $.extend({}, $.fn.silderDefaults, options); //合并已赋值参数
      this.usedSilder = $.extendSilder(this, opt);
    });
  }
})(jQuery);