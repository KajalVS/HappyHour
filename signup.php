<?php include 'server.php' ; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signUpExport/assets/bootstrap/css/bootstrap.min.css?h=3cff051bad5dee098be000af5228ea07">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="signUpExport/assets/css/styles.min.css?h=0b900f76e14b8d2773931244c5ff8290">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: #f05f40;">
        <div class="container"><a class="navbar-brand text-center text-white d-xl-flex align-items-xl-center js-scroll-trigger" href="index.php"><i class="fa fa-spoon"></i>Happy Hour</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive"
                type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive"></div>
        </div>
    </nav>
    <section class="bg-dark text-white">
        <!-- Start: ensign form -->
        <div class="row">
            <div class="col-md-12 offset-xl-0">
                <h1 class="text-left text-info">Sign Up</h1>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-5 offset-xl-0 site-form">
                <div style="color:red;">
                <?php 
                        include 'errors.php';
                    ?>
                </div>
                <form id="my-form" action="" method="post">
                   <!-- <?php include('errors.php') ?> -->
                    <div class="form-group"><label class="sr-only" for="firstname">First Name</label><input class="form-control" type="text" name="firstname" required="" placeholder="First Name" maxlength="30" minlength="1" id="firstname"></div>
                    <div class="form-group"><label class="sr-only" for="lastname">Last Name</label><input class="form-control" type="text" name="lastname" required="" placeholder="Last Name" maxlength="30" minlength="1" id="lastname"></div>
                   <!-- <div class="form-group"><label class="sr-only" for="phonenumber">Phone Number</label><input class="form-control" type="tel" name="phonenumber" required="" placeholder="Phone" maxlength="10" minlength="10" id="phonenumber"></div> -->
                    <div class="form-group"><label class="sr-only" for="email">Email Address</label><input class="form-control" type="text" name="email" required="" placeholder="Email" id="email"></div>
                    <div class="form-group"><label class="sr-only" for="password">Password</label><input class="form-control" type="password" name="password" required="" placeholder="Password" autocomplete="off" id="email"></div>
                    <div class="form-group"><label class="text-left text-black-50 bg-white border rounded-0 d-xl-flex">&nbsp; &nbsp;Type of User</label>
                        <div class="form-check text-black-50 bg-white"><input class="form-check-input" type="radio" id="formCheck-2" name = "customerType" value="Customer" checked="checked" ><label class="form-check-label" for="formCheck-2">Customer</label></div>
                        <div class="form-check text-black-50 bg-white"><input class="form-check-input" type="radio" id="formCheck-1" name = "customerType" value ="Restaurant Manager"><label class="form-check-label" for="formCheck-1">Restaurant Manager</label></div>
                    </div>    
                    <button class="btn btn-info mt-2" name ="signupButton" type="submit">Sign Up</button>
                    <p class="mt-3 mb-0"><a href="login.php" class="text-info small">Already an user? Log in</a></p> </form>
            </div>
            <div class="col-xl-7 offset-xl-0"><img src="signUpExport/assets/img/signup.jpg?h=fd80b1e64083c6533ba0532548a1929b" width="650" height="550"></div>
        </div>
        <!-- End: ensign form -->
    </section>
    <!-- Start: Footer Basic -->
    <div class="footer-basic">
        <footer>
            <!-- Start: Social Icons -->
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <!-- End: Social Icons -->
            <!-- Start: Links -->
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Home</a></li>
                <li class="list-inline-item"><a href="contactUs.php">Contact Us</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <!-- End: Links -->
            <!-- Start: Copyright -->
            <p class="copyright">Happy Hour© 2019</p>
            <!-- End: Copyright -->
        </footer>
    </div>
    <!-- End: Footer Basic -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="signUpExport/assets/js/script.min.js?h=65aad6c4a6d6489f4cc7a2760c2868e4"></script>
</body>

</html>