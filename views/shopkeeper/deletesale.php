<!--delete CUSTOMER--->
<?php 

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['fullName'])) {
    header("Location:../../index.php");
}

include '../../src/common/conn.php';
    $CUST_ID = $_GET['CUST_ID'];
    $name = $_SESSION['userName'];
    $day = date('Y-m-d');
    $today = date('h:i:sa');

    $query1 = "delete from sales where saleID = '$CUST_ID'";
    $run = mysqli_query($con,$query1);

      $trigger = "INSERT INTO messages VALUES ('','PurchaseDeleted','$name was delete a Purchase!','$day','$today','')";
       $triggerquery = mysqli_query($con,$trigger);
    if ($run) {
      header('location: viewsale.php');
    }

?>
<!--end delete CUSTOMER-->
