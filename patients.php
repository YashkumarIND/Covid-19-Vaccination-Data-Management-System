<?php
    
    include "hospital_login_logic.php";
    $conn = mysqli_connect("localhost", "root", "", "hospital");

    // if(!$conn){
    //     echo "Connection not established!";
    // }else{
    //     echo "Connection established";
    // }   

    if(isset($_REQUEST["new_update"])){

        $patient_ID= $_REQUEST['CitizenID'];
        $name_of_patient= $_REQUEST['NameforRegistration'];
        $causeofadmit= $_REQUEST['causeofadmit'];
        $admit_date= $_REQUEST['Admit_date'];
        $discharge_date= $_REQUEST['Discharge_date'];
        $hospital_name=$_SESSION['hospital_name'];

        $sql_check_ID="SELECT CID FROM citizens WHERE CID=$patient_ID";
        $sql=mysqli_fetch_array(mysqli_query($conn,$sql_check_ID));


        // function id_check($patient_ID){
            
        //     if(empty($sql)){
        //         return True;
        //     }else{
        //         return False;
        //     }
            
        // }

        
        if (($admit_date < $discharge_date) && (!empty($sql))){

            $sql_patient = "INSERT INTO patients(patientID, Name_of_patient, Cause_of_admission, admit_date, discharge_date,hospital_name) VALUES('$patient_ID', '$name_of_patient', '$causeofadmit', '$admit_date',
            '$discharge_date','$hospital_name')"; 

            mysqli_query($conn,$sql_patient);

        }else{
            echo "<script>alert('Woops! Discharge Date is before Admit Date.')</script>";
        }
        
        

    }

    
    
?>
