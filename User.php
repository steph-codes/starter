<?php

class User{
    //contains all the things a user can do with the app.
    //variables are called properties in OOP.
    public $connect;

    function __construct(){
        $this->connect = new mysqli('localhost','root','','business');
        session_start();
    }
    //to get user id, get all details get details so we can store in session
    function get_details($userid){
        $q ="SELECT * FROM directory WHERE bus_id='$userid'";
        $result = $this->connect->query($q);
        //$t=$result->num_row; no need cos it will return empty data regardless.
        $data = $result->fetch_assoc();
        return $data;
        
    }
    //profilepic is the name of he input field of type file
    //do a print_r on $_FILES to see other associative array indexes e.g u get tmp_name etc
    public function upload($filearray,$id){
        $tmp = $filearray['profilepic']['tmp_name'] ;// tmp is a temp location
        $type = $filearray['profilepic']['type'];
        $filename = $filearray['profilepic']['name'] ;
        //destination is ur images folder and $filename is an index in $_FILES array.
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        $newfilename =time().rand(). ".$ext";//ensure it is double quote
        $destination = "images/$newfilename";
        $size = $filearray['profilepic']['size'];	
        $feedback = "";
        //$allowed = array('jpeg','png','gif')
        //if(in_array($ext, $allowed)){}
        //type image not images isnt the destination but the extension or file type or format
        if(strtolower($ext) =='jpeg' || strtolower($ext) =='png' || strtolower($ext)=='gif'){
            //n.b size is measured in bytes
              if($size <= 200000000){
                  //move file from temporary location to destination
                    move_uploaded_file($tmp, $destination);
                    //update database here inside if statements i.e after conditions are met
                    $q = "UPDATE business SET bus_logo ='$newfilename' WHERE bus_id='$id'";
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
    
    function updateProfile($postarray, $id){
        $name = trim(strip_tags($postarray['bizname']));
        $desc = trim(strip_tags($postarray['desc']));
        $state = $postarray['state'];
        $phone = trim(strip_tags($postarray['phone']));

        $q="UPDATE business SET bus_name='$name', bus_description='$desc', bus_phone='$phone',
        bus_stateid='$state' WHERE bus_id='$id'";
        //run the query
        $res=$this->connect->query($q);
        header("location:edit_profile.php");
    }
    function get_state(){
        $q="SELECT * FROM tbl_state";
        $result = $this->connect->query($q);
        
        $data = $result->fetch_assoc();
        //fetch data  
        //fetch data inside array row instead of concatenating and return row inside.
        $row=[];      
        while($data = $result->fetch_assoc()){ //while fetching get data from $data and put inside row
            $row[] = $data;
        }return $row;
        
    }

    function register($name,$email,$password,$state,$s){

        $encrypted = md5($password);
        $str = "INSERT into business set bus_name='$name',bus_email='$email',bus_password='$encrypted',bus_stateid='$state'";
        // runs the query function
        $this->connect->query($str);
        $id = $this->connect->insert_id;

        if(!empty($s)){
            foreach($s as $key=>$val){
            $qq= "INSERT INTO business_Specializations SET buspec_busid= '$id'; buspec_specid='$val'";
            $this->connect->query($qq);
            }
        }

        return $id;
    
        // if(!$this->connect->error){
        //     return true; //same as 1.
        // }else{
        //     return false; //same as 0. then check return status on submit page.
        // }
    }function logout(){
        session_destroy();
        session_unset();
        header("location:index.php");
    }
    function login($email,$password){
        //connect to  db and encrypt password
        $encrypted = md5($password);
        $q="SELECT * FROM business where bus_email='$email', bus_password='$encrypted'";
        //check for error
        $result=$this->connect->query($q);
        $total=$result->num_rows; //the no of rows collect

        $id= 0; //set id to 0 just incase total isnt > 0
        if($total > 0){
            $data =$result->fetch_assoc();//fetch the actual data we need id to keepmit in session
            $id = $data['bus_id'];
        }
        return $id;
    }
    function get_companies(){
        //use join when u need a file from another table
        $q="SELECT * FROM business JOIN tbl_state on bus_stateid = state_id";
        $result = $this->connect->query($q);
        
        $display = $result->fetch_assoc();
        
        $row=[];      
        while($display = $result->fetch_assoc()){;
            $row[] = $display;
        }return $row;
        
    }
}
?>