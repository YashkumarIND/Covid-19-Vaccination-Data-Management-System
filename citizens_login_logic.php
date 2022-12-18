<?php
    

    session_start();
    $conn = mysqli_connect("localhost", "root", "","hospital");
   

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }

    
  
    
    if (isset($_POST['enter-in'])) {
        
        $CID=$_POST['CID'];
        $cpassword = $_POST['cpassword'];
        

        $sql_login = "SELECT * FROM login_users WHERE  CID = '$CID' and cpassword ='$cpassword' ";
    
        $result = mysqli_query($conn, $sql_login);
        if ($result==true && $result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['CID'] = $CID;
            header("Location: citizen_homepage.php");
            
        } else {
            echo "<script>alert('Woops! ID or Password is Wrong.')</script>";
        }
    }

?>
