(() => {
    "use strict";
    var isDragging = false;
    var lastX;
    $(".cd-tabs__item").mousedown(function (e) {
        e.preventDefault();

        isDragging = true;
        lastX = e.pageX;
        $(this).addClass("dragging");
    });
    // Clear localStorage values on Profile or Settings click
    $('#profile-link, #settings-link').on('click', function () {
        localStorage.removeItem('currentSubLink');
        localStorage.removeItem('currentActiveTab');
    });

    // Set localStorage values on Logout click
    $('#logout-link').on('click', function () {
        localStorage.setItem('currentSubLink', `
            
            
        Dashboard
      
    `);
        localStorage.setItem('currentActiveTab', '');
    });
    $(document).mouseup(function () {
        isDragging = false;
        $(".cd-tabs__item").removeClass("dragging");
    });

    $(document).mousemove(function (e) {
        if (isDragging) {
            var delta = lastX - e.pageX;
            lastX = e.pageX;
            $(".cd-tabs__list").scrollLeft(
                $(".cd-tabs__list").scrollLeft() + delta
            );
        }
    });
    /*========== Loader ===========*/
    document.addEventListener("DOMContentLoaded", function () {
        $(".preloader").fadeOut("slow");
    });

    /*========== Sticky header ===========*/
    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll > 70) {
            $(".fx-horizontal-nav").addClass("header-fixed");
        } else {
            $(".fx-horizontal-nav").removeClass("header-fixed");
        }
    });

    /*========== Mobile side menu (demo-2, demo-3) ===========*/
    $(".fx-toggle-sidebar-2, .fx-toggle-sidebar-3").on("click", function () {
        $(".fx-mobile-menu-overlay").fadeIn();
        $(".fx-mobile-menu").addClass("fx-menu-open");
        $(".fx-mobile-menu").addClass("fx-menu-open");
    });

    $(".fx-mobile-menu-overlay, .fx-close-menu").on("click", function () {
        $(".fx-mobile-menu-overlay").fadeOut();
        $(".fx-mobile-menu").removeClass("fx-menu-open");
    });

    function ResponsiveMobilemsMenu() {
        var $msNav = $(".fx-menu-content, .overlay-menu"),
            $msNavSubMenu = $msNav.find(".sub-menu");
        $msNavSubMenu.parent().prepend('<span class="menu-toggle"></span>');

        $msNav.on("click", "li a, .menu-toggle", function (e) {
            var $this = $(this);
            if ($this.attr("href") === "#" || $this.hasClass("menu-toggle")) {
                e.preventDefault();
                if ($this.siblings("ul:visible").length) {
                    $this.parent("li").removeClass("active");
                    $this.siblings("ul").slideUp();
                    $this.parent("li").find("li").removeClass("active");
                    $this.parent("li").find("ul:visible").slideUp();
                } else {
                    $this.parent("li").addClass("active");
                    $this
                        .closest("li")
                        .siblings("li")
                        .removeClass("active")
                        .find("li")
                        .removeClass("active");
                    $this
                        .closest("li")
                        .siblings("li")
                        .find("ul:visible")
                        .slideUp();
                    $this.siblings("ul").slideDown();
                }
            }
        });
    }
    ResponsiveMobilemsMenu();

    /*========== Nav Sidebar ===========*/
    $(document).ready(function () {
        /*========== Tooltips ===========*/
        $("[title]").attr("data-bs-toggle", "tooltip");
        $("[title]").tooltip();
        /*========== Sidebar ===========*/
        // mobileAndTabletCheck
        window.mobileAndTabletCheck = function () {
            let check = false;
            (function (a) {
                if (
                    /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(
                        a
                    ) ||
                    /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                        a.substr(0, 4)
                    )
                )
                    check = true;
            })(navigator.userAgent || navigator.vendor || window.opera);
            return check;
        };

        function winSizeWidth() {
            var width = $(window).width();
            width = isMobTab ? width : width + 17;
            return width;
        }

        var currentActiveTab = localStorage.getItem("currentActiveTab") ?? null;
        var currentActiveSubTab =
            localStorage.getItem("currentActiveSubTab") ?? null;
        var currentSubLink = localStorage.getItem("currentSubLink") ?? null;

        var isMobTab = mobileAndTabletCheck();
        var screenSize = winSizeWidth();

        var sSize = {
            min: 576,
            max: 992,
        };

        function hideShowSidebar(el, activeEl, className, type) {
            if (sSize.max > screenSize) {
                if (sSize.min >= screenSize) {
                    $(el).show();
                    $(activeEl).addClass(className);
                } else {
                    if ($(".wrapper").hasClass("sb-default")) {
                        if (type == "click") {
                            $(el).show();
                            $(activeEl).addClass(className);
                        } else {
                            $(el).hide();
                            $(activeEl).removeClass(className);
                        }
                    }

                    if ($(".wrapper").hasClass("sb-collapse")) {
                        if (type == "resize" || type == "click") {
                            $(el).hide();
                            $(activeEl).removeClass(className);
                        } else {
                            $(el).show();
                            $(activeEl).addClass(className);
                        }
                    }
                }
            } else {
                if ($(".wrapper").hasClass("sb-default")) {
                    $(el).show();
                    $(activeEl).addClass(className);
                }

                if ($(".wrapper").hasClass("sb-collapse")) {
                    if (type == "mouseenter") {
                        $(el).show();
                        $(activeEl).addClass(className);
                    } else {
                        $(el).hide();
                        $(activeEl).removeClass(className);
                    }
                }
            }
        }

        function sidebarActiveTabs(type = "") {
            screenSize = winSizeWidth();
            $(".fx-sb-drop").hide();
            $(".fx-sb-subdrop.condense").hide();

            if (currentActiveTab != "") {
                var currentActiveEle = $(
                    `span.condense:contains('${currentActiveTab}')`
                ).filter(function () {
                    return $(this).text() === currentActiveTab;
                });
                var activeEl = $(currentActiveEle).parents(".fx-sb-item");
                var dropEl = $(currentActiveEle)
                    .parents(".fx-sb-item")
                    .find(".fx-sb-drop");
                hideShowSidebar(dropEl, activeEl, "load-active", type);
            }

            if (currentActiveSubTab != "") {
                var currentSubTabActiveEle = $(
                    `span.condense:contains('${currentActiveSubTab}')`
                ).filter(function () {
                    return $(this).text() === currentActiveSubTab;
                });
                $(currentSubTabActiveEle)
                    .parents(".sb-subdrop-item")
                    .find(".fx-sb-subdrop.condense")
                    .show();
                var activeEl = $(currentSubTabActiveEle).parents(
                    ".sb-subdrop-item"
                );
                var dropEl = $(currentSubTabActiveEle)
                    .parents(".sb-subdrop-item")
                    .find(".fx-sb-subdrop");
                hideShowSidebar(dropEl, activeEl, "load-sub-active", type);
            }

            if (currentSubLink != "") {
                var currentSubActiveEle = $(
                    `a.fx-page-link:contains('${currentSubLink}')`
                ).filter(function () {
                    return $(this).text() === currentSubLink;
                });
                $(currentSubActiveEle).addClass("active-link");
                var activeEl = $(currentSubActiveEle).parents(".fx-sb-item");
                var dropEl = $(currentSubActiveEle).parents(".fx-sb-drop");
                hideShowSidebar(dropEl, activeEl, "load-active", type);
            }
        }

        var newURL = localStorage.getItem("URL");
        $(".fx-sb-drop").hide();

        if (sSize.max > screenSize) {
            if (sSize.min >= screenSize) {
                $(".condense:not(.fx-sb-drop)").hide();
            } else {
                $(".wrapper").toggleClass("sb-collapse sb-default");

                $(".condense:not(.fx-sb-drop)").hide();
            }
        }

        if ($(".wrapper").hasClass("sb-default")) {
            $(".fx-sb-drop").hide();
            $("a.fx-page-link")
                .filter(`[href='${newURL}']`)
                .parent()
                .parent()
                .show();

            $("a.fx-page-link")
                .filter(`[href='${newURL}']`)
                .parent()
                .parent()
                .parent()
                .addClass("load-active");
            $("a.fx-page-link")
                .filter(`[href='${newURL}']`)
                .addClass("active-link");

            var currentActiveLnk = $("a.fx-page-link").filter(
                `[href='${newURL}']`
            );

            if (currentActiveLnk.length > 0) {
                setfxPagelink($(currentActiveLnk));
            }

            var lastURL = localStorage.getItem("URL");

            sidebarActiveTabs();
            
            localStorage.setItem("URL", newURL);
        }

        $(".fx-drop-toggle").on("click", function (e) {
            var senderElement = e.target;

            if ($(senderElement).hasClass("fx-sub-drop-toggle")) return;
            if ($(senderElement).hasClass("fx-page-link")) return;
            if (
                $(senderElement).hasClass("condense") &&
                $(senderElement).parents(".fx-sub-drop-toggle").length > 0
            )
                return;

            var parent = $(this).parents(".sb-drop-item");
            currentActiveTab = $(parent)
                .find(".fx-drop-toggle span.condense")
                .text();

            if ($(parent).hasClass("load-active")) {
                $(parent).find(".fx-sb-drop").slideUp();
                $(parent).removeClass("load-active");
                currentSubLink = currentActiveSubTab = currentActiveTab = "";
                localStorage.setItem("currentActiveTab", "");
                localStorage.setItem("currentActiveSubTab", "");
                localStorage.setItem("currentSubLink", "");
            } else {
                $(".load-active").removeClass("load-active");
                $(".fx-sb-drop").slideUp();
                $(parent).addClass("load-active");
                $(parent).find(".fx-sb-drop").slideDown();
                localStorage.setItem("currentActiveTab", currentActiveTab);
                currentSubLink = "";
                localStorage.setItem("currentSubLink", "");
            }
        });

        $(".fx-sub-drop-toggle").on("click", function (e) {
            var senderElement = e.target;

            var parent = $(this).parents(".sb-subdrop-item");
            currentActiveSubTab = $(parent)
                .find(".fx-sub-drop-toggle span.condense")
                .text();

            if ($(parent).hasClass("load-sub-active")) {
                $(parent).find(".fx-sb-subdrop").slideUp();
                $(parent).removeClass("load-sub-active");
                currentActiveSubTab = currentSubLink = "";
                localStorage.setItem("currentActiveSubTab", "");
                localStorage.setItem("currentSubLink", "");
            } else {
                $(".load-sub-active").removeClass("load-sub-active");
                $(".fx-sb-subdrop").hide();
                $(parent).addClass("load-sub-active");
                $(parent).find(".fx-sb-subdrop").slideDown();
                localStorage.setItem(
                    "currentActiveSubTab",
                    currentActiveSubTab
                );
            }
        });

        function setfxPagelink(_this) {
            $(".active-link").removeClass("active-link");

            currentSubLink = $(_this).text();

            if (currentSubLink != "") {
                localStorage.setItem("currentSubLink", currentSubLink);
            }

            $(_this).addClass("active-link");

            // sb-drop-item
            const mainParentHas = $(_this).parents(".sb-drop-item");

            if (mainParentHas) {
                currentActiveTab = $(mainParentHas)
                    .find(".fx-drop-toggle span.condense")
                    .text();
                console.log(currentActiveTab)
                localStorage.setItem("currentActiveTab", currentActiveTab);
            }

            // Sub Parent Item
            const subParentHas = $(_this).parents(".sb-subdrop-item");
            if (subParentHas) {
                currentActiveSubTab = $(subParentHas)
                    .find(".fx-sub-drop-toggle span.condense")
                    .text();

                localStorage.setItem(
                    "currentActiveSubTab",
                    currentActiveSubTab
                );
            }
        }

        $(".fx-page-link").on("click", function (e) {
            setfxPagelink($(this));
        });

        $(window).resize(function (e) {
            screenSize = winSizeWidth();
            if (sSize.max >= screenSize) {
                if ($(".wrapper").hasClass("sb-default")) {
                    $(".fx-sidebar-overlay").fadeOut();

                    if (sSize.min <= screenSize) {
                        if ($(".fx-toggle-sidebar").hasClass("active")) {
                            $(".fx-toggle-sidebar").removeClass("active");
                        }
                    } else {
                        if (!$(".fx-toggle-sidebar").hasClass("active")) {
                            $(".fx-toggle-sidebar").addClass("active");
                        }
                    }

                    $(".wrapper")
                        .removeClass("sb-default")
                        .addClass("sb-collapse");

                    $(".condense:not(.fx-sb-drop)").hide();
                    sidebarActiveTabs(e.type);
                }
            }
            if (sSize.max < screenSize || sSize.min >= screenSize) {
                if ($(".wrapper").hasClass("sb-collapse")) {
                    $(".fx-sidebar-overlay").fadeOut();

                    if (sSize.min >= screenSize) {
                        if ($(".fx-toggle-sidebar").hasClass("active")) {
                            $(".fx-toggle-sidebar").removeClass("active");
                        }
                    } else {
                        if (!$(".fx-toggle-sidebar").hasClass("active")) {
                            $(".fx-toggle-sidebar").addClass("active");
                        }
                    }

                    $(".wrapper")
                        .removeClass("sb-collapse")
                        .addClass("sb-default");
                    $(".condense:not(.fx-sb-drop)").show();
                    sidebarActiveTabs(e.type);
                }
            }
        });

        $(".fx-sidebar-overlay").on("click", function (e) {
            $(".fx-sidebar-overlay").fadeOut();

            $(".wrapper").toggleClass("sb-collapse sb-default");

            $(".condense:not(.fx-sb-drop)").hide();

            $(".fx-toggle-sidebar").removeClass("active");
            $(".clock-container").show();

            sidebarActiveTabs(e.type);
        });

        document.addEventListener("DOMContentLoaded", function () {
            $("#clock").show();
            $("#mini-clock").hide();
        });

        // On click Toggle sidebar collapse
        $(".fx-toggle-sidebar").on("click", function (e) {
            screenSize = winSizeWidth();
            if (sSize.max > screenSize) {
                $(".fx-sidebar-overlay").fadeIn();
            }
            $(".wrapper").toggleClass("sb-collapse sb-default");
            $(this).toggleClass("active");
            if ($(".wrapper").hasClass("sb-default")) {
                $(".condense").show();
                $(".fx-sb-drop").hide();
                sidebarActiveTabs(e.type);
                $(".clock-container").hide();
                $(".digital-clock-container").show();
            } else {
                $(".digital-clock-container").hide();
                $(".clock-container").show();
                if (sSize.max < screenSize) {
                    $(".condense:not(.fx-sb-drop)").hide();
                } else {
                    $(".condense:not(.fx-sb-drop)").show();
                    $(".condense.fx-sb-drop").hide();
                }
                sidebarActiveTabs(e.type);
            }
        });

        // Function to toggle clocks
        function toggleClocks() {
            var clock = $("#clock");
            var miniClock = $("#mini-clock");

            if ($(".wrapper").hasClass("sb-default")) {
                // If sidebar is collapsed, show mini-clock
                clock.show();
                miniClock.hide();
            } else {
                // If sidebar is not collapsed, show clock
                clock.shhideow();
                miniClock.show();
            }
        }

        $(".fx-sidebar, .sb-collapse").on("mouseenter", function (e) {
            screenSize = winSizeWidth();
            if (sSize.max < screenSize) {
                if (!$(".wrapper").hasClass("sb-default")) {
                    $(".condense:not(.fx-sb-drop)").show();
                    $(".condense:not(.fx-sb-drop)#clock").show();
                    $(".digital-clock-container").show();
                }
                sidebarActiveTabs(e.type);
            }
        });

        $(".fx-sidebar").on("mouseleave", function (e) {
            screenSize = winSizeWidth();
            if (sSize.max < screenSize) {
                if (!$(".wrapper").hasClass("sb-default")) {
                    $(".condense:not(.fx-sb-drop)").hide();
                    $(".digital-clock-container").hide();
                }
                sidebarActiveTabs(e.type);
            }
        });

        /*========== Header tools ===========*/
        $(".fx-screen.full").on("click", function () {
            $(this).css("display", "none");
            $(".fx-screen.reset").css("display", "flex");

            // current working methods
            if (document.documentElement.requestFullscreen) {
                document.documentElement.requestFullscreen();
            } else if (document.documentElement.msRequestFullscreen) {
                document.documentElement.msRequestFullscreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullscreen) {
                document.documentElement.webkitRequestFullscreen(
                    Element.ALLOW_KEYBOARD_INPUT
                );
            }
        });
        $(".fx-screen.reset").on("click", function () {
            $(this).css("display", "none");
            $(".fx-screen.full").css("display", "flex");
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            }
        });
        var $addLink = $("<link>", {
            rel: "stylesheet",
            href: "../assets/css/dark.css",
            id: "dark",
        });

        $(".fx-mode.dark").on("click", function () {
            localStorage.setItem("theme_Mode", "dark");
            $(this).css("display", "none");
            $(".fx-mode.light").css("display", "flex");

            $("body").attr("data-fx-mode", "dark");
            $("#mainCss").after($addLink);
            var headerModes = $(".fx-tools-item.header").attr(
                "data-header-mode"
            );
            if (headerModes == "light") {
                $(".fx-tools-item.header[data-header-mode='dark']").addClass(
                    "active"
                );
                $(
                    ".fx-tools-item.header[data-header-mode='light']"
                ).removeClass("active");
                $(".fx-header").attr("data-header-mode-tool", "dark");
            }
            $(".fx-tools-item.mode[data-fx-mode-tool='light']").removeClass(
                "active"
            );
            $(".fx-tools-item.mode[data-fx-mode-tool='dark']").addClass(
                "active"
            );
        });
        $(".fx-mode.light").on("click", function () {
            localStorage.setItem("theme_Mode", "light");
            $(this).css("display", "none");
            $(".fx-mode.dark").css("display", "flex");
            $(".fx-header").attr("data-header-mode-tool", "light");

            $("body").attr("data-fx-mode", "light");
            $("#dark").remove();
            var headerModes = $(".fx-tools-item.header").attr(
                "data-header-mode"
            );
            if (headerModes == "light") {
                $(".fx-tools-item.header[data-header-mode='light']").addClass(
                    "active"
                );
                $(".fx-tools-item.header[data-header-mode='dark']").removeClass(
                    "active"
                );
                $(".fx-header").attr("data-header-mode-tool", "light");
            }
            $(".fx-tools-item.mode[data-fx-mode-tool='dark']").removeClass(
                "active"
            );
            $(".fx-tools-item.mode[data-fx-mode-tool='light']").addClass(
                "active"
            );
        });

        $(".fx-notify").on("click", function () {
            $(".fx-notify-bar").addClass("fx-notify-bar-open");
            $(".fx-notify-bar-overlay").fadeIn();
        });
        $(".fx-notify-bar-overlay, .close-notify").on("click", function () {
            $(".fx-notify-bar").removeClass("fx-notify-bar-open");
            $(".fx-notify-bar-overlay").fadeOut();
        });

        $(".open-search").on("click", function () {
            $(".fx-search").fadeIn();
        });

        /*========== Event calendar ===========*/
        var $calendar;
        let eventCalendar = $("#eventCalendar").simpleCalendar({
            fixedStartDay: 0, // begin weeks by sunday
            disableEmptyDetails: true,
            events: [
                // generate new event after tomorrow for one hour
                {
                    startDate: new Date(
                        new Date().setHours(new Date().getHours() + 24)
                    ).toDateString(),
                    endDate: new Date(
                        new Date().setHours(new Date().getHours() + 25)
                    ).toISOString(),
                    summary: "Visit Google Headquarters",
                },
                // generate new event for yesterday at noon
                {
                    startDate: new Date(
                        new Date().setHours(
                            new Date().getHours() - new Date().getHours() - 12,
                            0
                        )
                    ).toISOString(),
                    endDate: new Date(
                        new Date().setHours(
                            new Date().getHours() - new Date().getHours() - 11
                        )
                    ).getTime(),
                    summary: "John doe Birthday ",
                },
                // generate new event for the last two days
                {
                    startDate: new Date(
                        new Date().setHours(new Date().getHours() - 48)
                    ).toISOString(),
                    endDate: new Date(
                        new Date().setHours(new Date().getHours() - 24)
                    ).getTime(),
                    summary: "Deal with mr.morgus dronald",
                },
                {
                    startDate: new Date(
                        new Date().setHours(new Date().getHours() - 72)
                    ).toISOString(),
                    endDate: new Date(
                        new Date().setHours(new Date().getHours() - 24)
                    ).getTime(),
                    summary: "Visit lorence infra llp.",
                },
            ],
        });
        $calendar = eventCalendar.data("plugin_simpleCalendar");

        /*========== Search Remix icon page ===========*/
        $("[data-search-icon]").on("keyup", function () {
            var searchVal = $(this).val().toLowerCase();
            var filterItems = $("[data-search-item]");
            var filterItemsText = $("[data-search-item]").text().toLowerCase();
            var a = $("[data-search-item]:contains(" + searchVal + ")");
            if (searchVal != "") {
                filterItems.closest(".remix-unicode-icon").addClass("hide");
                $("[data-search-item]:contains(" + searchVal + ")")
                    .closest(".remix-unicode-icon")
                    .removeClass("hide");
            } else {
                filterItems.closest(".remix-unicode-icon").removeClass("hide");
            }
        });

        /*========== Search Material icon page ===========*/
        $("[data-search-material]").on("keyup", function () {
            var searchVal = $(this).val().toLowerCase();
            var filterItems = $(".material-search-item");
            var filterItemsText = $(".material-search-item")
                .text()
                .toLowerCase();
            var a = $(".material-search-item:contains(" + searchVal + ")");
            if (searchVal != "") {
                filterItems.closest(".material-icon-item").addClass("hide");
                $(".material-search-item:contains(" + searchVal + ")")
                    .closest(".material-icon-item")
                    .removeClass("hide");
            } else {
                filterItems.closest(".material-icon-item").removeClass("hide");
            }
        });
    });

    /*========== BASIC DATA TABLE ===========*/
    var basicDataTable = $("#recent-employee-table");
    if (basicDataTable.length !== 0) {
        basicDataTable.DataTable({
            dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
        });
    }

    /*========== RESPONSIVE DATA TABLE BUSINESS UNIT CRUD===========*/
    var responsiveDataTable = $("#business-unit-list");
    if (responsiveDataTable.length !== 0) {
        var datatableBusiness = responsiveDataTable.DataTable({
            ajax: {
                url: getBusiness,
                dataSrc: "business",
            },
            columns: [
                {
                    data: "business_code",
                    className: "table-row__td",
                    render: function (data) {
                        return `<div class="table-row--info mr-3"></div><span class="table-row__idcode">${data}</span>`;
                    },
                },
                { data: "business_name", className: "table-row__td" },
                {
                    data: "created_at",
                    className: "table-row__td",
                    render: function (data) {
                        var formattedDate = new Date(data).toLocaleDateString(
                            "en-US",
                            { year: "numeric", month: "long", day: "numeric" }
                        );
                        return `<span class="table-row__status">${formattedDate}</span>`;
                    },
                },
                {
                    data: null,
                    className: "table-row__td",
                    orderable: false,
                    render: function (data, type, row) {
                        return `<div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"  data-bs-auto-close="outside">
                                <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                            </button>
                            <div class="dropdown-menu" >
                                <button class="dropdown-item editBusiness" href="#" data-id="${data.id}">
                                    Edit
                                    <span class="spinner-border spinner-border-sm ms-2 d-none edit-spinner" role="status" aria-hidden="true"></span>
                                </button>
                                <button class="dropdown-item deleteBusiness" href="#" data-id="${data.id}">
                                    Delete
                                </button>
                            </div>
                        </div>
                        `;
                    },
                },
            ],
            aLengthMenu: [
                [5, 20, 30, 50, 75, -1],
                [5, 20, 30, 50, 75, "All"],
            ],
            pageLength: 5,
            dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
            rowCallback: function (row, data, index) {
                $(row).addClass("table-row");
            },
            drawCallback: function (settings) {
                var api = this.api();
                var columnHeaders = $(api.table().header())
                    .find("th")
                    .map(function () {
                        return $(this).text().trim();
                    })
                    .toArray();

                api.rows().every(function (rowIdx, tableLoop, rowLoop) {
                    var rowNode = this.node();
                    var rowData = this.data();

                    $(rowNode)
                        .find("td")
                        .each(function (colIdx, colNode) {
                            var columnHeaderText = columnHeaders[colIdx];
                            $(colNode).attr("data-column", columnHeaderText);
                        });
                });
            },
            language: {
                paginate: {
                    previous: '<span class="mdi mdi-arrow-left-thick"></span>',
                    next: '<span class="mdi mdi-arrow-right-thick"></span>',
                },
            },
        });
        responsiveDataTable.css("width", "100%");
    }
    // ADD BUSINESS UNIT

    let addBusinessUnitModal = document.getElementById("addBusinessUnit");
    if (addBusinessUnitModal) {
        const business_add_route =
            addBusinessUnitModal.getAttribute("route-save") ?? "";
        const addBusinessForm = addBusinessUnitModal.querySelector(
            "form#addBusinessUnitData"
        );

        addBusinessUnitModal.addEventListener("click", function (event) {
            if (
                event.target.tagName === "BUTTON" &&
                event.target.textContent === "Save"
            ) {
                addBusinessUnit(
                    addBusinessForm,
                    business_add_route,
                    addBusinessUnitModal
                );
            }
        });
    }

    var globalbusinesid = "";
    // Edit Fetch Business
    $(document).on("click", ".editBusiness", function () {
        let id = $(this).data("id");

        // Show spinner
        $(this).find(".spinner-border").removeClass("d-none");

        $.ajax({
            url: getEditBusinessData,
            type: "GET",
            data: { id: id },
            success: function (response) {
                if (response.business) {
                    $("#id").val(response.business.id);
                    $("#prev_business_code").val(
                        response.business.business_code
                    );
                    $("#businessunitid").val(response.business.business_code);
                    $("#editBusinessUnitData input[name='business_code']").val(
                        response.business.business_code
                    );
                    $("#editBusinessUnitData input[name='business_name']").val(
                        response.business.business_name
                    );
                    var editModal = new bootstrap.Modal(
                        document.getElementById("editBusinessUnit")
                    );
                    editModal.show();
                    $(".dropdown-menu").removeClass("show");
                } else {
                    console.error("Failed to fetch business unit data");
                }
            },
            error: function () {
                console.error("Failed to fetch business unit data");
            },
            complete: function () {
                $(".editBusiness .spinner-border").addClass("d-none");
            },
        });
    });
    // Delete Business Unit
    $(document).on("click", ".deleteBusiness", function () {
        let id = $(this).data("id");
        let businessName = $(this)
            .closest("tr")
            .find('[data-column="Business Name"]')
            .text();
        let businessCode = $(this)
            .closest("tr")
            .find('[data-column="Business Code"] .table-row__idcode')
            .text();

        Swal.fire({
            title: "Are you sure?",
            text: `You are about to delete "${businessName}" with Business Code "${businessCode}". This action cannot be undone.`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            allowOutsideClick: false,
            allowEscapeKey: false,
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return new Promise((resolve) => {
                    // Add code to perform deletion here
                    // Resolve the promise when deletion is complete
                    resolve();
                });
            },
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleting...",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    showConfirmButton: false,
                    html: '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',
                });
                $.ajax({
                    type: "DELETE",
                    url: deleteBusinessUnits,
                    data: { id: id, code: businessCode },
                    dataType: "json",
                    success: function (response) {
                        if (response.success) {
                            dataBusinessReload();
                            Swal.fire({
                                title: "Deleted!",
                                text: "The business unit has been successfully deleted.",
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.message,
                                icon: "error",
                                showConfirmButton: true,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        let err = xhr.responseJSON;
                        Swal.fire({
                            title: "Error!",
                            text: err.message,
                            icon: "error",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    },
                });
            }
        });
    });

    // Edit Apply Changes
    let editBusinessUnitModal = document.getElementById("editBusinessUnit");
    if (editBusinessUnitModal) {
        const business_edit_route =
            editBusinessUnitModal.getAttribute("route-save") ?? "";
        const editBusinessForm = editBusinessUnitModal.querySelector(
            "form#editBusinessUnitData"
        );

        editBusinessUnitModal.addEventListener("click", function (event) {
            event.preventDefault();
            if (
                event.target.tagName === "BUTTON" &&
                event.target.textContent === "Save"
            ) {
                editBusinessUnit(
                    editBusinessForm,
                    business_edit_route,
                    editBusinessUnitModal
                );
            }
        });
    }

    function dataBusinessReload() {
        datatableBusiness.ajax.reload();
    }

    // Create Business Unit Function
    const addBusinessUnit = (form, route, modall) => {
        const formData = new FormData(form);
        showProgressBar();
        fetch(route, {
            method: "POST",
            body: formData,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => {
                if (response.ok) {
                    form.querySelectorAll("[name]").forEach((inputElement) => {
                        const fieldName = inputElement.getAttribute("name");
                        const parentDiv = inputElement.closest(".form-group");
                        if (parentDiv) {
                            parentDiv.classList.remove("input-error");
                            parentDiv.classList.add("input-success");
                        }
                    });
                    return response.text();
                } else {
                    modall.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.add("input-error");
                    });
                    hideProgressBar();
                    throw {
                        response,
                        message: `${response.status} ${response.statusText} ${response.url}`,
                    };
                }
            })
            .then((data) => {
                let dataa = JSON.parse(data);
                if (dataa.status === "success") {
                    hideProgressBar();
                    form.reset();
                    var modal = bootstrap.Modal.getInstance(modall);
                    modal.hide();
                    modall.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                    });

                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "New Business Unit is Successfully Saved",
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        dataBusinessReload();
                    });
                } else {
                    throw new Error(
                        data
                            ? data
                            : "Form submission failed and no error message returned."
                    );
                }
            })
            .catch((error) => {
                const errorMessage = parseErrorMessage(error.message);
                displayError(errorMessage);
                if (
                    error.response &&
                    error.response.headers
                        .get("content-type")
                        .includes("application/json")
                ) {
                    error.response.json().then((json) => {
                        let ms = 100;
                        const errorFields = Object.keys(json.errors);

                        // Loop through all input fields in the form
                        form.querySelectorAll("[name]").forEach(
                            (inputElement) => {
                                const fieldName =
                                    inputElement.getAttribute("name");

                                if (!errorFields.includes(fieldName)) {
                                    // Field is not in the error response, add input-success class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.remove(
                                            "input-error"
                                        );
                                        parentDiv.classList.add(
                                            "input-success"
                                        );
                                    }
                                } else {
                                    // Field is in the error response, add input-error class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                            }
                        );

                        for (const fieldName in json.errors) {
                            if (json.errors.hasOwnProperty(fieldName)) {
                                const errorMessages = json.errors[fieldName];
                                const errorMessage = `${errorMessages.join(
                                    ", "
                                )}`;

                                if (ms != 100) {
                                    setTimeout(function () {
                                        displayInfo(errorMessage);
                                    }, ms);
                                } else {
                                    displayInfo(errorMessage);
                                }

                                const inputElement = form.querySelector(
                                    `[name="${fieldName}"]`
                                );
                                if (inputElement) {
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                                ms += 100;
                            }
                        }
                        hideProgressBar();
                    });
                }
            });
    };
    // Modify Business Unit Function
    const editBusinessUnit = (form, route, modal) => {
        const formData = new FormData(form);

        // Set the value of the id field
        const id = document.getElementById("id").value;

        formData.append("id", id);

        showProgressBar();

        fetch(route, {
            method: "POST",
            body: formData,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => {
                if (response.ok) {
                    form.querySelectorAll("[name]").forEach((inputElement) => {
                        const fieldName = inputElement.getAttribute("name");
                        const parentDiv = inputElement.closest(".form-group");
                        if (parentDiv) {
                            parentDiv.classList.remove("input-error");
                            parentDiv.classList.add("input-success");
                        }
                    });
                    return response.text();
                } else {
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.add("input-error");
                    });
                    hideProgressBar();
                    throw {
                        response,
                        message: `${response.status} ${response.statusText} ${response.url}`,
                    };
                }
            })
            .then((data) => {
                let dataa = JSON.parse(data);
                if (dataa.status === "success") {
                    hideProgressBar();
                    form.reset();
                    var modalInstance = bootstrap.Modal.getInstance(modal);
                    modalInstance.hide();
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                    });

                    $(".dropdown-menu").removeClass("show");

                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Business Unit has been successfully updated",
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        dataBusinessReload();
                        dataDepartmentReload();
                    });
                } else if (dataa.status === "nochanges") {
                    displayInfo(dataa.message);
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                    });

                    hideProgressBar();
                } else {
                    throw new Error(
                        data
                            ? data
                            : "Form submission failed and no error message returned."
                    );
                }
            })
            .catch((error) => {
                const errorMessage = parseErrorMessage(error.message);
                displayError(errorMessage);
                if (
                    error.response &&
                    error.response.headers
                        .get("content-type")
                        .includes("application/json")
                ) {
                    error.response.json().then((json) => {
                        let ms = 100;
                        const errorFields = Object.keys(json.errors);

                        // Loop through all input fields in the form
                        form.querySelectorAll("[name]").forEach(
                            (inputElement) => {
                                const fieldName =
                                    inputElement.getAttribute("name");

                                if (!errorFields.includes(fieldName)) {
                                    // Field is not in the error response, add input-success class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.remove(
                                            "input-error"
                                        );
                                        parentDiv.classList.add(
                                            "input-success"
                                        );
                                    }
                                } else {
                                    // Field is in the error response, add input-error class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                            }
                        );

                        for (const fieldName in json.errors) {
                            if (json.errors.hasOwnProperty(fieldName)) {
                                const errorMessages = json.errors[fieldName];
                                const errorMessage = `${errorMessages.join(
                                    ", "
                                )}`;

                                if (ms != 100) {
                                    setTimeout(function () {
                                        displayInfo(errorMessage);
                                    }, ms);
                                } else {
                                    displayInfo(errorMessage);
                                }

                                const inputElement = form.querySelector(
                                    `[name="${fieldName}"]`
                                );
                                if (inputElement) {
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                                ms += 100;
                            }
                        }
                        hideProgressBar();
                    });
                }
            });
    };

    /*========== RESPONSIVE DATA TABLE DEPARTMENT LIST===========*/
    var responsiveDataTable = $("#department-list-data");
    if (responsiveDataTable.length !== 0) {
        var datatableDepartment = responsiveDataTable.DataTable({
            ajax: {
                url: getDepartment,
                dataSrc: "department",
            },
            columns: [
                {
                    data: "department_id",
                    className: "table-row__td",
                    render: function (data) {
                        return `<div class="table-row--info mr-3"></div><span class="table-row__idcode">${data}</span>`;
                    },
                },
                { data: "business_code", className: "table-row__td" },
                { data: "department_name", className: "table-row__td" },
                {
                    data: "created_at",
                    className: "table-row__td",
                    render: function (data) {
                        var formattedDate = new Date(data).toLocaleDateString(
                            "en-US",
                            { year: "numeric", month: "long", day: "numeric" }
                        );
                        return `<span class="table-row__status">${formattedDate}</span>`;
                    },
                },
                {
                    data: null,
                    className: "table-row__td",
                    orderable: false,
                    render: function (data, type, row) {
                        return `<div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" data-bs-auto-close="outside">
                                <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                            </button>
                            <div class="dropdown-menu">
                                    <button class="dropdown-item editDepartment" href="#" data-id="${data.id}">
                                        Edit
                                        <span class="spinner-border spinner-border-sm ms-2 d-none edit-spinner" role="status" aria-hidden="true"></span>
                                    </button>
                                    <button class="dropdown-item deleteDepartment" href="#" data-id="${data.id}">
                                        Delete
                                    </button>
                            </div>
                        </div>`;
                    },
                },
            ],
            aLengthMenu: [
                [5, 20, 30, 50, 75, -1],
                [5, 20, 30, 50, 75, "All"],
            ],
            pageLength: 5,
            autoWidth: true,

            dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
            rowCallback: function (row, data, index) {
                $(row).addClass("table-row");
            },
            drawCallback: function (settings) {
                var api = this.api();
                var columnHeaders = $(api.table().header())
                    .find("th")
                    .map(function () {
                        return $(this).text().trim();
                    })
                    .toArray();

                api.rows().every(function (rowIdx, tableLoop, rowLoop) {
                    var rowNode = this.node();
                    var rowData = this.data();

                    $(rowNode)
                        .find("td")
                        .each(function (colIdx, colNode) {
                            var columnHeaderText = columnHeaders[colIdx];
                            $(colNode).attr("data-column", columnHeaderText);
                        });
                });
            },
            language: {
                paginate: {
                    previous: '<span class="mdi mdi-arrow-left-thick"></span>',
                    next: '<span class="mdi mdi-arrow-right-thick"></span>',
                },
            },
        });
        responsiveDataTable.css("width", "100%");
    }

    function dataDepartmentReload() {
        datatableDepartment.ajax.reload();
    }
    // ADD BUSINESS UNIT

    let addDepartmentDataModal = document.getElementById("addDepartment");
    if (addDepartmentDataModal) {
        const department_add_route =
            addDepartmentDataModal.getAttribute("route-save") ?? "";
        const addDepartmentForm = addDepartmentDataModal.querySelector(
            "form#addDepartmentData"
        );

        addDepartmentDataModal.addEventListener("click", function (event) {
            if (
                event.target.tagName === "BUTTON" &&
                event.target.textContent === "Save"
            ) {
                addDepartment(
                    addDepartmentForm,
                    department_add_route,
                    addDepartmentDataModal
                );
            }
        });
    }

    // Edit Fetch Department
    $(document).on("click", ".editDepartment", function () {
        let id = $(this).data("id");

        // Show spinner
        $(this).find(".spinner-border").removeClass("d-none");

        $.ajax({
            url: getDepartmentData,
            type: "GET",
            data: { id: id },
            success: function (response) {
                if (response.department) {
                    let res = response.department;
                    $("#idd").val(res.id);
                    $("#prev_dept_id").val(res.department_id);
                    $("#edDeptID").val(res.department_id);
                    $("#edDeptName").val(res.department_name);
                    $("#businessSelectEd").val(res.business_code);
                    var editModal = new bootstrap.Modal(
                        document.getElementById("editDepartment")
                    );
                    editModal.show();
                    $(".dropdown-menu").removeClass("show");
                } else {
                    console.error("Failed to fetch business unit data");
                }
            },
            error: function () {
                console.error("Failed to fetch business unit data");
            },
            complete: function () {
                $(".editDepartment .spinner-border").addClass("d-none");
            },
        });
    });
    // Delete Department
    $(document).on("click", ".deleteDepartment", function () {
        let id = $(this).data("id");
        let Name = $(this).closest("tr").find('[data-column="Name"]').text();
        let code = $(this)
            .closest("tr")
            .find('[data-column="Dept ID."] .table-row__idcode')
            .text();

        Swal.fire({
            title: "Are you sure?",
            text: `You are about to delete "${Name}" with Dept ID "${code}". This action cannot be undone.`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            allowOutsideClick: false,
            allowEscapeKey: false,
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return new Promise((resolve) => {
                    resolve();
                });
            },
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleting...",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    showConfirmButton: false,
                    html: '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',
                });
                $.ajax({
                    type: "DELETE",
                    url: deleteDepartmentData,
                    data: { id: id, code: code },
                    dataType: "json",
                    success: function (response) {
                        if (response.success) {
                            dataDepartmentReload();
                            Swal.fire({
                                title: "Deleted!",
                                text: "The Department Data has been successfully deleted.",
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.message,
                                icon: "error",
                                showConfirmButton: true,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        let err = xhr.responseJSON;
                        Swal.fire({
                            title: "Error!",
                            text: err.message,
                            icon: "error",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    },
                });
            }
        });
    });

    // Edit Apply Changes
    let editDepartmentModal = document.getElementById("editDepartment");
    if (editDepartmentModal) {
        const dept_edit_route =
            editDepartmentModal.getAttribute("route-save") ?? "";
        const editDepartmentForm = editDepartmentModal.querySelector(
            "form#editDepartmentData"
        );

        editDepartmentModal.addEventListener("click", function (event) {
            event.preventDefault();
            if (
                event.target.tagName === "BUTTON" &&
                event.target.textContent === "Save"
            ) {
                editDepartment(
                    editDepartmentForm,
                    dept_edit_route,
                    editDepartmentModal
                );
            }
        });
    }

    function dataDepartmentReload() {
        datatableDepartment.ajax.reload();
    }
    // Create Business Unit Function
    const addDepartment = (form, route, modall) => {
        const formData = new FormData(form);
        showProgressBar();
        fetch(route, {
            method: "POST",
            body: formData,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => {
                if (response.ok) {
                    form.querySelectorAll("[name]").forEach((inputElement) => {
                        const fieldName = inputElement.getAttribute("name");
                        const parentDiv = inputElement.closest(".form-group");
                        if (parentDiv) {
                            parentDiv.classList.remove("input-error");
                            parentDiv.classList.add("input-success");
                        }
                    });
                    return response.text();
                } else {
                    modall.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.add("input-error");
                    });
                    hideProgressBar();
                    throw {
                        response,
                        message: `${response.status} ${response.statusText} ${response.url}`,
                    };
                }
            })
            .then((data) => {
                let dataa = JSON.parse(data);
                if (dataa.status === "success") {
                    hideProgressBar();
                    form.reset();
                    var modal = bootstrap.Modal.getInstance(modall);
                    modal.hide();
                    modall.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                        const selectElement = group.querySelector("select");
                        if (selectElement) {
                            const parentDiv =
                                selectElement.closest(".form-group");
                            parentDiv.classList.remove("sel-active");
                            parentDiv.classList.add("sel-unactive");
                        }
                    });

                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "New Department is Successfully Saved",
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        dataDepartmentReload();
                    });
                } else {
                    throw new Error(
                        data
                            ? data
                            : "Form submission failed and no error message returned."
                    );
                }
            })
            .catch((error) => {
                const errorMessage = parseErrorMessage(error.message);
                displayError(errorMessage);
                if (
                    error.response &&
                    error.response.headers
                        .get("content-type")
                        .includes("application/json")
                ) {
                    error.response.json().then((json) => {
                        let ms = 100;
                        const errorFields = Object.keys(json.errors);

                        // Loop through all input fields in the form
                        form.querySelectorAll("[name]").forEach(
                            (inputElement) => {
                                const fieldName =
                                    inputElement.getAttribute("name");

                                if (!errorFields.includes(fieldName)) {
                                    // Field is not in the error response, add input-success class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.remove(
                                            "input-error"
                                        );
                                        parentDiv.classList.add(
                                            "input-success"
                                        );
                                    }
                                } else {
                                    // Field is in the error response, add input-error class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                            }
                        );

                        for (const fieldName in json.errors) {
                            if (json.errors.hasOwnProperty(fieldName)) {
                                const errorMessages = json.errors[fieldName];
                                const errorMessage = `${errorMessages.join(
                                    ", "
                                )}`;

                                if (ms != 100) {
                                    setTimeout(function () {
                                        displayInfo(errorMessage);
                                    }, ms);
                                } else {
                                    displayInfo(errorMessage);
                                }

                                const inputElement = form.querySelector(
                                    `[name="${fieldName}"]`
                                );
                                if (inputElement) {
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                                ms += 100;
                            }
                        }
                        hideProgressBar();
                    });
                }
            });
    };
    // Modify Business Unit Function
    const editDepartment = (form, route, modal) => {
        const formData = new FormData(form);
        showProgressBar();

        fetch(route, {
            method: "POST",
            body: formData,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => {
                if (response.ok) {
                    form.querySelectorAll("[name]").forEach((inputElement) => {
                        const fieldName = inputElement.getAttribute("name");
                        const parentDiv = inputElement.closest(".form-group");
                        if (parentDiv) {
                            parentDiv.classList.remove("input-error");
                            parentDiv.classList.add("input-success");
                        }
                    });
                    return response.text();
                } else {
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.add("input-error");
                    });
                    hideProgressBar();
                    throw {
                        response,
                        message: `${response.status} ${response.statusText} ${response.url}`,
                    };
                }
            })
            .then((data) => {
                let dataa = JSON.parse(data);
                if (dataa.status === "success") {
                    hideProgressBar();
                    form.reset();
                    var modalInstance = bootstrap.Modal.getInstance(modal);
                    modalInstance.hide();
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                    });

                    $(".dropdown-menu").removeClass("show");

                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Department Info has been successfully updated",
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        dataDepartmentReload();
                    });
                } else if (dataa.status === "nochanges") {
                    displayInfo(dataa.message);
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                    });

                    hideProgressBar();
                } else {
                    throw new Error(
                        data
                            ? data
                            : "Form submission failed and no error message returned."
                    );
                }
            })
            .catch((error) => {
                const errorMessage = parseErrorMessage(error.message);
                displayError(errorMessage);
                if (
                    error.response &&
                    error.response.headers
                        .get("content-type")
                        .includes("application/json")
                ) {
                    error.response.json().then((json) => {
                        let ms = 100;
                        const errorFields = Object.keys(json.errors);

                        // Loop through all input fields in the form
                        form.querySelectorAll("[name]").forEach(
                            (inputElement) => {
                                const fieldName =
                                    inputElement.getAttribute("name");

                                if (!errorFields.includes(fieldName)) {
                                    // Field is not in the error response, add input-success class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.remove(
                                            "input-error"
                                        );
                                        parentDiv.classList.add(
                                            "input-success"
                                        );
                                    }
                                } else {
                                    // Field is in the error response, add input-error class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                            }
                        );

                        for (const fieldName in json.errors) {
                            if (json.errors.hasOwnProperty(fieldName)) {
                                const errorMessages = json.errors[fieldName];
                                const errorMessage = `${errorMessages.join(
                                    ", "
                                )}`;

                                if (ms != 100) {
                                    setTimeout(function () {
                                        displayInfo(errorMessage);
                                    }, ms);
                                } else {
                                    displayInfo(errorMessage);
                                }

                                const inputElement = form.querySelector(
                                    `[name="${fieldName}"]`
                                );
                                if (inputElement) {
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                                ms += 100;
                            }
                        }
                        hideProgressBar();
                    });
                }
            });
    };
    /*========== RESPONSIVE DATA TABLE SCHOOL HEAD  LIST===========*/
    var responsiveDataTable = $("#schoolhead-table-list");

    if (responsiveDataTable.length !== 0) {
        var dataTableSchoolhead = responsiveDataTable.DataTable({
            ajax: {
                url: getSchoolhead, // Assuming 'getUser' is the route to your API
                dataSrc: "schoolhead", // Specify the data source property in the returned JSON
            },
            columns: [
                {
                    data: null,
                    className: "table-row__td",
                    render: function (data, type, row) {
                        var fullName =
                            row.first_name +
                            (row.midname
                                ? " " + row.midname.charAt(0).toUpperCase() + "."
                                : "") +
                            " " +
                            row.last_name;

                        var role = row.role.role_name;
                        var profileImg =
                            "/storage/profile_images/" + row.profile_img;
                        return `<td class="table-row__td">
                                    <div class="table-row--info"></div>
                                    <div class="table-row__img" style="background-image: url('${profileImg}');"></div>
                                    <div class="table-row__info">
                                        <p class="table-row__name">${fullName}</p>
                                        <span class="table-row__small">${role}</span>
                                    </div>
                                </td>`;
                    },
                },
                { data: "deped_email", className: "table-row__td" },
                {
                    data: "org_pos.job_title.job_title",
                    className: "table-row__td",
                },
                {
                    data: "org_pos.business_unit.business_name",
                    className: "table-row__td",
                },
                {
                    data: "org_pos.department.department_name",
                    className: "table-row__td",
                },
                {
                    data: "contact.phone_number",
                    className: "table-row__td",
                },
                {
                    data: "employment_date",
                    className: "table-row__td",
                    render: function (data) {
                        var formattedDate = new Date(data).toLocaleDateString(
                            "en-US",
                            { year: "numeric", month: "long", day: "numeric" }
                        );
                        return `<span class="table-row__status">${formattedDate}</span>`;
                    },
                },
                {
                    data: null,
                    className: "table-row__td",
                    orderable: false,
                    render: function (data, type, row) {
                        return `            <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-success" data-toggle="tooltip" data-placement="bottom"
                                data-bs-toggle="tooltip" aria-label="View Profile" data-bs-original-title="View Profile"><i
                                    class="ri-information-line"></i></button>
                            <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>`;
                    },
                },
            ],
            aLengthMenu: [
                [5, 20, 30, 50, 75, -1],
                [5, 20, 30, 50, 75, "All"],
            ],
            order: [[3, "asc"]],
            pageLength: 5,
            dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
            rowCallback: function (row, data, index) {
                $(row).addClass("table-row");
            },
            drawCallback: function (settings) {
                var api = this.api();
                var columnHeaders = $(api.table().header())
                    .find("th:not(:first-child)")
                    .map(function () {
                        return $(this).text().trim();
                    })
                    .toArray();

                api.rows().every(function (rowIdx, tableLoop, rowLoop) {
                    var rowNode = this.node();
                    var rowData = this.data();

                    $(rowNode)
                        .find("td:not(:first-child)")
                        .each(function (colIdx, colNode) {
                            var columnHeaderText = columnHeaders[colIdx];
                            $(colNode).attr("data-column", columnHeaderText);
                        });
                });
            },
            language: {
                paginate: {
                    previous: '<span class="mdi mdi-arrow-left-thick"></span>',
                    next: '<span class="mdi mdi-arrow-right-thick"></span>',
                },
            },
        });
        responsiveDataTable.css("width", "100%");
    }

    function dataSchoolHeadReload() {
        dataTableSchoolhead.ajax.reload();
    }

    /*========== RESPONSIVE DATA TABLE PSDS LIST===========*/
    var responsiveDataTable = $("#psds-table-list");

    if (responsiveDataTable.length !== 0) {
        var dataTablePSDS = responsiveDataTable.DataTable({
            ajax: {
                url: getPSDS, // Assuming 'getUser' is the route to your API
                dataSrc: "psds", // Specify the data source property in the returned JSON
            },
            columns: [
                {
                    data: null,
                    className: "table-row__td",
                    render: function (data, type, row) {
                        var fullName =
                            row.first_name +
                            (row.midname
                                ? " " + row.midname.charAt(0).toUpperCase() + "."
                                : "") +
                            " " +
                            row.last_name;

                        var role = row.role.role_name;
                        var profileImg =
                            "/storage/profile_images/" + row.profile_img;
                        return `<td class="table-row__td">
                                <div class="table-row--info"></div>
                                <div class="table-row__img" style="background-image: url('${profileImg}');"></div>
                                <div class="table-row__info">
                                    <p class="table-row__name">${fullName}</p>
                                    <span class="table-row__small">${role}</span>
                                </div>
                            </td>`;
                    },
                },
                { data: "deped_email", className: "table-row__td" },
                {
                    data: "org_pos.job_title.job_title",
                    className: "table-row__td",
                },
                {
                    data: "org_pos.business_unit.business_name",
                    className: "table-row__td",
                },
                {
                    data: "contact.phone_number",
                    className: "table-row__td",
                },
                {
                    data: "employment_date",
                    className: "table-row__td",
                    render: function (data) {
                        var formattedDate = new Date(data).toLocaleDateString(
                            "en-US",
                            { year: "numeric", month: "long", day: "numeric" }
                        );
                        return `<span class="table-row__status">${formattedDate}</span>`;
                    },
                },
                {
                    data: null,
                    className: "table-row__td",
                    orderable: false,
                    render: function (data, type, row) {
                        return `            <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-success" data-toggle="tooltip" data-placement="bottom"
                            data-bs-toggle="tooltip" aria-label="View Profile" data-bs-original-title="View Profile"><i
                                class="ri-information-line"></i></button>
                        <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>`;
                    },
                },
            ],
            aLengthMenu: [
                [5, 20, 30, 50, 75, -1],
                [5, 20, 30, 50, 75, "All"],
            ],
            order: [[3, "asc"]],
            pageLength: 5,
            dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
            rowCallback: function (row, data, index) {
                $(row).addClass("table-row");
            },
            drawCallback: function (settings) {
                var api = this.api();
                var columnHeaders = $(api.table().header())
                    .find("th:not(:first-child)")
                    .map(function () {
                        return $(this).text().trim();
                    })
                    .toArray();

                api.rows().every(function (rowIdx, tableLoop, rowLoop) {
                    var rowNode = this.node();
                    var rowData = this.data();

                    $(rowNode)
                        .find("td:not(:first-child)")
                        .each(function (colIdx, colNode) {
                            var columnHeaderText = columnHeaders[colIdx];
                            $(colNode).attr("data-column", columnHeaderText);
                        });
                });
            },
            language: {
                paginate: {
                    previous: '<span class="mdi mdi-arrow-left-thick"></span>',
                    next: '<span class="mdi mdi-arrow-right-thick"></span>',
                },
            },
        });
        responsiveDataTable.css("width", "100%");
    }

    function dataPSDSReload() {
        dataTablePSDS.ajax.reload();
    }

    /*========== RESPONSIVE DATA TABLE EMPLOYEE LIST===========*/
    var responsiveDataTable = $("#employee-table-list");

    if (responsiveDataTable.length !== 0) {
        var dataTableEmployee = responsiveDataTable.DataTable({
            ajax: {
                url: getUser, // Assuming 'getUser' is the route to your API
                dataSrc: "users", // Specify the data source property in the returned JSON
            },
            columns: [
                {
                    data: null,
                    className: "table-row__td",
                    render: function (data, type, row) {
                        var fullName =
                            row.first_name +
                            (row.midname
                                ? " " +
                                row.midname.charAt(0).toUpperCase() +
                                "."
                                : "") +
                            " " +
                            row.last_name;

                        var role = row.role.role_name;
                        var profileImg =
                            "/storage/profile_images/" + row.profile_img;
                        return `<td class="table-row__td">
                                <div class="table-row--info"></div>
                                <div class="table-row__img" style="background-image: url('${profileImg}');"></div>
                                <div class="table-row__info">
                                    <p class="table-row__name">${fullName}</p>
                                    <span class="table-row__small">${role}</span>
                                </div>
                            </td>`;
                    },
                },
                { data: "personal_email", className: "table-row__td" },
                {
                    data: "org_pos.job_title.job_title",
                    className: "table-row__td",
                },
                {
                    data: "org_pos.department.department_name",
                    className: "table-row__td",
                },
                {
                    data: "org_pos.department.department_id",
                    className: "table-row__td",
                },
                {
                    data: "employment_status",
                    className: "table-row__td",
                    render: function (data) {
                        return `<span class="table-row__status">${data}</span>`;
                    },
                },
                {
                    data: "employment_date",
                    className: "table-row__td",
                    render: function (data) {
                        var formattedDate = new Date(data).toLocaleDateString(
                            "en-US",
                            { year: "numeric", month: "long", day: "numeric" }
                        );
                        return `<span class="table-row__status">${formattedDate}</span>`;
                    },
                },
                {
                    data: null,
                    className: "table-row__td",
                    orderable: false,
                    render: function (data, type, row) {
                        return `            <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-success" data-toggle="tooltip" data-placement="bottom"
                            data-bs-toggle="tooltip" aria-label="View Profile" data-bs-original-title="View Profile"><i
                                class="ri-information-line"></i></button>
                        <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>`;
                    },
                },
            ],
            aLengthMenu: [
                [5, 20, 30, 50, 75, -1],
                [5, 20, 30, 50, 75, "All"],
            ],
            pageLength: 5,
            dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
            rowCallback: function (row, data, index) {
                $(row).addClass("table-row");
            },
            drawCallback: function (settings) {
                var api = this.api();
                var columnHeaders = $(api.table().header())
                    .find("th:not(:first-child)")
                    .map(function () {
                        return $(this).text().trim();
                    })
                    .toArray();

                api.rows().every(function (rowIdx, tableLoop, rowLoop) {
                    var rowNode = this.node();
                    var rowData = this.data();

                    $(rowNode)
                        .find("td:not(:first-child)")
                        .each(function (colIdx, colNode) {
                            var columnHeaderText = columnHeaders[colIdx];
                            $(colNode).attr("data-column", columnHeaderText);
                        });
                });
            },
            language: {
                paginate: {
                    previous: '<span class="mdi mdi-arrow-left-thick"></span>',
                    next: '<span class="mdi mdi-arrow-right-thick"></span>',
                },
            },
        });
        responsiveDataTable.css("width", "100%");
    }

    function dataEmployeeReload() {
        dataTableEmployee.ajax.reload();
    }

    /*========== RESPONSIVE DATA JOB TITLE LIST===========*/
    var responsiveDataTable = $("#job-title-data");
    if (responsiveDataTable.length !== 0) {
        var datatableJobTitle = responsiveDataTable.DataTable({
            ajax: {
                url: getJobTitle,
                dataSrc: "job_title",
            },
            columns: [
                {
                    data: "job_id",
                    className: "table-row__td",
                    render: function (data) {
                        return `<div class="table-row--info mr-3"></div><span class="table-row__idcode">${data}</span>`;
                    },
                },
                { data: "job_title", className: "table-row__td" },
                {
                    data: "created_at",
                    className: "table-row__td",
                    render: function (data) {
                        var formattedDate = new Date(data).toLocaleDateString(
                            "en-US",
                            { year: "numeric", month: "long", day: "numeric" }
                        );
                        return `<span class="table-row__status">${formattedDate}</span>`;
                    },
                },
                {
                    data: null,
                    className: "table-row__td",
                    orderable: false,
                    render: function (data, type, row) {
                        return `            <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" data-bs-auto-close="outside">
                                <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                            </button>
                            <div class="dropdown-menu">
                                    <button class="dropdown-item editJobTitle" href="#" data-id="${data.job_id}">
                                        Edit
                                        <span class="spinner-border spinner-border-sm ms-2 d-none edit-spinner" role="status" aria-hidden="true"></span>
                                    </button>
                                    <button class="dropdown-item deleteJobTitle" href="#" data-id="${data.job_id}">
                                        Delete
                                    </button>
                            </div>
                        </div>`;
                    },
                },
            ],
            aLengthMenu: [
                [5, 20, 30, 50, 75, -1],
                [5, 20, 30, 50, 75, "All"],
            ],
            pageLength: 5,
            autoWidth: true,

            dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
            rowCallback: function (row, data, index) {
                $(row).addClass("table-row");
            },
            drawCallback: function (settings) {
                var api = this.api();
                var columnHeaders = $(api.table().header())
                    .find("th")
                    .map(function () {
                        return $(this).text().trim();
                    })
                    .toArray();

                api.rows().every(function (rowIdx, tableLoop, rowLoop) {
                    var rowNode = this.node();
                    var rowData = this.data();

                    $(rowNode)
                        .find("td")
                        .each(function (colIdx, colNode) {
                            var columnHeaderText = columnHeaders[colIdx];
                            $(colNode).attr("data-column", columnHeaderText);
                        });
                });
            },
            language: {
                paginate: {
                    previous: '<span class="mdi mdi-arrow-left-thick"></span>',
                    next: '<span class="mdi mdi-arrow-right-thick"></span>',
                },
            },
        });
        responsiveDataTable.css("width", "100%");
    }

    function dataJobTitleReload() {
        datatableJobTitle.ajax.reload();
    }
    // Edit Fetch JobTitle
    $(document).on("click", ".editJobTitle", function () {
        let id = $(this).data("id");

        // Show spinner
        $(this).find(".spinner-border").removeClass("d-none");

        $.ajax({
            url: editJobTitleData,
            type: "GET",
            data: { id: id },
            success: function (response) {
                if (response.job) {
                    let job = response.job;
                    $("#id").val(job.job_id);
                    $("#editJobTitleData input[name='job_title']").val(
                        job.job_title
                    );
                    var editModal = new bootstrap.Modal(
                        document.getElementById("editJobTitle")
                    );
                    editModal.show();
                    $(".dropdown-menu").removeClass("show");
                } else {
                    console.error("Failed to fetch business unit data");
                }
            },
            error: function () {
                console.error("Failed to fetch job title data");
            },
            complete: function () {
                $(".editJobTitle .spinner-border").addClass("d-none");
            },
        });
    });
    // Delete JobTitle
    $(document).on("click", ".deleteJobTitle", function () {
        let id = $(this).data("id");
        let name = $(this)
            .closest("tr")
            .find('[data-column="Job Title"]')
            .text();
        let num = $(this)
            .closest("tr")
            .find('[data-column="No."] .table-row__idcode')
            .text();

        Swal.fire({
            title: "Are you sure?",
            text: `You are about to delete "${name}" with Job No. "${num}". This action cannot be undone.`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            allowOutsideClick: false,
            allowEscapeKey: false,
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return new Promise((resolve) => {
                    resolve();
                });
            },
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleting...",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    showConfirmButton: false,
                    html: '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',
                });
                $.ajax({
                    type: "DELETE",
                    url: deleteJobTitle,
                    data: { id: id },
                    dataType: "json",
                    success: function (response) {
                        if (response.success) {
                            dataJobTitleReload();
                            Swal.fire({
                                title: "Deleted!",
                                text: "The Job Title has been successfully deleted.",
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.message,
                                icon: "error",
                                showConfirmButton: true,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        let err = xhr.responseJSON;
                        Swal.fire({
                            title: "Error!",
                            text: err.message,
                            icon: "error",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    },
                });
            }
        });
    });

    // Edit Apply Changes
    let editJobTitleModal = document.getElementById("editJobTitle");
    if (editJobTitleModal) {
        const jobtitle_edit_route =
            editJobTitleModal.getAttribute("route-save") ?? "";
        const editJobTitleForm = editJobTitleModal.querySelector(
            "form#editJobTitleData"
        );

        editJobTitleModal.addEventListener("click", function (event) {
            event.preventDefault();
            if (
                event.target.tagName === "BUTTON" &&
                event.target.textContent === "Save"
            ) {
                editJobTitle(
                    editJobTitleForm,
                    jobtitle_edit_route,
                    editJobTitleModal
                );
            }
        });
    }

    function dataJobTitleReload() {
        datatableJobTitle.ajax.reload();
    }
    // ADD JOB TITLE

    let addJobTitleModal = document.getElementById("addJobTitle");
    if (addJobTitleModal) {
        const jobtitle_add_route =
            addJobTitleModal.getAttribute("route-save") ?? "";
        const addJobTitleForm = addJobTitleModal.querySelector(
            "form#addJobTitleData"
        );

        addJobTitleModal.addEventListener("click", function (event) {
            if (
                event.target.tagName === "BUTTON" &&
                event.target.textContent === "Save"
            ) {
                addJobTitle(
                    addJobTitleForm,
                    jobtitle_add_route,
                    addJobTitleModal
                );
            }
        });
    }
    // Create JobTitle Function
    const addJobTitle = (form, route, modall) => {
        const formData = new FormData(form);
        showProgressBar();
        fetch(route, {
            method: "POST",
            body: formData,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => {
                if (response.ok) {
                    form.querySelectorAll("[name]").forEach((inputElement) => {
                        const fieldName = inputElement.getAttribute("name");
                        const parentDiv = inputElement.closest(".form-group");
                        if (parentDiv) {
                            parentDiv.classList.remove("input-error");
                            parentDiv.classList.add("input-success");
                        }
                    });
                    return response.text();
                } else {
                    modall.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.add("input-error");
                    });
                    hideProgressBar();
                    throw {
                        response,
                        message: `${response.status} ${response.statusText} ${response.url}`,
                    };
                }
            })
            .then((data) => {
                let dataa = JSON.parse(data);
                if (dataa.status === "success") {
                    hideProgressBar();
                    form.reset();
                    var modal = bootstrap.Modal.getInstance(modall);
                    modal.hide();
                    modall.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                    });

                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "New Job Title is Successfully Saved",
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        dataJobTitleReload();
                    });
                } else {
                    throw new Error(
                        data
                            ? data
                            : "Form submission failed and no error message returned."
                    );
                }
            })
            .catch((error) => {
                const errorMessage = parseErrorMessage(error.message);
                displayError(errorMessage);
                if (
                    error.response &&
                    error.response.headers
                        .get("content-type")
                        .includes("application/json")
                ) {
                    error.response.json().then((json) => {
                        let ms = 100;
                        const errorFields = Object.keys(json.errors);

                        // Loop through all input fields in the form
                        form.querySelectorAll("[name]").forEach(
                            (inputElement) => {
                                const fieldName =
                                    inputElement.getAttribute("name");

                                if (!errorFields.includes(fieldName)) {
                                    // Field is not in the error response, add input-success class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.remove(
                                            "input-error"
                                        );
                                        parentDiv.classList.add(
                                            "input-success"
                                        );
                                    }
                                } else {
                                    // Field is in the error response, add input-error class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                            }
                        );

                        for (const fieldName in json.errors) {
                            if (json.errors.hasOwnProperty(fieldName)) {
                                const errorMessages = json.errors[fieldName];
                                const errorMessage = `${errorMessages.join(
                                    ", "
                                )}`;

                                if (ms != 100) {
                                    setTimeout(function () {
                                        displayInfo(errorMessage);
                                    }, ms);
                                } else {
                                    displayInfo(errorMessage);
                                }

                                const inputElement = form.querySelector(
                                    `[name="${fieldName}"]`
                                );
                                if (inputElement) {
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                                ms += 100;
                            }
                        }
                        hideProgressBar();
                    });
                }
            });
    };
    // Modify JobTitle Function
    const editJobTitle = (form, route, modal) => {
        const formData = new FormData(form);
        showProgressBar();

        fetch(route, {
            method: "POST",
            body: formData,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => {
                if (response.ok) {
                    form.querySelectorAll("[name]").forEach((inputElement) => {
                        const fieldName = inputElement.getAttribute("name");
                        const parentDiv = inputElement.closest(".form-group");
                        if (parentDiv) {
                            parentDiv.classList.remove("input-error");
                            parentDiv.classList.add("input-success");
                        }
                    });
                    return response.text();
                } else {
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.add("input-error");
                    });
                    hideProgressBar();
                    throw {
                        response,
                        message: `${response.status} ${response.statusText} ${response.url}`,
                    };
                }
            })
            .then((data) => {
                let dataa = JSON.parse(data);
                if (dataa.status === "success") {
                    hideProgressBar();
                    form.reset();
                    var modalInstance = bootstrap.Modal.getInstance(modal);
                    modalInstance.hide();
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                    });

                    $(".dropdown-menu").removeClass("show");

                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Job Title has been successfully updated",
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        dataJobTitleReload();
                    });
                } else if (dataa.status === "nochanges") {
                    displayInfo(dataa.message);
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                    });

                    hideProgressBar();
                } else {
                    throw new Error(
                        data
                            ? data
                            : "Form submission failed and no error message returned."
                    );
                }
            })
            .catch((error) => {
                const errorMessage = parseErrorMessage(error.message);
                displayError(errorMessage);
                if (
                    error.response &&
                    error.response.headers
                        .get("content-type")
                        .includes("application/json")
                ) {
                    error.response.json().then((json) => {
                        let ms = 100;
                        const errorFields = Object.keys(json.errors);

                        // Loop through all input fields in the form
                        form.querySelectorAll("[name]").forEach(
                            (inputElement) => {
                                const fieldName =
                                    inputElement.getAttribute("name");

                                if (!errorFields.includes(fieldName)) {
                                    // Field is not in the error response, add input-success class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.remove(
                                            "input-error"
                                        );
                                        parentDiv.classList.add(
                                            "input-success"
                                        );
                                    }
                                } else {
                                    // Field is in the error response, add input-error class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                            }
                        );

                        for (const fieldName in json.errors) {
                            if (json.errors.hasOwnProperty(fieldName)) {
                                const errorMessages = json.errors[fieldName];
                                const errorMessage = `${errorMessages.join(
                                    ", "
                                )}`;

                                if (ms != 100) {
                                    setTimeout(function () {
                                        displayInfo(errorMessage);
                                    }, ms);
                                } else {
                                    displayInfo(errorMessage);
                                }

                                const inputElement = form.querySelector(
                                    `[name="${fieldName}"]`
                                );
                                if (inputElement) {
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                                ms += 100;
                            }
                        }
                        hideProgressBar();
                    });
                }
            });
    };

    /*========== RESPONSIVE DATA MONTHLY SALARY LIST===========*/
    var responsiveDataTable = $("#monthly-salary-data");
    if (responsiveDataTable.length !== 0) {
        var datatableMonthlySalary = responsiveDataTable.DataTable({
            ajax: {
                url: getMonthlySalary,
                dataSrc: "monthly_salary",
            },
            columns: [
                {
                    data: "id",
                    className: "table-row__td",
                    render: function (data) {
                        return `<div class="table-row--info mr-3"></div><span class="table-row__idcode">${data}</span>`;
                    },
                },
                { data: "salary_grade", className: "table-row__td" },
                { data: "salary_step", className: "table-row__td" },
                { data: "salary_amount", className: "table-row__td" },
                {
                    data: null,
                    className: "table-row__td",
                    orderable: false,
                    render: function (data, type, row) {
                        return `            <div class="d-flex justify-content-center">

                        <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"  data-bs-auto-close="outside"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item editSalary" href="#" data-id="${data.id}">Edit
                            <span class="spinner-border spinner-border-sm ms-2 d-none edit-spinner" role="status" aria-hidden="true"></span>
                            </a>
                            <a class="dropdown-item deleteSalary" href="#" data-id="${data.id}">Delete</a>
                        </div>
                    </div>`;
                    },
                },
            ],
            aLengthMenu: [
                [5, 20, 30, 50, 75, -1],
                [5, 20, 30, 50, 75, "All"],
            ],
            pageLength: 5,
            autoWidth: true,

            dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
            rowCallback: function (row, data, index) {
                $(row).addClass("table-row");
            },
            drawCallback: function (settings) {
                var api = this.api();
                var columnHeaders = $(api.table().header())
                    .find("th")
                    .map(function () {
                        return $(this).text().trim();
                    })
                    .toArray();

                api.rows().every(function (rowIdx, tableLoop, rowLoop) {
                    var rowNode = this.node();
                    var rowData = this.data();

                    $(rowNode)
                        .find("td")
                        .each(function (colIdx, colNode) {
                            var columnHeaderText = columnHeaders[colIdx];
                            $(colNode).attr("data-column", columnHeaderText);
                        });
                });
            },
            language: {
                paginate: {
                    previous: '<span class="mdi mdi-arrow-left-thick"></span>',
                    next: '<span class="mdi mdi-arrow-right-thick"></span>',
                },
            },
        });
        responsiveDataTable.css("width", "100%");
    }

    function dataMonthlySalaryReload() {
        datatableMonthlySalary.ajax.reload();
    }
    // Edit Fetch Salary
    $(document).on("click", ".editSalary", function () {
        let id = $(this).data("id");

        // Show spinner
        $(this).find(".spinner-border").removeClass("d-none");

        $.ajax({
            url: editSalaryData,
            type: "GET",
            data: { id: id },
            success: function (response) {
                if (response.salary) {
                    let sal = response.salary;
                    $("#idd").val(sal.id);
                    $("#editSalaryData input[name='salary_grade']").val(
                        sal.salary_grade
                    );
                    $("#editSalaryData input[name='salary_step']").val(
                        sal.salary_step
                    );
                    $("#editSalaryData input[name='salary_amount']").val(
                        sal.salary_amount
                    );
                    var editModal = new bootstrap.Modal(
                        document.getElementById("editSalary")
                    );
                    editModal.show();
                    $(".dropdown-menu").removeClass("show");
                } else {
                    console.error("Failed to fetch business unit data");
                }
            },
            error: function () {
                console.error("Failed to fetch data");
            },
            complete: function () {
                $(".editSalary .spinner-border").addClass("d-none");
            },
        });
    });
    // Delete Salary
    $(document).on("click", ".deleteSalary", function () {
        let id = $(this).data("id");
        Swal.fire({
            title: "Are you sure?",
            text: `You are about to delete Monthly Salary Data with ID. "${id}". This action cannot be undone.`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            allowOutsideClick: false,
            allowEscapeKey: false,
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return new Promise((resolve) => {
                    resolve();
                });
            },
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleting...",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    showConfirmButton: false,
                    html: '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',
                });
                $.ajax({
                    type: "DELETE",
                    url: deleteSalary,
                    data: { id: id },
                    dataType: "json",
                    success: function (response) {
                        if (response.success) {
                            dataMonthlySalaryReload();
                            Swal.fire({
                                title: "Deleted!",
                                text: "The Monthly Salary has been successfully deleted.",
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.message,
                                icon: "error",
                                showConfirmButton: true,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        let err = xhr.responseJSON;
                        Swal.fire({
                            title: "Error!",
                            text: err.message,
                            icon: "error",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    },
                });
            }
        });
    });

    // Edit Apply Changes
    let editSalaryModal = document.getElementById("editSalary");
    if (editSalaryModal) {
        const Salary_edit_route =
            editSalaryModal.getAttribute("route-save") ?? "";
        const editSalaryForm = editSalaryModal.querySelector(
            "form#editSalaryData"
        );

        editSalaryModal.addEventListener("click", function (event) {
            event.preventDefault();
            if (
                event.target.tagName === "BUTTON" &&
                event.target.textContent === "Save"
            ) {
                editSalary(editSalaryForm, Salary_edit_route, editSalaryModal);
            }
        });
    }

    function dataSalaryReload() {
        datatableSalary.ajax.reload();
    }
    // ADD SALARY

    let addSalaryModal = document.getElementById("addSalary");
    if (addSalaryModal) {
        const Salary_add_route =
            addSalaryModal.getAttribute("route-save") ?? "";
        const addSalaryForm =
            addSalaryModal.querySelector("form#addSalaryData");

        addSalaryModal.addEventListener("click", function (event) {
            if (
                event.target.tagName === "BUTTON" &&
                event.target.textContent === "Save"
            ) {
                addSalary(addSalaryForm, Salary_add_route, addSalaryModal);
            }
        });
    }
    // Create Salary Function
    const addSalary = (form, route, modall) => {
        const formData = new FormData(form);
        showProgressBar();
        fetch(route, {
            method: "POST",
            body: formData,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => {
                if (response.ok) {
                    form.querySelectorAll("[name]").forEach((inputElement) => {
                        const fieldName = inputElement.getAttribute("name");
                        const parentDiv = inputElement.closest(".form-group");
                        if (parentDiv) {
                            parentDiv.classList.remove("input-error");
                            parentDiv.classList.add("input-success");
                        }
                    });
                    return response.text();
                } else {
                    modall.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.add("input-error");
                    });
                    hideProgressBar();
                    throw {
                        response,
                        message: `${response.status} ${response.statusText} ${response.url}`,
                    };
                }
            })
            .then((data) => {
                let dataa = JSON.parse(data);
                if (dataa.status === "success") {
                    hideProgressBar();
                    form.reset();
                    var modal = bootstrap.Modal.getInstance(modall);
                    modal.hide();
                    modall.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                    });

                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "New Monthly Salary is Successfully Saved",
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        dataMonthlySalaryReload();
                    });
                } else {
                    throw new Error(
                        data
                            ? data
                            : "Form submission failed and no error message returned."
                    );
                }
            })
            .catch((error) => {
                const errorMessage = parseErrorMessage(error.message);
                displayError(errorMessage);
                if (
                    error.response &&
                    error.response.headers
                        .get("content-type")
                        .includes("application/json")
                ) {
                    error.response.json().then((json) => {
                        let ms = 100;
                        const errorFields = Object.keys(json.errors);

                        // Loop through all input fields in the form
                        form.querySelectorAll("[name]").forEach(
                            (inputElement) => {
                                const fieldName =
                                    inputElement.getAttribute("name");

                                if (!errorFields.includes(fieldName)) {
                                    // Field is not in the error response, add input-success class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.remove(
                                            "input-error"
                                        );
                                        parentDiv.classList.add(
                                            "input-success"
                                        );
                                    }
                                } else {
                                    // Field is in the error response, add input-error class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                            }
                        );

                        for (const fieldName in json.errors) {
                            if (json.errors.hasOwnProperty(fieldName)) {
                                const errorMessages = json.errors[fieldName];
                                const errorMessage = `${errorMessages.join(
                                    ", "
                                )}`;

                                if (ms != 100) {
                                    setTimeout(function () {
                                        displayInfo(errorMessage);
                                    }, ms);
                                } else {
                                    displayInfo(errorMessage);
                                }

                                const inputElement = form.querySelector(
                                    `[name="${fieldName}"]`
                                );
                                if (inputElement) {
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                                ms += 100;
                            }
                        }
                        hideProgressBar();
                    });
                }
            });
    };
    // Modify Salary Function
    const editSalary = (form, route, modal) => {
        const formData = new FormData(form);
        showProgressBar();

        fetch(route, {
            method: "POST",
            body: formData,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => {
                if (response.ok) {
                    form.querySelectorAll("[name]").forEach((inputElement) => {
                        const fieldName = inputElement.getAttribute("name");
                        const parentDiv = inputElement.closest(".form-group");
                        if (parentDiv) {
                            parentDiv.classList.remove("input-error");
                            parentDiv.classList.add("input-success");
                        }
                    });
                    return response.text();
                } else {
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.add("input-error");
                    });
                    hideProgressBar();
                    throw {
                        response,
                        message: `${response.status} ${response.statusText} ${response.url}`,
                    };
                }
            })
            .then((data) => {
                let dataa = JSON.parse(data);
                if (dataa.status === "success") {
                    hideProgressBar();
                    form.reset();
                    var modalInstance = bootstrap.Modal.getInstance(modal);
                    modalInstance.hide();
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                    });

                    $(".dropdown-menu").removeClass("show");

                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Monthly Salary has been successfully updated",
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        dataMonthlySalaryReload();
                    });
                } else if (dataa.status === "nochanges") {
                    displayInfo(dataa.message);
                    modal.querySelectorAll(".form-group").forEach((group) => {
                        group.classList.remove("input-success", "input-error");
                    });

                    hideProgressBar();
                } else {
                    throw new Error(
                        data
                            ? data
                            : "Form submission failed and no error message returned."
                    );
                }
            })
            .catch((error) => {
                const errorMessage = parseErrorMessage(error.message);
                displayError(errorMessage);
                if (
                    error.response &&
                    error.response.headers
                        .get("content-type")
                        .includes("application/json")
                ) {
                    error.response.json().then((json) => {
                        let ms = 100;
                        const errorFields = Object.keys(json.errors);

                        // Loop through all input fields in the form
                        form.querySelectorAll("[name]").forEach(
                            (inputElement) => {
                                const fieldName =
                                    inputElement.getAttribute("name");

                                if (!errorFields.includes(fieldName)) {
                                    // Field is not in the error response, add input-success class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.remove(
                                            "input-error"
                                        );
                                        parentDiv.classList.add(
                                            "input-success"
                                        );
                                    }
                                } else {
                                    // Field is in the error response, add input-error class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                            }
                        );

                        for (const fieldName in json.errors) {
                            if (json.errors.hasOwnProperty(fieldName)) {
                                const errorMessages = json.errors[fieldName];
                                const errorMessage = `${errorMessages.join(
                                    ", "
                                )}`;

                                if (ms != 100) {
                                    setTimeout(function () {
                                        displayInfo(errorMessage);
                                    }, ms);
                                } else {
                                    displayInfo(errorMessage);
                                }

                                const inputElement = form.querySelector(
                                    `[name="${fieldName}"]`
                                );
                                if (inputElement) {
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                                ms += 100;
                            }
                        }
                        hideProgressBar();
                    });
                }
            });
    };
    /*========== On ckick card zoom (full screen) ===========*/
    $(".fx-full-card").on("click", function () {
        $(this).hide();
        $(this)
            .parent(".header-tools")
            .append(
                '<a href="javascript:void(0)" class="m-l-10 fx-full-card-close"><i class="ri-close-fill"></i></a>'
            );
        $(this).closest(".fx-card").parent().toggleClass("fx-full-screen");
        $(this)
            .closest(".fx-card")
            .parent()
            .parent()
            .append('<div class="fx-card-overlay"></div>');
    });
    $("body").on("click", ".fx-card-overlay, .fx-full-card-close", function () {
        $(".fx-card").find(".fx-full-card-close").remove();
        $(".fx-card").find(".fx-full-card").show();
        $(".fx-card").parent().removeClass("fx-full-screen");
        $(".fx-card-overlay").remove();
        // console.log("click");
    });

    /*========== Upload image preview ===========*/
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#imagePreview").css(
                    "background-image",
                    "url(" + e.target.result + ")"
                );
                $("#imagePreview").hide();
                $("#imagePreview").fadeIn(650);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function () {
        readURL(this);
    });

    /*======== Product Image Change on Upload ========*/
    $("body").on("change", ".fx-image-upload", function (e) {
        var lkthislk = $(this);

        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var ec_image_preview = lkthislk
                    .parent()
                    .parent()
                    .children(".fx-preview")
                    .find(".fx-image-preview")
                    .attr("src", e.target.result);

                ec_image_preview.hide();
                ec_image_preview.fadeIn(650);
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
    /*======== Ripple button animation ========*/
    $(".ripple-btn, .ripple-default-btn").click(function (e) {
        // Create a ripple element
        var ripple = $('<span class="ripple"></span>');

        // Append the ripple element to the button
        $(this).append(ripple);

        // Position the ripple element at the click position
        ripple.css({
            top: e.pageY - $(this).offset().top,
            left: e.pageX - $(this).offset().left,
        });

        // Remove the ripple element after the animation completes
        setTimeout(function () {
            ripple.remove();
        }, 1000);
    });

    /*======== Chat sidebar (chatapp page) ========*/
    $(".fx-btn-chat").click(function (e) {
        $("#chat_sidebar").addClass("open-chat-list");
        $(".chat-sidebar-overlay").fadeIn();
    });
    $(".chat-sidebar-overlay, .close-chat-list").click(function (e) {
        $("#chat_sidebar").removeClass("open-chat-list");
        $(".chat-sidebar-overlay").fadeOut();
    });

    /*======== Popup alert ========*/
    // $('.pop-basic').on("click", function () {
    //     Swal.fire('Any fool can use a computer')
    // });
    // $('.pop-text-under').on("click", function () {
    //     Swal.fire(
    //         'The Internet?',
    //         'That thing is still around?',
    //         'question'
    //     )
    // });
    // $('.pop-error-icon').on("click", function () {
    //     Swal.fire({
    //         icon: 'error',
    //         title: 'Oops...',
    //         text: 'Something went wrong!',
    //         footer: '<a href="">Why do I have this issue?</a>'
    //     })
    // });
    // $('.pop-long-content').on("click", function () {
    //     Swal.fire({
    //         imageUrl: 'https://placeholder.pics/svg/300x1500',
    //         imageHeight: 1500,
    //         imageAlt: 'A tall image'
    //     })
    // });
    // $('.pop-like').on("click", function () {
    //     Swal.fire({
    //         title: '<strong>HTML <u>example</u></strong>',
    //         icon: 'info',
    //         html:
    //             'You can use <b>bold text</b>, ' +
    //             '<a href="//sweetalert2.github.io">links</a> ' +
    //             'and other HTML tags',
    //         showCloseButton: true,
    //         showCancelButton: true,
    //         focusConfirm: false,
    //         confirmButtonText:
    //             '<i class="ri-thumb-up-line"></i> Great!',
    //         confirmButtonAriaLabel: 'Thumbs up, great!',
    //         cancelButtonText:
    //             '<i class="ri-thumb-down-line"></i>',
    //         cancelButtonAriaLabel: 'Thumbs down'
    //     })
    // });
    // $('.pop-save').on("click", function () {
    //     Swal.fire({
    //         title: 'Do you want to save the changes?',
    //         showDenyButton: true,
    //         showCancelButton: true,
    //         confirmButtonText: 'Save',
    //         denyButtonText: `Don't save`,
    //     }).then((result) => {
    //         /* Read more about isConfirmed, isDenied below */
    //         if (result.isConfirmed) {
    //             Swal.fire('Saved!', '', 'success')
    //         } else if (result.isDenied) {
    //             Swal.fire('Changes are not saved', '', 'info')
    //         }
    //     })
    // });
    // $('.pop-positioned-timeout').on("click", function () {

    // });
    // $('.pop-fade-down').on("click", function () {
    //     Swal.fire({
    //         title: 'Custom animation with Animate.css',
    //         showClass: {
    //             popup: 'animate__animated animate__fadeInDown'
    //         },
    //         hideClass: {
    //             popup: 'animate__animated animate__fadeOutUp'
    //         }
    //     })
    // });
    // $('.pop-delete').on("click", function () {
    //     Swal.fire({
    //         title: 'Are you sure?',
    //         text: "You won't be able to revert this!",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Yes, delete it!'
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             Swal.fire(
    //                 'Deleted!',
    //                 'Your file has been deleted.',
    //                 'success'
    //             )
    //         }
    //     })
    // });
    // $('.pop-success').on("click", function () {
    //     const swalWithBootstrapButtons = Swal.mixin({
    //         customClass: {
    //             confirmButton: 'btn btn-success',
    //             cancelButton: 'btn btn-danger'
    //         },
    //         buttonsStyling: false
    //     })
    //     swalWithBootstrapButtons.fire({
    //         title: 'Best work!',
    //         text: "You job is done!",
    //         icon: 'success',
    //         showCancelButton: true,
    //         confirmButtonText: 'Ok',
    //     })
    // });
    // $('.pop-delete-cancel').on("click", function () {
    //     const swalWithBootstrapButtons = Swal.mixin({
    //         customClass: {
    //             confirmButton: 'btn btn-success',
    //             cancelButton: 'btn btn-danger'
    //         },
    //         buttonsStyling: false
    //     })

    //     swalWithBootstrapButtons.fire({
    //         title: 'Are you sure?',
    //         text: "You won't be able to revert this!",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonText: 'Yes, delete it!',
    //         cancelButtonText: 'No, cancel!',
    //         reverseButtons: true
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             swalWithBootstrapButtons.fire(
    //                 'Deleted!',
    //                 'Your file has been deleted.',
    //                 'success'
    //             )
    //         } else if (
    //             /* Read more about handling dismissals below */
    //             result.dismiss === Swal.DismissReason.cancel
    //         ) {
    //             swalWithBootstrapButtons.fire(
    //                 'Cancelled',
    //                 'Your imaginary file is safe :)',
    //                 'error'
    //             )
    //         }
    //     })
    // });
    // $('.pop-img').on("click", function () {
    //     Swal.fire({
    //         title: 'Sweet!',
    //         text: 'Modal with a custom image.',
    //         imageUrl: 'https://unsplash.it/400/200',
    //         imageWidth: 400,
    //         imageHeight: 200,
    //         imageAlt: 'Custom image',
    //     })
    // });
    // $('.pop-custom').on("click", function () {
    //     Swal.fire({
    //         title: 'Custom width, padding, color, background.',
    //         width: 600,
    //         padding: '3em',
    //         color: '#716add',
    //         background: '#fff',
    //         backdrop: `
    //           rgba(0,0,123,0.4)
    //           left top
    //           no-repeat
    //         `
    //     })
    // });
    // $('.pop-auto-close').on("click", function () {

    //     let timerInterval
    //     Swal.fire({
    //         title: 'Auto close alert!',
    //         html: 'I will close in <b></b> milliseconds.',
    //         timer: 2000,
    //         timerProgressBar: true,
    //         didOpen: () => {
    //             Swal.showLoading()
    //             const b = Swal.getHtmlContainer().querySelector('b')
    //             timerInterval = setInterval(() => {
    //                 b.textContent = Swal.getTimerLeft()
    //             }, 100)
    //         },
    //         willClose: () => {
    //             clearInterval(timerInterval)
    //         }
    //     }).then((result) => {
    //         /* Read more about handling dismissals below */
    //         if (result.dismiss === Swal.DismissReason.timer) {
    //             // console.log('I was closed by the timer')
    //         }
    //     })
    // });
    // $('.pop-rtl').on("click", function () {
    //     Swal.fire({
    //         title: 'هل تريد الاستمرار؟',
    //         icon: 'question',
    //         iconHtml: '؟',
    //         confirmButtonText: 'نعم',
    //         cancelButtonText: 'لا',
    //         showCancelButton: true,
    //         showCloseButton: true
    //     })
    // });
    // $('.pop-ajax').on("click", function () {
    //     Swal.fire({
    //         title: 'Submit your Github username',
    //         input: 'text',
    //         inputAttributes: {
    //             autocapitalize: 'off'
    //         },
    //         showCancelButton: true,
    //         confirmButtonText: 'Look up',
    //         showLoaderOnConfirm: true,
    //         preConfirm: (login) => {
    //             return fetch(`//api.github.com/users/${login}`)
    //                 .then(response => {
    //                     if (!response.ok) {
    //                         throw new Error(response.statusText)
    //                     }
    //                     return response.json()
    //                 })
    //                 .catch(error => {
    //                     Swal.showValidationMessage(
    //                         `Request failed: ${error}`
    //                     )
    //                 })
    //         },
    //         allowOutsideClick: () => !Swal.isLoading()
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             Swal.fire({
    //                 title: `${result.value.login}'s avatar`,
    //                 imageUrl: result.value.avatar_url
    //             })
    //         }
    //     })
    // });

    /*========== Tools Sidebar ===========*/
    $(".fx-tools-sidebar-toggle").on("click", function () {
        $(".fx-tools-sidebar").addClass("open-tools");
        $(".fx-tools-sidebar-overlay").fadeIn();
        $(".fx-tools-sidebar-toggle").hide();
    });
    $(".fx-tools-sidebar-overlay, .close-tools").on("click", function () {
        $(".fx-tools-sidebar").removeClass("open-tools");
        $(".fx-tools-sidebar-overlay").fadeOut();
        $(".fx-tools-sidebar-toggle").fadeIn();
    });

    /*========== Tools Sidebar ===========*/
    // Mode
    var $link = $("<link>", {
        rel: "stylesheet",
        href: "../assets/css/dark.css",
        id: "dark",
    });
    $(".fx-tools-item.mode").on("click", function () {
        var modes = $(this).attr("data-fx-mode-tool");
        ajaxTools("mode", modes)
        ajaxTools("header", modes)
        if (modes == "light") {
            $("body").attr("data-fx-mode", "light");
            $("#dark").remove();
            var headerModes = $(".fx-tools-item.header").attr(
                "data-header-mode"
            );
            if (headerModes == "light") {
                $(".fx-tools-item.header[data-header-mode='light']").addClass(
                    "active"
                );
                $(".fx-tools-item.header[data-header-mode='dark']").removeClass(
                    "active"
                );
                $(".fx-header").attr("data-header-mode-tool", "light");
            }
            $(".fx-mode.light").css("display", "none");
            $(".fx-mode.dark").css("display", "flex");
        } else if (modes == "dark") {
            $("body").attr("data-fx-mode", "dark");
            $("#mainCss").after($link);
            var headerModes = $(".fx-tools-item.header").attr(
                "data-header-mode"
            );
            if (headerModes == "light") {
                $(".fx-tools-item.header[data-header-mode='dark']").addClass(
                    "active"
                );
                $(
                    ".fx-tools-item.header[data-header-mode='light']"
                ).removeClass("active");
                $(".fx-header").attr("data-header-mode-tool", "dark");
            }
            $(".fx-mode.dark").css("display", "none");
            $(".fx-mode.light").css("display", "flex");
        }

        $(this)
            .parents(".fx-tools-info")
            .find(".fx-tools-item.mode")
            .removeClass("active");
        $(this).addClass("active");
        $(".fx-tools-info").find(".fx-tools-item.mode").removeClass("active");
        $(".fx-tools-item").each(function () {
            if ($(this).data("fx-mode-tool") === modes) {
                $(this).addClass("active");
            }
        });
    });
    function tools_Modes() {
        $(".fx-tools-info").find(".fx-tools-item.mode").removeClass("active");
        var modes = getMode
        if (modes == "light") {
            $("body").attr("data-fx-mode", "light");
            $("#dark").remove();
            var headerModes = $(".fx-tools-item.header").attr(
                "data-header-mode"
            );
            if (headerModes == "light") {
                $(".fx-tools-item.header[data-header-mode='light']").addClass(
                    "active"
                );
                $(".fx-tools-item.header[data-header-mode='dark']").removeClass(
                    "active"
                );
                $(".fx-header").attr("data-header-mode-tool", "light");
            }
            $(".fx-mode.light").css("display", "none");
            $(".fx-mode.dark").css("display", "flex");
        } else if (modes == "dark") {
            $("body").attr("data-fx-mode", "dark");
            $("#mainCss").after($link);
            var headerModes = $(".fx-tools-item.header").attr(
                "data-header-mode"
            );
            if (headerModes == "light") {
                $(".fx-tools-item.header[data-header-mode='dark']").addClass(
                    "active"
                );
                $(
                    ".fx-tools-item.header[data-header-mode='light']"
                ).removeClass("active");
                $(".fx-header").attr("data-header-mode-tool", "dark");
            }
            $(".fx-mode.dark").css("display", "none");
            $(".fx-mode.light").css("display", "flex");
        }

        // Find all elements with the class 'fx-tools-item'
        $(".fx-tools-item").each(function () {
            // Check if the value of 'data-fx-mode-tool' attribute of the element matches the mode
            if ($(this).data("fx-mode-tool") === modes) {
                // If it matches, add the 'active' class to the element
                $(this).addClass("active");
            }
        });
    }
    tools_Modes();
    // Header
    $(".fx-tools-item.header").on("click", function () {
        var headerModes = $(this).attr("data-header-mode");
        ajaxTools("header", headerModes)
        if (headerModes == "light") {
            $(".fx-header").attr("data-header-mode-tool", "light");
        } else if (headerModes == "dark") {
            $(".fx-header").attr("data-header-mode-tool", "dark");
        }
        $(this)
            .parents(".fx-tools-info")
            .find(".fx-tools-item.header")
            .removeClass("active");
        $(this).addClass("active");
        $(".fx-tools-info").find(".fx-tools-item.header").removeClass("active");
        $(".fx-tools-item.header").each(function () {
            if ($(this).data("header-mode") === headerModes) {
                $(this).addClass("active");
            }
        });
    });
    function tools_Header() {
        $(".fx-tools-info").find(".fx-tools-item.header").removeClass("active");
        var headerModes = getHeaderMode
        if (headerModes == "light") {
            $(".fx-header").attr("data-header-mode-tool", "light");
        } else if (headerModes == "dark") {
            $(".fx-header").attr("data-header-mode-tool", "dark");
        }
        $(".fx-tools-item.header").each(function () {
            if ($(this).data("header-mode") === headerModes) {
                $(this).addClass("active");
            }
        });

    }
    tools_Header()
    // Sidebar
    $(".fx-tools-item.sidebar").on("click", function () {
        var sidebarModes = $(this).attr("data-sidebar-mode-tool");
        ajaxTools("sidebar", sidebarModes)
        if (sidebarModes == "light") {
            $(".fx-sidebar").attr("data-mode", "light");
        } else if (sidebarModes == "dark") {
            $(".fx-sidebar").attr("data-mode", "dark");
        } else if (sidebarModes == "bg-1") {
            $(".fx-sidebar").attr("data-mode", "bg-1");
        } else if (sidebarModes == "bg-2") {
            $(".fx-sidebar").attr("data-mode", "bg-2");
        } else if (sidebarModes == "bg-3") {
            $(".fx-sidebar").attr("data-mode", "bg-3");
        } else if (sidebarModes == "bg-4") {
            $(".fx-sidebar").attr("data-mode", "bg-4");
        }
        $(this)
            .parents(".fx-tools-info")
            .find(".fx-tools-item.sidebar")
            .removeClass("active");
        $(this).addClass("active");
        $(".fx-tools-info").find(".fx-tools-item.sidebar").removeClass("active");
        $(".fx-tools-item.sidebar").each(function () {
            if ($(this).data("sidebar-mode-tool") === sidebarModes) {
                $(this).addClass("active");
            }
        });
    });
    function tools_Sidebar() {
        $(".fx-tools-info").find(".fx-tools-item.sidebar").removeClass("active");
        var sidebarModes = getSidebarMode
        if (sidebarModes == "light") {
            $(".fx-sidebar").attr("data-mode", "light");
        } else if (sidebarModes == "dark") {
            $(".fx-sidebar").attr("data-mode", "dark");
        } else if (sidebarModes == "bg-1") {
            $(".fx-sidebar").attr("data-mode", "bg-1");
        } else if (sidebarModes == "bg-2") {
            $(".fx-sidebar").attr("data-mode", "bg-2");
        } else if (sidebarModes == "bg-3") {
            $(".fx-sidebar").attr("data-mode", "bg-3");
        } else if (sidebarModes == "bg-4") {
            $(".fx-sidebar").attr("data-mode", "bg-4");
        }
        $(".fx-tools-item.sidebar").each(function () {
            if ($(this).data("sidebar-mode-tool") === sidebarModes) {
                $(this).addClass("active");
            }
        });
    }
    tools_Sidebar();
    // Backgrounds
    $(".fx-tools-item.bg").on("click", function () {
        var bgModes = $(this).attr("data-bg-mode");
        ajaxTools("backgrounds", bgModes)
        if (bgModes == "default") {
            $("#mainBg").remove();
        } else if (bgModes == "bg-1") {
            $("#mainBg").remove();
            $("#mainCss").after(
                "<link id='mainBg' href='../assets/css/bg-1.css' rel='stylesheet'>"
            );
        } else if (bgModes == "bg-2") {
            $("#mainBg").remove();
            $("#mainCss").after(
                "<link id='mainBg' href='../assets/css/bg-2.css' rel='stylesheet'>"
            );
        } else if (bgModes == "bg-3") {
            $("#mainBg").remove();
            $("#mainCss").after(
                "<link id='mainBg' href='../assets/css/bg-3.css' rel='stylesheet'>"
            );
        } else if (bgModes == "bg-4") {
            $("#mainBg").remove();
            $("#mainCss").after(
                "<link id='mainBg' href='../assets/css/bg-4.css' rel='stylesheet'>"
            );
        } else if (bgModes == "bg-5") {
            $("#mainBg").remove();
            $("#mainCss").after(
                "<link id='mainBg' href='../assets/css/bg-5.css' rel='stylesheet'>"
            );
        }
        $(this)
            .parents(".fx-tools-info")
            .find(".fx-tools-item.bg")
            .removeClass("active");
        $(this).addClass("active");
        $(".fx-tools-info").find(".fx-tools-item.bg").removeClass("active");
        $(".fx-tools-item.bg").each(function () {
            if ($(this).data("bg-mode") === bgModes) {
                $(this).addClass("active");
            }
        });
    });
    function tools_Backgrounds() {
        $(".fx-tools-info").find(".fx-tools-item.bg").removeClass("active");
        var bgModes = getbackgroundsMode
        if (bgModes == "default") {
            $("#mainBg").remove();
        } else if (bgModes == "bg-1") {
            $("#mainBg").remove();
            $("#mainCss").after(
                "<link id='mainBg' href='../assets/css/bg-1.css' rel='stylesheet'>"
            );
        } else if (bgModes == "bg-2") {
            $("#mainBg").remove();
            $("#mainCss").after(
                "<link id='mainBg' href='../assets/css/bg-2.css' rel='stylesheet'>"
            );
        } else if (bgModes == "bg-3") {
            $("#mainBg").remove();
            $("#mainCss").after(
                "<link id='mainBg' href='../assets/css/bg-3.css' rel='stylesheet'>"
            );
        } else if (bgModes == "bg-4") {
            $("#mainBg").remove();
            $("#mainCss").after(
                "<link id='mainBg' href='../assets/css/bg-4.css' rel='stylesheet'>"
            );
        } else if (bgModes == "bg-5") {
            $("#mainBg").remove();
            $("#mainCss").after(
                "<link id='mainBg' href='../assets/css/bg-5.css' rel='stylesheet'>"
            );
        }

        $(".fx-tools-item.bg").each(function () {
            if ($(this).data("bg-mode") === bgModes) {
                $(this).addClass("active");
            }
        });
    }
    tools_Backgrounds()
    // Box design
    $(".fx-tools-item.box").on("click", function () {
        var boxModes = $(this).attr("data-box-mode-tool");
        ajaxTools("box_design", boxModes)
        $("#box_design").remove();
        if (boxModes == "default") {
            $("#box_design").remove();
        } else if (boxModes == "box-1") {
            $("#mainCss").after(
                '<link id="box_design" href="../assets/css/box-1.css" rel="stylesheet">'
            );
        } else if (boxModes == "box-2") {
            $("#mainCss").after(
                '<link id="box_design" href="../assets/css/box-2.css" rel="stylesheet">'
            );
        } else if (boxModes == "box-3") {
            $("#mainCss").after(
                '<link id="box_design" href="../assets/css/box-3.css" rel="stylesheet">'
            );
        }
        $(this)
            .parents(".fx-tools-info")
            .find(".fx-tools-item.box")
            .removeClass("active");
        $(this).addClass("active");
        $(".fx-tools-info").find(".fx-tools-item.box").removeClass("active");
        $(".fx-tools-item.box").each(function () {
            if ($(this).data("box-mode-tool") === boxModes) {
                $(this).addClass("active");
            }
        });
    });
    function tools_Box() {
        $(".fx-tools-info").find(".fx-tools-item.box").removeClass("active");
        var boxModes = getBoxDesign
        $("#box_design").remove();
        if (boxModes == "default") {
            $("#box_design").remove();
        } else if (boxModes == "box-1") {
            $("#mainCss").after(
                '<link id="box_design" href="../assets/css/box-1.css" rel="stylesheet">'
            );
        } else if (boxModes == "box-2") {
            $("#mainCss").after(
                '<link id="box_design" href="../assets/css/box-2.css" rel="stylesheet">'
            );
        } else if (boxModes == "box-3") {
            $("#mainCss").after(
                '<link id="box_design" href="../assets/css/box-3.css" rel="stylesheet">'
            );
        }

        $(".fx-tools-item.box").each(function () {
            if ($(this).data("box-mode-tool") === boxModes) {
                $(this).addClass("active");
            }
        });
    }
    tools_Box()
    function updateSidebarToggle() {
        if (!getSettingIcon) {
            $('.fx-tools-sidebar-toggle').removeClass("d-none");
        } else {
            $('.fx-tools-sidebar-toggle').addClass("d-none");
        }
    }

    // Function to handle click event on fx-toggle-option
    $('.fx-toggle-option').on('click', function () {

        $(this).toggleClass("active");
        if ($('.fx-toggle-option').hasClass("active")) {
            $('.fx-tools-sidebar-toggle').removeClass("d-none");
        } else {
            $('.fx-tools-sidebar-toggle').addClass("d-none");
        }
        // Store the value in localStorage
        ajaxTools("setting_icon", $(this).hasClass("active"))
    });

    var isActive = getSettingIcon
    if (isActive === null || isActive == "true") {
        $('.fx-toggle-option').addClass("active");
        $('.fx-tools-sidebar-toggle').removeClass("d-none");

    } else {
        $('.fx-toggle-option').removeClass("active");
        $('.fx-tools-sidebar-toggle').addClass("d-none");
    }
    function ajaxTools(type, val) {
        let arr = {};
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        if (type === 'mode') {
            arr = { type: type, val: val };
        } else if (type === 'header') {
            arr = { type: type, val: val };
        } else if (type === 'sidebar') {
            arr = { type: type, val: val };
        } else if (type === 'backgrounds') {
            arr = { type: type, val: val };
        } else if (type === 'box_design') {
            arr = { type: type, val: val };
        } else if (type === 'setting_icon') {
            arr = { type: type, val: val };
        }
        arr['_token'] = csrfToken;
        $.ajax({
            type: "POST",
            url: routeToolSettings,
            data: arr,
            dataType: "json",
            success: function (response) {

            }
        });
    };




    $(".sel").on("click", function () {
        $(this).removeClass("sel-unactive").addClass("sel-active");
    });

    $(".sel > select").on("focusout", function () {
        var $parentSel = $(this).closest(".sel");
        if (
            !$parentSel.find("select").filter(function () {
                return $(this).val();
            }).length
        ) {
            $parentSel.removeClass("sel-active").addClass("sel-unactive");
        }
    });

    // Change Logo to Light
    var changeLogoImage = function () {
        var sidebar = document.querySelector(".fx-sidebar");
        var logoImage = document.getElementById("logoImage");
        var container = document.querySelector(".digital-clock-container");
        var container_h5 = document.querySelector(
            ".digital-clock-container h5"
        );
        var clock_container = document.querySelector(".clock-container");
        var clock_container = document.querySelector(".clock-container");
        var profile_sidebar = document.querySelector(".profile-sidebar");
        var clock_hand = document.querySelector(
            ".hand, .hour, .minute, .second"
        );
        var mini_clock = document.querySelector(".mini-clock");

        if (sidebar) {
            const mode = sidebar.dataset.mode;
            if (mode === "dark") {
                logoImage.src = "../assets/img/logo/full-logo-dk.png";
                clock_container.style.backgroundColor = "#1a202b";
                container.style.backgroundColor = "#1a202b";
                container.style.color = "#ffffff";
                container_h5.style.color = "#ffffff";
                profile_sidebar.style.backgroundColor = "#1a202b";
                profile_sidebar.style.color = "#ffffff";
                mini_clock.style.backgroundColor = "#1a202b";
                mini_clock.style.borderColor = "#ffffff";
                clock_hand.style.backgroundColor = "#ffffff";
            } else if (mode === "light") {
                logoImage.src = "../assets/img/logo/full-logo-lt.png";
                clock_container.style.backgroundColor = "#f8fafb";
                container.style.backgroundColor = "#f8fafb";
                container.style.color = "#1a202b";
                container_h5.style.color = "#1a202b";
                profile_sidebar.style.backgroundColor = "#f8fafb";
                profile_sidebar.style.color = "#1a202b";
                mini_clock.style.backgroundColor = "#f8fafb";
                mini_clock.style.borderColor = "#1a202b";
                clock_hand.style.backgroundColor = "#1a202b";
            } else if (
                mode === "bg-1" ||
                mode === "bg-2" ||
                mode === "bg-3" ||
                mode === "bg-4"
            ) {
                logoImage.src = "../assets/img/logo/full-logo-dk.png";
                clock_container.style.backgroundColor = "rgb(33 37 41 / 40%)";
                container.style.backgroundColor = "rgb(0 0 0 / 0%)";
                container.style.color = "#ffffff";
                container_h5.style.color = "#ffffff";
                profile_sidebar.style.backgroundColor = "rgb(33 37 41 / 40%)";
                profile_sidebar.style.color = "#ffffff";
                mini_clock.style.backgroundColor = "#1a202b";
                mini_clock.style.borderColor = "#ffffff";
                clock_hand.style.backgroundColor = "#ffffff";
            }
        }
    };

    // Execute the function immediately
    changeLogoImage();

    // Create a new observer
    var observer = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
            if (mutation.attributeName === "data-mode") {
                changeLogoImage(); // Call the function to change the image source
            }
        });
    });

    // Observe changes in the data-mode attribute
    observer.observe(document.querySelector(".fx-sidebar"), {
        attributes: true,
    });



    const $regionSelect = $("#region-select");
    const $provinceSelect = $("#province");
    const $citySelect = $("#city");
    const $barangaySelect = $("#barangay");

    $.getJSON("/assets/json/philippinesprovinces.json", function (data) {
        const sortedData = Object.entries(data).sort((a, b) => a[0] - b[0]);

        for (const [key, value] of sortedData) {
            const $option = $("<option/>", {
                value: value.region_name.replace(
                    /(region)/i,
                    (match) =>
                        match.charAt(0).toUpperCase() +
                        match.slice(1).toLowerCase()
                ),
                text: value.region_name.replace(
                    /(region)/i,
                    (match) =>
                        match.charAt(0).toUpperCase() +
                        match.slice(1).toLowerCase()
                ),
            });
            $regionSelect.append($option);
        }

        $regionSelect.change(() => {
            $provinceSelect.empty();
            $citySelect.empty();
            $barangaySelect.empty();
            if ($regionSelect.val() != "") {
                $citySelect.prop("disabled", true);

                $barangaySelect.prop("disabled", true);

                $provinceSelect.prop("disabled", false);
                const selectedRegion = $regionSelect.val().toUpperCase();

                for (const [key, value] of sortedData) {
                    if (selectedRegion === value.region_name) {
                        $.each(value.province_list, function (provinceName) {
                            const $option = $("<option/>", {
                                value: toTitleCase(provinceName),
                                text: toTitleCase(provinceName),
                            });
                            $provinceSelect.append($option);
                        });
                    }
                }
            } else {
                $provinceSelect.prop("disabled", true);

                $citySelect.prop("disabled", true);

                $barangaySelect.prop("disabled", true);
            }
        });
        $provinceSelect.change(() => {
            $barangaySelect.empty();
            $barangaySelect.prop("disabled", true);

            if ($regionSelect.val() != "" || $provinceSelect.val() != "") {
                $citySelect.prop("disabled", false);
                $citySelect.empty();
                const selectedProvince = $provinceSelect.val().toUpperCase();
                for (const [key, value] of sortedData) {
                    if (value.province_list[selectedProvince]) {
                        $.each(
                            value.province_list[selectedProvince]
                                .municipality_list,
                            function (municipalList) {
                                const $option = $("<option/>", {
                                    value: toTitleCase(municipalList),
                                    text: toTitleCase(municipalList),
                                });
                                $citySelect.append($option);
                            }
                        );
                    }
                }
            } else {
                $citySelect.prop("disabled", true);
            }
        });
        $citySelect.change(() => {
            if (
                $regionSelect.val() != "" ||
                $provinceSelect.val() != "" ||
                $citySelect.val() != ""
            ) {
                $barangaySelect.prop("disabled", false);
                $barangaySelect.empty();
                const selectedProvince = $provinceSelect.val().toUpperCase();
                const selectedCity = $citySelect.val().toUpperCase();
                for (const [key, value] of sortedData) {
                    if (value.province_list[selectedProvince]) {
                        $.each(
                            value.province_list[selectedProvince]
                                .municipality_list,
                            function (municipalList, data) {
                                if (municipalList === selectedCity) {
                                    $.each(
                                        data.barangay_list,
                                        function (data, barangay) {
                                            const $option = $("<option/>", {
                                                value: toTitleCase(barangay),
                                                text: toTitleCase(barangay),
                                            });
                                            $barangaySelect.append($option);
                                        }
                                    );
                                }
                            }
                        );
                    }
                }
            }
        });
    });
    const $regionSelect1 = $("#region-select2");
    const $provinceSelect1 = $("#province2");
    const $citySelect1 = $("#city2");
    const $barangaySelect1 = $("#barangay2");

    $.getJSON("/assets/json/philippinesprovinces.json", function (data) {
        const sortedData = Object.entries(data).sort((a, b) => a[0] - b[0]);

        for (const [key, value] of sortedData) {
            const $option = $("<option/>", {
                value: value.region_name.replace(
                    /(region)/i,
                    (match) =>
                        match.charAt(0).toUpperCase() +
                        match.slice(1).toLowerCase()
                ),
                text: value.region_name.replace(
                    /(region)/i,
                    (match) =>
                        match.charAt(0).toUpperCase() +
                        match.slice(1).toLowerCase()
                ),
            });
            $regionSelect1.append($option);
        }

        $regionSelect1.change(() => {
            $provinceSelect1.empty();
            $citySelect1.empty();
            $barangaySelect1.empty();
            if ($regionSelect1.val() != "") {
                $citySelect1.prop("disabled", true);

                $barangaySelect1.prop("disabled", true);

                $provinceSelect1.prop("disabled", false);
                const selectedRegion = $regionSelect1.val().toUpperCase();

                for (const [key, value] of sortedData) {
                    if (selectedRegion === value.region_name) {
                        $.each(value.province_list, function (provinceName) {
                            const $option = $("<option/>", {
                                value: toTitleCase(provinceName),
                                text: toTitleCase(provinceName),
                            });
                            $provinceSelect1.append($option);
                        });
                    }
                }
            } else {
                $provinceSelect1.prop("disabled", true);

                $citySelect1.prop("disabled", true);

                $barangaySelect1.prop("disabled", true);
            }
        });
        $provinceSelect1.change(() => {
            $barangaySelect1.empty();
            $barangaySelect1.prop("disabled", true);

            if ($regionSelect1.val() != "" || $provinceSelect1.val() != "") {
                $citySelect1.prop("disabled", false);
                $citySelect1.empty();
                const selectedProvince = $provinceSelect1.val().toUpperCase();
                for (const [key, value] of sortedData) {
                    if (value.province_list[selectedProvince]) {
                        $.each(
                            value.province_list[selectedProvince]
                                .municipality_list,
                            function (municipalList) {
                                const $option = $("<option/>", {
                                    value: toTitleCase(municipalList),
                                    text: toTitleCase(municipalList),
                                });
                                $citySelect1.append($option);
                            }
                        );
                    }
                }
            } else {
                $citySelect1.prop("disabled", true);
            }
        });
        $citySelect1.change(() => {
            if (
                $regionSelect1.val() != "" ||
                $provinceSelect1.val() != "" ||
                $citySelect1.val() != ""
            ) {
                $barangaySelect1.prop("disabled", false);
                $barangaySelect1.empty();
                const selectedProvince = $provinceSelect1.val().toUpperCase();
                const selectedCity = $citySelect1.val().toUpperCase();
                for (const [key, value] of sortedData) {
                    if (value.province_list[selectedProvince]) {
                        $.each(
                            value.province_list[selectedProvince]
                                .municipality_list,
                            function (municipalList, data) {
                                if (municipalList === selectedCity) {
                                    $.each(
                                        data.barangay_list,
                                        function (data, barangay) {
                                            const $option = $("<option/>", {
                                                value: toTitleCase(barangay),
                                                text: toTitleCase(barangay),
                                            });
                                            $barangaySelect1.append($option);
                                        }
                                    );
                                }
                            }
                        );
                    }
                }
            }
        });
    });

    function toTitleCase(str) {
        return str
            .toLowerCase()
            .split(" ")
            .map(function (word) {
                return word.replace(word[0], word[0].toUpperCase());
            })
            .join(" ");
    }
    $(":input").inputmask();

    // var myModal = new bootstrap.Modal(document.getElementById("addEmployee"));
    var modalFooter = $("#addEmployee").find(".modal-footer");

    modalFooter.html(`<button type="button" class="fx-btn ripple-btn color-dark" data-bs-dismiss="modal">Close</button>
                    <button class="btn-prev fx-btn ripple-btn color-warning d-none">Previous</button>
                    <button class="btn-next fx-btn ripple-btn color-info">Next</button>`);
    var modalFooter = $("#addPSDS").find(".modal-footer");

    modalFooter.html(`<button type="button" class="fx-btn ripple-btn color-dark" data-bs-dismiss="modal">Close</button>
                                    <button class="btn-prev fx-btn ripple-btn color-warning d-none">Previous</button>
                                    <button class="btn-next fx-btn ripple-btn color-info">Next</button>`);
    var modalFooter = $("#addSchoolhead").find(".modal-footer");

    modalFooter.html(`<button type="button" class="fx-btn ripple-btn color-dark" data-bs-dismiss="modal">Close</button>
                                    <button class="btn-prev fx-btn ripple-btn color-warning d-none">Previous</button>
                                    <button class="btn-next fx-btn ripple-btn color-info">Next</button>`);
    // Show the modal
    // myModal.show();

    // Add employee js

    const prevBtns = document.querySelectorAll(".btn-prev");
    const nextBtns = document.querySelectorAll(".btn-next");
    const progress = document.getElementById("progress");
    const formSteps = document.querySelectorAll(".divcon");
    const progressSteps = document.querySelectorAll(".progress-step");

    let progressStep = parseInt(
        document.querySelector(".progressbar")?.getAttribute("data-step") || "0"
    );

    let formStepsNum = progressStep;

    document.addEventListener("click", function (event) {
        if (event.target.classList.contains("btn-next")) {
            formStepsNum++;
            console.log(formStepsNum);

            // const orgposForm = document.getElementById("empOrgPosInfo");

            if (formStepsNum === 1) {
                // var formData = new FormData(personalForm);
                let forms = document.querySelectorAll(".empPersonal");
                formTest(forms);
                showProgressBar();
                // setTimeout(function () {
                //     // dispFormData(formData);

                // nextFunctions(formStepsNum);
                // }, 1000);
            }
            if (formStepsNum === 2) {
                // var formData = new FormData(addressForm);
                let forms = document.querySelectorAll(".empAddress");
                formTest(forms);
                showProgressBar();
            }
            if (formStepsNum === 3) {
                let forms = document.querySelectorAll(".empContact");
                formTest(forms);
                showProgressBar();
            }
        }
    });
    const formTest = (forms) => {
        forms.forEach(function (thisForm) {
            let action = thisForm.getAttribute("action");

            if (!action) {
                displayError("The form action property is not set!");
                return;
            }

            let formData = new FormData(thisForm);

            employee_check_submit(thisForm, action, formData);
        });
    };
    const districtInput = document.getElementById("district");
    if (districtInput) {
        districtInput.addEventListener("change", function () {
            var businessCode = this.value;
            const departmentSelect = document.getElementById("school_name");

            if (departmentSelect) {
                var parentDiv = departmentSelect.parentElement; // Get the parent <div> element
                departmentSelect.innerHTML = "";
                let route = this.getAttribute("route");
                let route1 = this.getAttribute("route1");

                departmentSelect.disabled = true;
                parentDiv.classList.add("sel-unactive");
                parentDiv.classList.remove("sel-active");

                fetch(route, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json",
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                    body: JSON.stringify({ business_code: businessCode }),
                })
                    .then((response) => {
                        if (response.ok) {
                            return response.json();
                        } else {
                            throw {
                                response,
                                message: `${response.status} ${response.statusText} ${response.url}`,
                            };
                        }
                    })
                    .then((data) => {
                        if (data.length === 0) {
                            departmentSelect.disabled = true;
                            parentDiv.classList.add("sel-unactive");
                            parentDiv.classList.remove("sel-active");
                        } else {
                            data.forEach((department) => {
                                var option = document.createElement("option");
                                option.value = department.department_id;
                                option.text = department.department_name;
                                departmentSelect.appendChild(option);
                            });
                            departmentSelect.disabled = false;
                            parentDiv.classList.remove("sel-unactive");
                            parentDiv.classList.add("sel-active");
                        }
                    })
                    .catch((error) => {
                        console.log(error);
                        const errorMessage = parseErrorMessage(error.message);
                        displayError(errorMessage);
                    });

                fetch(route1, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json",
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                    body: JSON.stringify({ business_code: businessCode }),
                })
                    .then((response) => {
                        if (response.ok) {
                            return response.json();
                        } else {
                            throw {
                                response,
                                message: `${response.status} ${response.statusText} ${response.url}`,
                            };
                        }
                    })
                    .then((data) => {
                        let rm_sel = document.getElementById("reporting_m");
                        rm_sel.disabled = false;
                        var parentDiv = rm_sel.parentElement;
                        parentDiv.classList.remove("sel-unactive");
                        parentDiv.classList.add("sel-active");
                        rm_sel.innerHTML = "";
                        var option = document.createElement("option");
                        option.value = data.fname + " " + data.lname;
                        option.text = data.fname + " " + data.lname;
                        rm_sel.appendChild(option);
                    })
                    .catch((error) => {
                        handleCatchErrorInReportingManager(error);
                    });
            }

        });
    }
    // =============
    const businessNameInput = document.getElementById("businessName");
    if (businessNameInput) {
        businessNameInput.addEventListener("change", function () {
            var businessCode = this.value;
            const departmentSelect = document.getElementById("deptName");

            if (departmentSelect) {
                var parentDiv = departmentSelect.parentElement; // Get the parent <div> element
                departmentSelect.innerHTML = "";
                let route = this.getAttribute("route");
                let route1 = this.getAttribute("route1");

                departmentSelect.disabled = true;
                parentDiv.classList.add("sel-unactive");
                parentDiv.classList.remove("sel-active");

                fetch(route, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json",
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                    body: JSON.stringify({ business_code: businessCode }),
                })
                    .then((response) => {
                        if (response.ok) {
                            return response.json();
                        } else {
                            throw {
                                response,
                                message: `${response.status} ${response.statusText} ${response.url}`,
                            };
                        }
                    })
                    .then((data) => {
                        if (data.length === 0) {
                            departmentSelect.disabled = true;
                            parentDiv.classList.add("sel-unactive");
                            parentDiv.classList.remove("sel-active");
                        } else {
                            data.forEach((department) => {
                                var option = document.createElement("option");
                                option.value = department.department_id;
                                option.text = department.department_name;
                                departmentSelect.appendChild(option);
                            });
                            departmentSelect.disabled = false;
                            parentDiv.classList.remove("sel-unactive");
                            parentDiv.classList.add("sel-active");
                            selectRM(departmentSelect.options[0].value, route1);
                        }
                    })
                    .catch((error) => {
                        console.log(error);
                        const errorMessage = parseErrorMessage(error.message);
                        displayError(errorMessage);
                    });
            }

        });
    }
    const deptNameInput = document.getElementById("deptName");
    if (deptNameInput) {
        deptNameInput.addEventListener("change", function () {
            const selectedDeptId = this.value;
            const route = document
                .getElementById("businessName")
                .getAttribute("route1");
            selectRM(selectedDeptId, route);
        });
    }
    const selectRM = (val, route) => {
        fetch(route, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: JSON.stringify({ department_id: val }),
        })
            .then((response) => {
                if (response.ok) {
                    return response.json();
                } else {
                    throw {
                        response,
                        message: `${response.status} ${response.statusText} ${response.url}`,
                    };
                }
            })
            .then((data) => {
                let rm_sel = document.getElementById("reporting_m");
                rm_sel.disabled = false;
                var parentDiv = rm_sel.parentElement;
                parentDiv.classList.remove("sel-unactive");
                parentDiv.classList.add("sel-active");
                rm_sel.innerHTML = "";
                var option = document.createElement("option");
                option.value = data.fname + " " + data.lname;
                option.text = data.fname + " " + data.lname;
                rm_sel.appendChild(option);
            })
            .catch((error) => {
                handleCatchErrorInReportingManager(error);
            });
    };
    const handleCatchErrorInReportingManager = (error) => {
        const rm_sel = document.getElementById("reporting_m");
        rm_sel.disabled = true;
        const parentDiv = rm_sel.parentElement;
        parentDiv.classList.add("sel-unactive");
        parentDiv.classList.remove("sel-active");
        rm_sel.innerHTML = "";

        if (
            error.response &&
            error.response.headers
                .get("content-type")
                .includes("application/json")
        ) {
            error.response.json().then((json) => {
                displayInfo(json.error);
            });
        } else {
            const errorMessage = parseErrorMessage(error.message);
            displayError(errorMessage);
        }
    };
    // Add Employee Final Step 4
    document.addEventListener("click", function (event) {
        if (event.target.classList.contains("submitEmployee")) {
            var formData = new FormData(
                document.getElementById("empOrgPosInfo")
            );
            let forms = document.querySelectorAll(".empOrg");
            formTest(forms);
            showProgressBar();
            // showProgressBar();
            // setTimeout(function () {
            //     hideProgressBar();
            // }, 1000);
            // dispFormData(formData);
        }
    });
    const employee_check_submit = (thisForm, action, formData) => {
        fetch(action, {
            method: "POST",
            body: formData,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => {
                thisForm.querySelectorAll("[name]").forEach((inputElement) => {
                    const fieldName = inputElement.getAttribute("name");
                    const parentDiv = inputElement.closest(".form-group");
                    if (parentDiv) {
                        parentDiv.classList.remove("input-error");
                        parentDiv.classList.add("input-success");
                    }
                });
                if (response.ok) {
                    return response.text();
                } else {
                    throw {
                        response,
                        message: `${response.status} ${response.statusText} ${response.url}`,
                    };
                }
            })
            .then((data) => {
                data = JSON.parse(data);
                console.log(data);
                if (data.form_number != 4 && data.status === "success") {
                    if (data.status === "success") {
                        nextFunctions(formStepsNum);
                        hideProgressBar();
                    } else {
                        throw new Error(
                            data
                                ? data
                                : "Form submission failed and no error message returned from: " +
                                action
                        );
                    }
                } else {
                    if (data.status === "success") {
                        saveNewEmployee();
                    } else {
                        throw new Error(
                            data
                                ? data
                                : "Form submission failed and no error message returned from: " +
                                action
                        );
                    }
                }
            })
            .catch((error) => {
                console.log(error);
                if (formStepsNum == 1) {
                    formStepsNum = 0;
                } else if (formStepsNum == 2) {
                    formStepsNum = 1;
                } else if (formStepsNum == 3) {
                    formStepsNum = 2;
                }
                const errorMessage = parseErrorMessage(error.message);
                displayError(errorMessage);

                if (
                    error.response &&
                    error.response.headers
                        .get("content-type")
                        .includes("application/json")
                ) {
                    error.response.json().then((json) => {
                        console.log(json);

                        let ms = 100;
                        const errorFields = Object.keys(json.errors);

                        // Loop through all input fields in the form
                        thisForm
                            .querySelectorAll("[name]")
                            .forEach((inputElement) => {
                                const fieldName =
                                    inputElement.getAttribute("name");

                                if (!errorFields.includes(fieldName)) {
                                    // Field is not in the error response, add input-success class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.remove(
                                            "input-error"
                                        );
                                        parentDiv.classList.add(
                                            "input-success"
                                        );
                                    }
                                } else {
                                    // Field is in the error response, add input-error class
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                            });

                        for (const fieldName in json.errors) {
                            if (json.errors.hasOwnProperty(fieldName)) {
                                const errorMessages = json.errors[fieldName];
                                const errorMessage = `${errorMessages.join(
                                    ", "
                                )}`;

                                if (ms != 100) {
                                    setTimeout(function () {
                                        displayInfo(errorMessage);
                                    }, ms);
                                } else {
                                    displayInfo(errorMessage);
                                }

                                const inputElement = thisForm.querySelector(
                                    `[name="${fieldName}"]`
                                );
                                if (inputElement) {
                                    const parentDiv =
                                        inputElement.closest(".form-group");
                                    if (parentDiv) {
                                        parentDiv.classList.add("input-error");
                                        parentDiv.classList.remove(
                                            "input-success"
                                        );
                                    }
                                }
                                ms += 100;
                            }
                        }
                        hideProgressBar();
                    });
                }
            });
        // .finally(() => {
        //     hideProgressBar();
        // });
    };
    const saveNewEmployee = () => {
        var formData = new FormData();
        var addEmployeeModal = ""
        if (document.getElementById("addEmployee")) {
            addEmployeeModal = document.getElementById("addEmployee");
        }
        if (document.getElementById("addPSDS")) {
            addEmployeeModal = document.getElementById("addPSDS");
        }
        if (document.getElementById("addSchoolhead")) {
            addEmployeeModal = document.getElementById("addSchoolhead");
        }
        var api_route = addEmployeeModal.getAttribute("route-save");
        var personalForms = document.querySelectorAll(".empPersonal");
        var fileInput = document.getElementById("profile_img");
        var file = fileInput.files[0];
        if (file) {
            formData.append("prof_img", file);
        }
        personalForms.forEach((form) => {
            Array.from(form.elements).forEach((element) => {
                if (element.name && element.type !== "file") {
                    formData.append(element.name, element.value);
                }
            });
        });

        var forms = [
            ...document.querySelectorAll(".empAddress"),
            ...document.querySelectorAll(".empContact"),
            ...document.querySelectorAll(".empOrg"),
        ];

        forms.forEach((form) => {
            if (form.querySelector('input[type="file"]') === fileInput) return;

            Array.from(form.elements).forEach((element) => {
                if (element.name) {
                    // Append element's name and value to formData
                    formData.append(element.name, element.value);
                }
            });
        });

        fetch(api_route, {
            method: "POST",
            body: formData,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then((data) => {
                if (data.status === "success") {
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: data.message,
                        showConfirmButton: false,
                        timer: 1500,
                    }).then((result) => {
                        if (
                            result.dismiss === Swal.DismissReason.timer ||
                            result.dismiss === Swal.DismissReason.close
                        ) {
                            hideProgressBar();
                            if (document.getElementById("addEmployee")) {
                                dataEmployeeReload()
                            }
                            if (document.getElementById("addPSDS")) {
                                dataPSDSReload()
                            }
                            if (document.getElementById("addSchoolhead")) {
                                dataSchoolHeadReload()
                            }
                        }
                    });

                    addEmployeeModal
                        .querySelectorAll("form")
                        .forEach((form) => form.reset());

                    addEmployeeModal
                        .querySelectorAll(".form-group")
                        .forEach((group) => {
                            group.classList.remove(
                                "input-success",
                                "input-error"
                            );
                            if (group.classList.contains("sel-active")) {
                                group.classList.remove("sel-active");
                                group.classList.add("sel-unactive");
                            }

                            // Handle select elements
                            const selectElement = group.querySelector("select");
                            if (selectElement) {
                                // Disable select elements if not region
                                if (
                                    selectElement.name == "province" &&
                                    selectElement.name == "city" &&
                                    selectElement.name == "barangay"
                                ) {
                                    selectElement.disabled = true;
                                    selectElement.innerHTML = "";
                                } else if (selectElement.name === "region") {
                                    const parentDiv =
                                        selectElement.closest(".form-group");
                                    parentDiv.classList.add("sel-active");
                                }
                            }

                            // Handle textarea element
                            const textareaElement =
                                group.querySelector("textarea");
                            if (textareaElement) {
                                textareaElement.value = ""; // Clear textarea value
                            }
                        });

                    resetProgressBar();
                    formStepsNum = 0;
                    document
                        .querySelector(".progressbar")
                        .setAttribute("data-step", 0);
                    // Close the modal
                    var modal = bootstrap.Modal.getInstance(addEmployeeModal);
                    modal.hide();
                    hideProgressBar();
                    updateProgressbar();
                    nextFunctions(0);
                } else {
                    throw new Error(
                        data
                            ? data
                            : "Form submission failed and no error message returned from: " +
                            action
                    );
                }
            })
            .catch((error) => {
                const errorMessage = parseErrorMessage(error.message);
                displayError(errorMessage);
            });
    };
    // Reset progress bar
    const resetProgressBar = () => {
        // Remove active class from all progress steps
        let progressSteps = document.querySelectorAll(".progress-step");
        progressSteps.forEach((step) => {
            step.classList.remove("progress-step-active");
        });

        // Add active class to the first progress step
        progressSteps[0].classList.add("progress-step-active");

        // Update divcon classes
        let divcons = document.querySelectorAll(".odivcon .divcon");
        divcons.forEach((divcon, index) => {
            if (index === 0) {
                divcon.classList.remove("next");
                divcon.classList.add("current");
            } else {
                divcon.classList.remove("current");
                divcon.classList.add("next");
            }
        });
        // Find the modal footer element with id "addEmployee"
        var modalFooter = "";
        if (document.getElementById("addEmployee")) {
            modalFooter = document
                .getElementById("addEmployee")
                .querySelector(".modal-footer");
        }
        if (document.getElementById("addPSDS")) {
            modalFooter = document
                .getElementById("addPSDS")
                .querySelector(".modal-footer");
        }
        if (document.getElementById("addSchoolhead")) {
            modalFooter = document
                .getElementById("addSchoolhead")
                .querySelector(".modal-footer");
        }
        // Check if modalFooter is not null or undefined before setting HTML content
        if (modalFooter) {
            modalFooter.innerHTML = `<button type="button" class="fx-btn ripple-btn color-dark" data-bs-dismiss="modal">Close</button>
            <button class="btn-prev fx-btn ripple-btn color-warning d-none">Previous</button>
            <button class="btn-next fx-btn ripple-btn color-info">Next</button>`;
        }


    };
    const parseErrorMessage = (errorMessage) => {
        // Assuming the error message format is consistent, you can parse out the link
        const linkIndex = errorMessage.indexOf("http");
        if (linkIndex !== -1) {
            return errorMessage.substring(0, linkIndex).trim();
        } else {
            return errorMessage;
        }
    };
    const displayError = (error) => {
        toastAlert(error, "error", "error");
    };
    const displayInfo = (info) => {
        toastAlert(info, "info", "info");
    };
    const nextFunctions = (step) => {
        if (step !== 4) {
            updtBtn(step);
            nextBtn(step);
            updateProgressbar();
            document
                .querySelector(".progressbar")
                .setAttribute("data-step", step);
        }
    };

    const dispFormData = (formData) => {
        for (const pair of formData.entries()) {
            console.log(pair[0] + ": " + pair[1]);
        }
    };

    prevBtns.forEach(function (btn) {
        btn.addEventListener("click", function () {
            if (formStepsNum !== 0) {
                formStepsNum--;
                updtBtn(formStepsNum);
                prevBtn(formStepsNum);
                updateProgressbar();
                document
                    .querySelector(".progressbar")
                    .setAttribute("data-step", formStepsNum);
            }
        });
    });

    const prevBtn = (step) => {
        formSteps[step].classList.add("current");
        formSteps[step + 1].classList.add("next");
        formSteps[step].classList.remove("next");
        formSteps[step + 1].classList.remove("current");
    };

    const nextBtn = (step) => {
        formSteps.forEach(function (stepElement) {
            stepElement.classList.remove("current");
        });
        formSteps[step].classList.add("current");
        formSteps[step].classList.remove("next");
    };

    const updateProgressbar = () => {
        progressSteps.forEach(function (step, idx) {
            if (idx < formStepsNum + 1) {
                step.classList.add("progress-step-active");
            } else {
                step.classList.remove("progress-step-active");
            }
        });

        const progressActive = document.querySelectorAll(
            ".progress-step-active"
        );
        progress.style.width =
            ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 +
            "%";
        progress.style.backgroundColor = "#68bfa0";
    };

    const updtBtn = (step) => {
        const prevBtn = document.querySelector(".btn-prev");
        const nextBtn = document.querySelector(".btn-next");

        if (step > 0) {
            prevBtn.classList.remove("d-none");
        } else {
            prevBtn.classList.add("d-none");
        }

        if (step === 3) {
            nextBtn.classList.remove("color-info", "btn-next");
            nextBtn.classList.add("color-success", "submitEmployee");
            if (typeof addPSDS !== "undefined" && addPSDS) {
                nextBtn.textContent = "Submit New PSDS";
            } else if (typeof addSchoolhead !== "undefined" && addSchoolhead) {
                nextBtn.textContent = "Submit New School Head";
            } else {
                nextBtn.textContent = "Submit New Employee";
            }

        } else {
            nextBtns.forEach(function (btn) {
                btn.classList.add("color-info", "btn-next");
            });

            nextBtns.forEach(function (btn) {
                btn.classList.remove("color-success", "submitEmployee");
                btn.textContent = "Next";
            });
        }
    };

    const showProgressBar = () => {
        $(".bar").removeClass("d-none");
        $(".gray").removeClass("d-none");
        const modal = document.querySelector(".modal.show");
        if (modal) {
            const saveButton = Array.from(
                modal.querySelectorAll(".modal-footer button")
            ).find(
                (button) =>
                    button.textContent.includes("Save") ||
                    button.textContent.includes("Next") ||
                    button.textContent.includes("Submit")
            );
            if (saveButton) {
                const spinner = document.createElement("div");
                spinner.classList.add(
                    "ms-1",
                    "spinner-border",
                    "spinner-border-sm"
                );
                spinner.setAttribute("role", "status");
                const spinnerText = document.createElement("span");
                spinnerText.classList.add("visually-hidden");
                spinnerText.innerText = "Loading...";
                spinner.appendChild(spinnerText);
                saveButton.appendChild(spinner);
                saveButton.disabled = true;
                saveButton.classList.add("disabled");
            }
        }
    };

    const hideProgressBar = () => {
        $(".bar").addClass("d-none");
        $(".gray").addClass("d-none");
        const modal = document.querySelector(".modal.show");
        if (modal) {
            const saveButton = Array.from(
                modal.querySelectorAll(".modal-footer button")
            ).find(
                (button) =>
                    button.textContent.includes("Save") ||
                    button.textContent.includes("Next") ||
                    button.textContent.includes("Submit")
            );
            if (saveButton) {
                const spinner = saveButton.querySelector(".spinner-border");
                if (spinner) {
                    spinner.remove();
                }
                saveButton.disabled = false;
                saveButton.classList.remove("disabled");
            }
        }
    };

    const toastAlert = (msg, icon, variant, header) => {
        customElements.whenDefined("pop-notify").then(() => {
            function popNotify() {
                return customElements.get("pop-notify");
            }

            popNotify().configure({
                iconTransformer: (icon) => {
                    return `<span class="material-symbols-outlined">${icon}</span>`;
                },
                placement: "bottom-left",
            });

            const options = {
                variant: variant,
                icon: icon,
            };

            if (header) {
                options.header = header;
            }

            popNotify().notify(msg, options);
        });
    };

    const popNotify = () => {
        return customElements.get("pop-notify");
    };

    if (popNotify()) {
        popNotify().configure({
            iconTransformer: function (icon) {
                return (
                    '<span class="material-symbols-outlined">' +
                    icon +
                    "</span>"
                );
            },
            placement: "bottom-right",
        });

        const options = {
            variant: variant,
            icon: icon,
        };

        if (header) {
            options.header = header;
        }

        popNotify().notify(msg, options);
    }
    function adjustLayout() {
        var topInformationList = document.querySelectorAll(".top-information");
        var bottomInformationList = document.querySelectorAll(
            ".bottom-information"
        );

        topInformationList.forEach(function (element) {
            if (window.innerWidth <= 991) {
                // Remove row class and change justify-content
                element.classList.remove("row");
            } else {
                // Add row class
                element.classList.add("row");
            }
        });

        bottomInformationList.forEach(function (element) {
            if (window.innerWidth <= 991) {
                // Change justify-content
                element.classList.remove("justify-content-between");
                element.classList.add("justify-content-center");
            } else {
                // Revert justify-content
                element.classList.add("justify-content-between");
                element.classList.remove("justify-content-center");
            }
        });
    }

    adjustLayout();
    window.addEventListener("resize", adjustLayout);
    const business_NameInput = document.getElementById("business_select");
    if (business_NameInput) {
        business_NameInput.addEventListener("change", function () {
            var businessCode = this.value;
            const departmentSelect = document.getElementById("dept_Name");

            if (departmentSelect) {
                var parentDiv = departmentSelect.parentElement;
                departmentSelect.innerHTML = "";
                let route = this.getAttribute("route");

                departmentSelect.disabled = true;

                fetch(route, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json",
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                    body: JSON.stringify({ business_code: businessCode }),
                })
                    .then((response) => {
                        if (response.ok) {
                            return response.json();
                        } else {
                            throw {
                                response,
                                message: `${response.status} ${response.statusText} ${response.url}`,
                            };
                        }
                    })
                    .then((data) => {
                        if (data.departments.length === 0) {
                            departmentSelect.disabled = true;
                        } else {
                            data.departments.forEach((department) => {
                                var option = document.createElement("option");
                                option.value = department.department_id;
                                option.text = department.department_name;

                                if (department.department_id === data.deptid) {
                                    option.selected = true;
                                }

                                departmentSelect.appendChild(option);
                            });
                            departmentSelect.disabled = false;
                        }
                    })
                    .catch((error) => {
                        console.log(error);
                        const errorMessage = parseErrorMessage(error.message);
                        displayError(errorMessage);
                    });
            }
        });
    }

})();

addDepedDomain = (event) => {
    const inputField = event.target;
    let inputValue = inputField.value.trim();

    // Check if "@deped.gov.ph" is already present, if not, add it at the end
    if (!inputValue.endsWith("@deped.gov.ph")) {
        inputValue =
            inputValue.replace(/@deped\.gov\.ph/g, "") + "@deped.gov.ph";
    }

    // Save the current cursor position
    const cursorPosition = inputField.selectionStart;

    inputField.value = inputValue;

    // Restore the cursor position if there's already input
    if (inputValue.length > 0) {
        inputField.selectionStart = inputField.selectionEnd = cursorPosition;
    }
};

// Spinner
document.addEventListener("click", function (event) {
    if (event.target.classList.contains("editBusiness")) {
        event.stopPropagation(); // Prevent dropdown from closing

        // Show spinner
        const spinner = event.target.classList.contains("editBusiness")
            ? document.querySelector(".edit-spinner")
            : document.querySelector(".delete-spinner");
        spinner.classList.remove("d-none");
    }
});
