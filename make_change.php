<?php

    include "make_change_logic.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_chat_hosp.css">
    <title>Update</title>
</head>
<body>
        
                    <form method="POST">
                        <div class="relative sm:mb-0 flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-400">Enter the ID</label>
                            <input type="text" id="" name="searchID" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">       
                        </div>
                            <p>
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="text" class="leading-7 text-sm text-gray-400">Name for Registration</label>
                                <input type="text" id="email" name="new_NameforRegistration" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            </div>
                            <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-end sm:space-x-4 sm:space-y-0 space-y-4">
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="full-name" class="leading-7 text-sm text-gray-400">Cause of Admission</label>
                                <select name="new_causeofadmit" id="" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <option value="Symptomatic Corona" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> Symptomatic Corona</option>
                                    <option value="Asymptomatic Corona" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">Asymptomatic Corona</option>
                                </select>
                            </div>
                            <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-end sm:space-x-4 sm:space-y-0 space-y-4">
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="full-name" class="leading-7 text-sm text-gray-400">Admit date</label>
                                <input type="date" id="full-name" name="new_Admit_date" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <p>
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="full-name" class="leading-7 text-sm text-gray-400">Discharge date</label>
                                <input type="date" id="full-name" name="new_Discharge_date" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            </p>
                            <p>
                            <button name="new_update" type="Submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Update</button>
                            </p>
                    </form>
                
                
</body>
</html> 
</body>
</html>