<?php
  include('nav.php');
?>

  <section class="py-5">
    <div class="container">
      <h3 class="pt-5 mb-3 ml-4">Login form</h3>
      <div class="card-header">
        <h5 class="card-title">Fill your details</h5>
        <?php if(isset($_GET['msg'])){ echo"<div class='alert alert-danger'>"  .$_GET['msg'] ."</div>" ;}?>
      </div>
    
      <div class="card-body">
      <form action="loginuser.php" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="">
            </div>
            
            <div class="form-group">
            <label>Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <button class="btn btn-success">login</button>
            </div>
    
        </form>
        
    </div>
    </div>
  </section>
  
  <?php
    include('footer.php');
  ?>
  