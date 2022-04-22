<?php

session_start();

if(!isset( $_SESSION['userName']) && !isset($_SESSION['fullName'])) {
    header("Location:../../index.php");
}

include '../../src/common/conn.php';
 $id = $_GET['TRANS_ID'];
$query1 = "select * from transaction where transID = $id";
$run1 = mysqli_query($con,$query1);
$ro = mysqli_fetch_array($run1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>agent - view Transactions</title>

    <!-- Bootstrap -->
    <link href="../../resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../resource/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../resource/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../resource/css/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../../resource/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/buttons.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/fixedHeader.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/responsive.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/scroller.bootstrap.css" rel="stylesheet">
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
                        <h3>All Transactions </h3>
                    </div>
<form method="post" action="viewtransactions.php">
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..." name="search">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="btn">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                    </form>
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

                                <p class="text-muted font-13 m-b-30">

                                </p>

                                <table id="datatable" class="table table-striped table-bordered table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Transaction type</th>
                                        <th>Amount</th>
                                        <th>Float Remain</th>
                                        <th>Phone No.</th>
                                        <th>Date</th>
                                        <th>Time</th>

                                        <th colspan="2" style="text-align: center;">Actions</th>
                                    </tr>
                                    </thead>
                                    <?php 
                                    $company = $ro['company'];
$query = "select * from transaction where addedBy = '".$_SESSION['userName']."' AND company = '$company' order by transID DESC";
$run = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($run)) {
   
                                    ?>
                                    <tbody>
                                   <tr><td><?php echo $row['company']; ?></td>
                                    <td><?php echo $row['transType']; ?></td>
                                    <td><?php echo $row['amount']; ?></td>
                                    <td><?php echo $row['floatRemain']; ?></td>
                                    <td><?php echo $row['phoneNo']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                     <td><?php echo $row['time']; ?></td>
                        
                                    <td><a href="updatetransaction.php?TRANS_ID=<?php echo $row['transID']; ?>" type="button" class="btn btn-info">Update</a></td>
                                     </tr>
                                    </tbody>
                                <?php } ?>
                                </table>
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
<!-- iCheck -->
<script src="../../resource/js/icheck.min.js"></script>
<!-- Datatables -->
<script src="../../resource/js/jquery.dataTables.min.js"></script>
<script src="../../resource/js/dataTables.bootstrap.min.js"></script>
<script src="../../resource/js/dataTables.buttons.min.js"></script>
<script src="../../resource/js/buttons.bootstrap.min.js"></script>
<script src="../../resource/js/buttons.flash.min.js"></script>
<script src="../../resource/js/buttons.html5.min.js"></script>
<script src="../../resource/js/buttons.print.min.js"></script>
<script src="../../resource/js/dataTables.fixedHeader.min.js"></script>
<script src="../../resource/js/dataTables.keyTable.min.js"></script>
<script src="../../resource/js/dataTables.responsive.min.js"></script>
<script src="../../resource/js/responsive.bootstrap.js"></script>
<script src="../../resource/js/dataTables.scroller.min.js"></script>
<script src="../../resource/js/jszip.min.js"></script>
<script src="../../resource/js/pdfmake.min.js"></script>
<script src="../../resource/js/vfs_fonts.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../resource/js/custom.min.js"></script>
</body>
</html>
