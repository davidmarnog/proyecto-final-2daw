<?php 
    session_start();
    if($_SESSION['user']){	
        session_destroy();
        header("location:../view/signin.php");
    }
    else{
        header("location:../view/signin.php");
    }
?>