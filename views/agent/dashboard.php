<?php

session_start();

if(!isset( $_SESSION['userName']) && !isset($_SESSION['fullName'])) {
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

    <title>Agent - Dashboard</title>

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
        <?php include '../agent/sideAndTopBarMenu.php' ?>
        <!-- /side and top bar include -->

        <!-- page content -->
           <div class="right_col" role="main">
             <h3>SUMMARY</h3>
             <hr>
            <div class="">
                <div class="row top_tiles">
                         <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                           
                            <div class="icon"><i class="fa fa-money"></i></div>
                          <div class="count">
                                 <?php
                                 $today = date('Y-m-d');
$query11 = "select * from transaction where date = '$today'";
$run11 = mysqli_query($con,$query11);
echo mysqli_num_rows($run11);
                        ?>
                            </div>
                            <h3>All Junior Agent Transactions Today</h3>
                            <p>There are <?php echo mysqli_num_rows($run11); ?> Items Added today.</p>
                        </div>
                    </div>
                      <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                           
                            <div class="icon"><i class="fa fa-dollar"></i></div>
                          <div class="count">
                                 <?php
                                 $today = date('Y-m-d');
$query11 = "select * from seniortrans where date = '$today'";
$run11 = mysqli_query($con,$query11);
echo mysqli_num_rows($run11);
                        ?>
                            </div>
                            <h3>All Senior Agent Transactions Today</h3>
                            <p>There are <?php echo mysqli_num_rows($run11); ?> Items Added today.</p>
                        </div>
                    </div>
                    
                </div>
            </div></div>
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

