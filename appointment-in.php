<?php 
session_start();
include("includes/connection.php");
include("includes/header.php");

if (strlen($_SESSION['bpmsaid']==0)) {
	header('location:elogin.php');
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
                           <li class="active">
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
                           <li>
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
                              <a href="elogin.php">
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
                    <div class="appointments">
                    
                        <!-- Appointment List -->
                        <div class="appointment-list">
                                <?php
                                    $sql = "SELECT * FROM tblappointment_in";
                                    $result = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $receipt = $row['receipt'];
          			                $name=$row['name'];
                                    $email=$row['email'];
                                    $numb=$row['mobile'];
                                    $date=$row['applydate'];
                                    $time=$row['appytime'];
                                    $service=$row['service'];
        			            ?>
                            <div class="profile-info-widget">
                                <a href="patient-profile.html" class="booking-doc-img">
                                    <img src="assets/img/user.png" alt="client default Image">
                                </a>
                                <div class="profile-det-info">                                     
                                    <h3><a href=""><?php echo $name ?> </a></h3>
                                    <div class="patient-details">
                                        
                                        <h5><i class="fas fa-envelope"></i><?php echo $email ?></h5>
                                        <h5><i class="fas fa-calendar"></i><?php echo $date ?></h5>
                                        <h5><i class="far fa-clock"></i><?php echo $time ?></h5>
                                        <h5><i class="fab fa-creative-commons-nd"></i><?php echo $service ?></h5>
                                        <h5 class="mb-0"><i class="fas fa-phone"></i><?php echo $numb ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="appointment-action">
                                <a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
                                    <i class="far fa-eye"></i> View
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                    <i class="fas fa-check"></i> Accept
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                    <i class="fas fa-times"></i> Reject
                                </a>
                            </div>
                        </div>
                        <!-- /Appointment List -->

                        <!-- /Appointment List1 -->
                        <div class="appointment-list">
                                <?php
                                    $sql1 = "SELECT * FROM tblappointment_in";
                                    $result1 = mysqli_query($con, $sql1);
                                    $row1 = mysqli_fetch_assoc($result);
                                    $receipt = $row1['receipt'];
          			                $name=$row1['name'];
                                    $email=$row1['email'];
                                    $numb=$row1['mobile'];
                                    $date=$row1['applydate'];
                                    $time=$row1['appytime'];
                                    $service=$row1['service'];
        			            ?>
                            <div class="profile-info-widget">
                                <a href="patient-profile.html" class="booking-doc-img">
                                    <img src="assets/img/user.png" alt="client default Image">
                                </a>
                                <div class="profile-det-info">                                     
                                    <h3><a href=""><?php echo $name ?> </a></h3>
                                    <div class="patient-details">
                                        
                                        <h5><i class="fas fa-envelope"></i><?php echo $email ?></h5>
                                        <h5><i class="fas fa-calendar"></i><?php echo $date ?></h5>
                                        <h5><i class="far fa-clock"></i><?php echo $time ?></h5>
                                        <h5><i class="fab fa-creative-commons-nd"></i><?php echo $service ?></h5>
                                        <h5 class="mb-0"><i class="fas fa-phone"></i><?php echo $numb ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="appointment-action">
                                <a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
                                    <i class="far fa-eye"></i> View
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                    <i class="fas fa-check"></i> Accept
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                    <i class="fas fa-times"></i> Reject
                                </a>
                            </div>
                        </div> 
                        <!-- /Appointment List1 -->
                        
                        <!-- /Appointment List2 -->
                        <div class="appointment-list">
                                <?php
                                    $sql2 = "SELECT * FROM tblappointment_in";
                                    $result2 = mysqli_query($con, $sql2);
                                    $row2 = mysqli_fetch_assoc($result);
                                    $receipt = $row2['receipt'];
          			                $name=$row2['name'];
                                    $email=$row2['email'];
                                    $numb=$row2['mobile'];
                                    $date=$row2['applydate'];
                                    $time=$row2['appytime'];
                                    $service=$row2['service'];
        			            ?>
                            <div class="profile-info-widget">
                                <a href="patient-profile.html" class="booking-doc-img">
                                    <img src="assets/img/user.png" alt="client default Image">
                                </a>
                                <div class="profile-det-info">                                     
                                    <h3><a href=""><?php echo $name ?> </a></h3>
                                    <div class="patient-details">
                                        
                                        <h5><i class="fas fa-envelope"></i><?php echo $email ?></h5>
                                        <h5><i class="fas fa-calendar"></i><?php echo $date ?></h5>
                                        <h5><i class="far fa-clock"></i><?php echo $time ?></h5>
                                        <h5><i class="fab fa-creative-commons-nd"></i><?php echo $service ?></h5>
                                        <h5 class="mb-0"><i class="fas fa-phone"></i><?php echo $numb ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="appointment-action">
                                <a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
                                    <i class="far fa-eye"></i> View
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                    <i class="fas fa-check"></i> Accept
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                    <i class="fas fa-times"></i> Reject
                                </a>
                            </div>
                        </div>                        
                        <!-- /Appointment List2 -->

                        <!-- /Appointment List3 -->
                        <div class="appointment-list">
                                <?php
                                    $sql3 = "SELECT * FROM tblappointment_in";
                                    $result3 = mysqli_query($con, $sql3);
                                    $row3 = mysqli_fetch_assoc($result);
                                    $receipt = $row3['receipt'];
          			                $name=$row3['name'];
                                    $email=$row3['email'];
                                    $numb=$row3['mobile'];
                                    $date=$row3['applydate'];
                                    $time=$row3['appytime'];
                                    $service=$row3['service'];
        			            ?>
                            <div class="profile-info-widget">
                                <a href="patient-profile.html" class="booking-doc-img">
                                    <img src="assets/img/user.png" alt="client default Image">
                                </a>
                                <div class="profile-det-info">                                     
                                    <h3><a href=""><?php echo $name ?> </a></h3>
                                    <div class="patient-details">
                                        
                                        <h5><i class="fas fa-envelope"></i><?php echo $email ?></h5>
                                        <h5><i class="fas fa-calendar"></i><?php echo $date ?></h5>
                                        <h5><i class="far fa-clock"></i><?php echo $time ?></h5>
                                        <h5><i class="fab fa-creative-commons-nd"></i><?php echo $service ?></h5>
                                        <h5 class="mb-0"><i class="fas fa-phone"></i><?php echo $numb ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="appointment-action">
                                <a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
                                    <i class="far fa-eye"></i> View
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                    <i class="fas fa-check"></i> Accept
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                    <i class="fas fa-times"></i> Reject
                                </a>
                            </div>
                        </div>                        
                        <!-- /Appointment List3 -->

                        <!-- /Appointment List4 -->
                        <div class="appointment-list">
                                <?php
                                    $sql4 = "SELECT * FROM tblappointment_in";
                                    $result4 = mysqli_query($con, $sql4);
                                    $row4 = mysqli_fetch_assoc($result);
                                    $receipt = $row4['receipt'];
          			                $name=$row4['name'];
                                    $email=$row4['email'];
                                    $numb=$row4['mobile'];
                                    $date=$row4['applydate'];
                                    $time=$row4['appytime'];
                                    $service=$row4['service'];
        			            ?>
                            <div class="profile-info-widget">
                                <a href="patient-profile.html" class="booking-doc-img">
                                    <img src="assets/img/user.png" alt="client default Image">
                                </a>
                                <div class="profile-det-info">                                     
                                    <h3><a href=""><?php echo $name ?> </a></h3>
                                    <div class="patient-details">
                                        
                                        <h5><i class="fas fa-envelope"></i><?php echo $email ?></h5>
                                        <h5><i class="fas fa-calendar"></i><?php echo $date ?></h5>
                                        <h5><i class="far fa-clock"></i><?php echo $time ?></h5>
                                        <h5><i class="fab fa-creative-commons-nd"></i><?php echo $service ?></h5>
                                        <h5 class="mb-0"><i class="fas fa-phone"></i><?php echo $numb ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="appointment-action">
                                <a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
                                    <i class="far fa-eye"></i> View
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                    <i class="fas fa-check"></i> Accept
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                    <i class="fas fa-times"></i> Reject
                                </a>
                            </div>
                        </div>                        
                        <!-- /Appointment List4 -->

                        <!-- /Appointment List5 -->
                        <div class="appointment-list">
                                <?php
                                    $sql5 = "SELECT * FROM tblappointment_in";
                                    $result5 = mysqli_query($con, $sql5);
                                    $row5 = mysqli_fetch_assoc($result);
                                    $receipt = $row5['receipt'];
          			                $name=$row5['name'];
                                    $email=$row5['email'];
                                    $numb=$row5['mobile'];
                                    $date=$row5['applydate'];
                                    $time=$row5['appytime'];
                                    $service=$row5['service'];
        			            ?>
                            <div class="profile-info-widget">
                                <a href="patient-profile.html" class="booking-doc-img">
                                    <img src="assets/img/user.png" alt="client default Image">
                                </a>
                                <div class="profile-det-info">                                     
                                    <h3><a href=""><?php echo $name ?> </a></h3>
                                    <div class="patient-details">
                                        
                                        <h5><i class="fas fa-envelope"></i><?php echo $email ?></h5>
                                        <h5><i class="fas fa-calendar"></i><?php echo $date ?></h5>
                                        <h5><i class="far fa-clock"></i><?php echo $time ?></h5>
                                        <h5><i class="fab fa-creative-commons-nd"></i><?php echo $service ?></h5>
                                        <h5 class="mb-0"><i class="fas fa-phone"></i><?php echo $numb ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="appointment-action">
                                <a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
                                    <i class="far fa-eye"></i> View
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                    <i class="fas fa-check"></i> Accept
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                    <i class="fas fa-times"></i> Reject
                                </a>
                            </div>
                        </div>                        
                        <!-- /Appointment List5 -->

                        <!-- /Appointment List6 -->
                        <div class="appointment-list">
                                <?php
                                    $sql6 = "SELECT * FROM tblappointment_in";
                                    $result6 = mysqli_query($con, $sql6);
                                    $row6 = mysqli_fetch_assoc($result);
                                    $receipt = $row6['receipt'];
          			                $name=$row6['name'];
                                    $email=$row6['email'];
                                    $numb=$row6['mobile'];
                                    $date=$row6['applydate'];
                                    $time=$row6['appytime'];
                                    $service=$row6['service'];
        			            ?>
                            <div class="profile-info-widget">
                                <a href="patient-profile.html" class="booking-doc-img">
                                    <img src="assets/img/user.png" alt="client default Image">
                                </a>
                                <div class="profile-det-info">                                     
                                    <h3><a href=""><?php echo $name ?> </a></h3>
                                    <div class="patient-details">
                                        
                                        <h5><i class="fas fa-envelope"></i><?php echo $email ?></h5>
                                        <h5><i class="fas fa-calendar"></i><?php echo $date ?></h5>
                                        <h5><i class="far fa-clock"></i><?php echo $time ?></h5>
                                        <h5><i class="fab fa-creative-commons-nd"></i><?php echo $service ?></h5>
                                        <h5 class="mb-0"><i class="fas fa-phone"></i><?php echo $numb ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="appointment-action">
                                <a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
                                    <i class="far fa-eye"></i> View
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                    <i class="fas fa-check"></i> Accept
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                    <i class="fas fa-times"></i> Reject
                                </a>
                            </div>
                        </div>                        
                        <!-- /Appointment List6 -->
                                            
                    </div>
                </div>
            </div>

        </div>

    </div>		
    <!-- /Page Content -->


   
</div>
<!-- /Main Wrapper -->

<!-- Appointment Details Modal -->
<div class="modal fade custom-modal" id="appt_details">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Appointment Details</h5>
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

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>

</html>