<?php 
	session_start();
	require_once("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
		<link rel="stylesheet" type="text/css" href="css/registration.css">
		<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
		<script src="jquery-ui-bootstrap-jquery-ui-bootstrap-v0.5pre-0-gb0cd956/jquery-ui-bootstrap-jquery-ui-bootstrap-71f2e47/js/jquery-1.8.3.min.js">
		</script>
	</head>
	
	<body>
		<div class="container">
			<div class="card bg-light">
				<article class="card-body mx-auto" style="max-width: 400px;">
					<h4 class="card-title mt-3 text-center">Create Account</h4>
					<p class="text-center">Get started with your free account</p>
					<form action="process_register.php" method="post">
    					<!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 					</div>
        					<input name="nm" class="form-control" placeholder="Full name" type="text">
    					</div> 
    					<div class="form-group input-group">
    						<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
							</div>
        					<input name="email" class="form-control" placeholder="Email address" type="email">
    					</div> <!-- form-group// -->
    					<div class="form-group input-group">
    						<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
							</div>
							<select class="custom-select" style="max-width: 120px;">
		    					<option selected="">+91</option>
		    					<option value="1">+1</option>
		    					<option value="2">+61</option>
		    					<option value="3">+94</option>
		    					<option value="3">+46</option>
							</select>
    						<input name="contact" class="form-control" placeholder="Phone number" type="text">
    					</div> 
    					<!-- form-group -->
    					<div class="form-group input-group">
    						<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
        					<input name="pwd" class="form-control" placeholder="Create password" type="password">
    					</div>
    					<!-- <div class="form-group input-group">
    						<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
        					<input name="confpwd" class="form-control" placeholder="Repeat password" type="password">
    					</div>  -->
    					<div class="form-group">
        					<button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    					</div> 
    					<p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
    					<!-- form-group end.// -->
					</form>
				</article>	
			</div> <!-- card.// -->
		</div> 
		<!--container end.//-->
	</body>
</html>
