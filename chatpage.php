<?php

    include 'org_hospital_talk_logic.php';
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>
<body>

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