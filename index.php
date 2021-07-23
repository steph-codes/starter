<?php 
  include('User.php');
  $obj = new User;
  $coy = $obj->get_companies();
// echo"<pre>";
//   print_r($coy);
// echo"</pre>";


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
          <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">signup</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('images/surface.jpg');height:260px;">
   <div class="container" style='margin-top:20px'>
      
          <form action="#" method="post">
            
            <div class="form-group row my-2">
     
     <div class="col-md-7">
                <input class="form-control form-control-lg" name="search" id="idsearch" type="text" placeholder="Type a business name or company to begin your search">
                 
            </div>
 <div class="col-md-2">
              <select name="location" class="form-control">
                <option value="">Select Location</option>
                 <option value="1">Lagos </option>
              </select>
            </div>
             <div class="col-md-3">
                <button class="btn btn-lg btn-block btn-warning">Search</button>
            </div>
             
  </div>


          
    

          </form>
       
   </div>
  </header>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>The Number 1 Business Directory in Nigeria</h1>
      <p class="lead">Enjoy many free benefits; Update your business details and more</p>
      <p>Let the right businesses find you with our Request for Quotation, Let the right businesses find you with our Request for QuotationLet the right businesses find you with our Request for Quotation</p>
    </div>
  </section>

  <!-- Image element - set the background image for the header in the line below -->
  <div class="bg-image-full" style="background-image: url('images/biz.jpg');background-attachment: fixed;">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 140px; background-color: rgba(0,0,102,0.7);color:white;">
      <h2 style='text-align:center; line-height: 140px;'>Sign Up Now</h2>
    </div>
  </div>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Featured Companies</h1>
      <p class="lead">View a list of our verified companies</p>
       

       <div class="row">
  <?php
   
      foreach($coy as $key=>$val){
        $description=$val['bus_description']; ?>

      <div class="col-md-3 featured">
      <img src="images/cisco.png" class="card-img-top logoimg" alt="">
      <div class="card-body">
      <h3><?php echo $val['bus_name'];?></h3>
        <p class="card-text"><?php if($description==''){echo 'Not updated';}else{ echo $description;}?>
          <code><?php echo $val['state_name']?></code></p>
      </div>
  </div>
  <?php }?>
       </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Designed by Moat Cohort 16</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
