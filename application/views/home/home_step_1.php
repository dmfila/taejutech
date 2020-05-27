<!DOCTYPE html>
<!--[if IE 9]><html lang=en class=ie9> <![endif]-->
<!--[if !IE]><!-->
<html lang=en>
<!--<![endif]-->
<head>

	<title>BrainyApps</title>
	<meta charset=utf-8>
	<meta content="IE=Edge" http-equiv=X-UA-Compatible>
	<meta content="width=device-width,initial-scale=1" name=viewport>
	<meta content="" name=description>
	<meta content="" name=author>
	<meta http-equiv="Cache-control" content="public">
	<link href=<?php echo base_url() ?>favicon.ico rel="shortcut icon">
	<link href=<?php echo base_url("assets") ?>/landingassets/assets/css/consulting.style.css rel=stylesheet>
	<script src=<?php echo base_url("assets") ?>/assets/plugins/jquery/jquery.min.js> </script>
</head>
<body class=demo-lightbox-gallery data-spy=scroll data-target=.one-page-header id=body>
	<main class=wrapper>
		<section style=padding-bottom:30px>
			<div class=container>
				<div class="text-center g-heading-v7">
					<h2>No lines, No waiting</h2>
					<h5>Get on the fast track to launching your <b>GREAT APP IDEA!</b></h5>
					<h5>For a limited time submit your APP IDEA below and receive a FREE APP WEBSITE**</h5>
					<h3><b>Automatic Confidentiality & NDA Upon Submission!<b></h3>
				</div>
			</div>
		</section>
		<section class=support>
			<div class=container>
				<div class=row>
					<div class=col-md-6>
						<div class=g-heading-v7>
							<h4>SELECT YOUR APP CATEGORY:</h4>
						</div>
						<fieldset>
							<label>
								<input id=Books type=checkbox>Books</label>
							<br>
							<label>
								<input id=Business type=checkbox>Business</label>
							<br>
							<label>
								<input id=Education type=checkbox>Education</label>
							<br>
							<label>
								<input id=Entertainment type=checkbox>Entertainment</label>
							<br>
							<label>
								<input id=Finance type=checkbox>Finance</label>
							<br>
							<label>
								<input id=Games type=checkbox>Games</label>
							<br>
							<label>
								<input id=HF type=checkbox>Health/Fitness</label>
							<br>
							<label>
								<input id=Lifestyle type=checkbox>Lifestyle</label>
							<br>
							<label>
								<input id=Medical type=checkbox>Medical</label>
							<br>
							<label>
								<input id=Music type=checkbox>Music</label>
							<br>
							<label>
								<input id=News type=checkbox>News</label>
							<br>
							<label>
								<input id=Photography type=checkbox>Photography</label>
							<br>
							<label>
								<input id=Productivity type=checkbox>Productivity</label>
							<br>
							<label>
								<input id=Social type=checkbox>Social</label>
							<br>
							<label>
								<input id=Networking type=checkbox>Networking</label>
							<br>
							<label>
								<input id=Sports type=checkbox>Sports</label>
							<br>
							<label>
								<input id=Transprtation type=checkbox>Transprtation</label>
							<br>
							<label>
								<input id=Travel type=checkbox>Travel</label>
							<br>
							<label>
								<input id=Weather type=checkbox>Weather</label>
							<br>
							<label>
								<input id=Other type=checkbox>Other</label>
						</fieldset>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-12 pull-right">
						<form action=# class="sky-form simple-form" method=post>
							<fieldset>
								<label class="g-mb-20 input inputborder"><span class="icon-append icon-user"></span>
									<input id=firstname name=fname class=rounded-2x placeholder="First name" required disabled value="<?=$fname;?>">
								</label>
								<label class="g-mb-20 input inputborder"><span class="icon-append icon-user"></span>
									<input id=lastname name=lname class=rounded-2x placeholder="Last name" required disabled value="<?=$lname;?>">
								</label>
								<label class="g-mb-20 input inputborder"><span class="fa fa-phone icon-append"></span>
									<input id=phone name=phone class=rounded-2x placeholder="Phone Number" required disabled value="<?=$phone;?>">
								</label>
								<label class="g-mb-20 input inputborder"><i class="fa fa-envelope icon-append"></i>
									<input id=email name=email placeholder="Email address" required disabled value="<?=$email;?>" type=email>
								</label>
							</fieldset> <span class="text-center">
								<h5 style=padding-top:45px;padding-right:90px>Life is like riding a bicycle.<br>To keep your balance, you must keep moving."<br>- Albert Einstein</h5>
							</span>
						</form>
					</div>
				</div>
				<img src=<?php echo base_url("assets") ?>/assets/img-temp/header-background.jpg alt="" class="hidden-xs support__image_secondpage">
			</div>
		</section>
		<section class="g-pb-120 g-bg-lightblue">
			<div class=container>
				<div class="text-center g-heading-v7">
					<h5>Type YOUR <span style=color:#e57a26;text-transform:None;font-weight:700>APP DESCRIPTION</span> 100% Confidential and FREE APP REVIEW:</h5>
					<textarea class=rounded-2x id=Description name=Description rows=3 placeholder=Description style=width:100%;height:200px></textarea>
					<input name=crmId type=hidden value="<?=$crmId;?>">
					<div class="error_msg" id=f2_err_show></div>
					<button class="rounded-2x btn-u btn-u-lg btn-u-upper btn-u-blue fieldsetlabel" type=button id=step_2>Submit</button>
				</div>
			</div>
		</section>
		<div align=middle> <span class="g-mb-40 font_black color_white">
				<p>©2016-2017 Brainy Apps LLC, 3350 SW 148 Avenue, Suite 110, Miramar, Florida, 33027, USA, Earth. All Rights Reserved.
			</span>
		</div>
	</main>

	<script>
		var base_url = '<?php echo base_url() ?>';
		var ip = "<?=$ip;?>";
        var country = "<?=$country;?>";
        var state = "<?=$state;?>";
        var city = "<?=$city;?>";
		var zipCode = "<?=$zipCode;?>";
		var redirect_url = "<?=$redirect_url;?>";

		function loadCss(filename) {
			var l = document.createElement('link');
			l.rel = 'stylesheet';
			l.href = filename
			var h = document.getElementsByTagName('head')[0];
			h.parentNode.insertBefore(l, h);
		}

		function cb() {
			loadCss('//fonts.googleapis.com/css?family=Open+Sans:400,300,700,500&subset=cyrillic,latin');
			loadCss('<?php echo base_url("assets") ?>/landingassets/assets/css/custom.css');
			loadCss('<?php echo base_url("assets") ?>/landingassets/assets/plugins-custom/bootstrap/css/bootstrap.min.css');
			loadCss('<?php echo base_url("assets") ?>/landingassets/assets/css/one.style.css');
			loadCss('<?php echo base_url("assets") ?>/landingassets/assets/plugins/font-awesome/css/font-awesome.min.css');
			loadCss('<?php echo base_url("assets") ?>/landingassets/assets/plugins/line-icons/line-icons.css');
			loadCss('<?php echo base_url("assets") ?>/landingassets/assets/plugins/animate.css');
			loadCss('<?php echo base_url("assets") ?>/landingassets/assets/plugins/line-icons-pro/styles.css');
			loadCss('<?php echo base_url("assets") ?>/landingassets/assets/plugins/owl-carousel2/assets/owl.carousel.css');
			loadCss('<?php echo base_url("assets") ?>/landingassets/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css');
		}
		var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
		if (raf) {
			raf(cb);
		} else {
			window.addEventListener('load', cb);
		}
	</script>

	<script src=<?php echo base_url("assets") ?>/landingassets/assets/plugins/jquery/jquery-migrate.min.js defer> </script>
	<script src=<?php echo base_url("assets") ?>/landingassets/assets/plugins-custom/bootstrap/js/bootstrap.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/landingassets/assets/plugins/smoothScroll.js defer></script>
	<script src=<?php echo base_url("assets") ?>/landingassets/assets/plugins/jquery.easing.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/landingassets/assets/plugins/owl-carousel2/owl.carousel.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/landingassets/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/landingassets/assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js defer> </script>
	<script src=<?php echo base_url("assets") ?>/landingassets/assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/landingassets/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js defer> </script>
	<script src=<?php echo base_url("assets") ?>/assets/js/one.app.js defer></script>
	<script src=<?php echo base_url("assets") ?>/getstarted/assets/js/plugins/owl-carousel2.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/js/forms/contact.js defer></script>

	<!--[if lt IE 10]><script src=../assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js></script><![endif]-->
	<script src=<?php echo base_url("assets") ?>/js/page/home_step_1.js defer></script>
</body>
</html>