<?php
    
    include_once 'db_connection.php';
    
    $errors = array();
    
    $db = OpenCon();
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    

    if(isset($_GET['item'])){
        $restID = $_GET['item'];


        $rest = "SELECT SocialMedia FROM RestaurantSocialMedia WHERE '$restID' = RestaurantID";

        $restResults = mysqli_query($db, $rest);
        
        
    
        while($row = mysqli_fetch_assoc($restResults)){
            
            if (strpos($row['SocialMedia'], 'instagram') !== false) {
                echo "<a class='card-link' href='".$row['SocialMedia']."'><i class='icon ion-social-instagram-outline'></i></a>";
            }
            
            if(strpos($row['SocialMedia'], 'twitter') !== false) {
                echo "<a class='card-link' href='".$row['SocialMedia']."'><i class='fa fa-twitter'></i></a>";
            }
            
            if(strpos($row['SocialMedia'], 'facebook') !== false) {
                echo "<a class='card-link' href='".$row['SocialMedia']."'><i class='fa fa-facebook'></i></a>";
            }
            
                       #echo "<a class='card-link' href='#'><i class='fa fa-twitter'></i></a>";
        }
    }

    
    
?>
