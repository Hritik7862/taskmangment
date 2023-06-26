<?php
include("nav.php");
$id =$_GET['id'];
// $btn= $_GET['btn'];
// print_r($_POST);
// exit;
$sql="update tasks set assign_by='$_POST[assignby]',assign_to='$_POST[assignto]',task_name='$_POST[taskname]',
task_status='$_POST[taskstatus]',
description='$_POST[description]',
task_datetime='$_POST[date]',
project_id='$_POST[projectid]',
is_active='$_POST[activestatus]' where id=$id";

if($con->query($sql)){
    header ('location:indext2.php');
}else{
    header('location:indext2.php');
}