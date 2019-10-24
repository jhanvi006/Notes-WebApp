<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

   		 // Connect to the database
    	//$db = new Mysqlidb('localhost', 'root', 'root', 'notes_db');

   	//echo $_POST['email'];

   		

      	$email = $_POST['email'];
      	$pwd = $_POST['password']; 
      	//var_dump($db);

      
      	$sql = "SELECT * FROM UserDetails WHERE Email = '$email' and Password = '$pwd'";
      	//echo "Query:".$sql."</br>";
      	//$result = mysqli_query($db,$sql);
      	$result = $db->get($sql);
      	

      	//var_dump($result);
      	$row = mysqli_fetch_assoc($result);
      	//var_dump($row);
      	//$active = $row['active'];
      
      	$count = mysqli_num_rows($result);
      	//echo "Count:".$count;
      	// If result matched $email and $pwd, table row must be 1 row
		
      	if($count == 1) {
      		//echo "Login Success";
        	//session_register("Name");
        	session_start();
         	$_SESSION['login_user'] = $row['Email'];
         	header("Location: index.php");
      	}else {
      		//header("location:index.php");
      		//echo "count".$count;
      	   	//echo "Your Login Name or Password is invalid";
      	   	header("Location: login.php?error=Invalid Username or Password");
      	}
   	}
?>

