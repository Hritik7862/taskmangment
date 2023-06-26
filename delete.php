<?php
include('nav.php');
$id = $_GET['id'];
$btn= $_GET['btn'];

if($btn=='project'){
    $sql = "delete from projects where id=$id";
    // echo $sql;
}
if($btn=='task'){
    $sql = "delete from tasks where id=$id";
}
if($btn=='user'){
    $sql = "delete from users where id=$id";

}
echo $sql;
// exit;
$result = $con->query($sql);
var_dump($result);
// exit;

if($result){
    if($btn=='project')
    header('Location:index.php?status=1');
    if($btn=='task')
    header('Location:indext2.php');
    if($btn=='user')
    header('Location:indext3.php');
}else{
    // header("Location:index.php?status=0");
    echo "Could not delete";
}


