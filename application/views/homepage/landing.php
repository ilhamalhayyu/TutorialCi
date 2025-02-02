<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<title>Test Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="icon" href= {{ assets('i/favicon.png') }} type="image/x-icon"> -->
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:100,200,300,400,600,500,700,800,900|Open+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin" rel="stylesheet">
	<!-- Bootstrap 4.3.1 CSS -->
	<!-- 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">


<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css')?>">

<!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->

<link rel="stylesheet" href="{{assets('css/jquery.fancybox.min.css')}} ">

<!-- AOS 2.3.1 jQuery plugin CSS (Animations) -->
<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css')?>">

<!-- FontAwesome CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!-- Startup 3 CSS (Styles for all blocks) -->
<link href="{{ assets('css/style.css')}}" rel="stylesheet" />
<!-- jQuery 3.3.1 -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
</head>
<body>
	<!-- Navigation 18 -->

	<nav class="navigation_18 bg-dark pt-30 pb-30 lh-40 text-center">
		<div class="container px-xl-0">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-auto text-lg-left" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
					<a href="#" class="logo link color-white">Startup 3</a>
				</div>
				<div class="col-lg-9 text-lg-right" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
					<a href="#" class="link color-white mr-15">Tour</a>
					<a href="#" class="link color-white mx-15">Prices</a>
					<a href="#" class="link color-white mx-15">About</a>
					<a href="#" class="link color-white mx-15">F.A.Q.</a>
					<a href="#" class="link color-white mx-15">Support</a>
					<form method="GET" action="/" class="ml-15 mt-10 mt-md-0 d-inline-block">
						<input type="text" name="search" placeholder="Search" class="input sm w-200 mw-full border-transparent-white focus-white color-white placeholder-transparent-white text-center text-md-left" />
						<input type="submit" class="d-none" />
					</form>
				</div>
			</div>
		</div>
	</nav>
	<!-- Feature 44 -->

	<section class="feature_44 bg-light pt-100 text-center text-md-left">
		<div class="container px-xl-0">
			<div class="row align-items-center align-items-lg-start">
				<div class="col-xl-1"></div>
				<div class="col-lg-5 col-md-7" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
					<h2 class="mt-20 mb-30 small">Work Hurd, <br />Stat Humble</h2>
					<div class="f-22 color-heading text-adaptive">
						This I have produced as a scantling of
						Jack’s great eloquence and the force of
						his reasoning upon such abstruse matters.
					</div>
					<a href="#" class="mt-30 btn border-gray color-main">Learn More</a>
				</div>
				<div class="col-md-1"></div>
				<div class="col-lg-5 col-md-4" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
					<img srcset="i/feature_44_img_1@2x.png 2x" src="i/feature_44_img_1.png" class="img" alt="" />
				</div>
			</div>
			<div class="mt-75 row justify-content-center justify-content-md-between align-items-end align-items-lg-start flex-row-reverse row2">
				<div class="col-xl-1"></div>
				<div class="col-lg-5 col-md-6 pb-60 pb-lg-0 inner2" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
					<h2 class="mt-55 mb-30 small">It Was a Large <br />Long Room</h2>
					<div class="f-22 color-heading text-adaptive">
						This little wandering journey, without
						settled place of abode, had been so
						unpleasant to me, that my own house, as I called.
					</div>
					<a href="#" class="mt-30 btn border-gray color-main">Learn More</a>
				</div>
				<div class="col-md-1"></div>
				<div class="col-xl-4 col-lg-5 col-md-5 col-sm-6 col-8" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
					<img srcset="i/feature_44_img_2@2x.png 2x" src="i/feature_44_img_2.png" class="img-fluid img" alt="" />
				</div>
				<div class="col-xl-1"></div>
			</div>
		</div>
	</section>

<!-- Content 31 -->

