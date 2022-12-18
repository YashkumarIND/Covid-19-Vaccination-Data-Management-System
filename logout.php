<?php 


    
    if(isset($_REQUEST['logout_user'])){
        session_destroy();
        header("Location: user_login.php");

    }
    if(isset($_REQUEST['logout_org'])){
        session_destroy();
        header("Location: org.php");

    }
    if(isset($_REQUEST['logout_hospital'])){
        session_destroy();
        header("Location: hospital_login.php");

    }
    
    
    
    

?>