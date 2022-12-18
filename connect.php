<?php
    

    session_start();
    $conn = mysqli_connect("localhost", "root", "","organization");
   

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    }

    
  
    
    if (isset($_POST['enter-in'])) {
        $Id= $_POST['Id'];
        $password=$_POST['password'];
        $org_name = $_POST['org_name'];
        

        $sql_login = "INSERT INTO login (Id, password, org_name) VALUES ('Id', 'password', 'org_name')";
    
        $result = mysqli_query($conn, $sql_login);
            
        } else {
            echo "<script>alert('Woops! ID or Password is Wrong.')</script>";
        }
    }

?>