<section class="content_31 bg-dark pt-100 pb-70 text-center color-white">
	<div class="container px-xl-0">
		<div class="row justify-content-center">
			<h2 class="small col-lg-8" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Our Great Clients</h2>
			<div class="col-lg-8 mt-25 mb-55 f-18 medium op-7 text-adaptive">
				<span data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				Startup includes great form options for your startup projects. Each <br />
				component is coded for web which makes creating a website quick and easy.				</span>
			</div>
		</div>
		<div class="row justify-content-center">
						<div class="col-lg-3 col-md-5 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<div class="mx-auto mb-30 mw-270 h-160 d-flex justify-content-center align-items-center radius6 block">
					<img srcset="i/content_37_logo_1@2x.png 2x" src="i/content_37_logo_1.png" alt="" />
				</div>
			</div>
						<div class="col-lg-3 col-md-5 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="150">
				<div class="mx-auto mb-30 mw-270 h-160 d-flex justify-content-center align-items-center radius6 block">
					<img srcset="i/content_37_logo_2@2x.png 2x" src="i/content_37_logo_2.png" alt="" />
				</div>
			</div>
						<div class="col-lg-3 col-md-5 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<div class="mx-auto mb-30 mw-270 h-160 d-flex justify-content-center align-items-center radius6 block">
					<img srcset="i/content_37_logo_3@2x.png 2x" src="i/content_37_logo_3.png" alt="" />
				</div>
			</div>
						<div class="col-lg-3 col-md-5 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="450">
				<div class="mx-auto mb-30 mw-270 h-160 d-flex justify-content-center align-items-center radius6 block">
					<img srcset="i/content_37_logo_4@2x.png 2x" src="i/content_37_logo_4.png" alt="" />
				</div>
			</div>
						<div class="col-lg-3 col-md-5 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
				<div class="mx-auto mb-30 mw-270 h-160 d-flex justify-content-center align-items-center radius6 block">
					<img srcset="i/content_37_logo_5@2x.png 2x" src="i/content_37_logo_5.png" alt="" />
				</div>
			</div>
						<div class="col-lg-3 col-md-5 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="750">
				<div class="mx-auto mb-30 mw-270 h-160 d-flex justify-content-center align-items-center radius6 block">
					<img srcset="i/content_37_logo_6@2x.png 2x" src="i/content_37_logo_6.png" alt="" />
				</div>
			</div>
						<div class="col-lg-3 col-md-5 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="900">
				<div class="mx-auto mb-30 mw-270 h-160 d-flex justify-content-center align-items-center radius6 block">
					<img srcset="i/content_37_logo_7@2x.png 2x" src="i/content_37_logo_7.png" alt="" />
				</div>
			</div>
						<div class="col-lg-3 col-md-5 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="1050">
				<div class="mx-auto mb-30 mw-270 h-160 d-flex justify-content-center align-items-center radius6 block">
					<img srcset="i/content_37_logo_8@2x.png 2x" src="i/content_37_logo_8.png" alt="" />
				</div>
			</div>
					</div>
	</div>
</section>

<!-- Feature 13 -->

<section class="feature_13 bg-light pt-100 pb-50">
	<div class="container px-xl-0">
		<div class="row justify-content-center">
			<div class="col-xl-8 col-lg-10 text-center" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<h6 class="f-22 regular">
					Samples will show you the feeling on how to play around using the
					components in the website building process.
				</h6>
			</div>
			<div class="col-xl-11 text-center" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<img srcset="i/feature_13_img@2x.png 2x" src="i/feature_13_img.png" class="mt-55 mb-40 mb-md-0 img-fluid bg" alt="" />
			</div>
		</div>
		<div class="row text-center text-md-left">
			<div class="col-xl-1"></div>
			<div class="col-xl-5 col-md-6 mb-40" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<div class="mb-20 f-18 medium title">How Startup Framework works?</div>
				<div class="color-heading text-adaptive">
					The Generator App is an online tool that helps you to
					export ready-made templates ready to work as your
					future website. It helps you to combine slides, panels and
					other components and export it as a set of static files:
					HTML/CSS/JS.
				</div>
			</div>
			<div class="col-xl-5 col-md-6 mb-40" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<div class="mb-20 f-18 medium title">Do you provide hosting with Startup?</div>
				<div class="color-heading text-adaptive">
					No, hosting is on you. You upload the result on your <br />
					hosting via FTP or using other tools you like. You can use
					any server, just make sure it have a PHP installed in case if
					you need a contact form.
				</div>
			</div>
			<div class="col-xl-1"></div>
		</div>
	</div>
</section>
<!-- Call to Action 7 -->

<section class="call_to_action_7 bg-light pt-100 pb-100 text-center">
	<div class="container px-xl-0">
		<div class="row justify-content-center">
			<div class="col-xl-9 col-lg-10">
				<img srcset="i/call_to_action_7_img@2x.jpg 2x" src="i/call_to_action_7_img.jpg" alt="" class="img-fluid radius30"  data-aos-duration="600" data-aos="fade-down" data-aos-delay="0"/>
				<h2 class="mt-30 mb-20 small" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">Startup 3</h2>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-8 col-sm-10">
				<div class="color-heading text-adaptive" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
					A high-quality solution for those who want a
					beautiful startup website quickly.				</div>
				<div data-aos-duration="600" data-aos="fade-down" data-aos-delay="900">
				<a href="#" class="mt-45 btn lg action-1">Download on App Store</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Form 13 -->

