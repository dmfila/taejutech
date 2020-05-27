var App = function() {
    function handleBootstrap() {
        jQuery('.carousel').carousel({
            interval: 15000,
            pause: 'hover'
        });
        jQuery('.tooltips').tooltip();
        jQuery('.tooltips-show').tooltip('show');
        jQuery('.tooltips-hide').tooltip('hide');
        jQuery('.tooltips-toggle').tooltip('toggle');
        jQuery('.tooltips-destroy').tooltip('destroy');
        jQuery('.popovers').popover();
        jQuery('.popovers-show').popover('show');
        jQuery('.popovers-hide').popover('hide');
        jQuery('.popovers-toggle').popover('toggle');
        jQuery('.popovers-destroy').popover('destroy');
    }
    var handleFullscreen = function() {
        var WindowHeight = $(window).height();
        if ($(document.body).hasClass("promo-padding-top")) {
            HeaderHeight = $(".header").height();
        } else {
            HeaderHeight = 0;
        }
        $(".fullheight").css("height", WindowHeight - HeaderHeight);
        $(window).resize(function() {
            var WindowHeight = $(window).height();
            $(".fullheight").css("height", WindowHeight - HeaderHeight);
        });
    }

    function handleLangs() {
        $(".lang-block").click(function() {
            console.log("click!");
        });
    }
    var handleValignMiddle = function() {
        $(".valign__middle").each(function() {
            $(this).css("padding-top", $(this).parent().height() / 2 - $(this).height() / 2);
        });
        $(window).resize(function() {
            $(".valign__middle").each(function() {
                $(this).css("padding-top", $(this).parent().height() / 2 - $(this).height() / 2);
            });
        });
    }

    function handleHeader() {
        if ($('.navbar').offset().top > 150) {
            $('.navbar-fixed-top').addClass('top-nav-collapse');
        }
        $(window).scroll(function() {
            if ($('.navbar').offset().top > 150) {
                $('.navbar-fixed-top').addClass('top-nav-collapse');
            } else {
                $('.navbar-fixed-top').removeClass('top-nav-collapse');
            }
        });
        var $offset = 0;
        $offset = $(".navbar-fixed-top").height() + 12;
        $('.page-scroll a').bind('click', function(event) {
            var $position = $($(this).attr('href')).offset().top;
            $('html, body').stop().animate({
                scrollTop: $position - $offset
            }, 600);
            event.preventDefault();
        });
        var $scrollspy = $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: $offset + 2
        });
        $(window).scroll(function() {
            $('.navbar-collapse.in').collapse('hide');
        });
    }
    return {
        init: function() {
            handleHeader();
            handleBootstrap();
            handleFullscreen();
            handleValignMiddle();
        },
        initCounter: function() {
            jQuery('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        },
        initParallaxBg: function() {
            $(window).load(function() {
                jQuery('.parallaxBg').parallax("50%", 0.4);
                jQuery('.parallaxBg1').parallax("50%", 0.2);
            });
        },
        initParallaxBg2: function() {
            $(window).load(function() {
                jQuery('.parallaxBg').parallax("50%", "50%");
            });
        },
    };
}();