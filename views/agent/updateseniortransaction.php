<?php

session_start();

if(!isset($_SESSION['userName']) && !isset($_SESSION['fullName'])) {
    header("Location:../../index.php");
}


include '../../src/common/conn.php';
 $companytype = $_GET['TRANS_ID'];
$queryq = "SELECT * FROM `seniortrans` where StransID = '$companytype'";
$runq = mysqli_query($con,$queryq);
$row1 = mysqli_fetch_array($runq);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Senior Agent - Update transaction</title>

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
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Update Transaction</h3>
                    </div>

                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Put your Transaction detail's correctly</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                              
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form class="form-horizontal form-label-left" novalidate method="post">

                                                              <?php 
              if (isset($_POST['tuma'])) {
                $company = $_POST['companytype'];
                $floatremain = $_POST['floatremain'];
    $transtype = $_POST['transtype'];
    $amount = $_POST['amount'];
    $phone = $_POST['phone'];
    $date = date('Y-m-d');
    $time = date('h:i:sa');
    $amount1 = $row1['amount'];
    $addedBy = $_SESSION['userName'];
    settype($amount1, 'integer');
    settype($floatremain, 'integer');
    settype($amount, 'integer');
    $floatremainn =  $amount1 + $floatremain;
    $floatnow = $floatremainn-$amount;
echo $amount1 .','. $floatnow .','.$floatremainn;
    if ($transtype !="" && $phone!="") {
      $query = "INSERT INTO messages VALUES ('','TransactionUpdated','$addedBy was update a transaction from ".$row1['company']." to $company, ".$row1['transType']." to $transtype,".$row1['floatRemain']." to $floatnow,".$row1['amount']." to $amount','$date','$time','')";
      $res = mysqli_query($con,$query);

 $query3 = "UPDATE seniortrans SET amount = '$amount', floatRemain = '$floatnow',transType='$transtype',phoneNo='$phone',updateBy='$addedBy',company='$company',updateDate='$date' WHERE StransID = '$companytype'";

      $res3 = mysqli_query($con,$query3);
    if ($res3) {
      echo "<div class='alert alert-success'>Congratulation! A Transaction is Updated Successfully..<br>Float Remain: Tshs. $floatnow</div>";
    }
    else{
      echo "<div class='alert alert-danger'>Aghrrrr! A Transaction is not Updated Successfully , Please repeate again!</div>";
    }
    }
  
         }
                                ?>
                                         <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName">company Type: <span class="required">*</span>
                                        </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="firstName" class="form-control col-md-7 col-xs-12" name="companytype" value="<?php echo $row1['company']; ?>" type="text" >
                                        </div>
                                    </div>
                                     <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName"> Float Remain <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="firstName" class="form-control col-md-7 col-xs-12" name="floatremain" value="<?php echo $row1['floatRemain']; ?>" type="text" >
                                        </div>
                                    </div>
                                     <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName"> Transaction Type <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="firstName" class="form-control col-md-7 col-xs-12" name="transtype" value="<?php echo $row1['transType']; ?>" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName"> Amount <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="firstName" class="form-control col-md-7 col-xs-12" name="amount" value="<?php echo $row1['amount']; ?>" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName"> Phone Number <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="firstName" class="form-control col-md-7 col-xs-12" name="phone" value="<?php echo $row1['phoneNo']; ?>" type="text">
                                        </div>
                                    </div>



                            
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
<a href="viewsenior.php" type="btn btn-info" class="btn btn-primary">Back</a>
                                            <button id="tuma" type="submit" class="btn btn-success" name="tuma">Update</button>
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

