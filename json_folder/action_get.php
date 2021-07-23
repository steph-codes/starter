<?php

require 'User.php';
$obj = new User;
$r = $obj->check_user($_POST['user']);

echo $r;



?>