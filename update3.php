<?php
include("nav.php");

$id =$_GET['id'];

print_r($id);
  
$btn= $_POST['btn'];
$sql="update users set name='$_POST[name]',
mobile='$_POST[mobile]',email='$_POST[email]',
user_name='$_POST[user_name]',
password='$_POST[password]',
is_active ='$_POST[activestatus]'where id=$id";
// print_r($sql);
//  exit;
if($con->query($sql)){
    header ('location:indext3.php');
}else{
    header('location:indext3.php');
}
