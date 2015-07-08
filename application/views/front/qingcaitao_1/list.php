<!DOCTYPE html>
<html>
    <head>
    <script type="text/javascript">
        var basePath = 'http://www.mogoroom.com:80/';
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="HandheldFriendly" content="true">
    <title>地图找房－蘑菇公寓</title>
    <meta name="keywords" content="上海1500-2000元白领单身公寓，蘑菇公寓">
    <meta name="description" content="上海蘑菇公寓，为你提供1500-2000元白领单身合租公寓出租信息。">
    
<link rel="stylesheet" href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE?>/css/styles.css">
<link rel="stylesheet" href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE?>/css/common.css" >
  
    <style>
        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, input, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video{font-size: 12px;}
        html,body{font-size: 12px;height: 100%;min-width:1220px;}
        nav{background: #fc6622;}
       	.nav_r #nav1 span{font-size:14px;}
        .footWrap{width: 100%;margin-top: -204px;}
        .fools{position: fixed;bottom: -6px;left: 0px;z-index: 99999;}
		.fools span {position: absolute; color:#FFF;top: 20px;right: 40px;cursor: pointer;display: block;width: 50px;height: 50px;font-size: 80px;*padding-bottom: 20px;}
		.fools img{width:100%;min-height: 70px;}
.green-1{display:none!important;}

		.search { padding:0 !important;}
 		.search2 { top:3px !important;}
 		.search .searchBtn2 { top:3px;}
 		.search2 ul li:hover { background-color:#ff6900 !important; color:white; }
		.searchOnMap b { top:17px;}
		#viewList {
			postion:relative !important;
		}
		.folderbtn {
		   position: absolute;
  top: 50%;
  right: 640px;
  width: 25px;
  height: 80px;
  background-color: white;
  z-index: 10;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  cursor: pointer;
  border: 1px solid #c7c7c7;
  border-right: none;
  margin-top:-40px;
			
		 }
		.folderwrap {
			position:relative;
			width:100%;
			height:100%;
		 }
		 
		 .wrapTop {
			position:relative;
			
		 }
		 
		.sectionWrap1 { 
			width:595px;
		}
		
		#map3 { 
		right:642px;
		}
		
		
		.arrow { 
		 background: url("http://www.mogoroom.com:80/pages/imgs/u13.png") no-repeat 0 0;
	  	 width: 20px;
	     height: 20px;
	     position: absolute;
	     top: 28px;
	     left: 0;
	     display:inherit;
		}
		
		.arrow1 {
		 background: url("http://www.mogoroom.com:80/pages/imgs/u14.png") no-repeat 0 0;
	  	 width: 20px;
	     height: 20px;
	     position: absolute;
	     top: 28px;
	     left: 0;
	     z-index:0;
	     display:none;
		}
		
		.searchOnMap {
		border-radius:5px;
		box-shadow:none;
		}
		 
		.select_id:hover {
		background-color:black;
		color:white;
		
	 }
	 
	 .filter a:hover {
	 	color:white;
	 	background-color:#fc6622;
	 }
	 
	 .c-show {display:none; }
	 
	 
	 .filter a { 
	 	padding:0 0px 0px 0px;
	 	transition:none;
	 	margin:0 5px 0 0;
	 	height: 16px;
		padding: 0px 2px 0px 2px;
		line-height: 16px;
	 }
	 /*
	 .filter li {
  padding: 3px 0px 3px 5px;
  }
  
  */	
	 	
	 	.filter .on {
  color: #ed6c00;
  color: white;
  background-color: #fc6622;
  border-radius: 2px;
}
		.sectionWrap1 {
		width:640px;
		}
		
/* 		.b-show {
  display: block;
  display: none;
  } */
  
  
  @media (max-width: 1920px) and (min-width: 0px);
.a_down {
  display: block;
}


.search2 input {

  padding: 10px 0px 10px 15px;
  }
  
  .search input {
  height:22px;
  }
  
  .searchOnMap .search2 input { 
  	line-height:22px;
  }
  
  .tese1 label {
top: -1px;
  position:relative;
   }
   
  .tese1 #f {top: -2px;
  position:relative;}
  .tese1 #d {top: -2px;
  position:relative;}
  
    </style>
    

    
    <script src="http://www.mogoroom.com:80/pages/js/jquery-1.11.0.min.js"></script>
    <script src="http://www.mogoroom.com:80/pages/js/respond.src.js"></script>	
</head>
<body class="">
<!--<div class="fools">
<a href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp" target="_blank"><img src="http://www.mogoroom.com:80/pages/imgs/spring.jpg"></a>
<span class="f-close">×</span>
</div>-->
<nav id="">
    <div class="nav">
        <div class="nav_l">
            <div class="logo"><a href="http://www.mogoroom.com:80/"><img title="回首页" src="http://www.mogoroom.com:80/pages/imgs/logo1.png"></a></div>
            <a href="http://www.mogoroom.com:80/goMap.html" class="on">立即找房</a>
         	<a href="http://www.mogoroom.com:80/queryArticleAll.html">乐活蘑都<i></i></a>
         	<a href="http://www.mogoroom.com:80/gotoBeforeRent.html">租前问答</a>
         	<a href="http://www.mogoroom.com:80/pages/detailPage/baojie.jsp" style='color:#fffd38;'>保洁大升级</a>
        </div>
        <div class="nav_r">
           <!--  <a href="#"><span>注册</span></a>
            <a href="#"><span>登录</span></a> -->
            <a href="http://www.mogoroom.com:80/toAffiliate.html" id="nav1"><span>业主加盟</span></a>

        </div>
    </div>
</nav>
	 
<div class="folderbtn"><i class="arrow"></i><i class="arrow1"></i></div>
	
	
<div class="sectionWrap1"><!-- listFixed-->
	<div class="folderwarp">
		
	</div>
<div class="wrapTop" >
	
		

