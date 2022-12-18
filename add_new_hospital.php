<?php

    include "add_new_hospital_logic.php";

?>
<?php
    include "patients.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_patients.css">
    <title>Add Hospital Form</title>
</head>
<body>
    <div class="md:w-full">
                <div class="sidenav">
                    <p>
                    <a href="organisation_homepage.php" class="text-gray-100">Go to previous page</a>
                    </p>
                </div>
                <div class="container px-5 py-24 mx-auto w-full">
                    <div class="flex flex-col text-center w-full mb-12">
                    </div>
                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col grid-rows-2 mx-auto px-8 sm:px-0 items-end sm:space-x-4 sm:space-y-0 space-y-4">
                        <form method="POST">
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="" class="leading-7 text-sm text-gray-400">Hospital Name</label>
                                <input type="text" id="" name="new_hospital_name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="text" class="leading-7 text-sm text-gray-400">Assign Unique ID</label>
                                <input type="text" name="id_given" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="text" class="leading-7 text-sm text-gray-400">Assign Password</label>
                                <input type="text"  name="password_given" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="text" class="leading-7 text-sm text-gray-400">Address</label>
                                <input type="text"  name="address_hosp" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="text" class="leading-7 text-sm text-gray-400">City</label>
                                <input type="text"  name="city_hosp" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            </div>
                            <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-end sm:space-x-4 sm:space-y-0 space-y-4">
                            </p>
                            <p>
                            <button name="new_hospital" type="Submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Add Hospital</button>
                            </p>
                            <p>
                            </p>
                    </form>
                            <a href="check_hospital.php">
                                <button type="Submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Check Hospitals</button>
                            </a>
                </div>
    </div>
    
    
</body>
</html>