<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include '../../src/common/conn.php';

?>

<!--delete employee--->
<?php 
  if ($_GET['empdeleteid']) {
  	$id = $_GET['empdeleteid'];
  	$query1 = "delete from users where userID = $id";
  	$run = mysqli_query($con,$query1);
  	if ($run) {
  		header('location:../../views/admin/viewemployees.php');
  	}
  }
?>
<!--end delete employee-->



<!--delete notices--->
<?php 
  if ($_GET['messageid']) {
    $id = $_GET['messageid'];
    $query1 = "delete from messages where messageID = $id";
    $run = mysqli_query($con,$query1);
    if ($run) {
      header('location:../../views/liveEvent/liveEvent.php');
    }
  }
?>
<!--end delete notices-->
<!--delete employee--->
<?php 
  if ($_GET['productCode']) {
    $id = $_GET['productCode'];
    $query1 = "delete from product where PRODUCTCODE = $id";
    $run = mysqli_query($con,$query1);

     $trigger = "INSERT INTO messages VALUES ('','userUpdation','".$fullName." with userName ".$userName." was edited!','$today','')";
       $triggerquery = mysqli_query($con,$trigger);
    if ($run) {
      header('location:../../views/store/viewall.php');
    }
  }
?>
<!--end delete employee-->
