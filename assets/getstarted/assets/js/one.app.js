var App = function() {
    $.fn.hasAttr = function(name) {
        return this.attr(name) !== undefined;
    };

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

    function handleEqualHeightColumns() {
        var EqualHeightColumns = function() {
            $('.equal-height-columns').each(function() {
                heights = [];
                $('.equal-height-column', this).each(function() {
                    $(this).removeAttr('style');
                    heights.push($(this).height());
                });
                $('.equal-height-column', this).height(Math.max.apply(Math, heights));
            });
        }
        EqualHeightColumns();
        $(window).resize(function() {
            EqualHeightColumns();
        });
        $(window).load(function() {
            EqualHeightColumns('img.equal-height-column');
        });
    }

    function handleEqualHeightColumns__Images() {
        var EqualHeightColumns__Images = function() {
            $('.equal-height-columns-v2').each(function() {
                var heights = [];
                $('.equal-height-column-v2', this).each(function() {
                    $(this).removeAttr('style');
                    heights.push($(this).height());
                });
                $('.equal-height-column-v2', this).height(Math.max.apply(Math, heights));
                $('.equal-height-column-v2', this).each(function() {
                    if ($(this).hasAttr('data-image-src')) {
                        $(this).css('background', 'url(' + $(this).attr('data-image-src') + ') no-repeat scroll 50% 0 / cover');
                    }
                });
            });
        }
        $('.equal-height-columns-v2').ready(function() {
            EqualHeightColumns__Images();
        });
        $(window).resize(function() {
            EqualHeightColumns__Images();
        });
    }
    var handleFullscreen = function() {
        var WindowHeight = $(window).height();
        var HeaderHeight = 0;
        if ($(document.body).hasClass('promo-padding-top')) {
            HeaderHeight = $('.header').height();
        } else {
            HeaderHeight = 0;
        }
        $('.fullheight').css('height', WindowHeight - HeaderHeight);
        $(window).resize(function() {
            var WindowHeight = $(window).height();
            $('.fullheight').css('height', WindowHeight - HeaderHeight);
        });
    }
    var handleValignMiddle = function() {
        $('.valign__middle').each(function() {
            $(this).css('padding-top', $(this).parent().height() / 2 - $(this).height() / 2);
        });
        $(window).resize(function() {
            $('.valign__middle').each(function() {
                $(this).css('padding-top', $(this).parent().height() / 2 - $(this).height() / 2);
            });
        });
    }

    function handleHeader() {
        var OffsetTop = $('.navbar').attr('data-offset-top');
        // if ($('.navbar').offset().top > OffsetTop) {
        //     $('.navbar-fixed-top').addClass('top-nav-collapse');
        // }
        $(window).scroll(function() {
            if ($('.navbar').offset().top > OffsetTop) {
                $('.navbar-fixed-top').addClass('top-nav-collapse');
            } else {
                $('.navbar-fixed-top').removeClass('top-nav-collapse');
            }
        });
        var $offset = 0;
        if ($('.one-page-nav-scrolling').hasClass('one-page-nav__fixed')) {
            $offset = $(".one-page-nav-scrolling").height() + 8;
        }
        $('.page-scroll a').bind('click', function(event) {
            var $position = $($(this).attr('href')).offset().top;
            $('html, body').stop().animate({
                scrollTop: $position - $offset
            }, 600);
            event.preventDefault();
        });
        var $scrollspy = $('body').scrollspy({
            target: '.one-page-nav-scrolling',
            offset: $offset + 2
        });
        $(window).scroll(function() {
            $('.navbar-collapse.in').collapse('hide');
        });
    }
    return {
        init: function() {
            handleBootstrap();
            handleEqualHeightColumns();
            handleEqualHeightColumns__Images();
            handleFullscreen();
            handleValignMiddle();
            handleHeader();
        },
        initCounter: function() {
            jQuery('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        },
        initParallaxBg: function() {
            $(window).load(function() {
                jQuery('.parallaxBg').parallax('50%', 0.4);
                jQuery('.parallaxBg1').parallax('50%', 0.2);
            });
        },
        initParallaxBg2: function() {
            $(window).load(function() {
                jQuery('.parallaxBg').parallax('50%', '50%');
            });
        },
    };
}();