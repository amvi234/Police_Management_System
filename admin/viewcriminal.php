
<?php 
//require_once('session_login.php');
include('dbconnect.php');
include('header.php');
$profpic = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwAa1lJVxLvdFRywXrPz9YG1ipR-apJCLGLQ&usqp=CAU";
 ?>
<div class="container-fluid">

<div class="col-md-2"></div>
<div class="col-md-8">
<div class="panel panel-inverse">
        
         
        <style type="text/css">
       body
       {
           background-image:url('<?php echo $profpic;?>');
           background-size:1800px;
       }
       </style>
       
   </div>
 
<br />
<div class="container-fluid">
  <?php include('menubar.php');?>
  <div class="col-md-1"></div>
  <div class="col-md-06">
    <div class="panel panel-success">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">
            List of Criminals
          </h3>
        </div>
 <body >
    
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            
            <!-- <ol class="breadcrumb"> -->
              <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Criminal Details</li> -->
            <!-- </ol> -->
          </section>
<?php
		    include('dbconnect.php');
            
            $query= mysqli_query($dbcon,"select * from criminal");
            // $row = mysqli_fetch_array($query);
		  ?>	
          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-12">
              <div class="box box-primary">
               
				  <table  border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="5"><h2> Criminal Record </h2></th>
    </tr>
            <t>
            <th> FirstName </th>
            <th> LastName </th>
            <th>Gender</th>
            <th>Age</th>
            <th>Criminal id</th>
</t>
<?php
while($rows=mysqli_fetch_array($query)){

?>
<tr>
    <td><?php echo $rows['FName']; ?></td>
    <td><?php echo $rows['LName']; ?></td>
    <td><?php echo $rows['Gender']; ?></td>
    <td><?php echo $rows['Age']; ?></td>
    <td><?php echo $rows['Crid']; ?></td>
</tr>
<?php

}
?>
</table>
                  

  