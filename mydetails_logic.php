<?php

    include "citizens_login_logic.php";

    
    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    // if(!$conn){
    //     echo "Connection not established!";
    // }else{
    //     echo "Connection established";
    // }

    
    if (isset($_SESSION['CID'])){

        $receiver=$_SESSION['CID'];
        $sql= "SELECT * FROM vaccinated WHERE vacc_citizen_ID='$receiver'";
        if(!empty($sql)){
            $result= mysqli_query($conn,$sql);
        }
        else{
            echo "<script>alert('Sorry! You are not vaccinated, yet.')</script>";
        }
        

    }
    



?>