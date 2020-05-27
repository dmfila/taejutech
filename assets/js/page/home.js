$(function () {
  $("#banner-slider").owlCarousel({
    margin: 0,
    items: 1,
    nav: false,
    dots: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    stagePadding: 0,
    smartSpeed: 450,
    touchDrag: false,
    mouseDrag: false,
    autoWidth: false,
    center: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
  });
  $("#testimonial-slider").owlCarousel({
    loop: true,
    autoplay: true,
    center: true,
    // nav: false,
    pagination: true,
    navigation: false,
    autoplayTimeout: 5000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      550: {
        items: 1,
        nav: true
      },
      768: {
        items: 1,
        nav: true,
        loop: true
      }
    }
  });

  new WOW().init();

  $('.reset').click(function () {
    new WOW().init();
  });

  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function (e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {

        var scrollto = target.offset().top;

        if ($('#header').css('position') === 'fixed' && $('#header').length) {
          scrollto -= $('#header').outerHeight();
        }

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  $('#startnow').click(function () {
    const fname = $("#form-start-fname").val();
    const lname = $("#form-start-lname").val();
    const email = $("#form-start-email").val();
    const phone = $("#form-start-phone").val();

    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (fname == "" || email == "" || !re.test(String(email).toLowerCase())) {
      return true;
    } else {
      $.ajax({
        url: base_url + "api/crm",
        data: {
          mode: "insert",
          fname: fname,
          lname: lname,
          phone: phone,
          email: email,
        },
        dataType: "json",
        async: !1,
        success: function (ret) {
          if ("success" === ret.status) {
            window.location.href = redirect_url_landing + "step=1&fname=" + fname + "&lname=" + lname + "&email=" + email + "&phone=" + phone + "&crmId=123";
          } else {

          }
        }
      });

      return false;
    }
  });
});

function get_start() {
  $('#getstarted').modal('show');
}