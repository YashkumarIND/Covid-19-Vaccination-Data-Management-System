<?php


    include "hospital_login_logic.php";
    $conn = mysqli_connect("localhost", "root", "", "hospital");


    if (isset($_REQUEST['to_find']) OR isset($_REQUEST['make_change'])){

        $to_search=$conn->escape_string($_REQUEST['to_search']);


        $search_query=$conn->query("SELECT * FROM vaccinated WHERE  hospital='{$_SESSION['hospital_name']}' AND (vacc_citizen_ID = '$to_search' OR past_status LIKE '$to_search%' OR Date_of_vaccination='$to_search')");



        if($search_query->num_rows){
            while($r=$search_query->fetch_object()){?>
    
            <?php
                
            }
        }
        
        }

        
    
            

        

        
?>
