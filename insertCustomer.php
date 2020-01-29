<?php 
include_once 'db_connection.php'; 
$db = OpenCon();
$count = '';

$firstname = "";
$lastname = "";
$email = "";
$customer_type = "";

//ADD USER
    if(isset($_POST['insertCustomer'])){

		$firstname = mysqli_real_escape_string($db, $_POST['FirstName']);
		$lastname = mysqli_real_escape_string($db, $_POST['LastName']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$customer_type = $_POST['customerType'];
		echo "The Customer Type is: ", $customer_type;
		//form validation

		if(empty($firstname)) {array_push($errors, "Firstname is required");}
		if(empty($lastname)) {array_push($errors, "Lastname is required");}
		if(empty($email)) {array_push($errors, "Email is required");}

		//check db for existing user with same username

		$user_check_query = "SELECT * FROM registereduser WHERE Email = '$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);
        echo "BUTTON PUSHED";
        echo "THE ERROR COUNT IS: ", count($errors);

		if($user){
            echo "CHECKING IF USER EXISTS";
			if($user['Email'] == $email){
                echo "USER ALREADY EXISTS";
                array_push($errors, "This email already exists. Please try again with different email.");}
		}
		//register the user if no errors
		elseif(count($errors) == 0){
            echo "INSERTING INTO DB";
			$query = "INSERT INTO registereduser (Type, FirstName, LastName, Email,Password, VerificationPoints) VALUES('$customer_type','$firstname', '$lastname', '$email','temp','0')";
			mysqli_query($db, $query);

		}
    }
CloseCon($db);
?>