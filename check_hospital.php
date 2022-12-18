<?php

    include "check_hospital_logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_patients.css">
    <title>Hospitals View List</title>
</head>
<body>
<section class="text-gray-400 body-font">
  <div class="row">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Hospitals Data</h1>
      <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
          <a class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"><?php echo $counts[0];?></a>
      </div>
    </div>

    <div class="card">
      <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <table class="table-auto w-full text-left whitespace-no-wrap">
          <thead>
            <tr>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">Hospital Name</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Address</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">City</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($query as $q){?>
              <tr>
                  <td class="px-4 py-3 text-lg text-white" ><?php echo $q['Hospital_name'];?></td>
                  <td class="px-4 py-3 text-lg text-white" ><?php echo $q['address_hospital'];?></td>
                  <td class="px-4 py-3 text-lg text-white" ><?php echo $q['city_hospital'];?></td>   
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
