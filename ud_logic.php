<?php


    $conn = mysqli_connect("localhost", "root", "", "hospital");

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }   

    if(isset($_REQUEST['to_delete'])){
        $to_delete_id=$_REQUEST['id_ud'];
        $sql="DELETE FROM citizens WHERE CID='$to_delete_id'";
        $query=mysqli_query($conn,$sql);

    }
    if(isset($_REQUEST['to_update'])){
        $to_update_id=$_REQUEST['id_ud'];
        $sql="DELETE FROM citizens WHERE CID='$to_update_id'";
        $query=mysqli_query($conn,$sql);
    }

?>