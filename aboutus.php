<?php require_once "./controllers/aboutController.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EVE Beauty</title>
        <link rel="icon" href="images/icon1.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
    
    </head>
    <body>
   <!-- header -->
   <?php   include "includes/header.php"; ?>


<div class="about">
 <?php
 $about=new AboutController;
 $about1=$about->readAbout();
 for($i=0 ; $i < count($about1);$i++){
     echo'
     <div class="inner-section">
        <h1>'.$about1[$i]['title'].'</h1>
        <p class="text">
           '.$about1[$i]['body'].'
        </p>';}
        ?>
        <div class="skills">
            <button onclick="document.location='contactus.php'"> Na Kontaktoni </button>
        </div>
    </div>

 
</div>

<!-- footer   -->
<?php   include "includes/footer.php"; ?>

<!-- footer  --> 

</body>
<script src="js/script.js"></script>
</html>
   