 
        <!-- Page Sidebar Ends-->
        <div class="page-body ecommerce-dash">
          <div class="container-fluid">
            <div class="page-header dash-breadcrumb">
              <div class="row">
                <div class="col-6">                              
                  <h3 class="f-w-600">Dashboard</h3>
                </div>
                <div class="col-6">
                  <div class="breadcrumb-sec">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admins"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Dashboard</li>
                      <li class="breadcrumb-item active">Movies</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row size-column">
              <div class="col-xl-12 box-col-12">
                <div class="card perform-overview-sec">
                  <div class="card-header">
                    <h5>Performance Overview</h5>
                  </div>
                  <div class="card-body p-t-0">
                    <div class="media d-none">
                      <div class="badge-groups w-100 px-0">
                        <h5 class="font-light">Performance Overview</h5>
                      </div>
                    </div>
                    <div class="slide-4 overview">
                      <div>
                        <div class="card">
                          <div class="card-body">
                            <div class="media">
                              <div class="media-body">
                                <ul class="widget-card">
                                  <li><img class="img-fluid me-2" src="../assets/images/dashboard-2/p_1.png"
                                   alt="Image description"><span class="font-primary">Latest Movies</span></li>
                                  <li>
                                    <h4 class="counter"><?= $totallatestMovie ?></h4>
                                  </li>
                                  <li class="star-main">
                                   
                                    <ul class="rating-cionlist">
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <svg viewbox="0 0 0 0" style="height:0; width: 0;">
                                <defs>
                                  <lineargradient id="gradient-a" x2="0%" y2="100%">
                                    <stop offset="0%" stop-color="#4d8aff"></stop>
                                    <stop offset="100%" stop-color="transparent"></stop>
                                  </lineargradient>
                                </defs>
                              </svg>
                              <div class="chartist-main-sec">
                                <div class="ct-chart1"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="card">
                          <div class="card-body">
                            <div class="media">
                              <div class="media-body">
                                <ul class="widget-card">
                                  <li><img class="img-fluid me-2" src="../assets/images/dashboard-2/p_1.png"
                                   alt="Image description"><span class="font-primary">Up Comming</span></li>
                                  <li>
                                    <h4 class="counter"><?= $upcomming ?></h4>
                                  </li>
                                  <li class="star-main">
                                    
                                    <ul class="rating-cionlist">
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <svg viewbox="0 0 0 0" style="height:0; width: 0;">
                                <defs>
                                  <lineargradient id="gradient-b" x2="0%" y2="100%">
                                    <stop offset="0%" stop-color="#f73164"></stop>
                                    <stop offset="100%" stop-color="transparent"></stop>
                                  </lineargradient>
                                </defs>
                              </svg>
                              <div class="chartist-main-sec">
                                <div class="ct-chart2"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="card">
                          <div class="card-body">
                            <div class="media">
                              <div class="media-body">
                                <ul class="widget-card">
                                  <li><img class="img-fluid me-2" src="../assets/images/dashboard-2/p_3.png"
                                   alt="Image description"><span class="font-success">Most like</span></li>
                                  <li>
                                    <h4 class="counter"><?= $mostlike ?></h4>
                                  </li>
                                  <li class="star-main">
                                   
                                    <ul class="rating-cionlist">
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <svg viewbox="0 0 0 0" style="height:0; width: 0;">
                                <defs>
                                  <lineargradient id="gradient-c" x2="0%" y2="100%">
                                    <stop offset="0%" stop-color="#46d15e"></stop>
                                    <stop offset="100%" stop-color="transparent"></stop>
                                  </lineargradient>
                                </defs>
                              </svg>
                              <div class="chartist-main-sec">
                                <div class="ct-chart3"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="card">
                          <div class="card-body">
                            <div class="media">
                              <div class="media-body">
                                <ul class="widget-card">
                                  <li><img class="img-fluid me-2" src="../assets/images/dashboard-2/p_4.png"
                                   alt="Image description"><span class="font-warning">Most Watched</span></li>
                                  <li>
                                    <h4 class="counter"><?= $mostWatch ?></h4>
                                  </li>
                                  <li class="star-main">
                                   
                                    <ul class="rating-cionlist">
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <svg viewbox="0 0 0 0" style="height:0; width: 0;">
                                <defs>
                                  <lineargradient id="gradient-d" x2="0%" y2="100%">
                                    <stop offset="0%" stop-color="#ff781e"></stop>
                                    <stop offset="100%" stop-color="transparent"></stop>
                                  </lineargradient>
                                </defs>
                              </svg>
                              <div class="chartist-main-sec">
                                <div class="ct-chart4"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="card">
                          <div class="card-body">
                            <div class="media">
                              <div class="media-body">
                                <ul class="widget-card">
                                  <li><img class="img-fluid me-2" src="../assets/images/dashboard-2/p_1.png" 
                                  alt="Image description"><span class="font-primary">Tv Shows</span></li>
                                  <li>
                                    <h4 class="counter"><?= $tvshow ?></h4>
                                  </li>
                                  <li class="star-main">
                                     
                                    <ul class="rating-cionlist">
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <svg viewbox="0 0 0 0" style="height:0; width: 0;">
                                <defs>
                                  <lineargradient id="gradient-a" x2="0%" y2="100%">
                                    <stop offset="0%" stop-color="#4d8aff"></stop>
                                    <stop offset="100%" stop-color="transparent"></stop>
                                  </lineargradient>
                                </defs>
                              </svg>
                              <div class="chartist-main-sec">
                                <div class="ct-chart5"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                       
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-7 box-col-12 des-xl-100">
                <div class="card top-sell-sec">
                  <div class="card-header pb-0">
                    <h5>Top Selling Product</h5>
                    <div class="card-header-right">
                      <ul class="setting-option">
                        <li>
                          <div class="setting-badge"><i class="fa fa-spin fa-cog font-primary"></i></div>
                        </li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="top-sell-table">
                      <div class="item">
                        <div class="table-responsive product-list">
                          <table class="table table-bordernone">
                            <thead>
                              <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Release On</th>
                                <th>Action</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              
                              <tr ng-repeat="data in UpcommingMovieslist">
                                <td >{{data.title}}</td>
                                <td><img src="{{data.image}}" style="    width: 100px;
    height: 100px;
    border-radius: 10px;
