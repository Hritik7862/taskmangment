<?php
//print_r($_POST);

include("nav.php");


$sql="insert into projects(project_name,description,project_started_date,project_delivery_date,project_cost,project_head,project_technologie,project_members,project_status,is_active)values
('$_POST[project_name]','$_POST[description]','$_POST[project_started_date]','$_POST[project_delivery_date]'
, '$_POST[project_cost]','$_POST[project_head]','$_POST[project_technologie]','$_POST[projectmember]','$_POST[project_status]','$_POST[activestatus]')";


if($con->query($sql)){
 header('location:index.php');
}else{
    header('location:index.php');
}
$con->close();


 ?>
 <script src="assets/custom.js"></script> 
