<?php
include("nav.php");
include ("allusers.php");
?>

<?php

function getusername($id){
    $con= new mysqli('localhost','root','','projectmagement');
    $sql="select name  from users where id=$id;";
    return $con->query($sql)->fetch_assoc()['name'];

}

//  $sql="select tasks.id, task_name,task_status,tasks.description, projects.description,task_datetime,assign_by,assign_to,project_name,project_started_date,project_delivery_date,project_cost,project_technologie,project_members,project_status,
// project_head, name,mobile,email,user_name,tasks.is_active, projects.is_active, users.is_active
//  project_id from tasks JOIN projects on tasks.project_id=projects.id JOIN users on assign_by=users.id  JOIN users u2 ON t.assign_to = u2.id ORDER BY `assign_to` DESC";
// $sql="SELECT t.task_name ,u1.name AS assign_by, u2.name AS assign_to FROM tasks t JOIN users u1 ON t.assign_by = u1.id JOIN users u2 ON t.assign_to = u2.id ORDER BY `assign_to` DESC
// ";
// $sql="select tasks.id,u2.name as assigned_by,
//  task_name,task_status,tasks.description, projects.
//  description,task_datetime,assign_by,assign_to,project_name,
//  project_started_date,project_delivery_date,project_cost,
//  project_technologie,project_members,project_status, project_head, 
//  u2.name as assigned_to , tasks.is_active, projects.is_active, 
//  users.is_active project_id from tasks JOIN projects on tasks.
//  project_id=projects.id JOIN users on assign_by=users.
//  id JOIN users u2 ON tasks.assign_to = u2.id ORDER BY `assign_to` DESC;
// ";
// selete join qurey 
$sql="
SELECT tasks.id, u1.name AS assigned_by,
 task_name, task_status,
  tasks.description AS task_description, 
  projects.description AS project_description, 
  task_datetime, assign_by, assign_to, project_name, 
  project_started_date, project_delivery_date, project_cost, 
  project_technologie, project_members, project_status, 
  project_head, u2.name AS assigned_to, 
  tasks.is_active AS task_is_active, projects.is_active AS project_is_active,
   projects.id AS project_id FROM tasks JOIN projects ON tasks.project_id = projects.id 
   JOIN users u1 ON tasks.assign_by = u1.id JOIN users u2 ON tasks.assign_to = u2.id ORDER BY assign_to DESC;";


$rs=$con->query($sql);
$data=$rs->fetch_all(1);
// print_r($data);
// exit;
?>
<div class="alert  bg-dark"> <span class="btn btn-lg bg-dark">
<a class="btn btn-primary float-end btn-lg btn-sm" href="task.php">Task Create</a>
</div>
<table border="1px" width="20%"  class="table table-striped table-dark">
    <tr>
        <th>S.NO</th>
        <th>AssignBy</th>
        <th>AssignTo</th>
        <th>TaskName</th>
        <th>TaskStatus</th>
        <th>Description</th>
        <th>TaskDateTime</th>
        <th>ProjectId</th>
        <th>IS Active</th>
        <th>Actions</th>
        <!-- <th>Delete</th> -->
</tr>
<?php
// print_r($data);
 $index=0;
 foreach($data as $info){?>
<tr>
    <td><?=++$index?></td> 
    <td><?=($info['assigned_by'])?></td>
    <td><?=($info['assigned_to'])?></td>
    <td><?=($info['task_name'])?></td>
    <td><?=($info['task_status'])?></td>
    <td><?=($info['task_description'])?></td>
    <td><?=($info['task_datetime'])?></td>
    <td><?=($info['project_name'])?></td>
    <td><?=($info['task_is_active'])?></td>
    <td>
        <a class="btn btn-sm text-primary" href="edit2.php?id=<?=$info['id']?>&btn=task"> <i class="fa-solid fa-pen-to-square"></i></a>
        <a class="btn btn-sm text-danger" onclick="deletes('delete.php?id=<?=$info['id']?>&btn=task')"> <i class="fa-solid fa-trash"></i></a>
    </td>
    
 </tr>
 
<?php }?>
<?php 
  include ("footer.php");

 ?>
 <script>
    function deletes($path){
        if(confirm("Do you really want to delete this field")){
        window.location.href=$path;
        }


    }
</script>