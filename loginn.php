<?php
include('nav.php');
?>

<!-- Content section -->
<section class="py-5">
    <div class="container">
      <h3>Login Form</h3>
      <?php if(isset($_GET['msg'])){
          echo '<div class="alert alert-danger">' .$_GET['mag'].'</div>';
      }?>

      
      <form action='loginuser.php' method='post'>
          <div class='form-group row'>

          <label class='col-md-3'> Email </label>
          <div class='col-md-9'>
          <input type='text' name='email' class='form-control'><br>
</div>

          <label class='col-md-3'> Password </label>
          <div class='col-md-9'>
          <input type='password' name='pwd' class='form-control'><br>
          <button class='btn btn-primary'> Login</button> 
</div>
    </form>
    </div>

    
    <?php
include('footer.php')
?>