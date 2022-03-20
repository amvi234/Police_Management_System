<?php 

include('header.php');
include('dbconnect.php');
$fname=$_POST['fname'];
$lname=$_POST['last'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$crid = $_POST['crid'];
	
	
mysqli_query($dbcon,"update Criminal set FName='$fname', LName='$lname', Gender='$gender', Age='$age', Crid='$crid' where staffid='$staffid'")or die(mysqli_error());

// if(!empty($status)){
// mysqli_query($dbcon,"update userlogin set surname='$fname',status='$status', othernames='$oname' where staffid='$staffid'")or die(mysqli_error());
// }

	
	 echo "<script type='text/javascript'>alert('Staff Edtted');
	  document.location='addvictim.php'</script>";
	  

 ?>

