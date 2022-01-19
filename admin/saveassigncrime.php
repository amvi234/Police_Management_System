

<?php
require_once('../database/Database.php');
$db = new Database(); 

if(session_status() == PHP_SESSION_NONE)
{
  include('session.php');
   include('dbconnect.php');
}



//array created to handle the error msgs
$errors = array();

// array to hold the json econded data
$output = array('error' => false);


  //Variables to hold the form data
//  $password=$_POST['pwd']; 
//  $status=$_POST['status']; 
 
 $crid=$_POST['crid'];
 $date=$_POST['date'];
//  $username=$_POST['cid']; 
$type = $_POST['type'];
$location = $_POST['location'];
// $crid = $_POST['crid'];

$sql = "INSERT INTO Crime (Crid, Date, Crime_type, Location)
                                       VALUES('$crid','$date','$type','$location'); ";

                   $success = mysqli_query($dbcon,$sql);

                         if( $success )

                         {
                             
                            echo "<script type='text/javascript'>alert('Case Added');
      document.location='index.php'</script>";
                      }
            



        

        ?>
