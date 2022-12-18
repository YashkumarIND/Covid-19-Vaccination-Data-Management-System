<?php

    $conn = mysqli_connect("localhost", "root", "", "hospital");

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }   

    $sql="SELECT * FROM vaccinated";
    $query= mysqli_query($conn, $sql);

    if (isset($_REQUEST['to_find'])){

        $to_search=$conn->escape_string($_REQUEST['to_search']);

        $search_query=$conn->query("SELECT CID,name,age,past_status,hospital,address FROM citizens,vaccinated WHERE  CID=vacc_citizen_ID AND (CID = '$to_search')");

        if($search_query->num_rows){
            while($r=$search_query->fetch_object()){?>
                
            <?php
                
            }
        }
        
        }




?>