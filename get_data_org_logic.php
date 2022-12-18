<?php

    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    // if(!$conn){
    //     echo "Connection not established!";
    // }else{
    //     echo "Connection established";
    // }


    $sql_count_1="SELECT COUNT(CID) FROM citizens";
    $query_count_1=mysqli_query($conn,$sql_count_1);
    $counts_1 = mysqli_fetch_array($query_count_1);

    $sql_count_2="SELECT COUNT(patientID) FROM patients";
    $query_count_2=mysqli_query($conn,$sql_count_2);
    $counts_2 = mysqli_fetch_array($query_count_2);

    $sql_count_3="SELECT COUNT(vacc_citizen_ID) FROM vaccinated";
    $query_count_3=mysqli_query($conn,$sql_count_3);
    $counts_3 = mysqli_fetch_array($query_count_3);


    $sql_count_4="SELECT COUNT(patientID) FROM vaccinated INNER JOIN patients ON vaccinated.vacc_citizen_ID = patients.patientID;";
    $query_count_4=mysqli_query($conn,$sql_count_4) ;
    $counts_4 = mysqli_fetch_array($query_count_4);


    $sql_count_5="SELECT COUNT(citizens.CID) FROM citizens INNER JOIN patients ON citizens.CID = patients.patientID WHERE citizens.age > 60;";
    $query_count_5=mysqli_query($conn,$sql_count_5);
    $counts_5 = mysqli_fetch_array($query_count_5);


    $sql_count_6="SELECT COUNT(citizens.CID) FROM citizens INNER JOIN patients ON citizens.CID = patients.patientID WHERE citizens.age BETWEEN 60 AND 35;";
    $query_count_6=mysqli_query($conn,$sql_count_6);
    $counts_6 = mysqli_fetch_array($query_count_6);

    $sql_count_7="SELECT COUNT(citizens.CID) FROM citizens INNER JOIN patients ON citizens.CID = patients.patientID WHERE citizens.age BETWEEN 18 AND 35;";
    $query_count_7=mysqli_query($conn,$sql_count_7);
    $counts_7 = mysqli_fetch_array($query_count_7);


    $sql_count_8="SELECT COUNT(citizens.CID) FROM citizens INNER JOIN patients ON citizens.CID = patients.patientID WHERE citizens.age < 18;";
    $query_count_8=mysqli_query($conn,$sql_count_8);
    $counts_8 = mysqli_fetch_array($query_count_8);

    // $sql_count_9="SELECT address FROM citizens,patients GROUP BY address HAVING COUNT(address) > 1 AND citizens.CID=patients.patientID; ";
    // $query_count_9=mysqli_query($conn,$sql_count_9);
    // $counts_9 = mysqli_fetch_array($query_count_9);


?>