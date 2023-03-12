<?php
    session_start();
    require_once './controllers/userController.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(validateEmptyData($email,$password)){
            header("Location: index.php");
        }else if(validateData($email,$password)){
            if($_SESSION['roli']==2){
                header('Location: views\menuDashboard.php');
            }else if($_SESSION['roli']==1){
                header('Location: index.php');
            }
        }else{
            echo '<script>alert("Email ose password eshte gabim!")</script>';
        }
    }
    function validateEmptyData($email,$password){
        if(empty($email)||empty($password)){
            return true;
        }else {
            return false;
        }
    }
    function validateData($email,$password){
        $user = new User;
        $users = $user -> readUser();
        foreach ($users as $user) {
            if($user['email']==$email&&$user['password']==$password){
                $_SESSION['emri']=$user['emri'];
                $_SESSION['roli']=$user['roli'];
                $_SESSION['id']=$user['id'];
                return true;
            }
        }
        return false; 
    }
?>
