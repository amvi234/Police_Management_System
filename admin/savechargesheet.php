

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
 
 $chid=$_POST['chid'];
 $cid=$_POST['cid'];
//  $username=$_POST['cid']; 
$vid = $_POST['vid'];
$crid = $_POST['crid'];
$date = $_POST['date'];

$sql = "INSERT INTO chargesheet (ch_id, cr_id, v_id, crime_id,date)
                                       VALUES('$chid','$cid','$vid','$crid','$date'); ";

                   $success = mysqli_query($dbcon,$sql);

                         if( $success )

                         {
                             
                            echo "<script type='text/javascript'>alert('Chargesheet Added');
      document.location='index.php'</script>";
                      }
            



        

        ?>


