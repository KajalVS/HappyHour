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
    
    
    //sign up user
    if(isset($_POST['signupButton']))
    {
        $firstname = "";
        $lastname = "";
        $email = "";
        $password ="";
        $customer_type = "";
        $customer_type = "";
        $customer_type2 = "";
        
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
       // $password = md5($password);
        $customer_type = $_POST['customerType'];
        
        //form validation
        if(empty($firstname)) {array_push($errors, "Firstname is required");}
        if(empty($lastname)) {array_push($errors, "Lastname is required");}
        if(empty($email)) {array_push($errors, "Email is required");}
        if(empty($password)) {array_push($errors, "Password is required");}
        if(empty($customer_type)) {array_push($errors, "Please select type of customer");}
        
        //check db for existing user with same username
        $user_check_query = "SELECT * FROM registereduser WHERE Email = '$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if($user){
            if($user['Email'] == $email){array_push($errors, "This email already exists. Please try again with different email.");}
        }
        elseif($customer_type == 'Restaurant Manager'){
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
                <a href='http://localhost:8888/happyhour/emailconfirmation.php?email=$email&token=$token'>Click here to verify your email</a>";
                
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
            header('location: ThankYou.php');
            exit();
        }
        //register the user if no errors
        elseif(count($errors) == 0){
            $query = "INSERT INTO registereduser (Type, FirstName, LastName, Email, isEmailConfirmed, token,Password, VerificationPoints) VALUES('$customer_type','$firstname', '$lastname', '$email','0','', '$password','0')";
            mysqli_query($db, $query);
            
            $_SESSION['success'] = "You are now successfully signed up!";
            
            header('location: index.php');
        }
        CloseCon($db);
    }
    
    
    //login user
    if(isset($_POST['loginButton'])){
        
        $email = "";
        $password ="";
        $customer_type = "";
        $isEmailConfirmed = "";
        $firstName = "";
        $lastName ="";
        $id = "";
        $points ="";
        
        
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        
        if(empty($email)){
            array_push($errors, "Email id required!");
        }
        
        if(empty($password)){
            array_push($errors, "Password required!");
        }
        
        if(count($errors) == 0){
           // $password = md5($password);
            //$password = password_hash($password, algo:PASSWORD_BCRYPT); //limits size to 60
            // echo $password;
            // exit();
            $query = "SELECT * FROM registereduser WHERE Email = '$email' AND Password = '$password'";
            $results = mysqli_query($db, $query);
            
            while ($row = mysqli_fetch_assoc($results)) {
                $customer_type = $row["Type"];
                $isEmailConfirmed = $row["isEmailConfirmed"];
                $firstName = $row["FirstName"];
                $lastName = $row["LastName"];
                $id = $row["UID"];
                $points = $row["VerificationPoints"];
            }
            
            if($customer_type == 'Restaurant Manager' AND $isEmailConfirmed == '1'){
                
                if(mysqli_num_rows($results)){
                    session_start();
                    $_SESSION['email'] = $email;
                    $_SESSION['Type'] = $customer_type;
                    $_SESSION['FirstName'] = $firstName;
                    $_SESSION['LastName'] = $lastName;
                    $_SESSION['success'] = "You are now logged in";
                    header('location: index.php');
                }
                elseif($isEmailConfirmed == '1'){
                    array_push($errors, "Incorrect email/password. Please try again!");
                }
            }else{
                array_push($errors, "Your emailconfirmation is pending!");
            }
            if($customer_type != 'Restaurant Manager'){
                if(mysqli_num_rows($results)){
                    session_start();
                    $_SESSION['email'] = $email;
                    $_SESSION['Type'] = $customer_type;
                    $_SESSION['FirstName'] = $firstName;
                    $_SESSION['LastName'] = $lastName;
                    $_SESSION['Points'] = $points;
                    $_SESSION['id'] = $id;
                    
                    $_SESSION['success'] = "You are now logged in";
                    header('location: index.php');
                }
                else{
                    array_push($errors, "Incorrect email/password. Please try again!");
                }
            }
        }
        CloseCon($db);
    }
    
    //Contact us page
    if(isset($_POST['contactusButton']))
    {
        $name = "";
        $email = "";
        $phone ="";
        $calltime = "";
        $comments = "";
        
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $calltime = mysqli_real_escape_string($db, $_POST['calltime']);
        $comments = mysqli_real_escape_string($db, $_POST['comments']);
        
        //form validation
        
        if(empty($name)) {array_push($errors, "Fullname is required");}
        if(empty($email)) {array_push($errors, "Email is required");}
        if(empty($phone)) {array_push($errors, "Phone is required");}
        if(empty($calltime)) {array_push($errors, "calltime is required");}
        if(empty($comments)) {array_push($errors, "Please enter your valuable comments");}
        
        if(empty($email)){
            array_push($errors, "Email id required!");
        }
        else{
            //send email to that contacter
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
                
                $mail -> setFrom($email);
                $mail -> addAddress('happyhourkmm@gmail.com');
                $mail -> Subject = "Contact Us";
                $mail -> isHTML(true);
                $mail -> Body ="$name has reached Happy Hour. These are their details: <br>
                <table>
                <tr>
                <td>Name</td>
                <td>$name</td>
                </tr>
                <tr>
                <td>Email</td>
                <td>$email</td>
                </tr>
                <tr>
                <td>Phone</td>
                <td>$phone</td>
                </tr>
                <tr>
                <td>Call Time</td>
                <td>$calltime</td>
                </tr>
                <tr>
                <td>Comments</td>
                <td>$comments</td>
                </tr>
                </table>";
                
                if($mail->send()){
                    $msg = "Thank you for reaching Happy Hours. We've got your email and will get back to you soon.";
                }
                else{
                    $msg = "Something went wrong with the email.";
                    array_push($errors, "Email failure!");
                }
            }
            catch(Exception $e){
                echo $e->errorMessage();
            }
            catch(\Exception $e){
                echo $e->getMessage();
            }
            header('location: ContactThankYou.php');
            exit();
        }
        CloseCon($db);
    }
    
    // Search button on homepage
    if(isset($_POST['searchButton']))
    {
        $searchByTag ="";
        $searchByLocation = "";
        $searchByRestuarant = "";
        
        $searchByTag = mysqli_real_escape_string($db, $_POST['TagSearchInput']);
        $searchByLocation = mysqli_real_escape_string($db, $_POST['LocationSearchInput']);
        $searchByRestuarant = mysqli_real_escape_string($db, $_POST['RestaurantSearchInput']);
        
        if(empty($searchByTag)){
            array_push($errors, "Tag required to be searched!");
        }
        elseif(empty($searchByLocation)){
            array_push($errors, "Tag required to be searched!");
        }
        elseif(empty($searchByRestuarant)){
            array_push($errors, "Tag required to be searched!");
        }
        
        //serachByTag
        if(count($errors) == 0){
            
            $query = "SELECT r.RestaurantName, s.SpecialName, s.StartTime, s.EndTime
            FROM restaurant as r, special as s, tags as t
            WHERE (t.TagName = $serachByTag)";
            
            //echo $query;
            $results = mysqli_query($db, $query);
            if(mysqli_num_rows($results)){
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }else
            {
                array_push($errors, "Incorrect email/password. Please try again!");
                //header('location: login.php');
            }
        }
        CloseCon($db);
    }
    
    
    ?>
