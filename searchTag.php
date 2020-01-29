<?php
    
    include_once 'db_connection.php';
    
    $errors = array();
    
    $db = OpenCon();
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    
    
    if(isset($_POST['TagSearchInput'])){
        $TagSearchInput =$_POST['TagSearchInput'];
        
        #$tags = "SELECT r.Name, r.RID FROM Restaurant as r, Tags as t, SpecialTags as st LIKE '$TagSearchInput' "
        
        $tag = "SELECT DISTINCT r.Name, r.RID FROM Restaurant as r, Tags as t, SpecialTags as st WHERE '$TagSearchInput' = t.tagName and t.tagID = st.TagID and st.RestaurantID=r.RID";
        
        $tagResults = mysqli_query($db, $tag);
        
        while($row = mysqli_fetch_assoc($tagResults)){
            echo "<li><a href='index.php?item=".$row['RID']."'>".$row['Name']."</a></li>";
        }
    }
    
    if(empty($_POST['TagSearchInput'])){
    
    $tag = "SELECT * FROM Restaurant";
    
    $tagResults = mysqli_query($db, $tag);
    
    while($row = mysqli_fetch_assoc($tagResults)){
        echo "<li><a href='index.php?item=".$row['RID']."'>".$row['Name']."</a></li>";
    }
    }
     
    
?>
