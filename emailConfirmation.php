<?php
	
	include 'db_connection.php';

	function redirect(){
		header('location: index.php');
		exit();				
	}

	if(!isset($_GET['email']) || !isset($_GET['token'])){
		redirect();
	}else{
		$db = OpenCon();
		$email = $db->real_escape_string($_GET['email']);
		$token = $db->real_escape_string($_GET['token']);

		$sql = $db->query("SELECT UID FROM registereduser WHERE Email = '$email' AND token = '$token' AND isEmailConfirmed='0'");

		if($sql-> num_rows > 0){
			$db->query("UPDATE registereduser SET isEmailConfirmed='1', token='$token' WHERE Email='$email'");
			redirect();
		}else{
			redirect();
		}

	} 
?>