<div class="filter">
<ul class="filterFx">
<li>
    <b>区&nbsp;域：</b>
    <div class="f f_down" id="a">
        <a href="#">不限</a>
        <a href="#" id="a1" class="select_id">浦东新区</a>
        <a href="#" id="a2" class="select_id">长宁区</a>
        <a href="#" id="a3" class="select_id">普陀区</a>
        <a href="#" id="a4" class="select_id">虹口区</a>
        <a href="#" id="a5" class="select_id">杨浦区</a>
        <a href="#" id="a6" class="select_id">黄浦区</a>
        <a href="#" id="a7" class="select_id">静安区</a>
        <a href="#" id="a8" class="select_id">闸北区</a>
        <a href="#" id="a9" class="select_id">徐汇区</a>
        <a href="#" id="a10" class="select_id">闵行区</a>
        <a href="#" id="a11" class="select_id">宝山区</a>
        <a href="#" id="a12" class="select_id">嘉定区</a>
        <i class="a_down"></i>
    </div>
    <!-- 浦东 -->
    <div class="f4 a1_hide">
    	<a href="#">八佰伴</a><a href="#">北蔡</a><a href="#" id='121.586561,31.24413'>碧云</a><a href="#">曹路</a><a href="#" id='121.499169,31.179505'>昌里</a><a href="#" id='121.704244,31.199441'>川沙</a><a href="#" id='121.521998,31.239079'>东昌站地铁</a><a href="#" id='121.5348,31.234298'>东方路地铁</a><a href="#" id='121.517488,31.17825'>东明路</a><a href="#" id='121.58662,31.345029'>高桥</a><a href="#">高行</a><a href="#" id='121.730079,31.242621'>合庆</a><a href="#">花木</a><a href="#" id='121.752514,31.181921'>江镇</a><a href="#" id='121.597306,31.259608'>金桥</a><a href="#">金杨新村</a><a href="#" id='121.564396,31.232641'>联洋</a><a href="#" id='121.916746,30.930354'>临港</a><a href="#" id='121.525333,31.191109'>六里</a><a href="#" id='121.564069,31.209411'>龙阳路地铁站</a><a href="#">陆家嘴</a><a href="#" id='121.533175,31.242374'>梅园</a><a href="#">南码头</a><a href="#">三林</a><a href="#">上钢新村</a><a href="#" id='121.503649,31.182354'>上南</a><a href="#" id='121.497862,31.191771'>世博滨江</a><a href="#">世纪公园</a><a href="#" id='121.523041,31.216135'>塘桥</a><a href="#">唐镇</a><a href="#">外高桥</a><a href="#">王港</a><a href="#">万祥镇</a><a href="#">潍坊新村</a><a href="#">杨东</a><a href="#" id='121.558409,31.247055'>洋泾</a><a href="#" id='121.577375,31.164699'>御桥</a><a href="#">张江</a><a href="#">周家渡</a><a href="#">周浦</a><a href="#">竹园商贸区</a>
    </div>
     <!-- 长宁 -->
     <div class="f4 a2_hide">
    	<a href="#">北新泾</a><a href="#">长宁周边</a><a href="#" id='121.379191,31.194609'>程家桥</a><a href="#">地铁中山公园</a><a href="#" id='121.373582,31.195999'>动物园</a><a href="#">古北</a><a href="#">虹桥路</a><a href="#">江苏路地铁</a><a href="#">上海影城</a><a href="#">天山路</a><a href="#" id='121.399754,31.211503'>仙霞</a><a href="#" id='121.429861,31.210476'>新华路</a><a href="#">镇宁路</a><a href="#" id='121.412061,31.223725'>周家桥</a>
    </div>
    <!-- 普陀 -->
     <div class="f4 a3_hide">
    	<a href="#">曹杨</a><a href="#">长风公园</a><a href="#">长寿路</a><a href="#" id='121.403939,31.252925'>长征</a><a href="#">甘泉路</a><a href="#">光新</a><a href="#">华东师大</a><a href="#">建德花园</a><a href="#">金沙江路</a><a href="#">李子园</a><a href="#">轻纺市场</a><a href="#">桃浦</a><a href="#">万里城</a><a href="#">武宁路</a><a href="#">宜川路</a><a href="#" id='121.390615,31.259014'>真光</a><a href="#">真如</a><a href="#" id='121.448363,31.260064'>中远两湾城</a>
    </div>
    <!-- 虹口 -->
     <div class="f4 a4_hide">
    	<a href="#" id='121.506591,31.254796'>北外滩</a><a href="#">大柏树</a><a href="#">海宁路</a><a href="#">和平公园</a><a href="#">虹口足球场</a><a href="#">江湾</a><a href="#">凉城</a><a href="#">临平路</a><a href="#">鲁迅公园</a><a href="#">曲阳路</a><a href="#">四川北路</a><a href="#">四平路</a><a href="#" id='121.513412,31.259176'>提篮桥</a><a href="#">周家嘴路</a>
    </div>
    <!-- 杨浦 -->
     <div class="f4 a5_hide">
    	<a href="#">鞍山</a><a href="#" id='121.549451,31.297273'>长白新村</a><a href="#">长阳路</a><a href="#">东外滩</a><a href="#" id='121.539735,31.301831'>黄兴</a><a href="#">江浦路</a><a href="#">控江路</a><a href="#">平凉路</a><a href="#">五角场</a><a href="#">新华医院</a><a href="#" id='121.513219,31.334307'>新江湾城</a><a href="#">杨浦大桥</a><a href="#">杨浦公园</a><a href="#" id='121.538588,31.324206'>中原</a><a href="#">周家嘴路</a>
    </div>
    <!-- 黄浦 -->
     <div class="f4 a6_hide">
    	<a href="#">半淞园路</a><a href="#" id='121.508834,31.219061'>董家渡</a><a href="#">老西门</a><a href="#">南京东路</a><a href="#">南浦大桥</a><a href="#">南外滩</a><a href="#">蓬莱公园</a><a href="#" id='121.479517,31.238918'>人民广场</a><a href="#" id='121.496737,31.241822'>外滩</a><a href="#" id='121.496122,31.207672'>西藏南路</a><a href="#" id='121.490172,31.217272'>斜桥</a><a href="#">豫园</a><a href="#">打浦桥</a><a href="#">复兴公园</a><a href="#">淮海公园</a><a href="#">淮海中路</a><a href="#">鲁班路</a><a href="#">瑞金二路</a><a href="#">五里桥</a><a href="#" id='121.481824,31.222248'>新天地</a><a href="#">中山南一路</a>
    </div>
    <!-- 静安-->
     <div class="f4 a7_hide">
    	<a href="#">北京西路</a><a href="#">曹家渡</a><a href="#" id='121.456586,31.243192'>江宁路</a><a href="#">静安寺</a><a href="#">南京西路</a><a href="#">上海电视台</a><a href="#">西康路</a><a href="#">新闸路</a><a href="#">玉佛寺</a>
    </div>
    <!-- 闸北 -->
     <div class="f4 a8_hide">
    	<a href="#" id='121.483217,31.260068'>宝山路</a><a href="#">场中路</a><a href="#">大宁路</a><a href="#">共和新路</a><a href="#" id='121.473514,31.272434'>和田地区</a><a href="#">老北站</a><a href="#" id='121.455097,31.312943'>彭浦</a><a href="#" id='121.461272,31.25198'>天目西路</a><a href="#">汶水路</a><a href="#" id='121.472757,31.267929'>西藏北路</a><a href="#" id='121.462056,31.25592'>新客站</a><a href="#" id='121.461893,31.27806'>延长路</a><a href="#">闸北公园</a><a href="#" id='121.467256,31.263428'>芷江西路</a>
    </div>
    <!-- 徐汇 -->
     <div class="f4 a9_hide">
    	<a href="#" id='121.441497,31.174596'>漕宝路地铁</a><a href="#">漕河泾</a><a href="#">长桥</a><a href="#" id='121.460859,31.205001'>枫林路</a><a href="#">复兴中路</a><a href="#">衡山路</a><a href="#">华东理工</a><a href="#">淮海西路</a><a href="#" id='121.454786,31.125495'>华泾</a><a href="#">湖南路</a><a href="#" id='121.417653,31.15747'>康建</a><a href="#" id='121.428356,31.138331'>凌云路</a><a href="#">龙华</a><a href="#" id='121.470535,31.201754'>日晖新村</a><a href="#" id='121.440056,31.205692'>上海交大</a><a href="#" id='121.436044,31.161045'>上海南站</a><a href="#">上海师大</a><a href="#">上海图书馆</a><a href="#" id='121.450202,31.152495'>上海植物园</a><a href="#">田林</a><a href="#">万体馆</a><a href="#" id='121.463386,31.223308'>襄阳公园</a><a href="#" id='121.463386,31.223308'>斜土路</a><a href="#">徐家汇</a><a href="#" id='121.454805,31.20468'>肇嘉浜路</a>
    </div>
    <!-- 闵行 -->
     <div class="f4 a10_hide">
    	<a href="#" id='121.416599,31.050866'>北桥</a><a href="#">漕宝路</a><a href="#" id='121.402009,31.1087'>春申</a><a href="#">东兰新村</a><a href="#" id='121.237895,31.204499'>凤溪</a><a href="#">古美</a><a href="#">罗阳</a><a href="#">航华</a><a href="#" id='121.409071,31.168068'>虹梅路</a><a href="#" id='121.409071,31.168068'>虹桥</a><a href="#" id='121.335989,31.227954'>华漕</a><a href="#">江川路</a><a href="#">静安新城</a><a href="#" id='121.403344,31.18758'>金虹桥</a><a href="#" id='121.277644,31.244043'>纪王</a><a href="#">老闵行</a><a href="#">龙柏金汇</a><a href="#" id='121.375408,31.035922'>马桥</a><a href="#">梅陇</a><a href="#">南方商城</a><a href="#" id='121.523285,31.081473'>浦江</a><a href="#">蔷薇新村</a><a href="#">七宝</a><a href="#">七莘路</a><a href="#">莘庄</a><a href="#">莘庄工业区</a><a href="#">吴泾</a><a href="#" id='121.403974,31.070308'>颛桥</a><a href="#">诸翟</a>
    </div>
    <!-- 宝山-->
     <div class="f4 a11_hide">
    	<a href="#" id='121.423836,31.293751'>大场</a><a href="#" id='121.42086,31.282244'>大华路</a><a href="#">高境</a><a href="#" id='121.440458,31.361557'>共富新村</a><a href="#">共康顾村</a><a href="#" id='121.395906,31.330248'>锦秋花园</a><a href="#" id='121.368889,31.363427'>刘行</a><a href="#">罗店</a><a href="#" id='121.350744,31.485071'>罗泾</a><a href="#">罗南</a><a href="#">上海大学</a><a href="#" id='121.494718,31.387101'>水产路</a><a href="#" id='121.459835,31.346086'>泗塘</a><a href="#">淞宝</a><a href="#">淞南</a><a href="#" id='121.447817,31.337798'>通河新村</a><a href="#">杨行</a><a href="#" id='121.489691,31.41107'>友谊路</a><a href="#">月浦</a><a href="#">张庙</a>
    </div>
    <!-- 嘉定-->
     <div class="f4 a12_hide">
    	<a href="#">安亭</a><a href="#" id='121.315316,31.44054'>曹王</a><a href="#" id='121.300327,31.269555'>封浜</a><a href="#" id='121.362183,31.248367'>丰庄</a><a href="#">黄渡</a><a href="#" id='121.247056,31.469307'>华亭</a><a href="#" id='121.271711,31.382343'>嘉定城区</a><a href="#" id='121.317611,31.24963'>金鹤新城</a><a href="#" id='121.252478,31.398114'>菊园新区</a><a href="#" id='121.223676,31.440763'>娄塘</a><a href="#" id='121.28343,31.325402'>马陆</a><a href="#" id='121.329748,31.303357'>南翔</a><a href="#" id='121.240659,31.471582'>唐行</a><a href="#" id='121.168862,31.368681'>外冈</a><a href="#" id='121.287296,31.422014'>徐行</a><a href="#" id='121.380196,31.260731'>真新</a><a href="#" id='121.206393,31.414264'>朱桥</a>
    </div>
