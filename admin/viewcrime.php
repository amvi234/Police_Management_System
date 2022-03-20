
<?php 
//require_once('session_login.php');
include('dbconnect.php');
include('header.php');
$profpic = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbBiZnrKm3LWkfnaj2iDnzdQJ7w0Sx729LeA&usqp=CAU";
 ?>
<div class="container-fluid">

<div class="col-md-2"></div>
<div class="col-md-8">
<div class="panel panel-inverse">
        
         
        <style type="text/css">
       body
       {
           background-image:url('<?php echo $profpic;?>');
           background-size:1100px;
       }
       </style>
       
   </div>
 
<br />
<div class="container-fluid">
  <?php include('menubar.php');?>
  <div class="col-md-1"></div>
  <div class="col-md-12">
    <div class="panel panel-success">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">
            List of Crimes
          </h3>
        </div>
 <body >
    
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            
            <!-- <ol class="breadcrumb"> -->
              <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Crime List</li> -->
            <!-- </ol> -->
          </section>
<?php
		    include('dbconnect.php');
            
            $query= mysqli_query($dbcon,"select * from crime");
            // $row = mysqli_fetch_array($query);
		  ?>	
          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-12">
              <div class="box box-primary">
               
				  <table  border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="5"><h2> Crime Details </h2></th>
    </tr>
            <t>
            <th> Crime Id </th>
            <th> Crime Type </th>
            
</t>
<?php
while($rows=mysqli_fetch_array($query)){

?>
<tr>
    <td><?php echo $rows['crime_id']; ?></td>
    <td><?php echo $rows['crime_type']; ?></td>
</tr>
<?php

}
?>
</table>
                  

  