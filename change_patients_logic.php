<?php
    
    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }

    if(isset($_REQUEST["update"])){

        $new_patient_ID= $_REQUEST['newCitizenID'];
        $new_name_of_patient= $_REQUEST['newNameforRegistration'];
        $new_causeofadmit= $_REQUEST['newcauseofadmit'];
        $new_admit_date= $_REQUEST['newAdmit_date'];
        $new_discharge_date= $_REQUEST['newDischarge_date'];
        $hospital_name=$_SESSION['hospital_name'];

        if($new_discharge_date < $new_admit_date){
            echo "<script>alert('Woops! Discharge Date is before Admit Date.')</script>";
        }else{
            $new_sql_patient = "UPDATE  patients  SET  Name_of_patient='$new_name_of_patient', Cause_of_admission='$new_causeofadmit', admit_date='$new_admit_date', discharge_date='$new_discharge_date' WHERE patientID='$new_patient_ID' AND hospital_name= '$hospital_name'";
            mysqli_query($conn,$new_sql_patient);

        }
        
        

        // $sql_vaccine = "INSERT INTO vaccinated(vacc_citizen_ID, Date_of_vaccination, past_status, cost, hospital) VALUES('$patient_ID', '$discharge_date', '$causeofadmit', 'equal to bill' ,'Akurdi Clinic')";

       
        // mysqli_query($conn,$sql_vaccine);
        // header("Location: index.php?info=updated");

    }

    

?>

