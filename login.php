<?php 
	session_start();
	require_once("connection.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
		<script src="jquery-ui-bootstrap-jquery-ui-bootstrap-v0.5pre-0-gb0cd956/jquery-ui-bootstrap-jquery-ui-bootstrap-71f2e47/js/jquery-1.8.3.min.js">
		</script>
		<!------ Include the above in your HEAD tag ---------->
	</head>
	

	<body>
		<div class="container">
			
    		<div class="row">
    			<div class="col-md-4 col-md-offset-4">
    				<div class="panel panel-default">
			  			<div class="panel-heading">
			    			<h3 class="panel-title">Login </h3>
			 			</div>
			  			<div class="panel-body">
			  				<?php
								if(isset($_GET['error']))
								{
									echo $_GET['error'];
								}?>
			    			<form accept-charset="UTF-8" action="process_login.php" method="post">
                    			<fieldset>
			    	  				<div class="form-group">
			    		    			<input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
			    					</div>
			    					<div class="form-group">
			    						<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    					</div>
			    					<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    				</fieldset>
			      			</form>
			      			<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
			    		</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>