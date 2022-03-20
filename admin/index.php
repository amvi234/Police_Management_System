<?php 
$profpic = "https://media.istockphoto.com/vectors/splattered-blood-and-handprints-forensic-evidence-vector-id165045263?k=20&m=165045263&s=612x612&w=0&h=ZU4BvV9mEHZlc-nqLmfD9kL-sy5YD6vLTIzF6YvoKOA=";
include('header.php');
include('footer.php');
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
				<h3>WELCOME TO THE DASHBOARD OF CRIMINAL MANAGEMENT SYSTEM</h4>
</div>
			 <div>
<h1>CRIME...REPORT IT. DON'T SUPPORT IT.</h2>
</div>
			 <style type="text/css">
			body
			{
				background-image:url('<?php echo $profpic;?>');
				background-size:1300px;
			}
			</style>
			
		</div>
	</div>
	<div class="col-md-2"></div>
</div>

<?php 
include('scripts.php'); 
 
?>
</body>
</html>