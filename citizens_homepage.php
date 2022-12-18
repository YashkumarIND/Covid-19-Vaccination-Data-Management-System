<?php

      include "logout.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_hospital_homepage.css">
    <title>Citizen Homepage</title>
</head>
<body>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Citizen Cell-Akurdi</h1>
      <h5 class="sm:text-s text-s font-medium title-font mb-2 text-gray-900">get details and ask queries</h5>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500"></p>
    </div>
    <div class="flex flex-wrap -m-4">

        <div class="xl:w-1/3 md:w-1/2 p-4">
            <div class="border border-gray-200 p-6 rounded-lg">
            
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">My Details</h2>
            <p class="leading-relaxed text-base">Check your details and seek your vaccination status</p>
            <a class="text-indigo-400 inline-flex items-center" href="mydetails.php">Enter-In
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
            </div>
      </div>
      
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Talk to Authority</h2>
          <p class="leading-relaxed text-base">Talk to the local Covid authority and get concerned help!</p>
          <a class="text-indigo-400 inline-flex items-center" href="message_c_to_org.php">Enter-In
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">News</h2>
          <p class="leading-relaxed text-base">Stay updated with National Covid-19 News. Check gross figures</p>
          <a class="text-indigo-400 inline-flex items-center" href="https://www.covid19india.org/">Enter-In
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <a href="change_password.php"><button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Change Password</button></a>
    <form method="POST">
    <button name="logout_user" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Logout</button>
    </form>
    
  </div>
</section>
</body>
</html>