<?php

    include "mydetails_logic.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_hospital_homepage.css">
    <title>Certificate</title>
</head>
<body>
    <div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
    <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
        <span style="font-size:50px; font-weight:bold">Certificate of Vaccination</span>
        <br><br>
        <?php foreach($result as $r){?>
            <span style="font-size:25px"><i>This is to certify that</i></span>
            <br><br>
            <span style="font-size:30px"><b><?php echo $r['vacc_citizen_ID'];?></b></span><br/><br/>
            <span style="font-size:25px"><i>has been vaccinated successfully</i></span> <br/><br/>
            <span style="font-size:30px"><br/><?php echo $r['hospital'];?><br/></span>
            <span style="font-size:20px">under guidance of <b>AKURDI COVID CELL</b></span> <br/><br/><br/><br/>
            <span style="font-size:25px"><i><?php echo $r['Date_of_vaccination'];?></i></span><br>
        <?php }?>
    </div>
    </div>
    <a href="citizens_homepage.php">
        <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Download</button>
    </a>
</body>
</html>
