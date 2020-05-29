<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>TaejuTech</title>

  <!-- Bootstrap Core CSS -->
  <link href=<?php echo base_url('assets') ?>/plugins/bootstrap/css/bootstrap.min.css type="text/css" rel="stylesheet">

  <!-- FontAwesome CSS -->
  <link href=<?php echo base_url('assets') ?>/plugins/font-awesome/css/font-awesome.min.css type="text/css"
    rel="Stylesheet">

  <!--Carousel CSS -->
  <link href=<?php echo base_url('assets') ?>/plugins/owl.carousel/css/owl.carousel.css type="text/css"
    rel="stylesheet">

  <!--Animate CSS -->
  <link href=<?php echo base_url('assets') ?>/plugins/animate/css/animate.min.css type="text/css" rel="stylesheet">

  <!--Website CSS -->
  <link href=<?php echo base_url('assets') ?>/css/style.css type="text/css" rel="stylesheet">
</head>

<body>
  <!-- Header Start -->
  <header id="header">
    <nav class="navbar navbar-default nav-menu">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <div class="navwrap">
              <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="assets/images/taejutech-logo.png" width="160px" alt=""></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="clearfix"></div>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <div class="navigation">
                  <ul class="nav navbar-nav">
                    <li><a href="#app-develop-service"><?php echo lang('nav_service') ?></a></li>
                    <li><a href="#customer-review"><?php echo lang('nav_review') ?></a></li>
                    <li><a href="#contact-message"><?php echo lang('nav_contact') ?></a></li>
                    <!-- <li><a href="#">Blog</a></li> -->
                    <li><a href="#" onclick="get_start()"><?php echo lang('get_started') ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header End -->

  <!-- Banner Start -->
  <section class="banner">
    <div class="container">
      <!-- <div class="row"> -->
      <div class="owl-carousel owl-theme" id="banner-slider">
        <div class="item">
          <div class="col-md-6 col-xs-12 owl-slider-content">
            <div class="banner-desc animate-slide-item">
              <h1><?php echo lang('band_title_1') ?></h1>
            </div>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="banner-img wow wow fadeInRight">
              <img src="assets/images/banner-img.png">
            </div>
          </div>
        </div>
        <div class="item">
          <div class="col-md-6 col-xs-12 owl-slider-content">
            <div class="banner-desc animate-slide-item">
              <h1><?php echo lang('band_title_2') ?></h1>
            </div>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="banner-img wow wow fadeInRight">
              <img src="assets/images/build-schedule-img.png">
            </div>
          </div>
        </div>
      </div>
      <div class="btn-grp">
        <a class="btn btn-success" onclick="get_start()"><?php echo lang('get_started') ?></a>
      </div>
      <!-- </div> -->
  </section>

  <main>
    <section class="banner-btm-three-block" id="app-develop-service">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="banner-btm-block-inner">
              <img src="assets/images/service-icon1.png">
              <h2><?php echo lang('band_service_name_1') ?></h2>
              <p><?php echo lang('band_service_desc_1') ?></p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="banner-btm-block-inner">
              <img src="assets/images/service-icon2.png">
              <h2><?php echo lang('band_service_name_2') ?></h2>
              <p><?php echo lang('band_service_desc_2') ?></p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="banner-btm-block-inner">
              <img src="assets/images/service-icon3.png">
              <h2><?php echo lang('band_service_name_3') ?></h2>
              <p><?php echo lang('band_service_desc_3') ?></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="banner-btm-block-inner">
              <img src="assets/images/service-icon2.png">
              <h2><?php echo lang('band_service_name_4') ?></h2>
              <p><?php echo lang('band_service_desc_4') ?></p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="banner-btm-block-inner">
              <img src="assets/images/service-icon1.png">
              <h2><?php echo lang('band_service_name_5') ?></h2>
              <p><?php echo lang('band_service_desc_5') ?></p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="banner-btm-block-inner">
              <img src="assets/images/service-icon2.png">
              <h2><?php echo lang('band_service_name_6') ?></h2>
              <p><?php echo lang('band_service_desc_6') ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner End -->

    <section class="build-schedule-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="build-schedule-left wow fadeInLeft">
              <img src="assets/images/build-mobile.png">
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="build-schedule-right">
              <h1><?php echo lang('schedule_title') ?></h1>
              <p><?php echo lang('schedule_desc') ?></p>
              <ul>
                <li>
                  <span><?php echo lang('schedule_task_1') ?></span>
                </li>
                <li>
                  <span><?php echo lang('schedule_task_2') ?></span>
                </li>
                <li>
                  <span><?php echo lang('schedule_task_3') ?></span>
                </li>
                <li>
                  <span><?php echo lang('schedule_task_4') ?></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="video-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <h1>What customers say about our<br> Software development</h1>
            <h6>Create your own app idea with our TaejuTech Team. someone else make money from<br> your app idea. Start
              now!
            </h6>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="video-inner">
              <video width="100%" height="250" controls poster="assets/images/video-section.jpg">
                <source src="assets/images/Dummy-Video.mp4" type="video/mp4">
              </video>
              <div class="video-content">
                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h6>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="video-inner">
              <video width="100%" height="250" controls poster="assets/images/video-section.jpg">
                <source src="assets/images/Dummy-Video.mp4" type="video/mp4">
              </video>
              <div class="video-content">
                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h6>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="video-inner">
              <video width="100%" height="250" controls poster="assets/images/video-section.jpg">
                <source src="assets/images/Dummy-Video.mp4" type="video/mp4">
              </video>
              <div class="video-content">
                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="productivity-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="productivity-right">
              <h1><?php echo lang('productivity_title') ?></h1>
              <p><?php echo lang('productivity_desc') ?></p>
              <ul>
                <li>
                  <h3><?php echo lang('productivity_task_title_1') ?></h3>
                  <span><?php echo lang('productivity_task_desc_1') ?></span>
                </li>
                <li>
                  <h3><?php echo lang('productivity_task_title_2') ?></h3>
                  <span><?php echo lang('productivity_task_desc_2') ?></span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="productivity-left wow fadeInRight">
              <img src="assets/images/world-class.jpg">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="easy-step-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <h1><?php echo lang('step_title') ?></h1>
            <h6><?php echo lang('step_desc') ?></h6>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="easy-step-each">
              <img src="assets/images/step1.png">
              <h4><?php echo lang('step_task_title_1') ?></h4>
              <p><?php echo lang('step_task_desc_1') ?></p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="easy-step-each">
              <img src="assets/images/step2.png">
              <h4><?php echo lang('step_task_title_2') ?></h4>
              <p><?php echo lang('step_task_desc_2') ?></p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="easy-step-each">
              <img src="assets/images/step3.png">
              <h4><?php echo lang('step_task_title_3') ?></h4>
              <p><?php echo lang('step_task_desc_3') ?></p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="easy-step-each">
              <img src="assets/images/step4.png">
              <h4><?php echo lang('step_task_title_4') ?></h4>
              <p><?php echo lang('step_task_desc_4') ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonial-slider-section" id="customer-review">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <h1><?php echo lang('testimonial_title') ?></h1>
            <h6><?php echo lang('testimonial_desc') ?>
            </h6>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 col-xs-12">
            <div class="testimonial-slider">
              <div class="owl-carousel owl-theme" id="testimonial-slider">
                <div class="item">
                  <div class="testimonials-inner">
                    <div class="testi-content">
                      <div class="testi-rating">
                        <span class="scores s10"></span>
                        <span>(5)</span>
                      </div>
                      <div class="testi-text"><?php echo lang('feedback_task_content_1') ?></div>
                      <div class="testi-user"><?php echo lang('feedback_task_name_1') ?></div>
                      <div class="testi-designation"><?php echo lang('feedback_task_position_1') ?></div>
                    </div>
                    <div class="testi-img">
                      <img src="assets/images/testimonials0.jpg">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonials-inner">
                    <div class="testi-content">
                      <div class="testi-rating">
                        <span class="scores s10"></span>
                        <span>(5)</span>
                      </div>
                      <div class="testi-text"><?php echo lang('feedback_task_content_2') ?></div>
                      <div class="testi-user"><?php echo lang('feedback_task_name_2') ?></div>
                      <div class="testi-designation"><?php echo lang('feedback_task_position_2') ?></div>
                    </div>
                    <div class="testi-img">
                      <img src="assets/images/testimonials1.jpg">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonials-inner">
                    <div class="testi-content">
                      <div class="testi-rating">
                        <span class="scores s10"></span>
                        <span>(5)</span>
                      </div>
                      <div class="testi-text"><?php echo lang('feedback_task_content_3') ?></div>
                      <div class="testi-user"><?php echo lang('feedback_task_name_3') ?></div>
                      <div class="testi-designation"><?php echo lang('feedback_task_position_3') ?></div>
                    </div>
                    <div class="testi-img">
                      <img src="assets/images/testimonials2.jpg">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="home-contact-section" id="contact-message">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <h1><?php echo lang('contact_title') ?></h1>
            <h6><?php echo lang('contact_desc') ?></h6>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-xs-12">
            <div class="contact-form">
              <form action=<?php echo base_url() . "mail/contact_mail" ?> method=post>
                <div class="form-group">
                  <input type="name" name="name" placeholder="<?php echo lang('contact_name') ?> *" required="" class="form-control">
                </div>
                <div class="form-group">
                  <input type="email" name="email" placeholder="<?php echo lang('contact_email') ?> *" required="" class="form-control">
                </div>
                <div class="form-group">
                  <input type="tel" name="phone" placeholder="<?php echo lang('contact_phone') ?> *" required=""
                    class="form-control">
                </div>
                <div class="form-group">
                  <textarea name="message" rows="3" placeholder="<?php echo lang('contact_message') ?>" class="form-control"
                    style="resize: none"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary"><?php echo lang('contact_send') ?></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer Start -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="ft-box">
            <h3>About Us</h3>
            <p>You've got a brilliant idea to build the software product but don't know how to do? We will help you
              to come on board and to reach the goal.</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="ft-box">
            <h3>Contact us</h3>
            <div class="ft-contact">
              <ul>
                <li><i class="fa fa-home"></i>3350 SW 148 Avenue, Suite 110, Miramar, Florida, 33027, USA, Earth
                <li><i class="fa fa-phone"></i><a href=tel:+18445489898>+1 844-548-9898</a>
                <li><i class="fa fa-envelope"></i> <a href=mailto:info@taejutech.com>info@taejutech.com</a>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="ft-box">
            <h3>Follow Us</h3>
            <div class="ft-social-icon">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Float Button -->
  <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>

  <!-- Start Modal -->
  <div class="modal fade" id="getstarted">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="getstartedheading getstartedheadingm font_bold"><?php echo lang('start_form_title_1') ?></h4>
          <h5 class="getstartedAllheadings getstartedAllheadingsm"><?php echo lang('start_form_title_2') ?></h5>
          <h5 class="getstartedAllheadings getstartedAllheadingsm"><?php echo lang('start_form_title_3') ?></h5>
          <h5 class="getstartedAllheadings getstartedAllheadingsm"><?php echo lang('start_form_title_4') ?><br></h5>
          <h4 class="font_bold" class="getstartedAllheadings getstartedAllheadingsm"><?php echo lang('start_form_title_5') ?></h4>
        </div>
        <div class="modal-body">
          <?php echo form_open('', $attribute = array('class' => 'form-valid', 'id' => 'form-start')); ?>
          <div class="form-group">
            <input type="text" name="fname" id="form-start-fname" class="form-control" placeholder="<?php echo lang('start_firstname') ?>*"
              required=""></input>
          </div>
          <div class="form-group">
            <input type="text" name="lname" id="form-start-lname" class="form-control" placeholder="<?php echo lang('start_lastname') ?>"></input>
          </div>
          <div class="form-group">
            <input type="email" name="email" id="form-start-email" class="form-control" placeholder="<?php echo lang('start_email') ?>*"
              required=""></input>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" id="form-start-phone" class="form-control" placeholder="<?php echo lang('start_phone') ?>"></input>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" id="startnow"><?php echo lang('start_now') ?></button>
          </div>
          <?php form_close()?>
        </div>
      </div>
    </div>
  </div>

  <script>
  var base_url = '<?php echo base_url() ?>';
  var redirect_url_landing = base_url + "getstarted/survey_index?";
  </script>
  <script src="assets/plugins/jquery/js/jquery-3.4.1.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/plugins/wow/js/wow.min.js"></script>
  <script src="assets/plugins/owl.carousel/js/owl.carousel.js"></script>
  <script src="assets/plugins/jquery.easing/js/jquery.easing.min.js"></script>
  <script src="assets/js/page/home.js"></script>

  </script>
</body>

</html>