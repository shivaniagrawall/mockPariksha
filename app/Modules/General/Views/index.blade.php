<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>Educatoin ERP</title>
		<!-- Bootstrap core CSS -->
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="{{ asset('public/assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="{{ asset('public/assets/css/bootstrap.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('public/assets/css/flexslider.css') }}" media="screen">
		<link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('public/assets/css/owl.transitions.css') }}">
		<link rel="stylesheet" href="{{ asset('public/assets/css/owl.theme.css') }}">
		<link href="{{ asset('public/assets/css/font-awesome.css') }}" rel="stylesheet">
		<link href="{{ asset('public/assets/css/main1.css') }}" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="{{ asset('public/assets/js/ie-emulation-modes-warning.js') }}"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header class="header">
			<div class="top-header">
				<div class="row">
					<div class="col-md-6">
						<div class="top-header__contacts"><span><i class="fa fa-mobile"></i>  (00) 222 666 444 </span> | <span><i class="fa fa-envelope-o"></i> <a href="mailto:info(at)mycompany.com">info(at)mycompany.com</a></span></div>
					</div>
					<div class="col-md-6 social-media">
						<ul class="pull-right clearfix">
							<li class="fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="g"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="rss"><a href="#"><i class="fa fa-rss"></i></a></li>
							<li class="lin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- end col --> 
				</div>
				<!-- end row  --> 
				<!-- end container  --> 
			</div>
			<nav class="navbar">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="{{ asset('public/assets/images/logo.png') }}" width="80%" alt="Educatoin ERP"></a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php"> <i class="fa fa-home"></i> Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-building"></i> Company <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="about.html">About US </a></li>
								<li><a href="our-mission.html">Our Mission</a></li>
								<li><a href="contact.html">Contact US </a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-file-text-o"></i> IC-33 Exam  <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="exam-material.html">IC33 Exam Material </a></li>
								<li><a href="exam-training-video.html">IC33 Exam Training Video </a></li>
								<li><a href="exam-practice-test .html">IC33 Exam Practice Test </a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-secret"></i> LIC agent   <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="introduction.html"> Introduction </a></li>
								<li><a href="job-profile.html"> Job Profile of LIC Agent </a></li>
								<li><a href="attributes-you-should-possess.html"> Attributes You Should Possess </a></li>
								<li><a href="benefits-LIC-agency.html"> Benefits of LIC Agency </a></li>
								<li><a href="market-potential.html"> Market Potential </a></li>
								<li><a href="remuneration.html"> Remuneration </a></li>
								<li><a href="club-memberships.html"> Club Memberships </a></li>
								<li><a href="gratuity.html"> Gratuity </a></li>
								<li><a href="mdtr.html"> International Recognition from MDRT </a></li>
								<li><a href="profile-LIC-india.html"> Profile of LIC of India </a></li>
								<li><a href="procedure-become-LIC-agent.html"> Procedure to Become LIC Agent </a></li>
								<li><a href="support-form-our-side.html"> Support form Our Side </a></li>
							</ul>
						</li>
						<li><a href="test.html"> <i class="fa fa-pencil-square-o"></i> Online Test </a></li>
						<li><a href="resources.html"> <i class="fa fa-cogs"></i> Resources  </a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
				<div class="register-details">
					<a href="login.php"><i class="fa fa-sign-in"></i>  Login</a>
					<a href="register.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Register</a>
				</div>
			</nav>
		</header>
		<!-- HomeSlider -->
		<div class="flexslider loading">
			<ul class="slides">
				<li>
					<img src="{{ asset('public/assets/images/banner1.jpg') }}" alt="Banner 1">
					<div class="flex-caption hidden-xs">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<article>
										<h1>Find Your  <span>Nearest LIC Agent  </span>& LIC Develpment Officer</h1>
									</article>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<img src="{{ asset('public/assets/images/banner2.jpg') }}" alt="Banner 2">
					<div class="flex-caption hidden-xs">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<article>
										<h1>Search   <span>Area Wise Agents</span> With  Full Details.</h1>
									</article>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- #End HomeSlider -->
		<main id="main" role="main">
			<div class="starter-template">
				<div class="container">
					<h1>Welcome to education-template</h1>
					<p class="lead">Welcome to Exclusive LIC Agent and LIC Development Officers elaborated Directory.
						Pune LIC Agents may be a Portal for Lic Agents and Development Officers in Pune wherever you'll realize Your Nearest LIC Agents and Development Officers in line with Your Specific space and Lic branch. 
						For example,If you would like to search out Associate in Nursing LIC Agent close to your space (Hadapsar,Hinjewadi,Shivaji Nagar, Pimpri, Laxmi Road,Kothrud,Aundh etc ) you'll choose the precise space n details of the Agents close to your space can displayed. 
						Our web site Advertises and Promotes LIC Agents and Development Officers. 
						Our LIC Agent Directory may be a free service for folks that area unit searching for a LIC Agent in their native space. whether or not folks area unit unaccustomed insurance or thinking of adjusting their policy, upgrading their policy etc., our directory can facilitate them in locating Associate in Nursing LIC Agent or a Development Officer. 
						Your listing in our LIC Agent Directory can embody data concerning your LIC Agency details like location, phone numbers, name, e-mail etc. 
						Website contains all the styles of lic and LIC agent communication prepration material ( IC-33 communication take a look at Player CD) and complete course of study for IC-33 communication in pdf format (eBook). 
						Why life assurance is vital ? 
					Life Insurance is that the best approach of economic coming up with. It protects your cash and ensures its growth, therefore providing you with complete money well being.</p>
				</div>
			</div>
			<section id="services-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 wrapper">
							<h3>History<span class="icon"></span></h3>
							<p>The Oriental Life Insurance Company, the first company in India offering life insurance coverage, was established in Calcutta in 1818 by Bipin Behari Dasgupta and others. Its primary target market was the Europeans based in India, and it charged Indians heftier premiums. Surendranath Tagore (son of Satyendranath Tagore) had founded Hindusthan Insurance Society, which later became Life Insurance Corporation. </p>
						</div>
						<div class="col-sm-4 wrapper">
							<h3>Products and services <span class="icon"></span></h3>
							<p>LIC offers a variety of insurance products to its customers such as insurance plans, pension plans, unit-linked plans, special plans and group schemes.</p>
						</div>
						<div class="col-sm-4 wrapper">
							<h3>Operations<span class="icon"></span></h3>
							<p>Today,the LIC has 8 zonal offices, around 109 divisional offices, 2,048 branches and 992 satellite offices and corporate offices; it also has 54 customer zones and 25 metro-area service hubs located in different cities and towns of India. It also has a network of 1,337,064 individual agents, 242 Corporate Agents, 79 Referral Agents, 98 Brokers and 42 Banks for soliciting life insurance business from the public. </p>
						</div>
					</div>
				</div>
			</section>
			<section id="testimonials">
				<div class="container">
					<div id="owl-demo" class="owl-carousel">
						<div class="wrapper">
							<details>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
								<i class="fa fa-caret-down"></i>
								<figure>
									<img src="{{ asset('public/assets/images/testi2-icon.png') }}" alt="">
									<figcaption>
										<p>
											<strong>John Doe</strong> <br>
											<span> Happy Client</span>
										</p>
									</figcaption>
								</figure>
							</details>
						</div>
						<div class="wrapper">
							<details>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
								<i class="fa fa-caret-down"></i>
								<figure>
									<img src="{{ asset('public/assets/images/testi-icon.png') }}" alt="">
									<figcaption>
										<p><strong>John Doe</strong> <br>
											<span> Happy Client</span>
										</p>
									</figcaption>
								</figure>
							</details>
						</div>
						<div class="wrapper">
							<details>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
								<i class="fa fa-caret-down"></i>
								<figure>
									<img src="{{ asset('public/assets/images/testi2-icon.png') }}" alt="">
									<figcaption>
										<p><strong>John Doe</strong> <br>
											<span> Happy Client</span>
										</p>
									</figcaption>
								</figure>
							</details>
						</div>
					</div>
				</div>
			</section>
			<section id="main-purpose">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="h3">What Is Our <span>Main Purpose</span>?</div>
							<ul>
								<li> The purpose of developing attendance record </li>
								<li> The management system will get computerized in terms of their daily tasks, which is mainly attendance. </li>
								<li> To generate the report automatically at the end of the session or in the between of the session </li>
							</ul>
						</div>
						<div class="col-sm-6">
							<div class="h3">How It <span>Benefits</span>?</div>
								<ul>
									<li>Benefits of LIC Agency as a Career:</li>
									<li>LIC agency is considered today as the highest paid profession in the world.</li>
									<li>It also provides you with the Royalty Income.</li>
									<li>You can start your own Business with less Capital Investment.</li>
									<li>You have freedom to set your own working hours.</li>
									<li>You have the opportunity to earn as per your potential.</li>
									<li>Your work gets easier and less demanding as your business grows.</li>
								</ul>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<h3>Educatoin ERP</h3>
							<p>Scl IT Solutions is an Information Technology company specialized in Hardware, Software & Networking Products, Solutions, Support, Maintenance of PC's, Servers, Laptops, Networking & Peripherals. Company started way back in 2011, by a Computer professional having 2 years of rich industrial experience in Hardware R&D, System Integration, Networking & Repairs.</p>
							<div class="register-details">
								<a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Read More</a>
							</div>
						</div>
						<div class="col-sm-4 col-sm-offset-1  col-xs-12">
							<h3>Company</h3>
							<ul>
								<li><a href="about.html">About US </a></li>
								<li><a href="our-mission.html">Our Mission</a></li>
								<li><a href="contact.html">Contact US </a></li>
							</ul>
						</div>
						<div class="col-sm-3 get-touch col-xs-12">
							<h3>Get in touch</h3>
							<address>
								<i class="fa fa-home" aria-hidden="true"></i> 
								500 Lorem Ipsum Dolor Sit, <br>
								22-56-2-9 Sit Amet, Lorem, <br>
								USA
							</address>
							<p>
								<i class="fa fa-phone" aria-hidden="true"></i> (00) 222 666 444 <br>
								<i class="fa fa-fax" aria-hidden="true"></i> (000) 000 00 00 0 <br>
								<i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="info(at)mycompany.com">info(at)mycompany.com</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div id="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-xs-12 copyright">
									Copyright &copy; 2016 - Educatoin ERP
						</div>
						<div class="col-sm-6 col-xs-12 powered-by">
							Powered By <span>~</span> <img alt="" src=""> <a href="http://www.itinfocube.com/" rel="follow" target="_blank"><span>~</span></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
		<script defer src="{{ asset('public/assets/js/flexslider.js') }}"></script>
		<script src="{{ asset('public/assets/js/responsiveCarousel.js') }}"></script>
		<script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
		<script>
			$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						slider.removeClass('loading');
					}
				});
			});

			jQuery(document).ready(function($){
				$('.crsl-items').carousel({ visible: 3, itemMinWidth: 200, itemMargin: 20, speed:700, autoRotate:6000});
				$(".design-expert article ul li").prepend("<i class='fa fa-check-circle'></i>");
			});
		</script>	
		<script>
			$(document).ready(function() {
				$("#owl-demo").owlCarousel({
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 2,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
		});
			});
		</script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="{{ asset('public/assets/js/ie10-viewport-bug-workaround.js') }}">
			
		</script>
	</body>
</html>

