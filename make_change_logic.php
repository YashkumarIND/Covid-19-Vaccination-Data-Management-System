<?php


    include "hospital_login_logic.php";
    // include "patients_list_logic.php";
    $conn = mysqli_connect("localhost", "root", "", "hospital");

    // if(!$conn){
    //     echo "Connection not established!";
    // }else{
    //     echo "Connection established";
    // }   

    // if(isset($_REQUEST['delete'])){

    //     $inputID=$_REQUEST['searchID'];
    //     $sql="DELETE FROM patients WHERE hospital_name ='{$_SESSION['hospital_name']}' AND patientID=$inputID";
    //     $query= mysqli_query($conn, $sql);

    // }
    
    if(isset($_REQUEST['new_update'])){
            $inputID=$_REQUEST['searchID'];
            $new_name_of_patient= $_REQUEST['new_NameforRegistration'];
            $new_causeofadmit= $_REQUEST['new_causeofadmit'];
            $new_admit_date= $_REQUEST['new_Admit_date'];
            $new_discharge_date= $_REQUEST['new_Discharge_date'];
            $hospital_name=$_SESSION['hospital_name'];
    
            if($new_discharge_date < $new_admit_date){
                echo "<script>alert('Woops! Discharge Date is before Admit Date.')</script>";
            }else{
                $new_sql_patient = "UPDATE  patients  SET  Name_of_patient='$new_name_of_patient', Cause_of_admission='$new_causeofadmit', admit_date='$new_admit_date', discharge_date='$new_discharge_date' WHERE patientID='$inputID' AND hospital_name= '$hospital_name'";
                mysqli_query($conn,$new_sql_patient);
    
            }


        
    }
    
    
    if(isset($_REQUEST['new_delete'])){

        $inputID=$_REQUEST['vacc_searchID'];
        $sql="DELETE FROM vaccinated WHERE hospital ='{$_SESSION['hospital_name']}' AND vacc_citizen_ID=$inputID";
        $query= mysqli_query($conn, $sql);
    
    }


    if(isset($_REQUEST['new_update_vacc'])){

        $inputID=$_REQUEST['vacc_searchID'];
        $new_past_record= $_REQUEST['past_record'];
        $new_vacc_date= $_REQUEST['new_vacc_date'];
        $new_expense= $_REQUEST['expense'];
        $hospital_name=$_SESSION['hospital_name'];
        
        $new_sql_vacc = "UPDATE  vaccinated  SET Date_of_vaccination='$new_vacc_date', past_status='$new_past_record', cost='$new_expense'WHERE vacc_citizen_ID='$inputID' AND hospital= '$hospital_name'";
        mysqli_query($conn,$new_sql_vacc);
    
        
    }
    
        
?>
