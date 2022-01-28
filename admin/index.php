<?php 
$profpic = "https://tse3.mm.bing.net/th?id=OIP.IVSgsU-jiy3EyE0c__L9IgHaCx&pid=Api&P=0&w=414&h=155";
include('header.php');
// echo '<pre>';
// print_r($origins);
// echo '</pre>';
 ?>




<div  class="container-fluid" style="margin-top;80px">
	<?php include('menubar.php')?>
	<div class="col-md-1"></div>
</div>

<div class="container-fluid">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="panel panel-inverse">
			<div>
				<h4>WELCOME TO THE DASHBOARD OF CRIMINAL MANAGEMENT SYSTEM</h4>
</div>
			 <div>
<h2>CRIME...REPORT IT. DON'T SUPPORT IT.</h2>
</div>
			 <style type="text/css">
			body
			{
				background-image:url('<?php echo $profpic;?>');
			}
			</style>
			
		</div>
	</div>
	<div class="col-md-2"></div>
</div>

<?php include('scripts.php'); ?>

</body>
</html>