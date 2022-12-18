<?php 
    
    include "hospital_login_logic.php";
    $conn = mysqli_connect("localhost", "root", "", "hospital");

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }   

    
    $sql="SELECT * FROM vaccinated WHERE hospital ='{$_SESSION['hospital_name']}'";
    $query= mysqli_query($conn, $sql);

    $sql_count="SELECT COUNT(vacc_citizen_ID) FROM vaccinated WHERE hospital ='{$_SESSION['hospital_name']}'";
    $query_count=mysqli_query($conn,$sql_count);
    $counts = mysqli_fetch_array($query_count);


?>