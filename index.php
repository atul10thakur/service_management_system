
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="styling/style.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light text-white bg-danger">
      <a class="navbar-brand" href="#">OSWM <i class="fab fa-accusoft icon ml-1"></i></a>
      <a class="nav-link disabled text-white" href="#">Customer Happiness Is Our First Aim</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <a class="nav-link active text-white" >Home <span class="sr-only">(current)</span></a>
        <a class="nav-link active text-white" id="services" href="#">Services</a>
        <a class="nav-link disable text-white"  id="registration_btn" style="cursor:pointer">Registration</a>
        <a class="nav-link active text-white" id="login" href="Services/Login/login.php">Login</a>
        <a class="nav-link active text-white" href="#">Contact</a>
        
      </div>
    </nav>
<!-- <nav class="navbar navbar-expand-md navbar-dark bg-danger pb-3 pt-3 mb-0">
     <a class="navbar-brand" href="#">OSMS<i class="fab fa-accusoft icon ml-1"></i></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
          <a class="nav-link disabled" href="#">Customer Happiness Is Our First Aim</a>
          <a class="nav-link active ml-5" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link active" href="#">Services</a>
        <a class="nav-link active" href="#">Registration</a>
        <a class="nav-link active" href="#">Login</a>
        <a class="nav-link active" href="#">Contact</a>
      </div>
    </div>
  </nav> -->


  <section class="img">
<!-- top secton ....  -->
    <div class="text-white first" >
         <p class="font-weight-normal" style="font-size: 5vw;">Welcome to OSMS...</p>
         <p style="font-size: 2vw;">Customer Satisfaction Is Our First Aim</p>
         <div class="btns">
            <a href="Services/Login/login.php" class="btn btn-medium bg-success text-white">Login</a>
            <a href="#" class="btn btn-medium bg-danger text-white">Sign Up</a>
         </div>
      </div>
  </section>
  

<!-- middle section ............ -->

<section>
  <div class="second container mt-5">
    <div class="jumbotron bg-secondary ">
      <h1  class="text-center">Hello, world!</h1>
     <p >
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever <br>
       since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only  <br>
        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with  <br>
        the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker <br>
         including versions of Lorem Ipsum
     </p>
  </div>  
  </div>

  <section class="third container text-center pb-0"  >
    <div class="jumbotron bg-white pb-0">
      <h1  class="text-center">Our Services</h1>
    <div class="d-flex justify-content-around row" >
       <div class="col-md-4 mb-4"> 
         <a href="">
            <i class="fas fa-tv fa-8x"></i></a>
            <p>Electric Appliances</p>
       </div>
       <div class="col-md-4 mb-4"> 
         <a href="">
           <i class="fas fa-robot fa-8x"></i></a>
           <p>Preventive Maintenance</p>
       </div>
       <div class="col-md-4 mb-4"> 
         <a href="">
           <i class="fas fa-cogs fa-8x"></i></a>
           <p>Faulty Error</p>
       </div>
    </div>
  </div>  
</section>



<!-- ................User Registration .................. -->

<?php

include("Services/Registration/UserRegistration.php") ;

?>

<!-- happy customers .......sections ........... -->

<section class=" fifth container-fluid bg-danger mt-5 pt-5 pb-5" >
  <h2 class="text-center text-white pb-5">Happy Customers</h2>
 <div class="container">
  <div class="card-deck">
    <div class="row">
       <div class="col-lg-3 col-sm-6">
      <div class="card">
        <img src="images/pic-1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Gohan</h5>
          <p class="card-text text-center">This is a wider card with supporting text below as a natural This content is a little bit longer.</p>
        </div>
      </div>
    </div>
       <div class="col-lg-3 col-sm-6">
      <div class="card">
        <img src="images/pic-2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Picolo</h5>
          <p class="card-text text-center">This is a wider card with supporting text below as a natural This content is a little bit longer.</p>
        </div>
      </div>
    </div>
       <div class="col-lg-3 col-sm-6">
      <div class="card">
        <img src="images/pic-3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Vegita</h5>
          <p class="card-text text-center">This is a wider card with supporting text below as a natural This content is a little bit longer.</p>
        </div>
      </div>
    </div>
       <div class="col-lg-3 col-sm-6">
      <div class="card">
        <img src="images/pic-4.jpg" class="card-img-top " alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Kakarot</h5>
          <p class="card-text text-center">This is a wider card with supporting text below as a natural This content is a little bit longer.</p>
        </div>
      </div>
      </div>
    </div>
  </div>
 </div>
</section>


<!-- ............ footer ........ -->




<div class="sixth mt-5 container"> 
  <h1 class="text-center"> Contact US</h1>
  <div class="row justify-content-center">
    <?php
    include ("Services/Contact/ContactForm.php");
    ?>

    <div class="address">

         <div class="head">
          <h4>Headquter</h4>

          <p class="text-center text-muted">OSWM PVt Ltd. <br>
              Sec IV , Raipur <br>
              Pin : 248858 <br>
              Phone : 00000000 <br>
              www.OSWM.com
          </p>
         </div>
        
         <div class="delhi">
          <h4>
            Delhi Branch
          </h4>

          <p class="text-center text-muted">OSWM PVt Ltd. <br>
              Nel gali , Ashok Nagar <br>
              Pin : 248520 <br>
              Phone : 00000000 <br>
              www.OSWM.com
          </p>
         </div>
    </div>

  </div> 

</div>


 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
<script src="Services/Contact/Contact.js"></script>
<script src="Services/Registration/Registration.js"></script>

  </body>
</html>




