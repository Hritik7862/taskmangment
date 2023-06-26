<?php 
$sql="select project_head, project_name, projects.id from projects";
$rs=$con->query($sql);
$pdata=$rs->fetch_all(1);  
//print_r($pdata);
?>