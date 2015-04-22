(function ($) {
  //调用方法 $('.xxx').date.select();
  $.fn.dateDefaults = { //默认参数
		curmonth: new Date().getMonth(), //当前月份
		defaultShow:false, //默认是否显示，false不显示，true 显示
		iptID:'curMonth_hidden',//隐藏域ID
        date_style:'',//传样式
		cur_day:[] //已选中日期
  };
  $.extendDate = function (obj,opt) { //opt 参数对象,obj 传入的对象
    var g = {  //公共方法， 外部可调用
      //初始化
		init: function () {
			var opt_curMonth = opt.curmonth + 1;//当前月份
			var m_iptID = $('#'+opt.iptID);//隐藏域ID
            g.obj.parent().css({position:'relative'});//设置父级标签相对定位

			if($('#date_wrap_'+ opt_curMonth +'').length){
				$('#date_wrap_'+ opt_curMonth +'').hide();//初始化隐藏
			}
			var $date = new Date(); //当前的时间对象  
			var $year = $date.getFullYear();  
			var $month = $date.getMonth() + 1;  
			var daysOfMonth = g._calcDaysForMonth($year,opt_curMonth);  
			var firstDayOfMonth = g._calcFirstDayPosition($year,opt_curMonth);
			var ipt_top = g.obj.position().top + g.obj.height() + 4;
			var ipt_left = g.obj.position().left;
			var dateArr = [];
			var count = 1;
			var html ='';
				html +='<div class="date_wrap" id="date_wrap_'+ opt_curMonth +'" style="'+ opt.date_style +'">';
				html +='	<div class="cur_time">'+ opt_curMonth +'月</div>';
				html +='	<div class="day_sort"><span>日</span><span>一</span><span>二</span><span>三</span><span>四</span><span>五</span><span>六</span></div>';
				html +='	<div class="day_list" id="day_list">';
				outer:
				for(var i=1; i<7;i++){
					for(var j=1;j<7;j++){
						if(j<=firstDayOfMonth && i==1){  
							html += ('<span></span>');
						}else{
							if((count <= $date.getDate() && $month===opt_curMonth) || new Date($year,opt_curMonth-1,count).getDay() == 0 || new Date($year,opt_curMonth-1,count).getDay() == 6){//双休及当前日期之前的日期判断
								html += ('<span class="colEEE">'+ count +'</span>');
							}else if($date.getDate()===count && $month===opt_curMonth){  
								html += ('<a href="javascript:void(0);" class="colFFDE89" data-year="'+ $year +'" data-month="'+ opt_curMonth +'" day="'+  +'" data-day="'+ count +'">'+ count +'</a>');
							}else{  
								html += ('<a href="javascript:void(0);" data-year="'+ $year +'" data-month="'+ opt_curMonth +'" data-day="'+ count +'">'+ count +'</a>');  
							}  
							
							count++;
							if(count > daysOfMonth){
								break outer;
							}
						}
					}
				}
				html +='	</div>';
				html +='</div>';
				if(!$('#date_wrap_'+ opt_curMonth +'').length){
					g.obj.append(html);
				}else{
					$('#date_wrap_'+ opt_curMonth +'').show();
				}
				if(opt.cur_day.length){//已选中日期
					for(var i=0; i<opt.cur_day.length; i++){
						var dayArr = opt.cur_day[i].substr(opt.cur_day[i].lastIndexOf('-') + 1);
						var monthArr = opt.cur_day[i].substr(opt.cur_day[i].indexOf('-') + 1,2);
						var yearArr = opt.cur_day[i].substr(0,opt.cur_day[i].indexOf('-'));
						$("#date_wrap_"+ opt_curMonth +" #day_list a[data-year="+ yearArr +"][data-month="+ monthArr +"][data-day="+ dayArr +"]").addClass('current');
					}
				}

				$('#date_wrap_'+ opt_curMonth +'').css({left:ipt_left +'px',top:ipt_top+'px'});
				$('#day_list a','#date_wrap_'+ opt_curMonth +'').on('click',function(){
					var date_str = $(this).attr('data-year') + '-' + $(this).attr('data-month') + '-' + $(this).attr('data-day');
					dateArr = m_iptID.val() == '' ? [] : m_iptID.val().split("|");
					var hasDate = $.inArray(date_str,dateArr);
					if($(this).hasClass('current')){
						$(this).removeClass('current');
					}else{
						$(this).addClass('current');
					}
					if(hasDate == -1){
						dateArr.push(date_str);
					}else{
						dateArr.splice(hasDate,1);
					}
					m_iptID.val(dateArr.join("|"));
				});

				if(opt.defaultShow){//defaultShow ，true 为显示，false 不显示
					$('#date_wrap_'+ opt_curMonth +'').css('display','block');
				}else{
					$('#date_wrap_'+ opt_curMonth +'').hover(function(){},function(){$(this).hide();});
                    g.obj.on('click',function(e){
                        var objSty = $('#date_wrap_'+ opt_curMonth +'')[0].style;
                        if(objSty.display == 'none'){
                            $('#date_wrap_'+ opt_curMonth +'').show();
                        }else{
                            $('#date_wrap_'+ opt_curMonth +'').hide();
                        }
                    });
				}
				
		  },
		  _calcDaysForMonth:function(year,month){//计算一个月有多少天 
				var days = (new Date(+(new Date(year, month, 1)) - 86400000)).getDate();  
				return days;
		  },
		  _calcFirstDayPosition:function(year,month){//计算这个月的第一天显示的的位置，可以根据它的星期来计算
				return new Date(year, month -1,1).getDay();
		  }
    };
	g.obj = $(obj);
    g.init();
	return g;
  }
  $.fn.dateSelect = function(options) {
    if (this.length == 0) return; //判断对象是否存在
    this.each(function () {
      if (this.usedDateSel) return;
      var opt = $.extend({}, $.fn.dateDefaults, options); //合并已赋值参数
      this.usedDateSel = $.extendDate(this, opt);
    });
  }
})(jQuery);
