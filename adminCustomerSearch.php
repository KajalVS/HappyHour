<?php 
include_once 'db_connection.php'; 
$db = OpenCon();
$count = '';

//CUSTOMER SEARCH
if(isset($_POST['customerSearchButton'])){
    $userID = mysqli_real_escape_string($db, $_POST['CustomerID']);
    $userName = mysqli_real_escape_string($db, $_POST['CustomerLastName']);
    $userType = mysqli_real_escape_string($db, $_POST['CustomerType']);

    
    $query = "SELECT * FROM RegisteredUser WHERE UID LIKE '%$userID%' AND LastName LIKE '%$userName%' AND Type LIKE '%$userType%'";
                
    $result = mysqli_query($db, $query) or die("Could not search");
    $count = mysqli_num_rows($result);
    
    if($count == 0){
        echo 'Customer is not in the database!';
    }else if($count>0){        
        while($row = mysqli_fetch_assoc($result)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['UID'] . "</td>";
            echo "<td>" . $row['FirstName'], " ", $row['LastName'] . "</td>";
            echo "<td><input type=hidden name= hidden value =" . $row['UID'] . "></td>";
            echo "<td><input type=submit name=delete value=delete></td>";
            echo "</tr>";
            echo "</tbody>";

        }
    }
}

if(isset($_POST['delete'])){
    $custId = $_POST['hidden'];    
    
    $deleteQuery = "DELETE FROM RegisteredUser WHERE UID = '$custId'";
    
    mysqli_query($db, $deleteQuery) or die("Could not search");

}

CloseCon($db);

?>

