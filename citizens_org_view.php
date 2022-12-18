<?php

    $conn = mysqli_connect("localhost", "root", "", "hospital");

    // if(!$conn){
    //     echo "Connection not established!";
    // }else{
    //     echo "Connection established";
    // }   

    $sql="SELECT * FROM citizens";
    $query= mysqli_query($conn, $sql);

    

    if (isset($_REQUEST['to_find'])){

        $to_search=$conn->escape_string($_REQUEST['to_search']);

        $search_query=$conn->query("SELECT * FROM citizens WHERE  CID = '$to_search' OR name LIKE'$to_search%' OR name LIKE '%$to_search' OR age='$to_search' OR address LIKE'$to_search%' OR city='$to_search' OR Gender='$to_search' OR Occupation LIKE'$to_search%'");

        if($search_query->num_rows){
            while($r=$search_query->fetch_object()){?>
                <!-- <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Citizens Data</h1>
                    </div>
                    <div class="card">
                        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">CitizenID</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Name of Person</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Date of Birth</th>
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
                                    <td class="px-4 py-3 text-lg text-white"><?php echo $q['dateofbirth'];?></td>
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
                </div> -->

                
            <?php
                
            }
        }
        
        }

    


?>