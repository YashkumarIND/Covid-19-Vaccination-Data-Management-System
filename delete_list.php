<?php

    include "change_delete.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_hospital_homepage.css">
    <title>Update</title>
</head>
<body>
    <div class="md:w-full">
                <div class="sidenav">
                    <a href="patients_list.php" class="text-gray-100"><h1>See All in Patient List</h1></a>
                    <p></p>
                    <p>
                    <a href="hospital_homepage.php" class="text-gray-100">Go to previous page</a>
                    </p>
                </div>
                <div class="container px-5 py-24 mx-auto w-full">
                    <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Welcome to Patient's Details  Form</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
                    </div>
                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-end sm:space-x-4 sm:space-y-0 space-y-4">
                        <form method="GET">
                                <div class="relative sm:mb-0 flex-grow w-full">
                                    <label for="" class="leading-7 text-sm text-gray-400">CitizenID (patient)</label>
                                    <input type="text" id="" name="todelete_CitizenID" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                    <button name="delete" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Delete</button>
                                </div>    
                        </form>
                </div>
    </div>
    
</body>
</html>