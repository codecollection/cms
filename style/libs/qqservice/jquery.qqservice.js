/*
 * QQ客服 插件
 * Powered By Mr Zhou
 * QQ 627266138
 * E-mail 627266138qq.com
 * Date 2013-10-19
 * Dependence jquery-1.7.2.min.js
 **/

(function ($) {
  //调用方法 $('.xxx').QqService({q_top:'auto',q_right:'auto'});
  $.fn.QqSerDefaults = { //默认参数
		q_top:'auto', //距离顶部
		q_right:'0',//距离右侧
		q_bottom:'auto', //距离底部
		q_left:'auto', //距离左侧
		q_cssLink:'css/style_1.css',// 样式文件切换
		q_phone:'0791-88152603', //联系电话
		q_data:'abc', //qq html 内容
		q_code_data:'abc'//二维码内容
  };
  $.extendQqSer = function (opt) { //opt 参数对象
    var g = {  //公共方法， 外部可调用
      //初始化
		init: function () {
			var html=""; //初始化QQ客服结构
			html += '<div class="contact-us" id="contact-us">';
			html += '   <div class="qq_ser" id="qq_ser">';
			html += '		<div class="qq_rel">';
			html += '			<a href="javascript:void(0);" class="us-hover"></a>';
			html += '			<div class="contact-info" id="contact-info">';
			html += '				<span class="us-title"></span>';
			html += '				<ul>';
			html +=						opt.q_data;
			html += '				</ul>';
			html += '				<span class="us-bottom"></span>';
			html += '			</div>';
			html += '		</div>';
			html += '	</div>';
			html += '</div>';
			$(document.body).append(html);
			g.LoadCSS(opt.q_cssLink); //样式文件导入
			//样式 定义
			var v_bottom = opt.q_bottom == 'auto' ? opt.q_bottom : opt.q_bottom + 'px';
			var v_top = opt.q_top == 'auto' ? opt.q_top : opt.q_top + 'px';
			var v_right = opt.q_right == 'auto' ? opt.q_right : opt.q_right + 'px';
			var v_left = opt.q_left == 'auto' ? opt.q_left : opt.q_left + 'px';
			$('#contact-us').css({top: v_top, right : v_right, left : v_left,bottom: v_bottom });
			p.q_click();
			p.q_scroll(); //屏幕滚动
		  },
		  LoadCSS:function(url){
			var s = document.createElement("LINK");
				s.rel = "stylesheet";
				s.type = "text/css";
				s.href = url;
				document.getElementsByTagName("HEAD")[0].appendChild(s);
		  }
    };

	var p ={ //私有函数，外部不可调用
		q_click:function(){
			$("#qq_ser .us-hover").on("click",function(){ //qq客服鼠标悬浮样式切换
				if(!$(this).hasClass("us_show")){
					$(this).addClass("us_show");
					$(".qq_rel").stop(true,true).animate({right:0},500);
				}else{
					$(this).removeClass("us_show");
					$(".qq_rel").stop(true,true).animate({right:"-120px"},500);
				}
			});
		},
		q_scroll:function(){
			$(window).scroll(function(){
				var t_top = opt.q_top == 'auto' ? opt.q_top : opt.q_top;
				var scr_top = parseInt($(this).scrollTop(),10) + parseInt(t_top,10); 
				$("#contact-us").stop().animate({'top': scr_top + 'px'},500); 
			});
		}
	}; 
    g.init();
	return g;
  }
  $.QqService = function (options) {
      var opt = $.extend({}, $.fn.QqSerDefaults, options); //合并已赋值参数
	  $.extendQqSer(opt);
  }
})(jQuery);
