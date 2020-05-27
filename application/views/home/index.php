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
                    <li><a href="#app-develop-service">App Development Services</a></li>
                    <li><a href="#customer-review">Customer Reviews</a></li>
                    <li><a href="#contact-message">Contact</a></li>
                    <!-- <li><a href="#">Blog</a></li> -->
                    <li><a href="#" onclick="get_start()">Get Started</a></li>
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
              <h1>You've got a brilliant idea to build the software product but don't know how to do?</h1>
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
              <h1>We will help you to come on board and to reach the goal.</h1>
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
        <a class="btn btn-success" onclick="get_start()">Get Started</a>
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
              <h2>Web Application Development</h2>
              <p>We offer end-to-end web development solutions by strategically combining latest web technologies with
                mature project development methodologies & robust project management tools.
              </p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="banner-btm-block-inner">
              <img src="assets/images/service-icon2.png">
              <h2>Mobile Application Development</h2>
              <p>With in-depth knowledge of native iOS, Android and cross-platform application development, we make sure
                that your idea is transformed into a beautifully designed, user-friendly and engaging mobile solution of
                a
                superior quality.
              </p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="banner-btm-block-inner">
              <img src="assets/images/service-icon3.png">
              <h2>Video Application Development</h2>
              <p>Building your app is fun, but getting it noticed is great! Our team provides continued support and
                guidance your app is launched, to keep you in the right direction. Let us help your app climb the ladder
                to success.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="banner-btm-block-inner">
              <img src="assets/images/service-icon2.png">
              <h2>Desktop Application</h2>
              <p>It's not just about cutting edge technology at TaejuTech. Sure, we're pretty geeky, but we are also a
                team of artists and design nuts. We have perfected the art of listening and understanding your ideas and
                visions.</p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="banner-btm-block-inner">
              <img src="assets/images/service-icon1.png">
              <h2>IoT Development</h2>
              <p>We strive to excel in the invention and development of the Internet of things (IoT) applications,
                Wearables, AR/VR, cloud integration. We translate these technologies into value for our clients’
                customers
                giving them professional and best-in-class services; thereby helping businesses throughout the world
                harness their full potential.
              </p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="banner-btm-block-inner">
              <img src="assets/images/service-icon2.png">
              <h2>Embedded System Development</h2>
              <p>Overall electric and electronic design.
                Develop industrial control equipment and smart home.
                Build high-performance large-scale embedded systems through optimal development process and high-quality
                software.</p>
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
              <h1>We are different</h1>
              <p>Unlike others, we take care of overall process, from design to marketing, not only development phase.
              </p>
              <ul>
                <li>
                  <span>Cost-effective and strategic solution.</span>
                </li>
                <li>
                  <span>Architectural design and project schedule.</span>
                </li>
                <li>
                  <span>Build the app by dedicated team of experts.</span>
                </li>
                <li>
                  <span>Help and support for success in market. </span>
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
              <h1>World-Class Productivity</h1>
              <p>Use an Agile development methodology, which means we work in sprints to create incremental, iterative
                mobile, software, and web applications that are tested, tempered, and ready for release. Being Agile
                means
                we’re as flexible as project management needs to be — keeping your project on-budget and on-schedule.
              </p>
              <ul>
                <li>
                  <h3>Your Succes is Our Success</h3>
                  <span>Our company utilized an Integrated Quality Assurance practice to ensure the highest quality of
                    our
                    deliverables. We have perfected QA strategy and methodology that blend seamlessly into the
                    development
                    lifecycle without crossing the important boundary between the development and software quality
                    assurance processes.</span>
                </li>
                <li>
                  <h3>Efficient Project Management</h3>
                  <span>We apply modern techniques and powerful software to monitor scope, schedule, quality, and cost —
                    so you remain confident of on-time and on-budget delivery.</span>
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
            <h1>Easy Step By Prosses</h1>
            <h6>Create your own app idea with our TaejuTech Team. Someone else make money from<br> your app idea. Start
              now!
            </h6>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="easy-step-each">
              <img src="assets/images/step1.png">
              <h4>Consulting</h4>
              <p>Our professional consultants engage with you and provide best of best solution as well as accurate and
                detailed plan.</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="easy-step-each">
              <img src="assets/images/step2.png">
              <h4>Designing</h4>
              <p>Do you have an idea for an app, but only in your head? Our highly trained design team knows how to
                bring
                it to life.</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="easy-step-each">
              <img src="assets/images/step3.png">
              <h4>Programming</h4>
              <p>We select the most appropriate developers based on the skills required for your project and according
                to
                developer's specified experience.
                We don't involve any meditators so you can talk to the developers directly.</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="easy-step-each">
              <img src="assets/images/step4.png">
              <h4>Marketing</h4>
              <p>We care your success.
                Thus we provide dedicated maintenance and marketing service.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonial-slider-section" id="customer-review">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <h1>Our Testimonials</h1>
            <h6>Create your own app idea with our TaejuTech Team. Someone else make money from<br> your app idea. Start
              now!
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
                      <div class="testi-text">
                        "I am very pleased with TaejuTech. They have been professional, timely, and extremely reliable
                        with the building and integration of my App. They took my designs, ideas and dreams and turned
                        them into a reality. TaejuTech team is highly dependable and experienced in their field.
                        Building
                        apps and things if this nature can be very frustrating and nerve wracking, but TaejuTech took a
                        lot of that stress and anxiety away with their professionalism and timely delivery."
                      </div>
                      <div class="testi-user">
                        Stephen Baldry
                      </div>
                      <div class="testi-designation">
                        CTO at PC Locs
                      </div>
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
                      <div class="testi-text">
                        "Our organization hired this team a few years back for a web development project and after it
                        was
                        completed TaejuTech team stayed with us to provide maintenance service.
                        Working with TaejuTech has been everything we could wish for! The team is reliable, experienced
                        and professional.
                        Keep up the good work!"
                      </div>
                      <div class="testi-user">
                        Rudy Ferraz
                      </div>
                      <div class="testi-designation">
                        CEO of One Car Payment
                      </div>
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
                      <div class="testi-text">
                        "I would highly recommend the team as they never fail reaching my expectation in terms of
                        product
                        delivery, meeting my business requirements both in technical and support. They are fast,
                        accurate,
                        very detailed and very professional supporting their clients end to end.
                        Will definetely engage them again in any of my future tech projects."
                      </div>
                      <div class="testi-user">
                        Jason Lilienstein
                      </div>
                      <div class="testi-designation">
                        CEO of Zuuse
                      </div>
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
            <h1>Please contact with us</h1>
            <h6>Create your own app idea with our TaejuTech Team. Someone else make money from<br> your app idea. Start
              now!
            </h6>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-xs-12">
            <div class="contact-form">
              <h3>Request Form</h3>
              <form action=<?php echo base_url() . "mail/contact_mail" ?> method=post>
                <div class="form-group">
                  <input type="name" name="name" placeholder="Enter your name *" required="" class="form-control">
                </div>
                <div class="form-group">
                  <input type="email" name="email" placeholder="Enter your email *" required="" class="form-control">
                </div>
                <div class="form-group">
                  <input type="tel" name="phone" placeholder="Enter your phone number *" required=""
                    class="form-control">
                </div>
                <div class="form-group">
                  <textarea name="message" rows="3" placeholder="Enter your message" class="form-control"
                    style="resize: none"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Send Message</button>
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
          <h4 class="getstartedheading getstartedheadingm font_bold">GET STARTED FOR FREE!</h4>
          <h5 class="getstartedAllheadings getstartedAllheadingsm">Full Confidentiality & NDA</h5>
          <h5 class="getstartedAllheadings getstartedAllheadingsm">No Obligations</h5>
          <h5 class="getstartedAllheadings getstartedAllheadingsm">100% Free App Review<br></h5>
          <h4 class="font_bold" class="getstartedAllheadings getstartedAllheadingsm">Tell us about your app idea:</h4>
        </div>
        <div class="modal-body">
          <?php echo form_open('', $attribute = array('class' => 'form-valid', 'id' => 'form-start')); ?>
          <div class="form-group">
            <input type="text" name="fname" id="form-start-fname" class="form-control" placeholder="First Name*"
              required=""></input>
          </div>
          <div class="form-group">
            <input type="text" name="lname" id="form-start-lname" class="form-control" placeholder="Last Name"></input>
          </div>
          <div class="form-group">
            <input type="email" name="email" id="form-start-email" class="form-control" placeholder="Email*"
              required=""></input>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" id="form-start-phone" class="form-control" placeholder="Phone"></input>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" id="startnow">Start Now</button>
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