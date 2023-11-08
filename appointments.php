
<?php 
session_start();
include("includes/connection.php");
include("includes/header.php");
   
?>

<body>
	
    <!-- Main Wrapper -->
    <div class="main-wrapper">
    
			<!-- Header -->
            <div class="header">
				<!-- Logo -->
            <div class="header-left">
                    <a href="#" class="logo"><img src="assets/img/1.png" alt="Logo"></a>
					      <a href="admin.php" class="logo logo-small">
						      <img src="assets/img/2.png" alt="Logo" width="40" height="40">
					      </a>
               </div>
				<!-- /Logo -->			
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
								
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
            
            <!-- Header Right Menu -->
            <ul class="nav user-menu">

					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<?php
             			$ret1=mysqli_query($con,"select ID,Name from  tblappointment where Status=''");
              			$num=mysqli_num_rows($ret1);
            			?>
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill"><?php echo $num;?></span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">You have&nbsp&nbsp<?php echo $num;?></span>
							</div>
							<div class="noti-content">
							<?php if($num>0){
                               while($result=mysqli_fetch_array($ret1)){
                      		?>
                     		<a class="dropdown-item" href="view-appointment.php?viewid=<?php echo $result['ID'];?>">New appointment received from :&nbsp&nbsp <?php echo $result['Name'];?> </a><br/>
                     		<?php }} 
                      			else {?>
                      			<a class="dropdown-item" href="appointments.php">No New Appointment Received</a>
                  			<?php } 
                  			?>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="new-appointment.php">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->	            
               
                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/def.jpg" width="31" alt="Admin"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/profiles/def.jpg" alt="Admin" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6><?php$uname = $_SESSION['username']; echo"$uname"; ?></h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="login.php">Log out</a>
                    </div>
                </li>
                <!-- /User Menu -->
                
            </ul>
            <!-- /Header Right Menu -->
            
        </div>
        <!-- /Header -->
        
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li> 
                            <a href="admin.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="active"> 
                            <a href="appointments.php"><i class="fe fe-layout"></i> <span>Appointments</span></a>
                        </li>
                        <li> 
                            <a href="specialty.php"><i class="fab fa-creative-commons-nd"></i> <span>Specialities</span></a>
                        </li>
                        <li> 
                            <a href="manage.php"><i class="fe fe-users"></i> <span>Employees</span></a>
                        </li>
                        <li> 
                            <a href="register.php"><i class="fe fe-user-plus"></i> <span>Register</span></a>
                        </li>                        
                        <li> 
                            <a href="search.php"><i class="fe fe-activity"></i> <span>Search</span></a>
                        </li>
                        <li> 
                            <a href="transaction.php"><i class="fas fa-receipt"></i> <span>Transactions</span></a>
                        </li>
                        <li> 
							<a href="about.php"><i class="fe fe-edit"></i> <span>Edit</span></a>
						</li>
                        <li> 
                            <a href="settings.php"><i class="fe fe-vector"></i> <span>Settings</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fe fe-document"></i> <span>others</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="add_service.php">Add service</a></li>
                           	    <li><a href="manage_service.php">Manage service</a></li>
                            </ul>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
        
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
                <!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Appointments</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Recent appointments -->
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-hover table-center mb-0">
                                        <thead>
											<tr>
												<th>Appoinment No:</th>
												<th>Client Name</th>
												<th>Email</th>
												<th>Phone</th>
                                                <th>Appointment Date</th>
                                                <th>Appointment time</th>
                                                <th>Service</th>
                                                <th>Remark</th>
											</tr>
										</thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM tblappointment";
                                            $result = mysqli_query($con, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            do {
                                                echo '<tr>';
                                                echo '<td>'.$row['AptNumber'].'</td>';
                                                echo '<td>'.$row['Name'].'</td>';
                                                echo '<td>'.$row['Email'].'</td>';
                                                echo '<td>'.$row['PhoneNumber'].'</td>';
                                                echo '<td>'.$row['AptDate'].'</td>';
                                                echo '<td>'.$row['AptTime'].'</td>';
                                                echo '<td>'.$row['Services'].'</td>';
                                                echo '<td>'.$row['Remark'].'</td>';
                                                echo '</tr>';
                                                $row = mysqli_fetch_assoc($result);
                                            } while ($row);
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End: recent appointments -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Wrapper -->
    
    </div>
    <!-- /Main Wrapper -->
    
    <!-- jQuery -->
    <script src="assets2/js/jquery-3.2.1.min.js"></script>
    
    <!-- Bootstrap Core JS -->
    <script src="assets2/js/popper.min.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>
    
    <!-- Slimscroll JS -->
    <script src="assets2/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    
    <script src="assets2/plugins/raphael/raphael.min.js"></script>    
    <script src="assets2/plugins/morris/morris.min.js"></script>  
    <script src="assets2/js/chart.morris.js"></script>
    
    <!-- Custom JS -->
    <script  src="assets2/js/script.js"></script>
    
</body>

</html>