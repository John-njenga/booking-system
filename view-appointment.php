<?php 
session_start();
   include("includes/connection.php");
   include("includes/header.php");

   if (strlen($_SESSION['bpmsaid']==0)) {
    header('location:logout.php');
    } else{
  
  if(isset($_POST['submit']))
    {
      
      $cid=$_GET['viewid'];
        $remark=$_POST['remark'];
        $status=$_POST['status'];
       
      
       
     $query=mysqli_query($con, "update  tblappointment set Remark='$remark',Status='$status' where ID='$cid'");
      if ($query) {
        echo "<script>alert('Appointment has been reviewed!.');</script>"; 
        echo "<script>window.location.href = 'appointments.php'</script>"; 
    }
    else
      {
        $msg="Something Went Wrong. Please try again";
      }
  
    
  }
}
?>

    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
				<!-- Logo -->
                <div class="header-left">
                    <a href="#" class="logo">
						<img src="assets/img/1.png" alt="Logo">
					</a>
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
        			<?php
          			$adid=$_SESSION['bpmsaid'];
          			$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
          			$row=mysqli_fetch_array($ret);
          			$name=$row['AdminName'];
        			?> 
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
									<h6><?php echo $name;?></h6>
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
							<li class="active"> 
								<a href="admin.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li> 
								<a href="appointments.php"><i class="fe fe-layout"></i> <span>Appointments</span></a>
							</li>
							<li> 
								<a href="specialty.php"><i class="fe fe-user-plus"></i> <span>Specialities</span></a>
							</li>
							<li> 
								<a href="manage.php"><i class="fe fe-users"></i> <span>Employees</span></a>
							</li>
                    	    <li> 
								<a href="register.php"><i class="fe fe-user"></i> <span>Register</span></a>
							</li>
							<li> 
								<a href="search.php"><i class="fe fe-activity"></i> <span>Search</span></a>
							</li>
							<li> 
								<a href="transaction.php"><i class="fas fa-receipt"></i> <span>Transactions</span></a>
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
                        <!-- Basic Information -->
                        <div class="card">
                        	<div class="card-body">
                            <h4 class="card-title"> View Appointment</h4>
                            <?php
                                $cid=$_GET['viewid'];
                                $ret=mysqli_query($con,"select * from tblappointment where ID='$cid'");
                                $cnt=1;
                                while ($row=mysqli_fetch_array($ret)) {
                            ?>				
                            	<div class="form-row">
                                    <table class="table">
							            <tr>
                                            <th>Appointment Number</th><td><?php  echo $row['AptNumber'];?></td>
                                        </tr>
                                         <tr>
                                            <th>Name</th><td><?php  echo $row['Name'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th><td><?php  echo $row['Email'];?></td>
                                        </tr>   
                                        <tr>    
                                            <th>Mobile Number</th><td><?php  echo $row['PhoneNumber'];?></td>  
                                        </tr>   
                                        <tr>
                                            <th>Appointment Date</th><td><?php  echo $row['AptDate'];?></td>  
                                        </tr>
                                        <tr>    
                                            <th>Appointment Time</th><td><?php  echo $row['AptTime'];?></td> 
                                        </tr>  
                                        <tr>    
                                            <th>Services</th><td><?php  echo $row['Services'];?></td>  
                                        </tr>  
                                        <tr>    
                                            <th>Apply Date</th><td><?php  echo $row['ApplyDate'];?></td>  
                                        </tr>
                                        <tr>    
                                            <th>Status</th>
                                                <td> 
                                                    <?php
                                                    if($row['Status']=="1")
                                                    {
                                                        echo "Accepted";
                                                    }
                                                    if($row['Status']=="2")
                                                    {
                                                        echo "Rejected";
                                                    };?>
                                                </td>
                                        </tr>
                                    </table>
						            <table class="table">			
                                        <?php if($row['Remark']==""){ ?>
                                            <form name="submit" method="post" enctype="multipart/form-data">
                                                <tr>
                                                    <th>Remark :</th>
                                                    <td>
                                                        <textarea name="remark" placeholder="" rows="5" cols="10" class="form-control wd-450" required="true"></textarea>
                                                    </td>   
                                                </tr>  
                                                <tr>
                                                    <th>Status :</th>
                                                    <td>
                                                        <select name="status" class="form-control wd-450" required="true">
                                                            <option value="1" selected="true">Accepted</option>           
                                                            <option value="2">Rejected</option>
                                                        </select>
                                                    </td>
                                                </tr>  
                                                <tr align="center">    
                                                    <td colspan="2">
                                                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                                    </td>  
                                                </tr>  
                                            </form>
                                            <?php } else { ?>
                                    </table>
						<table class="table">
							<tr>
                                <th>Remark</th>    
                                <td><?php echo $row['Remark']; ?></td>  
                            </tr>
                            <tr>
                                <th>Remark date</th>
                                <td><?php echo $row['RemarkDate']; ?></td>
                            </tr>

						</table>
						<?php } ?>
						<?php } ?>																
						</div>                           
                    </div>
					<!-- Basic Information -->
				</div>

			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->

        <script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
		
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