" class="w-30"/></td>
                                <td>Release Data:</br>
                                  <span>
                                  {{data.releaseDate}}  
                                </span>

                              </td>
                                <td> 
                                 <a href="{{data.readMoreUrl}}">Read More <i class="fa fa-arrow-left font-primary me-1"></i> </a> 
                                </td>
                                 
                                 
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  
                  </div>
                </div>
              </div>
              <div class="col-xl-5 box-col-12 des-xl-100">
                <div class="row">
                  <div class="col-xl-12 col-sm-6 des-xl-50 box-col-6 des-sm-100">
                    <div class="card service-contact-sec">
                      <div class="card-header pb-0">
                        <h5>Services Contact</h5>
                        <div class="card-header-right">
                          <ul class="setting-option">
                            <li>
                              <div class="setting-badge"><i class="fa fa-spin fa-cog font-primary"></i></div>
                            </li>
                            <li><i class="view-html fa fa-code font-primary"></i></li>
                            <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                            <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                            <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                            <li><i class="icofont icofont-error close-card font-primary"></i></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive groups-table service-contact-table">
                          <table class="table table-bordernone">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-inline-block align-middle">
                                    <div class="t-title"><a href="user-profile.html"><img class="img-radius img-40 align-top m-r-15 rounded-circle" src="../assets/images/dashboard-2/s_1.png" alt="" data-original-title="" title=""></a>
                                      <div class="d-inline-block"><span>+1(056)5685 5684</span>
                                        <p class="d-block">Marshel Medroled</p>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <p>Available Now</p>
                                </td>
                                <td>
                                  <div class="gradient-round"><i class="fa fa-phone"></i></div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-inline-block align-middle">
                                    <div class="t-title"><a href="user-profile.html"><img class="img-radius img-40 align-top m-r-15 rounded-circle" src="../assets/images/dashboard-2/s_2.png" alt="" data-original-title="" title=""></a>
                                      <div class="d-inline-block"><span>+1(253) 3017 9801</span>
                                        <p class="d-block">Eliyana Geloren</p>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <p>Available Now</p>
                                </td>
                                <td>
                                  <div class="gradient-round"><i class="fa fa-phone"></i></div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#services-contact" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-sm-6 des-xl-50 box-col-6 des-sm-100">
                    <div class="card">
                      <div class="card-header">
                        <h5>Connect With Us</h5>
                        <div class="card-header-right">
                          <ul class="setting-option">
                            <li>
                              <div class="setting-badge"><i class="fa fa-spin fa-cog font-primary"></i></div>
                            </li>
                            <li><i class="view-html fa fa-code font-primary"></i></li>
                            <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                            <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                            <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                            <li><i class="icofont icofont-error close-card font-primary"></i></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body p-t-0">
                        <div class="connect-sec">
                          <table>
                            <tr>
                              <td>
                                <div class="facebook-sec"><img class="img-40" src="../assets/images/dashboard-2/facebook.png" alt="" title="">
                                  <div class="name-user"><span>Facebook</span>
                                    <p>680k</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="google-sec"><img class="img-40" src="../assets/images/dashboard-2/googleplus.png" alt="" title="">
                                  <div class="name-user"><span>Google</span>
                                    <p>546k</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="twitter-sec"><img class="img-40" src="../assets/images/dashboard-2/twitter.png" alt="" title="">
                                  <div class="name-user"><span>Twitter</span>
                                    <p>856k</p>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#contact-us" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- tap on top starts-->
        <div class="tap-top"><i class="icon-control-eject"></i></div>
        <!-- tap on tap ends-->
     <script>
      

    
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
          
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
                console.log(response);
                const movies = response.results.map(movie => ({
                title: movie.title,
                image: `https://image.tmdb.org/t/p/w500${movie.poster_path}`,
                description: movie.overview,
                releaseDate: movie.release_date,
                readMoreUrl: `https://www.themoviedb.org/movie/${movie.id}`
                }));

                console.log(movies);
                $scope.UpcommingMovieslist = movies;
 
              
                $scope.$digest();
            }
        });
               
        }
        $scope.UpcommingMovies();
       


       
});
      </script>