<?php
    
    $connect = mysqli_connect("localhost", "root", "", "hospital");

    if(!$connect){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }   

    if(isset($_REQUEST["new_message"])){

        $target_name= $_REQUEST['Receiver_Name'];
        $target_ID= $_REQUEST['Receiver_ID'];
        $message=$_REQUEST['Message'];
        

        $sql_message = "INSERT INTO message(sender_id, receiver_id, query) VALUES('$target_name','$target_ID', '$message')";
    
        mysqli_query($connect,$sql_message);
        header("Location: index.php?info=added");

    }
?>