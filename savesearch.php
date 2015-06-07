<?php
    session_start();
    
    if(!isset($_SESSION['search'])){
        $_SESSION['search'] = "";
    }
    
    $search = $_SESSION['search'];
    
    $search = "TDD from 2010 to 2015";
    
    $_SESSION['search'] = $search;
    
    header("Location:searchform.php");
?>
