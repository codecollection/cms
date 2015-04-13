/*
 * 通用性二级菜单显示 插件
 * Powered By Mr Zhou
 * QQ 627266138
 * E-mail 627266138qq.com
 * Date 2013-12-11
 * Dependence jquery-1.7.2.min.js
 **/

//调用方法 $.linkHover({wrapNav:""});
  /* 结构参考
    <ul class="wrapNav" id="wrapNav">
            <li class="siblingsItems si1">
                <a href="javascript:void(0);">1</a>
                <div class="linkMouseClass" style="display:none;">
                    <a href="javascript:void(0);">11</a>
                    <a href="javascript:void(0);">12</a>
                    <a href="javascript:void(0);">13</a>
                    <a href="javascript:void(0);">14</a>
                </div>
            </li>
            <li class="siblingsItems"><a href="javascript:void(0);">2</a></li>
            <li class="siblingsItems si2">
                <a href="javascript:void(0);">3</a>
                 <div class="linkMouseClass" style="display:none;">
                    <a href="javascript:void(0);">31</a>
                    <a href="javascript:void(0);">32</a>
                    <a href="javascript:void(0);">33</a>
                    <a href="javascript:void(0);">34</a>
                </div>
            </li>
            <li class="siblingsItems"><a href="javascript:void(0);">35</a></li>
       </ul>
  */
(function ($) {
  $.fn.linkHoverDefault = { //默认参数
		wrapNav:'.wrapNav', //容器id or class
        siblingsItems:'.siblingsItems', //悬浮父级的同级 class
        linkMouseClass:'.linkMouseClass',//所有需要显示隐藏内容的class
        listContent:['.si1','.si2'] //nav 悬浮处class集合
  };
  $.extendLinkHover = function (opt) { //opt 参数对象
    var g = {  //公共方法， 外部可调用
		init: function () {
			if(opt.wrapNav == undefined || opt.siblingsItems == undefined || opt.linkMouseClass == undefined || opt.listContent == undefined) return false; //判断参数录入
            for(item_val in opt.listContent){
               var linkMouse = opt.listContent[item_val]; //悬浮处  class

               $(linkMouse).hover(function(){
                   $(this).find(opt.linkMouseClass).show().parents(opt.siblingsItems).siblings().find(opt.linkMouseClass).hide();
               },function(){
                   $(this).children(opt.linkMouseClass).hide()
               });
            }             
           
		}
    }; 
    g.init();
	return g;
  }
  $.linkHover = function (options) {      
      var opt = $.extend({}, $.fn.linkHoverDefault, options); //合并已赋值参数
      $.extendLinkHover(opt);
  }
})(jQuery);
