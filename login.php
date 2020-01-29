<?php include 'server.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="loginexport/assets/bootstrap/css/bootstrap.min.css?h=e5759e3f861e85faf02ec470aaeca41a">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="loginexport/assets/css/styles.min.css?h=81764f64612729550cc82fb44cbf9ccc">
</head>
 
<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: #f05f40;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php "><i class="fa fa-spoon"></i>Happy Hour</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive"
                                                                                                                         aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="navbarResponsive"></div>
        </div>
    </nav>
    <header class="masthead text-center text-white d-flex" style="background-image: url('loginexport/assets/img/login.jpg?h=ec74490d81e1950f0ee65f778cf4b2bb');opacity: 1;filter: brightness(100%);">
        <!-- Start: ? Login form Page BS4 ? -->
        <div class="container-fluid">
            <div class="row mh-100vh">
                <!-- Start: Login block -->
                <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                    <!-- Start: Login container -->
                    <div class="m-auto w-lg-75 w-xl-50">
                        <!-- Start: Your company -->
                        <h2 class="text-info font-weight-light mb-5"><i class="fa fa-glass"></i>&nbsp;Happy Hour</h2>
                        <!-- End: Your company -->
                        <!-- Start: Login form -->
                        <!-- Code for making error msgs red-->
                        <div style="color:red;">
                        <?php
                                include 'errors.php';
                            ?>
                        </div>
                        <form  action="" method="post">
                            <div class="form-group"><label class="text-secondary">Email</label><input class="form-control" name ="email" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email"></div>
                            <!-- End: Email -->
                            <!-- Start: Password -->
                            <div class="form-group"><label class="text-secondary">Password</label><input class="form-control" name ="password" type="password" required=""></div>
                            <!-- End: Password -->
                            <div class="form-group">
                                <!-- <textarea class="form-control" rows="8" name="messages" placeholder="Message"></textarea> --></div>                       
                           <!-- Start: Submit -->
                                <button class="btn btn-info mt-2" name = "loginButton" type="submit">Log In</button>
                        
                            <!-- End: Submit -->
                        </form>
 
                        <!-- End: Login form -->
                        <!-- Start: Forgot password -->
                       <p class="mt-3 mb-0"><a href="signup.php" class="text-info small">Not a registered user? Join us</a></p>
                        <!-- End: Forgot password -->
                    </div>
                    <!-- End: Login container -->
                </div>
                <!-- End: Login block -->
                <!-- Start: Background image -->
                <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;loginexport/assets/img/login.jpg?h=ec74490d81e1950f0ee65f778cf4b2bb&quot;);background-size:cover;background-position:center center;">
                    <!-- Start: Credit photo -->
                    <p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank" class="text-dark"><em>Aldain Austria</em></a><br></p>
                    <!-- End: Credit photo -->
                </div>
                <!-- End: Background image -->
            </div>
        </div>
        <!-- End: ? Login form Page BS4 ? -->
    </header>
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
            <p class="copyright">Company Name © 2017</p>
            <!-- End: Copyright -->
        </footer>
    </div>
    <!-- End: Footer Basic -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="loginexport/assets/js/script.min.js?h=65aad6c4a6d6489f4cc7a2760c2868e4"></script>
</body>
</html>