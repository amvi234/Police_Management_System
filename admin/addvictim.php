<?php 

include('header.php');
include('dbconnect2.php');

 ?>


<div class="container-fluid">
	

      <?php include('menubar.php')?> 
	<?php // include('menubar1.php');

	
	?>
<div class="container-fluid">

	<div class="col-md-2"></div>
	<div class="col-md-8">
		<ul class="list-group" id="myinfo" >

			<li class="list-group-item" id="mylist"></li>

		</ul>
			<div class="panel panel-success">
					  	<div class="panel-heading">
		
					  		<h3 class="panel-title">Add Victim </h3>
					  	</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" action="savevictim.php"  method="post" role="form">
						<div class="form-row">
                        <div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Firstname:</label>
					    		<input type="text" name="fname" class="form-control" id="staffid" required="" >
					  		</div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Lastname:</label>
					    		<input type="text" name="last" class="form-control" id="staffid" required="" >
					  		</div>
					  	</div>
				</div>

						<div class="form-row">
							<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Gender</label>
					    		<input type="text" name="gender" class="form-control" id="staffid" required="">
					  		</div>
					  	</div>
						  <div class="form-row">
							<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Age</label>
					    		<input type="text" name="age" class="form-control" id="staffid" required="">
					  		</div>
					  	</div>
						  <div class="form-row">
							<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Case_id</label>
					    		<input type="text" name="crid" class="form-control" id="staffid" required="">
					  		</div>
					  	</div>

					   		<div class="col-md-6">
					  		<div class="form-group">

					  			
					    		<!-- <label for="">Select Status:</label> -->
									    <!-- <select class="form-control" name="status" id ="sdcrime">
									    <option selected="selected" value="">Select</option>

											<option value="Admin"> Admin </option>
											<option value="CID"> CID </option>
											<option value="NCO"> NCO</option>
											
										

										 </select> -->
					  			</div>
					  		</div>
					  	</div>

					  
					  </div>
					  <div class="form-group">
					  <button  type="submit" name="save_case" class="btn btn-success form-control">Save and Continue
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>

<?php include('scripts.php'); ?>
<script type="text/javascript">

	$(document).on('submit', '#addsdtaff', function(event) {
		
		event.preventDefault();
		// This removes the error messages from the page
		 $(".list-group-item").remove();
		
		var formData = $(this).serialize();

			$.ajax({
					url: 'savevictim.php',
					type: 'post',
					data: formData,
					dataType: 'JSON',

					success: function(response){

						if(response.error){

							console.log(response.error);
					}

						else{

							Swal.fire({
							  position: 'top-end',
							  icon: 'success',
							  title: 'Victim Saved',
							  showConfirmButton: false,
							  timer: 3000
							});
							
							
							setTimeout( function(){
								window.location='addstaff.php';
							}, 900);
							

						}

					}
					
					
				});
		


	});

</script>

</body>
</html>