<?php
session_start();
error_reporting(0);
include('admin/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{

  

  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/stylemain1.css" rel="stylesheet">
	

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
	
	<?php include_once('admin/header.php');?>
	<?php include_once('admin/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	    
	    <div align"center" >
	        <h4 class="text-white bg-dark">Commenting System</h4>
	        
	    </div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-list-alt"></em>
				</a></li>
				<li class="fa-solid fa-bookmark">Your comments will list here</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-10">
			<?php include_once('admin/footer.php');?>	
			</div>
		</div><!--/.row-->
		
		
		
		
		<div class="row">
			<div class="col-xs-6 col-md-3">
				

	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	</div>
		
</body>
</html>
<?php } ?>