<!doctype html>
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

	<!-- scaling not possible (for smartphones, ipad, etc.) -->
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>

	<title>WIXZI Weaving Innovations</title>
	<link href="css/fonts.css" rel="stylesheet" type="text/css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css" title="style"/>
	<link href="css/isotope.css" rel="stylesheet" type="text/css"/>
	<link href="css/flexslider.css" rel="stylesheet" type="text/css"/>
	<link href="css/fancybox.css" rel="stylesheet" type="text/css"/>

	<link href="css/mqueries.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="demo/demo.css" rel="stylesheet"/>
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.modernizr.min.js"></script>

</head>
<body id="portfolio">
<div id="page">


	<header id="header">
		<div class="header_inner wrapper">

			<div class="header_top clearfix">
				<div id="logo" class="left_float">
					<a class="logotype" href="index.php"><img src="images/logo-new.png" alt="Logotype"></a></div>

				<nav id="nav" class="right_float">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="portfolio.php">Portfolio</a></li>
						<li><a href="pricingtable.php">Pricing</a></li>
						<li><a href="contact.php" class="active">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<section id="pagetitle">
		<div class="pagetitle_inner wrapperoverlay">
			<h2><strong>Contact</strong><span class="tagline">Let's keep in touch</span></h2>
		</div>
	</section>

	<section id="main">
		<div class="main_inner wrapper clearfix">

			<article>
				<div class="column two_third">
					<h4><strong>Drop us a message</strong></h4>

					<form id="contact-form" class="checkform" action="" target="sentCoontact.php" method="post">
						<div><label for="name" class="req">NAME *</label>
							<input type="text" name="name" class="name" value="NAME *" onFocus="if (this.value == 'NAME *') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'NAME *';}"/></div>
						<div><label for="email" class="req">EMAIL *</label>
							<input type="text" name="email" class="email" value="EMAIL *" onFocus="if (this.value == 'EMAIL *') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'EMAIL *';}"/></div>
						<div><label for="subject">SUBJECT</label>
							<input type="text" name="subject" class="subject" value="SUBJECT" onFocus="if (this.value == 'SUBJECT') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'SUBJECT';}"/></div>
						<div><label for="message" class="req">MESSAGE *</label>
							<textarea name="message" class="message" onFocus="if (this.value == 'MESSAGE *') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'MESSAGE *';}" rows="15" cols="50">MESSAGE *</textarea></div>
						<div><input class="submit" type="submit" value="Send" name="submit_form"/></div>
						<input type="hidden" name="fields" value="name,email,subject,message,"/>
						<input type="hidden" name="sendto" value="masterogautam@gmail.com"/>
						<input type="hidden" name="subject" value="Wixzi Contact"/>
					</form>
					<p id="form-note"><span class="error_icon">Error</span><span class="error_message"><strong>Please check your entries!</strong></span></p>
				</div>

				<div class="column one_third last">
					<h4><strong>Contact Info</strong></h4>

					<p>
						<strong>Wixzi Solutions</strong><br/>
						Mulackal Building, Maranadu PO<br/>
						Ezhukone, Kollam - 691505<br/>
						Kerala, India<br/>
					</p>

					<p>
						Phone: 0474 3228797<br/>
						Email: <a href="">info@wixzi.com</a></p>
				</div>
				<div class="clear"></div>
			</article>
		</div>
		<!-- END #main_inner -->
	</section>
	<!-- END #main -->

	<section id="bottom">
		<div class="bottom_inner wrapperoverlay">
			<div class="widget"><h6>Social Media</h6>

				<div class="socialmedia">
					<a class="facebook" href="index.php" target="_blank"><span>Facebook</span></a>
					<a class="twitter" href="https://twitter.com/WixziSolutions" target="_blank"><span>Twitter</span></a>
					<a class="googleplus" href="index.php" target="_blank"><span>Google+</span></a></div>
			</div>
		</div>
	</section>
	<!-- END #bottom --> <!-- END #bottom -->

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

	<a href="" class="totop" title="Back to top">ToTop</a></div>
<!-- END #page -->

<!-- jquery -->
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src='js/jquery.easing.1.3.js'></script>
<script src='js/jquery.easing.compatibility.js'></script>
<script src="js/jquery.fancybox.pack.js"></script>

<script src="js/script.js"></script>

</body>
</html>


