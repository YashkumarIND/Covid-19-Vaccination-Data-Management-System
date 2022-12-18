<?php
    
    include "hospital_login_logic.php";
    $conn = mysqli_connect("localhost", "root", "", "hospital");

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }   

    if(isset($_REQUEST["new_update"])){

        $VID= $_REQUEST['VCitizenID'];
        $cost= $_REQUEST['cost'];
        $causeofadmit= $_REQUEST['causeofadmit'];
        $vaccination_date= $_REQUEST['vacc_date'];
        $hospital_name=$_SESSION['hospital_name'];

        $sql_check_ID="SELECT CID FROM citizens WHERE CID='$VID'";
        $sql=mysqli_fetch_array(mysqli_query($conn,$sql_check_ID));
        
        if (!empty($sql)){

            $sql_vaccine = "INSERT INTO vaccinated(vacc_citizen_ID, Date_of_vaccination, past_status, cost, hospital) VALUES('$VID', '$vaccination_date', '$causeofadmit', '$cost' ,'$hospital_name')";

            mysqli_query($conn,$sql_vaccine);

        }else{
            echo "<script>alert('Woops! No such citizen in your region!.')</script>";
        }

        
        // header("Location: index.php?info=added");

    }

    

    
?>
