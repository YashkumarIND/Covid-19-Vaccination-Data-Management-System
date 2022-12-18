<?php


    $conn = mysqli_connect("localhost", "root", "", "hospital");

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }   

    $sql="SELECT * FROM login_hospital";
    $query= mysqli_query($conn, $sql);


    $sql_count="SELECT COUNT(Hospital_name) FROM login_hospital";
    $query_count=mysqli_query($conn,$sql_count);
    $counts = mysqli_fetch_array($query_count);


?>