</li>
<li><b>地&nbsp;铁：</b>
    <div class="f f_down" id="b">
        <a class="" href="#">不限</a>
        <a href="#" id="b0">1号线</a>
        <a href="#" id="b1">2号线</a>
        <a href="#" id="b2">3号线</a>
        <a href="#" id="b3">4号线</a>
        <a href="#" id="b4">5号线</a>
        <a href="#" id="b5">6号线</a>
        <a href="#" id="b6">7号线</a>
        <a href="#" id="b7">8号线</a>
        <a href="#" id="b8">9号线</a>
        <a href="#" id="b9">10号线</a>
        <a href="#" id="b10">11号线</a>
        <a href="#" id="b11">12号线</a>
        <a href="#" id="b12">13号线</a>
        <a href="#" id="b13">16号线</a>
        <i class="a_down b-show"></i>
    </div>
</li>
<li><b>租&nbsp;金：</b> <div class="f f_down" id="c">
        <a href="#">不限</a>
        <a class="" href="#">1500-2000元</a>
        <a href="#">2000-2500元</a>
        <a href="#">2500-3000元</a>
        <a href="#">3000-3500元</a>
        <a href="#">3500-4000元</a>
        <a href="#">4000元以上</a>
        <i class="a_down c-show"></i>
        <!-- <input class="price-tag" value="￥" readonly="readonly" type="text"><input class="search-byprice input-floor" autocomplete="off" type="text">-
        <input class="price-tag" value="￥" readonly="readonly" type="text"><input class="search-byprice" autocomplete="off" type="text">
        <input class="search-price" value="确定"  type="button"> -->
