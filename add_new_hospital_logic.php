<?php
    
    $conn = mysqli_connect("localhost", "root", "", "hospital");

    // if(!$conn){
    //     echo "Connection not established!";
    // }else{
    //     echo "Connection established";
    // }   

    if(isset($_REQUEST["new_hospital"])){

        $hospital_name= $_REQUEST['new_hospital_name'];
        $ID= $_REQUEST['id_given'];
        $password= $_REQUEST['password_given'];
        $address=$_REQUEST['address_hosp'];
        $city=$_REQUEST['city_hosp'];

        $sql_check_ID="SELECT * FROM login_hospital WHERE Hospital_name='$hospital_name' OR Doc_ID='$ID' OR Password='$password'";
        $sql=mysqli_fetch_array(mysqli_query($conn,$sql_check_ID));

        if(empty($sql)){
            $sql_new = "INSERT INTO login_hospital(Hospital_name, Doc_ID, Password,address_hospital,city_hospital) VALUES('$hospital_name', '$ID', '$password','$address','$city')"; 

            mysqli_query($conn,$sql_new);
        }

        
    }

    
    
?>
