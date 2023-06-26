<?php
include('nav.php');
 include ('allusers.php');
 include ('allprojects.php');
$id = $_GET['id'];
//$id = $_GET['id'];
//  $btn= $_GET['btn'];
// echo $id;
// exit;
$sql= "select tasks.id, task_name, task_status, description, task_datetime, tasks.is_active, assign_by, assign_to, project_id, name,mobile, email, user_name, password  from tasks JOIN users on assign_by=users.id where tasks.id=$id";
//  $sql= "select * from tasks JOIN users on assign_by=users.id where tasks.id=$id";
// $sql="select * from tasks JOIN projects on project_id=project_id JOIN users on assign_by=users.id ORDER BY `tasks`.`assign_by` DESC ;";
$rs = $con->query($sql);
$data = $rs->fetch_assoc();
$rs = $con->query($sql);
$data = $rs->fetch_assoc();
// print_r($data);
// print_r($data);

// print_r($_GET['assign_to']);

// function getusername($id){
//   $con= new mysqli('localhost','root','','projectmagement');
//   $sql="select name  from users where id=$id;";
//   return $con->query($sql)->fetch_assoc()['name'];
// }
// function getprojectname($id){
//   $con= new mysqli('localhost','root','','projectmagement');
//   $sql="select project_name  from projects where id=$id;";
//   return $con->query($sql)->fetch_assoc()['project_name'];
// }
// ?>

<div class="container border mt-3 ">
    <div class="text-center mt-3 "><h1>Task Management</h1></div>

  <form method="post" action="update2.php?id=<?=$data['id']?>"  onsubmit="validate()"autocomplete="off">
   <div class="container">
   <div class="row">
    <div class="grid-container">
      <!-- item 1 -->

    <div class="item1 bg-light">
      <div class="mb-3 ">
      <label for="assignby" class="form-label float-start" ><h5>Assign By</h5></label>
      <!-- <input type="text" name="assignby" class="form-control bg-light" style="border:0" id="assignby" placeholder="assignby" required> -->
           
      <select name="assignby" id="assignby" class="form-control bg-light" style="border:0" id="exampleProject" rows="3">
          <?php

          foreach($info as $val){

          ?>
          <option <?php if($val['id']==$data['assign_by']){ echo "selected";}?>  value="<?=$val['id'];?>"><?=$val['name'];?></option>
          <?php
          }
          ?>
        </select>
    </div>
  </div>
    <!-- item 2 -->
    <div class="item2 bg-light">
      <div class="mb-3 ">
      <label for="exampleFormControlTextarea1" class="form-label float-start"><h5>Assign TO</h5></label>
        <!-- <input type="text"name="project_head" class="form-control bg-light" style="border:0" id="exampleProject" rows="3"></input> -->
        
        <select name="assignto" id="name" class="form-control bg-light" style="border:0" id="exampleProject" rows="3" >
        <?php

        foreach($info as $val){

        ?>
        <option <?php if($val['id']==$data['assign_to']){ echo "selected";}?> value="<?=$val['id'];?>" ><?=$val['name'];?></option>
        <?php
        }
        ?>
        </select>
    </div>
  </div>
  
    <!-- item 3 -->
    <div class="item4 bg-light">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label float-start"><h5>Description</h5></label>
      <input type="text"name="description" class="form-control bg-light"style="border:0" id="Task Name" placeholder="Description" required value="<?=$data['description']?>">
      </div>
    </div>
    <!-- item 4 -->
    <div class="item5 bg-light">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label float-start"><h5>Task Date Time</h5></label>
      <input type="datetime-local"name="date"  class="form-control bg-light"style="border:0" id="date" placeholder="Date" required value="<?=$data['task_datetime']?>">
      </div>
    </div>
    <!-- item 5 -->
    <div class="item6 bg-light ">
      <div class="mb-5">
        <label for="exampleFormControlInput1" class="form-label float-start"><h5>Project Name</h5></label>
       
        <select name="projectid" id="" class="form-control bg-light" style="border:0" id="exampleProject" rows="3" >
          <!-- <option value=""></option> -->

          <?php
          foreach($pdata as $value){
            
          ?>
          <option value="<?=$value['id'];?>" <?php if($value['id']==$data['project_id']){ echo "selected";}?> ><?=$value['project_name'];?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <!-- item 6 -->
      
      <!-- <div class="item3 bg-white">
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label float-start"><h5></h5></label>
        <input type="text"name="projectid" class="form-control bg-light"style="border:0" id="pname" placeholder="projectid" required>
        
      </div>
    </div>  -->

        <!-- item 2 -->
      <div class="item2 bg-light">
      <div class="mb-3 ">
      <label for="Assignto" class="form-label float-start" ><h5>Task Name</h5></label>
      <input type="text" name="taskname" class="form-control " style="border:0" id="Assignto" placeholder="Taskname" required value="<?=$data['task_name']?>">
      </div>
      </div>

      <!-- item 2 -->
      <div class="item2 bg-light">
      <div class="mb-3 ">
      <label for="Taskstatus" class="form-label float-start" ><h5>Task Status</h5></label>
      <!-- <input type="text" name="Taskstatus" class="form-control " style="border:0" id="Taskstatus" placeholder="Taskstatus" required> -->
      <select name="taskstatus" id="" class="form-control bg-light" style="border:0" id="exampleProject" rows="3"value="<?=$data['taskstatus']?>">
          <option value="">----Select----</option>
          <option value="Not Completed" <?=($data['task_status']=='Not Completed')?"selected":"";?> >Not Completed</option>
          <option value="Processing" <?=($data['task_status']=='Processing')?"selected":"";?> >Processing</option>
          <option value="Completed" <?=($data['task_status']=='Completed')?"selected":"";?> >Completed</option>
          <option value="Testing"  <?=($data['task_status']=='Testing')?"selected":"";?> >Testing</option>
         
        </select>
    </div>
      </div>
      <div class="item2 ">
        <div class="mb-3 ">
          
          <!-- <input type="checkbox" name="isactive"  id="isactive" placeholder="isactive" required> -->
          <div class="form-label float-start">
        <label for="Taskstatus"><h5>IsActive</h5></label><br>
      <label for="active" class="form-label" >Active</label>
      <input type="radio" name="activestatus"  id="active" <?=$data['is_active']?'checked':''?> value="1" required >
      <label for="inactive" class="form-label">Inactive</label>
      <input type="radio" name="activestatus"  id="inactive" <?=$data['is_active']?'':'checked'?> value="0" required>
      </div>
      
      </div>
      </div>
      
      
      
       
      <!-- submit button -->
       <div class="d-grid gap-2 mb-3">
          <button name="btn" value="tasks" onclick="show()" class="btn-dark button">Update<i class="fa fa-solid fa-arrow-right"></i></button>
        </div>
   </div>

  </form>
</div>



<?php
      include("footer.php");
      ?>
        <script>
      function show(){
        
        if(confirm("Do you really want to Update this field")){

        window.location.href=$path;
        }
    


      }
      </script>
      `