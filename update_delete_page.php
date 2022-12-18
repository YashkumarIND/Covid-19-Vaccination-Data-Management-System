<?php

    include "ud_logic.php";
    
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_hospital_login.css">
    <title>Update Form</title>
</head>
<body>
<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Make Change</h1>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <form method="POST">
            <div class="p-2 w-1/2">
            <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">Citizen ID</label>
                <input type="text" id="name" name="id_ud" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            </div>
            <div class="p-2 w-full">
            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="to_delete">Delete</button>
            </div>
            <div class="p-2 w-full">
            <a href="update.php">
                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Update</button>
            </a>
            </div>
        </form>
        
            
            
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>