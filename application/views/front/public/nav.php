
<!--topNav:begin-->
<div id="siteNav" class="navFixed">
    <div class="layout">
        <ul class="siteNavMenu">
            <li class="rb"><a href="<?php echo HOST;?>" target="_blank">小肉粽&nbsp;&nbsp;微信公众平台第一站</a>&nbsp;</li>
            <li>
                <div class="menuShow">
                    <a href="http://weibo.com/downjoygame" title="关注新浪微博" target="_blank">
                        <img src="http://raw.android.d.cn/cdroid_res/web/common/transparent.gif" alt="" width="24" class="followSina"/>
                    </a>
                    <span class="arrDropNo"></span>
                </div>
                
            </li>
            
            <li>
                <div class="menuShow">
                    <img src="http://raw.android.d.cn/cdroid_res/web/common/transparent.gif" alt="" width="24" class="followWx" /><span class="arrDrop"></span>
                </div>
                <div class="menuHide">
                    <img src="http://raw.android.d.cn/cdroid_res/web/common/2dcode.gif" alt="微信二维码" class="code" />
                </div>
            </li>
<!--            <li class="lb"><a href="" target="_blank">当乐游戏中心</a> </li>-->
        </ul>
        <ul class="siteNavMenu fr">
            <li class="rb" id="logined_li">
                <div class="menuShow">
                    <a href="javascript:void(0)" class="login"><?php echo !empty($user) ? $user["name"] : "用户登录";?></a><span class="arrDrop"></span>
                </div>
                <div class="menuHide" id="topDMainBox" style="width:<?php echo !empty($user) ? "100px" : "260px";?>">
                    <?php if(!empty($user)){?>
                    <div class="userPanel" style="width:100px;">
<!--                        <img class="userFace" src="http://tools.service.d.cn/userhead/get?mid=177044757&amp;size=middle" id="avatar_url_top_id">-->
                        <div class="userInfo">
      <!--                        <p><?php echo $user["name"];?></p>
                          <p>乐号：177044757</p>
                            <p><a target="_blank" href="http://my.d.cn/message/index.html">有<em id="newMessageCnt_em_id">0</em>未读消息</a></p>-->
                            <p><a class="r b" target="_blank" href="<?php echo AUTHHOST ?>/user/info">个人中心</a></p>
                            <p><a onclick="loginout()" href="javascript:void(0);">退出</a></p>
                        </div>
                    </div>
                    <?php }else{?>
                    <form onsubmit="doLogin();return false;" id="login_form">
                        <p class="tipsText" id="topLoginMsg"></p>
                        <input type="text" value="" name="account" placeholder="用户名/邮箱/手机号" style="color:#b9b9b9" onmouseout="this.className='inputText'" onmousemove="this.className='inputTextOut'"
                               onblur="this.className='inputText';this.onmouseout=function(){this.className='inputText'};if(this.value==''||this.value=='用户名/邮箱/手机号'){this.value='用户名/邮箱/手机号';this.style.color='#b9b9b9';}"
                               onfocus="this.className='inputTextOut';this.onmouseout='';if(this.value=='用户名/邮箱/手机号'){this.value=''};this.style.color='#4f4f4f'" class="inputText"/> <input type="password" id="topLoginBoxPassword" class="inputText" value="请输入密码" style="color:#b9b9b9" placeholder="请输入密码" onmouseout="this.className='inputText'"
                                                                                                                                                                                               onmousemove="this.className='inputTextOut'"
                                                                                                                                                                                               onblur="this.className='inputText';this.onmouseout=function(){this.className='inputText'};if(this.value==''||this.value=='请输入密码'){this.value='请输入密码';this.style.color='#b9b9b9';}"
                                                                                                                                                                                               onfocus="this.className='inputTextOut';this.onmouseout='';if(this.value=='请输入密码'){this.value=''};this.style.color='#4f4f4f'" name="password"/> <input type="submit" value="登录" class="submit"/>
                        <div class="remember">
                            <label><input type="checkbox" class="check" checked="checked" id="topAutoLogin" /><span>自动登录</span></label><a href="<?php echo AUTHHOST ?>/user/login?dispay=web" target="_blank">忘记密码？</a>&nbsp;|&nbsp;<a href="<?php echo AUTHHOST ?>/user/reg?display=web" target="_blank">注册帐号</a>
                        </div>
                    </form>
<!--                    <div class="thirdP">
                        <p>使用合作网站帐号登录：</p>
                        <a class="sina" href="javascript:void(0)">新浪微博</a>
                        <a class="qq" href="javascript:void(0)">QQ账号</a>
                    </div>-->
                    <?php }?>
                </div>
            </li>
            <li>
                <div class="menuShow">
                    <span class="navIcon"></span>
                    <span>帮助中心</span>
                </div>
            </li>
        </ul>
    </div>
</div>
<div id="fullbgTop"></div>
<div id="loginBoxTop" class="dialog"></div>
<!--sitenave e-->

<h1 style="position:absolute;left:-9999px">
      <a href="<?php echo HOST;?>" title="<?php echo $c->getItem('site_name');?>" target="_blank"><?php echo $c->getItem('site_name');?></a>
</h1>

<div class="header-wrap">
    <div class="header clearfix">
        <div class="logo">
            <a title="微信公众推广平台" href="<?php echo HOST;?>">
                <img src="/style/front/public/logo.png" alt="小肉粽微信公众推广平台"/>
            </a>
        </div>
        <div class="form clearfix">
            <form id="sForm" method="get" action="">
                <div class="search-wrap">
                    <i></i>
                    <div class="search-txt">
                        <input id="key" class="txt" type="text" maxlength="30" name="keyword" autocomplete="off"  />     
                    </div>
                </div>
                <div class="search-btn">
                    <button type="submit" class="submit">搜索</button>
                </div>
                <div id="searchResult" class="s-result">
                    
                </div>
            </form>
        </div>
    </div>
</div>
<div class="nav-wrap">
    <ul class="nav clearfix">
        
                <li class="<?php echo $cid <= 0 ? "curr" : "";?>"><a href="<?php echo HOST?>" title="小肉粽微信公众号平台">首页<?php echo $cid <= 0 ? '<span class="nav-bar"></span>' : "";?></a></li>
            
                <li class="<?php echo $cid == 1 ? "curr" : "";?>"><a href="/info/l?cid=1" title="微信公众号">公众号<?php echo $cid == 1 ? '<span class="nav-bar"></span>' : "";?></a></li>
            
                <li><a href="/info/l?cid=2" title="微信公众号资讯">资讯</a></li>
            
            
                <li><a href="/info/special" title="微信公众号专题">专题</a></li>
            
                <li><a href="/info/activity" title="微信公众号最新活动">活动<i></i></a></li>
            
    </ul>
</div>