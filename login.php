<?php 
 session_start();
 error_reporting(0);
 include("includes/connection.php");
 
 
 if(isset($_POST['login'])) {
	 
   $adminuser=$_POST['username'];
   $password=md5($_POST['password']);
   $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
   $ret=mysqli_fetch_array($query);
   if($ret>0){

	$_SESSION['bpmsaid']=$ret['ID'];
	echo "<script>alert('Welcome Back $adminuser!.');</script>";
	echo "<script>window.location.href = 'admin.php'</script>";
   }
   else{
	echo "<script style = 'color:red;'> alert('Incorrect Username or Password!!!')</script>";
   }
 }
  

?>


<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Luxury salon</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets2/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets2/css/style.css">
		
    </head>
    <body>
	
		<!-- Main Wrapper -->
		<section class="vh-100" style="background-image: url(assets/img/bg.jpg);">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-8 col-lg-6 col-xl-5">
						<div class="card shadow-2-strong" style="border-radius: 1rem;">
							<div class="card-body p-5 text-center">
								<h3 class="mb-5">Sign in</h3>
								<hr class="my-4">
								<form action="" method ="post">
									<div class="form-group form-focus">
										<input type="text" class="form-control floating" placeholder="Username" name="username">
									</div>
									<div class="form-group form-focus">
										<input type="password" class="form-control floating" placeholder="Password" name="password">
									</div>
									<div class="form-check d-flexjustify-content-start mb-4">
										<input class="form-check-input" type="checkbox" value="" id="form1Example">
										<label class="form-check-label" for="form1Example">Remember me</label>
									</div>
									<button class="btn btn-primary btn-md btn-block" type="submit" name="login" value="login">Login</button>
									<hr class="my-4">
									<a class="btn btn-outline-info btn-sm" href="index.php"><b>Back</b></a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>

</html>