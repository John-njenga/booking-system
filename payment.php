<?php 
session_start();
include("includes/connection.php");
include("includes/header.php");

if(isset($_POST['submit']))
{

  $receiptnumber = mt_rand(100000000, 999999999);
  $aptno=$_POST['receipt'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $amount=$_POST['amount'];


  $query=mysqli_query($con,"insert into tbltransactions(receipt,aptno,client_name,email,phone,amount) value('$receiptnumber','$aptno','$name','$email','$phone','$amount')");

  if ($query) {
$ret=mysqli_query($con,"select AptNumber from tblappointment where Email='$email' and  PhoneNumber='$phone'");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
echo "<script>alert('Payment Successful!.');</script>";	
echo "<script>window.location.href = 'employee.php'</script>";
}
else{
  echo "<script>alert('Not Successfull. Try Agian!')</script>";
  }


}

?>

<body>

<!-- Main Wrapper -->
<div class="main-wrapper">
    
    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                
               <!-- Profile Sidebar -->
               <div class="profile-sidebar">
                    <?php
          			    $adid=$_SESSION['bpmsaid'];
          			    $ret=mysqli_query($con,"select EmployeeName from tblemployee where ID='$adid'");
          			    $row=mysqli_fetch_array($ret);
          			    $name=$row['EmployeeName'];
        			?>                   
                  <div class="widget-profile pro-widget-content">
                     <div class="profile-info-widget">
                        <a href="#" class="booking-doc-img">
                           <img src="assets/img/profiles/def.jpg" alt="User Image">
                        </a>
                        <div class="profile-det-info">
                           <h3><?php echo $name ?></h3>
                        </div>
                     </div>
                  </div>
                  <div class="dashboard-widget">
                     <nav class="dashboard-menu">
                        <ul>
                           <li>
                              <a href="employee.php">
                                 <i class="fas fa-columns"></i>
                                 <span>Dashboard</span>
                              </a>
                           </li>
                           <li>
                              <a href="appointment-in.php">
                                 <i class="fas fa-calendar-check"></i>
                                 <span>Appointments</span>
                              </a>
                           </li>
                           <li>
                              <a href="schedule-timings.php">
                                 <i class="fas fa-hourglass-start"></i>
                                 <span>Schedule Timings</span>
                              </a>
                           </li>
                           <li>
                              <a href="invoices.php">
                                 <i class="fas fa-file-invoice"></i>
                                 <span>Invoices</span>
                              </a>
                           </li>
                           <li class="active">
                              <a href="payment.php">
                                 <i class="far fa-money-bill-alt"></i>
                                 <span>Payment</span>
                              </a>
                           </li>
                           <li>
                              <a href="employee-change-password.php">
                                 <i class="fas fa-lock"></i>
                                 <span>Change Password</span>
                              </a>
                           </li>
                           <li>
                              <a href="index.php">
                                 <i class="fas fa-sign-out-alt"></i>
                                 <span>Logout</span>
                              </a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <!-- /Profile Sidebar -->
                    
                </div>
                <div class="col-md-7 col-lg-8 col-xl-9">
                <form action="" method="post">
                    <!-- Payment form -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Payment</h4>
                            <div class="row form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="change-avatar">
                                            <div class="profile-img">
                                                <img src="assets/img/money.png" alt="User Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Receipt Number</label>
                                        <input type="text" class="form-control" name="receipt" placeholder="Initial receipt generated!">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Your email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Current contacts">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-0">
                                        <label>Amount</label>
                                        <input type="text" class="form-control" name="amount" placeholder="Kshs.">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section submit-btn-bottom">
                                <button type="submit" class="btn btn-info" name="submit">Pay</button>
                            </div>                            
                        </div>
                    </div>
                    <!-- /Payment form -->   
                    </form>                                                         
                    
                </div>
            </div>

        </div>

    </div>		
    <!-- /Page Content -->
   
</div>
<!-- /Main Wrapper -->

<!-- Appointment Details Modal -->
<div class="modal fade custom-modal" id="pay_details">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Payment Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="info-details">
                    <li>
                        <div class="details-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="title">Appointment Date</span>
                                    <span class="text">21 Oct 2019 10:00 AM</span>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-right">
                                        <button type="button" class="btn bg-success-light btn-sm" id="topup_status">Completed</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span class="title">Status:</span>
                        <span class="text">Completed</span>
                    </li>
                    <li>
                        <span class="title">Confirm Date:</span>
                        <span class="text">29 Jun 2019</span>
                    </li>
                    <li>
                        <span class="title">Paid Amount</span>
                        <span class="text">$450</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /Appointment Details Modal -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Sticky Sidebar JS -->
<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

<!-- Select2 JS -->
<script src="assets/plugins/select2/js/select2.min.js"></script>

<!-- Dropzone JS -->
<script src="assets/plugins/dropzone/dropzone.min.js"></script>

<!-- Bootstrap Tagsinput JS -->
<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

<!-- Profile Settings JS -->
<script src="assets/js/profile-settings.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>

</html>