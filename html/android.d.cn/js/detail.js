function ifLogin() {
    return DJPASS().isLogin()
}
$.fn.screenShot = function(e) {
    var e = e || {}, t = {areaWidth: 780, margin: 18};
    return e = $.extend(t, e), this.each(function() {
        function t() {
            c >= p ? d.hide() : d.show(), d.on("click", function() {
                0 == o && i()
            }), m.on("click", function() {
                0 == o && a()
            })
        }
        function i() {
            var e = 0, t = 0;
            o = !0, m.show();
            for (var i = r; h > i; i++)
                if (e += g.eq(i).width() + s, e >= c) {
                    if (i == h - 1)
                        return t = e - c, l.animate({left: c - p + "px"}, 300, function() {
                            o = !1
                        }), r = h - 1, u = c - p, d.hide(), !1;
                    t = e - g.eq(i).width() - s, r = i;
                    break
                }
            l.animate({left: u - t + "px"}, 300, function() {
                o = !1
            }), u -= t, c >= p + u && d.hide()
        }
        function a() {
            var e = 0, t = 0;
            o = !0, d.show();
            for (var i = r; i >= 0; i--) {
                if (e += g.eq(i).width() + s, e >= c) {
                    if (0 == i)
                        return t = -u, l.animate({left: "0px"}, 300, function() {
                            o = !1
                        }), r = 0, u = 0, m.hide(), !1;
                    t = e - g.eq(i).width() - s, r = i;
                    break
                }
                if (0 == i)
                    return t = -u, l.animate({left: "0px"}, 300, function() {
                        o = !1
                    }), r = 0, u = 0, m.hide(), !1
            }
            l.animate({left: u + t + "px"}, function() {
                o = !1
            }), u += t, 0 == u && (r = 0, m.hide())
        }
        var o = !1, n = this, r = 0, s = e.margin, c = e.areaWidth, l = $(n).find(".de-shot-view"), d = $(n).find(".next"), m = $(n).find(".prev"), g = l.find("img"), h = g.length, u = parseInt(l.css("left")), p = l.width();
        return t()
    })
};
var userInfo = {user: decodeURI(getCookie("DJ_MEMBER_INFO")), ambi: getCookie("AMBI"), avtar: '""' === getCookie("avatar") ? "http://img.d.cn/2013/web_index/wwwdcn/images/default.jpg" : getCookie("avatar")};
!function(e) {
    e.fn.emoji = function() {
        var t = "\\+1|-1|100|109|1234|8ball|a|ab|abc|abcd|accept|aerial_tramway|airplane|alarm_clock|alien|ambulance|anchor|angel|anger|angry|anguished|ant|apple|aquarius|aries|arrow_backward|arrow_double_down|arrow_double_up|arrow_down|arrow_down_small|arrow_forward|arrow_heading_down|arrow_heading_up|arrow_left|arrow_lower_left|arrow_lower_right|arrow_right|arrow_right_hook|arrow_up|arrow_up_down|arrow_up_small|arrow_upper_left|arrow_upper_right|arrows_clockwise|arrows_counterclockwise|art|articulated_lorry|astonished|atm|b|baby|baby_bottle|baby_chick|baby_symbol|baggage_claim|balloon|ballot_box_with_check|bamboo|banana|bangbang|bank|bar_chart|barber|baseball|basketball|bath|bathtub|battery|bear|bee|beer|beers|beetle|beginner|bell|bento|bicyclist|bike|bikini|bird|birthday|black_circle|black_joker|black_nib|black_square|black_square_button|blossom|blowfish|blue_book|blue_car|blue_heart|blush|boar|boat|bomb|book|bookmark|bookmark_tabs|books|boom|boot|bouquet|bow|bowling|bowtie|boy|bread|bride_with_veil|bridge_at_night|briefcase|broken_heart|bug|bulb|bullettrain_front|bullettrain_side|bus|busstop|bust_in_silhouette|busts_in_silhouette|cactus|cake|calendar|calling|camel|camera|cancer|candy|capital_abcd|capricorn|car|card_index|carousel_horse|cat|cat2|cd|chart|chart_with_downwards_trend|chart_with_upwards_trend|checkered_flag|cherries|cherry_blossom|chestnut|chicken|children_crossing|chocolate_bar|christmas_tree|church|cinema|circus_tent|city_sunrise|city_sunset|cl|clap|clapper|clipboard|clock1|clock10|clock1030|clock11|clock1130|clock12|clock1230|clock130|clock2|clock230|clock3|clock330|clock4|clock430|clock5|clock530|clock6|clock630|clock7|clock730|clock8|clock830|clock9|clock930|closed_book|closed_lock_with_key|closed_umbrella|cloud|clubs|cn|cocktail|coffee|cold_sweat|collision|computer|confetti_ball|confounded|confused|congratulations|construction|construction_worker|convenience_store|cookie|cool|cop|copyright|corn|couple|couple_with_heart|couplekiss|cow|cow2|credit_card|crocodile|crossed_flags|crown|cry|crying_cat_face|crystal_ball|cupid|curly_loop|currency_exchange|curry|custard|customs|cyclone|dancer|dancers|dango|dart|dash|date|de|deciduous_tree|department_store|diamond_shape_with_a_dot_inside|diamonds|disappointed|dizzy|dizzy_face|do_not_litter|dog|dog2|dollar|dolls|dolphin|door|doughnut|dragon|dragon_face|dress|dromedary_camel|droplet|dvd|e-mail|ear|ear_of_rice|earth_africa|earth_americas|earth_asia|egg|eggplant|eight|eight_pointed_black_star|eight_spoked_asterisk|electric_plug|elephant|email|end|envelope|es|euro|european_castle|european_post_office|evergreen_tree|exclamation|expressionless|eyeglasses|eyes|facepunch|factory|fallen_leaf|family|fast_forward|fax|fearful|feelsgood|feet|ferris_wheel|file_folder|finnadie|fire|fire_engine|fireworks|first_quarter_moon|first_quarter_moon_with_face|fish|fish_cake|fishing_pole_and_fish|fist|five|flags|flashlight|floppy_disk|flower_playing_cards|flushed|foggy|football|fork_and_knife|fountain|four|four_leaf_clover|fr|free|fried_shrimp|fries|frog|frowning|fuelpump|full_moon|full_moon_with_face|game_die|gb|gem|gemini|ghost|gift|gift_heart|girl|globe_with_meridians|goat|goberserk|godmode|golf|grapes|green_apple|green_book|green_heart|grey_exclamation|grey_question|grimacing|grin|grinning|guardsman|guitar|gun|haircut|hamburger|hammer|hamster|hand|handbag|hankey|hash|hatched_chick|hatching_chick|headphones|hear_no_evil|heart|heart_decoration|heart_eyes|heart_eyes_cat|heartbeat|heartpulse|hearts|heavy_check_mark|heavy_division_sign|heavy_dollar_sign|heavy_exclamation_mark|heavy_minus_sign|heavy_multiplication_x|heavy_plus_sign|helicopter|herb|hibiscus|high_brightness|high_heel|hocho|honey_pot|honeybee|horse|horse_racing|hospital|hotel|hotsprings|hourglass|hourglass_flowing_sand|house|house_with_garden|hurtrealbad|hushed|ice_cream|icecream|id|ideograph_advantage|imp|inbox_tray|incoming_envelope|information_desk_person|information_source|innocent|interrobang|iphone|it|izakaya_lantern|jack_o_lantern|japan|japanese_castle|japanese_goblin|japanese_ogre|jeans|joy|joy_cat|jp|key|keycap_ten|kimono|kiss|kissing|kissing_cat|kissing_closed_eyes|kissing_face|kissing_heart|kissing_smiling_eyes|koala|koko|kr|large_blue_circle|large_blue_diamond|large_orange_diamond|last_quarter_moon|last_quarter_moon_with_face|laughing|leaves|ledger|left_luggage|left_right_arrow|leftwards_arrow_with_hook|lemon|leo|leopard|libra|light_rail|link|lips|lipstick|lock|lock_with_ink_pen|lollipop|loop|loudspeaker|love_hotel|love_letter|low_brightness|m|mag|mag_right|mahjong|mailbox|mailbox_closed|mailbox_with_mail|mailbox_with_no_mail|man|man_with_gua_pi_mao|man_with_turban|mans_shoe|maple_leaf|mask|massage|meat_on_bone|mega|melon|memo|mens|metal|metro|microphone|microscope|milky_way|minibus|minidisc|mobile_phone_off|money_with_wings|moneybag|monkey|monkey_face|monorail|moon|mortar_board|mount_fuji|mountain_bicyclist|mountain_cableway|mountain_railway|mouse|mouse2|movie_camera|moyai|muscle|mushroom|musical_keyboard|musical_note|musical_score|mute|nail_care|name_badge|neckbeard|necktie|negative_squared_cross_mark|neutral_face|new|new_moon|new_moon_with_face|newspaper|ng|nine|no_bell|no_bicycles|no_entry|no_entry_sign|no_good|no_mobile_phones|no_mouth|no_pedestrians|no_smoking|non-potable_water|nose|notebook|notebook_with_decorative_cover|notes|nut_and_bolt|o|o2|ocean|octocat|octopus|oden|office|ok|ok_hand|ok_woman|older_man|older_woman|on|oncoming_automobile|oncoming_bus|oncoming_police_car|oncoming_taxi|one|open_file_folder|open_hands|open_mouth|ophiuchus|orange_book|outbox_tray|ox|page_facing_up|page_with_curl|pager|palm_tree|panda_face|paperclip|parking|part_alternation_mark|partly_sunny|passport_control|paw_prints|peach|pear|pencil|pencil2|penguin|pensive|performing_arts|persevere|person_frowning|person_with_blond_hair|person_with_pouting_face|phone|pig|pig2|pig_nose|pill|pineapple|pisces|pizza|plus1|point_down|point_left|point_right|point_up|point_up_2|police_car|poodle|poop|post_office|postal_horn|postbox|potable_water|pouch|poultry_leg|pound|pouting_cat|pray|princess|punch|purple_heart|purse|pushpin|put_litter_in_its_place|question|rabbit|rabbit2|racehorse|radio|radio_button|rage|rage1|rage2|rage3|rage4|railway_car|rainbow|raised_hand|raised_hands|ram|ramen|rat|recycle|red_car|red_circle|registered|relaxed|relieved|repeat|repeat_one|restroom|revolving_hearts|rewind|ribbon|rice|rice_ball|rice_cracker|rice_scene|ring|rocket|roller_coaster|rooster|rose|rotating_light|round_pushpin|rowboat|ru|rugby_football|runner|running|running_shirt_with_sash|sa|sagittarius|sailboat|sake|sandal|santa|satellite|satisfied|saxophone|school|school_satchel|scissors|scorpius|scream|scream_cat|scroll|seat|secret|see_no_evil|seedling|seven|shaved_ice|sheep|shell|ship|shipit|shirt|shit|shoe|shower|signal_strength|six|six_pointed_star|ski|skull|sleeping|sleepy|slot_machine|small_blue_diamond|small_orange_diamond|small_red_triangle|small_red_triangle_down|smile|smile_cat|smiley|smiley_cat|smiling_imp|smirk|smirk_cat|smoking|snail|snake|snowboarder|snowflake|snowman|sob|soccer|soon|sos|sound|space_invader|spades|spaghetti|sparkler|sparkles|sparkling_heart|speak_no_evil|speaker|speech_balloon|speedboat|squirrel|star|star2|stars|station|statue_of_liberty|steam_locomotive|stew|straight_ruler|strawberry|stuck_out_tongue|stuck_out_tongue_closed_eyes|stuck_out_tongue_winking_eye|sun_with_face|sunflower|sunglasses|sunny|sunrise|sunrise_over_mountains|surfer|sushi|suspect|suspension_railway|sweat|sweat_drops|sweat_smile|sweet_potato|swimmer|symbols|syringe|tada|tanabata_tree|tangerine|taurus|taxi|tea|telephone|telephone_receiver|telescope|tennis|tent|thought_balloon|three|thumbsdown|thumbsup|ticket|tiger|tiger2|tired_face|tm|toilet|tokyo_tower|tomato|tongue|top|tophat|tractor|traffic_light|train|train2|tram|triangular_flag_on_post|triangular_ruler|trident|triumph|trolleybus|trollface|trophy|tropical_drink|tropical_fish|truck|trumpet|tshirt|tulip|turtle|tv|twisted_rightwards_arrows|two|two_hearts|two_men_holding_hands|two_women_holding_hands|u5272|u5408|u55b6|u6307|u6708|u6709|u6e80|u7121|u7533|u7981|u7a7a|uk|umbrella|unamused|underage|unlock|up|us|v|vertical_traffic_light|vhs|vibration_mode|video_camera|video_game|violin|virgo|volcano|vs|walking|waning_crescent_moon|waning_gibbous_moon|warning|watch|water_buffalo|watermelon|wave|wavy_dash|waxing_crescent_moon|waxing_gibbous_moon|wc|weary|wedding|whale|whale2|wheelchair|white_check_mark|white_circle|white_flower|white_square|white_square_button|wind_chime|wine_glass|wink|wink2|wolf|woman|womans_clothes|womans_hat|womens|worried|wrench|x|yellow_heart|yen|yum|zap|zero|zzz";
        return this.each(function() {
            var i = new RegExp(":(" + t + "):", "g");
            e(this).html(e(this).html().replace(i, e.fn.emoji.replace))
        })
    }, e.fn.emoji.replace = function() {
        var e = arguments[1], t = "https://github.com/SCRAPTURE/jquery-emoji/raw/master/images/emojis", i = ".png", a = t + "/" + e + i;
        return'<img class="emoji" width="20" height="20" align="absmiddle" src="' + a + '" alt="' + e + '" title="' + e + '" />'
    }
}(jQuery);
var COMMENT = {carpos: 0, faceStr: "", pageCount: 0, comNum: "", init: function(e) {
        var t = this;
        t.rId = e.rId, t.rType = e.rType, t.comNum = e.comNum, t.commentListDivId = e.commentListDivId, t.hotCom = e.hotCom, t.newCom = e.newCom, t.getHotComment(0), t.getNewComments(1, 1)
    }, getcursortposition: function(e) {
        var t = 0;
        if (document.selection) {
            e.focus();
            var i = document.selection.createRange();
            i.moveStart("character", -e.value.length), t = i.text.length
        } else
            (e.selectionStart || "0" == e.selectionStart) && (t = e.selectionStart);
        COMMENT.carpos = t
    }, add: function() {
        var e = $(this), t = e.parents("form").find("textarea"), i = t.val(), a = t.val().length, o = i.slice(0, COMMENT.carpos), n = i.slice(COMMENT.carpos, a), r = o + e.attr("emot") + n;
        return t.val(r), COMMENT.carpos += e.attr("emot").length, !1
    }, getNewComments: function(e, t) {
        var i = this, a = "http://comment.d.cn/comment/page?";
        a += "pn=" + e + "&ps=10&rtype=" + i.rType + "&rid=", a += i.rId + "&callback=?", $.getJSON(a, function(t) {
            if (!(null != t && t.COMMENTS && t.COMMENTS.length > 0))
                return i.newCom.find(".com-area").html('<p class="com-none">暂无评论...</p>'), !1;
            i.newCom.find(".com-area").html(i.writeComment(t.COMMENTS)).show(), i.newCom.find(".com-part").each(function(e, t) {
                $(t).emoji()
            }), 0 == $("#replyBox").length && $("body").append(ComFn.replyBox), ComFn.registerReply(), $(".expressions").mouseover(function() {
                $(this).find(".expFrame").show()
            }), $(".expTab ul li a").off("click"), $(".expTab ul li a").on("click", COMMENT.add);
            for (var a = document.getElementsByTagName("textarea"), o = 0; o < a.length; o++)
                a[o].onclick = function() {
                    COMMENT.getcursortposition(this)
                }, a[o].onkeyup = function() {
                    COMMENT.getcursortposition(this)
                };
            i.pageCount = t.TOTAL_PAGE, i.comNum.html(t.TOTAL_COUNT), $("#comNum2").text(t.TOTAL_COUNT), $("#topcomNum").length > 0 && $("#topcomNum").html(t.TOTAL_COUNT), i.genPage(e)
        })
    }, getHotComment: function(e) {
        var t = this, i = "http://comment.d.cn/comment/hotList?";
        i += "rtype=" + t.rType + "&rid=", i += t.rId + "&callback=?", $.getJSON(i, function(e) {
            if (!(null !== e && e.COMMENTS && e.COMMENTS.length > 0))
                return t.hotCom.hide(), !1;
            if (t.hotCom.find(".com-area").html(t.writeComment(e.COMMENTS, "getHot")), t.hotCom.find(".com-part").each(function(e, t) {
                $(t).emoji()
            }), e.COMMENTS.length > 2) {
                for (var i = 2; i < e.COMMENTS.length; i++)
                    t.hotCom.find(".com-list").eq(i).hide();
                t.hotCom.find(".com-area").append('<a href="javascript:void(0)" title="查看更多" target="_self" class="hotmore">查看更多</a>'), $(".hotmore").on("click", function() {
                    t.hotCom.find(".com-list").show(), $(this).hide()
                })
            }
            0 == $("#replyBox").length && $("body").append(ComFn.replyBox), ComFn.registerReply(), $("#replyBox").hide()
        })
    }, genPage: function(e) {
        var t = this, i = "", a = "COMMENT.getNewComments(pageNo,1);", o = "#newCom";
        e = 0 >= e ? 1 : e, e = e >= t.pageCount ? t.pageCount : e;
        var n = "";
        if (!(this.pageCount <= 1)) {
            e > 1 && (n = a.replace(/pageNo/g, "1"), i = i + "<a href='" + o + "' onclick='COMMENT.genPage(1);" + n + "'>首页</a>", n = a.replace(/pageNo/g, "" + (e - 1)), i = i + "&nbsp;<a href='" + o + "' onclick='COMMENT.genPage(" + (e - 1) + ");" + n + "'>上一页</a>");
            var r = e - 4;
            r = 0 >= r ? 1 : r;
            var s = r + 7 - 1;
            s = s > this.pageCount ? this.pageCount : s;
            for (var c = r; s >= c; c++)
                n = a.replace(/pageNo/g, "" + c), i = c != e ? i + "<a href='" + o + "' onclick='COMMENT.genPage(" + c + ");" + n + "'>" + c + "</a>" : i + "<span class='curr'>" + c + "</span>";
            e < this.pageCount && (n = a.replace(/pageNo/g, "" + (e + 1)), i = i + "&nbsp;<a href='" + o + "' onclick='COMMENT.genPage(" + (e + 1) + ");" + n + "'>下一页</a>", n = a.replace(/pageNo/g, "" + this.pageCount), i = i + "&nbsp;<a href='" + o + "' onclick='COMMENT.genPage(" + this.pageCount + ");" + n + "'>末页</a>"), COMMENT.commentListDivId.find(".page").html(i)
        }
    }, face: function(e) {
        var t = "http://img.android.d.cn/android/cdroid_stable/face/web/", i = {"[/wx]": "<img src='" + t + "wx.gif' title='微笑' alt='微笑'/>", "[/smm]": "<img src='" + t + "smm.gif' title='色眯眯' alt='色眯眯'/>", "[/d]": "<img src='" + t + "d.gif' title='呆' alt='呆'/>", "[/ku]": "<img src='" + t + "ku.gif' title='酷' alt='酷'/>", "[/k]": "<img src='" + t + "k.gif' title='哭' alt='哭'/>", "[/hx]": "<img src='" + t + "hx.gif' title='害羞' alt='害羞'/>", "[/bz]": "<img src='" + t + "bz.gif' title='闭嘴' alt='闭嘴'/>", "[/wq]": "<img src='" + t + "wq.gif' title='委屈' alt='委屈'/>", "[/fh]": "<img src='" + t + "fh.gif' title='发火' alt='发火'/>", "[/tp]": "<img src='" + t + "tp.gif' title='调皮' alt='调皮'/>", "[/bkx]": "<img src='" + t + "bkx.gif' title='不开心' alt='不开心'/>", "[/lh]": "<img src='" + t + "lh.gif' title='流汗' alt='流汗'/>", "[/zk]": "<img src='" + t + "zk.gif' title='抓狂' alt='抓狂'/>", "[/huaix]": "<img src='" + t + "huaix.gif' title='坏笑' alt='坏笑'/>", "[/ka]": "<img src='" + t + "ka.gif' title='可爱' alt='可爱'/>", "[/am]": "<img src='" + t + "am.gif' title='傲慢' alt='傲慢'/>", "[/bs]": "<img src='" + t + "bs.gif' title='鄙视' alt='鄙视'/>", "[/x]": "<img src='" + t + "x.gif' title='吓' alt='吓'/>", "[/heng]": "<img src='" + t + "heng.gif' title='哼' alt='哼'/>", "[/jiong]": "<img src='" + t + "jiong.gif' title='囧' alt='囧'/>", "[/kbj]": "<img src='" + t + "kbj.gif' title='看不见' alt='看不见'/>", "[/wbz]": "<img src='" + t + "wbz.gif' title='挖鼻子' alt='挖鼻子'/>", "[/kl]": "<img src='" + t + "kl.gif' title='可怜' alt='可怜'/>", "[/pa]": "<img src='" + t + "pa.gif' title='怕' alt='怕'/>", "[/yx]": "<img src='" + t + "yx.gif' title='阴险' alt='阴险'/>", "[/qing]": "<img src='" + t + "qing.gif' title='亲亲' alt='亲亲'/>", "[/qdl]": "<img src='" + t + "qdl.gif' title='糗大了' alt='糗大了'/>", "[/qian]": "<img src='" + t + "qian.gif' title='钱' alt='钱'/>", "[/ch]": "<img src='" + t + "ch.gif' title='擦汗' alt='擦汗'/>", "[/tx]": "<img src='" + t + "tx.gif' title='偷笑' alt='偷笑'/>", "[/hf]": "<img src='" + t + "hf.gif' title='互粉' alt='互粉'/>", "[/hxr]": "<img src='" + t + "hxr.gif' title='火星人' alt='火星人'/>", "[/qiang]": "<img src='" + t + "qiang.gif' title='枪' alt='枪'/>", "[/srdg]": "<img src='" + t + "srdg.gif' title='生日蛋糕' alt='生日蛋糕'/>", "[/mg]": "<img src='" + t + "mg.gif' title='玫瑰' alt='玫瑰'/>", "[/dx]": "<img src='" + t + "dx.gif' title='凋谢' alt='凋谢'/>", "[/ax]": "<img src='" + t + "ax.gif' title='爱心' alt='爱心'/>", "[/xs]": "<img src='" + t + "xs.gif' title='心碎' alt='心碎'/>", "[/hd]": "<img src='" + t + "hd.gif' title='ok' alt='ok'/>", "[/bx]": "<img src='" + t + "bx.gif' title='no' alt='no'/>", "[/gy]": "<img src='" + t + "gy.gif' title='勾引' alt='勾引'/>", "[/sl]": "<img src='" + t + "sl.gif' title='胜利' alt='胜利'/>", "[/q]": "<img src='" + t + "q.gif' title='强' alt='强'/>", "[/r]": "<img src='" + t + "r.gif' title='弱' alt='弱'/>"}, a = /\[.+?\]/g, o = e, n = "";
        COMMENT.faceStr = o.replace(a, function(e, t) {
            return i[e] ? i[e] : n
        })
    }, writeComment: function(e, t) {
        var i, a, o, n, r, s, c = e.length, l = "", d = "level", m = "", g = 0, h = 0;
        if ("getHot" == t)
            for (var u = 0; c > u; u++) {
                if (o = e[u].source && "未知国家" != e[u].source ? '<p class="com-from">该评论来自：' + e[u].source + "</p>" : '<p class="com-from"></p>', i = e[u].subComments, "" !== e[u].createdBy && (g = e[u].createdBy), r = "" !== e[u].avatarUrl ? e[u].avatarUrl : "http://raw.android.d.cn/cdroid_res/web/common/avatar.jpg", l += '<div class="com-list"><div class="com-item" commentId="' + e[u]._id + '" resUser="' + g + '">', l += '<span class="com-user-ava"><img src="' + r + '" alt="" /></span>', l += 1 == e[u].stick ? '<div class="com-main bgstick"><p class="com-user"><i></i>' : '<div class="com-main"><p class="com-user"><i></i>', l += '<span class="com-user-name">' + e[u].name, l += '</span><span class="com-ip">' + e[u].ipAddress, l += '</span>发表于<span class="com-time">' + e[u].pubTime + "</span></p>", i) {
                    var p = 0;
                    if (a = e[u].subComments.length, 0 !== a) {
                        l += '<div class="com-replay-object">';
                        for (var _ = 0; a > _; _++)
                            p++, d = 3 > _ ? "level" + (_ + 1) : d, n = i[_].source && "未知国家" != i[_].source ? '<p class="com-from">该评论来自：' + i[_].source + "</p>" : '<p class="com-from"></p>', a >= 5 && (1 == _ && (l += '<a href="javascript:;" title=""', l += 'class="hide-tips"><span>点击查看所有评论</span></a>'), m = 0 !== _ && _ !== a - 1 ? "com-hide" : ""), "" !== i[_]._id && (h = i[_]._id), s = "" !== i[_].avatarUrl ? i[_].avatarUrl : "http://raw.android.d.cn/cdroid_res/web/common/avatar.jpg", l += '<div class="' + m + " " + d + ' com-item " commentId="' + i[_]._id + '">', l += '<span class="com-user-ava"><img src="' + s + '" alt="" /></span>', l += '<div class="com-main"><p class="com-user"><i></i>', l += '<span class="com-user-name">' + i[_].name + "</span>", l += '<span class="com-ip">' + i[_].ipAddress, l += "</span>" + i[_].pubTime + '<span class="floornum">' + p + "楼</span></p>", l += '<div class="com-part">' + i[_].content + "</div>", l += '<div class="feed-back clearfix">' + n, l += '<a class="reply feed-btn" onclick="ComFn.setParentID(', l += i[_].ID + ",this,'" + h + '\')" href="javascript:;">', l += "回复</a></div></div></div>";
                        l += '<i class="com-tri"></i></div>'
                    }
                }
                l += '<div class="com-part">' + e[u].content + '</div><div class="feed-back clearfix">', l += o + '<a class="reply feed-btn" onclick="ComFn.setParentID(' + e[u]._id + ",this,", l += "'" + g + '\')" href="javascript:;"> 回复</a><span class="com-spe">|</span>', l += '<a class="com-support feed-btn" commentId="' + e[u]._id + '"', l += 'href="javascript:;" onclick="COMMENT.addTop(' + e[u]._id + ',this)"><span class="up">顶</span>', l += '<span class="counter">(<span>' + e[u].goodRat + "</span>", l += ')</span><span class="add-one">+1</span></a>', l += "</div></div></div></div>"
            }
        else
            for (var u = 0; c > u; u++) {
                if (o = e[u].SOURCE && "未知国家" != e[u].SOURCE ? '<p class="com-from">该评论来自：' + e[u].SOURCE + "</p>" : '<p class="com-from"></p>', i = e[u].SUB_COMMENTS, "" !== e[u].DJID && (g = e[u].DJID), r = "" !== e[u].AVATAR_URL ? e[u].AVATAR_URL : "http://raw.android.d.cn/cdroid_res/web/common/avatar.jpg", l += '<div class="com-list"><div class="com-item" commentId="' + e[u].ID + '" resUser="' + g + '">', l += '<span class="com-user-ava"><img src="' + r + '" alt="" /></span>', l += '<div class="com-main"><p class="com-user"><i></i>', l += '<span class="com-user-name">' + e[u].TITLE, l += '</span><span class="com-ip">' + e[u].IP_ADDRESS, l += '</span>发表于<span class="com-time">' + e[u].PUBLISH_DATE + "</span></p>", i) {
                    var p = 0;
                    if (a = e[u].SUB_COMMENTS.length, 0 !== a) {
                        l += '<div class="com-replay-object">';
                        for (var _ = 0; a > _; _++)
                            p++, d = 3 > _ ? "level" + (_ + 1) : d, n = i[_].SOURCE && "未知国家" != i[_].SOURCE ? '<p class="com-from">该评论来自：' + i[_].SOURCE + "</p>" : '<p class="com-from"></p>', a >= 5 && (1 == _ && (l += '<a href="javascript:;" title=""', l += 'class="hide-tips"><span>点击查看所有评论</span></a>'), m = 0 !== _ && _ !== a - 1 ? "com-hide" : ""), "" !== i[_].DJID && (h = i[_].DJID), s = "" !== i[_].AVATAR_URL ? i[_].AVATAR_URL : "http://raw.android.d.cn/cdroid_res/web/common/avatar.jpg", l += '<div class="' + m + " " + d + ' com-item " commentId="' + i[_].ID + '">', l += '<span class="com-user-ava"><img src="' + s + '" alt="" /></span>', l += '<div class="com-main"><p class="com-user"><i></i>', l += '<span class="com-user-name">' + i[_].TITLE + "</span>", l += '<span class="com-ip">' + i[_].IP_ADDRESS, l += "</span>" + i[_].PUBLISH_DATE + '<span class="floornum">' + p + "楼</span></p>", l += '<div class="com-part">' + i[_].COMMENT + "</div>", l += '<div class="feed-back clearfix">' + n, l += '<a class="reply feed-btn" onclick="ComFn.setParentID(', l += i[_].ID + ",this,'" + h + '\')" href="javascript:;">', l += "回复</a></div></div></div>";
                        l += '<i class="com-tri"></i></div>'
                    }
                }
                l += '<div class="com-part">' + e[u].COMMENT + '</div><div class="feed-back clearfix">', l += o + '<a class="reply feed-btn" onclick="ComFn.setParentID(' + e[u].ID + ",this,", l += "'" + g + '\')" href="javascript:;"> 回复</a><span class="com-spe">|</span>', l += '<a class="com-support feed-btn" commentId="' + e[u].ID + '"', l += 'href="javascript:;" onclick="COMMENT.addTop(' + e[u].ID + ',this)"><span class="up">顶</span>', l += '<span class="counter">(<span>' + e[u].GOOD_RAT + "</span>", l += ')</span><span class="add-one">+1</span></a>', l += "</div></div></div></div>"
            }
        return COMMENT.face(l), COMMENT.faceStr
    }, validateCallback: function(e) {
        function t(e) {
            e.msg ? ComFn.showMsg(e.msg) : (ComFn.showMsg("评论成功！"), $(".reply-box").hide(), $("form").find("textarea").val(""), $("#comLimit").html("2000"), $("#replyLimit").html("2000"), COMMENT.getNewComments(1, 1))
        }
        var i = this, a = $(e), o = a.find("[name='comment']").val(), n = reqPrefix + "/asych/addComment", r = i.rType, s = i.rId, c = /\[.+?\]/g, l = o.match(c) || [];
        if (!ifLogin())
            return showLoginForm(), !1;
        if ("" == o || "" == $.trim(o))
            return ComFn.showMsg("评论内容不能为空！"), !1;
        if (l.length > 10)
            return ComFn.showMsg("亲！最多只支持10个表情插入。"), !1;
        var d = userInfo.user.split("(")[0], m = userInfo.user.split("(")[1].split(")")[0], g = $.merge(a.serializeArray(), [{name: "resourceType", value: r}, {name: "resourceId", value: s}, {name: "stars", value: 0}, {name: "name", value: d}, {name: "channelFlag", value: 1}, {name: "parentId", value: ComFn.parentId}, {name: "user", value: m}, {name: "resUser", value: ComFn.resUser}, {name: "origin", value: 2}, {name: "avatarurl", value: userInfo.avtar}]);
        return $.post(n, g, t, "json"), !1
    }, addTop: function(e, t) {
        var i = $(t), a = i.find(".add-one"), o = (i.find(".up"), i.attr("commentId")), n = i.find(".counter span"), r = this.commentListDivId.find("[commentId =" + o + "]").find(".counter span"), s = parseInt(n.html()), c = "com_" + e;
        return i[0].onclick = null, null != getCookie(c) && 0 != getCookie(c).length ? (i.addClass("no-hover").css("cursor", "default").find("span").css("color", "#c5c5c5"), !1) : void $.getJSON("http://comment.d.cn/comment/top?commentId=" + o + "&callback=?", function(t) {
            return null == t || 200 != t.returnObj ? !1 : (SetCookie(c, "com_" + e), s += 1, r.html(s), a.css("display", "block").animate({top: "-50px"}, 500, function() {
                $(this).css({display: "none", top: "-15px"}), i.addClass("no-hover").css("cursor", "default").find("span").css("color", "#c5c5c5")
            }), void 0)
        })
    }}, ComFn = {parentId: 0, resUser: 0, limitChar: function(e, t, i) {
        var e = $(e), t = $(t), a = 0, o = 0;
        e.bind("focus keyup keydown", function(e) {
            var n = $(this);
            return a = n.val().length, o = i - a, a > i ? (n.val(n.val().substring(0, i)), !1) : void t.html(o)
        })
    }, _toggle: function(e) {
        e[/none/.test(e.css("display")) ? "show" : "hide"]()
    }, showMsg: function(e) {
        var t = $("#msg");
        t.html(e).css({left: ($(window).width() - t.outerWidth()) / 2, top: ($(window).height() - t.outerHeight()) / 2 + $(document).scrollTop()}).show(), setTimeout(function() {
            t.hide()
        }, 3e3)
    }, registerReply: function() {
        COMMENT.commentListDivId.find("a.reply").off("click").on("click", function() {
            if (ifLogin()) {
                var e = $(this).parent();
                e.next(".reply-box").length > 0 ? ComFn._toggle($("#replyBox")) : ($("#replyBox").insertAfter(e).show(), $("#replyLimit").html(2e3))
            } else
                USER.showLoginForm(window.location.href)
        }), ComFn.limitChar(".reply-area", "#replyLimit", 2e3), $("div.com-replay-object").on("hover", ".com-item", function() {
            $(this).find("a.reply").toggle()
        }), $("a.hide-tips").on("click", function() {
            $(this).hide().parent().find(".com-item").show()
        })
    }, setParentID: function(e, t, i) {
        i && (ComFn.resUser = i), ComFn.parentId = e
    }, hideReply: function() {
        $("#replyBox").hide(), $("#replyLimit").html(2e3)
    }, replyBox: $("#replyBox")[0] ? $("#replyBox")[0].outerHTML : ""};
