<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Query</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="card">
        <div class="wrapper">
            <h2>Query</h2>
                <form action="query.php" method="POST">
                    <div class="form-group">
                        <label>Id : </label>
                        <input type="text" name="receiver_id" class="form-control">
                    </div>    
                    <div class="form-group">
                        <label>Type_Query : </label>
                        <textarea name="query" id="" cols="41" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Send">
                    </div>
                </form>
        </div>
        
    </div>    
</body>
</html>

<?php

$receiver_id = $_POST['receiver_id'];
$Text_Query = $_POST['query'];

$con = mysqli_connect('localhost','root','','query');
if ($con->connect_error) {
    die('Connection failed :'.$conn -> connect_error);
}
else{
    $INSERT= "INSERT INTO queries('receiver_id','Query') VALUES ($receiver_id, $Text_Query)";
}
$stmt = $conn -> $_POST("$INSERT");
$stmt = mysqli_stmt_bind_param("is",$receiver_id,$Text_Query);

?>

