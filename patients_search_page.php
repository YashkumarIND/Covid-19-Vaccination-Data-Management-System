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
    <title>Patients Search</title>
</head>
<body>

    <div class="card">
       
            
        </form>
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
          <?php foreach($search_query as $sq){?>
              <tr>
                  <td class="px-4 py-3 text-lg text-white"><?php echo $sq['patientID'];?></td>
                  <td class="px-4 py-3 text-lg text-white"><?php echo $sq['Name_of_patient'];?></td>
                  <td class="px-4 py-3 text-lg text-white"><?php echo $sq['Cause_of_admission'];?></td>
                  <td class="px-4 py-3 text-lg text-white"><?php echo $sq['admit_date'];?></td>
                  <td class="px-4 py-3 text-lg text-white"><?php echo $sq['discharge_date'];?></td>       
              </tr> 
          <?php }?>
          </tbody>
        </table>
      </div>
    </div>
    
</body>
</html>