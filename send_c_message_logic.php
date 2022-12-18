<?php

    include "citizens_login_logic.php";
    
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }
    
    
    

    if(isset($_REQUEST['send']) && (isset($_SESSION['CID']))){

        $from=$_SESSION['CID'];
        // $to_send= $_REQUEST['Receiver_ID'];
        $message= $_REQUEST['Message'];

        // $username=mysqli_query($conn,$user);

        $sql_message = "INSERT INTO message_citizens(sender, receiver, message) VALUES('$from', 'Organization','$message')"; 


        $reply=mysqli_query($conn,$sql_message);
        
        header("Location: message_c_to_org.php");

    }

    // $sql="SELECT * FROM patients";
    // $query=mysqli_query($conn,$sql);

    
?>
