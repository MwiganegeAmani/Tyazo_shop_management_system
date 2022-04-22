<!--delete CUSTOMER--->
<?php 

session_start();

if(!isset($_SESSION['userName']) && !isset($_SESSION['fullName'])) {
    header("Location:../../index.php");
}

include '../../src/common/conn.php';
    $CUST_ID = $_GET['TRANS_ID'];
    $name = $_SESSION['userName'];
    $day = date('Y-m-d');
    $today = date('h:i:sa');

$trigger = "INSERT INTO messages VALUES ('','PurchaseDeleted','$name was delete a vendor!','$day','$today','')";
       $triggerquery = mysqli_query($con,$trigger);

    $query1 = "delete from vendor where vendorID = '$CUST_ID'";
    $run = mysqli_query($con,$query1);

    if ($run) {
      header('location: viewvendor.php');
    }

?>
<!--end delete CUSTOMER-->
