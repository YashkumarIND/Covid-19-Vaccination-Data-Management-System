<?php  
     $conn = mysqli_connect("localhost", "root", "", "hospital");  
 

     if(isset($_POST["patientID"])){
          $sql = "DELETE FROM patients WHERE patientID = '".$_POST["patientID"]."'"; 
          if(mysqli_query($conn, $sql))  
          {  
               echo 'Data Deleted';  
          }
     }


 ?>