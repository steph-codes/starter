*+

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge+">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Post :: Class Project</title>
    
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class='container'>
    <div class="row mt-5">
    <div class="col-md-6 offset-md-3">
   <div class="card">
    <div class="card-header">
        <h5 class="card-title">Username Availability</h5>
    </div>
    <div class="card-body">
    <!-- no need for form in js we use id <form action="insert_contact.php" method="post" autocomplete="off">-->
    <div class="form-group">
    <label class="control-label"></label> 
        <div id="loc"></div>    
    </div>
    <form action="" method="post" autocomplete="off"> 
        <div class="form-group">
            <label class="control-label">Choose username</label>
            <input name="message" id="username" class="" placeholder="">
            <button type="button" id="chk" class="btn btn-sm btn-success">Check Availability</button>
        </div>
        <div class="form-group">
            <button type="button" id="btn" class="btn btn-danger">Send</button>
        </div>    
            
            
        </form>
    </div>
   </div>        
    </div>
    </div>
    </div>
    <script src='../vendor/jquery/jquery.js'></script>
    <script>
        $(document).ready(function(){
            $('#chk').click(function(){
                var duser =$('#username').val();
                var data = {'user':duser};
                //get sends data into actionpage and what ever is echoed is the parameter t
                $.post('action_get.php', data, function(t){
                    alert(t);
                })
           
            })
        })

    </script>
</body>
</html>