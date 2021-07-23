<?php
require('user.php');
if($_POST){
$email= strip_tags(trim($_POST['email']));
$password= strip_tags($_POST['pwd']);

$obj= new user;
//$obj->login($email, $password);
 $bus_id = $obj->login($email, $password);
 if($bus_id > 0){
    $_SESSION['userid'] = $bus_id;
    header('location:home.php');
   }else{
       header('location:login.php');
 }

}else{
    header('location:index.php');
}
?>