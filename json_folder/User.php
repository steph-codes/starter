<?php

class User{
    //contains all the things a user can do with the app.
    //variables are called properties in OOP.
    public $connect;

    function __construct(){
        $this->connect = new mysqli('localhost','root','','bus_directory');
        session_start();
    }

    public function check_user($username){
        $q = "SELECT * FROM business WHERE bus_email='$username'";
        $result = $this->connect->query($q);
        $no = $result->num_rows;
        if($no > 0){
            return "Username taken, Please choose another";
        }else{
            return "Username availiable";

    }
    
    function get_companies(){
        //use join when u need a file from another table
        $q="SELECT * FROM business JOIN tbl_state on bus_stateid = state_id";
        $result = $this->connect->query($q);
        
        $display = $result->fetch_assoc();
        
        $row=[];
        while ($display = $result->fetch_assoc()) {
            ;
            $row[] = $display;
        }
        return $row;
    }
}
?>