<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<!doctype html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title>Caleb's Awesome Title</title>

    <meta name="description" content="Here is the description">
    <meta name="author" content="Caleb & Matt">

    <!-- Mobile Default Settings -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1" user-scalable="no">
    <meta http-equiv="cleartype" content="on">

    <!-- Geo Location Meta Tag | Generator http://geo-tag.de/generator/en.html -->
    <meta name="geo.region" content="US-OR" />
    <meta name="geo.placename" content="Hood River" />
    <meta name="geo.position" content="45.70896;-121.512487" />
    <meta name="ICBM" content="45.70896, -121.512487" />

    <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="js/selectivizr-min.js"></script>
    <![endif]-->

    <!-- Icons -->

    <!-- 144x144 -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/app-icons/icon-72@2x.png">

    <!-- 114x114 -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/app-icons/icon@2x.png">

    <!-- 72x72 -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/app-icons/icon-72.png">

    <!-- 57x57 -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/app-icons/icon.png">

    <!-- Main Icon -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/app-icons/icon.png">

    <!-- 16x16 -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <!-- 32x32 -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

    <!--iOS Prefs -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-title" content="320 and Up">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#000">
    <meta http-equiv="cleartype" content="on">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />


<!--     <link type="text/css" rel="stylesheet" href="css/menu1.css" /> -->

    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.min.js"></script>

</head>
<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Mobile Navagation --> 
    <nav id="menu">
        <ul>
            <li><a href="<?php echo get_template_directory_uri(); ?>/index.php">Basic example</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/horizontal-submenus.html">Horizontal sliding submenus example</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/vertical-submenus.html">Vertical submenus example</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/positions.html">Positioning the menu</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/advanced.html">Advanced example</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/onepage.html">One page scrolling example</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/iconbar.html">Iconbar</a></li>
            <li class="Selected"><a href="<?php echo get_template_directory_uri(); ?>/dragopen.html">Drag/swipe the menu open</a></li>
        </ul>
    </nav>


    <!-- =========================== | GLOBAL PAGE WRAP | =========================== -->
    <!-- everything has to live inside of the page wrap for the mobile menu to work correctly -->
    <div id="page">




        <!-- =========================== | GLOBAL HEADER| =========================== -->
        <header class="gHeader">



            <!-- =========================== | BRANDING | =========================== -->
            <section class="mid brandWrap">
                <!-- Mobile Nav Icon | Opens mobile nav on click -->
                <!-- | ID | used as a hook for the mobile nav js -->
                <div id="mIconWrap">
                    <!-- Data effect attr is set to mobile nav class -->
                    <!-- | ID | used as a hook for the mobile nav js -->
                    <a href="#menu" class="navIcon mOnly"><i class="icon-reorder"></i></a>
                </div>
                <!-- !!!END mobile nav icon -->

                <h1 class="brand hidden">Root Down Yoga</h1>
                <h2 class="hidden">Power Yoga for the Gorge</h2>

                <span class="staticLogo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></span>

                <a href="#" class="gSocial gFacebook">Follow on Facebook</a>
                <a href="#" class="gSocial gInstagram">Follow on Instagram</a>
            </section>
            <!-- =========================== | !!!END BRANDING | =========================== -->



            <!-- =========================== | MAIN NAV | =========================== -->
            <section class="fullWrap gNavWrap">
                <nav class="gNav mid">
                    <ul>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/index.php"><span>Home</span></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/about.html"><span>About</span></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/classes.html"><span>Classes</span></a></li>
                    <!--<li><a href="<?php echo get_template_directory_uri(); ?>/workshops.html"><span>Workshops</span></a></li>-->
                        <li><a href="<?php echo get_template_directory_uri(); ?>/blogIndex.html"><span>Blog</span></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/contact.html"><span>Contact</span></a></li>
                    </ul>
                </nav>
            </section>
            <!-- =========================== | !!!END MAIN NAV | =========================== -->



        </header>
        <!-- =========================== | !!!END GLOBAL HEADER | =========================== -->
