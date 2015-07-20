    <meta charset="utf-8"/>
    <meta name="copyright" content="<?php echo HOST;?>"/>
    <link type="image/x-icon" rel="shortcut icon" href="/favicon.ico"/>
    <meta http-equiv="mobile-agent" content="format=xhtml; url=<?php echo HOST;?>"/>
    <meta name="viewport" content="width=1200"/>
    <link rel="canonical" href="<?php echo HOST;?>"/>
    <link href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE?>/css/common.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE?>/css/index.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="<?php echo CSSHOST;?>/style/libs/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="<?php echo CSSHOST;?>/style/libs/common.js"></script>
    <script type="text/javascript" src="<?php echo CSSHOST;?>/style/libs/more.js"></script>
    <script type="text/javascript" src="<?php echo CSSHOST;?>/style/libs/jquery.lazyload.js"></script>
    <link href="<?php echo CSSHOST ?>/style/front/<?php echo TEMPLATE?>/css/navtop.css" rel="stylesheet" type="text/css"/>
    <script>
        $(function() {
            $("img").lazyload({effect : "fadeIn","threshold":200});
   
            $("ul.mod-list").on("hover","li",function(){$(this).toggleClass("hover")});
            $("ul.mod-coming").on("mouseover","li",function(){$(this).addClass("curr").siblings().removeClass("curr")});
            
            $(".mod-cont").on("hover","a:first",function(){$(this).css("top","-140px");});
            
        });
        
        $(document).ready(function(){

            //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
            $(function () {
                $(window).scroll(function(){
                if ($(window).scrollTop()>100){
                $("#toTop").fadeIn(1500);
                }
                else
                {
                $("#toTop").fadeOut(1500);
                }
            });

            //当点击跳转链接后，回到页面顶部位置
            $("#toTop").click(function(){
                $('body,html').animate({scrollTop:0},1000);
                return false;
                });
            });
        });
    </script>