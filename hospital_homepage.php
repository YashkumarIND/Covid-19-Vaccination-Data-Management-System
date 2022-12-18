<?php 

    include "hospital_login_logic.php";
    include "logout.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_hospital_homepage.css">
    <title>Hospital Homepage</title>
</head>
<body>
<section class="text-gray-400 body-font bg-gray-900 md:flex">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-xs text-indigo-400 tracking-widest font-medium title-font mb-1">Hospital Management</h2>
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Welcome <?php echo $_SESSION['hospital_name']; ?></h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
      <section class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">Patients</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Update Patients List</h1>
          <p class="leading-relaxed mb-3">Insert, Delete and Update the details of patients</p>
          
          <a class="text-indigo-400 inline-flex items-center" href="patients2.php">Enter-In
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          
        </div>
      </div>
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">Vaccination</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Update Vaccination Details</h1>
          <p class="leading-relaxed mb-3">Insert, Delete and Update the details about vaccination.</p>
          <a class="text-indigo-400 inline-flex items-center"href="vaccination.php">Enter-In
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          
        </div>
      </div>
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">Chat</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Seek the Concern Authority</h1>
          <p class="leading-relaxed mb-3">Make easy, digital access to the officials and authority</p>
          <a class="text-indigo-400 inline-flex items-center" href="message_list.php">Enter-In
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
            </span>
          </div>
        </div>
      </div>
      <a href="change_password_hosp.php"><button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Change Password</button></a>
      <form method="POST">
      <button type="Submit" name="logout_hospital" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Logout</button>
      </form>
    </div>
  </div>
</div>

</section>
</body>
</html>

