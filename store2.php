<?php
// print_r($_POST);
// exit;
include("nav.php");


echo $sql="insert into tasks(assign_by,assign_to,task_name,task_status,description,task_datetime,project_id,is_active)
values('$_POST[assign_by]','$_POST[assign_to]','$_POST[taskname]','$_POST[taskstatus]','$_POST[description]','$_POST[date]'
,'$_POST[projectid]','$_POST[activestatus]')";
print_r($sql);
// exit;
    if($con->query($sql)){
         header('location:indext2.php');
      
        }else{
         header('location:indext2.php');

        }
        $con->close();
        ?>
        <script src="assets/custom.js"></script> 
