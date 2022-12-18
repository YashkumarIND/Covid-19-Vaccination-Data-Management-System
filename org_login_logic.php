<?php
    

    session_start();
    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }

    
  
    
    if (isset($_POST['enter-in'])) {
        
        $OID=$_POST['OID'];
        $opassword = $_POST['opassword'];
        

        $sql_login = "SELECT * FROM login_organization WHERE  OID = '$OID' and opassword = '$opassword'";
    
        $result = mysqli_query($conn, $sql_login);
        if ($result==true && $result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION="Organization";
            header("Location:organisation_homepage.php");
            
        } else {
            echo "<script>alert('Woops! ID or Password is Wrong.')</script>";
        }
    }

?>
