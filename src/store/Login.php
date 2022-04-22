<?php
session_start();
  include '../common/conn.php';
  if (isset($_POST['login'])) {
    $email = $_POST['userName'];
    $pass = $_POST['password'];

     $query = "select * from users WHERE userName='$email'";
      $result = mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
$password = $row['Password'];
$fullname = $row['fullName'];
   
    if (password_verify($pass, $password)) {
      
        $_SESSION['userName']=$email;
        $_SESSION['fullName']=$fullname;

        if ($row['Role']=='admin') {
          header("location:../../views/admin/dashboard.php");
        }
        else if($row['Role']=='shopkeeper' ){
          header("location:../../views/shopkeeper/dashboard.php");
        }
        else if($row['Role']=='agent' ){
          header("location:../../views/agent/dashboard.php");
        }
        else{
          echo "<script>alert('Sorry! Your Account is not exist!')</script>";
          header('location: ../../index.php');
        }
}else{
    echo "<script>alert('Warning! Username Or Password is Invalid. Please contact Us!')</script>";
    header('location: ../../index.php');
}

}

?>