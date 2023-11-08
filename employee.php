<?php 
session_start();
include("includes/connection.php");
include("includes/header.php");

if (strlen($_SESSION['bpmsaid']==0)) {
	header('location:logout.php');
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
                           <h3><?php echo $name;?></h6></h3>
                        </div>
                     </div>
                  </div>
                  <div class="dashboard-widget">
                     <nav class="dashboard-menu">
                        <ul>
                           <li class="active">
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
                           <li class="">
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

               <div class="row">
                  <div class="col-md-12">
                     <div class="card dash-card">
                        <div class="card-body">
                           <div class="row">
                              <div class="col-md-12 col-lg-4">
                                 <?php
						                  $sql = "SELECT * FROM tblcustomers";
						                  $query = mysqli_query($con, $sql);
						                  $num = mysqli_num_rows($query);
					                  ?>
                                 <div class="dash-widget dct-border-rht">
                                    <div class="circle-bar circle-bar1">
                                       <div class="circle-graph1">
                                          <img src="assets/img/client.png" class="img-fluid" alt="client">
                                       </div>
                                    </div>
                                    <div class="dash-widget-info">
                                       <h6>Total Clients</h6>
                                       <h2><a href=""><?php echo $num?></a></h2>
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="col-md-12 col-lg-4">
                                 <?php
						                  $sql = "SELECT * FROM tblappointment_in";
						                  $query = mysqli_query($con, $sql);
						                  $num = mysqli_num_rows($query);
					                  ?>
                                 <div class="dash-widget dct-border-rht">
                                    <div class="circle-bar circle-bar2">
                                       <div class="circle-graph2">
                                          <img src="assets/img/handshake.png" class="img-fluid" alt="oops">
                                       </div>
                                    </div>
                                    <div class="dash-widget-info">
                                       <h6>Today's Clients</h6>
                                       <h2><a href=""><?php echo $num ?></a></h2>
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="col-md-12 col-lg-4">
                                 <?php
						                  $sql = "SELECT * FROM tbltransactions";
						                  $query = mysqli_query($con, $sql);
						                  $num = mysqli_num_rows($query);
					                  ?>
                                 <div class="dash-widget">
                                    <div class="circle-bar circle-bar3">
                                       <div class="circle-graph3">
                                          <img src="assets/img/check.png" class="img-fluid" alt="oops">
                                       </div>
                                    </div>
                                    <div class="dash-widget-info">
                                       <h6>Appoinments Done</h6>
                                       <h2><a href=""><?php echo $num ?></a></h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-md-12">
                     <h4 class="mb-4">Client Appoinment</h4>
                     <div class="appointment-tab">
                     
                        <!-- Appointment Tab -->
                        <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                           <li class="nav-item">
                              <a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">Collective</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#today-appointments" data-toggle="tab">Today</a>
                           </li> 
                        </ul>
                        <!-- /Appointment Tab -->
                        
                        <div class="tab-content">
                        
                           <!-- Collective Clients serviced Tab -->
                           <div class="tab-pane show active" id="upcoming-appointments">
                              <div class="card card-table mb-0">
                                 <div class="card-body">
                                    <div class="table-responsive">
                                       <table class="table table-hover table-center mb-0">
                                          <thead>
                                             <tr>
                                                <th>Receipt Number</th>
                                                <th>Client Name</th>
                                                <th>Email</th>
                                                <th>Mobile Number</th>
                                                <th>Amount Paid</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                            $sql = "SELECT * FROM tbltransactions";
                                            $result = mysqli_query($con, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            do {
                                                echo '<tr>';
                                                echo '<td>'.$row['receipt'].'</td>';
                                                echo '<td>'.$row['client_name'].'</td>';
                                                echo '<td>'.$row['email'].'</td>';
                                                echo '<td>'.$row['phone'].'</td>';
                                                echo '<td>'.$row['amount'].'</td>';
                                                echo '</tr>';
                                                $row = mysqli_fetch_assoc($result);
                                            } while ($row);
                                            ?>
                                        </tbody>
                                       </table>		
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- /Collective Clients serviced Tab -->
                        
                           <!-- Today Appointment Tab -->
                           <div class="tab-pane" id="today-appointments">
                              <div class="card card-table mb-0">
                                 <div class="card-body">
                                    <div class="table-responsive">
                                       <table class="table table-hover table-center mb-0">
                                          <thead>
                                             <tr>
                                                <th>Appointment no</th>
                                                <th>Client</th>
                                                <th>Mobile Number</th>
                                                <th>Appointment Date</th>
                                                <th>Appointment Time</th>
                                                <th>service selected</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                            $sql = "SELECT * FROM tblappointment_in";
                                            $result = mysqli_query($con, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            do {
                                                echo '<tr>';
                                                echo '<td>'.$row['receipt'].'</td>';
                                                echo '<td>'.$row['name'].'</td>';
                                                echo '<td>'.$row['mobile'].'</td>';
                                                echo '<td>'.$row['applydate'].'</td>';
                                                echo '<td>'.$row['appytime'].'</td>';
                                                echo '<td>'.$row['service'].'</td>';
                                                echo '</tr>';
                                                $row = mysqli_fetch_assoc($result);
                                            } while ($row);
                                            ?>
                                        </tbody>
                                       </table>		
                                    </div>	
                                 </div>	
                              </div>	
                           </div>
                           <!-- /Today Appointment Tab -->
                           
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>

      </div>

   </div>		
   <!-- /Page Content -->

   <!-- Footer -->

   <!-- /Footer -->
   
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

<!-- Circle Progress JS -->
<script src="assets/js/circle-progress.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>

<!-- doccure/doctor-dashboard.html  30 Nov 2019 04:12:09 GMT -->
</html>