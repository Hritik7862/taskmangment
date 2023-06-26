
<?php

include("nav.php");
?>

<?php
$sql="select *from users";
$rs=$con->query($sql);
$data=$rs->fetch_all(1);
//print_r($data);
?>
<div class="alert  bg-dark"> <span class="btn btn-lg bg-dark">
<a class="btn btn-primary float-end btn-lg btn-sm" href="user.php">UserCreate</a>

<!-- <script>
    setTimeout(()=>{
    alert("Login successfully")
    
    },500) -->
</script>
</div>

<table border="0px" width="20%"  class="table table-striped table-dark">
    <tr>
        <th>S.NO</th>
        <th>Name</th>
        <th>MObail</th>
        <th>email</th>
        <th>UserName</th>
        <th>IsActive</th>
        <th>Actions</th>
        <!-- <th>Delete</th> -->
      

</tr>
<?php
 $index=0;
 foreach($data as $info){?>
<tr>
    <td><?=++$index?></td> 
    <td><?=($info['name'])?></td>
    <td><?=($info['mobile'])?></td>
    <td><?=($info['email'])?></td>
    <td><?=($info['user_name'])?></td>
    <td><?=($info['is_active'])?></td>
   

    <td>
        <a class="btn btn-sm text-white" href="edit3.php?id=<?=$info['id']?>&btn=user"> <i class="fa-solid fa-pen-to-square"></i></a>
        <a class="btn btn-sm text-white" onclick="deletes('delete.php?id=<?=$info['id']?>&btn=user')"> <i class="fa-solid fa-trash"></i></a>
    </td>
    
    <!-- <td><button class="btn btn-danger" name="btn"  value="user" onclick="deletes('delete.php?id=<?=$info['id']?>&btn=user')">Delete</button></td> -->

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