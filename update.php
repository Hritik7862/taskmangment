<?php
include("nav.php");
// print_r($_POST);
//include('allprojects.php');
$id =$_GET['id'];

    $sql="update projects set project_name='$_POST[project_name]',
    description='$_POST[description]',
    project_started_date='$_POST[project_started_date]',
    project_delivery_date='$_POST[project_delivery_date]',
    project_cost='$_POST[project_cost]',
    project_head='$_POST[project_head]',
    project_technologie='$_POST[project_technologie]',
    project_members='$_POST[projectmember]',
    is_active = '$_POST[activestatus]',
    project_status='$_POST[project_status]'where id=$id";
    //  print_r($sql);
    //  exit;
    if($con->query($sql)){
        header ('location:index.php');
    }else{
        header('location:index.php');
    }
    //$con->colse(); 
// $id =$_GET['id'];
// $btn= $_GET['btn'];
// $sql="update student set'$_POST[project_name]','$_POST[description]','$_POST[project_started_date]','$_POST[project_delivery_date]'
// , '$_POST[project_cost]','$_POST[project_head]','$_POST[project_technologie]','$_POST[projectmember]','$_POST[project_status]'where id=$id";
// if($con->query($sql)){
//     header ('location:index.php');
// }else{
//     header('location:index.php');
// }
// // ----------------
// <?php
// $btn=$_GET['btn'];
// $id =$_GET['id'];
// if($btn==)
// $con= new mysqli('localhost','root','','curd');

// $sql="update student set sname='$_POST[sname]',class='$_POST[class]',
// dob='$_POST[dob]' where id=$id";
// if($con->query($sql)){
//     header ('location:index.php');
// }else{
//     header('location:404.php');
// }
// //$con->colse(); 
// $con->close();
// ?>