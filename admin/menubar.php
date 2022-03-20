
	<div class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading" style="padding-bottom: 40px;">
				<center><h3>CRIMINAL MANAGEMENT SYSTEM</h3></center>



					
						<?php 
						
						include('session.php');
						include('dbconnect.php');
						
						$query= mysqli_query($dbcon,"select * from userlogin where staffid = '$session_id'")or die(mysqli_error());
						$row = mysqli_fetch_array($query);
						
						?>
                            <span class="pull-right">
                               <?php echo $row['surname']." ". $row['othernames']." (" .$row['staffid'].")";  ?> 
                                 
                                  <a href="profile.php"><i class="icon-signout icon-large"></i>&nbsp;Edit</a>
                                   <a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
                                  </span>
                             
                    </div>




			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="index.php">
									<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
							</div>
							
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="addstaff.php">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  
								Add Criminals </a>
								
								</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="addvictim.php">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  
								Add Victim </a>
								
								</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="assigncrime.php">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  
								Add Crime </a>
								
								</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="chargesheet.php">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  
								Add Chargesheet </a>
								
								</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="viewcriminal.php">
									<span class="glyphicon glyphicon" aria-hidden="true"></span>
  
								View Criminals</a>
								
								</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="viewvictim.php">
									<span class="glyphicon glyphicon" aria-hidden="true"></span>
  
								View Victims</a>
								
								</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="viewcrime.php">
									<span class="glyphicon glyphicon" aria-hidden="true"></span>
  
								View Crimes</a>
								
								</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="viewchargesheet.php">
									<span class="glyphicon glyphicon" aria-hidden="true"></span>
  
								View Chargesheet</a>
								
								</h3>
							</div>
							
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	</div>