</div>
</li>
<li><b>方&nbsp;式：</b> <div class="f f_down" id="j">
        <a href="#">不限</a>
        <a class="" href="#">单身公寓</a>
        <a href="#">整租</a>
        <a href="#">合租</a>
</div>
</li>
<li class="tese1" id="e"><b>特&nbsp;色：</b>
    <a style="float:left;cursor:pointer;margin-top:2px;" >不限</a>
    <span ><label><input value="阳台" type="checkbox">&nbsp;阳台</label></span>
    <span><label><input value="飘窗" type="checkbox">&nbsp;飘窗</label></span>
    <span><label><input value="独卫" type="checkbox">&nbsp;独卫</label></span>
    &nbsp;
    <!-- <select id="ts"  style="font-size:12px;">
        <option selected="selected" value="0">厅室</option>
        <option value="1">一室</option>
        <option value="2">二室</option>
        <option value="3">三室</option>
        <option value="4">四室</option>
        <option value="5">五室及以上</option>
    </select>
    <select id="pz"  style="font-size:12px;">
        <option selected="selected" value="0">配置</option>
        <option value="1">独卫</option>
        <option value="2">飘窗</option>
        <option value="3">阳台</option>
    </select> -->
    <select id="f"  style="font-size:12px;">
        <option selected="selected" value="0">朝向</option>
        <option value="1">东</option>
        <option value="2">南</option>
        <option value="3">西</option>
        <option value="4">北</option>
        <option value="5">东南</option>
        <option value="6">东北</option>
        <option value="7">西南</option>
        <option value="8">西北</option>
    </select>
    <select id="d" style="font-size:12px;">
        <option selected="selected" value="0">风格</option>
        <option value="1">蓝色波普</option>
        <option value="2">绿色乡村</option>
        <option value="3">棕色爵士</option>
        <option value="4">金色维也纳</option>
    </select>
</li>
<li style="height:24px;"><b>室&nbsp;友：</b>
<div>
<div class="blk0">
    <div class="mgk0">
    <input class="qParam0" value="星座" readonly="true" type="text" id="g">
        <i></i>
        <ul style="display: none;">
            <li>水瓶座（01.20-02.18）</li>
            <li>双鱼座（02.19-03.20）</li>
            <li>白羊座（03.21-04.19）</li>
            <li>金牛座（04.20-05.20）</li>
            <li>双子座（05.21-06.21）</li>
            <li>巨蟹座（06.22-07.22）</li>
            <li>狮子座（07.23-08.22）</li>
            <li>处女座（08.23-09.22）</li>
            <li>天秤座（09.23-10.23）</li>
            <li>天蝎座（10.24-11.22）</li>
            <li>射手座（11.23-12.21）</li>
            <li>摩羯座（12.22-01.19）</li>
        </ul>
    </div>
</div>
<div class="blk1">
<div class="mgk1">
<input class="qParam1" value="职业" type="text" id="h">
<i></i>

</div>
</div>
<div class="blk2">
<div class="mgk2">
<input class="qParam2" value="爱好" type="text" id="i">
<i></i>

</div>
</div>
</div>
<i class="d"></i>
</li>

</ul>
<div id="param">筛选条件：<i>全部清除</i>
</div>
</div>
<div class="content1">
<div class="sort2"><div class="condition"><a class="sort2on" href="#">按价格<b>↓</b><span>↑</span></a><a href="#">按面积<b>↓</b><span>↑</span></a>
<!-- <div class="sort_r">视野内符合条件<font color="#ff6500">25</font>套</div> -->
</div></div>
<div id="viewList">

