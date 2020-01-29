
<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);

 // $dbhost = 'localhost';
 // $dbuser = 'root';
 // $dbpass = '';
 // $db = 'happy_hour';
 // $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 // echo "Connec succefuly";

 // $conn -> close();
 

?>