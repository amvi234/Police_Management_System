<?php 

include('header.php');
include('dbconnect2.php');
$profpic = "data:image/jpeg;base64,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";
 ?>


<div class="container-fluid">
	

      <?php include('menubar.php')?> 
	<?php // include('menubar1.php');

	
	?>
<div class="container-fluid">

	<div class="col-md-2"></div>
	<div class="col-md-8">
	<div class="panel panel-inverse">
			
			 
			<style type="text/css">
		   body
		   {
			   background-image:url('<?php echo $profpic;?>');
			   background-size:1800px;
		   }
		   </style>
		   
	   </div>
		<!-- <ul class="list-group" id="myinfo" >

			<li class="list-group-item" id="mylist"></li>

		</ul> -->
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
						  <!-- <div class="form-row">
							<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Crime_id</label>
					    		<input type="text" name="crid" class="form-control" id="staffid" required="">
					  		</div>
					  	</div> -->
						  <div class="form-row">
							<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Victim_id</label>
					    		<input type="text" name="vid" class="form-control" id="staffid" required="">
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