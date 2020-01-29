<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Happy Hour</title>
    <link rel="stylesheet" href="RestManagerProfile/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="RestManagerProfile/assets/css/resume.css">
</head>

<body id = "page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Restaurant Name</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/blank-profile.png" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav">
         <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#verifySpecials">Verify Specials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#editSpecials">Edit Specials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#info">Edit Restaurant Info</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">Restaurant Name
        </h1>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="verifySpecials">
      <div class="w-100">
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Verify Specials</h3>
              <div class="container">
                <div class="table-responsive table-hover">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Menu Item</th>
                                <th>Special</th>
                                <th>Day of the Week</th>
                                <th>Hours</th>
                                <th>Verify</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bottle of Wine</td>
                                <td>50% OFF</td>
                                <td>Wednesday</td>
                                <td>3:00-5:00PM and after 9:00PM</td>
                                <td><input type="checkbox" name="name1" />&nbsp;</td>
                                <td><input type="checkbox" name="name2" />&nbsp;</td>
                              </tr>
                            <tr>
                                <td>Wings</td>
                                <td>$0.25</td>
                                <td>Thursday</td>
                                <td>3:00-5:00PM and after 9:00PM</td>
                                <td><input type="checkbox" name="name1" />&nbsp;</td>
                                <td><input type="checkbox" name="name2" />&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </div>
        </div>
      </div>
    </section>
      
    <hr class="m-0">
      
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="editSpecials">
        <div class="w-100">
            <h3 class="mb-0">Add Specials</h3>
              <form>
                  <div class="form-group">
                      <label for="exampleMenuItem">Menu Item</label>
                      <input type="menuItem" class="form-control" id="addMenuItem" placeholder="Enter Menu Item">
                  </div>
                  <div class="form-group">
                      <label for="deal">Deal</label>
                      <input type="deal" class="form-control" id="addDeal" placeholder="Deal">
                  </div>
                  <div class="form-group">
                      <label for="weekDay">Day of The Week</label>
                      <input type="weekDay" class="form-control" id="UpdatePasswordMatch" placeholder="Day of The Week">
                  </div>
                  <div class="form-group">
                      <label for="Address">Hours</label>
                      
                      <input type="startTime" class="form-control" id="startTime" placeholder="Start Time">
                      <p></p>
                      
                      <input type="endTime" class="form-control" id="endTime" placeholder="End Time">
                      <p></p>
                      
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
      </section>
      
      <hr class="m-0">
      
      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="info">
          <div class="w-100">
              <h3 class="mb-0">Restaurant Info</h3>
              <p></p>
              <form>
                  <div class="form-group">
                      <h5 class="mb-0">Update Password</h5>
                      <label for="exampleInputPassword1">Enter Password</label>
                      <input type="password" class="form-control" id="UpdatePassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Re-enter Password</label>
                      <input type="password" class="form-control" id="UpdatePasswordMatch" placeholder="Password">
                      <p></p>
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                  <div class="form-group">
                      
                      
                      <h5 class="mb-0">Update Address</h5>
                      <p></p>
                      
                      <label for="Address">Select Location</label>
                      <select>
                          <option value="Location 1">Location 1</option>
                          <option value="Location 2">Location 2</option>
                      </select>
                      <p></p>
                      
                      <input type="StreetAddress" class="form-control" id="StreetAddress" placeholder="Street">
                      <p></p>
                      
                      <input type="CityAddress" class="form-control" id="CityAddress" placeholder="City">
                      <p></p>
                      
                      <input type="CountryAddress" class="form-control" id="CountryAddress" placeholder="Country">
                      <p></p>
                      
                      <input type="PostalCodeAddress" class="form-control" id="PostalCodeAddress" placeholder="Postal Code">
                      <p></p>
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div>
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
                      
                      <button type="submit" class="btn btn-primary">Add</button>
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
                      
                      <button type="submit" class="btn btn-primary">Delete</button>
                  </div>
                  
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