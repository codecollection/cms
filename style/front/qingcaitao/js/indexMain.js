$(document).ready(function(){
	var $doc=$(document).scrollTop(1);
	var flag=false;//第一次进入页面
	var timer,once=1;
	var $banner=$(".banner");
	$(window).scroll(function(){
		if(once==1){once=null;return false;}
		if($doc.scrollTop()<3){
			clearTimeout(timer);
			if(flag!=1){
				timer=setTimeout(function(){
					flag=1;//banner展开
					$banner.stop(true,true).animate({"height":"100%"},400);
				},200);
			}
			
		}else{
			clearTimeout(timer);
			if(flag!=2){
				timer=setTimeout(function(){
					flag=2;//banner收起
					$banner.stop(true,true).animate({"height":"68%"},400);
				},200);
			}
		}
	})
	
	  $('.flexslider').flexslider({
		directionNav: true,
		pauseOnAction: false
	});  
	
	$('#marquee').kxbdSuperMarquee({
		distance:365,
		time:3,
		btnGo:{left:'#goR',right:'#goL'},
		direction:'left'
	});	
	$(".cu-show").hover(function(){
		$('.control').toggle();
	});
	
	$("#xinshou").click(function(){
		$("#topImg1").slideDown(1200);
		$(".backToTop").addClass("backToTopFixed");
	})
	$("#topImg1 span").click(function(){
			$("#topImg1").slideUp(1200,function(){$(".backToTop").removeClass("backToTopFixed");});
		})
	
	
	$(".help2").hover(function(){
		$('.help-r').toggle(300);
	})
	$(".help1").hover(function(){
		$('.help-l').toggle(300);
	})
	$(".help-l, .btn-2").click(function() {
		$(".help1").hide();
		$(".help2").fadeIn();
		$(".h-btn a").removeClass("on");
		$(".btn-2").addClass("on");
	               
	}); 
	$(".help-r, .btn-1").click(function() {
		$(".help2").hide();
		$(".help1").fadeIn();
		$(".h-btn a").removeClass("on");
		$(".btn-1").addClass("on");
	               
	}); 
	
	
//		var isfocus=false;
//		var $searchs=$("#search-s");
//		  $searchs.hover(function(){
//	 		 $("#reasultbox").show(); 
//	   });
		  $(document).click(function() {
			    $("#reasultbox").hide();                    
			  });         
//		  $("#reasultbox").mouseleave(function(){
//			  $(this).hide();
//		  })
		  
		  
		  var isfocus=false,isOnResultBox=false;
		var $searchs=$("#search-s");
		  $searchs.hover(function(){
	 		 $("#reasultbox").show(); 
	   },function(){
		   setTimeout(function(){if(!isOnResultBox){
			   $("#reasultbox").hide();
		   }},300)
	   });
	  $("#reasultbox").mouseenter(function(){
			 isOnResultBox=true;
		 }).mouseleave(function(){
			 var $this=$(this);isOnResultBox=false;
			setTimeout(function(){$this.hide();},300);
		 })
	 $("#reasultbox li").click(function(){
	    var thistext = $(this).text();           
	    $(".serach2 ul").hide();                  
	  $("#search-s span").text(thistext);
	  $("#range").val(parseFloat($(this).text()));
	  });
	  // var $toggleWay=$("#toggleWay");
	  //search1
	  var $search1=$(".search1");
	  var $search2=$(".search2");
	  var $curent=$("#curent");
	$("#serBtn").click(function() {
		if($search1.is(":visible")){
			$curent.val(2);
			$search1.slideUp(150);
			$search2.slideDown(200);	
		}else{
			$curent.val(1);
			$search2.slideUp(150);
			$search1.slideDown(200);
			
		}});     
	 //$("#reasultbox").niceScroll({  
	//	cursorcolor:"#999",  
		//cursoropacitymax:1,  
		//touchbehavior:false,  
		//cursorwidth:"8px",  
		//cursorborder:"0",  
	//	cursorborderradius:"8px"  
	//}); 	
	var ac,ac1;
	$("#searchInput,#custom1").one("focus",function(){
    	ac = new BMap.Autocomplete(    //建立一个自动完成的对象
    			{"input" : "custom","location" :"上海"});
        ac1 = new BMap.Autocomplete(    //建立一个自动完成的对象
    			{"input" : "custom1","location":"上海"});
    }).on("blur",function(){
    	if(navigator.userAgent.toLowerCase().indexOf("ie")>0 && $.trim($(this).val()).length==0){
    		ac.setInputValue("区、小区、路名、地铁、商圈、地段");
   		    ac1.setInputValue("上海体育馆");
    	}
    })
	
    $(document).ready(function(){
        $("#scrollDiv").Scroll({line:1,speed:500,timer:3000,up:"btn1",down:"btn2"});
        });
});
    (function($){
    $.fn.extend({
    Scroll:function(opt,callback){
    //参数初始化
    if(!opt) var opt={};
    var _btnUp = $("#"+ opt.up);//Shawphy:向上按钮
    var _btnDown = $("#"+ opt.down);//Shawphy:向下按钮
    var timerID;
    var _this=this.eq(0).find("ul:first");
    var     lineH=_this.find("li:first").height(), //获取行高
    line=opt.line?parseInt(opt.line,10):parseInt(this.height()/lineH,10), //每次滚动的行数，默认为一屏，即父容器高度
    speed=opt.speed?parseInt(opt.speed,10):500; //卷动速度，数值越大，速度越慢（毫秒）
    timer=opt.timer //?parseInt(opt.timer,10):3000; //滚动的时间间隔（毫秒）
    if(line==0) line=1;
    var upHeight=0-line*lineH;
    //滚动函数
    var scrollUp=function(){
    _btnUp.unbind("click",scrollUp); //Shawphy:取消向上按钮的函数绑定
    _this.animate({
    marginTop:upHeight
    },speed,function(){
    for(i=1;i<=line;i++){
    _this.find("li:first").appendTo(_this);
    }
    _this.css({marginTop:0});
    _btnUp.bind("click",scrollUp); //Shawphy:绑定向上按钮的点击事件
    });
    }
    //Shawphy:向下翻页函数
    var scrollDown=function(){
    _btnDown.unbind("click",scrollDown);
    for(i=1;i<=line;i++){
    _this.find("li:last").show().prependTo(_this);
    }
    _this.css({marginTop:upHeight});
    _this.animate({
    marginTop:0
    },speed,function(){
    _btnDown.bind("click",scrollDown);
    });
    }
    //Shawphy:自动播放
    var autoPlay = function(){
    if(timer)timerID = window.setInterval(scrollUp,timer);
    };
    var autoStop = function(){
    if(timer)window.clearInterval(timerID);
    };
    //鼠标事件绑定
    _this.hover(autoStop,autoPlay).mouseout();
    _btnUp.css("cursor","pointer").click( scrollUp ).hover(autoStop,autoPlay);//Shawphy:向上向下鼠标事件绑定
    _btnDown.css("cursor","pointer").click( scrollDown ).hover(autoStop,autoPlay);
    }
    })
    })(jQuery);
    