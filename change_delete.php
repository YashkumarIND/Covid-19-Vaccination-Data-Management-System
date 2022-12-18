<?php
    
    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }

    if(isset($_REQUEST["delete"])){

        $new_patient_ID= $_REQUEST['todelete_CitizenID'];
        
        
        $new_sql_patient_todelete = "DELETE FROM  patients  WHERE patientID='$new_patient_ID'";

        // $sql_vaccine = "INSERT INTO vaccinated(vacc_citizen_ID, Date_of_vaccination, past_status, cost, hospital) VALUES('$patient_ID', '$discharge_date', '$causeofadmit', 'equal to bill' ,'Akurdi Clinic')";

        mysqli_query($conn,$new_sql_patient_todelete);
        // mysqli_query($conn,$sql_vaccine);
        header("Location: patients_list.php?info=deleted");

    }

?>