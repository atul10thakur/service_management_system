<?php
?>
<section class="fourth container">
  <h1 class="text-center">Create Account</h1>
 <div class="row offset-md-2 offset-1 offset-lg-3 shadow-lg p-4 " style="width: 500px;">
  <form class="w-100 user-form" method="POST" id ="reg_form">
    <div class="form-group ">
      <label for="exampleFormControlInput1"> <i class="fas fa-user"></i> Enter Name</label> 
      <input type="text" class="form-control" id="reg_name" placeholder="Name">
    </div>
    <div class="form-group ">
      <label for="exampleFormControlInput1"> <i class="fas fa-user"></i> Enter Email</label> 
      <input type="text" class="form-control" id="reg_email" placeholder="Email">
    </div>
    <div class="form-group ">
      <label for="exampleFormControlInput1"> <i class="fas fa-key"></i> Enter Password</label> 
      <input type="text" class="form-control" id="reg_password" placeholder="Password">
    </div>
    <div class="form-group d-flex justify-content-center ">
  <button class="btn-danger btn w-75 mt-2" id="sign_up"> Sign Up</button>
    </div>
  </form>
  <span id="reg_msg"><span>
 </div>

</section>
<?php
?>