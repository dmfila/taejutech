<!DOCTYPE html>
<html lang=en>

<head>
  <!--[if IE 8]><html lang=en class=ie8> <![endif]-->
  <!--[if IE 9]><html lang=en class=ie9> <![endif]-->
  <!--[if !IE]><!-->
  <!--<![endif]-->
  <title>App Ideas - Make An App - Mobile and Web Apps | BrainyApps</title>
  <meta charset=utf-8>
  <meta content="width=device-width,initial-scale=1" name=viewport>
  <meta
    content="Have an amazing app idea? We will make your Android, iPhone, or progressive web app. Native or cross-platform development. Based in USA. Start now!"
    name=description>
  <meta http-equiv="Cache-control" content="public">
  <link href=<?php echo base_url("assets") ?>/landingassets/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css
    rel=stylesheet>
  <link href=<?php echo base_url("assets") ?>/assets/css/footers/footer-v7.css rel=stylesheet>
  <link href=<?php echo base_url("assets") ?>/assets/css/custom.css rel=stylesheet>
  <!-- <link href=/manifest.json rel=manifest> -->
  <script src=<?php echo base_url("assets") ?>/landingassets/assets/plugins/jquery/jquery.min.js> </script>

  <!-- Start of  Zendesk Widget script // ksh check start // it is free version please replace-->
  <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=3d041edc-0648-4884-8ba7-76fd45068fe6">
  </script>
  <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel=stylesheet>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <!-- End of  Zendesk Widget script // ksh check start // it is free version please replace -->
</head>

<body class=demo-lightbox-gallery data-spy=scroll data-target=.one-page-header id="intro">
  <nav class="navbar navbar-default navbar-fixed-top one-page-header">
    <div class=container>
      <div class="page-scroll menu-container">
        <button class=navbar-toggle type=button data-target=.navbar-ex1-collapse data-toggle=collapse>
          <span class=sr-only>Toggle navigation</span> <span class=icon-bar></span>
          <span class=icon-bar></span>
          <span class=icon-bar></span>
        </button>
        <a href="<?php echo base_url() ?>" class="navbar-brand g-padding-5">
          <img src=<?php echo base_url("assets") ?>/assets/img/sliders/revolution/logo.png alt=Logo>
        </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse g-padding-15">
        <div class=menu-container>
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url("services"); ?>">app development services</a>
            <li><a href="<?php echo base_url("review"); ?>">customer reviews</a>
            <li><a href="<?php echo base_url("startnow"); ?>" target="_blank">Get Started</a>
              <!-- <li><a href="<?php echo base_url("services"); ?>/blog/">Blog</a> -->
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <section class="view-users">
    <table id="datatable" class="display" style="width:100%">
      <thead>
        <tr>
          <th>Email</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Phone</th>
          <th>IP</th>
          <th>Description</th>
          <th>Category</th>
          <th>Country code</th>
        </tr>
      </thead>
    </table>
  </section>

  <script>
  var base_url = '<?php echo base_url() ?>';

  function loadCss(filename) {
    var l = document.createElement('link');
    l.rel = 'stylesheet';
    l.href = filename
    var h = document.getElementsByTagName('head')[0];
    h.parentNode.insertBefore(l, h);
  }

  function cb() {
    loadCss('//fonts.googleapis.com/css?family=Open+Sans:400,300,700,500&subset=cyrillic,latin');
    loadCss(base_url + 'assets/landingassets/assets/plugins/bootstrap/css/bootstrap.min.css');
    loadCss(base_url + 'assets/getstarted/assets/plugins/font-awesome/css/font-awesome.min.css');
    loadCss(base_url + 'assets/landingassets/assets/css/consulting.style.css');
    loadCss(base_url + 'assets/assets/css/one.style.css');
  }

  var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
  if (raf) {
    raf(cb);
  } else {
    window.addEventListener('load', cb);
  }
  </script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js defer>
  </script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js defer>
  </script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/jquery/jquery-migrate.min.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/bootstrap/js/bootstrap.min.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/smoothScroll.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/jquery.easing.min.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/jquery.parallax.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/counter/waypoints.min.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/counter/jquery.counterup.min.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/owl-carousel/owl.carousel.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js defer>
  </script>
  <script
    src=<?php echo base_url("assets") ?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js
    defer></script>
  <script
    src=<?php echo base_url("assets") ?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js
    defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/js/one.app.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/js/forms/login.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/js/forms/contact.js defer></script>
  <script src=<?php echo base_url("assets") ?>/assets/js/plugins/owl-carousel.js defer></script>
  <!-- <script src=<?php echo base_url("assets") ?>/assets/js/plugins/style-switcher.js defer></script> -->
  <!-- <script src=<?php echo base_url("assets") ?>/assets/js/plugins/revolution-slider.js defer></script> -->

  <!--[if lt IE 9]><script src=<?php echo base_url("assets") ?>/assets/plugins/respond.js></script><script src=assets/plugins/html5shiv.js></script><script src=assets/js/plugins/placeholder-IE-fixes.js></script><script src=assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js></script><![endif]-->
  <!--[if lt IE 10]><script src=<?php echo base_url("assets") ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js></script><![endif]-->

  <script src=<?php echo base_url("assets") ?>/js/page/view_users.js defer></script>
</body>

</html>