<?php

    include "citizens_login_logic.php";

    
    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }

    
    if (isset($_SESSION['CID'])){

        $receiver=$_SESSION['CID'];
        $sql_message_receive = "SELECT * FROM message_citizens WHERE receiver='$receiver'OR sender='$receiver' ORDER BY Time";
        $result= mysqli_query($conn,$sql_message_receive);
        

    }
    



?>