<?php if ($c->u->isLogin()) { ?>
                            <div class="com-head" id="comHeadHasLogin" style="display:block;">
                                <form action="" onsubmit="return false;" id="comment_form">
                                    <input id="info_id" name="data[info_id]" type="hidden" value="<?php echo $d['cms_public_id'];?>"/>
                                    <input id="model_id" name="data[model_id]" type="hidden" value="<?php echo $d['model_id']?>"/>
                                    <div class="com-head-box">
                                        <div class="com-login">
                                            <textarea name="data[content]" id="content_comment" cols="30" rows="10" style="resize: none;"></textarea>
                                        </div>
                                    </div>
                                    <div class="com-btn-wrap clearfix">
                                        <div class="expressions">
                                            <span></span>
                                            <div class="expFrame">
                                                <em></em>
                                                <p>选择表情<i></i></p>
                                                <div class="expTab fl">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" title="傲慢" emot="[/am]">
                                                                <img alt="傲慢" src="http://img.android.d.cn/android/cdroid_stable/face/web/am.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="爱心" emot="[/ax]">
                                                                <img alt="爱心" src="http://img.android.d.cn/android/cdroid_stable/face/web/ax.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="不开心" emot="[/bkx]">
                                                                <img alt="不开心" src="http://img.android.d.cn/android/cdroid_stable/face/web/bkx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="鄙视" emot="[/bs]">
                                                                <img alt="鄙视" src="http://img.android.d.cn/android/cdroid_stable/face/web/bs.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="NO" emot="[/bx]">
                                                                <img alt="NO" src="http://img.android.d.cn/android/cdroid_stable/face/web/bx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="闭嘴" emot="[/bz]">
                                                                <img alt="闭嘴" src="http://img.android.d.cn/android/cdroid_stable/face/web/bz.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="擦汗" emot="[/ch]">
                                                                <img alt="擦汗" src="http://img.android.d.cn/android/cdroid_stable/face/web/ch.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="呆" emot="[/d]">
                                                                <img alt="呆" src="http://img.android.d.cn/android/cdroid_stable/face/web/d.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="凋谢" emot="[/dx]">
                                                                <img alt="凋谢" src="http://img.android.d.cn/android/cdroid_stable/face/web/dx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="发火" emot="[/fh]">
                                                                <img alt="发火" src="http://img.android.d.cn/android/cdroid_stable/face/web/fh.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="勾引" emot="[/gy]">
                                                                <img alt="勾引" src="http://img.android.d.cn/android/cdroid_stable/face/web/gy.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="OK" emot="[/hd]">
                                                                <img alt="OK" src="http://img.android.d.cn/android/cdroid_stable/face/web/hd.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="哼" emot="[/heng]">
                                                                <img alt="哼" src="http://img.android.d.cn/android/cdroid_stable/face/web/heng.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="互粉" emot="[/hf]">
                                                                <img alt="互粉" src="http://img.android.d.cn/android/cdroid_stable/face/web/hf.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="坏笑" emot="[/huaix]">
                                                                <img alt="坏笑" src="http://img.android.d.cn/android/cdroid_stable/face/web/huaix.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="害羞" emot="[/hx]">
                                                                <img alt="害羞" src="http://img.android.d.cn/android/cdroid_stable/face/web/hx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="火星人" emot="[/hxr]">
                                                                <img alt="火星人" src="http://img.android.d.cn/android/cdroid_stable/face/web/hxr.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="囧" emot="[/jiong]">
                                                                <img alt="囧" src="http://img.android.d.cn/android/cdroid_stable/face/web/jiong.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="哭" emot="[/k]">
                                                                <img alt="哭" src="http://img.android.d.cn/android/cdroid_stable/face/web/k.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="可爱" emot="[/ka]">
                                                                <img alt="可爱" src="http://img.android.d.cn/android/cdroid_stable/face/web/ka.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="看不见" emot="[/kbj]">
                                                                <img alt="看不见" src="http://img.android.d.cn/android/cdroid_stable/face/web/kbj.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="可怜" emot="[/kl]">
                                                                <img alt="可怜" src="http://img.android.d.cn/android/cdroid_stable/face/web/kl.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="酷" emot="[/ku]">
                                                                <img alt="酷" src="http://img.android.d.cn/android/cdroid_stable/face/web/ku.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="流汗" emot="[/lh]">
                                                                <img alt="流汗" src="http://img.android.d.cn/android/cdroid_stable/face/web/lh.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="玫瑰" emot="[/mg]">
                                                                <img alt="玫瑰" src="http://img.android.d.cn/android/cdroid_stable/face/web/mg.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="怕" emot="[/pa]">
                                                                <img alt="怕" src="http://img.android.d.cn/android/cdroid_stable/face/web/pa.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="强" emot="[/q]">
                                                                <img alt="强" src="http://img.android.d.cn/android/cdroid_stable/face/web/q.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="糗大了" emot="[/qdl]">
                                                                <img alt="糗大了" src="http://img.android.d.cn/android/cdroid_stable/face/web/qdl.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="钱" emot="[/qian]">
                                                                <img alt="钱" src="http://img.android.d.cn/android/cdroid_stable/face/web/qian.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="枪--" emot="[/qiang]">
                                                                <img alt="枪--" src="http://img.android.d.cn/android/cdroid_stable/face/web/qiang.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="亲亲" emot="[/qing]">
                                                                <img alt="亲亲" src="http://img.android.d.cn/android/cdroid_stable/face/web/qing.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="弱" emot="[/r]">
                                                                <img alt="弱" src="http://img.android.d.cn/android/cdroid_stable/face/web/r.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="胜利" emot="[/sl]">
                                                                <img alt="胜利" src="http://img.android.d.cn/android/cdroid_stable/face/web/sl.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="色迷迷" emot="[/smm]">
                                                                <img alt="色迷迷" src="http://img.android.d.cn/android/cdroid_stable/face/web/smm.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="生日蛋糕" emot="[/srdg]">
                                                                <img alt="生日蛋糕" src="http://img.android.d.cn/android/cdroid_stable/face/web/srdg.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="调皮" emot="[/tp]">
                                                                <img alt="调皮" src="http://img.android.d.cn/android/cdroid_stable/face/web/tp.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="偷笑" emot="[/tx]">
                                                                <img alt="偷笑" src="http://img.android.d.cn/android/cdroid_stable/face/web/tx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="挖鼻子" emot="[/wbz]">
                                                                <img alt="挖鼻子" src="http://img.android.d.cn/android/cdroid_stable/face/web/wbz.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="委屈" emot="[/wq]">
                                                                <img alt="委屈" src="http://img.android.d.cn/android/cdroid_stable/face/web/wq.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="微笑" emot="[/wx]">
                                                                <img alt="微笑" src="http://img.android.d.cn/android/cdroid_stable/face/web/wx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="吓" emot="[/x]">
                                                                <img alt="吓" src="http://img.android.d.cn/android/cdroid_stable/face/web/x.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="心碎" emot="[/xs]">
                                                                <img alt="心碎" src="http://img.android.d.cn/android/cdroid_stable/face/web/xs.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="阴险" emot="[/yx]">
                                                                <img alt="阴险" src="http://img.android.d.cn/android/cdroid_stable/face/web/yx.gif">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="抓狂" emot="[/zk]">
                                                                <img alt="抓狂" src="http://img.android.d.cn/android/cdroid_stable/face/web/zk.gif">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="com-limit">您还能留下<em id="comLimit">200</em>个字</span>
                                        <button class="com-sub" type="submit" onclick="Comment.doComment();">发布</button>

                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="com-head" id="comHeadNoLogin">
                                
                                    <div class="com-head-box">
                                        <div class="no-login">
                                            <a href="javascript:;" title="" onclick="USER.showLoginForm(window.location.href);">登录</a>后才能发表评论哦~
                                        </div>
                                    </div>
                                
                            </div>
                            <?php } ?>

                            <div class="com-cont">
                                <div class="com-hot" id="comHot">
                                    <h3 class="com-tit-wrap">
                                        <span class="com-tit">
                                            <strong>热门</strong>评论
                                        </span>
                                    </h3>
                                    <div class="com-area">
                                        <div class="com-list"><div class="com-item" commentid="4452310" resuser="137339713"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=137339713&amp;size=middle" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">一个大反派</span><span class="com-ip">四川省成都市</span>发表于<span class="com-time">2015-07-16 16:17:08</span></p><div class="com-part">我觉得玩法还不错的一款小游戏。游戏是关卡形式的，每一关我们都要帮助那个萌萌的小人找到出口才能过关。游戏的玩法还算比较有新意，每一关的地图都可以上下左右移动互换，我们要通过这些互换来引导小人儿走到出口，光是移动是不够的，还需要触发机关来将终点之门打开，虽然玩法并不难，但是我觉得地图越来越大后还是有一定难度的。。。不仅需要移动地图，还需要创造一些机关来使小人到达终点。本作画面走的是比较复古的风格，不过比较简洁舒服，游戏的玩法也还比较不错，推荐一下！</div><div class="feed-back clearfix"><p class="com-from">该评论来自：当乐网</p><a class="reply feed-btn" onclick="ComFn.setParentID(4452310, this, '137339713')" href="javascript:;"> 回复</a><span class="com-spe">|</span><a class="com-support feed-btn" commentid="4452310" href="javascript:;" onclick="COMMENT.addTop(4452310, this)"><span class="up">顶</span><span class="counter">(<span>16</span>)</span><span class="add-one">+1</span></a></div></div></div></div><div class="com-list"><div class="com-item" commentid="4433521" resuser="143498893"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=143498893&amp;size=large" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">冰冷の花</span><span class="com-ip">内蒙古赤峰市</span>发表于<span class="com-time">2015-07-15 23:18:43</span></p><div class="com-replay-object"><div class=" level1 com-item " commentid="4433276"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=180218198&amp;size=large" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">♤♧♡♢</span><span class="com-ip">辽宁省抚顺市</span>2015-07-15 22:24:36<span class="floornum">1楼</span></p><div class="com-part">之前看过当乐的预告 很清新啊。。。。(´･ω･`)</div><div class="feed-back clearfix"><p class="com-from"></p><a style="display: none;" class="reply feed-btn" onclick="ComFn.setParentID(undefined, this, '4433276')" href="javascript:;">回复</a></div></div></div><i class="com-tri"></i></div><div class="com-part">我也是看预告知道的这个游戏，同样感觉画面萌萌哒，握爪_(:з」∠)_</div><div class="feed-back clearfix"><p class="com-from">该评论来自：当乐游戏中心v7.3</p><a class="reply feed-btn" onclick="ComFn.setParentID(4433521, this, '143498893')" href="javascript:;"> 回复</a><span class="com-spe">|</span><a class="com-support feed-btn" commentid="4433521" href="javascript:;" onclick="COMMENT.addTop(4433521, this)"><span class="up">顶</span><span class="counter">(<span>4</span>)</span><span class="add-one">+1</span></a></div></div></div></div><div style="display: block;" class="com-list"><div class="com-item" commentid="4499609" resuser="128349913"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=128349913&amp;size=large" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">创造与生存</span><span class="com-ip">广西南宁市</span>发表于<span class="com-time">2015-07-19 19:41:34</span></p><div class="com-part">有点模仿致命框架的意思，但人物可以操作这点比致命框架好，就是画面差了点</div><div class="feed-back clearfix"><p class="com-from">该评论来自：当乐游戏中心v7.3</p><a class="reply feed-btn" onclick="ComFn.setParentID(4499609, this, '128349913')" href="javascript:;"> 回复</a><span class="com-spe">|</span><a class="com-support feed-btn" commentid="4499609" href="javascript:;" onclick="COMMENT.addTop(4499609, this)"><span class="up">顶</span><span class="counter">(<span>2</span>)</span><span class="add-one">+1</span></a></div></div></div></div><div style="display: block;" class="com-list"><div class="com-item" commentid="4489088" resuser="140207477"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=140207477&amp;size=large" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">城管先生</span><span class="com-ip">浙江省温州市</span>发表于<span class="com-time">2015-07-18 16:59:15</span></p><div class="com-replay-object"><div class=" level1 com-item " commentid="4486091"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=164112942&amp;size=large" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">秋风满地实乱走</span><span class="com-ip">江苏省</span>2015-07-18 00:57:29<span class="floornum">1楼</span></p><div class="com-part">就是关卡太少</div><div class="feed-back clearfix"><p class="com-from"></p><a style="display: none;" class="reply feed-btn" onclick="ComFn.setParentID(undefined, this, '4486091')" href="javascript:;">回复</a></div></div></div><i class="com-tri"></i></div><div class="com-part">瞎说关卡那少呢，明明就是多到城管先生我几下就玩好了。<img src="http://img.android.d.cn/android/cdroid_stable/face/web/yx.gif" title="阴险" alt="阴险"> </div><div class="feed-back clearfix"><p class="com-from">该评论来自：当乐游戏中心v7.4</p><a class="reply feed-btn" onclick="ComFn.setParentID(4489088, this, '140207477')" href="javascript:;"> 回复</a><span class="com-spe">|</span><a class="com-support feed-btn" commentid="4489088" href="javascript:;" onclick="COMMENT.addTop(4489088, this)"><span class="up">顶</span><span class="counter">(<span>1</span>)</span><span class="add-one">+1</span></a></div></div></div></div><a style="display: none;" href="javascript:void(0)" title="查看更多" target="_self" class="hotmore">查看更多</a>
                                    </div>
                                </div>
                                <div class="com-new" id="comNew">
                                    <h3 class="com-tit-wrap">
                                        <span class="com-tit">
                                            <strong>最新</strong>评论
                                        </span>
                                    </h3>
                                    <div class="com-area">
<!--                                        <div class="com-load"></div>-->
                                        <div class="com-list"><div class="com-item" commentid="4452310" resuser="137339713"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=137339713&amp;size=middle" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">一个大反派</span><span class="com-ip">四川省成都市</span>发表于<span class="com-time">2015-07-16 16:17:08</span></p><div class="com-part">我觉得玩法还不错的一款小游戏。游戏是关卡形式的，每一关我们都要帮助那个萌萌的小人找到出口才能过关。游戏的玩法还算比较有新意，每一关的地图都可以上下左右移动互换，我们要通过这些互换来引导小人儿走到出口，光是移动是不够的，还需要触发机关来将终点之门打开，虽然玩法并不难，但是我觉得地图越来越大后还是有一定难度的。。。不仅需要移动地图，还需要创造一些机关来使小人到达终点。本作画面走的是比较复古的风格，不过比较简洁舒服，游戏的玩法也还比较不错，推荐一下！</div><div class="feed-back clearfix"><p class="com-from">该评论来自：当乐网</p><a class="reply feed-btn" onclick="ComFn.setParentID(4452310, this, '137339713')" href="javascript:;"> 回复</a><span class="com-spe">|</span><a class="com-support feed-btn" commentid="4452310" href="javascript:;" onclick="COMMENT.addTop(4452310, this)"><span class="up">顶</span><span class="counter">(<span>16</span>)</span><span class="add-one">+1</span></a></div></div></div></div><div class="com-list"><div class="com-item" commentid="4433521" resuser="143498893"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=143498893&amp;size=large" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">冰冷の花</span><span class="com-ip">内蒙古赤峰市</span>发表于<span class="com-time">2015-07-15 23:18:43</span></p><div class="com-replay-object"><div class=" level1 com-item " commentid="4433276"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=180218198&amp;size=large" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">♤♧♡♢</span><span class="com-ip">辽宁省抚顺市</span>2015-07-15 22:24:36<span class="floornum">1楼</span></p><div class="com-part">之前看过当乐的预告 很清新啊。。。。(´･ω･`)</div><div class="feed-back clearfix"><p class="com-from"></p><a style="display: none;" class="reply feed-btn" onclick="ComFn.setParentID(undefined, this, '4433276')" href="javascript:;">回复</a></div></div></div><i class="com-tri"></i></div><div class="com-part">我也是看预告知道的这个游戏，同样感觉画面萌萌哒，握爪_(:з」∠)_</div><div class="feed-back clearfix"><p class="com-from">该评论来自：当乐游戏中心v7.3</p><a class="reply feed-btn" onclick="ComFn.setParentID(4433521, this, '143498893')" href="javascript:;"> 回复</a><span class="com-spe">|</span><a class="com-support feed-btn" commentid="4433521" href="javascript:;" onclick="COMMENT.addTop(4433521, this)"><span class="up">顶</span><span class="counter">(<span>4</span>)</span><span class="add-one">+1</span></a></div></div></div></div><div style="display: block;" class="com-list"><div class="com-item" commentid="4499609" resuser="128349913"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=128349913&amp;size=large" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">创造与生存</span><span class="com-ip">广西南宁市</span>发表于<span class="com-time">2015-07-19 19:41:34</span></p><div class="com-part">有点模仿致命框架的意思，但人物可以操作这点比致命框架好，就是画面差了点</div><div class="feed-back clearfix"><p class="com-from">该评论来自：当乐游戏中心v7.3</p><a class="reply feed-btn" onclick="ComFn.setParentID(4499609, this, '128349913')" href="javascript:;"> 回复</a><span class="com-spe">|</span><a class="com-support feed-btn" commentid="4499609" href="javascript:;" onclick="COMMENT.addTop(4499609, this)"><span class="up">顶</span><span class="counter">(<span>2</span>)</span><span class="add-one">+1</span></a></div></div></div></div><div style="display: block;" class="com-list"><div class="com-item" commentid="4489088" resuser="140207477"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=140207477&amp;size=large" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">城管先生</span><span class="com-ip">浙江省温州市</span>发表于<span class="com-time">2015-07-18 16:59:15</span></p><div class="com-replay-object"><div class=" level1 com-item " commentid="4486091"><span class="com-user-ava"><img src="http://tools.service.d.cn/userhead/get?mid=164112942&amp;size=large" alt=""></span><div class="com-main"><p class="com-user"><i></i><span class="com-user-name">秋风满地实乱走</span><span class="com-ip">江苏省</span>2015-07-18 00:57:29<span class="floornum">1楼</span></p><div class="com-part">就是关卡太少</div><div class="feed-back clearfix"><p class="com-from"></p><a style="display: none;" class="reply feed-btn" onclick="ComFn.setParentID(undefined, this, '4486091')" href="javascript:;">回复</a></div></div></div><i class="com-tri"></i></div><div class="com-part">瞎说关卡那少呢，明明就是多到城管先生我几下就玩好了。<img src="http://img.android.d.cn/android/cdroid_stable/face/web/yx.gif" title="阴险" alt="阴险"> </div><div class="feed-back clearfix"><p class="com-from">该评论来自：当乐游戏中心v7.4</p><a class="reply feed-btn" onclick="ComFn.setParentID(4489088, this, '140207477')" href="javascript:;"> 回复</a><span class="com-spe">|</span><a class="com-support feed-btn" commentid="4489088" href="javascript:;" onclick="COMMENT.addTop(4489088, this)"><span class="up">顶</span><span class="counter">(<span>1</span>)</span><span class="add-one">+1</span></a></div></div></div></div><a style="display: none;" href="javascript:void(0)" title="查看更多" target="_self" class="hotmore">查看更多</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page"></div>