<?php
    

    session_start();
    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }

    
  
    
    if (isset($_POST['enter-in'])) {
        $name_of_hospital= $_POST['hospital_name'];
        $Doc_ID=$_POST['Doc_ID'];
        $password = $_POST['password'];
        

        $sql_login = "SELECT * FROM login_hospital WHERE  Hospital_name = '$name_of_hospital' and Doc_ID ='$Doc_ID' and Password = '$password'";
    
        $result = mysqli_query($conn, $sql_login);
        if ($result==true && $result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['hospital_name'] = $name_of_hospital;
            header("Location: hospital_homepage.php");
            
        } else {
            echo "<script>alert('Woops! ID or Password is Wrong.')</script>";
        }
    }

?>
