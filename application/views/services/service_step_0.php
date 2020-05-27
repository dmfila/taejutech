<!DOCTYPE html>

<html lang=en>

<head>
	<!--[if IE 8]><html lang=en class=ie8> <![endif]-->
	<!--[if IE 9]><html lang=en class=ie9> <![endif]-->
	<!--[if !IE]><!-->
	<!--<![endif]-->
	<title>Android - iPhone - Mobile Apps - Progressive Web Apps | BrainyApps</title>
	<meta charset=utf-8>
	<meta content="width=device-width,initial-scale=1" name=viewport>
	<meta content="Have an amazing app idea? We will make your Android, iPhone, or progressive web app. Native or cross-platform development. Based in USA. Start now!" name=description>
	<meta http-equiv="Cache-control" content="public">
	<link href=<?php echo base_url("assets") ?>/landingassets/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css rel=stylesheet>
	<link href=<?php echo base_url("assets") ?>/assets/css/footers/footer-v7.css rel=stylesheet>
	<link href=<?php echo base_url("assets") ?>/assets/css/custom.css rel=stylesheet>
	<script src=<?php echo base_url("assets") ?>/assets/plugins/jquery/jquery.min.js> </script> 
	
	<!-- <link href=/manifest.json rel=manifest> -->

	<!--Start of Zendesk Widget script // ksh check start // it is free version please replace-->
	<script id = "ze-snippet" src = "https://static.zdassets.com/ekr/snippet.js?key=3d041edc-0648-4884-8ba7-76fd45068fe6" ></script>
	<!-- End of  Zendesk Widget script // ksh check start // it is free version please replace -->
</head>

