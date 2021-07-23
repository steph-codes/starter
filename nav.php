<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Business Directory Dot Com</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">


<style type="text/css">
#idsearch{

  padding:0.5em;
}  
.logoimg{

  max-height:120px !important;
}
nav a{
  color:white;
}
.featured:hover{
border:1px solid #ccc;
border-radius:5px;
}
</style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg   fixed-top" style="background-color:  rgba(0,0,102,0.7);">
    <div class="container">
      <a class="navbar-brand" href="#">Business Directory DOT com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <?php if(!isset($_SESSION['userid'])){?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">Signup</a>
          </li>
          <?php }else{?>
            <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
            </li>
            <?php }?>
        </ul>
      </div>
    </div>
  </nav>

