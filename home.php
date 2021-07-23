<?php

require('User.php');
$obj = new User;

//session_start();
if(!isset($_SESSION['userid'])){
  header('location:index.php');
}

$deets = $obj->get_details($_SESSION['userid']);
  //the user id of the current user shows the person is logged on
  //print arrow shows the array index.
// echo"<pre>";
//    print_r($deets);
// echo"</pre>";
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Business Directory DOT com</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
<style type="text/css">
  nav a{
    color:white;
  }
</style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper" style="background-color:  rgba(0,0,102,0.7);">
      <div class="sidebar-heading">Business Directory DOT com </div>
      <div class="list-group list-group-flush">

        <img src="<?php
          if($deets['bus_logo']!=''){
            echo $deets['bus_logo'];
          }else{
            echo "images/logo2.png"; }?>">
            
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light">logout</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Upload profile picture</a>
        <a href="edit_profile.php" class="list-group-item list-group-item-action bg-light">EditProfile</a>
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg   border-bottom" style="background-color:  rgba(0,0,102,0.7);">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hi, <i><?php echo $deets['bus_name']?></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Welcome <?php echo $deets['bus_name']?></h1>
        <p>You can edit your profile by clicking any of the menu on the side</p>
        <p>Announcements will be here</p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
