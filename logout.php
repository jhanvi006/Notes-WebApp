<?php
	session_start();

	if(!isset($_SESSION["Name"]))
	{
		header("location:login.php");
		exit;
	}

	unset($_SESSION["Name"]);

	header("location:../index.php");

?>