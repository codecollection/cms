!function() {
    $.fn.extend({liThumb: function(t) {
            var i = {dis: "-140px", thumbImg: "thumb-b-img"}, n = this;
            t = t || {}, t = $.extend(i, t), $(n).hover(function() {
                $(this).find("." + t.thumbImg).stop().animate({top: t.dis}, 300)
            }, function() {
                $(this).find("." + t.thumbImg).stop().animate({top: "0px"}, 300)
            })
        }, bannerShow: function(t) {
            function i() {
                m = !0, c++, u.stop().animate({left: "-" + l * c}, 300, function() {
                    c === a + 1 && (c = 1, u.css({left: "-" + l + "px"})), m = !1
                })
            }
            function n() {
                m = !0, c--, u.stop().animate({left: "-" + l * c}, 300, function() {
                    0 === c && (c = a, u.css({left: "-" + l * a + "px"})), m = !1
                })
            }
            function e() {
                i(), t.autoShow && (clearTimeout(r), r = setTimeout(e, t.autoTime))
            }
            var o = {ifCycle: !0, autoShow: !0, autoTime: 4e3};
            t = t || {}, t = $.extend(o, t);
            var s = this, u = ($(s).find(".ban-main"), $(s).find(".ban")), l = u.find("li").width(), a = u.find("li").length, c = 0, m = !1, r = "";
            if (t.ifCycle) {
                var f = u.children("li:first").clone(), h = u.children("li:last").clone();
                u.append(f), u.prepend(h), u.css({width: l * (a + 2)})
            }
            return $("#next").on("click", function() {
                m || i()
            }), $("#prev").on("click", function() {
                m || n()
            }), $(s).mouseenter(function() {
                r && clearTimeout(r)
            }).mouseleave(function() {
                r && clearTimeout(r), r = setTimeout(e, t.autoTime)
            }), e()
        }, slideShow: function(t) {
            function i() {
                var i, n = parseInt(l.css("left"));
                h = !0, f++, 0 !== r ? (i = f === m ? r * c : c * t.itemUnit, l.stop().animate({left: n - i + "px"}, 300, function() {
                    f === m && (f = 0, l.css({left: "0px"})), h = !1
                })) : l.stop().animate({left: "-" + f * c * t.itemUnit}, 300, function() {
                    f === m && (f = 0, l.css({left: "0px"})), h = !1
                })
            }
            function n() {
                h = !0, 0 === f && (l.css({left: "-" + a.length * c + "px"}), f = m);
                var i = parseInt(l.css("left"));
                f--, 0 !== r ? (moveDis = f === m - 1 ? r * c : c * t.itemUnit, l.stop().animate({left: i + moveDis + "px"}, 300, function() {
                    h = !1
                })) : l.stop().animate({left: "-" + f * c * t.itemUnit}, 300, function() {
                    h = !1
                })
            }
            function e() {
                i(), t.autoShow && (clearTimeout(s), s = setTimeout(e, t.autoTime))
            }
            var o = {ifCycle: !0, autoShow: !0, autoTime: 4e3, itemUnit: 7};
            t = t || {}, t = $.extend(o, t);
            var s, u = this, l = ($(u).find(".scroll-cont"), $(u).find(".scroll-list")), a = l.find("li"), c = a.width() + 10, m = parseInt(a.length / t.itemUnit), r = a.length % t.itemUnit, f = 0, h = !1;
            if (t.ifCycle) {
                var d = l[0].innerHTML;
                l.append(d)
            }
            return 0 !== r && (m += 1), $("#scrollNext").on("click", function() {
                h || i()
            }), $("#scrollPrev").on("click", function() {
                h || n()
            }), t.autoShow && $(u).mouseenter(function() {
                s && clearTimeout(s)
            }).mouseleave(function() {
                clearTimeout(s), s = setTimeout(e, t.autoTime)
            }), e()
        }})
}(), $("#banner").bannerShow(), $("div.mod-thumb-b,li.mod-thumb-b").liThumb(), $("li.mod-thumb").liThumb({dis: "-120px", thumbImg: "thumb-img"}), $("li.mod-thumb-h").liThumb({dis: "-130px", thumbImg: "thumb-img"}), $("ul.mod-list").on("hover", "li", function() {
    $(this).toggleClass("hover")
}), $("ul.mod-coming").on("mouseover", "li", function() {
    $(this).addClass("curr").siblings().removeClass("curr")
}), $("#slideWrap").slideShow(), $(function() {
    $("ul.mod-nav").on("click", "li a", function() {
        var t = this, i = $(t).parent();
        if (i.hasClass("curr"))
            return!1;
        i.addClass("curr").siblings().removeClass("curr");
        var n = i.index(), e = i.parents(".mod-box");
        e.find(".mod-cont").addClass("hide").eq(n).removeClass("hide"), e.find(".mod-cont").eq(n).find("img").each(function() {
            var t = $(this).attr("o-src");
            $(this).attr("src", t)
        })
    })
});