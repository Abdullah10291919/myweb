





        <!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->
        <section id="slider" class="full-slider">
            <div class="rev-slider-wrapper fullscreen-container overlay-gradient">
                <div id="fullscreen-slider" class="rev_slider fullscreenbanner" style="display:none" data-version="5.4.1">
                    <ul>

                        <!-- ===== SLIDE NR. 1 ===== -->
                        <li   data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img id="newimage" src="{{UpcommingMovieslist[0].image}}"
                                 alt="Image"
                                 title="slider-bg"
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 class="rev-slidebg"
                                 data-no-retina="">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['-30','-30','-30','-30']"
                                 data-responsive_offset="on"
                                 data-fontsize="['60','50','40','30']"
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">{{UpcommingMovieslist[0].title}}
                            </div>
                        </li>

                        <!-- ===== SLIDE NR. 2 ===== -->
                        <li data-transition="fade"
                            data-slotamount="7"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="2000">
                         
                            <img src="{{UpcommingMovieslist[1].image}}"
                                 alt="Image"
                               >
                           
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['-30','-30','-30','-30']"
                                 data-responsive_offset="on"
                                 data-fontsize="['60','50','40','30']"
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">{{UpcommingMovieslist[1].title}}
                            </div>
                        </li>

                        <!-- ===== SLIDE NR. 3 ===== -->
                        <li data-transition="fade"
                            data-slotamount="7"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="2000">
                          
                            <img src="{{UpcommingMovieslist[2].image}}"
                                 alt="Image"
                               >
                           
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['-30','-30','-30','-30']"
                                 data-responsive_offset="on"
                                 data-fontsize="['60','50','40','30']"
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">{{UpcommingMovieslist[2].title}}
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ===== END OF REV SLIDER WRAPPER ===== -->


            <!-- ===== START OF SEARCH FORM WRAPPER ===== -->
            <div class="search-form-wrapper search-form-rev">
                <div class="container">

                    <!-- ===== START OF SEARCH FORM ===== -->
                    <form id="search-form-1">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-sm-10 col-12">
                                <div class="form-group">
                                    <input name="search-keyword" type="text" id="search-keyword" value="" class="form-control" placeholder="Enter Movies or Series Title">
                                    <button type="submit" class="btn btn-main btn-effect"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- ===== END OF SEARCH FORM ===== -->

                </div>
            </div>
            <!-- ===== END OF SEARCH FORM WRAPPER ===== -->
        </section>
        <!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->




        <!-- =============== START OF LATEST MOVIES SECTION =============== -->
        <section class="latest-movies ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="title">Latest Movies</h2>
                    </div>

                  

                    <div class="col-md-4 align-self-center text-right">
                        <a href="<?php echo base_url() ?>latestmovies" class="btn btn-icon btn-main btn-effect">
                            view all
                            <i class="ti-angle-double-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of Latest Movies Slider -->
                <div class="owl-carousel latest-movies-slider mt20">

                    <!-- === Start of Sliding Item 1 === -->
                  
                    <!-- === End of Sliding Item 1 === -->


                    <!-- === Start of Sliding Item 2 === -->
                   
                    <!-- === End of Sliding Item 2 === -->


                    <!-- === Start of Sliding Item 3 === -->
                     
                    <!-- === End of Sliding Item 3 === -->


                    <!-- === Start of Sliding Item 4 === -->
                   
                    <!-- === End of Sliding Item 4 === -->


                    <!-- === Start of Sliding Item 5 === -->
                     
                    <!-- === End of Sliding Item 5 === -->


                    <!-- === Start of Sliding Item 6 === -->
                    <?php foreach($latestmovies as $key => $moviel) {?>
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="<?php echo base_url(); ?>assets/images/posters/poster-2.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="<?php echo $moviel['video_url'] ?>" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="<?php echo base_url() ?>details"><?= $moviel['title']; ?></a>
                                </h4>
                                <span class="released"><?= $moviel['release_Date']; ?></span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span><?= $moviel['rating']; ?> / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <?php } ?>
                    <!-- === End of Sliding Item 6 === -->

                </div>
                <!-- End of Latest Movies Slider -->


            </div>
        </section>
        <!-- =============== END OF LATEST MOVIES SECTION =============== -->




        <!-- =============== START OF UPCOMING MOVIES SECTION =============== -->
        <section class="upcoming-movies parallax ptb100" data-background="<?php echo base_url(); ?>assets/images/posters/movie-collection.jpg" data-color="#3e4555" data-color-opacity="0.95" >
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title text-white">Upcoming Movies & TV Shows</h2>
                    </div>
                </div>
                <!-- End of row -->



                <!-- Start of row -->
                <div class="row mt50">

                    <!-- === Start of Upcoming Featured Movies & TV Shows === -->
                    <div class="col-md-8">

                        <!-- Start of Upcoming Featured Item -->
                        <div class="movie-box-1 upcoming-featured-item">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="<?php echo base_url(); ?>assets/images/movies/upcoming-featured-item.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="<?php echo $upcommingMovies[0]['video_url'] ?>" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="<?php echo base_url() ?>details"><?php echo $upcommingMovies[0]['title'] ?></a>
                                </h4>
                                <span class="released">Release Date: <?php echo $upcommingMovies[0]['release_Date'] ?></span>
                            </div>
                            <!-- End of Movie Details -->
                        </div>
                        <!-- End of Upcoming Featured Item -->

                    </div>
                    <!-- === End of Upcoming Featured Movies & TV Shows === -->


                    <!-- === Start of Upcoming Movies & TV Shows === -->
                    <div class="col-md-4">

                        <!-- Start of Upcoming Item 1 -->
                        <div class="movie-box-1 upcoming-item">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="<?php echo base_url(); ?>assets/images/movies/upcoming-item-1.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="<?php echo $upcommingMovies[1]['video_url'] ?>" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="<?php echo base_url() ?>details"><?php echo $upcommingMovies[1]['title'] ?></a>
                                </h4>
                            </div>
                            <!-- End of Movie Details -->

                        </div>
                        <!-- End of Upcoming Item 1 -->

                        <!-- Start of Upcoming Item 2 -->
                        <div class="movie-box-1 upcoming-item mt20">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="<?php echo base_url(); ?>assets/images/movies/upcoming-item-2.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="<?php echo $upcommingMovies[2]['video_url'] ?>" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="<?php echo base_url() ?>details"><?php echo $upcommingMovies[2]['title'] ?></a>
                                </h4>
                            </div>
                            <!-- End of Movie Details -->

                        </div>
                        <!-- End of Upcoming Item 2 -->

                    </div>
                    <!-- === End of Upcoming Movies & TV Shows === -->

                </div>
                <!-- End of row -->

            </div>
        </section>
        <!-- =============== END OF UPCOMING MOVIES SECTION =============== -->




        <!-- =============== START OF LATEST TV SHOW SECTION =============== -->
        <section class="latest-tvshows ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h2 class="title">Latest TV Shows</h2>
                    </div>


                    <div class="col-md-4 col-sm-12 align-self-center text-right">
                        <a href="<?php echo base_url() ?>latestmovies" class="btn btn-icon btn-main btn-effect">
                            view all
                            <i class="ti-angle-double-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of Latest Movies Slider -->
                <div class="owl-carousel latest-tvshows-slider mt20">

                    <!-- === Start of Sliding Item 1 === -->

                    <?php   foreach($latesttv as $key => $tv) { ?>
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="<?php echo base_url(); ?>assets/images/posters/poster-5.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="<?php echo $tv['video_url'] ?>" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="<?php echo base_url() ?>details"><?php echo $tv['title'] ?></a>
                                </h4>
                                <span class="released"><?php echo $tv['release_Date'] ?></span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <span><?php echo $tv['rating'] ?> / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <?php  } ?>
                    <!-- === End of Sliding Item 1 === -->


                 
                   

                </div>
                <!-- End of Latest Movies Slider -->

            </div>
        </section>
        <!-- =============== END OF LATEST TV SHOW SECTION =============== -->




       

        <!-- =============== END OF COUNTER SECTION =============== -->
        <section class="counter bg-main-gradient ptb50 text-center">
            <div class="container">
                <div class="row">

                    <!-- 1st Count up item -->
                    <div class="col-md-4 col-sm-12">
                        <span class="counter-item" data-from="0" data-to="<?php echo $totalMovies ?>"><?php echo $totalMovies ?></span>
                        <h4>Movies </h4>
                    </div>

                    <!-- 2nd Count up item -->
                    <div class="col-md-4 col-sm-12">
                        <span class="counter-item" data-from="0" data-to="<?php echo $totalshowTV ?>">0</span>
                        <h4>TV Shows</h4>
                    </div>

                    <!-- 3rd Count up item -->
                    <div class="col-md-4 col-sm-12">
                        <span class="counter-item" data-from="0" data-to="1207">0</span>
                        <h4>Users</h4>
                    </div>

                </div>
            </div>
        </section>
        <!-- =============== END OF COUNTER SECTION =============== -->




       


        <!-- =============== END OF BLOG SECTION =============== -->
        <section class="blog bg-light ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title">Latest News</h2>
                        <h6 class="subtitle">HELLO WOlrd</h6>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of row -->
                <div class="row mt50">

                    <!-- 1st Blog Item -->
                    
                    <div ng-repeat="movi in Newsmovies" class="col-md-4">
                        <div class="bloglist-post-holder shadow-hover">

                            <!-- Blog Post Thumbnail -->
                            <a href="blog-post-detail.html" class="bloglist-thumb-link hover-link">
                                <div class="bloglist-post-thumbnail" style="background: url({{movi.image}})"></div>
                            </a>

                            <!-- Blog Post Text Wrapper -->
                            <div class="bloglist-text-wrapper">
                                <!-- Author Avatar -->
                                <span class="circle-img bloglist-avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/user.png" width="50" height="50" alt="author img">
                                </span>

                                <h4 class="bloglist-title">
                                    <a href="blog-post-detail.html">{{movi.title}}</a>
                                </h4>

                                <div class="bloglist-meta">
                                    <i class="fa fa-calendar"></i> {{movi.releaseDate}}
                                </div>

                                <div class="bloglist-excerpt">
                                    <p> {{movi.description}}</p>
                                    <a href="{{movi.readMoreUrl}}" target="_blank" class="btn btn-main btn-effect">read more</a>
                                </div>
                            </div>

                        </div>
                    </div>

 

                </div>
                <!-- End of row -->

            </div>
        </section>
        <!-- =============== END OF BLOG SECTION =============== -->





        <!-- =============== END OF SUBSCRIBE SECTION =============== -->
        <section class="subscribe bg-light2 ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title">Join Movify Now!</h2>
                        <h6 class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy consectetuer adipiscing.</h6>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 col-sm-10 col-12">

                        <!-- Subscribe Form -->
                        <form action="#" class="mailchimp mt50" novalidate>

                            <!-- Form -->
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="EMAIL" class="form-control" id="mc-email" placeholder="Your Email" autocomplete="off">
                                    <label for="mc-email"></label>
                                    <button type="submit" class="btn btn-main btn-effect">Subscribe</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- End of row -->


            </div>
        </section>
        <!-- =============== END OF SUBSCRIBE SECTION =============== -->




        <!-- =============== START OF FOOTER =============== -->
        <footer class="footer1 bg-dark">

            <!-- ===== START OF FOOTER WIDGET AREA ===== -->
            <div class="footer-widget-area ptb100">
                <div class="container">
                    <div class="row">

                        <!-- Start of Widget 1 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget-about">

                                <!-- INSERT YOUR LOGO HERE -->
                                <img src="<?php echo base_url(); ?>assets/images/logo.svg" alt="logo" class="logo">
                                <!-- INSERT YOUR WHITE LOGO HERE -->
                                <img src="<?php echo base_url(); ?>assets/images/logo-white.svg" alt="white logo" class="logo-white">
                                <p class="nomargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque. Praesentium suscipit provident explicabo dignissimos nostrum numquam deserunt earum accusantium et fugit.</p>
                            </div>
                        </div>
                        <!-- End of Widget 1 -->

                        <!-- Start of Widget 2 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget-links">
                                <h4 class="widget-title">Useful links</h4>

                                <ul class="general-listing">
                                    <li><a href="#">about movify</a></li>
                                    <li><a href="#">blog</a></li>
                                    <li><a href="#">forum</a></li>
                                    <li><a href="#">my account</a></li>
                                    <li><a href="#">watch list</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- End of Widget 2 -->

                        <!-- Start of Widget 3 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget-blog">
                                <h4 class="widget-title">latest news</h4>

                                <ul class="blog-posts">
                                    <li><a href="#">blog post 1</a><small>januar 13, 2018</small></li>
                                    <li><a href="#">blog post 2</a><small>januar 13, 2018</small></li>
                                    <li><a href="#">blog post 3</a><small>januar 13, 2018</small></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of Widget 3 -->

                        <!-- Start of Widget 4 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget-social">
                                <h4 class="widget-title">follow us</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque.</p>

                                <!-- Start of Social Buttons -->
                                <ul class="social-btns">
                                    <!-- Social Media -->
                                    <li>
                                        <a href="#" class="social-btn-roll facebook">
                                            <div class="social-btn-roll-icons">
                                                <i class="social-btn-roll-icon fa fa-facebook"></i>
                                                <i class="social-btn-roll-icon fa fa-facebook"></i>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Social Media -->
                                    <li>
                                        <a href="#" class="social-btn-roll twitter">
                                            <div class="social-btn-roll-icons">
                                                <i class="social-btn-roll-icon fa fa-twitter"></i>
                                                <i class="social-btn-roll-icon fa fa-twitter"></i>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Social Media -->
                                    <li>
                                        <a href="#" class="social-btn-roll google-plus">
                                            <div class="social-btn-roll-icons">
                                                <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                                <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Social Media -->
                                    <li>
                                        <a href="#" class="social-btn-roll instagram">
                                            <div class="social-btn-roll-icons">
                                                <i class="social-btn-roll-icon fa fa-instagram"></i>
                                                <i class="social-btn-roll-icon fa fa-instagram"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End of Social Buttons -->

                            </div>
                        </div>
                        <!-- End of Widget 4 -->

                    </div>
                </div>
            </div>
            <!-- ===== END OF FOOTER WIDGET AREA ===== -->


            <!-- ===== START OF FOOTER COPYRIGHT AREA ===== -->
            <div class="footer-copyright-area ptb30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex">
                                <div class="links">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#">Privacy & Cookies</a></li>
                                        <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                                        <li class="list-inline-item"><a href="#">Legal Disclaimer</a></li>
                                        <li class="list-inline-item"><a href="#">Community</a></li>
                                    </ul>
                                </div>

                                <div class="copyright ml-auto">All Rights Reserved by <a href="#">Movify</a>.</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== END OF FOOTER COPYRIGHT AREA ===== -->

        </footer>
        <!-- =============== END OF FOOTER =============== -->

    </div>
    <!-- =============== END OF WRAPPER =============== -->




    <!-- =============== START OF GENERAL SEARCH WRAPPER =============== -->
    <div class="general-search-wrapper">
        <form class="general-search" role="search" method="get" action="#">
            <input type="text" placeholder="Type and hit enter...">
            <span id="general-search-close" class="ti-close toggle-search"></span>
        </form>
    </div>
    <!-- =============== END OF GENERAL SEARCH WRAPPER =============== -->



    <!-- =============== START OF LOGIN & REGISTER POPUP =============== -->
    <div id="login-register-popup" class="small-dialog zoom-anim-dialog mfp-hide">

        <!-- ===== Start of Signin wrapper ===== -->
        <div class="signin-wrapper">
            <div class="small-dialog-headline">
                <h4 class="text-center">Sign in</h4>
            </div>


            <div class="small-dialog-content">

                <!-- Start of Login form -->
                <form id="cariera_login" method="post">
                    <p class="status"></p>

                    <div class="form-group">
                        <label for="username">Username or Email *</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Your Username or Email *" />
                    </div>

                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your Password *" />
                    </div>

                    <div class="form-group">
                        <div class="checkbox pad-bottom-10">
                            <input id="check1" type="checkbox" name="remember" value="yes">
                            <label for="check1">Keep me signed in</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Sign in" class="btn btn-main btn-effect nomargin" />
                    </div>
                </form>
                <!-- End of Login form -->

                <div class="bottom-links">
                    <span>
                        Not a member?
                        <a  class="signUpClick">Sign up</a>
                    </span>
                    <a  class="forgetPasswordClick pull-right">Forgot Password</a>
                </div>
            </div>

        </div>
        <!-- ===== End of Signin wrapper ===== -->



        <!-- ===== Start of Signup wrapper ===== -->
        <div class="signup-wrapper">
            <div class="small-dialog-headline">
                <h4 class="text-center">Sign Up</h4>
            </div>

            <div class="small-dialog-content">

                <!-- Start of Registration form -->
                <form id="cariera_registration" action="#" method="POST">
                    <p class="status"></p>

                    <div class="form-group">
                        <label for="movify_user_login">Username</label>
                        <input name="movify_user_login" id="movify_user_login" class="form-control" type="text"/>
                    </div>

                    <div class="form-group">
                        <label for="movify_user_email">Email</label>
                        <input name="movify_user_email" id="movify_user_email" class="form-control" type="email"/>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="movify_user_pass" id="movify_password" class="form-control" type="password"/>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-main btn-effect nomargin" value="Register"/>
                    </div>
                </form>
                <!-- End of Registration form -->

                <div class="bottom-links">
                    <span>
                        Already have an account?
                        <a class="signInClick">Sign in</a>
                    </span>

                    <a class="forgetPasswordClick pull-right">Forgot Password</a>
                </div>

            </div> <!-- .small-dialog-content -->

        </div>
        <!-- ===== End of Signup wrapper ===== -->



        <!-- ===== Start of Forget Password wrapper ===== -->
        <div class="forgetpassword-wrapper">
            <div class="small-dialog-headline">
                <h4 class="text-center">Forgotten Password</h4>
            </div>

            <div class="small-dialog-content">

                <!-- Start of Forger Password form -->
                <form id="forget_pass_form" action="#"  method="post">
                    <p class="status"></p>

                    <div class="form-group">
                        <label for="password">Email Address *</label>
                        <input type="email" name="user_login" class="form-control" id="email3" placeholder="Email Address *" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Get New Password" class="btn btn-main btn-effect nomargin" />
                    </div>
                </form>
                <!-- End of Forger Password form -->

                <div class="bottom-links">
                    <a class="cancelClick">Cancel</a>
                </div>

            </div><!-- .small-dialog-content -->

        </div>
        <!-- ===== End of Forget Password wrapper ===== -->

    </div>
    <!-- =============== END OF LOGIN & REGISTER POPUP =============== -->



    <!-- ===== Start of Back to Top Button ===== -->
    <div id="backtotop">
        <a href="#"></a>
    </div>
    <!-- ===== End of Back to Top Button ===== -->



    <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.mmenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.inview.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.countTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.countdown.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/headroom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

    <!-- ===== Slider Revolution core JavaScript files ===== -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- ===== Slider Revolution extension scripts ===== -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>


    
