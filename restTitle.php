<?php
    
    include_once 'db_connection.php';
    
    $errors = array();
    
    $db = OpenCon();
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    

    if(isset($_GET['item']))
    {
        $restID = $_GET['item'];
        
        ###################RESTAURANT NAME###########
        $restName = "SELECT Name, Location FROM Restaurant WHERE '$restID' = RID";
        $restResults =mysqli_query($db, $restName);
        
        echo "<h4 class='text-center card-title'>";
        
        while($row = mysqli_fetch_assoc($restResults)){
            echo $row['Name'];
        }
        
       echo "<br/>";
//        
//        echo "<i class='fas fa-hamburger' id='burgerICON' style='width: px;padding: 10px;margin:10px;'></i></h4>";
        
        

        echo "<h6 class='text-muted card-subtitle mb-2' style='filter: blur(0px) brightness(124%) contrast(0%) grayscale(0%) hue-rotate(0deg) saturate(0%);color: rgb(240,95,64);'>SPECIALS</h6>";

    }
    
?>