<ul id="listItem" class="listItem">
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/691.shtml">
		        	
		        			
							
								
							
								
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/1/1/691/691_1400064258906.jpg!small" alt="长宁区天山华庭RoomB北卧">
									
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2720</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">长宁区-天山华庭
		            	
		            	RoomB-朝北-11.0㎡ 
				      	
		            
		            </a><br>
		            <span>都市森林的优雅转身</span>
		        </h1>
		        
		        <div class="room-spec">1/18层&nbsp; | 11.0㎡ | 北卧 | 
		        	绿色乡村
		        	
		        </div>
		        <div>
		          	
						距2号线威宁路站314米，步行约4分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>飘窗</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
			
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/789.shtml">
		        	
		        			
							
								
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/9/0/789/789_1405510320697.jpg!small" alt="闸北区嘉茵苑RoomD东南卧">
									
								
							
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2370</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">闸北区-嘉茵苑
		            	
		            	RoomD-朝东南-12.0㎡ 
				      	
		            
		            </a><br>
		            <span>飘窗前的优雅呈现</span>
		        </h1>
		        
		        <div class="room-spec">1/6层&nbsp; | 12.0㎡ | 东南卧 | 
		        	棕色爵士
		        	
		        </div>
		        <div>
		          	
						距1号线上海马戏城站1600米，步行约20分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>有电视</span>
					
						<span>飘窗</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
			
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/807.shtml">
		        	
		        			
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/7/0/807/807_1428908075041.jpg!small" alt="普陀区中远两湾城RoomD南卧">
									
								
							
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2310</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">普陀区-中远两湾城
		            	
		            	RoomD-朝南-12.0㎡ 
				      	
		            
		            </a><br>
		            <span>外阳台结构增加空间</span>
		        </h1>
		        
		        <div class="room-spec">2/34层&nbsp; | 12.0㎡ | 南卧 | 
		        	绿色乡村
		        	
		        </div>
		        <div>
		          	
						距3号线中潭路站200米，步行约3分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>有电视</span>
					
						<span>外阳台</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
			
				
					
				
			
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green2.png"></a>
		    
		    
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/864.shtml">
		        	
		        			
							
								
							
								
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/4/0/864/864_1402457181268.jpg!small" alt="普陀区中远两湾城四期RoomC南卧">
									
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2920</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">普陀区-中远两湾城四期
		            	
		            	RoomC-朝南-19.0㎡ 
				      	
		            
		            </a><br>
		            <span>爱清风更爱温馨居住</span>
		        </h1>
		        
		        <div class="room-spec">7/34层&nbsp; | 19.0㎡ | 南卧 | 
		        	金色维也纳
		        	
		        </div>
		        <div>
		          	
						距4号线中潭路站144米，步行约2分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>双飘窗</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/1222.shtml">
		        	
		        	
						<img class="flatImg" src="http://image.mogoroom.com//common/cameraman.jpg!small" alt="闵行区古北恒盛苑RoomD南卧">
					
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">3290</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">闵行区-古北恒盛苑
		            	
		            	RoomD-朝南-16.0㎡ 
				      	
		            
		            </a><br>
		            <span>静聆城市的脚步</span>
		        </h1>
		        
		        <div class="room-spec">5/18层&nbsp; | 16.0㎡ | 南卧 | 
		        	金色维也纳
		        	
		        </div>
		        <div>
		          	
						距10号线宋园路站800米，步行约10分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>有电视</span>
					
						<span>外阳台</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
			
				
					
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/1342.shtml">
		        	
		        			
							
								
							
								
							
								
							
								
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/2/1/1342/1342_1407404148981.jpg!small" alt="长宁区上海花城RoomD南卧">
									
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">3330</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">长宁区-上海花城
		            	
		            	RoomD-朝南-20.0㎡ 
				      	
		            
		            </a><br>
		            <span>阳台，这个家最令人流连忘返之地</span>
		        </h1>
		        
		        <div class="room-spec">8/11层&nbsp; | 20.0㎡ | 南卧 | 
		        	棕色爵士
		        	
		        </div>
		        <div>
		          	
						距2号线中山公园站1100米，步行约14分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>有电视</span>
					
						<span>外阳台</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
			
				
					
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/1710.shtml">
		        	
		        			
							
								
							
								
							
								
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/0/0/1710/1710_1408001674447.jpg!small" alt="徐汇区亚都国际名园RoomD南卧">
									
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">3720</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">徐汇区-亚都国际名园
		            	
		            	RoomD-朝南-14.0㎡ 
				      	
		            
		            </a><br>
		            <span>露天花园，城市之中的绿洲情怀</span>
		        </h1>
		        
		        <div class="room-spec">1/33层&nbsp; | 14.0㎡ | 南卧 | 
		        	蓝色波普
		        	
		        </div>
		        <div>
		          	
						距1号线徐家汇站100米，步行约2分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>有电视</span>
					
						<span>外阳台</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
			
				
					
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/2355.shtml">
		        	
		        			
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/5/0/2355/2355_1410349823083.jpg!small" alt="闸北区越秀苑RoomA南卧">
									
								
							
								
							
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">3190</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">闸北区-越秀苑
		            	
		            	RoomA-朝南-14.0㎡ 
				      	
		            
		            </a><br>
		            <span>宽景阳台，彰显写意人生</span>
		        </h1>
		        
		        <div class="room-spec">24/27层&nbsp; | 14.0㎡ | 南卧 | 
		        	金色维也纳
		        	
		        </div>
		        <div>
		          	
						距1号线中山北路站380米，步行约5分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>独卫</span>
					
						<span>有电视</span>
					
						<span>外阳台</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
			
				
			
				
					
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/2443.shtml">
		        	
		        	
						<img class="flatImg" src="http://image.mogoroom.com//common/cameraman.jpg!small" alt="闸北区永乐苑RoomC东南卧">
					
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2460</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">闸北区-永乐苑
		            	
		            	RoomC-朝东南-16.4㎡ 
				      	
		            
		            </a><br>
		            <span>躺在沙发上享受下午茶的欢乐时光</span>
		        </h1>
		        
		        <div class="room-spec">5/6层&nbsp; | 16.4㎡ | 东南卧 | 
		        	蓝色波普
		        	
		        </div>
		        <div>
		          	
						距1号线延长路站1000米，步行约13分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>有电视</span>
					
						<span>内阳台</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
			
				
					
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/3231.shtml">
		        	
		        			
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/1/0/3231/3231_1411720097643.jpg!small" alt="徐汇区梓树园RoomC西南卧">
									
								
							
								
							
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2080</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">徐汇区-梓树园
		            	
		            	RoomC-朝西南-8.0㎡ 
				      	
		            
		            </a><br>
		            <span>触碰幸福的温度</span>
		        </h1>
		        
		        <div class="room-spec">2/23层&nbsp; | 8.0㎡ | 西南卧 | 
		        	绿色乡村
		        	
		        </div>
		        <div>
		          	
						距1号线漕宝路站900米，步行约12分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/3280.shtml">
		        	
		        			
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/0/1/3280/3280_1412828241815.jpg!small" alt="长宁区友力大厦公寓RoomB南卧">
									
								
							
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2560</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">长宁区-友力大厦公寓
		            	
		            	RoomB-朝南-9.0㎡ 
				      	
		            
		            </a><br>
		            <span>小空间放飞大梦想</span>
		        </h1>
		        
		        <div class="room-spec">1/31层&nbsp; | 9.0㎡ | 南卧 | 
		        	蓝色波普
		        	
		        </div>
		        <div>
		          	
						距3号线延安西路站420米，步行约6分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>有外阳台</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
					
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/3336.shtml">
		        	
		        			
							
								
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/6/0/3336/3336_1412829195709.jpg!small" alt="徐汇区亚都国际名园RoomD东南卧">
									
								
							
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">3630</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">徐汇区-亚都国际名园
		            	
		            	RoomD-朝东南-13.0㎡ 
				      	
		            
		            </a><br>
		            <span>平静地坐看时光流逝</span>
		        </h1>
		        
		        <div class="room-spec">2/30层&nbsp; | 13.0㎡ | 东南卧 | 
		        	金色维也纳
		        	
		        </div>
		        <div>
		          	
						距1号线徐家汇站100米，步行约2分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>有电视</span>
					
						<span>外阳台</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
			
				
					
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/3369.shtml">
		        	
		        			
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/9/0/3369/3369_1412908169274.jpg!small" alt="闵行区中祥龙柏苑RoomD南卧">
									
								
							
								
							
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2280</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">闵行区-中祥龙柏苑
		            	
		            	RoomD-朝南-15.0㎡ 
				      	
		            
		            </a><br>
		            <span>灵动空间，时尚设计</span>
		        </h1>
		        
		        <div class="room-spec">11/12层&nbsp; | 15.0㎡ | 南卧 | 
		        	棕色爵士
		        	
		        </div>
		        <div>
		          	
						距10号线龙柏新村站490米，步行约7分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>有外阳台</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
					
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/3388.shtml">
		        	
		        			
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/8/1/3388/3388_1412754418770.jpg!small" alt="普陀区半岛花园RoomD西南卧">
									
								
							
								
							
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">3100</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">普陀区-半岛花园
		            	
		            	RoomD-朝西南-16.0㎡ 
				      	
		            
		            </a><br>
		            <span>阳台，带来的不仅是阳光</span>
		        </h1>
		        
		        <div class="room-spec">8/19层&nbsp; | 16.0㎡ | 西南卧 | 
		        	棕色爵士
		        	
		        </div>
		        <div>
		          	
						距7号线镇坪路站342米，步行约5分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>有外阳台</span>
					
						<span>有电视</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
					
				
			
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/3478.shtml">
		        	
		        			
							
								
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/8/1/3478/3478_1413184823060.jpg!small" alt="黄浦区黄浦逸城（新凌大厦）RoomC北卧">
									
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2560</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">黄浦区-黄浦逸城（新凌大厦）
		            	
		            	RoomC-朝北-9.0㎡ 
				      	
		            
		            </a><br>
		            <span>空间无碍私密，置身于简约</span>
		        </h1>
		        
		        <div class="room-spec">13/28层&nbsp; | 9.0㎡ | 北卧 | 
		        	棕色爵士
		        	
		        </div>
		        <div>
		          	
						距8号线陆家浜路站200米，步行约3分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>地铁沿线</span>
					
						<span>有阳台</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
					
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/3657.shtml">
		        	
		        			
							
								
							
								
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/7/0/3657/3657_1416373986225.jpg!small" alt="闸北区上海滩大宁城RoomE东南卧">
									
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2940</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">闸北区-上海滩大宁城
		            	
		            	RoomE-朝东南-16.0㎡ 
				      	
		            
		            </a><br>
		            <span>阳光灿烂，你的眼里光辉斑斓		</span>
		        </h1>
		        
		        <div class="room-spec">11/33层&nbsp; | 16.0㎡ | 东南卧 | 
		        	绿色乡村
		        	
		        </div>
		        <div>
		          	
						距1号线中山北路站700米，步行约9分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>外阳台</span>
					
						<span>有电视</span>
					
		        </div>
		        
		    </div>
		    
		    
				
					
				
			
				
			
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green2.png"></a>
		    
		    
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/3772.shtml">
		        	
		        			
							
								
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/2/1/3772/3772_1415079751033.jpg!small" alt="徐汇区八五嘉苑RoomA南卧">
									
								
							
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">3530</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">徐汇区-八五嘉苑
		            	
		            	RoomA-朝南-17.0㎡ 
				      	
		            
		            </a><br>
		            <span>彰显贵族与文脉气质</span>
		        </h1>
		        
		        <div class="room-spec">1/28层&nbsp; | 17.0㎡ | 南卧 | 
		        	蓝色波普
		        	
		        </div>
		        <div>
		          	
						距1号线漕宝路站200米，步行约3分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span>有电视</span>
					
						<span>飘窗</span>
					
						<span>独卫</span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
				
			
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/3875.shtml">
		        	
		        			
							
								
							
								
							
								
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/5/2/3875/3875_1432868781454.jpg!small" alt="长宁区嘉利豪园RoomD西北卧">
									
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2130</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">长宁区-嘉利豪园
		            	
		            	RoomD-朝西北-16.0㎡ 
				      	
		            
		            </a><br>
		            <span>简约实用，体验都市生活情调</span>
		        </h1>
		        
		        <div class="room-spec">17/14层&nbsp; | 16.0㎡ | 西北卧 | 
		        	金色维也纳
		        	
		        </div>
		        <div>
		          	
						距10号线上海动物园站218米，步行约3分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span></span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/3996.shtml">
		        	
		        			
							
								
									
									
									
										<img class="flatImg" src="http://image.mogoroom.com/imagefile/room/6/0/3996/3996_1414382517395.jpg!small" alt="长宁区铭晖西郊苑RoomB南卧">
									
								
							
								
							
								
							
								
							
		        	
		        	
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2440</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">长宁区-铭晖西郊苑
		            	
		            	RoomB-朝南-13.7㎡ 
				      	
		            
		            </a><br>
		            <span>格调，环绕左右</span>
		        </h1>
		        
		        <div class="room-spec">6/7层&nbsp; | 13.7㎡ | 南卧 | 
		        	蓝色波普
		        	
		        </div>
		        <div>
		          	
						距2号线北新泾站477米，步行约6分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span></span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
		<li class="">
		    <div class="listPic">
		        <a target="_blank" id="http://www.mogoroom.com:80/room/4029.shtml">
		        	
		        	
						<img class="flatImg" src="http://image.mogoroom.com//common/cameraman.jpg!small" alt="徐汇区元福大厦RoomC东北卧">
					
		        </a>
		    </div>
		    <div class="listElse">
		         <span class="price">2460</span>元/月
		    </div>
		    <div class="listDescribe">
		        <h1>
		            <a target="_blank">徐汇区-元福大厦
		            	
		            	RoomC-朝东北-10.0㎡ 
				      	
		            
		            </a><br>
		            <span>优雅品味的小展现</span>
		        </h1>
		        
		        <div class="room-spec">24/28层&nbsp; | 10.0㎡ | 东北卧 | 
		        	棕色爵士
		        	
		        </div>
		        <div>
		          	
						距11号线徐家汇站488米，步行约7分钟
					
		        </div>
		        <div class="feature">
		        	<span>单身公寓</span>
		        	
		        	
		            
						<span></span>
					
		        </div>
		        
		    </div>
		    
		    
				
			
		    
		    
		    
		    
			    <a class="green-1" target="_blank" href="http://www.mogoroom.com:80/pages/activity/springLiving.jsp""><img src="http://www.mogoroom.com:80/pages/imgs/green1.png"></a>
		    
		   
		</li>
	
	
