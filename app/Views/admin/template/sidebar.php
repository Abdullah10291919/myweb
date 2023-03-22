                  
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>adminassets/assets/images/logo/logo.png" alt=""></a></div>
          <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>adminassets/assets/images/logo/logo-icon.png" alt=""></a></div>
          <div class="morden-logo"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>adminassets/assets/images/logo/morden-logo.png" alt=""></a></div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li  ><a class="nav-link menu-title" href="<?php echo base_url()?>admins"><i data-feather="home"></i><span>Dashboard</span></a>
                    
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Add Movie</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="<?php echo base_url(); ?>add_movies">Add New Movie</a></li>
                     
                    </ul>
                  </li>
                  <!-- <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Catogeries</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="<?php echo base_url() ?>addcatogery">Add New category</a></li>
                      <li><a href="<?php echo base_url() ?>catogery">Category List</a></li>
                    </ul>
                  </li> -->
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layout"></i><span>Movies</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="<?php echo base_url()?>movieslist?id=1">Up Comming movies</a></li>
                      <li><a href="<?php echo base_url()?>movieslist?id=2">  Latest movies  </a></li>
                      <li><a href="<?php echo base_url()?>movieslist?id=3">  Most Watched  </a></li>
                      <li><a href="<?php echo base_url()?>movieslist?id=4">Most rated movied         </a></li>
                      <li><a href="<?php echo base_url()?>movieslist?id=5">TV shows</a></li>
                       
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box"></i><span>Users  </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="projects.html">Verified Users</a></li>
                      <li><a href="projectcreate.html">blocked users</a></li>
                    </ul>
                  </li>
                  </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>