<?php
include_once '../controllers/userController.php';
if (isset($_GET['id'])){
    $userID=$_GET['id'];
}
$user= new User;
$currentUser= $user->edituser($userID);
if (isset($_POST['submit'])){
    $user->updateuser($_POST,$userID);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="icon" href="images/icon1.png">
    <link rel="stylesheet" href="../css/create.css">
</head>
<body>

<div class="container">
<div class="title">Editoni Userin</div>
    <form class= "form" method="POST">
    <div class="input-box">
    <span class="details"> Emri: </span>
    <input type="text" name="emri" value="<?php echo $currentUser['emri'];?>">
    <br>
    </div>
    <div class="input-box">
    <span class="details"> Username: </span>
    <input type="text" name="username" value="<?php echo $currentUser['username'];?>">
    <br>
    </div>
    <div class="input-box">
    <span class="details"> Email: </span>
    <input type="text" name="email" value="<?php echo $currentUser['email'];?>">
    <br>
    </div>
    <div class="input-box">
    <span class="details"> Numri: </span>
    <input type="number" name="numri" value="<?php echo $currentUser['numri'];?>">
    <br>
    </div>
    <div class="input-box">
    <span class="details"> Password: </span>
    <input type="text" name="password" value="<?php echo $currentUser['password'];?>">
    <br>
    </div>
    <input type="submit" name="submit" value="update">
    
    </form>
</div>

</body>
</hmtl>