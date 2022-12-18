<?php

    include "message_manage.php";
    echo "Connected successfully";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
        <link rel="stylesheet" href="message_htp.css" >
        <meta charset="UTF-8">
        <title>Message to Organization</title>
    </head>
    <body>
    <section class="text-gray-400 body-font">
    <form method="POST">
        <div class="container px-5 py-24 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            <p class="leading-relaxed text-lg"></p>
            <!-- <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span> -->
            <!-- <h2 class="text-white font-medium title-font tracking-wider text-sm">Receiver Name</h2> -->
            <label class="leading-7 text-sm text-gray-400">Receiver_Name</label>
            <input type="text" id="" name="Receiver_Name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            <label class="leading-7 text-sm text-gray-400">Receiver_ID</label>
            <input type="text" id="" name="Receiver_ID" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            <label class="leading-7 text-sm text-gray-400">Message</label>
            <textarea name="Message" id="" cols="15" rows="6" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"></textarea>
            <!-- <label class="leading-7 text-sm text-gray-400">Send Time
            <input type="time" name="time" datetime=YYYY-MM-DDThh:mm:ssTZD"> -->
            <p>
            <button name="new_message" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" href="message_htp.php">Send</button>
            </p>
            </div>
        </div>
    </form>
    </section>

  
        <!-- <div class = "form2">
          <form class = "message" method="GET">
              <p>Enter Target_ID: </p>
                  <input type = "text" name="target_ID">
              <p>Your message:</p>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
              <p><button class = "button2" name="new_message">
                  Send
              </button></p>
          </form>
        </div> -->
    </body>
</html>