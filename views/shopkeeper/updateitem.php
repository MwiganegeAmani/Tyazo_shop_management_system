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

    <title>Shopkeeper - update Item</title>

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
                        <h3>Update Item</h3>
                    </div>

                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Put your item's detail's correctly</h2>
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
    include '../../src/common/conn.php';
        $id = $_GET['CUST_ID'];
$query1 = "select * from item where itemID = $id";
$run1 = mysqli_query($con,$query1);
$ro = mysqli_fetch_array($run1);
   
                                    ?>
                        
                                    <span class="section">item's Info</span>
                                            <?php 
              if (isset($_POST['send'])) {
    $itemname = $_POST['itemName'];
    $quantity = $_POST['stock'];
    $unitprice = $_POST['unitprice'];
    $totalprice = $_POST['totalprice'];
    $description = $_POST['description'];
    $usersale = $_SESSION['userName'];
    $date = date('Y-m-d');
  $today = date('h:i:sa');
    if ($itemname !="" && $quantity!=""  && $totalprice!="") {
      $query3 = "UPDATE item SET itemName = '$itemname',stock = '$quantity',unitPrice='$unitprice', Price_jumla = '$totalprice',updateBy = '$usersale',updateDate = '$date' WHERE itemID = '$id'";
      $res = mysqli_query($con,$query3);

      $trigger = "INSERT INTO messages VALUES ('','ItemUpdated','$usersale was update an Item,  from ".$ro['itemName']." to $itemname!,".$ro['stock']." to $quantity,".$ro['unitPrice']." to $unitprice,".$ro['Price_jumla']." to $totalprice','$date','$today','')";
       $triggerquery = mysqli_query($con,$trigger);
    if ($res) {
      echo "<div class='alert alert-success'>Congratulation! An Item's details are updated Successfully...</div>";
    }
    else{
      echo "<div class='alert alert-danger'>Aghrrrr! An Item's details are not updated Successfully , Please repeate again!</div>";
    }
    }
  
         }
                                ?>
                                           <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName">Item Name: <span class="required">*</span>
                                        </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="firstName" class="form-control col-md-7 col-xs-12" name="itemName" value="<?php echo $ro['itemName']; ?>" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName"> Stock <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="firstName" class="form-control col-md-7 col-xs-12" name="stock" value="<?php echo $ro['stock']; ?>" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Unit Price (RejaReja)<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="lastName" class="form-control col-md-7 col-xs-12" name="unitprice" value="<?php echo $ro['unitPrice']; ?>" required="required" type="text">
                                        </div>
                                    </div>
                                          <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Price (Jumla)<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="lastName" class="form-control col-md-7 col-xs-12" name="totalprice" value="<?php echo $ro['Price_jumla']; ?>" required="required" type="text">
                                        </div>
                                    </div>
                                       <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Description</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="lastName" class="form-control col-md-7 col-xs-12" name="description" value="<?php echo $ro['description']; ?>" type="text">
                                        </div>
                                    </div>

                            
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a href="viewitem.php" type="btn" class="btn btn-primary">Back</a>
                                            <button id="send" type="submit" class="btn btn-success" name="send">Update</button>
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

