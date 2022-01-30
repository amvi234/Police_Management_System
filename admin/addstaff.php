<?php 

include('header.php');
include('dbconnect2.php');
$profpic = "https://tse3.mm.bing.net/th?id=OIP.IVSgsU-jiy3EyE0c__L9IgHaCx&pid=Api&P=0&w=414&h=155";
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
		   }
		   </style>
		   
	   </div>
		<!-- <ul class="list-group" id="myinfo" >

			<li class="list-group-item" id="mylist"></li>

		</ul> -->
			<div class="panel panel-success">
					  	<div class="panel-heading">
		
					  		<h3 class="panel-title">Enter Criminal Details</h3>
					  	</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" action="saveuserlogin.php"  method="post" role="form">
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
					    		<label for="">Criminal_id</label>
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
					url: 'saveuserlogin.php',
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
							  title: 'Criminal Saved',
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