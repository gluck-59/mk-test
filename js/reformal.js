if (reformalOptions && !Reformal) {
    var Reformal = (function(b) {
        var g = {
            renderTemplate: function(k, l) {
                return k.replace(/{{(.*?)}}/g, function(n, m) {
                    var o = l[m];
                    return typeof o === "string" || typeof o === "number" ? o : n
                })
            },
            extendObject: function(l, k) {
                for (prop in k) {
                    l[prop] = k[prop]
                }
                return l
            },
            includeCss: function(l) {
                var k = document.createElement("style");
                k.setAttribute("type", "text/css");
                k.setAttribute("media", "screen");
                if (k.styleSheet) {
                    k.styleSheet.cssText = l
                } else {
                    k.appendChild(document.createTextNode(l))
                }
                document.getElementsByTagName("head")[0].appendChild(k)
            },
            isQuirksMode: function() {
                return document.compatMode && document.compatMode == "BackCompat"
            },
            logHit: function(l) {
                var k = new Image();
                k.src = g.proto + "reformal.ru/log.php?id=" + l + "&r=" + Math.round(100000 * Math.random())
            },
            isSsl: "https:" == document.location.protocol,
            proto: "https:" == document.location.protocol ? "https://" : "http://",
            compact: function(t) {
                str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
                var k = "";
                var u, q, o, r, p, n, m;
                var l = 0;
                t = g.utf8encode(t);
                while (l < t.length) {
                    u = t.charCodeAt(l++);
                    q = t.charCodeAt(l++);
                    o = t.charCodeAt(l++);
                    r = u >> 2;
                    p = ((u & 3) << 4) | (q >> 4);
                    n = ((q & 15) << 2) | (o >> 6);
                    m = o & 63;
                    if (isNaN(q)) {
                        n = m = 64
                    } else {
                        if (isNaN(o)) {
                            m = 64
                        }
                    }
                    k = k + str.charAt(r) + str.charAt(p) + str.charAt(n) + str.charAt(m)
                }
                return k
            },
            utf8encode: function(l) {
                l = l.replace(/\r\n/g, "\n");
                var k = "";
                for (var o = 0; o < l.length; o++) {
                    var m = l.charCodeAt(o);
                    if (m < 128) {
                        k += String.fromCharCode(m)
                    } else {
                        if ((m > 127) && (m < 2048)) {
                            k += String.fromCharCode((m >> 6) | 192) + String.fromCharCode((m & 63) | 128)
                        } else {
                            k += String.fromCharCode((m >> 12) | 224) + String.fromCharCode(((m >> 6) & 63) | 128) + String.fromCharCode((m & 63) | 128)
                        }
                    }
                }
                return k
            }
        };
        g.ieVersion = (function() {
            if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
                return new Number(RegExp.$1)
            }
            return null
        })();
        g.supportsCssPositionFixed = (function() {
            if (g.ieVersion === null) {
                return true
            }
            if (g.ieVersion < 7) {
                return false
            }
            return !g.isQuirksMode()
        })();
        var i = g.extendObject({
            project_id: null,
            project_host: null,
            show_tab: true,
            force_new_window: false,
            tab_orientation: "left",
            tab_indent: "200px",
            tab_image_url: "",
            tab_image_ssl_url: "",
            tab_is_custom: false,
            tab_bg_color: "transparent",
            tab_border_color: "#FFFFFF",
            tab_border_radius: 5,
            tab_border_width: 2,
            tab_shadow_color: "#888",
            widget_width: 740,
            widget_height: 520,
            demo_mode: false
        }, b);
        i.project_url = ["http://", i.project_host].join("");
        i.widget_url = [g.proto, "reformal.ru/widget/", i.project_id, "?nhic=1&_=", Math.round(10000 * Math.random())].join("");
        i.empty_gif_url = [g.proto, "media.reformal.ru/widgets/v3/x.gif"].join("");
        i.close_image_url = [g.proto, "media.reformal.ru/widgets/v3/close.png"].join("");
        i.gradient_image_url = [g.proto, "media.reformal.ru/widgets/v3/", function() {
            switch (i.tab_orientation) {
                case "left":
                    return "gl.png";
                case "right":
                    return "gr.png";
                case "top-left":
                    return "gt.png";
                case "top-right":
                    return "gt.png";
                case "bottom-left":
                    return "gb.png";
                case "bottom-right":
                    return "gb.png"
            }
        }()].join("");
        if (!g.supportsCssPositionFixed) {
            i.force_new_window = true
        }
        if (!i.tab_image_url) {
            i.tab_image_url = i.empty_gif_url
        }
        if (g.isSsl) {
            i.tab_image_url = i.tab_image_ssl_url || function(k) {
                var l = k.split("//");
                if (l[0] == "https:") {
                    return k
                }
                return "https://" + l[1]
            }(i.tab_image_url)
        }
        Tab = {
            tabImagePreloaded: false,
            tabImageHeight: 0,
            tabImageWidth: 0,
            l: window.location.href,
            show: function() {
                var k, p, m, r, s, q, l, o, n;
                if (!this.tabImagePreloaded) {
                    this.preloadTabImage();
                    return
                }
                l = /%/.test(i.tab_indent) ? "%" : "px";
                o = /\d+/.exec(i.tab_indent)[0];
                p = "#reformal_tab {display:block; font-size:0; background-color:{{tab_bg_color}} !important; line-height: 0; cursor: pointer; z-index:100001;";
                switch (i.tab_orientation) {
                    case "left":
                        p += "left:0;";
                        break;
                    case "right":
                        p += "right:0;";
                        break;
                    case "top-left":
                    case "bottom-left":
                        p += "left:{{tab_indent}};";
                        break;
                    case "top-right":
                    case "bottom-right":
                        p += "right:{{tab_indent}};";
                        break
                }
                if (l == "%") {
                    n = this.tabImageHeight / 2;
                    if (!i.tab_is_custom) {
                        n += 10
                    }
                    switch (i.tab_orientation) {
                        case "left":
                        case "right":
                            p += ["margin-top:", -n, "px;"].join("");
                            break;
                        case "top-left":
                        case "bottom-left":
                            p += ["margin-left:", -n, "px;"].join("");
                            break;
                        case "top-right":
                        case "bottom-right":
                            p += ["margin-right:", -n, "px;"].join("");
                            break
                    }
                }
                if (g.supportsCssPositionFixed) {
                    p += "position:fixed;";
                    switch (i.tab_orientation) {
                        case "left":
                        case "right":
                            p += "top:{{tab_indent}};";
                            break;
                        case "top-left":
                        case "top-right":
                            p += "top:0;";
                            break;
                        case "bottom-left":
                        case "bottom-right":
                            p += "bottom:0;";
                            break
                    }
                } else {
                    p += "position:absolute;";
                    switch (i.tab_orientation) {
                        case "left":
                        case "right":
                            if (l == "%") {
                                p += 'top: expression(parseInt(document.documentElement.scrollTop || document.body.scrollTop) + parseInt(document.documentElement.clientHeight || document.body.clientHeight)*{{tab_indent_value}}/100 + "px");'
                            } else {
                                p += 'top: expression(parseInt(document.documentElement.scrollTop || document.body.scrollTop) + {{tab_indent_value}} + "px");'
                            }
                            break;
                        case "top-left":
                        case "top-right":
                            p += 'top: expression(parseInt(document.documentElement.scrollTop || document.body.scrollTop) + "px");';
                            break;
                        case "bottom-left":
                        case "bottom-right":
                            p += 'top: expression(parseInt(document.documentElement.scrollTop || document.body.scrollTop) + parseInt(document.documentElement.clientHeight || document.body.clientHeight) - this.offsetHeight + "px");';
                            break
                    }
                }
                if (!i.tab_is_custom) {
                    p += "border:{{tab_border_width}}px solid {{tab_border_color}};";
                    switch (i.tab_orientation) {
                        case "left":
                            p += "padding:10px 4px 10px 4px; border-left:0;   background: {{tab_bg_color}} url({{gradient_image_url}}) 0 0 repeat-y;    -webkit-border-radius:0 {{tab_border_radius}}px {{tab_border_radius}}px 0; -moz-border-radius:0 {{tab_border_radius}}px {{tab_border_radius}}px 0; border-radius:0 {{tab_border_radius}}px {{tab_border_radius}}px 0; -moz-box-shadow:1px 0 2px {{tab_shadow_color}};  -webkit-box-shadow:1px 0 2px {{tab_shadow_color}};  box-shadow:1px 0 2px {{tab_shadow_color}};";
                            break;
                        case "right":
                            p += "padding:10px 3px 10px 5px; border-right:0;  background: {{tab_bg_color}} url({{gradient_image_url}}) 100% 0 repeat-y; -webkit-border-radius:{{tab_border_radius}}px 0 0 {{tab_border_radius}}px; -moz-border-radius:{{tab_border_radius}}px 0 0 {{tab_border_radius}}px; border-radius:{{tab_border_radius}}px 0 0 {{tab_border_radius}}px; -moz-box-shadow:-1px 0 2px {{tab_shadow_color}}; -webkit-box-shadow:-1px 0 2px {{tab_shadow_color}}; box-shadow:-1px 0 2px {{tab_shadow_color}};";
                            break;
                        case "top-left":
                        case "top-right":
                            p += "padding:4px 10px 4px 10px; border-top:0;    background: {{tab_bg_color}} url({{gradient_image_url}}) 0 0 repeat-x;    -webkit-border-radius:0 0 {{tab_border_radius}}px {{tab_border_radius}}px; -moz-border-radius:0 0 {{tab_border_radius}}px {{tab_border_radius}}px; border-radius:0 0 {{tab_border_radius}}px {{tab_border_radius}}px; -moz-box-shadow:0 1px 2px {{tab_shadow_color}};  -webkit-box-shadow:0 1px 2px {{tab_shadow_color}};  box-shadow:0 1px 2px {{tab_shadow_color}};";
                            break;
                        case "bottom-left":
                        case "bottom-right":
                            p += "padding:5px 10px 3px 10px; border-bottom:0; background: {{tab_bg_color}} url({{gradient_image_url}}) 0 100% repeat-x; -webkit-border-radius:{{tab_border_radius}}px {{tab_border_radius}}px 0 0; -moz-border-radius:{{tab_border_radius}}px {{tab_border_radius}}px 0 0; border-radius:{{tab_border_radius}}px {{tab_border_radius}}px 0 0; -moz-box-shadow:0 -1px 2px {{tab_shadow_color}}; -webkit-box-shadow:0 -1px 2px {{tab_shadow_color}}; box-shadow:0 -1px 2px {{tab_shadow_color}};";
                            break
                    }
                } else {
                    p += "border: none;"
                }
                p += "}";
                if (!i.tab_is_custom) {
                    p += "#reformal_tab:hover {";
                    switch (i.tab_orientation) {
                        case "left":
                            p += "padding-left:6px;";
                            break;
                        case "right":
                            p += "padding-right:6px;";
                            break;
                        case "top-left":
                        case "top-right":
                            p += "padding-top:6px;";
                            break;
                        case "bottom-left":
                        case "bottom-right":
                            p += "padding-bottom:6px;";
                            break
                    }
                    p += "}"
                }
                p += "#reformal_tab img {border: none; padding:0; margin: 0;}";
                if (g.ieVersion && g.ieVersion < 7) {
                    p += "#reformal_tab {display:inline-block; background-image: none;}";
                    p += '#reformal_tab img {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="{{tab_image_url}}", sizingMethod="image");}'
                }
                m = g.renderTemplate(p, {
                    tab_indent: o + l,
                    tab_indent_value: o,
                    tab_bg_color: i.tab_bg_color,
                    tab_image_url: i.tab_image_url,
                    tab_border_color: i.tab_border_color,
                    tab_border_radius: i.tab_border_radius,
                    tab_shadow_color: i.tab_shadow_color,
                    tab_border_width: i.tab_border_width,
                    gradient_image_url: i.gradient_image_url
                });
                g.includeCss(m);
                r = [i.force_new_window ? "window.open('" + i.project_url + "')" : "Reformal.widgetOpen()", "return false;"].join(";"), s = "Reformal.widgetPreload();";
                q = "Reformal.widgetAbortPreload();";
                if (i.demo_mode) {
                    r = s = "return false;"
                }
                k = document.createElement("a");
                k.setAttribute("id", "reformal_tab");
                k.setAttribute("href", i.demo_mode ? "#" : i.project_url);
                k.setAttribute("onclick", r);
                k.setAttribute("onmouseover", s);
                k.setAttribute("onmouseout", q);
                k.innerHTML = g.renderTemplate('<img src="{{tab_image_url}}" alt="" />', {
                    tab_image_url: (g.ieVersion && g.ieVersion < 7) ? i.empty_gif_url : i.tab_image_url
                });
                document.body.insertBefore(k, document.body.firstChild)
            },
            preloadTabImage: function() {
                var n = function(o) {
                    o.onload = function() {};
                    if (Tab.tabImagePreloaded) {
                        return false
                    }
                    Tab.tabImagePreloaded = true;
                    Tab.tabImageHeight = o.height;
                    Tab.tabImageWidth = o.width;
                    Tab.show()
                };
                var l = new Image();
                l.src = i.tab_image_url;
                if (l.complete) {
                    n(l)
                } else {
                    l.onload = function() {
                        n(l)
                    };
                    l.onerror = function() {}
                }
                var k = new Image();
                k.src = g.proto + "log.reformal.ru/st.php?w=3&pid=" + i.project_id;
                var m = new Image();
                m.src = g.proto + "reformal.ru/human_check/" + i.project_id + "|" + g.compact(Tab.l) + "|" + g.compact(Widget.r) + "|" + Math.round(100000 * Math.random())
            }
        };
        var a = function() {
            if (navigator.userAgent.toLowerCase().indexOf("firefox") == -1) {
                return
            }
            if (g.isSsl) {
                return
            }
            var p = document.getElementsByTagName("noscript"),
                m = new RegExp("<s*a[^>]*href[^>]*(reformal.ru|" + i.project_host + ")[^>]*>", "i");
            for (var l = 0, o = p.length; l < o; l++) {
                if (m.test(p[l].textContent)) {
                    return
                }
            }
            var n, k = document.getElementsByTagName("a"),
                m = new RegExp("reformal.ru|" + i.project_host, "i");
            for (var l = 0, o = k.length; l < o; l++) {
                n = k[l];
                if (n.id && n.id == "reformal_tab") {
                    continue
                }
                if (m.test(n.href)) {
                    return
                }
            }
            var l = new Image();
            l.src = "http://log.reformal.ru/bl.php?pid=" + i.project_id + "&url=" + window.location.href
        };
        var f = function() {
            var m = 0;
            if (window.pageYOffset != undefined) {
                m = pageYOffset
            } else {
                var l = document.documentElement;
                var k = document.body;
                m = l.scrollTop || k && k.scrollTop || 0;
                m -= l.clientTop
            }
            return m
        };
        var e = function() {
            return document.documentElement.clientHeight
        };
        var j = function() {
            return Math.max(document.documentElement.scrollHeight, document.documentElement.clientHeight)
        };
        Widget = {
            hitCounted: false,
            preloaded: false,
            overleyElement: null,
            widgetElement: null,
            open: function() {
                if (!this.preloaded) {
                    this.preload()
                }
                this.overleyElement.style.display = "block";
                this.widgetElement.style.display = "block";
                if (j() > e()) {
                    document.documentElement.style.top = -f() + "px";
                    document.documentElement.className += " reformal_widget-noscroll"
                } 
                if (!this.hitCounted) {
                    this.hitCounted = true;
                    g.logHit(1654)
                }
            },
            close: function() {
                this.overleyElement.style.display = "none";
                this.widgetElement.style.display = "none";
                if (document.documentElement.className.match(/(?:^|\s)reformal_widget-noscroll(?!\S)/)) {
                    var k = parseInt(document.documentElement.style.top);
                    document.documentElement.style.top = "";
                    document.documentElement.className = document.documentElement.className.replace(/(?:^|\s)reformal_widget-noscroll(?!\S)/g, "");
                    window.scrollTo(0, -k)
                }
            },
            preload: function() {
                if (this.preloaded) {
                    return
                }
                var m = "            #reformal_widget-overlay {width:100%; height:100%; background:#000; position:fixed; top:0; left:0; z-index:100002;}             #reformal_widget-overlay {filter:progid:DXImageTransform.Microsoft.Alpha(opacity=60);-moz-opacity: 0.6;-khtml-opacity: 0.6;opacity: 0.6;}             #reformal_widget {position: fixed; z-index:100003; top:50%; left:50%; width:{{width}}px; height:{{height}}px; background:#ECECEC; margin: {{margin_top}}px 0 0 {{margin_left}}px; -webkit-border-radius: 6px; -moz-border-radius:  6px; border-radius:  6px;}             #reformal_widget {-webkit-box-shadow:0 0 15px #000; -moz-box-shadow: 0 0 15px #000; box-shadow:0 0 15px #000;}             #reformal_widget iframe {padding:0; margin:0; border:0;}             #reformal_widget #reformal_widget-close {display:block; width:34px; height:34px; background: url({{close_image_url}}) no-repeat 0 0; position:absolute; top:-17px; right:-17px; z-index:100004;}             .reformal_widget-noscroll{overflow-y: hidden; width: 100%;}";
                if (!g.supportsCssPositionFixed) {
                    m += '                #reformal_widget-overlay {position: absolute; top: expression(parseInt(document.documentElement.scrollTop || document.body.scrollTop) + "px");}                #reformal_widget {position: absolute; top: expression(parseInt(document.documentElement.scrollTop || document.body.scrollTop) + parseInt(document.documentElement.clientHeight || document.body.clientHeight)/2 + "px");}'
                }
                var l = g.renderTemplate(m, {
                    width: i.widget_width,
                    height: i.widget_height,
                    margin_left: -i.widget_width / 2,
                    margin_top: -i.widget_height / 2,
                    close_image_url: i.close_image_url
                });
                g.includeCss(l);
                this.overleyElement = document.createElement("div");
                this.overleyElement.setAttribute("id", "reformal_widget-overlay");
                this.overleyElement.setAttribute("onclick", "Reformal.widgetClose();");
                this.widgetElement = document.createElement("div");
                this.widgetElement.setAttribute("id", "reformal_widget");
                this.widgetElement.innerHTML = '             <a href="#" onclick="Reformal.widgetClose(); return false;" id="reformal_widget-close"></a>             <iframe src="' + i.widget_url + '" frameborder="0" scrolling="no" width="100%" height="100%"></iframe>';
                this.widgetElement.style.display = "none";
                this.overleyElement.style.display = "none";
                document.body.insertBefore(this.widgetElement, document.body.firstChild);
                document.body.insertBefore(this.overleyElement, document.body.firstChild);
                this.preloaded = true;
                try {
                    a()
                } catch (k) {}
            },
            r: typeof document.referrer === "undefined" ? "" : document.referrer
        };
        if (i.show_tab) {
            Tab.show();
            if (g.ieVersion !== null) {
                if (g.isQuirksMode()) {
                    g.logHit(1657)
                } else {
                    g.logHit(1658)
                }
            }
        }
        var d = function() {
            if (g.ieVersion !== null) {
                g.logHit(1656)
            } else {
                g.logHit(1655)
            }
        };
        var c = false;
        var h = 0;
        return {
            widgetOpen: function() {
                Widget.open()
            },
            widgetPreload: function() {
                if (!c) {
                    c = true;
                    d()
                }
                if (i.force_new_window) {
                    return
                }
            },
            widgetAbortPreload: function() {
                if (!h) {
                    return
                }
                clearTimeout(h)
            },
            widgetClose: function() {
                Widget.close()
            },
            tabShow: function() {
                Tab.show()
            }
        }
    })(reformalOptions)
};