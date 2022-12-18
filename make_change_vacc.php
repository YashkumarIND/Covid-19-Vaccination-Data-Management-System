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
    <link rel="stylesheet" href="design_patients.css">
    <title>Update</title>
</head>
<body>
                    <form method="POST">
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="full-name" class="leading-7 text-sm text-gray-400">Enter the ID</label>
                                <input type="text" id="" name="vacc_searchID" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">       
                            </div>
                            <p>
                            <button name="new_delete" type="Submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Delete</button>
                            </p>
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="full-name" class="leading-7 text-sm text-gray-400">Date_of_Vaccination</label>
                                <input type="date" id="full-name" name="new_vacc_date" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-end sm:space-x-4 sm:space-y-0 space-y-4">
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="full-name" class="leading-7 text-sm text-gray-400">Past Record</label>
                                <select name="past_record" id="" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <option value="Corona" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">Corona</option>
                                    <option value="had no Corona" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">had no Corona</option>
                                </select>
                            </div>
                            <p>
                            <label for="full-name" class="leading-7 text-sm text-gray-400">Expense</label>
                            <div class="relative sm:mb-0 flex-grow w-full">
                                <label for="text" class="leading-7 text-sm text-gray-400"></label>
                                <input type="text" id="email" name="expense" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            </div>
                            <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-end sm:space-x-4 sm:space-y-0 space-y-4">
                            
                            <p>
                            </p>
                            <p>
                            <button name="new_update_vacc" type="Submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Update</button>
                            </p>
                
                    </form>
</body>
</html> 
</body>
</html>