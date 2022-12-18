<?php

    include "org_hospital_talk_logic.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
<link rel="stylesheet" href="design_chat_hosp.css"> 
<title>Chat Page</title>
</head>
<body>

        <form method="POST">

                <label for="" class="leading-7 text-sm text-gray-400">Message</label>
                <textarea name="Message" id="" cols="2" rows="2" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"></textarea>
                
                <p>
                <button name="send" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" href="">Send</button>
                </p>
    
        </form>
        

            
            
            <div class="container">
                <?php foreach($reply as $r){?>
                    
                    <div class="max-w-xs rounded overflow-hidden shadow-lg my-10 self-center">
                        <div class="px-6 py-4">
                            <div class="font-bold text-s mb-2 text-gray-100"><?php echo $r['sender_id'];?></div>
                            <p class="text-grey-darker text-base text-gray-100">
                            <?php echo $r['query'];?>
                            </p>
                        </div> 
                    </div>
                <?php }?>
            </div>


    

</body>
</html> 
</body>
</html>