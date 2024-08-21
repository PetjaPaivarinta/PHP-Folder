<?php
        session_start();

        if ($_SESSION['userType'] !== 'admin') {
            header("Location: login.php");
            exit();
        } else {
            
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link rel="stylesheet" type="text/css" href="../RatingPHP_/Assets/main.css">
        <link rel="stylesheet" type="text/css" href="../RatingPHP_/Assets/toggle.css">
    </head>
    <body>
       
    <!-- toggle switch -->
    <label class="switch">
            <input type="checkbox" id="toggleSwitch">
            <span class="slider round"></span>
        </label>

        <div id="rateBox" class="loginBox">
        <h1 id="rate" class="loginH1">Admin Panel</h1>
        </div>

        <a href="login.php" class="logout">Logout</a>

        <?php
            $file = fopen("../RatingPHP_/ratings.txt", "r") or die("Unable to open file!");
            $ratings = fread($file, filesize("../RatingPHP_/ratings.txt")); 
            $ratings = explode(",", $ratings);
            
            fclose($file);
        ?>
        
        <script src="../RatingPHP_/Assets/JS/checkDark.js"></script>
    </body>