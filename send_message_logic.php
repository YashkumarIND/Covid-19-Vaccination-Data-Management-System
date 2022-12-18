<?php

    include "hospital_login_logic.php";
    
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }
    
    
    

    if(isset($_REQUEST['send']) && (isset($_SESSION['hospital_name']))){

        $from=$_SESSION['hospital_name'];
        // $to_send= $_REQUEST['Receiver_ID'];
        $message= $_REQUEST['Message'];

        $sql_message = "INSERT INTO message(sender_id, receiver_id, query) VALUES('$from', 'Organization','$message')"; 


        $reply=mysqli_query($conn,$sql_message);
        
        header("Location: message_list.php");

    }

    // $sql="SELECT * FROM patients";
    // $query=mysqli_query($conn,$sql);

    
?>
