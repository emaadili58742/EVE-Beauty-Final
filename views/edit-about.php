<?php
include_once '../controllers/aboutController.php';
if (isset($_GET['id'])){
    $aboutID=$_GET['id'];
}
$about= new AboutController;
$currentAbout= $about->editabout($aboutID);
if (isset($_POST['submit'])){
    $about->updateabout($_POST,$aboutID);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About</title>
    <link rel="icon" href="images/icon1.png">
    <link rel="stylesheet" href="../css/create.css">
</head>
<body>

<div class="container">
<div class="title">Editoni About</div>
    <form class= "form" method="POST">
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
        <input type="submit" name="submit" id="button" value="Save">
    </form>
</div>


</body>
</hmtl>