</body>
<script>

    
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
            $scope.Newsmovies = [];
            $scope.UpcommingMovieslist = [];
            const apiKey = '59a398eb937d1f39846feac1a91e7940';

            $scope.UpcommingMovies = function() {
            // set the endpoint URL and query parameters
            const endpointUrl = "https://api.themoviedb.org/3/movie/upcoming";
            const queryParams = {
            api_key: apiKey,
            language: "en-US",
            page: 1
            };

            // make the AJAX request
            $.ajax({
            url: endpointUrl,
            data: queryParams,
            method: "GET",
            dataType: "json",
            success: function(response) {
                // handle the response data
                const movies = response.results.slice(0,3).map(movie => ({
                title: movie.title,
                image: `https://image.tmdb.org/t/p/w500${movie.poster_path}`,
                description: movie.overview,
                releaseDate: movie.release_date,
                readMoreUrl: `https://www.themoviedb.org/movie/${movie.id}`
                }));

                console.log(movies);
                $scope.UpcommingMovieslist = movies;

                const defaultImgs = $(".defaultimg");
                console.log("defaultImgs" , defaultImgs);
                        movies.forEach((movie, i) => {
                        const defaultImg = defaultImgs.eq(i);
                        defaultImg.css("background-image", `url(${movie.image})`);
                        
                        });
                $scope.$digest();
            }
        });
               
        }
        $scope.UpcommingMovies();
        $scope.movieNews = function(){
          
 

            // set the endpoint URL and query parameters
            const endpointUrl = "https://api.themoviedb.org/3/movie/now_playing";
            const queryParams = {
            api_key: apiKey,
            language: "en-US",
            page: 1
            };

            // make the AJAX request
            $.ajax({
            url: endpointUrl,
            data: queryParams,
            method: "GET",
            dataType: "json",
            success: function(response) {
                // handle the response data
                const movies = response.results.slice(0, 6).map(movie => ({
                title: movie.title,
                image: `https://image.tmdb.org/t/p/w500${movie.poster_path}`,
                description: movie.overview,
                releaseDate: movie.release_date,
                readMoreUrl: `https://www.themoviedb.org/movie/${movie.id}`
                }));
                console.log(movies);
                $scope.Newsmovies = movies;
                $scope.$digest();
            },
            error: function(xhr, status, error) {
                // handle the error
                console.log("Error:", error);
            }
            });

        }
        $scope.movieNews();


       
});
// // set your API key
// const apiKey = "YOUR_API_KEY";

