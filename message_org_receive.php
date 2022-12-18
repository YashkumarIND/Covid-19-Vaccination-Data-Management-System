<?php

    include "message_receive.php";
    echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
        <link rel="stylesheet" href="message_htp.css" >
        <title>Document</title>
    </head>
    <body>
    <!-- <section class="text-gray-400 bg-gray-900 body-font overflow-hidden md:flex">
        <div class="card">
            <div class="container px-5 py-24 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-800">
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                    <span class="font-semibold title-font text-white"><?php ; ?></span>
                    <span class="mt-1 text-gray-500 text-sm">Date of Sending</span>
                </div>
                <div class="md:flex-grow">
                    <h2 class="text-2xl font-medium text-white title-font mb-2">Title of message</h2>
                    <p class="leading-relaxed">Message</p>
                    <a class="text-indigo-400 inline-flex items-center mt-4" href="send_message.php">Reply
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section> -->
    <?php foreach($result as $r){?>
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 self: left">
        <div class="overflow-hidden shadow-md text-gray-100">
            <!-- card header -->
            <div class="px-6 py-4 bg-gray-800 border-b border-gray-600 font-bold uppercase">
            <?php echo sender_id;?>
            </div>

            <!-- card body -->
            <div class="p-6 bg-gray-800 border-b border-gray-600">
                <!-- content goes here -->
                <?php echo query;?>
            </div>

            <!-- card footer -->
            <div class="p-6 bg-gray-800 border-gray-200 text-right">
                <!-- button link -->
                <a class="bg-blue-500 shadow-md text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-blue-400 rounded uppercase" 
                    href="#">Reply</a>
            </div>
                </div>
        </div>
    <?php }?>
    </body>
</html>
