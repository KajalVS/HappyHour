<?php
    
    include_once 'db_connection.php';
    
    
    $errors = array();
    
    $db = OpenCon();
    

if(isset($_GET['item']))
{
        $restID = $_GET['item'];

        ###########TABLE#############
    $query = "SELECT DISTINCT s.Name, s.Price, s.Verified_Status, st.StartTime, st.EndTime FROM Special as s, SpecialTimes as st WHERE '$restID' = s.RestaurantID and '$restID' = st.RestaurantID";
        
        $result = mysqli_query($db, $query);
        
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Price</th>";
        echo "<th>Times</th>";
        echo "<th>Verified_Status</th>";
        echo "</tr>";
        echo "</thead>";
    
    $count = mysqli_num_rows($result);
    if($count == 0){
        echo "There are currently no specials for this restaurant!";
    }
    
        
        while($row = mysqli_fetch_array($result))
        {
            
            
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td> $" . $row['Price'] . "</td>";
            echo "<td>" . $row['StartTime']. "-" .$row['EndTime']."</td>";
            echo "<td><form action='index.php' method='GET'><button class='dislike' id='thumbsdown' name='thumbsdown' type='submit'><i class='fa fa-thumbs-o-down' aria-hidden='true'></i></button><button class='like' id='thumbs' name='thumbs' type='submit'><i class='fa fa-thumbs-o-up' aria-hidden='true'></i>".$row['Verified_Status']."</button></form></td>";
            echo "</tr>";
            echo "</tbody>";

            
            
        }


    
    
}
    
//    if(isset($_GET['thumbs'])){
//        include 'server.php';
//        $userid = $_SESSION['id'];
//
//
//        $userPoints = "UPDATE registereduser SET VerificationPoints = VerificationPoints + 1 WHERE UID = '$userid'";
//        mysqli_query($db, $userPoints);
//        
//
//
//
//
//
//    }
//
//    if(isset($_GET['thumbsdown'])){
//
//        $userid = $_SESSION['id'];
//
//
//        $userPoints = "UPDATE registereduser SET VerificationPoints = VerificationPoints - 1 WHERE UID = '$userid'";
//        mysqli_query($db, $userPoints);
//
//
//
//
//    }
    
    ?>


