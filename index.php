<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="de"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="wixzi" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
	<title>WIXZI - Weaving Innovations</title>
	<script type="text/javascript" async defer src="https://apis.google.com/js/platform.js?publisherid=104423235253156211641"></script>
	<link href="css/fonts.css" rel="stylesheet" type="text/css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css" title="style"/>
	<link href="css/isotope.css" rel="stylesheet" type="text/css"/>
	<link href="css/flexslider.css" rel="stylesheet" type="text/css"/>
	<link href="css/fancybox.css" rel="stylesheet" type="text/css"/>
	<link href="css/mqueries.css" rel="stylesheet" type="text/css" media="screen"/>
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.modernizr.min.js"></script>
</head>
<body id="home">
<div id="page">
	<header id="header">
		<div class="header_inner wrapper">
			<div class="header_top clearfix">
				<div id="logo" class="left_float">
					<a class="logotype" href="index.php"><img src="images/logo-new.png" alt="WIXZI"></a></div>

				<nav id="nav" class="right_float">
					<ul>
						<li><a href="index.php" class="active">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="portfolio.php">Portfolio</a>
						<li><a href="pricingtable.php">Pricing</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
			<div class="header_tagline">
				<h1><strong>Weaving Innovation</strong></h1>

				<h3>Creating Web Art to make brands boom.</h3>
			</div>
		</div>
	</header>

	<div id="animationsection" class="clearfix">

		<div id="slidersection">
			<div id="slider" class="slidermain">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="images/slider-01.png"/></li>
						<li>
							<img src="images/slider-02.jpg"/></li>
						<li>
							<img src="images/slider-03.jpg"/></li>
						<li>
							<img src="images/slider-04.jpg"/></li>
					</ul>
				</div>
			</div>
		</div>

		<div id="loadingsection">
			<div id="pageloader" class="clearfix">
				<!-- CONTENT WILL BE LOADED HERE -->
			</div>
		</div>

		<div id="loader">
			<div class="wrapper">
				<div class="loadingicon"><span><i>Loading</i></span></div>
			</div>
		</div>
	</div>

	<section id="main">
		<div class="main_inner wrapper clearfix">

			<div class="column one_fourth">
				<div class="team-member">
					<img src="images/webdevelopment.jpg" alt="Person"/>

					<div class="team-meta">
						<h5><strong>CMS</strong></h5>
						<!--<span class="team-title"><i>General Manager</i></span>-->
					</div>
					<p>
						Dynamic websites that make the contents manageable with ease. We are proficient in server side scripting. Wordpress, Joomla, Drupal. </p>
				</div>
			</div>

			<div class="column one_fourth">
				<div class="team-member">
					<img src="images/web-design.jpg" alt="Person"/>

					<div class="team-meta">
						<h5><strong>Web Design</strong></h5>
					</div>
					<p>
						Creating beautiful web services to bloom your business. </p>
				</div>
			</div>

			<div class="column one_fourth">
				<div class="team-member">
					<img src="images/software.jpg" alt="Person"/>

					<div class="team-meta">
						<h5><strong>Softwares</strong></h5>
					</div>
					<p>
						Cunning solutions for smarter problems. Make the web to globalise solutions to Z-Generation needs and wants. </p>
				</div>
			</div>

			<div class="column one_fourth last">
				<div class="team-member">
					<img src="images/cms.jpg" alt="Person"/>

					<div class="team-meta">
						<h5><strong>Apps</strong></h5>
					</div>
					<p>
						Serve new cutting edge platforms and mobile apps.</p>
				</div>
			</div>
			<!-- END #recentworks -->

		</div>
		<!-- END #main_inner -->
	</section>
	<!-- END #main -->

	<section id="bottom">
		<div class="bottom_inner wrapperoverlay">
			<div class="widget"><h6>Social Media</h6>

				<div class="socialmedia">
					<a class="facebook" href="https://www.facebook.com/weavingwixzi" target="_blank"><span>Facebook</span></a>
					<a class="twitter" href="https://twitter.com/WixziSolutions" target="_blank"><span>Twitter</span></a>
					
					<a class="googleplus" href="https://plus.google.com/111069078158403020866" rel="publisher" target="_blank"><span>Google+</span></a></div>
			</div>
		</div>
	</section>
	<!-- END #bottom -->

	<footer id="footer">
		<div class="footer_inner wrapper clearfix">
			<div class="column full">
				<div class="widget">
					<h6 class="sectiontitle">Latest Tweets</h6>

					<div id="twitter-widget">
						<?php include_once('tweets.php') ?>
					</div>
				</div>
			</div>
		</div>
		<!-- END .footer_inner -->
		<div class="footer_bottom clearfix ">
			<div class="left_float">Copyright Wixzi © <?php
                $copyYear = 2008; // Set your website start date
                $curYear = date('Y'); // Keeps the second year updated
                echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                ?>. All rights reserved.</div>

		</div>
	</footer>
	<!-- END #footer -->

	<a href="" class="totop" title="Back to top">ToTop</a>

</div>
<!-- END #page -->

<!-- jquery -->
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src='js/jquery.easing.1.3.js'></script>
<script src='js/jquery.easing.compatibility.js'></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/script.js"></script>
<script src="js/loader.js"></script>

</body>
</html>


