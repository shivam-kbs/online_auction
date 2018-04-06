<!DOCTYPE html>
<html>
<head> 
	<title>Auction</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" >
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" >

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/
font-awesome.min.css">
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Add icon library -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js" type="text/javascript"></script>
	<script src="https://cdn.rawgit.com/mckamey/countdownjs/master/countdown.min.js" type="text/javascript"></script>
	 <script src="<?php echo base_url(); ?>assets/js/time.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.0.0.min.js" type="text/javascript"></script> -->

</head> 
<body> 
<div class="container-fluid" style="background:  white; font-color:red;">
	<div class="row">
		<!-- logo -->
		<div class="col-md-4">
			<img src="<?php echo base_url(); ?>assets/images/logo1.png" style="width: 300px; height: 100px;" class="img-responsive">
		</div>
		<!-- navbar -->
		<div class="col-md-8" my-menu style="margin-top: 10px;">
			<nav class="navbar navbar-default" style="background: none; border: none;  ">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#shivi">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="shivi">
					<ul class="nav navbar-nav pull-right">
						<li><a href="#">HOME</a></li>
						<li><a href="<?php echo base_url('auction');?>">TODAY'S DEALS</a></li>
						<!-- dropdown -->
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CATEGORY
						   <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">REAL ESTATE</a></li>
								<li><a href="#">ELECTRONICE</a></li>
								<li><a href="#">CLOTHES</a></li>
								<li><a href="#">BOOKS&STATIONERY</a></li>
								<li><a href="#">COMPUTER OFFERS</a></li>
								<li><a href="#">FASHION</a></li>
							</ul>
						</li>
						<!-- <li><a href="<?php echo base_url('Contact_Us/index');?>">CONTACT</a></li> -->
						<li><a href="<?php echo base_url('auth/form/index');?>">SIGNUP</a></li>
						<li><a href="<?php echo base_url('auth/form/login');?>">LOGIN</a></li>
						<li><class="form-inline my-1 my-lg-0">
						<input class="text" class="search" id="search" placeholder="Search">
						<button class="btn btn-secondary" type="submit">Search</button></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- navbar closed -->
	</div>
</div>
