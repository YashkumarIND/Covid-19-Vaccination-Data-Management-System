<!-- <?php

    // include "patients.php";
    // echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="design.css">
        <title>
            Update Patients
        </title>
    </head>
    <body>
        <div class = "form1">
          <form class = "details" method="GET">
              <p>Enter Patient_ID: </p>
                  <input type = "text" name="patient_ID">
              <p>Enter Admit Date:</p>
              <p><input type="date" name="admit_date"></p>
              <p>Enter Discharge Date:</p>
              <p><input type="date" name="discharge_date"></p>
              <p>Current Status:</p>
              <select name="present_status" id="">
                <option value="Admit">Admit</option>
                <option value="Discharge">Discharge</option>
              </select>
              <p><button class = "button1" name="new_update">
                  Update
              </button></p>
          </form>
        </div>
        
        <!-- <?php foreach($query as $q){?>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <p class="card-Patient_ID"><?php  echo $q['patient_ID'] ?></p>
                        <p class="card-AdmitDate"><?php  echo $q['admit_date'] ?></p>
                        <p class="card-DischargeDate"><?php  echo $q['discharge_date'] ?></p> 
                        <p class="card-current_status"><?php  echo $q['present_status'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?> -->
        <!-- <div class="wrapper">
        <div class="sidebar">
            <div class="row">
                <img src="" alt="" height="50px" width="50px">
                <div class="col-md-2">
                    <h6 class="username">pratik.jh2017</h6>
                    <h6 class="email">@pratikjh2017</h6>
                </div>
            </div>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="#"><i class="fas fa-user"></i>My Posts</a></li>
                <li><a href="#"><i class="fas fa-address-card"></i>My Questions</a></li>
                <li><a href="#"><i class="fas fa-project-diagram"></i>My Bookmarks</a></li>
            </ul>
            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div></div> -->
        
    </body>
</html> -->