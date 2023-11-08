<?php 
session_start();
include("includes/connection.php");
include("includes/header.php");
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
                           <li class="active">
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
                    <div class="card card-table">
                        <div class="card-body">
                        
                            <!-- Invoice Table -->
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID No</th>
                                            <th>User ID</th>
                                            <th>Service ID</th>
                                            <th>Billing ID</th>
                                            <th>Posting Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql = "SELECT * FROM tblinvoice";
                                        $result = mysqli_query($con, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        do {
                                            echo '<tr>';
                                            echo '<td>'.$row['id'].'</td>';
                                            echo '<td>'.$row['Userid'].'</td>';
                                            echo '<td>'.$row['ServiceId'].'</td>';
                                            echo '<td>'.$row['BillingId'].'</td>';
                                            echo '<td>'.$row['PostingDate'].'</td>';
                                            echo '</tr>';
                                            $row = mysqli_fetch_assoc($result);
                                        } while ($row);
                                        ?>                                                                                
                                    </tbody>
                                </table>
                            </div>
                            <!-- /Invoice Table -->
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>		
    <!-- /Page Content -->
   
</div>
<!-- /Main Wrapper -->

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