<?php

//Retrieve the data using $_POST because type :post on the main page
$com = $_POST['comment'];
//You can decide to save the data in the database, require your class, instantiate an object of it, then call the appropriate method that will handle the insertion

//if the data (server response) to be sent back is in form of an array (this is used when you need to send back more than one statement/thing)

$response = array('content'=>$com,'status'=>'successful');

echo json_encode($response); //convert it to json, will be of the format { content: $com, status: "successful" }
?>
