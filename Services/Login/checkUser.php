<?php

// include("../../database/db.php") ;

$con = mysqli_connect("localhost","root","","newoswm");


$input = file_get_contents("php://input");
$data = json_decode($input,true);  

$email = $data['email'];
$password = $data['password'];


$sql= "select Email, Password from registration where Email = '$email' and Password = '$password' ";

$run = mysqli_query($con,$sql);

if(mysqli_fetch_row($run)){
    
    echo 1;
} 
else{
    echo "Password or Email is not correct";
}
?>