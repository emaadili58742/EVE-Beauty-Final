<?php
require_once '../controllers/SliderController.php';

$slider = new sliderController;
if(isset($_POST['submit'])){
    $slider->insertSlider($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Slider</title>
    <link rel="icon" href="images/icon1.png">
    <link rel="stylesheet" href="../css/create.css">
</head>
<body>
<div class="container">
<div class="title">Krijoni Slider</div>
    <form class= "form" method="POST">
 
        <span class="details"> Image: </span>
        <input type="file" name="image">
        <br> <br>
        <div class="input-box">
        <span class="details"> Title: </span>
        <input type="text" name="title" id="title">
        </div>
        <br>
        <div class="input-box">
     <span class="details"> Body: </span>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        <br>
        </div>
     <div class="input-box">
        <span class="details"> Category: </span>
        <input type="text" name="category">
     </div>
        <input type="submit" name="submit" id="button" value="Save">
    </form>
</div>


</body>
</html>