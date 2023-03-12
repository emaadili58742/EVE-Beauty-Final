<?php require_once 'controllers/userController.php'; 

    $insert = new User;
    if(isset($_POST['submit'])){
        $insert->insertUser($_POST);
    }
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EVE Beauty</title>
        <link rel="icon" href="images/icon1.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body >

    <!-- header -->
  <?php include "includes/header.php"?>
    <!-- header -->
    <!-- signup-form -->

<div class="container">
    <div class="title">Regjistrohuni ketu</div>
    <div class="content">
        <form action="" class="" onsubmit="return false">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Emri dhe Mbiemri</span>
                    <input type="text" placeholder="Enter your name" id="Name" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" id="Username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" id="Email" required>
                </div>
                <div class="input-box">
                    <span class="details">Numri i Telefonit</span>
                    <input type="text" placeholder="Enter your number" id="PhoneNumber" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" id="Password" required>
                </div>
                <div class="input-box">
                    <span class="details">Konfirmo Password</span>
                    <input type="password" placeholder="Confirm your password" id="cPassword" required>
                </div>
            </div>

            <div class="button">
                <input  type="submit" value="Regjistrohuni" onclick="nextForm();"></input>
            </div>
        </form>
    </div>
    
</div>
      
        
</body>
        
<script src="js/script.js"></script>
</html>

