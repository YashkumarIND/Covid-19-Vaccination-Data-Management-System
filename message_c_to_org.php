<?php

    include "message_c_to_org_logic.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_chat_hosp.css"> 
    <title>Message Page</title>
</head>
<body>
    <div class="sidenav">
        <a href="citizens_homepage.php" class="text-gray-100"><h1>Go to Previous Page</h1></a>
        <p></p>
    </div>
    <a href="send_c_message.php"><button name="message" type="Submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" href="send_message.php">Message</button></a>
    
        <div class="container">
            <?php foreach($result as $r){?>
                <div class="max-w-xs rounded overflow-hidden shadow-lg my-10 self-center">
                    <div class="px-6 py-4">
                        <div class="font-bold text-s mb-2 text-gray-100"><?php echo $r['sender'];?></div>
                        <div class="text-gray-100 text-xs"><?php echo $r['Time'];?></div>
                        <p class="text-grey-darker text-xl font-bold text-base text-gray-100">
                        <?php echo $r['message'];?>
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        <!-- &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <span class=" text-gray-100 inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2"><a href="send_message.php">Reply</a></span>   -->
                    </div>
                </div>
            <?php }?>
        </div>
        
    
    
</body>
</html>