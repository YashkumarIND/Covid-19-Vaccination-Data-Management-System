<?php
    include "hospital_login_logic.php";

    
    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }

    
    if (isset($_SESSION['hospital_name'])){

        $receiver=$_SESSION['hospital_name'];
        $sql_message_receive = "SELECT * FROM message WHERE (receiver_id='$receiver' AND sender_id='Organization') OR (receiver_id='Organization' AND sender_id='$receiver')";
        $result= mysqli_query($conn,$sql_message_receive);
        // $sql_reply="SELECT * FROM message WHERE sender_id='$receiver'";
        // $reply=mysqli_query($conn,$sql_reply);

    }
    



?>