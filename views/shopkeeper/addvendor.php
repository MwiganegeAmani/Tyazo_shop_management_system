<?php

session_start();

if(!isset($_SESSION['userName']) && !isset($_SESSION['fullName'])) {
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

    <title>Shopkeeper - Add vendor</title>

    <!-- Bootstrap -->
    <link href="../../resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../resource/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../resource/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../resource/css/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../resource/css/bootstrap-progressbar-3.3.4.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../resource/css/jqvmap.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../resource/css/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../../resource/css/custom.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!-- side and top bar include -->
        <?php include '../shopkeeper/sideAndTopBarMenu.php' ?>
        <!-- /side and top bar include -->

        <!-- page content -->
                  <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Add Vendor</h3>
                    </div>

                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Put your vendor detail's information correctly</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                              
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                           
                                <form class="form-horizontal form-label-left" novalidate method="post" action="">

                        
                                    <span class="section">vendor's Info</span>
                  <?php 
              if (isset($_POST['send'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $mobile2 = $_POST['mobile2'];
$address = $_POST['address'];
     $date = date("Y-m-d");
$NAME = $_SESSION['userName'];
 $today = date('h:i:sa');
    if ($fullname !="" && $mobile!=""  && $address!="") {
      $query = "INSERT INTO vendor VALUES ('','$fullname','$email','$mobile','$mobile2','$address','$date','active','$NAME','','')";
      $res = mysqli_query($con,$query);
 $trigger = "INSERT INTO messages VALUES ('','vendorAdded','".$fullname." was Added by ".$NAME."','$date','$today','')";
       $triggerquery = mysqli_query($con,$trigger);

    if ($res) {
      echo "<div class='alert alert-success'>Congratulation! Vendor Is Added Successfully!</div>";
    }
    else{
      echo "<div class='alert alert-danger'>Aghrrrr! Vendor is not added Successfully , Please repeate again!</div>";
    }
    }
  
         }
                                ?>

                                      
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Full Name:  <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="lastName" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="fullname" placeholder="Eg. Guava Tech" required="required" type="text">
                                        </div>
                                    </div>
                                       <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Email:</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="lastName" name="email" class="form-control col-md-7 col-xs-12" placeholder="guavatech@gmail.com" type="email">
                                        </div>
                                    </div>
                                       <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Mobile No:  <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input type="tel" id="number" name="mobile" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                     <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Mobile No2:
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input type="tel" id="number" name="mobile2"  data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                  <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Vendor's Address <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="text" name="address" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                  
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a href="viewvendor.php" type="btn" class="btn btn-primary">Back</a>
                                            <button id="send" type="submit" class="btn btn-success" name="send">Submit</button>
                                        </div>
                                    </div>
                                </form>

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
<!-- Chart.js -->
<script src="../../resource/js/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../../resource/js/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../../resource/js/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../../resource/js/icheck.min.js"></script>
<!-- Skycons -->
<script src="../../resource/js/skycons.js"></script>
<!-- Flot -->
<script src="../../resource/js/jquery.flot.js"></script>
<script src="../../resource/js/jquery.flot.pie.js"></script>
<script src="../../resource/js/jquery.flot.time.js"></script>
<script src="../../resource/js/jquery.flot.stack.js"></script>
<script src="../../resource/js/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../../resource/js/jquery.flot.orderBars.js"></script>
<script src="../../resource/js/jquery.flot.spline.min.js"></script>
<script src="../../resource/js/curvedLines.js"></script>
<!-- DateJS -->
<script src="../../resource/js/date.js"></script>
<!-- JQVMap -->
<script src="../../resource/js/jquery.vmap.min.js"></script>
<script src="../../resource/js/jquery.vmap.world.js"></script>
<script src="../../resource/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../../resource/js/moment.min.js"></script>
<script src="../../resource/js/daterangepicker.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../resource/js/custom.min.js"></script>
</body>
</html>

