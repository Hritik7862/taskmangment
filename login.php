<?php
session_start();
// print_r($_SESSION);
  if(isset($_SESSION['username'])){
    //header('Location:'.'indext3.php');
    
    ?>
   
    <script>
      location.href="indext3.php";
      
      </script>
    <?php 
    exit();
  }

include('conn.php');
//$id= $_GET ["id"];
      // username and password sent from form 
      if(isset($_POST["submit"])){
      $myusername = $_POST['username'];
      $mypassword =  ($_POST['password']); 
    
    
      // print_r($con);
      // $sql = "SELECT user_name,password FROM users WHERE user_name = '$myusername' and password = '$mypassword'";
      $sql = "SELECT user_name,password FROM users WHERE user_name = '$myusername'";

        // $sql = "select * from users where username = '$myusername' and password = '$mypassword'";
        // print_r($sql);
        // exit;
      $result = mysqli_query($con,$sql);
        // print_r($result);
        // echo "<br>";
      
      //  exit;
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// print_r($row);
// $num = mysqli_num_query($result);

      //print_r($row);
   
      //$active = $row['active'];
      
   
    //$_SESSION["password"]=$mypassword;

      // If result matched $myusername and $mypassword, table row must be 1 row
		// print_r($mypassword);
    // exit
    $count = mysqli_num_rows($result);
     if($count  == 1) {
        if($row = mysqli_fetch_assoc($result)){
          // echo "hello";
          // print_r($row);
          // exit;
         // $$2y$10$HF2PWzmZ6PgtVOWnBf4r.uheWzULuvOl6hMIlSL983
          if(password_verify($mypassword,$row['password'])){
        //  print_r($row);
        //  exit;
            // echo $row;
         
          
            $_SESSION["username"]=$myusername; 
          
            header("location: indext3.php");
           
          }else{
            $error =  "Your Login Name or Password is invalid";  
  
          }
        }else{
          $error =  "Your Login Name or Password is invalid";  

        }
         
        
      }else {
         $error =  "Your Login Name or Password is invalid";  
      }
    }
    include('header.php');
    ?>

              <!-- <section class="h-100 vh-100 gradient-form" style="background-color: #eee;">  -->
  
 

              <link rel="stylesheet" href="bootstrap.css">
<script src="js/divv.js"></script>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-2">
              <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="text-center">
                <img src="lotus.jpg" alt="Phone image" width="350" height="220"
                    style="width: 250px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">project Magement</h4>
 
                <div class= " text-center text-danger">
                  <?php echo $error??'' ; ?>
                </div>
                
                <div class="container form-group offset-xl-1 form-label float-start">
 <form method = "post">
   <label class="form-label" for="form-control">Username</label>
                  <input type = "text" name = "username" class = "form-control  mt-2 mb-2form-control bg-light" style="border:0 ">
                  
                  <label class="form-label" for="form-control">Password</label>

                  <input type = "password" name = "password" class = "form-control  mt-2 mb-2 form-control bg-light" style="border:0 " >

 <button   name="submit" class ="btn btn-success text-center mt-2">submit</button>
  </div>
  </form> 
  <div class="col-md-8 col-lg-7 col-xl-6">
  <img src="scr.jpg" alt="Phone image" width="400" height="220"
                    style="width: 200px;" alt="logo">
  
       

          
      </div>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
include('footer.php');



?>