<?php
include("nav.php");
include ('allusers.php');
include ('allprojects.php');
$id = $_GET['id'];
//$id = $_GET['id'];
$btn= $_GET['btn'];
// echo $id;
// exit;
// $con=new mysqli('localhost','root','','projectmagement');
$sql="select * from projects where id = $id";
// print_r($sql);
//  exit;
$rs = $con->query($sql);
$data = $rs->fetch_assoc();
// print_r($data);
// exit;

// include('nav.php');
//   // include('allusers,php');
//  $sql="select *from users";
// $rs=$con->query($sql);
// $info=$rs->fetch_all(1);  
// $id = $_GET['id'];
// //$id = $_GET['id'];
//  $btn= $_GET['btn'];
// echo $id;
// // exit;
// $sql="select * from projects JOIN users on project_members=users.id where projects.id=$id";

// $rs = $con->query($sql);
// $data = $rs->fetch_assoc();
// //print_r($data);
?>
    <form method="post" action="update.php?id=<?=$data['id']?>"> 

<div class="container border mt-3">
<div class="text-center my-5 "><h1 style="font-weight:bolder">Project Management</h1></div>

<form method="post" action="Update.php"?=<?=$data['id'] ?> onsubmit="validate()" autocomplete="off">
<div class="container">
<div class="row">
  <!-- item 1 -->

<div class="col-4">
  <div class="mb-3 ">
  <label for="name" class="form-label float-start" ><h5>Project Name</h5></label>
  <input type="text"name="project_name" class="form-control bg-light" style="border:0" id="name" placeholder="ProjectName" required value="<?=$data['project_name']?>">
  </div>
</div>
<!-- item 2 -->
<div class="col-4">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label float-start"><h5>Description</h5></label>
  <input type="text"name="description" class="form-control bg-light"style="border:0" id="Task Name" placeholder="Description" required value="<?=$data['description']?>">
  </div>
</div>
<!-- item 3 -->
<div class="col-4">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label float-start"><h5>Project Start Date</h5></label>
  <input type="date"name="project_started_date" class="form-control bg-light"style="border:0" id="Task Name" placeholder="ProjectDate" required value="<?=$data['project_started_date']?>">
  </div>
</div>

<!-- item 4 -->
<div class="col-4">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label float-start"><h5>Project Delivery Date</h5></label>
  <input type="date"name="project_delivery_date" class="form-control bg-light"style="border:0" id="based" placeholder="ProjectdeliveryDate" required value="<?=$data['project_delivery_date']?>" >
  </div>
</div>
<!-- item 5 -->
<div class="col-4">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label float-start"><h5>Project Cost</h5></label>
    <input type="number" name="project_cost" class="form-control bg-light"style="border:0" id="price" placeholder="Project cost" required value="<?=$data['project_cost']?>">
  </div>
</div>
  <!-- item 6 -->
  
<div class="col-4">
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label float-start"><h5>Project Head</h5></label>
    <!-- <input type="text"name="project_head" class="form-control bg-light" style="border:0" id="exampleProject" rows="3"></input> -->
    

    <select name="project_head" id="projecthead" class="form-control bg-light" style="border:0" id="exampleProject" rows="3"  >
      <option >Select</option>
      <?php
      foreach($info as $val){
      ?>
      <option <?php if($val['id']==$data['project_head']){ echo "selected";}?>  value="<?=$val['id'];?>"><?=$val['name'];?></option>
      <?php
      }
      ?>
    </select>
  </div>
</div> 

<div class="col-6">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label float-start"><h5>Project Technologie</h5></label>
  <input type="text"name="project_technologie" class="form-control bg-light" style="border:0" id="based" placeholder="ProjectTechnologie" required value="<?=$data['project_technologie']?>">
  </div>
</div>
<div class="col-6">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label float-start"><h5>Project Status:</h5></label>
  <!-- <input type="text" name="project_status" class="form-control bg-light" style="border:0" id="based" placeholder="project Stusts" required> -->
  <select name="project_status" id="" class="form-control bg-light" style="border:0" id="exampleProject" rows="3" value="<?=$data['project_status']?>">
      <option>process</option>
      <option>completed</option>
      <option>notworking</option>
      <option>working</option>
    </select>

</div>
</div>
<div class="col-12">
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label float-start"><h5>Project Team Members</h5></label>
      <!-- <input type="text" name="projectmember" id=""class="form-control bg-light" style="border:0"> -->
      <!-- <label>
Multi-select
<input mbsc-input id="my-input" data-dropdown="true" data-tags="true" />
</label> -->

<input class="form-control"name="projectmember" mbsc-input  data-dropdown="true" data-tags="true" id="tm" type="text" value="<?=$data['project_members']?>"/>
<select onchange="tm.value+=this.value+','" >
<option value="" mbsc-input id="my-input" data-dropdown="true" data-tags="true" >--Select Any--</option>
<?php 
foreach($info as $val){
?>
<option value="<?=$val['name'];?>"><?=$val['name'];?></option>
<?php
}
?>
</select>
</div>

<!-- <script>
mobiscroll.select('#multiple-select', {
inputElement: document.getElementById('my-input'),
touchUi: false
});
</script> -->
<div class="form-label float-start">
        <label for="Taskstatus"><h5>IsActive</h5></label><br>
      <label for="active" class="form-label" >Active</label>
      <input type="radio" name="activestatus" <?=$data['is_active']?'checked':''?> id="active" value="1" required>
      <label for="inactive" class="form-label" >Inactive</label>
      <input type="radio" name="activestatus" <?=$data['is_active']?'':'checked'?> id="inactive" value="0" required>
      </div>
  </div>
</div> 
  <!-- submit button -->
  <div class="d-grid mb-3">
      <button name="btn" value="project"onclick="show()" class="btn-dark button">Update<i class="fa fa-solid fa-arrow-right"></i></button>
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