
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Happy Hour</title>
    <link rel="stylesheet" href="AdminProfile/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="AdminProfile/assets/css/resume.css">
</head>

<body id = "page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Admin</span>
            <span class="d-none d-lg-block">
            <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="AdminProfile/assets/img/blank-profile.png" alt="">
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
            <a class="nav-link js-scroll-trigger" href="#managerUser">Manage User</a>
        </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#manageRestaurant">Manage Restaurant</a>
        </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#manageTags">Manage Tags</a>
        </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#addUser">Add User</a>
        </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#addRestaurant">Add Restaurant</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="main">
      <div class="w-100">
        <h1 class="mb-0">Admin</h1>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="managerUser">
      <div class="w-100">
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Manage Customer</h3>
              <div class="container">
                  <form action="" method ="post">
                      <br>
                      <input type="text" placeholder="Customer ID" name="CustomerID"><br>
                      <input type="text" placeholder="Last Name" name="CustomerLastName"><br>
                      <input type="text" placeholder="Customer Type" name="CustomerType"><br><br>
                      <button type="submit" class="btn btn-primary" name = customerSearchButton>Search</button><br><br>
                      <div class="table-responsive" id="specialTable"> 
                        <table class="table">
                            <thead>    
                            <tr>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th></th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <?php include 'adminCustomerSearch.php'; ?>
                        </table>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <hr class="m-0">
      
      <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="manageRestaurant">
          <div class="w-100">
            <h3 class="mb-0">Manage Restaurant</h3>
              <div class="container">
                  <form action="" method ="post"><br>
                      <input type="text" placeholder="Restaurant ID" name="RestaurantID"><br>
                      <input type="text" placeholder="Restaurant Name" name="RestaurantName"><br>
                      <input type="text" placeholder="City" name="RestaurantCity"><br><br>
                      <button type="submit" class="btn btn-primary" name = restaurantSearchButton>Search</button><br><br>
                  
                    <div class="table-responsive table-hover">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Restaurant ID</th>
                                    <th>Restaurant Name</th>
                                    <th>Address</th>
                                    <th></th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                             <?php include 'adminRestaurantSearch.php'; ?>
                        </table>
                    </div>
                </form>
            </div>
        </div>
      </section>
      
    <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="manageTags">
        <div class="w-100">
            <h3 class="mb-0">Manage Tag</h3>
              <div class="container">
                  <form action="" method = "post"><br>
                      <input type="text" placeholder="Tag ID" name="TagID"><br>
                      <input type="text" placeholder="Tag Name" name="TagName"><br><br>
                      <button type="submit" class="btn btn-primary" name = "tagSearchButton">Search</button><br><br>
                  
                    <div class="table-responsive table-hover">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tag ID</th>
                                    <th>Tag Name</th>
                                    <th></th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <?php include 'adminTagSearch.php'; ?>
                        </table>
                    </div>
                </form>
            </div>
        </div>
      </section>
      
      <hr class="m-0">
      
      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="addUser">
          <div class="w-100">
              <h3 class="mb-0">Add Customer</h3>
              <p></p>
              <form action="" method = "post">
                  <div class="form-group">
                      <h5 class="mb-0">Add First Name</h5>
                      <p></p>
                      
                      <input type="name" class="form-control" name="FirstName" placeholder="FirstName">
                      <p></p>
                      
                       <h5 class="mb-0">Add Last Name</h5>
                      <p></p>
                      
                      <input type="name" class="form-control" name="LastName" placeholder="LastName">
                      <p></p>

                      <h5 class="mb-0">Add E-mail</h5>
                      <p></p>
                      <input type="email" class="form-control" name="email" placeholder="E-Mail">
                      <p></p>
                      
                      <div class="form-group">
                          <div class="form-check text-black-50 bg-white">
                              <input class="form-check-input" type="radio" id="formCheck-2" name = "customerType" value="Customer" checked="checked" >
                              <label class="form-check-label" for="formCheck-2">Customer</label>
                          </div>
                          <div class="form-check text-black-50 bg-white">
                              <input class="form-check-input" type="radio" id="formCheck-1" name = "customerType" value ="Restaurant Manager">
                              <label class="form-check-label" for="formCheck-1">Restaurant Manager</label>
                          </div>
                          
                          <div class="form-check text-black-50 bg-white">
                            <input class="form-check-input" type="radio" id="formCheck-1" name = "customerType" value ="Admin">
                            <label class="form-check-label" for="formCheck-1">Admin</label>
                          </div>
                    </div>    
                      
                      <button type="submit" class="btn btn-primary" name = "insertCustomer">Add Customer</button>
                      <?php include 'insertCustomer.php'; ?>
                  </div>
              </form>
          </div>
      </section>

      <hr class="m-0">

      
      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="addRestaurant">
          <div class="w-100">
              <h3 class="mb-0">Add Restaurant</h3>
              <p></p>
              <form action="" method = "post">
                  <div class="form-group">
                      <h5 class="mb-0">Add Name</h5>
                      <p></p>
                      
                      <input type="name" class="form-control" name="RestaurantName" placeholder="Name">
                      <p></p>
                      

                      <h5 class="mb-0">Add Address</h5>
                      <p></p>
                      
                      <input type="StreetAddress" class="form-control" name="StreetAddress" placeholder="Street">
                      <p></p>
                      
                      <input type="CityAddress" class="form-control" name="CityAddress" placeholder="City">
                      <p></p>
                      
                      <input type="ProvinceAddress" class="form-control" name="ProvinceAddress" placeholder="Province">
                      <p></p>
                      
                      <input type="PostalCodeAddress" class="form-control" name="PostalCodeAddress" placeholder="Postal Code">
                      <p></p>
                      
                      <h5 class="mb-0">Add Phone Number</h5>
                      <p></p>
                      
                      <input type="phoneNumber" class="form-control" name="RestaurantPhone" placeholder="Phone Number">
                      <p></p>
                      
                      <h5 class="mb-0">Add E-Mail</h5>
                      <p></p>
                      
                      <input type="email" class="form-control" name="RestaurantEmail" placeholder="E-Mail">
                      <p></p>
                      
                      <button type="submit" class="btn btn-primary" name = "insertRestaurant">Add Restaurant</button>
                      <?php include 'insertRestaurant.php'; ?>
                  </div>
<!--
                  <div>
                      <h5 class="mb-0">Add Location</h5>
                      <p></p>
                      <input type="StreetAddress" class="form-control" id="StreetAddress" placeholder="Street">
                      <p></p>
                      
                      <input type="CityAddress" class="form-control" id="CityAddress" placeholder="City">
                      <p></p>
                      
                      <input type="CountryAddress" class="form-control" id="CountryAddress" placeholder="Country">
                      <p></p>
                      
                      <input type="PostalCodeAddress" class="form-control" id="PostalCodeAddress" placeholder="Postal Code">
                      <p></p>
                      
                      <button type="submit" class="btn btn-primary">Add Location</button>
                  </div>
                  
                  <div>
                      <p></p>
                      <h5 class="mb-0">Delete Location</h5>
                      <p></p>
                      
                      <label for="Address">Select Location</label>
                      <select>
                          <option value="Location 1">Location 1</option>
                          <option value="Location 2">Location 2</option>
                      </select>
                      <p></p>
                      
                      <button type="submit" class="btn btn-primary">Delete Location</button>
                  </div>
-->
                  
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