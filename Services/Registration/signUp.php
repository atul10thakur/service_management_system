
<?php

// include("../../database/db.php");

$con = mysqli_connect("localhost","root","","newoswm");

$data = file_get_contents("php://input");

$Reg_Data = json_decode($data,true);

$name = $Reg_Data['name'];
$email = $Reg_Data['email'];
$password = $Reg_Data['password'];

if($name!="" && $email!="" && $password!=""){

    if(strlen($name) <=4 || strlen($email)<=4 || strlen($password) <= 4)
    {
        echo "all field must be more than 4 letters "; 
    }

    $sql = " select Email from registration where Email = '$email' "; 
    $sql_run = mysqli_query($con,$sql);

    if(mysqli_fetch_row($sql_run)){
       echo "Email Already Exists"; 
    }
    else{
    
  $query = "insert into registration (Name,Email,Password) values ('$name' , '$email' , '$password') " ;

if(mysqli_query($con, $query)){
  echo true;
}
else{
  echo "Error ... " ;
}
}
}
else{
  echo "please fill all the fileds first" ;
}
?>