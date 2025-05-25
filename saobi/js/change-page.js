document.addEventListener("DOMContentLoaded", function() {
    const swup = new Swup();

    firstLoadAnimation();
    Calendar("");
    loadContact();
    swup.hooks.on('animation:out:start', (visit) => {
        triggerSlitAnimation();
        sessionStorage.setItem("sessionURL", visit.to.url);
        const sessionURL = sessionStorage.getItem("sessionURL");
        Calendar(sessionURL);
    });

    function triggerSlitAnimation() {
        const slits = document.querySelectorAll('.slit');
        slits.forEach((slit, index) => {
            slit.style.transform = "scaleY(0)";
            setTimeout(() => {
                slit.style.transform = "scaleY(1)";
            }, index * 50);
        });
    }

    function Calendar($url="") {
        if ($('#post_calendar').length) {
            let el = $('#post_calendar');
            el.zabuto_calendar({
                language: 'jp',
                events: eventData
            });
           el.on('zabuto:calendar:destroy', function(e) {});
            
            el.on('zabuto:calendar:day', function(e) {
                let val = e.value.replaceAll("-", "/");
                const sessionURL = sessionStorage.getItem("sessionURL");
                window.location.href="https://www.sa-obi.net/"+($url ? $url:sessionURL)+"/"+val;
            });
        }
    }
    function afterReveal(el) {
        el.addEventListener('animationstart', function() {
            $(el).addClass('anim');
        });

        if (el.classList.contains('fancy_title')) {
            el.addEventListener('animationstart', function() {
                $delay = 0;
                $(el).find('span[class^="char"]').each(function() {
                    $delay += 0.08;
                    $(this).addClass('anim').css('transition-delay', $delay + 's');
                });
            });
        }
    }

    function loadContact() {
        if ($('#fmail_form').length) {
            document.addEventListener('wpcf7invalid', function(event) {
                var p = $('#fmail_form').offset();
                if ($(window).width() > 750) {
                    $('html,body').animate({
                        scrollTop: p.top - 100
                    }, 400);
                } else {
                    $('html,body').animate({
                        scrollTop: p.top - 80
                    }, 400);
                }
            }, false);

            var queryString = window.location.search;
            var urlParams = new URLSearchParams(queryString);
            var from = urlParams.get('form');

            $(".form_btn input").click(function() {
                var oldURL = window.location.href;
                var type = "back";
                if (from != "back") {
                    if (history.pushState) {
                        var newUrl = oldURL + "?form=" + type;
                        window.history.pushState({
                            path: newUrl
                        }, '', newUrl);
                        from = "back"
                    }
                }
            });

            if (from == "back") {
                var p = $('#fmail_form').offset();
                if ($(window).width() > 750) {
                    $('html,body').animate({
                        scrollTop: p.top - 100
                    }, 400);
                } else {
                    $('html,body').animate({
                        scrollTop: p.top - 80
                    }, 400);
                }
            }


        }
    }

    swup.hooks.on('page:view', (visit) => {
        sessionStorage.setItem("sessionURL", visit.to.url);
        const sessionURL = sessionStorage.getItem("sessionURL");
        Calendar(sessionURL);
        loadContact();
        CallBackCLickTop();
        // if(visit.to.url=="/enjoy-project/form/"){
            
        //     $(".to_top").css({"bottom":"85px"});
        //     $(".grecaptcha-badge").css({"opacity":"1"});
        // }
    });

    // CHANGE PAGE BY NAV
    
    function CallBackCLickTop(){

        let data = sessionStorage.getItem("items");
        if (data) {
            let itemsArray = data ? JSON.parse(data) : [];
            itemsArray.forEach(function(item) {
                $(".item_main .it" + item).addClass("active_read");
            });
        }
        $("nav ul li a[href]").click(function() {
            $(".h_box").removeClass("show_menu");
        });
        if ($('[name="your-title"]').length) {
            if ($('[name="your-title"]').val() === "") {
                var title = $('.event_title').text();
                setTimeout(function() {
                    $('[name="your-title"]').val(title);
                    $('.event_ttl').text(title);
                }, 500);
            }
        }
        if($(".item_main .item a").length || $(".map_svg a").length || $(".intro .btn-intro").length || $(".closes_sp").length || $(".closes_pc").length || $(".header_video .close_video").length || $(".fancybox").length || $(".email_click").length || $(".item_main .ct_renovation").length){


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
        }
    }
let isIt1 = false; // Biến toàn cục để lưu trạng thái click

// Click vào .it1 -> Lưu trạng thái
$(document).on("click", ".nav_list .it1", function() {
    document.documentElement.classList.add('swup-transition-running');
    isIt1 = true;
});

// Click vào .it2, .it3 hoặc bất kỳ li nào khác .it1 -> Lưu trạng thái
$(document).on("click", ".nav_list li:not(.it1)", function() {
    document.documentElement.classList.add('swup-transition-running');
    isIt1 = false;
});

swup.hooks.on('content:replace', (visit) => {
    sessionStorage.setItem("sessionURL", visit.to.url);
    const sessionURL = sessionStorage.getItem("sessionURL");
    Calendar(sessionURL);
    loadContact();
    setTimeout(function() {
        new WOW({ offset: 100, callback: afterReveal }).init();
        $(".fancy_title").lettering();
    }, 800);
    document.documentElement.classList.add('swup-transition-running');

    setTimeout(() => {
        document.documentElement.classList.remove('swup-transition-running');
        reverseSlitAnimation();

        // Nếu vừa về index bằng .it1, thì removeUnder() -> reset trạng thái về false
        if (isIt1) {
            removeUnder();
            isIt1 = false; // Reset trạng thái về mặc định
        } else {
            addUnder(); // Nếu không phải .it1 thì addUnder()
        }
    }, 800);

   
    $("nav ul li a[href]").click(function() {
       $(".h_box").removeClass("show_menu");
    });
});

function removeUnder() {
    $("body").removeClass("under");
    $("main").attr("id", 'index');
    $(".loading").addClass("show");
    $(".intro").removeClass("active");
}

function addUnder() {
    $("body").addClass("under");
    $("main").attr("id", '');

    

}





    // END CHANGE PAGE 


function reverseSlitAnimation() {

    const slits = document.querySelectorAll('.slit');
    slits.forEach((slit, index) => {
        setTimeout(() => {
            slit.style.transform = "scaleY(0)";
        }, index * 50);
    });
}

function firstLoadAnimation() {

    const slits = document.querySelectorAll('.slit');

    slits.forEach((slit, index) => {
        setTimeout(() => {
            slit.style.transform = "scaleY(1)";
        }, index * 50);
    });

    setTimeout(() => {
        reverseSlitAnimation();
    }, 1200);
    Calendar($url="");
    loadContact();

    $("nav ul li a[href]").click(function() {
       $(".h_box").removeClass("show_menu");
    });
}
});
