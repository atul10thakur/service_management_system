<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
session_start();

if(isset($_SESSION['id'])){

    echo "login successfull" ;
}
else{
    header("location:http://localhost/service_management_system/");
}

    ?>
</body>
</html>