
        <!-- =============== START OF MOVIE DETAIL INTRO =============== -->
        <section class="movie-detail-intro   ptb100" style="background: url({{bannerImage}});">
        </section>
        <!-- =============== END OF MOVIE DETAIL INTRO =============== -->



        <!-- =============== START OF MOVIE DETAIL INTRO 2 =============== -->
        <section class="movie-detail-intro2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    
                        <div class="movie-poster">
                            <?php if(!empty($movieData['image_url'])){ ?>
                                            
                                <img src="<?php echo base_url().'public/uploads/'.$movieData['image_url'];?>" alt="">

                           <?php  }else{ ?>
                            <img src="assets/images/posters/poster-1.jpg" alt="">
                          <?php  } ?>
                           

                            <a href="<?php echo $movieData['video_url']; ?>" class="play-video">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>


                        <div class="movie-details">
                            <h3 class="title"><?= $movieData['title'] ?></h3>

                            <ul class="movie-subtext">
                                <li>PG-13</li>
                                <li>2h 32min</li>
                                <li><?= $movieData['Genre'] ?></li>
                                <li><?= $movieData['release_Date'] ?> <?= $movieData['Country'] ?></li>
                            </ul>

                            <a  href="<?php echo $movieData['video_url']; ?>"  target="_blank" class="btn   btn-main btn-effect">trailer</a>
                           
                            <a href="#" class="btn rate-movie"><i class="icon-heart"></i></a>

                            <div class="rating mt10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span><?php echo $movieData['rating'] ?> / 10 Ratings</span>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </section>
        <!-- =============== End OF MOVIE DETAIL INTRO 2 =============== -->


        <!-- =============== START OF MOVIE DETAIL MAIN SECTION =============== -->
        <section class="movie-detail-main ptb100">
            <div class="container">

                <div class="row">
                    <!-- Start of Movie Main -->
                    <div class="col-lg-8 col-sm-12">
                        <div class="inner pr50">

                            <!-- Storyline -->
                            <div class="storyline">
                                <h3 class="title">Storyline</h3>

                                <p><?php echo $movieData['moviesStoryLine'] ?> </p>
                            </div>

                            <!-- Media -->
                            <div class="movie-media mt50">
                                <h3 class="title"> Photos & Videos</h3>

                                <ul class="image-gallery isotope">

                                    <li ng-repeat = "image in movieImage | limitTo:15" class="element">
                                        <a href="{{image}}">
                                            <img src="{{image}}" class="img-responsive" alt="">
                                        </a>
                                    </li>

                                     
                                </ul>

                            </div>

                        </div>
                    </div>
                    <!-- End of Movie Main -->


                    <!-- Start of Sidebar -->
                    <div class="col-lg-4 col-sm-12">
                        <div class="sidebar">

                            <!-- Start of Details Widget -->
                            <aside class="widget widget-movie-details">
                                <h3 class="title">Details</h3>

                                <ul>
                                    <li><strong>Release date: </strong><?php echo $movieData['release_Date'] ?></li>
                                    <li><strong>Director: </strong><a href="#"><?php echo $movieData['Director'] ?></a></li>
                                    <li><strong>Budget: </strong><?php echo $movieData['Budget'] ?> USD</li>
                                    <li><strong>Country: </strong><?php echo $movieData['Country'] ?></li>
                                    <li><strong>Language: </strong><?php echo $movieData['Language'] ?></li>
                                    <li><strong>Production Co: </strong><a href="#"><?php echo $movieData['ProductionCo'] ?></a></li>
                                </ul>
                            </aside>
                            <!-- End of Details Widget -->

                            <!-- Start of Details Widget -->
                            <aside class="widget widget-movie-cast">
                                <h3 class="title">Cast</h3>

                                <ul class="cast-wrapper">
                                    <li ng-repeat= "cast in movieActors">
                                        <a href="celebrity-detail.html">
                                            <span class="circle-img">
                                                <img style="width: 86px!important;
    height: 86px!important;" src="{{cast.profileImage}}" alt="">
                                            </span>
                                            <h6 class="name">{{cast.name}}</h6>
                                        </a>
                                    </li>

                                    
                                </ul>

                                <!-- <a href="celebrities-list.html" class="btn btn-main btn-effect mt20">view all</a> -->

                            </aside>
                            <!-- End of Details Widget -->

                        </div>
                    </div>
                    <!-- End of Sidebar -->
                </div>

            </div>
        </section>
        <!-- =============== END OF MOVIE DETAIL MAIN SECTION =============== -->



        <!-- =============== START OF RECOMMENDED MOVIES SECTION =============== -->
        <section class="recommended-movies bg-light ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h2 class="title">People who liked this also liked...</h2>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of Latest Movies Slider -->
                <div class="col-sm-12 row">
            
                    <!-- === Start of Sliding Item 1 === -->
                    <div ng-repeat = "movie in moviebygenre" class="col-3">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="{{movie.image}}" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="{{movie.videoLink}}" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="<?php echo base_url() ?>details">{{movie.title}}</a>
                                </h4>
                                <span class="released">{{movie.releaseDate}}</span>
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
                                <span>{{movie.rating}} / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 1 === -->

 
 
                </div>
                <!-- End of Latest Movies Slider -->

            </div>
        </section>
        <!-- =============== END OF RECOMMENDED MOVIES SECTION =============== -->


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

