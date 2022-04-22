<?php

  include 'src/common/conn.php';
  if (isset($_POST['btn'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $email = $_POST['Email'];
    $pass = password_hash($password, PASSWORD_DEFAULT);

if ($username!="" && $pass!="" && $email!="") {
      $query = "UPDATE users set Password ='$pass' WHERE userName = '$username' AND  fullName = '$email'";
      $result = mysqli_query($con,$query);
   if ($result) {
    echo "<script>alert('Congratulation! you have change the Password, Now you can Login. Thank you!')</script>";
   }else{
    echo "<script>Aghrrrr! Sorry you have not change the Password, Please try Again!</script>";
   }

}


}

?>