<?php 
session_start();
   include("includes/connection.php");
   include("includes/header.php");



?>

<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

   <!-- Header -->
   <header class="header">
      <nav class="navbar navbar-expand-lg header-nav">
         <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
               <span class="bar-icon">
                  <span></span>
                  <span></span>
                  <span></span>
               </span>
            </a>
            <a href="" class="navbar-brand logo">
               <img src="assets/img/1.png" class="img-fluid" alt="Logo">
            </a>
         </div>
         <div class="main-menu-wrapper">
            <div class="menu-header">
               <a href="index.php" class="menu-logo">
                  <img src="assets/img/1.png" class="img-fluid" alt="Logo">
               </a>
               <a id="menu_close" class="menu-close" href="javascript:void(0);">
                  <i class="fas fa-times"></i>
               </a>
            </div>
            <ul class="main-nav">
               <li class="active">
                  <a href="index.php" style="font-size: 1.2rem;">Home</a>
               </li>
               <li class="has-submenu">
                  <a href="#" style="font-size: 1.2rem;">Employees <i class="fas fa-chevron-down"></i></a>
                  <ul class="submenu">
                     <li><a href="error.php">Profiles</a></li>
                     <li><a href="booking.php">Bookings</a></li>
                     <li><a href="error.php">Inquiry</a></li>
                     <li><a href="elogin.php">login</a></li>
                  </ul>
               </li>	

               <li>
                  <a href="#about" style="font-size: 1.2rem;">About</a>
               </li>
               <li class="login-link">
                  <a href="login.php">Login</a>
               </li>
            </ul>		 
         </div>		 
         <ul class="nav header-navbar-rht">
            <li class="nav-item">
               <a class="nav-link header-login" href="login.php"><b>Admin</b></a>
            </li>
         </ul>
      </nav>
   </header>
   <!-- /Header -->
   
     
   <!-- salon Specialities display -->
   <section class="section section-specialities">
      <div class="container-fluid">
         <div class="section-header text-center">
            <h2>Specialities and services</h2>
            <p class="sub-title">We gather skillful and wonderful people and harness their skills to give our customer everbit of satisfaction that they so desire.<br> ~ Luxury salon ~</p>
         </div>
         <div class="row justify-content-center">
            <div class="col-md-9">
               <!-- Slider -->
               <div class="specialities-slider slider">
               
                  <!-- Slider Item -->
                  <div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/spec10.jpg" class="img-fluid" alt="">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Loreal Haircut</p>
								</div>	
                  <!-- /Slider Item -->
                  
                  <!-- Slider Item -->
                  <div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/spec11.jpg" class="img-fluid" alt="">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Braiding</p>
								</div>							
                  <!-- /Slider Item -->
                  
                  <!-- Slider Item -->
                  <div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/spec12.jpg" class="img-fluid" alt="">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Blowdry</p>
								</div>							
                  <!-- /Slider Item -->
                  
                  <!-- Slider Item -->
                  <div class="speicality-item text-center">
                     <div class="speicality-img">
                        <img src="assets/img/specialities/spec13.jpg" class="img-fluid" alt="">
                        <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                     </div>	
                     <p>Body spa</p>	
                  </div>							
                  <!-- /Slider Item -->
                  
                  <!-- Slider Item -->
                  <div class="speicality-item text-center">
                     <div class="speicality-img">
                        <img src="assets/img/specialities/spec14.jpg" class="img-fluid" alt="">
                        <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                     </div>	
                     <p>Manicure / Pedicure</p>
                  </div>							
                  <!-- /Slider Item -->
                  
               </div>
               <!-- /Slider -->
               
            </div>
         </div>
      </div>   
   </section>	 
   <!-- End: salon Specialities display -->
  
   <!-- Employee card section -->
      <section class="section section-doctor">
         <div class="container-fluid">
         <div class="section-header text-center">
               <h1>Services</h1>
               <p class="sub-title">We gather skillful and wonderful people and harness their skills to give our customer  everbit of satisfaction that they so desire.</p>
            </div>
            <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="doctor-slider slider">
               
                  <!-- Widget 1 -->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="doctor-profile.html">
                           <img class="img-fluid" alt="User Image" src="assets/img/profiles/p1.jpg">
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="far fa-bookmark"></i>
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="">Service</a> 
                        </h3>
                        <p class="speciality" style="font-size: 1.2rem;">
                           <b>Loreal Hair Color</b>
                           <i class="fas fa-check-circle verified"></i>
                        </p>
                        <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                        </div>
                        <ul class="available-info">
                           <li>
                              <i class="far fa-clock"></i> Available
                           </li>
                           <li>
                              <i class="far fa-money-bill-alt"></i> Ksh.750
                              <i class="fas fa-info-circle" data-toggle="tooltip" title="Fixed price"></i>
                           </li>
                        </ul>
                        <div class="row row-sm justify-content-center">
                           <div class="col-6">
                              <a href="booking.php" class="btn book-btn" style="font-size: 1rem;">Book Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /Widget 1 -->
            
                  <!-- Widget 2-->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="doctor-profile.html">
                           <img class="img-fluid" alt="User Image" src="assets/img/profiles/p2.jpg">
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="far fa-bookmark"></i>
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="employee-profile.php">Service</a> 
                        </h3>
                        <p class="speciality" style="font-size: 1.2rem;">
                           <b>Body Spa</b>
                           <i class="fas fa-check-circle verified"></i>
                        </p>
                        <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                        </div>
                        <ul class="available-info">
                           <li>
                              <i class="far fa-clock"></i> Available on Tue & Thur
                           </li>
                           <li>
                              <i class="far fa-money-bill-alt"></i> Ksh.4000 
                              <i class="fas fa-info-circle" data-toggle="tooltip" title="Fixed price"></i>
                           </li>
                        </ul>
                        <div class="row row-sm justify-content-center">
                           <div class="col-6">
                              <a href="booking.php" class="btn book-btn" style="font-size: 1rem;">Book Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /Widget 2 -->
            
                  <!-- Widget 3-->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="doctor-profile.html">
                           <img class="img-fluid" alt="User Image" src="assets/img/profiles/p3.jpg">
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="far fa-bookmark"></i>
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="employee-profile.php">Service</a> 
                        </h3>
                        <p class="speciality" style="font-size: 1.2rem;">
                           <b>Layer Haircut</b>
                           <i class="fas fa-check-circle verified"></i>
                        </p>
                        <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star "></i>
                        </div>
                        <ul class="available-info">
                           <li>
                              <i class="far fa-clock"></i> Available
                           </li>
                           <li>
                              <i class="far fa-money-bill-alt"></i> Ksh.200 - 300 
                              <i class="fas fa-info-circle" data-toggle="tooltip" title="=)"></i>
                           </li>
                        </ul>
                        <div class="row row-sm justify-content-center">
                           <div class="col-6">
                              <a href="booking.php" class="btn book-btn" style="font-size: 1rem;">Book Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /Widget 3-->
            
                  <!-- Widget 4-->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="doctor-profile.html">
                           <img class="img-fluid" alt="User Image" src="assets/img/profiles/p4.jpg">
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="far fa-bookmark"></i>
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="employee-profile.php">Service</a> 
                        </h3>
                        <p class="speciality" style="font-size: 1.2rem;">
                           <b>Pre-Bonding</b>
                           <i class="fas fa-check-circle verified"></i>
                        </p>
                        <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star "></i>
                        </div>
                        <ul class="available-info">
                           <li>
                              <i class="far fa-clock"></i> Available 
                           </li>
                           <li>
                              <i class="far fa-money-bill-alt"></i> Ksh.800 
                              <i class="fas fa-info-circle" data-toggle="tooltip" title="Fixed price"></i>
                           </li>
                        </ul>
                        <div class="row row-sm justify-content-center">
                           <div class="col-6">
                              <a href="booking.php" class="btn book-btn" style="font-size: 1rem;">Book Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /Widget 4-->

                  <!-- Widget 6-->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="doctor-profile.html">
                           <img class="img-fluid" alt="User Image" src="assets/img/profiles/p6.jpg">
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="far fa-bookmark"></i>
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="employee-profile.php">Service</a> 
                        </h3>
                        <p class="speciality" style="font-size: 1.2rem;">
                           <b>Fruit facial</b>
                           <i class="fas fa-check-circle verified"></i>
                        </p>
                        <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                        </div>
                        <ul class="available-info">
                           <li>
                              <i class="far fa-clock"></i> Available
                           </li>
                           <li>
                              <i class="far fa-money-bill-alt"></i>Ksh.1200 - 1600 
                              <i class="fas fa-info-circle" data-toggle="tooltip" title="Depends on the service opted"></i>
                           </li>
                        </ul>
                        <div class="row row-sm justify-content-center">
                           <div class="col-6">
                              <a href="booking.php" class="btn book-btn" style="font-size: 1rem;">Book Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /Widget 6-->

                  <!-- Widget 7-->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="doctor-profile.html">
                           <img class="img-fluid" alt="User Image" src="assets/img/profiles/p7.jpg">
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="far fa-bookmark"></i>
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="employee-profile.php">Service</a> 
                        </h3>
                        <p class="speciality" style="font-size: 1.2rem;">
                           <b>Manicure</b>
                           <i class="fas fa-check-circle verified"></i
                        ></p>
                        <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                        </div>
                        <ul class="available-info">
                           <li>
                              <i class="far fa-clock"></i> Available
                           </li>
                           <li>
                              <i class="far fa-money-bill-alt"></i>Ksh.1000 - 1500 
                              <i class="fas fa-info-circle" data-toggle="tooltip" title="price ranges with the service giver"></i>
                           </li>
                        </ul>
                        <div class="row row-sm justify-content-center">
                           <div class="col-6">
                              <a href="booking.php" class="btn book-btn" style="font-size: 1rem;">Book Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /Widget 7-->

                  <!-- Widget 8-->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="doctor-profile.html">
                           <img class="img-fluid" alt="User Image" src="assets/img/profiles/p8.jpg">
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="far fa-bookmark"></i>
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="employee-profile.php">Service</a> 
                        </h3>
                        <p class="speciality" style="font-size: 1.2rem;">
                           <b>Pedicure</b>
                           <i class="fas fa-check-circle verified"></i>
                        </p>
                        <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                        </div>
                        <ul class="available-info">
                           <li>
                              <i class="far fa-clock"></i> Available
                           </li>
                           <li>
                              <i class="far fa-money-bill-alt"></i>Ksh.800 - 1200 
                              <i class="fas fa-info-circle" data-toggle="tooltip" title="please consult for price clarification"></i>
                           </li>
                        </ul>
                        <div class="row row-sm justify-content-center">
                           <div class="col-6">
                              <a href="booking.php" class="btn book-btn" style="font-size: 1rem;">Book Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /Widget 8-->
                  
                  
               </div>
            </div>
            </div>
         </div>
     </section>
   <!-- End: Employee card section -->


   <!-- Start: about us -->
   <section class="vh-500"  id="about"style="background-image: url(assets/img/bg.jpg);">
      <div class="container py-5 h-100">

         <!-- contact info -->      
         <div class="row">
            <?php
                        $ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
            ?> 

            <div class="col-md-3 d-flex">
          	            <div class="align-self-stretch box p-4 py-md-5 text-center">
          		            <div class="icon d-flex align-items-center justify-content-center">
          			            <h1><i class="fas fa-mobile-alt"></i></h1>
          		            </div>
          		            <h3 class="mb-4">Contact us</h3>
                            <hr>
	                        <h3><a href="tel://1234567920">+ <?php  echo $row['MobileNumber'];?></a></h3>
                           <hr>
	                     </div>
            </div>

            <div class="col-md-3 d-flex">
          	            <div class="align-self-stretch box p-4 py-md-5 text-center">
          		            <div class="icon d-flex align-items-center justify-content-center">
                             <h1><i class="fas fa-location-arrow"></i></h1>
          		            </div>
          		            <h3 class="mb-4">Address</h3>
                            <hr>
	                        <h3><?php  echo $row['PageDescription'];?></h3>
                           <hr>
	                     </div>
            </div>

            <div class="col-md-3 d-flex">
          	            <div class="align-self-stretch box p-4 py-md-5 text-center">
          		            <div class="icon d-flex align-items-center justify-content-center">
          			            <h1><i class="fas fa-history"></i></h1>
          		            </div>
          		            <h3 class="mb-4">Open Hours</h3>
                            <hr>
	                        <h3><p><?php  echo $row['Timing'];?></p></h3>
                           <hr>
	                     </div>
            </div>

            <div class="col-md-3 d-flex">
          	            <div class="align-self-stretch box p-4 py-md-5 text-center">
          		            <div class="icon d-flex align-items-center justify-content-center">
          			            <h1><i class="fas fa-envelope-open-text"></i><h1>
          		            </div>
          		            <h3 class="mb-4">Email Address</h3>
                            <hr>
	                        <h3><a href="mailto:info@yoursite.com"><?php  echo $row['Email'];?></a></h3>
                           <hr>
	                     </div>
            </div>            

            <?php } ?>
			</div>
         <!-- contact info -->
         
         <!-- display images -->
         <div class="row">
            <div class="col-lg-12">
               <div class="section-header">	
                  <h2 class="mt-2">PHOTOS</h2>
					</div>
               <hr>
               <div class="doctor-slider slider">
                  <!-- Widget 1 -->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img src="assets/img/display/work-1.jpg" class="img-fluid" alt="End Service" >
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="fas fa-star"></i>
                        </a>
                     </div>
                  </div>
                  <!-- /Widget 1 -->
                  <!-- Widget 2 -->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img src="assets/img/display/work-2.jpg" class="img-fluid" alt="End Service" >
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="fas fa-star"></i>
                        </a>
                     </div>
                  </div>
                  <!-- /Widget 2 -->
                  <!-- Widget 3 -->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img src="assets/img/display/work-3.jpg" class="img-fluid" alt="End Service" >
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="fas fa-star"></i>
                        </a>
                     </div>
                  </div>
                  <!-- /Widget 3 -->
                  <!-- Widget 4 -->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img src="assets/img/display/work-4.jpg" class="img-fluid" alt="End Service" >
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="fas fa-star"></i>
                        </a>
                     </div>
                  </div>
                  <!-- /Widget 4 -->
                  <!-- Widget 5 -->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img src="assets/img/display/work-5.jpg" class="img-fluid" alt="End Service" >
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="fas fa-star"></i>
                        </a>
                     </div>
                  </div>
                  <!-- /Widget 5 -->
                  <!-- Widget 6 -->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img src="assets/img/display/work-6.jpg" class="img-fluid" alt="End Service" >
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="fas fa-star"></i>
                        </a>
                     </div>
                  </div>
                  <!-- /Widget 6 -->
                  <!-- Widget 7 -->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img src="assets/img/display/work-7.jpg" class="img-fluid" alt="End Service" >
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="fas fa-star"></i>
                        </a>
                     </div>
                  </div>
                  <!-- /Widget 7 -->
                  <!-- Widget 8 -->
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img src="assets/img/display/work-8.jpg" class="img-fluid" alt="End Service" >
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="fas fa-star"></i>
                        </a>
                     </div>
                  </div>
                  <!-- /Widget 8 -->
               </div>
            </div>
         </div>
         
         <!--display images -->
         
      </div>
   </section>
   <!-- End: about us -->

   
</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Slick JS -->
<script src="assets/js/slick.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

<script src="assets3/js/jquery.animateNumber.min.js"></script>

</body>

</html>