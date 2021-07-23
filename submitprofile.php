<?php
//protect page ensure that user gets here by $POST
// ensure that only logged in user are able to visit the page i.e keep in $_SESSION
//retrieve the form data
//require class and instantiate an object of the class
//call the function update profile()
//develop the updateprofile function in the user class
require('User.php');

$obj = new User;

    if ($_POST){
        if(!isset($_SESSION['userid'])){
            header("location:index.php");
        }

        $id = $_SESSION['userid'];

        $obj->updateProfile($_POST, $id);

    }else{
        header("location:index.php");
    
    // no need to trim password
}
?>