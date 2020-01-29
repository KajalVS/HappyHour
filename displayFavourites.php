<?php 
include_once 'db_connection.php';
//include_once 'server.php';
$db = OpenCon();
$count = '';

//ADD FAVOURITES TABLE


$query = "SELECT * FROM Restaurant, CustomerAddsFavourite
 WHERE CustomerUID = '$_SESSION[id]' and FavouriteRID = RID";

$result = mysqli_query($db, $query) or die("Could not search");

$count = mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)){
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Location'] . "</td>";
    echo "<td><input type=hidden name= hidden value =" . $row['RID'] . "></td>";
    echo "<td><input type=submit name=delete value=delete></td>";

    echo "</tr>";
    echo "</tbody>";
}

if(isset($_POST['delete'])){
    $restId = $_POST['hidden'];    
    
    $deleteQuery = "DELETE FROM CustomerAddsFavourite WHERE FavouriteRID = '$restId'";
    
    mysqli_query($db, $deleteQuery) or die("Could not search");

}


CloseCon($db);

?>

