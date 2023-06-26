<?php 
$sql="select *from users";
$rs=$con->query($sql);
$info=$rs->fetch_all(1);  
//print_r($data);
?>