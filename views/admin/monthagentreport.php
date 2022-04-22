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

    <title>Tyazo Mdodo Investiment Co Ltd</title>

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

<body>
<div class="container-fluid">
    <div class="bg-success">
           <div role="main" class="mx-3">
             <h1>Monthly's Report</h1>
             <button onclick="convert()" class="btn btn-info">Print Report</button>

             <hr>
             <h3>Senior Agent - Cash</h3>
            <table id="datatable" class="table table-striped table-hover table-responsive">
                                    <thead >
                                    <tr style="background: black; color: white;">
                                        <th>Company Name</th>
                                        <th>Transaction Type</th>
                                        <th>Amount</th>
                                        <th>Cash Remain</th>
                                        <th>Added By</th>    
                                        <th>Date&Time</th>
                                        <th>Updated By</th>
                                    </tr>
                                    </thead>
                                    <?php 
$today = date('Y-m-d');
$month = date('Y-m-d',strtotime('-28 days'));

$query = "select * from senior_cash where date BETWEEN '$month' AND '$today' order by ScashID DESC";
$run = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($run)) {
   
                                    ?>
                                    <tbody>
                                   <tr class="bg-dark"><td><?php echo $row['company']; ?></td>
                                    <td><?php echo $row['transType']; ?></td>
                                    <td><?php echo $row['amount']; ?></td>
                                    <td><?php echo $row['cashRemain']; ?></td>
                                      <td><?php echo $row['addedBy']; ?></td>
                                     <td><?php echo $row['date'].','.$row['time']; ?></td>
                                     <td><?php echo $row['UpdatedBy']; ?></td>

                                     </tr>
                                    </tbody>
                                <?php } ?>
                                </table>
 <hr>
             <h3>Junior Agent - Cash</h3>
            <table id="datatable" class="table table-striped table-hover table-responsive">
                                    <thead >
                                    <tr style="background: black; color: white;">
                                        <th>Company Name</th>
                                        <th>Transaction Type</th>
                                        <th>Amount</th>
                                        <th>Cash Remain</th>
                                        <th>Added By</th>    
                                        <th>Date&Time</th>
                                        <th>Updated By</th>
                                    </tr>
                                    </thead>
                                    <?php 
$today = date('Y-m-d');

$query = "select * from cash where date BETWEEN '$month' AND '$today' order by cashID DESC";
$run = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($run)) {
   
                                    ?>
                                    <tbody>
                                   <tr class="bg-dark"><td><?php echo $row['company']; ?></td>
                                    <td><?php echo $row['transType']; ?></td>
                                    <td><?php echo $row['amount']; ?></td>
                                    <td><?php echo $row['cashRemain']; ?></td>
                                      <td><?php echo $row['addedBy']; ?></td>
                                     <td><?php echo $row['date'].','.$row['time']; ?></td>
                                     <td><?php echo $row['UpdatedBy']; ?></td>

                                     </tr>
                                    </tbody>
                                <?php } ?>
                                </table>
                                <hr>
             <h3>Senior Agent - Transactions</h3>
            <table id="datatable" class="table table-striped table-hover table-responsive">
                                    <thead >
                                    <tr style="background: black; color: white;">
                                        <th>Company Name</th>
                                        <th>Transaction Type</th>
                                        <th>Amount</th>
                                        <th>Cash Remain</th>
                                        <th>Added By</th>    
                                        <th>Date&Time</th>
                                        <th>Updated By</th>
                                    </tr>
                                    </thead>
                                    <?php 
$today = date('Y-m-d');

$query = "select * from seniortrans where date BETWEEN '$month' AND '$today' order by StransID DESC";
$run = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($run)) {
   
                                    ?>
                                    <tbody>
                                   <tr class="bg-dark"><td><?php echo $row['company']; ?></td>
                                    <td><?php echo $row['transType']; ?></td>
                                    <td><?php echo $row['amount']; ?></td>
                                    <td><?php echo $row['floatRemain']; ?></td>
                                      <td><?php echo $row['addedBy']; ?></td>
                                     <td><?php echo $row['date'].','.$row['time']; ?></td>
                                     <td><?php echo $row['updateBy']; ?></td>
                                     </tr>
                                    </tbody>
                                <?php } ?>
                                </table>
                                 <hr>
             <h3>Junior Agent - Transactions</h3>
            <table id="datatable" class="table table-striped table-hover table-responsive">
                                    <thead >
                                    <tr style="background: black; color: white;">
                                        <th>Company Name</th>
                                        <th>Transaction Type</th>
                                        <th>Amount</th>
                                        <th>Cash Remain</th>
                                        <th>Added By</th>    
                                        <th>Date&Time</th>
                                        <th>Updated By</th>
                                    </tr>
                                    </thead>
                                    <?php 
$today = date('Y-m-d');

$query = "select * from transaction where date BETWEEN '$month' AND '$today' order by transID DESC";
$run = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($run)) {
   
                                    ?>
                                    <tbody>
                                   <tr class="bg-dark"><td><?php echo $row['company']; ?></td>
                                    <td><?php echo $row['transType']; ?></td>
                                    <td><?php echo $row['amount']; ?></td>
                                    <td><?php echo $row['floatRemain']; ?></td>
                                      <td><?php echo $row['addedBy']; ?></td>
                                     <td><?php echo $row['date'].','.$row['time']; ?></td>
                                     <td><?php echo $row['UpdatedBy']; ?></td>
                                     </tr>
                                    </tbody>
                                <?php } ?>
                                </table>
            </div>
        <!-- /page content -->

        <!-- footer content include -->
        <?php include '../partPage/footer.html' ?>
        <!-- /footer content include -->
    </div>
</div>
<script type="text/javascript">
    function convert(){
      return window.print();
    }
</script>

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

