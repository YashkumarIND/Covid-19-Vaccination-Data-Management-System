<?php

    include "citizens_org_view.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="design_patients.css">
    <title>Citizens Search</title>
</head>
<body>

                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Data you searched for</h1>
                    </div>
                    <div class="card">
                        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">CitizenID</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Name of Person</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Age</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Address</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">City</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Gender</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Occupation</th>  
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($search_query as $q){?>
                                <tr>
                                    <td class="px-4 py-3 text-lg text-white"><?php echo $q['CID'];?></td>
                                    <td class="px-4 py-3 text-lg text-white"><?php echo $q['name'];?></td>
                                    <td class="px-4 py-3 text-lg text-white"><?php echo $q['age'];?></td>
                                    <td class="px-4 py-3 text-lg text-white"><?php echo $q['address'];?></td>
                                    <td class="w-10 text-center text-lg text-white"><?php echo $q['city'];?></td>
                                    <td class="px-4 py-3 text-lg text-white"><?php echo $q['Gender'];?></td>
                                    <td class="px-4 py-3 text-lg text-white"><?php echo $q['Occupation'];?></td>

                                </tr>
                                <?php }?>
                                </tbody> 
                            </table>
                        </div>
                    </div>
                </div>
    
</body>
</html>