<section class="form_13 bg-light pt-105 pb-100">
	<div class="container px-xl-0">
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h2 class="mb-55 small text-center" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Choose Your Payment Method</h2>
				<form action="form-handler.php" method="post">
					<div class="mb-30 px-65 pt-45 pb-45 radius10 js-form-block" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
						<input type="radio" name="method" class="d-none border-gray focus-action-1" id="form_13_radio_paypal" value="PayPal" />
						<label for="form_13_radio_paypal" class="mb-10 f-18 medium">PayPal</label>
						<div class="ml-30 color-heading text-adaptive">
							Safe payment online. Credit card needed. PayPal account is not necessary.
						</div>
						<div class="ml-30 inner">
							<div class="w-370 block">
								<input type="email" name="email" placeholder="Email address" class="mt-25 input w-full border-gray focus-action-1 color-heading placeholder-heading" />
							</div>
						</div>
					</div>
					<div class="px-65 pt-45 pb-25 radius10 relative js-form-block active" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
						<div class="absolute f-42 color-gray d-none d-sm-block icons">
							<i class="fab fa-cc-visa mr-10"></i>
							<i class="fab fa-cc-mastercard mr-10"></i>
							<i class="fab fa-cc-discover mr-10"></i>
							<i class="fab fa-cc-amex"></i>
						</div>
						<input type="radio" name="method" class="d-none border-gray focus-action-1" id="form_13_radio_card" value="Credit Card" checked />
						<label for="form_13_radio_card" class="mb-10 f-18 medium">Credit Card</label>
						<div class="ml-30 color-heading text-adaptive">
							Safe money transfer using your bank account.
						</div>
						<div class="ml-30 mt-25 d-flex flex-wrap inner">
							<div class="w-370 mr-30 mb-35 block">
								<div class="mb-10 f-14 semibold text-uppercase sp-20">Credit Card Number</div>
								<input type="text" name="card" class="js-card-mask input w-full border-gray focus-action-1 color-heading placeholder-heading" />
							</div>
							<div class="w-370 mb-35 block">
								<div class="mb-10 f-14 semibold text-uppercase sp-20">Expiration</div>
								<input type="text" name="exp" class="js-expiration-mask input w-full border-gray focus-action-1 color-heading placeholder-heading" />
							</div>
							<div class="w-370 mr-30 mb-35 block">
								<div class="mb-10 f-14 semibold text-uppercase sp-20">Cardholder Name</div>
								<input type="text" name="name" class="input w-full border-gray focus-action-1 color-heading placeholder-heading" />
							</div>
							<div class="w-370 block">
								<div class="mb-10 f-14 semibold text-uppercase sp-20">CVV Code</div>
								<div class="d-flex flex-wrap justify-content-between">
									<input type="text" name="cvv" class="mb-20 input w-80 border-gray focus-action-1 color-heading placeholder-heading" />
									<button class="btn action-1">Checkout</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Footer 11 -->

<footer class="footer_11 bg-dark pt-45 pb-45 color-white text-center">
	<div class="container px-xl-0">
		<div class="row align-items-center">
			<div class="mb-20 mb-lg-0 col-lg-3" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<a href="#" class="logo link color-white">Startup 3</a>
			</div>
			<div class="col-lg-9 text-lg-right" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<a href="#" class="link color-white mr-10">Privacy Policy</a>
				<a href="#" class="link color-white mx-10">Terms</a>
				<div class="d-inline-block socials">
					<a href="#" class="link color-white mx-10"><i class="fab fa-twitter"></i></a>
					<a href="#" class="link color-white mx-10"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="link color-white ml-10"><i class="fab fa-google-plus-g"></i></a>
				</div>
			</div>
		</div>
		<div data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
			<div class="mt-45 mb-45 hr h-2 bg-white op-3"></div>
		</div>
		<div class="row">
			<div class="mb-20 mb-lg-0 col-lg-7" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<a href="#" class="link color-white mr-10">Tour</a>
				<a href="#" class="link color-white mx-10">Features</a>
				<a href="#" class="link color-white mx-10">Pricing Plans</a>
				<a href="#" class="link color-white mx-10">Our Works</a>
				<a href="#" class="link color-white mx-10">Brands</a>
				<a href="#" class="link color-white ml-10">Contacts</a>
			</div>
			<div class="col-lg-5 text-lg-right" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<div class="text-adaptive">
					&copy; 2019 Designmodo. All rights reserved.
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- forms alerts -->
<div class="alert alert-success alert-dismissible alert-form-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Thanks for your message!
</div>
<div class="alert alert-warning alert-dismissible alert-form-check-fields" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Please, fill in required fields.
</div>
<div class="alert alert-danger alert-dismissible alert-form-error" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	An error occurred while sending data :(
</div>
<!-- popup with video -->
<div class="overlay"></div>

<div class="video_popup">
	<a class="close">
		<img srcset="i/close_white@2x.png 2x" src="i/close_white.png" alt="" />
	</a>
	<div class="d-flex align-items-center justify-content-center w-full h-full iframe_container"></div>
</div>

<!-- Bootstrap 4.3.1 JS -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> -->
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
<!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!-- Google maps JS API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
<!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- AOS 2.3.1 jQuery plugin JS (Animations) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
<script src="<?php echo base_url('assets/js/jquery.maskedinput.min.js')?>"></script>
<!-- Startup 3 JS (Custom js for all blocks) -->
<script src="<?php echo base_url('assets/js/script.js')?>"></script>

	</body>
</html>
