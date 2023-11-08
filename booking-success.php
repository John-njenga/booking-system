<?php 
 session_start();
 include("includes/connection.php");
 include("includes/header.php");
 error_reporting(0);

 ?>

<body>

<!-- Main Wrapper -->
<div class="main-wrapper">
    
    <!-- Page Content -->
    <section class="vh-100" style="background-image: url(assets/img/bg.jpg)">
        <div class="container-fluid">
        
            <div class="row justify-content-center">
                <div class="col-lg-6"><br><br><br><br><br><br>
                
                    <!-- Success Card -->
                    <div class="card success-card">
                        <div class="card-body">
                            <div class="success-cont">
                                <i class="fas fa-check"></i>
                                <h3>Your Appointment has been booked Successfully!</h3><br>
                                <p>Thank you for choosing our service</p>
                                <h3>Receipt number: <h2><?php echo $_SESSION['aptno'];?></h2></h3>
                                <a href="index.php" class="btn btn-outline-info view-inv-btn">Home</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Success Card -->
                    
                </div>
            </div>
            
        </div>
</section>		
    <!-- /Page Content -->

   
</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>

</html>