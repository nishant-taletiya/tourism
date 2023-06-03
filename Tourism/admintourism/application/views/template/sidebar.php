  <!-- ========== Left Sidebar Start ========== -->
  <div  id="page-sidebar"  class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
      <div class="left-user-details">
        <div class="col-xs-4">
          
        </div>
        <div class="col-xs-4 no-padding">
          
        </div>
        <div class="col-xs-4">
          
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- Sidemenu -->
      <div id="sidebar-menu"> 
        <!-- Left Menu Start -->
        <ul class="metisMenu nav" id="side-menu">
          <li class="menu-title">Menu</li>
          
          <li> <a href="<?php echo site_url();?>/dashboardcontroller/dashboard/"  aria-expanded="true"><i class="fi-air-play"></i> <span> Dashboard</span> </a> </li>
          
          <li class="has_sub"> <a href="javascript:void(0);"><i class="icon-location-pin"></i><span> Place </span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/placecontroller/showplace">Show Place</a></li>
              <li><a href="<?php echo site_url();?>/placecontroller/addplace">Add Place</a></li>
              
            </ul>
          </li>
          
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="icon-directions
"></i> <span>
          Sub Place</span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/subplacecontroller/showsubplace">Show Sub Place</a></li>
              <li><a href="<?php echo site_url();?>/subplacecontroller/addsubplace">Add Sub Place </a></li>
                </ul>
              </li>
          
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="fi-location"></i> <span> Attraction </span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/attractioncontroller/showattraction">Show Attaction</a></li>
              <li><a href="<?php echo site_url();?>/attractioncontroller/addattraction" class="active">Add Attraction</a></li>
            </ul>
          </li>
          
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="icon-camera"></i> <span> Photo Gallery </span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/photocontroller/showphoto">Show Photo</a></li>
              <li><a href="<?php echo site_url();?>/photocontroller/addphoto">Add Photo</a></li>
              
            </ul>
          </li>
          
          
          
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="fi-disc"></i><span class="menu-arrow"></span> <span> Packages </span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/packagescontroller/showpackages">Show Packages</a></li>
              <li><a href="<?php echo site_url();?>/packagescontroller/addpackages">Add Packages</a></li>
                          </ul>
          </li>
          
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-lead-pencil"></i><span> Bus Ticket Registration </span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              
              <li><a href="<?php echo site_url();?>/buscontroller/showbus">Show Bus</a></li>
              </ul>
          </li>
          
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="icon-layers"></i> <span>
          Seats</span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/seatcontroller/showseat">Show Seats</a></li>
                </ul>
              </li>
          
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="icon-people"></i><span> Guide </span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/guidecontroller/showguide">Show Guide</a></li>
              <li><a href="<?php echo site_url();?>/guidecontroller/addguide">Add Guide</a></li>
              
            </ul>
          </li>

          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="icon-chart"></i><span> Hotel </span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/hotelcontroller/showhotel">Show Hotel</a></li>
              <li><a href="<?php echo site_url();?>/hotelcontroller/addhotel">Add Hotel</a></li>
             </ul>
          </li>
          
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-border-color"></i> <span>
          Room booking</span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/roombookingcontroller/showroombooking">Show Room Booking</a></li>
                </ul>
              </li>
              
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="icon-home"></i> <span>
          Rooms</span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/roomcontroller/showroom">Show Rooms</a></li>
              <li><a href="<?php echo site_url();?>/roomcontroller/addroom">Add  Rooms</a></li>
                </ul>
              </li>
          
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="dripicons-photo-group"></i> <span>
          Room Images</span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/roomimagecontroller/showroomimage">Show Images</a></li>
                </ul>
              </li>
         
         
          
        
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="icon-user"></i> <span>
          User Register</span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/usercontroller/showuser">Show User</a></li>
                </ul>
              </li> 
              
          <li> <a href="javascript: void(0);" aria-expanded="true"><i class="icon-heart"></i> <span>
          Wish List</span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level nav" aria-expanded="true">
              <li><a href="<?php echo site_url();?>/wishlistcontroller/showwishlist">Show Wish List</a></li>

                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Sidebar -->
      <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left --> 
    
  </div>
  <!-- Left Sidebar End --> 
 