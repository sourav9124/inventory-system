<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>	
	

	<?php
	// navbar
     include_once("./templates/header.php");
    ?></br></br>

    <div class="container">
    	<div class="row">
    		<div class="col-md-4">
    			<div class="card mx-auto" style="width: 20rem;">
    				<img class="card-img-top mx-auto" style="width: 60%" 
    				src="./images/user2.jpg" alt="card-img-cap">
    				    
    				<div class="card-body">
    					<p class="card-title">profile info</p>
    					<p class="card-text"><i class="fa fa-user">&nbsp;</i>sourav singh</p>
    					<p class="card-text"><i class="fa fa-user">&nbsp;</i>admin</p>
    					<p class="card-text">last login: xxxx-xx</p>
    					<a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>edit profile</a>


    					
    				</div>
    				
    			</div>
    		</div>
    		<div class="col-md-8">
    			<div class="jumbotron" style="width:100%; height: 100%;">
    				<h1>Welcome admin</h1>
    				<div class="row">
    					<div class="col-sm-6">
    						<iframe src="http://free.timeanddate.com/clock/i6j44wg1/n1648/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>

    					
    					</div>
    					<div class="col-sm-6">
    						<div class="card">
                              <div class="card-body">
                                <h5 class="card-title">New Orders</h5>
                                <p class="card-text">Here you can make invoices and new orders.</p>
                                <a href="#" class="btn btn-primary">New Orders</a>
                              </div>
                           </div>
    						
    					</div>
    				</div>
    				
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>