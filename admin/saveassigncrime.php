

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
 
//  $username=$_POST['cid']; 
$type = $_POST['type'];

// $crid = $_POST['crid'];

$sql = "INSERT INTO Crime (crime_id, crime_type )
                                       VALUES('$crid','$type'); ";

                   $success = mysqli_query($dbcon,$sql);

                         if( $success )

                         {
                             
                            echo "<script type='text/javascript'>alert('Case Added');
      document.location='index.php'</script>";
                      }
            



        

        ?>
