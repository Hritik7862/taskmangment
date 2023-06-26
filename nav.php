<?php
session_start();
if(isset($_SESSION['username']) ){
  // $navbar = "1";
  // $logindisplay = "0";
  $username = $_SESSION['username'];
  //$password = $_SESSION['password'];
  // echo $username;
  // exit;
} else {
  header('Location:404.php');
}
include ("header.php");
  

    
$con= new mysqli('localhost','root','','projectmagement');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">


  <div class="container-fluid">
    <a class="navbar-brand "  href="indext3.php">Users Listing </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="index.php">Project Listing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="indext2.php">Task Listing</a>
        </li>
        <li class="nav-item float-right">
        <div class=" btn-sm position-absolute top-1 end-0">
          <a class="nav-link active navbar-brand  float-right btn-sm btn-danger "onclick="show()" aria-current="page" href="logout.php">Logout</a>
         
          </div> 
        </li>
       
    </div>
  </div>
</nav>
