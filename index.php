 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Home - Brand</title>
	<link rel="stylesheet" href="homePageExport/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
	<link rel="stylesheet" href="homePageExport/assets/fonts/fontawesome-all.min.css">
	<link rel="stylesheet" href="homePageExport/assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="homePageExport/assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="homePageExport/assets/css/Footer-Basic.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<link rel="stylesheet" href="homePageExport/assets/css/untitled.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
</head>
<body id="page-top">
<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: #f05f40;">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="index.php"><i class="icon ion-fork flex-grow-1"></i>&nbsp;HAPPY HOUR</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button> 
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#about">SEARCH</a></li>
				<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#services">ABOUT</a></li>
<?php
    include 'loginStatus.php';
    ?>
			</ul>
		</div>
	</div>
</nav>
<header class="masthead text-center text-white d-flex" style="background-image: url('homePageExport/assets/img/pexels-photo-1268558.jpeg');opacity: 1;filter: brightness(100%);">
	<div class="container my-auto">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<h1 class="text-uppercase">
					<strong style="color: rgb(255,255,255);filter: brightness(100%);background-color: #f05f40;">&nbsp;Happy hour&nbsp;</strong> 
				</h1>
			</div>
		</div>
	</div>
</header>
<!-- Start: #search -->
<section id="about" class="bg-primary" style="background-color: rgb(141,4,4);">
	<div class="container">
		<div class="row">
			<div class="col offset-lg-8 mx-auto text-center">
				<h2 class="text-white section-heading">
					Start Searching! 
				</h2>
				<hr class="light my-4">
				<p class="text-faded mb-4">
					Search for your favourite happy hour specials!&nbsp; 
				</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-xl-12">
						<form  action="index.php" method="POST">
							<div class="form-group">
								<input class="form-control" type="text" name="TagSearchInput" id="TagSearchInput" placeholder="#Food #Burger">
							</div>



							<script>
								function myTagFunction() {
								    var input, filter, ul, li, a, i, txtValue;
								    input = document.getElementById("TagSearchInput");
								    filter = input.value.toUpperCase();
								    ul = document.getElementById("myUL");
								    li = ul.getElementsByTagName("li");
								    
								    for (i = 0; i < li.length; i++) {
								        a = li[i].getElementsByTagName("a")[0];
								        txtValue = a.textContent || a.innerText;
								        if (txtValue.toUpperCase().indexOf(filter) > -1) {
								            li[i].style.display = "";
								        } else {
								            li[i].style.display = "none";
								        }
								    }
								}
							</script>
							
							<div class="form-group">
								<input class="form-control" type="text" name="RestaurantSearchInput" id="RestaurantSearchInput" onkeyup="myFunction()" placeholder="Restaurant">
							</div>







                            <div class="form-group">
                                <button class="btn btn-primary btn-block text-nowrap text-primary bg-light" type="submit" name ="searchButton" id ="searchButton">SEARCH!</button>
                            </div>
						</form>




					</div>
				</div>
				<div class="row">
					<div class="col" id="myList">
						<ul id="myUL">

<?php
    include 'searchTag.php';

    
    ?>
						</ul>
						
						<script>
							function myFunction() {
							    var input, filter, ul, li, a, i, txtValue;
							    input = document.getElementById("RestaurantSearchInput");
							    filter = input.value.toUpperCase();
							    ul = document.getElementById("myUL");
							    li = ul.getElementsByTagName("li");
							    
							    for (i = 0; i < li.length; i++) {
							        a = li[i].getElementsByTagName("a")[0];
							        txtValue = a.textContent || a.innerText;
							        if (txtValue.toUpperCase().indexOf(filter) > -1) {
							            li[i].style.display = "";
							        } else {
							            li[i].style.display = "none";
							        }
							    }
							}
						</script>
						
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="card">
							<div class="card-body text-center">



<?php
    include 'restTitle.php';

?>
<div class="flexbox">

<div class="fav-btn">
<span href="" class="favme dashicons dashicons-heart"></span>
</div>

</div>

<script>
// Favorite Button - Heart
$('.favme').click(function() {
                  $(this).toggleClass('active');
                  });

/* when a user clicks, toggle the 'is-animating' class */
$(".favme").on('click touchstart', function(){
               $(this).toggleClass('is_animating');
               });

/*when the animation is over, remove the class*/
$(".favme").on('animationend', function(){
               $(this).toggleClass('is_animating');
               });
</script>
<!--
//<button class="button button-like"><i class="fa fa-heart"></i><span>Like</span></button>
//<script>
//$(document).foundation();
//
//$(function() {
//  $('.button-like')
//  .bind('click', function(event) {
//        $('.button-like').toggleClass('liked');
//        })
//  });
//</script>
-->

<?php
    include 'favouriteRestaurant.php';
    ?>


								<div class="table-responsive" id="specialTable">
									<table class="table">
                                                <?php
                                                include 'specialDisplay.php';
                                                    
                                                ?>

									</table>

								</div>

                                <?php include 'getSocialMedia.php'; ?>
								</div>

						</div>
					</div>
				</div>
			</div>







			<div class="col">
                <?php
                    include 'mapSearch.php';
                ?>

			</div>
		</div>
	</div>
</section>
<!-- End: #search -->
<!-- Start: #about -->
<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">
					About Us 
				</h2>
				<hr class="my-4">
				<p>
					 
				</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3 text-center">
				<div class="mx-auto service-box mt-5">
					<i class="fa fa-heart fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i> 
					<h3 class="mb-3">
						Favourites 
					</h3>
					<p class="text-muted mb-0">
						You can save your favourite restaurants for later! 
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 text-center">
				<div class="mx-auto service-box mt-5">
					<i class="icon ion-beer fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i> 
					<h3 class="mb-3">
						Specials 
					</h3>
					<p class="text-muted mb-0">
						Add and confirm specials on the go! 
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 text-center">
				<div class="mx-auto service-box mt-5">
					<i class="fa fa-star fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-once="true"></i> 
					<h3 class="mb-3">
						Verification Points 
					</h3>
					<p class="text-muted mb-0">
						Verify and add specials to earn some verification points! 
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 text-center">
				<div class="mx-auto service-box mt-5">
					<i class="icon ion-android-restaurant fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i> 
					<h3 class="mb-3">
						Manage 
					</h3>
					<p class="text-muted mb-0">
						Manage your own restaurant by adding and verifying customer specials! 
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End: #about -->
<!-- Start: Footer Basic -->
<div class="footer-basic">
	<footer>
<!-- Start: Social Icons -->
		<div class="social">
			<a href="#"><i class="icon ion-social-instagram"></i></a> <a href="#"><i class="icon ion-social-snapchat"></i></a> <a href="#"><i class="icon ion-social-twitter"></i></a> <a href="#"><i class="icon ion-social-facebook"></i></a> 
		</div>
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
		<p class="copyright">
			Happy Hour © 2019 
		</p>
<!-- End: Copyright -->
	</footer>
</div>
<!-- End: Footer Basic -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="homePageExport/assets/js/jquery.min.js">
</script>
<script src="homePageExport/assets/bootstrap/js/bootstrap.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js">
</script>
<script src="homePageExport/assets/js/creative.js">
</script>
<script src="homePageExport/assets/js/bs-animation.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js">
</script>
<script src="homePageExport/assets/js/restaurantList.js">
</script>
<script src="homePageExport/assets/js/script.js">
</script>
</body>
</html>
