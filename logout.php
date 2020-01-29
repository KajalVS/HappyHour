<?php 
session_start();
//if(isset($_GET['logout'])){ 
	session_destroy();
	unset($_SESSION['email']);
	unset($_SESSION['Type']);
	header('location: index.php'); 
?>