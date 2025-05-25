var h_pc = 170;
var h_sp = 100;
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

function triggerSlitAnimation() {
        const slits = document.querySelectorAll('.slit');
        slits.forEach((slit, index) => {
            slit.style.transform = "scaleY(0)";
            setTimeout(() => {
                slit.style.transform = "scaleY(1)";
            }, index * 50);
        });
    }
function reverseSlitAnimation() {

    const slits = document.querySelectorAll('.slit');
    slits.forEach((slit, index) => {

        setTimeout(() => {
            slit.style.transform = "scaleY(0)";
        }, index * 50);
        
    });
    setTimeout(function(){
        $(".transition_firts").addClass("none");
    },150);
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
function Calendar() {
        if ($('#post_calendar').length) {
            let el = $('#post_calendar');
            el.zabuto_calendar({
                language: 'jp',
                events: eventData
            });
            
            el.on('zabuto:calendar:day', function(e) {
                let val = e.value.replaceAll("-", "/");
                location.href=URL+"/"+post_type+"/"+val;
            });
        }
    }
$(window).bind('load', function() {
    "use strict";

    triggerSlitAnimation();
    setTimeout(function(){reverseSlitAnimation()},2000);

    setTimeout(function() {
        new WOW({ offset: 100, callback: afterReveal }).init();
        $(".fancy_title").lettering();
    }, 2500);
    loadContact();
    // anchor in page
    function scroll_animate(position) {
        if ($(window).width() > 750) {
            $('html,body').animate({ scrollTop: position.top - h_pc }, 400);
        } else {
            $('html,body').animate({ scrollTop: position.top - h_sp }, 400);
        }
    }

    $(function() {
        $('a[href^="#"]').click(function() {
            if ($($(this).attr('href')).length) {
                var p = $($(this).attr('href')).offset();
                scroll_animate(p);
            }
            return false;
        });
    });

    // anchor top page #
    var hash = location.hash;
    if (hash) {
        var p = $(hash).offset();
        scroll_animate(p);
    }
    if ($('[name="your-title"]').length) {
        if ($('[name="your-title"]').val() === "") {
            var title = $('.event_title').text();
            setTimeout(function() {
                $('[name="your-title"]').val(title);
                $('.event_ttl').text(title);
            }, 500);
        }
    }

    var iframes = $('iframe[data-src]');
    if (iframes.length) {
        var iframeOffsetTop = iframes.offset().top;
        var windowHeight = $(window).outerHeight();

        function loadIframes() {
            iframes.each(function() {
                $(this).attr('src', $(this).data('src')).removeAttr('data-src');
            });
            $(window).unbind('scroll load', checkAndLoadIframes);
        }

        function checkAndLoadIframes() {
            if ($(this).scrollTop() > iframeOffsetTop - windowHeight) {
                loadIframes();
            }
        }

        $(window).bind('scroll load', checkAndLoadIframes);
    }

});

$(window).bind('load scroll', function() {
    "use strict";
    if ($(this).scrollTop() >= 500) {
        $('.to_top,.sp_contact').addClass('show');
    } else {
        $('.to_top,.sp_contact').removeClass('show');
    }
});

$(document).ready(function() {
    "use strict";
    var windowWidth = $(window).width();
    Calendar();
    // nav
    $(".hamburger").click(function() {
        $(this).toggleClass("is_active");
        $("nav").fadeToggle(100);
        if ($(window).width() <= 750) {
            if (!$(".loading").hasClass("active")) {
                $(".loading").addClass("active");
            } else {
                $(".loading").removeClass("active");
            }
            if (!$(".loading").hasClass("show_menu")) {
                $(".loading,.h_box,body").addClass("show_menu");
            } else {
                $(".loading,.h_box,body").removeClass("show_menu");
            }
        }

    });

    $("nav ul li a[href]").click(function() {
        $('.hamburger').removeClass('is_active');
        $('nav').hide();
        $(".loading").removeClass("active");
        $(".loading,body").removeClass("show_menu");
    });

    // back to top
    $('.to_top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 600);
    });

    /*================= JS CUSTOM ===================*/


    if ($('#form').length) {
        $('.btn_zipcode').click(function() {
            AjaxZip3.zip2addr('your-zipcode', '', 'your-country', 'your-ward')
        })
    }

    // JS ONLY PAGE SPECIAL
    if ($('.tool_sroll').length) {
        $(".tool_sroll .item_scroll").click(function() {
            if (!$(this).hasClass("active")) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
        });
    }
});
// document.addEventListener("DOMContentLoaded", function () {
//     setTimeout(function () {
//         document.getElementById("transition_firts").classList.add("none");
//     }, 0.005); 
// });