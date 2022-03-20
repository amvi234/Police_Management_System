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
			   background-size:1500px;
		   }
		   </style>
		   
	   </div>
		<!-- <ul class="list-group" id="myinfo" >

			<li class="list-group-item" id="mylist"></li>

		</ul> -->
			<div class="panel panel-success">
					  	<div class="panel-heading">
		
					  		<h3 class="panel-title">Fill the Chargesheet</h3>
					  	</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" action="savechargesheet.php"  method="post" role="form">
						<div class="form-row">
                        <div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Chargesheet id:</label>
					    		<input type="text" name="chid" class="form-control" id="staffid" required="" >
					  		</div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Criminal_id:</label>
					    		<input type="text" name="cid" class="form-control" id="staffid" required="" >
					  		</div>
					  	</div>
				</div>

						<div class="form-row">
							<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Victim_id</label>
					    		<input type="text" name="vid" class="form-control" id="staffid" required="">
					  		</div>
					  	</div>
						  <div class="form-row">
							<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Crime_id</label>
					    		<input type="text" name="crid" class="form-control" id="staffid" required="">
					  		</div>
					  	</div>
						  
                          <div class="form-row">
							<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Date</label>
					    		<input type="text" name="date" class="form-control" id="staffid" required="">
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
					url: 'savechargesheet.php',
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
							  title: 'Case Saved',
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