</html>
<script>
    var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) { 
          
            $scope.moviebygenre = [];
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
                url: 'https://api.themoviedb.org/3/search/movie',
                type: 'GET',
                data: {
                    api_key: apiKey,
                    query: '<?php 
                    $words = explode("," , $movieData['Genre']);
                    $first_word = trim($words[0]); // trim() function removes any leading/trailing whitespace
                    
                    echo $first_word;
                    
                    
                     ?>', // The keyword to search for in the movie titles
                    language: "en-US",
                     page: 1
                },
            dataType: "json",
            success: function(response) {
    // Handle the response here
    console.log(response);

    // Retrieve up to 4 movies from the response
    const movies = response.results.slice(0, 4).map(async (movie) => {
      // Retrieve the video link for the movie
      const videoResponse = await $.ajax({
        url: `https://api.themoviedb.org/3/movie/${movie.id}/videos`,
        type: 'GET',
        data: {
          api_key: apiKey,
        },
      });

      const videoKey = videoResponse.results[0]?.key || null;
      const videoLink = videoKey ? `https://www.youtube.com/watch?v=${videoKey}` : null;

      // Retrieve the movie rating
      const ratingResponse = await $.ajax({
        url: `https://api.themoviedb.org/3/movie/${movie.id}`,
        type: 'GET',
        data: {
          api_key: apiKey,
        },
      });

                const rating = ratingResponse.vote_average || null;

                // Construct the movie object with the video link and rating
                return {
                    title: movie.title,
                    image: `https://image.tmdb.org/t/p/w500${movie.poster_path}`,
                    description: movie.overview,
                    releaseDate: movie.release_date,
                    readMoreUrl: `https://www.themoviedb.org/movie/${movie.id}`,
                    videoLink,
                    rating,
                };
                });

                Promise.all(movies).then((moviesArray) => {
                console.log(moviesArray);
                $scope.moviebygenre = moviesArray;
                $scope.$digest();
                });
            },
            error: function(error) {
                // Handle any errors here
                console.log(error);
            },
        });
               
        }
        $scope.UpcommingMovies();
            $scope.movieActors = [];
            $scope.movieCast = function(){
                $.ajax({
  url: 'https://api.themoviedb.org/3/search/movie',
  type: 'GET',
  data: {
    api_key: apiKey,
    query: '<?php echo $movieData['title']; ?>',
    page: '1'
  },
  success: function(response) {
    // Handle the response here
    console.log(response);

    // Retrieve the movie id from the response
    const movieId = response.results[0].id;

    // Use the movie id to retrieve the cast information
    $.ajax({
      url: `https://api.themoviedb.org/3/movie/${movieId}/credits`,
      type: 'GET',
      data: {
        api_key: apiKey,
      },
      success: function(creditsResponse) {
        // Handle the credits response here
        console.log("creditsResponse" , creditsResponse);

        // Extract the cast information from the credits response
        const cast = creditsResponse.cast.slice(0, 6).map((actor) => {
          return {
            name: actor.name,
            character: actor.character,
            profileImage: `https://image.tmdb.org/t/p/w500${actor.profile_path}`,
          };
        });

        console.log(cast);
        $scope.movieActors = cast;
        $scope.$digest();
      },
      error: function(error) {
        // Handle any errors here
        console.log(error);
      },
    });
  },
  error: function(error) {
    // Handle any errors here
    console.log(error);
  },
});



            }
            $scope.movieCast();
            $scope.movieImage = [];
            $scope.MovieImages = function(){
                $.ajax({
  url: 'https://api.themoviedb.org/3/search/movie',
  type: 'GET',
  data: {
    api_key: apiKey,
    query: '<?php echo $movieData['title']; ?>',
    page: '1'
  },
  success: function(response) {
    // Handle the response here
    console.log(response);

    // Retrieve the ID of the first movie in the response
    const movieId = response.results[0].id;

    // Make a request to retrieve the images for the movie
    $.ajax({
      url: `https://api.themoviedb.org/3/movie/${movieId}/images`,
      type: 'GET',
      data: {
        api_key: apiKey,
      },
      success: function(imagesResponse) {
        // Handle the images response here
        console.log(imagesResponse);

        // Construct an array of image URLs
        const imageUrls = imagesResponse.backdrops.map((image) => {
          return `https://image.tmdb.org/t/p/w500${image.file_path}`;
        });

        // Log the image URLs
        console.log(imageUrls);
        $scope.movieImage = imageUrls;
        $scope.$digest();

        
            $.ajax({
            url: "https://api.themoviedb.org/3/movie/" + movieId,
            method: "GET",
            data: {
                api_key: apiKey
            },
            success: function(response) {
                // get the backdrop path and build the full image URL
                var backdropPath = response.backdrop_path;
                var imageUrl = "https://image.tmdb.org/t/p/original" + backdropPath;

                // use the image URL as needed
                console.log(imageUrl);
                $scope.bannerImage = imageUrl;
                 $scope.$digest();
            }
            });
      },
      error: function(error) {
        // Handle any errors here
        console.log(error);
      },
    });
  },
  error: function(error) {
    // Handle any errors here
    console.log(error);
  },
});

            }
            $scope.bannerImage = '';
            $scope.MovieImages();
       
});
    </script>