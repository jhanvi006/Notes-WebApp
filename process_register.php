<?php

	if(empty($_POST)) { header("location: index.php"); exit; }

	$errors = array();

	//General Validation

	if(empty($_POST["nm"]))
		$errors[] = "Name was empty!";

	if(empty($_POST["email"]))
		$errors[] = "Email was empty!";

	if(empty($_POST["contact"]))
		$errors[] = "Contact was empty!";
	if( ! ctype_digit($_POST["contact"]) || strlen($_POST["contact"]) != 10)
		$errors[] = "Contact must be valid 10 digits!";

	if(empty($_POST["pwd"]))
		$errors[] = "Password was empty!";

	// if(empty($_POST["cnfpwd"]))
	// 	$errors[] = "Retype Password was empty!";
	// if (strcmp($_POST["pwd"], $_POST["cnfpwd"])) {
	// 	$errors[] = "Password does not match";
	// }

	//Show Errors, If Any

	if( ! empty($errors) ) {
		echo "<b>Error(s):</b><hr />";
		foreach($errors as $e) {
			echo $e."<br />";
		}
		exit;
	}


	//Data Entry
	require_once("connection.php");
	$q = "insert into UserDetails(Name, Email, Contact, Password, Date) values('".$_POST["nm"]."','".$_POST["email"]."','".$_POST["contact"]."','".$_POST["pwd"]."','".date('Y-m-d')."')";
	$db->dml($q);

	header("location: login.php"); 
?>