<?php

    session_start();
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
    <title>Organization Homepage</title>
</head>
<body>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Akurdi Covid Cell</h1>
      <h5 class="sm:text-s text-s font-medium title-font mb-2 text-gray-900">Easy and Safe Manage</h5>
      <!-- <a href="get_data_org.php"><h5 class="sm:text-s text-s font-medium title-font mb-2 text-green-900">Data Insights</h5></a> -->
      <a class="text-indigo-400 inline-flex items-center" href="get_data_org.php">Data Insights
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500"></p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Citizens Details</h2>
          <p class="leading-relaxed text-base">Check list of citizens in your area and view their legal information.</p>
          <a class="text-indigo-400 inline-flex items-center" href="citizens_view.php">Enter-In
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Patients Details</h2>
          <p class="leading-relaxed text-base">Check list of patients in your area and view their covid information.</p>
          <a class="text-indigo-400 inline-flex items-center" href="patients_org_view.php">Enter-In
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Vaccination Details</h2>
          <p class="leading-relaxed text-base">Check the status of Vaccination drive and expenses.</p>
          <a class="text-indigo-400 inline-flex items-center" href="vaccination_org_view.php">Enter-In
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Talk to Hospitals</h2>
          <p class="leading-relaxed text-base">Talk to the local Covid clinics and take ground reports.</p>
          <a class="text-indigo-400 inline-flex items-center" href="org_hospital_talk.php">Enter-In
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg">
          
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Talk to patients/Citizens</h2>
          <p class="leading-relaxed text-base">Chat with the Citizens and hear their queries. Reply your part as well.</p>
          <a class="text-indigo-400 inline-flex items-center" href="org_citizens_talk.php">Enter-In
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
    <a href="add_new_hospital.php"><button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Get Hospital</button></a>
    <form method="POST">
    <button name="logout_org" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Logout</button>
    </form>
  </div>
</section>
</body>
</html>