<?php 

    include('config/dblink.php');
    $collect = new DB();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>E-Learning</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="img/profile.png">

        
        
        <?php 
            if($url[1] == ''){
                echo "<link rel='stylesheet' href='css/bootstrap.css'>";
                echo "<link rel='stylesheet' href='css/style.css'>";
            }else{
                echo "<link rel='stylesheet' href='../css/bootstrap.css'>";
                echo "<link rel='stylesheet' href='../css/style.css'>";
            }
        ?>
    </head>
    <body>
