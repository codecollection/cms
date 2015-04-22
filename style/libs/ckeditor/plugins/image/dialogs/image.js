/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

(function() {
    var a = function(b, c) {
        function m() {
            var C = arguments, D = this.getContentElement("advanced", "txtdlgGenStyle");
            D && D.commit.apply(D, C), this.foreach(function(E) {
                E.commit && E.id != "txtdlgGenStyle" && E.commit.apply(E, C);
            });
        }
        function o(C) {
            if (n) return;
            n = 1;
            var D = this.getDialog(), E = D.imageElement;
            if (E) {
                this.commit(d, E), C = [].concat(C);
                var F = C.length, G;
                for (var H = 0; H < F; H++) G = D.getContentElement.apply(D, C[H].split(":")), G && G.setup(d, E);
            }
            n = 0;
        }
        var d = 1, e = 2, f = 4, g = 8, h = /^\s*(\d+)((px)|\%)?\s*$/i, i = /(^\s*(\d+)((px)|\%)?\s*$)|^$/i, j = /^\d+px$/, k = function() {
            var C = this.getValue(), D = this.getDialog(), E = C.match(h);
            E && (E[2] == "%" && p(D, !1), C = E[1]);
            if (D.lockRatio) {
                var F = D.originalElement;
                F.getCustomData("isReady") == "true" && (this.id == "txtHeight" ? (C && C != "0" && (C = Math.round(F.$.width * (C / F.$.height))), isNaN(C) || D.setValueOf("info", "txtWidth", C)) : (C && C != "0" && (C = Math.round(F.$.height * (C / F.$.width))), isNaN(C) || D.setValueOf("info", "txtHeight", C)));
            }
            l(D);
        }, l = function(C) {
            return !C.originalElement || !C.preview ? 1 : (C.commitContent(f, C.preview), 0);
        }, n, p = function(C, D) {
            if (!C.getContentElement("info", "ratioLock")) return null;
            var E = C.originalElement;
            if (!E) return null;
            if (D == "check") {
                if (!C.userlockRatio && E.getCustomData("isReady") == "true") {
                    var F = C.getValueOf("info", "txtWidth"), G = C.getValueOf("info", "txtHeight"), H = E.$.width * 1e3 / E.$.height, I = F * 1e3 / G;
                    C.lockRatio = !1, !F && !G ? C.lockRatio = !0 : !isNaN(H) && !isNaN(I) && Math.round(H) == Math.round(I) && (C.lockRatio = !0);
                }
            } else D != undefined ? C.lockRatio = D : (C.userlockRatio = 1, C.lockRatio = !C.lockRatio);
            var J = CKEDITOR.document.getById(w);
            C.lockRatio ? J.removeClass("cke_btn_unlocked") : J.addClass("cke_btn_unlocked");
            var K = C._.editor.lang.image, L = K[C.lockRatio ? "unlockRatio" : "lockRatio"];
            return J.setAttribute("title", L), J.getFirst().setText(L), C.lockRatio;
        }, q = function(C) {
            var D = C.originalElement;
            if (D.getCustomData("isReady") == "true") {
                var E = C.getContentElement("info", "txtWidth"), F = C.getContentElement("info", "txtHeight");
                E && E.setValue(D.$.width), F && F.setValue(D.$.height);
            }
            l(C);
        }, r = function(C, D) {
            function E(J, K) {
                var L = J.match(h);
                return L ? (L[2] == "%" && (L[1] += "%", p(F, !1)), L[1]) : K;
            }
            if (C != d) return;
            var F = this.getDialog(), G = "", H = this.id == "txtWidth" ? "width" : "height", I = D.getAttribute(H);
            I && (G = E(I, G)), G = E(D.getStyle(H), G), this.setValue(G);
        }, s, t = function() {
            var C = this.originalElement;
            C.setCustomData("isReady", "true"), C.removeListener("load", t), C.removeListener("error", u), C.removeListener("abort", u), CKEDITOR.document.getById(y).setStyle("display", "none"), this.dontResetSize || q(this), this.firstLoad && CKEDITOR.tools.setTimeout(function() {
                p(this, "check");
            }, 0, this), this.firstLoad = !1, this.dontResetSize = !1;
        }, u = function() {
            var E = this, C = E.originalElement;
            C.removeListener("load", t), C.removeListener("error", u), C.removeListener("abort", u);
            var D = CKEDITOR.getUrl(b.skinPath + "images/noimage.png");
            E.preview && E.preview.setAttribute("src", D), CKEDITOR.document.getById(y).setStyle("display", "none"), p(E, !1);
        }, v = function(C) {
            return CKEDITOR.tools.getNextId() + "_" + C;
        }, w = v("btnLockSizes"), x = v("btnResetSize"), y = v("ImagePreviewLoader"), z = v("ImagePreviewBox"), A = v("previewLink"), B = v("previewImage");
        return {
            "title": b.lang.image[c == "image" ? "title" : "titleButton"],
            "minWidth": 420,
            "minHeight": 360,
            "onShow": function() {
                var I = this;
                I.imageElement = !1, I.linkElement = !1, I.imageEditMode = !1, I.linkEditMode = !1, I.lockRatio = !0, I.userlockRatio = 0, I.dontResetSize = !1, I.firstLoad = !0, I.addLink = !1;
                var C = I.getParentEditor(), D = I.getParentEditor().getSelection(), E = D.getSelectedElement(), F = E && E.getAscendant("a");
                CKEDITOR.document.getById(y).setStyle("display", "none"), s = new CKEDITOR.dom.element("img", C.document), I.preview = CKEDITOR.document.getById(B), I.originalElement = C.document.createElement("img"), I.originalElement.setAttribute("alt", ""), I.originalElement.setCustomData("isReady", "false");
                if (F) {
                    I.linkElement = F, I.linkEditMode = !0;
                    var G = F.getChildren();
                    if (G.count() == 1) {
                        var H = G.getItem(0).getName();
                        if (H == "img" || H == "input") I.imageElement = G.getItem(0), I.imageElement.getName() == "img" ? I.imageEditMode = "img" : I.imageElement.getName() == "input" && (I.imageEditMode = "input");
                    }
                    c == "image" && I.setupContent(e, F);
                }
                if (E && E.getName() == "img" && !E.data("cke-realelement") || E && E.getName() == "input" && E.getAttribute("type") == "image") I.imageEditMode = E.getName(), I.imageElement = E;
                I.imageEditMode ? (I.cleanImageElement = I.imageElement, I.imageElement = I.cleanImageElement.clone(!0, !0), I.setupContent(d, I.imageElement)) : I.imageElement = C.document.createElement("img"), p(I, !0), CKEDITOR.tools.trim(I.getValueOf("info", "txtUrl")) || (I.preview.removeAttribute("src"), I.preview.setStyle("display", "none"));
            },
            "onOk": function() {
                var D = this;
                if (D.imageEditMode) {
                    var C = D.imageEditMode;
                    c == "image" && C == "input" && confirm(b.lang.image.button2Img) ? (C = "img", D.imageElement = b.document.createElement("img"), D.imageElement.setAttribute("alt", ""), b.insertElement(D.imageElement)) : c != "image" && C == "img" && confirm(b.lang.image.img2Button) ? (C = "input", D.imageElement = b.document.createElement("input"), D.imageElement.setAttributes({
                        "type": "image",
                        "alt": ""
                    }), b.insertElement(D.imageElement)) : (D.imageElement = D.cleanImageElement, delete D.cleanImageElement);
                } else c == "image" ? D.imageElement = b.document.createElement("img") : (D.imageElement = b.document.createElement("input"), D.imageElement.setAttribute("type", "image")), D.imageElement.setAttribute("alt", "");
                D.linkEditMode || (D.linkElement = b.document.createElement("a")), D.commitContent(d, D.imageElement), D.commitContent(e, D.linkElement), D.imageElement.getAttribute("style") || D.imageElement.removeAttribute("style"), D.imageEditMode ? !D.linkEditMode && D.addLink ? (b.insertElement(D.linkElement), D.imageElement.appendTo(D.linkElement)) : D.linkEditMode && !D.addLink && (b.getSelection().selectElement(D.linkElement), b.insertElement(D.imageElement)) : D.addLink ? D.linkEditMode ? b.insertElement(D.imageElement) : (b.insertElement(D.linkElement), D.linkElement.append(D.imageElement, !1)) : b.insertElement(D.imageElement);
            },
            "onLoad": function() {
                var D = this;
                c != "image" && D.hidePage("Link");
                var C = D._.element.getDocument();
                D.getContentElement("info", "ratioLock") && (D.addFocusable(C.getById(x), 5), D.addFocusable(C.getById(w), 5)), D.commitContent = m;
            },
            "onHide": function() {
                var C = this;
                C.preview && C.commitContent(g, C.preview), C.originalElement && (C.originalElement.removeListener("load", t), C.originalElement.removeListener("error", u), C.originalElement.removeListener("abort", u), C.originalElement.remove(), C.originalElement = !1), delete C.imageElement;
            },
            "contents": [ {
                "id": "info",
                "label": b.lang.image.infoTab,
                "accessKey": "I",
                "elements": [ {
                    "type": "vbox",
                    "padding": 0,
                    "children": [ {
                        "type": "hbox",
                        "widths": [ "280px", "110px" ],
                        "align": "right",
                        "children": [ {
                            "id": "txtUrl",
                            "type": "text",
                            "label": b.lang.common.url,
                            "required": !0,
                            "onChange": function() {
                                var C = this.getDialog(), D = this.getValue();
                                if (D.length > 0) {
                                    C = this.getDialog();
                                    var E = C.originalElement;
                                    C.preview.removeStyle("display"), E.setCustomData("isReady", "false");
                                    var F = CKEDITOR.document.getById(y);
                                    F && F.setStyle("display", ""), E.on("load", t, C), E.on("error", u, C), E.on("abort", u, C), E.setAttribute("src", D), s.setAttribute("src", D), C.preview.setAttribute("src", s.$.src), l(C);
                                } else C.preview && (C.preview.removeAttribute("src"), C.preview.setStyle("display", "none"));
                            },
                            "setup": function(C, D) {
                                if (C == d) {
                                    var E = D.data("cke-saved-src") || D.getAttribute("src"), F = this;
                                    this.getDialog().dontResetSize = !0, F.setValue(E), F.setInitValue();
                                }
                            },
                            "commit": function(C, D) {
                                var E = this;
                                C == d && (E.getValue() || E.isChanged()) ? (D.data("cke-saved-src", E.getValue()), D.setAttribute("src", E.getValue())) : C == g && (D.setAttribute("src", ""), D.removeAttribute("src"));
                            },
                            "validate": CKEDITOR.dialog.validate.notEmpty(b.lang.image.urlMissing)
                        }, {"id":"upload_auto",
                            "type":"html",
                            "style":"margin-top:0px;width:100%;height:30px;",
                            "onLoad":function(){},
                            "html":'<div style="width:80px;height:28px;overflow:hidden;float:left;margin-top:10px;" id="cke_upload_img_input"><iframe width="80" scrolling="no" height="28" frameborder="no" allowtransparency="yes" marginheight="0" 0″="" border="0″ marginwidth=" src="/upload/upload_form.php?params=%7B%22func%22%3A%22callback_upload_thumb%22%2C%22vid%22%3A%22cke_upload_img_input%22%2C%22thumb%22%3A%7B%22width%22%3A%22300%22%2C%22height%22%3A%22300%22%7D%2C%22water%22%3A%221%22%2C%22domain%22%3A%22mcms%22%7D" style=""></iframe></div>'
                        } ]
                    } ]
                }, {
                    "id": "txtAlt",
                    "type": "text",
                    "label": b.lang.image.alt,
                    "accessKey": "T",
                    "default": "",
                    "onChange": function() {
                        l(this.getDialog());
                    },
                    "setup": function(C, D) {
                        C == d && this.setValue(D.getAttribute("alt"));
                    },
                    "commit": function(C, D) {
                        var E = this;
                        C == d ? (E.getValue() || E.isChanged()) && D.setAttribute("alt", E.getValue()) : C == f ? D.setAttribute("alt", E.getValue()) : C == g && D.removeAttribute("alt");
                    }
                }, {
                    "type": "hbox",
                    "children": [ {
                        "id": "basic",
                        "type": "vbox",
                        "children": [ {
                            "type": "hbox",
                            "widths": [ "50%", "50%" ],
                            "children": [ {
                                "type": "vbox",
                                "padding": 1,
                                "children": [ {
                                    "type": "text",
                                    "width": "40px",
                                    "id": "txtWidth",
                                    "label": b.lang.common.width,
                                    "onKeyUp": k,
                                    "onChange": function() {
                                        o.call(this, "advanced:txtdlgGenStyle");
                                    },
                                    "validate": function() {
                                        var C = this.getValue().match(i), D = !!C && parseInt(C[1], 10) !== 0;
                                        return D || alert(b.lang.common.invalidWidth), D;
                                    },
                                    "setup": r,
                                    "commit": function(C, D, E) {
                                        var F = this.getValue();
                                        if (C == d) F ? D.setStyle("width", CKEDITOR.tools.cssLength(F)) : D.removeStyle("width"), !E && D.removeAttribute("width"); else if (C == f) {
                                            var G = F.match(h);
                                            if (!G) {
                                                var H = this.getDialog().originalElement;
                                                H.getCustomData("isReady") == "true" && D.setStyle("width", H.$.width + "px");
                                            } else D.setStyle("width", CKEDITOR.tools.cssLength(F));
                                        } else C == g && (D.removeAttribute("width"), D.removeStyle("width"));
                                    }
                                }, {
                                    "type": "text",
                                    "id": "txtHeight",
                                    "width": "40px",
                                    "label": b.lang.common.height,
                                    "onKeyUp": k,
                                    "onChange": function() {
                                        o.call(this, "advanced:txtdlgGenStyle");
                                    },
                                    "validate": function() {
                                        var C = this.getValue().match(i), D = !!C && parseInt(C[1], 10) !== 0;
                                        return D || alert(b.lang.common.invalidHeight), D;
                                    },
                                    "setup": r,
                                    "commit": function(C, D, E) {
                                        var F = this.getValue();
                                        if (C == d) F ? D.setStyle("height", CKEDITOR.tools.cssLength(F)) : D.removeStyle("height"), !E && D.removeAttribute("height"); else if (C == f) {
                                            var G = F.match(h);
                                            if (!G) {
                                                var H = this.getDialog().originalElement;
                                                H.getCustomData("isReady") == "true" && D.setStyle("height", H.$.height + "px");
                                            } else D.setStyle("height", CKEDITOR.tools.cssLength(F));
                                        } else C == g && (D.removeAttribute("height"), D.removeStyle("height"));
                                    }
                                } ]
                            },{
                                "id": "ratioLock",
                                "type": "html",
                                "style": "margin-top:30px;width:40px;height:40px;",
                                "onLoad": function() {
                                    var C = CKEDITOR.document.getById(x), D = CKEDITOR.document.getById(w);
                                    C && (C.on("click", function(E) {
                                        q(this), E.data && E.data.preventDefault();
                                    }, this.getDialog()), C.on("mouseover", function() {
                                        this.addClass("cke_btn_over");
                                    }, C), C.on("mouseout", function() {
                                        this.removeClass("cke_btn_over");
                                    }, C)), D && (D.on("click", function(E) {
                                        var J = this, F = p(J), G = J.originalElement, H = J.getValueOf("info", "txtWidth");
                                        if (G.getCustomData("isReady") == "true" && H) {
                                            var I = G.$.height / G.$.width * H;
                                            isNaN(I) || (J.setValueOf("info", "txtHeight", Math.round(I)), l(J));
                                        }
                                        E.data.preventDefault();
                                    }, this.getDialog()), D.on("mouseover", function() {
                                        this.addClass("cke_btn_over");
                                    }, D), D.on("mouseout", function() {
                                        this.removeClass("cke_btn_over");
                                    }, D));
                                },
                                "html": '<div><a href="javascript:void(0)" tabindex="-1" title="' + b.lang.image.unlockRatio + '" class="cke_btn_locked" id="' + w + '" role="button"><span class="cke_label">' + b.lang.image.unlockRatio + "</span></a>" + '<a href="javascript:void(0)" tabindex="-1" title="' + b.lang.image.resetSize + '" class="cke_btn_reset" id="' + x + '" role="button"><span class="cke_label">' + b.lang.image.resetSize + "</span></a>" + "</div>"
                            } ]
                        }, {
                            "type": "vbox",
                            "padding": 1,
                            "children": [ {
                                "type": "text",
                                "id": "txtBorder",
                                "width": "60px",
                                "label": b.lang.image.border,
                                "default": "",
                                "onKeyUp": function() {
                                    l(this.getDialog());
                                },
                                "onChange": function() {
                                    o.call(this, "advanced:txtdlgGenStyle");
                                },
                                "validate": CKEDITOR.dialog.validate.integer(b.lang.image.validateBorder),
                                "setup": function(C, D) {
                                    if (C == d) {
                                        var E, F = D.getStyle("border-width");
                                        F = F && F.match(/^(\d+px)(?: \1 \1 \1)?$/), E = F && parseInt(F[1], 10), isNaN(parseInt(E, 10)) && (E = D.getAttribute("border")), this.setValue(E);
                                    }
                                },
                                "commit": function(C, D, E) {
                                    var F = parseInt(this.getValue(), 10);
                                    C == d || C == f ? (isNaN(F) ? !F && this.isChanged() && (D.removeStyle("border-width"), D.removeStyle("border-style"), D.removeStyle("border-color")) : (D.setStyle("border-width", CKEDITOR.tools.cssLength(F)), D.setStyle("border-style", "solid")), !E && C == d && D.removeAttribute("border")) : C == g && (D.removeAttribute("border"), D.removeStyle("border-width"), D.removeStyle("border-style"), D.removeStyle("border-color"));
                                }
                            }, {
                                "type": "text",
                                "id": "txtHSpace",
                                "width": "60px",
                                "label": b.lang.image.hSpace,
                                "default": "",
                                "onKeyUp": function() {
                                    l(this.getDialog());
                                },
                                "onChange": function() {
                                    o.call(this, "advanced:txtdlgGenStyle");
                                },
                                "validate": CKEDITOR.dialog.validate.integer(b.lang.image.validateHSpace),
                                "setup": function(C, D) {
                                    if (C == d) {
                                        var E, F, G, H = D.getStyle("margin-left"), I = D.getStyle("margin-right");
                                        H = H && H.match(j), I = I && I.match(j), F = parseInt(H, 10), G = parseInt(I, 10), E = F == G && F, isNaN(parseInt(E, 10)) && (E = D.getAttribute("hspace")), this.setValue(E);
                                    }
                                },
                                "commit": function(C, D, E) {
                                    var F = parseInt(this.getValue(), 10);
                                    C == d || C == f ? (isNaN(F) ? !F && this.isChanged() && (D.removeStyle("margin-left"), D.removeStyle("margin-right")) : (D.setStyle("margin-left", CKEDITOR.tools.cssLength(F)), D.setStyle("margin-right", CKEDITOR.tools.cssLength(F))), !E && C == d && D.removeAttribute("hspace")) : C == g && (D.removeAttribute("hspace"), D.removeStyle("margin-left"), D.removeStyle("margin-right"));
                                }
                            }, {
                                "type": "text",
                                "id": "txtVSpace",
                                "width": "60px",
                                "label": b.lang.image.vSpace,
                                "default": "",
                                "onKeyUp": function() {
                                    l(this.getDialog());
                                },
                                "onChange": function() {
                                    o.call(this, "advanced:txtdlgGenStyle");
                                },
                                "validate": CKEDITOR.dialog.validate.integer(b.lang.image.validateVSpace),
                                "setup": function(C, D) {
                                    if (C == d) {
                                        var E, F, G, H = D.getStyle("margin-top"), I = D.getStyle("margin-bottom");
                                        H = H && H.match(j), I = I && I.match(j), F = parseInt(H, 10), G = parseInt(I, 10), E = F == G && F, isNaN(parseInt(E, 10)) && (E = D.getAttribute("vspace")), this.setValue(E);
                                    }
                                },
                                "commit": function(C, D, E) {
                                    var F = parseInt(this.getValue(), 10);
                                    C == d || C == f ? (isNaN(F) ? !F && this.isChanged() && (D.removeStyle("margin-top"), D.removeStyle("margin-bottom")) : (D.setStyle("margin-top", CKEDITOR.tools.cssLength(F)), D.setStyle("margin-bottom", CKEDITOR.tools.cssLength(F))), !E && C == d && D.removeAttribute("vspace")) : C == g && (D.removeAttribute("vspace"), D.removeStyle("margin-top"), D.removeStyle("margin-bottom"));
                                }
                            }, {
                                "id": "cmbAlign",
                                "type": "select",
                                "widths": [ "35%", "65%" ],
                                "style": "width:90px",
                                "label": b.lang.common.align,
                                "default": "",
                                "items": [ [ b.lang.common.notSet, "" ], [ b.lang.common.alignLeft, "left" ], [ b.lang.common.alignRight, "right" ] ],
                                "onChange": function() {
                                    l(this.getDialog()), o.call(this, "advanced:txtdlgGenStyle");
                                },
                                "setup": function(C, D) {
                                    if (C == d) {
                                        var E = D.getStyle("float");
                                        switch (E) {
                                          case "inherit":
                                          case "none":
                                            E = "";
                                        }
                                        !E && (E = (D.getAttribute("align") || "").toLowerCase()), this.setValue(E);
                                    }
                                },
                                "commit": function(C, D, E) {
                                    var F = this.getValue();
                                    if (C == d || C == f) {
                                        F ? D.setStyle("float", F) : D.removeStyle("float");
                                        if (!E && C == d) {
                                            F = (D.getAttribute("align") || "").toLowerCase();
                                            switch (F) {
                                              case "left":
                                              case "right":
                                                D.removeAttribute("align");
                                            }
                                        }
                                    } else C == g && D.removeStyle("float");
                                }
                            } ]
                        } ]
                    }, {
                        "type": "vbox",
                        "height": "250px",
                        "children": [ {
                            "type": "html",
                            "id": "htmlPreview",
                            "style": "width:95%;",
                            "html": "<div>" + CKEDITOR.tools.htmlEncode(b.lang.common.preview) + "<br>" + '<div id="' + y + '" class="ImagePreviewLoader" style="display:none"><div class="loading">&nbsp;</div></div>' + '<div id="' + z + '" class="ImagePreviewBox"><table><tr><td>' + '<a href="javascript:void(0)" target="_blank" onclick="return false;" id="' + A + '">' + '<img id="' + B + '" alt="" /></a>' + (b.config.image_previewText || "") + "</td></tr></table></div></div>"
                        } ]
                    } ]
                } ]
            }, {
                "id": "Link",
                "label": b.lang.link.title,
                "padding": 0,
                "elements": [ {
                    "id": "txtUrl",
                    "type": "text",
                    "label": b.lang.common.url,
                    "style": "width: 100%",
                    "default": "",
                    "setup": function(C, D) {
                        if (C == e) {
                            var E = D.data("cke-saved-href");
                            E || (E = D.getAttribute("href")), this.setValue(E);
                        }
                    },
                    "commit": function(C, D) {
                        var F = this;
                        if (C == e) if (F.getValue() || F.isChanged()) {
                            var E = decodeURI(F.getValue());
                            D.data("cke-saved-href", E), D.setAttribute("href", E);
                            if (F.getValue() || !b.config.image_removeLinkByEmptyURL) F.getDialog().addLink = !0;
                        }
                    }
                }, {
                    "type": "button",
                    "id": "browse",
                    "filebrowser": {
                        "action": "Browse",
                        "target": "Link:txtUrl",
                        "url": b.config.filebrowserImageBrowseLinkUrl
                    },
                    "style": "float:right",
                    "hidden": !0,
                    "label": b.lang.common.browseServer
                }, {
                    "id": "cmbTarget",
                    "type": "select",
                    "label": b.lang.common.target,
                    "default": "",
                    "items": [ [ b.lang.common.notSet, "" ], [ b.lang.common.targetNew, "_blank" ], [ b.lang.common.targetTop, "_top" ], [ b.lang.common.targetSelf, "_self" ], [ b.lang.common.targetParent, "_parent" ] ],
                    "setup": function(C, D) {
                        C == e && this.setValue(D.getAttribute("target") || "");
                    },
                    "commit": function(C, D) {
                        C == e && (this.getValue() || this.isChanged()) && D.setAttribute("target", this.getValue());
                    }
                } ]
            }, {
                "id": "Upload",
                "hidden": !0,
                "filebrowser": "uploadButton",
                "label": b.lang.image.upload,
                "elements": [ {
                    "type": "file",
                    "id": "upload",
                    "label": b.lang.image.btnUpload,
                    "style": "height:40px",
                    "size": 38
                }, {
                    "type": "fileButton",
                    "id": "uploadButton",
                    "filebrowser": "info:txtUrl",
                    "label": b.lang.image.btnUpload,
                    "for": [ "Upload", "upload" ]
                } ]
            }, {
                "id": "advanced",
                "label": b.lang.common.advancedTab,
                "elements": [ {
                    "type": "hbox",
                    "widths": [ "50%", "25%", "25%" ],
                    "children": [ {
                        "type": "text",
                        "id": "linkId",
                        "label": b.lang.common.id,
                        "setup": function(C, D) {
                            C == d && this.setValue(D.getAttribute("id"));
                        },
                        "commit": function(C, D) {
                            C == d && (this.getValue() || this.isChanged()) && D.setAttribute("id", this.getValue());
                        }
                    }, {
                        "id": "cmbLangDir",
                        "type": "select",
                        "style": "width : 100px;",
                        "label": b.lang.common.langDir,
                        "default": "",
                        "items": [ [ b.lang.common.notSet, "" ], [ b.lang.common.langDirLtr, "ltr" ], [ b.lang.common.langDirRtl, "rtl" ] ],
                        "setup": function(C, D) {
                            C == d && this.setValue(D.getAttribute("dir"));
                        },
                        "commit": function(C, D) {
                            C == d && (this.getValue() || this.isChanged()) && D.setAttribute("dir", this.getValue());
                        }
                    }, {
                        "type": "text",
                        "id": "txtLangCode",
                        "label": b.lang.common.langCode,
                        "default": "",
                        "setup": function(C, D) {
                            C == d && this.setValue(D.getAttribute("lang"));
                        },
                        "commit": function(C, D) {
                            C == d && (this.getValue() || this.isChanged()) && D.setAttribute("lang", this.getValue());
                        }
                    } ]
                }, {
                    "type": "text",
                    "id": "txtGenLongDescr",
                    "label": b.lang.common.longDescr,
                    "setup": function(C, D) {
                        C == d && this.setValue(D.getAttribute("longDesc"));
                    },
                    "commit": function(C, D) {
                        C == d && (this.getValue() || this.isChanged()) && D.setAttribute("longDesc", this.getValue());
                    }
                }, {
                    "type": "hbox",
                    "widths": [ "50%", "50%" ],
                    "children": [ {
                        "type": "text",
                        "id": "txtGenClass",
                        "label": b.lang.common.cssClass,
                        "default": "",
                        "setup": function(C, D) {
                            C == d && this.setValue(D.getAttribute("class"));
                        },
                        "commit": function(C, D) {
                            C == d && (this.getValue() || this.isChanged()) && D.setAttribute("class", this.getValue());
                        }
                    }, {
                        "type": "text",
                        "id": "txtGenTitle",
                        "label": b.lang.common.advisoryTitle,
                        "default": "",
                        "onChange": function() {
                            l(this.getDialog());
                        },
                        "setup": function(C, D) {
                            C == d && this.setValue(D.getAttribute("title"));
                        },
                        "commit": function(C, D) {
                            var E = this;
                            C == d ? (E.getValue() || E.isChanged()) && D.setAttribute("title", E.getValue()) : C == f ? D.setAttribute("title", E.getValue()) : C == g && D.removeAttribute("title");
                        }
                    } ]
                }, {
                    "type": "text",
                    "id": "txtdlgGenStyle",
                    "label": b.lang.common.cssStyle,
                    "default": "",
                    "setup": function(C, D) {
                        if (C == d) {
                            var E = D.getAttribute("style");
                            !E && D.$.style.cssText && (E = D.$.style.cssText), this.setValue(E);
                            var F = D.$.style.height, G = D.$.style.width, H = (F ? F : "").match(h), I = (G ? G : "").match(h);
                            this.attributesInStyle = {
                                "height": !!H,
                                "width": !!I
                            };
                        }
                    },
                    "onChange": function() {
                        o.call(this, [ "info:cmbFloat", "info:cmbAlign", "info:txtVSpace", "info:txtHSpace", "info:txtBorder", "info:txtWidth", "info:txtHeight" ]), l(this);
                    },
                    "commit": function(C, D) {
                        C == d && (this.getValue() || this.isChanged()) && D.setAttribute("style", this.getValue());
                    }
                } ]
            } ]
        };
    };
    CKEDITOR.dialog.add("image", function(b) {
        return a(b, "image");
    }), CKEDITOR.dialog.add("imagebutton", function(b) {
        return a(b, "imagebutton");
    });
})();