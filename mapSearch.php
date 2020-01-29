<?php
    
    include_once 'db_connection.php';
    
    $errors = array();
    
    $db = OpenCon();
    
     if(isset($_GET['item']))
     {
         
         $restID = $_GET['item'];
         $restAddress = "SELECT Name, Location FROM Restaurant WHERE '$restID' = RID";
         $result = mysqli_query($db, $restAddress);
         
         
         $row = mysqli_fetch_array($result);

         
         $name = str_replace('&', 'and', $row['Name']);
         $name = str_replace(' ', '+', $name);
         $address = str_replace(' ', '+', $row['Location']);
         
         echo "<iframe allowfullscreen='' frameborder='0' src='https://www.google.com/maps/embed/v1/search?key=AIzaSyDlFm1j1a8OKDMqW0QnW-Q3fswddQGroLI&amp;q=$name$address&amp;zoom=15' width='100%' height='745'></iframe>";
         
         
         
     
         
        
         

         CloseCon($db);
     }
    
?>
