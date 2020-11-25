<!-- ......................................Want TO make UPdate Query And some responsive design and add some Effects .......... -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="../styling/style.css">
    <title>Document</title>
</head>
<body>
    <?php
    
session_start();

include('../database/db.php');

if(isset($_SESSION['id'])){

    $id = $_SESSION['id'];


    //........................for displaying name and  Email ID  ........

  $sql = "select Name, Email from registration where id ='$id'" ;  // ............fectching data from data to show in profile ..............

  $run =mysqli_query($con, $sql);
  $data = mysqli_fetch_row($run);

  if($data){
      $Name = $data[0];      // ......................Name ...........
      $Email = $data[1];      // .................Email .........
  }
    ?>

         <!--   ....................... End Of The Fetching ....................... -->


<!-- ..............TOP BAR ...................... -->

<h1 class="bg-danger p-2 text-white">       
OSWM
<i class="fab fa-accusoft icon ml-1 text-dark"></i>
</h1>


<!-- ......................... Side Bar And Main Content ....................-->


<div class="row container-fluid">


<!-- .......................Side Bar ............................. -->


  <div class="sidebar p-2 ">
    <h5 class="bg-danger p-2"><i class="fas fa-user mr-2"></i>Profile</h5>
    <h5 class="bg-danger p-2"><i class="fas fa-anchor mr-2"></i>Submit Request</h5>
    <h5 class="bg-danger p-2"><i class="fas fa-atom mr-2"></i>Service Request</h5>
    <h5 class="bg-danger p-2"><i class="fas fa-unlock-alt mr-2"></i>Change Password</h5>
    <h5 class="bg-danger p-2"><i class="fas fa-sign-out-alt mr-2"></i>Logout</h5>
  </div>


<!-- .......................Side Bar End ............................. -->



<!-- .......................Side Content ............................. -->


  <div class="content col-8">


  <!-- .......................Profile Page ............................. -->


  <div class="profile">
  <form id="req_Form">
  <div class="form-group">
    <label for="exampleInputEmail1"> <i class="fas fa-paper-plane"></i> Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    value = <?php echo $Email; ?>  id="req_email" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><i class="fas fa-signature"></i> Name </label>
    <input type="text" class="form-control" id="exampleInputPassword1"
    value = <?php echo $Name; ?> id="req_name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>


  <!-- .......................End OF Profile Page ............................. -->


  </div>


  <!-- .......................Side Content End ............................. -->


</div>
 

<!-- ....................... End Of Side Bar And Main Content............................. -->



<!-- .......................IF User Entered Url Directly  Then Redirect TO  Home............................. -->

   <?php 
}
else{
    header("location:http://localhost/service_management_system/");
}

    ?>


 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
<script src="requester.js"></script>

</body>
</html>