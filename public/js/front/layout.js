var Layout=function(){var e="layouts/layout3/img/",o="layouts/layout3/css/",t=App.getResponsiveBreakpoint("md"),n=function(){$(".page-header").on("click",".search-form",function(e){$(this).addClass("open"),$(this).find(".form-control").focus(),$(".page-header .search-form .form-control").on("blur",function(e){$(this).closest(".search-form").removeClass("open"),$(this).unbind("blur")})}),$(".page-header").on("keypress",".hor-menu .search-form .form-control",function(e){return 13==e.which?($(this).closest(".search-form").submit(),!1):void 0}),$(".page-header").on("mousedown",".search-form.open .submit",function(e){e.preventDefault(),e.stopPropagation(),$(this).closest(".search-form").submit()}),$("body").on("click",".page-header-top-fixed .page-header-top .menu-toggler",function(){App.scrollTop()})},a=function(){$(".page-header .menu-toggler").on("click",function(e){if(App.getViewPort().width<t){var o=$(".page-header .page-header-menu");o.is(":visible")?o.slideUp(300):o.slideDown(300),$("body").hasClass("page-header-top-fixed")&&App.scrollTop()}}),$(".hor-menu .menu-dropdown > a, .hor-menu .dropdown-submenu > a").on("click",function(e){App.getViewPort().width<t&&$(this).next().hasClass("dropdown-menu")&&(e.stopPropagation(),$(this).parent().hasClass("opened")?$(this).parent().removeClass("opened"):$(this).parent().addClass("opened"))}),App.getViewPort().width>=t&&$('.hor-menu [data-hover="megamenu-dropdown"]').not(".hover-initialized").each(function(){$(this).dropdownHover(),$(this).addClass("hover-initialized")}),$(document).on("click",'.hor-menu .menu-dropdown > a[data-hover="megamenu-dropdown"]',function(){App.getViewPort().width<t&&App.scrollTo($(this))}),$(".hor-menu li > a").on("click",function(e){App.getViewPort().width<t&&($(this).parent("li").hasClass("classic-menu-dropdown")||$(this).parent("li").hasClass("mega-menu-dropdown")||$(this).parent("li").hasClass("dropdown-submenu")||($(".page-header .page-header-menu").slideUp(300),App.scrollTop()))}),$(document).on("click",".mega-menu-dropdown .dropdown-menu, .classic-menu-dropdown .dropdown-menu",function(e){e.stopPropagation()}),$(window).scroll(function(){var e=75;$("body").hasClass("page-header-menu-fixed")&&($(window).scrollTop()>e?$(".page-header-menu").addClass("fixed"):$(".page-header-menu").removeClass("fixed")),$("body").hasClass("page-header-top-fixed")&&($(window).scrollTop()>e?$(".page-header-top").addClass("fixed"):$(".page-header-top").removeClass("fixed"))})},i=function(e,o){var t=location.hash.toLowerCase(),n=$(".hor-menu");"click"===e||"set"===e?o=$(o):"match"===e&&n.find("li > a").each(function(){var e=$(this).attr("href").toLowerCase();return e.length>1&&t.substr(1,e.length-1)==e.substr(1)?void(o=$(this)):void 0}),o&&0!=o.size()&&"javascript:;"!==o.attr("href").toLowerCase()&&"#"!==o.attr("href").toLowerCase()&&(n.find("li.active").removeClass("active"),n.find("li > a > .selected").remove(),n.find("li.open").removeClass("open"),o.parents("li").each(function(){$(this).addClass("active"),1===$(this).parent("ul.navbar-nav").size()&&$(this).find("> a").append('<span class="selected"></span>')}))},r=function(){var e=App.getViewPort().width,o=$(".page-header-menu");e>=t&&"desktop"!==o.data("breakpoint")?($('.hor-menu [data-toggle="dropdown"].active').removeClass("open"),o.data("breakpoint","desktop"),$('.hor-menu [data-hover="megamenu-dropdown"]').not(".hover-initialized").each(function(){$(this).dropdownHover(),$(this).addClass("hover-initialized")}),$(".hor-menu .navbar-nav li.open").removeClass("open"),$(".page-header-menu").css("display","block")):t>e&&"mobile"!==o.data("breakpoint")&&($('.hor-menu [data-toggle="dropdown"].active').addClass("open"),o.data("breakpoint","mobile"),$('.hor-menu [data-hover="megamenu-dropdown"].hover-initialized').each(function(){$(this).unbind("hover"),$(this).parent().unbind("hover").find(".dropdown-submenu").each(function(){$(this).unbind("hover")}),$(this).removeClass("hover-initialized")}))},s=function(){var e;$("body").height()<App.getViewPort().height&&(e=App.getViewPort().height-$(".page-header").outerHeight()-($(".page-container").outerHeight()-$(".page-content").outerHeight())-$(".page-prefooter").outerHeight()-$(".page-footer").outerHeight(),$(".page-content").css("min-height",e))},d=function(){var e=100,o=500;navigator.userAgent.match(/iPhone|iPad|iPod/i)?$(window).bind("touchend touchcancel touchleave",function(t){$(this).scrollTop()>e?$(".scroll-to-top").fadeIn(o):$(".scroll-to-top").fadeOut(o)}):$(window).scroll(function(){$(this).scrollTop()>e?$(".scroll-to-top").fadeIn(o):$(".scroll-to-top").fadeOut(o)}),$(".scroll-to-top").click(function(e){return e.preventDefault(),$("html, body").animate({scrollTop:0},o),!1})};return{initHeader:function(){n(),a(),App.addResizeHandler(r),App.isAngularJsApp()&&i("match")},initContent:function(){s()},initFooter:function(){d()},init:function(){this.initHeader(),this.initContent(),this.initFooter()},setMainMenuActiveLink:function(e,o){i(e,o)},closeMainMenu:function(){$(".hor-menu").find("li.open").removeClass("open"),App.getViewPort().width<t&&$(".page-header-menu").is(":visible")&&$(".page-header .menu-toggler").click()},getLayoutImgPath:function(){return App.getAssetsPath()+e},getLayoutCssPath:function(){return App.getAssetsPath()+o}}}();App.isAngularJsApp()===!1&&jQuery(document).ready(function(){Layout.init()});
var Demo=function(){var e=function(){var e=$(".theme-panel");1===$(".page-head > .container-fluid").size()?$(".theme-setting-layout",e).val("fluid"):$(".theme-setting-layout",e).val("boxed"),$(".top-menu li.dropdown.dropdown-dark").size()>0?$(".theme-setting-top-menu-style",e).val("dark"):$(".theme-setting-top-menu-style",e).val("light"),$("body").hasClass("page-header-top-fixed")?$(".theme-setting-top-menu-mode",e).val("fixed"):$(".theme-setting-top-menu-mode",e).val("not-fixed"),$(".hor-menu.hor-menu-light").size()>0?$(".theme-setting-mega-menu-style",e).val("light"):$(".theme-setting-mega-menu-style",e).val("dark"),$("body").hasClass("page-header-menu-fixed")?$(".theme-setting-mega-menu-mode",e).val("fixed"):$(".theme-setting-mega-menu-mode",e).val("not-fixed");var t=function(){$("body").removeClass("page-header-top-fixed").removeClass("page-header-menu-fixed"),$(".page-header-top > .container-fluid").removeClass("container-fluid").addClass("container"),$(".page-header-menu > .container-fluid").removeClass("container-fluid").addClass("container"),$(".page-head > .container-fluid").removeClass("container-fluid").addClass("container"),$(".page-content > .container-fluid").removeClass("container-fluid").addClass("container"),$(".page-prefooter > .container-fluid").removeClass("container-fluid").addClass("container"),$(".page-footer > .container-fluid").removeClass("container-fluid").addClass("container")},a=function(){var a=$(".theme-setting-layout",e).val(),n=$(".theme-setting-top-menu-style",e).val(),o=$(".theme-setting-top-menu-mode",e).val(),i=$(".theme-setting-mega-menu-style",e).val(),s=$(".theme-setting-mega-menu-mode",e).val();t(),"fluid"===a&&($(".page-header-top > .container").removeClass("container").addClass("container-fluid"),$(".page-header-menu > .container").removeClass("container").addClass("container-fluid"),$(".page-head > .container").removeClass("container").addClass("container-fluid"),$(".page-content > .container").removeClass("container").addClass("container-fluid"),$(".page-prefooter > .container").removeClass("container").addClass("container-fluid"),$(".page-footer > .container").removeClass("container").addClass("container-fluid")),"dark"===n?$(".top-menu > .navbar-nav > li.dropdown").addClass("dropdown-dark"):$(".top-menu > .navbar-nav > li.dropdown").removeClass("dropdown-dark"),"fixed"===o?$("body").addClass("page-header-top-fixed"):$("body").removeClass("page-header-top-fixed"),"light"===i?$(".hor-menu").addClass("hor-menu-light"):$(".hor-menu").removeClass("hor-menu-light"),"fixed"===s?$("body").addClass("page-header-menu-fixed"):$("body").removeClass("page-header-menu-fixed")},n=function(e){var t=App.isRTL()?e+"-rtl":e;$("#style_color").attr("href",Layout.getLayoutCssPath()+"themes/"+t+".min.css"),$(".page-logo img").attr("src",Layout.getLayoutImgPath()+"logo-"+e+".png")};$(".theme-colors > li",e).click(function(){var t=$(this).attr("data-theme");n(t),$(".theme-colors > li",e).removeClass("active"),$(this).addClass("active")}),$(".theme-setting-top-menu-mode",e).change(function(){var t=$(".theme-setting-top-menu-mode",e).val(),a=$(".theme-setting-mega-menu-mode",e).val();"fixed"===a&&(alert("The top menu and mega menu can not be fixed at the same time."),$(".theme-setting-mega-menu-mode",e).val("not-fixed"),t="not-fixed")}),$(".theme-setting-mega-menu-mode",e).change(function(){var t=$(".theme-setting-top-menu-mode",e).val();$(".theme-setting-mega-menu-mode",e).val();"fixed"===t&&(alert("The top menu and mega menu can not be fixed at the same time."),$(".theme-setting-top-menu-mode",e).val("not-fixed"),t="not-fixed")}),$(".theme-setting",e).change(a)},t=function(e){var t="rounded"===e?"components-rounded":"components";t=App.isRTL()?t+"-rtl":t,$("#style_components").attr("href",App.getGlobalCssPath()+t+".min.css"),"undefined"!=typeof Cookies&&Cookies.set("layout-style-option",e)};return{init:function(){e(),$(".theme-panel .theme-setting-style").change(function(){t($(this).val())}),"undefined"!=typeof Cookies&&"rounded"===Cookies.get("layout-style-option")&&(t(Cookies.get("layout-style-option")),$(".theme-panel .layout-style-option").val(Cookies.get("layout-style-option")))}}}();App.isAngularJsApp()===!1&&jQuery(document).ready(function(){Demo.init()});
//# sourceMappingURL=layout.js.map
