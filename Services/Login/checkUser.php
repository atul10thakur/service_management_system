// ......................................Do Some VAlidation  .................

<?php

session_start();

$con = mysqli_connect("localhost","root","","newoswm");

$input = file_get_contents("php://input");
$data = json_decode($input,true);  

$email = $data['email'];
$password = $data['password'];


$sql= "select Email,Password,id from registration where Email = '$email' and Password = '$password' ";


$run = mysqli_query($con,$sql);

$query = mysqli_fetch_row($run);

$_SESSION['id'] = $query[2];   // ...........Creating Session For The User .............

if($query){
    
    echo true;
} 
else{
    echo "Password or Email is not correct";
}
?>