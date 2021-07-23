<?php

require('User.php');//requiring a filename

$business =trim(strip_tags($_POST['bizname'])) ;
$email = trim(strip_tags($_POST['email']));
$pwd = trim(strip_tags($_POST['pwd']));
$location = trim(strip_tags($_POST['state']));
//checking if its set b4 assigning to variable post['sector];
$sector = isset($_POST['sector'])?$_POST['sector']:array();



$obj = new User();//instatiantiate an object class, (argument)needed when parameters are entered into a constructor.
//add sector to parameters
$check=$obj->register($business,$email,$pwd,$location,$sector);//$name,$email,$password,$location
//collect return value  and store in $check
//check if$check post without error

//from user.php check means if !error  orif unable to insert i.e redirect to homepage
if($check){
    $_SESSION['userid']= $check;
    header("location:home.php");
}else{
    header("location:signup.php?msg=try again");
    //then go on to form to alert the GET msg
}



?>

  