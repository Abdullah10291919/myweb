<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- ===== Mobile viewport optimized ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- ===== Meta Tags - Description for Search Engine purposes ===== -->
    <meta name="description" content="Movify - Movies, Series & Cinema HTML Template">
    <meta name="keywords" content="movies, series, online streaming, html template, cinema html template">
    <meta name="author" content="GnoDesign">

    <!-- ===== Website Title ===== -->
    <title>Movify - Movies, Series & Cinema HTML Template</title>

    <!-- ===== Favicon & Different size apple touch icons ===== -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/apple-touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/apple-touch-icon-ipad-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/images/apple-touch-icon-ipad-pro.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon-iphone-6-plus.png">
    <link rel="icon" sizes="192x192" href="assets/images/icon-hd.png">
    <link rel="icon" sizes="128x128" href="assets/images/icon.png">

    <!-- ===== Google Fonts ===== -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- ===== CSS links ===== -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mmenu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<body>


    <!-- =============== START OF PRELOADER =============== -->
    <div class="loading">
        <div class="loading-inner">
            <div class="loading-effect">
                <div class="object"></div>
            </div>
        </div>
    </div>
    <!-- =============== END OF PRELOADER =============== -->



    <!-- =============== START OF RESPONSIVE - MAIN NAV =============== -->
    <nav id="main-mobile-nav"></nav>
    <!-- =============== END OF RESPONSIVE - MAIN NAV =============== -->

    



    <!-- =============== START OF WRAPPER =============== -->
    <div class="wrapper">


        <!-- =============== START OF HEADER NAVIGATION =============== -->
        <!-- Insert the class "sticky" in the header if you want a sticky header -->
        <header class="header header-fixed header-transparent text-white">
            <div class="container-fluid">

                <!-- ====== Start of Navbar ====== -->
                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="index.html">
                        <!-- INSERT YOUR LOGO HERE -->
                        <img src="assets/images/logo.svg" alt="logo" width="150" class="logo">
                        <!-- INSERT YOUR WHITE LOGO HERE -->
                        <img src="assets/images/logo-white.svg" alt="white logo" width="150" class="logo-white">
                    </a>
                    
                    <!-- Login Button on Responsive -->
                    <a href="#login-register-popup" class="login-mobile-btn popup-with-zoom-anim"><i class="icon-user"></i></a>

                    <button id="mobile-nav-toggler" class="hamburger hamburger--collapse" type="button">
                       <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                       </span>
                    </button>

                    <!-- ====== Start of #main-nav ====== -->
                    <div class="navbar-collapse" id="main-nav">

                        <!-- ====== Start of Main Menu ====== -->
                        <ul class="navbar-nav mx-auto" id="main-menu">
                            <!-- Menu Item -->
                            <li class="nav-item  ">
                                <a class="nav-link" href="<?php echo base_url(); ?>"  >Home</a>
                              <!-- Dropdown Menu -->
                            
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <!-- Menu Item -->
                                    

                                   
                                   

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>contact-us">Contact us</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <!-- <li>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>coming-soon">Coming soon</a>
                                    </li> -->

                                  <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>login-register">Login - Register</a>
                                    </li>
                                    
                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>testimonials">Testimonials</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movies & TV Shows</a>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>upcomming">Up Comming</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>latest">Latest Movies</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>tvshows">Tv shows</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>mostwatched">Most liked movies</a>
                                    </li>

                                    

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="watch-later.html">Watch Later</a>
                                    </li>
                                </ul>
                            </li>

                         

                            <!-- Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>contact-us">Contact us</a>
                            </li>

                        </ul>
                        <!-- ====== End of Main Menu ====== -->


                        <!-- ====== Start of Extra Nav ====== -->
                        <ul class="navbar-nav extra-nav">

                            <!-- Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link toggle-search" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item notification-wrapper">
                                <a class="nav-link notification" href="#">
                                    <i class="fa fa-globe"></i>
                                    <span class="notification-count">2</span>
                                </a>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item m-auto">
                                <a href="#login-register-popup" class="btn btn-main btn-effect login-btn popup-with-zoom-anim">
                                    <i class="icon-user"></i>login
                                </a>
                            </li>
                        </ul>
                        <!-- ====== End of Extra Nav ====== -->

                    </div>
                    <!-- ====== End of #main-nav ====== -->
                </nav>
                <!-- ====== End of Navbar ====== -->

            </div>
        </header>
        <!-- =============== END OF HEADER NAVIGATION =============== -->