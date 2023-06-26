
<?php
include ("nav.php");

//  $_POST['password'] = md5($_POST['password']);
// if($password == $password){
  $password = $_POST['password'];
  $hash = password_hash($password,PASSWORD_DEFAULT);
  // print_r($password);
  // echo"<br>";
  // print_r($hash);
  // exit;

// }

$sql ="insert into users(name,mobile,email,user_name,password,is_active)values('$_POST[name]',
'$_POST[mobile]','$_POST[email]','$_POST[user_name]','$hash','$_POST[activestatus]')";

if($con->query($sql)){
    header('location:indext3.php');
       
    }else{
        header('location:404.php');
    }
    $con->close();
    ?>
<script src="assets/custom.js"></script> 