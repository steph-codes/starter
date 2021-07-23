

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <h5 class="card-title">Make a Post</h5>
    </div>
    <div class="card-body">
    <!-- no need for form in js we use id <form action="insert_contact.php" method="post" autocomplete="off">-->
    <div class="form-group">
    <label class="control-label">Write Message</label> 
        <div id="loc"></div>    
    </div>
    <div class="form-group">
        <label class="control-label">Contact Us</label>
        <textarea name="message" id="msg" class="form-control" placeholder="Type your post here"></textarea>
    </div>
            
            <div class="form-group">
                <button type="button" id="btn" class="btn btn-success">Send</button> <a class="btn ml-5 btn-outline-success" href="edit_post.php">Edit</a>
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
            $('#btn').click(function(){
            var dmessage = $('#msg').val();//.val()gets the value / message inputed.
            var data = {'message':dmessage};//js object notation ,use $_POST.
            //var data = "message"+dmessage; query string , you use $_GET.
            //$('#loc').load('insert_contact.php')
            $('#loc').load('insert_contact.php',data, function(){
                var dmessage = $('#msg').val('');
            });//mtd 1 select using ajax to get value from the submit page
            })
        })

    </script>
</body>
</html>