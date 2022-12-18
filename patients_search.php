<?php
    
    include "hospital_login_logic.php";
    $conn = mysqli_connect("localhost", "root", "", "hospital");

    if(!$conn){
        echo "Connection not established!";
    }else{
        echo "Connection established";
    } 
    
    if (isset($_REQUEST['to_find'])){

        $to_search=$conn->escape_string($_REQUEST['to_search']);

        $search_query=$conn->query("SELECT * FROM patients WHERE hospital_name='{$_SESSION['hospital_name']}'AND   (patientID = '$to_search' OR Name_of_patient='$to_search' OR Cause_of_admission='$to_search' OR admit_date='$to_search' OR discharge_date='$to_search' OR hospital_name='$to_search' OR Name_of_patient LIKE '$to_search%') ");

        if($search_query->num_rows){
            while($r=$search_query->fetch_object()){?>
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Patients Data</h1>
                    </div>
                    <div class="card">
                        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                     <tr>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">PatientID</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Name of Patient</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Cause of Admission</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Admit Date</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Discharge Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($search_query as $sq){?>
                                    <tr>
                                        <td class="px-4 py-3 text-lg text-white"><?php echo $sq['patientID'];?></td>
                                        <td class="px-4 py-3 text-lg text-white"><?php echo $sq['Name_of_patient'];?></td>
                                        <td class="px-4 py-3 text-lg text-white"><?php echo $sq['Cause_of_admission'];?></td>
                                        <td class="px-4 py-3 text-lg text-white"><?php echo $sq['admit_date'];?></td>
                                        <td class="w-10 text-center text-lg text-white"><?php echo $sq['discharge_date'];?></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                                </table>
                        </div>
                    </div>
                </div>

                
            <?php
                
            }
        }
        
        }
        
             

?>
