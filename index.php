<?php
	session_start();
	require_once("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>NOTES</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/functionality.js"></script>
	<script src="js/form.js"></script>
	<script src="js/upload.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
	</script>
	<!-- <script src="jquery-ui-bootstrap-jquery-ui-bootstrap-v0.5pre-0-gb0cd956/jquery-ui-bootstrap-jquery-ui-bootstrap-71f2e47/js/jquery-1.8.3.min.js"></script> -->
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="bg">
		<div class="nav-top">
			<div class="header">NOTES</div>
			<div class="dropdown">
				<button class="dropbtn" onclick="account()"><img src="images/account-icon.jpeg"/> Account </button></li>
				<div class="dropdown-content" id="myDropdown">
					<a href="">
						<?php 
							echo $_SESSION['login_user']; 
						?>
					</a>
					<a href="logout.php">Logout</a>
  				</div>
			</div>
		</div>
		<div class="nav-side">
			<ul>
				<li> <button onclick="OpenNote();"><img src="images/note-icon.png" id="note"> Note </button></li>
				<li> <button onclick="UploadImage();"><img src="images/image-icon.png" id="image"> Image </button></li>
				<li> <button onclick="deleteNote();"><img src="images/delete--icon.jpg" id="delete"> Delete </button></li>
			</ul>
		</div>
	</div>
</body>
</html>