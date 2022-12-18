<?php
    
    include "user_login_logic.php";
    // include "";
    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    // if(!$conn){
    //     echo "Connection not established!";
    // }else{
    //     echo "Connection established";
    // }

    if(isset($_REQUEST["new_change"])&&(isset($_SESSION['hospital_name']))){

            $new_password= $_REQUEST['new_password'];
            $new_sql = "UPDATE  login_hospital  SET  Password='$new_password' WHERE hospital_name='{$_SESSION['hospital_name']}'";
            mysqli_query($conn,$new_sql);

    }
    if(isset($_REQUEST["change"])&&(isset($_SESSION['CID']))){
            $new_password= $_REQUEST['newpassword'];
            $new_sql = "UPDATE  login_users  SET  cpassword='$new_password' WHERE CID='{$_SESSION['CID']}'";
            mysqli_query($conn,$new_sql);
        
    }
    


?>