

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
        <h5 class="card-title">Social Media Post with $.ajax({})</h5>
    </div>
    <div class="card-body">
    <!-- no need for form in js we use id <form action="insert_contact.php" method="post" autocomplete="off">-->
    <div class="form-group">
    <label class="control-label"></label> 
        <div id="loc"></div>    
    </div>
    <div class="form-group">
        <label class="control-label">Post</label></label>
        <textarea name="message" id="usercomment" class="form-control" placeholder="Type your post here"></textarea>
    </div>
            
            <div class="form-group">
                <button type="button" id="post"class="btn btn-success">
               Send  </button>
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
        //$.ajax({key:value, key:value, key:value})
            $('#post').click(function(){
                var dcomment = $('#usercomment').val();
                var data2send = {comment:dcomment};
                $.ajax({
                    url:'submit_ajax.php',
                    type:'post',
                    data:data2send,
                    dataType:'json',//text
                    success:function(servermsg){
                        alert('Message Posted');
                        $('#all').html();
                    }
                })
            })
        })

    </script>
</body>
</html>