$.extend($.fn, {jmodal: function(e) {
        {
            var t = $.fn.extend({data: {}, marginTop: 100, buttonText: {ok: "Ok", cancel: "Cancel"}, okEvent: function(e) {
                }, width: 400, fixed: !0, noCancel: !1, title: "JModal Dialog", content: "This is a jquery plugin!", skinId: "jmodal-main"}, e), i = $("select").hide();
            $(document)
        }
        if ($.browser.msie && "6.0" == $.browser.version && !$.support.style) {
            t.fixed = !1;
            var a = document.documentElement.scrollTop;
            t.marginTop = a + 100
        } else
            t.fixed = !0;
        t.docWidth = document.body.clientWidth, t.docHeight = document.body.clientHeight;
        var o, n = "jericho_modal", r = '<div id="jmodal-overlay" class="jmodal-overlay"/>\r\n                <div class="jmodal-main" id="jmodal-main" >\r\n                    <table border="0" cellspacing="0" cellpadding="0">\r\n                        <tr class="jmodal-top">\r\n                            <td class="jmodal-top-left jmodal-png-fiexed">&nbsp;</td>\r\n                            <td class="jmodal-border-top jmodal-png-fiexed">&nbsp;</td>\r\n                            <td class="jmodal-top-right jmodal-png-fiexed">&nbsp;</td>\r\n                        </tr>\r\n                        <tr class="jmodal-middle">\r\n                            <td class="jmodal-border-left jmodal-png-fiexed">&nbsp;</td>\r\n                            <td class="jmodal-middle-content">\r\n                                <div class="jmodal-title" />\r\n                                <div class="jmodal-content" id="jmodal-container-content" />\r\n                                <div class="jmodal-opts">\r\n                                  <input type="button" class="submit"/>&nbsp;&nbsp;<input id="cancelId" type="cancel" class="cancel"/>\r\n                                </div>\r\n                            </td>\r\n                            <td class="jmodal-border-right jmodal-png-fiexed">&nbsp;</td>\r\n                        </tr>\r\n                        <tr class="jmodal-bottom">\r\n                            <td class="jmodal-bottom-left jmodal-png-fiexed">&nbsp;</td>\r\n                            <td class="jmodal-border-bottom jmodal-png-fiexed">&nbsp;</td>\r\n                            <td class="jmodal-bottom-right jmodal-png-fiexed">&nbsp;</td>\r\n                        </tr>\r\n                    </table>\r\n                </div>';
        0 == $("#jmodal-overlay").length && $(r).appendTo("body"), void 0 == window[n] && (o = {overlay: $("#jmodal-overlay"), modal: $("#jmodal-main"), body: $("#jmodal-container-content")}, o.title = o.body.prev(), o.buttons = o.body.next().children(), window[n] = o), o = window[n];
        var s = {hide: function() {
                o.modal.fadeOut(), o.overlay.hide()
            }, isCancelling: !1};
        o.overlay.is(":visible") || (o.overlay.css({opacity: .4}), o.modal.attr("class", t.skinId).css({position: t.fixed ? "fixed" : "absolute", width: t.width, left: (t.docWidth - t.width) / 2, top: t.marginTop}).fadeIn()), o.title.html(t.title), t.noCancel ? o.buttons.eq(0).val(t.buttonText.ok).unbind("click").click(function(e) {
            t.okEvent(t.data, s), s.isCancelling || s.hide()
        }) : o.buttons.eq(0).val(t.buttonText.ok).unbind("click").click(function(e) {
            i.show(), t.okEvent(t.data, s), s.isCancelling || s.hide()
        }).next().val(t.buttonText.cancel).one("click", function() {
            s.hide(), i.show()
        }), "string" == typeof t.content && $("#jmodal-container-content").html(t.content), "function" == typeof t.content && t.content(o.body), t.noCancel ? $("#cancelId").hide() : $("#cancelId").show()
    }}), function(e) {
    e.fn.lightBox = function(t) {
        function i() {
            return a(this, b), !1
        }
        function a(i, a) {
            if (e("embed, object, select").css({visibility: "hidden"}), o(), t.imageArray.length = 0, t.activeImage = 0, 1 == a.length)
                t.imageArray.push(new Array(i.getAttribute("href"), i.getAttribute("title")));
            else
                for (var r = 0; r < a.length; r++)
                    t.imageArray.push(new Array(a[r].getAttribute("href"), a[r].getAttribute("title")));
            for (; t.imageArray[t.activeImage][0] != i.getAttribute("href"); )
                t.activeImage++;
            n()
        }
        function o() {
            e("body").append('<div id="jquery-overlay"></div><div id="jquery-lightbox"><div id="lightbox-container-image-box"><div id="lightbox-container-image"><img id="lightbox-image"><div style="" id="lightbox-nav"><a href="#" id="lightbox-nav-btnPrev"></a><a href="#" id="lightbox-nav-btnNext"></a></div><div id="lightbox-loading"><a href="#" id="lightbox-loading-link"><img src="' + t.imageLoading + '"></a></div></div></div><div id="lightbox-container-image-data-box"><div id="lightbox-container-image-data"><div id="lightbox-image-details"><span id="lightbox-image-details-caption"></span><span id="lightbox-image-details-currentNumber"></span></div><div id="lightbox-secNav"><a href="#" id="lightbox-secNav-btnClose"><img src="' + t.imageBtnClose + '"></a></div></div></div></div>');
            var i = p();
            e("#jquery-overlay").css({backgroundColor: t.overlayBgColor, opacity: t.overlayOpacity, width: i[0], height: i[1]}).fadeIn();
            var a = _();
            e("#jquery-lightbox").css({top: a[1] + i[3] / 10, left: a[0]}).show(), e("#jquery-overlay,#jquery-lightbox").click(function() {
                u()
            }), e("#lightbox-loading-link,#lightbox-secNav-btnClose").click(function() {
                return u(), !1
            }), e(window).resize(function() {
                var t = p();
                e("#jquery-overlay").css({width: t[0], height: t[1]});
                var i = _();
                e("#jquery-lightbox").css({top: i[1] + t[3] / 10, left: i[0]})
            })
        }
        function n() {
            e("#lightbox-loading").show(), t.fixedNavigation ? e("#lightbox-image,#lightbox-container-image-data-box,#lightbox-image-details-currentNumber").hide() : e("#lightbox-image,#lightbox-nav,#lightbox-nav-btnPrev,#lightbox-nav-btnNext,#lightbox-container-image-data-box,#lightbox-image-details-currentNumber").hide();
            var i = new Image;
            i.onload = function() {
                e("#lightbox-image").attr("src", t.imageArray[t.activeImage][0]), r(i.width, i.height), i.onload = function() {
                }
            }, i.src = t.imageArray[t.activeImage][0]
        }
        function r(i, a) {
            var o = e("#lightbox-container-image-box").width(), n = e("#lightbox-container-image-box").height(), r = i + 2 * t.containerBorderSize, c = a + 2 * t.containerBorderSize, l = o - r, d = n - c;
            e("#lightbox-container-image-box").animate({width: r, height: c}, t.containerResizeSpeed, function() {
                s()
            }), 0 == l && 0 == d && f(e.browser.msie ? 250 : 100), e("#lightbox-container-image-data-box").css({width: i}), e("#lightbox-nav-btnPrev,#lightbox-nav-btnNext").css({height: a + 2 * t.containerBorderSize})
        }
        function s() {
            e("#lightbox-loading").hide(), e("#lightbox-image").fadeIn(function() {
                c(), l()
            }), h()
        }
        function c() {
            e("#lightbox-container-image-data-box").slideDown("fast"), e("#lightbox-image-details-caption").hide(), t.imageArray[t.activeImage][1] && e("#lightbox-image-details-caption").html(t.imageArray[t.activeImage][1]).show(), t.imageArray.length > 1 && e("#lightbox-image-details-currentNumber").html(t.txtImage + " " + (t.activeImage + 1) + " " + t.txtOf + " " + t.imageArray.length).show()
        }
        function l() {
            e("#lightbox-nav").show(), e("#lightbox-nav-btnPrev,#lightbox-nav-btnNext").css({background: "transparent url(" + t.imageBlank + ") no-repeat"}), 0 != t.activeImage && (t.fixedNavigation ? e("#lightbox-nav-btnPrev").css({background: "url(" + t.imageBtnPrev + ") left 15% no-repeat"}).unbind().bind("click", function() {
                return t.activeImage = t.activeImage - 1, n(), !1
            }) : e("#lightbox-nav-btnPrev").unbind().hover(function() {
                e(this).css({background: "url(" + t.imageBtnPrev + ") left 15% no-repeat"})
            }, function() {
                e(this).css({background: "transparent url(" + t.imageBlank + ") no-repeat"})
            }).show().bind("click", function() {
                return t.activeImage = t.activeImage - 1, n(), !1
            })), t.activeImage != t.imageArray.length - 1 && (t.fixedNavigation ? e("#lightbox-nav-btnNext").css({background: "url(" + t.imageBtnNext + ") right 15% no-repeat"}).unbind().bind("click", function() {
                return t.activeImage = t.activeImage + 1, n(), !1
            }) : e("#lightbox-nav-btnNext").unbind().hover(function() {
                e(this).css({background: "url(" + t.imageBtnNext + ") right 15% no-repeat"})
            }, function() {
                e(this).css({background: "transparent url(" + t.imageBlank + ") no-repeat"})
            }).show().bind("click", function() {
                return t.activeImage = t.activeImage + 1, n(), !1
            })), d()
        }
        function d() {
            e(document).keydown(function(e) {
                g(e)
            })
        }
        function m() {
            e(document).unbind()
        }
        function g(e) {
            null == e ? (keycode = event.keyCode,
                    escapeKey = 27) : (keycode = e.keyCode, escapeKey = e.DOM_VK_ESCAPE), key = String.fromCharCode(keycode).toLowerCase(), (key == t.keyToClose || "x" == key || keycode == escapeKey) && u(), (key == t.keyToPrev || 37 == keycode) && 0 != t.activeImage && (t.activeImage = t.activeImage - 1, n(), m()), (key == t.keyToNext || 39 == keycode) && t.activeImage != t.imageArray.length - 1 && (t.activeImage = t.activeImage + 1, n(), m())
        }
        function h() {
            t.imageArray.length - 1 > t.activeImage && (objNext = new Image, objNext.src = t.imageArray[t.activeImage + 1][0]), t.activeImage > 0 && (objPrev = new Image, objPrev.src = t.imageArray[t.activeImage - 1][0])
        }
        function u() {
            e("#jquery-lightbox").remove(), e("#jquery-overlay").fadeOut(function() {
                e("#jquery-overlay").remove()
            }), e("embed, object, select").css({visibility: "visible"})
        }
        function p() {
            var e, t;
            window.innerHeight && window.scrollMaxY ? (e = window.innerWidth + window.scrollMaxX, t = window.innerHeight + window.scrollMaxY) : document.body.scrollHeight > document.body.offsetHeight ? (e = document.body.scrollWidth, t = document.body.scrollHeight) : (e = document.body.offsetWidth, t = document.body.offsetHeight);
            var i, a;
            return self.innerHeight ? (i = document.documentElement.clientWidth ? document.documentElement.clientWidth : self.innerWidth, a = self.innerHeight) : document.documentElement && document.documentElement.clientHeight ? (i = document.documentElement.clientWidth, a = document.documentElement.clientHeight) : document.body && (i = document.body.clientWidth, a = document.body.clientHeight), pageHeight = a > t ? a : t, pageWidth = i > e ? e : i, arrayPageSize = new Array(pageWidth, pageHeight, i, a), arrayPageSize
        }
        function _() {
            var e, t;
            return self.pageYOffset ? (t = self.pageYOffset, e = self.pageXOffset) : document.documentElement && document.documentElement.scrollTop ? (t = document.documentElement.scrollTop, e = document.documentElement.scrollLeft) : document.body && (t = document.body.scrollTop, e = document.body.scrollLeft), arrayPageScroll = new Array(e, t), arrayPageScroll
        }
        function f(e) {
            var t = new Date;
            i = null;
            do
                var i = new Date;
            while (e > i - t)
        }
        t = jQuery.extend({overlayBgColor: "#000", overlayOpacity: .8, fixedNavigation: !1, imageLoading: "http://img.android.d.cn/android/cdroid_stable/lightbox_js/images/lightbox-ico-loading.gif", imageBtnPrev: "http://img.android.d.cn/android/cdroid_stable/lightbox_js/images/lightbox-btn-prev.gif", imageBtnNext: "http://img.android.d.cn/android/cdroid_stable/lightbox_js/images/lightbox-btn-next.gif", imageBtnClose: "http://img.android.d.cn/android/cdroid_stable/lightbox_js/images/lightbox-btn-close.gif", imageBlank: "http://img.android.d.cn/android/cdroid_stable/lightbox_js/images/lightbox-blank.gif", containerBorderSize: 10, containerResizeSpeed: 400, txtImage: "Image", txtOf: "of", keyToClose: "c", keyToPrev: "p", keyToNext: "n", imageArray: [], activeImage: 0}, t);
        var b = this;
        return this.unbind("click").click(i)
    }
}(jQuery), $(function() {
    $("#deSpe li").hover(function() {
        $(this).addClass("curr").find(".de-spe-img").stop().animate({top: "-100px"}, 300, function() {
        })
    }, function() {
        var e = $(this);
        e.find(".de-spe-img").stop().animate({top: "0px"}, 300, function() {
            e.removeClass("curr")
        })
    }), $("#dgm-dim").hover(function() {
        $(this).find(".dgm-dim").show()
    }, function() {
        $(this).find(".dgm-dim").hide()
    }), function() {
        var e = $("#deIntro"), t = $("p.intro-more"), i = e.find(".de-intro-inner").height();
        return i > 84 ? void t.show().on("click", "a", function() {
            var t = $(this), i = t.html();
            "展开+" === i ? (e.removeClass("hide-cont"), $(this).html("收起-")) : (e.addClass("hide-cont"), $(this).html("展开+"))
        }) : !1
    }(), $("#screenShot .de-shot-view a").lightBox(), ComFn.limitChar(".reply-area", "#replyLimit", 2e3), ComFn.limitChar("#comment", "#comLimit", 2e3), function() {
        var e = $("#overlay"), t = $("#video-live");
        $("#deVideo").on("click", function() {
            e.show(), t.show()
        }), t.find("#videoClose").on("click", function() {
            return e.hide(), t.hide(), !1
        })
    }(), DJPASS().qqLogin("qqLoginBtn", "A_M")
}), $(window).load(function() {
    $("#screenShot").screenShot()
}), function(e) {
    e.overlay = function(t) {
        function i() {
            s.hide(), n.css("visibility", "hidden")
        }
        var a = e.extend({}, e.overlay.defaults, t), o = a.clickId, n = e("#" + a.contentId), r = e("#" + a.closeId), s = e("#overlay");
        height = ___getPageSize()[1] + "px", e(o).unbind("click").bind("click", function() {
            s.show(), s.css({height: ___getPageSize()[1] + "px"}), n.css({left: "50%", visibility: "visible"})
        }), r.unbind("click").bind("click", function(t) {
            i(), e("#login-reg-msg").text("")
        })
    }, e.overlay.defaults = {clickId: "#demo", contentId: "windows", closeId: "close"}
}(jQuery), function() {
    function e() {
        t.css("visibility", "hidden").find("ul li").removeClass("curr"), i.html(""), $("#overlay").hide()
    }
    $.overlay({clickId: "#jubao", contentId: "report", closeId: "reportClose"});
    var t = $("#report"), i = $("#reportTxt");
    t.find("ul").on("click", "li i", function() {
        var e = this, a = $(e).parent();
        a.toggleClass("curr").siblings().removeClass("curr"), "reasons" == t.find(".curr").attr("id") ? i.show() : i.hide()
    }), $("#reportSub").on("click", function() {
        var a = t.find(".curr").attr("data-content"), o = i.val(), n = $("#jubao").attr("jubaoId"), r = $("#jubao").attr("jubaoType");
        t.find(".curr").length > 0 ? $.ajax({type: "POST", url: reqPrefix + "/asych/appsr", data: {desCode: a, appId: n, appType: r, desCon: o}, dataType: "json", success: function(t) {
                e(), alert(t.result < 0 ? t.descr : "提交成功！！！")
            }, error: function(t, i, a) {
                e(), alert("提交失败！！！")
            }}) : alert("请至少选择一项")
    }), $("#reportRe").on("click", function() {
        e()
    })
}(), $(function() {
    $(document).on("click", function() {
        $(".expFrame").hide()
    }), $(".expressions").mouseover(function() {
        $(this).find(".expFrame").show()
    }), $(".expTab ul li a").off("click").on("click", COMMENT.add);
    for (var e = document.getElementsByTagName("textarea"), t = 0; t < e.length; t++)
        e[t].onclick = function() {
            COMMENT.getcursortposition(this)
        }, e[t].onkeyup = function() {
            COMMENT.getcursortposition(this)
        }
});