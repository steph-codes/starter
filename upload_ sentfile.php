<?php
public function upload($filearray,$id){
	$tmp = $filearray['profilepic']['tmp_name'] ;
	$type = $filearray['profilepic']['type'];
	$filename = $filearray['profilepic']['name'] ;
	$destination = "images/$filename";
	$size = $filearray['profilepic']['size'];	$feedback = "";
	if($type =='image/jpeg' || $type =='image/png' || $type=='image/gif'){
	      if($size <= 200000000){
	            move_uploaded_file($tmp, $destination);
	            //update database here
	            $q = "UPDATE business SET bus_logo ='$filename' WHERE bus_id='$id'";
	            $this->connect->query($q);

	            $feedback = "Successfully uploaded";
	      }else{
	        $feedback = 'File too large';
	      }
	}else{
	  $feedback = 'My friend, select picture!';
	}
return $feedback;



}
?>