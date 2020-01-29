<?php
    
    include 'db_connection.php' ;
    session_start();
    
    $errors = array();
    
    $db = OpenCon();
    
    
    if(isset($_GET['item']))
    {
        $restID = $_GET['item'];
        
        $restName = "SELECT Name, Location FROM Restaurant WHERE '$restID' = RID";
        $restResults =mysqli_query($db, $restName);
        echo $restName;
        echo "<h4 class='text-center card-title'>";
        
        while($row = mysqli_fetch_assoc($restResults)){
            echo $row['Name'];
        }
        echo "</h4>";
        
        CloseCon($db);
        
    }
?>
