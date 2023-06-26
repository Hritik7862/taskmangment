<?php
include('nav.php');

$sql="select *from users";
$rs=$con->query($sql);
$data=$rs->fetch_all(1);
$sql="select *from projects";
$rs=$con->query($sql);
$info=$rs->fetch_all(1);
// print_r($info);

?>

  <div class="container border mt-3 ">
    <div class="text-center mt-3 "><h1>Task Management</h1></div>

  <form method="post" action="store2.php" onsubmit="validate()"autocomplete="off">
   <div class="container">
   <div class="row">
    <div class="grid-container">
      <!-- item 1 -->

    <div class="item1 ">
      <div class="mb-3 ">
      <label for="assignby" class="form-label float-start" ><h5>Assign By</h5></label>
      <!-- <input type="text" name="assignby" class="form-control bg-light" style="border:0" id="assignby" placeholder="assignby" required> -->
     
      <select name="assign_by" id="" class="form-control bg-light" style="border:0" id="exampleProject" rows="3">
          <option value=""></option>
          <?php
          foreach($data as $val){

          
          ?>
          <option value="<?=$val['id'];?>" ><?=$val['name'];?></option>
          <?php
          }
          ?>
        </select>
    </div>
  </div>
    <!-- item 2 -->
    <div class="item2 ">
      <div class="mb-3 ">
      <label for="exampleFormControlTextarea1" class="form-label float-start"><h5>Assign TO</h5></label>
        <!-- <input type="text"name="project_head" class="form-control bg-light" style="border:0" id="exampleProject" rows="3"></input> -->
        
        <select name="assign_to" id="" class="form-control bg-light" style="border:0" id="exampleProject" rows="3">
          <option value=""></option>
          <?php
          foreach($data as $val){

          
          ?>
          <option value="<?=$val['id'];?>" ><?=$val['name'];?></option>
          <?php
          }
          ?>
        </select>
    </div>
  </div>
  
    <!-- item 3 -->
    <div class="item4 ">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label float-start"><h5>Description</h5></label>
      <input type="text"name="description" class="form-control bg-light"style="border:0" id="Task Name" placeholder="Description" required>
      </div>
    </div>
    <!-- item 4 -->
    <div class="item5 ">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label float-start"><h5>Task Date Time</h5></label>
      <input type="datetime-local"name="date"  class="form-control bg-light"style="border:0" id="date" placeholder="Date" required>
      </div>
    </div>
    <!-- item 5 -->
    <div class="item6  ">
      <div class="mb-5">
        <label for="exampleFormControlInput1" class="form-label float-start"><h5>Project Name</h5></label>
       
        <select name="projectid" id="" class="form-control bg-light" style="border:0" id="exampleProject" rows="3" >
          <option value=""></option>
          <?php
          foreach($info as $val){

          ?>
          <option value="<?=$val['id'];?>" ><?=$val['project_name'];?></option>
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
      <div class="item2 ">
      <div class="mb-3 ">
      <label for="Assignto" class="form-label float-start" ><h5>Task Name</h5></label>
      <input type="text" name="taskname" class="form-control bg-light" style="border:0" id="Assignto" placeholder="Taskname" required>
      </div>
      </div>

      <!-- item 2 -->
      <div class="item2 ">
      <div class="mb-3 ">
      <label for="Taskstatus" class="form-label float-start" ><h5>Task Status</h5></label>
      <!-- <input type="text" name="Taskstatus" class="form-control " style="border:0" id="Taskstatus" placeholder="Taskstatus" required> -->
      <select name="taskstatus" id="" class="form-control bg-light" style="border:0" id="exampleProject" rows="3">
          <option value="">----Select----</option>
          <option value="Not Completed" >Not Completed</option>
          <option value="Processing" >Processing</option>
          <option value="Completed" >Completed</option>
          <option value="Completed" >Testing</option>
         
        </select>
    </div>
      </div>
      <div class="item2 ">
        <div class="mb-3 ">
          
          <!-- <input type="checkbox" name="isactive"  id="isactive" placeholder="isactive" required> -->
          <div class="form-label float-start">
        <label for="Taskstatus"><h5>IsActive</h5></label><br>
      <label for="active" class="form-label" >Active</label>
      <input type="radio" name="activestatus"  id="active" value="1" required>
      <label for="inactive" class="form-label" >Inactive</label>
      <input type="radio" name="activestatus"  id="inactive" value="0" required>
      </div>
      
      </div>
      </div>
      
      
      
       
      <!-- submit button -->
       <div class="d-grid gap-2 mb-3 container">
          <button name="btn" value="task" class="btn-dark button">Submit <i class="fa fa-solid fa-arrow-right"></i></button>
        </div>
   </div>

  </form>
</div>



<?php
      include("footer.php");
      ?>