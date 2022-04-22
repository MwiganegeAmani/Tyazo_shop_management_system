<?php

session_start();

if(!isset($_SESSION['userName']) && !isset($_SESSION['fullName'])) {
    header("Location:../../index.php");
}


include '../../src/common/conn.php';
$queryq = "SELECT `cashRemain` as max FROM `cash_shopkeeper` order by cashIDS desc";
$runq = mysqli_query($con,$queryq);
$row11 = mysqli_fetch_array($runq);
$cashRemain = $row11['max'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shopkeeper - Add Purchase</title>

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
                        <h3>Add Purchase Transaction</h3>
                    </div>

                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Put your transaction detail's information correctly</h2>
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

                        
                                    <span class="section">Transaction's Info</span>
                  <?php 
              if (isset($_POST['send'])) {
    $itemname = $_POST['itemName'];
    $quantity = $_POST['quantity'];
    $unitprice = $_POST['unitprice'];
$vendorname = $_POST['vendorname'];
     $date = date("Y-m-d");
$NAME = $_SESSION['userName'];
 $today = date('h:i:sa');
  settype($totalPrice, 'integer');
    settype($cashRemain, 'integer');
    settype($quantity, 'integer');
$totalPrice = $quantity * $unitprice;
 $floatnow = $cashRemain-$totalPrice;
    if ($itemname !="" && $quantity!=""  && $vendorname!="") {
      $query = "INSERT INTO purchase VALUES ('','$itemname','$quantity','$unitprice','$totalPrice','$vendorname','$date','$NAME','','')";
      $res = mysqli_query($con,$query);
       $query = "INSERT INTO cash_shopkeeper VALUES ('','purchase','$totalPrice','$floatnow','$today','$date','$NAME','','')";
      $res = mysqli_query($con,$query);

      $trigger = "INSERT INTO messages VALUES ('','PurchaseAdded','".$itemname." was bought by ".$NAME." from $vendorname','$date','$today','')";
       $triggerquery = mysqli_query($con,$trigger);

    if ($res) {
      echo "<div class='alert alert-success'>Congratulation! Purchase Transaction Is Added Successfully!<br>Total Price = Tsh. $totalPrice<br>Cash Remain = Tsh. $floatnow</div>";
    }
    else{
      echo "<div class='alert alert-danger'>Aghrrrr! Transaction is not added Successfully , Please repeate again!</div>";
    }
    }
  
         }
                                ?>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName">Item Name: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                     <input id="lastName" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="itemName" placeholder="Description" required="required" type="text">
                                        </div>
                                        </div>
                                  
                                      
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Quantity:  <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="lastName" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="quantity" placeholder="number only" required="required" type="text">
                                        </div>
                                    </div>
                                       <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Unit Price:  <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="lastName" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="unitprice" placeholder="In Tshs" required="required" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName">Vendor Name: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="department" name="vendorname" class="form-control">
                                                <option value="">Choose Vendor Name</option>
             <?php  
$query = "select * from vendor";
$run = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($run)) {
    ?>
        <option value="<?php echo $row['fullName']; ?>"><?php echo $row['fullName']; ?></option>
   <?php
}
           ?>
                                  </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName"><span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                        </div>
                                    </div>
                                  
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a href="viewpurchase.php" type="btn" class="btn btn-primary">Back</a>
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