// // set the endpoint URLs
// const searchEndpointUrl = "https://api.themoviedb.org/3/search/movie";
// const creditsEndpointUrl = "https://api.themoviedb.org/3/movie";
// const personEndpointUrl = "https://api.themoviedb.org/3/person";

// // set the query parameters for the search
// const searchParams = {
//   api_key: apiKey,
//   language: "en-US",
//   query: "MOVIE_TITLE"
// };

// // search for the movie
// $.ajax({
//   url: searchEndpointUrl,
//   data: searchParams,
//   method: "GET",
//   dataType: "json",
//   success: function(response) {
//     // handle the response data
//     const movieId = response.results[0].id;

//     // get the credits for the movie
//     const creditsParams = {
//       api_key: apiKey,
//       language: "en-US"
//     };
//     $.ajax({
//       url: `${creditsEndpointUrl}/${movieId}/credits`,
//       data: creditsParams,
//       method: "GET",
//       dataType: "json",
//       success: function(response) {
//         // handle the response data
//         const cast = response.cast.map(async castMember => {
//           const personParams = {
//             api_key: apiKey,
//             language: "en-US"
//           };
//           const personResponse = await $.ajax({
//             url: `${personEndpointUrl}/${castMember.id}`,
//             data: personParams,
//             method: "GET",
//             dataType: "json"
//           });
//           return {
//             name: personResponse.name,
//             character: castMember.character,
//             profile_path: personResponse.profile_path
//           };
//         });

//         // display the cast on the page
//         const castList = $("<ul>");
//         Promise.all(cast).then(castMembers => {
//           castMembers.forEach(castMember => {
//             const castListItem = $("<li>");
//             const castMemberName = $("<h2>").text(castMember.name);
//             const castMemberCharacter = $("<p>").text(castMember.character);
//             const castMemberImage = $("<img>").attr(
//               "src",
//               `https://image.tmdb.org/t/p/w185/${castMember.profile_path}`
//             );
//             castListItem.append(castMemberName);
//             castListItem.append(castMemberCharacter);
//             castListItem.append(castMemberImage);
//             castList.append(castListItem);
//           });
//           $("body").append(castList);
//         });
//       },
//       error: function(xhr, status, error) {
//         // handle the error
//         console.log("Error:", error);
//       }
//     });
//   },
//   error: function(xhr, status, error) {
//     // handle the error
//     console.log("Error:", error);
//   }
// });

</script>
</html>
