

        <!-- =============== START OF PAGE HEADER =============== -->
        <section class="page-header overlay-gradient" style="background: url(assets/images/posters/movie-collection.jpg);">
            <div class="container">
                <div class="inner">
                    <h2 class="title"><?= $title ?></h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><?= $title ?></li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- =============== END OF PAGE HEADER =============== -->



        <!-- =============== START OF MAIN =============== -->
        <main class="ptb100">
            <div class="container">


                <!-- Start of Movie List -->
                <div class="row">

                    <!-- Watch Later Item -->
                    <div class="col-md-12 col-sm-12" ng-repeat="movie in moviessearch">
                        <div class="watch-later-item">
                            <div class="listing-container">

                                <!-- Movie List Image -->
                                <div class="listing-image">
                                    <img src="{{movie.image}}" class="img-shadow" alt="">
                                </div>

                                <!-- Movie List Content -->
                                <div class="listing-content">
                                    <div class="inner">
                                        <h3 class="title">{{movie.title}}</h3>

                                        <p>{{movie.description}} </p>

                                        <a href="{{movie.watchMovieUrl}}" class="btn btn-main btn-effect">watch now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                     

                </div>
                <!-- End of Movie List -->



                <!-- Start of Pagination -->
                <!-- <div class="row mt30">
                    <div class="col-md-12 col-sm-12">
                        <nav class="pagination">
                            <ul>
                                <li><a href="#" class="current-page">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="ti-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div> -->
                <!-- End of Pagination -->

            </div>
        </main>
        <!-- =============== END OF MAIN =============== -->



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
                    <p class="nomargin">
                     Experience the magic of movies like never before with Moviefy - your ultimate destination for cinematic entertainment!""Experience the magic of movies like never before with Moviefy - your ultimate destination for cinematic entertainment!                            
                 </p>
                </div>
            </div>
            <!-- End of Widget 1 -->

            <!-- Start of Widget 2 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget widget-links">
                    <h4 class="widget-title">Useful links</h4>

                    <ul class="general-listing">
                        <li><a href="<?php echo base_url() ?>">about movify</a></li>
                        <li><a href="<?php echo base_url() ?>mostwatched">Most Watched</a></li>
                        <li><a href="<?php echo base_url() ?>tvshows">Most Liked</a></li>
                        <li><a href="<?php echo base_url() ?>upcomming">Up Coming</a></li>
                        <li><a href="<?php echo base_url() ?>latest">latest</a></li>
                    </ul>

                </div>
            </div>
            <!-- End of Widget 2 -->

            <!-- Start of Widget 3 -->
            <!-- <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget widget-blog">
                    <h4 class="widget-title">latest news</h4>

                    <ul class="blog-posts">
                        <li><a href="#">blog post 1</a><small>januar 13, 2018</small></li>
                        <li><a href="#">blog post 2</a><small>januar 13, 2018</small></li>
                        <li><a href="#">blog post 3</a><small>januar 13, 2018</small></li>
                    </ul>
                </div>
            </div> -->
            <!-- End of Widget 3 -->

            <!-- Start of Widget 4 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget widget-social">
                    <h4 class="widget-title">follow us</h4>

                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque.</p> -->

                    <!-- Start of Social Buttons -->
                    <ul class="social-btns">
                        <!-- Social Media -->
                        <li>
                            <a href="www.fb.com" class="social-btn-roll facebook">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="www.twitter.com" class="social-btn-roll twitter">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                </div>
                            </a>
                        </li>

                        
                        <!-- Social Media -->
                        <li>
                            <a href="www.instagram.com" class="social-btn-roll instagram">
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
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.mmenu.js"></script>
    <script src="assets/js/jquery.inview.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/headroom.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- ===== Slider Revolution core JavaScript files ===== -->
    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- ===== Slider Revolution extension scripts ===== -->
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

</body>

<script>

    
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
            $scope.moviessearch = [];
           
            const apiKey = '59a398eb937d1f39846feac1a91e7940';

            $scope.UpcommingMovies = function() {
            
            // Get the search keyword from the URL
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const searchKeyword = urlParams.get('search-keyword');

            // Make a request to TMDB API to retrieve relevant movies
            
            const apiUrl = `https://api.themoviedb.org/3/search/movie?api_key=${apiKey}&query=${searchKeyword}`;
            $.ajax({
            url: apiUrl,
            method: 'GET',
            success: function(result) {
                // Handle the result here

                const movies = result.results.slice(0, 6).map(movie => ({
                title: movie.title,
                image: `https://image.tmdb.org/t/p/w500${movie.poster_path}`,
                description: movie.overview,
                releaseDate: movie.release_date,
                readMoreUrl: `https://www.themoviedb.org/movie/${movie.id}`,
                watchMovieUrl: `https://www.themoviedb.org/movie/${movie.id}/watch`
                }));
                console.log(movies);
                $scope.moviessearch = movies;
                $scope.$digest();
                            
                   
            },
            error: function(error) {
                // Handle the error here
                console.log(error);
            }
            });
            
            }
               
       
        $scope.UpcommingMovies();
       


       
});
</script>
</html>