</ul>

	<div class="pagenation1">
	<span style="width:60px;margin-right:10px;">上一页</span>
<span class="pageOn">1</span>
	<a href="2">2</a>
	<a href="3">3</a>
	<a href="4">4</a>
	<a href="5">5</a>
	<a href="6">6</a>
	<a href="7">7</a>
	<a href="8">8</a>
 <span>...</span> <a href=2 style="width:60px;" id="nextPage" >下一页</a>
</div>

</div>
</div>
<div class="warpB"></div>
</div>









<div class="footWrap">
  <div class="footHeader">
  <div class="jiathis_style fl">
	        <a class="jiathis_button_tsina"></a>
	        <a class="jiathis_button_tqq"></a>
	        <a class="jiathis_button_weixin"></a>
	        <a class="jiathis_button_xiaoyou"></a>
	    </div>
     <div class="contact-f">
     	<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNDM5NF8xNzI1NjlfNDAwODAwNDk0OV8yXw" target="_bla" +"nk"="" >在线客服</a>
     </div> 
     <!-- <div id="us" style="padding-top:10px;"></div> -->
   <div class="contact_l"><a href="http://www.mogoroom.com:80/gotoAboutAs.html">关于我们</a>  |  <a href="javascript:;"  id="a_h_c">业务介绍</a>  |  <a href="http://www.mogoroom.com:80/gotoAboutAs.html#top2">加入蘑菇</a>  |  <a href="javascript:;" id="a_h_d">投诉建议</a> | <a href="http://www.mogoroom.com:80/gotoAboutAs.html#link">友情链接</a></div>
    <p> 全国热线：400-800-4949（周一至周日9：00-21：00）| 客服邮箱：service@mogoroom.com </p>
	<p> Copyright © 2013-2014上海墨果资产管理有限公司版权所有 沪ICP备14004976号 </p>
   </div>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1350630260781740" charset="utf-8"></script>
