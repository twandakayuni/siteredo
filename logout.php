<?php 

session_start();
 if(isset($_SEESION['user_id']))
 {
     unset($_SESSION['user_id']);
 }
 header("Location: login.php")

?>

 