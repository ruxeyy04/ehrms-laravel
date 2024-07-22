!(function () {
    "use strict";
    var t = localStorage.getItem("language"),
        a = "en";
    function n(e) {
        document.getElementById("header-lang-img") &&
            ("en" == e
                ? (document.getElementById("header-lang-img").src =
                      "assets/images/flags/us.jpg")
                : "sp" == e
                ? (document.getElementById("header-lang-img").src =
                      "assets/images/flags/spain.jpg")
                : "gr" == e
                ? (document.getElementById("header-lang-img").src =
                      "assets/images/flags/germany.jpg")
                : "it" == e
                ? (document.getElementById("header-lang-img").src =
                      "assets/images/flags/italy.jpg")
                : "ru" == e &&
                  (document.getElementById("header-lang-img").src =
                      "assets/images/flags/russia.jpg"),
            localStorage.setItem("language", e),
            null == (t = localStorage.getItem("language")) && n(a),
            (e = new XMLHttpRequest()).open(
                "GET",
                "/assets/lang/" + t + ".json"
            ),
            (e.onreadystatechange = function () {
                var a;
                4 === this.readyState &&
                    200 === this.status &&
                    ((a = JSON.parse(this.responseText)),
                    Object.keys(a).forEach(function (t) {
                        document
                            .querySelectorAll("[data-key='" + t + "']")
                            .forEach(function (e) {
                                e.textContent = a[t];
                            });
                    }));
            }),
            e.send());
    }
    function e() {
        var e = document.querySelectorAll(".counter-value");
        e &&
            e.forEach(function (s) {
                !(function e() {
                    var t = +s.getAttribute("data-target"),
                        a = +s.innerText,
                        n = t / 250;
                    n < 1 && (n = 1),
                        a < t
                            ? ((s.innerText = (a + n).toFixed(0)),
                              setTimeout(e, 1))
                            : (s.innerText = t);
                })();
            });
    }
    function s() {
        setTimeout(function () {
            var e,
                t,
                a = document.getElementById("side-menu");
            a &&
                ((a = a.querySelector(".mm-active .active")),
                300 < (e = a ? a.offsetTop : 0) &&
                    ((e -= 100),
                    (t = document.getElementsByClassName("vertical-menu")
                        ? document.getElementsByClassName("vertical-menu")[0]
                        : "") &&
                        t.querySelector(".simplebar-content-wrapper") &&
                        setTimeout(function () {
                            t.querySelector(
                                ".simplebar-content-wrapper"
                            ).scrollTop = e;
                        }, 0)));
        }, 0);
    }
    function o() {
        for (
            var e = document
                    .getElementById("topnav-menu-content")
                    .getElementsByTagName("a"),
                t = 0,
                a = e.length;
            t < a;
            t++
        )
            "nav-item dropdown active" ===
                e[t].parentElement.getAttribute("class") &&
                (e[t].parentElement.classList.remove("active"),
                e[t].nextElementSibling.classList.remove("show"));
    }
    function l(e) {
        var t = document.getElementById(e),
            a =
                ((t.style.display = "block"),
                setInterval(function () {
                    t.style.opacity || (t.style.opacity = 1),
                        0 < t.style.opacity
                            ? (t.style.opacity -= 0.2)
                            : (clearInterval(a), (t.style.display = "none"));
                }, 200));
    }
    function r() {
        var e, t;
        feather.replace(),
            window.sessionStorage &&
                ((e = sessionStorage.getItem("is_visited"))
                    ? null !== (t = document.querySelector("#" + e)) &&
                      ((t.checked = !0),
                      (t = e),
                      1 ==
                          document.getElementById("layout-direction-ltr")
                              .checked && "layout-direction-ltr" === t
                          ? (document
                                .getElementsByTagName("html")[0]
                                .removeAttribute("dir"),
                            (document.getElementById(
                                "layout-direction-rtl"
                            ).checked = !1),
                            document
                                .getElementById("bootstrap-style")
                                .setAttribute(
                                    "href",
                                    "assets/css/bootstrap.min.css"
                                ),
                            document
                                .getElementById("app-style")
                                .setAttribute("href", "assets/css/app.min.css"),
                            sessionStorage.setItem(
                                "is_visited",
                                "layout-direction-ltr"
                            ))
                          : 1 ==
                                document.getElementById("layout-direction-rtl")
                                    .checked &&
                            "layout-direction-rtl" === t &&
                            ((document.getElementById(
                                "layout-direction-ltr"
                            ).checked = !1),
                            document
                                .getElementById("bootstrap-style")
                                .setAttribute(
                                    "href",
                                    "assets/css/bootstrap-rtl.min.css"
                                ),
                            document
                                .getElementById("app-style")
                                .setAttribute(
                                    "href",
                                    "assets/css/app-rtl.min.css"
                                ),
                            document
                                .getElementsByTagName("html")[0]
                                .setAttribute("dir", "rtl"),
                            sessionStorage.setItem(
                                "is_visited",
                                "layout-direction-rtl"
                            )))
                    : sessionStorage.setItem(
                          "is_visited",
                          "layout-direction-ltr"
                      ));
    }
    function i(e) {
        document.getElementById(e) && (document.getElementById(e).checked = !0);
    }
    (window.onload = function () {
        document.getElementById("preloader") &&
            (l("pre-status"), l("preloader"));
    }),
        r(),
        document.addEventListener("DOMContentLoaded", function (e) {
            document.getElementById("side-menu") && new MetisMenu("#side-menu");
        }),
        e();
    for (
        var d,
            c,
            u,
            m = document.body.getAttribute("data-sidebar-size"),
            g =
                ((window.onload = function () {
                    1024 <= window.innerWidth &&
                        window.innerWidth <= 1366 &&
                        (document.body.setAttribute("data-sidebar-size", "sm"),
                        i("sidebar-size-small"));
                }),
                document.getElementsByClassName("vertical-menu-btn")),
            b = 0;
        b < g.length;
        b++
    )
        g[(d = b)] &&
            g[d].addEventListener("click", function (e) {
                e.preventDefault(),
                    document.body.classList.toggle("sidebar-enable"),
                    992 <= window.innerWidth
                        ? null == m
                            ? null ==
                                  document.body.getAttribute(
                                      "data-sidebar-size"
                                  ) ||
                              "lg" ==
                                  document.body.getAttribute(
                                      "data-sidebar-size"
                                  )
                                ? document.body.setAttribute(
                                      "data-sidebar-size",
                                      "sm"
                                  )
                                : document.body.setAttribute(
                                      "data-sidebar-size",
                                      "lg"
                                  )
                            : "md" == m
                            ? "md" ==
                              document.body.getAttribute("data-sidebar-size")
                                ? document.body.setAttribute(
                                      "data-sidebar-size",
                                      "sm"
                                  )
                                : document.body.setAttribute(
                                      "data-sidebar-size",
                                      "md"
                                  )
                            : "sm" ==
                              document.body.getAttribute("data-sidebar-size")
                            ? document.body.setAttribute(
                                  "data-sidebar-size",
                                  "lg"
                              )
                            : document.body.setAttribute(
                                  "data-sidebar-size",
                                  "sm"
                              )
                        : s();
            });
    function y() {
        document.webkitIsFullScreen ||
            document.mozFullScreen ||
            document.msFullscreenElement ||
            document.body.classList.remove("fullscreen-enable");
    }
    if (
        (setTimeout(function () {
            var e = document.querySelectorAll("#sidebar-menu a");
            e &&
                e.forEach(function (e) {
                    var t = window.location.href.split(/[?#]/)[0];
                    e.href == t &&
                        (e.classList.add("active"),
                        (t = e.parentElement) &&
                            "side-menu" !== t.id &&
                            (t.classList.add("mm-active"),
                            (e = t.parentElement) &&
                                "side-menu" !== e.id &&
                                (e.classList.add("mm-show"),
                                e.classList.contains("mm-collapsing") &&
                                    console.log("has mm-collapsing"),
                                (t = e.parentElement) &&
                                    "side-menu" !== t.id &&
                                    (t.classList.add("mm-active"),
                                    (e = t.parentElement) &&
                                        "side-menu" !== e.id &&
                                        (e.classList.add("mm-show"),
                                        (t = e.parentElement) &&
                                            "side-menu" !== t.id &&
                                            t.classList.add("mm-active"))))));
                });
        }, 0),
        (u = document.querySelectorAll(".navbar-nav a")) &&
            u.forEach(function (e) {
                var t = window.location.href.split(/[?#]/)[0];
                e.href == t &&
                    (e.classList.add("active"),
                    (t = e.parentElement) &&
                        (t.classList.add("active"),
                        (e = t.parentElement).classList.add("active"),
                        (t = e.parentElement) &&
                            (t.classList.add("active"),
                            (e = t.parentElement) &&
                                (e.classList.add("active"),
                                (t = e.parentElement) &&
                                    (t.classList.add("active"),
                                    (e = t.parentElement) &&
                                        e.classList.add("active"))))));
            }),
        (u = document.querySelector('[data-toggle="fullscreen"]')) &&
            u.addEventListener("click", function (e) {
                e.preventDefault(),
                    document.body.classList.toggle("fullscreen-enable"),
                    document.fullscreenElement ||
                    document.mozFullScreenElement ||
                    document.webkitFullscreenElement
                        ? document.cancelFullScreen
                            ? document.cancelFullScreen()
                            : document.mozCancelFullScreen
                            ? document.mozCancelFullScreen()
                            : document.webkitCancelFullScreen &&
                              document.webkitCancelFullScreen()
                        : document.documentElement.requestFullscreen
                        ? document.documentElement.requestFullscreen()
                        : document.documentElement.mozRequestFullScreen
                        ? document.documentElement.mozRequestFullScreen()
                        : document.documentElement.webkitRequestFullscreen &&
                          document.documentElement.webkitRequestFullscreen(
                              Element.ALLOW_KEYBOARD_INPUT
                          );
            }),
        document.addEventListener("fullscreenchange", y),
        document.addEventListener("webkitfullscreenchange", y),
        document.addEventListener("mozfullscreenchange", y),
        document.getElementById("topnav-menu-content"))
    ) {
        for (
            var h = document
                    .getElementById("topnav-menu-content")
                    .getElementsByTagName("a"),
                p = 0,
                E = h.length;
            p < E;
            p++
        )
            h[p].onclick = function (e) {
                "#" === e.target.getAttribute("href") &&
                    (e.target.parentElement.classList.toggle("active"),
                    e.target.nextElementSibling.classList.toggle("show"));
            };
        window.addEventListener("resize", o);
    }
    [].slice
        .call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        .map(function (e) {
            return new bootstrap.Tooltip(e);
        }),
        [].slice
            .call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            .map(function (e) {
                return new bootstrap.Popover(e);
            }),
        [].slice.call(document.querySelectorAll(".toast")).map(function (e) {
            return new bootstrap.Toast(e);
        }),
        n(null === t ? a : t),
        (u = document.getElementsByClassName("language")) &&
            Array.from(u).forEach(function (t) {
                t.addEventListener("click", function (e) {
                    n(t.getAttribute("data-lang"));
                });
            }),
        (c = document.body),
        c.addEventListener("click", function (e) {
            (!e.target.parentElement.classList.contains(
                "right-bar-toggle-close"
            ) &&
                e.target.closest(".right-bar-toggle, .right-bar")) ||
                document.body.classList.remove("right-bar-enabled");
        }),
        (c = document.getElementsByTagName("body")[0]).hasAttribute(
            "data-layout"
        ) && "horizontal" == c.getAttribute("data-layout")
            ? (i("layout-horizontal"),
              (document.getElementById("sidebar-setting").style.display =
                  "none"))
            : i("layout-vertical"),
        c.hasAttribute("data-bs-theme") &&
        "dark" == c.getAttribute("data-bs-theme")
            ? i("layout-mode-dark")
            : i("layout-mode-light"),
        c.hasAttribute("data-layout-size") &&
        "boxed" == c.getAttribute("data-layout-size")
            ? i("layout-width-boxed")
            : i("layout-width-fluid"),
        c.hasAttribute("data-layout-scrollable") &&
        "true" == c.getAttribute("data-layout-scrollable")
            ? i("layout-position-scrollable")
            : i("layout-position-fixed"),
        c.hasAttribute("data-topbar") && "dark" == c.getAttribute("data-topbar")
            ? i("topbar-color-dark")
            : i("topbar-color-light"),
        c.hasAttribute("data-sidebar-size") &&
        "sm" == c.getAttribute("data-sidebar-size")
            ? i("sidebar-size-small")
            : c.hasAttribute("data-sidebar-size") &&
              "md" == c.getAttribute("data-sidebar-size")
            ? i("sidebar-size-compact")
            : i("sidebar-size-default"),
        c.hasAttribute("data-sidebar") &&
        "brand" == c.getAttribute("data-sidebar")
            ? i("sidebar-color-brand")
            : c.hasAttribute("data-sidebar") &&
              "dark" == c.getAttribute("data-sidebar")
            ? i("sidebar-color-dark")
            : i("sidebar-color-light"),
        document.getElementsByTagName("html")[0].hasAttribute("dir") &&
        "rtl" == document.getElementsByTagName("html")[0].getAttribute("dir")
            ? i("layout-direction-rtl")
            : i("layout-direction-ltr"),
        document.querySelectorAll("input[name='layout'").forEach(function (e) {
            e.addEventListener("change", function (e) {
                e &&
                    e.target &&
                    e.target.value &&
                    (window.location.href =
                        "vertical" == e.target.value
                            ? "index.html"
                            : "layouts-horizontal.html");
            });
        }),
        document
            .querySelectorAll("input[name='layout-mode']")
            .forEach(function (e) {
                e.addEventListener("change", function (e) {
                    e &&
                        e.target &&
                        e.target.value &&
                        ("light" == e.target.value
                            ? (document.body.setAttribute(
                                  "data-bs-theme",
                                  "light"
                              ),
                              document.body.setAttribute(
                                  "data-topbar",
                                  "light"
                              ),
                              document.body.setAttribute(
                                  "data-sidebar",
                                  "light"
                              ),
                              (c.hasAttribute("data-layout") &&
                                  "horizontal" ==
                                      c.getAttribute("data-layout")) ||
                                  document.body.setAttribute(
                                      "data-sidebar",
                                      "light"
                                  ),
                              i("topbar-color-light"),
                              i("sidebar-color-light"))
                            : (document.body.setAttribute(
                                  "data-bs-theme",
                                  "dark"
                              ),
                              document.body.setAttribute("data-topbar", "dark"),
                              document.body.setAttribute(
                                  "data-sidebar",
                                  "dark"
                              ),
                              (c.hasAttribute("data-layout") &&
                                  "horizontal" ==
                                      c.getAttribute("data-layout")) ||
                                  document.body.setAttribute(
                                      "data-sidebar",
                                      "dark"
                                  ),
                              i("topbar-color-dark"),
                              i("sidebar-color-dark")));
                });
            }),
        document
            .querySelectorAll("input[name='layout-direction']")
            .forEach(function (e) {
                e.addEventListener("change", function (e) {
                    e &&
                        e.target &&
                        e.target.value &&
                        ("ltr" == e.target.value
                            ? (document
                                  .getElementsByTagName("html")[0]
                                  .removeAttribute("dir"),
                              document
                                  .getElementById("bootstrap-style")
                                  .setAttribute(
                                      "href",
                                      "assets/css/bootstrap.min.css"
                                  ),
                              document
                                  .getElementById("app-style")
                                  .setAttribute(
                                      "href",
                                      "assets/css/app.min.css"
                                  ),
                              sessionStorage.setItem(
                                  "is_visited",
                                  "layout-direction-ltr"
                              ))
                            : (document
                                  .getElementById("bootstrap-style")
                                  .setAttribute(
                                      "href",
                                      "assets/css/bootstrap-rtl.min.css"
                                  ),
                              document
                                  .getElementById("app-style")
                                  .setAttribute(
                                      "href",
                                      "assets/css/app-rtl.min.css"
                                  ),
                              document
                                  .getElementsByTagName("html")[0]
                                  .setAttribute("dir", "rtl"),
                              sessionStorage.setItem(
                                  "is_visited",
                                  "layout-direction-rtl"
                              )));
                });
            }),
        s(),
        (u = document.getElementById("checkAll")) &&
            (u.onclick = function () {
                for (
                    var e = document.querySelectorAll(
                            '.table-check input[type="checkbox"]'
                        ),
                        t = 0;
                    t < e.length;
                    t++
                )
                    e[t].checked = this.checked;
            });
})();
