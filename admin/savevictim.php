

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

$vid = $_POST['vid'];

$sql = "INSERT INTO Victim ( FName, LName, Gender, Age, Victim_id)
                                       VALUES('$fname','$lname','$gender','$age','$vid'); ";

                   $success = mysqli_query($dbcon,$sql);

                         if( $success )

                         {
                             
                            echo "<script type='text/javascript'>alert('Victim Added');
      document.location='index.php'</script>";
                      }
            



        

        ?>
