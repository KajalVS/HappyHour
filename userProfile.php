<?php include_once 'server.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Happy Hour</title>
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="UserProfile/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="UserProfile/assets/css/resume.css">
</head>

<body id = "page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="UserProfile/assets/img/blank-profile.png" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav">
         <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#points">Points</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#favourites">Favourites</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#info">Edit</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0"><?php echo $_SESSION['FirstName']; ?>
          <span class="text-primary"><?php echo $_SESSION['LastName']; ?></span>
        </h1>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="points">
      <div class="w-100">
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Total Points</h3>
              <p>Get points by working as a community! Add happy hour specials to your favourite restaurant as they change, verify posted restaurant specials, and get your special verified.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $_SESSION['Points']; ?></span>
          </div>
        </div>
      </div>
    </section>
      
    <hr class="m-0">
      
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="favourites">
        <div class="w-100">
            <h3 class="mb-0">Favs</h3>
            <div class="container">
                <form action="" method ="post">

                <div class="table-responsive" id="specialTable">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Restaurant Name</th>
                                <th>Address</th>
                                <th></th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <?php include 'displayFavourites.php'; ?>
                    </table>
                    
                </div>
                </form>
              </div>
            </div>
      </section>
      
      <hr class="m-0">
      
      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="info">
          <div class="w-100">
              <h3 class="mb-0">My Info</h3>
              <form>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Update Password</label>
                      <input type="password" class="form-control" id="UpdatePassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Re-enter Password</label>
                      <input type="password" class="form-control" id="UpdatePasswordMatch" placeholder="Password">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
    </section>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/resume.js"></script>
</body>

</html>