<?php
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

    
    // require '/Applications/MAMP/htdocs/HappyHour/PHPMailer/PHPMailer.php';
    // require '/Applications/MAMP/htdocs/HappyHour/PHPMailer/Exception.php';
    // require '/Applications/MAMP/htdocs/HappyHour/PHPMailer/SMTP.php';
   require 'C:\wamp64\www\HappyHour\PHPMailer\PHPMailer.php';
   require 'C:\wamp64\www\HappyHour\PHPMailer\Exception.php';
   require 'C:\wamp64\www\HappyHour\PHPMailer\SMTP.php';

	include 'db_connection.php' ;
    session_start();

	$errors = array();
	
	$db = OpenCon();
	
	
	//fetching user info
    if(isset($_POST['contactusButton']))
    {
		$name = "";
		$email = "";
		$phone ="";
		$calltime = "";
		$comments = "";

		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		//$phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$calltime = mysqli_real_escape_string($db, $_POST['calltime']);
		$comments = mysqli_real_escape_string($db, $_POST['comments']);
		
		//form validation

		if(empty($name)) {array_push($errors, "Fullname is required");}
		if(empty($email)) {array_push($errors, "Email is required");}
		//if(empty($phonenumber)) {array_push($errors, "phonenumber is required")};
		if(empty($phone)) {array_push($errors, "Phone is required");}
		if(empty($calltime)) {array_push($errors, "calltime is required");}
		if(empty($comments)) {array_push($errors, "Please enter your valuable comments");}
		

		if(empty($email)){
			$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
			$token = str_shuffle($token);
			$token = substr($token, 0, 10);
			
			$db -> query("INSERT INTO registereduser (Type, FirstName, LastName, Email, isEmailConfirmed, token, Password, VerificationPoints) VALUES('$customer_type','$firstname', '$lastname', '$email','0 ','$token', '$password','0')");
			include_once "PHPMailer/PHPMailer.php";

			try{
				$mail = new PHPMailer(true);

				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 587;
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = 'tls';
				/* Username (email address). */
				$mail->Username = 'happyhourkmm@gmail.com';
				/* Google account password. */
				$mail->Password = 'admin@12345';

				$mail -> setFrom('happyhourkmm@gmail.com');
				$mail -> addAddress($email);
				$mail -> Subject = "Please verify email";
				$mail -> isHTML(true);
				$mail -> Body ="
				Please click on the link below:<br></br>
				<a href='http://localhost/happyhour/emailconfirmation.php?email=$email&token=$token'>Click here to verify your email</a>";

				if($mail->send()){
					$msg = "You have been registered. Please verify you email";	
				}
				else{
					$msg = "Something went wrong with the email.";
				}
				echo $msg;

			}
			catch(Exception $e){
					echo $e->errorMessage();
			}
			catch(\Exception $e){
				echo $e->getMessage();
			}
			//exit();
			header('location: ThankYou.php');
			exit();
			//echo  "You have been registered. Please verify you email";
		}
	}?>
