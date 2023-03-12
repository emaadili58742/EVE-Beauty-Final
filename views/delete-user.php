<?php
require_once '../controllers/userController.php';
if (isset($_GET['id'])){
    $userID= $_GET['id'];
}
$user=new User;
$user->deleteUser($userID);

?>