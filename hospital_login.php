<?php

    include "hospital_login_logic.php";
    
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_hospital_login.css">
    <title>Hospital Login Form</title>
</head>
<body>
<section class="text-gray-400 body-font self-center">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-white">Welcome to Hospital Management</h1>
      <p class="leading-relaxed mt-4">Maintain easy Database of Covid and easily share with Local Authority</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-white text-lg font-medium title-font mb-5">Login</h2>
      <form method="POST" action="" class="login">
        <div class="relative mb-4">
          <label for="full-name" class="leading-7 text-sm text-gray-400">Hospital Name</label>
          <input type="text" name="hospital_name" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
        </div>
        <div class="relative mb-4">
          <label for="text" class="leading-7 text-sm text-gray-400">Your ID</label>
          <input type="text" name="Doc_ID" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
        </div>
        <div class="relative mb-4">
          <label for="text" class="leading-7 text-sm text-gray-400">Your Password</label>
          <input type="text" name="password" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
        </div>
        <button type="Submit" name="enter-in" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg items-center">Enter-In</button>
        <p></p>
      </form>
    </div>
  </div>
</section>
</body>
</html>
