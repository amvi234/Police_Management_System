

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
 
 $fname=$_POST['fname'];
 $lname=$_POST['last'];
//  $username=$_POST['cid']; 
$gender = $_POST['gender'];
$age = $_POST['age'];
$crid = $_POST['crid'];

$sql = "INSERT INTO criminal (FName, LName, Gender, Age, Crid)
                                       VALUES('$fname','$lname','$gender','$age','$crid'); ";

                   $success = mysqli_query($dbcon,$sql);

                         if( $success )

                         {
                             
                            echo "<script type='text/javascript'>alert('Criminal Added');
      document.location='index.php'</script>";
                      }
            



        

        ?>
