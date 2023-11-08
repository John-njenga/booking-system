<?php 
 session_start();
 error_reporting(0);

 include("includes/connection.php");
 include("includes/header.php");

 if(isset($_POST['submit']))
 {

   $aptnumber = mt_rand(100000000, 999999999);
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $services=$_POST['services'];
   $adate=$_POST['adate'];
   $atime=$_POST['atime'];

   if (is_numeric($name)) {
      $nameErr = "The name should only contain letters!";
      echo "<script> alert('$nameErr');</script>";
      echo "<script>window.location.href='booking.php'</script>";
   }elseif ((strlen($name) < 5) || (strlen($name) > 30)) {
      $nameErr = "The name is either too short or too long";
      echo "<script> alert('$nameErr');</script>";
      echo "<script>window.location.href='booking.php'</script>";
   }else {
      if ( (strlen($email) < 7) || (strlen($email) > 20)) {
         $emErr = "The Email is either too short or too long";
         echo "<script>alert('$emErr);</script>";
         echo "<script>window.location.href='booking.php'</script>";
      }elseif (strlen($phone) > 10) {
         $pnoErr = "The phone number is too long";
         echo "<script> alert('$pnoErr');</script>";
        }elseif (strlen($phone) < 10) {
         $pnoErr = "The phone number is too short";
         echo "<script> alert('$pnoErr');</script>";
        }
   }

   $query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
   $query1=mysqli_query($con,"insert into tblappointment_in(receipt,name,email,mobile,applydate,appytime,service) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
   if ($query) {
$ret=mysqli_query($con,"select AptNumber from tblappointment where Email='$email' and  PhoneNumber='$phone'");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
echo "<script>window.location.href='booking-success.php'</script>";	
 }
 else{
   echo "<script>window.location.href='booking-success.php'</script>";
   }

 
}

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
		 
         </div>		 
         <ul class="nav header-navbar-rht">
            <li class="nav-item">
               <a class="nav-link header-login" href="index.php"><b>Back</b></a>
            </li>
         </ul>
      </nav>
   </header>
   <!-- /Header -->

   <!-- start: main body -->
   <section class="vh-100" style="background-image: url(assets/img/search-bg.jpg);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-left align-items-center h-80">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5"><br><br><br>
                    <div class="card shadow-5-strong">
                        <div class="card-body p-5 text-center">
							<h3 class="mb-5">Make an appointment</h3>
							<!-- Form -->
							<form class="user" action="#" method = "post">
									<div class="form-group">
										<input class="form-control" type="text" name ="name" placeholder="Full name" required="true">
									</div>
									<div class="form-group">
										<input class="form-control" type="email" name ="email" placeholder="Your Email" required="true">
									</div>
                           <div class="form-group">
										<input class="form-control" type="text" name ="phone" placeholder="Phone number">
									</div>
                           <div class="form-group">
					               <div class="select-wrap">
		                           <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                           <select name="services" id="services" required="true" class="form-control">
		                            	<option value="">Select a Service</option>
		                      	         <?php 
								                  $query=mysqli_query($con,"select * from tblservices");
                                          while($row=mysqli_fetch_array($query))
                                             {
                                       ?>
		                              <option value="<?php echo $row['ServiceName'];?>">
							                  <?php echo $row['ServiceName'];?>
							               </option>
		                                 <?php } ?> 
		                           </select>
		                        </div><br>
                              <div class="form-group">
										    <input class="form-control" type="date" name ="adate" placeholder="Book a date" required="true">
									   </div>
                              <div class="form-group">
										    <input class="form-control" type="time" name ="atime" placeholder="Select time" required="true">
									   </div>
									   <div class="form-group">
                                 <input type="submit" name="submit" value="Make an Appointment" class="btn btn-outline-info">
									   </div>
                           </div>
							</form>
							<!-- /Form -->
						</div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
   <!-- end: main body -->
    
   
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

</body>

</html>