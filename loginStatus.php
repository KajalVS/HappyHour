<?php
    session_start();
    if(isset($_SESSION['email'])){
        if(isset($_SESSION['Type'])){
            if($_SESSION['Type']=='Customer'){ ?>
<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="userProfile.php" name="customerProfile">PROFILE</a></li>
<?php }
    elseif($_SESSION['Type']=='Restaurant Manager'){?>
<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="restMangProfile.php" name="managerProfile">PROFILE</a></li>
<?php }
    elseif($_SESSION['Type']=='Admin'){?>
<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="adminProfile.php" name="adminProfile">PROFILE</a></li>
<?php } ?>
<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="logout.php" name="logout">LOGOUT</a></li>
<?php } }
    else { ?>
<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="signup.php">SIGN UP</a></li>
<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="login.php">LOGIN</a></li>
<?php } ?>
