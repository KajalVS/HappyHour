<?php 
include_once 'db_connection.php'; 
$db = OpenCon();
$count = '';

//RESTAURANT SEARCH
if(isset($_POST['restaurantSearchButton'])){
    $restID = mysqli_real_escape_string($db, $_POST['RestaurantID']);
    $restName = mysqli_real_escape_string($db, $_POST['RestaurantName']);
    $restCity = mysqli_real_escape_string($db, $_POST['RestaurantCity']);

    
    $query = "SELECT * FROM Restaurant WHERE RID LIKE '%$restID%' AND Name LIKE '%$restName%' AND  Location LIKE '%$restCity%'";
    
    $result = mysqli_query($db, $query) or die("Could not search");
    
    $count = mysqli_num_rows($result);
    

    if($count == 0){
        echo 'Restaurant is not in the database!';
    }else{        
        while($row = mysqli_fetch_assoc($result)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['RID'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Location'] . "</td>";
            echo "<td><input type=hidden name= hidden value =" . $row['RID'] . "></td>";
            echo "<td><input type=submit name=delete value=delete></td>";
//            echo "<td> <button type='submit' class='btn btn-primary'>Delete</button></td>";
            echo "</tr>";
            echo "</tbody>";

        }
    }
}

if(isset($_POST['delete'])){
    $restId = $_POST['hidden'];    
    
    $deleteQuery = "DELETE FROM Restaurant WHERE RID = '$restId'";
    
    mysqli_query($db, $deleteQuery) or die("Could not search");

}

CloseCon($db);

?>