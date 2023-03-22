
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="wingo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, wingo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url(); ?>adminassets/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>adminassets/assets/images/favicon.png" type="image/x-icon">
    <title>wingo - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/prism.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/slick-theme.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url(); ?>adminassets/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminassets/assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="main-loader">
        <div class="bar-0"></div>
        <div class="bar-1"></div>
        <div class="bar-2"></div>
        <div class="bar-3"></div>
        <div class="bar-4"></div>
      </div>
      <div class="loading">Loading...    </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>adminassets/assets/images/logo/logo.png" alt=""></a></div>
          </div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i></div>
                  <input class="form-control-plaintext" placeholder="Search here.....">
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu">
            <ul class="nav-menus">
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="shopping-bag"></i><span class="badge badge-pill badge-secondary">4</span></div>
                <div class="notification-dropdown cart onhover-show-div">
                  <div class="m-3">
                    <div class="row">
                      <div class="col">
                        <p> <b>5 </b>Items in Cart</p>
                      </div>
                      <div class="col text-end">
                        <p class="m-0">Cart Subtotal</p>
                        <h5 class="txt-primary f-w-700">5000$</h5>
                      </div>
                    </div><a class="btn btn-dark w-100 mt-1" href="checkout.html">Process To Checkout</a>
                  </div>
                  <ul class="border-top custom-scrollbar"> 
                    <li>
                      <div class="media"><img src="<?php echo base_url(); ?>adminassets/assets/images/product/small/tshirt.png" alt="">
                        <div class="media-body"><a href="product.html">Woman T-shirt - yellow</a>
                          <h6 class="price">200$</h6>
                          <div class="row">
                            <div class="col-9">
                              <h6 class="qty">Qty
                                <input class="form-control" type="number" placeholder="1">
                              </h6>
                            </div>
                            <div class="col-3 text-end d-flex"><i class="me-1" data-feather="edit"></i><i data-feather="trash-2"></i></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img src="<?php echo base_url(); ?>adminassets/assets/images/product/small/bag.png" alt="">
                        <div class="media-body"><a href="product.html">Woman bag - purple</a>
                          <h6 class="price">100$</h6>
                          <div class="row">
                            <div class="col-9">
                              <h6 class="qty">Qty
                                <input class="form-control" type="number" placeholder="1">
                              </h6>
                            </div>
                            <div class="col-3 text-end d-flex"><i class="me-1" data-feather="edit"></i><i data-feather="trash-2"></i></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img src="<?php echo base_url(); ?>adminassets/assets/images/product/small/headphone.png" alt="">
                        <div class="media-body"><a href="product.html">Unisex headphone - Red</a>
                          <h6 class="price">2000$</h6>
                          <div class="row">
                            <div class="col-9">
                              <h6 class="qty">Qty
                                <input class="form-control" type="number" placeholder="1">
                              </h6>
                            </div>
                            <div class="col-3 text-end d-flex"><i class="me-1" data-feather="edit"></i><i data-feather="trash-2"></i></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img src="<?php echo base_url(); ?>adminassets/assets/images/product/small/chair.png" alt="">
                        <div class="media-body"><a href="product.html">Ergonomic Chair</a>
                          <h6 class="price">920$</h6>
                          <div class="row">
                            <div class="col-9">
                              <h6 class="qty">Qty
                                <input class="form-control" type="number" placeholder="1">
                              </h6>
                            </div>
                            <div class="col-3 text-end d-flex"><i class="me-1" data-feather="edit"></i><i data-feather="trash-2"></i></div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="m-3 mt-1"><a class="btn btn-light w-100 mt-3" href="cart.html">View cart</a></div>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="badge badge-pill badge-primary">4</span></div>
                <div class="notification-dropdown onhover-show-div">
                  <div class="m-3"><a class="btn btn-dark w-100" href="email_inbox.html">You have 4 notifications</a></div>
                  <ul class="border-top">
                    <li>
                      <p class="mb-0 ps-4 p-relative"><a href="to-do.html"><i class="fa fa-circle me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></a></p>
                    </li>
                    <li>
                      <p class="mb-0 ps-4 p-relative"><a href="to-do.html"><i class="fa fa-circle me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></a></p>
                    </li>
                    <li>
                      <p class="mb-0 ps-4 p-relative"><a href="to-do.html"><i class="fa fa-circle me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></a></p>
                    </li>
                    <li>
                      <p class="mb-0 ps-4 p-relative"><a href="to-do.html"><i class="fa fa-circle me-3 font-warning"></i>Delivery Complete<span class="pull-right">6 hr  </span></a></p>
                    </li>
                  </ul>
                  <div class="m-3 mt-1"><a class="btn btn-light w-100" href="email_inbox.html">View all</a></div>
                </div>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <div class="chat-dropdown onhover-show-div">                   
                  <div class="m-3"><a class="btn btn-dark w-100" href="chat.html">You have 3 message</a></div>
                  <ul class="border-top custom-scrollbar"> 
                    <li>
                      <div class="media"><img class="img-fluid rounded-circle me-3" src="<?php echo base_url(); ?>adminassets/assets/images/avtar/emoji/7.png" alt="">
                        <div class="status-circle online"></div>
                        <div class="media-body"><a href="chat.html"><span>Erica Hughes</span></a>
                          <p class="f-12 light-font">okay, trying now.</p>
                        </div>
                        <p class="badge badge-primary">32 min</p>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img class="img-fluid rounded-circle me-3" src="<?php echo base_url(); ?>adminassets/assets/images/avtar/emoji/8.png" alt="">
                        <div class="status-circle away"></div>
                        <div class="media-body"><a href="chat.html"><span>Kori Thomas</span></a>
                          <p class="f-12 light-font">i could help in some of bug?</p>
                        </div>
                        <p class="badge badge-success">58 min</p>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img class="img-fluid rounded-circle me-3" src="<?php echo base_url(); ?>adminassets/assets/images/avtar/emoji/4.png" alt="">
                        <div class="status-circle offline"></div>
                        <div class="media-body"><a href="chat.html"><span>Ain Chavez</span></a>
                          <p class="f-12 light-font">It's working awesome :)</p>
                        </div>
                        <p class="badge badge-danger">1 hr</p>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img class="img-fluid rounded-circle me-3" src="<?php echo base_url(); ?>adminassets/assets/images/avtar/emoji/1.png" alt="">
                        <div class="status-circle offline"></div>
                        <div class="media-body"><a href="chat.html"><span>Johan deo</span></a>
                          <p class="f-12 light-font">Great Thanks you !!</p>
                        </div>
                        <p class="badge badge-danger">2 hr</p>
                      </div>
                    </li>
                  </ul>
                  <div class="m-3"><a class="btn btn-light w-100" href="chat.html">View all</a></div>
                </div>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="media profile-media"><img class="rounded-circle" src="<?php echo base_url(); ?>adminassets/assets/images/avtar/emoji/9.png" alt=""></div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="user-profile.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="kanban.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a class="btn btn-light w-100" href="login.html"><i data-feather="log-in"></i>Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="d-lg-none col mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->