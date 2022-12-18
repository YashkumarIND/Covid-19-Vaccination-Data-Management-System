<?php

    include "get_data_org_logic.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_hospital_homepage.css">
    <title>Get Numerical Data</title>
</head>
<body>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Data Digits For Akurdi</h1>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500"></p>
    </div>
    <div class="flex flex-wrap -m-4">
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Total Citizens</h2>
            <a class=""><?php echo $counts_1[0];?></a>
          </div>
            
            
          </div>
          
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Total Patients</h2>
            <a class=""><?php echo $counts_2[0];?></a>
          
            
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Total Vaccinated</h2>
            <a class=""><?php echo $counts_3[0];?></a>
            
            
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Patients Vaccinated</h2>
            <a class=""><?php echo $counts_4[0];?></a>
            
            
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Patients Above 60</h2>
            <a class=""><?php echo $counts_5[0];?></a>
            
            
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Patients - 35 to 60</h2>
            <a class=""><?php echo $counts_6[0];?></a>
            
          
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Patients - 18 to 35</h2>
            <a class=""><?php echo $counts_7[0];?></a>
            
            
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Patients - Below 18</h2>
            <a class=""><?php echo $counts_8[0];?></a>
            
          </div>
        </div>
        <!-- <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Active Region</h2>
            <a class=""><?php echo $counts_9[0];?></a>
            
            
          </div>
        </div> -->
    </div>
    <a href="organisation_homepage.php">
        <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Go Back</button>
    </a>
  </div>
</section>
</body>
</html>
