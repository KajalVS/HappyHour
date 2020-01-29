<?php 
include_once 'db_connection.php'; 
$db = OpenCon();
$count = '';

$name = "";
$StreetAddress = "";
$city = "";
$province = "";
$postalCode = "";
$phone = "";
$email = "";
$address = "";

//ADD USER
    if(isset($_POST['insertRestaurant'])){

		$name = mysqli_real_escape_string($db, $_POST['RestaurantName']);
		$StreetAddress = mysqli_real_escape_string($db, $_POST['StreetAddress']);
		$city = mysqli_real_escape_string($db, $_POST['CityAddress']);
        $province = mysqli_real_escape_string($db, $_POST['ProvinceAddress']);
        $postalCode = mysqli_real_escape_string($db, $_POST['PostalCodeAddress']);
        $phone = mysqli_real_escape_string($db, $_POST['RestaurantPhone']);
        $email = mysqli_real_escape_string($db, $_POST['RestaurantEmail']);
        $address = $StreetAddress. " " .$city. " ". $province. " " .$postalCode;
		//form validation

		if(empty($name)) {array_push($errors, "Restaurant name is required");}
		if(empty($StreetAddress)) {array_push($errors, "Street Address is required");}
		if(empty($city)) {array_push($errors, "City is required");}
		if(empty($postalCode)) {array_push($errors, "Postal code is required");}
		if(empty($phone)) {array_push($errors, "Phone number is required");}

		if(empty($country)) {array_push($errors, "Country is required");}
		if(empty($email)) {array_push($errors, "Email is required");}

		//check db for existing user with same username

		$user_check_query = "SELECT * FROM Restaurant WHERE Location = '$address' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$rest = mysqli_fetch_assoc($result);

		if($rest){
			if($rest['Name'] == $name and $rest['Location'] == $address){
                array_push($errors, "This Restaurant already exists.");}
		}
		//register the user if no errors
		elseif(count($errors) == 0){
			$query = "INSERT INTO restaurant (Name, Location, PhoneNumber, Email) VALUES('$name','$address', '$phone', '$email')";
			mysqli_query($db, $query);

		}
    }
CloseCon($db);
?>