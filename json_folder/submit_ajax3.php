<?php
//Retrieve the data using $_POST because type :post on the main page
$com = $_POST['comment'];
//You can decide to save the data in the database

echo $com ; //this is the server msg being sent to the place where you made ajax call
?>
