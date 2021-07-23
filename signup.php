<?php
  include('nav.php');
  require('User.php');
  $obj = new User;
  $allstates = $obj->get_state();
?>

  <section class="py-5">
    <div class="container">
      <h3 class="pt-5">Sign up form</h3>
      <div class="card-header">
        <h5 class="card-title">Fill your details</h5>
        <?php if(isset($_GET['msg'])){ echo"<div class='alert alert-danger'>"  .$_GET['msg'] ."</div>" ;}?>
      </div>
    
      <div class="card-body">
      <form action="insert_reg.php" method="POST">
            <div class="form-group">
                <label>Business name</label>
                <input type="text" name="bizname" class="form-control" placeholder="">
            </div>
            <div class="form-group">
            <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="">
            </div>
            <div class="form-group">
            <label>Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="">
            </div>
            <div class="form-group">
            <label>Specialization</label>
                <!--<input type="text" name="spec" class="form-control" placeholder="">-->

            <div class="form-group row">
            
                <label class="col-3">Agriculture</label>
                    <input type="checkbox" name="sector[]" class="" value="1" placeholder="">
                <label class="col-3">Fashion</label>
                    <input type="checkbox" name="sector[]" class=""value="2" placeholder="">
                <label class="col-3">Construction</label>
                    <input type="checkbox" name="sector[]" class="" value="3" placeholder="">
                <label class="col-3">banking</label>
                <input type="checkbox" name="sector[]" class="" value="4"placeholder="">
            </div>

            <div class="form-group">
              <select name="state" class="form-control">
              <?php
                foreach($allstates as $s){
                  $statename = $s['state_name'];
                  $stateid = $s['state_id'];
                  echo"<option value='$stateid'>$statename</option>";
                }
                ?>
              </select>
            </div>

            <div class="form-group">
                <button onclick="document.location.href='index.php'" class="ml-5 btn btn-outline-secondary">Cancel</button>
                <button class="btn btn-success">Register</button>
            </div>
    
        </form>
        
    </div>
    </div>
  </section>
  
  <?php
    include('footer.php');
  ?>
  