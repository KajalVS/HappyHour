<?php 
include_once 'db_connection.php'; 
$db = OpenCon();
$count = '';

//TAG SEARCH
if(isset($_POST['tagSearchButton'])){
    $tagID = mysqli_real_escape_string($db, $_POST['TagID']);
    $tagName = mysqli_real_escape_string($db, $_POST['TagName']);

    
    $query = "SELECT * FROM Tags WHERE TagID LIKE '%$tagID%' AND TagName LIKE '%$tagName%'";
    
    $result = mysqli_query($db, $query) or die("Could not search");
    
    $count = mysqli_num_rows($result);
    

    if($count == 0){
        echo 'Tag is not in the database!';
    }else{        
        while($row = mysqli_fetch_assoc($result)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['TagID'] . "</td>";
            echo "<td>" . $row['TagName'] . "</td>";
            echo "<td><input type=hidden name= hidden value =" . $row['TagID'] . "></td>";
            echo "<td><input type=submit name=delete value=delete></td>";
            echo "</tr>";
            echo "</tbody>";

        }
    }
}

if(isset($_POST['delete'])){
    $tagID = $_POST['hidden'];    
    
    $deleteQuery = "DELETE FROM Tags WHERE TagID = '$tagID'";
    
    mysqli_query($db, $deleteQuery) or die("Could not search");

}

CloseCon($db);

?>