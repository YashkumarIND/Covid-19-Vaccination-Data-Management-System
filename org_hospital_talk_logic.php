<?php
    
    session_start();
    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }

    
    $sql_message = "SELECT Hospital_name FROM login_hospital";
    $result= mysqli_query($conn,$sql_message);
    

    
    if (isset($_REQUEST['connect'])){

        $hospital=$_REQUEST['hospital'];
        $sql_message_receive = "SELECT * FROM message WHERE (sender_id='$hospital' AND receiver_id='Organization') OR (sender_id='Organization' AND receiver_id='$hospital') ORDER BY Time";
        $reply=mysqli_query($conn,$sql_message_receive);
        $_SESSION['hospital']=$hospital;
        
        
   
    }


    if(isset($_REQUEST['send']) && isset($_SESSION)){


        $message= $_REQUEST['Message'];

        $sql_message = "INSERT INTO message(sender_id, receiver_id, query) VALUES('Organization','{$_SESSION['hospital']}','$message')"; 


        $result=mysqli_query($conn,$sql_message);
        header("Location: org_hospital_talk.php");
        
        
    }

    $citizens_chat="SELECT DISTINCT sender FROM message_citizens WHERE sender!='Organization'";
    $citizens=mysqli_query($conn,$citizens_chat);

    
    if (isset($_REQUEST['c_connect'])){

        $citizen=$_REQUEST['citizen'];
        $sql_message_receive = "SELECT * FROM message_citizens WHERE (sender='$citizen' AND receiver='Organization') OR (sender='Organization' AND receiver='$citizen') ORDER BY Time";
        $reply=mysqli_query($conn,$sql_message_receive);
        $_SESSION['citizen']=$citizen;
   
    }


    if(isset($_REQUEST['c_send']) && isset($_SESSION)){


        $message= $_REQUEST['c_Message'];
        
        $sql_message = "INSERT INTO message_citizens(sender, receiver, message) VALUES('Organization','{$_SESSION['citizen']}','$message')"; 

        $result=mysqli_query($conn,$sql_message);
        header("Location: org_citizens_talk.php");

        
    }

    
    
?> 