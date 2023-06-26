<?php
include("nav.php");

//include('allusers.php');

// function getusername($id){
//     $con= new mysqli('localhost','root','','projectmagement');
//     $sql="select name  from users where id=$id;";
//     return $con->query($sql)->fetch_assoc()['name'];
// }


if(isset($_GET['status'])){
    if($_GET['status']){
        echo "<script>alert('Data is deleted');</script>";
    }else{
        echo "<script>alert('Some error occured');</script>";
    }

    header("location:index.php");
}


$sql = "SELECT projects.id,project_name,project_started_date,description, project_delivery_date,project_cost,project_technologie,project_members,project_status,projects.is_active as active, project_head,name,mobile,email, user_name, users.is_active  FROM projects INNER JOIN users ON projects.project_head = users.id; ";

// $sql ="select * from users JOIN projects on project_head=project_head ORDER BY `projects`.`project_head` DESC
// ";
$rs  = $con->query($sql);
$data = $rs->fetch_all(1);
// print_r($data);
// exit;
?>
<div class="alert  bg-dark"> <span class="btn btn-lg bg-dark">
<a class="btn btn-primary btn-sm float-end btn-lg " href="project.php">Project Create</a>

<!-- <a class="btn btn-danger float-end btn-lg" href="logout.php">Logout</a> -->



</div>
<div class="table-responsive">
<table border="1px" width="40%"  class="table table-striped table-dark" style="white-space:nowrap">

    <tr>
        <th>S.NO</th>
        <th>ProjectName</th>
        <th>Description</th>
        <th>Project Start Date</th>
        <th>Project Delivery Date</th>
        <th>Project Cost</th>
        <th>Project Head</th>
        <th>Project Technologie</th>
        <th>Project Mambers</th>
        <th>Project Status</th>
        <th>Is_active</th>

        <th>Actions</th>
      
</tr>
<?php
 $index=0;
 foreach($data as $info){?>
<tr>
    <td><?=++$index?></td> 
    <td><?=($info['project_name'])?></td>
    <td><?=($info['description'])?></td>
    <td><?=($info['project_started_date'])?></td>
    <td><?=($info['project_delivery_date'])?></td>
    <td><?=($info['project_cost'])?></td>

    <td><?=($info['name'])?></td>

    <td><?=($info['project_technologie'])?></td>
    <td><?=($info['project_members'])?></td>
    <td><?=($info['project_status'])?></td>
    <td><?=($info['active'])?></td>
    <td>
        <a class="btn btn-sm text-white" href="edit.php?id=<?=$info['id']?>&btn=project"> <i class="fa-solid fa-pen-to-square"></i></a>
        <a class="btn btn-sm text-white" onclick="deletes('delete.php?id=<?=$info['id']?>&btn=project')"> <i class="fa-solid fa-trash"></i></a>
    </td>
    
 </tr>
 
<?php }?>
 </table>
 </div>
 <?php 
  include ("footer.php");

 ?>
 <script>
    function deletes($path){
        if(confirm("Do you really want to delete this field")){

        window.location.href=$path;
        }


    }
    // function abc(){
    //     setTimeout(() =>{
    //         alert("successful");
    //     },20000);
    // } 
</script>