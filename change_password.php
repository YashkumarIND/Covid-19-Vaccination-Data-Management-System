<?php

    include "change_password_logic.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_hospital_homepage.css">
    <title>Change Password</title>
</head>
<body>
                    <form method="POST">
                        <div class="relative sm:mb-0 flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-400">Enter the New Password</label>
                            <input type="text" id="" name="newpassword" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">       
                        </div>
                            <p>
                            <button name="change" type="Submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Change</button>
                            </p>
                            <p>
                    </form>
</body>
</html> 
</body>
</html>