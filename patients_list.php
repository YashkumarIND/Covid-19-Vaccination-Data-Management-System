<?php

    include "patients_list_logic.php";
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_patients.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/bootstrap-datapicker/1.6.4/js/bootstrap-datapicker.js"></script> -->
    <title>Patients View List</title>
</head>
<body>
<section class="text-gray-400 body-font">
  <div class="row">
    <!-- <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
          <a href="change_patients.php" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Make Change</a>
    </div> -->
     
    <form method="POST" action="patients_search_page.php"> 
      <div class="p-8">
        <div class="bg-white flex items-center rounded-full shadow-xl">
          <input name="to_search" class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Search" required>
      
          <div class="p-4">
            <button name="to_find" class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">
              find
            </button>
          </div>
        </div>




      </div>

      <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
          <a class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" href="make_change.php">Make Change</a>
      </div>
    </form>
    </div>
  </div>

  

    
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Patients Data</h1>
      <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
          <a class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"><?php echo $counts[0];?></a>
      </div>
    </div>

    <div class="card">
      <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <table class="table-auto w-full text-left whitespace-no-wrap">
          <thead>
            <tr>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">PatientID</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Name of Patient</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Cause of Admission</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Admit Date</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Discharge Date</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($query as $q){?>
              <tr>
                  <td class="px-4 py-3 text-lg text-white" ><?php echo $q['patientID'];?></td>
                  <td class="px-4 py-3 text-lg text-white" ><?php echo $q['Name_of_patient'];?></td>
                  <td class="px-4 py-3 text-lg text-white" ><?php echo $q['Cause_of_admission'];?></td>
                  <td class="px-4 py-3 text-lg text-white" ><?php echo $q['admit_date'];?></td>
                  <td class="px-4 py-3 text-lg text-white" ><?php echo $q['discharge_date'];?></td>
                  <form method="POST">
                  <input type="text" name="patientID" value="<?php echo $q['patientID'];?>"hidden>
                  <td><button name="to_delete">
                    Delete
                    </button></td>
                  </form>       
              </tr>
          <?php }?>
          </tbody>
        </table>
      </div>
    </div>
    
  </div>
</section>


</body>
</html>
