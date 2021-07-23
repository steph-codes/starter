<?php
require('User.php');
    if ($_POST){
    
   
    $email = trim(strip_tags($_POST['email']));
    $password = strip_tags($_POST['pwd']);// no need to trim password
    $obj = new User;
    $log=$obj->login($email,$password);//gives us the id or 0

    if($log > 0){
        $_SESSION['userid'] = $log;
        header('location:home.php');
    }else{
        header('location:login.php');
    }
}else{
    header("location:index.php");
}
?>