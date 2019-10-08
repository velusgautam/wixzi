﻿<!doctype html>
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
                    <a class="logotype" href="index.php"><img src="images/logo-new.png" alt="Logotype"></a>
                </div>

                <nav id="nav" class="right_float">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php" class="active">About</a></li>
                        <li><a href="services.php">Services</a>
                        </li>
                        <li><a href="portfolio.php">Portfolio</a>
                        </li>

                        <li><a href="pricingtable.php">Pricing</a></li>

                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </header>

    <section id="pagetitle">
        <div class="pagetitle_inner wrapperoverlay">
            <h2><strong>About Us</strong><span class="tagline"></span></h2>
        </div>
    </section>

    <section id="main">
        <div class="main_inner wrapper clearfix">

            <article>

                <h2 class="page-description"><i>Weaving Innovation to make web beautiful </i></h2>

                <div class="seperator-section"></div>

                <div class="column one_third"><img title="about" src="images/about/about.jpg" alt=""/></div>

                <div class="column two_third last">
                    <h4><strong>Wixzi - WEB ART TO REALITY</strong></h4>

                    <p>We weave your dreams into reality, embedded with our crafting skill. Our team consists of cream
                        players who can create anything you dream of in web and mobility.</p>

                    <p><strong>Profile</strong></p>

                    <p>Wixzi Solutions is a global Information Technology company committed to Empowering Business
                        Transformation. We enable clients around the globe to outperform the competition and stay ahead
                        of the innovation curve. We have a wide range of IT services, uniquely positions the company to
                        address the dynamic requirements of a variety of industry verticals, predominantly Education,
                        Online Marketing, Asset & Wealth Management and Real Estate.</p>

                    <p>The Company is also focused on value added services such as business intelligence & analytics
                        services, mobile application development, big data, cloud and other unique software solutions
                        for cutting edge needs.</p>
                    <p>The Company's Global Delivery Model provides for the best resources to be drawn from its vast
                        talent pool across the globe to offer optimal solutions. The Company integrates its products and
                        services to create customized solutions to allow you to undertake technology-based business
                        transformation that allows reorganization in line with today's dynamic digital business
                        environment.</p>
</div>

                <div class="clear"></div>
                <div class="column one_full ">


                    <p><strong>Story</strong></p>

                    <p>Wixzi Solutions was founded in 2008 as a start-up platform to develop Eduguruonline: "Kearala
                        Entrance Based Probability Searching Algorithm". It was a huge success and it got recognition
                        worldwide and accelerated wixzi’s growth. </p>

                    <p>From the beginning onwards we thrive to focus on innovation and bring Global overview into our
                        client requirements with web 2.0 standards. </p>

                    <p>Now having global clients in Canada, India, Malaysia and UAE. We are moving ahead with lot of
                        innovation and providing custom solutions to our clients.</p>
                </div>



            </article>

        </div>
        <!-- END #main_inner -->
    </section>
    <!-- END #main -->

    <section id="bottom">
        <div class="bottom_inner wrapperoverlay">
            <div class="widget"><h6>Social Media</h6>

                <div class="socialmedia">
                    <a class="facebook" href="https://www.facebook.com/weavingwixzi"
                       target="_blank"><span>Facebook</span></a>
                    <a class="twitter" href="https://twitter.com/WixziSolutions"
                       target="_blank"><span>Twitter</span></a>
                    <a class="googleplus" href="index.php" target="_blank"><span>Google+</span></a>
                </div>
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
                ?>. All rights reserved.
            </div>

        </div>
    </footer>

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

</body>
</html>


