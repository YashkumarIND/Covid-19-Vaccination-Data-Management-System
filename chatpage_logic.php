<?php
    
    
    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }

    
    if (isset($_REQUEST['connect'])){

        $hospital=$_REQUEST['hospital'];
        $sql_message_receive = "SELECT * FROM message WHERE  (sender_id='$hospital' AND receiver_id='Organization') OR (sender_id='Organization' AND receiver_id='$hospital') ";
        $reply=mysqli_query($conn,$sql_message_receive);
        header("Location: chatpage.php");

    }
    



?>