
<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['email'];
   
   $ses_sql = mysqli_query($db,"select email from UserDetails where Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['email'])){
      header("location:login.php");
      die();
   }
?>