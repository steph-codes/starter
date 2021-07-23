<!DOCTYPE html>
<html>
<head>
	<title>PHP and AJAX</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			 <form action='insert_contact.php' method="post">

<h5>Social Media Post</h5>
 <div class="form-group row">
         <label class="col-md-3">Post</label>
         <div class="col-md-5">
         	<textarea id="usercomment" class="form-control"></textarea>	
         </div>
		<div class="col-md-4">
         	<button class="btn btn-sm btn-primary" id='post' type="button">Post</button>
         </div>
</div>
<div id="all"></div>
 

        
     </form>
		</div>
	</div>
</div>

<script src='vendor/jquery/jquery.js'></script>
<script>

$(document).ready(function(){
//$.ajax({key:value, key:value , key:value})	 
	 $('#post').click(function(){
	 	var dcomment = $('#usercomment').val();
	 	var data2send={comment:dcomment};
	 	$.ajax({
	 		url:'submit_ajax2.php',
	 		type:'post',
	 		data:data2send,
	 		dataType:'json', //the data type we are expecting from the server
	 		success:function(servermsg){ 
	 			console.log(servermsg);  //contains smth like this- { content: "content here", status: "successful" }

	 			//retrieve the thinsg in the json one by one
	 			var status = servermsg.status ;
	 			var postcontent = servermsg.content ;
	 			//you can do anything you want with the server response. Eg
	 			if(status =='successful'){
	 				$('#all').append(postcontent);
	 				$('#all').addClass('alert alert-success');
	 			} 
	 			 
	 			$('#post').html('Post');
	 			$('#post').removeAttr('disabled');
	 		},
	 		error:function(errmsg){
	 			alert('error');
	 			console.log(errmsg);
	 		},
	 		beforeSend:function(){
	 			//it come here just before it visits the server
	 			 $('#post').html('Please wait...');
	 			 $('#post').attr('disabled','disabled');
	 			

	 		}
	 	});

	 })
})
</script>
</body>
</html>