<body class="demo-lightbox-gallery services_page" id=body>
	<nav class="navbar navbar-default navbar-fixed-top one-page-header">
		<div class=container>
			<div class="page-scroll menu-container">
				<button class=navbar-toggle type=button data-target=.navbar-ex1-collapse data-toggle=collapse><span class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span>
				</button>
				<a href="<?php echo base_url() ?>" class="navbar-brand g-padding-5">
					<img src=<?php echo base_url("assets") ?>/assets/img/sliders/revolution/logo.png alt=Logo>
				</a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse g-padding-15">
				<div class=menu-container>
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url() ?>">Home</a></li>
						<li class="page-scroll active"><a href="<?php echo base_url("services") ?>">App Development Services</a></li>
						<li><a href="<?php echo base_url("review") ?>">Customer Reviews</a></li>
						<li><a href="<?php echo base_url("startnow") ?>" target="_blank">Get Started</a></li>
						<!-- <li><a href="/blog/">Blog</a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<section class="services_banner g-pt-150">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-md-8">
					<h1>Make My App</h1>
				</div>
				<div class="col-sm-5 col-md-4">
					<h2 class="text-center">CONTACT US</h2>
					<form action="" class="" method=post id=f1 name=f1>
						<input name=step type=hidden value=1>
						<input id=crmId_1 name=crmId type=hidden>
						<fieldset>
							<label class="g-mb-20 input inputborder fieldsetlabel">
								<input id=firstname_1 name=fname placeholder="First name" onchange=checkMandatory_step_1() required>
							</label>
							<label class="g-mb-20 input inputborder fieldsetlabel">
								<input id=lastname_1 name=lname placeholder="Last name">
							</label>
							<label class="g-mb-20 input inputborder fieldsetlabel">
								<input id=phone_1 name=phone placeholder="Mobile phone">
							</label>
							<label class="g-mb-20 input inputborder fieldsetlabel" id=f1_last>
								<input id=email_1 name=email placeholder="Email address" onchange=checkMandatory_step_1_email() required type=email> <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
							</label>
							<div class="error_msg" id=f1_err_show></div>
							<button class="btn-u btn-u-lg btn-u-upper g-width-100 btn_services_send fieldsetlabel" type=button id=step_1 onclick="checkMandatory_step_1(); checkMandatory_step_1_email();">SEND</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="services_section section-first" id="aboutsection">
		<div class="block-v1">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h2 class="has_underline">WHAT WE DO</h2>
					</div>
					<div class="col-sm-8">
						<div class=content-boxes-in-v3>
							<h3>BrainyApps turns your amazing app idea into reality.<br><br>
								You have the idea &#8212; We build your app!</h3>
							<p>BrainyApps is a full-service creative technology firm that carefully listens to your app idea, designs it with the precision of an architect, builds your app with our expert, in-house programming team, then launches it in the app stores.<br><br>
								Of course, we also offer genius marketing packages to make your app stand out and succeed. Ongoing maintenance and support services is also available.<br><br>
								BrainyApps makes it easy for everyone to develop their amazing app ideas. We are passionate about helping our clients build successful apps and always go the extra mile. Even for first-time app inventors, BrainyApps holds your hand all the way!</p>
							<!--<p><a href="" class="view_more">+ VIEW MORE</a></p>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="services_page_section bg_green" id="wearebrainyappssection">
		<div class="container">
			<div class="text-center">
				<h2 class="title">FULL-SERVICE APP DEVELOPMENT</h2>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-5">
					<img src="<?php echo base_url("assets") ?>/assets/img/img-01.jpg" class="img-responsive">
				</div>
				<div class="col-sm-8 col-md-7">
					<div class=content-boxes-in-v3>
						<p>BrainyApps takes the guesswork out of app building. We provide full-service from designing, programing, protecting and launching your iOS & Android apps into the stores. Let us do all the heavy lifting for you. Our team has developed and launched over 140 iOS and Android apps.</p>
						<p><a href="<?php echo base_url("startnow") ?>" target="_blank" class="btn_white">GET STARTED</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="services_page_section bg_purple">
		<div class="container">
			<div class="text-center">
				<h2 class="title">REAL APP BUILDING</h2>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-push-8 col-md-5 col-md-push-7">
					<img src="<?php echo base_url("assets") ?>/assets/img/img-02.jpg" class="img-responsive">
				</div>
				<div class="col-sm-8 col-sm-pull-4 col-md-7 col-md-pull-5">
					<div class=content-boxes-in-v3>
						<p>It's not just about cutting edge technology at BrainyApps. Sure, we're pretty geeky, but we are also a team of artists and design nuts. We have perfected the art of listening and understanding your ideas and visions. Combined, we capture both design and functionality creating for you, a complete and valuable app experience.</p>
						<p><a href="<?php echo base_url("startnow") ?>" target="_blank" class="btn_white">GET STARTED</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="services_page_section bg_blue" id="FEATUREDAPPS">
		<div class="container">
			<div class="text-center">
				<h2 class="title">MOVING ON UP</h2>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-5">
					<img src="<?php echo base_url("assets") ?>/assets/img/img-03.jpg" class="img-responsive">
				</div>
				<div class="col-sm-8 col-md-7">
					<div class=content-boxes-in-v3>
						<p>Building your app is fun, but getting it noticed is great! Our team provides continued support and guidance once your app is launched, to keep you moving in the right direction. Let us help your app climb the ladder to success.</p>
						<p><a href="<?php echo base_url("startnow") ?>" target="_blank" class="btn_white">GET STARTED</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="text-center support g-bg-orange g-padding-0" id=FEATUREDAPPS>
		<div class="container g-pt-130">
			<div class="g-heading-v7 g-mt-n100">
				<img src=<?php echo base_url("assets") ?>/assets/img-temp/doubleline.png alt=arrow class="hidden-xs doublelineimage_three">
				<h2 class="g-mb-40 h2 font_size_32 font_bold color_white">Start My Amazing App Idea!</h2>
				<span class="g-mb-40 font_size_17 color_white">Let us show you how easy it can be to make your app a reality.<br />Launch your mobile app with BrainyApps today!</span>
				<img src=<?php echo base_url("assets") ?>/assets/img-temp/doubleline.png alt=arrow class="hidden-xs doublelineimage_four">
			</div>
			<div class="row start_amazing_app g-mt-15">
				<div class="col-md-5 col-sm-6 col-xs-12 getstarte-hidemobileview">
					<img src=<?php echo base_url("assets") ?>/assets/img-temp/review.png alt=bubble class="hidden-xs g-pl-22">
					<form action="" class="sky-form simple-form" method=post id=f1_other name=f1_other>
						<input name=step type=hidden value=1>
						<input id=crmId_1_other name=crmId type=hidden>
						<div class="text-left">
							<h4 class="g-pl-36 font_black color_white">CONFIDENTIAL & FREE APP REVIEW:</h4>
						</div>
						<br>
						<fieldset>
							<label class="g-mb-20 input">
								<input id=firstname_1_other name=fname class=rounded-2x placeholder="first name" onchange=checkMandatory_step_1_other() required>
							</label>
							<label class="g-mb-20 input">
								<input id=lastname_1_other name=lname class=rounded-2x placeholder="last name">
							</label>
							<label class="g-mb-20 input">
								<input id=phone_1_other name=phone class=rounded-2x placeholder="mobile phone">
							</label>
							<label class="g-mb-20 input">
								<input id=email_1_other name=email class=rounded-2x placeholder="email address" onchange=checkMandatory_step_1_other_email() required type=email> <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
							</label>
							<label class=select>
								<select name=18years>
									<option value=0 disabled selected>Are you at least 18 years old?
									<option value=1>Yes
									<option value=2>No
								</select> <i></i>
							</label>
							<div class="error_msg" id=f1_other_err_show></div>
							<button class="rounded-2x btn-u btn-u-lg btn-u-upper g-width-100 btn_submit_white" type=button id=step_1_other onclick="checkMandatory_step_1_other(); checkMandatory_step_1_other_email();">Get Started</button>
						</fieldset>
					</form>
				</div>
				<div class="col-md-6 col-sm-6 start_amazing_app_img">
					<div class=img-center>
						<img src=<?php echo base_url("assets") ?>/landingassets/assets/img-temp/c9.png alt="WE ARE BRAINY APPS COMPANY" class=img-responsive>
					</div>
				</div>
			</div>
			<br>
			<br>
		</div>
	</section>
	<section class="text-center support g-bg-orange getstarte-hidedesktopview g-padding-0">
		<div class="container g-pb-30 start_amazing_app">
			<div class=row>
				<div class="col-xs-12">
					<form action="" class="sky-form simple-form" method=post id=f_mobile name=f_mobile style="box-shadow:0 0 0">
						<input name=step type=hidden value=1>
						<input id=crmId_mobile name=crmId type=hidden>
						<div style=text-align:left>
							<h4 class="font_black color_white g-pl-36">GET STARTED FOR FREE</h4>
						</div>
						<br>
						<fieldset>
							<label class="g-mb-20 input">
								<input id=firstname_mobile name=fname class=rounded-2x placeholder="First name" onchange=checkMandatory_step_mobile() required>
							</label>
							<label class="g-mb-20 input">
								<input id=lastname_mobile name=lname class=rounded-2x placeholder="Last name">
							</label>
							<label class="g-mb-20 input">
								<input id=phone_mobile name=phone class=rounded-2x placeholder="Your phone">
							</label>
							<label class="g-mb-20 input">
								<input id=email_mobile name=email class=rounded-2x placeholder="Email address" onchange=checkMandatory_step_mobile_email() required type=email> <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
							</label>
							<label class=select>
								<select name=18years>
									<option value=0 disabled selected>Are you at least 18 years old?
									<option value=1>Yes
									<option value=2>No
								</select> <i></i>
							</label>
							<div class="error_msg" id=f_mobile_err_show></div>
							<button class="rounded-2x btn-u btn-u-lg btn-u-upper g-width-100 btn_submit_white" type=button id=step_mobile onclick="checkMandatory_step_mobile(); checkMandatory_step_mobile_email();">Get Started Now</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="g-padding-0" id=contact>
		<div class=copyright-section>
			<p>©2016-2017 Brainy Apps LLC, 3350 SW 148 Avenue, Suite 110, Miramar, Florida, 33027, USA, Earth. All Rights Reserved.
				<ul class=social-icons>
					<li>
						<a href=https://www.facebook.com/BrainyAppsLLC/ class="rounded-x social_facebook" data-original-title=Facebook target=_blank></a>
					</li>
					<li>
						<a href=https://twitter.com/BrainyAppsLLC class="rounded-x social_twitter" data-original-title=Twitter target=_blank></a>
					</li>
					<li>
						<a href=https://plus.google.com/112088372179926688190 class="rounded-x social_googleplus" data-original-title="Goole Plus" target=_blank></a>
					</li>
					<li>
						<a href=https://www.pinterest.com/brainyapps/ class="rounded-x social_pintrest" data-original-title=Pinterest target=_blank></a>
					</li>
					<li>
						<a href=https://www.linkedin.com/company/brainyapps class="rounded-x social_linkedin" data-original-title=Linkedin target=_blank></a>
					</li>
					<li>
						<a href=https://www.tumblr.com/blog/brainyapps class="rounded-x social_tumblr" data-original-title=Tumblr target=_blank></a>
					</li>
				</ul>
		</div>
	</section>
	<div class="hidden">
		<form action=https://www.aweber.com/scripts/addlead.pl class=af-form-wrapper method=post id=formAweber_l1_emailonly accept-charset=UTF-8>
			<div class="hidden">
				<input name=meta_web_form_id type=hidden value=673567249>
				<input name=meta_split_id type=hidden>
				<input name=listname type=hidden value=awlist4290237>
				<input id=redirect_65b8c385fd7acfa885f54e3f5415bfab name=redirect type=hidden value="https://www.aweber.com/thankyou.htm?m=default">
				<input name=meta_adtracking type=hidden value=From_BrainyApps>
				<input name=meta_message type=hidden value=1>
				<input name=meta_required type=hidden value=name,email>
				<input name=meta_tooltip type=hidden>
			</div>
			<div class=af-form id=af-form-673567249>
				<div class=af-header id=af-header-673567249>
					<div class=bodyText>
						<p>
					</div>
				</div>
				<div class="af-body af-standards" id=af-body-673567249>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752363>Name:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752363 name=name class=text tabindex=500 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752364>Email:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752364 name=email class=text tabindex=501 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752365>App Type:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752365 name="custom App Type" class=text tabindex=502 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752366>App Description:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752366 name="custom App Description" class=text tabindex=503 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752367>Phone:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752367 name="custom Phone" class=text tabindex=504 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752368>Lead Source:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752368 name="custom Lead Source" class=text tabindex=505 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752369>ClientIp:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752369 name="custom ClientIp" class=text tabindex=506 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class="af-element buttonContainer">
						<input id=af-submit-image-673567249 name=submit class=image type=image alt="Submit Form" src=//aweber.com/images/forms/plain/buttons/grey.png tabindex=507>
						<div class=af-clear></div>
					</div>
					<div class="af-element privacyPolicy" class="text-center">
						<p>We respect your <a href=https://www.aweber.com/permission.htm target=_blank rel=nofollow title="Privacy Policy">email privacy</a>
							<div class=af-clear></div>
					</div>
					<div class="af-element poweredBy">
						<p><a href=https://www.aweber.com target=_blank rel=nofollow title="AWeber Email Marketing">Powered by AWeber Email Marketing</a>
							<div class=af-clear></div>
					</div>
				</div>
				<div class=af-footer id=af-footer-673567249>
					<div class=bodyText>
						<p>
					</div>
				</div>
			</div>
			<div class="hidden">
				<img src="https://forms.aweber.com/form/displays.htm?id=bOzMrGzsTCyc" alt="">
			</div>
		</form>
	</div>
	<div class="hidden">
		<form action=https://www.aweber.com/scripts/addlead.pl class=af-form-wrapper method=post id=formAweber_l1_withphone accept-charset=UTF-8>
			<div class="hidden">
				<input name=meta_web_form_id type=hidden value=1578642580>
				<input name=meta_split_id type=hidden>
				<input name=listname type=hidden value=awlist4290245>
				<input id=redirect_8666951c41f4a81ab710674683da2222 name=redirect type=hidden value="https://www.aweber.com/thankyou.htm?m=default">
				<input name=meta_adtracking type=hidden value=From_BrainyApps>
				<input name=meta_message type=hidden value=1>
				<input name=meta_required type=hidden value=name,email>
				<input name=meta_tooltip type=hidden>
			</div>
			<div class=af-form id=af-form-1578642580>
				<div class=af-header id=af-header-1578642580>
					<div class=bodyText>
						<p>
					</div>
				</div>
				<div class="af-body af-standards" id=af-body-1578642580>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752449>Name:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752449 name=name class=text tabindex=500 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752450>Email:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752450 name=email class=text tabindex=501 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752451>App Type:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752451 name="custom App Type" class=text tabindex=502 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752452>App Description:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752452 name="custom App Description" class=text tabindex=503 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752453>Phone:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752453 name="custom Phone" class=text tabindex=504 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752454>Lead Source:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752454 name="custom Lead Source" class=text tabindex=505 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class=af-element>
						<label class=previewLabel for=awf_field-82752455>ClientIp:</label>
						<div class=af-textWrap>
							<input id=awf_field-82752455 name="custom ClientIp" class=text tabindex=506 onblur='""==this.value&&(this.value="")' onfocus='""==this.value&&(this.value="")'>
						</div>
						<div class=af-clear></div>
					</div>
					<div class="af-element buttonContainer">
						<input id=af-submit-image-1578642580 name=submit class=image style="background:0 0;max-width:100%" type=image alt="Submit Form" src=//aweber.com/images/forms/plain/buttons/grey.png tabindex=507>
						<div class=af-clear></div>
					</div>
					<div class="af-element privacyPolicy" style=text-align:center>
						<p>We respect your <a href=https://www.aweber.com/permission.htm target=_blank rel=nofollow title="Privacy Policy">email privacy</a>
							<div class=af-clear></div>
					</div>
					<div class="af-element poweredBy" style=text-align:center;font-size:9px>
						<p><a href=https://www.aweber.com target=_blank rel=nofollow title="AWeber Email Marketing">Powered by AWeber Email Marketing</a>
							<div class=af-clear></div>
					</div>
				</div>
				<div class=af-footer id=af-footer-1578642580>
					<div class=bodyText>
						<p>
					</div>
				</div>
			</div>
			<div class="hidden">
				<img src="https://forms.aweber.com/form/displays.htm?id=jKzsHGwsTKwcDA==" alt="">
			</div>
		</form>
	</div>

	<script>
		var base_url = '<?php echo base_url() ?>';
		var ip = "<?= $ip; ?>";
		var country = "<?= $country; ?>";
		var state = "<?= $state; ?>";
		var city = "<?= $city; ?>";
		var zipCode = "<?= $zipCode; ?>";
		var redirect_url_landing = "<?= $redirect_url_landing; ?>";

		function loadCss(filename) {
			var l = document.createElement('link');
			l.rel = 'stylesheet';
			l.href = filename
			var h = document.getElementsByTagName('head')[0];
			h.parentNode.insertBefore(l, h);
		}

		function cb() {
			loadCss('//fonts.googleapis.com/css?family=Open+Sans:400,300,700,500&subset=cyrillic,latin');
			loadCss('<?php echo base_url("assets") ?>/landingassets/assets/plugins/bootstrap/css/bootstrap.min.css');
			loadCss('<?php echo base_url("assets") ?>/getstarted/assets/plugins/bootstrap/css/bootstrap.min.css');
			loadCss('<?php echo base_url("assets") ?>/getstarted/assets/plugins/font-awesome/css/font-awesome.min.css');
			loadCss('<?php echo base_url("assets") ?>/landingassets/assets/css/consulting.style.css');
			loadCss('<?php echo base_url("assets") ?>/assets/css/one.style.css');
		}
		var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
		if (raf) {
			raf(cb);
		} else {
			window.addEventListener('load', cb);
		}
	</script>

	<script src=<?php echo base_url("assets") ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/plugins/jquery/jquery-migrate.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/plugins/smoothScroll.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/plugins/jquery.easing.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/plugins/jquery.parallax.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/plugins/counter/waypoints.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/plugins/counter/jquery.counterup.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/js/forms/login.js defer></script>
	<script src=<?php echo base_url("assets") ?>/assets/js/forms/contact.js defer></script>

	<!--[if lt IE 9]><script src=assets/plugins/respond.js></script><script src=assets/plugins/html5shiv.js></script><script src=assets/js/plugins/placeholder-IE-fixes.js></script><script src=assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js></script><![endif]-->
	<!--[if lt IE 10]><script src=assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js></script><![endif]-->

	<script src=<?php echo base_url("assets") ?>/js/page/service_step_0.js defer></script>
</body>

</html>