<style> 
.jiathis_style .jtico {
    width: 36px;
    height: 36px !important;
    line-height:36px!important;
    padding-left:0px!important;
    background:url(http://www.mogoroom.com:80/pages/imgs/img_04.png) no-repeat -60px -137px!important;
}
.jiathis_style .jtico_tqq {background-position: -98px -137px!important;}
.jiathis_style .jtico_weixin {background-position: -135px -137px!important;}
.jiathis_style .jtico_xiaoyou {background-position: -171px -137px!important;}
</style>
<script>
$(document).ready(function(){
	$("#a_h_c").click(function(){
		$(".yesj").show(); 	
	});
	$("#a_h_d").click(function(){
		$(".tsjy").show(); 	
	});
	$(".m-c").click(function(){
		$(".tryBox").hide(); 	
	});
	$(window).scroll(function() {		
		if($(window).scrollTop() >= 500){
			$(".backToTop").fadeIn(300); 
		}else{    
			$(".backToTop").fadeOut(300);    
		}  
	});
	$(function(){
		$("#suggestForm [required]").on("blur",function(){
			var $this=$(this);
			if($this.val()==""){
				$this.addClass("err").siblings(".errMsg").show();
			}else{
				$this.removeClass("err").siblings(".errMsg").hide();
			}
			if($this.hasClass("phone")){
				if($this.val().length!=11){
					$this.addClass("err").siblings(".errMsg").show();
				}else{
					$this.removeClass("err").siblings(".errMsg").hide();
				}
			}
		})
	})	
})
function returnsuggestForm(){
	$("#suggestForm [required]").blur();
	if($("#suggestForm .err").length!=0){
		return false;
	}
}
</script>
</div>

<!-- <div id="map3"></div> -->
<!-- <div class="map3_search">
<div class="search searchOnMap">
			<form action="http://www.mogoroom.com:80/goMap.html" method="post" id="customRoomList">
				<input type="submit" class="searchBtn2" value="搜 索">
				<div class="search1" ><i class="searchBtn1"></i>
                    <input class="search-input"  name="custom"  id="searchInput" autocomplete="off" type="text"  placeholder="区、小区、路名、地铁、商圈、地段" value="区、小区、路名、地铁、商圈、地段">
                </div>
                <div class="search2">
                	<span>在</span><input class="search-input" name="custom1"  id="custom1" autocomplete="off" type="text"  placeholder="上海体育馆" ><span>附近</span>
                	<div class="range">
                	<div id="search-s"><span>2公里</span><i></i></div>
                    <ul id="reasultbox">
                    	<li>0.5公里</li>
                    	<li>1公里</li>
                        <li>1.5公里</li>
                        <li>2公里</li>
                        <li>3公里</li>
                        <li>5公里</li>
                        </ul>
                        </div>
                   </div>
			 </form>
              <b id="serBtn"></b>
		</div>
<div class="canDrag"><label><input type="checkbox" checked id="canDragSearch"> 移动地图时搜索</label></div>
</div> -->
<div class="tryBox yesj" style="display: none;">
	<div class="m-d-g"></div>
	<div class="m-d-b p-d">
		<div class="m-t pr">业务介绍<a class="m-c"></a></div>
		<div class="m-c-n tc">
			<p>蘑菇公寓业务介绍热线:</p>
			<p class="f_26 pt20">400-800-4949转0</p>
			<p class="pt30" style="color:#666;">周一至周日: 9:00-18:00</p>
		</div>
	</div>
</div>
<div class="tryBox tsjy" style="display: none;">
	<div class="m-d-g"></div>
	<div class="m-d-b p-d">
		<div class="m-t pr">投诉建议<a class="m-c"></a></div>
		<div class="m-c-n tc">
			<p>蘑菇公寓投诉建议热线:</p>
			<p class="f_26 pt20">400-800-4949转0</p>
			<p class="pt30" style="color:#666;">周一至周日: 9:00-18:00</p>
		</div>
	</div>
</div>


<script>var fromIE=false;</script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=kKPe6mqjoQ6Ucs8WiqpnASf5"></script>

<!-- <script type="text/javascript" src="http://api.map.baidu.com/library/RichMarker/1.2/src/RichMarker.js"></script> -->
<script type="text/javascript" src="http://www.mogoroom.com/pages/js/RichMarker.js"></script>
<!-- <script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script> -->
<script type="text/javascript" src="http://www.mogoroom.com/pages/js/SearchInfoWindow.js"></script>
<script type="text/javascript" src="http://www.mogoroom.com/pages/js/TextIconOverlay.js"></script>
<script type="text/javascript" src="http://www.mogoroom.com/pages/js/MarkerClusterer.js"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
<script>
var curent='' ||3;
var range='' || 2;
</script>
<script src="http://www.mogoroom.com:80/pages/js/mapMain.js"></script>



<script type="text/javascript">


	$(function(){
		$("#viewList").on("click",".green-1",function(e){
			e.stopPrapogation()
		})
		$("#viewList").on("click","li",function(){
			window.open($(this).find(".listPic a")[0].id);
		})
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
		 
		 var onoff = 0;
	  
		$(".folderbtn").click(function() {
			
			if (onoff == 0) {
    	    $(".sectionWrap1").animate({
    	      right: "-640px"
    	    }, 200);
    	
    	    $("#map3").animate({
    		      right: "0px"
    		    }, 200);
    
    	    $(".folderbtn").animate({
    		      right: "0px"
    		    }, 200);
    	    
    	    $(".arrow").hide();
    	    $(".arrow1").show();
    	    
    	    
    	    
    	    	onoff = 1;
			} 
			
			else if (onoff == 1) {
				 $(".sectionWrap1").animate({
			   	      right: "0"
			   	    }, 200);
			   	
			   	    $("#map3").animate({
			   		      right: "642px"
			   		    }, 200);
			   
			   	    $(".folderbtn").animate({
			   		      right: "640px"
			   		    }, 200);
					
			   	 $(".arrow1").hide();
			   	$(".arrow").show();
			 	
			   	 
						onoff = 0;
					}
			
    	  });
	/* 	
	if (document.body.clientWidth < 1405px ) { 
		 $("..searchOnMap").animate({
			 left: "-15px"
		 }); 
	}
		 */
	/* 
		 
		var width = $(window).width();
		 if (width <= 1300) {
		$(".search .searchBtn2").animate({
	   		top: "300px"
	    });
		 } else {
		 
		 }
	 */
	
	

	 $("#reasultbox li").click(function(){
	     var thistext = $(this).text();           
	    $(this).parent().hide();                  
	  $("#search-s span").text(thistext);
	  range=parseFloat($(this).text());
	  searchHandler(true);
	  });
	  // var $toggleWay=$("#toggleWay");
	  //search1
	$(".a_down").click(function(){
		$(this).parent().toggleClass("f_down");
		$(this).toggleClass("a_up");
	});
	

	 $(".select_id").click(function(){
		var id = $(this).attr("id")
		$(".select_id").removeClass("on");
		$(this).addClass("on")
		$(".f4").removeClass("f4_show");
		$("." + id + "_hide").addClass("f4_show");
	}); 
	})
	var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js\?3ec7e3d28d9ba9e3a04f6f3f9f7ed0e8";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cspan id='cnzz_stat_icon_1253147438'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/z_stat.php%3Fid%3D1253147438%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>
