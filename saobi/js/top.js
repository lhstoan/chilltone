$(document).ready(function() {
    if ($(".intro").hasClass("active")) {
        $("body").addClass("active");
    } else {
        $("body").removeClass("active");
    }

    $(".fancybox").click(function() {
        $(".popup_big,.img_svg").removeClass("active");
        let popup = $(this).data("popup");
        let id = $(this).data("id");
        if (popup == "popup_small_6") {
            $(".loading,body").addClass("active");
            $(".popup_small_6").removeClass("active");
            $("#" + popup).addClass("active");
            $(".popup_medium_" + id).addClass("active");

        } else {
            if (!$(this).hasClass("active")) {
                $(this).addClass("active");
                $("#" + popup).addClass("active");
                $(".popup_medium_" + id).addClass("active");
            } else {

                $(this).removeClass("active");
                $("#" + popup).removeClass("active");
                $(".popup_medium_" + id).removeClass("active");
            }
        }
        return false;
    });
    
    $(".email_click").click(function() {
        let id = $(this).data("id");
        if (!$(this).closest(".form_email").hasClass("active")) {
            $(this).closest(".form_email").addClass("active");
        } else {
            $(this).closest(".form_email").removeClass("active");
        }
        return false;
    });
    
    $(".item_main .ct_renovation").click(function() {
        if (!$(this).hasClass("active")) {
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
        return false;
    });

    $(".item_main .item a").click(function() {
        $(".popup_medium,.img_svg,.popup_big,.item_main .item").removeClass("active");
        let popup = $(this).data("popup");
        let id = $(this).data("id");


        if (id) {
            let data = sessionStorage.getItem("items");
            let itemsArray = data ? JSON.parse(data) : [];
            itemsArray.push(id);
            sessionStorage.setItem("items", JSON.stringify(itemsArray));

        }

        if ($(this).hasClass("active")) {
            $(this).removeClass('active');
            $(".it" + id).removeClass("active");
            $("#" + popup).removeClass("active");

        } else {
            $(this).addClass('active');
            $(".it" + id).addClass("active");
            $(".it" + id).addClass("active_read");
            $("#" + popup).addClass("active");
        }

        if (!$(".loading").hasClass("active_popup")) {
            $(".loading").addClass('active_popup');
        } else {
            $(".loading").removeClass('active_popup');
        }
        return false;

    });

    $(".map_svg a").click(function() {
        $(".popup_medium,.popup_big,.img_svg").removeClass("active");
        let popup = $(this).data("popup");
        let id = $(this).data("id");
        if ($(this).hasClass("active")) {
            $(this).removeClass('active');
            $(".img_svg" + id).removeClass("active");
        } else {
            $(this).addClass('active');
            $(".img_svg" + id).addClass("active");
        }
        return false;
    });

    $(".intro .btn-intro").click(function() {
        $(".loading,body,.intro").removeClass("active");
        $(".loading").addClass("show");
    });

    $(".closes_sp").click(function() {
        let id = $(this).data("id");
        $(".item_main .it" + id + " a").removeClass("active");
        $(".loading").removeClass("active_popup");
        $("#popup" + id).removeClass("active");
        $(".item_main .it" + id).removeClass("active");
    });

    $(".closes_pc").click(function() {
        let id = $(this).data("id");
        $(".item_main .it" + id + " a").removeClass("active");
        $(".popup_medium_" + id).removeClass("active");
        $(".popup_small_" + id).removeClass("active");
    });

    $(".header_video .close_video").click(function() {
        $("#popup_small_6,.loading,body,.popup_medium_6").removeClass("active");
        stopYouTube();
    });

    function stopYouTube() {
        var iframe = document.getElementById("popup_video");
        var src = iframe.src;
        iframe.src = "";
        iframe.src = src;
    }

});

$(window).bind('load', function() {
    "use strict";
    let data = sessionStorage.getItem("items");
    if (data) {
        let itemsArray = data ? JSON.parse(data) : [];
        itemsArray.forEach(function(item) {
            $(".item_main .it" + item).addClass("active_read");
        });
    }

});