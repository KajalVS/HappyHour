<?php
    
    include_once 'db_connection.php';
    
    $errors = array();
    
    $db = OpenCon();
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    

    if(isset($_GET['button-like']))
    {
        echo "hi";

    }
    
?>
