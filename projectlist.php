<!-- SELECT 
	tasks.id, 
    tasks.task_name, 
    tasks.task_status, 
    tasks.description, 
    tasks.is_active,
    users.name 
    AS users_name, 
    users.name AS 
    use_name
    FROM tasks 
    JOIN users ON tasks.assign_to = users.id JOIN users ON tasks.given_by = users.id;
 -->
<?php
include("nav.php");
?>

<?php

function getusername($id){
    $con= new mysqli('localhost','root','','projectmagement');
    $sql="select name  from users where id=$id;";
    return $con->query($sql)->fetch_assoc()['name'];

}



$con= new mysqli('localhost','root','','projectmagement');
$sql="select task_name,assign_by,assign_to,task_status,project_name,project_head,project_members from tasks JOIN projects on project_id=projects.id;";
$rs=$con->query($sql);
$data=$rs->fetch_all(1);

//print_r($data);
?>
<div class="alert  bg-dark"> <span class="btn btn-lg bg-dark">
<!-- <a class="btn btn-primary float-end btn-lg " href="task.php">Task Create</a> -->
</div>
<table border="1px" width="20%"  class="table table-striped table-dark">
    <tr>
        <th>S.NO</th>
        <th>AssignBy</th>
        <th>AssignTo</th>
        <th>TaskName</th>
        <th>Task status</th>
        <th>Project Head</th>
        <th>Project Name</th>
</tr>
<?php
 $index=0;
 foreach($data as $info){?>
<tr>
    <td><?=++$index?></td> 
    <td><?=($info['assign_by'])?></td>
    <td><?=($info['assign_to'])?></td>
    <td><?=($info['task_name'])?></td>
    <td><?=($info['task_status'])?></td>
    <td><?=getusername($info['project_head'])?></td>
    <td><?=($info['project_name'])?></td>


 </tr>
 
<?php }?>
<?php 
  include ("footer.php");

 ?>
 <!-- <script>
    function deletes($path){
        if(confirm("Do you really want to delete this field")){

        window.location.href=$path;
        }


    }
</script> -->