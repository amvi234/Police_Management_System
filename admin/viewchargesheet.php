
<?php 
//require_once('session_login.php');
include('dbconnect.php');
include('header.php');
$profpic = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2CNIBoPBHW7Ay0cEsn2ZP284gems_fscMRg&usqp=CAU";
 ?>
<div class="container-fluid">

<div class="col-md-2"></div>
<div class="col-md-8">
<div class="panel panel-inverse">
        
         
        <style type="text/css">
       body
       {
           background-image:url('<?php echo $profpic;?>');
           background-size:1500px;
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
            Chargesheet
          </h3>
        </div>
 <body >
    
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            
            <!-- <ol class="breadcrumb"> -->
              <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Chargesheet</li> -->
            <!-- </ol> -->
          </section>
<?php
		    include('dbconnect.php');
            
            $query= mysqli_query($dbcon,"select * from chargesheet");
            // $row = mysqli_fetch_array($query);
		  ?>	
          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-12">
              <div class="box box-primary">
               
				  <table  border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="5"><h2> Chargesheets Details</h2></th>
    </tr>
            <t>
            <th> Chargesheet id </th>
            <th> Criminal id </th>
            <th>Victim id</th>
            <th>Crime id</th>
            <th>Date</th>
</t>
<?php
while($rows=mysqli_fetch_array($query)){

?>
<tr>
    <td><?php echo $rows['ch_id']; ?></td>
    <td><?php echo $rows['cr_id']; ?></td>
    <td><?php echo $rows['v_id']; ?></td>
    <td><?php echo $rows['crime_id']; ?></td>
    <td><?php echo $rows['date']; ?></td>
</tr>
<?php

}
?>
</table>
                  

  