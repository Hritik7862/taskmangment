<?php
include('nav.php');
$_COOKIE['username'] = "indext3.php";
setcookie("name");
?> 

<div class="container border mt-3">
    <div class="text-center mt-3 "><h1 style="font-weight:bolder">Users Signup To Website</h1></div>

  <form method="post" action="store3.php" onsubmit="validate()" autocomplete="off">
   <div class="container">
    
    <div class="grid-container">
      <!-- item 1 -->

    <div class="item1 ">
      <div class="mb-3 ">
      <label for="name" class="form-label float-start" ><h5>Name</h5></label>
      <input type="text"  name="name"class="form-control bg-light" style="border:0" id="name" placeholder="Name" required>
      </div>
  </div>
    <!-- item 2 -->
    <div class="item2 ">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label float-start"><h5>Mobile</h5></label>
      <input type="number" name="mobile"class="form-control bg-light"style="border:0" id="Task Name" placeholder="Mobile" required>
      </div>
    </div>
    <!-- item 3 -->
    <div class="item4 ">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label float-start"><h5>Email</h5></label>
      <input type="email"name="email" class="form-control bg-light"style="border:0" id="Task Name" placeholder="Email" required>
      </div>
    </div>
    <!-- item 4 -->
    <div class="item5 ">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label float-start"><h5>User Name</h5></label>
      <input type="text"name="user_name" class="form-control bg-light"style="border:0" id="based" placeholder="UserName" required>
      </div>
    </div>
    <!-- item 5 -->
    <div class="item6 ">
      <div class="mb-5">
        <label for="exampleFormControlInput1" class="form-label float-start"><h5>Password</h5></label>
        <input type="password"name="password" class="form-control bg-light"style="border:0" id="price" placeholder="Password" required>
      </div>
      <!-- <div class="item6 bg-light "> -->
      <!-- <div class="mb-5">
      <label for="Taskstatus"><h5>IsActive</h5></label><br>
      <label for="active" class="form-label" >Active</label>
      <input type="radio" name="activestatus"  id="active" value="1" required>
      <label for="inactive" class="form-label" >Inactive</label>
      <input type="radio" name="activestatus"  id="inactive" value="0" required> -->
        <!-- <label for="active" class="form-label float-start"><h5>Is_Active</h5></label>
        <input type="radio" name="activestatus" class="form-control bg-light"style="border:0" id="price" placeholder="isactive" required> -->
        <div class="form-label float-start">
        <label for="Taskstatus"><h5>IsActive</h5></label><br>
      <label for="active" class="form-label" >Active</label>
      <input type="radio" name="activestatus"  id="active" value="1" required>
      <label for="inactive" class="form-label" >Inactive</label>
      <input type="radio" name="activestatus"  id="inactive" value="0" required>
      </div>
      </div>
      </div>
      
      <!-- submit button -->
      <div class="d-grid gap-2 mb-3">
          <button name="btn" value="user" class="btn-dark button">Submit <i class="fa fa-solid fa-arrow-right"></i></button>
      </div>
    
   </div>
 
  </form>
</div>
      <?php
      include("footer.php");
      ?>