<?php

session_start();

if(!isset( $_SESSION['userName']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include '../../src/common/conn.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Shop</title>

    <!-- Bootstrap -->
    <link href="../../resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../resource/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../resource/css/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../../resource/css/custom.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!-- side and top bar include -->
        <?php include '../partPage/sideAndTopBarMenu.php' ?>
        <!-- /side and top bar include -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                      
                    </div>

                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                      
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
 <?php 
    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
     $dob = $_POST['dob'];
     $number = $_POST['number'];
    $pass = $_POST['password'];
    $password2 = $_POST['password2'];
    $password = password_hash($pass,PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $today = date('Y-m-d');
    if ($fullName !="" && $password!="" &&  $userName!="" && $number!="") {
      $query = "INSERT INTO users VALUES ('','$fullName','$userName','$dob','$number','$password','active','$role','$today')";
      $res = mysqli_query($con,$query);
    if ($res) {
      echo "<div class='alert alert-success'>Congratulation! employee is created Successfully...</div>";
      echo "<a href='viewemployees.php' class='btn btn-info'>View</a>";
    }
    else{
      echo "<div class='alert alert-danger'>Aghrrrr! employee is not created, Please repeate again!</div>";
      echo "<a href='createEmployee.php' class='btn btn-info'>Try Again</a>";
    }
    }
  

                                ?>
       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content include -->
        <?php include '../partPage/footer.html' ?>
        <!-- /footer content include -->
    </div>
</div>


<!-- jQuery -->
<script src="../../resource/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../resource/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../resource/js/fastclick.js"></script>
<!-- NProgress -->
<script src="../../resource/js/nprogress.js"></script>
<!-- validator -->
<script src="../../resource/js/validator.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../resource/js/custom.min.js"></script>
</body>
</html>

